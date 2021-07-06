<?php

require __DIR__ . '/vendor/autoload.php';

use petarmarj\GoogleSitemapParser;
use petarmarj\Exceptions\GoogleSitemapParserException;

try {
    $posts = (new GoogleSitemapParser('https://www.watson.ch/robots.txt'))->parseFromRobots();
    foreach ($posts as $post) {
        print 'Post: ' . $post . "\n";
    }
} catch (GoogleSitemapParserException $e) {
    print $e->getMessage();
}
