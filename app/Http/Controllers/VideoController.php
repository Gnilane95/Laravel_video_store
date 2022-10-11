<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videos = Video::orderBy('updated_at', 'desc')->paginate(10);
        return view('pages.home', compact('videos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Video $video)
    {
        return view ('pages.show', compact('video'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return void
     */
    public function edit(Video $video)
    {
        return view('pages.edit', compact('video'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return void
     */
    public function update(Request $request, Video $video)
    {
        //verify if file exist and delete previous img
        if ($request->hasFile('url_img')) {
            //Delete previous img
            Storage::delete($video->url_img);
            //Store the new img
            $video->url_img = $request->file('url_img')->store('videos');
        }

        $request->validate([
            'title'=>'required|min:5|string|max:180',
            'actors'=>'required|min:5|string|max:180',
            'nationality'=>'required|min:5|string|max:180',
            'year_created'=>'required|integer|min:4',
            'description'=>'required||min:20|max:1000|string',
            'url_img'=>'required|image|mimes:png,jpg,jpeg,webp|max:5000'

        ]);
        $video->update([
            'title'=>$request->title,
            'actors'=>$request->actors,
            'nationality'=>$request->nationality,
            'year_created'=>$request->year_created,
            'description'=>$request->description,
            'url_img'=>$video->url_img,
            'updated_at'=>now()
        ]);
        return redirect()->route('home')->with('status','Film modifié');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Video $video)
    {
        $video->delete();
        return redirect()->route('home')->with('status','Film bien supprimé');
    }
}
