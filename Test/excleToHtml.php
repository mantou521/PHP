<?php
require_once( '../vendor/autoload.php' );

$src = (new \tomk79\excel2html\main('../Public/xy.xls'))->get_html(array(
	'renderer'=>'simplify'
));

print $src;
