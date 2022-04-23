<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
   

</head>

<body>
    <div class="container">
        <form action="/posts" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">عنوان المقالة</label>
                <input type="text" name="title" id="title" class="form-control">
            </div>

            <div class="form-group">
                <label for="body">نص المقالة</label>
                <textarea name="body" id="body" cols="30" rows="10" class="form-control"></textarea>
            </div>

            <div class="form-group">
                <label for="author">كاتب المقالة</label>
                <input type="text" name="author" id="author" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">حفظ</button>
        </form>
    </div>

</body>

</html>
