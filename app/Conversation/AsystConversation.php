<?php

    namespace App\Conversation;

    use BotMan\BotMan\Messages\Conversations\Conversation;
    use BotMan\BotMan\Messages\Outgoing\Actions\Button;
    use BotMan\BotMan\Messages\Incoming\Answer;
    use BotMan\BotMan\Messages\Outgoing\Question;
    use Illuminate\Support\Facades\DB;

    class AsystConversation extends Conversation {
        public $questionsArray;
        public function run() {
            $this->iwrite();
        }

        public function iwrite() {
            $questions = DB::table('messagesbotman')->get();
            $questionsArray = [];
            for($i=6;$i<8;$i++) {
                $question = $questions[$i];
                $buttons = DB::table('buttonsbotman')->where('message_id',"=",$question->id)->get();
                $buttonsArray = [];
                foreach($buttons as $button) {
                    $buttonsArray[] = Button::create($button->name)->value($button->order);
                }
                $this->questionsArray[$i] = Question::create($question->message)->addButtons($buttonsArray);
            }
            $this->rund(7);
        }

        public function rund($id) {
            $question = $this->questionsArray[$id-1];
            $this->ask($question,function(Answer $answer) use($id){
                $table = DB::table('answersbotman')->where('message_id',"=",$id)->get();
                $button =  DB::table('buttonsbotman')->where('order',"=",$answer->getValue())->get();
                foreach($table as $value) {
                    if($answer->getValue() == $value->order) {
                        $this->say($value->message);
                    }
                }
                $next = $button[0]->next;
                if($next > 0)
                    $this->rund($next);
            });
        }


    }