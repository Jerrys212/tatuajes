
<?php require_once('./components/header.php') ?>

<?php require_once('./components/navbar.php') ?>

<div class="contenedor">
    <div class="regresar">
        <a href="miembros.php" class="no-hover boton boton--primario"> <span><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-back-up" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M9 13l-4 -4l4 -4m-4 4h11a4 4 0 0 1 0 8h-1" />
                </svg></span> Regresar </a>
    </div>
    <h3 class="centrar-texto">Agregar Miembro</h3>
    <form action="Insertarmiembro.php" method="post" class="formulario" id="formulario">
        <label for="nombre">
            <p class="label">Nombre: </p>
        </label>
        <div class="campo">
            <input class="campo__field" name="nombre" type="text" id="nombre" placeholder="Nombre" autocomplete="off" />
        </div>
        <label for="ap">
            <p class="label">Apellido Paterno: </p>
        </label>
        <div class="campo">
            <input class="campo__field" name="ap" type="text" id="ap" placeholder="Apellido Paterno" autocomplete="off" />
        </div>
        <label for="am">
            <p class="label">Apellido Materno: </p>
        </label>
        <div class="campo">
            <input class="campo__field" name="am" type="text" id="am" placeholder="Apellido Materno" autocomplete="off" />
        </div>
        <label for="curp">
            <p class="label">CURP: </p>
        </label>
        <div class="campo">
            <input class="campo__field mayus" name="curp" type="text" id="curp" placeholder="Curp" minlength="18" maxlength="18" onblur="mayuscula(), caracteresMin()" />
        </div>
        <label for="celular">
            <p class="label">Celular: </p>
        </label>
        <div class="campo">
            <input class="campo__field" name="celular" type="number" id="celular" placeholder="Celular" autocomplete="off" />
        </div>
        <label for="grupo">
            <p class="label">Grupo: </p>
        </label>
        <div class="campo">
            <input class="campo__field" name="grupo" type="text" id="grupo" placeholder="Grupo" autocomplete="off" />
        </div>
        <div class="campo">
            <input type="submit" value="Agregar" class="boton boton--primario" />
        </div>
    </form>
</div>


<?php require_once('./components/footer.php'); ?>