<div class="card-header"> <i class="fa fa-table"></i> Cliente </div>
<div class="card-body">
   <div style="padding-bottom: 5px; padding-left: 15px">
      <button type="button" id="btnAddCliente" data-toggle="modal" data-target="#modalAddCliente" class="fa fa-plus btn btn-info"> Novo</button>  
   </div>
   <div class="table-responsive">
      <table class="table table-bordered  table-striped" id="dataTableCliente" width="100%" cellspacing="0">
         <thead>
            <tr>
               <th>Id</th>
               <th>Nome</th>
               <th>Telefone Fixo</th>
               <th>Telefone Celular</th>
               <th>E-mail</th>
               <th>Estado</th>
               <th>Detalhe</th>
               <th>Excluir</th>
            </tr>
         </thead>
         <tbody> 
         </tbody>
      </table>
   </div>
</div>


<div id="modalAddCliente" class="modal fade">
   <div class="modal-dialog modal-lg">
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
						<div class="col-md-3"><label for="pessoa">Tipo Pessoa:</label></div>
						<div class="col-md-6"><label for="nome">Nome:</label></div>
						<div class="col-md-3"><label for="documento">CPF/CNPJ:</label></div> 
                     </div>
					 <div class="row">
						<div class="col-md-3"><select class="form-control" name="pessoa">
							<option value="F">Física</option>
							<option value="J">Jurídica</option>
						</select></div>
						<div class="col-md-6"><input type="text" required="true" name="nome" class="form-control" id="nome"></div>
						<div class="col-md-3"><input type="text" name="documento" class="form-control" id="documento"></div>
						
					 </div>
					 <div class="row">
						<div class="col-md-3"><label for="cep">CEP:</label></div>
						<div class="col-md-6"><label for="endereco">Endereço:</label></div>
						<div class="col-md-3"><label for="numero">Número:</label></div>
					 </div>
                     <div class="row">
						<div class="col-md-3"><input type="text" name="cep" class="form-control" id="cep"></div>
                    	<div class="col-md-6"><input type="text" name="endereco" required="true" class="form-control" id="endereco"></div>
						<div class="col-md-3"><input type="text" name="numero" required="true" class="form-control" id="numero"></div>
					 </div>
					
					<div class="row">
						<div class="col-md-5"><label for="bairro">Bairro:</label></div>
						<div class="col-md-4"><label for="cidade">Cidade:</label></div>
						<div class="col-md-3"><label for="uf">UF:</label></div>
					</div>
					<div class="row">
						<div class="col-md-5"><input type="text" name="bairro" required="true" class="form-control" id="bairro"></div>
						<div class="col-md-4"><input type="text" name="cidade" required="true" class="form-control" id="cidade"></div>
						<div class="col-md-3"><select class="form-control" name="uf">
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
                        </select></div> 
					</div>
                        
					 <div class="row">
						<div class="col-md-3"><label for="fixo">Tel. Fixo:</label></div>
						<div class="col-md-3"><label for="cel">Tel. Celular:</label></div>
						<div class="col-md-6"><label for="email">E-mail:</label></div>
					 </div>
                      <div class="row">
						<div class="col-md-3"><input type="text" name="fixo" class="form-control" id="fixo"></div>
						<div class="col-md-3"><input type="text" name="cel" class="form-control" id="cel"></div>
						<div class="col-md-6"><input type="text" name="email" class="form-control" id="email"></div>
					 </div> 
               </div>
            </div>
            <div class="modal-footer">
               <input type="hidden" name="user_id" id="user_id" />
               <input type="hidden" name="operation" id="operation" />
               <input type="submit" name="action" id="btnSalvarCliente" class="btn btn-success" value="Salvar" />
               <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
            </div>
         </div>
      </form>
   </div>
</div>