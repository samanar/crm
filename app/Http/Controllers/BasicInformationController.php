<?php

namespace App\Http\Controllers;

use App\BasicInformation;
use Illuminate\Http\Request;
use App\Apartment;
use Crypt;

class BasicInformationController extends Controller
{
    private function rules($id = null)
    {
        return [
            'apartment_id' => "required",
            'manager_name' => 'required|max:255',
            'manager_phone' => 'required|numeric',
            'floor' => 'nullable|integer',
            'unit_in_floor' => 'nullable|integer',
            'elevator_count' => 'nullable|integer',
            'elevator_capacity' => 'nullable|integer',
            'unit' => 'nullable|integer',
            'age' => 'nullable|integer',
            'status' => 'nullable|integer',
            'first_visit' => 'nullable|max:255',
            'technician_name' => 'nullable|max:255',
            'technical_visit' => 'nullable|max:255',
            'introduction_method' => 'nullable|integer',
            'address' => 'required',
            'description' => 'nullable'
        ];
    }

    private function messages()
    {
        return [
            'requird' => 'وارد کردن :attribute اجباری است',
            'max' => ':attribute  نباید بیشتر از ۲۵۵ کاراکتر باشد',
            'integer' => ':attribute باید به صورت عددی وارد شود',

        ];
    }

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($apartment_id)
    {
        $apartment = Apartment::find($apartment_id);
        return view('basic_information.create')->withApartment($apartment);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, $this->rules(), $this->messages());

        $basic_information = new BasicInformation;

        $apartment_id = Crypt::decrypt($request->input('apartment_id'));
        $basic_information->apartment_id = $apartment_id;
        $basic_information->floor = $request->input('floor');
        $basic_information->unit_in_floor = $request->input('unit_in_floor');
        $basic_information->pool = $request->input('pool');
        $basic_information->sauna = $request->input('sauna');
        $basic_information->antenna = $request->input('antenna');
        $basic_information->power_meter = $request->input('power_meter');
        $basic_information->gas_meter = $request->input('gas_meter');
        $basic_information->water_meter = $request->input('water_meter');
        $basic_information->announcement_board = $request->input('announcement_board');
        $basic_information->guard = $request->input('guard');
        $basic_information->door = $request->input('door');
        $basic_information->elevator_count = $request->input('elevator_count');
        $basic_information->elevator_capacity = $request->input('elevator_capacity');
        $basic_information->cooling_system = $request->input('cooling_system');
        $basic_information->heating_system = $request->input('heating_system');
        $basic_information->first_visit = $request->input('first_visit');
        $basic_information->marketer_name = $request->input('marketer_name');
        $basic_information->marketer_description = $request->input('marketer_description');
        $basic_information->technical_visit = $request->input('technical_visit');
        $basic_information->technical_description = $request->input('technical_description');
        $basic_information->technician_name = $request->input('technician_name');

        $basic_information->save();

        $apartment = Apartment::find($apartment_id);
        $apartment->basic_information_id = $basic_information->id;
        $apartment->manager_name = $request->input('manager_name');
        $apartment->manager_phone = $request->input('manager_phone');
        $apartment->unit = $request->input('unit');
        $apartment->age = $request->input('age');
        $apartment->address = $request->input('address');
        $apartment->introduction_method = $request->input('introduction_method');
        $apartment->status = $request->input('status');
        $apartment->save();


//        Todo : Fix the redirect route after creating it
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BasicInformation $basicInformation
     * @return \Illuminate\Http\Response
     */
    public function show(BasicInformation $basicInformation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BasicInformation $basicInformation
     * @return \Illuminate\Http\Response
     */
    public function edit(BasicInformation $basicInformation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\BasicInformation $basicInformation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BasicInformation $basicInformation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BasicInformation $basicInformation
     * @return \Illuminate\Http\Response
     */
    public function destroy(BasicInformation $basicInformation)
    {
        //
    }
}
