<?php // -*- coding: utf-8 -*-

/**
 * Add back end modules
 */
array_insert($GLOBALS['BE_MOD'], 1, [
    'foo' => [
        'bar' => [
            'tables' => ['tl_bar'],
        ]
    ]
]);

$GLOBALS['TL_CSS'][] = 'bundles/fiedschc4template/backend.css';

/**
 * Add Front end modules
 */

$GLOBALS['FE_MOD']['foomtemplateodules'] = [
    'foomtemplateodule' => 'Fiedsch\C4Template\ModuleC4TemplateModule'
];