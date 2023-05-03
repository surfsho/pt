<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use BotMan\BotMan\BotMan;
use BotMan\BotMan\Messages\Incoming\Answer;
use Illuminate\Support\Facades\DB;
use BotMan\BotMan\Messages\Outgoing\Question;
class BotmanController extends Controller
{
    //

    public function handle() {
        $botman = app('botman');
        // $botman->hears('Hello', function($botman){
        //     $botman->reply('hi');
        //     $botman->reply('What is your name');
        // });

        // $botman->hears('i am {name}', function($botman,$name){
        //     $botman->reply('Hello '.$name);
        //     $botman->reply('what can i help you with');
        //     $botman->reply('pricing');
        //     $botman->reply('doctors');
        //     $botman->reply('features');
        // });

        // $botman->hears('please explain pricing', function($botman){
        //     $botman->reply('when do you need');
        //     $botman->reply('monthly');
        //     $botman->reply('yearly');
        // });

        // $botman->hears('tell about monthly', function($botman){
        //     $botman->reply("5$");
        // });

        // $botman->hears('tell about yearly', function($botman){
        //     $botman->reply("25$");
        // });

        $table_message = DB::table('messagesbotman')->get();
        
        
        for($i=0;$i<count($table_message);$i++) {
            $mess = $table_message[$i];
            $message = trim($table_message[$i]->message);
            $botman->hears($message,function($botman) use($mess) {
                $botman->reply($mess->reply);
                if(strlen($mess->reply2) > 0)
                    $botman->reply($mess->reply2);

                if(strlen($mess->reply3) > 0)
                    $botman->reply($mess->reply3);
            });
        }

        
        $botman->listen();
    }


}
