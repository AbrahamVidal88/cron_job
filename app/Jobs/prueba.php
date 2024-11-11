<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use App\Models\User;

class prueba implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        User::create([
            'name' => 'shoto',
            'email' => 'shoto@gmail.com',
            'password' => '$2y$12$aklPLVDFAg6NO/kXRExe8eZfBu7pGj5A0wE7Dq9vpmGJ4Mvqq8gMq',
        ]);        
    }
}
