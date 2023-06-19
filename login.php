<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <?php
        include('includes/head.php');
    ?>
    <title>OnPet - Entrar na plataforma</title>
</head>

<body>
    <section class="login-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-5">
                    <div class="pet_thumb text-center my-3">
                        <img src="assets/img/onpet-logo.png" class="w-50" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="pet_info p-3">
                        <div class="section_title">
                            <h3><span>Insira suas credenciais</span> <br>
                                de acesso</h3>
                            <form action="components/start-session" method="GET" class="my-3">
                                <input type="email" name="email" placeholder="Digite seu e-mail" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Digite seu e-mail'" required="" class="single-input mb-3">
                                <input type="password" name="password" placeholder="Digite sua senha" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Digite sua senha'" required="" class="single-input mb-3">
                                <button type="submit" class="boxed-btn3 border-0">Entrar</button> <b class="mx-3">ou</b>   
                                <a href="registrar" class="boxed-btn1 border-0">Registrar</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <?php
        include('includes/scripts.php');
    ?>
</body>

</html>