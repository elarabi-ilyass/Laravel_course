<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    public function index(){
        $profiles=Profile::paginate(15);
        return view('components.profile',compact('profiles'));
    }
    public function indexTest(){
        return view('components.alert');
    }

    // public function indexProfile(){
    //     return view('components.profile');
    // }
    public function ProfileStore(Request $request)
    {
        // Validate the incoming data
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'description' => 'required',
        ]);

        // If validation fails, redirect back with errors
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Encrypt the password
        $data = $request->all();
        $data['password'] = bcrypt($data['password']);

        // Create the new profile in the database
        Profile::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => $data['password'],
            'description' => $data['description'],
        ]);

        // Redirect to the profiles view with a success message
        return view('components.Profile');
    }

    public function Show(Request $request) {
        $id=$request->id;
        $profile=Profile::find($id);
        return view('components.show',compact('profile'));
    }

}
