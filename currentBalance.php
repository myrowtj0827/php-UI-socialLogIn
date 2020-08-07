<?php
    require_once "config.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Current Balence</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <script src="./assets/js/fontawesomeKitConfiga076d05399.js"></script>
    <link rel="stylesheet" href="assets/css/font-awesome4.7.0.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="./assets/js/jquery-3.5.1.js"></script>
    <script src="./assets/js/jquery3.5.1.min.js"></script>

    <script src="./assets/js/p50.5.7.min.js"></script>
    <script src="./assets/js/owl.carousel2.3.4.min.js"></script>
    <link rel="stylesheet" href="assets/css/owl.carousel2.3.4.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default2.3.4.min.css">

    <script src="./assets/js/bootstrap4.5.0.min.js"></script>
    <link rel="stylesheet" href="assets/css/bootstrap4.5.0.min.css">

    <script src="./assets/js/main.js"></script>
    <link rel="stylesheet" href="assets/css/home.css">
</head>
<body>

<div class="margin-center-width homeHeader">
    <!--  Header  -->
    <header id="">
        <div class="flex-container header-txt justify-middle-contents">
            <div class="rL-float rL-margin justify-middle-contents">
                <div class="phoneMax">
                    <a href="index.php"><img class="cart-size mouseCursor" src="assets/images/home/cart.png" alt="" /></a>
                </div>
                <div class="phoneMax">
                    <div class="input-filed">
                        <input class="air-input" type="text" placeholder="Search.." />
                    </div>
                </div>

                <?php
                    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
                ?>
                    <div class="rL-float phoneMax">
                        <a class="boxShawDow signJoin justify-middle-contents" href="logout.php">Logout</a>
                    </div>
                <?php
                    } else {
                ?>
                    <div class="rL-float phoneMax">
                        <a class="boxShawDow signJoin justify-middle-contents" href="signUp.php">Sign Up</a>
                        <a class="boxShawDow signJoin justify-middle-contents" href="logIn.php">Join Now</a>
                    </div>
                <?php
                    }
                ?>
            </div>
        </div>

        <div class="margin-center-width">
            <div class="rL-float rL-navbarMargin navBar-height justify-middle-contents">

                <!--  mobile drop down menu  -->
                <div class="menubar-icon mouseCursor">
                    <div class="dropdown">
                        <div class="dropdown-toggle"  data-toggle="dropdown">
                            <img src="assets/images/home/menu-icon.png" alt="" />
                        </div>

                        <ul class="dropdown-menu dropdown-menu-mobile">
                            <li><div class="rectangle-trans-mobile"></div></li>
                            <li><a class="dropDown-item menu-mobile header-btn" href="">All Store</a></li>
                            <li><a class="dropDown-item menu-mobile header-btn" href="store.php">XYZ</a></li>
                            <li><a class="dropDown-item menu-mobile header-btn" href="currentBalance.php">Qweqea</a></li>
                            <li><a class="dropDown-item menu-mobile header-btn" href="#">
                                <span>Some text</span>
                            </a></li>

                            <li><a class="dropDown-item menu-mobile header-btn" href="#">Help</a></li>
                        </ul>
                    </div>
                </div>

                <div class="txt20 mouseCursor collections lapDesktop-hidden">
                    <div class="dropdown">
                        <div class="dropdown-toggle" data-toggle="dropdown">
                            <span class="header-btn">All Store</span>
                            <img class="dropDownIcon-size" src="assets/images/home/downBtnBlack.png" alt=""/>
                        </div>

                        <ul class="dropdown-menu">
                            <li><div class="rectangle-trans"></div></li>
                            <li><a class="dropDown-item header-btn" href="index.php">Air Travel &Tours</a></li>
                            <li><a class="dropDown-item header-btn" href="">Automotive</a></li>
                            <li><a class="dropDown-item header-btn" href="#">Books & Education</a></li>
                            <li><a class="dropDown-item header-btn" href="#">Brauty</a></li>
                            <li><a class="dropDown-item header-btn" href="#">Business & IT Services</a></li>
                            <li><a class="dropDown-item header-btn" href="#">Electronics</a></li>
                            <li><a class="dropDown-item header-btn" href="">Fashion</a></li>
                        </ul>
                    </div>
                </div>

                <div class="txt20 mouseCursor lapDesktop-hidden">
                    <a class="header-btn" href="store.php">XYZ</a>
                </div>

                <div class="txt20 mouseCursor lapDesktop-hidden">
                    <a class="header-btn" href="currentBalance.php">Qweqea</a>
                </div>

                <div class="txt20 mouseCursor lapDesktop-hidden">
                    <a class="header-btn" href="#">Some text</a>
                </div>
                <div class="txt20 mouseCursor lapDesktop-hidden">
                    <a class="header-btn" href="">Help</a>
                </div>
            </div>
        </div>
    </header>

    <div class="header-hr"><hr /></div>

    <section class="rL-margin point-coverter">
        <div class="txt-black38">Point Coverter</div>

        <div class="balence-card">
            <div class="logIn-lineHeight txt-purple32"> Current Balance : 253553 Hala Points</div>

            <hr />

            <div class="rL-float-table card-RL justify-middle-contents">
                <div class="txt-black32">Rewards Program</div>

                <div id="custom-select">
                    <select>
                        <option selected disabled>Program search</option>
                        <option><a class="txtHover">1</a></option>
                        <option><a class="txtHover">2</a></option>
                        <option><a class="txtHover">3</a></option>
                        <option><a class="txtHover">4</a></option>
                    </select>
                </div>
            </div>

            <div class="card-RL">
                <div class="rewards-program">
                    <div class="rL-float table-thBg justify-middle-contents">
                        <div class="txt-white26">Rewards Program</div>
                        <div class="row txt-white26 right-txt-width">
                            <div class="col-6 logIn-lineHeight">Points</div>
                            <div class="col-6 logIn-lineHeight">Miles</div>
                        </div>
                    </div>

                    <div class="rL-float justify-middle-contents">
                        <div class="txt-gray26">Emirate Airways</div>
                        <div class="row txt-gray26 right-txt-width">
                            <div class="col-6 table-vertical-line">5464</div>
                            <div class="col-6 table-vertical-line">100</div>
                        </div>
                    </div>

                    <div class="rL-float justify-middle-contents">
                        <div class="txt-gray26">British Airways</div>
                        <div class="row txt-gray26 right-txt-width">
                            <div class="col-6 table-vertical-line">4654</div>
                            <div class="col-6 table-vertical-line">250</div>
                        </div>
                    </div>

                    <div class="table-hr"><hr /></div>

                    <div class="rL-float justify-middle-contents">
                        <div></div>
                        <div class="row right-txt-tfWidth">
                            <div class="col-4 txt-purple26 table-txt-center">Total</div>
                            <div class="col-4 txt-black26 table-txt-center">10118</div>
                            <div class="col-4 txt-black26 table-txt-center">350</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="rL-margin gift-card-bottom">
        <div class="balence-card">
            <div class="rL-float card-RL justify-middle-contents">
                <div class="txt-black32">Gift Card</div>
            </div>

            <div class="card-RL">
                <div class="gift-card">
                    <div class="rL-float txt-gray26 justify-middle-contents">
                        <div>Option1</div>
                        <div>220</div>
                    </div>

                    <div class="rL-float txt-gray26 justify-middle-contents">
                        <div>Option2</div>
                        <div>235</div>
                    </div>

                    <div class="rL-float txt-gray26 justify-middle-contents">
                        <div>Option3</div>
                        <div>250</div>
                    </div>
                </div>
            </div>

            <form class="card-RL rL-float-table justify-middle-contents logIn-lineHeight" action="index.php">
                <label class="checkboxContainer checkboxContainerGray txt-top">
                    <a class="txt-gray18 txt-bold">I agree to terms and conditions</a>
                    <input type="checkbox"  id="vehicle1" name="vehicle1" value="Bike">
                    <span class="checkMark"></span>
                </label>
                <input type="submit" class="submit-btn justify-middle-contents" value="Submit">
            </form>
        </div>
    </section>

    <!--  Footer  -->
    <footer class="flex-container footerBg justify-middle-contents">
        <div class="footer-padding rL-float-footer">
            <div class="followUs justify-middle-nonFlex">
                <div class="text-align-left follow-bottom">Follow Us</div>
                <div class="text-align-left">
                    <img class="social-padding" src="assets/images/home/twitter.png" alt="" />
                    <img class="social-padding" src="assets/images/home/facebook.png" alt="" />
                    <img class="social-padding" src="assets/images/home/youtube.png" alt="" />
                </div>
            </div>

            <div class="txt-rLPadding txt-bold justify-middle-nonFlex">
                <div>About Us | News | Terms & Conditions | Privacy Policy | Contact Us</div>
                <div class="year-top">
                    &copy;<script>document.write(new Date().getFullYear());</script> Halamiles. All rights reserved.
                </div>
            </div>

            <div class="">
                Halamiles.com
            </div>
        </div>
    </footer>
</div>

<script>
    /**
     * Arrow replacing
     */
    $('.collections img').mouseenter(function () {
        $(this).attr('src', 'assets/images/home/downBtnRed.png')
    });

    $('.collections img').mouseleave(function () {
        $(this).attr('src', 'assets/images/home/downBtnBlack.png')
    });

    $('.collections span').mouseenter(function () {
        $('.collections img').attr('src', 'assets/images/home/downBtnRed.png')
    });

    $('.collections span').mouseleave(function () {
        $('.collections img').attr('src', 'assets/images/home/downBtnBlack.png')
    });
</script>
</body>
</html>