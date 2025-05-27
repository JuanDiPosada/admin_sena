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
        $trainingCenter= new TrainingCenter();

        $trainingCenter->name=$request->name;
        $trainingCenter->location=$request->location;

        $trainingCenter->save();

        return redirect()->route('training_center.index');

    }
    public function show($id)  {
        $trainingCenter=TrainingCenter::find($id);

        return view('training_centers.show',compact('trainingCenter'));
    }

    public function update(Request $request,TrainingCenter $trainingCenter) {
         $trainingCenter->name=$request->name;
         $trainingCenter->location=$request->location;

         $trainingCenter->save();

         return redirect()->route('training_center.index');
    }

    public function edit(TrainingCenter $trainingCenter){
        return view('training_centers.edit', compact('trainingCenter'));
    }

    public function destroy(TrainingCenter $trainingCenter){
        $trainingCenter->delete();

        return redirect()->route('training_center.index');
    }

}
