<html>
<?php
require("homepage.html");
mysqli_close();
?>
<form method="POST" action="../delete.php">
Enter pet's name to delete: <input type="text" name="name">
<br>
<input type="submit" value="Send">
<input type="reset" value="Clear">
</form>
</html>