<!DOCTYPE html>
<html>
<head>
    <title>Edit Note</title>
</head>
<body>
    <h1>Edit Note</h1>

    <form action="{{ route('notes.update', $note) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Title:</label><br>
        <input type="text" name="title" value="{{ $note->title }}" required><br><br>

        <label>Content:</label><br>
        <textarea name="content" rows="5">{{ $note->content }}</textarea><br><br>

        <button type="submit">Update</button>
    </form>

    <a href="{{ route('notes.index') }}">Back to Notes</a>
</body>
</html>