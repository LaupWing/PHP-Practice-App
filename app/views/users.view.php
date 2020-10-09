<?php require 'partials/head.php' ?>

<h1>All Users</h1>
<h1>Submit Your Name</h1>
<?php foreach ($users as $user) : ?>
   <li><?= $user->name ?></li>
<?php endforeach ?>
<form method="POST" action="/users">
   <input type="text" name="name">
</form>


<?php require 'partials/footer.php' ?>