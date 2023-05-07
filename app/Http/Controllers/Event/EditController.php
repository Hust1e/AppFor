<?php

namespace App\Http\Controllers\Event;

use App\Models\Event;

class EditController extends \App\Http\Controllers\Controller {

    public function __invoke(Event $event)
    {
        return view('event.edit', compact('event'));
    }
}
