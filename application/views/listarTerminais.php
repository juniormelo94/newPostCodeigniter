
<?php 
	$this->view('header');
?>



<div class="conteudo">
	<h3>Lista de terminais</h3>

	<table class="table">
	  <thead class="thead-dark">
	    <tr>
	      <th scope="col">TerminalName</th>
	      <th scope="col">TerminalSN</th>
	      <th scope="col">ProvinceCode</th>
	      <th scope="col">Longitude</th>
	      <th scope="col">Latitude</th>
	      <th scope="col">Position</th>
	      <th scope="col">Usable</th>
	    </tr>
	  </thead>
	  <tbody>
	   <?php foreach ($resposta['Result'] as $key => $terminal) { ?>
	    <tr>
	      <td><?php echo $terminal['TerminalName'];?></td>
	      <td><?php echo $terminal['TerminalSN'];?></td>
	      <td><?php echo $terminal['ProvinceCode'];?></td>
	      <td><?php echo $terminal['Longitude'];?></td>
	      <td><?php echo $terminal['Latitude'];?></td>
	      <td><?php echo $terminal['Position'];?></td>
	      <td><?php echo $terminal['Usable'];?></td>
	    </tr>
	    <?php } ?>
	   </tbody>
	   
	</table>
</div>


<?php $this->view('footer'); ?>