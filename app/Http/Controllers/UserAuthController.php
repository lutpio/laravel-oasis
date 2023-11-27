<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserAuthController extends Controller
{
    public function index_register(){
        return view('register', [
            'title'=> 'Register'            
        ]);
    }
    
    public function registration( Request $request ){
        $validate = $request->validate([
            'name' => 'required|min:4|max:255',
            'class' => 'required|min:3',
            'email' => 'required|email:dns|unique:users',
            'password'=> 'required|min:5|max:255|confirmed',
        ]);
       
        // $data = new User;
        // $data->name = $request->name;
        // $data->email = $request->email;
        // $data->role = 'student';
        // $data->password = Hash::make($request->password);
        // $data->save();
        $validate['password'] = Hash::make($validate['password']);
        $data = User::create([
            "name" => $validate["name"],
            "email" => $validate["email"],
            "role" => "student",
            "password" => $validate["password"]
        ]);

        // $data_student = array(
        //     'user_id' => $data->id,
        //     'class' => strtoupper($request->class),     
        // );
        Student::create([
            'user_id' => $data->id,
            'class' => strtoupper($request->class),
        ]);

        return redirect('/')->with('success', 'Berhasil daftar, silahkan login');

        
    }

    public function authenticate(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email:dns'],
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            // preceptor == pembina, instructor == pelatih            
            return redirect()->intended('/dashboard');            
           

        }

        return back()->with('error','Email atau password salah');
    }

    public function logout(Request $request){
        Auth::logout();
 
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/');
    }
}

