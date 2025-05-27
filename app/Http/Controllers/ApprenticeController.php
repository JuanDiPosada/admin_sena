<?php

namespace App\Http\Controllers;

use App\Models\apprentice;
use Illuminate\Http\Request;

class ApprenticeController extends Controller
{
    public function index()  {

        $apprentices= apprentice::all();

        return view('Apprentice.index',compact('apprentices'));

    }

    public function create()  {

        return view('apprentice.create');

    }

    public function store(Request $request){

        $aprentice=new apprentice();

        $aprentice->name=$request->name;
        $aprentice->email=$request->email;
        $aprentice->cell_number=$request->cell_number;

        $aprentice->save();

        return redirect()->route('apprentice.index');

    }
    public function show(Apprentice $apprentice) {
        return view('apprentice.show',compact('apprentice'));
    }
    public function edit(Apprentice $apprentice) {
        return view('apprentice.edit', compact('apprentice'));
    }
    public function update(Request $request, Apprentice $apprentice) {

        $apprentice->name = $request->name;
        $apprentice->email = $request->email;
        $apprentice->cell_number = $request->cell_number;

        $apprentice->save();

        return redirect()->route('apprentice.index');
    }
    public function destroy(Apprentice $apprentice) {

        $apprentice->delete();

        return redirect()->route('apprentice.index');
    }
}
