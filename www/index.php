<?php
require 'db.php';
require 'Student.php';

$student = new Student($pdo);
$all = $student->getAll();
?>
<h2>Сохранённые данные:</h2>
<ul>
<?php foreach($all as $row): ?>
    <li><?= $row['username'] ?>, <?= $row['number_of_ticket'] ?> лет, <?= $row['genre'] ?>, <?= $row['time'] ?>, Согласие: <?= $row['subscribe'] ? 'Да' : 'Нет' ?></li>
<?php endforeach; ?>
</ul>

<a href="form.html">Заполнить форму</a>
