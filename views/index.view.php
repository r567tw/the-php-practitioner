<?php include('views/partial/head.php'); ?>

<?php include('views/partial/nav.php'); ?>

<ul>
    <?php foreach ($tasks as $task) { ?>
        <?php if ($task->completed()){ ?>
            <li><del><?php echo $task->title; ?></del></li>
        <?php }else{ ?>
            <li><?php echo $task->title; ?></li>
        <?php } ?>
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

