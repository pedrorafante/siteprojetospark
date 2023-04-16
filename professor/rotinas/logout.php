<?php
session_start();
session_destroy();
header("location:http://projetospark.com.br/professor/index.php?msg=logout");
