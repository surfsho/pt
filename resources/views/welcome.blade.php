<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        {!! SEO::generate(true) !!}
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        
        <style>
            .hero {
                width: 100%;
                height: 70vh;
                background: url(https://www.outreachtek.com/assets/img/hero-bg.jpg) top center;
                background-size: cover;
                margin-bottom: -200px;
                font-family:sans-serif;
                padding:100px;
                font-size:30px;
                margin-bottom:100px;
            }

            .header {
                
                background: #fff;
                transition: all 0.5s;
                z-index: 997;
                padding: 15px 0;
                top: 40px;
                box-shadow: 0px 2px 15px rgba(25, 119, 204, 0.1);
            }
            .two {
                display:flex;
                padding:30px;
                justify-content:space-around;
            }

            .two div {
                padding: 20px;
            }

            .two p {
                font-size:20px;
            }

            .grid {
                margin:10px;
                margin-left:90px;
                margin-right:90px;
            }
            
            .detail {
                width:500px;
                height:400px;
                text-align:center;
                
                padding:20px;
                padding-top:100px;
                background:#d5e1ed;
                margin:20px;
               
            }

            .detail2 {
                width:500px;
                height:300px;
                padding:20px;
                padding-top:10px;
                background:lightblue;
                margin:20px;
                text-align:left;
            }

            .fres {
                width:100%;
                height:300px;
                background:lightblue;
                text-align:center;
                margin-bottom: 30px;
            }

            .fres h5 {
                padding:20px;
            }

            .contact {
                width:100%;
                height:600px;
                background:lightblue;
               
            }

            .contact > h5, .contact > p {
                text-align: center;
                padding: 15px;
            }

            .flex{
                padding:10px;
                filter:grayscale(1);
            }

            .flex img {
                padding:10px;
            }

            .flex2 {
                display:flex;
                margin-top:80px;
                margin-left:15vw;
            }

            .contact > p {
                font-size:16px;
            }

            .rflex {
                display: flex;
            }

            .rflex div {
                display:flex;
                flex-direction:column;
                margin:50px;
            }

            .each {
                display:flex;
                flex-direction: row;
            }

            .form input, .form textarea {
                border-radius:0px;
                border-color: grey;
            }

            .icon {
                width: 70px;
                height: 70px;
                border: 1px solid grey;
                background: blue;
                border-radius: 5px;
                position: relative;
                left:12vw;
                top: -2vw;
                z-index:1000;
            }

            .icon::before {
                display:block;
                content: '';
                width: 70px;
                height: 70px;
                border: 1px solid grey;
                background: blue;
                border-radius: 5px;
                position: relative;
                left: -10px;
                top:-10px;
                opacity:19%;
                z-index: 1;
            }

            .icon:hover {
                z-index:2;
            }

            .icon:hover::before {
                display:block;
                content: '';
                width: 70px;
                height: 70px;
                border: 1px solid grey;
                background: blue;
                border-radius: 5px;
                position: relative;
                left: -10px;
                top:-10px;
                opacity: 60%;
                z-index: 1;
            }

            i {
                font-size:30px;
                display:inline-flex;
            }

            .icon > i {
                position: relative;
                top:-50px;
            }

            .hop.show {
                list-style:none;
                display: flex !important;
            }

            ul ul {
                list-style-type: none;
            }

            .detail p:nth-of-type(2):hover {
                font-size:20px;
                text-decoration:underline;
            }

            .detail p:nth-of-type(2):hover:after {
                font-size:20px;
                content: '   >';
            }

            .chatbox {
                position: fixed;
                bottom: 10px;
                right:10px;
            }

            .messages {
                width:500px;
                height:500px;
            }

            </style>
              <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/assets/css/chat.min.css">
    <script>
        var botmanWidget = {
            aboutText: 'ssdsd',
            introMessage: "✋ Hi! I'm from PatientConnect",
            title: "PatientConnect"
        };
    </script>
   
    <script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>
       
          <script src="https://kit.fontawesome.com/1ba093438b.js" crossorigin="anonymous"></script>
            <script>
                function submit() {
                    let name = document.querySelector("#exampleFormControlInput1");
                    let email = document.querySelector("#exampleFormControlInput2");
                    let subject = document.querySelector("#exampleFormControlInput3");
                    let message = document.querySelector("#exampleFormControlTextarea1");
                    let formData = new FormData();
                    formData.append('name', name.value);
                    formData.append('email', email.value);
                    formData.append('subject', subject.value);
                    formData.append('message', message.value);
                    fetch('/sendemail',{method:'POST',headers: {
    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
  },body:formData});
                }
            </script>
           

          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script> 
    </head>
    <body class="antialiased" style="background-image:none;">
    @include('cookie-consent::index')
        <header class="header">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <a class="navbar-brand" href="#"><img src="https://www.outreachtek.com/assets/img/patient-connect.png"></a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        
        <li class="nav-item dropdown dropdown-center">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Features
          </a>
          <div class="dropdown-menu hop">
          <ul>
            <li><a class="dropdown-item" href="#">Whatsapp Mesaaging</a></li>
            <li><a class="dropdown-item" href="#">Appointment Reminders</a></li>
            
            <li><a class="dropdown-item" href="#">Two way Testing</a></li>
            <li><a class="dropdown-item" href="#">Patient Digital Forms</a></li>
            <li><a class="dropdown-item" href="#">Patients Recall</a></li>
            <li><a class="dropdown-item" href="#">Pre and post care messaging</a></li>
            <li><a class="dropdown-item" href="#">Broadcast messaging</a></li>
            <li><a class="dropdown-item" href="#">Marketing Campaigns</a></li>
            <li><a class="dropdown-item" href="#">Reputation Management</a></li>
            <li><a class="dropdown-item" href="#">Insurance verification</a></li>
            <li><a class="dropdown-item" href="#">Caller id</a></li>
            
            <li><a class="dropdown-item" href="#">Virtual Meeting room</a></li>
          </ul>
          <ul>
            <li><a class="dropdown-item" href="#">Whatsapp Mesaaging</a></li>
            <li><a class="dropdown-item" href="#">Appointment Reminders</a></li>
            
            <li><a class="dropdown-item" href="#">Two way Testing</a></li>
            <li><a class="dropdown-item" href="#">Patient Digital Forms</a></li>
            <li><a class="dropdown-item" href="#">Patients Recall</a></li>
            <li><a class="dropdown-item" href="#">Pre and post care messaging</a></li>
            <li><a class="dropdown-item" href="#">Broadcast messaging</a></li>
            <li><a class="dropdown-item" href="#">Marketing Campaigns</a></li>
            <li><a class="dropdown-item" href="#">Reputation Management</a></li>
            <li><a class="dropdown-item" href="#">Insurance verification</a></li>
            <li><a class="dropdown-item" href="#">Caller id</a></li>
            
            <li><a class="dropdown-item" href="#">Virtual Meeting room</a></li>
          </ul>
          <ul>
            <li><a class="dropdown-item" href="#">Whatsapp Mesaaging</a></li>
            <li><a class="dropdown-item" href="#">Appointment Reminders</a></li>
            
            <li><a class="dropdown-item" href="#">Two way Testing</a></li>
            <li><a class="dropdown-item" href="#">Patient Digital Forms</a></li>
            <li><a class="dropdown-item" href="#">Patients Recall</a></li>
            <li><a class="dropdown-item" href="#">Pre and post care messaging</a></li>
            <li><a class="dropdown-item" href="#">Broadcast messaging</a></li>
            <li><a class="dropdown-item" href="#">Marketing Campaigns</a></li>
            <li><a class="dropdown-item" href="#">Reputation Management</a></li>
            <li><a class="dropdown-item" href="#">Insurance verification</a></li>
            <li><a class="dropdown-item" href="#">Caller id</a></li>
            
            <li><a class="dropdown-item" href="#">Virtual Meeting room</a></li>
          </ul>
            </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Integrations
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Curve Hero</a></li>
            <li><a class="dropdown-item" href="#">Denticon</a></li>
            
            <li><a class="dropdown-item" href="#">Dentrix</a></li>
            <li><a class="dropdown-item" href="#">Dentrix Ascend</a></li>
            <li><a class="dropdown-item" href="#">Dentrix Enterprise</a></li>
            <li><a class="dropdown-item" href="#">Dolphin</a></li>
            <li><a class="dropdown-item" href="#">Dr chrono</a></li>
            <li><a class="dropdown-item" href="#">Eaglesoft</a></li>
            <li><a class="dropdown-item" href="#">eclincialworks</a></li>
            <li><a class="dropdown-item" href="#">OpenDental</a></li>
            <li><a class="dropdown-item" href="#">Orthotrac</a></li>
            
            <li><a class="dropdown-item" href="#">PracticeWorks</a></li>
            <li><a class="dropdown-item" href="#">Qsi Dental Web(QDw)</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">How it works</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Contact</a>
        </li>
        <button class="btn btn-primary">Schedule a Demo</button>
      </ul>
        </nav>
        </header>
        <section class="hero">
            <h1>Welcome to patient connect</h1>
            <p>Empower Your Practice with a Seamless Patient</br>
Communication Platform</p>
            <p>Connect, Manage, Coordinate and Follow-up with</br>
Patients by the Power of Technology</p>
            <button class="btn btn-primary">Schedule a Demo</button>
        </section>
        <section class="two">
            <img src="https://www.outreachtek.com/assets/img/about.jpg" width="800" height="800">
            <div>
                <h1>Patient Connect is an easy to use and integrated solution for healthcare providers</h1>
                <p>The Patient Connect is a patient communication and automation solution that automates tasks such as scheduling appointments, sending reminder messages, and tracking patient progress</p>
                <div class="row">
                    <div class="col-auto">
                    <i class="fa-solid fa-fingerprint"></i>
                    </div>
                    <div class="col">
                    <h3>HIPAA Compliant</h3>
                    <p>Use it with confidence; use it with safety—Patient Connect is fully compliant with HIPAA regulations, keeping data safe and fully secure.</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-auto">
                <i class="fa-solid fa-gift"></i>
        </div>
        <div class="col">
                    <h3>Technical Competence</h3>
                    <p>We believe quality service is of prime importance, even as technical competence and mastery of cutting-edge technology is in the current scenario.</p>
        </div>
                </div>
                <div class="row">
                    <div class="col-auto">
                <i class="fa-solid fa-atom"></i>
        </div>
        <div class="col-auto">
                    <h3>Implementations</h3>
                    <p>We make everything easy to understand, assimilate and implement</p>
        </div>
                </div>
            </div>
        </section>
        <section>
            <h2 style="text-align:center;">Services</h2>
            <p style="font-size:20px;text-align:center;">The Ultimate Patient Connect Solutions</p>
             <div class="grid">
                <div class="row">
                <div class="col detail">
                    <div class="icon">
                    <i class="fa-solid fa-heart-pulse"></i>
                    </div>
                    <h3>Whatsapp Messaging</h3>
                    <p>WhatsApp is an incredibly popular messaging platform that can be utilized by dental practices to improve communication with patients.</p>
                    <p>Read More</p>
                </div>
                <div class="col detail">
                <div class="icon">
                <i class="fa-solid fa-heart-pulse"></i>
                    </div>
                    <h3>Appointment Reminders</h3>
                    <p>Automatically send out personalized reminders text to your patients. Patients can quickly confirm their appointment by responding</p>
                    <p>Read More</p>
                </div>
                <div class="col detail">
                <div class="icon">
                <i class="fa-solid fa-pills"></i>
                    </div>
                    <h3>Two Way Texting</h3>
                    <p>Take advantage of our messaging platform to text patients in real-time right from your office number and keep the appointments up-to-date.</p>
                    <p>Read More</p>
                </div>
        </div>
        <div class="row">
                <div class="col detail">
                <div class="icon">
                <i class="fa-solid fa-hospital-user"></i>
                    </div>
                    <h3>Patient Digital Forms</h3>
                    <p>Patients can digitally fill a variety of forms that need to be filled in for a variety of purposes, such as registration, consent, liability etc.</p>
                    <p>Read More</p>
                </div>
                <div class="col detail">
                <div class="icon">
                <i class="fa-solid fa-hospital-user"></i>
                    </div>
                    <h3>Patients Recall</h3>
                    <p>With SMS recall, you can seamlessly send out text message to patients to schedule a follow up or for recurring appointment.</p>
                    <p>Read More</p>
                </div>
                <div class="col detail">
                <div class="icon">
                <i class="fa-solid fa-wheelchair"></i>
                    </div>
                    <h3>Pre & Post Care Messaging</h3>
                    <p>Patient Connect automates the process of sending pre and post care instructions to the patients.</p>
                    <p>Read More</p>
                </div>
        </div>
        <div class="row">
                <div class="col detail">
                <div class="icon">
                <i class="fa-solid fa-notes-medical"></i>
                    </div>
                    <h3>Broadcast Messaging</h3>
                    <p>You can now send out specific messages to specific targets at specified times.</p>
                    <p>Read More</p>
                </div>
                <div class="col detail">
                <div class="icon">
                <i class="fa-solid fa-notes-medical"></i>
                    </div>
                    <h3>Marketing Campaigns</h3>
                    <p>You can create awareness and to stay on top of the competition by launching and tracking marketing campaigns.</p>
                    <p>Read More</p>
                </div>
                <div class="col detail">
                <div class="icon">
                <i class="fa-solid fa-notes-medical"></i>
                    </div>
                    <h3>Reputation Management</h3>
                    <p>You can manage and track the reviews about your services</p>
                    <p>Read More</p>
                </div>
        </div>
        <div class="row">
                <div class="col detail">
                <div class="icon">
                <i class="fa-solid fa-notes-medical"></i>
                    </div>
                    <h3>Insurance Verifications</h3>
                    <p>This module helps you to check and verify available insurance cover immediately through links to various payees.</p>
                    <p>Read More</p>
                </div>
                <div class="col detail">
                <div class="icon">
                <i class="fa-solid fa-hospital-user"></i>
                    </div>
                    <h3>Caller ID</h3>
                    <p>With this feature you can know about the identity of your patients when they call you</p>
                    <p>Read More</p>
                </div>
                <div class="col detail">
                <div class="icon">
                <i class="fa-solid fa-hospital-user"></i>
                    </div>
                    <h3>Virtual Waiting Room</h3>
                    <p>Your patients can wait virtually to avail your services. A patient is notified when his/her turn comes.</p>
                    <p >Read More</p>
                </div>
        </div>
            </div>
            
        </section>
        <section class="fres">
            <h5>Integrations</h5>
            <div class="flex">
                <img width="150" height="150" src="https://www.outreachtek.com/assets/img/pdds-denticon-350.webp">
                <img width="150" height="150" src="https://www.outreachtek.com/assets/img/Dentrix-logo.png">
                <img width="150" height="30" src="https://www.outreachtek.com/assets/img/dentrix-ascend.png">
                <img width="150" height="150" src="https://www.outreachtek.com/assets/img/dentrix-enterprise.jfif">
                <img width="150" height="150" src="https://www.outreachtek.com/assets/img/Dentrix-logo.png">
                <img width="150" height="150" src="https://www.outreachtek.com/assets/img/curvedental.svg">
            </div>
        </section>
        <section class="contact">
        <h5>Contact</h5>
        <p>Our mission is to earn the loyalty of our customers and grow our company by developing innovative IT solutions that are world class in quality</p>
        <div class="flex2">
        <div class="detail2">
            <div class="row">
            <div class="col-auto">
            <i class="fa-solid fa-location-dot"></i>
            </div>
            <div class="col-auto">
            <h3>Location</h3>
        
            <p>4000 Livernois Rd, Suite #103, TROY, MI 48098.</p>
        </div>
        </div>
        <div class="row">
            <div class="col-auto">
            <i class="fa-solid fa-envelope"></i>
        </div>
            <div class="col-auto">
            <h3>Email</h3>
            <p>support@idssoft.com</p>
        </div>
        </div>
        <div class="row">
            <div class="col-auto">
            <i class="fa-solid fa-phone"></i>
        </div>
        <div class="col-auto">
            <h3>Call</h3>
            <p>+1 (248)266-9089</p>
        </div>
        </div>
        </div>
        <div class="form">
        <div class="row">
        <div class="col mb-3">
            <label for="exampleFormControlInput1" class="form-label">Your Name</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="name">
        </div>
        <div class="col mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleFormControlInput2" placeholder="name@example.com">
        </div>
        
        </div>
        <div class="col mb-3">
            <label for="exampleFormControlInput1" class="form-label">Subject</label>
            <input type="text" class="form-control" id="exampleFormControlInput3" placeholder="subject">
        </div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Message</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Message"></textarea>
</div>
<button class="btn btn-primary" onclick="submit()">Send Message</button>
        </div>
        
        </div>
        
        </section>
        <section class="rflex">
            <div>
                <img src="https://www.outreachtek.com/assets/img/patient-connect.png">
                
                <p>4000 Livernois Rd,</p>
                <p>Suite #103,</p>
                <p>TROY, MI 48098.</p>
                <p>Phone: +1 (248)266-9089</p>
                <p>Email: support@idssoft.com</p>
            </div>
            <div>
                <p>
                Useful Links
                </p>
                <p>Features</p>
                
                <p>Whatsapp Messaging</p>
                <p>Appointment Reminders</o>
                <p>Two Way Texting</p>
                <p>Patient Digital Forms</p>
               <p>Patients Recall</p>
            </div>
            <div>
                
            <p>Features</p>
            <p>   Pre & Post Care Messaging</p>
            <p>   Broadcast Messaging </p>
        <p>   Marketing Campaigns  </p>
        <p>    Reputation Management </p>
          <p>      Insurance Verification </p>
            <p>    Caller ID </p>
            <p>    Virtual Waiting Room </p>
                
            </div>
            <div>
                <p>Join Our Newsletter</p>
                <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna<p>
                <div style="display:flex;flex-direction:row;">
                    
                    <input class="form-control" type="text">

                    <button class="btn btn-primary">Subscribe</button>
                </div>
            </div>
        </section>
    </body>
</html>
