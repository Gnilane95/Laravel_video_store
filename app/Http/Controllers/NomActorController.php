<?php

namespace App\Http\Controllers;

use App\Models\NomActor;
use Illuminate\Http\Request;

class NomActorController extends Controller
{
    public function store(Request $request, $id)
    {
        // dd($request);
        $request->validate([
        'name' => 'required|string|max:30|min:10'
        ]);

        NomActor::create([
        'name' => $request->name,
        'created_at' => now(),
        'video_id' => $id
        ]);
        // NomActor::create($data);
        return back()->with('status', 'Acteur ajouté');
    }
}
