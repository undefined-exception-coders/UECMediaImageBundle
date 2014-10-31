<?php

namespace UEC\MediaImageBundle\FileSystem;

use UEC\MediaBundle\FileSystem\FileInfoInterface;
use UEC\MediaBundle\FileSystem\FileSystemInterface;
use UEC\MediaBundle\Model\MediaProviderInterface;
use UEC\MediaBundle\Path\PathGeneratorInterface;

class MediaImageFileSystem implements FileSystemInterface
{
    /**
     * {@inheritdoc}
     */
    public function upload(FileInfoInterface $fileInfo, MediaProviderInterface $mediaProvider, $filePath)
    {
        if (!$fileInfo->isUploadedFile()) {
            return false;
        }

        if (move_uploaded_file($fileInfo->getTmpName(), $filePath)) {
            $imageInfo = new ImageInfo();

            list($width, $height) = getimagesize($filePath);

            $imageInfo->setWidth($width);
            $imageInfo->setHeight($height);
            $imageInfo->setSize($fileInfo->getSize());
            $imageInfo->setMime($fileInfo->getType());

            $exif = @exif_read_data($filePath, 0, true);

            if (empty($exif)) {
                $exif = array();
            }

            $imageInfo->setExif($exif);

            return $imageInfo;
        }

        return false;
    }

    /**
     * {@inheritdoc}
     */
    public function getFilePath(FileInfoInterface $fileInfo, MediaProviderInterface $mediaProvider, PathGeneratorInterface $pathGenerator)
    {
        return $pathGenerator->generate($mediaProvider);
    }
} 