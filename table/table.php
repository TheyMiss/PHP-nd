<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php

$array = [
    'žp19' => [ 
        rand(1, 1000) => [ 
            'data' => date("Y-m-d"),
            'vardas' => strtoupper("Ryan"), 
            'pavarde' => strtoupper("Bell"), 
            'balai' => [ 
                'matematika' => rand(1,10), 
                'informacines' => rand(1,10), 
                'anglu' => rand(1,10) 
            ]
        ],
        rand(1, 1000) => [
            'data' => date("Y-m-d"), 
            'vardas' => strtoupper("Long"),
            'pavarde' => strtoupper("Washington"),
            'balai' => [
                'matematika' => rand(1,10), 
                'informacines' => rand(1,10), 
                'anglu' => rand(1,10) 
            ]
        ],

        rand(1, 1000) => [ 
            'data' => date("Y-m-d"), 
            'vardas' => strtoupper("Neill"), 
            'pavarde' => strtoupper("Young"), 
            'balai' => [ 
                'matematika' => rand(1,10), 
                'informacines' => rand(1,10), 
                'anglu' => rand(1,10) 
            ]
        ],
    ],
    'žp20' => [ 
        rand(1, 1000) => [ 
            'data' => date("Y-m-d"), 
            'vardas' => strtoupper("Henderson"), 
            'pavarde' => strtoupper("Jimenez"), 
            'balai' => [ 
                'matematika' => rand(1,10), 
                'informacines' => rand(1,10), 
                'anglu' => rand(1,10) 
            ]
        ],
        rand(1, 1000) => [
            'data' => date("Y-m-d"), 
            'vardas' => strtoupper("Baker"), 
            'pavarde' => strtoupper("Blaese"), 
            'balai' => [ 
                'matematika' => rand(1,10), 
                'informacines' => rand(1,10), 
                'anglu' => rand(1,10) 
            ]
        ],

        rand(1, 1000) => [ 
            'data' => date("Y-m-d"), 
            'vardas' => strtoupper("Rivera"), 
            'pavarde' => strtoupper("Watson"), 
            'balai' => [ 
                'matematika' => rand(1,10), 
                'informacines' => rand(1,10), 
                'anglu' => rand(1,10) 
            ]
        ],

        rand(1, 1000) => [ 
            'data' => date("Y-m-d"), 
            'vardas' => strtoupper("Marshall"), 
            'pavarde' => strtoupper("Kim"), 
            'balai' => [ 
                'matematika' => rand(1,10), 
                'informacines' => rand(1,10), 
                'anglu' => rand(1,10) 
            ]
        ],

    ]
];

?>
    <table>
    <tr>
    <th>Klasė</th>
    <th>Kodas</th>
    <th>Vardas</th>
    <th>Pavardė</th>
    <th>Kontrolinių darbų vidrukis</th>
    <th>Duomenų formatavimo date</th>
    </tr>
    <?php foreach($array as $klase => $mokiniai):?>
        <?php foreach($mokiniai as $data => $datainfo):?>
            <tr class="tr">
                <td><?=$klase;?></td>
                <td><?=$data;?></td>
                <td><?=$datainfo['vardas'];?></td>
                <td><?=$datainfo['pavarde'];?></td>
                <?php 
                $vidurkis = 0;
                foreach($datainfo['balai'] as $balas) {
                    $vidurkis += $balas;
                }
                ?>
                <td><?= round($vidurkis / 3)?></td>
                <td><?=$datainfo['data'];?></td>
            </tr>
        <?php endforeach; ?>
    <?php endforeach; ?>
    </table>
</body>