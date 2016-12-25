<?php
//this will protect aginst any injection into our datebase
//and we will seniteise input
function e($text) {
	return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
}