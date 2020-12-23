<nav>
    <div class="nav-wrapper container">
        <a href="#" class="brand-logo">Alumno: 
            <?php
                echo $_SESSION['nombre']." ".$_SESSION['apellido'];
            ?>
        </a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="sass.html">Tomar ramo</a></li>
            <li><a href="badges.html">Mis ramos</a></li>
            <li><a id="cerrarSesionA"><i class="material-icons">meeting_room</i></a></li>
        </ul>
    </div>
</nav>