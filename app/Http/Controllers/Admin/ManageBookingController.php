<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;

class ManageBookingController extends Controller
{
    public function index () {
        $data = Booking::all()->where('status_booking', 'MENUNGGU');
        return view('pages.booking.list-pengajuan-customer', ['data' => $data]);
    }

    public function rejectPengajuan($id){
        $data = Booking::findOrFail($id);
        $data->update(['status_booking' => "DITOLAK"]) ;
        return redirect()->back()->with('status', 'berhasil menolak pengajuan');
    }

    public function acceptPengajuan($id){
        $data = Booking::findOrFail($id);
        $data->update(['status_booking' => "DITERIMA" ] );
        return redirect()->back()->with('status', 'berhasil mengubah pengajuan, selanjutnya booking masuk ke menu service');
    }
    public function detailPengajuan($id){
        $data = Booking::with('User')->findOrFail($id);
        return view('pages.booking.detail-pengajuan', ['data'=>$data]);
    }
}
