<?php

use Philo\Blade\Blade;

function view($path, $data = []){
  $view = __DIR__ . '/../../views';
  $cache = __DIR__ . '/../../cache';
  $blade = new Blade($view, $cache);

  echo $blade->view()->make($path, $data)->render();
}
