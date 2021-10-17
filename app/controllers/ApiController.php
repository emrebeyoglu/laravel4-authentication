<?php

class ApiController extends BaseController {

    function login(){
        $data = [
            'username' => Input::get('username'),
            'password' => Input::get('password'),
        ];

        $validator = Validator::make($data,[
            'username'  => 'required',
            'password'  => 'required'
        ]);

        if( $validator->fails() ) {
            return Redirect::to('/login')->with('error','Tüm alanları doldurun!');
        }

        if( Auth::attempt($data) ) {
            return Redirect::to('/')->with('success','Başarıyla giriş yapıldı.');
        }else{
            return Redirect::to('/login')->with('error','Kullanıcı adı veya parola hatalı!');
        }
        
    }

}


?>