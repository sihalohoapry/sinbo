<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function listService(){
        $data = Booking::all()->where('status_booking', 'DITERIMA');
        return view('pages.booking.list-service-customer', ['data'=>$data]);
    }
}
