<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\ProfileRequest;
use Illuminate\Support\Facades\Storage;
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

        if($request->hasFile('image')){
            $image = $request->file('image');
            $image_name = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'), $image_name);
            $data['image'] = $image_name;

        }
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

    public function update(ProfileRequest $request, Profile $profile)
{
    // Validate and prepare data
    $data = $request->validated();
    $data['email'] = strtolower($data['email']);

    // Handle image upload
    if ($request->hasFile('image')) {
        $data['image'] = $this->uploadImage($request, $profile);
    }

    // Update the profile
    $profile->update($data);

    return to_route('home-list')->with('success', 'Profile updated successfully');
}

private function uploadImage(ProfileRequest $request, Profile $profile)
{
    // Check if a previous image exists
    if ($profile->image) {
        // Delete the old image
        Storage::disk('public')->delete('images/' . $profile->image);
    }

    // Upload the new image
    $image = $request->file('image');
    $image_name = time() . '.' . $image->getClientOriginalExtension();
    $image->storeAs('images', $image_name, 'public');

    return $image_name;
}

public function DetailsPersonne(){
    return view('components.PersonnesDetails');
}


}
