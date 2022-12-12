<?php

namespace App\Console\Commands;

use App\Models\Task;
use Illuminate\Console\Command;

class TasksAutoDelete extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'tasks:delete';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Task delete';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        Task::where("created_at", "<", now()->subDays(30))->delete();
    }
}
