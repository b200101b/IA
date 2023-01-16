<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.hero-image {
  background-image: url('https://png.pngtree.com/thumb_back/fh260/back_our/20190614/ourmid/pngtree-home-renovation-creative-poster-background-template-image_122223.jpg');
  background-color: #cccccc;
  height: 842px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: 70% 70%;
  position: center;
}

.hero-text {
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
}

.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.button3 {border-radius: 8px;}

</style>
</head>
<body>

<div class="hero-image">
  <div class="hero-text">
    <h1 style="font-size:50px"><b>RENOVATION SERVICE APP</b></h1>
        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg" style="color:black" >
          
            {{ $slot }}


        </div>
        <div>
        </div>
  </div>
</div>



</body>
</html>






