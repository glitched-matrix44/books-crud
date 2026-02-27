<!DOCTYPE html>
<html>
<head>
    <title>Package Books</title>
</head>
<body>
    <h1>Books (From Package)</h1>

    <a href="{{ route('bookscrud.create') }}">Add New Book</a>

    @if($books->count())
        <table border="1" cellpadding="8">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Author</th>
                <th>Price</th>
                <th>Year</th>
                <th>Actions</th>
            </tr>

            @foreach($books as $book)
            <tr>
                <td>{{ $book->id }}</td>
                <td>{{ $book->title }}</td>
                <td>{{ $book->author }}</td>
                <td>{{ $book->price }}</td>
                <td>{{ $book->published_year }}</td>
                <td>
                    <a href="{{ route('bookscrud.edit', $book->id) }}">Edit</a>

                    <form action="{{ route('bookscrud.destroy', $book->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    @else
        <p>No books found.</p>
    @endif
</body>
</html>