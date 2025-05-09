<!DOCTYPE html>
<?php /*
@package packageName
@subpackage packageName
@since 1.0
*/

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('',true,'right')?></title>
    <link rel="shortcut icon" href="<?php echo ImagesPath?>/Icon Logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <!-- Proudly developed by Jonathan Madrigal - email me jonmad1@yahoo.com-->
    
	<?php wp_head(); ?> 
	<script>
  (function(w, d, t, h, s, n) {
    w.FlodeskObject = n;
    var fn = function() {
      (w[n].q = w[n].q || []).push(arguments);
    };
    w[n] = w[n] || fn;
    var f = d.getElementsByTagName(t)[0];
    var v = '?v=' + Math.floor(new Date().getTime() / (120 * 1000)) * 60;
    var sm = d.createElement(t);
    sm.async = true;
    sm.type = 'module';
    sm.src = h + s + '.mjs' + v;
    f.parentNode.insertBefore(sm, f);
    var sn = d.createElement(t);
    sn.async = true;
    sn.noModule = true;
    sn.src = h + s + '.js' + v;
    f.parentNode.insertBefore(sn, f);
  })(window, document, 'script', 'https://assets.flodesk.com', '/universal', 'fd');
</script>
<script>
  window.fd('form', {
    formId: '67990395d3edc2879af501a1'
  });
</script>
        <!-- Meta Pixel Code -->
        <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '838397161251403');
        fbq('track', 'PageView');
        </script>
        <noscript><img height="1" width="1" style="display:none"
        src="https://www.facebook.com/tr?id=838397161251403&ev=PageView&noscript=1"
        /></noscript>
        <!-- End Meta Pixel Code -->
        </head>


<body  <?php body_class();?>>
    <!-- Google Tag Manager (noscript) -->

        <!-- End Google Tag Manager (noscript) -->
		<header class="header">
         <div class="container flex aligncenter space-between ">
            <a href="<?php echo home_url();?>"><img src="<?php echo ImagesPath?>/McGuire Team logo.webp" alt='McGuire Logo'></a>
            <ul class="menu flex space-between aligncenter">
               <!--Buy-->
               <li class="menu-item">
                     Buy
                     <ul class="submenu">
                        <a href="https://home.mcguireteam.com/"><li class="submenu-item">
                           Search By Address
                        </li></a>
                        <a  href="<?php echo home_url();?>/featured-listings">
                           <li class="submenu-item">
                              Featured
                           </li>
                        </a>
                        <!--<a href="https://www.mcguireteam.com/financing-1">
                           <!--<li class="submenu-item">-
                                 Financing
                           </li>
                        </a>-->
                        <a  href="<?php echo home_url();?>/sold-listings">
                           <li class="submenu-item">
                              Sold
                           </li>
                        </a>
                        <!--<a  href="<?php echo home_url();?>/mortage-calculator">
                           <li class="submenu-item">
                              Mortgage Calculator
                           </li>
                        </a>
                        <a  href="<?php echo home_url();?>/affordability-calculator">
                           <li class="submenu-item">
                              Affordability Calculator
                           </li>
                        </a>
                         -->
                        <a  href="<?php echo home_url();?>/all-listings">
                           <li class="submenu-item">
                             All Listings
                           </li>
                        </a>
                       
                     </ul>
               </li>
               <!--Sell-->
               <li class="menu-item">
                     Sell
                     <ul class="submenu">
                        <a href="<?php echo home_url();?>/home-valuation">
                           <li class="submenu-item">
                              Home Valuation
                           </li>
                        </a>
                        <!--
                        <a href="<?php echo home_url();?>/home-sale-calculator">
                           <li class="submenu-item">
                              Home Sale Calculator
                           </li>
                        </a>
                        -->
                        <!--<li class="submenu-item">
                           Why List With Us
                        </li>-->
                        <a href="<?php echo home_url();?>/matterport">
                           <li class="submenu-item">
                              Matterport
                           </li>
                        </a>
                        <a href="<?php echo home_url();?>/concierge-services">
                           <li class="submenu-item">
                              Concierge Service
                           </li>
                        </a>
                        
                     </ul>
               </li>
               <!--Communities-->
               <li class="menu-item">
                     Communities
                     <ul class="submenu">
                        <a  href="<?php echo home_url();?>/community-guide/Laguna-Niguel">
                           <li class="submenu-item">
                           Laguna Niguel</li>
                        </a>
                        <a href="<?php echo home_url();?>/community-guide/Dana-Point">
                           <li class="submenu-item">
                                 Dana Point
                           </li>
                        </a>
                        <a href="<?php echo home_url();?>/community-guide/Laguna-Beach">
                           <li class="submenu-item">
                                 Laguna Beach
                           </li>
                        </a>
                        <a href="<?php echo home_url();?>/community-guide/San-Juan-Capistrano">
                           <li class="submenu-item">
                                 San Juan Capistrano
                           </li>
                        </a>
                        <a href="<?php echo home_url();?>/community-guide/San-Clemente">
                           <li class="submenu-item">
                                 San Clemente
                           </li>
                        </a>
                        <a href="<?php echo home_url();?>/community-guide/Ladera-Ranch">
                           <li class="submenu-item">
                                 Ladera Ranch
                           </li>
                        </a>
                        <a href="<?php echo home_url();?>/community-guide/Aliso-Viejo">
                           <li class="submenu-item">
                                 Aliso Viejo
                           </li>
                        </a>
                        <a href="<?php echo home_url();?>/community-guide/newport-beach">
                           <li class="submenu-item">
                                 Newport Beach
                           </li>
                        </a>
                        <a href="<?php echo home_url();?>/community-guide/">
                           <li class="submenu-item">
                                 More Communities
                           </li>
                        </a>
                     </ul>
               </li>
               <!--Discover OC-->
               <li class="menu-item">
                     Discover OC
                     <ul class="submenu">
                        <a href="<?php echo home_url();?>/community-guide/">
                           <li class="submenu-item">
                              Community Guide
                           </li>
                        </a>
                        <a href="<?php echo home_url();?>/community-events/">
                           <li class="submenu-item">
                              OC Event
                           </li>
                        </a>
                     </ul>
               </li>
               <!--About Us-->
               <li class="menu-item">
                     About Us
                     <ul class="submenu">
                        <a href="<?php echo home_url();?>/contact-us/">
                           <li class="submenu-item">
                              Contact Us
                           </li>
                        </a>
                        <!--<a href="<?php echo home_url();?>/testimonials/">
                            <li class="submenu-item">
                               Testimonials
                            </li>
                        </a>-->
                        <a href="<?php echo home_url();?>/meet-our-team/">
                            <li class="submenu-item">
                               Meet our Team
                            </li>
                        </a>
                        <a href="<?php echo home_url();?>/join-our-team/">
                           <li class="submenu-item">
                              Join Us
                           </li>
                        </a>
                        <a href="<?php echo home_url();?>/blog/">
                        <li class="submenu-item">
                           Blog
                        </li>
                        </a>
                     </ul>
               </li>
               <a href="tel:+1 (949) 248-8401">
                  <li class="menu-item" style="font-weight: bolder;">
                        <img class="phone-icon" src="<?php echo ImagesPath?>/Phone 50x50.png" alt="Phone"><a class="white" href="tel:+19492488401">Call Now</a>
                        
                  </li>
               </a>
               
            </ul>
            <button class="McButton" id="McButton"  aria-label="hambuerguer menu">
               <b id="McBar1"></b>
               <b id="McBar2"></b>
               <b id="McBar3"></b>
   </button>
         </div>
         
         
      </header>
     