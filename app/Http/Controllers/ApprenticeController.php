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
}
