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
            // chatServer: '/pt/public/botman',
            frameEndpoint: '/frame',
            aboutText: 'patientconnect help',
            introMessage: "✋ Hi! I'm from PatientConnect",
            title: "PatientConnect",
            mainColor: '#2694E1',
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
    @include('header')
    <div class="app">
        @yield('content')
    </div>
    @include('footer')
    </body>
</html>