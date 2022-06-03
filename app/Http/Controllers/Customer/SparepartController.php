<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Sparepart;
use Illuminate\Http\Request;

class SparepartController extends Controller
{

    public function index(){
        $data = Sparepart::all();
        $data = $data->intersect(Sparepart::whereIn('id', [1,2,3,4])->get());
        return view('welcome', ['data'=>$data]);
    }
    
    public function allSparepart(Request $request){
        $filterKeyword = $request->get('keyword');
        $data = Sparepart::all();
        if($filterKeyword){
            $data =Sparepart::where('name_sparepart','LIKE',"%$filterKeyword%")->get();
        }
        // $sparepart = Sparepart::all();
        return view('pages.customer.sparepart', ['data'=>$data]);
    }


    public function detailSparepart($id){
        $data = Sparepart::where('slug', $id)->firstOrFail();
        return view('pages.customer.detail-sparepart',['data'=>$data]);
    }

}
