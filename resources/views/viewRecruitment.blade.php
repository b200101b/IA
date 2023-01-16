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
            <br><br>

            <a href="route('')" type="button" class="btn btn-primary">Review</a>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <td>Image</td>
                        <td>Title</td>
                        <td>Description</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($recruitments as $category)
                        <tr>
                            <td><img src="{{ asset('images/') }}/{{ $category->image }}" alt="" width="100"
                                    class="img-fluid"></td>
                            <td>{{ $category->title }}</td>
                            <td>{{ $category->description }}</td>
                            <td><a href="{{ route('editRecruitment', ['id' => $category->id]) }}"
                                    class="btn btn-warning btn-xs">Edit</a>&nbsp;
                                <a href="{{ route('deleteRecruitment', ['id' => $category->id]) }}"
                                    class="btn btn-danger btn-xs"
                                    onClick="return confirm('are you sure to delete?')">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <br><br>
        </div>
        <div class="col-3"></div>
    </div>

</body>

</html>
