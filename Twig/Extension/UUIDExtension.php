<?php
/**
 * Date: 20/11/2016
 */

namespace UEGMobile\UUIDTwigExtensionBundle\Twig\Extension;

/**
 * Class UUIDExtension
 */
class UUIDExtension extends \Twig_Extension
{

    public function getFunctions()
    {
        return array(
            new Twig_Function('lipsum', 'generate_lipsum'),
        );
    }

    public function getName()
    {
        return 'uegmobile_uuid_twig_extension';
    }




}