<!doctype php>
<html lang="pt_BR">

<head>
    <?php
        include('includes/head.php');
    ?>

    <title>OnPet App - Início</title>
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
            <div class="row gx-4 justify-content-center">
              <div class="col-md-3 col-6 text-center">
                <div class="avatar avatar-xl position-relative my-2">
                  <div class="edit-avatar">
                    <i class="fa fa-camera"></i>
                  </div>
                  <img src="../assets/img/team/1.png" alt="profile_image" class="w-100 border-radius-lg shadow-sm active">
                  <h4 class="my-2">Pingo</h4>
                </div>
              </div>
              <div class="col-md-3 col-6 text-center">
                <div class="avatar avatar-xl position-relative my-2">
                  <div class="edit-avatar">
                    <i class="fa fa-camera"></i>
                  </div>
                  <img src="../assets/img/team/3.png" alt="profile_image" class="w-100 border-radius-lg shadow-sm gray-scale">
                  <h4 class="my-2">Mingau</h4>
                </div>
              </div>
              <div class="col-md-3 col-6 text-center">
                <div class="avatar avatar-xl position-relative my-2">
                  <div class="edit-avatar">
                    <i class="fa fa-camera"></i>
                  </div>
                  <img src="../assets/img/team/2.png" alt="profile_image" class="w-100 border-radius-lg shadow-sm gray-scale">
                  <h4 class="my-2">Bob</h4>
                </div>
              </div>
              <div class="col-md-3 col-6 text-center">
                <div class="avatar avatar-xl position-relative my-2">
                  <div class="edit-avatar">
                    <i class="fa fa-camera"></i>
                  </div>
                  <img src="../assets/img/pet/default-pet.png" alt="profile_image" class="w-100 border-radius-lg shadow-sm gray-scale">
                  <h4 class="my-2">Adicionar pet</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="container-fluid p-0">
          <form class="form-pet">
            <div class="row">
              <div class="col-md-12">
                <div class="card mt-3">
                  <div class="card-header">
                    <div class="d-flex align-items-center">
                      <h4 class="mb-0">Atualize as informações do seu pet</h4>
                      <a href="contact.php" class="boxed-btn4 text-center ml-2 ml-auto">Excluir pet</a>
                    </div>
                  </div>
                  <div class="card-body p-3">
                    <div class="d-flex align-items-center mb-3">
                      <p class="text-uppercase text-sm mb-0">informações básicas</p>
                      <div class="confirm-switch ml-3">
                        <input type="checkbox" id="contact-owner-pet">
                        <label for="contact-owner-pet"></label>
                      </div>
                      <p class="small ml-3 mb-0">Ativando está opção, você permitirá que estes dados sejam compartilhados na leitura da TAG</p>
                    </div>
                    <div class="row px-2">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="nome-pet" class="form-control-label">Nome do pet</label>
                          <input type="text" class="form-control" id="nome-pet" name="nome-pet">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="nascimento-pet" class="form-control-label">Data de nascimento do pet</label>
                          <input type="date" class="form-control" id="nascimento-pet" name="nascimento-pet">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="idade-pet" class="form-control-label">Idade do pet</label>
                          <input type="number" class="form-control" id="idade-pet" name="idade-pet">
                        </div>
                      </div>
                    </div> 
                    <div class="d-flex align-items-center mb-3">
                      <p class="text-uppercase text-sm mb-0">informações de nascimento</p>
                      <div class="confirm-switch ml-3">
                        <input type="checkbox" id="contact-owner-pet">
                        <label for="contact-owner-pet"></label>
                      </div>
                      <p class="small ml-3 mb-0">Ativando está opção, você permitirá que estes dados sejam compartilhados na leitura da TAG</p>
                    </div>
                    <div class="row px-2">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="especie-pet" class="form-control-label">Espécie do pet</label>
                          <input type="text" class="form-control" id="especie-pet" name="especie-pet">
                        </div>
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
      var element = document.querySelector('#especie-pet');
      var position = element.getBoundingClientRect();

      if(position.top >= 0 && position.bottom <= window.innerHeight) {
        $('.save-button-fixed')[0].classList.remove('active')
      }else{
        $('.save-button-fixed')[0].classList.add('active')
      }
    });
  </script>
</body>

</html>