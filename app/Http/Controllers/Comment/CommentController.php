<?php

namespace App\Http\Controllers\Comment;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCommentRequest;
use App\Models\Comment;
use App\Models\Event;

class CommentController extends Controller
{
    public function store(StoreCommentRequest $request, Event $event)
    {
        $data = $request->validated();
        $data['event_id'] = $event->id;
        Comment::create($data);
        return redirect('/events/' . $event->id);
    }
}
