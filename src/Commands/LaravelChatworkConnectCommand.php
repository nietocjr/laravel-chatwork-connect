<?php

namespace nietocjr\LaravelChatworkConnect\Commands;

use Illuminate\Console\Command;

class LaravelChatworkConnectCommand extends Command
{
    public $signature = 'laravel-chatwork-connect';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done!');

        return self::SUCCESS;
    }
}
