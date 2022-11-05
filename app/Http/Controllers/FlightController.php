<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFlightRequest;
use App\Http\Requests\UpdateFlightRequest;
use App\Models\Flight;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FlightController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        echo "prova";
    }

    /**
     * Save a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Request  $req
     */
    public function save(Request $request)
    {
         print_r(request()->input('status'));
     //   $input = $request->all();
     //   print_r($input);
   //    request()->input('status');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\Http\Requests\Request  $req
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $data = $request->status;
        echo $data;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFlightRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFlightRequest $request)
    {

        $flight = new Flight;

        $flight->status = $request->status;

        $flight->save();
        echo "salvato volo";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Flight  $flight
     * @return \Illuminate\Http\Response
     */
    public function show(Flight $flight)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Flight  $flight
     * @return \Illuminate\Http\Response
     */
    public function edit(Flight $flight)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFlightRequest  $request
     * @param  \App\Models\Flight  $flight
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFlightRequest $request, Flight $flight)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Flight  $flight
     * @return \Illuminate\Http\Response
     */
    public function destroy(Flight $flight)
    {
        //
    }
}
