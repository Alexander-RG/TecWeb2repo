<?php
    $competidores = [
        'Juan'=> 5, 
        'Rosa'=> 3, 
        'Ana'=> 2, 
        'Pedro'=> 2, 
        'Rocio'=> 3,          
        'Ale'=> 2, 
        'Juana'=> 4, 
        'Fabian'=> 2, 
        'Paty'=> 2.5, 
        'Belen'=> 1.5
    ];

    asort($competidores);
    echo ("<pre>");
    var_dump($competidores);
    echo ("<pre>");

    echo "Ganador:";
    var_dump($competidores['Belen']);
    echo ("<pre>");

    echo "Diferencia: ";
    var_dump($competidores['Ana'] - $competidores['Belen']);
    echo ("<pre>");
    
    echo "Ultimo:";
    var_dump($competidores['Juan']);
    echo ("<pre>");


    echo "Tres Puestos:"."<br>";
    var_dump($competidores['Belen']);
    echo ("<pre>");
    var_dump($competidores['Ana']);
    echo ("<pre>");
    var_dump($competidores['Pedro']);
    echo ("<pre>");


?>