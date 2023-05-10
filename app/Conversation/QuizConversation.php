<?php

    namespace App\Conversation;

    use BotMan\BotMan\Messages\Conversations\Conversation;
    use BotMan\BotMan\Messages\Outgoing\Actions\Button;
    use BotMan\BotMan\Messages\Incoming\Answer;
    use BotMan\BotMan\Messages\Outgoing\Question;
    use Illuminate\Support\Facades\DB;

    class QuizConversation extends Conversation {
        public $questionsArray;
        public function run() {
            $this->iwrite();
        }

        public function iwrite() {
            $questions = DB::table('messagesbotman')->get();
            $questionsArray = [];
            foreach($questions as $question) {
                $buttons = DB::table('buttonsbotman')->where('message_id',"=",$question->id)->get();
                $buttonsArray = [];
                foreach($buttons as $button) {
                    $buttonsArray[] = Button::create($button->name)->value($button->value);
                }
                $this->questionsArray[] = Question::create($question->message)->addButtons($buttonsArray);
            }
            $this->rund(1);
        }

        public function rund($id) {
            $question = $this->questionsArray[$id-1];
            $this->ask($question,function(Answer $answer) use($id){
                $table = DB::table('answersbotman')->where('message_id',"=",$id)->get();
                $button =  DB::table('buttonsbotman')->where('value',"=",$answer->getValue())->get();
                foreach($table as $value) {
                    if($answer->getValue() == $value->value) {
                        $this->say($value->message);
                    }
                }
                $next = $button[0]->next;
                if($next > 0)
                    $this->rund($next);
            });
        }

        public function getNext($id) {
            if($id == "order") {
                return 3;
            } else if($id == "order5") {
                return 3;
            } else if($id == "order6") {
                return 3;
            } else if($id == "order1") {
                return 2;
            } else if($id == "order2") {
                return 4;
            } else if($id == "order14") {
                return 5;
            } else if($id == "order15") {
                return 6;
            } else if($id == "order16") {
                return 6;
            } 
            return -1;
        }

        public function run2() {
            $question = Question::create("what can i help you with")->addButtons([
                Button::create('i need support')->value('payment'),
                Button::create('Talk with payments pro')->value('order'),
                Button::create('Learn more about patientconnect')->value('order2'),
                Button::create('Jobs at patientconnect')->value('order3'),
                Button::create('Just browsing')->value('order4'),
            ]);

            $question2 = Question::create('SoundsSounds great. But first, do you need help with an existing product great. But first, do you need help with an existing product')->addButtons([
                Button::create('No, chat with a rep about sales')->value('loop'),
                Button::create('Get product support')->value('loop2')
            ]);

            $this->ask($question,function(Answer $answer) use($question2) {
                switch($answer->getValue()){
                    case 'payment': $this->say('Our team is ready to help, but to get you to the right person, what do you need help with?');
                        $this->run3();             
                    break;
                    case 'order': $this->ask($question2,function(Answer $answer){
                        switch($answer->getValue()) {
                            case 'loop': $this->say('A couple quick questions to make sure we get you to the right person');
                                $this->run4();
                                break;
                            case 'loop2': $this->run3();
                                break;
                        }
                    });
                        break;
                    case 'order2': $this->say("Great! we're here to help modernize and accelerate your claims and payments process.");
                        $this->run5();
                        break;
                    case 'order3': $this->say('You can find a list of our current openings on our careers page');
                        break;
                    case 'order4': $this->say('No worries! Just ring the bell to start over 😀No worries! Just ring the bell to start over 😀');
                        break;
                    default: $this->say('didnt get you');
                }
            });
        }

        public function run3() {
            $question = Question::create("what can i help you with")->addButtons([
                Button::create('Payments')->value('payment'),
                Button::create('Claims')->value('order'),
                Button::create('Attachments')->value('order2'),
                Button::create('Eligbility')->value('order3'),
                Button::create('Claim Status')->value('order4'),
                Button::create('ERAS')->value('order5'),
                Button::create('Patient Statement')->value('order6'),
            ]);

            $this->ask($question,function(Answer $answer){
                switch($answer->getValue()){
                    case 'payment': $this->say('To best get you the support you need, please call our support team at 800-576-6412 ext. 472');
                        $this->say('Thank you for chatting with US today!');           
                    break;
                    case 'order': $this->say('To best get you the support you need, please call our support team at 800-576-6412 ext. 472');
                        $this->say('Thank you for chatting with US today!');           
                    break;
                    case 'order2': $this->say('To best get you the support you need, please call our support team at 800-576-6412 ext. 472');
                        $this->say('Thank you for chatting with US today!');           
                    break;
                    case 'order3': $this->say('To best get you the support you need, please call our support team at 800-576-6412 ext. 472');
                        $this->say('Thank you for chatting with US today!');           
                    break;
                    case 'order4': $this->say('To best get you the support you need, please call our support team at 800-576-6412 ext. 472');
                        $this->say('Thank you for chatting with US today!');           
                    break;
                    case 'order5': $this->say('To best get you the support you need, please call our support team at 800-576-6412 ext. 472');
                        $this->say('Thank you for chatting with US today!');           
                    break;
                    case 'order6': $this->say('To best get you the support you need, please call our support team at 800-576-6412 ext. 472');
                        $this->say('Thank you for chatting with US today!');           
                    break;
                    default: $this->say('didnt get you');
                }
            });
        }

        public function run4() {
            $question = Question::create("What solutions are you interested in?")->addButtons([
                Button::create('Payments')->value('payment'),
                Button::create('Claims')->value('order'),
                Button::create('Attachments')->value('order2'),
                Button::create('Eligbility')->value('order3'),
                Button::create('Claim Status')->value('order4'),
                Button::create('ERAS')->value('order5'),
                Button::create('Patient Statement')->value('order6'),
            ]);

            $this->ask($question,function(Answer $answer){
                switch($answer->getValue()){
                    case 'payment': $this->say('To best get you the support you need, please call our support team at 800-576-6412 ext. 472');
                        $this->say('Thank you for chatting with US today!');           
                    break;
                    case 'order': $this->say('To best get you the support you need, please call our support team at 800-576-6412 ext. 472');
                        $this->say('Thank you for chatting with US today!');           
                    break;
                    case 'order2': $this->say('To best get you the support you need, please call our support team at 800-576-6412 ext. 472');
                        $this->say('Thank you for chatting with US today!');           
                    break;
                    case 'order3': $this->say('To best get you the support you need, please call our support team at 800-576-6412 ext. 472');
                        $this->say('Thank you for chatting with US today!');           
                    break;
                    case 'order4': $this->say('To best get you the support you need, please call our support team at 800-576-6412 ext. 472');
                        $this->say('Thank you for chatting with US today!');           
                    break;
                    case 'order5': $this->say('To best get you the support you need, please call our support team at 800-576-6412 ext. 472');
                        $this->say('Thank you for chatting with US today!');           
                    break;
                    case 'order6': $this->say('To best get you the support you need, please call our support team at 800-576-6412 ext. 472');
                        $this->say('Thank you for chatting with US today!');           
                    break;
                    default: $this->say('didnt get you');
                }
            });
        }

        public function run5() {

            $question2 = Question::create('What do you want to learn more about?')->addButtons([
                Button::create('Claims management')->value('loop'),
                Button::create('Claims submission')->value('loop2'),
                Button::create('Payments')->value('loop3'),
            ]);

            $this->ask($question2, function(Answer $answer){
                switch($answer->getValue()){
                    case 'loop': $this->run6();
                        break;
                    case 'loop2': $this->run7();
                        break;
                    case 'loop3': $this->run8();
                        break;
                    default: $this->say('didnt get you');
                }
            });
        }

        public function run6() {
            $question2 = Question::create('What do you want to learn more about?')->addButtons([
                Button::create('Yes! Lets do it')->value('loop'),
                Button::create('Can you just email me')->value('loop2'),
                Button::create('No thanks')->value('loop3'),
            ]);

            $this->ask($question2, function(Answer $answer){
                switch($answer->getValue()){
                    default: $this->say('didnt get you');
                }
            });
        }

        public function run7() {
            $this->say(" helps you manage your claims by letting you submit, edit, and manage all your claims online. Do this all directly from your practice management software.");
            $question2 = Question::create('Ready to speak to one of our experts?')->addButtons([
                Button::create('Yes! Lets do it')->value('loop'),
                Button::create('Can you just email me')->value('loop2'),
                Button::create('No thanks')->value('loop3'),
            ]);

            $this->ask($question2, function(Answer $answer){
                switch($answer->getValue()){
                    default: $this->say('didnt get you');
                }
            });
        }

        public function run8() {
            $this->say("We make your payment collection easy. A centralized dashboard gives you a holistic view of the patient payment activity. Gives your patients an easy way to pay and set-up payment plans.");
            $question2 = Question::create('Ready to speak to one of our experts?')->addButtons([
                Button::create('Yes! Lets do it')->value('loop'),
                Button::create('Can you just email me')->value('loop2'),
                Button::create('No thanks')->value('loop3'),
            ]);

            $this->ask($question2, function(Answer $answer){
                switch($answer->getValue()){
                    default: $this->say('didnt get you');
                }
            });
        }
    }