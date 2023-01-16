<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Southern Online</title>
</head>

<body>

    <div class="row" style="margin:auto;">
        <div class="col-3"></div>
        <div class="col-6">
            <br><br>
            <h2>Add Your Needs Here！ </h2>
            <h3>Our contractor will give you an estimate budget. </h3>


            <form action="{{ route('addValuation') }}" method="POST" enctype="multipart/form-data">
                <!--button type: submit-->
                <!--enctype="multipart/form-data" need when Upload image and file-->

                    @csrf

                    <div class="form-group">
                        <label for="ValuationImage">Similar finished project or styles?</label>
                        <input class="form-control" type="file" id="ValuationImage" name="ValuationImage">

                    </div>




                    <div class="form-group">
                        <label for="titletName">Title</label>
                        <input class="form-control" type="text" id="titleName" name="titleName" required="?">

                    </div>
                    <div class="form-group">
                        <label for="size">Area size</label>
                        <input class="form-control" type="text" id="size" name="size" required>

                    </div>
                    <div class="form-group">
                        <label for="Style">Style Of Renovation</label>
                        <input class="form-control" type="text" id="Style" name="Style" required="">

                    </div>



                    <div class="form-group">
                        <label for="Spend">Time Spent On Renovation</label>
                        <input class="form-control" type="text" id="Spend" name="Spend" required>

                    </div>

                    <div class="form-group">
                        <label for="content">Description</label>
                        <input class="form-control" type="text" id="content" name="content" required>

                    </div>




                    <button type="submit" class="btn btn-primary">Add New</button>
            </form>


            <br><br>
        </div>
        <div class="col-3"></div>
    </div>

</body>

</html>
