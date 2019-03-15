<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    	<div class="modal-content">
        	<div class="modal-header">
        		<h5 class="modal-title" id="exampleModalLabel">Novo pedido</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
        </div>
        <div class="modal-body">
        	<div class="panel panel-info">
	        	<div class="panel-heading">
	            	<div class="panel-body">

	                    <form  id="formPedido" class="form-horizontal">
	                        <div id="div_id_username" class="form-group required">
	                            <label class="control-label col-md-12  requiredField"> Número do pedido<span class="asteriskField">*</span> </label>
	                            <div class="controls col-md-12 ">
	                                <input class="input-md  textinput textInput form-control"  name="OrderNumber" placeholder="exe: 987654321" type="text"/>
	                            </div>
	                        </div>

	                        <div id="div_id_username" class="form-group required">
	                            <label class="control-label col-md-12  requiredField"> Código do correio<span class="asteriskField">*</span> </label>
	                            <div class="controls col-md-12">
	                                <input class="input-md  textinput textInput form-control" name="CourierCode" placeholder="exe: 10001" type="text"/>
	                            </div>
	                        </div>

	                        <div class="form-group required">
	                            <label class="control-label col-md-12  requiredField"> Terminal SN<span class="asteriskField">*</span> </label>
	                            <div class="controls col-md-12">
	                                <input class="input-md  textinput textInput form-control" name="TerminalSN" placeholder="exe: 1830111-01" type="text"/>
	                            </div>
	                        </div>

	                        <div class="form-group required">
	                            <label class="control-label col-md-12  requiredField"> Número de telefone<span class="asteriskField">*</span> </label>
	                            <div class="controls col-md-12 ">
	                                <input class="input-md  textinput textInput form-control" name="PhoneNumber" placeholder="exe: 11983337615"  type="text" />
	                            </div>
	                        </div>

	                        <div class="form-group required">
	                            <label class="control-label col-md-12  requiredField"> Apelido<span class="asteriskField">*</span> </label>
	                            <div class="controls col-md-12 ">
	                                <input class="input-md  textinput textInput form-control" name="Nickname" placeholder="exe: Henrique Vital"  type="text"/>
	                            </div>
	                        </div>

	                        <div class="form-group required">
	                            <label class="control-label col-md-12 requiredField"> E-mail<span class="asteriskField">*</span> </label>
	                            <div class="controls col-md-12">
	                                <input class="input-md  textinput textInput form-control" name="Email" placeholder="exe: henrique.vital@newpost.com"  type="email"/>
	                            </div>
	                        </div>

	                        <div class="form-group required">
	                            <label class="control-label col-md-12 requiredField"> Quantidade<span class="asteriskField">*</span> </label>
	                            <div class="controls col-md-12">
	                                <input class="input-md  textinput textInput form-control" name="Quantity" placeholder="exe: 2"  type="text"/>
	                            </div>
	                        </div>

	                        <div class="form-group required">
	                            <label class="control-label col-md-12 requiredField"> Tamanho<span class="asteriskField">*</span> </label>
	                            <div class="controls col-md-12">
	                                <input class="input-md  textinput textInput form-control" name="Size" placeholder="exe: 15"  type="text"/>
	                            </div>
	                        </div>
	                        <span id="criar-pedido-mensagem">
	                        </span>
	                    </form>                    	
	           		</div>
	        	</div>
      		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" id="btnEnviar" onclick="btnEnviar()" class="btn btn-primary">Criar</button>
      </div>
    </div>
  </div>
</div>