<?php include('../Templates/Cabecera.php')?>

  <div class ="col-4">
 <div class="card">
    <div class="card-header">registro Estudiantes </div>
    <div class="card-body">
        
    <div class="mb-2">
    <label for="" class="form-label">Id</label>
    <input
        type="text"
        class="form-control"
        name="Id"
        id="Id"
        aria-describedby="helpId"
        placeholder="Id"
    />
    
      </div>

      <div class="mb-2">
    <label for="" class="form-label">Nombre Estudiante</label>
    <input
        type="text"
        class="form-control"
        name="Nombre"
        id="Nombre"
        aria-describedby="helpId"
        placeholder="Nombre"
    />
    
      </div>
      <div class="mb-2">
    <label for="" class="form-label">Rol de estudiante</label>
    <input
        type="text"
        class="form-control"
        name="Rol"
        id="Rol"
        aria-describedby="helpId"
        placeholder="Rol_est"
    />
    
      </div>

      <div class="mb-2">
    <label for="" class="form-label">Sistema_Estilos</label>
    <input
        type="text"
        class="form-control"
        name="Estilos"
        id="Estilos"
        aria-describedby="helpId"
        placeholder="Estilos"
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
                <th scope="col">Nombre</th>
                <th scope="col">Rol_Est</th>
                <th scope="col">Sistema_Est</th>
                
        
            </tr>
        </thead>
        <tbody>
            <tr class="">
                <td scope="row">1</td>
                <td>Fernando</td>
                <td>Estudiante</td>
                <td>Aprendizaje</td>
               
        </tbody>
    </table>
</div>
<?php include('../Templates/Pie.php')?>