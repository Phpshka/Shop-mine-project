<?php


namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class UserController
{

    public function passwordEdit(){
        if (Auth::user()) {
                return view('password');

        } else {

            return redirect()->back();
        }

    }


    public function  passwordUpdate(Request $request){

        $validate = $request->validate(
            [
                'oldPassword' => 'required|min:8',
                'password' => 'required|min:8|required_with:password_confirmation',

            ]);

        $user = User::find(Auth::user()->id);

        if($user){
if(Hash::check($request['oldPassword'], $user->password) && $validate){
$user->password = Hash::make($request['password']);

$user->save();

    $request->session()->flash('success', 'Ваши данные были успешно изменены!');
    return redirect()->back();

}else{

    $request->session()->flash('error', 'Неверные данные');
    return redirect()->route('password.edit');

}

        }
    }

    public function edit()
    {

        if (Auth::user()) {
            $user = User::find(Auth::user()->id);

            if ($user) {

                return view('edit')->withUser($user);
            } else {

                return redirect()->back();
            }


        } else {

            return redirect()->back();
        }
    }

    public function update(Request $request)
    {

        $user = User::find(Auth::user()->id);

        if ($user) {
            $validate = null;
            if (Auth::user()->email === $request['email']) {
                $validate = $request->validate(
                    [
                        'name' => 'required|min:2',
                        'email' => 'required|email'
                    ]);

            } else {

                $validate = $request->validate(
                    [
                        'name' => 'required|min:2',
                        'email' => 'required|email|unique:users'
                    ]);
            }

            if ($validate) {

                $user->name = $request['name'];
                $user->email = $request['email'];

                $user->save();

                $request->session()->flash('success', 'Ваши данные были успешно изменены!');
                return redirect()->back();
            } else {

                return redirect()->back();
            }

        } else {

            return redirect()->back();
        }

    }

}
