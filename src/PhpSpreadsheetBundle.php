<?php

namespace Ctissier\PhpSpreadsheetBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use Ctissier\PhpSpreadsheetBundle\DependencyInjection\PhpSpreadsheetExtension;

class PhpSpreadsheetBundle extends Bundle
{

    /**
     * @inheritdoc
     */
    public function getContainerExtension(): ?ExtensionInterface
    {
        return new PhpSpreadsheetExtension();
    }

}
