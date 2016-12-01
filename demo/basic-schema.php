<?php
    /**
     * Created by PhpStorm.
     * User: matthes
     * Date: 01.12.16
     * Time: 12:47
     */


    return [
            "Customer" => [

                    "cols" => [
                            "id"    => [
                                    "type" => "VARCHAR(27)",
                                    "collation" => "UTF-8"
                            ]
                    ],
                    "indexes" => [
                            "index_name" => [
                                    "type" => "UNIQUE INDEX"
                            ]
                    ],
                    "fks" => [

                    ]
            ]
    ];