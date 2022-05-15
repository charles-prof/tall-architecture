<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Mail;

use App\Mail\TestMail;
use App\Models\User;


/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('email:test {userid=1}', function ($userid) {
    $user = User::find($userid);
    $this->info("Sending email to: {$user->name}!");
    Mail::to('example@mailinator.net')->send(new TestMail($user));
})->purpose('command for sending test email');