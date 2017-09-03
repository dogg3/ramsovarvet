<?php 
/*
Template Name: Full Width
*/ 
?>
<?php 
global $wp_query;
$id = $wp_query->get_queried_object_id();
$sidebar = get_post_meta($id, "qode_show-sidebar", true);  

$enable_page_comments = false;
if(get_post_meta($id, "qode_enable-page-comments", true) == 'yes') {
	$enable_page_comments = true;
}

if(get_post_meta($id, "qode_page_background_color", true) != ""){
	$background_color = get_post_meta($id, "qode_page_background_color", true);
}else{
	$background_color = "";
}

$content_style_spacing = "";
if(get_post_meta($id, "qode_margin_after_title", true) != ""){
	if(get_post_meta($id, "qode_margin_after_title_mobile", true) == 'yes'){
		$content_style_spacing = "padding-top:".esc_attr(get_post_meta($id, "qode_margin_after_title", true))."px !important";
	}else{
		$content_style_spacing = "padding-top:".esc_attr(get_post_meta($id, "qode_margin_after_title", true))."px";
	}
}

if ( get_query_var('paged') ) { $paged = get_query_var('paged'); }
elseif ( get_query_var('page') ) { $paged = get_query_var('page'); }
else { $paged = 1; }

?>
	<?php get_header(); ?>
		<?php if(get_post_meta($id, "qode_page_scroll_amount_for_sticky", true)) { ?>
			<script>
			var page_scroll_amount_for_sticky = <?php echo get_post_meta($id, "qode_page_scroll_amount_for_sticky", true); ?>;
			</script>
		<?php } ?>
			<?php get_template_part( 'title' ); ?>
		<?php
		$revslider = get_post_meta($id, "qode_revolution-slider", true);
		if (!empty($revslider)){ ?>
			<div class="q_slider"><div class="q_slider_inner">
			<?php echo do_shortcode($revslider); ?>
			</div></div>
		<?php
		}
		?>
	<div class="full_width"<?php if($background_color != "") { echo " style='background-color:". $background_color ."'";} ?>>
	<div class="full_width_inner" <?php qode_inline_style($content_style_spacing); ?>>
		<?php if(($sidebar == "default")||($sidebar == "")) : ?>
			<?php if (have_posts()) : 
					while (have_posts()) : the_post(); ?>
					<?php the_content(); ?>
					<?php 
 $args_pages = array(
  'before'           => '<p class="single_links_pages">',
  'after'            => '</p>',
  'pagelink'         => '<span>%</span>'
 );

 wp_link_pages($args_pages); ?>
					<?php
					if($enable_page_comments){
					?>
					<div class="container">
						<div class="container_inner">

					<?php
						comments_template('', true); 
					?>
						</div>
					</div>	
					<?php
					}
					?> 
					<?php endwhile; ?>
				<?php endif; ?>
		<?php elseif($sidebar == "1" || $sidebar == "2"): ?>		
			
			<?php if($sidebar == "1") : ?>	
				<div class="two_columns_66_33 clearfix grid2">
					<div class="column1">
			<?php elseif($sidebar == "2") : ?>	
				<div class="two_columns_75_25 clearfix grid2">
					<div class="column1">
			<?php endif; ?>
					<?php if (have_posts()) : 
						while (have_posts()) : the_post(); ?>
						<div class="column_inner">
						
						<?php the_content(); ?>	
						<?php 
 $args_pages = array(
  'before'           => '<p class="single_links_pages">',
  'after'            => '</p>',
  'pagelink'         => '<span>%</span>'
 );

 wp_link_pages($args_pages); ?>
							<?php
							if($enable_page_comments){
							?>
							<div class="container">
								<div class="container_inner">

							<?php
								comments_template('', true); 
							?>
								</div>
							</div>	
							<?php
							}
							?> 
						</div>
				<?php endwhile; ?>
				<?php endif; ?>
			
							
					</div>
					<div class="column2"><?php get_sidebar();?></div>
				</div>
			<?php elseif($sidebar == "3" || $sidebar == "4"): ?>
				<?php if($sidebar == "3") : ?>	
					<div class="two_columns_33_66 clearfix grid2">
						<div class="column1"><?php get_sidebar();?></div>
						<div class="column2">
				<?php elseif($sidebar == "4") : ?>	
					<div class="two_columns_25_75 clearfix grid2">
						<div class="column1"><?php get_sidebar();?></div>
						<div class="column2">
				<?php endif; ?>
						<?php if (have_posts()) : 
							while (have_posts()) : the_post(); ?>
							<div class="column_inner">
							<?php the_content(); ?>

							<?php 
 $args_pages = array(
  'before'           => '<p class="single_links_pages">',
  'after'            => '</p>',
  'pagelink'         => '<span>%</span>'
 );

 wp_link_pages($args_pages); ?>
							<?php
							if($enable_page_comments){
							?>
							<div class="container">
								<div class="container_inner">

							<?php
								comments_template('', true); 
							?>

								</div>
							</div>	
							<?php
							}
							?> 
							</div>
					<?php endwhile; ?>
					<?php endif; ?>
				
								
						</div>
						
					</div>
			<?php endif; ?>
	</div>

	</div>

 <div class="option one">


