<template>

<div id="pages">

	<header class="content__title">
		<h1>Resumen Ejecutivo</h1>
	</header>

	<div class="card">

		<div class="row" style="padding: 20px;">

			<div class="col-sm-4">
				<div class="form-group form-group--float">
					<input class="form-control form-control-lg" type="text">
					<label>Cantidad de Artículos</label>
					<i class="form-group__bar"></i>
				</div>
			</div>

			<div class="col-sm-4">
				<div class="form-group form-group--float">
					<input class="form-control form-control-lg" type="text">
					<label>Precio Total</label>
					<i class="form-group__bar"></i>
				</div>
			</div>

			<div hidden="true">{{date}}</div>

			<div class="col-sm-4">
				<div class="form-group form-group--float">
					<mdl-datepicker v-model="date" :default="date"></mdl-datepicker>
				</div>
			</div>

		</div>

	</div>

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
