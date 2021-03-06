<?php

namespace AmaTeam\Image\Projection\Test\Support\Dummy;

use AmaTeam\Image\Projection\Image\Manager;
use AmaTeam\Image\Projection\Type\AbstractHandler;
use AmaTeam\Image\Projection\API\Type\MappingInterface;
use League\Flysystem\FilesystemInterface;

class HandlerDummy extends AbstractHandler
{
    private $mapping;
    /**
     * @inheritDoc
     */
    public function __construct(
        FilesystemInterface $filesystem,
        Manager $imageManager,
        MappingInterface $mapping
    ) {
        $this->mapping = $mapping;
        parent::__construct($filesystem, $imageManager);
    }

    public function getMapping()
    {
        return $this->mapping;
    }
}
