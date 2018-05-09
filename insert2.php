<html>
<?php
require("homepage.html");
mysqli_close();
?>
<form method="POST" action="../insert.php">
Name<input type="text" name="name">
<br>
<p>
Owner<input type="text" name="owner">
<br></p>
<p>
Species<input type="text" name="species">
<br></p>
<p>
Male<input type="radio" name="sex" value="male"><br>
Female<input type="radio" name="sex" value="female">
<br></p>
<p>
Birth<input type="date" name="birth">
<br></p>
<p>
Death<input type="date" name="death">
<br></p>
<input type="submit" value="Send">
<input type="reset" value="Clear">
</form>
</html>