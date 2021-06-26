<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class EventController extends Controller
{
    public function index(Request $request)
    {
        $data = Event::orderBy('id', 'DESC')->get();
        return view('admin.events.index', compact('data'));
    }

    public function getAllEvents()
    {
        $events = Event::orderBy('id', 'ASC')->get();
        $merged = collect($events)->transform(function ($values) {
            
                return [
                    'title' => $values['event_name'],
                    'start' => $values['event_date'],
                    'extendedProps' => [
                        'venue' => $values['event_venue']
                    ],
                ];
            
        });
        $eventJsonArr = json_encode($merged);

        return $merged;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'event_name' => 'required',
            'event_venue' => 'required',
            'event_date' => 'required',
            'qt_id' => 'required',
        ]);

        $input = $request->all();

        $user = Event::create($input);

        $data = Event::orderBy('id', 'DESC')->get();
        Session::flash('flash_message', 'Event successfully added!');
        return view('admin.events.index', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = Event::find($id);

        return view('admin.events.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'event_name' => 'required',
            'event_venue' => 'required',
            'event_date' => 'required',
        ]);

        $input = $request->all();

        $Event = Event::find($id);
        $Event->update($input);

        Session::flash('flash_message', 'Event successfully updated!');
        return redirect()->route('events.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Event::find($id)->delete();
        Session::flash('flash_message', 'Event successfully deleted!');
        return redirect()->route('events.index');
    }
}
