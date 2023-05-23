<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tasks = [
            [
                'name' => 'Coding',
                'assigned_date' => '2022-01-01'
            ],
            [
                'name' => 'Testing',
                'assigned_date' => '2022-01-01'
            ]
        ];

        foreach($tasks as $task)
        {
            Task::create($task);
        }
    }
}
