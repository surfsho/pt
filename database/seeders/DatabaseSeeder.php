<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        DB::table('messagesbotman')->insert([
            ["message" => "what can i help you with"],
            ["message" =>  "Sounds great. But first, do you need help with an existing product"],
            ["message" => "what can i help you with"],
            ["message" => "What solutions are you interested in?"],
            ["message" => "What do you want to learn more about?"],
            ["message" => "Ready to speak to one of our experts?"]
        ]);

        DB::table('buttonsbotman')->insert([
            ["name" => "i need support", "order"=> 0,"message_id"=>1,"next"=>3],
            ["name" => "Talk with payments pro", "order"=>1,"message_id"=>1,"next"=>2],
            ["name" => "Learn more about patientconnect", "order"=>2,"message_id"=>1,"next"=>4],
            ["name" => "Jobs at patientconnect","order"=>3,"message_id"=>1,"next"=>0],
            ["name" => "Just browsing","order"=>4,"message_id"=>1,"next"=>0]
        ]);

        DB::table('buttonsbotman')->insert([
            ["name" => "No, chat with a rep about sales", "order"=>5,"message_id"=>2,"next"=>3],
            ["name" => "Get product support","order"=>6,"message_id"=>2,"next"=>3]
        ]);

        DB::table('buttonsbotman')->insert([
            ["name" => "Payments", "order"=>7,"message_id"=>3,"next"=>0],
            ["name" => "Claims", "order" => 8,"message_id"=>3,"next"=>0],
            ["name" => "Attachments", "order"=>9,"message_id"=>3,"next"=>0],
            ["name" => "Eligbility","order"=>10,"message_id"=>3,"next"=>0],
            ["name" => "Claim Status","order"=>11,"message_id"=>3,"next"=>0],
            ["name" => "ERAS","order"=>12,"message_id"=>3,"next"=>0],
            ["name" => "Patient Statement","order"=>13,"message_id"=>3,"next"=>0]
        ]);



        DB::table('buttonsbotman')->insert([
            ["name" => "Claims management","order"=>14,"message_id"=>4,"next"=>5],
            ["name" => "Claims submission","order"=>15,"message_id"=>4,"next"=>6],
            ["name" => "Payments","order"=>16,"message_id"=>4,"next"=>6]
        ]);

       

        DB::table('buttonsbotman')->insert([
            ["name" => "Yes! Lets do it","order"=>17,"message_id"=>5,"next"=>0],
            ["name" => "Can you just email me","order"=>18,"message_id"=>5,"next"=>0],
            ["name" => "No thanks","order"=>19,"message_id"=>5,"next"=>0]
        ]);

        DB::table('buttonsbotman')->insert([
            ["name" => "Yes! Lets do it","order"=>17,"message_id"=>6,"next"=>0],
            ["name" => "Can you just email me","order"=>18,"message_id"=>6,"next"=>0],
            ["name" => "No thanks","order"=>19,"message_id"=>6,"next"=>0]
        ]);


        DB::table('answersbotman')->insert([
            ["message" => "Our team is ready to help, but to get you to the right person, what do you need help with?","order"=>0, "message_id"=> 1],
            ["message" => "A couple quick questions to make sure we get you to the right person","order"=>5, "message_id"=> 1],
            ["message" => "Great! we're here to help modernize and accelerate your claims and payments process.","order"=>2, "message_id"=> 1],
            ["message" => "You can find a list of our current openings on our careers page","order"=>3, "message_id"=> 1],
            ["message" => "No worries! Just ring the bell to start over 😀No worries! Just ring the bell to start over 😀","order"=>4, "message_id"=> 1]

        ]);

        DB::table('answersbotman')->insert([
            ["message" => "To best get you the support you need, please call our support team at 800-576-6412 ext. 472","order"=>7, "message_id"=> 3],
            ["message" => "Thank you for chatting with US today!","order"=>7, "message_id"=> 3],
            ["message" => "To best get you the support you need, please call our support team at 800-576-6412 ext. 472","order"=>8, "message_id"=> 3],
            ["message" => "Thank you for chatting with US today!","order"=>8, "message_id"=> 3],
            ["message" => "To best get you the support you need, please call our support team at 800-576-6412 ext. 472","order"=>9, "message_id"=> 3],
            ["message" => "Thank you for chatting with US today!","order"=>9, "message_id"=> 3],
            ["message" => "To best get you the support you need, please call our support team at 800-576-6412 ext. 472","order"=>10, "message_id"=> 3],
            ["message" => "Thank you for chatting with US today!","order"=>10, "message_id"=> 3],
            ["message" => "To best get you the support you need, please call our support team at 800-576-6412 ext. 472","order"=>11, "message_id"=> 3],
            ["message" => "Thank you for chatting with US today!","order"=>11, "message_id"=> 3],
            ["message" => "To best get you the support you need, please call our support team at 800-576-6412 ext. 472","order"=>12, "message_id"=> 3],
            ["message" => "Thank you for chatting with US today!","order"=>12, "message_id"=> 3],
            ["message" => "To best get you the support you need, please call our support team at 800-576-6412 ext. 472","order"=>13, "message_id"=> 3],
            ["message" => "Thank you for chatting with US today!","order"=>13, "message_id"=> 3],
        ]);

        DB::table('answersbotman')->insert([
            ["message" => " helps you manage your claims by letting you submit, edit, and manage all your claims online. Do this all directly from your practice management software.","order"=>15,"message_id"=>4],
            ["message" => "We make your payment collection easy. A centralized dashboard gives you a holistic view of the patient payment activity. Gives your patients an easy way to pay and set-up payment plans.","order"=>16,"message_id"=>4]
        ]);

        DB::table('answersbotman')->insert([
            ["message" => "didnt get you","order"=>17,"message_id"=>5],
            ["message" => "didnt get you","order"=>18,"message_id"=>5],
            ["message" => "didnt get you","order"=>19,"message_id"=>5]
        ]);

        DB::table('answersbotman')->insert([
            ["message" => "didnt get you","order"=>17,"message_id"=>6],
            ["message" => "didnt get you","order"=>18,"message_id"=>6],
            ["message" => "didnt get you","order"=>19,"message_id"=>6]
        ]);
    }
}
