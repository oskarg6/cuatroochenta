<?php
namespace App\Infrastructure\Helper;

use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

/**
 * SerializerHelper
 */
class SerializerHelper
{
    static public function serialize($data, string $format = 'json'): string
    {
        $serializer = self::createSerializer();

        return $serializer->serialize($data, $format);
    }

    static private function createSerializer()
    {
        $encoders = [new XmlEncoder(), new JsonEncoder()];
        $normalizers = [new ObjectNormalizer()];

        return new Serializer($normalizers, $encoders);
    }
}
