<?php
    require_once('nav.php');

  /*$json=file_get_contents("https://api.themoviedb.org/3/movie/now_playing?api_key=5de19b6adfed779f6f309d15cb9b2da2");
    $result=json_decode($json,true);
    var_dump($result);

   $json=file_get_contents ("https://api.themoviedb.org/3/genre/movie/list?api_key=5de19b6adfed779f6f309d15cb9b2da2");
    $result=json_decode($json,true);
    var_dump($result);*/
?>
<main class="py-5">
     <section id="listado" class="mb-5">
          <div class="container">
               <h2 class="mb-4">Add cinema</h2>
               <form action="<?php echo FRONT_ROOT ?>Cinema/Add" method="post" class="bg-light-alpha p-5">
                    <div class="row">                         
                         <div class="col-lg-4">
                              <div class="form-group">
                                   <label for="">Name</label>
                                   <input type="text" name="cinema_name" value="" class="form-control">
                              </div>
                         </div>
                         <div class="col-lg-4">
                              <div class="form-group">
                                   <label for="">Address</label>
                                   <input type="text" name="cinema_address" value="" class="form-control">
                              </div>
                         </div>
                         <div class="col-lg-4">
                              <div class="form-group">
                                   <label for="">Capacity</label>
                                   <input type="number" name="cinema_capacity" value="" class="form-control">
                              </div>
                         </div>
                    </div>
                    <button type="submit" name="button" class="btn btn-dark ml-auto d-block">Agregar</button>
               </form>
          </div>
     </section>
     
</main>

