<?php /* Template Name: Footer */ ?>
<section class="footer">

    <div class="footerContent">

        <img class="topLeft" src="https://institutosabendomais.org/wp-content/uploads/2020/07/Losangos.svg" alt="" />
        <img class="middleLeft" src="https://institutosabendomais.org/wp-content/uploads/2020/07/Bolinhas.svg" alt="" />
        <img class="middleRight" src="https://institutosabendomais.org/wp-content/uploads/2020/07/Bolinhas-1.svg" alt="" />

        <div class="footerContact">

            <iframe class="map" src="<?php the_field('google_map'); ?>" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

            <div class="contactTexts">

                <h3 class="contactText"><?php the_field('adress_footer'); ?></h3>
                <h3 class="contactText"><?php the_field('adress_footer_2'); ?></h3>
                <h3 class="contactText"><?php the_field('phone_footer'); ?></h3>
                <h3 class="contactText"><?php the_field('email_footer'); ?></h3>
                <div>
                    <a href="<?php the_field('link_social_1'); ?>">
                        <?php $img_social_1 = get_field('img_social_1'); ?>
                        <?php if ($img_social_1) { ?>
                            <img src="<?php echo $img_social_1['url']; ?>" alt="<?php echo $img_social_1['alt']; ?>" />
                        <?php } ?>
                    </a>
                    <a href="<?php the_field('link_social_2'); ?>">
                        <?php $img_social_2 = get_field('img_social_2'); ?>
                        <?php if ($img_social_2) { ?>
                            <img src="<?php echo $img_social_2['url']; ?>" alt="<?php echo $img_social_2['alt']; ?>" />
                        <?php } ?>
                    </a>
                    <a href="<?php the_field('link_social_3'); ?>">
                        <?php $img_social_3 = get_field('img_social_3'); ?>
                        <?php if ($img_social_3) { ?>
                            <img src="<?php echo $img_social_3['url']; ?>" alt="<?php echo $img_social_3['alt']; ?>" />
                        <?php } ?>
                    </a>
                </div>

            </div>

        </div>

        <div class="develop">
            <a href="https://injunior.com.br/"><img src="https://institutosabendomais.org/wp-content/uploads/2020/07/image.svg" alt="" class="wp-image-33" /></a>
        </div>

    </div>

    <div class="blueFooter">

        <h4 class="copyright">Copyrights</h4>

    </div>

</section>

<?php wp_footer(); ?>
</body>

</html>