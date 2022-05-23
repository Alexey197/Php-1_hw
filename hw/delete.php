<?php

	include_once('functions.php');
  $id = (int)($_GET['id'] ?? '');

  removeArticle($id);
?>
Article was removed!

<hr>
<a href="index.php">Move to main page</a>