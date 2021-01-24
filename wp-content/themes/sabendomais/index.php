<?php /* Template Name: Home */ ?>
<?php get_header(); ?>

<div id="content" role="main">

	<section class="slideSection">

		<!---<img class="slideDiamonds" src="/img/Losangos.svg"/>--->

		<div class="slideHome">
			<?php $slide_1 = get_field('slide_1'); ?>
			<?php if ($slide_1) { ?>
				<img src="<?php echo $slide_1['url']; ?>" />
			<?php } ?>
			<div class="divTitles">
				<h2 class="TitleSlider"><?php the_field('title_slide_1'); ?></h>
					<h3 class="SubTitleSlider"><?php the_field('sub_title_1'); ?></h3>
			</div>
		</div>

		<div class="slideHome">
			<?php $slide_2 = get_field('slide_2'); ?>
			<?php if ($slide_2) { ?>
				<img src="<?php echo $slide_2['url']; ?>" />
			<?php } ?>
			<div class="divTitles">
				<h2 class="TitleSlider"><?php the_field('title_slide_2'); ?></h>
					<h3 class="SubTitleSlider"><?php the_field('sub_title_2'); ?></h3>
			</div>
		</div>

		<div class="slideHome">
			<?php $slide_3 = get_field('slide_3'); ?>
			<?php if ($slide_3) { ?>
				<img src="<?php echo $slide_3['url']; ?>" />
			<?php } ?>
			<div class="divTitles">
				<h2 class="TitleSlider"><?php the_field('title_slide_3'); ?></h>
					<h3 class="SubTitleSlider"><?php the_field('sub_title_3'); ?></h3>
			</div>
		</div>

		<div class="slideHome">
			<?php $slide_4 = get_field('slide_4'); ?>
			<?php if ($slide_4) { ?>
				<img src="<?php echo $slide_4['url']; ?>" />
			<?php } ?>
			<div class="divTitles">
				<h2 class="TitleSlider"><?php the_field('title_slide_4'); ?></h>
					<h3 class="SubTitleSlider"><?php the_field('sub_title_4'); ?></h3>
			</div>
		</div>

		<div class="slideHome">
			<?php $slide_5 = get_field('slide_5'); ?>
			<?php if ($slide_5) { ?>
				<img src="<?php echo $slide_5['url']; ?>" />
			<?php } ?>
			<div class="divTitles">
				<h2 class="TitleSlider"><?php the_field('title_slide_5'); ?></h>
					<h3 class="SubTitleSlider"><?php the_field('sub_title_5'); ?></h3>
			</div>
		</div>

		<div class="slideHome">
			<?php $slide_6 = get_field('slide_6'); ?>
			<?php if ($slide_6) { ?>
				<img src="<?php echo $slide_6['url']; ?>" />
			<?php } ?>
			<div class="divTitles">
				<h2 class="TitleSlider"><?php the_field('title_slide_6'); ?></h>
					<h3 class="SubTitleSlider"><?php the_field('sub_title_6'); ?></h3>
			</div>
		</div>

		<a href="#youtube" style="height:550px;display: flex;align-items: center;justify-content: center; margin: 0;">
			<div class="slideHome">
				<?php $slide_7 = get_field('slide_7'); ?>
				<?php if ($slide_7) { ?>
					<img src="<?php echo $slide_7['url']; ?>" />
				<?php } ?>
				<div class="divTitles">
					<h2 class="TitleSlider"><?php the_field('title_slide_7'); ?></h>
						<h3 class="SubTitleSlider"><?php the_field('sub_title_7'); ?></h3>
				</div>
			</div>
		</a>
	</section>

	<section class="secondSection">

		<section class="missionSection">
			<div>
				<h2 class="titleBlue"><?php the_field('title_mission'); ?></h2>
				<p class="textSection"><?php add_filter('my_custom_filter', 'wpautop');
										echo apply_filters('my_custom_filter', the_field('text_mission')); ?></p>
			</div>
			<iframe id="youtube" src="https://www.youtube.com/embed/<?php the_field('youtube'); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			<div>
				<h2 class="titleBlue"><?php the_field('title_vision'); ?></h2>
				<p class="textSection"><?php the_field('text_vision'); ?></p>
			</div>

		</section>

		<section class="valueSection">

			<h2 class="titleBlue"><?php the_field('title_value'); ?></h2>

			<div class="cardValue">
				<?php $image_value_1 = get_field('image_value_1'); ?>
				<?php if ($image_value_1) { ?>
					<img src="<?php echo $image_value_1['url']; ?>" />
				<?php } ?>
				<h3 class="textValue"><?php the_field('text_value_1'); ?></h3>
			</div>

			<div class="cardValue">
				<?php $image_value_2 = get_field('image_value_2'); ?>
				<?php if ($image_value_2) { ?>
					<img src="<?php echo $image_value_2['url']; ?>" />
				<?php } ?>
				<h3 class="textValue"><?php the_field('text_value_2'); ?></h3>
			</div>

			<div class="cardValue">
				<?php $image_value_3 = get_field('image_value_3'); ?>
				<?php if ($image_value_3) { ?>
					<img src="<?php echo $image_value_3['url']; ?>" />
				<?php } ?>
				<h3 class="textValue"><?php the_field('text_value_3'); ?></h3>
			</div>

			<div class="cardValue">
				<?php $image_value_4 = get_field('image_value_4'); ?>
				<?php if ($image_value_4) { ?>
					<img src="<?php echo $image_value_4['url']; ?>" />
				<?php } ?>
				<h3 class="textValue"><?php the_field('text_value_4'); ?></h3>
			</div>

		</section>

	</section>

	<section class="instituteSection">

		<div class="bigImageInstitute">
			<?php $image_institute_1 = get_field('image_institute_1'); ?>
			<?php if ($image_institute_1) { ?>
				<img class="imgInstitute" src="<?php echo $image_institute_1['url']; ?>" />
			<?php } ?>

			<img class="topPolygon" src="https://institutosabendomais.org//wp-content/uploads/2020/07/Polygon-6.svg" alt="" />
			<img class="bottomPolygon" src="https://institutosabendomais.org//wp-content/uploads/2020/07/Camada-1.svg" alt="" />

		</div>
		<div class="contentInstitute">
			<h2 class="titleBlue"><?php the_field('title_institute'); ?></h2>
			<p class="textSection"><?php the_field('text_institute'); ?></p>
			<div class="littleImagesInstitute">
				<?php $image_institute_2 = get_field('image_institute_2'); ?>
				<?php if ($image_institute_2) { ?>
					<img src="<?php echo $image_institute_2['url']; ?>" />
				<?php } ?>
				<?php $image_institute_3 = get_field('image_institute_3'); ?>
				<?php if ($image_institute_3) { ?>
					<img src="<?php echo $image_institute_3['url']; ?>" />
				<?php } ?>
			</div>
		</div>

	</section>

	<section class="teamSection">

		<div class="teamContent">
			<h2 class="titleBlue"><?php the_field('title_team'); ?></h2>
			<p class="textSection"><?php the_field('text_team'); ?></p>
		</div>
		<div class="teamImg">
			<?php $image_team = get_field('image_team'); ?>
			<?php if ($image_team) { ?>
				<img src="<?php echo $image_team['url']; ?>" />
			<?php } ?>

			<img class="topPolygon" src="https://institutosabendomais.org//wp-content/uploads/2020/07/Polygon-3.svg" alt="" />
			<img class="bottomPolygon" src="https://institutosabendomais.org//wp-content/uploads/2020/07/Group-10.svg" alt="" />
		</div>
	</section>

	<section class="teacherSection">
		<div class="sliderScrollerInner" id="wrapper">
			<?php $args = array(
				'offset' => 0,
				'category' => '',
				'category_name' => 'professor',
				'orderby' => 'date',
				'order' => 'DESC',
				'include' => '', 'exclude' => '',
				'meta_key' => '',
				'meta_value' => '',
				'post_type' => 'post', 'post_mime_type' => '',
				'post_parent' => '',
				'posts_per_page' => -1,
				'numberposts' => -1,
				'author' => '',
				'post_status' => 'publish',
				'suppress_filters' => true
			);

			$myposts = get_posts($args);

			foreach ($myposts as $post) : setup_postdata($post); ?>
				<div class="item">
					<div class="itemContent">
						<?php the_post_thumbnail(); ?>
						<p class="cardTitle"><?php the_title(); ?></p>
						<?php the_excerpt(); ?>
					</div>
				</div>
			<?php
			endforeach;
			wp_reset_postdata();
			?>
		</div>
	</section>

	<section class="casesSection">
		<h2 class="titleBlue"><?php the_field('title_cases'); ?></h2>
		<div class="caseSlide">
			<img class="middlePolygon" src="https://institutosabendomais.org//wp-content/uploads/2020/07/meio-átomo.svg" alt="" />
			<?php $image_cases = get_field('image_cases_1'); ?>
			<?php if ($image_cases) { ?>
				<img src="<?php echo $image_cases['url']; ?>" />
			<?php } ?>
			<div class="casesContent">
				<h2 class="titleBlue"><?php the_field('title_cases_1'); ?></h2>
				<p class="subtitleBlue"><?php the_field('text_cases_1'); ?></p>
				<p class="textSection"><?php the_field('text_cases_3'); ?></p>
			</div>
		</div>

		<div class="caseSlide">
			<img class="middlePolygon" src="https://institutosabendomais.org//wp-content/uploads/2020/07/meio-átomo.svg" alt="" />
			<?php $image_cases_2 = get_field('image_cases_2'); ?>
			<?php if ($image_cases_2) { ?>
				<img src="<?php echo $image_cases_2['url']; ?>" />
			<?php } ?>
			<div class="casesContent">
				<h2 class="titleBlue"><?php the_field('title_cases_2'); ?></h2>
				<p class="subtitleBlue"><?php the_field('text_cases_2'); ?></p>
				<p class="textSection"><?php the_field('text_cases_4'); ?></p>
			</div>
		</div>

	</section>

	<section class="partnershipsSection">
		<div class="container">
			<h2 class="titleBlue"><?php the_field('title_investors'); ?></h2>
			<?php $args = array(
				'posts_per_page' => 5,
				'offset' => 0,
				'category' => '',
				'category_name' => 'investidores',
				'orderby' => 'date',
				'order' => 'DESC',
				'include' => '', 'exclude' => '',
				'meta_key' => '',
				'meta_value' => '',
				'post_type' => 'post', 'post_mime_type' => '',
				'post_parent' => '',
				'author' => '',
				'posts_per_page' => -1,
				'numberposts' => -1,
				'post_status' => 'publish',
				'suppress_filters' => true
			);

			$myposts = get_posts($args);

			foreach ($myposts as $post) : setup_postdata($post); ?>
				<div class="imgBigger"><?php the_post_thumbnail(); ?></div>
			<?php
			endforeach;
			wp_reset_postdata();
			?>

			<h2 class="titleBlue"><?php the_field('title_partnerships'); ?></h2>
			<?php $args = array(
				'posts_per_page' => 5,
				'offset' => 0,
				'category' => '',
				'category_name' => 'parceria',
				'orderby' => 'date',
				'order' => 'DESC',
				'include' => '', 'exclude' => '',
				'meta_key' => '',
				'meta_value' => '',
				'post_type' => 'post', 'post_mime_type' => '',
				'post_parent' => '',
				'author' => '',
				'posts_per_page' => -1,
				'numberposts' => -1,
				'post_status' => 'publish',
				'suppress_filters' => true
			);

			$myposts = get_posts($args);

			foreach ($myposts as $post) : setup_postdata($post); ?>
				<div class="imgContainer partnerImg"><?php the_post_thumbnail(); ?></div>
			<?php
			endforeach;
			wp_reset_postdata();
			?>

			<h2 class="titleBlue"><?php the_field('title_supporters'); ?></h2>
			<?php $args = array(
				'posts_per_page' => 5,
				'offset' => 0,
				'category' => '',
				'category_name' => 'apoiadores',
				'orderby' => 'date',
				'order' => 'DESC',
				'include' => '', 'exclude' => '',
				'meta_key' => '',
				'meta_value' => '',
				'post_type' => 'post', 'post_mime_type' => '',
				'post_parent' => '',
				'author' => '',
				'posts_per_page' => -1,
				'numberposts' => -1,
				'post_status' => 'publish',
				'suppress_filters' => true
			);

			$myposts = get_posts($args);

			foreach ($myposts as $post) : setup_postdata($post); ?>
				<div class="imgContainer"><?php the_post_thumbnail(); ?></div>
			<?php
			endforeach;
			wp_reset_postdata();
			?>
		</div>
	</section>


	<img class="leftVector" src="https://institutosabendomais.org/wp-content/uploads/2020/08/Esquerda.svg" alt="" />
	<img class="rightVector" src="https://institutosabendomais.org/wp-content/uploads/2020/08/Direita.svg" alt="" />
	<img class="leftVectorLines" src="https://institutosabendomais.org//wp-content/uploads/2020/07/Linhas-Verticais.svg" alt="" />

</div><!-- #content -->

<?php get_footer(); ?>