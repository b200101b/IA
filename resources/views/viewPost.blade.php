<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Southern Online</title>
</head>

<body>
    <div class="row" style="margin:auto;">
        <div class="col-3"></div>
        <div class="col-6">


            <div class="w3-row-padding ">
                @foreach ($posts as $category)
                    <div class="w3-col m4 w3-margin-bottom">
                        <div class="w3-light-grey">
                            <img src="{{ asset('images/') }}/{{ $category->image }}" alt="John" style="width:100%">
                            <div class="w3-container">
                                <h5>Title: {{ $category->title }}</h5>
                                <p class="w3-opacity">Price: RM{{ $category->price }}</p>
                                <p class="w3-opacity">Contact: {{ $category->contact }}</p>

                                <p>{{ $category->description }}</p>
                                <a href="{{ route('editPost', ['id' => $category->id]) }}"
                                    class="btn btn-warning btn-xs">Edit</a>&nbsp;
                                <a href="{{ route('deletePost', ['id' => $category->id]) }}"
                                    class="btn btn-danger btn-xs"
                                    onClick="return confirm('are you sure to delete?')">Delete</a>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <br><br>
        </div>
        <div class="col-3"></div>
    </div>

    <!-- ======================================================================================================================================================== -->

    <div class="w3-container w3-teal">
        <h1>Summer Holiday</h1>
    </div>

    <div class="w3-content">
        @foreach ($posts as $category)
            <div class="w3-row w3-margin">
                <div class="w3-third">
                    <img src="{{ asset('images/') }}/{{ $category->image }}" style="width:100%;min-height:200px">
                </div>

                <div class="w3-twothird w3-container">
                    <h2>{{ $category->title }}</h2>
                    <p class="w3-opacity">Price: RM{{ $category->price }}</p>
                    <p class="w3-opacity">Contact: {{ $category->contact }}</p>
                    <p>
                        {{ $category->description }} </p>
                </div>
            </div>
        @endforeach
    </div>


</body>

</html>
