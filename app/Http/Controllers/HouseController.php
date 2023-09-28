<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage; 
use App\Models\House;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 

class HouseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $houses = House::all(); 
        return view('houses.index', compact('houses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('houses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $houses =  request()->except('_token');

         if($request->hasFile('cover')){
             $houses['cover']= $request->file('cover')->store('uploads', 'public');
             House::insert($houses);
             return redirect('houses')->with('msg', 'Casa añadida correctamente');
         }
        return $houses; 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $house = House::find($id);
        return view('houses.show', compact('house')); 
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $house = House::find($id);
        return view('houses.edit', compact('house')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $house = House::findOrFail($id);
        Storage::delete(['public/', $house->cover]);
        $house['cover']= $request->file('cover')->store('uploads', 'public');
        
        House::where('id', '=', $id)->update($house);
        $house = House::findOrFail($id);
        return redirect('houses')->with('msg', 'La casa se ha editado correctamente');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $house = House::find($id); 
        if(Storage::delete('public/'. $house->cover)){
            House::destroy($id);
        }
        return redirect('houses')->with('msg', 'La casa se ha borrado exitosamente' );
    }
}
