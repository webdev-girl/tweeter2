
<!DOCTYPE html>
<html lang="en" dir="ltr" class="sr">
    <head>
        <meta charset="utf-8">
        <title>Marketing</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <script src="https://unpkg.com/scrollreveal@4"></script>
         {{-- <script src="https://unpkg.com/scrollreveal"></script> --}}
         <script>
             ScrollReveal({ reset: true });
         </script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=PT+Serif:700i" rel="stylesheet">
        <link rel="stylesheet" href="http://anijs.github.io/lib/anicollection/anicollection.css">
        <!-- End WOWSlider.com HEAD section -->
        {{-- <link rel="stylesheet" type="text/css" href="engine1/style.css" /> --}}

        <link rel="icon" type="image/x-icon" href="../images/favicon.png">
        <link rel="stylesheet" type="text/css" href="{{URL::asset('css/tweeter.css')}}">
    </head>
    <body class="marketing-image">
        <div class="marketing-topnav">
            <ul class="widget-list">
                <li class="widget"><a href="/about"><i class="fab fa-twitter"></i>About</a></li>
                <li class="widget"><a href="/">Let's go Tweeter</a></li>
                <li class="widget"><a href="/about">Company</a></li>
                <li class="widget"><a href="/">Values</a></li>
                <li class="widget"><a href="/contact">Contact</a></li>
                <li class="widget"><a href="/">Blog</a></li>
                <li class="widget"><a href="/terms">Terms</a></li>
                <li class="widget"><a href="/welcome">Sign up</a></li>
                <div id="myNav" class="overlay">
            </ul>
        </div>
            {{-- <a href="/"><i class="fab fa-facebook"></i></a> --}}
            {{-- <li><a href="https://www.facebook.com/sharer/sharer.php?u=http://jorenvanhocht.be" class="social-button " id=""><span class="fa fa-facebook-official"></span></a></li> --}}
            {{-- <a href="#" class="fa fa-twitter"></a>
            <a href="#" class="fa fa-google"></a>
            <a href="#" class="fa fa-linkedin"></a> --}}


        <h1 class="title" class="headline load-hidden" id="main" data-anijs="if: mouseover, do: swing animated">
                 Tweeter
        </h1>
    

        {{-- <nav data-anijs="if: scroll, on: window, do: swing animated, to: footer">

        </nav> --}}
        {{-- <div id="main" data-anijs="if: mouseover, do: swing animated">
                                    Tweeter
        </div> --}}
        <div id="typed-strings">

                <p>Oops! You stumbled accross <strong>Tweeter</strong>
                <h1>Why Tweeter?</h1>
                <p>Want to <em>know</em> more check out our new features, and packages taliored to suit your needs.</p>
        </div>
        <span id="typed"></span>

        {{-- <h1 class="marketing-title">Why Tweeter?</h1> --}}

        <article class="market-article">
                See whats going on in your community or around the globe, stay connected with friends, family, co-workers, or just hang out and make new friends.
                Have a business you want to promote or advertise we have the solution.
        </article>
        <div class="slideshow-container">

            <div class="mySlides fade">
              <div class="numbertext">1 / 3</div>
              <img src="images/social-net-girl.jpg" style="width:100%">
              <div class="text">Causual</div>
            </div>

            <div class="mySlides fade">
              <div class="numbertext">2 / 3</div>
              <img src="images/social-media.png" style="width:100%">
              <div class="text">Business Innovation</div>
            </div>

            <div class="mySlides fade">
              <div class="numbertext">3 / 3</div>
              <img src="images/social-media1.jpg" style="width:100%">
              <div class="text">Networking</div>
            </div>

        </div>
        <br>

        <div style="text-align:center">
          <span class="dot"></span>
          <span class="dot"></span>
          <span class="dot"></span>
        </div>
        <script>
           ScrollReveal().reveal('.headline', { duration: 2000 });
           ScrollReveal().reveal('.widget', { interval: 200 });
         </script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/ScrollMagic.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/plugins/debug.addIndicators.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.9"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <!-- AniJS core library -->
        <script src="https://anijs.github.io/lib/anijs/anijs-min.js"></script>

        <!-- Include to use $addClass, $toggleClass or $removeClass -->
        <script src="https://anijs.github.io/lib/anijs/helpers/dom/anijs-helper-dom-min.js"></script>

         {{-- The scrollreveal helper --}}
        <script src="https://anijs.github.io/lib/anijs/helpers/scrollreveal/anijs-helper-scrollreveal-min.js"></script>
        <script src="js/anijs-min.js"></script>
        <script type="text/javascript" src="{{url::asset('js/marketing.js') }}" ></script>

        <script>
          var typed = new Typed('#typed'; {
            stringsElement: '#typed-strings'
          });
        </script>
        <script>
    var slideIndex = 0;
    showSlides();

    function showSlides() {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("dot");
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      slideIndex++;
      if (slideIndex > slides.length) {slideIndex = 1}
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";
      dots[slideIndex-1].className += " active";
      setTimeout(showSlides, 2000); // Change image every 2 seconds
    }
    </script>
    <div class="wrapper">
       <a  target="_blank" href="your_url_here"><i class="fa fa-3x fa-google-plus"></i></a>
       <a  target="_blank" href="your_url_here"><i class="fa fa-3x fa-facebook-square"></i></a>
       <a  target="_blank" href="your_url_here"><i class="fa fa-3x fa-twitter-square"></i>
   </div></a>
    @include('partials.footer')
    </body>
</html>
