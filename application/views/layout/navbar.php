<style type="text/css" media="screen">
/*************LOGO HEADER**********/
.netindo_logo{float:left;}
.header-nav {float: right;}
.netindo_logo h1 a{font-size: .6em;color: #212121;letter-spacing: 5px;text-transform: uppercase;text-decoration: none;display: block;}
.netindo_logo h1 a span{font-size: 2em;color: #ef543b;text-shadow:0px 3px 1px #d93920;}
/*************END LOGO HEADER**********/
/*************NAVBAR**********/
.navbar-right {float: none !important;padding: 0;margin: 0.5em 0 0 0;}
.navbar-default .navbar-collapse, .navbar-default .navbar-form {border: none;}
.navbar-collapse {box-shadow: none;}
.navbar-default {background: none;border: none;}
.navbar {margin-bottom: 0;}
.navbar-default .navbar-nav > li > a {color: #00BCD4;}
.navbar-nav > li > a {padding:.7em 1.5em;text-transform: uppercase;font-weight: 600;}
.navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav > .active > a:hover, .navbar-default .navbar-nav > .active > a:focus {
    color:#00BCD4;background: none;
}
.navbar-default .navbar-nav > .open > a, .navbar-default .navbar-nav > .open > a:hover, .navbar-default .navbar-nav > .open > a:focus {
    color:#00BCD4;background: none;
}
.navbar-default .navbar-nav > li > a:hover{color: #00BCD4;}
.navbar-nav {margin: 0;}
.netindo_dropdown {border-radius:0;background:#ffffff;text-align:center;padding:0;border:none;}
.netindo_dropdown li a {text-transform:uppercase;color:#00BCD4;font-size:13px;font-weight:600;padding:.8em 0;}
.netindo_dropdown > li > a:hover {color:#fff;text-decoration:none;background-color #00BCD4;}
.netindo_nav a {margin: 0 .5em;overflow: hidden;-moz-transition: ease-out 0.3s 0.1s;-o-transition: ease-out 0.3s 0.1s;-webkit-transition: ease-out 0.3s;
    -webkit-transition-delay: 0.1s;transition: ease-out 0.3s 0.1s;
}
.netindo_nav a span::before {width:100%;height:2px;background:#00BCD4;content:"";position:absolute;left:0;top:0;-moz-transition:0.1s;-o-transition:0.1s;
  -webkit-transition: 0.1s;transition:0.1s;-moz-transform:translateX(-100%);-ms-transform:translateX(-100%);-webkit-transform:translateX(-100%);transform:translateX(-100%);
}
.netindo_nav a span::after {width:100%;height:2px;background:#00BCD4;content:"";position:absolute;right:0;bottom:0;-moz-transition:0.1s 0.2s;-o-transition:0.1s 0.2s;
  -webkit-transition: 0.1s;-webkit-transition-delay: 0.2s;transition: 0.1s 0.2s;-moz-transform: translateX(100%);-ms-transform: translateX(100%);-webkit-transform: translateX(100%);transform: translateX(100%);
}
.netindo_nav a::before {width:2px;height:100%;background:#00BCD4;content:"";position:absolute;left:0;top:0;-moz-transform:translateY(100%);-ms-transform:translateY(100%);
  -webkit-transform:translateY(100%);transform:translateY(100%);-moz-transition:0.1s 0.3s;-o-transition:0.1s 0.3s;-webkit-transition:0.1s;-webkit-transition-delay:0.3s;
  transition: 0.1s 0.3s;
}
.netindo_nav a::after{width:2px;height:100%;background:#00BCD4;content:"";position:absolute;right:0px;bottom:0;-moz-transform:translateY(-100%);
	-ms-transform:translateY(-100%);-webkit-transform:translateY(-100%);transform:translateY(-100%);-moz-transition:0.1s 0.1s;-o-transition:0.1s 0.1s;-webkit-transition:0.1s;
  -webkit-transition-delay: 0.1s;transition: 0.1s 0.1s;
}
.netindo_nav a:hover{color: white;}
.netindo_nav a:hover::before, .netindo_nav a:hover::after,.netindo_nav li.active a::before, .netindo_nav li.active a::after {
  -moz-transform: translateX(0);-ms-transform: translateX(0);-webkit-transform: translateX(0);transform: translateX(0);
}
.netindo_nav a:hover span::before, .link-effect-12 a:hover span::after,
.netindo_nav li.active a span::before, .netindo_nav li.active a span::after{
  -moz-transform: translateX(0);-ms-transform: translateX(0);-webkit-transform: translateX(0);transform: translateX(0);
}
.netindo_dropdown li a:before,.netindo_dropdown li a:after{display:none;}
.netindo_dropdown li a{margin:0;}
@media (max-width: 767px){
	.header-nav {float: none;text-align: center;}
	.navbar-nav {background: #212121;width:100%;}
	.nav > li {margin: 10px 0;}
	.navbar-default .navbar-nav > li > a {color: #fff;}
	.navbar-default .navbar-nav .open .dropdown-menu > li > a {color: #fff;}
	.navbar-default .navbar-nav .open .dropdown-menu > li > a:hover, .navbar-default .navbar-nav .open .dropdown-menu > li > a:focus {
		color: #ef543b;background-color: transparent;
	}
	.navbar-default .navbar-nav > .open > a, .navbar-default .navbar-nav > .open > a:hover, .navbar-default .navbar-nav > .open > a:focus {
	    color: #ef543b;background: none;
	}
	.navbar-toggle {margin-top: 15PX;margin-right: 0px;background-color:#00BCD4!important;border:1px solid #00BCD4!important;}
	span.icon-bar, span.sr-only{background:white!important;}
	h1.logo-netindo{margin-top:20px;font-size:50px;}
	a.logo-netindo{color:#00BCD4!important;font-weight:bold;}
}
@media (max-width: 991px){
	.navbar-nav > li > a {padding: .7em 1em;} }
/*************END NAVBAR**********/
</style>
<div class="header">
	<div class="container">
		<div class="netindo_logo">
			<a href="<?=base_url()?>">
				<img src="<?=base_url('assets/pos-icon.png')?>" alt="" class="img img-responsive visible-lg visible-md visible-sm" style="height:50px;">
				<h1 class="logo-netindo" style=""><a href="index.html" class="visible-xs logo-netindo">Netindo</a></h1>
			</a>
		</div>
		<div class="header-nav">
			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav class="link-effect-12">
						<ul class="nav navbar-nav netindo_nav">
							<li class="<?php if($this->uri->segment(1)=="home"){echo "active";} ?> visible-xs"><a href="<?=base_url('home')?>"><span>Home</span></a></li>
							<li class="<?php if($this->uri->segment(1)=="about"){echo "active";} ?>"><a href="<?=base_url('about')?>"><span>About</span></a></li>
							<li class="<?php if($this->uri->segment(1)=="features"){echo "active";} ?>"><a href="<?=base_url('features')?>"><span>Features</span></a></li>
							<li class="<?php if($this->uri->segment(1)=="hardware"){echo "active";} ?>"><a href="<?=base_url('hardware')?>"><span>Hardware</span></a></li>
							<li class="<?php if($this->uri->segment(1) == "support"){echo "active";} ?>"><a href="<?=base_url('support')?>"><span>Support</span></a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span data-hover="Short Codes">Language</span> <b class="caret"></b></a>
								<ul class="dropdown-menu netindo_dropdown">
									<li><a href="#ina">Indonesa</a></li>
									<li><a href="#eng">English</a></li>
								</ul>
							</li>
							<li><a href="#signup"><span>Sign Up <i class="fa fa-sign-in"></i></span></a></li>
						</ul>
					</nav>
				</div>
			</nav>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>
<!-- header -->
