<?php

/*
 * This file is part of the Doctrine Extensions Taggable package.
 * (c) 2011 Fabien Pennequin <fabien@pennequin.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DoctrineExtensions\Taggable;

use Doctrine\Common\Collections\Collection;

/**
 * Taggable is the interface that Taggable resource classes must implement.
 *
 * @author Fabien Pennequin <fabien@pennequin.me>
 */
interface Taggable
{
    /**
     * Returns the unique taggable resource type
     *
     * @return string
     */
    public function getTaggableType();

    /**
     * Returns the unique taggable resource identifier
     *
     * @return string
     */
    public function getTaggableId();

    /**
     * Returns the collection of tags for this Taggable entity
     *
     * @return Collection
     */
    public function getTags();
}
