<?php

namespace PHTags;

class HTMLTag
{
    private $bits = [];
    private $children = [];
    private $flags = [];
    private $attributes = [];
    private $name = '';
    // Specify whether we should have separated </NAME> for ending the body
    protected $separated_tag_for_ending = true;
    /*
     * Constructor of the object by storing all the data
     */
    function __construct($name, $children = [], $attributes = [], $flags = []) {
        $this->name = $name;
        $this->children = $children;
        $this->attributes = $attributes;
        $this->flags = $flags;
    }

    /*
     * Appending child to the list
     * Maybe we should implement ArrayAccess in our class to help with this
     */
    public function appendChild($new_child) {
        $this->children[] = $new_child;
    }

    /*
     * Form the list of bits for the object
     */
    private function process() {
        // Form the beginning bit
        $begining_bit = '<'.$this->name;
        foreach($this->attributes as $attrib_name => $attrib_value) {
            $begining_bit .= ' '.$attrib_name.'="'.$attrib_value.'"';
        }

        foreach ($this->flags as $flag) {
            $begining_bit .= ' '.$flag;
        }
        if ($this->separated_tag_for_ending) {
            // We have to close the beginning of the first bit
            $begining_bit .= '>';
        }

        // Empty this thing
        $this->bits = [];

        // Add beginning bit to the list
        $this->bits[] = $begining_bit;

        // Add the children and content into this node
        foreach($this->children as $child) {
            $this->bits[] = $child;
        }

        if ($this->separated_tag_for_ending) {
            // Add ending bit to the list
            $this->bits[] = '</'.$this->name.'>';
        } else {
            // We didn't have separate bit for the beginning -> we have to close
            // this now
            $this->bits[] = ' />';
        }
    }

    /*
     * Apply this file
     */
    public function apply() {
        // Print out this
        print($this);
    }

    /*
     * Form the string that we wish to print
     */
    public function __toString() {
        $this->process();
        return implode('', $this->bits);
    }
}
