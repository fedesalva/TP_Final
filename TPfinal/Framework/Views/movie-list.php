<?php
    require_once('nav.php');
?>
<main class="py-5">
     <section id="listado" class="mb-5">
          <div class="container">
               <h2 class="mb-4">Movie List</h2>
               <table class="table bg-light-alpha">
                    <thead>
                         <th>Name</th>
                         <th>Language</th>
                         <th>Image</th>
                    </thead>
                    <tbody>
                         <?php
                              foreach($movieList as $movie)
                              {
                                   ?>
                                        <tr>
                                             <td><?php echo $movie->getName() ?></td>
                                             <td><?php echo $movie->getLanguage() ?></td>
                                             <td><img src= <?php echo "https://image.tmdb.org/t/p/w154" .$movie->getImage()?>> </td>
                                        </tr>
                                   <?php
                              }
                         ?>
                         </tr>
                    </tbody>
               </table>
          </div>
     </section>
</main>