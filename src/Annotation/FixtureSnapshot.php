<?php
namespace Webonaute\DoctrineFixturesGeneratorBundle\Annotation;

use Attribute;
use Doctrine\Common\Annotations\Annotation;
use Doctrine\ORM\Mapping\MappingAttribute;

/**
 * @Annotation
 * @Target({"CLASS", "PROPERTY"})
 */
#[Attribute(Attribute::TARGET_CLASS|Attribute::TARGET_PROPERTY)]
final class FixtureSnapshot implements MappingAttribute
{
    public $ignore = false;

    /**
     * @param bool $ignore
     */
    public function __construct(bool $ignore = false)
    {
        $this->ignore = $ignore;
    }
}