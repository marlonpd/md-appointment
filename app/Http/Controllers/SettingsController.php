<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\User;
use Validator;


class SettingsController extends Controller
{
    public function __construct()
    {
    	$this->middleware('auth');
    }


    public function index()
    {
    	return view('pages.settings');
    }


    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }


    public function profile(Request $request)
    {
    	$input = Input::except('_token');

		if($request->file('photo')){
    		$this->validate($request,[
    			'photo' => 'mimes:jpq,jpeg,png,bmp'
    		]);

    		$photo = $this->makePhoto($request->file('photo'));
    		
    		$input[$key] = $photo;
    	}


    	if($key == 'old_password' && bcrypt($input['old_password']) ){
    		if()
    	}

	    dd();

    	/*if($request->file('photo')){
    		$this->validate($request,[
    			'photo' => 'mimes:jpq,jpeg,png,bmp'
    		]);

    		$photo = $this->makePhoto($request->file('photo'));
    	}*/
       

    }



    protected function updateProfile(array $data, $photo)
    {
    	$user = User::find(Auth::user()->id);

        return $user->update([
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
