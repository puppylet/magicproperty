<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Magic Property</title>
    <link rel="stylesheet" type="text/css" href="/css/icons.css">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <script src="/js/jquery.js"></script>
    <script src="/js/script.js"></script>
</head>

<body>
<div id="page-bg" class="hochiminh">
    <div id="sidebar">
        <div id="sidebar-content">
            <a href="javascript:;" id="close-sidebar" class="white">X</a>
            <h2 class="blue bold">Advanced filter options</h2>
            <div class="slide-wrap">
                <a class="icon-check" href="javascript:;"></a>
                <div class="icon icon24 bed"></div>
                <div class="slide-bar">
                    <div class="slider" id="slider1" min="0" max="26" rel="bed-room"></div>
                </div>
            </div>

            <div class="slide-wrap">
                <a class="icon-check" href="javascript:;"></a>
                <div class="icon icon24 shower"></div>
                <div class="slide-bar">
                    <div class="slider" id="slider2" min="0" max="41" rel="bath-room"></div>
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
                <div class="icon icon24 dollar"></div>
                <a href="javascript:;" class="money-switch" rel="currency"><span class="money-switch-cricle"></span><span class="switch-label">d <b>OR</b> $</span></a>
                <div class="slide-bar money">
                    <div class="slider"  min="0" max="100" rel="price"></div>
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

            <div class="slide-wrap">
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
                    <a rel="restaurant2" class="col30 colsm50 opt-facilities" href="javascript:;"><span class="icon icon24 food gray"></span><span class="opt-label">Restaurant</span></a>
                    <a rel="dry-cleaner2" class="col30 colsm50 opt-facilities" href="javascript:;"><span class="icon icon24 washing gray"></span><span class="opt-label">Dry Cleaner</span></a>
                    <a rel="badminton-court2" class="col30 colsm50 opt-facilities" href="javascript:;"><span class="icon icon24 bminton gray"></span><span class="opt-label">Badminton Court</span></a>
                </div>
            </div>
            <div id="advanced-search-buttons" class="medium">
                <a href="search" id="advanced-search-apply">Apply & Search now</a>
                <a href="javascript:;" id="advanced-search-cancel">Cancel</a>
            </div>

        </div>
    </div>
    <div id="top-menu" class="medium white">
        <span class="icon icon18 account"></span>
        <div id="top-links">
            <a href="javascript:;">My account</a>
            <a href="javascript:;">Owner or agent?</a>
            <a href="javascript:;">Let or sell now</a>
        </div>
    </div>
    <div id="logo">
        <img src="/images/logo.png" width="232" height="88" alt=""/>
    </div>
    <div id="centered" class="white">
        <h1 class="bold" id="big-title">Let’s find your new home,</h1>
        <h2 class="thin" id="second-title">room, office, shop or empty land!</h2>
        <div id="search-options" class="width640">
            <div id="option-links" class="bold links-group">
                <a href="javascript:;" class="active">Buy</a>
                <a href="javascript:;">Rent</a>
                <a href="javascript:;">Short stay</a>
                <span class="book">in</span>
            </div>
            <div id="option-list">
                <div class="bold">
                    <a href="javascript:;" class="lst-current">All residential</a>
                </div>
            </div>
        </div>
        <form id="search-form" class="width640">
            <input type="text" id="search-text" name="search-text" placeholder="[Ho Chi Minh]" class="bold white" value="[Ho Chi Minh]">
            <input type="hidden" id="bed-room-min" name="bed-room-min" value="0">
            <input type="hidden" id="bed-room-max" name="bed-room-max" value="26">
            <input type="hidden" id="bath-room-min" name="bath-room-min" value="0">
            <input type="hidden" id="bath-room-max" name="bath-room-max" value="41">
            <input type="hidden" id="acreage-min" name="acreage-min"  value="0">
            <input type="hidden" id="acreage-max" name="acreage-max"  value="0">
            <input type="hidden" id="furniture" name="furniture" value="0">
            <input type="hidden" id="currency" name="currency" value="0">
            <input type="hidden" id="price-min" name="price-min" value="100">
            <input type="hidden" id="price-max" name="price-max" value="0">
            <input type="hidden" id="distance" name="distance" value="0">
            <input type="hidden" id="tennis-court" name="tennis-court" value="0">
            <input type="hidden" id="air-conditioning" name="air-conditioning" value="0">
            <input type="hidden" id="swiming-pool" name="swiming-pool" value="0">
            <input type="hidden" id="free-wifi" name="free-wifi" value="0">
            <input type="hidden" id="free-parking" name="free-pacring" value="0">
            <input type="hidden" id="bbq-area" name="bbq-area" value="0">
            <input type="hidden" id="restaurant" name="restaurant" value="0">
            <input type="hidden" id="dry-cleaner" name="dry-cleaner" value="0">
            <input type="hidden" id="badminton-court" name="badminton-court" value="0">
            <input type="hidden" id="tennis-court2" name="tennis-court2" value="0">
            <input type="hidden" id="air-conditioning2" name="air-conditioning2" value="0">
            <input type="hidden" id="swiming-pool2" name="swiming-pool2" value="0">
            <input type="hidden" id="free-wifi2" name="free-wifi2" value="0">
            <input type="hidden" id="free-parking2" name="free-pacring2" value="0">
            <input type="hidden" id="bbq-area2" name="bbq-area2" value="0">
            <input type="hidden" id="restaurant2" name="restaurant2" value="0">
            <input type="hidden" id="dry-cleaner2" name="dry-cleaner2" value="0">
            <input type="hidden" id="badminton-court2" name="badminton-court2" value="0">
        </form>
        <div id="search-hint">
            You can enter the names of cities, states, areas & streets or a specific condominium.<br>
            Press <strong>ENTER</strong> when you are ready, choose from the list or click the search icon.
        </div>
        <div class="spacer">
        </div>
        <a href="javascript:;" id="more-options" class="bold">Show more filter options</a>
    </div>
    <div id="fotter" class="white">
        <div id="foot-nav" class="bold links-group">
            <a href="javascript:;">Buy</a>
            <a href="javascript:;">Rent</a>
            <a href="javascript:;">Short stay</a>
            <a href="javascript:;">Find buyers & tenants</a>
            <a href="javascript:;">Insurance</a>
            <a href="javascript:;">Mortgage</a>
            <a href="javascript:;">Condominium Index</a>
        </div>
        <div id="foot-right">
            <a href="javascript:;">About us</a>
            <a href="javascript:;">Terms & Conditions</a>
            <a href="javascript:;">Privacy Policy</a>
        </div>
    </div>
</div>
</body>
</html>