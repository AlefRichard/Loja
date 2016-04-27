<div id="homebody container">
	<div class="alinhado-centro borda-base espaco-vertical container">
		<?php
			echo heading($categorias['detalhes'][0]->titulo,3) .
			"<p>".$categorias['detalhes'][0]->descricao."</p>";
		?>
	</div>
	<div class="container">
		<?php
			$contador = 0;
			foreach ($categorias['produtos'] as $produto)
			{
			 	$contador++;
			 	echo "<div class='span3 caixacategoria'>";
			 	echo heading($produto->titulo,3);
			 	echo heading($produto->codigo,6);
			 	echo "<p>".word_limiter($produto->descricao,15)."</p>";
			 	echo heading($produto->preco ,5);
			 	echo anchor(base_url("produto/".$produto->id."/".
			 		limpar($produto->titulo)), "Ver produtos", array('class'=>'btn'));
			 	echo "</div>";


			 	if ($contador%3 == 0)
			 	{
			 		echo "</div><div class='container'>";
			 	}
			}
		?>
	</div>
</div>