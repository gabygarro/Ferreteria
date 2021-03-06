<!-- Navigation -->
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">Administración de Ferreterías</a>
    </div>
    <!-- /.navbar-header -->

    <ul class="nav navbar-top-links navbar-right">
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i><?php echo " " . $_SESSION['nombreEmpleado']; ?> <i class="fa fa-caret-down"></i>

            </a>
            <ul class="dropdown-menu dropdown-user">
                <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                </li>
                <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                </li>
                <li class="divider"></li>
                <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                </li>
            </ul>
            <!-- /.dropdown-user -->
        </li>
        <!-- /.dropdown -->
    </ul>
    <!-- /.navbar-top-links -->

    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li class="sidebar-search">
                    <div class="input-group custom-search-form">
                        <input type="text" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                        <button class="btn btn-default" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                    </div>
                    <!-- /input-group -->
                </li>
                <li>
                    <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-shopping-bag" aria-hidden="true"></i> Pedidos<span class="fa arrow"></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="despacharpedido.php">Despachar pedido</a>
                        </li>
                        <li>
                            <a href="pedidos.php">Ver pedidos</a>
                        </li>
                        <li>
                            <a href="pedidospendientes.php">Ruta de pedidos pendientes</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-map-o" aria-hidden="true"></i> Rutas<span class="fa arrow"></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="nuevaruta.php">Nueva ruta</a>
                        </li>
                        <li>
                            <a href="rutas.php">Ver rutas</a>
                        </li>
                        <li>
                            <a href="mejorruta.php">Ganancias por ruta</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-building" aria-hidden="true"></i> Ferreterías<span class="fa arrow"></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="ferreterias.php">Ver ferreterías</a>
                        </li>
                        <li>
                            <a href="mejorferreteria.php">Ganancias por ferretería</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-users" aria-hidden="true"></i> Empleados<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="nuevoempleado.php">Nuevo empleado</a>
                        </li>
                        <li>
                            <a href="empleados.php">Planilla de empleados</a>
                        </li>
                        <li>
                            <a href="tipoEmpleados.php">Tipos de empleado</a>
                        </li>
                        <li>
                            <a href="mejorempleado.php">Ganancias por empleado </a>
                        </li>
                        <li>
                            <a href="amonestacion.php">Reportar amonestación</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-archive" aria-hidden="true"></i> Productos<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="nuevoproducto.php">Nuevo producto</a>
                        </li>
                        <li>
                            <a href="productos.php">Catálogo de productos</a>
                        </li>
                        <li>
                            <a href="inventario.php">Inventario</a>
                        </li>
                        <li>
                            <a href="mejoresventas.php">Ventas de productos</a>
                        </li>
                        <li>
                            <a href="marcas.php">Marcas de productos</a>
                        </li>
                        <li>
                            <a href="departamentos.php">Departamentos</a>
                        </li>
                        <li>
                            <a href="pasillos.php">Pasillos</a>
                        </li>
                        <li>
                            <a href="estantes.php">Estantes</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-users" aria-hidden="true"></i> Clientes<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="nuevocliente.php">Nuevo cliente</a>
                        </li>
                        <li>
                            <a href="clientes.php">Ver clientes</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-truck" aria-hidden="true"></i> Flotilla<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="vehiculos.php">Vehículos</a>
                        </li>
                        <li>
                            <a href="modelosvehiculos.php">Modelos</a>
                        </li>
                        <li>
                            <a href="marcasvehiculos.php">Marcas</a>
                        </li>
                        <li>
                            <a href="reportarvehiculo.php">Reportar kilómetros</a>
                        </li>
                    </ul>
                </li>
                
            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
</nav>