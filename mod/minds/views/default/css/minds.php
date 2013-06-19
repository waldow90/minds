<?php
/**
 * CSS Extensions for Minds Theme
 */
?>
@font-face {
    font-family: 'entypo';
    src: url('<?php echo elgg_get_site_url();?>mod/minds/vendors/entypo/entypo.eot?') format('eot'),
         url('<?php echo elgg_get_site_url();?>mod/minds/vendors/entypo/entypo.woff') format('woff'),
         url('<?php echo elgg_get_site_url();?>mod/minds/vendors/entypo/entypo.ttf') format('truetype'),
         url('<?php echo elgg_get_site_url();?>mod/minds/vendors/entypo/entypo.svg') format('svg');
    font-weight: normal;
    font-style: normal;
}
@font-face {
  font-family: 'fontello';
<<<<<<< HEAD
  src: url('<?php echo elgg_get_site_url();?>mod/minds/vendors/fontello/font/fontello.eot?79538242');
  src: url('<?php echo elgg_get_site_url();?>mod/minds/vendors/fontello/font/fontello.eot?79538242#iefix') format('embedded-opentype'),
       url('<?php echo elgg_get_site_url();?>mod/minds/vendors/fontello/font/fontello.woff?79538242') format('woff'),
       url('<?php echo elgg_get_site_url();?>mod/minds/vendors/fontello/font/fontello.ttf?79538242') format('truetype'),
       url('<?php echo elgg_get_site_url();?>mod/minds/vendors/fontello/font/fontello.svg?79538242#fontello') format('svg');
=======
  src: url('<?php echo elgg_get_site_url();?>mod/minds/vendors/fontello/font/fontello.eot?73553306');
  src: url('<?php echo elgg_get_site_url();?>mod/minds/vendors/fontello/font/fontello.eot?73553306#iefix') format('embedded-opentype'),
       url('<?php echo elgg_get_site_url();?>mod/minds/vendors/fontello/font/fontello.woff?73553306') format('woff'),
       url('<?php echo elgg_get_site_url();?>mod/minds/vendors/fontello/font/fontello.ttf?73553306') format('truetype'),
       url('<?php echo elgg_get_site_url();?>mod/minds/vendors/fontello/font/fontello.svg?73553306#fontello') format('svg');
>>>>>>> production
  font-weight: normal;
  font-style: normal;
}
/**************
 **** BODY ****
 **************/
 
body{
	background:#F8F8F8;
	font-family: "Ubuntu", sans-serif;
 }
h1,h2,h3,h4,h5{
	font-family:"Ubuntu";
	font-weight:lighter;
}
body.news{
	background:#D2D9DF;
}

/***************
 *** TOP BAR ***
 **************/
.minds-header-right{
	margin:12px 0;
	float:right;
	height:60px;
}
.minds-header-right .notifications{
	float:right;
	margin:0;
}
.minds-header-right .notifications li{
	margin:2px 5px;
}
.minds-header-right .notifications li a{
	color:#333;
}
.minds-header-right span.text{
	float:left;
	margin-right:5px;
}
.minds-header-right:hover .more{
	display:block;
}
.minds-header-right .more{
	display:none;
	clear:both;
	height:25px;
}
.minds-header-right .more a{
	color:#333;
	font-size:11px;
}
.minds-header-right img{
}

.minds-header-right .elgg-form input[type=text], .minds-header-right .elgg-form input[type=password]{
	float:left;
	width:125px;
	height:28px;
	margin-right:8px;
}
.minds-header-right .elgg-form .elgg-button-submit{
	padding: 4px;
	min-width: 0;
	background:#4690D6;
	border:1px solid #4690D6;
}
.minds-header-right .elgg-menu.mtm{
	margin:0;
	font-size:11px;
}
.minds-header-right .elgg-menu.mtm li{
	border:0;
	padding:0 16px 0 2px;
}
.minds-header-right .elgg-menu.mtm li a{
	border:0;
}
.minds-header-right .social_login{
}
/* Top Menu
 */
