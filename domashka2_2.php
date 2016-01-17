<pre>
<?php
$tarelki = 7;
$sredstvo = 50;
while ($tarelki>0 && $sredstvo>0) {
    $sredstvo -= 0.5;
    --$tarelki;
    echo ($tarelki.' осталось средства: '.$sredstvo.'<br>');
    }
if ($sredstvo>0) {echo ('<br>'."Тарелки закончились. Осталось средства: ".$sredstvo);}
else if ($tarelki>0) {echo ('<br>'."Моющее средство закончилось. Осталось тарелок: ".$tarelki);}

?>
</pre>

