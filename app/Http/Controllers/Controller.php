<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function checkRecaptcha(string $token)
    {
        $secret = env('RECAPTCHA_V3_SECRET_KEY');
        $url = 'https://www.google.com/recaptcha/api/siteverify';
        $verifyResponse = file_get_contents("{$url}?secret={$secret}&response={$token}");
        return json_decode($verifyResponse);
    }
}
