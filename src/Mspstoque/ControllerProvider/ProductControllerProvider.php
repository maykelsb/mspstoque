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
namespace Mspstoque\ControllerProvider;

class ProductControllerProvider extends AbstractControllerProvider
{

    protected function indexAction()
    {
        $this->cc->get('/', function(){
            return $this->app['twig']->render('product/index.html.twig');
        })->bind('product_index');

        return $this;
    }

    protected function listAction()
    {
        $this->cc->get('/add', function(){
            return $this->app['twig']->render('product/add.html.twig');
        })->bind('product_add');

        return $this;
    }
}
