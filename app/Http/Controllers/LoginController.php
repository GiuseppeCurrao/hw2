<?php

use Illuminate\Routing\Controller as BaseController;


class LoginController extends BaseController
{
    public function login(){
        if(session('donors_id')!=null){
            return redirect('donatori');
        }else if(session('perss_id')!=null){
            return redirect('personale');
        }else{
            return view('login');
        }

    }

    public function checkLogin(){

        $donor=Donor::where('cf', request('cf'))->where('psw', request('password'))->first();
        if(isset($donor)){
            Session::put('donors_id', $donor->id);
            return redirect('donatori');
        }else{
            return redirect('login')->withInput();
        }
    }

    public function checkLoginPers(){
        $pers=Pers::where('id', request('id_dip'))->where('psw', request('mpassword'))->first();
        if(isset($pers)){
            Session::put('perss_id', $pers->id);
            return redirect('personale');
        }else{
            return redirect('login')->withInput();
        }

    }

    public function logout(){
        Session::flush();
        return redirect('login');
    }
}
