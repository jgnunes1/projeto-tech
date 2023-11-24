





<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">


<?php
   $session = session();
   $alert = $session->get('alert');
     ?>

           <?php if (isset($alert)): ?>

            <?php  if($alert == 'success_trocar_senha'): ?>

              <div class="row">
                <div class="col-lg-12">  
       
                    <div class="alert alert-success alert-dismissible">

                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      
                     Senha atualizada com sucesso!
                </div>
             </div>
           </div>

           <?php  elseif($alert == 'error_trocar_senha'): ?>

<div class="row">
  <div class="col-lg-12">  

      <div class="alert alert-danger alert-dismissible">

        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        
       Houve algum erro ao atualizar senha, verifique os dados digitados!
  </div>
</div>
</div>

            <?php endif; ?>

            

            <?php endif; ?>








    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Trocar Senha</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              
           
              <li class="breadcrumb-item"><a href="/inicio">Início</a></li>

              <li class="breadcrumb-item"><a href="/funcionarios">Trocar Senha</a></li>


              
              
              
            </ol>

          
              

          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12"> 

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Dados</h3>
</div>

<!-- inicio do formulario -->
<form  action="/login/store" method="post"> 
   <div class="card-body">
    <div class="row">






        <div class="col-lg-4">
            <div class="form-group">

                <label for="name">Senha Atual</label>
                   <input type="text" class="form-control"  name="senha_atual">

                </div>
           </div>

           <div class="col-lg-4">
            <div class="form-group">

                <label for="name">Nova Senha</label>
                   <input type="text" class="form-control"  name="nova_senha">

                </div>
           </div>

           <div class="col-lg-4">
            <div class="form-group">

                <label for="name">Confirmar Nova Senha</label>
                   <input type="text" class="form-control"  name="confirmar_nova_senha">

                </div>
           </div>





           <?php if(isset($funcionario)): ?>
                      <input type="hidden" name="id_funcionario" value="<?= $funcionario['id_funcionario'] ?>">
            <?php endif; ?>

            
       </div>
   </div>
               

            

       

                </div>
           </div>

    


               

            

            
       </div>
   </div>

        <div class="card-footer">
<button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Atualizar Senha</button>
</div>
</form>
</div>



</div>

   <!-- Main content -->
  

         
              </div>
            </div>

            </div><!-- /.card -->
          </div>