<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Coming Soon</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="favico.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link href="bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container text-center">
    <img src="images/drishtiw2.png" class="img-fluid" height="500" width="500">
    <div class="container2 text-center">
        <h1 class="text-uppercase text-center "> Coming Soon</h1>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script>

    function repeat() {
        $('h1').toggleClass('animated pulse');
        setTimeout(repeat, 1000);
    }

    $(document).ready(function () {
        repeat();
    });

</script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/three.js/88/three.min.js'></script>
<script src="js/index.js"></script>
</body>
</html>
