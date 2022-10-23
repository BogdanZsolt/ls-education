<?php

function lsedu_setup_theme(){
	add_theme_support('editor-styles');

	add_editor_style([
		'https://fonts.googleapis.com/css2?family=Pacifico&family=Roboto:wght@100;300;400;500;700&display=swap',
		'bootstrap-icons/bootstrap-icons.css',
		'build/style-index.css',
		'build/index.css',
	]);
}