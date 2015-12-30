@extends('layouts.search')
@section('content')
<div class="container">
    <div id="check-limit-filter"></div>
    <div class="row nopadding">
        <div class="col-md-11 col-sm-11 col-xs-10 text-left nopadding">
            <h1>Results for: <b>[Renting]</b> <b>[All residential]</b> in <b>[Ho Chi Minh City]</b></h1>
        </div>
        <div class="col-md-1 col-sm-1 col-xs-1 text-right nopadding-vertical" style="background: #fff; margin-bottom: 10px;
    margin-top: 20px;">

            <button type="button" class="btn btn-xs btn-default btn-edit-filter" data-toggle="modal" data-target="#myModal"><i class="fa fa-cog"></i> Edit filters</button>

        </div>

    </div>

    <div class="spacer"></div>
    <div class="row column-style nopadding">
        <!--
        <div class="col-md-8 col-sm-8 col-xs-8">
            <div class="row">
                <div class="col-md-2 col-sm-2 col-xs-2">
                    <a href="#">20 - 25+</a>
                </div>

                <div class="col-md-2 col-sm-2 col-xs-2 nopadding"><a href="#">Fully furnished</a></div>
                <div class="col-md-2 col-sm-2 col-xs-2"><a href="#">max. 5km</a></div>
                <div class="col-md-2 col-sm-2 col-xs-2"><a href="#">Any</a></div>
                <div class="col-md-2 col-sm-2 col-xs-2"><a href="#">1,000 - 20,000</a></div>
                <div class="col-md-2 col-sm-2 col-xs-2"><a href="#">100B - 200B</a></div>
            </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-4">
            <a href="#">Full facilities</a>
        </div>
        -->
        <ul class="list-inline list-option-menu nopadding">
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
                </div>
            </li>
        </ul>
    </div>
    <div class="spacer"></div>
    <!--
    <ul class="list-inline list-option-menu column-style">
        <li><a href="#">20 - 25+</a></li>
        <li><a href="#">Fully furnished</a></li>
        <li><a href="#">max. 5km</a></li>
        <li><a href="#">Any</a></li>
    </ul>
    -->
    <div class="spacer"></div>
    <div class="row" id="section-sorting">
        <div class="col-xs-4 nopadding-vertical" class="listing-style">
            <ul id="menu-listing-style">
                <li id="icon_list_style">&nbsp;</li>
                <li id="icon_tile_style">&nbsp;</li>
                <li id="icon_map_style">&nbsp;</li>
            </ul>

        </div>
        <div class="col-xs-4 noppading-vertical text-center">
            <img src="images/layouts/icon_sorting.png"/> Price ascending <b class="caret"></b>
        </div>
        <div class="col-xs-4 noppading-vertical text-right">
            vnd/$
        </div>
    </div>


    <div class="spacer"></div>

    <!-- content map style -->
    <div id="content_map_style">
        <div class="row">

            <div class="col-md-12 col-sm-12 nopadding">
                <div id="map-container"></div>
                <div id="content-map" style="position: absolute; top: 20px; left: 20px; z-index: 1; display:none;">
                    <div class="col-md-3 col-sm-4 col-xs-6 nopadding">
                        <div class="column-four">
                            <div class="row-image">
                                <div class="col-md-12">
                                    <div class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner" role="listbox">
                                            <div class="item active">
                                                <img src="images/layouts/sp1_large.jpg" class="img-responsive"/>
                                            </div>
                                            <div class="item">
                                                <img src="images/layouts/sp2_large.jpg" class="img-responsive"/>
                                            </div>
                                            <div class="item">
                                                <img src="images/layouts/sp3_large.jpg" class="img-responsive"/>
                                            </div>
                                        </div>
                                    </div>
                                    <!--
                                    <img src="images/layouts/sp1.jpg" width="235"/>
                                    -->
                                    <div class="emotion-new">New</div>
                                    <div class="emotion-img"><img src="images/layouts/icon_img.png" /> 12</div>
                                    <div class="emotion-next"><i class="fa fa-chevron-right"></i></div>
                                </div>
                            </div>
                            <div class="row-one-column">
                                <div class="column1"><img src="images/layouts/icon_bed.png" /> 99</div>
                                <div class="column1"><img src="images/layouts/icon_bath.png" /> 99</div>
                                <div class="column2"><img src="images/layouts/icon_3.png" /> 12,000</div>
                            </div>
                            <div class="clear"></div>
                            <div class="row-one-column-content">
                                <div class="high_light">
                                    <span><img src="images/layouts/icon_furniture_on.png" /> Fully furnished</span>
                                    <span><img src="images/layouts/icon_floor_on.png" /> High floor</span>
                                </div>
                                <h5>Pearl Plaza Condominium in Binh Thanh District</h5>
                                <div class="line"></div>
                                <div class="row-price">
                                    <span><img src="images/layouts/icon_price.png" /></span>
                                    <span class="price-number">999,999</span>
                                </div>
                                <div class="line"></div>
                                <div class="row-action">
                                    <div class="column1">
                                        <a href="details" class="full-details">Full details</a>
                                    </div>
                                    <div class="column2">
                                        <span><a href="#"><i class="fa fa-map-marker"></i></a></span>
                                        <span><a href="#"><i class="fa fa-share-alt"></i></a></span>
                                        <span><a href="#"><i class="fa fa-heart"></i></a></span>
                                        <span id="close-content-map"><a href="#"><i class="fa fa-times"></i></a></span>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 vmargin10">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-6 nopadding-vertical" style="height: 85px">
                        <div class="row column-style-2">
                            <div class="col-xs-5 nopadding">
                                <img src="images/layouts/sp1.jpg" class="img-responsive"/>
                            </div>
                            <div class="col-xs-7 nopadding-vertical">
                                <div class="row">
                                    <div class="col-xs-12" style="height:45px;">
                                        <h6>Pearl Plaza Condominium</h6>
                                    </div>
                                    <div class="line2"></div>
                                    <div class="col-xs-12 nopadding-vertical">
                                        <div class="row" style="margin: 5px 0 0 5px;">
                                            <div class="col-xs-3 nopadding-vertical">
                                                <div class="icon icon18 bed floatleft"></div> <div class="icon-label">99</div>
                                            </div>
                                            <div class="col-xs-3 nopadding-vertical">
                                                <div class="icon icon18 shower floatleft"></div> <div class="icon-label">99</div>
                                            </div>
                                            <div class="col-xs-6 nopadding-vertical">
                                                <div class="icon icon18 m2 floatleft"></div> <div class="icon-label">12,000</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6 nopadding-vertical" style="height: 85px">
                        <div class="row column-style-2">
                            <div class="col-xs-5 nopadding">
                                <img src="images/layouts/sp2.jpg" class="img-responsive"/>
                            </div>
                            <div class="col-xs-7 nopadding-vertical" style="height: 100%; ">
                                <div class="row">
                                    <div class="col-xs-12" style="height:45px;">
                                        <h6>Pearl Plaza Condominium</h6>
                                    </div>
                                    <div class="line2"></div>
                                    <div class="col-xs-12 nopadding-vertical">
                                        <div class="row" style="margin: 5px 0 0 5px;">
                                            <div class="col-xs-3 nopadding-vertical">
                                                <div class="icon icon18 bed floatleft"></div> <div class="icon-label">99</div>
                                            </div>
                                            <div class="col-xs-3 nopadding-vertical">
                                                <div class="icon icon18 shower floatleft"></div> <div class="icon-label">99</div>
                                            </div>
                                            <div class="col-xs-6 nopadding-vertical">
                                                <div class="icon icon18 m2 floatleft"></div> <div class="icon-label">12,000</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-6 nopadding-vertical" style="height: 85px">
                        <div class="row column-style-2">
                            <div class="col-xs-5 nopadding">
                                <img src="images/layouts/sp3.jpg" class="img-responsive"/>
                            </div>
                            <div class="col-xs-7 nopadding-vertical" style="height: 100%; ">
                                <div class="row">
                                    <div class="col-xs-12" style="height:45px;">
                                        <h6>Pearl Plaza Condominium</h6>
                                    </div>
                                    <div class="line2"></div>
                                    <div class="col-xs-12 nopadding-vertical">
                                        <div class="row" style="margin: 5px 0 0 5px;">
                                            <div class="col-xs-3 nopadding-vertical">
                                                <div class="icon icon18 bed floatleft"></div> <div class="icon-label">99</div>
                                            </div>
                                            <div class="col-xs-3 nopadding-vertical">
                                                <div class="icon icon18 shower floatleft"></div> <div class="icon-label">99</div>
                                            </div>
                                            <div class="col-xs-6 nopadding-vertical">
                                                <div class="icon icon18 m2 floatleft"></div> <div class="icon-label">12,000</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6 nopadding-vertical" style="height: 85px">
                        <div class="row column-style-2">
                            <div class="col-xs-5 nopadding">
                                <img src="images/layouts/sp4.jpg" class="img-responsive"/>
                            </div>
                            <div class="col-xs-7 nopadding-vertical" style="height: 100%; ">
                                <div class="row">
                                    <div class="col-xs-12" style="height:45px;">
                                        <h6>Pearl Plaza Condominium</h6>
                                    </div>
                                    <div class="line2"></div>
                                    <div class="col-xs-12 nopadding-vertical">
                                        <div class="row" style="margin: 5px 0 0 5px;">
                                            <div class="col-xs-3 nopadding-vertical">
                                                <div class="icon icon18 bed floatleft"></div> <div class="icon-label">99</div>
                                            </div>
                                            <div class="col-xs-3 nopadding-vertical">
                                                <div class="icon icon18 shower floatleft"></div> <div class="icon-label">99</div>
                                            </div>
                                            <div class="col-xs-6 nopadding-vertical">
                                                <div class="icon icon18 m2 floatleft"></div> <div class="icon-label">12,000</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6 nopadding-vertical">
                        <div class="row column-style-2">
                            <div class="col-xs-5 nopadding">
                                <img src="images/layouts/sp1.jpg" class="img-responsive"/>
                            </div>
                            <div class="col-xs-7 nopadding-vertical" style="height: 100%; ">
                                <div class="row">
                                    <div class="col-xs-12" style="height:45px;">
                                        <h6>Pearl Plaza Condominium</h6>
                                    </div>
                                    <div class="line2"></div>
                                    <div class="col-xs-12 nopadding-vertical">
                                        <div class="row" style="margin: 5px 0 0 5px;">
                                            <div class="col-xs-3 nopadding-vertical">
                                                <div class="icon icon18 bed floatleft"></div> <div class="icon-label">99</div>
                                            </div>
                                            <div class="col-xs-3 nopadding-vertical">
                                                <div class="icon icon18 shower floatleft"></div> <div class="icon-label">99</div>
                                            </div>
                                            <div class="col-xs-6 nopadding-vertical">
                                                <div class="icon icon18 m2 floatleft"></div> <div class="icon-label">12,000</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6 nopadding-vertical">
                        <div class="row column-style-2">
                            <div class="col-xs-5 nopadding">
                                <img src="images/layouts/sp2.jpg" class="img-responsive"/>
                            </div>
                            <div class="col-xs-7 nopadding-vertical" style="height: 100%; ">
                                <div class="row">
                                    <div class="col-xs-12" style="height:45px;">
                                        <h6>Pearl Plaza Condominium</h6>
                                    </div>
                                    <div class="line2"></div>
                                    <div class="col-xs-12 nopadding-vertical">
                                        <div class="row" style="margin: 5px 0 0 5px;">
                                            <div class="col-xs-3 nopadding-vertical">
                                                <div class="icon icon18 bed floatleft"></div> <div class="icon-label">99</div>
                                            </div>
                                            <div class="col-xs-3 nopadding-vertical">
                                                <div class="icon icon18 shower floatleft"></div> <div class="icon-label">99</div>
                                            </div>
                                            <div class="col-xs-6 nopadding-vertical">
                                                <div class="icon icon18 m2 floatleft"></div> <div class="icon-label">12,000</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="button-pos-next">
                        <div class="button-next"><i class="fa fa-chevron-right"></i></div>
                    </div>

                </div>



            </div>

        </div>


    </div>
    <!-- content map style EOF -->


    <!-- content tiled style -->
    <div id="content_list_style">
        <div class="row column-style paddingbottom30">
            <div class="col-md-4 col-sm-4 col-xs-4 nopadding-vertical">
                <div class="row-image-large">
                    <div class="col-md-12">
                        <div class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <img src="images/layouts/sp1_large.jpg" class="img-responsive"/>
                                </div>
                                <div class="item">
                                    <img src="images/layouts/sp2_large.jpg" class="img-responsive"/>
                                </div>
                                <div class="item">
                                    <img src="images/layouts/sp3_large.jpg" class="img-responsive"/>
                                </div>
                            </div>
                        </div>

                        <div class="emotion-new">New</div>
                        <div class="emotion-img"><img src="images/layouts/icon_img.png" /> 12</div>
                        <div class="emotion-next"><i class="fa fa-chevron-right"></i></div>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="row main-data">
                    <div class="col-xs-2 nopadding-vertical vpadding10 text-center border-right-1"><img src="images/layouts/icon_bed.png" /> 99</div>
                    <div class="col-xs-2 nopadding-vertical vpadding10 text-center border-right-1"><img src="images/layouts/icon_bath.png" /> 99</div>
                    <div class="col-xs-4 nopadding-vertical vpadding10 text-center border-right-1"><img src="images/layouts/icon_3.png" /> 12,000</div>
                    <div class="col-xs-4 nopadding-vertical vpadding10 text-center border-right-1">
                        <span><img src="images/layouts/icon_price.png" /></span>
                        <span class="price-number">999,999</span>
                    </div>
                </div>

            </div>
            <div class="col-md-8 col-sm-8 col-xs-8">

                <div class="vpadding10 blue">
                    <span><img src="images/layouts/icon_furniture_on.png" /> <strong>Fully furnished</strong></span>
                    <span><img src="images/layouts/icon_floor_on.png" /> <strong>High floor</strong></span>
							<span class="pull-right">
								<span class="icon-action"><a href="#"><i class="fa fa-map-marker"></i></a></span>
								<span class="icon-action"><a href="#"><i class="fa fa-share-alt"></i></a></span>
								<span class="icon-action"><a href="#"><i class="fa fa-heart"></i></a></span>
								<span class="icon-action"><a href="#"><i class="fa fa-times"></i></a></span>
							</span>
                </div>
                <h5>Pearl Plaza Condominium in Binh Thanh District</h5>
                <p class="description hidden-sm hidden-xs">561 Điện Biên Phủ, Phường 25, Hồ Chí Minh, Vietnam</p>

                <div class="row">
                    <div class="line"></div>
                    <div class="row text-left">
                        <ul class="list-inline paddingtop10">
                            <li><span class="icon icon18 flower"></span></li>
                            <li><span class="icon icon18 parking"></span></li>
                            <li><span class="icon icon18 bbq"></span></li>
                            <li><span class="icon icon18 food"></span></li>
                            <li><span class="icon icon18 tenis"></span></li>
                            <li><span class="icon icon18 washing"></span></li>
                            <li><span class="icon icon18 wifi"></span></li>
                            <li><span class="icon icon18 swim"></span></li>
                            <li><span class="icon icon18 bminton"></span></li>
                        </ul>
                    </div>
                    <div class="line"></div>
                    <div class="row">
                        <div class="vpadding10 text-left">
                            <a href="details" class="full-details">Full details</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <div class="row column-style paddingbottom30">
            <div class="col-md-4 col-sm-4 col-xs-4 nopadding-vertical">
                <div class="row-image-large">
                    <div class="col-md-12">
                        <div class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <img src="images/layouts/sp2_large.jpg" class="img-responsive"/>
                                </div>
                                <div class="item">
                                    <img src="images/layouts/sp1_large.jpg" class="img-responsive"/>
                                </div>
                                <div class="item">
                                    <img src="images/layouts/sp3_large.jpg" class="img-responsive"/>
                                </div>
                            </div>
                        </div>

                        <div class="emotion-new">New</div>
                        <div class="emotion-img"><img src="images/layouts/icon_img.png" /> 12</div>
                        <div class="emotion-next"><i class="fa fa-chevron-right"></i></div>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="row main-data">
                    <div class="col-xs-2 nopadding-vertical vpadding10 text-center border-right-1"><img src="images/layouts/icon_bed.png" /> 99</div>
                    <div class="col-xs-2 nopadding-vertical vpadding10 text-center border-right-1"><img src="images/layouts/icon_bath.png" /> 99</div>
                    <div class="col-xs-4 nopadding-vertical vpadding10 text-center border-right-1"><img src="images/layouts/icon_3.png" /> 12,000</div>
                    <div class="col-xs-4 nopadding-vertical vpadding10 text-center border-right-1">
                        <span><img src="images/layouts/icon_price.png" /></span>
                        <span class="price-number">999,999</span>
                    </div>
                </div>

            </div>
            <div class="col-md-8 col-sm-8 col-xs-8">

                <div class="vpadding10 blue">
                    <span><img src="images/layouts/icon_furniture_on.png" /> <strong>Fully furnished</strong></span>
                    <span><img src="images/layouts/icon_floor_on.png" /> <strong>High floor</strong></span>
							<span class="pull-right">
								<span class="icon-action"><a href="#"><i class="fa fa-map-marker"></i></a></span>
								<span class="icon-action"><a href="#"><i class="fa fa-share-alt"></i></a></span>
								<span class="icon-action"><a href="#"><i class="fa fa-heart"></i></a></span>
								<span class="icon-action"><a href="#"><i class="fa fa-times"></i></a></span>
							</span>
                </div>
                <h5>Pearl Plaza Condominium in Binh Thanh District</h5>
                <p class="description hidden-sm">561 Điện Biên Phủ, Phường 25, Hồ Chí Minh, Vietnam</p>

                <div class="row">
                    <div class="line"></div>
                    <div class="row text-left">
                        <ul class="list-inline paddingtop10">
                            <li><span class="icon icon18 flower"></span></li>
                            <li><span class="icon icon18 parking"></span></li>
                            <li><span class="icon icon18 bbq"></span></li>
                            <li><span class="icon icon18 food"></span></li>
                            <li><span class="icon icon18 tenis"></span></li>
                            <li><span class="icon icon18 washing"></span></li>
                            <li><span class="icon icon18 wifi"></span></li>
                            <li><span class="icon icon18 swim"></span></li>
                            <li><span class="icon icon18 bminton"></span></li>
                        </ul>
                    </div>
                    <div class="line"></div>
                    <div class="row">
                        <div class="vpadding10 text-left">
                            <a href="details" class="full-details">Full details</a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="clear"></div>
        </div>

        <div class="row column-style paddingbottom30">
            <div class="col-md-4 col-sm-4 col-xs-4 nopadding-vertical">
                <div class="row-image-large">
                    <div class="col-md-12">
                        <div class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <img src="images/layouts/sp3_large.jpg" class="img-responsive"/>
                                </div>
                                <div class="item">
                                    <img src="images/layouts/sp1_large.jpg" class="img-responsive"/>
                                </div>
                                <div class="item">
                                    <img src="images/layouts/sp2_large.jpg" class="img-responsive"/>
                                </div>
                            </div>
                        </div>

                        <div class="emotion-new">New</div>
                        <div class="emotion-img"><img src="images/layouts/icon_img.png" /> 12</div>
                        <div class="emotion-next"><i class="fa fa-chevron-right"></i></div>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="row main-data">
                    <div class="col-xs-2 nopadding-vertical vpadding10 text-center border-right-1"><img src="images/layouts/icon_bed.png" /> 99</div>
                    <div class="col-xs-2 nopadding-vertical vpadding10 text-center border-right-1"><img src="images/layouts/icon_bath.png" /> 99</div>
                    <div class="col-xs-4 nopadding-vertical vpadding10 text-center border-right-1"><img src="images/layouts/icon_3.png" /> 12,000</div>
                    <div class="col-xs-4 nopadding-vertical vpadding10 text-center border-right-1">
                        <span><img src="images/layouts/icon_price.png" /></span>
                        <span class="price-number">999,999</span>
                    </div>
                </div>

            </div>
            <div class="col-md-8 col-sm-8 col-xs-8">

                <div class="vpadding10 blue">
                    <span><img src="images/layouts/icon_furniture_on.png" /> <strong>Fully furnished</strong></span>
                    <span><img src="images/layouts/icon_floor_on.png" /> <strong>High floor</strong></span>
							<span class="pull-right">
								<span class="icon-action"><a href="#"><i class="fa fa-map-marker"></i></a></span>
								<span class="icon-action"><a href="#"><i class="fa fa-share-alt"></i></a></span>
								<span class="icon-action"><a href="#"><i class="fa fa-heart"></i></a></span>
								<span class="icon-action"><a href="#"><i class="fa fa-times"></i></a></span>
							</span>
                </div>
                <h5>Pearl Plaza Condominium in Binh Thanh District</h5>
                <p class="description hidden-sm">561 Điện Biên Phủ, Phường 25, Hồ Chí Minh, Vietnam</p>

                <div class="row">
                    <div class="line"></div>
                    <div class="row text-left">
                        <ul class="list-inline paddingtop10">
                            <li><span class="icon icon18 flower"></span></li>
                            <li><span class="icon icon18 parking"></span></li>
                            <li><span class="icon icon18 bbq"></span></li>
                            <li><span class="icon icon18 food"></span></li>
                            <li><span class="icon icon18 tenis"></span></li>
                            <li><span class="icon icon18 washing"></span></li>
                            <li><span class="icon icon18 wifi"></span></li>
                            <li><span class="icon icon18 swim"></span></li>
                            <li><span class="icon icon18 bminton"></span></li>
                        </ul>
                    </div>
                    <div class="line"></div>
                    <div class="row">
                        <div class="vpadding10 text-left">
                            <a href="details" class="full-details">Full details</a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="clear"></div>
        </div>
        <div class="row column-style paddingbottom30">
            <div class="col-md-4 col-sm-4 col-xs-4 nopadding-vertical">
                <div class="row-image-large">
                    <div class="col-md-12">
                        <div class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <img src="images/layouts/sp1_large.jpg" class="img-responsive"/>
                                </div>
                                <div class="item">
                                    <img src="images/layouts/sp2_large.jpg" class="img-responsive"/>
                                </div>
                                <div class="item">
                                    <img src="images/layouts/sp3_large.jpg" class="img-responsive"/>
                                </div>
                            </div>
                        </div>

                        <div class="emotion-new">New</div>
                        <div class="emotion-img"><img src="images/layouts/icon_img.png" /> 12</div>
                        <div class="emotion-next"><i class="fa fa-chevron-right"></i></div>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="row main-data">
                    <div class="col-xs-2 nopadding-vertical vpadding10 text-center border-right-1"><img src="images/layouts/icon_bed.png" /> 99</div>
                    <div class="col-xs-2 nopadding-vertical vpadding10 text-center border-right-1"><img src="images/layouts/icon_bath.png" /> 99</div>
                    <div class="col-xs-4 nopadding-vertical vpadding10 text-center border-right-1"><img src="images/layouts/icon_3.png" /> 12,000</div>
                    <div class="col-xs-4 nopadding-vertical vpadding10 text-center border-right-1">
                        <span><img src="images/layouts/icon_price.png" /></span>
                        <span class="price-number">999,999</span>
                    </div>
                </div>

            </div>
            <div class="col-md-8 col-sm-8 col-xs-8">

                <div class="vpadding10 blue">
                    <span><img src="images/layouts/icon_furniture_on.png" /> <strong>Fully furnished</strong></span>
                    <span><img src="images/layouts/icon_floor_on.png" /> <strong>High floor</strong></span>
							<span class="pull-right">
								<span class="icon-action"><a href="#"><i class="fa fa-map-marker"></i></a></span>
								<span class="icon-action"><a href="#"><i class="fa fa-share-alt"></i></a></span>
								<span class="icon-action"><a href="#"><i class="fa fa-heart"></i></a></span>
								<span class="icon-action"><a href="#"><i class="fa fa-times"></i></a></span>
							</span>
                </div>
                <h5>Pearl Plaza Condominium in Binh Thanh District</h5>
                <p class="description hidden-sm hidden-xs">561 Điện Biên Phủ, Phường 25, Hồ Chí Minh, Vietnam</p>

                <div class="row">
                    <div class="line"></div>
                    <div class="row text-left">
                        <ul class="list-inline paddingtop10">
                            <li><span class="icon icon18 flower"></span></li>
                            <li><span class="icon icon18 parking"></span></li>
                            <li><span class="icon icon18 bbq"></span></li>
                            <li><span class="icon icon18 food"></span></li>
                            <li><span class="icon icon18 tenis"></span></li>
                            <li><span class="icon icon18 washing"></span></li>
                            <li><span class="icon icon18 wifi"></span></li>
                            <li><span class="icon icon18 swim"></span></li>
                            <li><span class="icon icon18 bminton"></span></li>
                        </ul>
                    </div>
                    <div class="line"></div>
                    <div class="row">
                        <div class="vpadding10 text-left">
                            <a href="details" class="full-details">Full details</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <div class="row column-style paddingbottom30">
            <div class="col-md-4 col-sm-4 col-xs-4 nopadding-vertical">
                <div class="row-image-large">
                    <div class="col-md-12">
                        <div class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner" role="listbox">
                                <div class="item">
                                    <img src="images/layouts/sp3_large.jpg" class="img-responsive"/>
                                </div>
                                <div class="item active">
                                    <img src="images/layouts/sp2_large.jpg" class="img-responsive"/>
                                </div>
                                <div class="item">
                                    <img src="images/layouts/sp1_large.jpg" class="img-responsive"/>
                                </div>
                            </div>
                        </div>
                        <div class="emotion-new">New</div>
                        <div class="emotion-img"><img src="images/layouts/icon_img.png" /> 12</div>
                        <div class="emotion-next"><i class="fa fa-chevron-right"></i></div>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="row main-data">
                    <div class="col-xs-2 nopadding-vertical vpadding10 text-center border-right-1"><img src="images/layouts/icon_bed.png" /> 99</div>
                    <div class="col-xs-2 nopadding-vertical vpadding10 text-center border-right-1"><img src="images/layouts/icon_bath.png" /> 99</div>
                    <div class="col-xs-4 nopadding-vertical vpadding10 text-center border-right-1"><img src="images/layouts/icon_3.png" /> 12,000</div>
                    <div class="col-xs-4 nopadding-vertical vpadding10 text-center border-right-1">
                        <span><img src="images/layouts/icon_price.png" /></span>
                        <span class="price-number">999,999</span>
                    </div>
                </div>

            </div>
            <div class="col-md-8 col-sm-8 col-xs-8">

                <div class="vpadding10 blue">
                    <span><img src="images/layouts/icon_furniture_on.png" /> <strong>Fully furnished</strong></span>
                    <span><img src="images/layouts/icon_floor_on.png" /> <strong>High floor</strong></span>
							<span class="pull-right">
								<span class="icon-action"><a href="#"><i class="fa fa-map-marker"></i></a></span>
								<span class="icon-action"><a href="#"><i class="fa fa-share-alt"></i></a></span>
								<span class="icon-action"><a href="#"><i class="fa fa-heart"></i></a></span>
								<span class="icon-action"><a href="#"><i class="fa fa-times"></i></a></span>
							</span>
                </div>
                <h5>Pearl Plaza Condominium in Binh Thanh District</h5>
                <p class="description hidden-sm">561 Điện Biên Phủ, Phường 25, Hồ Chí Minh, Vietnam</p>

                <div class="row">
                    <div class="line"></div>
                    <div class="row text-left">
                        <ul class="list-inline paddingtop10">
                            <li><span class="icon icon18 flower"></span></li>
                            <li><span class="icon icon18 parking"></span></li>
                            <li><span class="icon icon18 bbq"></span></li>
                            <li><span class="icon icon18 food"></span></li>
                            <li><span class="icon icon18 tenis"></span></li>
                            <li><span class="icon icon18 washing"></span></li>
                            <li><span class="icon icon18 wifi"></span></li>
                            <li><span class="icon icon18 swim"></span></li>
                            <li><span class="icon icon18 bminton"></span></li>
                        </ul>
                    </div>
                    <div class="line"></div>
                    <div class="row">
                        <div class="vpadding10 text-left">
                            <a href="details" class="full-details">Full details</a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="clear"></div>
        </div>

        <div class="row column-style paddingbottom30">
            <div class="col-md-4 col-sm-4 col-xs-4 nopadding-vertical">
                <div class="row-image-large">
                    <div class="col-md-12" >
                        <div class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <img src="images/layouts/sp3_large.jpg" class="img-responsive"/>
                                </div>
                                <div class="item">
                                    <img src="images/layouts/sp2_large.jpg" class="img-responsive"/>
                                </div>
                                <div class="item">
                                    <img src="images/layouts/sp1_large.jpg" class="img-responsive"/>
                                </div>
                            </div>
                        </div>
                        <div class="emotion-new">New</div>
                        <div class="emotion-img"><img src="images/layouts/icon_img.png" /> 12</div>
                        <div class="emotion-next"><i class="fa fa-chevron-right"></i></div>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="row main-data">
                    <div class="col-xs-2 nopadding-vertical vpadding10 text-center border-right-1"><img src="images/layouts/icon_bed.png" /> 99</div>
                    <div class="col-xs-2 nopadding-vertical vpadding10 text-center border-right-1"><img src="images/layouts/icon_bath.png" /> 99</div>
                    <div class="col-xs-4 nopadding-vertical vpadding10 text-center border-right-1"><img src="images/layouts/icon_3.png" /> 12,000</div>
                    <div class="col-xs-4 nopadding-vertical vpadding10 text-center border-right-1">
                        <span><img src="images/layouts/icon_price.png" /></span>
                        <span class="price-number">999,999</span>
                    </div>
                </div>

            </div>
            <div class="col-md-8 col-sm-8 col-xs-8">

                <div class="vpadding10 blue">
                    <span><img src="images/layouts/icon_furniture_on.png" /> <strong>Fully furnished</strong></span>
                    <span><img src="images/layouts/icon_floor_on.png" /> <strong>High floor</strong></span>
							<span class="pull-right">
								<span class="icon-action"><a href="#"><i class="fa fa-map-marker"></i></a></span>
								<span class="icon-action"><a href="#"><i class="fa fa-share-alt"></i></a></span>
								<span class="icon-action"><a href="#"><i class="fa fa-heart"></i></a></span>
								<span class="icon-action"><a href="#"><i class="fa fa-times"></i></a></span>
							</span>
                </div>
                <h5>Pearl Plaza Condominium in Binh Thanh District</h5>
                <p class="description hidden-sm">561 Điện Biên Phủ, Phường 25, Hồ Chí Minh, Vietnam</p>

                <div class="row">
                    <div class="line"></div>
                    <div class="row text-left">
                        <ul class="list-inline paddingtop10">
                            <li><span class="icon icon18 flower"></span></li>
                            <li><span class="icon icon18 parking"></span></li>
                            <li><span class="icon icon18 bbq"></span></li>
                            <li><span class="icon icon18 food"></span></li>
                            <li><span class="icon icon18 tenis"></span></li>
                            <li><span class="icon icon18 washing"></span></li>
                            <li><span class="icon icon18 wifi"></span></li>
                            <li><span class="icon icon18 swim"></span></li>
                            <li><span class="icon icon18 bminton"></span></li>
                        </ul>
                    </div>
                    <div class="line"></div>
                    <div class="row">
                        <div class="vpadding10 text-left">
                            <a href="details" class="full-details">Full details</a>
                            <!--
                            <button type="button" class="btn sample btn-xs btn-sample full-details">Full details</button>
                            -->
                        </div>
                    </div>
                </div>

            </div>
            <div class="clear"></div>
        </div>
    </div>
    <!-- content tiled style EOF-->


    <!-- content list style -->
    <div id="content_tile_style">
        <!-- row 1 -->
        <div class="row column-tile-style">
            <div class="col-md-3 col-sm-4 col-xs-6">
                <div class="column-four">
                    <div class="row-image">
                        <div class="col-md-12">
                            <div class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner" role="listbox">
                                    <div class="item active">
                                        <img src="images/layouts/sp1.jpg" width="235"/>
                                    </div>
                                    <div class="item">
                                        <img src="images/layouts/sp2.jpg" width="235"/>
                                    </div>
                                    <div class="item">
                                        <img src="images/layouts/sp3.jpg" width="235"/>
                                    </div>
                                    <div class="item">
                                        <img src="images/layouts/sp4.jpg" width="235"/>
                                    </div>
                                </div>
                            </div>

                            <div class="emotion-new">New</div>
                            <div class="emotion-img"><img src="images/layouts/icon_img.png" /> 12</div>
                            <div class="emotion-next"><i class="fa fa-chevron-right"></i></div>
                        </div>
                    </div>
                    <div class="row-one-column">
                        <div class="column1"><img src="images/layouts/icon_bed.png" /> 99</div>
                        <div class="column1"><img src="images/layouts/icon_bath.png" /> 99</div>
                        <div class="column2"><img src="images/layouts/icon_3.png" /> 12,000</div>
                    </div>
                    <div class="clear"></div>
                    <div class="row-one-column-content">
                        <div class="high_light">
                            <span><img src="images/layouts/icon_furniture_on.png" /> Fully furnished</span>
                            <span><img src="images/layouts/icon_floor_on.png" /> High floor</span>
                        </div>
                        <h5>Pearl Plaza Condominium in Binh Thanh District</h5>
                        <div class="line"></div>
                        <div class="row-price">
                            <span><img src="images/layouts/icon_price.png" /></span>
                            <span class="price-number">999,999</span>
                        </div>
                        <div class="line"></div>
                        <div class="row-action">
                            <div class="column1">
                                <a href="details" class="full-details">Full details</a>
                            </div>
                            <div class="column2">
                                <span><a href="#"><i class="fa fa-map-marker"></i></a></span>
                                <span><a href="#"><i class="fa fa-share-alt"></i></a></span>
                                <span><a href="#"><i class="fa fa-heart"></i></a></span>
                                <span><a href="#"><i class="fa fa-times"></i></a></span>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6">
                <div class="column-four">
                    <div class="row-image">
                        <div class="col-md-12">
                            <div class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner" role="listbox">
                                    <div class="item active">
                                        <img src="images/layouts/sp2.jpg" width="235"/>
                                    </div>
                                    <div class="item">
                                        <img src="images/layouts/sp1.jpg" width="235"/>
                                    </div>
                                    <div class="item">
                                        <img src="images/layouts/sp3.jpg" width="235"/>
                                    </div>
                                    <div class="item">
                                        <img src="images/layouts/sp4.jpg" width="235"/>
                                    </div>
                                </div>
                            </div>


                            <div class="emotion-new">New</div>
                            <div class="emotion-img"><img src="images/layouts/icon_img.png" /> 12</div>
                            <div class="emotion-next"><i class="fa fa-chevron-right"></i></div>
                        </div>
                    </div>
                    <div class="row-one-column">
                        <div class="column1"><img src="images/layouts/icon_bed.png" /> 99</div>
                        <div class="column1"><img src="images/layouts/icon_bath.png" /> 99</div>
                        <div class="column2"><img src="images/layouts/icon_3.png" /> 12,000</div>
                    </div>
                    <div class="clear"></div>
                    <div class="row-one-column-content">
                        <div class="high_light">
                            <span><img src="images/layouts/icon_furniture_on.png" /> Fully furnished</span>

                        </div>
                        <h5>Pearl Plaza Condominium in Binh Thanh District</h5>
                        <div class="line"></div>
                        <div class="row-price">
                            <span><img src="images/layouts/icon_price.png" /></span>
                            <span class="price-number">999,999</span>
                        </div>
                        <div class="line"></div>
                        <div class="row-action">
                            <div class="column1">
                                <a href="details" class="full-details">Full details</a>
                            </div>
                            <div class="column2">
                                <span><a href="#"><i class="fa fa-map-marker"></i></a></span>
                                <span><a href="#"><i class="fa fa-share-alt"></i></a></span>
                                <span><a href="#"><i class="fa fa-heart"></i></a></span>
                                <span><a href="#"><i class="fa fa-times"></i></a></span>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6">
                <div class="column-four">
                    <div class="row-image">
                        <div class="col-md-12">
                            <div class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner" role="listbox">
                                    <div class="item active">
                                        <img src="images/layouts/sp3.jpg" width="235"/>
                                    </div>
                                    <div class="item">
                                        <img src="images/layouts/sp1.jpg" width="235"/>
                                    </div>
                                    <div class="item">
                                        <img src="images/layouts/sp2.jpg" width="235"/>
                                    </div>
                                    <div class="item">
                                        <img src="images/layouts/sp4.jpg" width="235"/>
                                    </div>
                                </div>
                            </div>

                            <div class="emotion-new">New</div>
                            <div class="emotion-img"><img src="images/layouts/icon_img.png" /> 12</div>
                            <div class="emotion-next"><i class="fa fa-chevron-right"></i></div>
                        </div>
                    </div>
                    <div class="row-one-column">
                        <div class="column1"><img src="images/layouts/icon_bed.png" /> 99</div>
                        <div class="column1"><img src="images/layouts/icon_bath.png" /> 99</div>
                        <div class="column2"><img src="images/layouts/icon_3.png" /> 12,000</div>
                    </div>
                    <div style="clear: both"></div>
                    <div class="row-one-column-content">
                        <div class="high_light">
                            <span><img src="images/layouts/icon_furniture_on.png" /> Fully furnished</span>

                        </div>
                        <h5>Pearl Plaza Condominium in Binh Thanh District</h5>
                        <div class="line"></div>
                        <div class="row-price">
                            <span><img src="images/layouts/icon_price.png" /></span>
                            <span class="price-number">999,999</span>
                        </div>
                        <div class="line"></div>
                        <div class="row-action">
                            <div class="column1">
                                <a href="details" class="full-details">Full details</a>
                                <!--
                                <button type="button" class="btn sample btn-xs btn-sample full-details">Full details</button>
                                -->
                            </div>
                            <div class="column2">
                                <span><a href="#"><i class="fa fa-map-marker"></i></a></span>
                                <span><a href="#"><i class="fa fa-share-alt"></i></a></span>
                                <span><a href="#"><i class="fa fa-heart"></i></a></span>
                                <span><a href="#"><i class="fa fa-times"></i></a></span>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6">
                <div class="column-four">
                    <div class="row-image">
                        <div class="col-md-12">
                            <div class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner" role="listbox">
                                    <div class="item active">
                                        <img src="images/layouts/sp4.jpg" width="235"/>
                                    </div>
                                    <div class="item">
                                        <img src="images/layouts/sp1.jpg" width="235"/>
                                    </div>
                                    <div class="item">
                                        <img src="images/layouts/sp2.jpg" width="235"/>
                                    </div>
                                    <div class="item">
                                        <img src="images/layouts/sp3.jpg" width="235"/>
                                    </div>
                                </div>
                            </div>

                            <div class="emotion-new">New</div>
                            <div class="emotion-img"><img src="images/layouts/icon_img.png" /> 12</div>
                            <div class="emotion-next"><i class="fa fa-chevron-right"></i></div>
                        </div>
                    </div>
                    <div class="row-one-column">
                        <div class="column1"><img src="images/layouts/icon_bed.png" /> 99</div>
                        <div class="column1"><img src="images/layouts/icon_bath.png" /> 99</div>
                        <div class="column2"><img src="images/layouts/icon_3.png" /> 12,000</div>
                    </div>
                    <div class="clear"></div>
                    <div class="row-one-column-content">
                        <div class="high_light">
                            <span><img src="images/layouts/icon_furniture_on.png" /> Fully furnished</span>
                            <span><img src="images/layouts/icon_floor_on.png" /> High floor</span>
                        </div>
                        <h5>Pearl Plaza Condominium in Binh Thanh District</h5>
                        <div class="line"></div>
                        <div class="row-price">
                            <span><img src="images/layouts/icon_price.png" /></span>
                            <span class="price-number">999,999</span>
                        </div>
                        <div class="line"></div>
                        <div class="row-action">
                            <div class="column1">
                                <a href="details" class="full-details">Full details</a>
                            </div>
                            <div class="column2">
                                <span><a href="#"><i class="fa fa-map-marker"></i></a></span>
                                <span><a href="#"><i class="fa fa-share-alt"></i></a></span>
                                <span><a href="#"><i class="fa fa-heart"></i></a></span>
                                <span><a href="#"><i class="fa fa-times"></i></a></span>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!--
            </div>
            <!-- row 1 eof -->



            <!-- row 2 -->
            <!--
            <div class="row">-->
            <div class="col-md-3 col-sm-4 col-xs-6">
                <div class="column-four">
                    <div class="row-image">
                        <div class="col-md-12">
                            <div class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner" role="listbox">
                                    <div class="item active">
                                        <img src="images/layouts/sp1.jpg" width="235"/>
                                    </div>
                                    <div class="item">
                                        <img src="images/layouts/sp2.jpg" width="235"/>
                                    </div>
                                    <div class="item">
                                        <img src="images/layouts/sp3.jpg" width="235"/>
                                    </div>
                                    <div class="item">
                                        <img src="images/layouts/sp4.jpg" width="235"/>
                                    </div>
                                </div>
                            </div>
                            <!--
                            <img src="images/layouts/sp1.jpg" width="235"/>-->
                            <div class="emotion-new">New</div>
                            <div class="emotion-img"><img src="images/layouts/icon_img.png" /> 12</div>
                            <div class="emotion-next"><i class="fa fa-chevron-right"></i></div>
                        </div>
                    </div>
                    <div class="row-one-column">
                        <div class="column1"><img src="images/layouts/icon_bed.png" /> 99</div>
                        <div class="column1"><img src="images/layouts/icon_bath.png" /> 99</div>
                        <div class="column2"><img src="images/layouts/icon_3.png" /> 12,000</div>
                    </div>
                    <div class="clear"></div>
                    <div class="row-one-column-content">
                        <div class="high_light">
                            <span><img src="images/layouts/icon_furniture_on.png" /> Fully furnished</span>
                            <span><img src="images/layouts/icon_floor_on.png" /> High floor</span>
                        </div>
                        <h5>Pearl Plaza Condominium in Binh Thanh District</h5>
                        <div class="line"></div>
                        <div class="row-price">
                            <span><img src="images/layouts/icon_price.png" /></span>
                            <span class="price-number">999,999</span>
                        </div>
                        <div class="line"></div>
                        <div class="row-action">
                            <div class="column1">
                                <a href="details" class="full-details">Full details</a>
                            </div>
                            <div class="column2">
                                <span><a href="#"><i class="fa fa-map-marker"></i></a></span>
                                <span><a href="#"><i class="fa fa-share-alt"></i></a></span>
                                <span><a href="#"><i class="fa fa-heart"></i></a></span>
                                <span><a href="#"><i class="fa fa-times"></i></a></span>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6">
                <div class="column-four">
                    <div class="row-image">
                        <div class="col-md-12">
                            <div class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner" role="listbox">
                                    <div class="item active">
                                        <img src="images/layouts/sp2.jpg" width="235"/>
                                    </div>
                                    <div class="item">
                                        <img src="images/layouts/sp1.jpg" width="235"/>
                                    </div>
                                    <div class="item">
                                        <img src="images/layouts/sp3.jpg" width="235"/>
                                    </div>
                                    <div class="item">
                                        <img src="images/layouts/sp4.jpg" width="235"/>
                                    </div>
                                </div>
                            </div>

                            <div class="emotion-new">New</div>
                            <div class="emotion-img"><img src="images/layouts/icon_img.png" /> 12</div>
                            <div class="emotion-next"><i class="fa fa-chevron-right"></i></div>
                        </div>
                    </div>
                    <div class="row-one-column">
                        <div class="column1"><img src="images/layouts/icon_bed.png" /> 99</div>
                        <div class="column1"><img src="images/layouts/icon_bath.png" /> 99</div>
                        <div class="column2"><img src="images/layouts/icon_3.png" /> 12,000</div>
                    </div>
                    <div class="clear"></div>
                    <div class="row-one-column-content">
                        <div class="high_light">
                            <span><img src="images/layouts/icon_furniture_on.png" /> Fully furnished</span>

                        </div>
                        <h5>Pearl Plaza Condominium in Binh Thanh District</h5>
                        <div class="line"></div>
                        <div class="row-price">
                            <span><img src="images/layouts/icon_price.png" /></span>
                            <span class="price-number">999,999</span>
                        </div>
                        <div class="line"></div>
                        <div class="row-action">
                            <div class="column1">
                                <a href="details" class="full-details">Full details</a>
                            </div>
                            <div class="column2">
                                <span><a href="#"><i class="fa fa-map-marker"></i></a></span>
                                <span><a href="#"><i class="fa fa-share-alt"></i></a></span>
                                <span><a href="#"><i class="fa fa-heart"></i></a></span>
                                <span><a href="#"><i class="fa fa-times"></i></a></span>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6">
                <div class="column-four">
                    <div class="row-image">
                        <div class="col-md-12">
                            <div class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner" role="listbox">
                                    <div class="item active">
                                        <img src="images/layouts/sp3.jpg" width="235"/>
                                    </div>
                                    <div class="item">
                                        <img src="images/layouts/sp2.jpg" width="235"/>
                                    </div>
                                    <div class="item">
                                        <img src="images/layouts/sp1.jpg" width="235"/>
                                    </div>
                                    <div class="item">
                                        <img src="images/layouts/sp4.jpg" width="235"/>
                                    </div>
                                </div>
                            </div>

                            <div class="emotion-new">New</div>
                            <div class="emotion-img"><img src="images/layouts/icon_img.png" /> 12</div>
                            <div class="emotion-next"><i class="fa fa-chevron-right"></i></div>
                        </div>
                    </div>
                    <div class="row-one-column">
                        <div class="column1"><img src="images/layouts/icon_bed.png" /> 99</div>
                        <div class="column1"><img src="images/layouts/icon_bath.png" /> 99</div>
                        <div class="column2"><img src="images/layouts/icon_3.png" /> 12,000</div>
                    </div>
                    <div style="clear: both"></div>
                    <div class="row-one-column-content">
                        <div class="high_light">
                            <span><img src="images/layouts/icon_furniture_on.png" /> Fully furnished</span>

                        </div>
                        <h5>Pearl Plaza Condominium in Binh Thanh District</h5>
                        <div class="line"></div>
                        <div class="row-price">
                            <span><img src="images/layouts/icon_price.png" /></span>
                            <span class="price-number">999,999</span>
                        </div>
                        <div class="line"></div>
                        <div class="row-action">
                            <div class="column1">
                                <a href="details" class="full-details">Full details</a>
                            </div>
                            <div class="column2">
                                <span><a href="#"><i class="fa fa-map-marker"></i></a></span>
                                <span><a href="#"><i class="fa fa-share-alt"></i></a></span>
                                <span><a href="#"><i class="fa fa-heart"></i></a></span>
                                <span><a href="#"><i class="fa fa-times"></i></a></span>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6">
                <div class="column-four">
                    <div class="row-image">
                        <div class="col-md-12">
                            <div class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner" role="listbox">
                                    <div class="item active">
                                        <img src="images/layouts/sp4.jpg" width="235"/>
                                    </div>
                                    <div class="item">
                                        <img src="images/layouts/sp2.jpg" width="235"/>
                                    </div>
                                    <div class="item">
                                        <img src="images/layouts/sp3.jpg" width="235"/>
                                    </div>
                                    <div class="item">
                                        <img src="images/layouts/sp1.jpg" width="235"/>
                                    </div>
                                </div>
                            </div>

                            <div class="emotion-new">New</div>
                            <div class="emotion-img"><img src="images/layouts/icon_img.png" /> 12</div>
                            <div class="emotion-next"><i class="fa fa-chevron-right"></i></div>
                        </div>
                    </div>
                    <div class="row-one-column">
                        <div class="column1"><img src="images/layouts/icon_bed.png" /> 99</div>
                        <div class="column1"><img src="images/layouts/icon_bath.png" /> 99</div>
                        <div class="column2"><img src="images/layouts/icon_3.png" /> 12,000</div>
                    </div>
                    <div class="clear"></div>
                    <div class="row-one-column-content">
                        <div class="high_light">
                            <span><img src="images/layouts/icon_furniture_on.png" /> Fully furnished</span>
                            <span><img src="images/layouts/icon_floor_on.png" /> High floor</span>
                        </div>
                        <h5>Pearl Plaza Condominium in Binh Thanh District</h5>
                        <div class="line"></div>
                        <div class="row-price">
                            <span><img src="images/layouts/icon_price.png" /></span>
                            <span class="price-number">999,999</span>
                        </div>
                        <div class="line"></div>
                        <div class="row-action">
                            <div class="column1">
                                <a href="details" class="full-details">Full details</a>
                            </div>
                            <div class="column2">
                                <span><a href="#"><i class="fa fa-map-marker"></i></a></span>
                                <span><a href="#"><i class="fa fa-share-alt"></i></a></span>
                                <span><a href="#"><i class="fa fa-heart"></i></a></span>
                                <span><a href="#"><i class="fa fa-times"></i></a></span>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- row 3 -->
            <div class="col-md-3 col-sm-4 col-xs-6">
                <div class="column-four">
                    <div class="row-image">
                        <div class="col-md-12">
                            <div class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner" role="listbox">
                                    <div class="item active">
                                        <img src="images/layouts/sp1.jpg" width="235"/>
                                    </div>
                                    <div class="item">
                                        <img src="images/layouts/sp2.jpg" width="235"/>
                                    </div>
                                    <div class="item">
                                        <img src="images/layouts/sp3.jpg" width="235"/>
                                    </div>
                                    <div class="item">
                                        <img src="images/layouts/sp4.jpg" width="235"/>
                                    </div>
                                </div>
                            </div>
                            <!--
                            <img src="images/layouts/sp1.jpg" width="235"/>-->
                            <div class="emotion-new">New</div>
                            <div class="emotion-img"><img src="images/layouts/icon_img.png" /> 12</div>
                            <div class="emotion-next"><i class="fa fa-chevron-right"></i></div>
                        </div>
                    </div>
                    <div class="row-one-column">
                        <div class="column1"><img src="images/layouts/icon_bed.png" /> 99</div>
                        <div class="column1"><img src="images/layouts/icon_bath.png" /> 99</div>
                        <div class="column2"><img src="images/layouts/icon_3.png" /> 12,000</div>
                    </div>
                    <div class="clear"></div>
                    <div class="row-one-column-content">
                        <div class="high_light">
                            <span><img src="images/layouts/icon_furniture_on.png" /> Fully furnished</span>
                            <span><img src="images/layouts/icon_floor_on.png" /> High floor</span>
                        </div>
                        <h5>Pearl Plaza Condominium in Binh Thanh District</h5>
                        <div class="line"></div>
                        <div class="row-price">
                            <span><img src="images/layouts/icon_price.png" /></span>
                            <span class="price-number">999,999</span>
                        </div>
                        <div class="line"></div>
                        <div class="row-action">
                            <div class="column1">
                                <a href="details" class="full-details">Full details</a>
                            </div>
                            <div class="column2">
                                <span><a href="#"><i class="fa fa-map-marker"></i></a></span>
                                <span><a href="#"><i class="fa fa-share-alt"></i></a></span>
                                <span><a href="#"><i class="fa fa-heart"></i></a></span>
                                <span><a href="#"><i class="fa fa-times"></i></a></span>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6">
                <div class="column-four">
                    <div class="row-image">
                        <div class="col-md-12">
                            <div class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner" role="listbox">
                                    <div class="item active">
                                        <img src="images/layouts/sp2.jpg" width="235"/>
                                    </div>
                                    <div class="item">
                                        <img src="images/layouts/sp1.jpg" width="235"/>
                                    </div>
                                    <div class="item">
                                        <img src="images/layouts/sp3.jpg" width="235"/>
                                    </div>
                                    <div class="item">
                                        <img src="images/layouts/sp4.jpg" width="235"/>
                                    </div>
                                </div>
                            </div>

                            <div class="emotion-new">New</div>
                            <div class="emotion-img"><img src="images/layouts/icon_img.png" /> 12</div>
                            <div class="emotion-next"><i class="fa fa-chevron-right"></i></div>
                        </div>
                    </div>
                    <div class="row-one-column">
                        <div class="column1"><img src="images/layouts/icon_bed.png" /> 99</div>
                        <div class="column1"><img src="images/layouts/icon_bath.png" /> 99</div>
                        <div class="column2"><img src="images/layouts/icon_3.png" /> 12,000</div>
                    </div>
                    <div class="clear"></div>
                    <div class="row-one-column-content">
                        <div class="high_light">
                            <span><img src="images/layouts/icon_furniture_on.png" /> Fully furnished</span>

                        </div>
                        <h5>Pearl Plaza Condominium in Binh Thanh District</h5>
                        <div class="line"></div>
                        <div class="row-price">
                            <span><img src="images/layouts/icon_price.png" /></span>
                            <span class="price-number">999,999</span>
                        </div>
                        <div class="line"></div>
                        <div class="row-action">
                            <div class="column1">
                                <a href="details" class="full-details">Full details</a>
                            </div>
                            <div class="column2">
                                <span><a href="#"><i class="fa fa-map-marker"></i></a></span>
                                <span><a href="#"><i class="fa fa-share-alt"></i></a></span>
                                <span><a href="#"><i class="fa fa-heart"></i></a></span>
                                <span><a href="#"><i class="fa fa-times"></i></a></span>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6">
                <div class="column-four">
                    <div class="row-image">
                        <div class="col-md-12">
                            <div class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner" role="listbox">
                                    <div class="item active">
                                        <img src="images/layouts/sp3.jpg" width="235"/>
                                    </div>
                                    <div class="item">
                                        <img src="images/layouts/sp2.jpg" width="235"/>
                                    </div>
                                    <div class="item">
                                        <img src="images/layouts/sp1.jpg" width="235"/>
                                    </div>
                                    <div class="item">
                                        <img src="images/layouts/sp4.jpg" width="235"/>
                                    </div>
                                </div>
                            </div>

                            <div class="emotion-new">New</div>
                            <div class="emotion-img"><img src="images/layouts/icon_img.png" /> 12</div>
                            <div class="emotion-next"><i class="fa fa-chevron-right"></i></div>
                        </div>
                    </div>
                    <div class="row-one-column">
                        <div class="column1"><img src="images/layouts/icon_bed.png" /> 99</div>
                        <div class="column1"><img src="images/layouts/icon_bath.png" /> 99</div>
                        <div class="column2"><img src="images/layouts/icon_3.png" /> 12,000</div>
                    </div>
                    <div style="clear: both"></div>
                    <div class="row-one-column-content">
                        <div class="high_light">
                            <span><img src="images/layouts/icon_furniture_on.png" /> Fully furnished</span>

                        </div>
                        <h5>Pearl Plaza Condominium in Binh Thanh District</h5>
                        <div class="line"></div>
                        <div class="row-price">
                            <span><img src="images/layouts/icon_price.png" /></span>
                            <span class="price-number">999,999</span>
                        </div>
                        <div class="line"></div>
                        <div class="row-action">
                            <div class="column1">
                                <a href="details" class="full-details">Full details</a>
                            </div>
                            <div class="column2">
                                <span><a href="#"><i class="fa fa-map-marker"></i></a></span>
                                <span><a href="#"><i class="fa fa-share-alt"></i></a></span>
                                <span><a href="#"><i class="fa fa-heart"></i></a></span>
                                <span><a href="#"><i class="fa fa-times"></i></a></span>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6">
                <div class="column-four">
                    <div class="row-image">
                        <div class="col-md-12">
                            <div class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner" role="listbox">
                                    <div class="item active">
                                        <img src="images/layouts/sp4.jpg" width="235"/>
                                    </div>
                                    <div class="item">
                                        <img src="images/layouts/sp2.jpg" width="235"/>
                                    </div>
                                    <div class="item">
                                        <img src="images/layouts/sp3.jpg" width="235"/>
                                    </div>
                                    <div class="item">
                                        <img src="images/layouts/sp1.jpg" width="235"/>
                                    </div>
                                </div>
                            </div>

                            <div class="emotion-new">New</div>
                            <div class="emotion-img"><img src="images/layouts/icon_img.png" /> 12</div>
                            <div class="emotion-next"><i class="fa fa-chevron-right"></i></div>
                        </div>
                    </div>
                    <div class="row-one-column">
                        <div class="column1"><img src="images/layouts/icon_bed.png" /> 99</div>
                        <div class="column1"><img src="images/layouts/icon_bath.png" /> 99</div>
                        <div class="column2"><img src="images/layouts/icon_3.png" /> 12,000</div>
                    </div>
                    <div class="clear"></div>
                    <div class="row-one-column-content">
                        <div class="high_light">
                            <span><img src="images/layouts/icon_furniture_on.png" /> Fully furnished</span>
                            <span><img src="images/layouts/icon_floor_on.png" /> High floor</span>
                        </div>
                        <h5>Pearl Plaza Condominium in Binh Thanh District</h5>
                        <div class="line"></div>
                        <div class="row-price">
                            <span><img src="images/layouts/icon_price.png" /></span>
                            <span class="price-number">999,999</span>
                        </div>
                        <div class="line"></div>
                        <div class="row-action">
                            <div class="column1">
                                <a href="details" class="full-details">Full details</a>
                            </div>
                            <div class="column2">
                                <span><a href="#"><i class="fa fa-map-marker"></i></a></span>
                                <span><a href="#"><i class="fa fa-share-alt"></i></a></span>
                                <span><a href="#"><i class="fa fa-heart"></i></a></span>
                                <span><a href="#"><i class="fa fa-times"></i></a></span>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- row 2 eof -->

        </div>

        <!-- content list style EOF -->

    </div>
