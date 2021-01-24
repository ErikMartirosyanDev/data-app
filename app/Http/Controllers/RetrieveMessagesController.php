<?php

namespace App\Http\Controllers;

use App\Http\Resources\MessageResource;
use App\Models\Message;
use Illuminate\Http\Request;

class RetrieveMessagesController extends Controller
{
    public function __invoke(Request $request, int $widget_id)
    {
        $messages = Message::where('widget_id', $widget_id)->get();

        return MessageResource::collection($messages);
    }
}
