<!DOCTYPE html>
<html lang="en">
<head>
<title>Suc Project </title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

<style>
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}
hr.solid {
  border-top: 3px solid #bbb;
}

hr.dashed {
  border-top: 2px dashed #bbb;
}

</style>
</head>
<body>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-red w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
    <h3 class="w3-padding-64"><b>Renovation<br>Application</b></h3>
  </div>
  <div class="w3-bar-block">
    <a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Home</a> 
    <a href="#showcase" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Showcase</a> 
    <a href="#services" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Services</a> 
    <a href="#designers" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Mine</a> 
    <a href="#valuation" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Project Valuation</a> 
    <a href="#recruitment" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">View Recruitment</a> 

    <a href="#packages" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">View Post</a> 


    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Contact</a>
<br>

    <a href="{{ route('profile.show') }}" class="w3-bar-item w3-button w3-hover-white" >
                                        {{ __('User Profile') }}
    </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
             @csrf
        </form>

<!--=====================================================================-->
    <a class="w3-bar-item w3-button w3-hover-white" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Log Out') }}
    </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
             @csrf
        </form>
        
 
  </div>

</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-red w3-margin-right" onclick="w3_open()">☰</a>
  <span>Company Name</span>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">

  <!-- Header -->
  <div class="w3-container" style="margin-top:80px" id="showcase">
    <h1 class="w3-jumbo"><b>Renovation Project </b></h1>
    <h1 class="w3-xxxlarge w3-text-red"><b>Showcase.</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
  </div>
  
  <!-- Photo grid (modal) -->
  <div class="w3-row-padding">
    <div class="w3-half">
      <img src="https://www.mqdesignbuilder.com/images/projects/house/IMG_0549.jpg" style="width:100%" onclick="onClick(this)" alt="Concrete meets bricks">
      <img src="https://img.iproperty.com.my/angel/750x1000-fit/wp-content/uploads/sites/2/2019/07/img11.jpg" style="width:100%" onclick="onClick(this)" alt="Light, white and tight scandinavian design">
      <img src="https://angel-prod-public-content.s3.ap-southeast-1.amazonaws.com/wp-content/uploads/sites/2/2021/11/renovate-rumah-malaysia.jpg" style="width:100%" onclick="onClick(this)" alt="White walls with designer chairs">
    </div>

    <div class="w3-half">
      <img src="https://www.gid.com.my/wp-content/uploads/2019/03/service-renovation-house.jpg" style="width:100%" onclick="onClick(this)" alt="Windows for the atrium">
      <img src="https://cdn.tatlerasia.com/tatlerasia/i/2022/03/14110405-17124512-2-bewboc-s-8_cover_1500x1000.jpeg" style="width:100%" onclick="onClick(this)" alt="Bedroom and office in one space">
      <img src="https://i0.wp.com/www.techarp.com/wp-content/uploads/2021/08/PPN-Phase-1-house-renovation.jpg?fit=900%2C450&ssl=1" style="width:100%" onclick="onClick(this)" alt="Scandinavian design">
    </div>
  </div>

  <!-- Modal for full size images on click-->
  <div id="modal01" class="w3-modal w3-black" style="padding-top:0" onclick="this.style.display='none'">
    <span class="w3-button w3-black w3-xxlarge w3-display-topright">×</span>
    <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
      <img id="img01" class="w3-image">
      <p id="caption"></p>
    </div>
  </div>

  <!-- Services -->
  <div class="w3-container" id="services" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Services.</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <p>We are a renovation app. Let you find the most suitable decoration company for your home on the platform, and let the contractor choose you!</p>
    <p>Some text about our services - what we do and what we offer？ We strongly hope that users can post their own posts whether they are customers or contractors, material suppliers, etc.! To look for the highest quality! Best value for money!
    </p>
    
    <h3><b>You can create own post, recruitment or Valuation through the following three connections</b>:</h3>

    <p><button class="w3-btn w3-block w3-red w3-round-large"><b>Add Post</b></button></p>

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
    </div>
