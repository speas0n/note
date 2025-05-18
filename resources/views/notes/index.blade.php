<!DOCTYPE html>
<html>
<head>
    <title>Notes</title>
</head>
<body>
    <h1>My Notes</h1>

    <a href="{{ route('notes.create') }}">+ New Note</a>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    @foreach($notes as $note)
        <div style="border:1px solid #ccc; margin:10px 0; padding:10px;">
            <h2>{{ $note->title }}</h2>
            <p>{{ Str::limit($note->content, 100) }}</p>
            <a href="{{ route('notes.show', $note) }}">View</a> |
            <a href="{{ route('notes.edit', $note) }}">Edit</a> |
            <form action="{{ route('notes.destroy', $note) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Delete this note?')">Delete</button>
            </form>
        </div>
    @endforeach
</body>
</html>