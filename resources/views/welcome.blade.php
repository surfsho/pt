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
          <a class="nav-link active" aria-current="page" href="/pt/public/">Home</a>
        </li>
        
        <li class="nav-item dropdown dropdown-center">
          <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Features
          </a>
          <div class="dropdown-menu hop">
          <ul>
            <li><a class="dropdown-item" href="#">Whatsapp Mesaaging</a></li>
            <li><a class="dropdown-item" href="/pt/public/appointment">Appointment Reminders</a></li>
            
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
        <div  class="hero">
            <div class="textc">
            <h1>Connecting Providers, Patients and Front Office with Seamless Software Solution</h1>
            <p>Unleash Efficiency</p>
            <p>Uncover the Blissful Efficiency of Patient Connect!</p>
</div>
            <div class="rowcol">
            <div class="rowcol" style="position:relative;right:1vw;">
            <img src="Group.png" class="group">
            <img src="Rectangle9420.png" style="width:70vw;">
            <img src="left-arrow.png" class="group2">
            </div>
            <div class="textbc">
                <p class="btext">Significant</p>
                <p class="ctext">Time Savings</p>
                <p class="btext">Boost In</p>
                <p class="ctext">Appointment Attendance</p>
                <p class="btext">Enhanced</p>
                <p class="ctext">Revenue Generation</p>
            </div>
            </div>
            <div class="rowcol buttons2 d-flex justify-content-center">
                <button class="btn btn-primary btn-lg">Get Started</button>
                <button class="btn btn-outline-primary btn-lg">Demo Videos</button>
            </div>
</div>
    <div>
        <div class="rowcol" style="height:30vw;">
        <img src="Rectangle3921.png" style="width:50vw;">
        <div class="textban">
            <p class="textbanc">Patient Connect is an easy to use and integrated solution for healthcare providers</p>
            <p class="textbank">Revolutionizes Patient Communication by automating essential tasks like Appointment Scheduling, Reminder Messages, and Ensuring Seamless Efficiency and Precise Monitoring</p>
            
        </div>
</div>
        <div class="textbankc rowcol" style="margin-left:25vw;">
            <img src="Group1261153396.png" style="width:4vw;height:4vw;">
            <p>HIPAA Compliant</p>
            <img src="Group1000002244.png" style="width:4vw;height:4vw;">
            <p>Protected</p>
            <img src="Group1000002245.png" style="width:4vw;height:4vw;">
            <p>Safeguarded</p>
        </div>
    </div>
    <div class="rowcol plusabout">
        <div class="bl2">
            <div class="rowcol"><p class="colorblock">15+</p><p>Years</p></div>
            <p>of Experience</p>
        </div>
        <div class="bl">
            <p class="colortext">ABOUT US</p>
            <p class="boldtext">OutreachTek Stands Out As A Pioneer In The Dental And Medical Industry </p>
            <p style="font-size:1.5vw;">With years of experience in healthcare management and technology, we possess the expertise to address the unique challenges faced by dental practices. We prioritize data security and compliance with industry regulations, safeguarding sensitive patient information and ensuring HIPAA compliance.</p>
        </div>
        <img src="Rectangle3919.png" class="bl">
    </div>
    <div>
        <div class="maintext">
        <p>The Ultimate Patient Connect Features</p>
        <p>Click on each Feature to learn more</p>
        </div>
        <div class="rowcol">
        <div style="position:relative;">
        <img src="Vector.png" class="bubble">
        <img src="iphone.png" class="phone">
        <img src="Ellipse159.png" class="place1">
        <img src="Ellipse159.png" class="place2">
        <img src="Ellipse159.png" class="place3">
        </div>
        
        <div class="col2">
        <img src="Rectangle 9436.png" >
        <img src="Rectangle 9436.png" >
        <img src="Rectangle 9436.png" >
        <img src="Rectangle 9436.png" >
        <img src="Rectangle 9436.png" >
        <img src="Rectangle 9436.png" >
        <img src="Rectangle 9436.png" >
        </div>
        <div class="text">
            <div class="pre"><p>01</p><p>WhatsApp Messaging</p></div>
            <div class="pre"><p>02</p><p><a href="/pt/public/appointment">Reminders & Confirmation</a></p></div>
            <div class="pre"><p>03</p><p>Digital Forms</p></div>
            <div class="pre"><p>04</p><p>PrePost Care Messaging</p></div>
            <div class="pre"><p>05</p><p>Reputation Management</p></div>
            <div class="pre"><p>06</p><p>Insurance Verification</p></div>
            <div class="pre"><p>07</p><p>Patient Recall</p></div>
        </div>
        </div>
        
    </div>
    <div class="blockw">
        
        <div class="tbw">
            <p style="font-weight:bold;font-size:2vw;">Other Features</p>
            <p>Online Scheduling</p>
            <p>Two Way Texting</p>
            <p>Broadcast Messaging</p>
            <p>Marketing Campaigns</p>
            <p>SmartCaller</p>
            <p>Virtual Check-In</p>
            <p>Analytical Dashboard</p>
        </div>
        <img src="Rectangle 9423.png" style="width:99vw;height:24vw;position:absolute;top:0px;">
        
        
        <img src="Rectangle 9424.png" style="position: absolute;
    width: 50vw;
    height: 24vw;
    top: 0px;
    right: 0vw;">
        <img src="portrait.png" style="    position: absolute;
    top: 1vw;
    right: 12vw;
    width: 20vw;">
</div>
    </div>
    <div class="rowcol" style="margin-bottom:10vh;">
        <div class="col3" style="text-align:center;">
            <p class="col2number">
                1
</p>
            <p>Sign up</p>
            <p>Fill out the required information, such as your name, email address, and practice details</p>
        </div>
        <div class="spacer"></div>
        <div class="col3" style="text-align:center;">
            <p class="col2number">
                2
</p>
            <p>Install Synchronizer</p>
            <p>After signing up, you will receive an email with instructions on how to download and install the synchronizer.</p>
        </div>
        <div class="spacer"></div>
        <div class="col3" style="text-align:center;">
            <p class="col2number">
                3
            </p>
            <p>Sync Data With PMS</p>
            <p>Initiate the data sync process by clicking button in the synchronizer application.</p>
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
                <p><a href="/pt/public/">Home</a></p>
                
</div>
<div>
<p style="font-weight:bold;font-size:1.5vw;">Features</p>
                
                <p>WhatsApp Mesaaging</p>
                <p><a href="/pt/public/appointment">Appointment Reminders</a></o>
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
