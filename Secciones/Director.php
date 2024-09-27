<?php include('../Templates/Cabecera.php')?>

<div class ="col-4">
 <div class="card">
    <div class="card-header">Registro Director </div>
    <div class="card-body">
        
    <div class="mb-2">
    <label for="" class="form-label">Id_Director</label>
    <input
        type="text"
        class="form-control"
        name="Id_Director"
        id="Id_Director"
        aria-describedby="helpId"
        placeholder="Id_Director"
    />
    
      </div>

      <div class="mb-2">
    <label for="" class="form-label">Paterno </label>
    <input
        type="text"
        class="form-control"
        name="Paterno"
        id="Paterno"
        aria-describedby="helpId"
        placeholder="Paterno"
    />
    
      </div>
      <div class="mb-2">
    <label for="" class="form-label">Materno</label>
    <input
        type="text"
        class="form-control"
        name="Materno"
        id="Materno"
        aria-describedby="helpId"
        placeholder="Materno"
    />
    
      </div>

      <div class="mb-2">
    <label for="" class="form-label">Nombre</label>
    <input
        type="text"
        class="form-control"
        name="Nombre"
        id="Nombre"
        aria-describedby="helpId"
        placeholder="nombre"
    />
    
      </div>

      <div class="mb-2">
    <label for="" class="form-label">Carnet Identidad</label>
    <input
        type="text"
        class="form-control"
        name="Carnet_Identidad"
        id="Carnet_Identidad"
        aria-describedby="helpId"
        placeholder="Carnet_Identidad"
    />
    
      </div>

      <div class="mb-2">
    <label for="" class="form-label">Fecha_Nacimiento</label>
    <input
        type="text"
        class="form-control"
        name="Fecha_Nac"
        id="Fecha_Nac"
        aria-describedby="helpId"
        placeholder="Fecha_Nac"
    />
    
      </div>
      <div class="mb-2">
    <label for="" class="form-label">Item</label>
    <input
        type="text"
        class="form-control"
        name="Item"
        id="Item"
        aria-describedby="helpId"
        placeholder="Item"
    />
    
      </div>

      <div class="mb-2">
    <label for="" class="form-label">Genero</label>
    <input
        type="text"
        class="form-control"
        name="Genero"
        id="Genero"
        aria-describedby="helpId"
        placeholder="Genero"
    />
    
      </div>
  <div class="btn-group" role="group" aria-label="Button group name">
    <button
        type="button"
        class="btn btn-primary"
    >
        Agregar
    </button>
    <button
        type="button"
        class="btn btn-primary"
    >
        Editar
    </button>
    <button
        type="button"
        class="btn btn-primary"
    >
        Borrar
    </button>
       </div>
      </div>
    </div>  
 </div>

 <div class="col-8">
<div
    class="table-responsive"
>
    <table
        class="table table-primary"
    >
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Paterno</th>
                <th scope="col">Materno</th>
                <th scope="col">Nombre</th>
                <th scope="col">Ci</th>
                <th scope="col">Fecha_Nac</th>
                <th scope="col">Item</th>
                <th scope="col">Genero</th>
        
            </tr>
        </thead>
        <tbody>
            <tr class="">
                <td scope="row">1</td>
                <td>Flores</td>
                <td>Tapia</td>
                <td>Juan</td>
                <td>45455454 lp</td>
                <td>12/02/2022</td>
                <td>125</td>
                <td>varon</td>
           
        </tbody>
    </table>
</div>



 </div>

 
<?php include('../Templates/Pie.php')?>
