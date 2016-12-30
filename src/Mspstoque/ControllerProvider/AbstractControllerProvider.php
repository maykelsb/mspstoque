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

abstract class AbstractControllerProvider implements \Silex\Api\ControllerProviderInterface
{

    /**
     * @var \Silex\Application
     */
    protected $app;

    /**
     * @var Silex\ControllerCollection
     */
    protected $cc;

    public function connect(\Silex\Application $app)
    {
        $this->app = $app;
        $this->cc = $app['controllers_factory'];

        $refCtrl = new \ReflectionClass($this);
        foreach ($refCtrl->getMethods(\ReflectionMethod::IS_PROTECTED) as $method) {
            if ('Action' === substr($method->name, -6)) {
                $this->{$method->name}();
            }
        }

        return $this->cc;
    }
}
