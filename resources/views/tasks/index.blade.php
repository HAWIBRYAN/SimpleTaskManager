<!DOCTYPE html>
<html>
<head>
    <title>Task Manager</title>
</head>
<body>
    <h1>Task List</h1>
    <a href="{{ route('tasks.create') }}">+ Add Task</a>
    <ul>
        @foreach($tasks as $task)
            <li>
                {{ $task->title }} - {{ $task->completed ? '✅' : '❌' }}
                <a href="{{ route('tasks.edit', $task) }}">Edit</a>
                <form action="{{ route('tasks.destroy', $task) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>
