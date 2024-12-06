@extends('layout')

@section('page-content')
<!--  header end  -->
<!--  section  -->
<div class="content-section parallax-section hero-section hidden-section">
    <div class="media-container video-holder-wrap">
        <div class="video-container">
            <video playsinline autoplay loop muted class="bgvid">
                <source src="video/2.mp4" type="video/mp4">
            </video>
        </div>
        <div class="overlay"></div>
    </div>
    <div class="overlay"></div>
    <div class="container">
        <div class="section-title">
            <h4>Enjoy your time in our Hotel with pleasure.</h4>
            <h2>Classic Room</h2>
            <div class="section-separator"><span><i class="fa-thin fa-gem"></i></span></div>
        </div>
    </div>
    <div class="hero-section-scroll">
        <div class="mousey">
            <div class="scroller"></div>
        </div>
    </div>
    <div class="dec-corner dc_lb"></div>
    <div class="dec-corner dc_rb"></div>
    <div class="dec-corner dc_rt"></div>
    <div class="dec-corner dc_lt"></div>
</div>
<!-- section end  -->
<!--content-->
<div class="content">
    <!-- breadcrumbs-wrap  -->
    <div class="breadcrumbs-wrap">
        <div class="container">
            <a href="#">Home</a><a href="#">Rooms</a><span>Room single</span>
        </div>
    </div>
    <!--breadcrumbs-wrap end  -->
    <!-- section   -->
    <div class="content-section notp">
        <div class="section-dec"></div>
        <div class="content-dec2 fs-wrapper"></div>
        <!-- fw-carousel-wrap -->
        <div class="single-carousle-container">
            <div class="single-carousel-wrap ">
                <!-- fw-carousel  -->
                <div class="single-carousel fl-wrap lightgallery" data-mousecontrol="0">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <!-- swiper-slide-->
                            <div class="swiper-slide hov_zoom">
                                <img src="images/room/Classic.JPG" alt="">
                                <a href="images/room/Classic.JPG" class="box-media-zoom   popup-image"><i
                                        class="fal fa-search"></i></a>
                            </div>
                            <!-- swiper-slide end-->
                            <!-- swiper-slide-->
                            <div class="swiper-slide  hov_zoom">
                                <img src="images/room/Classic1.JPG" alt="">
                                <a href="images/room/Classic1.JPG" class="box-media-zoom   popup-image"><i
                                        class="fal fa-search"></i></a>
                            </div>
                            <!-- swiper-slide end-->
                            <!-- swiper-slide-->
                            <div class="swiper-slide  hov_zoom">
                                <img src="images/room/Classic2.JPG" alt="">
                                <a href="images/room/Classic2.JPG" class="box-media-zoom   popup-image"><i
                                        class="fal fa-search"></i></a>
                            </div>
                            <!-- swiper-slide end-->
                            <!-- swiper-slide-->
                            <div class="swiper-slide  hov_zoom">
                                <img src="images/room/Classic3.JPG" alt="">
                                <a href="images/room/Classic3.JPG" class="box-media-zoom   popup-image"><i
                                        class="fal fa-search"></i></a>
                            </div>
                            <!-- swiper-slide end-->
                            <!-- swiper-slide-->
                            <div class="swiper-slide  hov_zoom">
                                <img src="images/room/Classic4.JPG" alt="">
                                <a href="images/room/Classic4.JPG" class="box-media-zoom   popup-image"><i
                                        class="fal fa-search"></i></a>
                            </div>
                            <!-- swiper-slide end-->
                        </div>
                    </div>
                </div>
                <!-- fw-carousel end -->
                <div class="fw-carousel-button-prev slider-button"><i class="fa-solid fa-caret-left"></i></div>
                <div class="fw-carousel-button-next slider-button"><i class="fa-solid fa-caret-right"></i></div>
                <div class="sc-controls fwc_pag">
                    <div class="ss-slider-pagination"></div>
                </div>
            </div>
            <!-- fw-carousel-wrap end -->
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="dec-container">
                        <div class="dc_dec-item_left"><span></span></div>
                        <div class="text-block">
                            <div class="text-block-title">
                                <h4>About Accommodation</h4>
                                <div class="sr-opt">
                                    <div class="sa-price">1599/Night</div>
                                    <div class="sa_towishlist">Add to Wishlist</div>
                                </div>
                            </div>
                            <div class="room-card-details rcd-single">
                                <ul>
                                    <!-- <li><i class="fa-light fa-crop"></i><span>44m2</span></li> -->
                                    <li><i class="fa-light fa-user"></i><span>1 Guest</span></li>
                                    <li><i class="fa-light fa-bed-front"></i><span>OCCUPANCY-01 TO 02
                                        </span></li>
                                    <!-- <li><i class="fa-light fa-bath"></i><span>2 Bath</span></li> -->
                                </ul>
                            </div>
                            <div class="text-block-container">
                                <!-- <ul style="font-weight: bold; color: #ff5722; list-style-type: disc; margin-bottom: 15px; font-size: medium;">
                                                <li> KING SIZE STRETCHBBLE BED </li>
                                                <li> ATTACH SHOER ROOM WITH MODERN FEATURES                                                </li>
                                                <li>SHOWER AMENITIES</li>
                                                <li>FREE SWIMING POOL WITH COSTUME                                                </li>
                                                <li>FREE WI-FI,SMART T.V.                                                </li>
                                                <li>AIR CODITIONED                                                </li>
                                                <li> OCCUPANCY-01 TO 02
                                                </li>
                                            </ul> -->
                                <p class="has-drop-cap">A classic room in a hotel typically offers a comfortable
                                    and well-furnished space with essential amenities, ideal for travelers
                                    looking for a standard yet enjoyable stay. It often includes a cozy bed, a
                                    private bathroom, a work desk, Wi-Fi access, air conditioning, and basic
                                    entertainment options like a TV. Many classic rooms may also have a
                                    mini-fridge, tea and coffee-making facilities, and sometimes a small seating
                                    area. These rooms provide a clean, quiet, and inviting atmosphere, suitable
                                    for both business and leisure guests. </p>
                                <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat purus viverra. Interdum et malesu they adamale fames ac anteipsu pimsine faucibus curabitur arcu site feugiat in tortor in, volutpat sollicitudin libero. Hotel non lorem acer suscipit bibendum vulla facilisi nedeuter .</p> -->
                                <!-- <p>Fames massa tortor sit nisl sit. Duis nulla tempus quisque et diam condimentum nisl. Rhoncus quisque elementum nulla lorem at turpis vitae quisque. Vulputate duis vel et odio hendrerit magna. Nec lacus dui egestas sit. Vulputate tincidunt viverra viverra etiam porta facilisis. Diam dui euismod eget donec. Pharetra leo sed felis urna. At a viverra urna elementum tristique ac integer pretium. Vel tincidunt sed mi nulla lectus sagittis.</p> -->
                            </div>
                            <div class="tbc-separator"></div>
                            <div class="tbc_subtitle">Room Amenities </div>
                            <div class="meg_aminites">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="meg_aminites_item"><i class="fa-solid fa-bed"></i><span> KING SIZE
                                                STRETCHBBLE BED </span></div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="meg_aminites_item"><i class="fa-solid fa-shower"></i><span> SHOWER ROOM
                                                WITH MODERN FEATURES
                                            </span></div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="meg_aminites_item"><i class="fa-solid fa-bath"></i><span>SHOWER AMENITIES
                                            </span></div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="meg_aminites_item"><i class="fa-solid fa-shirt"></i><span>FREE SWIMING POOL WITH COSTUME</span></div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="meg_aminites_item"><i class="fa-solid fa-tv"></i><span>FREE WI-FI,SMART T.V</span></div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="meg_aminites_item"><i
                                                class="fa-light fa-air-conditioner"></i><span>AIR CODITIONED

                                                Refrigerator</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="tbc-separator"></div>
                            <div class="row">
                                <!-- <div class="col-lg-6">
                                            <div class="tbc_subtitle">What included in this suite?</div>
                                            <div class="text-block_list">
                                                <ul>
                                                    <li>Upholstered seat beside the panoramic window</li>
                                                    <li>Bathroom with rain shower</li>
                                                    <li>Private balcony</li>
                                                    <li>Service station with coffee machine and tea</li>
                                                    <li>Upholstered seat beside the panoramic window</li>
                                                    <li>TV-UHD screen for watching</li>
                                                    <li>Writing desk with USB ports</li>
                                                </ul>
                                            </div>
                                        </div> -->
                                <div class="col-lg-12">
                                    <div class="tbc_subtitle">Room Video Presentation</div>
                                    <div class="video-box">
                                        <img src="images/room/Classic.JPG" class="respimg" alt="">
                                        <div class="overlay"></div>
                                        <div class="video-box-btn image-popup color-bg" id="html5-videos"
                                            data-html="#video1"><i class="fas fa-play"></i></div>
                                    </div>
                                    <div style="display:none;" id="video1" class="popup_video"
                                        data-videolink="video/roomvedio.MP4">
                                        <video class="lg-video-object lg-html5" controls preload="none">
                                            <source src="https://diamant.kwst.net/" type="video/mp4">
                                        </video>
                                    </div>
                                </div>
                            </div>
                            <div class="tbc-separator"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="fix-bar-init">
                        <div class="fw-search-wrap">
                            <div class="fw-search-wrap-title">Book This Suite</div>
                            <div class="section-separator"><span><i class="fa-thin fa-gem"></i></span></div>
                            <form class="custom-form" action="{{route('book-room')}}" name="bookform">
                                @csrf
                                <input type="hidden" name="roomType" id="roomType" value="classic">
                                <fieldset>
                                    <div class="input-wrap">
                                        <label>Your Name:</label>
                                        <input type="text" placeholder="Your Name *" value="" name="name" id="name">
                                    </div>
                                    @error('name')
                                    <div class="alert">
                                        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                                        <strong>{{ $message }} !</strong>
                                    </div>
                                    @enderror
                                    <div class="input-wrap">
                                        <label>Phone:</label>
                                        <input type="text" placeholder="Your Phone" value="" name="phone" id="phone" maxlength="10">
                                    </div>
                                    @error('phone')
                                    <div class="alert">
                                        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                                        <strong>{{ $message }} !</strong>
                                    </div>
                                    @enderror
                                    <div class="date-container input-wrap">
                                        <label>Date:</label>
                                        <input type="text" id="res_date" name="resdate" value="">
                                    </div>
                                    @error('date')
                                    <div class="alert">
                                        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                                        <strong>{{ $message }} !</strong>
                                    </div>
                                    @enderror
                                    <div class="quantity input-wrap ">
                                        <div class="quantity_title">Guests: </div>
                                        <div class="quantity-item">
                                            <input type="button" value="-" class="minus">
                                            <input type="text" name="quantity" title="Qty" class="qty color-bg"
                                                data-min="1" data-max="10" data-step="1" value="1">
                                            <input type="button" value="+" class="plus">
                                        </div>
                                    </div>
                                    @error('quantity')
                                    <div class="alert">
                                        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                                        <strong>{{ $message }} !</strong>
                                    </div>
                                    @enderror
                                    <button class="searchform-submit bs_btn">Book Your Stay</button>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="limit-box"></div>
            <!--post-related-->

            <!-- post-related  end-->
        </div>
    </div>
    <!-- section end  -->
    <div class="content-dec"><span></span></div>
</div>
<!--content end-->
@endsection