<?php /* Template Name: Doar */ ?>
<?php get_header(); ?>

<div id="content" role="main">
    <section class="donationSection">
        <img class="topLeft" src="https://institutosabendomais.org//wp-content/uploads/2020/07/bolinhas-em-semicírculo.svg" alt="" />
        <img class="bottomRight" src="https://institutosabendomais.org//wp-content/uploads/2020/07/meio-átomo.svg" alt="" />
        <div class="container">
            <div class="donationContent left">
                <h2 class="titleBlue"><?php the_field('title_doar'); ?></h2>
                <p class="textSection"><?php the_field('text_doar_1'); ?></p>
                <div class="rect">
                    <img class="topRight" src="https://institutosabendomais.org//wp-content/uploads/2020/07/Group-10.svg" alt="" />
                    <p class="textSection"><?php the_field('text_bank'); ?></p>
                    <p class="textSection"><?php the_field('text_agency'); ?></p>
                    <p class="textSection"><?php the_field('text_account'); ?></p>
                    <p class="textSection"><?php the_field('text_razao_social'); ?></p>
                    <p class="textSection"><?php the_field('text_cpf_cnpj'); ?></p>
                </div>
            </div>
            <div class="donationContent right">
                <div class="rect">
                    <img class="bottomLeft" src="https://institutosabendomais.org//wp-content/uploads/2020/07/Losangos.svg" alt="" />
                    <p class="textSection"><?php the_field('text_doar_2'); ?></p>
                </div>
                <?php $image_doar = get_field('image_doar'); ?>
                <?php if ($image_doar) { ?>
                    <img src="<?php echo $image_doar['url']; ?>" alt="<?php echo $image_doar['alt']; ?>" />
                <?php } ?>
            </div>
        </div>
        <p class="textSection paypal"><?php the_field('text_doar_3'); ?></p>
        <div class="rectUnfillled">
            <img class="middle" src="https://institutosabendomais.org//wp-content/uploads/2020/07/Mais-bolinhas-1.svg" alt="" />
            <p class="subtitleBlue">Doação Mensal:</p>
            <form class="formDonation" action="https://www.paypal.com/donate" method="post" target="_top">
                <input type="hidden" name="hosted_button_id" value="9GRMJKCHJA2W6" />
                <input type="image" src="https://institutosabendomais.org/wp-content/uploads/2020/10/btn_20.png" border="0" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Donate with PayPal button" />
                <img alt="." border="0" src="https://www.paypal.com/pt_BR/i/scr/pixel.gif" width="1" height="1" />
            </form>
            <form class="formDonation" action="https://www.paypal.com/donate" method="post" target="_top">
                <input type="hidden" name="hosted_button_id" value="BW3PY5JY75T2U" />
                <input type="image" src="https://institutosabendomais.org/wp-content/uploads/2020/10/btn_50.png" border="0" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Donate with PayPal button" />
                <img alt="" border="0" src="https://www.paypal.com/pt_BR/i/scr/pixel.gif" width="1" height="1" />
            </form>
            <form class="formDonation" action="https://www.paypal.com/donate" method="post" target="_top">
                <input type="hidden" name="hosted_button_id" value="J9TTVTKYNT8CN" />
                <input type="image" src="https://institutosabendomais.org/wp-content/uploads/2020/10/btn_outro-mensal.png" border="0" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Donate with PayPal button" />
                <img alt="" border="0" src="https://www.paypal.com/pt_BR/i/scr/pixel.gif" width="1" height="1" />
            </form>
            <p class="subtitleBlue">Doação Única:</p>
            <form class="formDonation" action="https://www.paypal.com/donate" method="post" target="_top">
                <input type="hidden" name="hosted_button_id" value="C2TBWVZWXKQSW" />
                <input type="image" src="https://institutosabendomais.org/wp-content/uploads/2020/10/btn_100.png" border="0" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Donate with PayPal button" />
                <img alt="" border="0" src="https://www.paypal.com/pt_BR/i/scr/pixel.gif" width="1" height="1" />
            </form>
            <form class="formDonation" action="https://www.paypal.com/donate" method="post" target="_top">
                <input type="hidden" name="hosted_button_id" value="3A2C8SYC78CFJ" />
                <input type="image" src="https://institutosabendomais.org/wp-content/uploads/2020/10/btn_200.png" border="0" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Donate with PayPal button" />
                <img alt="" border="0" src="https://www.paypal.com/pt_BR/i/scr/pixel.gif" width="1" height="1" />
            </form>
            <form class="formDonation" action="https://www.paypal.com/donate" method="post" target="_top">
                <input type="hidden" name="hosted_button_id" value="4Q3PBVL832K7W" />
                <input type="image" src="https://institutosabendomais.org/wp-content/uploads/2020/10/Frame-10.png" border="0" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Donate with PayPal button" />
                <img alt="" border="0" src="https://www.paypal.com/pt_BR/i/scr/pixel.gif" width="1" height="1" />
            </form>
        </div>
    </section>

</div>

<?php get_footer(); ?>