<link rel="stylesheet" href="style.css">
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
                    <li><a href="#gallery">Gallery</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
            <nav>
                <ul>
                    <?php if(isset($_SESSION['useremail'])){?>
                        <li class="logoutbtn"><a class="li-class" href="logout.php"><i class="fa fa-sign-out"></i>Logout</a></li>
                        <?php }else{?>
                        <li><a href="login.php"><img src="images/login.png" alt="" width="30vh"></a></li>
                    <?php }?>
                </ul>
            </nav>
        </div>
    </header>