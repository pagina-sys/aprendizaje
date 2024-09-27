<?php include('../Templates/Cabecera.php')?>

<?php include('../Secciones/Profesores.php')?>
<?php include_once'Configuraciones/bd.php';?>

<div class="col-4">

<div class="card">
    <div class="card-header">Profesores</div>
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
    <label for="" class="form-label">Apellido Nombre</label>
    <input
        type="text"
        class="form-control"
        name="Apellido_Nombre"
        id="Apellido_Nombre"
        aria-describedby="helpId"
        placeholder="Apellido_Nombre"
    />
   
    </div>

    <div class="mb-2">
    <label for="" class="form-label">Ci</label>
    <input
        type="text"
        class="form-control"
        name="Ci"
        id="Ci"
        aria-describedby="helpId"
        placeholder="Ci" />
    </div>

    <div class="mb-2">
    <label for="" class="form-label">Fecha_Nacimiento</label>
    <input
        type="text"
        class="form-control"
        name="Fecha_Nac"
        id="Fecha_Nac"
        aria-describedby="helpId"
        placeholder="Fecha_Nac"/>
   
    </div>

    <div class="mb-2">
    <label for="" class="form-label">Item</label>
    <input
        type="text"
        class="form-control"
        name="Item"
        id="Item"
        aria-describedby="helpId"
        placeholder="Item"/>
   
    </div>

    <div class="mb-2">
    <label for="" class="form-label">Genero</label>
    <input
        type="text"
        class="form-control"
        name="Genero"
        id="Genero"
        aria-describedby="helpId"
        placeholder="Genero" />
   </div>
    
    <div class="mb-2">
    <label for="" class="form-label">Cursos</label>
    <input
        type="text"
        class="form-control"
        name="Cursos"
        id="Cursos"
        aria-describedby="helpId"
        placeholder="Cursos"/>
   
    </div>

</div>
</div>


<input
    name=""
    id=""
    class="btn btn-primary"
    type="button"
    value="adicionar"/>
    <input
    name=""
    id=""
    class="btn btn-primary"
    type="button"
    value="eliminar"/>
    <input
    name=""
    id=""
    class="btn btn-primary"
    type="button"
    value="actualizar"/>
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
                <th scope="col">Id_Profesor</th>
                <th scope="col">Paterno</th>
                <th scope="col">Materno</th>
                <th scope="col">Nombre</th>
                <th scope="col">C_i</th>
                <th scope="col">Fecha_Nac</th>
                <th scope="col">Item</th>
                <th scope="col">Genero</th>
                <th scope="col">Cursos</th>

            </tr>
        </thead>
        <tbody>
            <tr class="">
                <td scope="row">1</td>
                <td>Tapia</td>
                <td>Bernal</td>
                <td>Jaime</td>
                <td>4545518 lp</td>
                <td>30/09/1978</td>
                <td>30</td>
                <td>Varon</td>
                <td>Informatica</td>
            </tr>
            
        </tbody>
    </table>
</div>

</div>


<?php include('../Templates/Pie.php')?>