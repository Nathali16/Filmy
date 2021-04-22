
<!doctype html>
<html lang="en">
     <title>Sály</title>
    <style>
      .center
      {
        text-align: center;
      }
    </style>
    

    <body>
    <div class="container">  
      <br /><br /><br />  
      <h1 class="center">Sály</h1><br />  
      <form method="post" action="<?php echo base_url()?>Controller/sal">  
           <?php  
           if($this->uri->segment(2) == "inserted")  
           {  
                echo '<p class="text-success">Data vložena</p>';  
           }  
           if($this->uri->segment(2) == "updated")  
           {  
                echo '<p class="text-success">Data upravena</p>';  
           }  
           ?>  
           <?php  
           if(isset($user_data))  
           {  
                foreach($user_data->result() as $row)  
                {  
           ?>  
           <div class="form-group"> 
                <label>Zadejte název sálu</label>  
                <input type="text" name="nazev" value="<?php echo $row->nazev; ?>" class="form-control" />  
                <span class="text-danger"><?php echo form_error("nazev"); ?></span>  
           </div>  
           <div class="form-group">  
                <label>Zadejte kapacitu</label>  
                <input type="text" name="kapacita" value="<?php echo $row->kapacita; ?>" class="form-control" />  
                <span class="text-danger"><?php echo form_error("kapacita"); ?></span>  
           </div>  
           <div class="form-group">  
                <label>Je sál 3D?</label>  
                <input type="text" name="je3D" value="<?php echo $row->je3D; ?>" class="form-control" />  
                <span class="text-danger"><?php echo form_error("je3D"); ?></span>  
           </div>  
           <div class="form-group">  
                <label>Má sál prostorový zvuk?</label>  
                <input type="text" name="prostorovy_zvuk" value="<?php echo $row->prostorovy_zvuk; ?>" class="form-control" />  
                <span class="text-danger"><?php echo form_error("prostorovy_zvuk"); ?></span>  
           </div>  
           <div class="form-group">  
                <input type="hidden" name="hidden_id" value="<?php echo $row->id_sal; ?>" />  
                <input type="submit" name="update" value="Upravit" class="btn btn-info" />  
           </div>       
           <?php       
                }  
           }  
           else  
           {  
           ?>  
           <div class="form-group">  
                <label>Zadejte název sálu</label>  
                <input type="text" name="nazev" class="form-control" />  
                <span class="text-danger"><?php echo form_error("nazev"); ?></span>  
           </div>  
           <div class="form-group">  
                <label>Zadejte kapacitu</label>  
                <input type="text" name="kapacita" class="form-control" />  
                <span class="text-danger"><?php echo form_error("kapacita"); ?></span>  
           </div>  
           <div class="form-group">  
                <label>Je sál 3D?</label>  
                <input type="text" name="je3D" class="form-control" />  
                <span class="text-danger"><?php echo form_error("je3D"); ?></span>  
           </div>  
           <div class="form-group">  
                <label>Má sál prostorový zvuk?</label>  
                <input type="text" name="prostorovy_zvuk" class="form-control" />  
                <span class="text-danger"><?php echo form_error("prostorovy_zvuk"); ?></span>  
           </div>  
           <div class="form-group">  
                <input type="submit" name="insert" value="Vložit" class="btn btn-info" />  
           </div>       
           <?php  
           }  
           ?>  
      </form>  
      <br /><br /><br />  
      <div class="table-responsive">  
           <table class="table table-bordered">  
                <tr>  
                     <th>ID</th>  
                     <th>Název</th>  
                     <th>Kapacita</th>
                     <th>3D</th>  
                     <th>Prostorový zvuk</th>     
                     <th>Upravit</th>  
                     <th>Smazat</th>  
                </tr>  
           <?php  
           
                foreach($vypis_sal as $row)  
                {  
           ?>  
                <tr>  
                     <td><?php echo $row->id_sal; ?></td>  
                     <td><?php echo $row->nazev; ?></td>  
                     <td><?php echo $row->kapacita; ?></td> 
                     <td><?php echo $row->je3D; ?></td>
                     <td><?php echo $row->prostorovy_zvuk; ?></td> 
                     <td><a href="<?php echo base_url(); ?>Controller/uprav_data_sal/<?php echo $row->id_sal; ?>">Upravit</a></td>  
                     <td><a href="#" class="delete_data" id="<?php echo $row->id_sal; ?>">Smazat</a></td>
                </tr>  
           <?php       
                }  
              
           ?>  
           </table>  
      </div>  
      <script>  
      $(document).ready(function(){  
           $('.delete_data').click(function(){  
                var id = $(this).attr("id");  
                if(confirm("Opravdu chcete vymazat tuto položku?"))  
                {  
                     window.location="<?php echo base_url(); ?>Controller/vymaz_data_sal/"+id;  
                }  
                else  
                {  
                     return false;  
                }  
           });  
      });  
      </script>  
 </div>  
    </body>
</html>