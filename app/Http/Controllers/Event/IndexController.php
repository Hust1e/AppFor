<?php

namespace App\Http\Controllers\Event;

use App\Models\Event;

class IndexController extends \App\Http\Controllers\Controller {

    public function __invoke()
    {
        $data = Event::all();
        return view('event.index', ['events' => $data]);
    }
}
