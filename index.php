<?php
require_once 'Engine/Engine.php';
require_once 'App/MyPageApp.php';

$engine = new Engine;
$engine->Run(new MyPage);