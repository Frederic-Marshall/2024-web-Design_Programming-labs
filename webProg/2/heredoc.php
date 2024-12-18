<?php

echo "<h4>Инструкция HEDEROC</h4>";
$stringName = "Имя любимое мое";
$str4 = <<<"HEREDOC"
<div>
    Привет $stringName! <br>
</div>
HEREDOC;
echo $str4;
echo "<hr>";

