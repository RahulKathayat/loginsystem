<?php
$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'partials/_dbconnect.php';
    $username = $_POST["username"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $existSql= "Select * FROM `users` where username='$username'";
    $result = mysqli_query($conn, $existSql);
    $numExistRows= mysqli_num_rows($result);
    if($numExistRows > 0){
        $showError = "Username Already Exists";
    }
    else{
        if(($username!=NULL)&&($password!=NULL)&&($password == $cpassword)){
            $sql = "INSERT INTO `users` ( `username`, `password`, `dt`) VALUES ('$username', '$password', current_timestamp())";
            $result = mysqli_query($conn, $sql);
            if ($result){
                $showAlert = true;
            }
        }
        else{
            $showError = "Passwords do not Match or Invalid Username";
        }
    }
} 
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="partials/style2.css">
</head>

<body>
    <!-- ========= navbar code ============-->
    <div class="header">
        <div class="navbar">
            <a href="login.php"><img src="images/logo.png" alt="logo"></a>
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
                <a href="login.php"><i class="fa-regular fa-comment"></i></a>
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
                        <p>Login</p>
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
                    <a href="signup.php">
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
    <?php
    if($showAlert){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert" id="dismissingalert">
            <strong>Success!</strong> Your account has been successfully created.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">X</button>
        </div>';
    }
    if($showError){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert" id="dismissingalert2">
            <strong>Error!</strong> '.$showError.'
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">X</button>
        </div>';
    }
    ?>
    <!-- id password --> 
        <div class="login_box">
        <section class="login" id="login">
        <div class="head">
        <h1 class="company">Sign Up to Our Website</h1>
        </div>
        <p class="msg">Hello There !</p>
        <div class="form">
        <form action="/loginsystem/signup.php" method="post">
            <input type="text" placeholder="Username" class="text" id="username" name="username" /><br />
            <input type="password" placeholder="Password" class="password" id="password" name="password"/><br />
            <input type="password" placeholder="Confirm Password" class="cpassword" id="cpassword" name="cpassword"/><br />
            <button type="submit" class="btn-login">Sign Up</button>
        </form>
        </div>
        </section>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
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

    </script>
</body>

</html>