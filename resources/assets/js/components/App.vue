<template>
	<div>
		<main class="main">
			<header class="header">
				<div class="navigation-trigger hidden-xl-up" data-ma-action="aside-open" data-ma-target=".sidebar">
                    <div class="navigation-trigger__inner">
                        <i class="navigation-trigger__line"></i>
                        <i class="navigation-trigger__line"></i>
                        <i class="navigation-trigger__line"></i>
                    </div>
                </div>
				<div class="header__logo hidden-sm-down">
					<h1><a href="/">Sistema de Gestión Administrativa - Librería del Pueblo SRL</a></h1>
				</div>

				<ul class="top-nav">

					<li class="dropdown hidden-xs-down">
						<a href="#" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>

						<div class="dropdown-menu dropdown-menu-right">
							<a href="/login" class="dropdown-item">Desconectarse</a>
						</div>
					</li>

				</ul>
			</header>

			<aside class="sidebar">
				<div class="scrollbar-inner">

					<ul class="navigation">
						<li :class="$route.path == '/' ? 'navigation__active': '@@homeactive'"><router-link to="/"><i class="zmdi zmdi-chart"></i>Inicio</router-link></li>

						<li :class="$route.path == '/articulo' ? 'navigation__active': '@@homeactive'"><router-link to="/articulo"><i class="zmdi zmdi-case"></i>Artículos</router-link></li>

						<li :class="$route.path == '/categoria' ? 'navigation__active': '@@registeractive'"><router-link to="/categoria"><i class="zmdi zmdi-case"></i>Categorías</router-link></li>


						<li :class="$route.path == '/inventario' ? 'navigation__active': '@@reportsactive'"><router-link to="/inventario"><i class="zmdi zmdi-case"></i>Inventario</router-link></li>


						<li :class="$route.path.substring(0,4) == '/ord' ? 'navigation__sub navigation__sub--active navigation__sub--toggled': 'navigation__sub @@inventoryactive'">
							<a href="#"><i class="zmdi zmdi-case"></i>Ordenes</a>

							<ul>
								<li :class="$route.path == '/orden/registro' ? 'navigation__active': '@@registeractive'"><router-link to="/orden/registro">Registro</router-link></li>
								<li :class="$route.path == '/orden/resumen' ? 'navigation__active': '@@reportsactive'"><router-link to="/orden/resumen">Resumen</router-link></li>
							</ul>
						</li>
						<li :class="$route.path.substring(0,4) == '/rec' ? 'navigation__sub navigation__sub--active navigation__sub--toggled': 'navigation__sub @@inventoryactive'">
							<a href="#"><i class="zmdi zmdi-case"></i>Recibos</a>

							<ul>
								<li :class="$route.path == '/recibo/registro' ? 'navigation__active': '@@registeractive'"><router-link to="/recibo/registro">Registro</router-link></li>
								<li :class="$route.path == '/recibo/resumen' ? 'navigation__active': '@@reportsactive'"><router-link to="/recibo/resumen">Resumen</router-link></li>
							</ul>
						</li>

					</ul>

				</div>
			</aside>

			<section class="content">

				<router-view></router-view>

				<footer class="footer hidden-xs-down">
				<p>José Castillo © 2017</p>
				</footer>
			</section>
		</main>
	</div>
</template>
