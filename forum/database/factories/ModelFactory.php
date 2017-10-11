<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Thread::class, function(\Faker\Generator $fake) {
    return [
        'user_id' => function() {
            return factory('App\User')->create()->id;
        },
        'title' => $fake->sentence,
        'body' => $fake->paragraph
    ];
});

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Reply::class, function(\Faker\Generator $fake) {
    return [
        'user_id' => function() {
            return factory('App\User')->create()->id;
        },
        'thread_id' => function() {
            return factory('App\Thread')->create()->id;
        },
        'body' => $fake->paragraph
    ];
});