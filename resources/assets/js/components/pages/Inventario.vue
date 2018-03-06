<template>
  <div>

    <header class="content__title">
      <h1>Inventario</h1>
    </header>

    <div class="card">
      <div class="card-block">
        <div class="table-responsive">
          <table class="table table-bordered mb-0">
            <thead>
              <tr>
                <th>ID</th>
                <th>Nombre Artículo</th>
                <th>Existencia</th>
                <th>Precio</th>
                <th>Opciones</th>                                
              </tr>
            </thead>
            <tbody>
              <tr>
                <th>1</th>
                <th>Lapíz</th>
                <th>14</th>
                <th>50.00 Bs.</th>
                <th><button type="button" class="btn btn-warning waves-effect" data-toggle="modal" data-target="#modal-default">Editar</button>&nbsp<button type="button" class="btn btn-danger waves-effect" data-toggle="modal" data-target="#modal-small">Eliminar</button></th>
              </tr>
              <tr>
                <th>2</th>
                <th>Bolígrafo</th>
                <th>9</th>
                <th>75.00 Bs.</th>
                <th><button type="button" class="btn btn-warning waves-effect" data-toggle="modal" data-target="#modal-default">Editar</button>&nbsp<button type="button" class="btn btn-danger waves-effect" data-toggle="modal" data-target="#modal-small">Eliminar</button></th>
              </tr>
              <tr>
                <th>3</th>
                <th>Borrador</th>
                <th>21</th>
                <th>45.00 Bs.</th>
                <th><button type="button" class="btn btn-warning waves-effect" data-toggle="modal" data-target="#modal-default">Editar</button>&nbsp<button type="button" class="btn btn-danger waves-effect" data-toggle="modal" data-target="#modal-small">Eliminar</button></th>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <div class="modal fade" id="modal-small" tabindex="-1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-sm"> 
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title pull-left">Confirmar acción</h5>
            </div>
            <div class="modal-body">
              Seguro que desea eliminar este registro?
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger waves-effect">Eliminar</button>
              <button type="button" class="btn btn-secondary waves-effect"  data-dismiss="modal">Cancelar</button>      
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade show" id="modal-default" tabindex="-1" style="display: none;" aria-hidden="true">
      <div class="modal-dialog modal-default">
        <div class="modal-content">
          <div class="modal-header">
          <h5 class="modal-title pull-left">Modificar registro</h5>
          </div>
          <div class="modal-body">
            <div class="row" style="padding: 20px;">

              <div class="col-sm-8">
                <div class="form-group form-group--float">
                  <input class="form-control" type="text">
                  <label>Lapíz</label>
                  <i class="form-group__bar"></i>
                </div>
              </div>

              <div class="col-sm-8">
                <div class="form-group form-group--float">
                  <input class="form-control" type="text">
                  <label>14</label>
                  <i class="form-group__bar"></i>
                </div>
              </div>

              <div class="col-sm-8">
                <div class="form-group form-group--float">
                  <input class="form-control" type="text">
                  <label>50</label>
                  <i class="form-group__bar"></i>
                </div>
              </div>

            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-warning waves-effect">Editar</button>
            <button type="button" class="btn btn-secondary waves-effect"  data-dismiss="modal">Cancelar</button>
          </div>
        </div>
      </div>
    </div>

  </div>
</template>

<script>
export default {
  name: 'test',
  data(){
    return {
      columns: [
        {
          label: 'Id',
          field: 'id',
          type: 'number',
          html: false,
          width: '50px',
          thClass: 'only-th-class',
        },
        {
          label: 'Name',
          field: 'name',
          html: false,
          filterable: true,
          tdClass: 'text-center'
        },
        {
          label: 'Age',
          field: 'age',
          type: 'number',
          html: false,
          filterable: true,
        },
        {
          label: 'Created On',
          field: 'createdAt',
          type: 'date',
          inputFormat: 'YYYYMMDD',
          outputFormat: 'MMM Do YY',
          filterable: false,
        },
        {
          label: 'Percent',
          field: 'btn',
          type: 'percentage',
          html: false,
          filterable: true,
        },
      ],
      rows: [
          {id:1, name:"John",age:"20",btn: 0.03343},
          {id:2, name:"Jane",age:"24",btn: 0.03343},
          {id:3, name:"Susan",age:"16",btn: 0.03343},
          {id:4, name:"Chris",age:"55",btn: 0.03343},
          {id:5, name:"Dan",age:"40",btn: 0.03343},
          {id:6, name:"John",age:"20",btn: 0.03343},
          {id:7, name:"Jane",age:"24",btn: 0.03343},
          {id:8, name:"Susan",age:"16",btn: 0.03343},
          {id:9, name:"Chris",age:"55",btn: 0.03343},
          {id:10, name:"Dan",age:"40",btn: 0.03343},
          {id:1, name:"John",age:"20",btn: 0.03343},
          {id:2, name:"Jane",age:"24",btn: 0.03343},
          {id:3, name:"Susan",age:"16",btn: 0.03343},
          {id:4, name:"Chris",age:"55",btn: 0.03343},
          {id:5, name:"Dan",age:"40",btn: 0.03343},
          {id:6, name:"John",age:"20",btn: 0.03343},
          {id:7, name:"Jane",age:"24",btn: 0.03343},
          {id:8, name:"Susan",age:"16",btn: 0.03343},
          {id:9, name:"Chris",age:"55",btn: 0.03343},
          {id:10, name:"Dan",age:"40",btn: 0.03343},
      ],
    };
  },
};
</script>