</div>
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog" style="width: 990px;">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body">
                <a href="javascript:;" id="close-sidebar" class="white" data-dismiss="modal">X</a>
                <h3 class="bold">Advanced filter options</h3>
                <div class="width50">

                    <div class="slide-wrap">
                        <a class="icon-check" href="javascript:;"></a>
                        <div class="icon icon24 bed"></div>
                        <div class="slide-bar">
                            <div class="slider" id="slider1" min="0" max="26" rel="bed-room"></div>
                        </div>
                    </div>

                    <div class="slide-wrap">
                        <a class="icon-check" href="javascript:;"></a>
                        <div class="icon icon24 m2"></div>
                        <div class="slide-bar">
                            <div class="slider noMaxLabel" step="1000" id="slider3" min="0" max="100000000" rel="acreage"></div>
                        </div>
                    </div>

                    <div class="slide-wrap">
                        <a class="icon-check" href="javascript:;"></a>
                        <div class="icon icon24 dollar"></div>
                        <a href="javascript:;" class="money-switch" rel="currency"><span class="money-switch-cricle"></span><span class="switch-label">d <b>OR</b> $</span></a>
                        <div class="slide-bar money">
                            <div class="slider"  min="0" max="100" rel="price"></div>
                        </div>
                    </div>
                </div>

                <div class="width50">

                    <div class="slide-wrap">
                        <a class="icon-check" href="javascript:;"></a>
                        <div class="icon icon24 shower"></div>
                        <div class="slide-bar">
                            <div class="slider" id="slider2" min="0" max="41" rel="bath-room"></div>
                        </div>
                    </div>

                    <div class="slide-wrap">
                        <a class="icon-check" href="javascript:;"></a>
                        <div class="icon icon24 sofa"></div>
                        <div class="slide-bar">
                            <div class="switch-group" rel="furniture">
                                <div class="col30">
                                    <a href="javascript:;" class="switch" rel="0"><span class="switch-cricle"></span></a>
                                    Unfurnished
                                </div>
                                <div class="col30">
                                    <a href="javascript:;" class="switch unchecked" rel="1"><span class="switch-cricle"></span></a>
                                    Partly Furnished
                                </div>
                                <div class="col30">
                                    <a href="javascript:;" class="switch unchecked" rel="2"><span class="switch-cricle"></span></a>
                                    Fully furnished
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="slide-wrap">
                        <a class="icon-check" href="javascript:;"></a>
                        <div class="icon icon24 pin"></div>
                        <div class="slide-bar">
                            <div class="slider single"  min="0" max="100" rel="distance"></div>
                            <div class="slide-label">
                                max. <b><span id="distance-value">5</span>km</b> distance to my choosen location
                            </div>
                        </div>
                    </div>



                </div>
                <div class="slide-wrap slide-facilities">
                    <a class="icon-check" href="javascript:;"></a>
                    <div class="opt-title"><b>Facilities</b> (click / tap to activate)</div>
                    <div class="facilities-wrap">
                        <a rel="tennis-court" class="col30 colsm50 opt-facilities" href="javascript:;"><span class="icon icon24 tenis gray"></span><span class="opt-label">Tennis Court</span></a>
                        <a rel="air-conditioning" class="col30 colsm50 opt-facilities" href="javascript:;"><span class="icon icon24 flower gray"></span><span class="opt-label">Air conditioning</span></a>
                        <a rel="swiming-pool" class="col30 colsm50 opt-facilities" href="javascript:;"><span class="icon icon24 swim gray"></span><span class="opt-label">Swimming Pool</span></a>
                        <a rel="free-wifi" class="col30 colsm50 opt-facilities" href="javascript:;"><span class="icon icon24 wifi gray"></span><span class="opt-label">Free Wi-Fi</span></a>
                        <a rel="free-parking" class="col30 colsm50 opt-facilities" href="javascript:;"><span class="icon icon24 parking gray"></span><span class="opt-label">Free Parking</span></a>
                        <a rel="bbq-area" class="col30 colsm50 opt-facilities" href="javascript:;"><span class="icon icon24 bbq gray"></span><span class="opt-label">BBQ Area</span></a>
                        <a rel="restaurant" class="col30 colsm50 opt-facilities" href="javascript:;"><span class="icon icon24 food gray"></span><span class="opt-label">Restaurant</span></a>
                        <a rel="dry-cleaner" class="col30 colsm50 opt-facilities" href="javascript:;"><span class="icon icon24 washing gray"></span><span class="opt-label">Dry Cleaner</span></a>
                        <a rel="badminton-court" class="col30 colsm50 opt-facilities" href="javascript:;"><span class="icon icon24 bminton gray"></span><span class="opt-label">Badminton Court</span></a>
                        <a rel="tennis-court2" class="col30 colsm50 opt-facilities" href="javascript:;"><span class="icon icon24 tenis gray"></span><span class="opt-label">Tennis Court</span></a>
                        <a rel="air-conditioning3" class="col30 colsm50 opt-facilities" href="javascript:;"><span class="icon icon24 flower gray"></span><span class="opt-label">Air conditioning</span></a>
                        <a rel="swiming-pool2" class="col30 colsm50 opt-facilities" href="javascript:;"><span class="icon icon24 swim gray"></span><span class="opt-label">Swimming Pool</span></a>
                        <a rel="free-wifi2" class="col30 colsm50 opt-facilities" href="javascript:;"><span class="icon icon24 wifi gray"></span><span class="opt-label">Free Wi-Fi</span></a>
                        <a rel="free-packing2" class="col30 colsm50 opt-facilities" href="javascript:;"><span class="icon icon24 parking gray"></span><span class="opt-label">Free Parking</span></a>
                        <a rel="bbq-area2" class="col30 colsm50 opt-facilities" href="javascript:;"><span class="icon icon24 bbq gray"></span><span class="opt-label">BBQ Area</span></a>

                    </div>
                </div>

                <div id="advanced-search-buttons" class="medium">
                    <a href="javascript:;" id="advanced-search-apply">Apply & Search now</a>
                    <a href="javascript:;" id="advanced-search-cancel" data-dismiss="modal">Cancel</a>
                </div>

            </div>

        </div>

    </div>
