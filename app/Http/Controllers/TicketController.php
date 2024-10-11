<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function index()
    {
        $tickets = Ticket::all();  // Получаем все тикеты из базы данных
        return view('tickets', compact('tickets'));
    }
}
