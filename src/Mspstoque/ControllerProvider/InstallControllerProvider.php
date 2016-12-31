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

class InstallControllerProvider extends AbstractControllerProvider
{
    protected function indexAction()
    {
        $this->cc->get('/', function(){
            // -- Check módulos
            // -- Check database
            // -- Create database
            return 'Not implemented';
        })->bind('install_index');

        return $this;
    }
}
