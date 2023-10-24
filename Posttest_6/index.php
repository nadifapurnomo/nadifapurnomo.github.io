
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BoxSound | Best Music Experience</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="responsive.css">
    <link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon">
    <script src="https://kit.fontawesome.com/b955eaf29b.js" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</head>

<body>
    <header class="header">
        <nav class="navbar">
            <div class="navbar-container">
                <input type="checkbox" name="" id="">
                <div class="headphone-lines">
                    <span class="line line1"></span>
                    <span class="line line2"></span>
                    <span class="line line3"></span>
                    <span class="line line4"></span>
                </div>
                <h1 class="logo">BoxSound</h1>
                <ul class="menu-items">
                    <div class="moon">
                        <img src="switch photo/moon.png" id="icon">
                    </div>
                    <li><a href="#">Home</a></li>
                    <li><a href="A_2209106044_NadifaSalsabilaPurnomo/">About</a></li>
                    <li><a href="index.php #bottom">Contact</a></li>
                    <li><a href="data.php">Data</a></li>
                    <a href="https://api.whatsapp.com/send?phone=6282267672123&text=Hello%20BoxSound,%20I%20wanna%20order%20" class="btn">BUY</a>
                </ul>
            </div>
        </nav>

        <section class="home-container">
            <div class="home">
                <h3 id="h3"></h3>
                <h1>Feel and live the music</h1>
            </div>
        </section>
    </header>

    <div class="container headphones-container">
        <section class="headphones">
            <div class="menu">
                <h1><span class="highlight">Popular Headphone</span></h1>
                <p class="text-gray">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CHOOSE HEADPHONE</p>
            </div>
            <div class="headphones-item-container">
                <div class="headphones-item">
                    <div class="image-wrapper">
                        <img src="images/hp1.jpg" alt="" srcset="" class="headphones-image">
                    </div>
                    <h4 class="headphones-name">Classic Headphone</h4>
                    <p class="price highlight">Rp.200.000</p>
                </div>
                <div class="headphones-item">
                    <div class="image-wrapper">
                        <img src="images/hp2.jpg" alt="" srcset="" class="headphones-image">
                    </div>
                    <h4 class="headphones-name">Bold Headphone</h4>
                    <p class="price highlight">Rp.250.000</p>
                </div>
                <div class="headphones-item">
                    <div class="image-wrapper">
                        <img src="images/hp3.jpg" alt="" srcset="" class="headphones-image">
                    </div>
                    <h4 class="headphones-name">White Rose Headphone</h4>
                    <p class="price highlight">Rp.300.000</p>
                </div>
                <div class="headphones-item">
                    <div class="image-wrapper">
                        <img src="images/hp4.jpg" alt="" srcset="" class="headphones-image">
                    </div>
                    <h4 class="headphones-name">Luxurious Headphone</h4>
                    <p class="price highlight">Rp.350.000</p>
                </div>
            </div>
        </section>
    </div>
    <div class="container best-container">
        <section class="best">
            <h1><span class="highlight">The Best Choices</span></h1>
            <div class="best-grid">
                <div class="best-item">
                    <div class="best-img">
                        <img src="images/hpwb1-removebg-preview.png" alt="" srcset="">
                    </div>
                    <div class="best-details">
                        <h4>Galaxy Headphone</h4>
                        <p class="highlight">Rp.500.000</p>
                    </div>
                </div>
                <div class="best-item">
                    <div class="best-img">
                        <img src="images/hpwb2-removebg-preview.png" alt="" srcset="">
                    </div>
                    <div class="best-details">
                        <h4>Green Light Headphone</h4>
                        <p class="highlight">Rp.550.000</p>
                    </div>
                </div>
                <div class="best-item">
                    <div class="best-img">
                        <img src="images/hpwb3-removebg-preview.png" alt="" srcset="">
                    </div>
                    <div class="best-details">
                        <h4>Monster Headphone</h4>
                        <p class="highlight">Rp.400.000</p>
                    </div>
                </div>
                <div class="best-item">
                    <div class="best-img">
                        <img src="images/hpwb4-removebg-preview.png" alt="" srcset="">
                    </div>
                    <div class="best-details">
                        <h4>Colourfull Headphone</h4>
                        <p class="highlight">Rp.450.000</p>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script>
        const icon = document.getElementById("icon");
        icon.addEventListener("click", function () {
            document.body.classList.toggle("dark-theme");
            if (document.body.classList.contains("dark-theme")) {
                icon.src = "images/sun.png";
            } else {
                icon.src = "switch photo/moon.png";
            }
        });
    </script>
    <footer id="bottom">
        <div class="footer">
            <div class="footer-container">
                <div class="row">
                    <div class="col">
                        <div class="single_footer">
                            <h4>Location</h4>
                            <ul>
                                <li><a href="https://www.google.com/maps/place/BIGmall+Samarinda/@-0.5262742,117.1159382,17z/data=!3m1!4b1!4m6!3m5!1s0x2df67f540a726c0d:0x1028f1a62624ffcb!8m2!3d-0.5262742!4d117.1159382!16s%2Fg%2F11b78qz3hx?entry=ttu">Indonesia</a></li>
                                <li><a href="https://www.google.com/maps/place/VivoCity/@13.8465715,81.7566544,5z/data=!4m10!1m2!2m1!1ssingapore+mall!3m6!1s0x31da1958974bbc2b:0xba34578f519df13f!8m2!3d1.2648859!4d103.8221267!15sCg5zaW5nYXBvcmUgbWFsbFoQIg5zaW5nYXBvcmUgbWFsbJIBD3Nob3BwaW5nX2NlbnRlcuABAA!16zL20vMDg3dl85?entry=ttu">Singapore</a></li>
                                <li><a href="https://www.google.com/maps/place/SM+Mall+of+Asia/@14.7217329,120.4725298,9z/data=!4m10!1m2!2m1!1sphiliphine+mall!3m6!1s0x3397cbfc84288ed7:0xe842057d2e701f9b!8m2!3d14.5352172!4d120.9819432!15sCg9waGlsaXBwaW5lIG1hbGxaESIPcGhpbGlwcGluZSBtYWxskgEPc2hvcHBpbmdfY2VudGVy4AEA!16zL20vMDluNnR5?entry=ttu">Philippines</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <div class="single_footer single_footer_address">
                            <h4>Contact</h4>
                            <ul>
                                <li><a href="mailto:@purnomodifa.com?subject=Report%20about%20BoxSound">Email</a></li>
                                <li><a href="https://api.whatsapp.com/send?phone=6282267672123&text=Report%20about%20BoxSound">whatsapp </a></li>
                                <li><a href="https://www.google.com/maps/place/BIGmall+Samarinda/@-0.5262742,117.1159382,17z/data=!3m1!4b1!4m6!3m5!1s0x2df67f540a726c0d:0x1028f1a62624ffcb!8m2!3d-0.5262742!4d117.1159382!16s%2Fg%2F11b78qz3hx?entry=ttu">Location</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <div class="social_profile">
                            <ul>
                                <li><a href="https://www.facebook.com/?locale=id_ID"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="https://twitter.com/?lang=id"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="https://id.linkedin.com/"><i class="fab fa-linkedin"></i></a></li>
                                <li><a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="https://github.com/nadifapurnomo"><i class="fab fa-github"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="">
                        <p class="copyright">Copyright &copy; 2023 <a href="#">BoxSound</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
</body>

</html>