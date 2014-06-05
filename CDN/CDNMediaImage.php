<?php

namespace UEC\MediaImageBundle\CDN;

use UEC\MediaBundle\CDN\AbstractCDN;

class CDNMediaImage extends AbstractCDN
{
    /**
     * {@inheritdoc}
     */
    public function getThumbPath()
    {
        return $this->mediaProvider->getMedia()->getPath();
    }

    /**
     * {@inheritdoc}
     */
    public function getFilePath()
    {
        return $this->mediaProvider->getMedia()->getPath();
    }

    /**
     * {@inheritdoc}
     */
    public function getContent(array $options = array())
    {
        $attributes = '';

        $options = array_merge(array(
            'alt' => $this->mediaProvider->getMedia()->getName(),
        ), $options);

        foreach ($options as $name => $value) {
            $attributes .= $name.'="'.$value.'" ';
        }

        return '<img src="/'.ltrim($this->mediaProvider->getMedia()->getPath(), '/').'" '.trim($attributes).'>';
    }
}