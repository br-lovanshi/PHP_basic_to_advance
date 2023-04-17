<?php

class Main
{

    function create_object()
    {
        $ram = new Student("Brajesh", 21, 100);

        // echo ($ram);

        echo  $ram->getName();
    }
}
