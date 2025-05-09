<?php
/*Template name: McGuireTeam Agent Form - Noor Altoma


@package McGuireTeam
@subpackage McGuireTeam
@since 1.0
*/ 

?>
<?php get_header(); ?>
    <main class="content">
          <section class="agForm">
            <article class="p2Columns">
                <div class="agImgForm">
                    <img src="https://mcguireteam.com/wp-content/uploads/2025/01/Noor-Altoma-Cover-Form.webp" alt="Noor Altoma" srcset="Agent's Form" width>
                </div>
            </article>
            <article class="p2Columns text_fixer">
              <h2>Meet Noor</h2>
              <p>Hi, I’m Noor Altoma! I have a Master’s in Counseling and a Bachelor’s in Sociology. I’ve lived in Orange County most of my life and feel lucky to serve as a REALTOR in beautiful Laguna Niguel. As a first-generation college graduate with a background in Education, I’ve found my passion in helping people build generational wealth through real estate. I love using my experience to make the home buying and selling process clear and stress-free. I can’t wait to meet you and your family!
              </p>
              <div class="agFormCont">
                <?php
                echo do_shortcode('[forminator_form id="1364"]');
                ?>
              </div>
            </article>
          </section>
        </main>


<?php get_footer(); ?>