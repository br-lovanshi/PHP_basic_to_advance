<!DOCTYPE HTML>
<html>  
    <style>
    .center1 {
 padding: 50px;
  border: 2px solid blue;
      margin:100px;
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
  
<p>Your card is created.</p><br>
  
  <?php

$template_name = "<script>document.write(localStorage.getItem('templateNameKey'));</script>";
$topic_for_card = "<script>document.write(localStorage.getItem('topicNameKey'));</script>";

  $featureName = $_POST["topicName"];
  $platformName = $_POST["platformName"];

  ?>
   <script>
    localStorage.setItem('featureNameKey', '<?php echo $featureName;?>');
    localStorage.setItem('platformNameKey', '<?php echo $platformName;?>');
</script>
  
<?php
    $feature_name = "<script>document.write(localStorage.getItem('featureNameKey'));</script>";
    $platform_for_card = "<script>document.write(localStorage.getItem('platformNameKey'));</script>";


   $templateString = $template_name . " of " . $feature_name . " for ". $platform_for_card;

?>
  
<div class="center1" >
  <p> <?php echo $templateString ?> </p>
</div>
 <a href="assin_trello_card.php"> <p> assign trello card</p> </a>
  <a href= "delete_trello_card.php" <p>delete trello card</p></a>

</body>
</html>