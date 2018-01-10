<div class="card-header"> <i class="fa fa-table"></i> Cliente </div>
<div class="card-body"> 
    
    <button type="button" id="btnAddCliente" data-toggle="modal" data-target="#modalAddCliente" class="fa fa-plus btn btn-success"> Novo</button>  
    <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Position</th>
                  <th>Office</th>
                  <th>Age</th>
                  <th>Start date</th>
                  <th>Salary</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Tiger Nixon</td>
                  <td>System Architect</td>
                  <td>Edinburgh</td>
                  <td>61</td>
                  <td>2011/04/25</td>
                  <td>$320,800</td>
                </tr>
                
              </tbody>
            </table>
          </div>
</div>



<div id="modalAddCliente" class="modal fade">
 <div class="modal-dialog">
  <form method="post" enctype="multipart/form-data" id="user_form">
   <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Adicionar Cliente</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
    <div class="modal-body">
     
        
        <div class="container">
      <div class="tab-content">
            <div class="row">         
                <label for="nome">Nome:</label>
                <input type="text" required="true" name="nome" class="form-control" id="nome">
            </div>
            <div class="row">
                          
                <label for="endereco">Endereço:</label>
                <input type="text" name="endereco" required="true" class="form-control" id="endereco">
              
                <label for="numero">Número:</label>
                <input type="text" name="numero" required="true" class="form-control" id="numero">
              
                <label for="cep">CEP:</label>
                <input type="text" name="cep" required="true" class="form-control" id="cep">
              <br>     
            </div>
            <div class="row">
               <label for="bairro">Bairro:</label>
                <input type="text" name="bairro" required="true" class="form-control" id="bairro">
                <label for="cidade">Cidade:</label>
                <input type="text" name="cidade" required="true" class="form-control" id="cidade">
              <label for="uf">UF:</label>
              <select class="form-control" name="uf">
                  <option value="">Selecione</option>
                  <option value="AC">Acre</option>
                  <option value="AL">Alagoas</option>
                  <option value="AP">Amapá</option>
                  <option value="AM">Amazonas</option>
                  <option value="BA">Bahia</option>
                  <option value="CE">Ceará</option>
                  <option value="DF">Distrito Federal</option>
                  <option value="ES">Espirito Santo</option>
                  <option value="GO">Goiás</option>
                  <option value="MA">Maranhão</option>
                  <option value="MS">Mato Grosso do Sul</option>
                  <option value="MT">Mato Grosso</option>
                  <option value="MG">Minas Gerais</option>
                  <option value="PA">Pará</option>
                  <option value="PB">Paraíba</option>
                  <option value="PR">Paraná</option>
                  <option value="PE">Pernambuco</option>
                  <option value="PI">Piauí</option>
                  <option value="RJ">Rio de Janeiro</option>
                  <option value="RN">Rio Grande do Norte</option>
                  <option value="RS">Rio Grande do Sul</option>
                  <option value="RO">Rondônia</option>
                  <option value="RR">Roraima</option>
                  <option value="SC">Santa Catarina</option>
                  <option value="SP">São Paulo</option>
                  <option value="SE">Sergipe</option>
                  <option value="TO">Tocantins</option>
                </select>
                </div>
              <br>     
                <label for="email">E-mail:</label>
                <input type="text" name="email" class="form-control" id="email">
              </div>
                <label for="pessoa">Tipo Pessoa:</label>
                <select class="form-control" name="pessoa">
                    <option value="F">Física</option>
                    <option value="J">Jurídica</option>
                </select>
                <label for="documento">CPF/CNPJ:</label>
                <input type="text" name="documento" class="form-control" id="documento">
                <label for="fixo">Tel. Fixo:</label>
                <input type="text" name="fixo" class="form-control" id="fixo">
            
                <label for="cel">Tel. Celular:</label>
                <input type="text" name="cel" class="form-control" id="cel">               
            </div>
    </div>
    <div class="modal-footer">
     <input type="hidden" name="user_id" id="user_id" />
     <input type="hidden" name="operation" id="operation" />
     <input type="submit" name="action" id="action" class="btn btn-success" value="Add" />
     <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
    </div>
   </div>
  </form>
 </div>
</div>
