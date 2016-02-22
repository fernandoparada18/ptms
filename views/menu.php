<nav class="navbar navbar-inverse">
   <div class="container-fluid">
     <div class="navbar-header">
       <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
         <span class="sr-only">Toggle navigation</span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
       </button>
       <a class="navbar-brand" href="#">P.T.M.S.</a>
     </div>
     <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
       <ul class="nav navbar-nav">
         <li class="dropdown">
           <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Agregar <span class="caret"></span></a>
           <ul class="dropdown-menu" role="menu">
             <li><a href="<?php echo URL; ?>docente/agregar">Docentes</a></li>
             <li><a href="<?php echo URL; ?>plantel/agregar">Planteles</a></li>
             <li><a href="<?php echo URL; ?>usuario/agregar">Usuarios</a></li>
             <li class="divider"></li>
             <li><a href="<?php echo URL; ?>cargo/agregar">Cargos</a></li>
             <li><a href="<?php echo URL; ?>rubro/agregar">Rubros</a></li>
             <li><a href="<?php echo URL; ?>herramienta/agregar">Herramientas</a></li>
             <li><a href="<?php echo URL; ?>institucion/agregar">Instituciones</a></li>
             <li><a href="<?php echo URL; ?>municipio/agregar">Municipios</a></li>
             <li><a href="<?php echo URL; ?>parroquia/agregar">Parroquias</a></li>
           </ul>
         </li>
         <li class="dropdown">
           <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Listados <span class="caret"></span></a>
           <ul class="dropdown-menu" role="menu">
             <li><a href="<?php echo URL; ?>docente">Docentes</a></li>
             <li><a href="<?php echo URL; ?>plantel">Planteles</a></li>
             <li><a href="<?php echo URL; ?>usuario">Usuarios</a></li>
             <li><a href="<?php echo URL; ?>cargo">Cargos</a></li>
             <li><a href="<?php echo URL; ?>rubro">Rubros</a></li>
             <li><a href="<?php echo URL; ?>herramienta">Herramientas</a></li>
             <li><a href="<?php echo URL; ?>institucion">Instituciones</a></li>
             <li><a href="<?php echo URL; ?>municipio">Municipios</a></li>
             <li><a href="<?php echo URL; ?>parroquia">Parroquias</a></li>
           </ul>
         </li>
         <li class="dropdown">
           <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Archivos <span class="caret"></span></a>
           <ul class="dropdown-menu" role="menu">
             <li><a href="<?php echo URL; ?>ptms">Ptms</a></li>
             <li><a href="<?php echo URL; ?>brigada">Brigada</a></li>
             <li><a href="<?php echo URL; ?>mantenimiento">Mantenimiento</a></li>
           </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Reportes <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Ficha Productiva</a></li>
          </ul>
        </li>
       </ul>
       <ul class="nav navbar-nav navbar-right">
         <li><a href="#"><img src="<?php echo URL; ?>views/template/img/user.png" width="24px" height="24px" alt="user" class="img-circle"></img> Cerrar Sesión</a></li>
       </ul>
     </div>
   </div>
 </nav>
