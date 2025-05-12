<?php

namespace App\Http\Controllers;

use App\Models\TrainingCenter;
use Illuminate\Http\Request;

class TrainingCenterController extends Controller
{
    public function index()  {
        $trainingCenters=TrainingCenter::all();

        return view('training_centers.index',compact('trainingCenters'));
    }

    public function create()  {
        return view('training_centers.create');
    }

    public function store(Request $request)  {
        $trainigCenter= new TrainingCenter();

        $trainigCenter->name=$request->name;
        $trainigCenter->location=$request->location;

        $trainigCenter->save();

        return $trainigCenter;

    }
}
