<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TimeTableController extends Controller
{
    
    /**
     * Show the form for creating a new time table.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('TimeTable.create');
    }
}
