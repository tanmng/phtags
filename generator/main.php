<?php

include_once ('./vendor/autoload.php');

use Nette\PhpGenerator;
use Nette\PhpGenerator\Literal;

$all_tags = [
    [
        'text' => 'a',
    ],
    [
        'text' => 'abbr',
    ],
    [
        'text' => 'address',
    ],
    [
        'text' => 'applet',
    ],
    [
        'text' => 'area',
        'void' => true,
    ],
    [
        'text' => 'article',
    ],
    [
        'text' => 'aside',
    ],
    [
        'text' => 'audio',
    ],
    [
        'text' => 'b',
    ],
    [
        'text' => 'base',
        'void' => true,
    ],
    [
        'text' => 'basefont',
    ],
    [
        'text' => 'bdi',
    ],
    [
        'text' => 'bdo',
    ],
    [
        'text' => 'big',
    ],
    [
        'text' => 'blockquote',
    ],
    [
        'text' => 'body',
    ],
    [
        'text' => 'br',
        'void' => true,
    ],
    [
        'text' => 'button',
    ],
    [
        'text' => 'canvas',
    ],
    [
        'text' => 'caption',
    ],
    [
        'text' => 'center',
    ],
    [
        'text' => 'cite',
    ],
    [
        'text' => 'code',
    ],
    [
        'text' => 'col',
        'void' => true,
    ],
    [
        'text' => 'colgroup',
    ],
    [
        'text' => 'command',
        'void' => true,
    ],
    [
        'text' => 'data',
    ],
    [
        'text' => 'datalist',
    ],
    [
        'text' => 'dd',
    ],
    [
        'text' => 'del',
    ],
    [
        'text' => 'details',
    ],
    [
        'text' => 'dfn',
    ],
    [
        'text' => 'dialog',
    ],
    [
        'text' => 'dir',
    ],
    [
        'text' => 'div',
    ],
    [
        'text' => 'dl',
    ],
    [
        'text' => 'dt',
    ],
    [
        'text' => 'em',
    ],
    [
        'text' => 'embed',
        'void' => true,
    ],
    [
        'text' => 'fieldset',
    ],
    [
        'text' => 'figcaption',
    ],
    [
        'text' => 'figure',
    ],
    [
        'text' => 'font',
    ],
    [
        'text' => 'footer',
    ],
    [
        'text' => 'form',
    ],
    [
        'text' => 'frame',
    ],
    [
        'text' => 'frameset',
    ],
    [
        'text' => 'h1',
    ],
    [
        'text' => 'h2',
    ],
    [
        'text' => 'h3',
    ],
    [
        'text' => 'h4',
    ],
    [
        'text' => 'h5',
    ],
    [
        'text' => 'h6',
    ],
    [
        'text' => 'head',
    ],
    [
        'text' => 'header',
    ],
    [
        'text' => 'hr',
        'void' => true,
    ],
    [
        'text' => 'html',
    ],
    [
        'text' => 'i',
    ],
    [
        'text' => 'iframe',
    ],
    [
        'text' => 'img',
        'void' => true,
    ],
    [
        'text' => 'input',
        'void' => true,
    ],
    [
        'text' => 'ins',
    ],
    [
        'text' => 'kbd',
    ],
    [
        'text' => 'label',
    ],
    [
        'text' => 'legend',
    ],
    [
        'text' => 'li',
    ],
    [
        'text' => 'link',
        'void' => true,
    ],
    [
        'text' => 'main',
    ],
    [
        'text' => 'map',
    ],
    [
        'text' => 'mark',
    ],
    [
        'text' => 'meta',
        'void' => true,
    ],
    [
        'text' => 'meter',
    ],
    [
        'text' => 'nav',
    ],
    [
        'text' => 'noframes',
    ],
    [
        'text' => 'noscript',
    ],
    [
        'text' => 'object',
    ],
    [
        'text' => 'ol',
    ],
    [
        'text' => 'optgroup',
    ],
    [
        'text' => 'option',
    ],
    [
        'text' => 'output',
    ],
    [
        'text' => 'p',
    ],
    [
        'text' => 'param',
        'void' => true,
    ],
    [
        'text' => 'picture',
    ],
    [
        'text' => 'pre',
    ],
    [
        'text' => 'progress',
    ],
    [
        'text' => 'q',
    ],
    [
        'text' => 'rp',
    ],
    [
        'text' => 'rt',
    ],
    [
        'text' => 'ruby',
    ],
    [
        'text' => 's',
    ],
    [
        'text' => 'samp',
    ],
    [
        'text' => 'script',
    ],
    [
        'text' => 'section',
    ],
    [
        'text' => 'select',
    ],
    [
        'text' => 'small',
    ],
    [
        'text' => 'source',
        'void' => true,
    ],
    [
        'text' => 'span',
    ],
    [
        'text' => 'strike',
    ],
    [
        'text' => 'strong',
    ],
    [
        'text' => 'style',
    ],
    [
        'text' => 'sub',
    ],
    [
        'text' => 'summary',
    ],
    [
        'text' => 'sup',
    ],
    [
        'text' => 'svg',
    ],
    [
        'text' => 'table',
    ],
    [
        'text' => 'tbody',
    ],
    [
        'text' => 'td',
    ],
    [
        'text' => 'template',
    ],
    [
        'text' => 'textarea',
    ],
    [
        'text' => 'tfoot',
    ],
    [
        'text' => 'th',
    ],
    [
        'text' => 'thead',
    ],
    [
        'text' => 'time',
    ],
    [
        'text' => 'title',
    ],
    [
        'text' => 'tr',
    ],
    [
        'text' => 'track',
        'void' => true,
    ],
    [
        'text' => 'tt',
    ],
    [
        'text' => 'u',
    ],
    [
        'text' => 'ul',
    ],
    [
        'text' => 'var',
    ],
    [
        'text' => 'video',
    ],
    [
        'text' => 'wbr',
        'void' => true,
    ],
    // Special elements to help our work easier
    [
        'text' => 'html',
    ],
    [
        'text' => 'head',
    ],
    [
        'text' => 'body',
    ],
];
// All the tags we need to generate
//
$output_dir = 'out/';

