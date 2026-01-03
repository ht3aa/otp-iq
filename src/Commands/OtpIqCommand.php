<?php

namespace Ht3aa\OtpIq\Commands;

use Illuminate\Console\Command;

class OtpIqCommand extends Command
{
    public $signature = 'otp-iq';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
