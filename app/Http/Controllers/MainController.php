<?php
namespace P4\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
class MainController extends Controller
{
    /**
    * Doug Bradley
    * CSCIE-15 Project 4
    */

    public function index()
    {
        return view('main.index');
    }

}
