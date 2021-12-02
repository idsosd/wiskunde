<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body style="font-family: 'Times New Roman'; font-style: italic">
<div class="container" style="font-size: x-large">
    <div class="row">
        <div class="col"><h2>Voer de vergelijking in</h2>
            <form method="post" action="index2.php">
                <div class="row">
                    <div class="col">
                        <input type="number" name="a" class="form-control" placeholder="a">
                    </div>x +
                    <div class="col">
                        <input type="number" name="b" class="form-control" placeholder="b">
                    </div>=
                    <div class="col">
                        <input type="number" name="c" class="form-control" placeholder="c">
                    </div>x +
                    <div class="col">
                        <input type="number" name="d" class="form-control" placeholder="d">
                    </div>
                </div>
                <input class="btn btn-success" type="submit" value="LOS OP">
            </form></div>
        <div class="col"><h2>Voer de vergelijking in</h2>
            <form method="post" action="index3.php">
                <div class="row">
                    <div class="col">
                        <input type="text" name="vgl" class="form-control" placeholder="ax + b = cx + d">
                    </div>
                </div>
                <input class="btn btn-success" type="submit" value="LOS OP">
            </form>
        </div>
        <div class="col"><h2>Voer de vergelijking in</h2>
            <form method="post" action="index4.php">
                <div class="row">
                    <div class="col">
                        <input type="text" name="vgl" class="form-control" placeholder="">
                    </div>
                </div>
                <input class="btn btn-success" type="submit" value="LOS OP">
            </form>
        </div>
    </div>

</div>
</body>
</html>