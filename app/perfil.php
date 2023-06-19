<?php
  include("includes/preset.php");
  
  $json_contact = json_decode($_SESSION['contact_user'], true);
  $json_social = json_decode($_SESSION['social_user'], true);
  $json_address = json_decode($_SESSION['address_user'], true);
?>
<!doctype php>
<html lang="pt_BR">

<head>
    <?php
        include('includes/head.php');
    ?>

    <title>OnPet App - Dados do dono</title>
</head>
<body>
    <?php
        include('includes/header.php');
    ?>
    <!-- End Navbar -->

    <div class="main_app">
      <div class="container">
        <div class="card shadow-lg card-profile-bottom">
          <div class="card-body p-3">
            <div class="row gx-4">
              <div class="col-md-5 text-center">
                <div class="avatar avatar-xl position-relative">
                  <div class="edit-avatar">
                    <i class="fa fa-camera"></i>
                  </div>
                  <img src="../assets/img/team/2.png" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
                </div>
              </div>
              <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                <div class="nav-wrapper position-relative end-0">
                  <ul class="nav nav-pills nav-fill p-1" role="tablist">
                    <li class="nav-item">
                      <h1>0</h1>
                      <p class="small">Pets</p>
                    </li>
                    <li class="nav-item">
                      <h1>0</h1>
                      <p class="small">Leituras</p>
                    </li>
                    <li class="nav-item">
                      <h1>0</h1>
                      <p class="small">Passeios</p>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container-fluid p-0">
          <form class="form-profile">
            <div class="row">
              <div class="col-md-12">
                <div class="card mt-3">
                  <div class="card-header">
                    <div class="d-flex align-items-center">
                      <h4 class="mb-0">Atualize suas informações pessoais</h4>
                      <div class="ml-auto">
                        <a href="contact.php" class="boxed-btn4 text-center px-3 mr-2">Alterar senha</a>
                        <a href="contact.php" class="boxed-btn4 text-center px-3">Alterar email</a>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-3">
                    <div class="d-flex align-items-center mb-3">
                      <p class="text-uppercase text-sm mb-0">informações de contato</p>
                      <div class="confirm-switch ml-3">
                        <input type="checkbox" id="contact-owner-pet">
                        <label for="contact-owner-pet"></label>
                      </div>
                      <p class="small ml-3 mb-0">Ativando está opção, você permitirá que estes dados sejam compartilhados na leitura da TAG</p>
                    </div>
                    <div class="row px-2">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="celular-principal" class="form-control-label">Celular (principal)</label>
                          <input type="text" class="form-control" id="celular-principal" name="celular-principal" value="<?=$json_contact['phone_number']?>">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="celular-secundario" class="form-control-label">Celular (secundário)</label>
                          <input type="text" class="form-control" id="celular-secundario" name="celular-secundario" value="<?=$json_contact['phone_number_secondary']?>">
                        </div>
                      </div>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                      <p class="text-uppercase text-sm mb-0">informações sociais</p>
                      <div class="confirm-switch ml-3">
                        <input type="checkbox" id="social-owner-pet">
                        <label for="social-owner-pet"></label>
                      </div>
                      <p class="small ml-3 mb-0">Ativando está opção, você permitirá que estes dados sejam compartilhados na leitura da TAG</p>
                    </div>
                    <div class="row px-2">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="facebook-link" class="form-control-label">Facebook</label>
                          <div class="input-group">
                            <input type="text" class="form-control" id="facebook-link" name="facebook-link" value="<?=$json_social['facebook']?>">
                            <div class="input-group-append">
                              <button class="btn btn-outline-primary" type="button" onclick="searchFacebookProfile(this.parentNode.parentNode.children[0].value)"><i class="fa fa-search"></i></button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="instagram-link" class="form-control-label">Instagram</label>
                          <div class="input-group">
                            <div class="input-group-append">
                              <span class="input-group-text">@</span>
                            </div>
                            <input type="text" class="form-control" id="instagram-link" name="instagram-link" value="<?=$json_social['instagram']?>">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="twitter-link" class="form-control-label">Twitter</label>
                          <div class="input-group">
                            <div class="input-group-append">
                              <span class="input-group-text">@</span>
                            </div>
                            <input type="text" class="form-control" id="twitter-link" name="twitter-link" value="<?=$json_social['twitter']?>">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                      <p class="text-uppercase text-sm mb-0">informações de endereço</p>
                      <div class="confirm-switch ml-3">
                        <input type="checkbox" id="address-owner-pet">
                        <label for="address-owner-pet"></label>
                      </div>
                      <p class="small ml-3 mb-0">Ativando está opção, você permitirá que estes dados sejam compartilhados na leitura da TAG</p>
                    </div>
                    <div class="row px-2">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="cep-dono" class="form-control-label">CEP</label>
                          <div class="input-group">
                            <input class="form-control" type="text" id="cep-dono" name="cep-dono" value="<?=$json_address['postal_code']?>">
                            <div class="input-group-append">
                              <button class="btn btn-outline-primary" type="button" onclick="searchCEP(this.parentNode.parentNode.children[0].value)"><i class="fa fa-search"></i></button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="numero-dono" class="form-control-label">Número</label>
                          <input class="form-control" type="text" id="numero-dono" name="numero-dono" value="<?=$json_address['number_home']?>">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="complemento-dono" class="form-control-label">Complemento</label>
                          <input class="form-control" type="text" id="complemento-dono" name="complemento-dono" value="<?=$json_address['complement_address']?>">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="endereco-dono" class="form-control-label">Endereço</label>
                          <input class="form-control" type="text" id="endereco-dono" name="endereco-dono" value="<?=$json_address['street_address']?>">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="cidade-dono" class="form-control-label">Cidade</label>
                          <input class="form-control" type="text" id="cidade-dono" name="cidade-dono" value="<?=$json_address['city_address']?>">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="estado-dono" class="form-control-label">Estado</label>
                          <input class="form-control" type="text" id="estado-dono" name="estado-dono" value="<?=$json_address['state_address']?>">
                        </div>
                      </div>
                    </div>
                    <div class="row px-2">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="nome-dono" class="form-control-label">Nome do dono <span class="text-danger ml-2">*</span> Obrigatório</label>
                          <input class="form-control" id="nome-dono" name="nome-dono" placeholder="Nome curto (apenas para identificação)" value="<?=$_SESSION['name_user']?>" type="text">
                        </div>
                      </div>  
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="email-dono" class="form-control-label">Email <span class="text-danger ml-2">*</span> Obrigatório</label>
                          <input class="form-control" id="email-dono" name="email-dono" placeholder="Seu melhor email" type="email" value="<?=$_SESSION['email_user']?>" disabled>
                        </div>
                      </div>  
                    </div> 
                    <div class="row">     
                      <div class="save-button-fixed active">
                        <button class="boxed-btn3 border-0 w-100 save-owner-data" type="button">Salvar informações</button>
                      </div> 
                    </div>
                  </div>
                </div>
              </div>
            </div>  
          </form>  
        </div>  
      </div>        
    </div>   
  </div>

  <?php
    include('includes/scripts.php');
  ?>
  <script>
    window.addEventListener('scroll', function() {
      var element = document.querySelector('#email-dono');
      var position = element.getBoundingClientRect();

      if(position.top >= 0 && position.bottom <= window.innerHeight) {
        $('.save-button-fixed')[0].classList.remove('active')
      }else{
        $('.save-button-fixed')[0].classList.add('active')
      }
    });

    $(document).ready(function(){
      $("#celular-principal").inputmask("(99) 99999-9999"); 
      $("#celular-secundario").inputmask("(99) 99999-9999"); 
    })
  </script>
</body>

</html>