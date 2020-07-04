<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace PHTags;

/**
 * Implement the HTML tag param
 */
class Param extends HTMLTag
{
    /** The element is a void one -> no need for closing tag */
    protected $separated_tag_for_ending = false;

    public function __construct($attributes = [], $flags = [])
    {
        parent::__construct('param', [], $attributes, $flags);
    }
}
