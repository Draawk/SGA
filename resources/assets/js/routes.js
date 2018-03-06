	export default [
		{path: '/', component: require('./components/App.vue'),
		children: [
			{path: '/', component: require('./components/pages/Index.vue')},
			{path: '/articulo', component: require('./components/pages/Articulo.vue')},
			{path: '/categoria', component: require('./components/pages/Categoria.vue')},
			{path: '/inventario', component: require('./components/pages/Inventario.vue')},
			{path: '/orden/registro', component: require('./components/pages/orden/Registro.vue')},
			{path: '/orden/resumen', component: require('./components/pages/orden/Resumen.vue')},
			{path: '/recibo/registro', component: require('./components/pages/recibo/Registro.vue')},
			{path: '/recibo/resumen', component: require('./components/pages/recibo/Resumen.vue')},
		]},
		{path: '/login', component: require('./components/pages/Login.vue')}
	];