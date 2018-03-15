<?php

namespace App\Http\Controllers\User;

use App\User;
use Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;

class UserRegistrationController extends BaseController
{
  public function Create(Request $request)
  {
//      $result= User::create([
//          'name' => $request->input('name'),
//          'email' => $request->input('email'),
//          'password' => Hash::make($request->input('password')),
//      ]);

//      return Validator::make(Input::all(), [
//          'name' => 'required|string|max:255',
//          'email' => 'required|string|email|max:255|unique:users',
//          'password' => 'required|string|min:6|confirmed',
//      ]);
      $validator = Validator::make(Input::all(), [
          'name' => 'required|string|max:255',
          'email' => 'required|string|email|max:255|unique:users',
          'password' => 'required|string|min:6|confirmed',
      ]);

      if ($validator->fails())
      {
          return redirect()->back()->withErrors($validator);
      }
      else
      {
          $result= User::create([
              'name' => $request->input('name'),
              'email' => $request->input('email'),
              'password' => Hash::make($request->input('password')),
          ]);
              Session::flash('success','User Registerd Successfully');
                return redirect()->back();

      }
  }
  public function Show()
  {
      return view('User/registration');
  }
}