<br><br>
    <button class="w3-btn w3-white w3-border w3-border-red w3-round-large w3-block"><b>Add Recruitment</b></button>
    
    <div class="row" style="margin:auto;">
    <div class="col-3"></div>
    <div class="col-6">
        <br><br>
      <br>
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

    <br><br><br>
      <div>
        <p><button class="w3-btn w3-block w3-red w3-round-large"><b>Add Project Valuation</b></button></p>
      </div>

      <div class="row" style="margin:auto;">
    <div class="col-3"></div>
    <div class="col-6">
      <br><br>
      <form action="{{route('addValuation')}}" method="POST" enctype="multipart/form-data"> <!--button type: submit-->
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
</div>
</div>
  </div>

    <br><br><br><br>

  
  <!-- Designers -->
  <div class="w3-container" id="designers" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Mine.</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <p>This shows the content created on the user service.</p>
    <p>This will show the content about the Post and recruitment created by the user. The content of Post is mainly for contractors/businessmen to showcase their works, services provided, etc. The content of recruitment is mainly provided to customers to describe their requirements and budget, etc., so as to facilitate the contact of suitable contractors.</p>
    <p><b>Hope all users can find suitable contractors or users !</b></p>
    <br>

    
      <div class="w3-center w3-wide w3-large w3-opacity">
        <h3  style="text-shadow:1px 1px 0 #444"><b>My Post<hr class="solid"></b></h3>  
      </div>
  </div>

  <!-- The Team -->
  <div class="w3-row-padding ">
        @foreach($posts as $category)
        <div class="w3-col m4 w3-margin-bottom">
            <div class="w3-light-grey">
              <img src="{{asset('images/')}}/{{ $category->image}}" alt="John" style="width:100%">
                <div class="w3-container">
                    <h5>Title: {{ $category->title }}</h5>
                    <p class="w3-opacity">Price: RM{{$category->price }}</p>
                    <p class="w3-opacity">Contact: {{$category->contact }}</p>
                    <p>{{ $category->description }}</p>
                    <a href="{{route('editPost',['id'=>$category->id])}}" class="btn btn-warning btn-xs">Edit</a>&nbsp;
                    <a href="{{route('deletePost',['id'=>$category->id])}}" class="btn btn-danger btn-xs" onClick="return confirm('are you sure to delete?')">Delete</a>                  
                </div>
            </div>
        </div>
        @endforeach
    </div>

  <br><br><br><br>

        <div class="w3-center w3-wide w3-large w3-opacity">
            <h3  style="text-shadow:1px 1px 0 #444"><b>My Recruitment<hr class="solid"></b></h3>  
        </div>
        
        <div class="w3-row-padding "> 
        @foreach($recruitments as $xyz)
        <div class="w3-col m4 w3-margin-bottom">
            <div class="w3-light-grey">
              <img src="{{asset('images/')}}/{{ $xyz->image}}" alt="John" style="width:100%">
                <div class="w3-container">
                    <h5> {{ $xyz->title }}</h5>
                    <p class="w3-opacity">Budget: RM{{$xyz->price }}</p>
                    <p class="w3-opacity">Contact: {{$xyz->contact }}</p>
                    <p>{{ $xyz->description }}</p>
                    <a href="{{route('editRecruitment',['id'=>$xyz->id])}}" class="btn btn-warning btn-xs">Edit</a>&nbsp;
                    <a href="{{route('deleteRecruitment',['id'=>$xyz->id])}}" class="btn btn-danger btn-xs" onClick="return confirm('are you sure to delete?')">Delete</a>                  
                </div>
            </div>
        </div>
        @endforeach
    </div> 

    <br><br><br><br>
  <!-- ---------------------------------------------------------my valuation -->

      <div class="w3-center w3-wide w3-large w3-opacity">
          <h3  style="text-shadow:1px 1px 0 #444"><b>View My Valuation<hr class="solid"></b></h3>  
      </div>


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
                @foreach($valuations as $data)
                <tr>
                    <td><img src="{{asset('images/')}}/{{ $data->image}}" alt="" width="100" class="img-fluid"></td>
                    <td>{{ $data->title }}</td>
                    <td>{{ $data->area_size }}</td>
                    <td>{{ $data->style }}</td>
                    <td>{{ $data->time_spend }} </td>
                    <td>{{ $data->description }}</td>

                    <td><a href="{{route('feedback',['id'=>$data->id])}}" class="btn btn-warning btn-xs">View My Feedback</a>&nbsp;                
                      <a href="{{route('deleteValuation',['id'=>$data->id])}}" class="btn btn-danger btn-xs" onClick="return confirm('are you sure to delete?')">Delete</a>                  

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <br><br>
 
  <!-- ---------------------------------------------------------all valuation -->

  <div class="w3-container" id="valuation" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Project Valuation.</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <p>Some text our prices. Lorem ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure</p>
  </div>

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
                @foreach($valuationss as $data)
                <tr>
                    <td><img src="{{asset('images/')}}/{{ $data->image}}" alt="" width="100" class="img-fluid"></td>
                    <td>{{ $data->title }}</td>
                    <td>{{ $data->area_size }}</td>
                    <td>{{ $data->style }}</td>
                    <td>{{ $data->time_spend }} </td>
                    <td>{{ $data->description }}</td>
                    <td>
                        <a href="{{route('GiveFeedback',['id'=>$data->id])}}" class="btn btn-danger btn-xs" >Give Feedback </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <br><br>



      <hr class="dashed">
      <!-- ------------------------------------------------------------------------------give valuation -->

