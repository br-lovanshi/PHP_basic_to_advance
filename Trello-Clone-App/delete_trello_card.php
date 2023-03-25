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

<?php
    $feature_name = "<script>document.write(localStorage.removeItem('featureNameKey'));</script>";
    $platform_for_card = "<script>document.write(localStorage.removeItem('platformNameKey'));</script>";


   $templateString = $template_name . " of " . $feature_name . " for ". $platform_for_card;

?>
  
<div class="center1" >
  <p>Card hash been deleted.</p>
</div>
 <a href="create_trello_card.php"> <p> Create new trello card</p> </a>
  

</body>
</html>