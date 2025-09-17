<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs/{id}', function($id){
    $jobs = [
        ['id' => 1, 'title' => 'Director', 'salary' => 50000],
        ['id' => 2, 'title' => 'Programmer', 'salary' => 120000],
        ['id' => 3, 'title' => 'Teacher', 'salary' => 40000],
    ];
    
    $job = collect($jobs)->first(fn($value) => $value['id'] == $id);

    if (!$job) {
        abort(404);
    }

    return view('jobs', ['job' => $job]);
}

);

Route::get('/contact', function () {
    return view('contact');
});
