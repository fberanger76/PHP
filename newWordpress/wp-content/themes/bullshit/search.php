<?php
/*
Template Name: Search Page
*/
?>
<?php
get_header();
?>
<!DOCTYPE HTML>
<!--
	Future Imperfect by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Future Imperfect by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">
		<!-- Wrapper -->
        <div id="wrapper">
        <?php get_search_form(); ?>
    </div>
    <?php
			get_footer();
			?>
		<!-- Scripts -->
			<script src="<?= get_template_directory_uri(); ?>/assets/js/jquery.min.js"></script>
			<script src="<?= get_template_directory_uri(); ?>/assets/js/browser.min.js"></script>
			<script src="<?= get_template_directory_uri(); ?>/assets/js/breakpoints.min.js"></script>
			<script src="<?= get_template_directory_uri(); ?>/assets/js/util.js"></script>
			<script src="<?= get_template_directory_uri(); ?>/assets/js/main.js"></script>


 
	</body>
</html>