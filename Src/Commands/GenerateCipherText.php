<?php

namespace ApiCsrfProtection\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Str;
use phpseclib\Crypt\RSA;

class GenerateCipherText extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'api-csrf-protection:generate-cipher-text';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate Cipher And Plain Text';

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
        $random_text = Str::random(15);

        $rsa = new RSA();

        $rsa->loadKey(file_get_contents(storage_path('app/keys/publicKey.pem')));

        $cipher_text = base64_encode($rsa->encrypt($random_text));

        $this->line("Plain Text : $random_text ");

        $this->line("Cipher Text : $cipher_text ");
    }
}
