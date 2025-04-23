<?php
$movies = [ 
    [ "title" => "wrong number",   "DOR" =>  "15/4/2020" , "IMDB" => 6.2] , 
    [ "title" =>  "karachi se lahore" ,   "DOR" => "2/1/2019" , "IMDB" =>  7.5] , 
    [ "title" => "mast magal" ,  "DOR" => "5/2/2001",  "IMDB" => 6],
   ];
  
   
   var_dump([0]);
?>
h
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  </head>
  <body>
  <div class="container">
     <div class="row my-5 justify-content-between">
     <?php foreach ( $movies as $movie ) : ?> 
      <div class="col-md-3">
        <div class="card p-3 border border-danger">
         <div class="card-title">
          <h3 class="text-danger"><?= $movie['title'] ?> </h3>
         </div>
         <div class="body">
           <p>
           <?= $movie['content'] ?>
           </p>
           <p>Date of Release: <span class="btn btn-dark px-2" ><?= $movie['DOR'] ?></span> </p>
           <h4>IMDB Ratings: <?= $movie['IMDB'] ?> </h4>
         </div>
        </div>
       </div>
     <?php endforeach; ?> 
     </div>
    </div>

 
     
    
    </div>
   </div>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
  </body>
</html>
 