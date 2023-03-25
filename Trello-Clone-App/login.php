<!DOCTYPE HTML>
<html>  
  <link rel="stylesheet" href="style.css">
<body>

  <div class="global-header mod-trello-blue">
<!--   <div class="logo"> Walcome  p</div> -->
  <div class="buttons-wrapper">
    <a href="create_trello_templates.php" class="global-header-section-button">Create Templates</a>
        <a href="trello_templates.php" class="global-header-section-button">Templates</a>
        <a href="create_trello_card.php" class="global-header-section-button">Create Cards</a>
<!--     <a href="#" class="global-header-section-button mod-primary">Sign Up</a> -->
  </div>
</div>
<!--Sinup page  -->
<form class="basic1"  action="create_trello_templates.php" method="post">
Name: <input type="text" name="name" required placeholder="enter name"><br>
  Email:<input type="email" name="email" required placeholder="enter email"> <br>
Password: <input type="password" name="password" required placeholder ="enter password"><br>
<input value="login" type="submit">
  
</form>

</body>
</html>
