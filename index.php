<?php session_start(); 
error_reporting(0);
$email = $_SESSION['useremail'];
?>

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
        <link rel="stylesheet" href="phpStyle.css">
    <style>
        #preloader {
            background: #000;
            height: 100vh;
            width: 100%;
            position: fixed;
            z-index: 100;
        }

        .logoutbtn {
            /* border: solid black 1px; */

            background-color: #333;
            border-radius: 10vh;
        }

        .logoutbtn:hover {
            background-color: white;
            color: white;
            transition: .5s ease;
        }

        .li-class {
            color: white;
            padding: 2vh 5vh 2vh 5vh;
        }

        .li-class:hover {
            color: goldenrod;
            transition: .5s ease;
        }

        .item .overlay a {
            background-color: #d4af37;
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 5px;
        }
    </style>
</head>

<body>

    <!-- preloader -->
    <!-- <div id="preloader"></div> -->
    <!-- Header -->
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
                    <li><a href="#QuickSearchDiamond">Search</a></li>
                    <li><a href="#gallery">Latest jewellery Design</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
            <nav>
                <ul>
                    <?php if(isset($_SESSION['useremail'])){?>
                    <li class="logoutbtn"><a class="li-class" href="logout.php"><i class="fa fa-sign-out"></i>Logout</a>
                    </li>
                    <?php }else{?>
                    <li><a href="login.php"><img src="images/login.png" alt="" width="30vh"></a></li>
                    <?php }?>
                </ul>
            </nav>
        </div>
    </header>
    <section id="home">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                    aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/slide1.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/slide2.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/slide3.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/slide4.webp" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

    </section>

    <!-- About Section -->
    <section id="about">
        <div class="container-about">
            <h2 style="margin-bottom: 5px;">About DiamArtisan</h2>
            <div class="decorative-line" style="margin-bottom: 15px;">
                <img alt="" src="images/line-shape.png" />
            </div>
            <h5> to DiamArtisan, where precision meets passion in the world of diamonds. We are a trusted name in
                crafting and delivering exceptional diamond jewelry, blending timeless elegance with contemporary
                artistry.</h5>

            <div class="about-img">
                <div>
                    <img src="images-about/certi.png" alt="">
                    <p>Certified Collection</p>
                </div>
            </div>
            <div class="about-img">
                <div>
                    <img src="images-about/bulb.png" alt="">
                    <p>Expert Adviced</p>
                </div>
            </div>
            <div class="about-img">
                <div>
                    <img src="images-about/ai.png" alt="">
                    <p>AI System</p>
                </div>
            </div>
            <div class="about-img">
                <div>
                    <img src="images-about/jewellery.png" alt="">
                    <p>Diamond Jewelleries</p>
                </div>
            </div>

            <H3>Discover brilliance. Discover DiamArtisan.</H3>

        </div>
    </section>


    <section id="QuickSearchDiamond">
        <h2 style="text-align: center;">Quick Search Loose Diamonds</h2>
        <div class="decorative-line">
            <img alt="" src="images/line-shape.png" />
        </div>

        <div class="container-search">
            <div class="search-diamond">
                <div class="image-container">
                    <div class="images">
                        <img src="images/all-diamond.png" alt="All Diamonds" id="all">
                        <div class="text-container">
                            <p>All</p>
                                    
                        </div>
                    </div>
                    <div class="images">
                        <img src="diamrou.jpg" alt="Round Brilliant Cut">
                        <div class="text-container">
                            <p>Round</p>
                                    
                        </div>
                    </div>
                    <div class="images">
                        <img src="diamemeral.jpg" alt="Princess Cut">
                        <div class="text-container">
                            <p>Emerald</p>
                                    
                        </div>
                    </div>
                    <div class="images">
                        <img src="diampri.jpg" alt="Princess Cut">
                        <div class="text-container">
                            <p>Princess</p>
                                    
                        </div>
                    </div>
                    <div class="images">
                        <img src="diampear.jpg" alt="Princess Cut">
                        <div class="text-container">
                            <p>Pear</p>
                                    
                        </div>
                    </div>
                    <div class="images">
                        <img src="diamoval.jpg" alt="Princess Cut">
                        <div class="text-container">
                            <p>Oval</p>
                                    
                        </div>
                    </div>
                    <div class="images">
                        <img src="diamheart.jpg" alt="Emerald Cut">
                        <div class="text-container">
                            <p>Heart</p>
                                    
                        </div>
                    </div>
                    <hr>
                </div>

                <div class="quality">
                    <label>Quality</label>
                    <input type="radio" id="contactChoice1" name="quality" value="best" />
                    <input type="radio" id="contactChoice2" name="quality" value="meduim" />
                    <input type="radio" id="contactChoice3" name="quality" value="low" />
                      </div>
                <div class="price">
                    <label for="price">Price</label>
                    <input type="number" min="1" placeholder="₹From" oninput="checkNegative(this)">
                    <input type="number" min="1" placeholder="₹To" oninput="checkNegative(this)">
                </div>
                <div class="carat">
                    <label for="carat">Carat</label>
                    <input type="number" min="1" placeholder="₹From" oninput="checkNegative(this)">
                    <input type="number" min="1" placeholder="₹To" oninput="checkNegative(this)">
                    <input type="text" placeholder="Stock no." oninput="checkNegative(this)">
                </div>
                <div class="color quality">
                    <label for="color">Color</label>
                    <input type="radio" id="contactChoice4" name="color" value="white" />
                    <input type="radio" id="contactChoice5" name="color" value="fancy" />
                </div>
                <div class="checkbox-container quality">
                    <div class="white" id="White">
                        <input type="checkbox" id="checkbox1">
                        <input type="checkbox" id="checkbox2">
                        <input type="checkbox" id="checkbox3">
                        <input type="checkbox" id="checkbox4">
                        <input type="checkbox" id="checkbox5">
                        <input type="checkbox" id="checkbox6">
                        <input type="checkbox" id="checkbox7">
                        <input type="checkbox" id="checkbox8">
                        <input type="checkbox" id="checkbox9">
                        <input type="checkbox" id="checkbox10">
                        <input type="checkbox" id="checkbox11">
                        <input type="checkbox" id="checkbox12">
                        <input type="checkbox" id="checkbox13">
                        <input type="checkbox" id="checkbox14">
                        <input type="checkbox" id="checkbox15">
                        <input type="checkbox" id="checkbox16">
                        <input type="checkbox" id="checkbox17">
                    </div>
                    <div class="fancy hidden" id="Fancy">
                        <input type="checkbox" id="checkbox18">
                        <input type="checkbox" id="checkbox29">
                        <input type="checkbox" id="checkbox20">
                        <input type="checkbox" id="checkbox21">
                        <input type="checkbox" id="checkbox22">
                        <input type="checkbox" id="checkbox23">
                        <input type="checkbox" id="checkbox24">
                        <input type="checkbox" id="checkbox25">
                        <input type="checkbox" id="checkbox26">
                        <input type="checkbox" id="checkbox27">
                        <input type="checkbox" id="checkbox28">
                        <input type="checkbox" id="checkbox29">
                        <input type="checkbox" id="checkbox30">
                        <input type="checkbox" id="checkbox31">
                        <input type="checkbox" id="checkbox32">
                        <input type="checkbox" id="checkbox33">
                        <input type="checkbox" id="checkbox34">
                        <input type="checkbox" id="checkbox35">
                    </div>
                </div>
                <div class="clarity quality">
                    <label for="Clarity">Clarity</label>
                    <input type="checkbox" id="checkbox36">
                    <input type="checkbox" id="checkbox37">
                    <input type="checkbox" id="checkbox38">
                    <input type="checkbox" id="checkbox39">
                    <input type="checkbox" id="checkbox40">
                    <input type="checkbox" id="checkbox41">
                    <input type="checkbox" id="checkbox42">
                    <input type="checkbox" id="checkbox43">
                    <input type="checkbox" id="checkbox44">
                    <input type="checkbox" id="checkbox45">
                    <input type="checkbox" id="checkbox46">
                    <input type="checkbox" id="checkbox47">

                </div>
                <div class="Fluorescence quality">
                    <label for="Fluorescence">Fluorescence</label>
                    <input type="checkbox" id="checkbox48">
                    <input type="checkbox" id="checkbox49">
                    <input type="checkbox" id="checkbox50">
                    <input type="checkbox" id="checkbox51">
                    <input type="checkbox" id="checkbox52">

                </div>
                <div class="make quality">
                    <label for="make">Make</label>
                    <input type="checkbox" id="checkbox53">
                    <input type="checkbox" id="checkbox54">
                    <input type="checkbox" id="checkbox55">
                </div>
                <div class="return quality">
                    <label for="return">Returnable</label>
                    <input type="radio" id="checkbox56" name="yes" value="white" />
                    <input type="radio" id="checkbox57" name="yes" value="fancy" />
                </div>

                <div class="btnSubmit quality">
                    <button type="submit">Search Diamond</button>
                </div>
            </div>
        </div>

    </section>

    <!-- Gallery Section -->
    <section id="gallery">
        <h2 style="text-align: center;">Latest jewellery Design</h2>
        <div class="decorative-line scroll-container" style="margin-bottom: 15px;">
            <img alt="" src="images/line-shape.png" />
        </div>
        <div class="container-gallery scroll-content">
            <div class="item">
                <img alt="A hand wearing a diamond ring" height="600" src="images/Group9711.png" width="400" />
                <div class="overlay">
                    <h3>
                        Lovely Pairs
                    </h3>
                    <p>
                        EARRINGS
                    </p>

                    <a href="page2.php">View Collection</a>
                </div>
            </div>
            <!-- <div class="item">
                <img alt="A person wearing diamond earrings" height="600" src="images/hand1.jpg" width="400" />
                <div class="overlay">
                    <h3>
                        Ever Yours
                    </h3>
                    <p>
                        RINGS

                    </p>
                    <a href="page1.php">View Collection</a>
                </div>
            </div> -->
            <div class="item">
                <img alt="A person wearing a diamond necklace" height="600" src="images/Maskgroup.png" width="400" />
                <div class="overlay">
                    <h3>
                        Neck Charm
                    </h3>
                    <p>
                        NECKLACES
                    </p>
                    <a href="page3.php">View Collection</a>
                </div>
            </div>
            
            <div class="item">
                <img alt="A wrist wearing a diamond bracelet" height="600" src="images/hand2.jpg" width="400" />
                <div class="overlay">
                    <h3>
                        Wrist Bliss
                    </h3>
                    <p>
                        BRACELETS
                    </p>
                    <a href="page4.php">View Collection</a>
                </div>

            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <h2>Contact</h2>
            <form id="contactForm">
                <input type="text" id="name" placeholder="Your Name" required>
                <input type="email" id="email" placeholder="Your Email" required>
                <textarea id="message" placeholder="Your Message" rows="5" required></textarea>
                <button type="submit">Send Message</button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <p>&copy; 2024 DiamArtisan | All Rights Reserved.</p>
            <div class="social-links">
                <a href="#">Facebook</a>
                <a href="https://www.instagram.com/diamartisan/?utm_source=ig_web_button_share_sheet" target="_blank">Instagram</a>
                <a href="#">Twitter</a>
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script>
        var btnWhite = document.querySelector("#contactChoice4");
        var btnFancy = document.querySelector("#contactChoice5");

        btnWhite.addEventListener('click', () => {
            document.querySelector('#White').classList.remove('hidden');
            document.querySelector('#Fancy').classList.add('hidden');
        })
        btnFancy.addEventListener('click', () => {
            document.querySelector('#White').classList.add('hidden');
            document.querySelector('#Fancy').classList.remove('hidden');
        })
    </script>
    <script src="scripts.js"></script>
</body>
</html>