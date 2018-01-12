<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\DB;



class ProfilController extends Controller
{
    public function create(){
        if(Auth::check()){
            $user = DB::table('users')->first();
            return view('profil',['user'=>$user]);
        }else{
            return view('auth\login');
        }
    }
    public function edit(User $user){
        if(Auth::check()){
            return view('profiledit',['user' => $user]);
        }else{
            return view('auth\login');
        }
    }
    public function update(Request $request, $id){

        $this->validate($request, [
           'name' =>'required',
            'email' =>'required',
            'password' =>'required',

        ]);

        DB::table('users')
            ->where('id',$id)
            ->update(
                ['name' => $request['name'],
                 'email' =>$request['email'],
                    'password'=>$request['password']

            ]);

        //dump(DB::table('users')->where('id', $id));die();
        return view("/profil",['user'=> User::find($id)]);

        /* if($request->has('password')) {
            $password = $request->password;

            $user = [
                'name' => $request->name,
                'email' => $request->email,
                'password' => $password,

            ];
        }else{
            $user = [
                'name' => $request->name,
                'email' => $request->email,
                ];
        }
        $update = User::find($id)->update($user);
        if($update)
            return redirect('home');
        else
            return redirect()->back()->withInput();*/
    }
}
