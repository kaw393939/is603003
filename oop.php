<?php
   
   $program = new main();

   class main {
     public function __construct() {
       echo 'hello world';
     }

     public function __destruct() {
       echo '</br>done';
     }
   }
?>
