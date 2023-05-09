<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Resources
    |--------------------------------------------------------------------------
    |
    | Configure the resources (models) you'd like to be available in Runway.
    |
    */

    'resources' => [
        \App\Models\StandardParent::class => [
            'name' => 'Parents',
            'handle' => 'parent',
            'title_field' => 'name',
            'blueprint' => [
                "sections" => [
                    "main" => [
                        "display" => "Main",
                        "fields" => [
                            [
                                "handle" => "name",
                                "field" => [
                                    "type" => "text",
                                    "instructions_position" => "above",
                                    "visibility" => "visible",
                                    "input_type" => "text",
                                    "antlers" => false
                                ]
                            ],
                            [
                                "handle" => "child",
                                "field" => [
                                    "mode" => "table",
                                    "resource" => "child",
                                    "create" => true,
                                    "display" => "Children",
                                    "type" => "has_many",
                                    "icon" => "has_many",
                                    "instructions_position" => "above",
                                    "visibility" => "visible",
                                ]
                            ]
                        ],
                        "__count" => 0
                    ]
                ]
            ]
        ],
        \App\Models\StandardChild::class => [
            'name' => 'Children',
            'handle' => 'child',
            'blueprint' => [
                "sections" => [
                    "main" => [
                        "display" => "Main",
                        "fields" => [
                            [
                                "handle" => "standard_parent_id",
                                "field" => [
                                    "max_items" => 1,
                                    "mode" => "typeahead",
                                    "create" => false,
                                    "display" => "Parent Item",
                                    "type" => "belongs_to",
                                    "icon" => "belongs_to",
                                    "listable" => "hidden",
                                    "instructions_position" => "above",
                                    "visibility" => "visible",
                                    "resource" => "parent"
                                ]
                            ],
                            [
                                "handle" => "name",
                                "field" => [
                                    "type" => "text",
                                    "instructions_position" => "above",
                                    "visibility" => "visible",
                                    "input_type" => "text",
                                    "antlers" => false
                                ]
                            ],
                        ],
                        "__count" => 0
                    ]
                ]
            ]
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Disable Migrations?
    |--------------------------------------------------------------------------
    |
    | Should Runway's migrations be disabled?
    | (eg. not automatically run when you next vendor:publish)
    |
    */

    'disable_migrations' => false,

];
