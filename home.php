<?php include 'mail.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SeMa Electric</title>
    <!-- Css -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Arima&display=swap" rel="stylesheet">
    <!-- Icon tab -->
    <link rel="icon" href="./images/logoTab.png" type="image/x-icon">
    <!-- Owl Carousel json -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" />

</head>

<body>

    <div class="animation">
        <a href="#home"><img src="./images/sema2.jpg" alt="sema-electric" id="logo"></a>
    </div>

    <!-- Bara de navigatie -->

    <div class="navbar" id="home">
        <nav class="navigation">
            <div class="logo">
                <a href="#home"><img src="./images/sema2.jpg" alt="sema-electric"></a>
            </div>
            <div class="hamburger-menu">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
            <ul class="nav-item" id="items">

                <li class="list-item">
                    <a href="#home" class="link" id="hiddenlink">Home</a>
                </li>

                <li class="list-item">
                    <a href="#desprenoi" class="link">Despre Noi</a>
                </li>

                <li class="list-item">
                    <a href="#portofoliu" class="link">Portofoliu</a>
                </li>

                <li class="list-item">
                    <a href="#contact" class="link">Contact</a>
                </li>

                <li class="list-item">
                    <a href="https://www.facebook.com/SeMaelectric" id="social" class="link">
                        <i class="fa-brands fa-facebook-square"></i>
                    </a>
                </li>

                <li class="list-item">
                    <a href="https://www.instagram.com/semaelectric/" id="social" class="link">
                        <i class="fa-brands fa-instagram-square"></i>
                    </a>
                </li>

            </ul>
        </nav>
    </div>
