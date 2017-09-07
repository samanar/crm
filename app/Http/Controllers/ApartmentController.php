<?php

namespace App\Http\Controllers;

use App\Apartment;
use Illuminate\Http\Request;

class ApartmentController extends Controller
{

    private function rules($id = null)
    {
        return [
            'code' => "required|max:255|unique:apartments,code,$id",
            'manager_name' => 'required|max:255',
            'manager_phone' => 'required|integer',
            'unit' => 'nullable|integer',
            'age' => 'nullable|integer',
            'status' => 'nullable|integer',
            'introduction_method' => 'nullable|integer',
            'address' => 'required',
            'description' => 'nullable'
        ];
    }

    private function messages()
    {
        return [
            'code.required' => 'وارد کردن کد آپارتمان اجباری است',
            'code.max' => 'کد آپارتمان نباید بیشتر از ۲۵۵ کاراکتر باشد',
            'code.unique' => 'کد آپارتمان تکراری است',
            'manager_name.required' => 'نام مدیر اجباری است',
            'manager_name.max' => 'نام مدیر نباید بیشتر از ۲۵۵ کاراکتر باشد',
            'manager_phone.required' => 'شماره تماس مدیر اجباری است',
            'manager_phone.integer' => 'شماره تماس وارد شده صحیح نمیباشد',
            'unit.integer' => 'تعداد واحد وارد شده صحیح نمیباشد',
            'age.integer' => 'عمر بنا وارد شده صحیح نمیباشد',
            'status.integer' => 'وضعیت وارد شده صحیح نمیباشد',
            'introduction_method.integer' => 'نحوه آشنایی وارد شده صحیح نمیباشد',
            'address.required' => 'وارد کردن آدرس اجباری است',
        ];
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $apartments = Apartment::paginate(10);
        return view('apartment.index')->withApartments($apartments);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('apartment.create');
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

        $apartment = new Apartment;
        $apartment->code = $request->input('code');
        $apartment->manager_name = $request->input('manager_name');
        $apartment->manager_phone = $request->input('manager_phone');
        $apartment->unit = $request->input('unit');
        $apartment->age = $request->input('age');
        $apartment->status = $request->input('status');
        $apartment->introduction_method = $request->input('introduction_method');
        $apartment->address = $request->input('address');
        $apartment->description = $request->input('description');

        $apartment->save();

        return redirect()->route('apartment.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Apartment $apartment
     * @return \Illuminate\Http\Response
     */
    public function show(Apartment $apartment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Apartment $apartment
     * @return \Illuminate\Http\Response
     */
    public function edit(Apartment $apartment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Apartment $apartment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Apartment $apartment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Apartment $apartment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Apartment $apartment)
    {
        //
    }
}
