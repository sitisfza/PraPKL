<?php

namespace App\Http\Controllers;
use App\Models\StaffBranch;
use App\Models\Branch;
use App\Models\Staff;

use Illuminate\Http\Request;

class StaffBranchController extends Controller
{
    //
    public function index()
    {
        // sama dengan, select * from post;
        $staffbranch = StaffBranch::all();
        $branch = Branch::all();
        $staff = Staff::all();
        return view('staffbranch.index', compact('staffbranch', 'branch', 'staff'));
    }
}
