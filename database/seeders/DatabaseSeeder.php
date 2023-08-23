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
            ["message" => "Ready to speak to one of our experts?"],
            ["message" => "Hi, I’m Peter. I am here to help you find what you are looking for. How can I help you today?"],
            ["message" => "Are you a patient or a healthcare practice?"]
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

        DB::table('buttonsbotman')->insert([
            ["name" => "Yes! Lets do it","order"=>17,"message_id"=>6,"next"=>0],
            ["name" => "Can you just email me","order"=>18,"message_id"=>6,"next"=>0],
            ["name" => "No thanks","order"=>19,"message_id"=>6,"next"=>0]
        ]);

        DB::table('buttonsbotman')->insert([
            ["name" => "i'm looking for more information about your patient check in and communication platform","order"=>20,"message_id"=>7,"next"=>0],
            ["name" => "i'm a healthcare technology company looking for it services partner","order"=>21,"message_id"=>7,"next"=>0],
            ["name" => "i want to start an exciting career with ","order"=>22,"message_id"=>7,"next"=>0],
            ["name" => "i'm a current user looking for support","order"=>23,"message_id"=>7,"next"=>8]
        ]);

        DB::table('buttonsbotman')->insert([
            ["name" => "i'm a patient","order"=>24,"message_id"=>8,"next"=>0],
            ["name" => "i'm a healthcare practice","order"=>25,"message_id"=>8,"next"=>0],
        ]);


        DB::table('answersbotman')->insert([
            ["message" => "Our team is ready to help, but to get you to the right person, what do you need help with?","order"=>0, "message_id"=> 1],
            ["message" => "A couple quick questions to make sure we get you to the right person","order"=>5, "message_id"=> 1],
            ["message" => "Great! we're here to help modernize and accelerate your claims and payments process.","order"=>2, "message_id"=> 1],
            ["message" => "You can find a list of our current openings on our careers page","order"=>3, "message_id"=> 1],
            ["message" => "No worries! Just ring the bell to start over 😀No worries! Just ring the bell to start over 😀","order"=>4, "message_id"=> 1]

        ]);

        DB::table('answersbotman')->insert([
            ["message" => "To best get you the support you need, please call our support team at 123-456-7890 ext. 111","order"=>7, "message_id"=> 3],
            ["message" => "Thank you for chatting with us today!","order"=>7, "message_id"=> 3],
            ["message" => "To best get you the support you need, please call our support team at 123-456-7890 ext. 111","order"=>8, "message_id"=> 3],
            ["message" => "Thank you for chatting with us today!","order"=>8, "message_id"=> 3],
            ["message" => "To best get you the support you need, please call our support team at 123-456-7890 ext. 111","order"=>9, "message_id"=> 3],
            ["message" => "Thank you for chatting with us today!","order"=>9, "message_id"=> 3],
            ["message" => "To best get you the support you need, please call our support team at 123-456-7890 ext. 111","order"=>10, "message_id"=> 3],
            ["message" => "Thank you for chatting with us today!","order"=>10, "message_id"=> 3],
            ["message" => "To best get you the support you need, please call our support team at 123-456-7890 ext. 111","order"=>11, "message_id"=> 3],
            ["message" => "Thank you for chatting with us today!","order"=>11, "message_id"=> 3],
            ["message" => "To best get you the support you need, please call our support team at 123-456-7890 ext. 111","order"=>12, "message_id"=> 3],
            ["message" => "Thank you for chatting with us today!","order"=>12, "message_id"=> 3],
            ["message" => "To best get you the support you need, please call our support team at 123-456-7890 ext. 111","order"=>13, "message_id"=> 3],
            ["message" => "Thank you for chatting with us today!","order"=>13, "message_id"=> 3],
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

        DB::table('answersbotman')->insert([
            ["message" => "didnt get you","order"=>17,"message_id"=>6],
            ["message" => "didnt get you","order"=>18,"message_id"=>6],
            ["message" => "didnt get you","order"=>19,"message_id"=>6]
        ]);

        DB::table('answersbotman')->insert([
            ["message" => "Great! Let me take you to the right place.","order"=>20,"message_id"=>7],
            ["message" => "Great! Let me take you to the right place.","order"=>21,"message_id"=>7],
            ["message" => "Great! Let me take you to the right place.","order"=>22,"message_id"=>7],
            ["message" => "I’m a current user of CheckinAsyst looking for support","order"=>23,"message_id"=>7],
        ]);

        DB::table('answersbotman')->insert([
            ["message" => "Different practices have tailored CheckinAsyst to meet their unique needs. Please reach out to your doctor’s office directly for resolving your queries.","order"=>24,"message_id"=>8],
            ["message" => "Hope I was able to help.","order"=>24,"message_id"=>8],
            ["message" => "Don’t worry, we have your back. Please have your organization’s SPOC for CheckinAsyst raise a ticket on: support.healthasyst.com","order"=>25,"message_id"=>8],
            ["message" => "Alternatively, you can also reach us at: +1 (404) 596 8228 and then select Option #2.","order"=>25,"message_id"=>8],
            ["message" => "Thank you for enquiring.","order"=>25,"message_id"=>8],
       
        ]);
    }
}
