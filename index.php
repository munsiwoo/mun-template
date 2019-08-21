<?php
# made by munsiwoo
include 'MunTemplate.class.php';

$MunTemplate = new MunTemplate('./templates/');

$my_name = 'munsiwoo';
$MunTemplate->render_template('main.html', ['name'=>$my_name]);