<?php 


 if (is_page('136')) {
 


$length = $_POST['length'];
$width = 0.5 + $_POST['width'];

$inside = $_POST['inside'];
$outside = $_POST['outside'];
$plastic = $_POST['plastic'];
$upptagning = $_POST['upptagning'];
$motorer = $_POST['motorer'];
	$antal = $_POST['antal'];
$sept = $_POST['sept'];
$batterier = $_POST['batterier'];
$water = $_POST['vatten'];
$wash = $_POST['wash'];
$kvadrat = $length * $width;

/******ENSKILT PRIS FUNKTION****/


function enpris( $x, $y   ) {
	return  $x * $y;
};

/*****TOTALA PRIS FUNKTION***/ function pris($length, $width, $inside, $outside, $plastic, $upptagning, $motorer, $antal, $sept, $water, $wash, $batterier ) {

$kvadrat = $length * $width;
if (isset($inside)) {
	$inside = 700 * $kvadrat;
}

if (isset($outside)) {
	$outside = 300 * $kvadrat;
}

if (isset($plastic)) {
	$plastic = 250 * $kvadrat;
}
if (isset($upptagning)) {
	$upptagning = 150 * $kvadrat;
}


if (isset($motorer)) {
	if($antal == 1) {
	$motorer = 1395;
	}
	elseif($antal == 2) {
		$motorer = 2790 ;
	}
	elseif($antal == 3) {
		$motorer = 4185 ;
	}
}

if (isset($sept)) {
	$sept = 25 * $kvadrat;
}

if (isset($batterier)) {
	$batterier = 25 * $kvadrat;
}

if (isset($water)) {
	$water = 25 * $kvadrat;
}


if (isset($wash)) {
	$wash = 40 * $kvadrat;
}

return  1000 + $inside + $outside + $plastic +$upptagning + $motorer + $sept + $water + $wash + $batterier;





}

?>



<div style=" display:flex; justify-content: center; align-items: center; flex-direction: column;">

<h4>Ditt beräknade pris är :
<?php  
echo  pris($length, $width, $inside, $outside, $plastic, $upptagning, $motorer, $antal, $sept, $water, $wash, $batterier);
?> kronor</h2>
<div>


<h6>Längd: <?php echo $length; ?> Meter</h4>
<h6>Lredd: <?php echo $width - 0.5; ?> Meter</h4>

<h3>
<!--hallen-->
<?php 
if(isset($inside)) {
echo "Hallen : ".enpris(700, $kvadrat)." kronor";
};
 ?>
</h3>

<h3>
 <!--utomhus-->
<?php 
if(isset($outside)) {
echo "Utomhus : ".enpris(300, $kvadrat)." kronor";
};
 ?>
</h3>
<h3>
  <!--krymplast-->
<?php 
if(isset($plastic)) {
echo "Krymplast : ".enpris(250, $kvadrat)." kronor";
};
 ?>
</h3>

<h3>
 <!--upptagning-->
<?php 
if(isset($upptagning)) {
echo "Upptagning och sjösättning : ".enpris(150, $kvadrat)." kronor";
};
 ?>
</h3>
    <!--konservering av motorer-->



<h3>
    <?php  
if (isset($motorer)) {
	if($antal == 1) {
	echo "<h2>Konservering av 1 motor: 1395 kronor</h2>";
	}
	elseif($antal == 2) {
		echo "Konservering av 2 motor 2790 kronor";
	}
	elseif($antal == 3) {
		echo "Konservering av 3 motor 4185 kronor";
	}
}

?>
</h3>

 <h3>  <!--septitank-->
<?php 
if(isset($sept)) {
echo "Konservering av septitank : ".enpris(25, $kvadrat)." kronor";
};
 ?>
</h3>


<h3>  <!--septitank-->
<?php 
if(isset($batterier)) {
echo "Batterier : ".enpris(25, $kvadrat)." kronor";
};
 ?>
</h3>

<h3>  <!--septitank-->
<?php 
if(isset($water)) {
echo "Konservering av färskvatten : ".enpris(25, $kvadrat)." kronor";
};
 ?>
</h3>

<h3>  <!--septitank-->
<?php 
if(isset($wash)) {
echo "Bottentvätt : ".enpris(40, $kvadrat)." kronor";
};

}
 ?>


</h3>
 </div>
 </div>
 </div>


	<?php do_action('qodef_page_after_container') ?>
	<?php get_footer(); ?>