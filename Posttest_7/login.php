    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="title" content="Project 1 - A.H. Abir | Executing The Code">
    <meta name="description" content="I'm Ashfaque Hossain Abir, a Web Developer, Graphic Designer and Content Writer based in Bangladesh. I love to provide awesome services to my lovely clients. Hire me now!">
    <meta property="og:image" content="images/bg2.png" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://abirett.github.io/Project-1/"/>
    <meta property="og:title" content="Project 1 - A.H. Abir | Executing The Code" />
    <meta property="og:description" content="I'm Ashfaque Hossain Abir, a Web Developer, Graphic Designer and Content Writer based in Bangladesh. I love to provide awesome services to my lovely clients. Hire me now!"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/webicon.png" type="image/x-icon">
    
    <!-- ===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="logreg.css">
         
    <title>Selamat Datang</title>
</head>
<body>
    
<div class="container">
    <div class="forms">
        <div class="form login">
            <span class="title">Login!</span>

            <form action="proseslogin.php" method="post">
                <div class="input-field">
                    <input type="text" name="username" placeholder="Masukkan Username" required>
                    <i class="uil uil-envelope icon"></i>
                </div>
                <div class="input-field">
                    <input type="password" name="password" class="password" placeholder="Masukkan Password" required>
                    <i class="uil uil-lock icon"></i>
                    <i class="uil uil-eye-slash showHidePw"></i>
                </div>

                <div class="checkbox-text">
                    <div class="checkbox-content">
                        <input type="checkbox" id="logCheck" name="remember">
                        <label for="logCheck" class="text">Ingat Saya</label>
                    </div>
                    
                    <a href="#" class="text">Lupa Password?</a>
                </div>

                <div class="input-field button">
                    <input type="submit" value="Login">
                </div>
            </form>

            <div class="login-signup">
                <span class="text">Belum punya akun?
                    <a href="#" class="text signup-link">Daftar sekarang!</a>
                </span>
            </div>
        </div>

        <!-- Registration Form -->
        <div class="form signup">
            <span class="title">Daftar!</span>

            <form action="prosesdaftar.php" method="post">
                
               <div class="input-field">
                    <input type="text" name="username" placeholder="Masukkan Username" required>
                    <i class="uil uil-user"></i>
                </div>
                <div class="input-field">
                    <input type="password" name="password" class="password" placeholder="Masukkan Password" required>
                    <i class="uil uil-lock icon"></i>
                    <i class="uil uil-eye-slash showHidePw"></i>
                </div>
                <div class="input-field">
                    <input type="password" name="konfirmasi" class="password" placeholder="Masukkan Konfirmasi Password" required>
                    <i class="uil uil-lock icon"></i>
                    <i class="uil uil-eye-slash showHidePw"></i>
                </div>

                <div class="checkbox-text">
                    <div class="checkbox-content">
                        <input type="checkbox" id="sigCheck" name="remember">
                        <label for="sigCheck" class="text">Ingat Saya!</label>
                    </div>
                    
                    <a href="#" class="text">Lupa Password?</a>
                </div>

                <div class="input-field button">
                    <input type="submit" value="Daftar">
                </div>
            </form>

            <div class="login-signup">
                <span class "text">Sudah punya akun?
                    <a href="#" class="text login-link">Login Sekarang</a>
                </span>
            </div>
        </div>
    </div>
</div>


    <script>

const container = document.querySelector(".container"),
      pwShowHide = document.querySelectorAll(".showHidePw"),
      pwFields = document.querySelectorAll(".password"),
      signUp = document.querySelector(".signup-link"),
      login = document.querySelector(".login-link");

    //   js code to show/hide password and change icon
    pwShowHide.forEach(eyeIcon =>{
        eyeIcon.addEventListener("click", ()=>{
            pwFields.forEach(pwField =>{
                if(pwField.type ==="password"){
                    pwField.type = "text";

                    pwShowHide.forEach(icon =>{
                        icon.classList.replace("uil-eye-slash", "uil-eye");
                    })
                }else{
                    pwField.type = "password";

                    pwShowHide.forEach(icon =>{
                        icon.classList.replace("uil-eye", "uil-eye-slash");
                    })
                }
            }) 
        })
    })

    // js code to appear signup and login form
    signUp.addEventListener("click", ( )=>{
        container.classList.add("active");
    });
    login.addEventListener("click", ( )=>{
        container.classList.remove("active");
    });
    </script>

</body>
</html>