<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Ticket;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Ticket::create([
            'theme' => 'Сломался принтер',
            'email' => 'lexa@mail.loc',
            'date' => '2024-09-15'
        ]);

        Ticket::create([
            'theme' => 'Не включается компьютер',
            'email' => 'babanura@mail.loc',
            'date' => '2024-09-16'
        ]);

        Ticket::create([
            'theme' => 'Забыл пароль',
            'email' => 'borkwork@mail.loc',
            'date' => '2024-09-17'
        ]);
    }
}
