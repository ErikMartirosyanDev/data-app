<?php

namespace App\Http\Controllers;

use App\Http\Resources\MessageResource;
use App\Models\Message;
use Illuminate\Http\Request;

class CreateMessageController extends Controller
{
    public function __invoke(Request $request)
    {
        $data = $request->only([
            'widget_id',
            'name',
            'email',
            'message'
        ]);

        $message = Message::create($data);

        return MessageResource::make($message);
    }
}
