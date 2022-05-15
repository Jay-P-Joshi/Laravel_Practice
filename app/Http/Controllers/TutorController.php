<?php

namespace App\Http\Controllers;

use App\Models\Tutor;
use Illuminate\Http\Request;

class TutorController extends Controller
{
    public function index()
    {
        //retrieve all data from this table
            // $tutors = Tutor::all();


        //first check name Tutor 7 in database if not exists then create new record in the database
            // $tutor = Tutor::firstOrCreate(
            //     ['name' => 'Tutor 7'],
            //     ['email' => 'tutor7@gmail.com', 'city' => 'Mumbai', 'marks' => 100]
            // );


        //first check name Tutor 8 in database if not exists then it create new instance(not directly save in database)->if we want to save in database then use save() to save the data
            // $tutor = Tutor::firstOrNew(
            //     ['name' => 'Tutor 8'],
            //     ['email' => 'tutor8@gmail.com', 'city' => 'Dubai', 'marks' => 65]
            // );
            // $tutor->save();


        // $tutor =Tutor::where('name','Tutor 7')->count();
        // $tutor =Tutor::where('name','Tutor 7')->min('marks');

        $tutor = new Tutor;

        return view('welcome',compact('tutor'));
    }
}
