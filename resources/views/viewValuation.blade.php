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

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <td>Image</td>
                        <td>Title</td>
                        <td>Area Size</td>
                        <td>Style of Renovation</td>
                        <td>Time Spend </td>
                        <td>Description</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($valuations as $data)
                        <tr>
                            <td><img src="{{ asset('images/') }}/{{ $data->image }}" alt="" width="100"
                                    class="img-fluid"></td>
                            <td>{{ $data->title }}</td>
                            <td>{{ $data->area_size }}</td>
                            <td>{{ $data->style }}</td>
                            <td>{{ $data->time_spend }} </td>
                            <td>{{ $data->description }}</td>





                            <td>
                                <a href="{{ route('GiveFeedback', ['id' => $data->id]) }}"
                                    class="btn btn-danger btn-xs">Give Feedback </a>
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
