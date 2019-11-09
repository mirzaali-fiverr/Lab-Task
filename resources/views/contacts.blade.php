  @extends('layout')
  @section('tittle','ali')
  @section('nav')
  @parent
  @endsection
  
  <!doctype html>
  <html lang="en">
    <head>
      <!-- Required meta tags -->

      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

      <title>Bootstrap Lab</title>
       <style>
body {background-image: url("images/A2.jpg");>}

</style>
    </head>
    <body>
    @section('contacts')
    
      
<br>
 <div class="container" style="padding-top:150px;">
          <div class="row">
        <div class="col-sm-4" style="color:white;">
                           <center>

                          <h2>Facebook</h2>
                          <center> <img src="images/fb.png" class="img-fluid" style="height:200px;"></center>
                     </center>
              </div>
              <div class="col-sm-4" color:white;">
                      <center>
                     <h2 style="color:white">Instagram</h2>
                    <center> <img src="images/IG.png" class="img-fluid" style="height:200px;"></center>
                </center>
         </div>
         <div class="col-sm-4" style=" color:white;">
              <center>
             <h2>Twitter</h2>
              <center> <img src="images/tw.png" class="img-fluid" style="height:200px;"></center>
        </center>
  </div>
  
          </div>
      </div>

      </div>
      @endsection
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
  </html>
