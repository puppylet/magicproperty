<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Magic Property</title>

    <link href="/css/icons.css" rel="stylesheet">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="/css/font-awesome.min.css" rel="stylesheet" >
    <link href="/css/style_search.css" rel="stylesheet">
    <link href="/css/style_front.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet'>

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/js/jquery.carouFredSel-6.2.1-packed.js"></script>


</head>

<body>
<div id="section-menu">
    <div id="logo">
        <a href="/"><img src="images/layouts/logo-sm.png"/></a>
    </div>
    <div id="main-menu" class="hidden-xs">
        <ul class="nav navbar-nav">
            <li class="active"><a href="#">Buy</a></li>
            <li><a href="#">Rent</a></li>
            <li><a href="#">Short Stay</a></li>
            <li><a href="#">Sell & Let</a></li>
            <li>
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">More <b class="caret"></b></a>
                <ul role="menu" class="dropdown-menu">
                    <li><a href="#">Inbox</a></li>
                    <li><a href="#">Drafts</a></li>
                    <li><a href="#">Sent Items</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Trash</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <div id="user-menu">
        <ul id="list-user-menu">
            <li>
                <a data-toggle="dropdown" class="dropdown-toggle" href="#"><img src="images/layouts/icon_user.png"/> My
                    account <b class="caret"></b></a>
                <ul role="menu" class="dropdown-menu-user">
                    <li><a href="#">Inbox</a></li>
                    <li><a href="#">Notifiers</a></li>
                    <li><a href="#">Log out</a></li>
                </ul>
            </li>
            <li><a href="#">VN</a></li>
        </ul>
    </div>
</div>

<div class="spacer"></div>

@yield('content')


<div id="section-footer">
    <div class="container">
        <div class="row" style="line-height: 75px;">
            <span class="pull-left"><a href="#"><img src="images/layouts/logo-sm.png"/></a></span>
				<span class="pull-right">
					About us     |     Investor Relations     |     Blog
				</span>
        </div>
        <div class="line-blue"></div>
        <div class="spacer"></div>
        <div class="spacer"></div>
        <div class="row nopadding">
            <div class="col-md-3 col-sm-3 nopadding-vertical">
                <dl>
                    <dt>looking for properties</dt>
                    <dd><a href="#">Buy</a></dd>
                    <dd><a href="#">Rent</a></dd>
                    <dd><a href="#">Short Stay</a></dd>
                </dl>
            </div>
            <div class="col-md-3 col-sm-3 nopadding-vertical">
                <dl>
                    <dt>OFFERING PROPERTIES</dt>
                    <dd><a href="#">Sell</a></dd>
                    <dd><a href="#">Let</a></dd>
                    <dd><a href="#">Home away</a></dd>
                </dl>
            </div>
            <div class="col-md-3 col-sm-3 nopadding-vertical">
                <dl>
                    <dt>Tools</dt>
                    <dd><a href="#">Mortgage Calculator</a></dd>
                    <dd><a href="#">Insurance Recommendations</a></dd>
                    <dd><a href="#">Rent or Buy?</a></dd>
                </dl>
            </div>
            <div class="col-md-3 col-sm-3 nopadding-vertical">
                <dl>
                    <dt>Legal</dt>
                    <dd><a href="#">Privacy Policy</a></dd>
                    <dd><a href="#">Terms & Conditions</a></dd>
                    <dd><a href="#">Contact & Imprint</a></dd>
                </dl>
            </div>
        </div>
    </div>
</div>


<div class="edit-filter" style="display: none;">
    <button type="button" class="btn btn-xs btn-default btn-edit-filter" data-toggle="modal" data-target="#myModal"><i
                class="fa fa-cog"></i> Edit filters
    </button>
</div>

</body>

</html>