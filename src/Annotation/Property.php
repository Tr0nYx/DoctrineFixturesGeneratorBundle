<?php
namespace Webonaute\DoctrineFixturesGeneratorBundle\Annotation;

use Doctrine\Common\Annotations\Annotation;

/**
 * @src.Annotation
 * @Target("PROPERTY")
 */
final class Property extends Annotation
{
    public $ignoreInSnapshot = false;
}