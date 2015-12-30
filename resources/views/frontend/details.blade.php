@extends('layouts.search')
@section('content')
<div class="container">
    <h1>Pearl Plaza Condominium in Binh Thanh District</h1>
    <h5>
        <small>561 Điện Biên Phủ, Phường 25, Hồ Chí Minh, Vietnam</small>
    </h5>
    <div class="spacer"></div>

    <div class="row nopadding-vertical">
        <span class="icon-action"><a href="#"><i class="fa fa-share-alt"></i></a></span>
        <span class="icon-action"><a href="#"><i class="fa fa-heart"></i></a></span>
        <span class="icon-action"><a href="#"><i class="fa fa-times"></i></a></span>
        <span class="icon-action"><a href="#"><i class="fa fa-print"></i></a></span>
        <span class="icon-action"><a href="#"><i class="fa fa-envelope-o"></i></a></span>
        <span class="icon-action"><a href="#"><i class="fa fa-file-pdf-o"></i></a></span>
    </div>

    <div class="gallery-image">
        <div style="width: 830px; float: left; position: relative;">
            <div id="big-slide">
                <img src="images/res/slide/1.jpg" alt="Lorem ipsum dolor sit." rel="1" id="big1" class="img-responsive">
                <img src="images/res/slide/2.jpg" alt="Esse minus tempora ab" rel="2" id="big2" class="img-responsive">
                <img src="images/res/slide/3.jpg" alt="Accusantium labore ad, perspiciatis" rel="3" id="big3"
                     class="img-responsive">
                <img src="images/res/slide/4.jpg" alt="Dolorem quis, dignissimos laboriosam" rel="4" id="big4"
                     class="img-responsive">
                <img src="images/res/slide/5.jpg" alt="Libero soluta, iusto repudiandae" rel="5" id="big5"
                     class="img-responsive">
                <img src="images/res/slide/6.jpg" alt="Fuga beatae, et ducimus" rel="6" id="big6" class="img-responsive">
                <img src="images/res/slide/7.jpg" alt="Culpa alias minus rem" rel="7" id="big7" class="img-responsive">
                <img src="images/res/slide/8.jpg" alt="Adipisci impedit aperiam esse" rel="8" id="big8" class="img-responsive">
                <img src="images/res/slide/9.jpg" alt="Asperiores aspernatur quidem, natus" rel="9" id="big9"
                     class="img-responsive">
                <img src="images/res/slide/10.jpg" alt="Repellendus repellat tempore, fugit!" rel="10" id="big10"
                     class="img-responsive">

            </div>
            <div class="emotion-zoom" data-target="#myModal" data-toggle="modal"><i class="fa fa-search"></i></div>
            <div style="height: 40px; background: #000; opacity: 0.5; position: absolute; bottom: 0px; width:100%;">
            </div>
            <div style="height: 40px; position: absolute; bottom: 0px; width:100%; font-weight: bold; font-size: 16px;">
					<span class="pull-left" style="color: #fff; opacity: 1 !important; padding: 8px 0 0 40px;">
						<span class="emotion-back"><i class="fa fa-chevron-left"></i></span> <span id="slide_des">etertreteer</span>
					</span>
					<span class="pull-right" style="color: #fff; opacity: 1 !important; padding: 8px 40px 0 0;">
						<span id="number-slider"><span id="cur-slide">1</span>/ <span
                                    id="total_slide"></span> </span> <span class="emotion-next"><i
                                    class="fa fa-chevron-right"></i></span>
					</span>
            </div>
        </div>

        <div style="width: 150px; float: left; padding-left: 5px;">
            <div id="carousel-demo">
                <div id="vertical-slide" class="caroufredsel-inner">
                    <div rel="1" id="thumb1" class="item"><img src="images/res/slide/1.jpg"></div>
                    <div rel="2" id="thumb2" class="item"><img src="images/res/slide/2.jpg"></div>
                    <div rel="3" id="thumb3" class="item"><img src="images/res/slide/3.jpg"></div>
                    <div rel="4" id="thumb4" class="item"><img src="images/res/slide/4.jpg"></div>
                    <div rel="5" id="thumb5" class="item"><img src="images/res/slide/5.jpg"></div>
                    <div rel="6" id="thumb6" class="item"><img src="images/res/slide/6.jpg"></div>
                    <div rel="7" id="thumb7" class="item"><img src="images/res/slide/7.jpg"></div>
                    <div rel="8" id="thumb8" class="item"><img src="images/res/slide/8.jpg"></div>
                    <div rel="9" id="thumb9" class="item"><img src="images/res/slide/9.jpg"></div>
                    <div rel="10" id="thumb10" class="item"><img src="images/res/slide/10.jpg"></div>
                </div>

                <!-- Next / Previous controls here -->
                <div class="row nopadding">
                    <div class="col-xs-6 nopadding btn-slideshow" id="vertical-prev">
                        <i class="fa fa-angle-down"></i>
                    </div>
                    <div class="col-xs-6 nopadding btn-slideshow" id="vertical-next">
                        <i class="fa fa-angle-up"></i>
                    </div>
                </div>

            </div>
        </div>
        <div class="clear"></div>

    </div>
    <div class="spacer"></div>
    <div class="row column-style nopadding">
        <ul class="list-inline list-option-menu-detail nopadding">
            <li class="text-center">
                <div class="icon icon18 bed"></div>
                <div class="paddingtop5">20 - 25+</div>
            </li>
            <li class="text-center">
                <div class="icon icon18 sofa"></div>
                <div class="paddingtop5">Fully furnished</div>
            </li>
            <li class="text-center">
                <div class="icon icon18 pin"></div>
                <div class="paddingtop5">max. 5km</div>
            </li>
            <li class="text-center">
                <div class="icon icon18 shower"></div>
                <div class="paddingtop5">Any</div>
            </li>
            <li class="text-center">
                <div class="icon icon18 m2"></div>
                <div class="paddingtop5">1,000 - 20,000</div>
            </li>
            <li class="text-center">
                <div class="icon icon18 dollar"></div>
                <div class="paddingtop5">100B - 200B</div>
            </li>
            <li class="text-left">
                <div><strong>Facilites</strong></div>
                <div class="paddingtop5">
                    <span class="icon icon18 flower"></span>
                    <span class="icon icon18 parking"></span>
                    <span class="icon icon18 bbq"></span>
                    <span class="icon icon18 food"></span>
                    <span class="icon icon18 tenis"></span>
                    <span class="icon icon18 washing"></span>
                    <span class="icon icon18 wifi"></span>
                    <span class="icon icon18 swim"></span>
                    <span class="icon icon18 bminton"></span>

                </div>
            </li>
        </ul>
    </div>
    <div class="spacer"></div>

    <div class="row">
        <div class="col-md-8 col-sm-8 nopadding-vertical">
            <h1>All the details</h1>
            <div class="written-text">“Beautifully designed, 99 bedroom & 99 bathroom (en-suite) apartment with ample
                space, beautiful views
                over the city, modern & luxury furnishing, extensive facilities and international management!”
            </div>
            <div class="spacer"></div>
            <div>
                <ul class="listing-details">
                    <li class="detials-header blue">
							<span class="pull-left icon-section">
								<span class="icon icon24 dollar blue floatleft"></span>
								<span class="icon-text-header">Asking price: </span>
							</span>

                        <span class="pull-right">USD 999,999 / mo.</span>
                    </li>
                    <li>
							<span class="pull-left icon-section">
								<span class="icon icon18 bed floatleft"></span>
								<span class="icon-text">Bedrooms: </span>
							</span>
                        <span class="pull-right">99</span>
                    </li>
                    <li>
							<span class="pull-left icon-section">
								<span class="icon icon18 shower floatleft"></span>
								<span class="icon-text">Bathrooms: </span>
							</span>
                        <span class="pull-right">99</span>
                    </li>
                    <li>
							<span class="pull-left icon-section">
								<span class="icon icon18 m2 floatleft"></span>
								<span class="icon-text">Size / Built-up in sqm: </span>
							</span>
                        <span class="pull-right">999,999</span>
                    </li>
                    <li>
							<span class="pull-left icon-section">
								<span class="icon icon18 sofa floatleft"></span>
								<span class="icon-text">Furnishing: </span>
							</span>
                        <span class="pull-right">Fully Furnished</span>
                    </li>
                    <li>
							<span class="pull-left icon-section">
								<span class="icon icon18 ladder floatleft"></span>
								<span class="icon-text">Floor: </span>
							</span>
                        <span class="pull-right">28 (High Floor)</span>
                    </li>
                    <li>
							<span class="pull-left icon-section">
								<span class="icon icon18 diamond floatleft"></span>
								<span class="icon-text">Classification:</span>
							</span>
                        <span class="pull-right">Luxury</span>
                    </li>
                    <li>
							<span class="pull-left icon-section">
								<span class="icon icon18 group floatleft"></span>
								<span class="icon-text">Occupancy:</span>
							</span>
                        <span class="pull-right">Vacant</span>
                    </li>
                    <li>
							<span class="pull-left icon-section">
								<span class="icon icon18 clock floatleft"></span>
								<span class="icon-text">Year built: </span>
							</span>
                        <span class="pull-right">2015</span>
                    </li>
                    <li>
							<span class="pull-left icon-section">
								<span class="icon icon18 calendar floatleft"></span>
								<span class="icon-text">Possible Terms: </span>
							</span>
                        <span class="pull-right">min. 1 Year</span>
                    </li>
                    <li>
							<span class="pull-left icon-section">
								<span class="icon icon18 note floatleft"></span>
								<span class="icon-text">Date of posting: </span>
							</span>
                        <span class="pull-right">16/12/2015</span>
                    </li>
                </ul>
            </div>
            <div class="spacer"></div>
            <h1>Description</h1>
            <h1 class="title-agent">This is a free form text for agents with WYSISWG editor like TinyMCE.</h1>
            <h2 class="title-agent">The idea is, that they have limited options to always fit our design, but still some
                flexibility in
                structuring and “designing” their post. The following should be possible.</h2>
            <div class="spacer10px"></div>
            <h1 class="title-agent">H1 - Title for Agents - 16px / Open Sans Bold / Signature Blue</h1>
            <h2 class="title-agent">H2 - Title for Agents - 14px / Open Sans Bold / Black</h2>
            <div class="spacer10px"></div>
            <div class="normal-text">Normal text - 14px / Open Sans Regular / Black</div>
            <div class="written-text">Written text - 14px / Open Sans Italic / Grey #7b7b7b</div>

            <div class="spacer10px"></div>

            <div class="normal-text">With those options they should be able to make some more meaningful postings, which
                express ambition and emotions. Please make sure that you filter out email addresses, telephone numbers
                or possible other methods of contact like usernames for Zalo, etc. as they should only be contacted
                through the official numbers they give to us (as seen on the right side in the agent profile) or through
                our contact form so we can measure popularity of postings and actual leads that we generate with our
                platform.
            </div>

            <div class="spacer10px"></div>
            <div class="normal-text">I think a limit for this should be around 5,000 or 10,000 characters.</div>
            <div class="spacer"></div>
            <h1>Facilities</h1>
            <div class="spacer"></div>
            <div>
                <ul class="listing-details">
                    <li>
                        <div class="row">
                            <div class="col-md-6 nopadding">
									<span class="pull-left icon-section">
										<span class="icon icon18 flower floatleft"></span>
										<span class="icon-text">Air conditioning</span>
									</span>
                            </div>
                            <div class="col-md-6 nopadding">
									<span class="pull-left icon-section">
										<span class="icon icon18 flower floatleft"></span>
										<span class="icon-text">Air conditioning</span>
									</span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <div class="col-md-6 nopadding">
									<span class="pull-left icon-section">
										<span class="icon icon18 parking floatleft"></span>
										<span class="icon-text">Covered parking</span>
									</span>
                            </div>
                            <div class="col-md-6 nopadding">
									<span class="pull-left icon-section">
										<span class="icon icon18 parking floatleft"></span>
										<span class="icon-text">Covered parking</span>
									</span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <div class="col-md-6 nopadding">
									<span class="pull-left icon-section">
										<span class="icon icon18 bbq floatleft"></span>
										<span class="icon-text">BBQ area</span>
									</span>
                            </div>
                            <div class="col-md-6 nopadding">
									<span class="pull-left icon-section">
										<span class="icon icon18 bbq floatleft"></span>
										<span class="icon-text">BBQ area</span>
									</span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <div class="col-md-6 nopadding">
									<span class="pull-left icon-section">
										<span class="icon icon18 food floatleft"></span>
										<span class="icon-text">Restaurent</span>
									</span>
                            </div>
                            <div class="col-md-6 nopadding">
									<span class="pull-left icon-section">
										<span class="icon icon18 food floatleft"></span>
										<span class="icon-text">Restauent</span>
									</span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <div class="col-md-6 nopadding">
									<span class="pull-left icon-section">
										<span class="icon icon18 tenis floatleft"></span>
										<span class="icon-text">Tennis Court(s)</span>
									</span>
                            </div>
                            <div class="col-md-6 nopadding">
									<span class="pull-left icon-section">
										<span class="icon icon18 tenis floatleft"></span>
										<span class="icon-text">Tennis Court(s)</span>
									</span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <div class="col-md-6 nopadding">
									<span class="pull-left icon-section">
										<span class="icon icon18 washing floatleft"></span>
										<span class="icon-text">Laundry / Launderette</span>
									</span>
                            </div>
                            <div class="col-md-6 nopadding">
									<span class="pull-left icon-section">
										<span class="icon icon18 washing floatleft"></span>
										<span class="icon-text">Laundry / Launderette</span>
									</span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <div class="col-md-6 nopadding">
									<span class="pull-left icon-section">
										<span class="icon icon18 wifi floatleft"></span>
										<span class="icon-text">Free Wi-fi</span>
									</span>
                            </div>
                            <div class="col-md-6 nopadding">
									<span class="pull-left icon-section">
										<span class="icon icon18 wifi floatleft"></span>
										<span class="icon-text">Free Wi-fi</span>
									</span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <div class="col-md-6 nopadding">
									<span class="pull-left icon-section">
										<span class="icon icon18 swim floatleft"></span>
										<span class="icon-text">Swimming Pool</span>
									</span>
                            </div>
                            <div class="col-md-6 nopadding">
									<span class="pull-left icon-section">
										<span class="icon icon18 swim floatleft"></span>
										<span class="icon-text">Swimming Pool</span>
									</span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <div class="col-md-6 nopadding">
									<span class="pull-left icon-section">
										<span class="icon icon18 bminton floatleft"></span>
										<span class="icon-text">Badminton Court</span>
									</span>
                            </div>
                            <div class="col-md-6 nopadding">
									<span class="pull-left icon-section">
										<span class="icon icon18 bminton floatleft"></span>
										<span class="icon-text">Badminton Court</span>
									</span>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="spacer"></div>
            <h1>Amenities nearby</h1>
            <div class="spacer"></div>
            <div>
                <ul class="listing-details">
                    <li>
							<span class="pull-left icon-section">
								<span class="icon icon18 graduate blue floatleft"></span>
								<span class="icon-text">Schools</span>
							</span>
                        <span class="pull-right">Distance</span>
                    </li>
                    <li>
                        <span class="pull-left"><strong>Ho Chi Minh City French International
                                School</strong> (School)</span>
                        <span class="pull-right">1.2 km</span>
                    </li>
                    <li>
                        <span class="pull-left"><strong>HCMC Medical University</strong> (College / University) </span>
                        <span class="pull-right">3.4 km</span>
                    </li>
                    <li>
                        <span class="pull-left"><strong>ASLI - Asian Strategy & Leadership Institute</strong> (College / University)</span>
                        <span class="pull-right">4.2 km</span>
                    </li>
                </ul>
                <div class="spacer10px"></div>
                <ul class="listing-details">
                    <li>
							<span class="pull-left icon-section">
								<span class="icon icon18 car blue floatleft"></span>
								<span class="icon-text">Transportation</span>
							</span>
                        <span class="pull-right">Distance</span>
                    </li>
                    <li>
                        <span class="pull-left"><strong>Ho Chi Minh City French International
                                School</strong> (School)</span>
                        <span class="pull-right">1.2 km</span>
                    </li>
                    <li>
                        <span class="pull-left"><strong>HCMC Medical University</strong> (College / University) </span>
                        <span class="pull-right">3.4 km</span>
                    </li>
                    <li>
                        <span class="pull-left"><strong>ASLI - Asian Strategy & Leadership Institute</strong> (College / University)</span>
                        <span class="pull-right">4.2 km</span>
                    </li>
                </ul>
                <div class="spacer10px"></div>
                <ul class="listing-details">
                    <li>
							<span class="pull-left icon-section">
								<span class="icon icon18 cart blue floatleft"></span>
								<span class="icon-text">Shopping</span>
							</span>
                        <span class="pull-right">Distance</span>
                    </li>
                    <li>
                        <span class="pull-left"><strong>Ho Chi Minh City French International
                                School</strong> (School)</span>
                        <span class="pull-right">1.2 km</span>
                    </li>
                    <li>
                        <span class="pull-left"><strong>HCMC Medical University</strong> (College / University) </span>
                        <span class="pull-right">3.4 km</span>
                    </li>
                    <li>
                        <span class="pull-left"><strong>ASLI - Asian Strategy & Leadership Institute</strong> (College / University)</span>
                        <span class="pull-right">4.2 km</span>
                    </li>
                </ul>
                <div class="spacer10px"></div>
            </div>

        </div>
        <div class="col-md-4 col-sm-4 nopadding-vertical" style="padding-left: 30px !important;">
            <div class="row">
                <h1>Map view</h1>
                <div><img src="images/layouts/detail_map.jpg" class="img-responsive"/></div>
            </div>
            <h1>Agent details</h1>
            <div class="row column-style">
                <div class="box-sidebar">
                    <div>
                        <img src="images/layouts/agent-avatar.jpg" class="floatleft"/>
                        <div class="agent-detail-box">
                            <div>
                                <strong class="blue">Mr. David Wagenleiter</strong>
                            </div>
                            <div class="spacer10px"></div>
                            <div>MagicLabs (Vietnam) Co.,<br>Ltd. (Ho Chi Minh City)</div>
                            <div class="spacer10px"></div>
                            <a href="#" class="link-blue">david.magicagent.vn</a>
                        </div>
                    </div>
                    <div class="spacer5px"></div>
                    <div class="line"></div>
                    <div class="spacer5px"></div>
                    <div>
                        <span class="icon icon18 phone-o floatleft"></span>
                        <span class="icon-text">+84 256 154984</span>
                    </div>
                    <div class="spacer5px"></div>
                    <div class="line"></div>
                    <div class="spacer5px"></div>
                    <div>
                        <span class="icon icon18 zalo floatleft"></span>
                        <span class="icon-text">shallowthoughts</span>
                    </div>
                    <div class="spacer5px"></div>
                    <div class="line"></div>
                    <div class="spacer5px"></div>
                    <div>
                        <span class="icon icon18 phone floatleft"></span>
                        <span class="icon-text">+60 147 10 1127</span>
                    </div>
                    <div class="spacer5px"></div>
                    <div class="line"></div>
                    <div class="spacer5px"></div>
                    <div>
                        <span class="icon icon18 viber floatleft"></span>
                        <span class="icon-text">shallowthoughts</span>
                    </div>
                    <div class="spacer5px"></div>
                    <div class="line"></div>
                    <div class="spacer5px"></div>
                    <div id="send-message-form" style="display: none;">
                        <input placeholder="Your name *" name="" class="text-box">
                        <div class="spacer5px"></div>
                        <input placeholder="Your phone number *" name="" class="text-box">
                        <div class="spacer5px"></div>
                        <textarea placeholder="Your message *" class="textarea-box"></textarea>
                        <div class="spacer5px"></div>
                        <button class="btn btn-xs btn-default-active">Send a message</button>
                    </div>
                    <button id="btn-send-message" class="btn btn-xs btn-default-active">Send a message</button>
                </div>
            </div>
            <h1>Mortgage Calculator</h1>
            <div class="spacer10px"></div>
            <div class="row column-style">
                <div class="box-sidebar">
                    <input placeholder="Buying price*" name="" class="text-box">
                    <div class="spacer5px"></div>
                    <input placeholder="Mortgage runtime in years*" name="" class="text-box">
                    <div class="spacer5px"></div>
                    <input placeholder="Interest rate*" name="" class="text-box">
                    <div class="spacer5px"></div>
                    <button id="btn-send-message" class="btn btn-xs btn-default-active">Calculator now</button>
                    <div class="spacer10px"></div>
                    <div><strong>Your monthly rate</strong></div>
                    <h1 class="blue">USD 999,9999</h1>
                    <div class="line"></div>
                    <div class="spacer10px"></div>
                    <div>
                        <strong>Where to get the best mortgage?</strong>
                        <div class="spacer5px"></div>
                        <a href="#" class="link-blue">Compare our offers</a>
                    </div>
                    <div class="spacer10px"></div>
                </div>
            </div>
            <div class="spacer10px"></div>
            <div class="column-style-blue">
                <div style="padding: 10px;">
                    <div style="float: left">
                        <img src="images/layouts/search-large.png">
                    </div>
                    <div style="padding: 10px 50px 10px 60px; color: #fff;">
                        <strong>Dont’ forget to insure your new place.</strong> <a href="#" class="link-white">Compare
                            plans!</a>
                    </div>
                </div>
            </div>
            <div class="spacer5px"></div>
            <div class="column-style">
                <div style="padding: 10px;">
                    <div style="float: left">
                        <img src="images/layouts/find-out-large.png">
                    </div>
                    <div style="padding: 5px 50px 5px 60px;">
                        <strong>Buying or renting, what is better for me?</strong> <a href="#" class="link-blue">Find
                            out!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

    <div id="slide_modal" class="modal-dialog" style="width: 866px; height: 500px; margin-top: 150px;">
        <div class="modal-content">
            <div class="modal-body ">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <!--
                    <ol class="carousel-indicators">
                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                      <li data-target="#myCarousel" data-slide-to="1"></li>
                      <li data-target="#myCarousel" data-slide-to="2"></li>
                      <li data-target="#myCarousel" data-slide-to="3"></li>
                    </ol>
                    -->
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="images/res/slide/1.jpg">
                        </div>

                        <div class="item">
                            <img src="images/res/slide/2.jpg">
                        </div>

                        <div class="item">
                            <img src="images/res/slide/3.jpg">
                        </div>

                        <div class="item">
                            <img src="images/res/slide/4.jpg">
                        </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <!--
                <img src="images/res/slide/1.jpg" class="img-responsive">-->
            </div>
        </div>
    </div>

