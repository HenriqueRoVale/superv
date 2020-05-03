<?php

<<<<<<< HEAD
<div id="temps_div"></div>
// With Lava class alias
<?= Lava::render('LineChart', 'teste', 'temps_div') ?>

// With Blade Templates
@linechart('teste', 'temps_div')
=======
@linechart('teste','poll_div');
{{-- Lava::render('BarChart', 'valor', 'poll_div') --}}
>>>>>>> 4fbc069c57b5221c58d40fe2931e9ec76ceefe91
