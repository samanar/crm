<?php

namespace App\Http\Controllers;

use App\TechnicalInformation;
use Illuminate\Http\Request;
use App\Apartment;
use Crypt;

class TechnicalInformationController extends Controller
{

    private function rules()
    {
        return [
            'apartment_id' => 'required'
        ];
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect()->route('home');
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
        $this->validate($request, $this->rules());

//        dd($request);

        $apartment_id = Crypt::decrypt($request->input('apartment_id'));

        $technical_information = new TechnicalInformation;
        $technical_information->apartment_id = $apartment_id;
        $technical_information->elevator_status = $request->input('elevator_status');
        $technical_information->elevator_description = $request->input('elevator_description');
        $technical_information->door_status = $request->input('door_status');
        $technical_information->door_description = $request->input('door_description');
        $technical_information->engine_room_status = $request->input('engine_room_status');
        $technical_information->engine_room_description = $request->input('engine_room_description');
        $technical_information->heating_cooling_system_status = $request->input('heating_cooling_system_status');
        $technical_information->heating_cooling_system_description = $request->input('heating_cooling_system_description');
        $technical_information->total_status = $request->input('total_status');
        $technical_information->total_description = $request->input('total_description');

        $technical_information->save();

        $request->session()->flash('success', "اطلاعات فنی مجتمع با کد $technical_information->apartment->code با موفقیت ثبت شد");

        return redirect()->route('technical_information.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TechnicalInformation $technicalInformation
     * @return \Illuminate\Http\Response
     */
    public function show(TechnicalInformation $technicalInformation)
    {
        return view('technical_information.show')
            ->with('technical_information', $technicalInformation);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TechnicalInformation $technicalInformation
     * @return \Illuminate\Http\Response
     */
    public
    function edit(TechnicalInformation $technicalInformation)
    {
        return view('technical_information.edit')
            ->with('technical_information', $technicalInformation);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\TechnicalInformation $technicalInformation
     * @return \Illuminate\Http\Response
     */
    public
    function update(Request $request, TechnicalInformation $technicalInformation)
    {

        $technical_information = $technicalInformation;
        $technical_information->elevator_status = $request->input('elevator_status');
        $technical_information->elevator_description = $request->input('elevator_description');
        $technical_information->door_status = $request->input('door_status');
        $technical_information->door_description = $request->input('door_description');
        $technical_information->engine_room_status = $request->input('engine_room_status');
        $technical_information->engine_room_description = $request->input('engine_room_description');
        $technical_information->heating_cooling_system_status = $request->input('heating_cooling_system_status');
        $technical_information->heating_cooling_system_description = $request->input('heating_cooling_system_description');
        $technical_information->total_status = $request->input('total_status');
        $technical_information->total_description = $request->input('total_description');

        $technical_information->save();
        $request->session()->flash('success', "اطلاعات فنی مجتمع با کد $technical_information->apartment->code با موفقیت ویرایش شد");

        return redirect()->route('technical_information.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TechnicalInformation $technicalInformation
     * @return \Illuminate\Http\Response
     */
    public
    function destroy(TechnicalInformation $technicalInformation)
    {
        //
    }
}
