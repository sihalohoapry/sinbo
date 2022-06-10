<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SparepartInputRequest;
use App\Models\OrderSparepart;
use App\Models\Sparepart;
use App\Models\TransactionSparepart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

use function PHPUnit\Framework\isEmpty;
use PDF;
class SparepartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $spareparts = Sparepart::all();
        return view('pages.sparepart.sparepart',[
            'spareparts' => $spareparts,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.sparepart.creaet-sparepart');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SparepartInputRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->name_sparepart);
        $data['foto_sparepart'] = $request->file('foto_sparepart')->store('assets/foto_sparepart','public');
        Sparepart::create($data);
        return redirect()->route('sparepart.index')->with('status','Berhasil Menambahkan Sparepart');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Sparepart::findOrFail($id);
        return view('pages.sparepart.show-detail', [
            'sparepart' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Sparepart::findOrFail($id);
        return view('pages.sparepart.edit-sparepart', [
            'sparepart' => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SparepartInputRequest $request, $id)
    {
        $data = $request->all();
        $item = Sparepart::findOrFail($id);
        $foto = $item->foto_sparepart;
        if($request->foto_sparepart){
            if ($foto){
                Storage::disk('public')->delete($foto);
            }
            $data['foto_sparepart'] = $request->file('foto_sparepart')->store('assets/foto_sparepart','public');
        }else{
            unset($data['foto_sparepart']);
        }


        $item->update($data);
        return redirect()->route('sparepart.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function listTransaction(){
        $transactions = TransactionSparepart::all();
        return view('pages.sparepart.history-transaction-sparepart', [
            'transactions' =>$transactions,
        ]);
    }

    public function createTransaction(){
        $spareparts = Sparepart::all();
        return view('pages.sparepart.creaet-transaction',[
            'spareparts' => $spareparts
        ]);
    }

    // public function getPriceSparapart(Request $request){
    //     $category = Sparepart::findOrFail($request->id);
    //     $price = $category->selling_price;
    //     return response()->json($price);
    // }

    public function saveTransaction(Request $request) {
        $data = $request->all();
        $transaction = new TransactionSparepart();
        $transaction->customer_name = $data['customer_name'];
        $transaction->save();
        $addProfitTransaction = TransactionSparepart::findOrFail($transaction->id);


        foreach($data['name_sparepart'] as $item => $value){
            $sparepart = Sparepart::findOrFail($value);
            if ($sparepart->stock_sparepart < $data['qty'][$item] ){
                $addProfitTransaction->delete();
                return redirect()->route('create-transaction')->with('fail','Gagal melakukan transaksi dikarenakan stok kurang');
            } else {
                $data2 = array(
                    'sparepart_id' => $data['name_sparepart'][$item],
                    'transaction_sparepart_id' => $transaction->id,
                    'qty' => $data['qty'][$item],
                    'price' => $sparepart->selling_price,
                    'garage_buy_price' => $sparepart->purchase_price,
                );
                $data2['grand_price'] = $data2['price'] * $data['qty'][$item];
                $data2['profit_order'] = $data2['price'] * $data['qty'][$item] - $data2['garage_buy_price'] * $data['qty'][$item];
                $stok = $sparepart->stock_sparepart - $data['qty'][$item];
                $sparepart->update(['stock_sparepart' => $stok ]);
                OrderSparepart::create($data2);
            }

        }
        $allTransactionSparepart = OrderSparepart::where('transaction_sparepart_id', $transaction->id)->sum('profit_order');
        $addProfitTransaction->update(['profit' => $allTransactionSparepart ]);
        return redirect()->route('history-transaksi')->with('status','Berhasil melakukan transaksi');
    }

    public function detailTransaction($id) {
        $transactions = TransactionSparepart::findOrFail($id);
        $orders = OrderSparepart::with('Sparepart')->where('transaction_sparepart_id', $id)->get();
        $totalOrders = OrderSparepart::where('transaction_sparepart_id', $id)->sum('grand_price');
        return view('pages.sparepart.show-detail-transactions', [
            'transactions' => $transactions,
            'orders' => $orders,
            'totalOrders' => $totalOrders,
        ]);
    }

    public function downloadTransaction($id) {
        $transactions = TransactionSparepart::findOrFail($id);
        $orders = OrderSparepart::with('Sparepart')->where('transaction_sparepart_id', $id)->get();
        $totalOrders = OrderSparepart::where('transaction_sparepart_id', $id)->sum('grand_price');
        $pdf = PDF::loadview('pages.sparepart.download-pdf',[
            'transactions' => $transactions,
            'orders' => $orders,
            'totalOrders' => $totalOrders,
        ]);
        return $pdf->download('transaction-pdf');
    }
    public function downloadAllTransaction() {
        $transactions = TransactionSparepart::all();
        $transactionLaba = TransactionSparepart::all()->sum('profit');
        $pdf = PDF::loadview('pages.sparepart.download-pdf-sparepart',[
            'transactions' => $transactions,
            'transactionLaba' => $transactionLaba,
        ]);
        return $pdf->download('transaction-pdf');
    }
}
