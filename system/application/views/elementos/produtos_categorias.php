<?php
	
echo "<div id='menu-categorias'>";
	
	echo form_open(base_url().'produtos/busca');
	echo form_input('busca');
	echo form_submit('mysubmit','Buscar');
	echo form_close();

	echo heading('Categorias',3);
	
	foreach ($categorias as $categoria):
		$lista[] = "<a href=' ".base_url()."produtos/categoria/".$categoria->id.">".$categoria->nome."</a>";
	endforeach;
	
echo ul($lista);

echo "</div>";

?>