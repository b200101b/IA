<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet'
        type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Southern Online</title>

    <style>
        html,
        body {
            min-height: 100%;
        }

        body,
        div,
        form,
        input,
        p {
            padding: 0;
            margin: 0;
            outline: none;
            font-family: Roboto, Arial, sans-serif;
            font-size: 14px;
            color: #666;
            line-height: 22px;
        }

        h1 {
            font-weight: 400;
        }

        h4 {
            margin: 22px 0 4px;
            color: #095484;
        }

        .testbox {
            display: flex;
            justify-content: center;
            align-items: center;
            height: inherit;
            padding: 3px;
        }

        form {
            width: 100%;
            padding: 20px;
            background: #fff;
            box-shadow: 0 2px 5px #ccc;
        }

        input {
            width: calc(100% - 10px);
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 3px;
            vertical-align: middle;
        }

        input:hover,
        textarea:hover {
            outline: none;
            border: 1px solid #095484;
        }

        .first-name {
            margin-bottom: 22px;
        }

        span {
            color: red;
        }

        th,
        td {
            width: 21%;
            padding: 15px 0;
            border-bottom: 1px solid #ccc;
            text-align: center;
            vertical-align: unset;
            line-height: 18px;
            font-weight: 400;
            word-break: break-all;
        }

        .first-col {
            width: 16%;
            text-align: left;
        }

        table {
            width: 100%;
        }

        textarea {
            width: calc(100% - 6px);
        }

        .btn-block {
            margin-top: 20px;
            text-align: center;
        }

        button {
            width: 150px;
            padding: 10px;
            border: none;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
            background-color: #095484;
            font-size: 16px;
            color: #fff;
            cursor: pointer;
        }

        button:hover {
            background-color: #0666a3;
        }

        @media (min-width: 568px) {

            th,
            td {
                word-break: keep-all;
            }
        }
    </style>
</head>

<body>

    <div class="row" style="margin:auto;">
        <div class="col-3"></div>
        <div class="col-6">
            <br><br>
            <h1 class="w3-xxxlarge w3-text-red"><b>Give FeedBack !</b></h1>
            <hr style="width:50px;border:5px solid red" class="w3-round">
            <p>Information provided in the feedback form will only be received by the post owner and will be kept
                strictly confidential.</p>
            <p><b>The following is the feedback given to this Valuation post owner.</b></p>
            <br>
            <br>

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
                    @foreach ($valuations as $data)
                        <tr>
                            <input type="hidden" name="id" value="{{ $data->id }}">

                            <td><img src="{{ asset('images/') }}/{{ $data->image }}" alt="" width="100"
                                    class="img-fluid"></td>
                            <td>{{ $data->title }}</td>
                            <td>{{ $data->area_size }}</td>
                            <td>{{ $data->style }}</td>
                            <td>{{ $data->time_spend }} </td>
                            <td>{{ $data->description }}</td>
                        </tr>
                </tbody>
                @endforeach
            </table>
            <br><br>
            <h1>Valuation Feedback Form （Contractors）</h1>
            <p>Thank you for taking the time to fill in my valuation feedback form. By providing us your feedback, it's
                mainly to provide contractors with the function of feedback to customers to help customers know the
                project valuation budget.</p>

            @foreach ($valuations as $data)
                <form action="{{ route('feed1') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <input type="hidden" name="post_id" value="{{ $data->id }}">



                    <div class="form-group">
                        <h4>Name</h4>
                        <input class="first-name" type="text"id="Name" name="Name"
                            placeholder="eg. William Chai" />
                    </div>

                    <div class="form-group">
                        <h4>Email<span>*</span></h4>
                        <input class="form-control" type="text" id="Email" name="Email" required
                            placeholder="eg. someone@hotmail.com">
                    </div>

                    <div class="form-group">
                        <h4>Estimated budget Valuation</h4>
                        <input class="form-control" type="text" id="budget" name="budget" required
                            placeholder="eg. based on quality of material budget about RM50k-75k">
                    </div>

                    <div class="form-group">
                        <h4>Completion time</h4>
                        <input class="form-control" type="text" id="completeTime" name="completeTime"
                            placeholder="eg. it take about 3 month to complete.">
                    </div>

                    <div class="form-group">
                        <h4>Please provide feedback based on the above Valuation content:</h4>
                        <textarea rows="5" type="text" id="description" name="description" required></textarea>

                        <small>* The information given within the Feedback Form will be received by post owner only and
                            are strictly confidential.</small>

                    </div>

                    <div class="btn-block">
                        <button type="submit">Send Feedback</button>
                    </div>

                </form>
            @endforeach
            ----------------------------------------------------------------------------------------------------------------------------------------
            <br><br>



            <br><br>
            <a href="http://127.0.0.1:8000/3home" type="button" class="btn btn-primary">Click me Back home!</a>

        </div>

        <div class="col-3"></div>
    </div>

</body>

</html>
