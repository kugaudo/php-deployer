<?php


namespace Kugaudo\PhpDeployer\Kernel\Services\Target\Rolling\Templates;


use Kugaudo\PhpDeployer\Kernel\Services\Target\Rolling\RollingTarget;

abstract class DeliveryDoTemplate implements RollingTarget
{
    /**
     * @return string
     */
    public function getTargetName()
    {
        return 'delivery-do';
    }

    /**
     * @return string[]
     */
    public function getDependents()
    {
        return [
            'delivery-prepare',
        ];
    }
}