.elgg-menu .entypo{
	font-family:'fontello', 'Ubuntu', Tahoma, sans-serif;
	font-size:18px;
	font-weight:normal;
	text-decoration:none;
}
.elgg-menu .entypo.elements{
	font-size:2px;
}
.elgg-menu .elgg-menu-item-logout .entypo{
	padding-top:2px;
}
.elgg-page-topbar .elgg-menu-item-minds-logo{
	margin-top:-6px;
 }
.elgg-menu-topbar .elgg-menu-item-minds-logo > a{
	padding:0; 
	margin:0 15px 0 0;
}
.elgg-page-topbar .elgg-menu-item-profile{
	margin:0px 5px 0 0;
 }
.elgg-menu-item-register  a{
	color:#4690D6 !important;
	padding:0 10px;
}
.index .elgg-main{
	overflow: visible !important;
	border:0;
	box-shadow:none !important;
	-webkit-box-shadow:none !important;
	-moz-box-shadow:none !important;
}

.elgg-menu-river li{
	padding:0 3px;
}
.elgg-menu-item-delete a:hover{
	color:red;
}

.elgg-menu-comments li{
	padding:0 3px;
}
.elgg-menu-comments li a{
	color:#CCC;
}

/* More Drop Down
 */
.elgg-menu.elgg-menu-site.elgg-menu-site-more{
	position:absolute;
	color:#333;
}

.elgg-search-header{
	margin-top:1px;
}
@media screen and (-webkit-min-device-pixel-ratio:0) {
	.elgg-search-header{
        	box-sizing: initial;
       		margin-top:-1px;
	}
}
/* Login button 
 */
#login-dropdown{
	top:3px;
}
#login-dropdown:hover #login-dropdown-box{
	display:block;
}
.login-button{
	color:#333;
}
.login-button:hover{
	background:transparent;
    color:#4690D6;
    -webkit-border-radius-bottomright: 0px; 
	-moz-border-radius-bottomright: 0px;
    border-bottom-right-radius:0px;
    -webkit-border-radius-bottomleft: 0px; 
	-moz-border-radius-bottomleft: 0px;
    border-bottom-left-radius:0px;
}
/**
 * Content
 */
.minds-body-header{
	width: 100%;
	height:auto;
	background: #F8F8F8;
	padding: 25px 0;
	margin-bottom: 10px;
	opacity: .90;
	display:inline-block;
}
.minds-body-header > .inner{
	width:90%;
	margin:0 auto;
}
.minds-body-header h2{
	font-size:52px;
	font-weight:lighter;
}
.minds-body-header h3{
	font-size:16px;
	font-weight:lighter;
}
.minds-body-header .elgg-menu-entity, .minds-body-header .elgg-menu-title{
	margin:10px;
}
/**
 * Index views
 */
/*.index .elgg-list .elgg-item{
	float:none;
	width:60%;
	max-width:60%;
	max-height:auto;
	height:auto;
	overflow:show;
	
}*/
/**
 * Minds Tiles
 */
