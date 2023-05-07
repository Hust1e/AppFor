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
        return view('event.index', ['events' => $data]);
    }

    public function create()
    {
        return view('event.create');
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

    public function edit(Event $event)
    {
        return view('event.edit', compact('event'));
    }

    public function update(StoreEventRequest $request, Event $event)
    {
        $data = $request->validated();
        $event->update($data);

        return redirect('/');
    }

    public function destroy(Event $event)
    {
        $event->delete();
        return redirect('/');
    }
}
