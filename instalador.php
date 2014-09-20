<!DOCTYPE html>
<html lang="en" manifest="cache.php">
<head>
	<meta charset="UTF-8">
	<title>Instalador</title>

	<script>
	var top = window.frames.top;
	var logar = top.log;
	var progresso = top.progresso;

	window.addEventListener("load", function() {

		applicationCache.addEventListener("checking", function(){
			logar("Iniciando comunicação com o servidor");
		});

		applicationCache.addEventListener("noupdate", function(){
			logar("Você já tem a última versão instalada");
		});

		applicationCache.addEventListener("cached", function(){
			logar("Aplicativo instalado com sucesso");
		});

		applicationCache.addEventListener("updateready", function(){
			logar("Aplicativo atualizado com sucesso");
		});

		applicationCache.addEventListener("error", function(){
			logar("Houve um erro na instalação. Tente novamente");
		});

		applicationCache.addEventListener("downloading", function(){
			logar("Download do aplicativo iniciado");
		});

		applicationCache.addEventListener("progress", function(event){
			var parte = event.loaded;
			var total = event.total;
			var porcentagem = Math.floor((parte*100)/total);
			logar("Baixando parte "+[parte, total].join(" de "));
			progresso(porcentagem);
		});

	}, true);

	</script>
</head>
<body>
	<h1>Instalador</h1>

	<script>
	
	</script>
</body>
</html>