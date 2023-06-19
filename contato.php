<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <?php
        include('includes/head.php');
    ?>
    <title>OnPet - Fale conosco</title>
</head>

<body>
    <?php
        include('includes/header.php');
    ?>
    <!-- header_start  -->

    <!-- bradcam_area_start -->
    <div class="bradcam_area breadcam_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bradcam_text text-center">
                        <h3>Fale conosco</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bradcam_area_end -->

    <!-- ================ contact section start ================= -->
    <section class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="contact-title">Nos diga como podemos ajudar</h2>
                </div>
                <div class="col-lg-8">
                    <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Digite sua mensagem'" placeholder=" Digite sua mensagem"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Digite seu nome'" placeholder="Digite seu nome">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Seu melhor e-mail'" placeholder="Seu melhor e-mail">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <select class="form-control valid" name="subject" id="subject">
                                        <option value="" selected disabled>Escolha uma opção</option>
                                        <option value="1">Suporte</option>
                                        <option value="2">Sugestão</option>
                                        <option value="3">Pedido</option>
                                        <option value="4">Pagamento</option>
                                        <option value="5">Reclamação</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" class="button button-contactForm boxed-btn">Enviar</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                        <div class="media-body">
                            <h3><a href="">WhatsApp</a></h3>
                            <p>Horário de atendimento: seg. à sex. das 9h às 18h</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-email"></i></span>
                        <div class="media-body">
                            <h3><a href="">suporte@onpet.org</a></h3>
                            <p>Horário de atendimento: seg. à sex. das 9h às 18h</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================ contact section end ================= -->
    
    <!-- footer_start  -->
    <?php
        include('includes/footer.php');
    ?>
    <!-- footer_end  -->
    
    
    <?php
        include('includes/scripts.php');
    ?>
    <script>
        $('#datepicker').datepicker({
            iconsLibrary: 'fontawesome',
            disableDaysOfWeek: [0, 0],
        //     icons: {
        //      rightIcon: '<span class="fa fa-caret-down"></span>'
        //  }
        });
        $('#datepicker2').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
                rightIcon: '<span class="fa fa-caret-down"></span>'
            }

        });
        var timepicker = $('#timepicker').timepicker({
            format: 'HH.MM'
        });
    </script>
</body>
</html>