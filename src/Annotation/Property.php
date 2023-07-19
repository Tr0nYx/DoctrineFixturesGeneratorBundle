<?php
namespace Webonaute\DoctrineFixturesGeneratorBundle\Annotation;

use Attribute;
use Doctrine\Common\Annotations\Annotation;
use Doctrine\ORM\Mapping\MappingAttribute;

/**
 * @Annotation
 * @Target("PROPERTY")
 */
#[Attribute(Attribute::TARGET_PROPERTY)]
final class Property implements MappingAttribute
{
    public $ignoreInSnapshot = false;

    /**
     * @param bool $ignoreInSnapshot
     */
    public function __construct(bool $ignoreInSnapshot = false)
    {
        $this->ignoreInSnapshot = $ignoreInSnapshot;
    }
}