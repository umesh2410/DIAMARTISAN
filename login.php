<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="diamico.jpg">
    <title>DiamArtisan</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="styles.css"> Link to the external CSS -->
    <script src="https://kit.fontawesome.com/beb3159326.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@400..800&family=Cinzel:wght@400..900&family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&display=swap');

        body {
            font-family: "Baloo Bhai 2", sans-serif;
            /* background-color: #f4f4f4; */
            color: #333;
            line-height: 1.6;
        }

        ._title h1 {
            font-family: "Cinzel", serif;
        }

        .logo {
            transform: translateX(-10vh);
            transform: translateY(-1.5vh);
            display: flex;
            height: 3.5vh;
            gap: 2vh;
        }

        header {
            background-color: #333;
            color: white;
            width: 100%;
            padding: 20px 0;
            position: fixed;
            z-index: 2;
        }

        header .container {
            width: 80%;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header .logo h1 {
            margin: 0;
            font-size: 28px;
        }

        header nav ul {
            list-style-type: none;
            display: flex;
        }

        header nav ul li {
            margin-left: 20px;
        }

        header nav ul li a {
            color: white;
            text-decoration: none;
            font-size: 18px;
            transition: .5s all;
        }

        header nav ul li a:hover {
            color: goldenrod;
            text-decoration: none;
        }

        .sign-up-img img {

            width: 90%;
            margin-left: 5%;
            margin-top: 20vh;
        }

        /* login section */
        .login,
        .signup-block {
            width: 100%;
            padding: 10px;
        }

        .login {
            border-right: 1px solid #e0e0e0;
            margin-right: -25vh;
        }

        .login h1,
        .signup h1 {
            font-family: "Cinzel", serif;
            color: goldenrod;
            font-size: 36px;
            text-align: center;
            margin-bottom: 20px;
        }

        .signup h1 {
            margin-left: 25vh;
            transform: translateY(-4vh);
        }

        .signup-block {
            margin-left: 10vh;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .form-group input {
            width: 100%;
            padding: 5px;
            border: 1px solid #e0e0e0;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .form-group input[type="password"] {
            padding-right: 40px;
        }

        .form-group .password-toggle {
            position: absolute;
            right: 10px;
            top: 8.5vh;
            transform: translateY(-50%);
            cursor: pointer;
        }

        .form-group .password-toggle i {
            color: #333;
            /* color: #5a0c6d; */
        }

        .login-button {
            width: 100%;
            padding: 1vh 3vh;
            /* background-color: #5a0c6d; */
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 30px;
            font-size: 16px;
            cursor: pointer;
        }

        .login-button:hover {
            background-color: black;
        }

        .signup-block {
            background-color: #f5f5f5;
            text-align: center;
        }

        .signup-block p {
            font-size: 18px;
            margin-bottom: 20px;
        }

        .signup-buttons {
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        .signup-buttons button {
            padding: 1vh 3vh;
            /* background-color: #5a0c6d; */
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 30px;
            font-size: 16px;
            cursor: pointer;
        }

        .signup-buttons button:hover {
            background-color: black;
        }

        @media (max-width: 768px) {
            .container {
                flex-direction: column;
            }

            .login,
            .signup {
                border-right: none;
                border-bottom: 1px solid #e0e0e0;
            }
        }

        /* Footer Styling */
        footer {
            background-color: #333;
            color: white;
            padding: 20px 0;
            text-align: center;
        }

        footer .social-links a {
            color: white;
            text-decoration: none;
            margin: 0 10px;
        }

        footer .social-links a:hover {
            text-decoration: underline;
        }

        .login-container {
            justify-content: center;
            align-items: center;
            background-color: #f8f9fa;
            display: flex;
            background: white;
            padding: 30vh;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            gap: 20vh
        }

        .form-control:focus {
            box-shadow: none;
        }
    </style>
</head>

<body>
    <!-- Header -->
    <header>
    
        <div class="container">
            <div class="logo">
                <img src="diamico.jpg" alt="" width="20vh">
                <h1>DiamArtisan</h1>
            </div>
            <nav>
                <ul>
                    <li><a href="index.php#home">Home</a></li>
                    <li><a href="index.php#about">About Us</a></li>
                    <li><a href="#diamonds">Diamonds</a></li>
                    <li><a href="#gallery">Latest jewellery Design</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
            <nav>
                <ul>
                    <li><a href="login.php"><img src="images/login.png" alt="" width="30vh"></a></li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="sign-up-img">
        <img src="images/sign-in.jpg" alt="">
    </div>
    <section id="login">

        <div class="login-container">
            <div class="login">
                <h1>LOGIN</h1>
                <form action="logindb.php" method="post">
                    <div class="form-group">
                        <label for="email">Email Address <span style="color: red;">*</span></label>
                        <input type="email" id="email" placeholder="Enter Email Address" name="email">
                    </div>
                    <div class="form-group" style="position: relative;">
                        <label for="password">Password <span style="color: red;">*</span></label>
                        <input type="password" id="password" placeholder="Enter Your Password" name="password">
                        <div class="password-toggle">
                            <i class="fas fa-eye-slash"></i>
                        </div>
                    </div>
                    <button class="login-button">LOGIN TO CONTINUE</button>
            </div>
            </form>

            <div class="signup">
                <h1>SignUp</h1>
                <div class="signup-block">

                    <p>New User? Create Your DiamondXE Account for FREE</p>
                    <p>Creating an account is simple and fast. Just click the button below. Once it’s set up, you can
                        take
                        advantage of all the benefits of DiamondXE</p>
                    <div class="signup-buttons">
                        <a href="register.php"><button>SIGNUP NOW</button></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <footer>
        <div class="container">
            <p>&copy; 2024 DiamArtisan | All Rights Reserved.</p>
            <div class="social-links">
                <a href="#">Facebook</a>
                <a href="#">Instagram</a>
                <a href="#">Twitter</a>
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script src="script.js"></script>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.4.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        document.getElementById('loginForm').addEventListener('submit', function (event) {
            event.preventDefault();

            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;

            // Dummy validation (replace with actual authentication logic)
            if (email === 'test@example.com' && password === 'password') {
                alert('Login successful!');
            } else {
                document.getElementById('error-message').style.display = 'block';
            }
        });
    </script>
    <script>
        // Password Toggler
        document.querySelector('.password-toggle').addEventListener('click', function () {
            const passwordInput = document.getElementById('password');
            const icon = this.querySelector('i');
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            } else {
                passwordInput.type = 'password';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            }
        });
    </script>
</body>

</html>