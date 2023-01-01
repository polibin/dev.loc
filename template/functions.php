<?php

function setTitle($title) {
	$GLOBALS['title'] = $title;
}

function setDescription($description) {
	$GLOBALS['description'] = $description;
}

function brush($language, $content) {
	echo "<pre class='brush: " . $language . "'>" . htmlspecialchars($content) . "</pre>";
}

