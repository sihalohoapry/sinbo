<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\OrderSparepart;
use App\Models\OrderSparepartBooking;
use App\Models\Service;
use App\Models\Sparepart;
use Illuminate\Http\Request;
use PDF;

use function PHPUnit\Framework\isNull;

class ServiceController extends Controller
{
    public function listService(){
        $data = Booking::all()->where('status_booking', 'DITERIMA')->where('status_service', 'MENUNGGU');
        return view('pages.booking.list-service-customer', ['data'=>$data]);
    }

    public function serviceCustomer($id) {
        $data = Booking::with('User')->findOrFail($id);
        $spareparts = Sparepart::all();
        return view('pages.booking.service-customer', [
            'data'=>$data,
            'spareparts'=>$spareparts
        ],
        );
    }

    public function transactionService(Request $request, $id) {
        $data = $request->all();
        
        if(!empty($data['name_sparepart'])){
            if($data['name_sparepart'] > 0) {
                foreach($data['name_sparepart'] as $item => $value){
                    $sparepart = Sparepart::findOrFail($value);
                    if ($sparepart->stock_sparepart < $data['qty'][$item] ){
                        return redirect()->route('create-transaction')->with('fail','Gagal melakukan transaksi dikarenakan stok kurang');
                    } else {
                        $dataSparepart = array(
                            'booking_id' => $id,
                            'sparepart_id' => $data['name_sparepart'][$item],
                            'qty' => $data['qty'][$item],
                            'price' => $sparepart->selling_price,
                            'garage_buy_price' => $sparepart->purchase_price,
                            
                        );
                        $dataSparepart['grand_price'] = $dataSparepart['price'] * $data['qty'][$item];
                        $dataSparepart['profit'] = $dataSparepart['price'] * $data['qty'][$item] - $dataSparepart['garage_buy_price'] * $data['qty'][$item];
                
                        $stok = $sparepart->stock_sparepart - $data['qty'][$item];
                        $sparepart->update(['stock_sparepart' => $stok ]);
                        OrderSparepartBooking::create($dataSparepart);
                    }
        
                }
            }
        }



        foreach($data['name_service'] as $item => $value) {
            $dataService = array(
                'booking_id' => $id,
                'name_service' => $data['name_service'][$item],
                'service_price' => $data['service_price'][$item],
            );

            Service::create($dataService);
        }
        $booking = Booking::findOrFail($id);
        $booking->update(['status_service' => 'SELESAI']);
        $booking->update(['status_booking' => 'SELESAI SERVICE']);
        return redirect()->route('list-service-customer')->with('status','Anda telah menyelesaikan service, silahkan lihat pada menu history service');


    }

    public function listHistoryService() {
        $bookings = Booking::all()->where('status_service', 'SELESAI');
        return view('pages.booking.list-history-service', ['data'=>$bookings]);
    }

    public function detailService($id){
        $booking = Booking::findOrFail($id);
        $sparepart = OrderSparepartBooking::where('booking_id', $id)->with('Sparepart')->get();
        $totalOrderSpareparrt = OrderSparepartBooking::all()->where('booking_id', $id)->sum('grand_price');
        $service = Service::where('booking_id', $id)->get();
        $totalService = Service::all()->where('booking_id', $id)->sum('service_price');
        $allTotal = $totalOrderSpareparrt + $totalService;

        return view('pages.booking.detail-service',[
            'booking' => $booking,
            'sparepart' => $sparepart,
            'service' => $service,
            'totalOrderSpareparrt' => $totalOrderSpareparrt,
            'totalService' => $totalService,
            'allTotal' => $allTotal,
        ]);
    }
    public function cetakService($id){
        $booking = Booking::findOrFail($id);
        $sparepart = OrderSparepartBooking::where('booking_id', $id)->with('Sparepart')->get();
        $totalOrderSpareparrt = OrderSparepartBooking::all()->where('booking_id', $id)->sum('grand_price');
        $service = Service::where('booking_id', $id)->get();
        $totalService = Service::all()->where('booking_id', $id)->sum('service_price');
        $allTotal = $totalOrderSpareparrt + $totalService;

        	$pdf = PDF::loadview('pages.booking.download-pdf',[
                'booking' => $booking,
                'sparepart' => $sparepart,
                'service' => $service,
                'totalOrderSpareparrt' => $totalOrderSpareparrt,
                'totalService' => $totalService,
                'allTotal' => $allTotal,
            ]);
	        return $pdf->download('service-pdf');


    }

    public function downloadHistoryService() {
        $bookings = Booking::with('User')->where('status_service', 'SELESAI')->get();
        $pdf = PDF::loadview('pages.booking.download-history-service',[
            'data'=>$bookings
        ]);
        return $pdf->stream('history-service-pdf');
    }


}

