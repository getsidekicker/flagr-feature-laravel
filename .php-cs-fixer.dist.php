<?php

$finder = PhpCsFixer\Finder::create()
    ->in([
        __DIR__ . '/src',
        __DIR__ . '/tests'
    ])
    ->name('*.php')
    ->ignoreDotFiles(true)
    ->ignoreVCS(true);

return (new PhpCsFixer\Config())
    ->setRules(
        [
            //@see https://www.php-fig.org/psr/psr-12/
            '@PSR12' => true,

            // arrays should be declared using short syntax [].
            'array_syntax' => ['syntax' => 'short'],

            // calling unset on multiple items should be done in one call.
            'combine_consecutive_unsets' => true,

            // multi-line whitespace before closing semicolon are prohibited.
            'multiline_whitespace_before_semicolons' => false,

            // convert double quotes to single quotes for simple strings.
            'single_quote' => true,

            // in method arguments and method call, there MUST NOT be a space before each comma and there MUST be one space after each comma.
            'method_argument_space' => [
                'on_multiline' => 'ignore',
            ],

            'blank_line_after_namespace' => true,

            // ensure there is no code on the same line as the PHP open tag and it is followed by a blank line.
            // we use defined('SYSPATH') or die('No direct script access.') everywhere, otherwise I would turn this on.
            'blank_line_after_opening_tag' => false,

            // an empty line feed should precede a return statement.
            'blank_line_before_statement' => [
                'statements' => ['return']
            ],

            // the body of each structure MUST be enclosed by braces, braces should be properly placed, body of braces should be properly indented.
            'braces' => [
                // whether single line lambda notation should be allowed
                'allow_single_line_closure' => true,
            ],

            // a single space should be between cast and variable.
            'cast_spaces' => true,

            // concatenation should be spaced according configuration.
            'concat_space' => ['spacing' => 'one'],

            // add missing space between function's argument and its typehint.
            'function_typehint_space' => true,

            // include/require and file path should be divided with a single space. File path should not be placed under brackets.
            'include' => true,

            // cast should be written in lower case.
            'lowercase_cast' => true,

            // there should be no empty lines after class opening brace.
            'no_blank_lines_after_class_opening' => true,

            // there should not be blank lines between docblock and the documented element.
            'no_blank_lines_after_phpdoc' => true,

            // there should not be any empty comments.
            'no_empty_comment' => true,

            // there should not be empty PHPDoc blocks.
            'no_empty_phpdoc' => true,

            // remove useless semicolon statements.
            'no_empty_statement' => true,

            // remove leading slashes in use clauses.
            'no_leading_import_slash' => true,

            // the namespace declaration line shouldn't contain leading whitespace.
            'no_leading_namespace_whitespace' => true,

            // operator => should not be surrounded by multi-line whitespaces.
            'no_multiline_whitespace_around_double_arrow' => true,

            // short cast bool using double exclamation mark should not be used.
            'no_short_bool_cast' => false,

            // single-line whitespace before closing semicolon are prohibited.
            'no_singleline_whitespace_before_semicolons' => true,

            // there MUST NOT be spaces around offset braces
            'no_spaces_around_offset' => true,

            // unused use statements must be removed.
            'no_unused_imports' => true,

            // ordering use statements.
            'ordered_imports' => [
                'sort_algorithm' => 'alpha'
            ],

            // in array declaration, there MUST NOT be a whitespace before each comma.
            'no_whitespace_before_comma_in_array' => true,

            // remove trailing whitespace at the end of blank lines.
            'no_whitespace_in_blank_line' => true,

            // there should not be space before or after object T_OBJECT_OPERATOR ->.
            'object_operator_without_whitespace' => true,

            // there should be exactly one blank line before a namespace declaration.
            'single_blank_line_before_namespace' => true,

            // standardize spaces around ternary operator.
            'ternary_operator_spaces' => true,

            // arrays should be formatted like function/method arguments, without leading or trailing single line space.
            'trim_array_spaces' => true,

            // unary operators should be placed adjacent to their operands.
            'unary_operator_spaces' => true,

            // in array declaration, there MUST be a whitespace after each comma.
            'whitespace_after_comma_in_array' => true,
        ]
    )->setFinder($finder);
