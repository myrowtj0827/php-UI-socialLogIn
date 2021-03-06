<?php
    require_once "config.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>About</title>
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
                    <div id="logout" class="rL-float phoneMax">
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
                    <a class="header-btn" href="#">Help</a>
                </div>
            </div>
        </div>
    </header>

    <div class="headerLine"><hr /></div>
    <section>
        <div class="rL-margin">
            <div class="img-grid2">
                <div>
                    <div class="grid-cart2">
                        <div class="rL-float gridCard-padding">
                            <div class="txt-purple38">Store Name</div>
                            <div class="rL-float justify-middle-nonFlex"><img class="star-size1" src="assets/images/about/star-purple.png" alt="" /> <div class="txt-bold txt-purple28">4.5</div></div>
                        </div>

                        <hr />

                        <div class="gridCard-padding txt-gray18 addingPB">
                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
                            At vero eos et accusam et justo duo dolores et ea rebum.
                        </div>

                        <div class="gridCard-padding">
                            <div class="nikeBg justify-imgLeft-contents">
                                <div class="card-white justify-middle-contents">
                                    <img class="nikeSize" src="assets/images/about/nikeImg.png" alt="" />
                                </div>
                            </div>
                        </div>

                        <div class="gridCard-padding rL-float text-align-right">
                            <div></div>
                            <div class="getCashback-btn justify-middle-contents">Get Cashback</div>
                        </div>
                    </div>

                    <div class="grid-cart2">
                        <div class="gridCard-padding">
                            <div class="txt-purple38">Store X Offers</div>
                        </div>

                        <hr />

                        <div class="row gridCard-padding txt-gray18">
                            <div class="col-xl-10 col-lg-9 col-sm-9 col-8">AT&T Wireless Offers</div>
                            <div class="col-xl-2 col-lg-3 col-sm-3 col-4">Cashback</div>
                        </div>

                        <div class="row gridCard-padding cashback-Tb">
                            <div class="col-xl-5 col-lg-5 col-sm-5 col-4 txt-black24">All purchases</div>

                            <div class="col-xl-5 col-lg-4 col-sm-4 col-4">
                                <div class="txt-purple18">Improved Offer</div>
                                <div class="txt-black16">Ends In 6 Days</div>
                            </div>

                            <div class="col-xl-2 col-lg-3 col-sm-3 col-4 txt-black24">$500.00</div>
                        </div>

                        <div class="row gridCard-padding cashback-Tb">
                            <div class="col-xl-5 col-lg-5 col-sm-5 col-4 txt-black24">Electronic purchases</div>

                            <div class="col-xl-5 col-lg-4 col-sm-4 col-4">
                                <div class="txt-purple18">Improved Offer</div>
                                <div class="txt-black16">Ends In 6 Days</div>
                            </div>

                            <div class="col-xl-2 col-lg-3 col-sm-3 col-4 txt-black24">400.00</div>
                        </div>

                        <div class="row gridCard-padding cashback-Tb">
                            <div class="col-xl-5 col-lg-5 col-sm-5 col-4 txt-black24">Fashion purchases</div>

                            <div class="col-xl-5 col-lg-4 col-sm-4 col-4">
                                <div class="txt-purple18">Improved Offer</div>
                                <div class="txt-black16">Ends In 6 Days</div>
                            </div>

                            <div class="col-xl-2 col-lg-3 col-sm-3 col-4 txt-black24">$400.00</div>
                        </div>
                    </div>

                    <div class="txt-black38">Special Deals & Coupons</div>

                    <div class="img-grid2-deals">
                        <div class="grid-cart2 gridCard-padding">
                            <div class="img-grid47-deals">
                                <div class="gray-dressBg justify-middle-contents">
                                    <img class="dress-size" src="assets/images/about/unnamed.png" alt="" />
                                </div>

                                <div class="">
                                    <div class="txt-black30">10% off site wide</div>

                                    <div class="txt-gray18">
                                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliguyam erat,
                                        sed diam voluptua. At vero
                                    </div>

                                    <div class="rL-float">
                                        <div class="">
                                            <a class="txt-purple24">Use Code: </a><a class="txt-black24">IDyn5s</a>
                                        </div>

                                        <div class="purple-arrow"><img class="" src="assets/images/about/arrow-purple.png" alt="" /></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="grid-cart2 gridCard-padding">
                            <div class="img-grid47-deals">
                                <div class="gray-dressBg justify-middle-contents">
                                    <img class="dress-size" src="assets/images/about/dress.png" alt="" />
                                </div>

                                <div class="">
                                    <div class="txt-black30">10% off site wide</div>

                                    <div class="txt-gray18">
                                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliguyam erat,
                                        sed diam voluptua. At vero
                                    </div>

                                    <div class="rL-float">
                                        <div class="">
                                            <a class="txt-purple24">Use Code: </a><a class="txt-black24">IDyn5s</a>
                                        </div>

                                        <div class="purple-arrow"><img class="" src="assets/images/about/arrow-purple.png" alt="" /></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="txt-black38 padding-adding">Terms & Conditions</div>
                    <div class="grid-cart2">
                        <div class="gridCard-padding">
                            <div class="positionArrow">
                                <div class="txt-black30">Lorem lpsum</div>

                                <div class="txt-gray18 rightPadding">
                                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
                                    At vero eos et accusam et justo duo dolores et ea rebum.
                                    Stet clita kasd gubergren, no sea takmata sanctus est Lorem gak .....Read More
                                </div>

                                <div class="arrow-position purple-arrow"><img src="assets/images/about/arrow-purple.png" alt="" /></div>
                            </div>
                        </div>
                        <hr />

                        <div class="gridCard-padding">
                            <div class="positionArrow">
                                <div class="txt-black30">Lorem lpsum</div>

                                <div class="txt-gray18 rightPadding">
                                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
                                    At vero eos et accusam et justo duo dolores et ea rebum.
                                    Stet clita kasd gubergren, no sea takmata sanctus est Lorem gak .....Read More
                                </div>

                                <div class="arrow-position purple-arrow"><img src="assets/images/about/arrow-purple.png" alt="" /></div>
                            </div>
                        </div>
                        <hr />

                        <div class="gridCard-padding">
                            <div class="positionArrow">
                                <div class="txt-black30">Lorem lpsum</div>

                                <div class="txt-gray18 rightPadding">
                                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
                                </div>

                                <div class="arrow-position purple-arrow"><img src="assets/images/about/arrow-purple.png" alt="" /></div>
                            </div>
                        </div>
                        <hr />

                        <div class="gridCard-padding">
                            <div class="positionArrow">
                                <div class="txt-black30">Lorem lpsum</div>

                                <div class="txt-gray18 rightPadding">
                                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
                                </div>

                                <div class="arrow-position purple-arrow"><img src="assets/images/about/arrow-purple.png" alt="" /></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="grid-cart2 gridCard-padding justify-middle-contents">
                        <img class="bigImg-size" src="assets/images/about/bigImg.png" alt="" />
                    </div>

                    <div class="grid-cart2">
                        <div class="rL-float gridCard-padding">
                            <div class="txt-bold txt-purple28">Cashback</div>

                            <div class="purple-arrow"><img class="" src="assets/images/about/arrow-purple.png" alt="" /></div>
                        </div>

                        <div class="reviewLine"><hr /></div>

                        <div class="rL-float review-padding gridCard-padding">
                            <div class="txt-bold txt-purple28">Review</div>

                            <div class="purple-arrow"><img class="" src="assets/images/about/arrow-purple.png" alt="" /></div>
                        </div>

                        <div class="review-padding gridCard-padding">
                            <img class="star-size" src="assets/images/about/star-purple.png" alt="" />
                            <img class="star-size" src="assets/images/about/star-purple.png" alt="" />
                            <img class="star-size" src="assets/images/about/star-purple.png" alt="" />
                            <img class="star-size" src="assets/images/about/star-purple.png" alt="" />
                            <img class="star-size" src="assets/images/about/star-gray.png" alt="" />
                        </div>
                    </div>

                    <div class="grid-cart2 gridCard-padding">
                        <div class="txt-bold txt-purple28">Similar deals</div>

                        <div class="img-grid57">
                            <div class="gray-bg justify-middle-contents">
                                <img class="img3" src="assets/images/about/img11.png" alt="" />
                            </div>

                            <div class="rL-float positionArrow">
                                <div class="txt-width">
                                    <div class="txt-black20 txt-bold">Lorem lpsum</div>
                                    <div class="txt-gray14">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed</div>
                                </div>
                                <div class="arrow-position purple-arrow"><img src="assets/images/about/arrow-purple.png" alt="" /></div>
                            </div>
                        </div>

                        <div class="img-grid57">
                            <div class="gray-bg justify-middle-contents">
                                <img class="img3" src="assets/images/about/Alibaba-logo.png" alt="" />
                            </div>

                            <div class="rL-float positionArrow">
                                <div class="txt-width">
                                    <div class="txt-black20 txt-bold">Lorem lpsum</div>
                                    <div class="txt-gray14">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed</div>
                                </div>
                                <div class="arrow-position purple-arrow"><img src="assets/images/about/arrow-purple.png" alt="" /></div>
                            </div>
                        </div>

                        <div class="img-grid57">
                            <div class="gray-bg justify-middle-contents">
                                <img class="img3" src="assets/images/about/img12.png" alt="" />
                            </div>

                            <div class="rL-float positionArrow">
                                <div class="txt-width">
                                    <div class="txt-black20 txt-bold">Lorem lpsum</div>
                                    <div class="txt-gray14">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed</div>
                                </div>
                                <div class="arrow-position purple-arrow"><img src="assets/images/about/arrow-purple.png" alt="" /></div>
                            </div>
                        </div>
                    </div>

                    <div class="grid-cart2 gridCard-padding">
                        <div class="txt-bold txt-purple28">Share the Offer on Social Media to get a bonus</div>
                        
                        <div class="gray-bg share-top justify-middle-contents">
                            <img class="socialIcon" src="assets/images/about/facebook.png" alt="" />
                            <div class="txt-green24">Continue with Facebook</div>
                        </div>

                        <div class="gray-bg share-top justify-middle-contents">
                            <img class="socialIcon" src="assets/images/about/twitter.png" alt="" />
                            <div class="txt-blue24">Continue with Twitter</div>
                        </div>
                    </div>
                </div>
            </div>
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
$(document).ready(function() {
    $('#remembered').click(function () {
        localStorage.setItem("rememberMe_login", true);
    });

    $('#logout').click(function () {
        localStorage.setItem("rememberMe_login", false);
    });
});


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


    $('.purple-arrow img').mouseenter(function () {
        $(this).attr('src', 'assets/images/about/arrow-right-white.png')
    });
    $('.purple-arrow img').mouseleave(function () {
        $(this).attr('src', 'assets/images/about/arrow-purple.png')
    });

</script>
</body>
</html>



