<?php
/**
 * This file is part of MspStoque project.
 *
 * This is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 3, or (at your option)
 * any later version.
 *
 * @link https://github.com/maykelsb/mspstoque
 * @author Maykel S. Braz <maykelsb@yahoo.com.br>
 */
require_once __DIR__ . '/../vendor/autoload.php';

$app = new Silex\Application();
$app['debug'] = true;

$app->register(new Silex\Provider\HttpFragmentServiceProvider())
    ->register(new Silex\Provider\ServiceControllerServiceProvider())
    ->register(new Silex\Provider\TwigServiceProvider(), [
        'twig.path' => __DIR__ . '/../src/views',
        'twig.form.templates' => ['bootstrap_3_horizontal_layout.html.twig']
    ])
    ->register(new Silex\Provider\WebProfilerServiceProvider(), [
        'profiler.cache_dir' => __DIR__ . '/../cache/profiler',
    ])
    ->register(new Silex\Provider\LocaleServiceProvider())
    ->register(new Silex\Provider\TranslationServiceProvider())
    ->register(new Silex\Provider\FormServiceProvider())
    ;

$app->mount('/', new Mspstoque\ControllerProvider\ProductControllerProvider());

$app->run();