</div>
<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script>
    var iconBase = 'http://magicplayer.tv/';
    var array_maker= [];
    var var_pointed=-1;

    function init_map() {
        var map;
        var bounds = new google.maps.LatLngBounds();

        var var_location = new google.maps.LatLng(10.762622, 106.660172);

        var var_mapoptions = {
            center: var_location,
            zoom: 14
        };

        // Display a map on the page
        map = new google.maps.Map(document.getElementById("map-container"), var_mapoptions);
        map.setTilt(45);

        // Multiple Markers
        var markers = [
            ['Robot Tower, Ho Chi Minh', 10.802017, 106.709638],
            ['Saigon Pearl, Ho Chi Minh', 10.791415, 106.718637],
            ['Canalis Club, Ho Chi Minh',10.783345, 106.697289],
            ['Bitexco Financial Tower, Ho Chi Minh', 10.771663, 106.704164],
            ['Post office center, Ho Chi Minh', 10.779803, 106.700019]
        ];

        // Info Window Content
        var infoWindowContent = [
            ['<div class="info_content">' +
            '<h3>London Eye</h3>' +
            '<p>The London Eye is a giant Ferris wheel situated on the banks of the River Thames. The entire structure is 135 metres (443 ft) tall and the wheel has a diameter of 120 metres (394 ft).</p>' +        '</div>'],
            ['<div class="info_content">' +
            '<h3>Palace of Westminster</h3>' +
            '<p>The Palace of Westminster is the meeting place of the House of Commons and the House of Lords, the two houses of the Parliament of the United Kingdom. Commonly known as the Houses of Parliament after its tenants.</p>' +
            '</div>']
        ];

        // Display multiple markers on a map
        var infoWindow = new google.maps.InfoWindow(), marker, i;

        // Loop through our array of markers & place each one on the map
        for( i = 0; i < markers.length; i++ ) {
            var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
            bounds.extend(position);
            marker = new google.maps.Marker({
                position: position,
                map: map,
                icon: iconBase + 'icon_location.png',
                title: markers[i][0]
            });

            array_maker[i] = marker;
            // Allow each marker to have an info window
            google.maps.event.addListener(marker, 'click', (function(marker, i) {
                return function() {
                    if(var_pointed != -1){
                        array_maker[var_pointed].setIcon(iconBase + 'icon_location.png');
                    }
                    //console.log(markers);
                    //infoWindow.setContent(infoWindowContent[1][0]);
                    //infoWindow.setContent( infoPoint );
                    $("#content-map").show();
                    marker.setIcon(iconBase + 'icon_location_active.png');
                    var_pointed = i;
                    //infoWindow.open(map, marker);
                }
            })(marker, i));

            // Automatically center the map fitting all markers on the screen
            map.fitBounds(bounds);
        }

        // Override our map zoom level once our fitBounds function runs (Make sure it only runs once)
        var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
            this.setZoom(14);
            google.maps.event.removeListener(boundsListener);
        });

    }
