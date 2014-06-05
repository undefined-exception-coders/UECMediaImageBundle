<?php

namespace UEC\MediaImageBundle\Model;

interface MediaImageInterface
{
    /**
     * Set the width of the image
     *
     * @param int $width
     * @return MediaImageInterface
     */
    public function setWidth($width);

    /**
     * Get the width of the image
     *
     * @return int
     */
    public function getWidth();

    /**
     * Set the height of the image
     *
     * @param int $height
     * @return MediaImageInterface
     */
    public function setHeight($height);

    /**
     * Get the height of the image
     *
     * @return int
     */
    public function getHeight();

    /**
     * Set size
     *
     * @param int $size
     * @return MediaImageInterface
     */
    public function setSize($size);

    /**
     * Get size
     *
     * @return int
     */
    public function getSize();

    /**
     * Set mime
     *
     * @param string $mime
     * @return MediaImageInterface
     */
    public function setMime($mime);

    /**
     * Get mime
     *
     * @return string
     */
    public function getMime();

    /**
     * Set exif data
     *
     * @param array $exif
     * @return MediaImageInterface
     */
    public function setExif(array $exif = array());

    /**
     * Get exif data
     *
     * @return array
     */
    public function getExif();
} 