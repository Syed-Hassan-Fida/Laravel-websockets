<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use App\Models\Post;

class GenerateFakeData extends Command
{
    protected $signature = 'fake:data';

    protected $description = 'Generate fake users and blogs';

    public function handle()
    {
        User::factory()
            ->count(10)
            ->has(
                Post::factory()
                    ->count(10)
            )
            ->create();

        $this->info('Fake users and blogs generated successfully.');
    }
}
