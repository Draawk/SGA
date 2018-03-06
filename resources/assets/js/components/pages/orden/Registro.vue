<template>

<div>
<header class="content__title">
  <h1>Orden -> Registro</h1>
</header>
<form class="search">
                    <div class="search__inner">
                        <input class="search__text" placeholder="Buscar artículos..." type="text">
                        <i class="zmdi zmdi-search search__helper" data-ma-action="search-close"></i>
                    </div>
                </form>
<div class="card">
  <div class="card-block">
                        <div class="table-responsive">
                            <table class="table table-bordered mb-0">
                                <thead>
              <tr>
                <th>Nombre Artículo</th>
                <th>Cantidad</th>                             
              </tr>
            </thead>
            <tbody>
              <tr>
                <th>Lapíz</th>
                <th>
                <button type="button" class="btn btn-danger waves-effect">-</button>
                &nbsp
                <input value="3" style="width: 60px;">
                &nbsp
                <button type="button" class="btn btn-success waves-effect">+</button>
                </th>
              </tr>
            </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="modal fade" id="modal-small" tabindex="-1" style="display: none;" aria-hidden="true">
                                <div class="modal-dialog modal-lg"> 
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title pull-left">Recibo de Venta</h5>
                                        </div>



<center><img src="https://i.imgur.com/vUeLlKV.png" width="500px" height="250px"></center>

                                        <div class="modal-body">


                                        			                        <div class="table">
                            <table class="table">
                                <thead>
              <tr>
                <th>Nombre Artículo</th>
                <th>Cantidad</th>
                <th>Valor Unitario</th>
                <th>Monto</th>                                
              </tr>
            </thead>
            <tbody>
              <tr>
                <th>Lapíz</th>
                <th>
                7
                </th>
              </tr>
            </tbody>
			<tbody>
              <tr>
                <th>Borrador</th>
                <th>
                2
                </th>
              </tr>
            </tbody>
                            </table>
                        </div>



                                        </div>



                                        <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-success waves-effect">Imprimir</button>
                                            <button type="button" class="btn btn-secondary waves-effect"  data-dismiss="modal">Cancelar</button>
                                 
                                        </div>
                                    </div>
                                </div>
                            </div>
</div>

<center><button type="button" class="btn btn-success waves-effect" data-toggle="modal" data-target="#modal-small">Generar</button></center>

</div>

</template>
<script>
import 'vue-mdl-datepicker/dist/vue-mdl-datepicker.css';
import MdlDatepicker from 'vue-mdl-datepicker';
 
export default {
  name: 'MyComponent',
  components: { MdlDatepicker },
  data() {
    return {
      date: new Date(),
    };
  },
};
</script>
