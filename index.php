<?php

if (isset($_POST['submit'])) {
    $num = $_POST['n1'];
    for ($z = 1; $z <= $num; $z++) {
        for ($a = $num - $z; $a >= 1; $a--) {
            echo '&nbsp';
        }

        for ($f = 1; $f <= $z; $f++) {
            echo "*";
        }

        echo "<br>";
    }
}
?>


<form method="post">
    <label>:Yek adad baray ijad andaze mosalas vared konid</label><br>
    <input type="number" name="n1"/><br>
    <input type="submit" name="submit" value="run"/>
</form>
