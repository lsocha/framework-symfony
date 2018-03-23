<?php $name = $request->get('name', 'Millennium Falcon') ?>

Hello <?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8') ?>