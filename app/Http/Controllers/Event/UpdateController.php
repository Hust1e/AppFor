<?php

namespace App\Http\Controllers\Event;

use App\Http\Requests\StoreEventRequest;
use App\Models\Event;

class UpdateController extends \App\Http\Controllers\Controller {

public function __invoke(StoreEventRequest $request, Event $event)
{
    $data = $request->validated();
    $event->update($data);

    return redirect('/dashboard/events');
}
}
