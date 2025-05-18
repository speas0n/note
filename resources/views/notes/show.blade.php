<!DOCTYPE html>
<html>
<head>
    <title>View Note</title>
</head>
<body>
    <h1>{{ $note->title }}</h1>
    <p>{{ $note->content }}</p>

    <a href="{{ route('notes.edit', $note) }}">Edit</a> |
    <a href="{{ route('notes.index') }}">Back to Notes</a>
</body>
</html>