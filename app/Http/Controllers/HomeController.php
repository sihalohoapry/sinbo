<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Sparepart;
use App\Models\TransactionSparepart;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users= User::all()->where('role', 'CUSTOMER')->count();
        $spareparts= Sparepart::all()->where('status_sparepart', 'AKTIF')->count();
        $profits= TransactionSparepart::all()->sum('profit');
        $allBooking= Booking::all()->count();
        $waitBooking= Booking::all()->where('status_booking', 'MENUNGGU')->count();
        $accptBooking= Booking::all()->where('status_booking', 'DITERIMA')->count();
        $rejectBooking= Booking::all()->where('status_booking', 'DITOLAK')->count();

        $allBookingByIdUser= Booking::all()->where('user_id', Auth::user()->id)->count();
        $BookingByIdUserAndStatusWait= Booking::all()->where('user_id', Auth::user()->id )->where('status_booking', 'MENUNGGU') ->count();
        $BookingByIdUserAndStatusReject= Booking::all()->where('user_id', Auth::user()->id )->where('status_booking', 'DITOLAK') ->count();

        return view('pages.dashboard-admin', [
            'users' =>$users,
            'spareparts' =>$spareparts,
            'profits' =>$profits,
            'allBooking' =>$allBooking,
            'waitBooking' =>$waitBooking,
            'accptBooking' =>$accptBooking,
            'rejectBooking' =>$rejectBooking,
            'allBookingByIdUser' =>$allBookingByIdUser,
            'BookingByIdUserAndStatusWait' =>$BookingByIdUserAndStatusWait,
            'BookingByIdUserAndStatusReject' =>$BookingByIdUserAndStatusReject,
        ]);
    }
}
