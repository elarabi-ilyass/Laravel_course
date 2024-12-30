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
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:profiles,email',
            'password' => 'required|min:6',
            'description' => 'required|string|max:1000',
        ]);

        // Redirect back with errors if validation fails
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Encrypt the password
        $data = $request->all();
        $data['password'] = bcrypt($data['password']);

        // Create the new profile
        Profile::create($data);

        // Redirect to the profiles view with a success message
        //redirect()->route()=>to_route()
        //redirect()->action()
        //back()->withInput()
        return redirect()->route('home-list')->with('success', 'Profile created successfully.');
    }

    public function create(){
    return view('components.Store'); // Replace 'components.Store' with the actual path of your view if different
}


    public function Show(Profile $profile) {
        return view('components.show',compact('profile'));
    }

}
