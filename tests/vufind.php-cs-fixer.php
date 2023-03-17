<?php

$finder = new PhpCsFixer\Finder();
$finder->in(__DIR__)
    ->in(__DIR__ . '/../src');

$rules = [
    '@PSR12' => true,
    'align_multiline_comment' => true,
    'array_syntax' => ['syntax' => 'short'],
    'binary_operator_spaces' => [
        'default' => 'single_space',
        'operators' => ['=' => null, '=>' => null],
    ],
    'cast_spaces' => ['space' => 'none'],
    'class_attributes_separation' => ['elements' => ['method' => 'one', 'property' => 'one']],
    'concat_space' => ['spacing' => 'one'],
    'ereg_to_preg' => true,
    'function_typehint_space' => true,
    'is_null' => true,
    'linebreak_after_opening_tag' => true,
    'list_syntax' => ['syntax' => 'short'],
    'lowercase_cast' => true,
    'magic_constant_casing' => true,
    'native_function_casing' => true,
    'no_blank_lines_after_class_opening' => true,
    'no_empty_comment' => true,
    'no_empty_phpdoc' => true,
    'no_empty_statement' => true,
    'no_extra_blank_lines' => true,
    'no_leading_import_slash' => true,
    'no_leading_namespace_whitespace' => true,
    'no_mixed_echo_print' => true,
    'no_singleline_whitespace_before_semicolons' => true,
    'no_spaces_around_offset' => true,
    'no_unneeded_control_parentheses' => true,
    'no_unneeded_curly_braces' => true,
    'no_unused_imports' => true,
    'no_useless_return' => true,
    'no_whitespace_before_comma_in_array' => true,
    'no_whitespace_in_blank_line' => true,
    'non_printable_character' => true,
    'ordered_imports' => true,
    'phpdoc_no_access' => true,
    'php_unit_dedicate_assert_internal_type' => true,
    'php_unit_expectation' => true,
    'php_unit_method_casing' => true,
    'php_unit_mock' => true,
    'php_unit_no_expectation_annotation' => true,
    'pow_to_exponentiation' => true,
    'single_line_after_imports' => true,
    'short_scalar_cast' => true,
    'standardize_not_equals' => true,
    'ternary_operator_spaces' => true,
    'ternary_to_null_coalescing' => true,
];

$cacheDir = __DIR__ . '/../.php_cs_cache';
if (!is_dir($cacheDir)) {
    mkdir($cacheDir);
}

$config = new PhpCsFixer\Config();
return $config->setCacheFile($cacheDir . '/.code.cache')
    ->setRiskyAllowed(true)
    ->setRules($rules)
    ->setFinder($finder);
