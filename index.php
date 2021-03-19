<?php
/*
Créer la filmographie d'Indiana II
Dans un fichier PHP, crée un tableau contenant 3 films 
dans lesquels joue notre ami Indiana (Utilise IMDB pour t'aider si besoin.)
Pense aux tableaux à plusieurs dimensions
Une fois le tableau créé, réalise une boucle pour afficher
la liste des films ainsi que les acteurs associés.
Pour chaque film, tu devras afficher :
Dans le film movie_title, les principaux acteurs sont :
name_of_the_actor_1, name_of_the_actor_2, name_of_the_actor_3.
*/

$film_Indian = [
    "Indiana Jones and the Last Crusade" => ["Harrison Ford","Sean Connery","Alison Doody"],
    "Indiana Jones and the Temple of Doom" => ["Harrison Ford","Kate Capshaw","Ke Huy Quan"],
    "Raiders of the Lost Ark" => ["Harrison Ford","Karen Allen","John Rhys-Davies" ]
];

foreach ($film_Indian as $film_title =>$actors){
    $message = "<hr>Dans le film $film_title , les principaux acteurs sont : ";
    $message=$message.implode(", ",$actors);  
    echo $message;  
};



