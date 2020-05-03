<?php

<div id="temps_div"></div>
// With Lava class alias
<?= Lava::render('LineChart', 'teste', 'temps_div') ?>

// With Blade Templates
@linechart('teste', 'temps_div')