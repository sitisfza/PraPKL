<?php

namespace App\Http\Controllers;
use App\Models\Staff;

use Illuminate\Http\Request;

class StaffController extends Controller
{
    //
    public function index()
    {
        // sama dengan, select * from post;
        $staff = Staff::all();
        return view('staff.index', compact('staff'));
    }
}
