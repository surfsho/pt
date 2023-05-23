<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Home</title>
        {!! SEO::generate(true) !!}
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        @vite("resources/css/app.css")

              <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/assets/css/chat.min.css">
    <script>
        var botmanWidget = {
            aboutText: 'patientconnect help',
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
           
            <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script> 
<script type="text/javascript">
    $(window).on('load',function() {
 $("#staticBackdrop").modal('toggle')
    });
</script>    

</head>
    <body class="antialiased" style="background-image:none;">
    @include('cookie-consent::index')
        <header class="header">
        <nav class="navbar navbar-expand-lg">
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
        <div  class="hero">
            <div class="textc">
            <h1>Dental Patient Communication Software for Small & Medium Offices</h1>
            <p>Empower Your Practice with a Seamless PatientCommunication Platform</p>
            <p>Connect, Manage, Coordinate and Follow-up withPatients by the Power of Technology</p>
</div>
            <div class="rowcol">
            <div class="rowcol" style="position:relative;right:1vw;">
            <img src="Group.png" class="group">
            <img src="Rectangle9420.png" style="width:70vw;">
            <img src="left-arrow.png" class="group2">
            </div>
            <div class="textbc">
                <p class="btext">12+</p>
                <p class="ctext">Years Experience</p>
                <p class="btext">800+</p>
                <p class="ctext">Project Done</p>
                <p class="btext">500+</p>
                <p class="ctext">Happy Clients</p>
            </div>
            </div>
            <div class="rowcol buttons2">
                <button class="btn btn-primary">Get Started</button>
                <button class="btn btn-outline-primary">Demo Videos</button>
            </div>
</div>
    <div>
        <div class="rowcol" style="height:30vw;">
        <img src="Rectangle3921.png" style="width:50vw;">
        <div class="textban">
            <p class="textbanc">Patient Connect is an easy to use and integrated solution for healthcare providers</p>
            <p class="textbank">The Patient Connect is a patient communication and automation solution that automates tasks such as scheduling appointments, sending reminder messages, and tracking patient progress</p>
            
        </div>
</div>
        <div class="textbankc rowcol" style="margin-left:25vw;">
            <img src="Group1261153396.png" style="width:8vw;height:8vw;">
            <p>HIPAA Compliant</p>
            <img src="Group1000002244.png" style="width:8vw;height:8vw;">
            <p>Technical Competence</p>
            <img src="Group1000002245.png" style="width:8vw;height:8vw;">
            <p>Implementations</p>
        </div>
    </div>
    <div class="rowcol plusabout">
        <div class="bl2">
            <div class="rowcol"><p class="colorblock">20</p><p class="plus">+</p></div>
            <p>YEARS EXPERIENCE</p>
        </div>
        <div class="bl">
            <p class="colortext">ABOUT US</p>
            <p class="boldtext">Lorem ipsum dolor sit amet consectetur. Dignissim </p>
            <p style="font-size:1.5vw;">Lorem ipsum dolor sit amet consectetur. Dignissim nulla urna iaculis suspendisse hendrerit duis 
Adipiscing neque erat venenatis velit aliquet fringilla faucibus dolor. Tellus lacus at eget.
 Adipiscing neque erat venenatis velit aliquet fringilla faucibus dolor. Tellus lacus at eget.
 Adipiscing neque erat venenatis velit aliquet fringilla faucibus dolor. Tellus lacus at eget.</p>
        </div>
        <img src="Rectangle3919.png" class="bl">
    </div>
    <div>
        <div class="maintext">
        <p>Digitizeyour patient journey</p>
        <p>Click through each step of the patient journey to see what a modern experience looks like</p>
        </div>
        <div class="rowcol">
        <div style="position:relative;">
        <img src="Vector.png" class="bubble">
        <img src="Group1261153352.png" class="phone">
        <img src="Ellipse159.png" class="place1">
        <img src="Ellipse159.png" class="place2">
        <img src="Ellipse159.png" class="place3">
        </div>
        <div class="col2">
        <img src="Rectangle 9434.png" style="margin-left: 10vw;">
        <img src="Rectangle 9433.png" style="margin-left: 11.7vw;">
        <img src="Rectangle 9430.png" style="margin-left: 13.5vw;">
        <img src="Vector 2.png" style="margin-left: 15.1vw;width: 5vw;">
        <img src="Rectangle 9427.png" style="margin-left: 13.4vw">
        <img src="Rectangle 9431.png" style="margin-left: 11.6vw;">
        <img src="Rectangle 9431.png" style="margin-left:9.8vw;">
        </div>
        <div class="text">
            <div class="pre"><p>01</p><p>Find a doctor on Goggle</p></div>
            <div class="pre"><p>02</p><p>Schedule appointment</p></div>
            <div class="pre"><p>03</p><p>Confirm appointment</p></div>
            <div class="pre"><p>04</p><p> Fill our paperwork</p></div>
            <div class="pre"><p>05</p><p> Pay the office</p></div>
            <div class="pre"><p>06</p><p> Leave a review</p></div>
            <div class="pre"><p>07</p><p> Return for a follow-up</p></div>
        </div>
        </div>
    </div>
    <div class="blockw">
        <div class="rowcol">
        
        <img src="Rectangle 9423.png" style="width:100vw;">
        <div class="tbw">
            <p>Get connected in minutes</p>
            <p>Enable PracticeDilly in just 3 simple steps</p>
        </div>
        </div>
        <img src="Rectangle 9424.png" style="position: absolute;
    width: 50vw;
    height: 26vw;
    top: 0px;
    right: 0px;">
        <img src="portrait.png" style="    position: absolute;
    top: -4vw;
    right: 134px;
    width: 30vw;
    height: 30vw;">
</div>
    </div>
    <div class="rowcol" >
        <div class="col3" style="text-align:center;">
            <div class="col2number">
                1
            </div>
            <p>Sign up</p>
            <p>Lorem ipsum dolor sit 
amet consectetur.</p>
        </div>
        <div class="spacer"></div>
        <div class="col3" style="text-align:center;">
            <div class="col2number">
                2
            </div>
            <p>Connect with PMS</p>
            <p>Lorem ipsum dolor sit 
amet consectetur.</p>
        </div>
        <div class="spacer"></div>
        <div class="col3" style="text-align:center;">
            <div class="col2number">
                3
            </div>
            <p>Go Live</p>
            <p>Lorem ipsum dolor sit 
amet consectetur.</p>
        </div>
    </div>
    <div>
        <div class="maintext">
        <p>What our clients say</p>
        
</div>
<img src="Twitter post - 9.png" style="width:99vw;">
</div>
<div class="rowcol" style="padding:10%;">
    <div class="col4">
    <div class="engage" style="background:url('Rectangle 25.png') no-repeat;">
    <p>Empower your team 
with our platform</p>
</div>
<p>We build readymade websites, mobile applications, and elaborate online business services.</p>
</div>
<div class="engag2" style="background:url('Rectangle 24.png') no-repeat;">
    <div class="encard" style="background:url('Rectangle 27.png') no-repeat;">
        <div style="background:#F1F7FF;width:100px;position:relative;left:4vw;margin:auto;left:auto;right:auto;">
        <img src="box-search 1.png" style="width:4vw;height:4vw;">
</div>
        <p>74</p>
        <p>Monthly working
hour savings</p>
</div>
<div class="encard" style="position: relative;top: -100px;background:url('Rectangle 27.png') no-repeat;">
<div style="background: #FFF7E3;width:100px;position:relative;left:4vw;margin:auto;left:auto;right:auto;
">
<img src="empty-wallet 1.png" style="width:4vw;height:4vw;">
</div>
    <p>$1776</p>
    <p>Monthly Cost 
saving</p>
</div>
<div class="encard" style="background:url('Rectangle 27.png') no-repeat;">
    <div style="background: #FFF2F8;width:100px;position:relative;left:4vw;margin:auto;left:auto;right:auto;
">
<img src="code-1 1.png" style="width:4vw;height:4vw;">
</div>
    <p>96%</p>
    <p>Appointment
confirmations</p>
</div>
<div class="encard" style="position: relative;top: -100px;background:url('Rectangle 27.png') no-repeat;">
<div style="background: #DEFFEE;width:100px;position:relative;left:4vw;margin:auto;left:auto;right:auto;
">
<img src="chart-square 1.png" style="width:4vw;height:4vw;">
</div>
    <p>74</p>
    <p>Monthly working
hour savings</p>
</div>
</div>
</div>
<div class="blockw">
        <div class="rowcol">
        <div class="block">
        <img src="Rectangle 30.png" style="width:80vw;">
        <div style="position:absolute;top:5vw;width:40vw;left:4vw;">
            <p style="font-weight:bold;font-size:30px;">Subscribe Newsletter</p>
            <p style="font-size:25px;">I will update good news and promotion service not spam</p>
        </div>
        
        
        <img src="Rectangle 31.png" style="width: 30vw;
    position: absolute;
    top: 0;
    right: 0;">
            <div class="form-control" style="border-radius:20px;width:fit-content;position:absolute;top:5vw;
    right:15vw;">
                <input type="text" style="font-size:1vw;border:none;width:20vw;" placeholder="Enter your email address">
                <button class="btn btn-primary">Contact now</button>
            </div>
        </div>
</div>
</div>
<section class="rflex" style="background-color: #3D9DE1;color:white;">
            <div style="width: 300px;">
                <img src="https://www.outreachtek.com/assets/img/patient-connect.png" width="120" height="50">
                
                <p>Regístrate y disfruta de todas las ventajas que te ofrecemos, introduce tus </p>
            </div>
            <div>
                <p style="font-weight:bold;">
                Useful Links
                </p>
                <p>Home</p>
                <p style="font-weight:bold;">Features</p>
                
                <p>Whatsapp Messaging</p>
                <p>Appointment Reminders</o>
                <p>Two Way Texting</p>
                <p>Patient Digital Forms</p>
               <p>Patients Recall</p>
            </div>
            <div>
                
            <p style="font-weight:bold;">Features</p>
            <p>   Pre & Post Care Messaging</p>
            <p>   Broadcast Messaging </p>
        <p>   Marketing Campaigns  </p>
        <p>    Reputation Management </p>
          <p>      Insurance Verification </p>
            <p>    Caller ID </p>
            <p>    Virtual Waiting Room </p>
                
            </div>
            <div>
                
            <p style="font-weight:bold;">Features</p>
            <p>   Pre & Post Care Messaging</p>
            <p>   Broadcast Messaging </p>
        <p>   Marketing Campaigns  </p>
        <p>    Reputation Management </p>
          <p>      Insurance Verification </p>
            <p>    Caller ID </p>
            <p>    Virtual Waiting Room </p>
                
            </div>
            <div>
                
            <p style="font-weight:bold;">Features</p>
            <p>   Pre & Post Care Messaging</p>
            <p>   Broadcast Messaging </p>
        <p>   Marketing Campaigns  </p>
        <p>    Reputation Management </p>
          <p>      Insurance Verification </p>
            <p>    Caller ID </p>
            <p>    Virtual Waiting Room </p>
                
            </div>
            <div>
                <p style="font-size:28px;">Follow us</p>
                <div style="flex-direction:row !important;margin:0px;justify-content:space-between;width:100%;">
                    <img src="facebook.png">
                    <img src="instagram.png">
                    <img src="discord.png">
                    <img src="twitter.png">
                </div>
            </div>
            
        </section>
        <section style="background-color: #3D9DE1;color:white;padding:5px;border-top:1px solid white;">
            <p style="margin-left:74vw;">© All rights reserved. Made by Information Data Systems</p>
</section>
    </body>
</html>
