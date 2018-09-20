<?php

namespace OC\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

class ParamConverterController extends Controller
{
    /**
     * @ParamConverter("post", "OCPlatformBundle:E")
     */
    public function conveterAction()
    {
    }
}
