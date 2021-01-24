<?php /* Template Name: Atuacao */ ?>
<?php get_header(); ?>
<iframe class="atuacaoVideo" src="https://www.youtube.com/embed/<?php the_field('youtube_video'); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<div id="content" role="main">

    <section class="initialYearsSection">
        <img class="bottomRight" src="https://institutosabendomais.org/wp-content/uploads/2020/07/Group-4.svg" alt="" />
        <img class="topRight" src="https://institutosabendomais.org/wp-content/uploads/2020/07/Mais-bolinhas.svg" alt="" />
        <img class="topLeft" src="https://institutosabendomais.org/wp-content/uploads/2020/07/bolinhas-em-semicírculo.svg" alt="" />
        <h2 class="titleBlue"><?php the_field('title_initial_project'); ?></h2>
        <div class="initialYearsContent">
            <div class="littleImageInitialYears">
                <img class="topLeft" src="https://institutosabendomais.org/wp-content/uploads/2020/07/Group-3.svg" alt="" />
                <?php $image_initial_project = get_field('image_initial_project'); ?>
                <?php if ($image_initial_project) { ?>
                    <img src="<?php echo $image_initial_project['url']; ?>" alt="<?php echo $image_initial_project['alt']; ?>" />
                <?php } ?>
            </div>
            <p class="textSection"><?php the_field('text_initial_project'); ?></p>
        </div>
    </section>
    <?php $background_initial_project = get_field('background_initial_project'); ?>
    <?php if ($background_initial_project) { ?>
        <section class="statisticsInitialYears" style="background: linear-gradient( rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3) ), url(<?php echo $background_initial_project['url']; ?>) center">
            <div class="statisticsContent">
                <div class="cardStatistics">
                    <p class="numberTitleStatistics"><?php the_field('number_initial_project_1'); ?></p>
                    <p class="titleStatistics"><?php the_field('text_number_initial_project_1'); ?></p>
                </div>
                <div class="cardStatistics">
                    <p class="numberTitleStatistics"><?php the_field('number_initial_project_2'); ?></p>
                    <p class="titleStatistics"><?php the_field('text_number_initial_project_2'); ?></p>
                </div>
                <div class="cardStatistics">
                    <p class="numberTitleStatistics"><?php the_field('number_initial_project_3'); ?></p>
                    <p class="titleStatistics"><?php the_field('text_number_initial_project_3'); ?></p>
                </div>
                <div class="cardStatistics">
                    <p class="numberTitleStatistics"><?php the_field('number_initial_project_4'); ?></p>
                    <p class="titleStatistics"><?php the_field('text_number_initial_project_4'); ?></p>
                </div>
            </div>
        </section>
    <?php } ?>

    <section class="atenaSection">
        <h2 class="titleBlue"><?php the_field('title_atena'); ?></h2>
        <div class="atenaContent">
            <div class="littleImageAtena">
                <img class="topLeft" src="https://institutosabendomais.org//wp-content/uploads/2020/07/Group-3.svg" alt="" />
                <?php $image_atena = get_field('image_atena'); ?>
                <?php if ($image_atena) { ?>
                    <img src="<?php echo $image_atena['url']; ?>" alt="<?php echo $image_atena['alt']; ?>" />
                <?php } ?>
            </div>
            <p class="textSection"><?php the_field('text_atena'); ?></p>
        </div>
    </section>

    <section class="statisticsAtena"><?php $background_atena_1 = get_field('background_atena_1'); ?>
        <?php if ($background_atena_1) { ?>
            <div class="statisticsContentOne" style="background: linear-gradient( rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3) ), url(<?php echo $background_atena_1['url']; ?>) center">
                <p class="classAtena1"><?php the_field('class_atena_1'); ?></p>
                <div class="cardsOne">
                    <div class="cardStatistics">
                        <p class="numberTitleStatistics"><?php the_field('number_atena_1'); ?></p>
                        <p class="titleStatistics"><?php the_field('text_number_atena_1'); ?></p>
                    </div>
                    <div class="cardStatistics">
                        <p class="numberTitleStatistics"><?php the_field('number_atena_2'); ?></p>
                        <p class="titleStatistics"><?php the_field('text_number_atena_2'); ?></p>
                    </div>
                </div>
            </div>
        <?php } ?>
        <?php $background_atena_2 = get_field('background_atena_2'); ?>
        <?php if ($background_atena_2) { ?>
            <div class="statisticsContentTwo" style="background: linear-gradient( rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3) ), url(<?php echo $background_atena_2['url']; ?>) center">
                <p class="classAtena2"><?php the_field('class_atena_2'); ?></p>
                <div class="cardsTwo">
                    <div class="cardStatistics">
                        <p class="numberTitleStatistics"><?php the_field('number_atena_3'); ?></p>
                        <p class="titleStatistics"><?php the_field('text_number_atena_3'); ?></p>
                    </div>
                    <div class="cardStatistics">
                        <p class="numberTitleStatistics"><?php the_field('number_atena_4'); ?></p>
                        <p class="titleStatistics"><?php the_field('text_number_atena_4'); ?></p>
                    </div>
                </div>
            </div>
        <?php } ?>
    </section>

    <section class="arquimedesSection">
        <img class="bottomRight" src="https://institutosabendomais.org//wp-content/uploads/2020/07/meio-átomo.svg" alt="" />
        <img class="topLeft" src="https://institutosabendomais.org//wp-content/uploads/2020/07/meio-átomo-1.svg" alt="" />
        <h2 class="titleBlue"><?php the_field('title_arquimedes'); ?></h2>
        <div class="arquimedesContent">
            <div class="littleImageArquimedes">
                <img class="topLeft" src="https://institutosabendomais.org//wp-content/uploads/2020/07/Group-3.svg" alt="" />
                <?php $image_arquimedes = get_field('image_arquimedes'); ?>
                <?php if ($image_arquimedes) { ?>
                    <img src="<?php echo $image_arquimedes['url']; ?>" alt="<?php echo $image_arquimedes['alt']; ?>" />
                <?php } ?>
            </div>
            <p class="textSection"><?php the_field('text_arquimedes'); ?></p>
        </div>
    </section>
    <section class="statisticsArquimedes">
        <?php $background_arquimedes = get_field('background_arquimedes'); ?>
        <?php if ($background_arquimedes) { ?>
            <div class="leftArquimedes" style="background: linear-gradient( rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3) ), url(<?php echo $background_arquimedes['url']; ?>) center"></div>
        <?php } ?>
        <?php $background_arquimedes_right = get_field('background_arquimedes_right'); ?>
        <?php if ($background_arquimedes_right) { ?>
            <div class="rightArquimedes" style="background: linear-gradient( rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3) ), url(<?php echo $background_arquimedes_right['url']; ?>) center"></div>
        <?php } ?>
        <div class="statisticsContent">
            <div class="cardStatistics">
                <p class="numberTitleStatistics"><?php the_field('number_arquimedes_1'); ?></p>
                <p class="titleStatistics"><?php the_field('text_number_arquimedes_1'); ?></p>
            </div>
            <div class="cardStatistics">
                <p class="numberTitleStatistics"><?php the_field('number_arquimedes_2'); ?></p>
                <p class="titleStatistics"><?php the_field('text_number_arquimedes_2'); ?></p>
            </div>
            <div class="cardStatistics">
                <p class="numberTitleStatistics"><?php the_field('number_arquimedes_3'); ?></p>
                <p class="titleStatistics"><?php the_field('text_number_arquimedes_3'); ?></p>
            </div>
        </div>
    </section>

    <section class="olimpicSection">
        <img class="bottomRight" src="https://institutosabendomais.org//wp-content/uploads/2020/07/Bolinhas-2.svg" alt="" />
        <h2 class="titleBlue"><?php the_field('title_olimpic'); ?></h2>
        <div class="olimpicContent">
            <div class="littleImageOlimpic">
                <img class="topLeft" src="https://institutosabendomais.org//wp-content/uploads/2020/07/Group-3.svg" alt="" />
                <?php $image_olimpic = get_field('image_olimpic'); ?>
                <?php if ($image_olimpic) { ?>
                    <img src="<?php echo $image_olimpic['url']; ?>" alt="<?php echo $image_olimpic['alt']; ?>" />
                <?php } ?>
            </div>
            <p class="textSection"><?php the_field('text_olimpic'); ?></p>
        </div>
    </section>
    <?php $background_olimpic = get_field('background_olimpic'); ?>
    <?php if ($background_olimpic) { ?>
        <section class="statisticsOlimpic" style="background: linear-gradient( rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3) ), url(<?php echo $background_olimpic['url']; ?>) center">
            <div class="statisticsContent">
                <div class="cardStatistics">
                    <p class="numberTitleStatistics"><?php the_field('number_olimpic_1'); ?></p>
                    <p class="titleStatistics"><?php the_field('text_number_olimpic_1'); ?></p>
                </div>
                <div class="cardStatistics">
                    <p class="numberTitleStatistics"><?php the_field('number_olimpic_2'); ?></p>
                    <p class="titleStatistics"><?php the_field('text_number_olimpic_2'); ?></p>
                </div>
            </div>
        </section>
    <?php } ?>

    <section class="arquimedesSection">
        <img class="bottomRight" src="https://institutosabendomais.org//wp-content/uploads/2020/07/meio-átomo.svg" alt="" />
        <img class="topLeft" src="https://institutosabendomais.org//wp-content/uploads/2020/07/meio-átomo-1.svg" alt="" />
        <h2 class="titleBlue"><?php the_field('title_coral'); ?></h2>
        <div class="arquimedesContent">
            <div class="littleImageArquimedes">
                <img class="topLeft" src="https://institutosabendomais.org//wp-content/uploads/2020/07/Group-3.svg" alt="" />
                <?php $image_coral = get_field('image_coral'); ?>
                <?php if ($image_coral) { ?>
                    <img src="<?php echo $image_coral['url']; ?>" alt="<?php echo $image_coral['alt']; ?>" />
                <?php } ?>
            </div>
            <p class="textSection"><?php the_field('text_coral'); ?></p>
        </div>
    </section>
    <?php $background_coral = get_field('background_coral'); ?>
    <?php if ($background_coral) { ?>
        <section class="statisticsArquimedes" style="background: linear-gradient( rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3) ), url(<?php echo $background_coral['url']; ?>) center">
            <div class="statisticsContent">
                <div class="cardStatistics">
                    <p class="numberTitleStatistics"><?php the_field('number_coral_1'); ?></p>
                    <p class="titleStatistics"><?php the_field('text_number_coral_1'); ?></p>
                </div>
                <div class="cardStatistics">
                    <p class="numberTitleStatistics"><?php the_field('number_coral_2'); ?></p>
                    <p class="titleStatistics"><?php the_field('text_number_coral_2'); ?></p>
                </div>
                <div class="cardStatistics">
                    <p class="numberTitleStatistics"><?php the_field('number_coral_3'); ?></p>
                    <p class="titleStatistics"><?php the_field('text_number_coral_3'); ?></p>
                </div>
            </div>
        </section>
    <?php } ?>

    <section class="otherProjectsSection">
        <img class="middleRight" src="https://institutosabendomais.org//wp-content/uploads/2020/07/Linhas-Verticais.svg" alt="" />
        <img class="topRight" src="https://institutosabendomais.org//wp-content/uploads/2020/07/3-triangulos.svg" alt="" />
        <img class="topLeft" src="https://institutosabendomais.org//wp-content/uploads/2020/07/Bolinhas-2.svg" alt="" />
        <p class="titleBlue"><?php the_field('title_other_project'); ?></p>
        <div class="otherProjectsContent">
            <div class="cardRightOtherProjects">
                <img class="bottomLeft" src="https://institutosabendomais.org//wp-content/uploads/2020/07/Losangos-1.svg" alt="" />
                <?php $image_right_content_1 = get_field('image_right_content_1'); ?>
                <?php if ($image_right_content_1) { ?>
                    <img src="<?php echo $image_right_content_1['url']; ?>" alt="<?php echo $image_right_content_1['alt']; ?>" />
                <?php } ?>
                <div class="cardRightOtherProjectsContent">
                    <p class="titleBlue"><?php the_field('title_right_content_1'); ?></p>
                    <p class="textSection"><?php the_field('text_right_content_1'); ?></p>
                    <?php $background_right_content_1 = get_field('background_right_content_1'); ?>
                    <?php if ($background_right_content_1) { ?>
                        <div class="statisticsRightContent" style="background: linear-gradient( rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3) ), url(<?php echo $background_right_content_1['url']; ?>)">
                            <div class="cardStatistics">
                                <p class="numberTitleStatistics"><?php the_field('title_number_right_content_1'); ?></p>
                                <p class="titleStatistics"><?php the_field('text_number_right_content_1'); ?></p>
                            </div>
                            <div class="cardStatistics">
                                <p class="numberTitleStatistics"><?php the_field('title_number_right_content_2'); ?></p>
                                <p class="titleStatistics"><?php the_field('text_number_right_content_2'); ?></p>
                            </div>
                            <div class="cardStatistics">
                                <p class="numberTitleStatistics"><?php the_field('title_number_right_content_3'); ?></p>
                                <p class="titleStatistics"><?php the_field('text_number_right_content_3'); ?></p>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>

            <div class="cardLeftOtherProjects">
                <?php $image_left_content_1 = get_field('image_left_content_1'); ?>
                <?php if ($image_left_content_1) { ?>
                    <img src="<?php echo $image_left_content_1['url']; ?>" alt="<?php echo $image_left_content_1['alt']; ?>" />
                <?php } ?>
                <div class="cardLeftOtherProjectsContent">
                    <p class="titleBlue"><?php the_field('title_left_content_1'); ?></p>
                    <p class="textSection"><?php the_field('text_left_content_1'); ?></p>
                    <?php $background_left_content_1 = get_field('background_left_content_1'); ?>
                    <?php if ($background_left_content_1) { ?>
                        <div class="statisticsLeftContent" style="background: linear-gradient( rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3) ), url(<?php echo $background_left_content_1['url']; ?>)">
                            <div class="cardStatistics">
                                <p class="numberTitleStatistics"><?php the_field('title_number_left_content_1'); ?></p>
                                <p class="titleStatistics"><?php the_field('text_number_left_content_1'); ?></p>
                            </div>
                            <div class="cardStatistics">
                                <p class="numberTitleStatistics"><?php the_field('title_number_left_content_2'); ?></p>
                                <p class="titleStatistics"><?php the_field('text_number_left_content_2'); ?></p>
                            </div>
                            <div class="cardStatistics">
                                <p class="numberTitleStatistics"><?php the_field('title_number_left_content_3'); ?></p>
                                <p class="titleStatistics"><?php the_field('text_number_left_content_3'); ?></p>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>

            <div class="cardRightOtherProjects">
                <img class="bottomLeft" src="https://institutosabendomais.org//wp-content/uploads/2020/07/Losangos-1.svg" alt="" />
                <?php $image_right_content_2 = get_field('image_right_content_2'); ?>
                <?php if ($image_right_content_2) { ?>
                    <img src="<?php echo $image_right_content_2['url']; ?>" alt="<?php echo $image_right_content_2['alt']; ?>" />
                <?php } ?>
                <div class="cardRightOtherProjectsContent">
                    <p class="titleBlue"><?php the_field('title_right_content_2'); ?></p>
                    <p class="textSection"><?php the_field('text_right_content_2'); ?></p>
                    <?php $background_right_content_2 = get_field('background_right_content_2'); ?>
                    <?php if ($background_right_content_2) { ?>
                        <div class="statisticsRightContent" style="background: linear-gradient( rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3) ), url(<?php echo $background_right_content_2['url']; ?>)">
                            <div class="cardStatistics">
                                <p class="numberTitleStatistics"><?php the_field('title_number_right_content_4'); ?></p>
                                <p class="titleStatistics"><?php the_field('text_number_right_content_4'); ?></p>
                            </div>
                            <div class="cardStatistics">
                                <p class="numberTitleStatistics"><?php the_field('title_number_right_content_5'); ?></p>
                                <p class="titleStatistics"><?php the_field('text_number_right_content_5'); ?></p>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>

            <div class="cardLeftOtherProjects">
                <?php $image_left_content_2 = get_field('image_left_content_2'); ?>
                <?php if ($image_left_content_2) { ?>
                    <img src="<?php echo $image_left_content_2['url']; ?>" alt="<?php echo $image_left_content_2['alt']; ?>" />
                <?php } ?>
                <div class="cardLeftOtherProjectsContent">
                    <p class="titleBlue"><?php the_field('title_left_content_2'); ?></p>
                    <p class="textSection"><?php the_field('text_left_content_2'); ?></p>
                    <?php $background_left_content_2 = get_field('background_left_content_2'); ?>
                    <?php if ($background_left_content_2) { ?>
                        <div class="statisticsLeftContent" style="background: linear-gradient( rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3) ), url(<?php echo $background_left_content_2['url']; ?>)">
                            <div class="cardStatistics">
                                <p class="numberTitleStatistics"><?php the_field('title_number_left_content_4'); ?></p>
                                <p class="titleStatistics"><?php the_field('text_number_left_content_4'); ?></p>
                            </div>
                            <div class="cardStatistics">
                                <p class="numberTitleStatistics"><?php the_field('title_number_left_content_5'); ?></p>
                                <p class="titleStatistics"><?php the_field('text_number_left_content_5'); ?></p>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>

            <div class="cardRightOtherProjects">
                <img class="bottomLeft" src="https://institutosabendomais.org//wp-content/uploads/2020/07/Losangos-1.svg" alt="" />
                <?php $image_right_content_last = get_field('image_right_content_last'); ?>
                <?php if ($image_right_content_last) { ?>
                    <img src="<?php echo $image_right_content_last['url']; ?>" alt="<?php echo $image_right_content_last['alt']; ?>" />
                <?php } ?>
                <div class="cardRightOtherProjectsContent">
                    <p class="titleBlue"><?php the_field('title_right_content_last'); ?></p>
                    <p class="textSection"><?php the_field('text_right_content_last'); ?></p>
                    <?php $background_right_content_last = get_field('background_right_content_last'); ?>
                    <?php if ($background_right_content_last) { ?>
                        <div class="statisticsRightContent" style="background: linear-gradient( rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3) ), url(<?php echo $background_right_content_last['url']; ?>)">
                            <div class="cardStatistics">
                                <p class="numberTitleStatistics"><?php the_field('title_number_right_content_last_1'); ?></p>
                                <p class="titleStatistics"><?php the_field('title_number_right_content_last_1'); ?></p>
                            </div>
                            <div class="cardStatistics">
                                <p class="numberTitleStatistics"><?php the_field('title_number_right_content_last_2'); ?></p>
                                <p class="titleStatistics"><?php the_field('title_number_right_content_last_2'); ?></p>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>

    <section class="transparencySection">
        <div class="container">
            <h2 class="titleBlue">Transparência</h2>
            <div class="cardsContainer">
                <div class="card">
                    <h3 class="titleCard">Relatório de atividades</h3>
                    <button class="selectButton" onclick="dropdown(1)">▼ DOWNLOAD</button>
                    <ul class="selectPdf" id="selectPdf1">
                        <?php $args = array(
                            'posts_per_page' => 5,
                            'offset' => 0,
                            'category' => '',
                            'category_name' => 'relatorio',
                            'orderby' => 'date',
                            'order' => 'DESC',
                            'include' => '', 'exclude' => '',
                            'meta_key' => '',
                            'meta_value' => '',
                            'post_type' => 'post', 'post_mime_type' => '',
                            'post_parent' => '',
                            'author' => '',
                            'post_status' => 'publish',
                            'suppress_filters' => true
                        );

                        $myposts = get_posts($args);

                        foreach ($myposts as $post) : setup_postdata($post); ?>
                            <?php $blocks = parse_blocks(get_the_content()); ?>
                            <li>
                                <?php foreach ($blocks as $block) {
                                    if ($block['blockName']) {
                                        echo do_shortcode($block['innerHTML']);
                                        break;
                                    }
                                } ?>
                            </li>
                        <?php
                        endforeach;
                        wp_reset_postdata();
                        ?>
                    </ul>
                </div>
                <div class="card">
                    <h3 class="titleCard">Demonstrações financeiras</h3>
                    <button class="selectButton" onclick="dropdown(2)">▼ DOWNLOAD</button>
                    <ul class="selectPdf" id="selectPdf2">
                        <?php $args = array(
                            'posts_per_page' => 5,
                            'offset' => 0,
                            'category' => '',
                            'category_name' => 'demonstracao',
                            'orderby' => 'date',
                            'order' => 'DESC',
                            'include' => '', 'exclude' => '',
                            'meta_key' => '',
                            'meta_value' => '',
                            'post_type' => 'post', 'post_mime_type' => '',
                            'post_parent' => '',
                            'author' => '',
                            'post_status' => 'publish',
                            'suppress_filters' => true
                        );

                        $myposts = get_posts($args);

                        foreach ($myposts as $post) : setup_postdata($post); ?>
                            <?php $blocks = parse_blocks(get_the_content()); ?>
                            <li>
                                <?php foreach ($blocks as $block) {
                                    if ($block['blockName']) {
                                        echo do_shortcode($block['innerHTML']);
                                        break;
                                    }
                                } ?>
                            </li>
                        <?php
                        endforeach;
                        wp_reset_postdata();
                        ?>
                    </ul>
                </div>
                <div class="card">
                    <h3 class="titleCard">Estatuto</h3>
                    <button class="selectButton" onclick="dropdown(3)">▼ DOWNLOAD</button>
                    <ul class="selectPdf" id="selectPdf3">
                        <?php $args = array(
                            'posts_per_page' => 5,
                            'offset' => 0,
                            'category' => '',
                            'category_name' => 'estatuto',
                            'orderby' => 'date',
                            'order' => 'DESC',
                            'include' => '', 'exclude' => '',
                            'meta_key' => '',
                            'meta_value' => '',
                            'post_type' => 'post', 'post_mime_type' => '',
                            'post_parent' => '',
                            'author' => '',
                            'post_status' => 'publish',
                            'suppress_filters' => true
                        );

                        $myposts = get_posts($args);

                        foreach ($myposts as $post) : setup_postdata($post); ?>
                            <?php $blocks = parse_blocks(get_the_content()); ?>
                            <li>
                                <?php foreach ($blocks as $block) {
                                    if ($block['blockName']) {
                                        echo do_shortcode($block['innerHTML']);
                                        break;
                                    }
                                } ?>
                            </li>
                        <?php
                        endforeach;
                        wp_reset_postdata();
                        ?>
                    </ul>
                </div>
            </div>
        </div>
        <script>
            function dropdown(num) {
                if (num == 1) {
                    var selectpdf = document.getElementById("selectPdf1");
                    selectpdf.classList.toggle("visible")
                } else if (num == 2) {
                    var selectpdf = document.getElementById("selectPdf2");
                    selectpdf.classList.toggle("visible")
                } else {
                    var selectpdf = document.getElementById("selectPdf3");
                    selectpdf.classList.toggle("visible")
                }
            }
        </script>
    </section>

</div>

<?php get_footer(); ?>