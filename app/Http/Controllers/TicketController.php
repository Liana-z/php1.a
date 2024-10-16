<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    // Отображение списка всех заявок
    public function index()
    {
        $tickets = Ticket::all();
        return view('index', compact('tickets'));
    }

    // Форма для создания новой заявки
    public function create()
    {
        return view('create');
    }

    // Обработка формы и сохранение новой заявки в БД
    public function store(Request $request)
    {
        // Валидация данных формы
        $validated = $request->validate([
            'theme' => 'required|max:255',
            'email' => 'required|email|max:255',
        ]);

        // Создание новой заявки в базе данных
        Ticket::create($validated);

        // Переадресация на список заявок с сообщением об успешном добавлении
        return redirect()->route('index')->with('success', 'Заявка успешно добавлена.');
    }
}
