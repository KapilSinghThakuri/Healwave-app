<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use BotMan\BotMan\BotMan;
use BotMan\BotMan\Messages\Incoming\Answer;

class BotManController extends Controller
{
    public function handle()
    {
        $botman = app('botman');

        $botman->hears('{message}', function (BotMan $botman, $message) {
            if (strtolower($message) == 'hi') {
                $this->askName($botman);
            } else {
                $botman->reply('Write hi to start chat with us!');
            }
        });

        $botman->listen();
    }

    public function askName(BotMan $botman)
    {
        $botman->ask('Hello! What is your name?', function (Answer $answer, $conversation) {
            $name = $answer->getText();
            $conversation->say('Nice to meet you, ' . $name .'!');
        });
    }
}
