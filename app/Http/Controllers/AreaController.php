<?php

namespace App\Http\Controllers;


use App\Models\Area;
use Illuminate\Http\Request;


class AreaController extends Controller
{
    public function index(){
        $categories= Area::all();
        return view('area.index',compact('categories'));
    }
    public function create(){
        return view('area.create');
    }
    public function store(Request $request){
        $area=new Area();

        $area->name=$request->name;

        $area->save();

        return $area->name;
    }
}