</div>
<script type="text/javascript">

    $(window).load(function () {
        $('#vertical-slide').carouFredSel({
            items: 5,

            direction: "center",
            next: '#vertical-next',
            prev: '#vertical-prev',
            auto: false,
            scroll: {

                items: 1,
                duration: 500,
                easing: 'easeOutExpo'
            }
        });

        $('#thumb1').addClass('active');

        $('#vertical-slide').find('.item').click(function () {
            var rel = $(this).attr('rel');
            $('#big-slide').trigger('slideTo', '#big' + rel);
        });

        $('#big-slide').carouFredSel({
            items: 1,
            next: '.emotion-next',
            prev: '.emotion-back',
            auto: false,
            scroll: {
                items: 1,
                duration: 1000,
                easing: 'easeOutExpo',
                onBefore: function (data) {
                    //console.log(data);
                    var newItem = $(data.items.visible).attr('rel');
                    $('#vertical-slide').trigger('slideTo', '#thumb' + newItem);
                    $('#vertical-slide').find('.item').removeClass('active');
                    $('#thumb' + newItem).addClass('active');
                    $('#cur-slide').text(newItem);
                    $('#slide_modal').find('img').attr('src', $(data.items.visible).attr('src'))
                },
                onAfter: function (data) {
                    var newText = $(data.items.visible).attr('alt');
                    $('#slide_des').text(newText);
                }

            },
            onCreate: function (data) {
                $total = $('#big-slide').find('img').length;
                $('#total_slide').text($total);
                $('#slide_des').text($('#big1').attr('alt'));
            }

        });
        $("#btn-send-message").click(function () {
            $('#send-message-form').slideDown(1000, 'easeOutExpo');
            $("#btn-send-message").hide();
        })

    });
</script>
@endsection