.tiles .elgg-list{
	width:100%;
	height:auto;
	display:block;
}
.tiles .elgg-list li.elgg-item{
	border:0;
	float:left;
	display:block;
	width:25%;
	height:170px;
	overflow:hidden;
	position:relative;
}
li .rich-image{
	width:110%;
	margin:0 -10px;
}
li .excerpt a{
	color:#333;
}
.tiles .elgg-list li.elgg-item .info{
	left:0;
	bottom:-50px;
	padding:25px 10px 0;
	width:100%;
	
	position:absolute;
	
	
	
	background-color: transparent; 
   	/*background-image: url(images/fallback-gradient.png); */
   	background-image: -webkit-gradient(linear, 0% 0%, 0% 100%, from(transparent), to(#333));
   	background-image: -webkit-linear-gradient(top, transparent, #333); 
   	background-image:    -moz-linear-gradient(top, transparent, #333);
   	background-image:     -ms-linear-gradient(top, transparent, #333);
   	background-image:      -o-linear-gradient(top, transparent, #333);
}
.tiles .elgg-list li.elgg-item .info .extras{
	width:100%;
	height:50px;
	display:block;
} 
.tiles .elgg-list li.elgg-item:hover .info{
	bottom:0;
}
.tiles .elgg-list li.elgg-item .info h2{
	font-size:14px;
	color:#FFF;
	padding:10px 0 3px;
}
.tiles .elgg-list li.elgg-item .info h2 a{
	text-decoration:none;
}
.tiles .elgg-list li.elgg-item:hover .info .time{
	color:#EEE;
	font-style:italic;
	margin:0;
	font-size:11px;
}
.tiles .elgg-list li.elgg-item .info .excerpt a{
	display:none;
}
.tiles .elgg-list li.elgg-item:hover .info .excerpt a{
	display:block;
	color:#FFF;
	text-decoration:none;
	margin:0;
	width:100%;
	max-height:70px;
	display:block;
	overflow:hidden;
}
@media (min-width: 1280px){
	.tiles .elgg-list li.elgg-item{
		width:20%;
	}
}
.tiles .elgg-list li.elgg-item .elgg-menu{
	margin:0 0 5px 0;
	float:left;
}
.tiles .elgg-list li.elgg-item .elgg-menu li{
	margin:0 15px 0 0;
}

/**
 * Register page
 */
.elgg-form-account{
	float:left;
	width:450px;
	max-width:450px;
}
.elgg-form-account-side{
	float:right;
	wdith:400px;
}
.elgg-form-account .social{
	margin:5px;
}
.elgg-form-account .social > div{
	float:left;
	margin-right:10px;
}
.elgg-form-account .social .facebook{
	padding-top:1px;
}
	
/***************
 **CUSTOMINDEX**
 **************/
.front-page-buttons{
	margin:30px 0 0;
}
.front-page-buttons a{
	margin-right:20px;
}
.minds_index h2, h3{
	font-family: 'Ubuntu Light', 'Ubuntu', 'Ubuntu Beta', UbuntuBeta, Ubuntu, 'Bitstream Vera Sans', 'DejaVu Sans', Tahoma, sans-serif;
}
.minds_index h3 a{
	color:#4690D6;
	font-weight:normal;
}
.minds_index > .logo{
	margin:auto;
    width:200px;
} 
.minds_index > .search{
	width:600px;
	margin:auto;
}
.minds_index > .search input{
	float:left;
    width:525px;
}

.minds_index > .search form .elgg-button-submit{
	margin-left:5px;
    padding:4px;

}
.minds_index > .earlyAccess{
	width:575px;
	margin:0 auto 15px auto;
}
.minds_index > .earlyAccess .elgg-input-text{
	float:left;
	width:175px;
	margin:0 5px;
}
.minds_index > .earlyAccess .elgg-button{
	float:left;
	margin:0 5px;
	padding:5px;
}
.minds_index > .splash{
	width:100%;
	font-size:54px;
	font-weight: normal;
	text-align:center;
	letter-spacing:3px;
	line-height:75px;
	color:#666;
	font-family: 'Ubuntu Light', 'Ubuntu', 'Ubuntu Beta', UbuntuBeta, Ubuntu, 'Bitstream Vera Sans', 'DejaVu Sans', Tahoma, sans-serif;
	margin-top:10px;
}
.minds_index > .featured_wall{
	clear:both;
	width:100%;
	padding-top:25px;
}
.minds_index > .featured_wall h3{
	font-family: 'Ubuntu Bold', 'Ubuntu', 'Ubuntu Beta', UbuntuBeta, Ubuntu, 'Bitstream Vera Sans', 'DejaVu Sans', Tahoma, sans-serif;
	margin: 0 10px;
}
.minds_index .block{
	margin:25px 0;
	display:block;
	width:100%;
	height:auto;
	position:relative;
}
.minds_index .news-block{
	float:left;
	width:680px;
}
.minds_index .side-block{
	float:right;
	width:250px;
	background:#EDEDED;
	border: 1px #CCC solid;
	margin:30px 0;
	padding:10px;
	border-radius:2px;
	-webkit-border-radius: 2px;
    -moz-border-radius: 2px;
}
.minds_index .side-block p {
	font-size: 14px;
}

/**
 * Sidebar Footer
 */
.sidebar-footer{
	width:225px;
	position:absolute;
	margin:25px 0;
	clear:both;
	color:#888;
	text-shadow: 0px 0px 1px #DDD;
}

.sidebar-footer .elgg-menu-footer-default{
	text-align:left;
}
.elgg-menu-footer > li, .elgg-menu-footer > li > a {
	display: inline-block;
	color: #CCC;
	font-size: 11px;
}

/******************
 ** CUSTOM PAGES **
 *****************/
.elgg-sidebar .elgg-owner-block{
	-webkit-border-radius: 3px 3px 0 0;
	-moz-border-radius: 3px 3px 0 0;
 	border-radius:3px 3px 0 0;
}
.elgg-sidebar .elgg-owner-block .elgg-image-block{
	padding:0;
}
.elgg-sidebar .elgg-owner-block .elgg-image-block .elgg-body{
	padding:5px;
}
.elgg-sidebar li a{
	padding:5px 10px;
	font-weight:bold;
	background:transparent;
	border-bottom:1px solid #CCC;
}
.elgg-sidebar .elgg-module-aside{
	background:#FFF;
	padding:10px;
	margin:0;
}
/******************
 ** CUSTOM RIVER **
 *****************/
.news .side{
	width:230px;
	margin:15px 0 20px 0px;
	min-height:360px;
	float:left;
	padding:0 0 15px 0;
	background: rgb(255, 255, 255); /* The Fallback */
    background: rgba(255, 255, 255, 0.75); 
	-webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius:5px;
    -moz-box-shadow: 0 0 3px #888;
	-webkit-box-shadow: 0 0 3px#888;
	box-shadow: 0 0 3px #888;
}
.news .content {
	float: right;
	width:740px !important;
	margin:15px 0 0 15px;
	min-height:360px;
	float:left;
	padding:0;
	background: rgb(255, 255, 255); /* The Fallback */
    background: rgba(255, 255, 255, 0.75); 
	/*border-left:2px solid #cccccc;*/
	-webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius:5px;
    -moz-box-shadow: 0 0 3px #888;
	-webkit-box-shadow: 0 0 3px#888;
	box-shadow: 0 0 3px #888;
}
.news .content .elgg-module-wall {
	padding:10px;
}
.news .content .elgg-menu-filter {
	padding:0 10px;
	margin:0;
}
.news .content .elgg-list-river{
	margin:0;
	background:#FFF;
	padding:0 10px;
}

.news .side .elgg-module{
	border-top:2px solid #CCC;
	background:#FFF;
	-webkit-border-radius: 0px;
    -moz-border-radius: 0px;
    border-radius:0;
    margin:0;
}

.is-groups-element li.elgg-menu-item-membership, .is-groups-element li.elgg-menu-item-feature{
  display: none;
}
#river_avatar {
	text-align:center;
	padding: 0;
	text-align:center;
}
#river_avatar img{
	width: 100%;
	-webkit-border-radius: 5px 5px 0 0;
    -moz-border-radius: 5px 5px 0 0;
    border-radius:5px 5px 0 0;
}
#lastloggedin {
	color:#777777;
    font-size:12px;
    font-weight:bold;
    text-align:center;
}
#dashboard_navigation {
    width:100%;
    font-size:13px;
}
#dashboard_navigation ul {
	margin:0 0 15px 0;
    padding:0;
}
#dashboard_navigation ul li {
	list-style:none;
	float:none;
	padding:10px;
    font-weight:bold;
    border-bottom:1px solid #cccccc;
    text-decoration:none;
    display:block;
}

