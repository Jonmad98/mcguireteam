<?php /*
@package packageName
@subpackage packageName
@since 1.0
*/

?>
<?php get_header();?>
    <section class="homePagHero">
         <div class="hero">
           <section class="bannerContent">
             <h1 class="bannerHeader">McGuire Team</h1>
             <p> As a luxury real estate agency our mission is to guide our clients with integrity and personalized service, making every step of their journey seamless and successful. We commit to constant learning to lead the industry, aiming to be a lifelong, trusted resource for every client.</p>
             <div class="bannerBtn">

             </div>
           </section>
         </div>
     </section>

     <!--Buttons-->
     <section class="bannerBtnHP flex">
      <a href="https://home.mcguireteam.com/" class="button1">
         <button><h2>FIND MY DREAM HOME</h2><p>Let us help you!</p></button>
      </a>
      <a href="<?php echo home_url();?>/home-sale-calculator" class="button2">
         <button><h2>WHAT’S MY HOME WORTH?</h2><p>Your home's true market value!</p></button>
      </a>
      <a href="<?php echo home_url();?>/contact-us/" class="button1">
         <button><h2>HELP ME RELOCATE</h2><p>We’ll help you get settled in</p></button>
      </a>
     </section>
        
        <!--Feature Listings-->
     <section class="content flexCenter overflowHidden">
      <h2 >All Listings</h2>
      <div class="arrowController">
          <svg xmlns="http://www.w3.org/2000/svg"  id="leftArrow" class="arrow left" fill="var(--colorGold)" viewBox="0 0 320 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256 246.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z"/></svg>
          <svg  id="rightArrow" class="arrow right"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"/></svg>
      </div>
      <div class="carouselCont" id='carouselCont'>
      <div class="YLOPO_resultsWidget" data-search='{"minPrice":1000000,"limit":12,"locations":[{"city":"Laguna Niguel","state":"CA"}]}'></div>
      </div>
     </section>
    <script src="<?php echo themepath?>/js/cardSlider.js"></script>
     <!--Photo Gallery-->
      <section class="content">
         <h2 class="textcenter">Our Community</h2>
         <div class="communitiesGalleryHP">
            <div class="communitiesSubGalHP">
               <div class="communitiescardContHP">
                  <div class="communitiescardSubContHP flex">
                     <a class="communitiescard1" href="<?php echo home_url();?>/community-guide/Laguna-Niguel">
                        <figure>
                           <img src="<?php echo ImagesPath?>/webpg/Home_Page/Communities/Laguna Niguel.webp
                           " alt="Laguna Niguel">
                           
                        </figure>
                        <div class="overlayHP"><figcaption ><p class="communityNameHP">Laguna Niguel</p> </figcaption></div>
                     </a>
                  </div>
              </div>
              

            </div>
            <div class="communitiesSubGalHP">
              <div class="communitiescardContHP">
               <div class='flex'>
                  <a class="communitiescard2" href="<?php echo home_url();?>/community-guide/Dana-Point">
                      <figure>
                          <img src="<?php echo ImagesPath?>/webpg/Home_Page/Communities/Dana Point.webp" alt="Dana_Point">
                          
                      </figure>
                      <div class="overlayHP"><figcaption ><p class="communityNameHP">Dana Point</p> </figcaption></div>
                  </a>
              </div>
              <div class='flex'>
                  <a class="communitiescard3" href="<?php echo home_url();?>/community-guide/Aliso-Viejo">
                      <figure>
                          <img src="<?php echo ImagesPath?>/webpg/Home_Page/Communities/Aliso Viejo.webp" alt="Aliso_Viejo">
                          
                      </figure>
                      <div class="overlayHP"><figcaption ><p class="communityNameHP">Aliso Viejo</p> </figcaption></div>
                  </a>
              </div>
              </div>
              
            </div>
            <div class="communitiesSubGalHP">
               <div class="communitiescardContHP">
                  <div class='flex'>
                     <a class="communitiescard3" href="<?php echo home_url();?>/community-guide/Ladera-Ranch">
                        <figure>
                           <img src="<?php echo ImagesPath?>/webpg/Home_Page/Communities/Ladera Ranch.webp" alt="Ladera_Ranch">
                           
                        </figure>
                        <div class="overlayHP"><figcaption ><p class="communityNameHP">Ladera Ranch</p> </figcaption></div>
                     </a>
                  </div>
                  <div class='flex'>
                        <a class="communitiescard2" href="<?php echo home_url();?>/community-guide/Irvine">
                           <figure>
                              <img src="<?php echo ImagesPath?>/webpg/Home_Page/Communities/Irvine.webp" alt="Laguna_Beach">
                              
                           </figure>
                           <div class="overlayHP"><figcaption ><p class="communityNameHP">Irvine</p> </figcaption></div>
                        </a>
                  </div>
              </div>        
            </div>
            <div class="communitiesSubGalHP">

              <div class="communitiescardContHP">
                  <div class='flex'>
                     <a class="communitiescard2" href="<?php echo home_url();?>/community-guide/Laguna-Beach">
                        <figure>
                           <img src="<?php echo ImagesPath?>/webpg/Home_Page/Communities/Laguna Beach.webp" alt="Laguna_Beach">
                        </figure>
                        <div class="overlayHP"><figcaption ><p class="communityNameHP">Laguna Beach</p> </figcaption></div>
                     </a>
                  </div>
                  <div class='flex'>
                        <a class="communitiescard3" href="<?php echo home_url();?>/community-guide/San-Clemente">
                           <figure>
                              <img src="<?php echo ImagesPath?>/webpg/Home_Page/Communities/San Clemente.webp" alt="San_Juan_Capistrano">
                              
                           </figure>
                           <div class="overlayHP"><figcaption ><p class="communityNameHP">San Clemente</p> </figcaption></div>
                        </a>
                  </div>
              </div>
              
            </div>
            <div class="communitiesSubGalHP">
               <div class="communitiescardContHP">
                  <div class="communitiescardSubContHP flex">
                     <a class="communitiescard1" href="<?php echo home_url();?>/community-guide">
                        <figure>
                           <img src="<?php echo ImagesPath?>/webpg/Home_Page/Communities/More Communities.webp" alt="Laguna_Beach">
                           
                        </figure>
                        <div class="overlayHP"><figcaption ><p class="communityNameHP">Surrounding Areas</p> </figcaption></div>
                     </a>
                  </div>
              </div>

            </div>
         </div>
      </section>   

      <!--Lori Section-->
      <section class="content content">
         <div class="homeLoriSection flex">
            <div class="loriImg flex">
                  <img src="https://images.squarespace-cdn.com/content/v1/611ecc969ca597196f41bf33/38b4087c-1b94-4be1-b262-25ad55285228/Lori+PNG.png?format=500w">
            </div>
            <div class="loriTextIntro flex">
                  <h2>Meet Lori McGuire</h2>
                  <p>With over 35 years in real estate, Lori is a trailblazer renowned for leading the highly successful McGuire Team within RE/MAX. Her expertise spans luxury homes, corporate speaking, and a commitment to personalized service, boasting over $1.75 billion in sales and prestigious awards. Beyond her professional success, Lori's philanthropic endeavors, including work with the Children’s Miracle Network and disaster relief efforts, showcase her compassion. 
                  <br>
                  <br>
                  Lori's unwavering dedication to excellence and making dreams a reality for her clients defines her impactful legacy.</p>
                  <p class="LoriSection_Text_DRE">CA DRE# 00959318</p>
                  <div class="LoriBtnApptCont">
                     <a class="LoriBtnAppt" href="<?php echo home_url();?>/meet-our-team/lori-mcguire/">Book an Appointment</a>
                  </div>
                  
            </div>
         </div>
      </section>
      
      

      <!--Testimonials-->
      <section class='content textcenter'>      
         <h2>DON'T JUST TAKE OUR WORD FOR IT,<br>SEE WHAT OUR CUSTOMERS HAVE TO SAY</h2>
         <?php echo do_shortcode("[trustindex no-registration=google]"); ?>
      </section>

      <!--Team Members-->
      <!--Meet our Team-->
       <section class="containerCUF MOT_HP">
                <h2 class='textcenter'>
                    Meet the Team
                </h2>
                <div class="formCUF">
                    <?php echo do_shortcode('[metaslider id="538"]'); ?>
                </div>

        </section>
      
      
       <!--CUF-->
        <section class="containerCUF flexGap">
            <article class="columnCuf2">
                <h2>
                    Let's talk
                </h2>
                <div class="formCUF">
                    <?php echo do_shortcode('[forminator_form id="222"]'); ?>
                </div>
            </article>
            <article class="columnCuf1 homePageCUFImg">
                <div></div>
            </article>
        </section>

<?php get_footer();?>