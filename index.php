<?php get_header(); ?>

<div class="content">

	<?php $pages = get_pages('sort_column=menu_order&title_li=');
foreach ($pages as $page_data) {
    $content = apply_filters('the_content', $page_data->post_content);
    $title = $page_data->post_title;
	$slug = $page_data->post_name;
   	echo "<div id='$slug'>";
	echo "<h1>$title</h1>";
	echo $content;
	echo "</div>";
}
?>

</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>