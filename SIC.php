<!DOCTYPE html>
<html>

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Protest+Strike&display=swap" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <title>RES Bank</title>
</head>

<body>
    <div class="header">
        <h1>RES Bank</h1>
        <a href="index.html">home</a>
    </div>
    <span style="text-align: right; user-select: none; background-color: rgb(122, 232, 255);" id="NBT">Toggle NavBar</span>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <br><br><br><br><br><br>
    <script>
        $(document).ready(function(){
            $("#NBT").click(function(){
                $(".header").slideToggle(1000);
            })
        });
    </script>
</body>

</html>