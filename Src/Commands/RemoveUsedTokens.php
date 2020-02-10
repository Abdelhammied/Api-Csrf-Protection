<?php

namespace ApiCsrfProtection\Commands;

use Illuminate\Console\Command;

class RemoveUsedTokens extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'api-csrf-protection:remove-used-tokens';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Remove Used Tokens';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        \DB::table('api_tokens')->truncate();
    }
}
