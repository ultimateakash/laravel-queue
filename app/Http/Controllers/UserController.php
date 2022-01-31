<?php

namespace App\Http\Controllers;

use App\Jobs\WelcomeEmailJob;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function sendMail()
    {
        $userData = [
            'name' => 'Akash Verma',
            'email' => 'akashmjp@gmail.com'
        ];
        WelcomeEmailJob::dispatch($userData);
        die('Email Sent.');
    }
}
