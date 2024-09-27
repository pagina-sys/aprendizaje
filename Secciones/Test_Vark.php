<?php include('../Templates/Cabecera.php')?>
<?php include('../Secciones/Test_Vark.php')?>
<div class="col-4">
<div class="card">
  <div class="card-header">Header</div>
  <div class="card-body">
   
  <div class="mb-2">
    <label for="" class="form-label">Id</label>
    <input
        type="text"
        class="form-control"
        name="id"
        id="id"
        aria-describedby="helpId"
        placeholder="Id" />
    
</div>

<div class="mb-2">
    <label for="" class="form-label">Pregunta</label>
    <input
        type="text"
        class="form-control"
        name="Pegunta"
        id=""
        aria-describedby="helpId"
        placeholder="Pregunta"/>

    <small id="helpId" class="form-text text-muted">Pregunta</small>
</div>



  <div class="col-1">
    <label for="" class="form-label">Opcion_a</label>
    <input
        type="checkbox"
        class="form-control"
        name=""
        id=""
        aria-describedby="emailHelpId"
        placeholder=""/>
    
  </div>

  <div class="col-1">
    <label for="" class="form-label">Opcion_b</label>
    <input
        type="checkbox"
        class="form-control"
        name=""
        id=""
        aria-describedby="emailHelpId"
        placeholder=""/>
    
  </div>

  <div class="col-1">
    <label for="" class="form-label">Opcion_c</label>
    <input
        type="checkbox"
        class="form-control"
        name=""
        id=""
        aria-describedby="emailHelpId"
        placeholder=""/>

  </div>

  <div class="col-1">
    <label for="" class="form-label">Opcion_d</label>
    <input
        type="checkbox"
        class="form-control"
        name=""
        id=""
        aria-describedby="emailHelpId"
        placeholder=""/>
 </div>

</div>

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
    Borrar
  </button>
  <button
    type="button"
    class="btn btn-primary"
  >
    Editar
  </button>
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
        <th scope="col">Op_1</th>
        <th scope="col">Op_2</th>
        <th scope="col">Op_3</th>
        <th scope="col">Op_4</th>
      </tr>
    </thead>
    <tbody>
      <tr class="">
        <td scope="row">SI</td>
        <td>NO</td>
        <td>NO</td>
        <td>NO</td>
      
    </tbody>
  </table>
</div>


</div>


<?php include('../Templates/Pie.php')?>