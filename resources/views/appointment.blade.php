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
 let items = document.querySelectorAll('.carousel .carousel-item')

items.forEach((el) => {
    console.log(el);
    const minPerSlide = 5
    let next = el.nextElementSibling
    for (var i=1; i<minPerSlide; i++) {
        if (!next) {
            // wrap carousel by using first child
        	next = items[0]
      	}
        let cloneChild = next.cloneNode(true)
        el.appendChild(cloneChild.children[0])
        next = next.nextElementSibling
    }
})
    });

    

</script>    

</head>
    <body class="antialiased" style="background-image:none;">
    @include('cookie-consent::index')
        <header class="header">
        <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="#" style="margin-left:5vw;"><img src="https://www.outreachtek.com/assets/img/patient-connect.png"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto me-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        
        <li class="nav-item dropdown dropdown-center">
          <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Features
          </a>
          <div class="dropdown-menu hop">
          <ul>
            <li><a class="dropdown-item" href="#">Whatsapp Mesaaging</a></li>
            <li><a class="dropdown-item" href="#">Appointment Reminders</a></li>
            
            <li><a class="dropdown-item" href="#">Two way Texting</a></li>
            <li><a class="dropdown-item" href="#">Patient Digital Forms</a></li>
            <li><a class="dropdown-item" href="#">Patient Recall</a></li>
            <li><a class="dropdown-item" href="#">Pre And Post Care Messaging</a></li>
            <li><a class="dropdown-item" href="#">Broadcast Messaging</a></li>
            <li><a class="dropdown-item" href="#">Marketing Campaigns</a></li>
            <li><a class="dropdown-item" href="#">Reputation Management</a></li>
            <li><a class="dropdown-item" href="#">Insurance verification</a></li>
            <li><a class="dropdown-item" href="#">SmartCaller</a></li>
            
            <li><a class="dropdown-item" href="#">Virtual Check-In</a></li>
          </ul>
            </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
        <li class="nav-item ">
          <a class="nav-link active" aria-current="page" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Contact</a>
        </li>
        
      </ul>
      <button class="btn btn-primary btn-lg ms-auto" style="margin-right:5%;">Schedule a Demo</button>
        </nav>
        </header>
        <div  class="hero d-flex justify-content-between">
        <div>
         <p class="dental-appointment">Appointment Reminders</p>
         <p class="prevent-patient">Prevent Patient</p>
         <div class="d-flex">
         <div class="noshows-gap"></div>
         <p class="noshowsat">No-Shows At </p>
        </div>
         <div class="d-flex align-items-center">
         <div class="yourpracticeline "></div>
         <p class="yourpractice">Your Practice</p>
         </div>
         <div style=" position:relative;
    background-image:url('image 16.png');
    background-color: #2694E1;
    width:100%;
    height:350px;">
         <div class="johndoebox2">
         <div class="johndoeboxp">
         Automatic Appointment Confirmation
         </div>
         <div class="johndoeboxtext">
         <img src="check-mark.png">
         <p>Hi John Deo</p>
         <p>You have an appointment with Dr. Wills John on Monday, 2023-02-13. Please reply 'Y' to Confirm or 'N' to reschedule.  Thanks From Team DentalDoc</p>
         </div>
         </div>
         </div>
</div>
<div class="flexbox">
    <p class="flexboxp">Take advantage of our patient communication platform to minimize missed appointments by sending customized, timely reminder messages.</p>
    <img src="Union.png" style="width:80%;height:40vw;">
    <div class="texttext">
    <p class="textp">Automatic Appointment Confirmations</p>
    <p class="textp2">Patients can easily confirm their appointment by responding to the reminder</p>
    </div>
</div>
</div>

<div class="d-flex justify-content-between schedulebox">
    <div class="scheduleboxtext">
    <p class="scheduleboxtextp">Schedule Appointment Reminders</p>
    <p class="scheduleboxtextp2">Reduce missed appointments by automatically sending personalized reminders to your patients. You can send multiple reminders as per options available prior to the scheduled appointment to ensure maximum attendance</p>
</div>
    <div style="position:relative;width:50%;">
        <img src="Group 1261153480.png" style="position:absolute;left:80px;top:0px;z-index:1;">
        <img src="Group 1261153480.png" style="position:absolute;top:100px;">
    </div>
