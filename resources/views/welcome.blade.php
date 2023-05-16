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
                
                background: url(http://localhost:8000/Ellipse6.png) top center;
                background-size: cover;
            
                font-family:sans-serif;
                
                font-size:30px;
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

            .js-cookie-consent {
                position: fixed;
    right: 0;
    background: lightgray;

            }

            .center2 {
                margin-left:200px !important;
            }

            .navbar-brand {
                margin-left:200px;
            }
            .center{
                margin-left:200px;
            }

            .group {
                position: relative;
                top: -350px;
                left: 120px;
            }

            .group2 {
                position: absolute;
                top:250px;
                left:1200px;
            }

            .rowcol {
                display:flex;
            }

            .btext {
                font-weight:bold;
                font-size:35px;
            }

            .ctext {
                color:grey;
                font-size:25px;
            }

            .textban {
                background-color: #2694E1;
                padding:80px;
            }

            .textbanc {
                font-size: 30px;
                color:white;
            }

            .textbank {
                font-size: 22px;
                color:white;
            }

            .textbankc {
                position:absolute;
width: 1139px;
height: 204px;
left: calc(50% - 1139px/2 - 5.5px);
top: 1559px;
padding-top:300px;
background: #FFFFFF;
box-shadow: 0px -4px 18px rgba(0, 0, 0, 0.25);
            
            }

            .textbankc.rowcol {
                justify-content:space-around;
                font-size:24px;
                padding:20px;
            }

            .textbankc.rowcol p {
                padding-top:20px;
            }

            .textc {
                padding:50px;
                text-align:center;
            }

            .textbc {
                margin:20px;
                margin-top:100px;
            }

            .buttons2 {
                text-align:center;
                padding:20px;
                vertical-align:middle;
                margin-left:50vw;
            }

            .plusabout {
                margin-top:200px;
                font-size:25px;
                margin-left:20px;
                justify-content:space-around;
            }

            .colorblock {
                background:#2694E1;
                padding-top:20px;
                padding-left:20px;
                padding-bottom:20px;
                width:50px;
            }

            .plus {
                font-size:50px;
                
            }

            .colortext {
                color:#2694E1;
                font-size: 20px;
            }

            .boldtext {
                font-weight:bold;
                font-size: 40px;
                border-bottom: 3px solid #FBB837;
            }

            .bl {
                width:600px;
            }

            .bl2 {
                width:300px;
            }
            
            </style>
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
      <ul class="navbar-nav me-6 center mb-2 mb-lg-0">
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
        <button class="center2 btn btn-primary">Schedule a Demo</button>
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
            <div class="image">
            <img src="/Group.png" class="group">
            <img src="/Rectangle9420.png">
            <img src="/left-arrow.png" class="group2">
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
        <div class="rowcol">
        <img src="/Rectangle3921.png">
        <div class="textban">
            <p class="textbanc">Patient Connect is an easy to use and integrated solution for healthcare providers</p>
            <p class="textbank">The Patient Connect is a patient communication and automation solution that automates tasks such as scheduling appointments, sending reminder messages, and tracking patient progress</p>
            
        </div>
</div>
        <div class="textbankc rowcol">
            <img src="Group1261153396.png" width="100" height="100">
            <p>HIPAA Compliant</p>
            <img src="Group1000002244.png" width="100" height="100">
            <p>Technical Competence</p>
            <img src="Group1000002245.png" width="100" height="100">
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
            <p>Lorem ipsum dolor sit amet consectetur. Dignissim nulla urna iaculis suspendisse hendrerit duis 
Adipiscing neque erat venenatis velit aliquet fringilla faucibus dolor. Tellus lacus at eget.
 Adipiscing neque erat venenatis velit aliquet fringilla faucibus dolor. Tellus lacus at eget.
 Adipiscing neque erat venenatis velit aliquet fringilla faucibus dolor. Tellus lacus at eget.</p>
        </div>
        <img src="Rectangle3919.png" class="bl">
    </div>
    <div>
        <p>Digitizeyour patient journey</p>
        <p>Click through each step of the patient journey to see what a modern experience looks like</p>
    </div>
    </body>
</html>
