<?php // -*- coding: utf-8 -*-

$GLOBALS['TL_DCA']['tl_module']['palettes']['coderform'] = '{title_legend},name,headline,type;{config_legend},projekt';


$GLOBALS['TL_DCA']['tl_module']['fields']['projekt'] = [
    'label'        => &$GLOBALS['TL_LANG']['tl_module']['projekt'],
    'exclude'      => false,
    'inputType'    => 'select',
    'foreignKey'   => 'tl_coder.study',
    'eval'         => ['multiple' => false, 'mandatory' => true, 'tl_class' => 'long' ],
    'sql'          => "int(10) unsigned NOT NULL default '0'"
];
