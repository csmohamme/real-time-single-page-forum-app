<?php

use App\Model\Reply;
use App\User;
use Faker\Generator as Faker;

$factory->define(App\Model\Like::class, function (Faker $faker) {
    return [
        'reply_id'=> function(){
            return Reply::all()->random();
        },
        'user_id'=> function(){
            return User::all()->random();
        }
    ];
});
