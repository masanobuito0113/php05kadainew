<?php

require_once('../model/view.php');

$pdo = db_conect();
$view = get_all_posts($pdo);


require_once('../view/list.php');