#dashboard_navigation ul li a {
    font-weight:bold;
    text-decoration:none;
}
.bootcamp{
	padding:10px;
	background:#FFF;
}
.news .side .sidebar-footer{
	position:absolute;
}
.load-more{
	clear:both;
	width:100%;
    padding:15px 0;
    text-align:center;
    background:#EFEFEF;
    color:#999;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    cursor:pointer;
}
.elgg-list-river{
	border-top:0;
}

/**
 * Homepage news
 */
.news-block .elgg-river li.elgg-item{
	background:#f9f9f9;
	border:1px #CCC solid;
	padding:10px;
	margin:5px 0;
	border-radius:2px;
	-webkit-border-radius: 2px;
    -moz-border-radius: 2px;
}
.elgg-river-attachments .elgg-photo.large{
	width:98.5%;
}
/* ***************************************
	ANNOUNCEMENT
**************************************** */
#announcement {
   margin: 5px auto;
   padding: 7px;
   background: #ceffcc;
   border: 2px solid #18ba18;
   border-radius: 5px;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
}
#announcement h2 {
  color: #000;
  font-size:14px;
  font-weight: bold;
}


/* ***************************************
	RIVER
**************************************** */
.elgg-river-item form{
	-moz-border-radius: 0px;
    -webkit-border-radius: 0px;
    border-radius: 0px;
}
.elgg-river-responses {
}
input.comments.inline{
	height:25px;
    font-size:11px;
}


