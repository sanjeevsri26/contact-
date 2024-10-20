<?php

namespace App\Http\Controllers\Admin;
use App\Models\Form; // Make sure this import statement is present

use App\Http\Controllers\Controller;
use App\Models\vc;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $formData = Form::all(); // Show 10 records per page

        // Pass the data to the dashboard view
        return view('admin.dashboard', compact('formData')); 
    }

}
