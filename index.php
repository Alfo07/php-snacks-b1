<!-- 
    Snack_1 = Creiamo un array con alcune matches di basket, contenente il name della sqadra di casa, quella avversaria e i relativi punteggi. Stampare tutto a schermo
    Snack_2 = Passare come parametri GET name, mail e age e verificare: che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se è tutto ok stampare "Accesso riuscito" altrimenti "Accesso negato"
    Snack_3 = Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post
    Snack_4 = Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
    Snack_5 = Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo
    Snack_6 = Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde
    Snack_7 = Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno
 -->

<!DOCTYPE html>
<html lang="en">

<head>
    <mage charset="UTF-8">
    <mage http-equiv="X-UA-Compatible" content="IE=edge">
    <mage name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .teachers{
            border: 1px solid red;
        }
        .pm{
            border: 1px solid green;
        }
    </style>
    <title>SnacksB1</title>
</head>

<body>
    <!-- Snack_1 -->
    <section>
        <h1>Snack 1</h1>
        <?php
        $matches = [
            [
                'home' => 'Olimpia Milano',
                'guests' => 'Cantu',
                'homePoint' => '55',
                'guestPoint' => '60',
            ],
            [
                'home' => 'Boston Celtics',
                'guests' => 'Miami Heat',
                'homePoint' => '102',
                'guestPoint' => '82',
            ],
            [
                'home' => 'Bigua',
                'guests' => 'Trouville',
                'homePoint' => '103',
                'guestPoint' => '88',
            ],
            [
                'home' => 'Lyon-Villeurbanne',
                'guests' => 'Cholet',
                'homePoint' => '90',
                'guestPoint' => '83',
            ]
        ];
        for ($i = 0; $i < count($matches); $i++) {
        ?>
            <p>
                <?= $matches[$i]['home'] ?>
                <?= $matches[$i]['homePoint'] ?>
            <br>
                <?= $matches[$i]['guests'] ?>
                <?= $matches[$i]['guestPoint'] ?>
            </p>
        <?php
        }
        ?>
    </section>

    <!-- Snack_2 -->
    <section>
        <h1>Snack 2</h1>
        <?php
        $name = $_GET['name'];
        $mail = $_GET['mail'];
        $age = $_GET['age'];
        if (!empty($name) && !empty($mail) && !empty($age)) {
            $alert = 'Inserire parametri corretti';
            if (strlen($name) > 3 && strpos($mail, '@') !== false && strpos($mail, '.') !== false && is_numeric($age)) {
                $alert = 'Accesso consentito';
            } else {
                $alert = 'Accesso negato';
            };
        };
        ?>
        <p>
            <?php echo $alert; ?>
        </p>
    </section>

    <!-- Snack_3 -->
    <section>
        <h1>Snack 3</h1>
        <?php
        $post = [
            '10/01/2019' => [
                [
                    'title' => 'Post 1',
                    'author' => 'Michele Papagni',
                    'text' => 'Testo post 1'
                ],
                [
                    'title' => 'Post 2',
                    'author' => 'Michele Papagni',
                    'text' => 'Testo post 2'
                ],
            ],
            '10/02/2019' => [
                [
                    'title' => 'Post 3',
                    'author' => 'Michele Papagni',
                    'text' => 'Testo post 3'
                ]
            ],
            '15/05/2019' => [
                [
                    'title' => 'Post 4',
                    'author' => 'Michele Papagni',
                    'text' => 'Testo post 4'
                ],
                [
                    'title' => 'Post 5',
                    'author' => 'Michele Papagni',
                    'text' => 'Testo post 5'
                ],
                [
                    'title' => 'Post 6',
                    'author' => 'Michele Papagni',
                    'text' => 'Testo post 6'
                ]
            ],
        ];
        foreach ($post as $key => $value) {
            echo $key ?> <br> <?php
            for ($i = 0; $i < count($value); $i++) {
                echo "<span>{$value[$i]['title']} <br> </span>
                <span>{$value[$i]['author']} <br> </span>
                <span>{$value[$i]['text']}<br><br> </span>";
                }
            }?>
    </section>

    <!-- Snack_4 -->
    <section>
        <h1>Snack 4</h1>
        <?php
        $randomNum = [];
        while (count($randomNum) < 15){
            $number = rand(0, 15);
            if (!in_array($number, $randomNum)){
                $randomNum[] += $number;
            }
        }?>
        <pre>
            <?php var_dump($randomNum); ?>
        </pre>
    </section>

    <!-- Snack_5 -->
    <section>
        <h1>Snack 5</h1>
        <?php 
            $text = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, fuga eaque temporibus architecto sapiente voluptatum voluptas dicta quae doloribus deserunt at neque debitis rerum quibusdam accusamus ab sit quo perferendis facere reiciendis. Perferendis aliquid cum a repellat quibusdam! Rem quae pariatur est fugiat dolores, impedit commodi laborum odit et nisi dignissimos, esse at voluptatibus officiis, optio asperiores rerum dolorum sunt! Quasi libero molestias nam.Cum veniam corporis iure magni! Commodi voluptatum quo quod consequatur rerum alias hic assumenda in quis repudiandae et ullam tempora sunt molestias at vero est itaque, unde nihil labore cupiditate sapiente ipsum! Rem esse consequatur porro.';
            $sections = explode(".", $text);
            for($i = 0; $i < count($sections); $i++){
                $x = $sections[$i];
                echo "<span>{$x}.</span> <br>" ;
            }
        ?>
    </section>

    <!-- Snack_6 -->
    <section>
        <h1>Snack 6</h1>
        <?php
            $db = [
                'teachers' => [
                [
                    'name' => 'Michele',
                    'lastname' => 'Papagni'
                ],
                [
                    'name' => 'Fabio',
                    'lastname' => 'Forghieri'
                ]
            ],
            'pm' => [
                [
                    'name' => 'Roberto',
                    'lastname' => 'Marazzini'
                ],
                [
                    'name' => 'Federico',
                    'lastname' => 'Pellegrini'
                ]
            ]
            ];
        ?>
        <?php foreach($db as $key => $v) { ?>
            <div class="<?php echo $key; ?>">
                <?php echo $v[0]['name']." ".$v[0]['lastname']; ?>
            </div>
            <div class="<?php echo $key; ?>">
                <?php echo $v[1]['name']." ".$v[1]['lastname']; ?>
            </div> 
        <?php } ?>
    </section>

    <!-- Snack_7 -->
    <section>
        <h1>Snack 7</h1>
        <?php
            $boolean_59 = [
                    'Student' => [
                        [
                            'name' => 'Luca',
                            'lastname' => 'Rossi',
                            'votes' => [3, 5 , 9, 7]
                        ],
                        [
                            'name' => 'Marco',
                            'lastname' => 'Pugliese',
                            'votes' => [5, 6, 4, 7]
                        ],
                        [
                            'name' => 'Giulia',
                            'lastname' => 'Margheri',
                            'votes' => [4, 8, 6, 7]
                        ],
                        [
                            'name' => 'Cristina',
                            'lastname' => 'Carapelli',
                            'votes' => [7, 8, 9, 7]
                        ],
                        [
                            'name' => 'Paolo',
                            'lastname' => 'Bonolis',
                            'votes' => [8, 8, 7, 9]
                        ]
                    ]
                ];
        ?>
        <?php foreach($boolean_59['Student'] as $key => $v) { ?>
            <p>
                Nome: <?php echo $v['name']; ?> <br>
                Cognome: <?php echo  $v['lastname']; ?><br>
                Media voti:<?php echo $media = round((array_sum($v['votes']) / 4), 1); ?>
            </p>
        <?php }?>  
    </section>
</body>

</html>