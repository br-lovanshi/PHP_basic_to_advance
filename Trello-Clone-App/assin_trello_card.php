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
  </div>
</div>
  

  <p class="basic1" > please assign trello Cards </p>

  <form action="assigned_trello_card1.php" class="basic1" method="POST">
  Name  : <input type="text" name="userName" required placeholder="enter user name"><br>
    
  <input value="assign" type="submit">
  
</form>

</body>
</html>