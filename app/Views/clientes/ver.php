<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dados do Cliente</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              
            
              <li class="breadcrumb-item"><a href="/inicio">Início</a></li>

              <li class="breadcrumb-item"><a href="/clientes">Clientes</a></li>

              <li class="breadcrumb-item active">Informações do Cliente</li>

              
              
              
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
                        <h3 class="card-title">Informações do Cliente</h3>
</div>


<div class="card-body">
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">

                <label for="name">Nome</label>
                <input type="text" class="form-control"  name="nome"  value="<?= $cliente['nome'] ?>" disabled >

                </div>
           </div>


           <div class="col-lg-3">
            <div class="form-group">

            <label for="name">Data de Nascimento</label>
                <input type="date" class="form-control"  name="data_de_nascimento" value="<?= $cliente['data_de_nascimento'] ?>" disabled  >

                </div>
           </div>

           <div class="col-lg-3">
            <div class="form-group">

            <label for="name">Telefone</label>
                <input type="text" class="form-control"  name="telefone"   value="<?= $cliente['telefone'] ?>" disabled >

                </div>
           </div>


           <div class="col-lg-8">
            <div class="form-group">

                <label for="name">Endereço</label>
                <input type="text" class="form-control"  name="endereco" value="<?= $cliente['endereco'] ?>" disabled >

                </div>
           </div>

           <div class="col-lg-4">
            <div class="form-group">

            <label for="name">Limite de Crédito</label>
                <input type="text" class="form-control"  name="limite_de_credito" value="<?= $cliente['limite_de_credito'] ?>" disabled >

                </div>
           </div>


               

            

            
       </div>
   </div>



</div>



</div>

   <!-- Main content -->
  

         
              </div>
            </div>

            </div><!-- /.card -->
          </div>