// Delete all files frou out/
$files = glob($output_dir.'*'); // get all file names
foreach($files as $file){ // iterate files
  if(is_file($file))
    unlink($file); // delete file
}

// The very basic

foreach($all_tags as $tag) {
    $tag_text = $tag['text'];
    $class_name = ucwords($tag['text']);
    $void = array_key_exists('void', $tag) && $tag['void']; // If this element is a void one -> we don't need tag to close things down
    $final = array_key_exists('final', $tag) && $tag['final']; // Set this class to be final so that people cannot extend it

    // The output file
    $file = new PhpGenerator\PhpFile;
    $file
        -> addComment('This file is auto-generated.')
        -> setStrictTypes(); // adds declare(strict_types=1)

    $namespace = $file->addNamespace('PHTags');

    // The class that we need in this file
    $current_class = $namespace->addClass($class_name);
    $current_class
        -> setExtends('PHTags\HTMLTag')
        -> addComment("Implement the HTML tag ".$tag_text.'');

    if ($final) {
        $current_class
            -> setFinal();
    }

    if ($void) {
        $param = $current_class
            -> addProperty('separated_tag_for_ending', false)
            -> addComment('The element is a void one -> no need for closing tag');

        $param->setVisibility('protected');
    }

    $constructor_method = $current_class
        -> addMethod('__construct');

    if ($void) {
        // When this is void we just send back an empty set to parent
        // constructor
        $constructor_method
            -> setBody('parent::__construct(\''.$tag_text.'\', [], $attributes, $flags);');
    } else {
        $constructor_method
            -> setBody('parent::__construct(\''.$tag_text.'\', $children, $attributes, $flags);');
    }
    if (!$void) {
        // If this is void we have no need for this
        $constructor_method -> addParameter('children', []);
    }
    $constructor_method -> addParameter('attributes', []);
    $constructor_method -> addParameter('flags', []);

    /* print($file); */

    $printer = new Nette\PhpGenerator\PsrPrinter;
    // Write to the file
    file_put_contents(
        $output_dir.'/'.$class_name.'.php',
        $printer->printFile($file)
    );
}
