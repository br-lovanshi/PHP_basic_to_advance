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
$user_name = $_POST["userName"];



$template_name = "<script>document.write(localStorage.getItem('templateNameKey'));</script>";
$topic_for_card = "<script>document.write(localStorage.getItem('topicNameKey'));</script>";

  // $featureName1 = $_POST["topicName"];
  // $platformName1 = $_POST["platformName"];

  ?>
   <script>
    localStorage.setItem('assingeeNameKey', '<?php echo $user_name;?>');
</script>
  
<?php
    $feature_name = "<script>document.write(localStorage.getItem('featureNameKey'));</script>";
    $platform_for_card = "<script>document.write(localStorage.getItem('platformNameKey'));</script>";
 $user_for_assign_card = "<script>document.write(localStorage.getItem('assingeeNameKey'));</script>";

   $templateString = $template_name . " of " . $feature_name . " for ". $platform_for_card;

?>
  
<div class="center1" >
  <p> <?php echo $templateString?> <br>
      <?php echo "this card is assign to " . $user_for_assign_card; ?>
  </p>
</div>
   <a href="new_trello_card.php"> <p> back to  trello card</p> </a>
</body>
</html>

