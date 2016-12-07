<?php

$finder = PhpCsFixer\Finder::create()
    ->exclude('vendor')
    ->exclude('tests')
    ->in(__DIR__);

return PhpCsFixer\Config::create()
	->setUsingCache(false)
    ->setRules(array(
        '@PSR2' => true,
        'binary_operator_spaces' => true,
        'no_whitespace_in_blank_line' => true,
        'ternary_operator_spaces' => true
	))
    ->setFinder($finder);
