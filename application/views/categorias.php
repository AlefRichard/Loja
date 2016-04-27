<div id="homebody">
	<div class="alinhado-centro borda-base espaco-vertical container">
		<h3>Seja Bem-vindo a nossa loja.</h3>
		<p>A melhor loja de comida, especiarias e temperos.
			Compre online e receba em casa.</p>
		<a class="btn btn-medium btn-success" href="#">Cadastre-se</a>
	</div>
	<div class="container">
		<?php
			$contador = 0;
			foreach ($categorias as $categoria)
			{
			 	$contador++;
			 	echo "<div class='span3 caixacategoria'>";
			 	echo heading($categoria->titulo,3);
			 	echo "<p>".word_limiter($categoria->descricao,40)."</p>";
			 	echo anchor(base_url("categoria/".$categoria->id."/".
			 		limpar($categoria->titulo)), "Ver produtos", array('class'=>'btn'));
			 	echo "</div>";

			 	if ($contador%3 == 0)
			 	{
			 		echo "</div><div class='container'>";
			 	}
			}
		?>
	</div>
</div>