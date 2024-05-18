<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>hello</p>
    <form action="/upload-avatar" method='post' enctype="multipart/form-data">
    @csrf
    <input type="file" name='avatar' required>
    <button>Save</button>
    </form>
</body>
</html>
