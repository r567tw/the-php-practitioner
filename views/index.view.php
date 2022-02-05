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
<?php include('views/partial/footer.php'); ?>

