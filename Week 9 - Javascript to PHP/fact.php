<!DOCTYPE html>
<html>

<head>
    <title>Calculate Factorial</title>
    <link rel="icon" href="https://webstatic-sea.mihoyo.com/ys/event/e20210930card/images/wy.ee508638.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    //Calculate Factorial
    function fact($n)
    {
        if ($n == 0) {
            return 1;
        } else {
            return $n * fact($n - 1);
        }
    }
    ?>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-xl-5">
                <div class="container pt-5 mb-5">
                    <div class="card shadown rounding">
                        <div class="text-center mt-5">
                            <h2><b>Results</b></h2>
                        </div>
                        <div class="card-body">
                            <div class="container mb-3 px-5">
                                <h3 style="text-align: center;">
                                    <?php
                                    //Get value
                                    $nomor = $_GET["xNumber"];

                                    $hasilfactorial = fact($nomor);
                                    if (is_infinite($hasilfactorial)) {
                                        echo "The results is too big!";
                                    } else {
                                        echo $hasilfactorial;
                                    };
                                    ?>
                                </h3>
                            </div>
                            <div class="d-flex justify-content-center mt-4">
                                <button type="button" class="btn-success btn px-3" onclick="goBack();">Back</button>
                            </div>
                            <script>
                                function goBack() {
                                    window.history.back();
                                }
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>