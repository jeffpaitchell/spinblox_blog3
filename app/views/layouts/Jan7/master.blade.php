<!doctype html>
<html>
	<head>
        <link rel="stylesheet" href=" <?php echo asset('css/style.css')?>" type="text/css">
    	<style type="text/css">
    		form ul {list-style: none}
            .navbar {border-radius: 0px;}
    	</style>

         <script language="javascript" type="text/javascript">
            function resizeIframeHeight(obj) {
            obj.style.height= obj.contentWindow.document.body.scrollHeight + 'px';

       }
       function resizeIframeWidth(obj) {
            obj.style.width= obj.contentWindow.document.body.scrollWidth + 'px';
            
       }
    </script>

    </head>

    <body>

    <!-- outter wrapper -->
<div id="outterwrapper">

    <div id="header_wrapper">    

    <header>

    <div id="spinblox_logo">

     <img src="images/spinblox_logo.png" />

     </div> <!-- End Spinblox Logo -->  

    <nav>
        <div class="full_menu">
        <ul>

            <li><a href="#">Contact</a></li>
    
            <li><a href="#">About</a></li>

            <li><a href="#">FAQ</a></li>

            <li><a href="#">Blog</a></li>

            <li><a href="#" class="drop">Our Team</a>
                <ul>
                    <li><a href="#">Justine Paitchell</a></li>
                    <li><a href="#">Jeff Paitchell</a></li>
                    <li><a href="#">Michael Paitchell</a></li>
                </ul>


            </li><!--End team dropdown  -->
        </ul> 
        </div> 

   <div id ="nav-wrap">

     <div class="menu-icon-res"></div>

        <div class="menu-smart">
        <ul class="no-js">
                    <a href="#" class="clicker"></a>
                    <ul id="nav">
                            <li><a>Market</a></li>
                            <li><a>TV</a></li>
                            <li><a>Settings</a></li>
                            <li><a>Privacy</a></li>
                            <li><a>Help</a></li>
                    </ul>
        </ul>
        </div>
        

   </div>

   </nav> 

    </header>
    <!-- header ends here -->
    </div> <!-- End Header Wrapper -->

    	<div class="container">
    		@if (Session::has('message'))
            	<div class="flash alert">
            		<p>{{ Session::get('message') }}</p>
        		</div>
			@endif

    		@yield('content')
        </div>

        <div id="bottom_menu">

        <div id="bottom_icons_container">

        <div id="bottom_icons">
        
        <a href="https://twitter.com/JeffPaitchell" >
        <img src="images/footer_buttons/twitter.png" />
        </a>
        <a href="http://www.facebook.com/jeff.paitchell" >
        <img src="images/footer_buttons/facebook.png" />
        </a>
        <p> Follow us online:   </p> <p>Contact us at: <b>jpaitchell@gmail.com</b>   

        </div>    
        </div>


    </div>    

<div id="sitemap">

    <br>
        
    
    <div id="footer_right"> <b>Site Navigation </b>
        <br> <a href="#">Contact</a>
        <br> <a href="#">About</a>
        <br> <a href="#">FAQ</a>
        <br> <a href="#">Blog</a>
        <br> <a href="#">Our Team</a>

     </div>

     <div id="footer_middle"> <b>Subscribe to Blog via Email  </b>
        <br> <p> Enter your email address to subscribe to our blog and you will receive notifications when they are available.  </p><br>
        <input type="text" name="input_blogger" value="" placeholder="Your email address" /><br>
        <input type="submit" name="blogger_submit" value="Subscribe" />


     </div>         


    </div>

</div> <!-- End Outter Wrapper -->


<!-- Latest version of jQuery -->

 <script src="https://d197h0pmdjcmjn.cloudfront.net/assets/application-91a445dd230a96b03c4db8416a71f7c6.js" type="text/javascript"></script>

<script src ="js/changeimage3.js"></script><script src ="js/icon-menu2.js"></script> 

<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&language=en"></script>

</body>

</html>