</div>
        
<div class="d-flex justify-content-around paddedbox">
    <p class="paddedboxtext">What are the benefits of using Automated
 Appointment Reminders?</p>
    <img src="Vector2.png" width="500" height="600" class="ms-auto me-auto" style="position:absolute;left:30%;top:8%;">
    <div class="paddedboxgrid">
        <div class="blue">
            <p>No Missed Appointments</p>
            <p>Improved communication results in fewer missed appointments.</p>
        </div>
        <div class="blue">
            <p>Easy of Communication</p>
            <p>Simplify patient communication with your Pratice</p>
        </div>
        <div class="blue">
            <p>Patient Preference</p>
            <p>2/3rd of Patients Prefer Text Messaging</p>
        </div>
        <div class="blue">
            <p>Saves Time</p>
            <p>Quick,Efficient, concise, and tailored communications</p>
        </div>
</div>
</div>

<div style="margin-top:5%;margin-bottom:5%;">
    <p style="font-size:52px;text-align:center;padding:20px;">Integration</p>
    <div class="carousel slide " data-bs-ride="carousel" style="background-color:#FBE3A4;padding:5%;padding-left:20%;">
        <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="dentrix.png" style="width:10%;height:70%;margin:15px;">
        </div>
        <div class="carousel-item">
        <img src="dentrixenterprise.png" style="width:15%;height:70%;margin:15px;">
        </div>
        <div class="carousel-item">
        <img src="dentrixascend.png" style="width:15%;height:25%;margin:15px;">
        </div>
        <div class="carousel-item">
        <img src="curvedental.png" style="width:15%;height:25%;margin:15px;">
        </div>
        <div class="carousel-item">
        <img src="opendental.png" style="width:15%;height:75%;margin:10px;">
        </div>
        <div class="carousel-item">
        <img src="dentrixenterprise.png" style="width:15%;height:70%;margin:15px;">
        </div>
        <div class="carousel-item">
        <img src="dentrixascend.png" style="width:15%;height:25%;margin:15px;">
        </div>
        <div class="carousel-item">
        <img src="curvedental.png" style="width:15%;height:25%;margin:15px;">
        </div>
        <div class="carousel-item">
        <img src="opendental.png" style="width:15%;height:75%;margin:10px;">
        </div>
</div>
    </div>
</div>
    
    <!-- <div>
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
</div> -->
<section class="rflex" style="background-color: #3D9DE1;color:white;">
            <div style="width: 300px;">
                <img src="logowhite.png" width="120" height="50">
            </div>
            <div>
                <p style="font-weight:bold;font-size:1.5vw;">
                Useful Links
                </p>
                <p>Home</p>
                
</div>
<div>
<p style="font-weight:bold;font-size:1.5vw;">Features</p>
                
                <p>WhatsApp Mesaaging</p>
                <p><a href="/appointment">Appointment Reminders</a></p>
                <p>Two Way Texting</p>
                <p>Patient Digital Forms</p>
</div>
<div>
                
            <p style="font-weight:bold;font-size:1.5vw;">Features</p>
            <p>Patient Recall</p>
            <p>   Pre & Post Care Messaging</p>
            <p>   Broadcast Messaging </p>
        <p>   Marketing Campaigns  </p>
        
                
            </div>
            <div>
                
            <p style="font-weight:bold;font-size:1.5vw;">Features</p>

        <p>    Reputation Management </p>
          <p>      Insurance Verification </p>
            <p>    SmartCaller </p>
            <p>    Virtual Check-In </p>
                
            </div>
            <div>
            
            </div>
            <div style="margin-left:auto;">
                <p style="font-size:28px;">Follow us</p>
                <div style="flex-direction:row !important;margin:0px;justify-content:space-between;width:10vw;">
                    <img src="facebook.png">
                    <img src="instagram.png">
                    <img src="discord.png">
                    <img src="twitter.png">
                </div>
            </div>
            
        </section>
        <section style="background-color: #3D9DE1;color:white;padding:5px;border-top:1px solid white;">
            <p style="margin-left:70vw;margin-top:2vw;margin-bottom:2vw;font-size:1vw;">© All rights reserved. Made by Information Data Systems</p>
</section>
    </body>
</html>
