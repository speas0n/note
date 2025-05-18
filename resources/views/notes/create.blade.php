<!DOCTYPE html>
<html>
<head>
    <title>Create Note</title>
</head>
<body>
    <h1>Create New Note</h1>

    <form action="{{ route('notes.store') }}" method="POST">
        @csrf
        <label>Title:</label><br>
        <input type="text" name="title" required><br><br>

        <label>Content:</label><br>
        <textarea name="content" rows="5"></textarea><br><br>

        <button type="submit">Save</button>
    </form>

    <a href="{{ route('notes.index') }}">Back to Notes</a>
</body>
</html>