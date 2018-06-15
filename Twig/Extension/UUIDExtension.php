<?php
namespace UEGMobile\UUIDTwigExtensionBundle\Twig\Extension;

use Ramsey\Uuid\Uuid;

/**
 * Class UUIDExtension
 */
class UUIDExtension extends \Twig_Extension
{

    public function getFunctions()
    {
        throw new Exception('AQUI!');
        return array(
            new Twig_Function('uuid', array('this', 'uuid4')),
        );
    }

    public function uuid4()
    {
        return Uuid::uuid4()->toString();
    }

    public function getName()
    {
        throw new Exception('AQUI 2!');
        return 'uegmobile_uuid_twig_extension';
    }




}