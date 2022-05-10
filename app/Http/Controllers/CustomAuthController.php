<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Driver;
use App\Models\Reservation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class CustomAuthController extends Controller
{
    public function login(){
        return view("auth.login");
    }

    public function registration(){
        return view("auth.registration");
    }

    public function registerUser(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'license'=>'required',
            'phone'=>'required',
            'password'=>'required'
        ]);
        $user= new User();
        $user-> name =$request->name ;
        $user-> email =$request->email ;
        $user-> license =$request->license ;
        $user-> phone =$request->phone ;
        $user-> password = Hash::make($request->password);
        $res = $user->save();
        if($res){
            return back()->with('success','You have registered successfully');
//            return redirect('dashboard');
        }
        else{
            return back()->with('fail','Something wrong');
        }
    }

    public function loginUser(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);
        $user = User::where('email','=',$request->email)->first();
        if ($user){
            if (Hash::check($request->password,$user->password)){
                $request->session()->put('loginId',$user->id);
                return redirect('dashboard');
            }else{
                return back()->with('fail','password not matches');
            }
        }else{
            return back()->with('fail','You need to register your email first');
        }
    }
    public function dashboard(){
        $data = array();
        if(Session::has('loginId')){
            $data = User::where('id','=', Session::get('loginId'))->first();
        }
        return view('auth.dashboard',compact('data'));
    }
    public function logout(){
        if(Session::has('loginId')) {
            Session::pull('loginId');
            return redirect('login');
        }
        }

    public function index(){
        $cars = Car::all()->where('isHighligted',1);
        return view('auth.index')->with('cars',$cars);
    }

//    public function listAll(){
//        $cars = DB::table('cars')->where('isActive',1)->simplePaginate(8);
//        return view('auth.rent')->with('cars', $cars);
//    }
    public function list(){
        return view('auth.menu');
    }

    public function rent(){
        return view('auth.rent');
    }
    public function rentRequest(Request $request)
    {
        $request->validate([
            'pick_up_location' => 'required',
            'pick_up_date' => 'required',
            'return_location' => 'required',
            'return_date' => 'required',
        ]);
        $reservation = new Reservation();
        $reservation->pick_up_location = $request->pick_up_location;
        $reservation->pick_up_date = $request->pick_up_date;
        $reservation->return_location = $request->return_location;
        $reservation->return_date = $request->return_date;

        $res = $reservation->save();
        if ($res) {
            return back()->with('success', 'Booking Completed');
        } else {
            return back()->with('fail', 'Something wrong');
        }
    }
    public function driver(){
        return view('auth.driver');
    }

    public function driverRent(){
        return view('auth.driverrent');
    }
    public function driverRequest(Request $request){
        $request->validate([
            'remarks'=>'required',
        ]);
        $driver= new Driver();
        $driver->remarks = $request->remarks;
        $res = $driver->save();
        if($res){
            return back()->with('success','Booking Completed');
//            return redirect('dashboard');
        }
        else{
            return back()->with('fail','Something wrong');
        }
    }
    public function driverRentOne(){
        return view('auth.driverrentone');
    }
    public function driverRequestOne(Request $request){
        $request->validate([
            'remarks'=>'required',
        ]);
        $driver= new Driver();
        $driver->remarks = $request->remarks;
        $res = $driver->save();
        if($res){
            return back()->with('success','Booking Completed');
//            return redirect('dashboard');
        }
        else{
            return back()->with('fail','Something wrong');
        }
    }
    public function driverRentTwo(){
        return view('auth.driverrenttwo');
    }
    public function driverRequestTwo(Request $request){
        $request->validate([
            'remarks'=>'required',
        ]);
        $driver= new Driver();
        $driver->remarks = $request->remarks;
        $res = $driver->save();
        if($res){
            return back()->with('success','Booking Completed');
//            return redirect('dashboard');
        }
        else{
            return back()->with('fail','Something wrong');
        }
    }
    }

