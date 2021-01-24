<?php /* Template Name: Header */ ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One|Roboto&display=swap" rel="stylesheet">
    <title>Sabendo Mais</title>
    <?php wp_head(); ?>
</head>

<section class="header">

    <div class="headerContent">
        <a href="https://institutosabendomais.org">
            <?php $image_header = get_field('image_header'); ?>
            <?php if ($image_header) { ?>
                <img src="<?php echo $image_header['url']; ?>" alt="<?php echo $image_header['alt']; ?>" />
            <?php } ?>
        </a>

        <div class="linksHeader">

            <a href="https://institutosabendomais.org" class="linkHeader"><?php the_field('link_header_1'); ?></a>

            <a href="https://institutosabendomais.org/atuacao" class="linkHeader"><?php the_field('link_header_2'); ?></a>

            <a href="https://institutosabendomais.org/doar" class="buttonHeader"><?php the_field('button_header'); ?></a>

        </div>

    </div>

</section>

<body>