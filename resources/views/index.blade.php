@extends('layout')

@section('page-content')
<!--  section  -->
<div class="hero-wrap full-height dark-bg hidden-content">
    <div class="fs-slider full-height fl-wrap">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <!-- swiper-slide-->
                <div class="swiper-slide">
                    <div class="fs-slider-item hidden-content">
                        <div class="bg" data-bg="images/bg/prof.jpeg" data-swiper-parallax="40%"></div>
                        <div class="overlay overlay-bold"></div>
                        <div class="hero-title-container">
                            <div class="section-title" style="margin-top: 20px;" >
                               <h4>Enjoy your time in our Hotel with pleasure.</h4> 
                                <h2>WELCOME to MH CLUB <br> & RESORTS </h2>
                                <div class="section-separator"><span><i class="fa-thin fa-gem"></i></span></div>
                                <a href="#sec2" class="stg_link custom-scroll-link">Start Explore</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- swiper-slide-->
                <!-- swiper-slide-->
                <div class="swiper-slide">
                    <div class="fs-slider-item hidden-content">
                        <div class="bg" data-bg="images/bg/prof1.JPG" data-swiper-parallax="40%"></div>
                        <div class="overlay"></div>
                        <div class="hero-title-container">
                            <div class="section-title">
                                <h4>Enjoy your time in our Hotel with pleasure.</h4>
                                <h2>A New Vision Of Comfort</h2>
                                <div class="section-separator"><span><i class="fa-thin fa-gem"></i></span></div>
                                <a href="rooms.html" class="stg_link custom-scroll-link">View Our Rooms</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- swiper-slide-->
                <!-- swiper-slide-->
                <div class="swiper-slide">
                    <div class="fs-slider-item hidden-content">
                        <div class="bg" data-bg="images/bg/prof2.JPG" data-swiper-parallax="40%"></div>
                        <div class="overlay"></div>
                        <div class="hero-title-container">
                            <div class="section-title">
                                <h4>Enjoy your time in our Hotel with pleasure.</h4>
                                <h2>Explore Premium Panorama Room</h2>
                                <div class="section-separator"><span><i class="fa-thin fa-gem"></i></span></div>
                                <a href="rooms.html" class="stg_link custom-scroll-link">View Room Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- swiper-slide-->
            </div>
        </div>
    </div>
    <div class="hs_btn hs_btn_prev">
        <i class="fa-solid fa-caret-left"></i>
        <div class="hs_btn_wrap_preview">
            <div class="bg"></div>
        </div>
        <div class="hs_btn-dec">
            <div class="svg-corner svg-corner_white" style="bottom:-38px;left:  0; transform: rotate(180deg)"></div>
            <div class="svg-corner svg-corner_white" style="top:-38px;left:  0; transform: rotate(90deg)"></div>
        </div>
    </div>
    <div class="hs_btn hs_btn_next">
        <i class="fa-solid fa-caret-right"></i>
        <div class="hs_btn_wrap_preview">
            <div class="bg"></div>
        </div>
        <div class="hs_btn-dec">
            <div class="svg-corner svg-corner_white" style="bottom:-38px;right:  0; transform: rotate(-90deg)"></div>
            <div class="svg-corner svg-corner_white" style="top:-38px;right:  0; transform: rotate(0deg)"></div>
        </div>
    </div>
    <div class="tcs-pagination_wrap">
        <div class="svg-corner svg-corner_white" style="bottom:0;right:-38px; transform: rotate(90deg)"></div>
        <div class="svg-corner svg-corner_white" style="bottom:0;left:-38px; transform: rotate(0deg)"></div>
        <div class="tcs-pagination hero-slider-pag"></div>
    </div>
    <div class="hero-section-scroll hsc2">
        <div class="mousey">
            <div class="scroller"></div>
        </div>
    </div>
</div>
<!-- section end  -->

