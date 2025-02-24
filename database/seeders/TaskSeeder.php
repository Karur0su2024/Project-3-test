<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Task;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        Task::insert([
            ['title' => 'Dokončit Laravel API', 'completed' => false],
            ['title' => 'Zkontrolovat e-maily', 'completed' => true],
            ['title' => 'Připravit prezentaci', 'completed' => false],
        ]);
    }
}
