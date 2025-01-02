<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
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
    public function ProfileStore(ProfileRequest $request)
    {
        $data = $request->validated();
        // Encrypt the password
        $data = $request->all();
        $data['password'] = Hash::make($request->password);
        $data['email'] = strtolower($data['email']);

        // dd($data);
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

    public function destroy(Profile $profile) {
        $profile->delete();
        return to_route('home-list')->with('success','Successfully deleted');
    }

    public function edit(Profile $profile) {
        // Logic for editing the profile
        return view('components.Edit', compact('profile'));
    }

    public function update(ProfileRequest $request, Profile $profile) {
        // Logic for updating the profile
        $data = $request->validated();
        $data['email'] = strtolower($data['email']);
        $profile->update($data);
        // $profile->fill($data)->save();
        return to_route('home-list')->with('success','Profile updated successfully');

    }

  }
