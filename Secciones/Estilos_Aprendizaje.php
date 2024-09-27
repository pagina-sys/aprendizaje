<?php include('../Templates/Cabecera.php')?>
<?php include('../Secciones/Estilos_Aprendizaje.php')?>

<div class ="col-md-4">
 <div class="card">
    <div class="card-header">registro Estilos de Aprendizaje </div>
    <div class="card-body">
        
    <div class="mb-1">
    <label for="" class="form-label">Id_Estilo</label>
    <input
        type="text"
        class="form-control"
        name="Id"
        id="Id_estilo"
        aria-describedby="helpId"
        placeholder="Id_estilo"
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
        placeholder="Nombre"
    />
    
      </div>
      <div class="mb-2">
    <label for="" class="form-label">Caracteristica</label>
    <input
        type="text"
        class="form-control"
        name="caracteristicas"
        id="caracteristicas"
        aria-describedby="helpId"
        placeholder="Caracteristicas"
    />
    
      </div>

      <div class="mb-2">
    <label for="" class="form-label">Sugerencia_Estudiante</label>
    <input
        type="text"
        class="form-control"
        name="Sug.estudiante"
        id="Sug.estudiante"
        aria-describedby="helpId"
        placeholder="Sug.estudiante"
    />
    
      </div>
      <div class="mb-2">
      <label for="" class="form-label">Sugerencia_Profesor</label>
    <input
        type="text"
        class="form-control"
        name="Sug.Prof"
        id="Sug_Prof"
        aria-describedby="helpId"
        placeholder="Sug_Prof"
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
                <th scope="col">Caracteristica</th>
                <th scope="col">Sug_Prof</th>
                <th scope="col">Sugerencia_Estudiante</th>
               
        
            </tr>
        </thead>
        <tbody>
            <tr class="">
                <td scope="row">1</td>
                <td>Juan flores</td>
                <td>Test_Eval</td>
                <td>gjhggjgjdgajd</td>
                <td>hhhhhhhhh</td>
                
           
        </tbody>
    </table>


<?php include('../Templates/Pie.php')?>