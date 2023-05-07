@extends('layouts.welcome_layout')
@section('content')

    <head>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/home.css') }}">
    </head>

    <body>
        <div class="full-height">
            <br>
            <div class="banner">
                <div class="tab">
                    <button class="tablinks" onclick="openCity(event, 'Accessories')" id="defaultOpen">Accessories</button>
                    <button class="tablinks" onclick="openCity(event, 'Foods & Drinks')">Foods & Drinks</button>
                    <button class="tablinks" onclick="openCity(event, 'Cloths & wear')">Cloths & wear</button>
                    <button class="tablinks" onclick="openCity(event, 'More')">More Categories</button>
                </div>

                <div id="Accessories" class="tabcontent">
                    <div class="imgHover">
                        <img src="https://thumbs.dreamstime.com/b/horizontal-banner-stationery-supplies-accessories-lessons-items-education-back-to-school-sale-horizontal-banner-122588507.jpg" alt="Avatar" class="image">
                        <div class="overlay">
                          <div class="text"><button class="btn btn-success">Visit Now</button></div>
                        </div>
                      </div>
                </div>

                <div id="Foods & Drinks" class="tabcontent">
                    <div class="imgHover">
                        <img src="https://www.everydayonsales.com/wp-content/uploads/2021/09/Sweet-Hut-Lunch-Set-Promotion.jpg" alt="Avatar" class="image">
                        <div class="overlay">
                          <div class="text"><button class="btn btn-success">Order Now</button></div>
                        </div>
                      </div>
                </div>

                <div id="Cloths & wear" class="tabcontent">
                    <div class="imgHover">
                        <img src="https://prodrive.co.nz/spree/slides/9/original/website_promotion_banner_2.jpg?1676363023" alt="Avatar" class="image">
                        <div class="overlay">
                          <div class="text"><button class="btn btn-success">Buy Now</button></div>
                        </div>
                      </div>
                </div>

                <div id="More" class="tabcontent">
                    <div class="imgHover">
                        <img src="img/salesPic.png" alt="Sales" class="image">
                        <div class="overlay">
                          <div class="text"><button class="btn btn-success">Visit More</button></div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
        <script>
            function openCity(evt, cityName) {
                var i, tabcontent, tablinks;
                tabcontent = document.getElementsByClassName("tabcontent");
                for (i = 0; i < tabcontent.length; i++) {
                    tabcontent[i].style.display = "none";
                }
                tablinks = document.getElementsByClassName("tablinks");
                for (i = 0; i < tablinks.length; i++) {
                    tablinks[i].className = tablinks[i].className.replace(" active", "");
                }
                document.getElementById(cityName).style.display = "block";
                evt.currentTarget.className += " active";
            }

            // Get the element with id="defaultOpen" and click on it
            document.getElementById("defaultOpen").click();
        </script>
    </body>
@endsection
