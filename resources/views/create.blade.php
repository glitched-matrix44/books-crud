<!DOCTYPE html>
<html>
<head>
    <title>Add Book</title>
</head>
<body>
    <h1>Add Book (Package)</h1>

    <form action="{{ route('bookscrud.store') }}" method="POST">
        @csrf

        <label>Title:</label>
        <input type="text" name="title"><br><br>

        <label>Author:</label>
        <input type="text" name="author"><br><br>

        <label>Price:</label>
        <input type="text" name="price"><br><br>

        <label>Published Year:</label>
        <input type="number" name="published_year"><br><br>

        <button type="submit">Save</button>
    </form>

    <a href="{{ route('bookscrud.index') }}">Back</a>
</body>
</html>