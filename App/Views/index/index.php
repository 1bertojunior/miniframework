<h1>Index</h1>

<?php

    echo "Chegamos até index";

    echo "</br>";

    foreach($this->view->dados as $i => $value){
        echo $value['nome'];
        echo " ";
        echo $value['data'];
        echo "</br>";
    }


?>