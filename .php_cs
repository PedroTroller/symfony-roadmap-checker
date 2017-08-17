<?php

$finder = Symfony\CS\Finder\DefaultFinder::create();
$finder->in('src/');

PedroTroller\CS\Fixer\Contrib\YamlSymfonyServiceFileFixer::addPath('src/PedroTroller/SymfonyRoadmapChecker/Resources/config/services.yml');

return Symfony\CS\Config\Config::create()
    ->level(Symfony\CS\FixerInterface::SYMFONY_LEVEL)
    ->fixers(array(
        'align_double_arrow',
        'align_equals',
        'concat_with_spaces',
        'header_comment',
        'line_break_between_statements',
        'mbstring',
        'newline_after_open_tag',
        'ordered_use',
        'phpdoc_order',
        'phpspec',
        'short_array_syntax',
        'single_comment_expanded',
        'yaml_symfony_service_file',
    ))
    ->addCustomFixer(new PedroTroller\CS\Fixer\Contrib\LineBreakBetweenStatementsFixer())
    ->addCustomFixer(new PedroTroller\CS\Fixer\Contrib\MbstringFixer())
    ->addCustomFixer(new PedroTroller\CS\Fixer\Contrib\PhpspecFixer())
    ->addCustomFixer(new PedroTroller\CS\Fixer\Contrib\SingleCommentExpandedFixer())
    ->addCustomFixer(new PedroTroller\CS\Fixer\Contrib\YamlSymfonyServiceFileFixer())
    ->finder($finder)
;