/* Comments 
 */
 

.hj-annotations-bar {
     -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    border-radius: 5px;
}
form.elgg-form.hj-ajaxed-comment-save {
	padding:5px;
}
form.elgg-form.hj-ajaxed-comment-save input{
	margin:0;
    height:25px;
    width:100%;
    font-size:12px;
}

/** 
 *
 * Online Status
 *
 */
 
.minds_online_status_small{
    margin: -13px 0 0;
    right:0;
    position: absolute;
    z-index:2;
}
.minds_online_status_tiny{
    margin: -9px 0 0;
    right:0;
    position: absolute;
     z-index:2;
}
.minds_online_status_medium{
    margin: -16px 0 0;
    right:0;
    position: absolute;
     z-index:2;
}
.minds_online_status_large{
    margin: -20px 0 0;
    right:0;
    position: absolute;
}
.minds_online_status_full{
    margin: -64px 0 0;
    right:0;
    position: absolute;
}

/**
 * Hover menu left instead of right
 */
.elgg-avatar > .elgg-icon-hover-menu {
	left:0;
}
.elgg-menu.elgg-menu-hover{
	margin-left:-25px;
    }
/**
 * Hide RSS
 */
li.elgg-menu-item-rss{
	display:none;
}

/** 
 * Upload Form
 */
.elgg-form-minds-upload .progressbox {
    border: 1px solid #0099CC;
    padding: 1px;
    position:relative;
    width:400px;
    border-radius: 3px;
    margin: 10px;
    display:none;
    text-align:left;
}
.elgg-form-minds-upload .progressbar {
    height:20px;
    border-radius: 3px;
    background-color: #003333;
    width:1%;
}
.elgg-form-minds-upload .statustxt {
    float:left;

    display:inline-block;
    color: #000000;
}
.thumbnail-tile{
	width:300px;
	height:185px;
	margin:10px;
	background:#EEE;
	display:block;
	float:left;
	overflow:hidden;
	position:relative;
}
.thumbnail-tile img{
	width:100%;
	
}
.thumbnail-tile .hover{
	width:300px;
	height:50px;
	/*background:url(<?php echo elgg_get_site_url();?>mod/minds/graphics/transparent_white.png);*/
	background-color:#EEE;
	position:absolute;
	margin:135px 0;
	display:none;
}
.thumbnail-tile > .hover > .inner{
	padding:8px;
}
.thumbnail-tile > .hover > .inner > .title{
	font-size:12px;
	font-weight:bold;
	padding:0;
	margin:0;
}
.thumbnail-tile > .hover > .inner > .owner{
	padding:0;
	margin:0;
	font-size:10px;
}
.thumbnail-tile .elgg-menu{
	margin:-25px 5px;
}
.thumbnail-tile .elgg-menu li{
	float:right;
}
.elgg-river-attachments .elgg-photo.large{
	width:98.5%;
}

