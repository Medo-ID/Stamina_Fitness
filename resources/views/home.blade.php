<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="shortcut icon" type="image/png" href="../assets/images/logo/logo.png">
    <title>Stamina | Fitness - Home</title>
</head>
<body>
    <div>
        <div id="nav">
          <!-- <svg class="logo_home" id="Calque_1" data-name="Calque 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 145.91 34.97">
            <text transform="translate(39.29 22.33) scale(1 1.2)" font-size="17.74" fill="#f1c513" font-family="KonexyPersonalUseRegular, Konexy Personal Use">S<tspan x="16.53" y="0" letter-spacing="-0.18em">T</tspan><tspan x="29.02" y="0" letter-spacing="0em">AMINA</tspan></text>
            <text transform="translate(84.21 29.65)" font-size="5.17" fill="#f1c513" font-family="CenturyGothic, Century Gothic">FITNESS</text>
            <line x1="102.88" y1="28.22" x2="145.91" y2="28.22" fill="#f1c513" stroke="#f1c513" stroke-miterlimit="10"/>
            <line x1="39.85" y1="28.22" x2="83" y2="28.22" fill="#f1c513" stroke="#f1c513" stroke-miterlimit="10"/>
            <path d="M9.88,19.94,12.94,15,22.17.24h0v0A18.21,18.21,0,0,0,19.48,0,17.48,17.48,0,0,0,2.17,15,18.26,18.26,0,0,0,2,17.49a18,18,0,0,0,.17,2.45A17.48,17.48,0,0,0,16.69,34.75L19,19.94Z" transform="translate(-2 -0.01)" fill="#f1c513"/>
            <path d="M36.79,15A17.47,17.47,0,0,0,22.18.22v0h0L19.82,15H29l-3.07,4.91L16.71,34.75a16.88,16.88,0,0,0,2.77.22,17.48,17.48,0,0,0,17.31-15A16.53,16.53,0,0,0,37,17.49,16.76,16.76,0,0,0,36.79,15Z" transform="translate(-2 -0.01)" fill="#f1c513"/>
          </svg> -->
        <img class="logo_home" src="{{ asset('images/imgs/logo_nav2.png') }}" alt="logo_stamina">
        <div class="log">
            <button class="log-link_container"><a class="log-link" href="{{ url('/app/pages/login') }}">Log In</a></button>
            <button class="log-link_container"><a class="log-link" href="{{ url('/app/pages/register') }}">Sign Up</a></button>
        </div>
        </div>
        <section>
        <img class="img_slider" src="{{ asset('images/imgs/img/bg_sign.jpg') }}" alt="background of home">
        <div class="slide_content"> 
            <h1 style="background-color: #EFC411;color: #111821; margin-bottom: 5px;">Make Yourself Stronger Than  You Excuses</h1>
            <!-- <p style="background-color: #EFC411;color: #111821; margin-top: 5px; width: 500px;">No Matter who you are Or Where you are</p>
            <p style="background-color: #EFC411;color: #111821; margin-top: 5px; width: 500px;">You Can Join us Any Time And Any Where</p> -->
            <div class="join-links">
                <button class="join-link"><a href="{{ url('/app/pages/register') }}">Join us as a Coach</a></button>
                <button class="join-link"><a href="{{ url('/app/pages/register') }}">Join us as a Trainee</a></button>
            </div>
            </div>
        </section>
        <section class="categories">
            <h1 class="categ_header">Workout and Food Categories</h1>
            <p>Get off to a good start </p>
            <div class="all_categ">
              <div class="categ">
                <img src="{{ asset('images/imgs/img/categories/workout_category.jpg') }}" alt="">
                <h3>Pullups</h3>
                <p>Arm and shoulder muscles</p>
              </div>
              <div class="categ">
                <img src="{{ asset('images/imgs/img/categories/food_work.jpg') }}" alt="">
                <h3>Mesomorph diet</h3>
                <p>Mesomorph body</p>
              </div>
              <div class="categ">
                <img src="{{ asset('images/imgs/img/categories/cardio.jpg') }}" alt="">
                <h3>Running</h3>
                <p>Physical activity</p>
              </div>
            </div>
        </section>
        <section class="section3">
            <h1 class="section3_title">What people said <span>About us</span> ?</h1>
            <p class="section3_para">We love hearing from our coach and trainee!</p>
            <div class="all_rating">
              <div class="rating">
                <div>
                  <img class="rating_img" src="{{ asset('images/imgs/img/coachs/Coach1.jpg') }}" alt="">
                  <p class="rating_para">We give a good training experience to our trainee</p>
                </div>
                <h4>Lucian</h4>
                <p>Coach</p>
              </div>
              <div class="rating">
                <div>
                  <img class="rating_img" src="{{ asset('images/imgs/img/coachs/Coach4.jpg') }}" alt="">
                  <p class="rating_para">best platform for those who want healthy body with out going to the gym</p>
                </div>
                <h4>Mary</h4>
                <p>Trainee</p>
              </div>
              <div class="rating">
                <div>
                  <img class="rating_img" src="{{ asset('images/imgs/img/coachs/Coach2.jpg') }}" alt="">
                  <p class="rating_para">Stamina helped me get my self confidence back , i look great , and i feel even better! .</p>
                </div>
                <h4>Youness</h4>
                <p>Trainee</p>
              </div>
              <div class="rating">
                <div>
                  <img class="rating_img" src="{{ asset('images/imgs/img/coachs/Coach3.jpg') }}" alt="">
                  <p class="rating_para">It easy to help our trainee in the platform</p>
                </div>
                <h4>Ayoub</h4>
                <p>Coach</p>
              </div>
            </div>
        </section>
        <section class="section4">
            <div>
              <h1 class="section4_title">What We <span>Offre</span> ?</h1>
              <p class="section4_para">We want our members to feel STAMINA gives them a strong sense of BODY CARE</p>
            </div>
            <div class="offers">
              <div class="offer">
                <h1 class="number">01</h1>
                <div class="content">
                  <h2 class="title_content">Workout from home</h2>
                  <p class="offer_content">workout from home with a professional coach of your chose he will help to reach your goal and your dream body</p>
                </div>
              </div>
              <div class="offer">
                <h1 class="number">02</h1>
                <div class="content">
                  <h2 class="title_content">Program and food</h2>
                  <p class="offer_content">we offer a smooth platform that makes you search for your program and food that suitable with your body</p>
                </div>
              </div>
              <div class="offer">
                <h1 class="number">03</h1>
                <div class="content">
                  <h2 class="title_content">Communicate with the coach</h2>
                  <p class="offer_content">a great chat to communicate with the coach to make easy to ask questions to him</p>
                </div>
              </div>
              <div class="offer">
                <h1 class="number">04</h1>
                <div class="content">
                  <h2 class="title_content">Track your progress</h2>
                  <p class="offer_content">here on our platform you track your progress in our calendar with your favorite coach</p>
                </div>
              </div>
              <div class="join-links2">
                <button class="join-link2"><a href="{{ url('/app/pages/register') }}">Join us as a Coach</a></button>
                
              </div>
              <div class="join-links2">
                <button class="join-link2"><a href="{{ url('/app/pages/register') }}">Join us as a Trainee</a></button>
              </div>
            </div>
        </section>
        <section class="about_us">
            <img src="{{ asset('images/imgs/img/about_photo.jpg') }}" alt="">
            <div class="about_content">
              <h1 class="about_title1">About Us</h1>
              <h2 class="about_title2">Stamina, Endurance for Life</h2>
              <p class="about_p">Stamina was created by students from eWA digital,
                 and that to make fitness accessible to everyone,
                  and make the distance between coach and trainee smaller and more effective in our days.
              </p>
              <p class="about_p">On our platform,
                 we want to give you a good experience in training body form and give best coach to help you in building your body                
              </p>
            </div>
        </section>
        <footer>
            <div class="footer">
              <div class="foter1">
                <div class="logo_container">
                  <img class="logo-footer" src="{{ asset('images/imgs/Logo.png') }}" alt="">
                </div>
                <p class="footer_p">Stamina was created by students from eWA digital, and that to make fitness accessible to everyone, and make the distance between coach and trainee smaller and more effective in our days.
                </p>
                <a class="privacy" href="#">Privacy Poliy</a>
              </div>
              <div class="foter2">
                <h1 class="footer_joinus">Join Us</h1>
                <ul>
                  <li><a class="foter_links" href="{{ url('/app/pages/register') }}">Join us as a coach</a></li>
                  <li><a class="foter_links" href="{{ url('/app/pages/register') }}">Join us as a Trainee</a></li>
                  <li><a class="foter_links" href="{{ url('/app/pages/login') }}">Login</a></li>
                </ul>
              </div>
              <div class="foter3">
                <h1 class="footer_connect">Connect with us</h1>
                <ul class="social_icons">
                  <li><a href=""><img class="icon_width" src="{{ asset('images/imgs/img/social/icons8-facebook-50.png') }}" alt=""></a></li>
                  <li><a href=""><img class="icon_width" src="{{ asset('images/imgs/img/social/icons8-instagram-50.png') }}" alt=""></a></li>
                  <li><a href=""><img class="icon_width" src="{{ asset('images/imgs/img/social/icons8-twitter-50.png') }}" alt=""></a></li>
                </ul>
              </div>
            </div>
            <h2 class="copyright">Copyright 2021 - All Right Reserved By STAMINA | FITNESS </h2>
        </footer>
    </div>
</body>
</html>