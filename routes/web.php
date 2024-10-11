<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TicketController;

Route::get('/', [TicketController::class, 'Tickets']);

Route::get('/', function () {
    return view(' Tickets', ['Tickets' => [
        ["theme" => "Сломался принтер", "email" => "lexa@mail.loc","date" => "2024-09-15"],
        ["theme" => "Не включается компьютер", "email" => "babanura@mail.loc","date" => "2024-09-16"],
        ["theme" => "Забыл пароль", "email" => "borkwork@mail.loc", "date" => "2024-09-17"],
    ]]);
});
