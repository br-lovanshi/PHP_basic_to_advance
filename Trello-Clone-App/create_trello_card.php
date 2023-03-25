<!DOCTYPE HTML>
<html>  
      <style>
     .center1 {
 padding: 50px;
  border: 2px solid blue;
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
  

  <p class="basic1" > please create trello Cards </p>

  <form action="new_trello_card.php" class="basic1" method="POST">
  Name or ID : <input type="text" name="topicName" required placeholder="enter topic name"><br>
  Platform Name :<input type="text" name="platformName" required placeholder="enter platform name"> <br>
    
  <input value="create" type="submit">
  
</form>

  
</body>
</html>