<?php get_header(); ?>
<?php 
global $wp_query;
$id = $wp_query->get_queried_object_id();
$sidebar = get_post_meta($id, "qode_show-sidebar", true); 

if ( get_query_var('paged') ) { $paged = get_query_var('paged'); }
elseif ( get_query_var('page') ) { $paged = get_query_var('page'); }
else { $paged = 1; }

$blog_hide_comments = "";
if (isset($qode_options_proya['blog_hide_comments']))
	$blog_hide_comments = $qode_options_proya['blog_hide_comments'];

if(isset($qode_options_proya['blog_page_range']) && $qode_options_proya['blog_page_range'] != ""){
	$blog_page_range = $qode_options_proya['blog_page_range'];
} else{
	$blog_page_range = $wp_query->max_num_pages;
}
?>
	
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
	<div class="container">
        <?php if(isset($qode_options_proya['overlapping_content']) && $qode_options_proya['overlapping_content'] == 'yes') {?>
            <div class="overlapping_content"><div class="overlapping_content_inner">
        <?php } ?>
		<div class="container_inner default_template_holder clearfix">
			<?php if(($sidebar == "default")||($sidebar == "")) : ?>
				<?php 
					get_template_part('templates/blog', 'structure');
				?>
			<?php elseif($sidebar == "1" || $sidebar == "2"): ?>
				<div class="<?php if($sidebar == "1"):?>two_columns_66_33<?php elseif($sidebar == "2") : ?>two_columns_75_25<?php endif; ?> background_color_sidebar grid2 clearfix">
					<div class="column1">
						<div class="column_inner">
							<?php 
								get_template_part('templates/blog', 'structure');
							?>
						</div>
<?php  
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




<div style="border:2px solid black;">

<h2>Ditt beräknade pris är 
<?php  
echo  pris($length, $width, $inside, $outside, $plastic, $upptagning, $motorer, $antal, $sept, $water, $wash, $batterier);
?> kronor</h2>
<div>

<h3>Båt</h3> <?php ?>
<h4>längd: <?php echo $length; ?> Meter</h4>
<h4>bredd: <?php echo $width - 0.5; ?> Meter</h4>

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
 ?>
</h3>
					</div>
					<div class="column2">
						<?php get_sidebar(); ?>	
					</div>
				</div>
		<?php elseif($sidebar == "3" || $sidebar == "4"): ?>
				<div class="<?php if($sidebar == "3"):?>two_columns_33_66<?php elseif($sidebar == "4") : ?>two_columns_25_75<?php endif; ?> background_color_sidebar grid2 clearfix">
					<div class="column1">
					<?php get_sidebar(); ?>	
					</div>
					<div class="column2">
						<div class="column_inner">
							<?php 
								get_template_part('templates/blog', 'structure');
							?>
						</div>
					</div>
				</div>
			<?php endif; ?>
		</div>
        <?php if(isset($qode_options_proya['overlapping_content']) && $qode_options_proya['overlapping_content'] == 'yes') {?>
            </div></div>
        <?php } ?>
	</div>
<?php get_footer(); ?>






