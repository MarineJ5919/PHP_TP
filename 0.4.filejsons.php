<?php
require_once '0.4.comments.php';

if (isset($_POST["name"]) &&  isset($_POST["comment"])) {
  addComment($_POST['name'], $_POST['comment']);

  // Récupération des commentaires
  $comments = getAllComments();

  // affichage des commentaires
  dumpAllComments($comments);
}