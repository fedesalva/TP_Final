<?php
    require_once('nav.php');
?>
<main class="py-5">
     <section id="listado" class="mb-5">
          <div class="container">
               <h2 class="mb-4">Listado de cinemas</h2>
               <table class="table bg-light-alpha">
                    <thead>
                         <th>Name</th>
                         <th>Address</th>
                         <th>Capacity</th>
                    </thead>
                    <tbody>
                   <form action="<?php echo FRONT_ROOT ?>Cinema/Delete" method="POST">
                         <?php
                              foreach($cinemaList as $cinema)
                              {
                                   ?>
                                        <tr>
                                             <td><?php echo $cinema->getName() ?></td>
                                             <td><?php echo $cinema->getAddress() ?></td>
                                             <td><?php echo $cinema->getCapacity() ?></td>
                                             <td>
                                             <button type="submit" name="btnRemove" class="btn btn-danger" value="<?php echo $cinema->getName(); ?>"> Eliminar </button>
                                            </td>
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