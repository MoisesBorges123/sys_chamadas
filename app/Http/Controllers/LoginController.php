<?php

namespace App\Http\Controllers;

use App\Models\Sprofessor;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function login(){
       
        return view('auth.login');
    }
    public function logon(Request $request){
        
        if(!empty($request->login) && !empty($request->password)){          
            $user = User::where('USUARIO',$request->login)->where('SENHA',$request->password)->first();
            if(!empty($user->idPROFESSOR)){
                session(['professor'=>$user->idPROFESSOR]);
                $professor = Sprofessor::find($user->idPROFESSOR);
                session(['nome'=>$professor->NOME]);
                return redirect()->route('admin.dashboard');
            }else{
                return redirect()->back();    
            }
        }else{
            return redirect()->back();
        }
    }
    public function logout(){
        Session::flush();
        return redirect()->route('login');
    }
}
