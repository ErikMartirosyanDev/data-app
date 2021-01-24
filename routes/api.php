<?php

use App\Http\Controllers\RetrieveMessagesController;
use App\Http\Controllers\CreateMessageController;

Route::post('/messages', CreateMessageController::class);
Route::get('/messages/by_widget/{widget_id}', RetrieveMessagesController::class);

