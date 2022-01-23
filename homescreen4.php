<?php 
include 'header.php';
?>
<!DOCTYPE html>
<html lang="nl">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Scout-Online | SW3LBP</title>
    <link rel="stylesheet" href="all.min.css" />
    <link rel="stylesheet" href="slick.css">
    <link rel="stylesheet" href="slick-theme.css">
    <link rel="stylesheet" href="magnific-popup.css">
    <link rel="stylesheet" href="bootstrap4.min.css" />
    <link rel="stylesheet" href="templatemo-style.css" />
    <link rel="icon" type="image/png" href="favicon.ico"/>
  </head>
<body>    
    <section id="hero" class="text-white tm-font-big tm-parallax">
      <nav class="navbar navbar-expand-md tm-navbar" id="tmNav">              
        <div class="container">   
          <div class="tm-next">
              <a href="#uitloggen" class="navbar-brand">Uitloggen</a>
          </div>             
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
            <i class="fas fa-bars navbar-toggler-icon"></i>
          </button>
          <div class="navbar-collapse collapse" id="navbarSupportedContent" style="">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                  <a class="nav-link tm-nav-link" href="#aanmelden">Aan/afmelden</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link tm-nav-link" href="#magazijn">Magazijn</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link tm-nav-link" href="#zoka">Zoka</a>
              </li>       
	      <li class="nav-item">
                  <a class="nav-link tm-nav-link" href="#instellingen">Instellingen</a>
              </li>  
            </ul>
          </div>        

        </div>
      </nav>
      <div class="text-center tm-hero-text-container">
        <div class="tm-hero-text-container-inner">
            <h2 class="tm-hero-title"><?php $getal5 = ucwords(strtolower($getal1)); echo "Welkom terug ".$getal5; ?>, bij Scout-online</h2>
            <p class="tm-hero-subtitle">
              SW3/LBP
              <br><?php echo $group;?>
            </p>
        </div>        
      </div> 
    </section>
    <section id="aanmelden" class="tm-section-pad-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <img src="the-town-01.jpg" alt="Image" class="img-fluid tm-intro-img">
          </div>
          <div class="col-lg-6">
            <div class="tm-intro-text-container">
                <h2 class="tm-text-primary mb-4 tm-section-title">Opkomsten</h2>
                <p class="mb-4 tm-intro-text">
                  In het opkomstenportaal kun je bepaalde handige tools vinden, zoals de tool
                  waarmee je je kunt aan of afmelden. </br> Ook de organisatie van de opkomst,
                  kan hier alles inzetten.
                </p>

                <p class="mb-5 tm-intro-text">
                  Al heb je nog ideeën over wat beter kan, laat het weten want dan word dit aangepast of toegevoegd. </p>
                <div class="tm-next">
                  <a href="aanafmelden.php" class="tm-intro-text tm-btn-primary">Opkomstenportaal</a>
                </div>
            </div>
          </div>
        </div>
      </div>
      <section id="magazijn" class="tm-section-pad-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <img src="the-town-02.jpg" alt="Image" class="img-fluid tm-intro-img">
          </div>
          <div class="col-lg-6">
            <div class="tm-intro-text-container">
                <h2 class="tm-text-primary mb-4 tm-section-title">Magazijn</h2>
                <p class="mb-4 tm-intro-text">
                  Hier kun je je magazijnlijsten invullen digitaal en zie je ook gelijk wat de actuele voorraad is. </br> Zorg ervoor dat je de magazijnlijsten op tijd inleverd, anders kan het magazijn dit niet meer verwerken.
                </p>

                <p class="mb-5 tm-intro-text">
                  Al heb je nog ideeën over wat beter kan, laat het weten want dan word dit aangepast of toegevoegd. </p>
                <div class="tm-next">
                  <a href="aanafmelden.php" class="tm-intro-text tm-btn-primary">Magazijnlijst maken</a>
                </div>
            </div>
          </div>
        </div>
      </div>
      <section id="zoka" class="tm-section-pad-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <img src="the-town-03.jpg" alt="Image" class="img-fluid tm-intro-img">
          </div>
          <div class="col-lg-6">
            <div class="tm-intro-text-container">
                <h2 class="tm-text-primary mb-4 tm-section-title">Zokaportaal</h2>
                <p class="mb-4 tm-intro-text">
                  Alles wat je voor het zomerkamp moet regelen, gebeurd hier. <br> Je kunt hier al je informatie inzetten, en die informatie kun je andere teamleden zien en bewerken.
                </p>
                <a class="nav-link tm-nav-link" href="aanafmelden.php">Aan/afmelden</a>

                <p class="mb-5 tm-intro-text">
                  Al heb je nog ideeën over wat beter kan, laat het weten want dan word dit aangepast of toegevoegd. </p>
                <div class="tm-next">
                  <a href="zoka.php" class="tm-intro-text tm-btn-primary">Zokaportaal</a>
                </div>
            </div>
          </div>
        </div>
      </div>
     <section id="instellingen" class="tm-section-pad-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <img src="the-town-05.jpg" alt="Image" class="img-fluid tm-intro-img">
          </div>
          <div class="col-lg-6">
            <div class="tm-intro-text-container">
                <h2 class="tm-text-primary mb-4 tm-section-title">Instellingen</h2>
                <p class="mb-4 tm-intro-text">
                  Hier kun je al je instellingen aanpassen en scout-online je eigen stijl geven. 
                </p>
                <a class="nav-link tm-nav-link" href="aanafmelden.php">Aan/afmelden</a>

                <p class="mb-5 tm-intro-text">
                  Al heb je nog ideeën over wat beter kan, laat het weten want dan word dit aangepast of toegevoegd. </p>
                <div class="tm-next">
                  <a href="changewwindex.php" class="tm-intro-text tm-btn-primary">Instellingen</a>
                </div>
            </div>
          </div>
        </div>
      </div>
      <section id="uitloggen" class="tm-section-pad-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <img src="the-town-04.jpg" alt="Image" class="img-fluid tm-intro-img">
          </div>
          <div class="col-lg-6">
            <div class="tm-intro-text-container">
                <div class="tm-next">
                  <br><br><br><br>
                  <a href="selectgroup.php" class="tm-intro-text tm-btn-primary">Uitloggen</a>
                </div><br><br><br><br>
            </div>
          </div>
        </div>
      </div>
    </div></section>
    
    <script src="jquery-1.9.1.min.js"></script>     
    <script src="slick.min.js"></script>
    <script src="jquery.magnific-popup.min.js"></script>
    <script src="jquery.singlePageNav.min.js"></script>     
    <script src="bootstrap5.min.js"></script> --&gt; 
    <script>

      function getOffSet(){
        var _offset = 450;
        var windowHeight = window.innerHeight;

        if(windowHeight > 500) {
          _offset = 400;
        } 
        if(windowHeight > 680) {
          _offset = 300
        }
        if(windowHeight > 830) {
          _offset = 210;
        }
        return _offset;
      }
      function setParallaxPosition($doc, multiplier, $object){
        var offset = getOffSet();
        var from_top = $doc.scrollTop(),
          bg_css = 'center ' +(multiplier * from_top - offset) + 'px';
        $object.css({"background-position" : bg_css });
      }

      // Parallax function
      // Adapted based on https://codepen.io/roborich/pen/wpAsm        
      var background_image_parallax = function($object, multiplier, forceSet){
        multiplier = typeof multiplier !== 'undefined' ? multiplier : 0.5;
        multiplier = 1 - multiplier;
        var $doc = $(document);
        // $object.css({"background-attatchment" : "fixed"});

        if(forceSet) {
          setParallaxPosition($doc, multiplier, $object);
        } else {
          $(window).scroll(function(){          
            setParallaxPosition($doc, multiplier, $object);
          });
        }
      };

      var background_image_parallax_2 = function($object, multiplier){
        multiplier = typeof multiplier !== 'undefined' ? multiplier : 0.5;
        multiplier = 1 - multiplier;
        var $doc = $(document);
        $object.css({"background-attachment" : "fixed"});
        $(window).scroll(function(){
          var firstTop = $object.offset().top,
              pos = $(window).scrollTop(),
              yPos = Math.round((multiplier * (firstTop - pos)) - 186);              

          var bg_css = 'center ' + yPos + 'px';

          $object.css({"background-position" : bg_css });
        });
      };
      
      $(function(){
        // Hero Section - Background Parallax
        background_image_parallax($(".tm-parallax"), 0.30, false);
        background_image_parallax_2($("#contact"), 0.80);   
        
        // Handle window resize
        window.addEventListener('resize', function(){
          background_image_parallax($(".tm-parallax"), 0.30, true);
        }, true);

        // Detect window scroll and update navbar
        $(window).scroll(function(e){          
          if($(document).scrollTop() > 120) {
            $('.tm-navbar').addClass("scroll");
          } else {
            $('.tm-navbar').removeClass("scroll");
          }
        });
        
        // Close mobile menu after click 
        $('#tmNav a').on('click', function(){
          $('.navbar-collapse').removeClass('show'); 
        })

        // Scroll to corresponding section with animation
        $('#tmNav').singlePageNav();        
        
        // Add smooth scrolling to all links
        // https://www.w3schools.com/howto/howto_css_smooth_scroll.asp
        $("a").on('click', function(event) {
          if (this.hash !== "") {
            event.preventDefault();
            var hash = this.hash;

            $('html, body').animate({
              scrollTop: $(hash).offset().top
            }, 400, function(){
              window.location.hash = hash;
            });
          } // End if
        });

        // Pop up
        $('.tm-gallery').magnificPopup({
          delegate: 'a',
          type: 'image',
          gallery: { enabled: true }
        });

        // Gallery
        $('.tm-gallery').slick({
          dots: true,
          infinite: false,
          slidesToShow: 5,
          slidesToScroll: 2,
          responsive: [
          {
            breakpoint: 1199,
            settings: {
              slidesToShow: 4,
              slidesToScroll: 2
            }
          },
          {
            breakpoint: 991,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 2
            }
          },
          {
            breakpoint: 767,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
        ]
        });
      });
    </script>
  	<style>
		.tm-navbar {
    position: absolute;
    width: 100%;
    z-index: 1000;
    background-color: transparent;
    transition: all 0.3s ease;
}
	      </style>
</body>
</html>
