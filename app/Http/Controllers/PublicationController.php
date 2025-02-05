<?php

namespace App\Http\Controllers;

use App\Http\Requests\PublicationRequest;
use App\Models\Publication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PublicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $publications=Publication::all();
         dd($publications);
        return view('Publications.index', compact('publications'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Publications.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PublicationRequest $request, Publication $publication)
    {
        $data=$request->validated();
        $data = $request->all();
        if($request->hasFile('image')){
            $data['image']=$this->UploadImage($request,$publication);
         }
         Publication::create($data);
        //  dd($publication);
        return view('Publications.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Publication $publication)
    {
        return view('',compact('publication'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Publication $publication)
    {
        // Logic for editing the publication
        return view('', compact('publication'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PublicationRequest $request, Publication $publication){
        $data=$request->validated();
        if($request->hasFile('image')){
            $data['image']=$this->UploadImage($request,$publication);
         }
         $publication->update($data);

         return redirect()->route('publications.index')->with('success', 'Publication updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Publication $publication)
    {
        $publication->delete();
        return to_route('')->with('success','Successfully deleted');
    }

    public function UploadImage(PublicationRequest $request, ?Publication $publication = null)
{
    // Delete old image only if the publication exists and has an image
    if ($publication && $publication->image) {
        Storage::disk('public')->delete('images/' . $publication->image);
    }

    // Upload the new image
    $image = $request->file('image');
    $image_name = time() . '.' . $image->getClientOriginalExtension();
    $image->storeAs('images', $image_name, 'public');

    return $image_name;
}

    public function GetPublications() {
        return view('Publications.publications');
    }

}
