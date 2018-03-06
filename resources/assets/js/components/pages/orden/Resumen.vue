<template>
<div>
<header class="content__title">
  <h1>Orden -> Resumen</h1>
</header>
<div class="card">
  <div class="card-block">
                        <div class="table-responsive">
                            <table class="table table-bordered mb-0">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Código</th>
                                    <th>Fecha</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th>1</th>
                                    <th>ORD-001</th>
                                    <th>28/01/2018</th>
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
                                            Seguro que desea Agregar este registro?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary waves-effect"  data-dismiss="modal">Cancelar</button>
                                            <button type="button" class="btn btn-info waves-effect">Agregar</button>                                 
                                        </div>
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