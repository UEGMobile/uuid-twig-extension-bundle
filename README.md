# uuid-twig-extension-bundle

Symfony twig extension bundle to use uuid function (based on ramsey/uuid bundle)

## installation

Through composer in your symfony project:

    composer require uegmobile/uuid-twig-extension-bundle

In Symfony <= 3, Then, register the bundle in your AppKernel by adding the following line:

    new UEGMobile\UUIDTwigExtensionBundle\UUIDTwigExtensionBundle()

In Symfony >= 4, Then, register the bundle in your bundle.php file by adding the following line:

    UEGMobile\UUIDTwigExtensionBundle\UUIDTwigExtensionBundle::class => ['all' => true]

    
## twig extensions    

### uuid function:

* link function to ramsey/uuid

#### Examples

Print new UUID in a twig template:

    {{ uuid() }}





