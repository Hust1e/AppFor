<?php

namespace App\Http\Controllers\Event;

use App\Http\Requests\StoreEventRequest;
use App\Models\Event;

class StoreController extends \App\Http\Controllers\Controller {

    public function __invoke(StoreEventRequest $request)
    {
        $data = $request->validated();
        $imageName = time() . '.' . $request->event_img->extension();
        $request->event_img->move(public_path('images'), $imageName);
        $data['event_img'] = $imageName;
        Event::create($data);

        return redirect('/events');
    }
}
