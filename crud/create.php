<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Add new Book</title>
</head>
<body>
    <div class="container">
        <header class="d-flex justify-content-between my-4">
            <h1>Add new book</h1>
            <div>
                <a href="index.php" class="btn btn-primary">Back</a>
            </div>
        </header>
        <form action="process.php" method="post">
            <div class="form-group my-3">
                <input type="text" class="form-control" name="title" placeholder="Book Title:" required>
            </div>
            <div class="form-group my-3">
                <input type="text" class="form-control" name="author" placeholder="Author Name:" required>
            </div>
            <div class="form-group my-3">
                <select name="type" class="form-control" required>
                    <option value="">Select Book Type</option>
                    <option value="Adventure">Adventure</option>
                    <option value="Fantasy">Fantasy</option>
                    <option value="Scifi">Scifi</option>
                    <option value="Horror">Horror</option>
                </select>
            </div>
            <div class="form-group my-3">
                <input type="text" class="form-control" name="description" placeholder="Book Description:" required>
            </div>
            <div class="form-group my-3">
                <input type="submit" class="btn btn-success" name="create" value="Add Book">
            </div>
        </form>
    </div>
    
</body>
</html>
