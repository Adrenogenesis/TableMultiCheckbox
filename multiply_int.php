<?php
           for ($i = 1; $i <= 10; $i += 1){
                $i = rand(1, 10);
                $j=$_POST['calc'];
            
    Echo 'Table de multiplication de '.$j.'<br>';
       
        echo $i.' x '.$j.' = '.$i*$j.'<br>';
        $result = $i*$j;
        break;
}
     echo $_POST["data"];
                 if ($_POST["data"] == $result)
                       {
                           echo "Vous avez gagné !";
                       }
                       else
                       {
                            echo "Vous avez perdu !";
                       }
      ?>