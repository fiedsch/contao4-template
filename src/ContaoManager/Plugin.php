<?php

declare(strict_types=1);

/**
 * @author     Andreas Fieger
 */

namespace Fiedsch\C4TemplateBundle\ContaoManager;

use Fiedsch\C4TemplateBundle\FiedschC4TemplateBundle;

use Contao\CoreBundle\ContaoCoreBundle;

use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;

class Plugin implements BundlePluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(FiedschC4TemplateBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class]),
        ];
    }
}