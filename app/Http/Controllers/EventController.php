<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEventRequest;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $data = Event::all();
        return view('event.eventIndex', ['events' => $data]);
    }

    public function create()
    {
        return view('event.eventCreate');
    }

    public function store(StoreEventRequest $request)
    {
        $data = $request->validated();
        $imageName = time() . '.' . $request->event_img->extension();
        $request->event_img->move(public_path('images'), $imageName);
        $data['event_img'] = $imageName;
        Event::create($data);
    }

    public function show(Event $event)
    {
        return view('event.show', compact('event'));
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
