<?php

namespace PedroTroller\SymfonyRoadmapChecker;

use PedroTroller\SymfonyRoadmapChecker\DependencyInjection\Extension;
use Symfony\Component\HttpKernel\Bundle\Bundle as SymfonyBundle;

class SymfonyRoadmapCheckerBundle extends SymfonyBundle
{
    /**
     * {@inheritdoc}
     */
    public function getContainerExtension()
    {
        return new Extension();
    }
}
