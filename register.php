<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/beb3159326.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="phpStyle.css">
    <style>
        .radioContainer {
            margin-top: 35vh;
            display: flex;
            position: absolute;
            gap: 10vh;
            /* left: 10vh; */
            width: 100%;
            justify-content: center;
        }

        .radioItem {
            border: 1px solid #333;
            width: 50vh;
            text-align: center;
            padding: 3vh;
        }

        .heading {
            font-family: "Cinzel", serif;
            color: goldenrod;
            margin-top: 20vh;
            display: flex;
            position: absolute;
            width: 100%;
            justify-content: center;
        }

        .indentText {
            color: gray;
            font-weight: 600;
        }

        .option-input {
            -webkit-appearance: none;
            -moz-appearance: none;
            -ms-appearance: none;
            -o-appearance: none;
            appearance: none;
            position: relative;
            /* top: 13.33333px; */
            right: 0;
            bottom: 0;
            left: 0;

            transform: translateY(-2vh);
            height: 20px;
            width: 20px;
            transition: all 0.15s ease-out 0s;
            background: #cbd1d8;
            border: none;
            color: #333;
            cursor: pointer;
            /* display: inline-block; */
            margin-right: 0.5rem;
            outline: none;
            position: relative;
        }

        .option-input:hover {
            /* background: #9faab7; */
            background: rgb(189, 213, 243);
        }

        .option-input:checked {
            background: rgb(189, 213, 243);
        }

        .option-input:checked::before {
            width: 20px;
            height: 20px;
            display: flex;
            content: '\f00c';
            font-size: 14px;
            font-weight: bold;
            position: absolute;
            align-items: center;
            justify-content: center;
            font-family: 'Font Awesome 5 Free';
        }

        .option-input:checked::after {
            -webkit-animation: click-wave 0.65s;
            -moz-animation: click-wave 0.65s;
            animation: click-wave 0.65s;
            background: #40e0d0;
            content: '';
            display: block;
            position: relative;
            z-index: 100;
        }

        .option-input.radio {
            border-radius: 50%;
        }

        .option-input.radio::after {
            border-radius: 50%;
        }


        .box {
            border: 2px solid #4A235A;
            border-radius: 10px;
            padding: 20px;
            margin: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            cursor: pointer;
        }

        .box.selected {
            border: 2px solid #4A235A;
            background-color: #f0e6f6;
        }

        .title {
            font-size: 36px;
            margin-bottom: 20px;
        }



        /* User Signup */
        .container-user {
            padding-top: 80vh;
            margin-left: 15vh;
            margin-right: 15vh;
        }

        .container-user h1 {
            font-family: "Cinzel", serif;
            color: goldenrod;
            margin-bottom: 5vh;
        }

        .form-group {
            display: flex;
            flex-wrap: wrap;
            margin-bottom: 15px;
        }

        .form-group label {
            flex: 1 1 100%;
            margin-bottom: 5px;
            font-weight: 500;
        }

        .form-group input,
        .form-group select {
            flex: 1 1 48%;
            padding: 10px;
            margin: 5px 1%;
            border: 1px solid #ccc;
            width: 50vh;
            border-radius: 5px;
        }

        .form-group .mobile-input {
            display: flex;
            /* align-items: center; */
        }

        .form-group .mobile-input input {
            flex: 1;
        }

        .form-group .password-input {
            position: relative;
        }

        .form-group .password-input input {
            width: calc(100% - 30px);
        }

        .form-group .password-input i {
            position: absolute;
            right: 10px;
            top: 3.5vh;
            transform: translateX(20px);
            cursor: pointer;
        }

        .form-group .full-width {
            flex: 1 1 100%;
        }

        .form-group .half-width {
            flex: 1 1 20%;
        }

        .form-group {
            flex: 1 1 35%;
        }

        .form-group .button-group {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .button-group button {
            background-color: #4b0a5a;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .form-group .button-group button:hover {
            background-color: #3a0847;
        }

        .form-group .button-group a {
            color: #4b0a5a;
            text-decoration: none;
        }

        .form-group .button-group a:hover {
            text-decoration: underline;
        }

        .hidden{
            display: none;
        }
    </style>
</head>

<body>
    <header>
        <div class="container-nav">
            <div class="logo">
                <img src="diamico.jpg" alt="" width="20vh">
                <h1>DiamArtisan</h1>
            </div>
            <nav>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About Us</a></li>
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
    <section id="signup">
        <div class="heading">
            <h1>SIGNUP</h1>
        </div>
        <div class="radioContainer checkSpan">
            <div class="radioItem box selected" onclick="selectBox(this)">
                <label class="checkbox_container outlineStroke">
                    <figure>
                        <div>
                            <div class="d-flex align-items-center">
                                <div class="custom-radios">
                                    <div class='py'>
                                        <label>
                                            <input type="radio" class="option-input radio" name="example" checked
                                                style="margin-left:8vh;margin-right:-3vh; " id="user-radio"/>
                                        </label>
                                    </div>
                                </div>
                                <div class="indentText"> Buyer <br> ( Consumer ) </div>
                            </div><img src="images/Buyer1.svg" alt="DiamondXe" class="sign-up-icon" height="50">
                            <figcaption> Search, Add to your cart <br>and Buy any diamonds </figcaption>
                    </figure>
                </label>
            </div>
            <div class="radioItem box" onclick="selectBox(this)">
                <label class="checkbox_container">
                    <figure>
                        <div>
                            <div class="d-flex align-items-center">
                                <div class="custom-radios">
                                    <div class='py' style="padding-left:5vh;">
                                        <label>
                                            <input type="radio" class="option-input radio" name="example"
                                                style="margin-left:10vh;margin-right:-6vh;" id="dealer-radio" />
                                        </label>
                                    </div>
                                </div>
                                <div class="indentText"> Dealer <br> ( Jeweller / Trader ) </div>
                            </div><img src="images/Dealer1.svg" alt="DiamondXe" class="sign-up-icon" height="50">
                            <figcaption> Register and get prices at additional<br> discounts being in the same trade
                            </figcaption>
                    </figure>
                </label></div>
            <div class="radioItem box" onclick="selectBox(this)"><label class="checkbox_container">
                    <figure>
                        <div>
                            <div class="d-flex align-items-center">
                                <div class="custom-radios">
                                    <div class='py'>
                                        <label>
                                            <input type="radio" class="option-input radio" name="example"
                                                style="margin-left:8vh;margin-right:-3vh; "  id="supplier-radio"/>
                                        </label></div>
                                </div>
                                <div class="indentText"> Supplier <br> ( Manufacturer ) </div>
                            </div><img src="images/Supplier1.svg" alt="DiamondXe" class="sign-up-icon" height="50">
                            <figcaption> Upload your stock and Sell <br> on the platform </figcaption>
                    </figure>
                </label></div>
        </div>


    </section>
    <section id="user">
        <div class="container-user">
            <h1>User SignUp</h1>
            <form action="userDB.php" method="post">
                <div class="form-group">
                    <div class="half-width">
                        <label for="first-name">
                            First Name *
                        </label>
                        <input id="first-name" placeholder="Enter First Name" type="text" name="fname" required/>
                    </div>
                    <div class="half-width">
                        <label for="last-name">
                            Last Name *
                        </label>
                        <input id="last-name" placeholder="Enter Last Name" type="text" name="lname" required/>
                    </div>
                    <div class="half-width">
                        <label for="mobile-number">
                            Mobile Number *
                        </label>
                        <input id="mobile-number" placeholder="+91 Enter Mobile Number" type="text" name="mnum" required/>
                        <div class="mobile-input">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="half-width">
                            <label for="email">
                                Login Email Address *
                            </label>
                            <input id="email" placeholder="Enter Email Address" type="email" name="email" required/>
                        </div>
                        <div class="half-width">
                            <label for="password">
                                Login Password *
                            </label>
                            <input id="password" placeholder="Enter Password" type="password" name="pass" required />
                            <i class="fas fa-eye-slash" onclick="togglePasswordVisibility('password')"
                                style="transform:translateX(-6vh);">
                            </i>
                        </div>
                        <div class="half-width">
                            <label for="confirm-password">
                                Login Confirm Password *
                            </label>
                            <input id="confirm-password" placeholder="Enter Confirm Password" type="password" name="cpass" required />
                            <i class="fas fa-eye-slash" onclick="togglePasswordVisibility('confirm-password')"
                                style="transform:translateX(-6vh);">
                            </i>
                        </div>


                        <div class="form-group">
                        <div class="half-width">
                        <label for="city">
                                    Select City *
                                </label>
                                <select id="city"  name="city" class="city" required>
                                <option >Select City</option>
                                    <option >Surat</option>
                                    <option >Ahemdabad</option>
                                    <option >Vadodara</option>
                                    <option >Gandhinagar</option> 
                                </select>
                        </div>
                        <div class="half-width">
                        <label for="pincode">
                                    Enter Pincode
                                </label>
                                <input id="pincode" placeholder="Enter Pincode" type="text" name="pincode" required/>
                        </div>
                        <div class="half-width">
                        <label for="address">
                                Address *
                            </label>
                            <input class="full-width" id="address" placeholder="Enter Address" type="text" name="address" required />
                        </div>
                        <div class="form-group">
                            <div class="half-width">
                                
                            </div>
                            <div class="half-width">
                               
                            </div>
                        </div>
                        <div class="form-group">
                           
                        </div>


                        <div class="form-group button-group">
                            <button type="submit">
                                CREATE ACCOUNT
                            </button>
                            <a href="#" style="margin-right:10vh">
                                Already have an account? Login!
                            </a>
                        </div>
            </form>
        </div>
    </section>

 
    <section id="dealer" class="hidden">
        <div class="container-user">
            <h1>Dealer SignUp</h1>
            <form action="userDB.php" method="post">
                <div class="form-group">
                    <div class="half-width">
                        <label for="first-name">
                            First Name *
                        </label>
                        <input id="first-name" placeholder="Enter First Name" type="text" name="fname" required/>
                    </div>
                    <div class="half-width">
                        <label for="last-name">
                            Last Name *
                        </label>
                        <input id="last-name" placeholder="Enter Last Name" type="text" name="lname" required/>
                    </div>
                    <div class="half-width">
                        <label for="mobile-number">
                            Mobile Number *
                        </label>
                        <input id="mobile-number" placeholder="+91 Enter Mobile Number" type="text" name="mnum" required/>
                        <div class="mobile-input">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="half-width">
                            <label for="email">
                                Login Email Address *
                            </label>
                            <input id="email" placeholder="Enter Email Address" type="email" name="email" required/>
                        </div>
                        <div class="half-width">
                            <label for="password">
                                Login Password *
                            </label>
                            <input id="password" placeholder="Enter Password" type="password" name="pass" required/>
                            <i class="fas fa-eye-slash" onclick="togglePasswordVisibility('password')"
                                style="transform:translateX(-6vh);">
                            </i>
                        </div>
                        <div class="half-width">
                            <label for="confirm-password">
                                Login Confirm Password *
                            </label>
                            <input id="confirm-password" placeholder="Enter Confirm Password" type="password" name="cpass" required/>
                            <i class="fas fa-eye-slash" onclick="togglePasswordVisibility('confirm-password')"
                                style="transform:translateX(-6vh);">
                            </i>
                        </div>


                        <div class="form-group">
                        <div class="half-width">
                        <label for="city">
                                    Select City *
                                </label>
                                <select id="city" name="city" class="city" required>
                                    <option disabled>Select City</option>
                                    <option >Surat</option>
                                    <option >Ahemdabad</option>
                                    <option >Vadodara</option>
                                    <option >Gandhinagar</option>
                                </select>
                        </div>
                        <div class="half-width">
                        <label for="pincode">
                                    Enter Pincode
                                </label>
                                <input id="pincode" placeholder="Enter Pincode" type="text" name="pincode" required />
                        </div>
                        <div class="half-width">
                        <label for="address">
                                Address *
                            </label>
                            <input class="full-width" id="address" placeholder="Enter Address" type="text" name="address" required/>
                        </div>
                        <div class="form-group">
                            <div class="half-width">
                                
                            </div>
                            <div class="half-width">
                               
                            </div>
                        </div>
                        <div class="form-group">
                           
                        </div>


                        <div class="form-group button-group">
                            <button type="submit">
                                CREATE ACCOUNT
                            </button>
                            <a href="#" style="margin-right:10vh">
                                Already have an account? Login!
                            </a>
                        </div>
            </form>
        </div>
    </section>



    <section id="supplier" class="hidden">
        <div class="container-user">
            <h1>Supplier SignUp</h1>
            <form action="userDB.php" method="post">
                <div class="form-group">
                    <div class="half-width">
                        <label for="first-name">
                            First Name *
                        </label>
                        <input id="first-name" placeholder="Enter First Name" type="text" name="fname" required/>
                    </div>
                    <div class="half-width">
                        <label for="last-name">
                            Last Name *
                        </label>
                        <input id="last-name" placeholder="Enter Last Name" type="text" name="lname" required/>
                    </div>
                    <div class="half-width">
                        <label for="mobile-number">
                            Mobile Number *
                        </label>
                        <input id="mobile-number" placeholder="+91 Enter Mobile Number" type="number" name="mnum" required/>
                        <div class="mobile-input">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="half-width">
                            <label for="email">
                                Login Email Address *
                            </label>
                            <input id="email" placeholder="Enter Email Address" type="email" name="email" required/>
                        </div>
                        <div class="half-width">
                            <label for="password">
                                Login Password *
                            </label>
                            <input id="password" placeholder="Enter Password" type="password" name="pass" required />
                            <i class="fas fa-eye-slash" onclick="togglePasswordVisibility('password')"
                                style="transform:translateX(-6vh);">
                            </i>
                        </div>
                        <div class="half-width">
                            <label for="confirm-password">
                                Login Confirm Password *
                            </label>
                            <input id="confirm-password" placeholder="Enter Confirm Password" type="password" name="cpass" required/>
                            <i class="fas fa-eye-slash" onclick="togglePasswordVisibility('confirm-password')"
                                style="transform:translateX(-6vh);">
                            </i>
                        </div>


                        <div class="form-group">
                        <div class="half-width">
                        <label for="city">
                                    Select City *
                                </label>
                                <select id="city" name="city" class="city" required>
                                    <option>
                                        Select City
                                    </option>
                                </select>
                        </div>
                        <div class="half-width">
                        <label for="pincode">
                                    Enter Pincode
                                </label>
                                <input id="pincode" placeholder="Enter Pincode" type="text" name="pincode" required/>
                        </div>
                        <div class="half-width">
                        <label for="address">
                                Address *
                            </label>
                            <input class="full-width" id="address" placeholder="Enter Address" type="text" name="address" required/>
                        </div>
                        <div class="form-group">
                            <div class="half-width">
                                
                            </div>
                            <div class="half-width">
                               
                            </div>
                        </div>
                        <div class="form-group">
                           
                        </div>


                        <div class="form-group button-group">
                            <button type="submit">
                                CREATE ACCOUNT
                            </button>
                            <a href="#" style="margin-right:10vh">
                                Already have an account? Login!
                            </a>
                        </div>
            </form>
        </div>
    </section> 

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


    <script>
        function selectBox(element) {
            // Remove 'selected' class from all boxes
            var boxes = document.querySelectorAll('.box');
            boxes.forEach(function (box) {
                // box.classList.remove('selected');
                box.classList.remove('selected');
            });

            // Add 'selected' class to the clicked box
            element.classList.add('selected');
            box.querySelector('input[type="radio"]').checked = true;
        }


        function togglePasswordVisibility(id) {
            const input = document.getElementById(id);
            const icon = input.nextElementSibling;
            if (input.type === "password") {
                input.type = "text";
                icon.classList.add("fa-eye");
                icon.classList.remove("fa-eye-slash");
            } else {
                input.type = "password";
                icon.classList.add("fa-eye-slash");
                icon.classList.remove("fa-eye");
            }
        }


        // show the selected Signup
        var userSignup = document.querySelector("#user-radio");
        var dealerSignup = document.querySelector("#dealer-radio");
        var supplierSignup = document.querySelector("#supplier-radio");

        userSignup.addEventListener('click', () => {
            document.querySelector('#user').classList.remove('hidden');
            document.querySelector('#dealer').classList.add('hidden');
            document.querySelector('#supplier').classList.add('hidden');
        })
        dealerSignup.addEventListener('click', () => {
            document.querySelector('#user').classList.add('hidden');
            document.querySelector('#dealer').classList.remove('hidden');
            document.querySelector('#supplier').classList.add('hidden');
        })
        supplierSignup.addEventListener('click', () => {
            document.querySelector('#user').classList.add('hidden');
            document.querySelector('#dealer').classList.add('hidden');
            document.querySelector('#supplier').classList.remove('hidden');
        })

       
    </script>
    <script>
        var config = {
            cUrl: 'https://api.countrystatecity.in/v1/countries/IN/cities' , 
            CKey: 'bUQ2cWpKMHN2cmdxajlGdFFZUEdWT0ppQVgyOTJBaE1ucTlIZmJuUA=='
        }

        var citySelect = document.querySelector("#city");

        function loadCity(){
            let  apiEndPoint = config.cUrl

            fetch(apiEndPoint, {headers: {"X-CSCAPI-KEY": config.cKey}})
            .then(Response => Response.json())
            .then(data =>{
                console.log(data);
                // data.forEach(city => {
                //     const option = document.createElement('option')
                //     option.value = city.name
                //     option.textContent = city.name
                //     citySelect.appendChild(option)
                // })

            })
        }

window.onload = loadCity
    </script>
</body>

</html>