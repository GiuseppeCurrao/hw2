<?php

use Illuminate\Routing\Controller as  BaseController;

class RegisterController extends BaseController{

    public function create(){
        $request=request();

        return Donor::create([
            'id'=> rand(2, 999999),
            'name' =>$request->name,
            'cognome' =>$request->surname,
            'cf' =>$request->cf,
            'mail' =>$request->mail,
            'psw'=>$request->password
        ]);
        return redirect("login");
    }

    public function checkCf($query){
        $exist= Donor::where('cf', $query)->exists();
        return ['exist'=> $exist];
    }

    public function checkMail($query){
        $exist= Donor::where('mail', $query)->exists();
        return ['exist'=> $exist];
    }

    public function view(){
        return view("register");
    }
}
?>