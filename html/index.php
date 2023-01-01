<?php require($_SERVER['DOCUMENT_ROOT'] . "/template/header.php");
setTitle("Html");
setDescription("Html library");
?>

<h1>Html</h1>
<h2>Links</h2>
<h3>External</h3>
<?php brush('html', '<a href="https://ya.ru" target="_blank" rel="nofollow">Ya</a>'); ?>
<h3>Email</h3>
<?php brush('html', '<a href="mailto:test@test.ru">test@test.ru</a>') ?>
<h3>Phone</h3>
<?php brush('html', '<a href="tel:+71111111111">+7(111)-111-11-11</a>') ?>
<h3>Bookmarks</h3>
<?php brush('html', '<a href="#C4">Chapter 4</a>
<h2 id="C4">Chapter 4</h2>') ?>
<h2>Favicon</h2>
<?php brush('html', '<link rel="icon" type="image/x-icon" href="/images/favicon.ico">'); ?>


<?php require($_SERVER['DOCUMENT_ROOT'] . "/template/footer.php"); ?>