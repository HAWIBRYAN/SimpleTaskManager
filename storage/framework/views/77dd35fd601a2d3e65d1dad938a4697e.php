<!DOCTYPE html>
<html>
<head>
    <title>Task Manager</title>
</head>
<body>
    <h1>Task List</h1>
    <a href="<?php echo e(route('tasks.create')); ?>">+ Add Task</a>
    <ul>
        <?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>
                <?php echo e($task->title); ?> - <?php echo e($task->completed ? '✅' : '❌'); ?>

                <a href="<?php echo e(route('tasks.edit', $task)); ?>">Edit</a>
                <form action="<?php echo e(route('tasks.destroy', $task)); ?>" method="POST" style="display:inline;">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit">Delete</button>
                </form>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</body>
</html>
<?php /**PATH /home/hawi/LavarelProjects/taskmaster/resources/views/tasks/index.blade.php ENDPATH**/ ?>