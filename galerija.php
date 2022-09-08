<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" type = "text/css" href = "style4.css">
    <title>Galerija</title>
</head>
<body>
<header>
        <div class="container">
            <section id="branding">
                <h1><span class="highlight">Gigatron</span></h1>
            </section>
            <nav>
            <ul>
                <li><a href="home.php">Pocetna</a></li>
                <li  class="current"><a href="O nama.php">O nama</a></li>
                <li><a href="#">Artikli</a>
                    <ul>
                        <li><a href="laptop.php.">Laptop</a></li>
                        <li><a href="mobilni.php">Mobilni telefoni</a></li>
                        <li><a href="kucni aparati.php">Kucni aparati</a></li>
                        <li><a href="bela tehnika.php">Bela tehnika</a></li>
                    </ul>
                </li>
                <li><a href="galerija.php">Galerija</a></li>
                <li><a href="#">Kontakt</a>
                    <ul>
                        <li class="kontakt">+381-011-44-14-000</li>
                    </ul>
                </li>
                <li><a href="subscribe.php">Subscribe</a></li>
                <li><a href="sortiranje.php">Sortiranje</a></li>
                <li><a href="pretraga.php">Pretraga</a></li>
            </ul>
            </nav>
        </div>
        <div class="wrap">
            <div id="arrow-left" class="arrow">

            </div>
            <div class="slider">
                <div class="slide slide1">
                    <div class="slide content">
                        <span>SLIKA 1</span>
                    </div>
                </div>
                <div class="slide slide2">
                    <div class="slide content">
                        <span>SLIKA 2</span>
                    </div>
                </div>
                <div class="slide slide3">
                    <div class="slide content">
                        <span>SLIKA 3</span>
                    </div>
                </div>
            </div>
            <div id="arrow-right" class="arrow">

            </div>
        </div>
    <script>
        let sliderImages = document.querySelectorALL('.slide'),
        arrowLeft = document.querySelector('#arrow-left'),
        arrowRight = document.querySelector(#arrow-right),
        current=0;
        function reset(){
            for(let i=0;i<sliderImages.length;i++){
                sliderImages[i].style.display='none';
            }
        }
        function startSlide(){
            reset();
            sliderImages[0].style.display='block';
        }
        function slideLeft(){
            reset();
            sliderImages[current-1].style.display='block';
            current--;
        }
        function slideRight(){
            reset();
            sliderImages[current+1].style.display='block';
            current++;
        }
        arrowLeft.addEventListener('click',function(){
            if(current===0){
                current=sliderImages.length;
            }
            slideLeft();
        });
        arrowRight.addEventListener('click',function(){
            if(current===sliderImages.length-1){
                current=-1;
            }
            slideRight();
        });
        startSlide();
    </script>
</body>
</html>