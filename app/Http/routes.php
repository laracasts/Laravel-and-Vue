<?php

use App\Message;

get('guestbook', function() {
    return view('guestbook');
});

// API

get('api/messages', function() {
    return Message::all();
});

post('api/messages', function() {
    return Message::create(Request::all());
});