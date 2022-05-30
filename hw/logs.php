<?php

include_once('model/visits.php');
$visitDays = getVisitsDay();

var_dump($visitDays);

?>
<h1>Дни логов</h1>
<ul>
    <? foreach ($visitDays as $day): ?>
    <li>
        <a href="logs.php?dt=<?=$day?>"><?=$day?></a>
    </li>
    <? endforeach; ?>
</ul>
