<?php

namespace PedroTroller\SymfonyRoadmapChecker;

use Exception;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\DataCollector\DataCollector as BaseCollector;

class DataCollector extends BaseCollector
{
    /**
     * @var Information
     */
    private $information;

    /**
     * {@inheritdoc}
     */
    public function collect(Request $request, Response $response, Exception $exception = null)
    {
    }

    public function getInformation()
    {
        return $this->information = $this->information ?: new Information();
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'roadmap_checker';
    }
}
