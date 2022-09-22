<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Truque na Manga</title>
</head>
<body>
 
<form  method="GET" action="cadastro_de_cliente.php">

                     <legend class="legend"> Cadastro de Cliente no Truque na Manga</legend>
                                <div>
                                        <label for="nome">Nome:</label>
                                        <input type="text" id="nome" placeholder="digite seu nome" name="nome"/>
                                </div>
                                
                                <div>
                                    <input  type="submit" value="Salvar">
                                </div>
               
                <select>
                <?php
                            
                            $nome = $_GET['nome'];
                        
                            $conexao = new PDO('mysql:host=localhost;port=3306;dbname=truque_na_manga', 'root', '');

                            $sql = "    INSERT INTO cliente (nome)
                                        VALUES      ('$nome')";

                            $result = $conexao -> exec($sql);
                            if($result){
                                echo '<p style="color:green"> Seu cadastro foi realizado com sucesso</p>';
                           }else{
                                echo '<p style="color:red> Erro ao se cadastrar</p>';
                           };


                            $conexao = new PDO('mysql:host=localhost;port=3306;dbname=truque_na_manga', 'root', '');

                            $sql = ' SELECT * FROM cliente';

                            #dataset retorna todos os dados da consulta no sql
                            $dataset = $conexao->query($sql);

                            #resultset retorna o dados q estao no banco
                            $resultset  = $dataset->fetchAll();


                            #BLOCO DE CODIGO PHP
                            foreach ($resultset as $row) {
                                echo  '<option value="' . $row['id'] . '">' . $row['cliente'].'</option>';
                            }

                            ?>

                       
                   </fieldset>  
                </select>

        <input type="submit" value="Enviar" />
        
<!-- Code injected by live-server -->
<script>
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>
</body>
</html>