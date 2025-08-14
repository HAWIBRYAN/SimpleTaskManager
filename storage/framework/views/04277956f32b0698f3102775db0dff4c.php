<!DOCTYPE html>
<html>
<head>
    <title>Create Task</title>
</head>
<body>
    <h1>Create Task</h1>
    <form action="<?php echo e(route('tasks.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <input type="text" name="title" placeholder="Title" required>
        <textarea name="description" placeholder="Description"></textarea>
        <button type="submit">Save</button>
    </form>
</body>
</html>
<?php /**PATH /home/hawi/LavarelProjects/taskmaster/resources/views/tasks/create.blade.php ENDPATH**/ ?>