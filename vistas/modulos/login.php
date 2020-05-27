<div class="container" id="container">
        <div class="form-container sign-up-container">

            <form class="form-op" method="POST">
                <h1 class="FAST">INCIAR SESIÓN</h1>
                <br>
                <br>
                <input  type="text" class="OL"  placeholder="Usuario" name="ingUsuario" required>
                <br>
                <input type="password" class="OL" placeholder="Contraseña" name="ingPassword" required>
                <br>
                <button class="FAT8" type="submit">Iniciar Sesión</button>

                <?php

                $login = new ControladorUsuarios();
                $login -> ctrIngresoUsuario();

                ?>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form class="form-op" >
                <h1  class="FAST">ING_FAST</h1>
                <p class="FAST3"><b>"SISTEMA DE FACTURACION PARA PYMES"</b></p>
            </form>
        </div>

        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1 class="FAST2">MAS<br>INFORMACIÓN</h1>
                        <br>
                        <br>
                        <button class="ghost" id="signIn">Volver</button>
                </div>

                <div class="overlay-panel overlay-right">
                    <h1 class="FAST2">BIENVENIDO</h1>
                    <br>
                    <br>
                    <button class="ghost" id="signUp">Iniciar Sesión</button>
                </div>
            </div>
        </div>
    </div>



    <script type="text/javascript">
    const signUpButton = document.getElementById('signUp');
    const signInButton = document.getElementById('signIn');
    const container = document.getElementById('container');

    signUpButton.addEventListener('click', () => {
        container.classList.add("right-panel-active");
    });
    signInButton.addEventListener('click', () => {
        container.classList.remove("right-panel-active");
    });
    </script>