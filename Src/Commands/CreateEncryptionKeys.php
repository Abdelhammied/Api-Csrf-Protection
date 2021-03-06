<?php

namespace ApiCsrfProtection\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
use phpseclib\Crypt\RSA;

class CreateEncryptionKeys extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'api-csrf-protection:create-encryption-keys';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create Public And Private Keys';

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
        $rsa = new RSA();
        $keys = $rsa->createKey();
        $privateKey = $keys['privatekey'];
        $publicKey = $keys['publickey'];
        Storage::disk('local')->put('keys/publicKey.pem', $publicKey);
        Storage::disk('local')->put('keys/privateKey.pem', $privateKey);
    }
}
