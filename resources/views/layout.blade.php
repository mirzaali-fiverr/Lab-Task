<html>
<head>
<title> mirza - @yield('title')</title>




<meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

  
 
    <body>
    @section('nav')
      <div class="container-fluid">
          <div class="row"  style="background-color: #565454; height 50px; padding-top:8px; color: white; ">
            <div class="col-sm-1">
                
              </div>
            <div class="col-sm-1">
                <a href="{{url('home')}}"  style="text-decoration:none; color:white;"><p>Home</p></a>
              </div>
             <div class="col-sm-1" style="padding:0px;">
                 <a href="{{url('services')}}" style="text-decoration:none; color:white;"><p>Services</p></a>
              </div>
               <div class="col-sm-1"style="padding-left:8px;">
                  <a href="{{url('contacts')}}" style="text-decoration:none; color:white;"><p>Contact</p></a>
              </div>
               <div class="col-sm-1" style="padding-left:16px;">
                  <a href="{{url('about')}}" style="text-decoration:none; color:white;"><p>About</p></a>
              </div>      
                  
        </div>
      </div>
      @show()
<br>


      </div>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 




<div class="container">
          <div class="row">

          @yield('about') 
 
          </div>
      </div>
    <div class="container">
          <div class="row">

          @yield('home') 
 
          </div>
      </div>
      <div class="container">
          <div class="row">

          @yield('services') 
 
          </div>
      </div>
      <div class="container">
          <div class="row">

          @yield('contacts') 
 
          </div>
      </div>



</body>







</html>