<?php

namespace App\Http\Controllers;

use App\Models\Courese;
use Illuminate\Http\Request;
use Redirect;

class CoureseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createCourse(Request $req, Courese $courses)
    {

        $name               = $req->get('name');
        $dob                = $req->get('dob');
        $course             = $req->get('education_level');
        $duration           = $req->get('duration');
        $course_type        = $req->get('course_type');
        $year_of_completion = $req->get('year_of_completion');
        if (!$name || !$dob || !$duration || !$year_of_completion) {
            return redirect()->back()->with('message', 'parameter is empty');
        }
        $details                       = [];
        $details['name']               = $name;
        $details['dob']                = $dob;
        $details['course']             = json_encode($course);
        $details['course_duration']    = $duration;
        $details['course_type']        = $course_type;
        $details['year_of_completion'] = $year_of_completion;
        $courses->create($details);
        return redirect()->route('home')->with('message', 'Detaailses Added Sucessfully');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getCourse()
    {
        $data = Courese::orderby('id', 'desc')->get();
        return view('viewcourse', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function viewForm()
    {
        return view('addCourse');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Courese  $courese
     * @return \Illuminate\Http\Response
     */
    public function show(Courese $courese)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Courese  $courese
     * @return \Illuminate\Http\Response
     */
    public function edit(Courese $courese)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Courese  $courese
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Courese $courese)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Courese  $courese
     * @return \Illuminate\Http\Response
     */
    public function destroy(Courese $courese)
    {
        //
    }
}
