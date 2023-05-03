<?php

    namespace App\Conversation;

    use BotMan\BotMan\Messages\Conversations\Conversation;
    use BotMan\BotMan\Messages\Outgoing\Actions\Button;
    use BotMan\BotMan\Messages\Incoming\Answer;
    use BotMan\BotMan\Messages\Outgoing\Question;

    class QuizConversation extends Conversation {
        public function run() {
            $this->ask('Hi whats your name',function(Answer $answer){
                $this->say("Hello world".$answer->getText());
                $this->run2();
            });
        }

        public function run2() {
            $question = Question::create('what is your question')->addButtons([
                Button::create('payment')->value('payment'),
                Button::create('order')->value('order')
            ]);

            $this->ask($question,function(Answer $answer){
                switch($answer->getValue()){
                    case 'payment': $this->say('list of payments');
                                    break;
                    case 'order': $this->say('your orders');
                                    break;
                    default: $this->say('didnt get you');
                }
            });
        }
    }