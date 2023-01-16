<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Southern Online</title>
  </head>
  <body>

<div class="row" style="margin:auto;">
    <div class="col-3"></div>
    <div class="col-6">
        <br><br>
        <h3>Add New Post</h3>
      
        <form action="{{route('addPost')}}" method="POST" enctype="multipart/form-data"> <!--button type: submit-->
            <!--enctype="multipart/form-data" need when Upload image and file-->

            @csrf

            <div class="form-group">
                <label for="postImage">Image</label>
                <input class="form-control" type="file" id="postImage" name="postImage">
                
            </div>
            <div class="form-group">
                <label for="titletName">Title</label>
                <input class="form-control" type="text" id="titleName" name="titleName" required>
    
            </div>

            <div class="form-group">
                <label for="Price">Price</label>
                <input class="form-control" type="number" id="Price" name="Price" required>
    
            </div>

            <div class="form-group">
                <label for="Contact">Contact</label>
                <input class="form-control" type="number" id="Contact" name="Contact" required>
    
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

