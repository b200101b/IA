<div class="row" style="margin:auto;">
    <div class="col-3"></div>
    <div class="col-6">
        <br><br>
        <h3>ADD Recruiting </h3>
      
        <form action="{{route('addRecruitment')}}" method="POST" enctype="multipart/form-data"> <!--button type: submit-->
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
                <label for="Price">Budget</label>
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