<?php

$bot = require_once __DIR__ . '/../bootstrap/bot.php';

/*
|--------------------------------------------------------------------------
| Your Messenger bot first node
|--------------------------------------------------------------------------
|
| Let's try say hi to her when setup completed and then edit this message.
|
*/

$bot->answer('hi', 'Hi [first_name]');

/*
|--------------------------------------------------------------------------
| Define your nodes here
|--------------------------------------------------------------------------
|
| Start defining your node and make your awesome bot now
|
*/

// Handling SUBSCRIBE button payload (on the persistent menu by default)
$bot->answer('payload:SUBSCRIBE', function ($bot, $user_id) {
    $bot->subscription->addSubscribers($user_id, 1);
    return 'Thanks for subscribing!';
});

// Print some message to the browser when done
dd('Nodes seeded!');