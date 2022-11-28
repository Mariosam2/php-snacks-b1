<?php
$matches = [
    [
        'home' => [
            'name' => 'Olimpia Milano',
            'score' => 55,
        ],
        'visitors' => [
            'name' => 'Cantù',
            'score' => 60,
        ]
    ],
    [
        'home' => [
            'name' => 'Virtus Bologna',
            'score' => 70,
        ],
        'visitors' => [
            'name' => 'Boh che ne so',
            'score' => 90,
        ]
    ]
];

foreach ($matches as $match) {
    echo $match['home']['name'] . ' - ' . $match['visitors']['name'] . ' | ' . $match['home']['score'] . ' - ' . $match['visitors']['score'] . '<br>';
}
