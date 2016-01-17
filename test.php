<pre>
	<?php
	$a = "Hello World!";
	var_dump ($a);
	var_dump(1, 1.2);
	var_dump(1 + 1.2, true);
	
	$arr = [1,'2', true];
	var_dump($arr);
	
	$obj = new StdClass();
	$obj->firstname = 'Vasya';
	$obj->lastname = 'Pupkin';
	var_dump($obj);
	
	//создание ресурса
	$fp = fopen('/etc/passwd', 'r'); //r - режим чтения файла
	var_dump($fp);
	?>
</pre>
