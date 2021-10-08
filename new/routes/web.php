<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnymController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
    ]);
});

// Route::post('/anym', [AnymController::class, 'store']);
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('question', function () {
    $questions =   [
        [
            "no" => 1,
            "slug" => 1,
            "soal" => "Siapa nama saya",
            "answer" => "Seriusman waruwu",
            "desc" => "Nama anda serius karena itu memang nama anda",
        ], [
            "no" => 2,
            "slug" => 2,
            "soal" => "Siapa nama saya",
            "answer" => "Putra Waruwu",
            "desc" => "Putra adalah nama kamu",
        ]
    ];
    return view('question', [

        "title" => "Question",
        "questions" => $questions,
    ]);
})->name('question');


Route::post('/anym', [AnymController::class, 'store'])->name('anym.store');

Route::get('singlequestion/{slug}', function ($slug) {
    $questions =   [
        [
            "no" => 1,
            "slug" => 1,
            "soal" => "Siapa nama saya",
            "answer" => "Seriusman waruwu",
            "desc" => "Nama anda serius karena itu memang nama anda",
        ], [
            "no" => 2,
            "slug" => 2,
            "soal" => "Siapa nama saya",
            "answer" => "Putra Waruwu",
            "desc" => "Putra adalah nama kamu",
        ]
    ];

    $new_question = [];
    foreach ($questions as $question) {
        if ($question["slug"] == $slug) {
            $new_question = $question;
        }
    }
    return view('singlequestion', [
        "title" => "sigle question",
        "question" => $new_question,
    ]);
});
