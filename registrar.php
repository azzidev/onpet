<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <?php
        include('includes/head.php');
    ?>
    <title>OnPet - Registrar meu pet na plataforma</title>
</head>

<body>
    <section class="register-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-7">
                    <div class="pet_thumb text-center my-3">
                        <img src="assets/img/onpet-logo.png" class="w-50" alt="">
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1 col-md-5">
                    <div class="pet_info p-3">
                        <div class="section_title">
                            <h3><span>Nos diga mais</span> <br>
                            sobre você</h3>
                            <form id="formRegisterNewUser" action="components/register-user" method="POST" class="my-3" onsubmit="return validadeForm()">
                                <input type="text" name="name" id="name" placeholder="Digite seu nome" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Digite seu nome'" required="" class="single-input mb-3">
                                <input type="email" name="email" id="email" placeholder="Digite seu e-mail" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Digite seu e-mail'" required="" class="single-input mb-3">
                                <input type="password" name="password" id="password" placeholder="Digite sua senha" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Digite sua senha'" required="" class="single-input mb-3">
                                <input type="password" name="repeat-password" id="repeat-password" placeholder="Repita sua senha" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Repita sua senha'" required="" class="single-input mb-3">
                                <button type="submit" class="boxed-btn3 border-0">Cadastrar</button> <b class="mx-3">ou</b>   
                                <a href="login.php" class="boxed-btn4 border-0">Entrar</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
        include('includes/toast.php')
    ?>

    <?php
        include('includes/scripts.php');
    ?>
    <script>
        function validadeForm(){
            if($('#formRegisterNewUser #name').val().length >= 4){
                if($('#formRegisterNewUser #email').val().indexOf('@') && $('#formRegisterNewUser #email').val().indexOf('.')){
                    if($('#formRegisterNewUser #password').val() === $('#formRegisterNewUser #repeat-password').val() && $('#formRegisterNewUser #password').val().length >= 8){
                        return true
                    }else{
                        toast('Por favor, confira se sua senha contêm no minímo 8 caracteres. As credenciais precisam se coincidir.','bg-warning')
                        return false
                    }
                }else{
                    toast('Por favor, informe um e-mail válido.','bg-warning')
                    return false
                }
            }else{
                toast('Por favor, informe um nome válido.','bg-warning')
                return false
            }
        }
    </script>
</body>

</html>