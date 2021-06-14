<!--**
 * @author Cesar Szpak - Celke -   cesar@celke.com.br
 * @pagina desenvolvida usando framework bootstrap,
 * o código é aberto e o uso é free,
 * porém lembre -se de conceder os créditos ao desenvolvedor.
 *-->
<?php 
	include_once("conexao.php");
	session_start();
	/* Controlar abas*/
	if(!isset($_SESSION['control_aba'])){
		$_SESSION['control_aba'] = 0;
	}
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Criar pagina com abas</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
		
		<div class="container theme-showcase" role="main">
			<div class="page-header">
				<h1>Cadastrar Usuário</h1>
			</div>		
			<div class="row espaco">
				<div class="pull-right">
					<a href="destroi_sessao.php"><button type='button' class='btn btn-sm btn-success'>Novo Usuário</button></a>
				</div>
			</div>
			
			<?php
				if($_SERVER['REQUEST_METHOD']=='POST'){
					$request = md5(implode($_POST));
					if(isset($_SESSION['ultima_request']) && $_SESSION['ultima_request'] == $request){?>
						<div class="alert alert-danger" role="alert">Usuário já inserido!</div>
					<?php }elseif(!isset($_SESSION['ultimo_id_usuario'])){	
						$_SESSION['ultima_request'] = $request;
						$nome = $_POST['nome'];
						$cpf = $_POST['cpf'];
						$_SESSION['nome'] = $nome;
						$_SESSION['cpf'] = $cpf;						
						$result_dados_pessoais = "INSERT INTO usuarios (nome, cpf) VALUES ('$nome', '$cpf')";
						$resultado_dados_pessoais= mysqli_query($conn, $result_dados_pessoais);
						//ID do usuario inserido
						$ultimo_id_usuario = mysqli_insert_id($conn);
						$_SESSION['ultimo_id_usuario'] = $ultimo_id_usuario; ?>							
						<div class="alert alert-success" role="alert">Usuário inserido com sucesso</div>
						<?php $_SESSION['control_aba'] = 1;
					}
					if(isset($_POST['endereco'])){
						$id_usuario_editar = $_SESSION['ultimo_id_usuario'];
						$endereco = $_POST['endereco'];
						$numero = $_POST['numero'];
						$result_endereco = "INSERT INTO endereco (endereco, numero, usuario_id ) VALUES ('$endereco', '$numero', '$id_usuario_editar')";
						$resultado_endereco = mysqli_query($conn, $result_endereco);?>							
						<div class="alert alert-success" role="alert">Endereço inserido com sucesso</div>
						<?php $_SESSION['control_aba'] = 2;
					}
					if(isset($_POST['declaracao'])){
						$id_usuario_editar = $_SESSION['ultimo_id_usuario'];
						$datanasc = $_POST['datanasc'];
						$genero = $_POST['genero'];
						$result_declaracao = "INSERT INTO declaracao (datanasc, genero, usuario_id ) VALUES ('$datanasc', '$genero', '$id_usuario_editar')";
						$resultado_declaracao = mysqli_query($conn, $result_declaracao);?>							
						<div class="alert alert-success" role="alert">Dados inseridos com sucesso</div>
						<?php $_SESSION['control_aba'] = 3;
					}
					if(isset($_POST['dependentes'])){
						$id_usuario_editar = $_SESSION['ultimo_id_usuario'];
						$cpf1 = $_POST['cpf1'];
						$nome1 = $_POST['genero'];
						$result_dependentes = "INSERT INTO dependentes (cpf1, nome1, usuario_id ) VALUES ('$cpf1', '$nome1', '$id_usuario_editar')";
						$resultado_dependentes = mysqli_query($conn, $result_dependentes);?>							
						<div class="alert alert-success" role="alert">Dependentes inseridos com sucesso</div>
						<?php $_SESSION['control_aba'] = 4;
					}
		
				}
	
			?>
			<div>

			  <!-- Nav tabs -->
			  <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" <?php if($_SESSION['control_aba'] == 0){ echo "class='active'"; } ?> >
                    <a href="#dados_pessoais" aria-controls="home" role="tab" data-toggle="tab">Dados Pessoais</a>
                    </li>
                    <li role="presentation" <?php if($_SESSION['control_aba'] == 1){ echo "class='active'"; } ?> >
                    <a href="#endereco" aria-controls="endereco" role="tab" data-toggle="tab">Endereço</a>
            		</li>
                    <li role="presentation" <?php if($_SESSION['control_aba'] == 2){ echo "class='active'"; } ?> >
                    <a href="#declaracao" aria-controls="declaracao" role="tab" data-toggle="tab">Declaracao</a>
		    		</li> 
                    <li role="presentation" <?php if($_SESSION['control_aba'] == 3){ echo "class='active'"; } ?> >
			    	<a href="#dependentes" aria-controls="dependentes" role="tab" data-toggle="tab">Dependentes</a>
				    </li>
				 <?php
                    if($_SESSION['control_aba'] == 4){ ?>
                    <li role="presentation" class='active'>
                    <a href="#sucesso" aria-controls="home" role="tab" data-toggle="tab">Finalizado</a>
                    </li>
				 <?php } ?>
			  </ul>

			  <!-- Tab panes -->
			  <div class="tab-content">
				<div role="tabpanel" 
					<?php if($_SESSION['control_aba'] == 0){ 
						echo "class='tab-pane active'"; 
						}else{ 
							echo "class='tab-pane'"; 
						} ?> class="" id="dados_pessoais">
					<div style="padding-top:20px;">
						<form class="form-horizontal" action="" method="POST">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Nome</label>
                                <div class="col-sm-10">
                                    <input type="text" name='nome' class="form-control" id="nome" placeholder="Nome Completo" value="<?php if(isset($_SESSION['nome'])){ echo $_SESSION['nome']; }?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">CPF</label>
                                <div class="col-sm-10">
                                    <input type="text" name='cpf' class="form-control" id="cpf" placeholder="CPF" value="<?php if(isset($_SESSION['cpf'])){ echo $_SESSION['cpf']; } ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-success">Cadastrar</button>
                                </div>
                            </div>
                        </form>
					</div>
				</div>
				<div role="tabpanel"
					<?php if($_SESSION['control_aba'] == 1){ 
						echo "class='tab-pane active'"; 
						}else{ 
							echo "class='tab-pane'"; 
						} ?> class="" id="endereco">
					<div style="padding-top:20px;">
						<form class="form-horizontal" action="" method="POST">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Logradouro</label>
                                <div class="col-sm-10">
                                    <input type="text" name="endereco" class="form-control" id="endereco" placeholder="Endereço">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Número</label>
                                <div class="col-sm-10">
                                    <input type="text" name="numero" class="form-control" id="numero" placeholder="Número">
                                </div>
                            </div>
							<div class="form-group">
                                <label class="col-sm-2 control-label">Bairro</label>
                                <div class="col-sm-10">
                                    <input type="text" name="bairro" class="form-control" id="bairro" placeholder="Bairro">
                                </div>
                            </div>
							<div class="form-group">
                                <label class="col-sm-2 control-label">Complemento</label>
                                <div class="col-sm-10">
                                    <input type="text" name="complemento" class="form-control" id="complemento" placeholder="Bairro">
                                </div>
                            </div>
							<div class="form-group">
                                <label class="col-sm-2 control-label">CEP</label>
                                <div class="col-sm-10">
                                    <input type="text" name="cep" class="form-control" id="cep" placeholder="CEP">
                                </div>
                            </div>
							<div class="form-group">
                                <label class="col-sm-2 control-label">Estado</label>
                                <div class="col-sm-10">
                                    <input type="text" name="estado" class="form-control" id="estado" placeholder="estado">
                                </div>
                            </div>
							<div class="form-group">
                                <label class="col-sm-2 control-label">Município</label>
                                <div class="col-sm-10">
                                    <input type="text" name="municipio" class="form-control" id="municipio" placeholder="Município">
                                </div>
                            </div>
							<div class="form-group">
                                <label class="col-sm-2 control-label">Tempo de Moradia</label>
                                <div class="col-sm-10">
                                    <input type="text" name="tempomoradia" class="form-control" id="tempomoradia" placeholder="Tempo Moradia Município Atual">
                                </div>
                            </div>
							<div class="form-group">
                                <label class="col-sm-2 control-label">Celular (Waths)</label>
                                <div class="col-sm-10">
                                    <input type="text" name="celular" class="form-control" id="celular" placeholder="Celular">
                                </div>
                            </div>
							<div class="form-group">
                                <label class="col-sm-2 control-label">Contato 2</label>
                                <div class="col-sm-10">
                                    <input type="text" name="contato2" class="form-control" id="contato2" placeholder="Contato 2">
                                </div>
                            </div>
							<div class="form-group">
                                <label class="col-sm-2 control-label">E-MAIL</label>
                                <div class="col-sm-10">
                                    <input type="text" name="email" class="form-control" id="email" placeholder="E-MAIL">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-success">Cadastrar</button>
                                </div>
                            </div>
                        </form>
					</div>
                </div>
                <div role="tabpanel"
				<?php if($_SESSION['control_aba'] == 2){ 
						echo "class='tab-pane active'"; 
						}else{ 
							echo "class='tab-pane'"; 
						} ?> class="" id="declaracao">
					<div style="padding-top:20px;">
						<form class="form-horizontal" action="" method="POST">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Data de Nascimento</label>
                                <div class="col-sm-10">
                                    <input type="text" name='datanascimento' class="form-control" id="datanascimento" placeholder="Data de Nascimento">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Genero</label>
                                <div class="col-sm-10">
                                    <input type="text" name='genero' class="form-control" id="genero" placeholder="genero">
                                </div>
                            </div>
							<div class="form-group">
                                <label class="col-sm-2 control-label">Nacionalidade</label>
                                <div class="col-sm-10">
                                    <input type="text" name='nacionalidade' class="form-control" id="nacionalidade" placeholder="Nacionalidade">
                                </div>
                            </div>
							<div class="form-group">
                                <label class="col-sm-2 control-label">Estado</label>
                                <div class="col-sm-10">
                                    <input type="text" name='estado' class="form-control" id="estado" placeholder="Estado">
                                </div>
                            </div>
							<div class="form-group">
                                <label class="col-sm-2 control-label">Município</label>
                                <div class="col-sm-10">
                                    <input type="text" name='municipio' class="form-control" id="municipio" placeholder="Cidade / Município">
                                </div>
                            </div>
							<div class="form-group">
                                <label class="col-sm-2 control-label">Escolaridade</label>
                                <div class="col-sm-10">
                                    <input type="text" name='escolaridade' class="form-control" id="escolaridade" placeholder="Escolaridade">
                                </div>
                            </div>
							<div class="form-group">
                                <label class="col-sm-2 control-label">Vinculo Empregatício</label>
                                <div class="col-sm-10">
                                    <input type="text" name='vinculoempregaticio' class="form-control" id="vinculoempregaticio" placeholder="Vinculo Empregatício">
                                </div>
                            </div>
							<div class="form-group">
                                <label class="col-sm-2 control-label">Renda</label>
                                <div class="col-sm-10">
                                    <input type="text" name='renda' class="form-control" id="renda" placeholder="Renda Mensal R$">
                                </div>
                            </div>
							<div class="form-group">
                                <label class="col-sm-2 control-label">Mulher Chefe de Família</label>
                                <div class="col-sm-10">
                                    <input type="text" name='mulherchefe' class="form-control" id="mulherchefe" placeholder="Mulher Chefe de Família">
                                </div>
                            </div>
							<div class="form-group">
                                <label class="col-sm-2 control-label">Oncológico</label>
                                <div class="col-sm-10">
                                    <input type="text" name='oncologico' class="form-control" id="oncologico" placeholder="Paciente Oncológico">
                                </div>
                            </div>
							<div class="form-group">
                                <label class="col-sm-2 control-label">Doença Crônica</label>
                                <div class="col-sm-10">
                                    <input type="text" name='cronico' class="form-control" id="cronico" placeholder="Paciente Crônico ">
                                </div>
                            </div>
							<div class="form-group">
                                <label class="col-sm-2 control-label">Deficiente</label>
                                <div class="col-sm-10">
                                    <input type="text" name='deficiente' class="form-control" id="deficiente" placeholder="Deficiente">
                                </div>
                            </div>
							<div class="form-group">
                                <label class="col-sm-2 control-label">Tipo de Deficiencia</label>
                                <div class="col-sm-10">
                                    <input type="text" name='tipodeficiente' class="form-control" id="tipodeficiente" placeholder="Tipo de Deficiente">
									</div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-success">Cadastrar</button>
                                </div>
                            </div>
                        </form>
					</div>
                </div>
                <div role="tabpanel"
					<?php if($_SESSION['control_aba'] == 3){ 
						echo "class='tab-pane active'"; 
						}else{ 
							echo "class='tab-pane'"; 
						} ?> class="" id="dependentes">
					<div style="padding-top:20px;">
						<form class="form-horizontal" action="" method="POST">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Parentesco</label>
                                <div class="col-sm-10">
                                    <input type="text" name='parentesco' class="form-control" id="parentesco" placeholder="Grau Parentesco">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Nome</label>
                                <div class="col-sm-10">
                                    <input type="text" name='nome1' class="form-control" id="nome1" placeholder="Nome Completo">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">CPF</label>
                                <div class="col-sm-10">
                                    <input type="text" name='cpf1' class="form-control" id="cpf1" placeholder="CPF">
                                </div>
                            </div>
							<div class="form-group">
                                <label class="col-sm-2 control-label">Data de Nascimento</label>
                                <div class="col-sm-10">
                                    <input type="text" name='data1' class="form-control" id="data1" placeholder="Data de Nascimento">
                                </div>
                            </div>
							<div class="form-group">
                                <label class="col-sm-2 control-label">Renda R$</label>
                                <div class="col-sm-10">
                                    <input type="text" name='renda1' class="form-control" id="renda1" placeholder="Renda do Dependente">
                                </div>
                            </div>
							<div class="form-group">
                                <label class="col-sm-2 control-label">Oncológico</label>
                                <div class="col-sm-10">
                                    <input type="text" name='oncologico1' class="form-control" id="oncologico1" placeholder="Paciente Oncológico">
                                </div>
                            </div>
							<div class="form-group">
                                <label class="col-sm-2 control-label">Doença Crônica</label>
                                <div class="col-sm-10">
                                    <input type="text" name='cronico1' class="form-control" id="cronico1" placeholder="Paciente Crônico ">
                                </div>
                            </div>
							<div class="form-group">
                                <label class="col-sm-2 control-label">Deficiente</label>
                                <div class="col-sm-10">
                                    <input type="text" name='deficiente1' class="form-control" id="deficiente1" placeholder="Deficiente">
                                </div>
                            </div>
							<div class="form-group">
                                <label class="col-sm-2 control-label">Tipo de Deficiencia</label>
                                <div class="col-sm-10">
                                    <input type="text" name='tipodeficiente1' class="form-control" id="tipodeficiente1" placeholder="Tipo de Deficiente">
                                </div>
                            </div>
							<div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-success">Cadastrar</button>
                                </div>
                            </div>
                        </form>
					</div>
                 </div>
                                  
                </div>
            </div>
				<?php
					/*Apresenta a aba somente após inserir o endereço*/
					if($_SESSION['control_aba'] == 4){ ?>
						<div role="tabpanel" class='tab-pane active' id="sucesso">
							<div style="padding-top:20px;">
								<div class="alert alert-info" role="alert">Dados do usuário inserido com sucesso! Deseja inserir novo usuário? <a href="destroi_sessao.php">CLIQUE AQUI</a></div>
							</div>
						</div>
					<?php }
				?>
		    
        </div>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>