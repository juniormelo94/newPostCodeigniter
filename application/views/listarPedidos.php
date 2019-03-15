
<?php 
	$this->view('header');
?>

<div class="conteudo">

	<h3>Lista de Pedidos</h3>

	<table class="table">
	  <thead class="thead-dark">
	    <tr>
	      <th scope="col">OrderNumber</th>
	      <th scope="col">CourierCode</th>
	      <th scope="col">TerminalSN</th>
	      <th scope="col">PhoneNumber</th>
	      <th scope="col">Nickname</th>
	      <th scope="col">Email</th>
	      <th scope="col">Quantity</th>
	    </tr>
	  </thead>
	  <tbody>
	   <?php foreach ($pedidos as $key => $pedido) { ?>
	    <tr>
	      <td><?php echo $pedido->OrderNumber;?></td>
	      <td><?php echo $pedido->CourierCode;?></td>
	      <td><?php echo $pedido->TerminalSN;?></td>
	      <td><?php echo $pedido->PhoneNumber;?></td>
	      <td><?php echo $pedido->Nickname;?></td>
	      <td><?php echo $pedido->Email;?></td>
	      <td><?php echo $pedido->Quantity;?></td>
	    </tr>
	    <?php } ?>
	   </tbody>
	   
	</table>
</div>	

<?php $this->view('footer'); ?>