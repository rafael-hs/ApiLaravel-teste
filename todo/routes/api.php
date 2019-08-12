<?php

use Illuminate\Http\Request;

Route::get("tasks", function () {
    $tasks = [
        [
            "id" => 1,
            "nome" => "Estudar PHP 7",
            "complete" => false
        ], [
            "id" => 2,
            "nome" => "Estudar JavaScript",
            "complete" => false
        ]
    ];

    return $tasks;
});
