<?php

namespace App\Http\Controllers;

use App\Apartment;
use App\ElevatorCheckList;
use Illuminate\Http\Request;
use Crypt;

class ElevatorCheckListController extends Controller
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
        $elevator_checklists = ElevatorCheckList::paginate(10);
        return view('elevator_checklist.index')
            ->with('elevator_checklists', $elevator_checklists);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $aparment = Apartment::find($id);
        return view('elevator_checklist.create')
            ->with('apartment', $aparment);
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

        foreach ($request->all() as $key => $value) {
            if ($value == "on") {
                echo $key . "<br>";
                $request->merge([$key => true]);
            }
        }
        $elevator_checklist = new ElevatorCheckList;
        $elevator_checklist->fill($request->all());
        $apartment_id = Crypt::decrypt($request->input('apartment_id'));
        $elevator_checklist->apartment_id = $apartment_id;
        $elevator_checklist->save();

        $request->session()->flash('success', "چک لیست آسانسور با موفقیت ایجاد شد");
        return redirect()->route('elevator_checklist.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ElevatorCheckList $elevatorCheckList
     * @return \Illuminate\Http\Response
     */
    public function show(ElevatorCheckList $elevatorCheckList)
    {
        return view('elevator_checklist.show')->with('elevator_checklist', $elevatorCheckList);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ElevatorCheckList $elevatorCheckList
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $elevatorCheckList = ElevatorCheckList::find($id);
        return view('elevator_checklist.edit')->with('elevator_checklist', $elevatorCheckList);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\ElevatorCheckList $elevatorCheckList
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $elevator_checklist = ElevatorCheckList::find($id);
        foreach ($request->all() as $key => $value) {
            if ($value == "on") {
                echo $key . "<br>";
                $request->merge([$key => true]);
            }
        }
        $elevator_checklist->fill($request->all());
        $elevator_checklist->save();


        $request->session()->flash('success', "چک لیست آسانسور با موفقیت ویرایش شد");

        return redirect()->route('elevator_checklist.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ElevatorCheckList $elevatorCheckList
     * @return \Illuminate\Http\Response
     */
    public function destroy(ElevatorCheckList $elevatorCheckList)
    {
        $elevatorCheckList->delete();
    }
}
