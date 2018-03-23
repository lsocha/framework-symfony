<!-- $name = $request->get('name', 'Darth Vader'); -->
<!-- $response->setContent(sprintf('Hello %s', htmlspecialchars($name, ENT_QUOTES, 'UTF-8'))); -->

<!-- example.com/src/pages/hello.php -->
<!-- <?php // $name = $request->get('name', 'World') ?> -->

<!-- Hello <?php // echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8') ?> -->

Hello <?php echo htmlspecialchars(isset($name) ? $name : 'World', ENT_QUOTES, 'UTF-8') ?>