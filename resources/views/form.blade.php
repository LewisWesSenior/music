<?php
echo "<form method='POST' action='result'>";?>
{{ csrf_field() }}

<?php echo "Username: <br> <input type='text' name='username'><br><br>Password:<br> <input type='text' name='password'>";
echo "<br><br><input type='submit' name='submit' value='Dont be a cock sucker'>";
echo "</form>";


?>
