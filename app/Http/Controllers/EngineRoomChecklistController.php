<?php

namespace App\Http\Controllers;

use App\EngineRoomChecklist;
use Illuminate\Http\Request;
use App\Apartment;
use Crypt;

class EngineRoomChecklistController extends Controller
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
        $engine_room_checklists = EngineRoomChecklist::paginate(10);
        return view('engine_room_checklist.index')
            ->with('engine_room_checklists', $engine_room_checklists);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $aparment = Apartment::find($id);
        return view('engine_room_checklist.create')
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
        $engine_room_checklist = new EngineRoomChecklist;
        $engine_room_checklist->fill($request->all());
        $apartment_id = Crypt::decrypt($request->input('apartment_id'));
        $engine_room_checklist->apartment_id = $apartment_id;
        $engine_room_checklist->save();

        $request->session()->flash('success', "چک لیست موتورخانه با موفقیت ایجاد شد");
        return redirect()->route('engine_room_checklist.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\EngineRoomChecklist $elevatorCheckList
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $engine_room_checklist = EngineRoomChecklist::find($id);
        return view('engine_room_checklist.show')->with('engine_room_checklist', $engine_room_checklist);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\EngineRoomChecklist $elevatorCheckList
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $engine_room_checklist = EngineRoomChecklist::find($id);
        return view('engine_room_checklist.edit')->with('engine_room_checklist', $engine_room_checklist);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\EngineRoomChecklist $elevatorCheckList
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $engine_room_checklist = EngineRoomChecklist::find($id);
        foreach ($request->all() as $key => $value) {
            if ($value == "on") {
                echo $key . "<br>";
                $request->merge([$key => true]);
            }
        }
        $engine_room_checklist->fill($request->all());
        $engine_room_checklist->save();


        $request->session()->flash('success', "چک لیست موتورخانه با موفقیت ویرایش شد");

        return redirect()->route('engine_room_checklist.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\EngineRoomChecklist $elevatorCheckList
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        EngineRoomChecklist::destroy($id);
    }
}
