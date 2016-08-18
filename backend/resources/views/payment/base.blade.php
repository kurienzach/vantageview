<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
        <link href='http://fonts.googleapis.com/css?family=Maven+Pro:400,700,500' rel='stylesheet' type='text/css'>
        
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>

        <script src="{{ asset('/js/jquery-1.11.0.js') }}"></script>
        
        @yield('head')
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        
        <style>
 	/*
	---------------------------------------------------------
	Footer area
	---------------------------------------------------------
	*/
	#Footer_panel_bg {
	    background: #eaecee;
	    float: left;
	    height: 65px;
	    width: 100%;
	}
	
	#Footer_panel {
	    height: 35px;
	    margin: 0 auto;
	    width: 1000px;
	}
	
	#SocialIcons_Subscribe_Panel {
	    float: left;
	    height: 40px;
	    margin-bottom: 10px;
	    position: relative;
	    width: 1000px;
	}
	
	#Social_media_icons_panel {
	    float: left;
	    height: 40px;
	    position: absolute;
	    width: 500px;
	}
	
	    #Social_media_icons_panel ul li {
	        display: inline;
	        float: left;
	        list-style: none;
	        margin-top: 10px;
	        padding-right: 10px;
	    }
	
	#News_Letter_Subscribe_panel {
	    float: right;
	    height: 40px;
	    position: relative;
	    text-align: right;
	    width: 500px;
	}
	
	.Newsletter_Subs {
	    border: 2px solid #ccc;
	    color: #999999;
	    font-family: Arial, Helvetica, sans-serif;
	    font-size: 70%;
	    height: 27px;
	    margin-top: 10px;
	    padding-left: 1.50%;
	    width: 290px;
	}
	
	.btn_subscribe {
	    position: absolute;
	    right: 5px;
	    top: 13px;
	    cursor: pointer;
	    width: 27px;
	    height: 24px;
	    background: url(/Content/Public/images/subscirbe_arrow.png) no-repeat;
	}
	
	#Footer_Links_Panel {
	    border-top: 1px #cccccc solid;
	    float: left;
	    height: 25px;
	    position: relative;
	    text-align: center;
	    width: 1000px;
	}
	
	    #Footer_Links_Panel ul li {
	        color: #666666;
	        display: inline;
	        font-family: Droid-sans;
	        font-size: 11px;
	        list-style: none;
	    }
	
	        #Footer_Links_Panel ul li a {
	            color: #666;
	            text-decoration: none;
	        }
	
	#Panel3 {
	    float: left;
	    height: 30%;
	    margin-top: 0px;
	    position: relative;
	    width: 100%;
	}
	
	#Copywright {
	    color: #999;
	    float: left;
	    font-family: Arial, Helvetica, sans-serif;
	    font-size: 11px;
	    text-align: left;
	    width: 300px;
	}
	
	#Privacy {
	    color: #999;
	    float: left;
	    font-family: Arial, Helvetica, sans-serif;
	    font-size: 11px;
	    text-align: center;
	    width: 400px;
	}
	
	    #Privacy ul {
	        margin: 0;
	    }
	
	    #Privacy ul li {
	        display: inline;
	        list-style: none;
	    }
	
	        #Privacy ul li a {
	            color: #999;
	            text-decoration: none;
	        }
	
	#Design {
	    color: #999;
	    float: left;
	    font-family: Arial, Helvetica, sans-serif;
	    font-size: 11px;
	    text-align: right;
	    width: 300px;
	    text-decoration: none;
	}
	
	    #Design a {
	        text-decoration: none;
	        color: #999;
	    }
	
	#CallUs {
	   cursor: pointer;
	    height: 20%;
	    position: fixed;
	    right: 0px;
	    top: 30%;
	    width: 40px;
	    z-index: 91;
	    display: none;
	}
	
	#LiveChat {
	    height: 216px;
	    position: fixed;
	    right: -300px;
	    top: 53.50%;
	    width: 340px;
	    z-index: 9999;
	    display: none;
	}
	
	#chat {
	    cursor: pointer;
	    float: left;
	    height: 67px;
	    width: 40px;
	}
	
	#Box {
	    background: #385186;
	    float: left;
	    height: 216px;
	    width: 300px;
	}
	
	#Box_inside_panel {
	    background: #fff;
	    height: 206px;
	    margin: 0 auto;
	    margin-top: 5px;
	    width: 291px;
	}
	
	    #Box_inside_panel img {
	        float: left;
	        margin-left: 1px;
	        margin-top: 1px;
	    }
	
	#Chat_Message {
	    float: left;
	    height: 170px;
	    position: relative;
	    width: 289px;
	}
	
	    #Chat_Message h4 {
	        color: #2a3666;
	        font-family: Arial, Helvetica, sans-serif;
	        font-size: 13px;
	        font-weight: bold;
	        margin-bottom: 5px;
	        margin-left: 10px;
	        margin-top: 5px;
	        width: 196px;
	    }
	
	.User {
	    color: #000;
	    float: left;
	    font-family: Arial, Helvetica, sans-serif;
	    font-size: 11px;
	    font-weight: bold;
	    margin-left: 20px;
	}
	
	.Messages {
	    color: #000;
	    float: left;
	    font-family: Arial, Helvetica, sans-serif;
	    font-size: 11px;
	    font-weight: normal;
	    margin-left: 3px;
	    text-align: left;
	    width: 115px;
	}
	
	#Chat_Input {
	    float: left;
	    height: 40px;
	    position: relative;
	    width: 206px;
	}
	
	.Input_Box {
	    border: 1px solid #4d68a0;
	    color: #999;
	    float: left;
	    font-family: Arial, Helvetica, sans-serif;
	    font-size: 11px;
	    height: 32px;
	    margin-left: 1px;
	    padding-left: 10px;
	    width: 152px;
	}
	
	.Chat_send_btn {
	    background: #2a3666;
	    border: 0px;
	    color: #fff;
	    float: left;
	    font-family: Arial, Helvetica, sans-serif;
	    font-size: 11px;
	    height: 36px;
	    margin-left: 2px;
	    text-align: center;
	    width: 38px;
	}
	
	.Locate {
	    background: #666666;
	    border: 0px;
	    color: #fff;
	    cursor: pointer;
	    float: left;
	    font-family: Arial, Helvetica, sans-serif;
	    font-size: 75%;
	    font-weight: bold;
	    height: 21px;
	    margin-left: 25%;
	    text-align: center;
	    width: 30%;
	}
	
	#Overlay {
	    background: #FFF;
	    display: none;
	    filter: alpha(opacity=50);
	    height: 100%;
	    opacity: 0.50;
	    position: absolute;
	    top: 0px;
	    width: 100%;
	    z-index: 81 /*999*/;
	}
	
	#CallUs {
	    position: fixed;
	    right: -210px;
	    width: 250px;
	    height: 20%;
	    top: 30%;
	    cursor: pointer;
	    z-index: 1000;
	}
	
	#Imgcall {
	    float: left;
	}
	
	#ImgcallPanel {
	    width: 206px;
	    height: 121px;
	    float: left;
	    position: relative;
	    background: #385186;
	}
	
	    #ImgcallPanel img {
	        margin: 8px 0 0 8px;
	    }
	
	
	/*Social Share buttons
	---------------------------------------------------------------------------------------------*/
	.twitter {
	    background: url(/Content/Public/images/twiiter_icon.png) no-repeat;
	    float: left;
	    height: 26px;
	    width: 26px;
	}
	
	    .twitter:hover {
	        background: url(/Content/Public/images/twiiter_icon_hover.png) no-repeat;
	    }
	
	.youtube {
	    background: url(/Content/Public/images/youtube_icon.png) no-repeat;
	    float: left;
	    height: 26px;
	    width: 26px;
	}
	
	    .youtube:hover {
	        background: url(/Content/Public/images/youtube_icon_hover.png) no-repeat;
	    }
	
	.flickr {
	    background: url(/Content/Public/images/flickr.png) no-repeat;
	    float: left;
	    height: 26px;
	    width: 26px;
	}
	
	    .flickr:hover {
	        background: url(/Content/Public/images/flickr_hover.png) no-repeat;
	    }
	
	.connect {
	    position: absolute;
	    display: none;
	}
	
	.follow {
	    position: absolute;
	    display: none;
	}
	
	.watch {
	    position: absolute;
	    display: none;
	}
	
	.share {
	    position: absolute;
	    display: none;
	}
	
	.Panel1 {
	    float: left;
	    position: absolute;
	    width: 30px;
	    height: 90px;
	    top: -53px;
	    z-index: 1;
	}
	
	.Panel2 {
	    float: left;
	    position: absolute;
	    width: 30px;
	    height: 90px;
	    left: 33px;
	    top: -53px;
	    z-index: 1;
	}
	
	.Panel3 {
	    float: left;
	    position: absolute;
	    width: 30px;
	    height: 90px;
	    left: 65px;
	    top: -53px;
	    z-index: 1;
	}
	
	.Panel4 {
	    float: left;
	    position: absolute;
	    width: 30px;
	    height: 90px;
	    left: 98px;
	    top: -53px;
	    z-index: 1;
	}
	
	.Panel5 {
	    float: left;
	    position: absolute;
	    width: 30px;
	    height: 90px;
	    left: 130px;
	    top: -53px;
	}
	
	.facebookicon {
	    position: absolute;
	    bottom: 0px;
	}
	
	.twittericon {
	    position: absolute;
	    bottom: 0px;
	}
	
	.youtubeicon {
	    position: absolute;
	    bottom: 0px;
	}
	
	.flickricon {
	    position: absolute;
	    bottom: 0px;
	}
	
	.googleplusicon {
	    position: absolute;
	    bottom: 0px;
	}
	
	.plusthis {
	    position: absolute;
	    display: none;
	}
	</style>
	
	
       
    </head>
    
    <body>
        
    @yield('header')
        
    <div class="content" style="margin-top: 20px">
        <div class="container">
        	@yield('content')
        </div>
    </div>
      
    <div style="height: 50px"></div>
    
    <div id="Footer_panel_bg">
        <div id="Footer_panel">
            <div id="Privacy_Copyright_Design_Panel" style="margin-top: 30px;">
                <div id="Copywright">
                    © Copyright 2015. Provident Housing Ltd
                </div>
                <div id="Privacy">
                    <ul>
                        <li><a href="http://www.puravankara.com/pages/Privacy_Policy" target="_blank">Privacy Policy</a>
                        </li>
                        <li>|</li>
                        <li><a href="http://www.puravankara.com/pages/Disclaimer" target="_blank">Disclaimer</a>
                        </li>
                    </ul>
                </div>
                <div id="Design">
                    Powered by: <a href="http://www.banded.co" target="_blank">Banded.co</a>
                </div>
            </div>
        </div>
    </div>

    </body>
    
    @yield('scripts')

</html>
