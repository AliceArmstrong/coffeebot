<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ResetDatabase extends Command
{
    /**
     * Drop and re-create test and production DB.
     *
     * @var string
     */
    protected $signature = 'db:reset';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Drop, create, migrate and seed test and production DB.';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        // if (App::environment('production')) {
        //     $this->error('This command can\'t be run in production');
        //     return;
        // }

        // if (!$this->option('prod')) {
        //     $this->line('Resetting testing database');
        //     $this->call('migrate:fresh', [
        //         '--seed' => 'true',
        //         '--database' => 'mysql_testing',
        //     ]);
        // }

        $this->line('Resetting main database');
        $this->call('migrate:fresh', [
            '--seed' => 'true',
            '--database' => 'mysql',
        ]);

        // Both qa-reset and fe-reset are called via the browser,
        // and passport only registeres commands if running in the console
        if (app()->runningInConsole()) {
            $this->call('passport:install');
        }
    }
}
