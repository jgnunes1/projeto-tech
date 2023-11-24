<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dados do Protudo</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              
            
              <li class="breadcrumb-item"><a href="/inicio">Início</a></li>

              <li class="breadcrumb-item"><a href="/Produtos">Produtos</a></li>

              <li class="breadcrumb-item active">Informações do Produto</li>

              
              
              
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
                        <h3 class="card-title">Informações do Produto</h3>
</div>


<div class="card-body">
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">

                <label for="name">Nome</label>
                <input type="text" class="form-control"  name="nome"  value="<?= $produto['nome'] ?>" disabled >

                </div>
           </div>


           <div class="col-lg-3">
            <div class="form-group">

            <label for="name">Descrição</label>
                <input type="text" class="form-control"  value="<?= $produto['descricao'] ?>" disabled  >

                </div>
           </div>

           <div class="col-lg-3">
            <div class="form-group">

            <label for="name">Quatidade</label>
                <input type="text" class="form-control"  value="<?= $produto['quantidade'] ?>" disabled >

                </div>
           </div>


           <div class="col-lg-8">
            <div class="form-group">

                <label for="name">Quandidade Mínima</label>
                <input type="text" class="form-control"  value="<?= $produto['quantidade_minima'] ?>" disabled >

                </div>
           </div>

           <div class="col-lg-4">
            <div class="form-group">

            <label for="name">Valor de Compra</label>
                <input type="text" class="form-control"  value="<?= $produto['valor_de_compra'] ?>" disabled >

                </div>
           </div>

           <div class="col-lg-4">
            <div class="form-group">

            <label for="name">Valor de venda</label>
                <input type="text" class="form-control"   value="<?= $produto['valor_de_venda'] ?>" disabled >

                </div>
           </div>

           <div class="col-lg-4">
            <div class="form-group">
           <label for="name">Margem de lucro</label>
                <input type="text" class="form-control"   value="<?= $produto['margem_de_lucro'] ?>" disabled >

                </div>
           </div>

           <div class="col-lg-4">
            <div class="form-group">
           <label for="name">Validade</label>
                <input type="text" class="form-control"   value="<?= $produto['validade'] ?>" disabled >

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