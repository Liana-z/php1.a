<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TicketController;

// Страница списка заявок
Route::get('/tickets', [TicketController::class, 'index'])->name('index');

// Страница создания новой заявки (форма)
Route::get('/tickets/create', [TicketController::class, 'create'])->name('create');

// Обработка формы создания заявки
Route::post('/tickets', [TicketController::class, 'store'])->name('store');


