<?php

namespace App\Http\Controllers\Event;

class CreateController extends \App\Http\Controllers\Controller {

    public function __invoke()
    {
        return view('event.create');
    }
}
