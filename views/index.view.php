<?php include('views/partial/head.php'); ?>

<?php include('views/partial/nav.php'); ?>

<ul>
    <?php foreach ($users as $user) { ?>
            <li><?php echo $user->name; ?></li>
    <?php } ?>
</ul>

<h1> GET test </h1>
<form action="name" method="get">
    <input type="text" name="name">
    <button type="submit">送出</button>
</form>

<h1> POST test </h1>
<form action="helloworld" method="post">
    <input type="text" name="name">
    <button type="submit">送出</button>
</form>
<?php include('views/partial/footer.php'); ?>

