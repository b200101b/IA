

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Southern Online</title>
  </head>
  <body>
<div class="row" style="margin:auto;">
    <div class="col-3"></div>
    <div class="col-6">
        <div class="w3-container" style="margin-top:80px" id="showcase">
    <h1 class="w3-xxxlarge w3-text-red"><b>View Feedback Given.</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <p>Information provided in the feedback form will only be received by the post owner and will be kept strictly confidential.</p>
    <p><b>The following is the feedback given to this Valuation post by other users.</b></p>
</div>
       

        <table class="table table-bordered">
            <thead>
                <tr>
                    <td>Image</td>
                    <td>Title</td>
                    <td>Area Size</td>
                    <td>Style of Renovation</td>
                    <td>Time Spend </td>
                    <td>Description</td>
                </tr>
            </thead>
            <tbody>
                @foreach($valuations as $data)
                <tr>

                        <td><img src="{{asset('images/')}}/{{ $data->image}}" alt="" width="100" class="img-fluid"></td>
                        <td>{{ $data->title }}</td>
                        <td>{{ $data->area_size }}</td>
                        <td>{{ $data->style }}</td>
                        <td>{{ $data->time_spend }} </td>
                        <td>{{ $data->description }}</td>
                </tr>  
                @endforeach
            
            </tbody>
        </table>
<br><br><br>
        <h2 class=" w3-text-black"><b>Feedback Received.</b></h2>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <td>Feedback Provider Name</td>
                    <td>Email</td>
                    <td>Estimated budget Valuation</td>
                    <td>Completion time</td>
                    <td>Feedback comment </td>
  
                </tr>
            </thead>
            <tbody>
                @foreach($feedback as $data)
                <tr>
                    <td>{{ $data->Name }}</td>
                    <td>{{ $data->Email }}</td>
                    <td>{{ $data->budget }}</td>
                    <td>{{ $data->completeTime }} </td>
                    <td>{{ $data->description }}</td>

                @endforeach


       
</div>
<a href="http://127.0.0.1:8000/3home"> Click me back to Home Page</a>

</body></html>
