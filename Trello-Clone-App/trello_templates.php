<!DOCTYPE HTML>
<html>  
    <style>
    .center1 {
 padding: 50px;
  border: 2px solid blue;
      margin-top:100px;
}
  </style>
<link rel="stylesheet" href="style.css">
<body>

  <div class="global-header mod-trello-blue">

  <div class="buttons-wrapper">
    <a href="create_trello_templates.php" class="global-header-section-button">Create Templates</a>
        <a href="trello_templates.php" class="global-header-section-button">Templates</a>
        <a href="create_trello_card.php" class="global-header-section-button">Create Cards</a>
<!--     <a href="#" class="global-header-section-button mod-primary">Sign Up</a> -->
  </div>
</div>
<?php

$template_name1 =  $_POST["templatename"];
$topic_for_card1 = $_POST["topicforcreatecard"];

// $object = new stdClass();
// $object->name = $template_name1;
// $object->topic = $topic_for_card1;

// $dynamicarray = array();
// // array_push($dynamicarray,$object);
// for($i=0;$i<100;$i++)
// {
//     $dynamicarray[$i]=$object;
//   break;
// }
// print_r ($dynamicarray);

 // $local_store_object = new stdClass();
  
    // Added property to the object
    // $local_store_object->name = $templateString;
    // print_r($local_store_object)

?>

    <script>
    localStorage.setItem('templateNameKey', '<?php echo $template_name1;?>');
    localStorage.setItem('topicNameKey', '<?php echo $topic_for_card1;?>');
</script>
  
<?php
    $template_name = "<script>document.write(localStorage.getItem('templateNameKey'));</script>";
    $topic_for_card = "<script>document.write(localStorage.getItem('topicNameKey'));</script>";




   $templateString = $template_name . " of <" . $topic_for_card . "> for [platform name]";
 
?>

<div   class="center1">
  <p> <?php echo $templateString ?> </p>
</div>

  <br>
<a  class="basic1"  href="create_trello_card.php"> <p>click here to create trello card</p></a>
</body>
</html>
