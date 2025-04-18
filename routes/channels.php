<?php

use Illuminate\Support\Facades\Broadcast;

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/

// Broadcast::channel('private-chat.{receiverId}', function ($user, $receiverId) {
//     return $user->id === $receiverId;
// });


Broadcast::channel('private-chat.{receiver_id}', function ($user, $receiver_id) {
    // return (int) $user->id === (int) $receiver_id;
    return true;
});
