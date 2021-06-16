<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP And AJAX</title>
    <link rel="stylesheet" href="https://bootswatch.com/5/quartz/bootstrap.min.css">
</head>

<body style="
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;">
    <div class="container" style="width: 500px;">
        <form>
            Search user: <br />
            <input name="text" id="text" class="form-control" placeholder="Search...">
        </form>
        <p>Suggestions: <b id="output"></b></p>
    </div>
    <script src="./index.js"></script>
</body>

</html>