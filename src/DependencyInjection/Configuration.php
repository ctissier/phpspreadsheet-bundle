<?php

namespace Ctissier\PhpSpreadsheetBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * Configures the class with standard options.
 *
 * @package Ctissier\PhpSpreadsheetBundle\DependencyInjection
 */
class Configuration implements ConfigurationInterface
{

    /**
     * @inheritdoc
     */
    public function getConfigTreeBuilder(): TreeBuilder
    {
        if (! method_exists('Symfony\Component\Config\Definition\Builder\TreeBuilder', 'getRootNode')) {
            // This is the pre 4.2 way
            $builder = new TreeBuilder();
            $builder->root('ctissier_phpoffice');
        } else {
            $builder = new TreeBuilder('ctissier_phpoffice');
            $builder->getRootNode($builder, 'ctissier_phpoffice');
        }


        return $builder;
    }

}
