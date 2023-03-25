<?php 
// echo "Hello ";
$login_name = $_POST["name"];
$login_email = $_POST["email"];
$login_password = $_POST["password"];

// $sinup_data = array($login_name,$login_email,$login_password);


?>

<!DOCTYPE HTML>
<html>  
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
  
  <p> please create trello Templates. </p>
  
  
  <form class="basic1" action="trello_templates.php" method="POST">
    Template Name : <input type="text" name="templatename" required placeholder="enter template name">
    Topic for card : <input type="text" name="topicforcreatecard" required placeholder="enter name for create card">
    
  <input value="submit" type="submit">
  
</form>

  

</body>
</html>