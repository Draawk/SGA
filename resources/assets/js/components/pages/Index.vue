	<template>
		<div id="pages">
			<header class="content__title">
				<h1>Resumen Ejecutivo</h1>
			</header>

			<div class="card">

				<div class="row">
				<div class="echart" style="margin-top:25px">
    			<IEcharts :option="bar1"></IEcharts>
  				</div>
  				</div>

				<div class="row" style="margin-top:25px">
				<div class="piechart">
    			<IEcharts :option="bar2"></IEcharts>
  				</div>
				<div class="piechart">
    			<IEcharts :option="bar3"></IEcharts>
  				</div>
				<div class="piechart">
    			<IEcharts :option="bar4"></IEcharts>
  				</div>
  				</div>

			</div>
		</div>
	</template>

<script>
import IEcharts from 'vue-echarts-v3/src/full.vue';
export default {
	name: 'view',
	components: {
		IEcharts
	},
	props: {
	},
	data: () => ({
		loading: true,
		bar1:{
			color: ['#5793f3', '#d14a61', '#675bba'],
			tooltip: {
				trigger: 'axis',
				axisPointer: {
					type: 'shadow'
				}
			},
			legend: {
				data: ['Ventas', 'Gastos']
			},
			grid: {
				left: '3%',
				right: '3%',
				bottom: '3%',
				containLabel: true
			},
			yAxis: {
				type: 'value',
				boundaryGap: [0, 0.01]
			},
			xAxis: {
				type: 'category',
				data: ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre']
			},
			series: [
			{
				name: 'Ventas',
				type: 'bar',
				data: [104970, 131744, 630230,18203, 23489, 29034, 104970, 131744, 630230]
			},
			{
				name: 'Gastos',
				type: 'bar',
				data: [19325, 23438, 31000, 121594, 134141, 681807,18203, 23489, 29034, 104970, 131744, 630230]
			}
			]
		},
		bar2:{
			color: ['#5793f3', '#d14a61', '#675bba'],
			tooltip: {
				trigger: 'axis',
				axisPointer: {
					type: 'shadow'
				}
			},
			legend: {
				data: ['Ventas', 'Gastos']
			},
			grid: {
				left: '3%',
				right: '3%',
				bottom: '3%',
				containLabel: true
			},
			yAxis: {
				type: 'value',
				boundaryGap: [0, 0.01]
			},
			xAxis: {
				type: 'category',
				data: ['Resumen Mensual']
			},
			series: [
			{
				name: 'Ventas',
				type: 'bar',
				data: [104970]
			},
			{
				name: 'Gastos',
				type: 'bar',
				data: [19325]
			}
			]
		},
		bar3:{
			color: ['#5793f3', '#d14a61', '#675bba'],
			tooltip: {
				trigger: 'axis',
				axisPointer: {
					type: 'shadow'
				}
			},
			legend: {
				data: ['Ventas', 'Gastos']
			},
			grid: {
				left: '3%',
				right: '3%',
				bottom: '3%',
				containLabel: true
			},
			yAxis: {
				type: 'value',
				boundaryGap: [0, 0.01]
			},
			xAxis: {
				type: 'category',
				data: ['Resumen Semanal']
			},
			series: [
			{
				name: 'Ventas',
				type: 'bar',
				data: [104970]
			},
			{
				name: 'Gastos',
				type: 'bar',
				data: [19325]
			}
			]
		},
		bar4:{
			color: ['#5793f3', '#d14a61', '#675bba'],
			tooltip: {
				trigger: 'axis',
				axisPointer: {
					type: 'shadow'
				}
			},
			legend: {
				data: ['Ventas', 'Gastos']
			},
			grid: {
				left: '3%',
				right: '3%',
				bottom: '3%',
				containLabel: true
			},
			yAxis: {
				type: 'value',
				boundaryGap: [0, 0.01]
			},
			xAxis: {
				type: 'category',
				data: ['Resumen Diario']
			},
			series: [
			{
				name: 'Ventas',
				type: 'bar',
				data: [104970]
			},
			{
				name: 'Gastos',
				type: 'bar',
				data: [19325]
			}
			]
		}
	})
};
</script>

<style scoped>
  .piechart {
    width: 30%;
    height: 250px;
    margin-left: 27px;
  }
  .echart{
  	width: 100%;
    height: 300px;
  }
</style>
