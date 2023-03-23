<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to OLX</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="partials/style2.css">
</head>

<body>
    <!-- ========= navbar code ============-->
    <div class="header">
        <div class="navbar">
            <a href="welcome.php"><img src="images/logo.png" alt="logo"></a>
            <div class="select_country" id="country">
                <div class="select">
                    <p id="text">Select your country</p>
                    <i class="fa-solid fa-chevron-down" id="moving"></i>
                </div>
                <ul class="option_box" id="list">
                    <li class="option" onclick="myfunction('India')">
                        <i class="fa-solid fa-location-dot"></i>
                        <p>India</p>
                    </li>
                    <li class="option" onclick="myfunction('USA')">
                        <i class="fa-solid fa-location-dot"></i>
                        <p>USA</p>
                    </li>
                    <li class="option" onclick="myfunction('China')">
                        <i class="fa-solid fa-location-dot"></i>
                        <p>China</p>
                    </li>
                    <li class="option" onclick="myfunction('Brazil')">
                        <i class="fa-solid fa-location-dot"></i>
                        <p>Brazil</p>
                    </li>
                    <li class="option" onclick="myfunction('Australia')">
                        <i class="fa-solid fa-location-dot"></i>
                        <p>Australia</p>
                    </li>

                </ul>
            </div>


            <div class="search_box">
                <input type="text" class="search_class" id="search_id"
                    placeholder="Find Cars, Mobile Phones and more...">
                <p><i class="fa-solid fa-magnifying-glass"></i></p>
            </div>

            <div class="language">
                <p id="eng_tag">English</p>
                <ul class="hin_eng">
                    <li onclick="languageolx('हिन्दी')">हिन्दी</li>
                    <li onclick="languageolx('English')">English</li>
                </ul>
            </div>

            <div class="message">
                <a href="partials/chat_box.html"><i class="fa-regular fa-comment"></i></a>
            </div>

            <div class="bell">
                <i class="fa-regular fa-bell"></i>
            </div>

            <div class="your_logo">
                <div class="client_img" id="client_img_id">
                    <img src="images/pic3.jpg" alt="">
                </div>

                <div class="drop_down" id="dropdown_id">
                    <div class="nameandimg">
                        <img src="images/pic3.jpg" alt="">
                        <p style="text-transform:uppercase;"><?php echo $_SESSION['username']?></p>
                    </div>
                    <ul>
                    <a href="signup.php">
                        <li>
                            <i class="fa-regular fa-user"></i>
                            <p> Sign Up</p>
                        </li>
                    </a>
                    <a href="login.php">
                        <li>
                            <i class="fa-solid fa-box"></i>
                            <p> Login</p>
                        </li>
                    </a>
                        <hr>
                        <li>
                            <i class="fa-solid fa-circle-question"></i>
                            <p> Help</p>
                        </li>
                        <li>
                            <i class="fa-solid fa-gear"></i>
                            <p> Settings</p>
                        </li>
                        <hr>
                    <a href="logout.php">
                        <li>
                            <i class="fa-solid fa-right-from-bracket"></i>
                            <p> Log Out</p>
                        </li>
                    </a>
                    </ul>
                </div>
            </div>


            <div class="selling_page">
                <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"><button>
                    <i class="fa-solid fa-plus"></i>
                    <p>SELL</p>
                </button>
                </a>
            </div>

        </div>
    </div>

    <!-- ========= ad1 code ============-->
    <div class="ad_img">
        <img src="images/ad1.jpg" alt="">
        <i class="fa-regular fa-rectangle-xmark" id="ad_icon"></i>
    </div>
    <!-- product -->
    <div class="product">
        <div class="first_row">
            <div class="box">
                <a href="partials/product_olx.html">
                <img src="images/product-1.jpg" alt="">
                <h2>₹3,500</h2>
                <p>Mi Tv Stick</p>
                <div class="address_data">
                    <p>Bandra East, Mumbai</p>
                    <p>Today</p>
                </div>
                </a>
            </div>
            <div class="box">
                
                <img src="images/product-2.jpg" alt="">
                <h2>₹2,000</h2>
                <p>BreadBoard</p>
                <div class="address_data">
                    <p>Bandra East, Mumbai</p>
                    <p>Today</p>
                </div>
            </div>
            <div class="box">
                <img src="images/product-3.jpg" alt="">
                <h2>₹800</h2>
                <p>Chemical Beakers</p>
                <div class="address_data">
                    <p>Bandra East, Mumbai</p>
                    <p>Today</p>
                </div>
            </div>
            <div class="box">
                <img src="images/product-4.jpg" alt="">
                <h2>₹500</h2>
                <p>TestTubes</p>
                <div class="address_data">
                    <p>Bandra East, Mumbai</p>
                    <p>Today</p>
                </div>
            </div>
        </div>

        <div class="first_row">
            <div class="box">
                <img src="images/product-5.jpg" alt="">
                <h2>₹5,500</h2>
                <p>Table Chair</p>
                <div class="address_data">
                    <p>Bandra East, Mumbai</p>
                    <p>Today</p>
                </div>
            </div>
            <div class="box">
                <img src="images/product-6.jpg" alt="">
                <h2>₹10,000</h2>
                <p>T.T Table</p>
                <div class="address_data">
                    <p>Bandra East, Mumbai</p>
                    <p>Today</p>
                </div>
            </div>
            <div class="box">
                <img src="images/product-7.jpg" alt="">
                <h2>₹15,000</h2>
                <p>Tile Cleaning Machine</p>
                <div class="address_data">
                    <p>Bandra East, Mumbai</p>
                    <p>Today</p>
                </div>
            </div>
            <div class="box">
                <img src="images/product-8.jpg" alt="">
                <h2>₹8,500</h2>
                <p>Water Cooler</p>
                <div class="address_data">
                    <p>Bandra East, Mumbai</p>
                    <p>Today</p>
                </div>
            </div>
        </div>

        <div class="first_row">
            <div class="box">
                <img src="images/product-9.jpg" alt="">
                <h2>₹2,500</h2>
                <p>Printer</p>
                <div class="address_data">
                    <p>Bandra East, Mumbai</p>
                    <p>Today</p>
                </div>
            </div>
            <div class="box">
                
                <img src="images/product-10.jpg" alt="">
                <h2>₹8,000</h2>
                <p>Refrigerator</p>
                <div class="address_data">
                    <p>Bandra East, Mumbai</p>
                    <p>Today</p>
                </div>
            </div>
            <div class="box">
                <img src="images/product-11.jpg" alt="">
                <h2>₹20,500</h2>
                <p>Air Conditioner</p>
                <div class="address_data">
                    <p>Bandra East, Mumbai</p>
                    <p>Today</p>
                </div>
            </div>
            <div class="box">
                <img src="images/product-12.jpg" alt="">
                <h2>₹2,500</h2>
                <p>Ceiling Fan</p>
                <div class="address_data">
                    <p>Bandra East, Mumbai</p>
                    <p>Today</p>
                </div>
            </div>
        </div>

        <div class="first_row">
            <div class="box">
                <img src="images/product-13.jpg" alt="">
                <h2>₹2,700</h2>
                <p>Projector</p>
                <div class="address_data">
                    <p>Bandra East, Mumbai</p>
                    <p>Today</p>
                </div>
            </div>
            <div class="box">
                <img src="images/product-14.jpg" alt="">
                <h2>₹5,500</h2>
                <p>Invertor</p>
                <div class="address_data">
                    <p>Bandra East, Mumbai</p>
                    <p>Today</p>
                </div>
            </div>
            <div class="box">
                <img src="images/product-15.jpg" alt="">
                <h2>₹13,500</h2>
                <p>Sofa Set</p>
                <div class="address_data">
                    <p>Bandra East, Mumbai</p>
                    <p>Today</p>
                </div>
            </div>
            <div class="box">
                <img src="images/product-16.jpg" alt="">
                <h2>₹2,500</h2>
                <p>BlackBoard</p>
                <div class="address_data">
                    <p>Bandra East, Mumbai</p>
                    <p>Today</p>
                </div>
            </div>
        </div>
    </div>
    <!-- load more  -->
    <div class="load_more">
        <button id="load_more_id">Load More</button>
        <div class="load_more_products" id="load_more_products_id">
            <div class="first_row">
                <div class="box">
                    <a href="#"></a>
                    <img src="images/product-17.jpg" alt="">
                    <h2>₹500</h2>
                    <p>WiFi Router</p>
                    <div class="address_data">
                        <p>Bandra East, Mumbai</p>
                        <p>Today</p>
                    </div>
                </div>
                <div class="box">
                    <a href="#"></a>
                    <img src="images/product-18.jpg" alt="">
                    <h2>₹2,500</h2>
                    <p>Office Chair</p>
                    <div class="address_data">
                        <p>Bandra East, Mumbai</p>
                        <p>Today</p>
                    </div>
                </div>
                <div class="box">
                    <a href="#"></a>
                    <img src="images/product-19.jpg" alt="">
                    <h2>₹23,500</h2>
                    <p>DSLR Camera</p>
                    <div class="address_data">
                        <p>Bandra East, Mumbai</p>
                        <p>Today</p>
                    </div>
                </div>
                <div class="box">
                    <a href="#"></a>
                    <img src="images/product-20.jpg" alt="">
                    <h2>₹3,500</h2>
                    <p>Green Screen</p>
                    <div class="address_data">
                        <p>Bandra East, Mumbai</p>
                        <p>Today</p>
                    </div>
                </div>
            </div>

            <div class="first_row">
                <div class="box">
                    <a href="#"></a>
                    <img src="images/product-21.jpg" alt="">
                    <h2>₹53,500</h2>
                    <p>Lathe Machine</p>
                    <div class="address_data">
                        <p>Bandra East, Mumbai</p>
                        <p>Today</p>
                    </div>
                </div>
                <div class="box">
                    <a href="#"></a>
                    <img src="images/product-22.jpg" alt="">
                    <h2>₹13,500</h2>
                    <p>HP Elite Desk</p>
                    <div class="address_data">
                        <p>Bandra East, Mumbai</p>
                        <p>Today</p>
                    </div>
                </div>
                <div class="box">
                    <a href="#"></a>
                    <img src="images/product-23.jpg" alt="">
                    <h2>₹20,000/mo</h2>
                    <p>Cafeteria for Rent</p>
                    <div class="address_data">
                        <p>Bandra East, Mumbai</p>
                        <p>Today</p>
                    </div>
                </div>
                <div class="box">
                    <a href="#"></a>
                    <img src="images/product-24.jpg" alt="">
                    <h2>₹2,500</h2>
                    <p>WhiteBoard</p>
                    <div class="address_data">
                        <p>Bandra East, Mumbai</p>
                        <p>Today</p>
                    </div>
                </div>
            </div>

        </div>


    </div>
    <!-- download -->
    <div class="download_app">
        <div class="download">
            <img src="images/footer.jpg" class="_image" alt="footer">
            <div class="text">
                <h1>TRY THE OLX APP</h1>
                <p>Buy, sell and find just about anything using <br>the app on your mobile.</p>
            </div>
            <div class="download_store">
                <p>GET YOUR APP TODAY</p>
                <img src="images/play store.png" alt="playstore">
            </div>
        </div>
    </div>
    <!-- footer -->
    <div class="main_footer">
        <div class="footer">
            <div class="footer_box">
                <h2>POPULAR LOCATIONS</h2>
                <p>Kolkata</p>
                <p>Mumbai</p>
                <p>Chennai</p>
                <p>Pune</p>
            </div>
            <div class="footer_box">
                <h2>TRENDING LOCATION</h2>
                <p>Bhubaneshwar</p>
                <p>Mumbai</p>
                <p>Chennai</p>
                <p>Pune</p>
            </div>
            <div class="footer_box">
                <h2>ABOUT US</h2>
                <p>About OLX Group</p>
                <p>Careers</p>
                <p>Contact Us</p>
                <p>OLX Autos Sell Car</p>
            </div>
            <div class="footer_box">
                <h2>OLX</h2>
                <p>Help</p>
                <p>Sitemap</p>
                <p>Legal & Privacy information</p>
                <p>Blog</p>
            </div>
        </div>

    </div>
    <script>
        //  ======== navbar code ========= 
        let country = document.getElementById('country');
        let moving = document.getElementById('moving');
        let text = document.getElementById('text');
        let list = document.getElementById('list');

        country.addEventListener('click', () => {
            list.classList.toggle('hidden')
            moving.classList.toggle('rotate')
        });
        function myfunction(variable) {
            text.innerHTML = variable;
        }

        let eng_tag = document.getElementById('eng_tag');
        let hin_tag = document.querySelector('.hin_eng');
        let language = document.querySelector('.language');
        language.addEventListener('click', () => {
            hin_tag.classList.toggle('display_div');
        });

        function languageolx(variable) {
            eng_tag.innerHTML = variable;
        }

        let client_img_id = document.getElementById('client_img_id');
        let dropdown_id = document.getElementById('dropdown_id');
        client_img_id.addEventListener('click', () => {
            dropdown_id.classList.toggle('block_div')
        });

        // ====== ad1 =======
        let ad_img = document.querySelector('.ad_img');
        let ad_icon = document.getElementById('ad_icon');
        ad_icon.addEventListener('click', () => {
            ad_img.style = `display:none`;
        });
        // load more
        let load_more_id = document.getElementById('load_more_id');
        let load_more_products_id = document.getElementById('load_more_products_id');

        load_more_id.addEventListener('click', () => {
            load_more_products_id.style = 'display:block';
            load_more_id.style = 'display:none';
        });

    </script>
</body>

</html>