.minds-licenses .license{
	float:left;
	width:400px;
	margin:10px;
}
.minds-licenses .license h3{
	padding:5px 0;
}
.minds-licenses .license img{
	float:left;
	margin:10px;
}


/**
 * rich content
 */
.rich-content{
	overflow:hidden;
	width:100%;
	clear:both;
}
.rich-content h3{
	font-size:30px;
	line-height:30px;
}
.rich-content h3 a:hover{
	color:#4690D6;
	text-decoration:none;
}
.rich-content .readmore{
	font-weight:bold;
}
.rich-content .rich-image-container{
	float:left;
	margin:0 15px 0 0;
	width:325px;
	height:175px;
	display:block;
	overflow:hidden;
	position:relative;
	box-shadow:0 0 2px #888;
}
.elgg-widget-content .rich-content .rich-image-container{
	width:200px;
	height:85px;
}
.rich-content .rich-image{
	position:absolute;
	top:0;
	left:0;
	width:100%;
}
.rich-content.sidebar h3{
	font-size:14px;
	line-height:14px;
}
.rich-content.sidebar h3 a:hover{
	color:#4690D6;
	text-decoration:none;
}
.rich-content.sidebar  .rich-image-container{
	margin:0;
	width:100px;
	height:60px;
}
.rich-content.sidebar .rich-image{
	margin:0;
	width:100%;
}

.rich-content.carousel .rich-image-container{
	margin:0 15px 0 0;
	width:100%;
	height:100%;
}

/**
 * Carousel
 */
#hz_carousel{
	clear:both;
	width:100%;
	height:auto;
	position:relative;
}
#hz_carousel .thumbnail-tile{
	width:250px;
	height:160px;
	margin:10px 0;
	padding:0;
}
#hz_carousel .thumbnail-tile .hover {
	width: 100%;
	height: 40%;
	background-color: #EEE;
	position: absolute;
	margin:0;
	bottom: 0;
}
#hz_carousel a.prev, #hz_carousel a.next {
	background: url(<?php echo elgg_get_site_url();?>mod/minds/vendors/carouFredSel/miscellaneous_sprite.png) no-repeat transparent;
	width: 45px;
	height: 50px;
	display: block;
	position: absolute;
	top: 85px;
}
#hz_carousel a.prev {			
	left: -50px;
	background-position: 0 0; 
}
#hz_carousel a.prev:hover {		
	background-position: 0 -50px; 
}
#hz_carousel a.prev.disabled {	
	background-position: 0 -100px !important;  
}
#hz_carousel a.next {			
	right: -50px;
	background-position: -50px 0; 
}
#hz_carousel a.next:hover {		
	background-position: -50px -50px; 
}
#hz_carousel a.next.disabled {	
	background-position: -50px -100px !important;  
}
#hz_carousel a.prev.disabled, a.next.disabled {
	cursor: default;
}
#hz_carousel a.prev span, #hz_carousel a.next span {
	display: none;
}
#hz_carousel .pagination {
	text-align: center;
}
#hz_carousel .pagination a {
	background: url(<?php echo elgg_get_site_url();?>mod/minds/vendors/carouFredSel/miscellaneous_sprite.png) 0 -300px no-repeat transparent;
	width: 15px;
	height: 15px;
	margin: 0 5px 0 0;
	display: inline-block;
}
#hz_carousel .pagination a.selected {
	background-position: -25px -300px;
	cursor: default;
}
#hz_carousel .pagination a span {
	display: none;
}
