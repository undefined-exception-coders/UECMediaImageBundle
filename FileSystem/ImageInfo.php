<?php

namespace UEC\MediaImageBundle\FileSystem;

class ImageInfo
{
    /**
     * @var int
     */
    private $width;

    /**
     * @var int
     */
    private $height;

    /**
     * @var int
     */
    private $size;

    /**
     * @var string
     */
    private $mime;

    /**
     * @var array
     */
    private $exif;

    /**
     * @param array $exif
     *
     * @return ImageInfo
     */
    public function setExif($exif)
    {
        $this->exif = $exif;

        return $this;
    }

    /**
     * @return array
     */
    public function getExif()
    {
        return $this->exif;
    }

    /**
     * @param int $height
     *
     * @return ImageInfo
     */
    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }

    /**
     * @return int
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param string $mime
     *
     * @return ImageInfo
     */
    public function setMime($mime)
    {
        $this->mime = $mime;

        return $this;
    }

    /**
     * @return string
     */
    public function getMime()
    {
        return $this->mime;
    }

    /**
     * @param int $size
     *
     * @return ImageInfo
     */
    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * @return int
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @param int $width
     *
     * @return ImageInfo
     */
    public function setWidth($width)
    {
        $this->width = $width;

        return $this;
    }

    /**
     * @return int
     */
    public function getWidth()
    {
        return $this->width;
    }
}