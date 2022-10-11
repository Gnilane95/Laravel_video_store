<?php

namespace App\Http\Controllers;

use App\Models\ListeCategory;
use Illuminate\Http\Request;

class ListCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = ListeCategory::all();
        return view('pages.liste_categories', compact('categories'));
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
     * Store a new category  in DB.
     *
     * @param  Request  $request
     * @return void
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name'=>'required|string|max:20|min:3'
        ]);
        $data = [
            'name'=> $request->name,
            'created_at'=>now()
        ];
        ListeCategory::create($data);
        return back()->with('status','Catégorie enregistrée !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $category = ListeCategory::find($id);
        if (!$category) {
            abort(404);
        };

        $category->delete();
        return back()->with('status','La catégorie est bien supprimé ');
    }
}
