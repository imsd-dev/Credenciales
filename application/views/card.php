<!DOCTYPE html>
<html>
<head>
    <title>Tarjeta</title>
    <link href='loguito.png' rel='shortcut icon' type='image/png'>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style type="text/css">
    	body{
    		 background-color: #34495e;
         font-family: helvetica neue;
    	}
      #containerForm{padding: 5%;}
      @media only screen and (max-width: 974px) {
        #tablaescritorio{display: none;}
        
      }
      @media only screen and (min-width: 974px) {
        #tablamobile{display: none; }
        
      }
    </style>
</head>
<body>
  
  <!-- FORMULARIO CON INPUTS 
  <div id="containerForm" class="container" >
    <div  id="rowlogin" class="row"  >
      <div class="card bg-light text-dark" style="width: 100%; padding-bottom: 20px" > 
        <div class="card-body" style="text-align: center;">
          <h3><strong>Credencial de Funcionario</strong></h3> 
          <hr>
          <img class="card-img-top" src="http://sistemas.santodomingo.cl/credenciales/Fotos/<?php echo $user->nombre.' '.$user->apellido ?>.JPG" style="max-width: 200px;" alt="Foto">
        </div> 
        <div class="container" id="tablaescritorio">  
           VISTA ESCRITORIO 
          <table class="table" >
            <tbody>
              <tr>
                  <td>
                    <div class="form-group">
                      <label >Nombre solicitante</label>
                      <input type="text" class="form-control"  value="<?php echo $user->nombre.' '.$user->apellido ?>" readonly >
                    </div>            
                  </td>
                  <td>
                    <div class="form-group" >
                      <label>Rut</label>
                      <input type="text" class="form-control" value="<?php echo $user->rut.'-'.$user->dv;?>" readonly  >
                    </div>
                  </td>
              </tr>
              <tr>
                 <td>
                 <div class="form-group">
                    <label>Departamento / Unidad </label>
                    <input type="text" class="form-control" value="<?php echo $user->departamento; ?>" readonly  >
                  </div>
                </td> 
                <td>
                  <div class="form-group" >
                    <label>Dirección</label>
                    <input type="text" class="form-control"  value="<?php echo $user->direccion; ?>" readonly  >
                  </div>
                </td>
               
              </tr>
              <tr>
                <td>
                  <div class="form-group">
                    <label >Cargo</label>
                    <input type="text" class="form-control"  value="<?php echo $user->cargo;?>" readonly >
                  </div>
                </td>
                <td>
                  <div class="form-group">
                    <label >Teléfono de contacto </label>
                    <input type="text" class="form-control"   " value="<?php echo $user->telefono; ?>" readonly >
                  </div>        
                </td>
              </tr>
              <tr>
                <td>
                  <div class="form-group">
                    <label >Correo Electrónico</label>
                    <input type="text" class="form-control"   " value="<?php echo $user->mail; ?>" readonly >
                  </div>        
                </td>
              </tr>
            </tbody>
          </table>
        </div> 
            VISTA ESCRITORIO  
        <div class="container" id="tablamobile" style="width: 90%">  
           
                  <div class="form-group">
                      <label >Nombre solicitante</label>
                      <input type="text" class="form-control"  value="<?php echo $user->nombre.' '.$user->apellido ?>" readonly >
                    </div>  
                  <div class="form-group" >
                      <label>Rut</label>
                      <input type="text" class="form-control" value="<?php echo $user->rut.'-'.$user->dv;?>" readonly  >
                    </div>
                  <div class="form-group">
                    <label>Departamento / Unidad </label>
                    <input type="text" class="form-control" value="<?php echo $user->departamento; ?>" readonly  >
                  </div>
                  <div class="form-group" >
                    <label>Dirección</label>
                    <input type="text" class="form-control"  value="<?php echo $user->direccion; ?>" readonly  >
                  </div>
                  <div class="form-group">
                    <label >Cargo</label>
                    <input type="text" class="form-control"  value="<?php echo $user->cargo;?>" readonly >
                  </div>
                   <div class="form-group">
                    <label >Teléfono de contacto </label>
                    <input type="text" class="form-control"   " value="<?php echo $user->telefono; ?>" readonly >
                  </div>  
                 <div class="form-group">
                    <label >Correo Electrónico</label>
                    <input type="text" class="form-control"   " value="<?php echo $user->mail; ?>" readonly >
                  </div>   
        </div>

      </div>
    </div>    
  </div> --> 

   <!-- FORMULARIO CON INPUTS -->
  <div id="containerForm" class="container" >
    <div  id="rowlogin" class="row"  >
      <div class="card bg-light text-dark" style="width: 100%; padding-bottom: 20px" > 
        <div class="card-body" style="text-align: center;">
          <h3><strong>Credencial de Funcionario</strong></h3> 
          <hr>
          <img class="card-img-top" src="http://sistemas.santodomingo.cl/credenciales/Fotos/<?php echo $user->rut ?>.JPG" style="max-width: 200px;" alt="Foto">
        </div> 
        <div class="container" id="tablaescritorio">  
         <!-- VISTA ESCRITORIO -->
          <table class="table" >
            <tbody>
              <tr>
                  <td>
                    <div class="form-group">
                       <h6> <strong>Nombre solicitante </strong></h6>
                       <label> <?php echo $user->nombre.' '.$user->apellido ?> </label>
                     </div>            
                  </td>
                  <td>
                    <div class="form-group" >
                      <h6><strong>Rut</strong></h6>
                      <label><?php echo $user->rut.'-'.$user->dv;?> </label> 
                    </div>
                  </td>
              </tr>
              <tr>
                 <td>
                 <div class="form-group">
                     <h6><strong>Departamento / Unidad</strong> </h6>
                    <label><?php echo $user->departamento; ?> </label>
                  </div>
                </td> 
                <td>
                  <div class="form-group" >
                    <h6><strong>Dirección</strong></h6>
                    <label><?php echo $user->direccion; ?> </label> 
                  </div>
                </td>
               
              </tr>
              <tr>
                <td>
                  <div class="form-group">
                    <h6 ><strong>Cargo</strong></h6>
                    <label><?php echo $user->cargo;?> </label> 
                  </div>
                </td>
               <td <?php  if($user->mail == ""){ echo "hidden";} ?>>
                  <div class="form-group">
                     <h6 ><strong>Correo Electrónico</strong></h6>
                    <label><?php echo $user->mail; ?> </label>
                  </div>        
                </td>
              </tr>
              <tr>
                 <td <?php  if($user->telefono == 0){ echo "hidden";} ?>>
                  <div class="form-group"  >
                    <h6 ><strong>Teléfono de contacto</strong> </h6>
                    <label><?php if($user->telefono!= 0){ echo $user->telefono;} ?> </label> 
                  </div>        
                </td>
              </tr>
            </tbody>
          </table>
        </div> 
           <!-- VISTA ESCRITORIO  -->
        <div class="container" id="tablamobile" style="width: 90%">  
           
                  <div class="form-group">
                    <h6> <strong>Nombre solicitante </strong></h6>
                    <label> <?php echo $user->nombre.' '.$user->apellido ?> </label>
                  </div>  
                  <div class="form-group" >
                    <h6><strong>Rut</strong></h6>
                    <label><?php echo $user->rut.'-'.$user->dv;?> </label> 
                  </div>
                  <div class="form-group">
                    <h6><strong>Departamento / Unidad</strong> </h6>
                    <label><?php echo $user->departamento; ?> </label>
                  </div>
                  <div class="form-group" >
                    <h6><strong>Dirección</strong></h6>
                    <label><?php echo $user->direccion; ?> </label> 
                  </div>
                  <div class="form-group">
                    <h6 ><strong>Cargo</strong></h6>
                    <label><?php echo $user->cargo;?> </label> 
                  </div>
                   <div class="form-group" <?php if($user->telefono == 0){ echo "hidden";} ?> >
                    <h6 ><strong>Teléfono de contacto</strong> </h6>
                    <label><?php if($user->telefono!= 0){ echo $user->telefono;} ?> </label> 
                  </div>  
                  <div class="form-group"  <?php  if( $user->mail == ""){ echo "hidden";} ?>>
                    <h6 ><strong>Correo Electrónico</strong></h6>
                    <label><?php echo $user->mail; ?> </label> 
                  </div>   
        </div>

      </div>
    </div>    
  </div>  
</body>
</html>