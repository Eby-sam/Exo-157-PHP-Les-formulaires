<?php

// Premiere ligne

$prenom = strip_tags(trim($_POST["fname"]));

echo "Bienvenue ". $prenom;
