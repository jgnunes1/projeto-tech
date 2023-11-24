<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Novo Funcionario</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              
             <a href="/funcionarios" class="btn btn-success" style="margin-right: 15px"><i class="fas fa-arrow-alt-circle-left"></i>Voltar</a>  
            
              <li class="breadcrumb-item"><a href="/inicio">Início</a></li>

              <li class="breadcrumb-item"><a href="/funcionarios">Funcionarios</a></li>

              <li class="breadcrumb-item active">Novo</li>

              
              
              
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
                        <h3 class="card-title">Dados do Funcionario</h3>
</div>

<!-- inicio do formulario -->
<form  action="/funcionarios/store" method="post"> 
   <div class="card-body">
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">

                <label for="name">Nome</label>
                   <input type="text" class="form-control"  name="nome" value="<?= (isset($funcionario))? $funcionario['nome']: ""  ?>">

                </div>
           </div>


           <div class="col-lg-3">
            <div class="form-group">

            <label for="name">Data de Nascimento</label>
                <input type="date" class="form-control"  name="data_de_nascimento" value="<?= (isset($funcionario))? $funcionario['data_de_nascimento']: ""  ?>">

                </div>
           </div>
           <div class="col-lg-3">
            <div class="form-group">

            <label for="name">RG</label>
                <input type="text" class="form-control"  name="RG"value="<?= (isset($funcionario))? $funcionario['telefone']: ""  ?>">

                </div>
           </div>

           <div class="col-lg-6">
            <div class="form-group">

            <label for="name">CPF</label>
                <input type="text" class="form-control"  name="CPF"value="<?= (isset($funcionario))? $funcionario['telefone']: ""  ?>">

                </div>
           </div>

           <div class="col-lg-6">
            <div class="form-group">

            <label for="name">Telefone</label>
                <input type="text" class="form-control"  name="telefone"value="<?= (isset($funcionario))? $funcionario['telefone']: ""  ?>">

                </div>
           </div>


           <div class="col-lg-8">
            <div class="form-group">

                <label for="name">Endereço</label>
                <input type="text" class="form-control"  name="endereco" value="<?= (isset($funcionario))? $funcionario['endereco']: ""  ?>">

                </div>
           </div>

           <div class="col-lg-4">
            <div class="form-group">

            <label for="name">Data de Contratação</label>
                <input type="date" class="form-control"  name="DATA_DE_CONTRATACAO" value="<?= (isset($funcionario))? $funcionario['DATA_DE_CONTRATACAO']: ""  ?>">

                </div>
           </div>

           <div class="col-lg-4">
            <div class="form-group">
           <label for="name">Cargo</label>
                <input type="text" class="form-control"  name="cargo" value="<?= (isset($funcionario))? $funcionario['cargo']: ""  ?>">

                </div>
           </div>

           <div class="col-lg-4">
            <div class="form-group">
           <label for="name">Salario</label>
                <input type="text" class="form-control"  name="salario" value="<?= (isset($funcionario))? $funcionario['salario']: ""  ?>">

                </div>
           </div>

           <div class="col-lg-4">
            <div class="form-group">
           <label for="name">Dia de Pagamento</label>
                <input type="text" class="form-control"  name="dia_de_pagamento" value="<?= (isset($funcionario))? $funcionario['dia_de_pagamento']: ""  ?>">

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
<button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Cadastrar</button>
</div>
</form>
</div>



</div>

   <!-- Main content -->
  

         
              </div>
            </div>

            </div><!-- /.card -->
          </div>