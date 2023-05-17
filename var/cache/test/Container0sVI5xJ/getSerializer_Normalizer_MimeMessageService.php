<?php

namespace Container0sVI5xJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSerializer_Normalizer_MimeMessageService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'serializer.normalizer.mime_message' shared service.
     *
     * @return \Symfony\Component\Serializer\Normalizer\MimeMessageNormalizer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/NormalizerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/DenormalizerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/SerializerAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/CacheableSupportsMethodInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/MimeMessageNormalizer.php';

        $a = ($container->privates['serializer.normalizer.property'] ?? $container->load('getSerializer_Normalizer_PropertyService'));

        if (isset($container->privates['serializer.normalizer.mime_message'])) {
            return $container->privates['serializer.normalizer.mime_message'];
        }

        return $container->privates['serializer.normalizer.mime_message'] = new \Symfony\Component\Serializer\Normalizer\MimeMessageNormalizer($a);
    }
}