</script>
<script type="text/javascript">
    function isOnScreen(elem){
        var docViewTop = $(window).scrollTop();
        var docViewBottom = docViewTop + $(window).height();
        var elemTop = $(elem).offset().top;
        var elemBottom = elemTop + $(elem).height();
        return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop) && $(elem).is(':visible'));
    }

    Number.prototype.format = function(n, x) {
        var re = '(\\d)(?=(\\d{' + (x || 3) + '})+' + (n > 0 ? '\\.' : '$') + ')';
        return this.toFixed(Math.max(0, ~~n)).replace(new RegExp(re, 'g'), '$1,');
    };

    $(document).ready(function(){
        $("#content_map_style").hide();
        $("#content_tile_style").hide();
        $("#icon_list_style").css('background-image', 'url(images/layouts/icon_listing_style_active.png)');


        $("#icon_list_style").click(function(){
            $("#content_list_style").show();
            $("#content_map_style").hide();
            $("#content_tile_style").hide();
            $(this).css('background-image', 'url(images/layouts/icon_listing_style_active.png)');
            $("#icon_tile_style").css('background-image', 'url(images/layouts/icon_tile_style.png)');
            $("#icon_map_style").css('background-image', 'url(images/layouts/icon_map_style.png)');
        });
        $("#icon_tile_style").click(function(){
            $("#content_list_style").hide();
            $("#content_map_style").hide();
            $("#content_tile_style").show();
            $("#icon_list_style").css('background-image', 'url(images/layouts/icon_listing_style.png)');
            $("#icon_map_style").css('background-image', 'url(images/layouts/icon_map_style.png)');
            $(this).css('background-image', 'url(images/layouts/icon_tile_style_active.png)');
        });
        $("#icon_map_style").click(function(){
            $("#content_list_style").hide();
            $("#content_tile_style").hide();
            $("#content_map_style").show();
            $("#icon_list_style").css('background-image', 'url(images/layouts/icon_listing_style.png)');
            $("#icon_tile_style").css('background-image', 'url(images/layouts/icon_tile_style.png)');
            $(this).css('background-image', 'url(images/layouts/icon_map_style_active.png)');
            init_map();
        });
        $("#close-content-map").click(function(){
            $("#content-map").hide();
            if(var_pointed != -1){
                array_maker[var_pointed].setIcon(iconBase + 'icon_location.png');
            }
        });


        $(".carousel").carousel({interval: false});
        $(".emotion-next").click(function(){
            $(this).parent().find(".carousel").carousel("next");
        });

        $(window).scroll(function(e) {
            if(!isOnScreen('#check-limit-filter')){
                $(".edit-filter").show();
            }else{
                $(".edit-filter").hide();
            }
        });

        //script for slider
        $('#option-links a').click(function() {
            $('#option-links a').removeClass('active');
            $(this).addClass('active');
        });

        $('#more-options').click(function() {
            if(!$(this).hasClass('active')){
                $('#sidebar').stop().animate({left:0},500,'easeOutExpo');
            }
        });

        $('#close-sidebar,#advanced-search-cancel').click(function() {
            $('#sidebar').stop().animate({left:-520},500,'easeOutExpo');
        });

        $('.icon-check').click(function() {
            $(this).toggleClass('unchecked');
        });
        $('.switch').click(function() {
            $(this).parents('.switch-group').find('.switch').addClass('unchecked');
            $(this).removeClass('unchecked');
            var val =  $(this).attr('rel');
            $('#'+$(this).parents('.switch-group').attr('rel')).val(val);
        });

        $('.money-switch').click(function() {
            var val = 0;
            $(this).toggleClass('right');
            if($(this).hasClass('right')){val = 1;}
            $('#'+$(this).attr('rel')).val(val);
        });


        $('.opt-facilities').click(function(){
            var val = 0;
            $(this).find('.icon').toggleClass('blue').toggleClass('gray');
            $(this).find('.opt-label').toggleClass('blue').toggleClass('medium');
            if($(this).find('.icon').hasClass('blue')){val = 1;}
            $('#'+$(this).attr('rel')).val(val);
        });

        $(".slider").each(function() {
            this.Min 		= parseInt($(this).attr('min'));
            this.Max 		= parseInt($(this).attr('max'));
            this.slide 		= $('<div class="slide-content"></div>');
            this.range 		= true;
            this.values 	= [this.Min, this.Max];
            this.minText	= 'Any';
            this.maxText	= this.Max - 1 +'+';
            this.step		= 1;

            if($(this).hasClass('noMaxLabel')){
                this.maxText = this.Max.format();
            }
            if($(this)[0].hasAttribute('step')){
                this.step = parseInt($(this).attr('step'));
            }

            this.slideLabel = $('<div class="slide-label"></div>');
            this.minLabel	= $('<div class="slide-min"></div>').appendTo(this.slideLabel);
            this.maxLabel	= $('<div class="slide-max"></div>').appendTo(this.slideLabel);

            $(this.slideLabel).appendTo($(this).parent());
            $(this.minLabel).text(this.minText);
            $(this.maxLabel).text(this.maxText);

            if($(this).hasClass('single')) {
                this.range = 'max';
                this.values = this.Min;
                $(this.slideLabel).remove();
            }
            this.slide.appendTo(this);

            var myslider = this;
            myslider.slide.slider({
                range	: this.range,
                min		: this.Min,
                max		: this.Max,
                step	: this.step,
                values	: this.values,
                slide	: function( event, ui ) {
                    if($(myslider).hasClass('single')){
                        $('#'+$(myslider).attr('rel')).val(ui.value);
                        $('#'+$(myslider).attr('rel')+'-value').text(ui.value);
                    }
                    else{
                        var minText  = parseInt(ui.values[0]).format();
                        var maxText  = parseInt(ui.values[1]).format();
                        if(parseInt(ui.values[0]) === parseInt(myslider.Min)){minText = myslider.minText;}
                        if(parseInt(ui.values[1]) === parseInt(myslider.Max)){maxText = myslider.maxText;}
                        $(myslider.minLabel).text(minText);
                        $(myslider.maxLabel).text(maxText);
                        $('#'+$(myslider).attr('rel')+'-min').val(ui.values[0]);
                        $('#'+$(myslider).attr('rel')+'-max').val(ui.values[1]);
                    }
                }
            });
        });



    });

</script>
@endsection