<br><br>
  <!-- Packages / Pricing Tables -->
  <div class="w3-container" id="packages" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>View Post.</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <p>Some text our prices. Lorem ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure</p>
  </div>

  <div class="w3-container w3-teal">
        <h2 class="w3-cursive">  Below are <b>posts</b> from all users. </h2>
    </div>
                
        <div class="w3-content">
            @foreach($postss as $category)

                        <div class="w3-row w3-margin">
                            <div class="w3-third">
                                <img src="{{asset('images/')}}/{{ $category->image}}"  style="width:100%;min-height:200px">
                            </div>

                            <div class="w3-twothird w3-container">
                                <h3>{{ $category->title }}</h3>
                                <p class="w3-opacity">Price: RM{{$category->price }}</p>
                                <p class="w3-opacity">Contact: {{$category->contact }}</p>
                                <p>
                                {{ $category->description }}                            </p>
                            </div>
                        </div>
            @endforeach            
        </div>



<br>

        <hr class="dashed">
<!--===========================================================================================================-->
<!-- Packages / Pricing Tables -->

<br><br>
<div class="w3-container" id="recruitment" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>View Recruitment.</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <p>Some text our prices. Lorem ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure</p>
  </div>

  <div class="w3-container w3-black">
        <h2 class="w3-cursive">  Below are recruitments from all users. </h2>
    </div>
                
        <div class="w3-content">
            @foreach($allRecruitment as $category)

                        <div class="w3-row w3-margin">
                            <div class="w3-third">
                                <img src="{{asset('images/')}}/{{ $category->image}}"  style="width:100%;min-height:200px">
                            </div>

                            <div class="w3-twothird w3-container">
                                <h3>{{ $category->title }}</h3>
                                <p class="w3-opacity">Price: RM{{$category->price }}</p>
                                <p class="w3-opacity">Contact: {{$category->contact }}</p>
                                <p>
                                {{ $category->description }}                            </p>
                            </div>
                        </div>
            @endforeach            
        </div>

        <br>

        <hr class="dashed">
<br><br>
  <!-- Contact -->
  <div class="w3-container" id="contact" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Contact.</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <p>Do you want us to style your home? Fill out the form and fill me in with the details :) We love meeting new people!</p>
    <form action="/action_page.php" target="_blank">
      <div class="w3-section">
        <label>Name</label>
        <input class="w3-input w3-border" type="text" name="Name" required>
      </div>
      <div class="w3-section">
        <label>Email</label>
        <input class="w3-input w3-border" type="text" name="Email" required>
      </div>
      <div class="w3-section">
        <label>Message</label>
        <input class="w3-input w3-border" type="text" name="Message" required>
      </div>
      <button type="submit" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom">Send Message</button>
    </form>  
  </div>


<!-- End page content -->
</div>

<!-- W3.CSS Container -->
<div class="w3-light-grey w3-container w3-padding-32" style="margin-top:75px;padding-right:58px"><p class="w3-right">SUC Final Year Project 2022©</a></p></div>

<script>
// Script to open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}
</script>

</body>
</html>
