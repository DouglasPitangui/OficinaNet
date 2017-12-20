<!DOCTYPE html>
<html>
  <head>
  	<meta charset="utf-8">
      <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
      <title>Previsão de Resultados</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="estilo/aba/bootstrap.min.css" rel="stylesheet">
      <link href="estilo/aba/bootstrap.min.js" rel="stylesheet">
      <script src="script/aba/jquery.min.js"></script> 
  </head>
  <style type="text/css">
    .table {
    width: 88% !important;
    max-width: 100%;
    margin-bottom: 20px;
    }
    .retirar{
      border-bottom: 0px solid #ddd !important;
    }
  </style>
  <body>
    <div class="container">
      <div class="tab-content">
        <div id="home" class="tab-pane fade in active"><br>
          <form action="pages/insertClientes.php" name="cadastro" method="get">
            <div class="row">
              <div class="form-group col-md-7">             
                <label for="nome">Nome:</label>
                <input type="text" required="true" name="nome" class="form-control" id="nome">
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-4">             
                <label for="endereco">Endereço:</label>
                <input type="text" name="endereco" required="true" class="form-control" id="endereco">
              </div>
              <div class="form-group col-md-1">             
                <label for="numero">Número:</label>
                <input type="text" name="numero" required="true" class="form-control" id="numero">
              </div>
              <div class="form-group col-md-2">             
                <label for="cep">CEP:</label>
                <input type="text" name="cep" required="true" class="form-control" id="cep">
              </div>
              <br>     
            </div>
            <div class="row">
              <div class="form-group col-md-2">             
                <label for="bairro">Bairro:</label>
                <input type="text" name="bairro" required="true" class="form-control" id="bairro">
              </div>
              <div class="form-group col-md-3">             
                <label for="cidade">Cidade:</label>
                <input type="text" name="cidade" required="true" class="form-control" id="cidade">
              </div>
              <div class="form-group col-md-2">             
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
            </div>

            <div class="row">
              <div class="form-group col-md-3">             
                <label for="email">E-mail:</label>
                <input type="text" name="email" class="form-control" id="email">
              </div>
              <div class="form-group col-md-2">             
                <label for="pessoa">Tipo Pessoa:</label>
                <select class="form-control" name="pessoa">
                    <option value="F">Física</option>
                    <option value="J">Jurídica</option>
                </select>
              </div>
              <div class="form-group col-md-2">             
                <label for="documento">CPF/CNPJ:</label>
                <input type="text" name="documento" class="form-control" id="documento">
              </div>
            </div>
            <div class="row">              
              <div class="form-group col-md-3">             
                <label for="fixo">Tel. Fixo:</label>
                <input type="text" name="fixo" class="form-control" id="fixo">
              </div>
              <div class="form-group col-md-3">             
                <label for="cel">Tel. Celular:</label>
                <input type="text" name="cel" class="form-control" id="cel">
              </div>
               <br>
               <button type="subimit" class="btn btn-success">Salvar</button>
            </div>
          </form>         
        </div>
      </div>
    </div>
  </body>
</html>