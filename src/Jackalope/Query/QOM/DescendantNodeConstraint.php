<?php

namespace Jackalope\Query\QOM;

use PHPCR\Query\QOM\DescendantNodeInterface;

/**
 * {@inheritDoc}
 *
 * @api
 */
class DescendantNodeConstraint implements DescendantNodeInterface
{
    /**
     * @var string
     */
    protected $selectorName;

    /**
     * @var string
     */
    protected $ancestorPath;

    /**
     * Constructor
     *
     * @param string $path
     * @param string $selectorName
     */
    public function __construct($path, $selectorName = null)
    {
        $this->path = $path;
        $this->selectorName = $selectorName;
    }

    /**
     * {@inheritDoc}
     *
     * @api
     */
    public function getSelectorName()
    {
        return $this->selectorName;
    }

    /**
     * {@inheritDoc}
     *
     * @api
     */
    public function getAncestorPath()
    {
        return $this->path;
    }

    /**
     * Gets all constraints including itself
     *
     * @return array the constraints
     *
     * @api
     */
    public function getConstraints()
    {
        return array($this);
    }

}
