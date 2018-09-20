<?php

namespace OC\PlatformBundle\Entity;

class Image
{
    protected $url;
    protected $imageName;

    public function getUrl()
    {
        return $this->url;
    }

    public function getImageName()
    {
        return $this->imageName;
    }

    public function setUrl($url)
    {
        $this->url = $url;
    }

    public function setImageName($imageName)
    {
        $this->imageName = $imageName;
    }
}
