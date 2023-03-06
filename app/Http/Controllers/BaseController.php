<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use function view;

class BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('index');
    }
}
