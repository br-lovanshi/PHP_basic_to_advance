<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php echo '<p>Hello World</p>'; 

    // oprators
    $one = 1;
    $two = 2;
    echo $one+$two;
    echo "<br>";
    echo $one/$two;
    echo "<br>";
    echo $two-$one;
    echo "<br>";
    echo $one != $two;
    echo "<br>";
    print_r($one);

    // function
    echo "<br>";
    function sumOfTwo($one,$two){
      return $one+$two;
    }

    echo sumOfTwo(10,20);

    // array
    $arrayPHP = array("one","two","three","four");
    print_r($arrayPHP);
    echo "<br>";
    echo $arrayPHP[2];
    echo "<br>";

    // loop

    forEach($arrayPHP as $arrIndex){
      echo $arrIndex. " ";
    }
       echo "<br>";

    for($ind = 0; $ind<count($arrayPHP);$ind++){
      echo $arrayPHP[$ind] . " ";
       
    }
     echo "<br>";

    $arrSize = count($arrayPHP)-1;

    while($arrSize >= 0){
      echo $arrayPHP[$arrSize] . " ";
        $arrSize--;
      
    }
  echo "<br>";
    
    ?> 

    <!--
    This script places a badge on your repl's full-browser view back to your repl's cover
    page. Try various colors for the theme: dark, light, red, orange, yellow, lime, green,
    teal, blue, blurple, magenta, pink!

    
    -->
    
    <script src="https://replit.com/public/js/replit-badge.js" theme="blue" defer></script> 
  </body>
</html>