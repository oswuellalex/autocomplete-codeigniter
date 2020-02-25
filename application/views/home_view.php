<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Autocomplete</title>
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/jquery-ui.css'?>">
</head>
<body>
    <div class="container">
        <div class="row">
            <h2>Autocomplete</h2>
        </div>
        <div class="row">
            <form>
                <div class="form-group">
                    <label>Nombre</label>
                    <input type="text" name="title" class="form-control" id="title" placeholder="Ingrese nombre a buscar.." autocomplete="off" style="width:500px;">
                </div>
                <table class="table table-bordered table-condensed">
                    <thead>
                        <tr>
                            <th>Categoria</th>
                            <th>Producto</th>
                            <th>UPC</th>
                            <th>Descripción</th>
                            <th>Precio Regular</th>
                            <th>Especial</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="text" name="categoria" readonly></td>
                            <td><input type="text" name="title" readonly></td>
                            <td><input type="text" name="upc" readonly></td>
                            <td><input type="text" name="descripcion" readonly></td>
                            <td><input type="text" name="precio" readonly></td>
                            <td><input type="text" name="precio_especial" readonly></td>
                        </tr>
                    </tbody>
                </table>
                <!--<div class="form-group">
                    <label>Description</label>
                    <textarea name="description" class="form-control" placeholder="Description" style="width:500px;"></textarea>
                </div>!-->
            </form>
        </div>
    </div>
 
    <script src="<?php echo base_url().'assets/js/jquery-3.3.1.js'?>" type="text/javascript"></script>
    <script src="<?php echo base_url().'assets/js/bootstrap.js'?>" type="text/javascript"></script>
    <script src="<?php echo base_url().'assets/js/jquery-ui.js'?>" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function(){

            $('#title').autocomplete({
                source: "<?php echo site_url('home/get_autocomplete');?>",
     
                select: function (event, ui) {

                    $('[name="title"]').val(ui.item.label); 
                    $('[name="categoria"]').val(ui.item.categoria); 
                    $('[name="upc"]').val(ui.item.upc); 
                    $('[name="descripcion"]').val(ui.item.descripcion); 
                    $('[name="precio"]').val(ui.item.precio); 
                    $('[name="precio_especial"]').val(ui.item.precio_especial);
                }
            });

        });
    </script>
 
</body>
</html>