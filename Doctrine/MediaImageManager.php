<?php

namespace UEC\MediaImageBundle\Doctrine;

use Doctrine\ORM\EntityManager;
use UEC\MediaBundle\Model\MediaProviderInterface;
use UEC\MediaBundle\Model\MediaProviderManager;
use UEC\MediaImageBundle\FileSystem\ImageInfo;
use UEC\MediaImageBundle\Model\MediaImageInterface;

class MediaImageManager extends MediaProviderManager
{
    /**
     * @var \Doctrine\ORM\EntityManager
     */
    protected $em;

    /**
     * @var string
     */
    protected $className;

    function __construct(EntityManager $em, $className)
    {
        $this->em = $em;
        $this->className = $className;
    }

    /**
     * {@inheritdoc}
     */
    public function getClass()
    {
        return $this->className;
    }

    /**
     * {@inheritdoc}
     */
    public function fillMediaProviderData(MediaProviderInterface &$mediaProvider, $data)
    {
        if ($data instanceof ImageInfo
            && $mediaProvider instanceof MediaImageInterface
        ) {
            $mediaProvider->setWidth($data->getWidth());
            $mediaProvider->setHeight($data->getHeight());
            $mediaProvider->setSize($data->getSize());
            $mediaProvider->setMime($data->getMime());
            $mediaProvider->setExif($data->getExif());
        }
    }

    /**
     * {@inheritdoc}
     */
    protected function doSaveMediaProvider(MediaProviderInterface $mediaProvider, $andFlush = true)
    {
        $this->em->persist($mediaProvider);
        if ($andFlush) {
            $this->em->flush();
        }
    }

    /**
     * {@inheritdoc}
     */
    protected function findOneBy(array $criteria)
    {
        return $this->em->getRepository($this->className)->findOneBy($criteria);
    }
}