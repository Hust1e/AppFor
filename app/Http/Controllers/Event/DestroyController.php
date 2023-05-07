<?php

namespace App\Http\Controllers\Event;

use App\Models\Event;

class DestroyController extends \App\Http\Controllers\Controller {

public function __invoke(Event $event) {
    $event->delete();
    return redirect('/dashboard/events');
}
}
