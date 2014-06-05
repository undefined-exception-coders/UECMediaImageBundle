<?php

namespace UEC\MediaImageBundle\Model;

use UEC\MediaBundle\Model\MediaProvider;

abstract class MediaImage extends MediaProvider implements MediaImageInterface
{
    /**
     * @var int
     */
    protected $width;

    /**
     * @var int
     */
    protected $height;

    /**
     * @var int
     */
    protected $size;

    /**
     * @var string
     */
    protected $mime;

    /**
     * @var array
     */
    protected $exif;

    /**
     * Set the width of the image
     *
     * @param int $width
     * @return MediaImageInterface
     */
    public function setWidth($width)
    {
        $this->width = $width;

        return $this;
    }

    /**
     * Get the width of the image
     *
     * @return int
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Set the height of the image
     *
     * @param int $height
     * @return MediaImageInterface
     */
    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Get the height of the image
     *
     * @return int
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Set size
     *
     * @param int $size
     * @return MediaImageInterface
     */
    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * Get size
     *
     * @return int
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Set mime
     *
     * @param string $mime
     * @return MediaImageInterface
     */
    public function setMime($mime)
    {
        $this->mime = $mime;

        return $this;
    }

    /**
     * Get mime
     *
     * @return string
     */
    public function getMime()
    {
        return $this->mime;
    }

    /**
     * Set exif data
     *
     * @param array $exif
     * @return MediaImageInterface
     */
    public function setExif(array $exif = array())
    {
        $this->exif = $exif;

        return $this;
    }

    /**
     * Get exif data
     *
     * @return array
     */
    public function getExif()
    {
        return $this->exif;
    }
}