<!--content-->
<div class="content">
    <!-- breadcrumbs-wrap  -->
    <div class="breadcrumbs-wrap">
        <div class="container">
            <a href="#">Home</a><span>Home Slider</span>
        </div>
    </div>
    <!--breadcrumbs-wrap end  -->
    <!-- section   -->
    <div class="content-section" id="sec2">
        <div class="section-dec"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title text-align_left" style="margin-top: 50px;">
                        <h4>Enjoy your time in our Hotel</h4>
                        <h2>About Our Hotel</h2>
                    </div>
                    <div class="text-block tb-sin">
                        <p class="has-drop-cap">Our hotel offers a perfect blend of comfort, luxury, and convenience, making it an ideal destination for both business and leisure travelers. Located in the heart of the city, we provide modern amenities, including spacious rooms, free Wi-Fi, a fully equipped fitness center, and an on-site restaurant offering local and international cuisine. Guests can enjoy a relaxing stay with our exceptional service, a refreshing outdoor pool, and scenic views. Whether you're here for a quick getaway or an extended stay, our hotel promises a memorable experience with personalized attention and top-notch hospitality.
                        </p>
                        <p>We pride ourselves on offering an exceptional culinary experience, with our gourmet restaurant serving both local delicacies and international favorites. Guests can unwind at our rooftop pool with stunning city views or rejuvenate at our full-service spa and fitness center. Our prime location offers easy access to popular attractions, shopping districts, and business centers, making us perfect for both leisure and business travelers alike. </p>
                        <a href="/about" class="btn fl-btn ">Read more About Us</a>
                        <div class="dc_dec-item_left"><span></span></div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hero-image-collge-wrap">
                        <div class="single-dec_img">
                            <img src="images/all/14.png" alt="" class="respimg">
                        </div>
                        <div class="hero_images-collage-item" style="width: 25%; bottom:  25px; z-index: 15; left: -70px;"><img src="images/all/15.jpg" class="respimg" alt=""></div>
                        <div class="hero_images-collage-item" style="width: 45%; top: -5%; z-index: 11; right: -120px;"><img src="images/all/16.jpeg" class="respimg" alt=""></div>
                        <div class="dc_dec-item_right"><span></span></div>
                    </div>
                </div>
            </div>
            <div class="sc-dec" style="left: -220px; bottom: -100px;"></div>
        </div>
        <div class="content-dec2 fs-wrapper"></div>
        <div class="content-dec"><span></span></div>
    </div>
    <!-- section end  -->
    <!-- section   -->
    <div class="content-section dark-bg no-padding hidden-content">
        <div class="row">
            <div class="st-gallery">
                <div class="section-title">
                    <h4>Special selection</h4>
                    <h2>Popular Rooms And Suites</h2>
                    <div class="section-separator sect_se_transparent"><span><i class="fa-thin fa-gem"></i></span></div>
                    <a href="rooms.html" class="stg_link">View All Rooms</a>
                </div>
                <div class="map-dec2"></div>
                <div class="footer-separator fs_sin"><span></span></div>
            </div>
            <div class="col-lg-3"> </div>
            <div class="col-lg-9">
                <div class="rooms-carousel-wrap">
                    <div class="rooms-carousel full-height">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <!--rooms-carousel-item-->
                                <div class="swiper-slide">
                                    <div class="rooms-carousel-item full-height">
                                        <div class="bg-wrap bg-parallax-wrap-gradien fs-wrapper">
                                            <div class="bg" data-bg="images/room/Classic.JPG" data-swiper-parallax="10%"></div>
                                        </div>
                                        <div class="rooms-carousel-item_container">
                                            <h3><a href="/classic">Classic rooms</a> </h3>
                                            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare sem sed quam tempus aliquet vitae eget dolor.  </p> -->
                                            <div class="room-card-details">
                                                <!-- <ul>
                                                                <li><i class="fa-light fa-user"></i><span>2 Guest</span></li>
                                                                <li><i class="fa-light fa-bed-front"></i><span>1 Bed</span></li>
                                                                <li><i class="fa-light fa-bath"></i><span>1 Bath</span></li>
                                                            </ul> -->
                                                <div class="grid-item_price">
                                                    <span>1999/Night</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="like-btn"><i class="fa-light fa-heart"></i> <span>Add to Wislist</span></div>
                                    </div>
                                </div>
                                <!--rooms-carousel-item end-->
                                <!--rooms-carousel-item-->
                                <div class="swiper-slide">
                                    <div class="rooms-carousel-item full-height">
                                        <div class="bg-wrap bg-parallax-wrap-gradien fs-wrapper">
                                            <div class="bg" data-bg="images/room/Bclass2.JPG" data-swiper-parallax="10%"></div>
                                        </div>
                                        <div class="rooms-carousel-item_container">
                                            <h3><a href="room-single.html">Business Class </a> </h3>
                                            <!-- <p>Quisque varius eros ac purus dignissim. Proin eu ultrices libero. Curabitur vulputate vestibulum elementum. Suspendisse id neque a nibh mollis blandit.   </p> -->
                                            <div class="room-card-details">
                                                <!-- <ul>
                                                                <li><i class="fa-light fa-user"></i><span>4 Guest</span></li>
                                                                <li><i class="fa-light fa-bed-front"></i><span>2 Bed</span></li>
                                                                <li><i class="fa-light fa-bath"></i><span>2 Bath</span></li>
                                                            </ul> -->
                                                <div class="grid-item_price">
                                                    <span>2999/Night</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="like-btn"><i class="fa-light fa-heart"></i> <span>Add to Wislist</span></div>
                                    </div>
                                </div>
                                <!--rooms-carousel-item end-->
                                <!--rooms-carousel-item-->
                                <div class="swiper-slide">
                                    <div class="rooms-carousel-item full-height">
                                        <div class="bg-wrap bg-parallax-wrap-gradien fs-wrapper">
                                            <div class="bg" data-bg="images/room/3.jpg" data-swiper-parallax="10%"></div>
                                        </div>
                                        <div class="rooms-carousel-item_container">
                                            <h3><a href="room-single.html">Suite rooms -work in progress coming soon</a> </h3>
                                            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare sem sed quam tempus aliquet vitae eget dolor.  </p> -->
                                            <div class="room-card-details">
                                                <!-- <ul>
                                                                <li><i class="fa-light fa-user"></i><span>2 Guest</span></li>
                                                                <li><i class="fa-light fa-bed-front"></i><span>1 Bed</span></li>
                                                                <li><i class="fa-light fa-bath"></i><span>1 Bath</span></li>
                                                            </ul> -->
                                                <div class="grid-item_price">
                                                    <!-- <span>$543/Night</span> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="like-btn"><i class="fa-light fa-heart"></i> <span>Add to Wislist</span></div>
                                    </div>
                                </div>
                                <!--rooms-carousel-item end-->
                                <!--rooms-carousel-item-->
                                <div class="swiper-slide">
                                    <div class="rooms-carousel-item full-height">
                                        <div class="bg-wrap bg-parallax-wrap-gradien fs-wrapper">
                                            <div class="bg" data-bg="images/room/4.jpg" data-swiper-parallax="10%"></div>
                                        </div>
                                        <div class="rooms-carousel-item_container">
                                            <h3><a href="room-single.html">Delux room - coming soon</a> </h3>
                                            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare sem sed quam tempus aliquet vitae eget dolor.  </p> -->
                                            <div class="room-card-details">
                                                <!-- <ul>
                                                                <li><i class="fa-light fa-user"></i><span>3 Guest</span></li>
                                                                <li><i class="fa-light fa-bed-front"></i><span>2 Bed</span></li>
                                                                <li><i class="fa-light fa-bath"></i><span>1 Bath</span></li>
                                                            </ul> -->
                                                <div class="grid-item_price">
                                                    <!-- <span>$321/Night</span> -->
                                                </div>
                                            </div>

                                        </div>
                                        <div class="like-btn"><i class="fa-light fa-heart"></i> <span>Add to Wislist</span></div>
                                    </div>
                                </div>
                                <!--rooms-carousel-item end-->
                            </div>
                        </div>
                    </div>
                    <div class="rc-controls-wrap">
                        <div class="rc-button rc-button-prev"><i class="fa-solid fa-caret-left"></i></div>
                        <div class="rc-button rc-button-next"><i class="fa-solid fa-caret-right"></i></div>
                    </div>
                    <div class="sc-controls fwc_pag2">
                        <div class="ss-slider-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- section   -->
    <!-- section   -->
    <div class="content-section">
        <div class="container">
            <div class="section-title">
                <h4>Enjoy your time in our Hotel with pleasure.</h4>
                <h2>Hotels Extra Services</h2>
                <div class="section-separator "><span><i class="fa-thin fa-gem"></i></span></div>
            </div>
            <div class="cards-wrap">
                <div class="row">
                    <!--card item -->
                    <div class="col-lg-4">
                        <div class="content-inner fl-wrap">
                            <div class="content-front">
                                <div class="cf-inner">
                                    <div class="fs-wrapper">
                                        <div class="bg " data-bg="images/services/4.JPG"></div>
                                        <div class="overlay overlay-bold"></div>
                                    </div>
                                    <div class="inner">
                                        <h2>Party hall</h2>
                                        <h4>Party hall</h4>
                                        <div class="section-separator"><span><i class="fa-thin fa-gem"></i></span></div>
                                    </div>
                                    <div class="serv-num">01.</div>
                                </div>
                            </div>
                            <div class="content-back">
                                <div class="cf-inner">
                                    <div class="inner">
                                        <div class="dec-icon">
                                            <i class="fa-light fa-spa"></i>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--card item end -->
                    <!--card item -->
                    <div class="col-lg-4">
                        <div class="content-inner fl-wrap">
                            <div class="content-front">
                                <div class="cf-inner">
                                    <div class="fs-wrapper">
                                        <div class="bg " data-bg="images/services/2.jpg"></div>
                                        <div class="overlay overlay-bold"></div>
                                    </div>
                                    <div class="inner">
                                        <h2>Conference hall</h2>
                                        <h4>Quality is the heart</h4>
                                        <div class="section-separator"><span><i class="fa-thin fa-gem"></i></span></div>
                                    </div>
                                    <div class="serv-num">02.</div>
                                </div>
                            </div>
                            <div class="content-back">
                                <div class="cf-inner">
                                    <div class="inner">
                                        <div class="dec-icon">
                                            <i class="fa-thin fa-water-ladder"></i>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--card item end -->
                    <!--card item -->
                    <div class="col-lg-4">
                        <div class="content-inner fl-wrap">
                            <div class="content-front">
                                <div class="cf-inner">
                                    <div class="fs-wrapper">
                                        <div class="bg " data-bg="images/services/3.jpg"></div>
                                        <div class="overlay overlay-bold"></div>
                                    </div>
                                    <div class="inner">
                                        <h2>Suite rooms -work in progress coming soon</h2>
                                        <h4>Hot & ready to serve</h4>
                                        <div class="section-separator"><span><i class="fa-thin fa-gem"></i></span></div>
                                    </div>
                                    <div class="serv-num">03.</div>
                                </div>
                            </div>
                            <div class="content-back">
                                <div class="cf-inner">
                                    <div class="inner">
                                        <div class="dec-icon">
                                            <i class="fa-thin fa-pot-food"></i>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--card item end -->
                </div>
                <div class="dc_dec-item_left"><span></span></div>
                <div class="dc_dec-item_right"><span></span></div>
            </div>
            <a href="/contact" class="dwonload_btn">Get In touch With Us</a>
            <div class="sc-dec" style="left: -220px; bottom: -100px;"></div>
            <div class="sc-dec2" style="right: -220px; top: -100px;"></div>
        </div>
        <div class="content-dec2 fs-wrapper"></div>
        <div class="content-dec"><span></span></div>
    </div>
    <!-- section end  -->
    <!-- section   -->
    <div class="content-section dark-bg hidden-section  wide-section" data-scrollax-parent="true">
        <div class="bg" data-bg="images/bg/25.jpg" data-scrollax="properties: { translateY: '30%' }"></div>
        <div class="overlay overlay-bold"></div>
        <div class="dec-corner dc_rt"></div>
        <div class="dec-corner dc_lt"></div>
        <div class="container">
            <div class="wide_section-title">
                <div class="row">
                    <div class="col-lg-6">
                        <h5>Other aminites and services</h5>
                        <h3>ENJOY COMPLETE & BEST QUALITY Cooperation</h3>
                    </div>
                    <div class="col-lg-6">
                        <div class="clients-carousel-wrap">
                            <div class="cc-btn   cc-prev"><i class="fas fa-angle-left"></i></div>
                            <div class="cc-btn cc-next"><i class="fas fa-angle-right"></i></div>
                            <div class="clients-carousel">
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">
                                        <!--client-item-->
                                        <div class="swiper-slide">
                                            <a href="#" class="client-item"><img src="images/clients/1.png" alt=""></a>
                                        </div>
                                        <!--client-item end-->
                                        <!--client-item-->
                                        <div class="swiper-slide">
                                            <a href="#" class="client-item"><img src="images/clients/2.png" alt=""></a>
                                        </div>
                                        <!--client-item end-->
                                        <!--client-item-->
                                        <div class="swiper-slide">
                                            <a href="#" class="client-item"><img src="images/clients/3.png" alt=""></a>
                                        </div>
                                        <!--client-item end-->
                                        <!--client-item-->
                                        <div class="swiper-slide">
                                            <a href="#" class="client-item"><img src="images/clients/4.png" alt=""></a>
                                        </div>
                                        <!--client-item end-->
                                        <!--client-item-->
                                        <div class="swiper-slide">
                                            <a href="#" class="client-item"><img src="images/clients/5.png" alt=""></a>
                                        </div>
                                        <!--client-item end-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--boxed-container-->
            <div class="boxed-container">
                <div class="boxed-container-title">
                    <div class="dec-container">
                        <div class="boxed-container-title_item">
                            <h4>More about us</h4>
                            <h2>Experience Unmatched Comfort and Luxury at Our MH Resorts And Club </h2>
                            <p class="has-drop-cap">Welcome to our hotel, where luxury meets exceptional service in a truly unique setting. Located in the heart of the city, we offer an unparalleled experience for discerning travelers. Our rooms and suites are thoughtfully designed with contemporary elegance, providing all the modern comforts you need, from high-speed Wi-Fi to luxurious bedding. Whether you’re here for business or leisure, our state-of-the-art conference rooms, rejuvenating spa, and rooftop pool offer both relaxation and productivity. </p>
                            <p> Our renowned restaurant serves a diverse menu, catering to both local and international tastes. At our hotel, your comfort and satisfaction are our top priority, ensuring an unforgettable stay. </p>
                            <div class="tbc-separator"></div>
                            <!-- <div class="signature-opt">
                                            <div class="signature_title">
                                                <img src="images/avatar/7.jpg" alt="">
                                                <div class="signature_title_item">
                                                    <h5>Kevin Cooper</h5>
                                                    <h6>Hotel Manager</h6>
                                                </div>
                                            </div>
                                            <div class="signature_item"><img src="images/signature.png" class="respimg" alt=""></div>
                                        </div> -->
                        </div>
                    </div>
                </div>
                <div class="boxed-container-wrap">
                    <div class="bg" data-bg="images/bg/frontMh.png"></div>
                    <div class="overlay"></div>
                    <div class="promo-video">
                        <div class="video-box-btn image-popup color-bg" id="html5-videos" data-html="#video1"><i class="fas fa-play"></i></div>
                        <h4>Video About Our Hotels</h4>
                    </div>
                </div>
                <div style="display:none;" id="video1" class="popup_video" data-videolink="video/2.mp4">
                    <video class="lg-video-object lg-html5" controls preload="none">
                        <source src="https://diamant.kwst.net/" type="video/mp4">
                    </video>
                </div>
            </div>
            <!--boxed-container end-->
            <div class="section-separator"><span><i class="fa-thin fa-gem"></i></span></div>
            <!--aminites-cards-wrap-->
            <div class="aminites-cards-wrap">
                <div class="row">
                    <!--aminites-card-item-->
                    <div class="col-lg-3">
                        <div class="aminites-card-item">
                            <i class="fa-solid fa-car"></i>
                            <h4>Pick Up & Drop</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                            <div class="tbc-separator"></div>
                            <span class="aci_num">01.</span>
                        </div>
                    </div>
                    <!--aminites-card-item end-->
                    <!--aminites-card-item-->
                    <div class="col-lg-3">
                        <div class="aminites-card-item">
                            <i class="fa-light fa-circle-parking"></i>
                            <h4>Parking Space</h4>
                            <p>Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. </p>
                            <div class="tbc-separator"></div>
                            <span class="aci_num">02.</span>
                        </div>
                    </div>
                    <!--aminites-card-item end-->
                    <!--aminites-card-item-->
                    <div class="col-lg-3">
                        <div class="aminites-card-item">
                            <i class="fa-solid fa-bell-concierge"></i>
                            <h4>Room Service</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                            <div class="tbc-separator"></div>
                            <span class="aci_num">03.</span>
                        </div>
                    </div>
                    <!--aminites-card-item end-->
                    <!--aminites-card-item-->
                    <div class="col-lg-3">
                        <div class="aminites-card-item">
                            <i class="fa-light fa-wifi"></i>
                            <h4>Free WiFi</h4>
                            <p>Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. </p>
                            <div class="tbc-separator"></div>
                            <span class="aci_num">04.</span>
                        </div>
                    </div>
                    <!--aminites-card-item end-->
                    <!--aminites-card-item-->
                    <div class="col-lg-3">
                        <div class="aminites-card-item">
                            <i class="fa-solid fa-car"></i>
                            <h4>FRONT PARKING</h4>
                            <p>Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. </p>
                            <div class="tbc-separator"></div>
                            <span class="aci_num">05.</span>
                        </div>
                    </div>
                    <!--aminites-card-item end-->
                    <!--aminites-card-item-->
                    <div class="col-lg-3">
                        <div class="aminites-card-item">
                            <i class="fa-solid fa-hat-wizard"></i>
                            <h4>PARTY HALL</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                            <div class="tbc-separator"></div>
                            <span class="aci_num">06.</span>
                        </div>
                    </div>
                    <!--aminites-card-item end-->
                    <!--aminites-card-item-->
                    <div class="col-lg-3">
                        <div class="aminites-card-item">
                            <i class="fa-solid fa-person-swimming"></i>
                            <h4>SWIMMING POOL</h4>
                            <p>Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. </p>
                            <div class="tbc-separator"></div>
                            <span class="aci_num">07.</span>
                        </div>
                    </div>
                    <!--aminites-card-item end-->
                    <!--aminites-card-item-->
                    <!-- <div class="col-lg-3">
                                    <div class="aminites-card-item">
                                        <i class="fa-light fa-wheelchair"></i>
                                        <h4>Wheelchair Friendly</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                                        <div class="tbc-separator"></div>
                                        <span class="aci_num">08.</span>
                                    </div>
                                </div> -->
                    <!--aminites-card-item end-->
                </div>
                <div class="dc_dec-item_left"><span></span></div>
                <div class="dc_dec-item_right"><span></span></div>
            </div>
            <!--aminites-cards-wrap end-->
            <div class="sc-dec" style="left: -220px; bottom: -100px;"></div>
            <div class="sc-dec2" style="right:  220px; top: 50%;"></div>
        </div>
    </div>

    <!-- section end  -->
    <!-- section   -->
    <div class="content-section dark-bg no-padding column-section hidden-section" data-scrollax-parent="true">
        <div class="column-wrap-bg right-wrap">
            <div class="par-elem">
                <div class="bg" data-bg="images/bg/22.jpg" data-scrollax="properties: { translateY: '20%' }"></div>
                <div class="overlay"></div>
            </div>
            <div class="column-wrap-bg-text">
                <h3>Our restaurant</h3>
                <h4>Want to order food at number? Visit our online store.</h4>
                <a href="restaurant.html" class="hero-rsto-link">Visit Our restaurant</a>
            </div>
        </div>
        <div class="column-section-wrap left-column-section">
            <div class="container">
                <div class="column-text">
                    <div class="section-title">
                        <h4>Our Last News</h4>
                        <h2>Upcoming Events & News</h2>
                        <div class="section-separator sect_se_transparent"><span><i class="fa-thin fa-gem"></i></span></div>
                    </div>
                    <!-- events-carousel-wrap -->
                    <div class="events-carousel-wrap">
                        <div class="events-carousel">
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <!-- swiper-slide -->
                                    <!-- <div class="swiper-slide">
                                                    <div class="event-carousel-item">
                                                        <h4><a href="blog-single.html">Jazz Band Live Event</a></h4>
                                                        <span class="event-date">25 may 2020</span>
                                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam aperiam. </p>
                                                    </div>
                                                </div> -->
                                    <!-- swiper-slide end -->
                                    <!-- swiper-slide -->
                                    <!-- <div class="swiper-slide">
                                                    <div class="event-carousel-item">
                                                        <h4><a href="blog-single.html">Wine and Steak Day</a></h4>
                                                        <span class="event-date">19 June 2020</span>
                                                        <p>In ut odio libero, at vulputate urna. Nulla tristique mi a massa convallis cursus. Nulla eu mi magna. Etiam suscipit   gravida. </p>
                                                    </div>
                                                </div> -->
                                    <!-- swiper-slide end -->
                                    <!-- swiper-slide -->
                                    <!-- <div class="swiper-slide">
                                                    <div class="event-carousel-item">
                                                        <h4><a href="blog-single.html">Freedom Day Celebration</a></h4>
                                                        <span class="event-date">14 October 2020</span>
                                                        <p>Lorem Ipsum generators on the Internet king this the first true generator laudantium totam aperiam. </p>
                                                    </div>
                                                </div> -->
                                    <!-- swiper-slide end -->
                                </div>
                            </div>
                        </div>
                        <div class="ec-button ec-button-prev"><i class="fas fa-angle-left"></i></div>
                        <div class="ec-button ec-button-next"><i class="fas fa-angle-right"></i></div>
                    </div>
                    <!-- events-carousel-wrap end -->
                    <a href="blog.html" class="stg_link">Read all News</a>
                </div>
            </div>
            <div class="map-dec2"></div>
            <div class="footer-separator fs_sin"><span></span></div>
        </div>
    </div>
    <!-- section end  -->
    <!-- section   -->
    <!-- <div class="content-section">
                    <div class="container  ">
                        <div class="section-title">
                            <h4>What said about us</h4>
                            <h2>Testimonials & Clients</h2>
                            <div class="section-separator"><span><i class="fa-thin fa-gem"></i></span></div>
                        </div>
                        <div class="sc-dec3" style="left: 40%; bottom: -200px;"></div>
                    </div>
                    <div class="testimonilas-carousel-wrap">
                        <div class="tc-button tc-button-next"><i class="fas fa-caret-right"></i></div>
                        <div class="tc-button tc-button-prev"><i class="fas fa-caret-left"></i></div>
                        <div class="testimonilas-carousel">
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                   
                                    <div class="swiper-slide">
                                        <div class="testi-item">
                                            <div class="testi-avatar"><img src="images/avatar/2.jpg" alt=""></div>
                                            <div class="testimonilas-text">
                                                <div class="testimonilas-text-item">
                                                    <h3>Andy Dimasky</h3>
                                                    <div class="star-rating" data-starrating="5"> </div>
                                                    <p>"Vestibulum orci felis, ullamcorper non condimentum non, ultrices ac nunc. Mauris non ligula suscipit, vulputate mi accumsan, dapibus felis. Nullam sed sapien dui. Nulla auctor sit amet sem non porta. "</p>
                                                    <a href="#" class="testi-link" target="_blank">Via Booking.com</a>
                                                </div>
                                                <span class="testi-number">01.</span>
                                                <div class="testi-item-dec fs-wrapper"></div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="swiper-slide">
                                        <div class="testi-item">
                                            <div class="testi-avatar"><img src="images/avatar/3.jpg" alt=""></div>
                                            <div class="testimonilas-text">
                                                <div class="testimonilas-text-item">
                                                    <h3>Jannet Dellov</h3>
                                                    <div class="star-rating" data-starrating="4"> </div>
                                                    <p>"Vestibulum orci felis, ullamcorper non condimentum non, ultrices ac nunc. Mauris non ligula suscipit, vulputate mi accumsan, dapibus felis. Nullam sed sapien dui. Nulla auctor sit amet sem non porta. "</p>
                                                    <a href="#" class="testi-link" target="_blank">Via hotels.com</a>													
                                                </div>
                                                <span class="testi-number">02.</span>
                                                <div class="testi-item-dec fs-wrapper"></div>
                                            </div>
                                        </div>
                                    </div>
                                     
                                    <div class="swiper-slide">
                                        <div class="testi-item">
                                            <div class="testi-avatar"><img src="images/avatar/4.jpg" alt=""></div>
                                            <div class="testimonilas-text">
                                                <div class="testimonilas-text-item">
                                                    <h3>Centa Simpson</h3>
                                                    <div class="star-rating" data-starrating="5"> </div>
                                                    <p>"Vestibulum orci felis, ullamcorper non condimentum non, ultrices ac nunc. Mauris non ligula suscipit, vulputate mi accumsan, dapibus felis. Nullam sed sapien dui. Nulla auctor sit amet sem non porta. "</p>
                                                    <a href="#" class="testi-link" target="_blank">Via Booking.com</a>													
                                                </div>
                                                <span class="testi-number">03.</span>
                                                <div class="testi-item-dec fs-wrapper"></div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="swiper-slide">
                                        <div class="testi-item">
                                            <div class="testi-avatar"><img src="images/avatar/5.jpg" alt=""></div>
                                            <div class="testimonilas-text">
                                                <div class="testimonilas-text-item">
                                                    <h3>Nicolo Svensky</h3>
                                                    <div class="star-rating" data-starrating="5"> </div>
                                                    <p>"Vestibulum orci felis, ullamcorper non condimentum non, ultrices ac nunc. Mauris non ligula suscipit, vulputate mi accumsan, dapibus felis. Nullam sed sapien dui. Nulla auctor sit amet sem non porta. "</p>
                                                    <a href="#" class="testi-link" target="_blank">Via hotels.com</a>													
                                                </div>
                                                <span class="testi-number">04.</span>
                                                <div class="testi-item-dec fs-wrapper"></div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="tcs-pagination tcs-pagination_init"></div>
                    </div>
                    <div class="content-dec2 fs-wrapper"></div>
                </div> -->
    <!-- section end  -->
    <div class="content-dec"><span></span></div>
</div>
<!--content end-->
@endsection