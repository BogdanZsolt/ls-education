<?php

function lsedu_enqueue(){
	wp_register_style(
		'lsedu_font_roboto_and_pacifico',
		'https://fonts.googleapis.com/css2?family=Pacifico&family=Roboto:wght@100;300;400;500;700&display=swap',
		[],
		null
	);
	wp_register_style(
		'lsedu_bootstrap_icons',
		get_theme_file_uri('bootstrap-icons/bootstrap-icons.css')
	);
	wp_register_style(
		'lsedu_theme',
		get_theme_file_uri('build/style-index.css'),
	);

		wp_enqueue_style('lsedu_font_roboto_and_pacifico');
		wp_enqueue_style('lsedu_bootstrap_icons');
		wp_enqueue_style('lsedu_theme');
}