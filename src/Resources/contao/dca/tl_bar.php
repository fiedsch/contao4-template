<?php // -*- coding: utf-8 -*-

$GLOBALS['TL_DCA']['tl_bar'] = [
    'config' => [
        'dataContainer'    => 'Table',
        'enableVersioning' => true,
        'sql' => [
            'keys' => [
                'id'          => 'primary',
            ],
        ],
    ], // config

    'list' => [
        'sorting' => [
            'mode' => 1,
            'fields' => ['foo'],
            'flag' => 1, // 1 == Sort by initial letter ascending
            'panelLayout' => 'filter;search,limit',
        ],
        'label' => [
            'fields' => ['foo'],
            'format' => '%s',
        ],
        'global_operations' => [
            'all' => [
                'label'      => &$GLOBALS['TL_LANG']['MSC']['all'],
                'href'       => 'act=select',
                'class'      => 'header_edit_all',
                'attributes' => 'onclick="Backend.getScrollOffset();"',
            ]            
        ],
        'operations' => [

            'edit' => [
                'label' => &$GLOBALS['TL_LANG']['tl_bar']['edit'],
                'href'  => 'act=edit',
                'icon'  => 'edit.gif',
            ],

            'copy' => [
                'label' => &$GLOBALS['TL_LANG']['tl_bar']['copy'],
                'href'  => 'act=copy',
                'icon'  => 'copy.gif',
            ],

            'delete' => [
                'label'      => &$GLOBALS['TL_LANG']['tl_bar']['delete'],
                'href'       => 'act=delete',
                'icon'       => 'delete.gif',
                'attributes' => 'onclick="if (!confirm(\''.$GLOBALS['TL_LANG']['MSC']['deleteConfirm'].'\')) return false; Backend.getScrollOffset();"',
            ],

            'show' => [
                'label' => &$GLOBALS['TL_LANG']['tl_bar']['show'],
                'href'  => 'act=show',
                'icon'  => 'show.gif',
            ],
        ], // operations
    ], // list

    'palettes' => [
        '__selector__' => ['redirect'],
        'default'      => '{title_legend},foo',
    ], // palettes

    'fields' => [

        'id' => [
            'sql' => 'int(10) unsigned NOT NULL auto_increment',
        ],

        'tstamp' => [
            'sql' => "int(10) unsigned NOT NULL default '0'",
        ],

        'foo' => [
            'label'     => &$GLOBALS['TL_LANG']['tl_bar']['foo'],
            'exclude'   => true,
            'search'    => false,
            'filter'    => true,
            'inputType' => 'text',
            'eval'      => ['tl_style' => 'long'],
            'sql'       => "varchar(256) NOT NULL default ''",
        ],

    ], // fields

]; // $GLOBALS['TL_DCA']['tl_bar']
