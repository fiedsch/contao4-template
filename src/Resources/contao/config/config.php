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

/*
 * Add Content Elements
 */

$GLOBALS['TL_CTE']['misc']['pin'] = 'Fiedsch\C4Template\ContentFoo';


/**
 * Add Front end modules
 */

$GLOBALS['FE_MOD']['foomtemplateodules'] = [
    'foomtemplateodule' => 'Fiedsch\C4Template\ModuleC4TemplateModule'
];

/*
 * Add CSS for the BE
 */
if (TL_MODE === 'BE') {
    $GLOBALS['TL_CSS'][] = 'bundles/fiedschc4template/backend.css';
}
