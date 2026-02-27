<!DOCTYPE html>
<html>
<head>
    <title>Edit Book</title>
</head>
<body>
    <h1>Edit Book (Package)</h1>

    <form action="{{ route('bookscrud.update', $book) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Title:</label>
        <input type="text" name="title" value="{{ $book->title }}"><br><br>

        <label>Author:</label>
        <input type="text" name="author" value="{{ $book->author }}"><br><br>

        <label>Price:</label>
        <input type="text" name="price" value="{{ $book->price }}"><br><br>

        <label>Published Year:</label>
        <input type="number" name="published_year" value="{{ $book->published_year }}"><br><br>

        <button type="submit">Update</button>
    </form>

    <a href="{{ route('bookscrud.index') }}">Back</a>
</body>
</html>