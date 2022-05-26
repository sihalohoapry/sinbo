<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Http\Requests\Customer\CreateBookingRequest;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingCustomerController extends Controller
{
    public function jadwalService(){

        $data = Booking::all()->where('status_booking', 'DITERIMA');
        return view('pages.customer.jadwal-service-bengkel', ['data'=>$data]);

        
        // $jadwalService = Booking::with('User')->where('status_booking', 'DITERIMA');
        // return view('pages.customer.jadwal-service-bengkel',['bookings'=>$jadwalService]);
        
    }
    public function listPengajuan(){
        $bookings = Booking::all()->where('user_id', Auth::user()->id);
        return view('pages.customer.list-pengajuan', ['bookings' => $bookings]);
        
    }
    

    public function createPengajuanBooking() {
        return view('pages.customer.create-pengajuan');
    }

    public function pengajuanBooking(CreateBookingRequest $request){
        $data = $request->all();
        $data['user_id'] = Auth::user()->id;
        Booking::create($data);
        return redirect()->route('list-pengajuan')->with('status', 'berhasil mengajukan booking, silahkan cek status secara berkala');

    }

    public function deleteBooking($id) {
        $data = Booking::findOrFail($id);
        if ($data->status_booking == 'MENUNGGU'){
            $data->delete();
            return redirect()->back()->with('status', 'pengajuan booking service berhasil di hapus');
        }else{
            return redirect()->back()->with('fail', 'gagal menghapus dikarenakan pengajuan mu sedang di proses. Silahkan hubungi admin untuk membatalkan');

        }
    }
    
    public function listJadwaServiceBangkel(){
        $data = Booking::all()->where('status_booking', 'DITERIMA');
        return view('pages.booking.list-service-customer', ['data'=>$data]);
    }

}
