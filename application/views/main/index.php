<p>Home page</p>

<p>name : <?= $name ?></p>
<p>age : <?= $age ?></p>

<ul>
	<?php

	foreach ($numbers as $value) {
		echo "<li>".$value."</li>";
	}
	?>
</ul>