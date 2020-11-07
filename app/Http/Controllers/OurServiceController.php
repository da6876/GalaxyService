<?php

namespace App\Http\Controllers;

use App\OurService;
use Illuminate\Http\Request;

class OurServiceController extends Controller
{

    public function index()
    {
        return view("admin.our_services");
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(OurService $ourService)
    {
        //
    }


    public function edit(OurService $ourService)
    {
        //
    }


    public function update(Request $request, OurService $ourService)
    {
        //
    }

    public function destroy(OurService $ourService)
    {
        //
    }
}
