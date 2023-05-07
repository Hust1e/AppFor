<?php

namespace App\Http\Controllers\Event;

use App\Models\Event;

class ShowController extends \App\Http\Controllers\Controller {

    public function __invoke(Event $event)
    {
        return view('event.show', compact('event'));
    }
}
