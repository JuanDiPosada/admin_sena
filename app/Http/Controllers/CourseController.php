<?php

namespace App\Http\Controllers;

use App\Models\course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index() {
        $courses=course::all();

        return view('courses.index',compact('courses'));
    }

    public function create()  {
        return view('courses.create');
    }

    public function store(Request $request){
        $course=new course();

        $course->course_number=$request->course_number;
        $course->day=$request->day;

        $course->save();

        return redirect()->route('course.index');

    }
    public function show(course $course) {
        return view('courses.show', compact('course'));
    }
    public function edit(course $course) {
        return view('courses.edit', compact('course'));
    }
    public function update(Request $request, course $course) {
        $course->course_number = $request->course_number;
        $course->day = $request->day;

        $course->save();

        return redirect()->route('course.index');
    }
    public function destroy(course $course) {
        $course->delete();

        return redirect()->route('course.index');
    }


}
