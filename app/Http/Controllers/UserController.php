<?php

namespace App\Http\Controllers;

use App\Models\ListUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function authenticate(Request $request)
    {
        $credeciales = $request->only('correo','password');
        if(Auth::attempt($credeciales)){
            $request->session()->regenerate();
            return redirect('/mi-lista');
        }else{
            return back()->with('mensaje','Error al inciar sesión');
        }
    }
    public function logOut()
    {
        Auth::logout();
        return redirect('login');
    }   

    public function miLista()
    {
        $data = [
            "list" => ListUser::where('user_id',auth()->user()->id)->get(),
        ];
        return view('listsUsers.miList',$data);
    }
   
    public function login(){
        return view('login.login');
    }
    public function registro(){
        return view('login.registro');
    }
    public function register (Request $request)
    {
        $validator=$this->validator($request);
        if($validator->fails()){
            return back()->withInput()->withErrors($validator);
        }else{
           $nuevo = $this->store($request);
            return redirect('login')->with('mensaje','Se agregó correctame el usuario');
        }
    }
    public function store(Request $request)
    {
        $user = User::create([
            'nombre' => $request->get('nombre'),
            'correo' => $request->get('correo'),
            'password' => Hash::make($request->get('password'))
        ]);
        return $user;
    }


    public function validator(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'nombre' => 'required|string|max:100',
            'correo' => 'required|string|email|unique:users',
            'password' => 'required|string|min:6'
        ]);
        return $validator;
    }
}
