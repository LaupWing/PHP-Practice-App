<?php require 'partials/head.php' ?>
	<?php require 'partials/nav.php' ?>
	<h1>My Tasks</h1>
   <?php foreach ($tasks as $task) : ?>
      <li>
         <?php if ($task->completed) : ?>
            <strike><?= $task->description; ?></strike>
         <?php else : ?>
            <?= $task->description; ?>
         <?php endif; ?>
      </li>
   <?php endforeach; ?>
</body>

</html>