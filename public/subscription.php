<?php

$bot = require_once __DIR__ . '/../bootstrap/bot.php';

/*
 |------------------------------------------------------------------------
 | Messenger Bot Subscription
 |------------------------------------------------------------------------
 |
 | Use Subscription API to work with subscription feature.
 |
 | Uncomment these lines below to create and send your first subscription message
 |
 | @see https://giga.ai/docs/standalone/subscription
 */

// $bot->subscription->create([
//     'content'       => 'Your message content',
//     'to_channel'    => 1,
//     'unique_id'     => 'an-unique-id',
//     'send_limit'    => 1
// ])->send();

// Done. Print message to the browser
dd('Notification sent!');