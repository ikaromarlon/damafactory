<?php


return [
    /*
    |--------------------------------------------------------------------------
    | Data Edit defaults
    |--------------------------------------------------------------------------
    */
    'data_edit' => [
        'button_position' => [
            'save' => 'BL', // BR = Bottom Right, BL = Bottom Left, TL, TR
            'show' => 'TR',
            'modify' => 'TR',
            'undo' => 'TR',
            'delete' => 'BL',
            ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Data Cell sanitization defaults
    |--------------------------------------------------------------------------
    */
    'sanitize' => [
        'num_characters' => 50, // Number of characters to return during cell value sanitization. 0 = no limit
    ],

    /*
    |--------------------------------------------------------------------------
    | Field's default configuration
    |--------------------------------------------------------------------------
    */
    'fields' => [
        'attributes' => ['class' => 'form-control'],
        'date' => [
            'format' => 'd-m-Y H:i:s',
        ],
        'datetime' => [
            'format' => 'd-m-Y H:i:s',
            'store_as' => 'd-m-Y H:i:s',
        ],
    ],
];
