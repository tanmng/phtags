<?php

namespace PHTags;

/*
 * body tag
 */
class Doctype extends HTMLTag
{
    private $type;
    /*
     * Contructor
     */
    function __construct($type = 'html') {
        $this->type = $type;
    }

    private function process() {
        $this->bits = [
            '<!DOCTYPE '.$this->type.'>',
        ];
    }
}
