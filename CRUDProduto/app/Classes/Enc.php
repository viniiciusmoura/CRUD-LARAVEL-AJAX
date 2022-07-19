<?php

namespace App\Classes;

use Illuminate\Support\Facades\Hash;

class Enc{

    public function encriptar($valor)
    {
        return bin2hex(openssl_encrypt($valor,'aes-256-cbc','RjEI1FeGFFwbdks1zaulWdNKvcAV0sDM',OPENSSL_RAW_DATA,'RlEKNCxIqQWEcqh9'));
    }

    public function desencriptar($valor_encriptado)
    {
        //verificar se é váilda
        if (strlen($valor_encriptado)%2 !=0) {
            return null;
        }
        return openssl_decrypt(hex2bin($valor_encriptado),'aes-256-cbc','RjEI1FeGFFwbdks1zaulWdNKvcAV0sDM',OPENSSL_RAW_DATA,'RlEKNCxIqQWEcqh9');
    }
}