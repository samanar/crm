<?php

namespace App\Http\Controllers;

use App\TechnicalInformation;
use Illuminate\Http\Request;
use App\Apartment;

class TechnicalInformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $apartment = Apartment::find($id);
        return view('technical_information.create')->withApartment($apartment);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TechnicalInformation $technicalInformation
     * @return \Illuminate\Http\Response
     */
    public function show(TechnicalInformation $technicalInformation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TechnicalInformation $technicalInformation
     * @return \Illuminate\Http\Response
     */
    public function edit(TechnicalInformation $technicalInformation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\TechnicalInformation $technicalInformation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TechnicalInformation $technicalInformation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TechnicalInformation $technicalInformation
     * @return \Illuminate\Http\Response
     */
    public function destroy(TechnicalInformation $technicalInformation)
    {
        //
    }
}
