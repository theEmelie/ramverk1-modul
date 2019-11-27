<?php
/**
 * Supply the basis for the navbar as an array.
 */
return [
    // Use for styling the menu
    "wrapper" => null,
    "class" => "my-navbar rm-default rm-desktop",

    // Here comes the menu items
    "items" => [
        [
            "text" => "Hem",
            "url" => "",
            "title" => "Första sidan, börja här.",
        ],
        [
            "text" => "Redovisning",
            "url" => "redovisning",
            "title" => "Redovisningstexter från kursmomenten.",
            "submenu" => [
                "items" => [
                    [
                        "text" => "Kmom01",
                        "url" => "redovisning/kmom01",
                        "title" => "Redovisning för kmom01.",
                    ],
                    [
                        "text" => "Kmom02",
                        "url" => "redovisning/kmom02",
                        "title" => "Redovisning för kmom02.",
                    ],
                    [
                        "text" => "Kmom03",
                        "url" => "redovisning/kmom03",
                        "title" => "Redovisning för kmom03.",
                    ],
                ],
            ],
        ],
        [
            "text" => "Om",
            "url" => "om",
            "title" => "Om denna webbplats.",
        ],
        [
            "text" => "Styleväljare",
            "url" => "style",
            "title" => "Välj stylesheet.",
        ],
        [
            "text" => "Verktyg",
            "url" => "verktyg",
            "title" => "Verktyg och möjligheter för utveckling.",
        ],
        [
            "text" => "Validera Ip",
            "url" => "ip",
            "title" => "Validera Ip adresser.",
            "submenu" => [
                "items" => [
                    [
                        "text" => "Ip Validering",
                        "url" => "ip",
                        "title" => "Validera Ip",
                    ],
                    [
                        "text" => "JSON Validering",
                        "url" => "jsonValidate",
                        "title" => "Validera JSON",
                    ],
                ],
            ],
        ],
        [
            "text" => "Väderprognos",
            "url" => "geoWeather",
            "title" => "Väderprognos.",
            "submenu" => [
                "items" => [
                    [
                        "text" => "Väderprognos",
                        "url" => "geoWeather",
                        "title" => "Väderprognos",
                    ],
                    [
                        "text" => "Väderprognos JSON",
                        "url" => "geoWeatherJson",
                        "title" => "Väderprognos JSON",
                    ],
                ],
            ],
        ],
    ],
];
