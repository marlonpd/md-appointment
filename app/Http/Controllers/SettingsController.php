<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\User;
use Validator;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ProfileRequest;


class SettingsController extends Controller
{
    public function __construct()
    {
    	$this->middleware('auth');
    }


    public function index()
    {
        session()->flash('flash_message', 'test');
    	return view('pages.settings');
    }


    public function profile(ProfileRequest $request)
    {
        $user = User::findOrFail(Auth::user()->id);
        $request->replace(array('password' => bcrypt($request->input('password'))));
        $user->update($request->all());       

        return redirect('settings');
    }


    protected function updateProfile(array $data, $photo)
    {
    	$user = User::find(Auth::user()->id);

        return $user->update([
            'id'    => Auth::user()->id ,
            'name' => $data['name'],
            'email' => $data['email'],
            'photo' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }


    public function makePhoto(UploadedFile $file)
    {


    }
}
