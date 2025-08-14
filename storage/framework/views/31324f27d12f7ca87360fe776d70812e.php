<!DOCTYPE html>
<html>
<head>
    <title>Edit Task</title>
</head>
<body>
    <h1>Edit Task</h1>
    <form action="<?php echo e(route('tasks.update', $task)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <input type="text" name="title" value="<?php echo e($task->title); ?>" required>
        <textarea name="description"><?php echo e($task->description); ?></textarea>
        <button type="submit">Update</button>
    </form>
</body>
</html>
<?php /**PATH /home/hawi/LavarelProjects/taskmaster/resources/views/tasks/edit.blade.php ENDPATH**/ ?>