`
    <!-- Hero section -->

    <section class="hero">
        <div class="hero-container">
            <h1>SeMa Electric</h1>
            <h2>Durabilitate si Confort</h2>
            <a href="#contact">Contacteaza-ne!</a>
        </div>
    </section>

    <div class="jumpBtn">
        <button id="jump"><i class="fa-solid fa-arrow-up"></i></button>
    </div>

    <!--  furnizori -->

    <section class="furnizori">
        <div class="container-furn">
            <div class="titluFurnizori">
                <h1>Furnizori</h1>
            </div>
            <div class="images" id="img1">
                <img src="./images/furnizori/gewiss.png" alt="gewiss" style="width: 200px;">
            </div>
            <div class="images" id="img2">
                <img src="./images/furnizori/vimar.png" alt="vimar" style="width: 200px;">
            </div>
            <div class="images" id="img3">
                <img src="./images/furnizori/schneider.png" alt="schneider-electric" style="width: 200px;">
            </div>
        </div>
    </section>

    <!-- Despre Noi -->

    <section class="despreNoi" id="desprenoi">
        <div class="container-despre">
            <div class="textInfo">
                <h1>Ceva despre noi</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse quaerat molestias tempora architecto, explicabo accusantium obcaecati temporibus sed perferendis! Pariatur rerum facere maxime sit, ratione porro illum corrupti ut sed.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse quaerat molestias tempora architecto, explicabo accusantium obcaecati temporibus sed perferendis! Pariatur rerum facere maxime sit, ratione porro illum corrupti ut sed.</p>
            </div>

            <div class="infoImages">
                <img src="./images/Portofoliu/portofoliu4.jpg" alt="iluminat">
            </div>
        </div>
    </section>


    <!-- Testimoniale -->

    <section class="testimoniale" id="testimoniale">
        <div class="main-testimoniale">
            <div class="titluTestimoniale">
                <h1>Ce spun clientii nostri</h1>
            </div>
            <div class="testimonial-content owl-carousel">
                <div class="container-testimoniale">
                    <div class="informatiiclient">
                        <img src="./images/icon.png" alt="info" style="max-width: 60px; border-radius: 50%">
                        <h1>Nume client 1</h1>
                    </div>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                </div>

                <div class="container-testimoniale">
                    <div class="informatiiclient">
                        <img src="./images/icon.png" alt="info" style="max-width: 60px; border-radius: 50%">
                        <h1>Nume client 2</h1>
                    </div>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                </div>
                <div class="container-testimoniale">
                    <div class="informatiiclient">
                        <img src="./images/icon.png" alt="info" style="max-width: 60px; border-radius: 50%">
                        <h1>Nume client 3</h1>
                    </div>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                </div>
                <div class="container-testimoniale">
                    <div class="informatiiclient">
                        <img src="./images/icon.png" alt="info" style="max-width: 60px; border-radius: 50%">
                        <h1>Nume client 4</h1>
                    </div>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                </div>
                <div class="container-testimoniale">
                    <div class="informatiiclient">
                        <img src="./images/icon.png" alt="info" style="max-width: 60px; border-radius: 50%">
                        <h1>Nume client 5</h1>
                    </div>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                </div>
                <div class="container-testimoniale">
                    <div class="informatiiclient">
                        <img src="./images/icon.png" alt="info" style="max-width: 60px; border-radius: 50%">
                        <h1>Nume client 6</h1>
                    </div>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                </div>
            </div>
        </div>
    </section>


    <!-- Categorii de produse -->

    <section class="catProduse" id="produse">
        <div class="mainProduse">
            <div class="titluProduse">
                <h1>Categorii Produse</h1>
            </div>
            <div class="containerProduse">
                <img src="./images/Produse/poza1.jpg" style="max-width: 100%;" alt="priza">
                <img src="./images/Produse/poza3.jpg" style="max-width: 100%;" alt="priza">
                <img src="./images/Produse/poza2.jpg" style="max-width: 100%;" alt="siguranta">
                <img src="./images/Produse/poza4.jpg" style="max-width: 100%;" alt="priza">
                <img src="./images/Produse/poza1.jpg" style="max-width: 100%;" alt="priza">
                <img src="./images/Produse/poza3.jpg" style="max-width: 100%;" alt="siguranta">
            </div>
        </div>
    </section>


    <!-- Portofoliu -->

    <section class="portofoliu" id="portofoliu">
        <div class="mainPortofoliu">
            <div class="titluPortofoliu">
                <h1>Portofoliu</h1>
            </div>
            <div class="containerPortofoliu">
                <div class="gridItem">
                    <img src="./images/Portofoliu/portofoliu3.jpg" alt="banda led">
                </div>
                <div class="gridItem">
                    <img src="./images/Portofoliu/portofoliu2.jpg" alt="banda led">
                </div>

                <div class="gridItem">
                    <img src="./images/Portofoliu/portofoliu1.jpg" alt="lampa">
                </div>
            </div>
        </div>
    </section>


    <!-- Contact -->

    <section class="contact" id="contact">
        <div class="mainContact">
            <div class="titluContact">
                <h1>Contacteaza-ne</h1>
            </div>
            <div class="container-contact">
                    <form action="" method="post">
                        <input type="text" name="nume" placeholder="Numele dumneavoastra">
                        <input type="email" name="email" placeholder="Email-ul dumneavoastra">
                        <input type="number" name="telefon" placeholder="Numarul dumneavostra de telefon">
                        <textarea name="message" cols="30" rows="10" placeholder="Mesajul dumneavostra..."></textarea>
                        <button type="submit" name="submit" class="btn">Trimite</button>
                    </form>
                <div class="desprenoi">
                    <div class="sau">
                        <h1>Sau:</h1>
                    </div>
                    <a href="tel: 0722 222 222"><i class="fa-solid fa-phone"></i> 0722 222 222</a>
                    <a href="#" class="link_despre"><i class="fa-brands fa-facebook-square"></i>facebook</a>
                    <a href="#" class="link_despre" s><i class="fa-brands fa-instagram-square"></i>instagram</a>
                </div>
            </div>
        </div>
    </section>


    <!-- Footer -->

    <footer>
        <div class="linkuri">
            <h1 class="title_meniu_footer">Meniu</h1>
            <li class="list-item">
                <a href="#home">Home</a>
            </li>
            <li class="list-item">
                <a href="#desprenoi">Despre noi</a>
            </li>
            <li class="list-item">
                <a href="#produse">Produse</a>
            </li>
            <li class="list-item">
                <a href="#portofoliu">Portofoliu</a>
            </li>

        </div>

        <div class="retele_sociale">
            <h1 class="title_meniu_footer">Retele Sociale</h1>

            <li class="list-item">
                <a href="https://www.facebook.com/SeMaelectric" id="footer_social">
                    <i class="fa-brands fa-facebook-square"></i>facebook
                </a>
            </li>

            <li class="list-item">
                <a href="https://www.instagram.com/semaelectric/" id="footer_social">
                    <i class="fa-brands fa-instagram-square"></i>instagram
                </a>
            </li>
        </div>
    </footer>

    <!-- Owl Carousel json -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('.testimonial-content').owlCarousel({
                loop: true,
                nav: false,
                dots: true,
                autoplay: true,
                autoplayTimeout: 2500,
                autoplayHoverPause: true,
                margin: 10,
                responsive: {
                    0: {
                        items: 1
                    },
                    500: {
                        items: 2
                    },
                    800: {
                        items: 3
                    },
                    1000: {
                        items: 4
                    }
                }
            })
        });
    </script>

    <!-- Hamburger menu -->
    <script src="./javascript/hamburger-menu.js"></script>
    <!-- Scroll navbar -->
    <script src="./javascript/scroll.js"></script>
    <!-- Gsap -->
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/gsap-latest-beta.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/ScrollTrigger.min.js"></script>
    <script src="./javascript/gsap.js"></script>
</body>

</html>