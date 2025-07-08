<?php

namespace App\Http\Controllers;

use App\Models\Bookings;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\WebpageController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookingController;

class BookingController extends Controller
{
    public function index(){
        $query = Bookings::select('bookings.*','user.name as user_name');
        $query->leftJoin('users', 'bookings.user_id','=','users.id');
        $data = $query->get();
        return view('AdminDashboard.Bookings.index',['data'=>$data]);
    }
    public function userBookings(){
        $query = Bookings::select('bookings.*','users.name as user_name');
        $query->leftJoin('users','bookings.user_id','=',"users.id");
        $query->where('bookings.user_id', Auth::user()->id);
        $data = $query->get();
        return view('UserDashboard.Bookings.index',['data'=>$data]);
    }
    public function add(){
        $data = User::get();
        return view('AdminDashboard.Bookings.addEdit',['data'=>$data]);
    }
    public function save(Request $request){
        $user = new Bookings([
            'name' => $request->get('booking_name'),
            'booking_datetime' =>$request->get('booking_on'),
            'status'=>$request->get('booking_on'),
            'user_id' =>Auth::user()->user_type ==1 ? $request->get('user_name'):Auth::user()->id
        ]);
        $users->save();
        if(Auth::user()->user_type == 1){
            $route = 'booking.all';
        }else{
            $route = 'booking.my';
        }
        return redirect()->route($route);
    }
    public function getBookingById($id){
        $data = User::get();
        $booking = Bookings::find($id);
        return view('AdminDashboard.Bookings.addEdit',['data'=>$data,'booking'=>$booking]);
    }
    public function updateBookingById(Request $request,$id){
        $booking = Bookings::find($id);
        $booking->name = $request->get('booking_name');
        $booking->booking_datetime = $request->get('booking_on');
        $booking->status= $request->get('status');
        $booking->user_id = Auth::user()->user_type ==1 ? $request->get('user_name'):Auth::user()->id;
        $booking->save();
        if(Auth::user()->user_type == 1){
            $route = 'booking.all';
        }else{
            $route = 'booking.my';
        }
        return redirect()->route($route);
    }
    public function viewDelete($id){
        if(Auth::user()->user_type == 1){
            $view = 'AdminDashboard.Bookings.delete';
        }else{
            $view = 'UserDashboard.Bookings.delete';
        }
        return view($view);
    }
    public function delete($id){
        $statu = Bookings::where('id', $id)->delete();
        if(Auth::user()->user_type == 1){
            $route = 'booking.all';
        }else{
            $view = 'booking.my';
        }
        return redirect()->route($route);
    }
}
