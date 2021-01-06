<?php 
    if(!empty($_POST)){
        // print "<pre>";
        // print_r($_POST);
        // print "</pre>";

        $conn = mysqli_connect("localhost", "root","SODLEYla0102","supermart");
        $title = $_POST['title'];
        $preview = $_POST['preview'];
        $picture = $_POST['picture'];
        $body = $_POST['body'];
        $created = date('Y-m-d H:i:s', time());
        $updated = date('Y-m-d H:i:s', time());

        $query = "INSERT INTO news VALUES (null, '$title', '$picture', '$preview', '$body')";

        $result = mysqli_query($conn,$query);

        var_dump ($result);
    }
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="../../css/bootstrap.css">
    <link rel="stylesheet" href="../../css/bootstrap.min.js">
    <style>
        form{
            margin: 40px auto;
            width: 600px;
        }
        h1{
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
    <h1>Create news</h1>
    <form action="create.php" method="post">
        <div class="form-group">
            <label for="">Title</label>
            <input type="text" name="title" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Picture</label>
            <input type="file" name="picture" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Preview</label>
            <input type="text" name="preview" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Body</label>
            <textarea rows="8" name="body" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-success">
        </div>
    </form>
    </div>
</body>


</html>