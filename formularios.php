<?php
if(isset($_POST['submit']))
{

  /*
  print_r('Nome Completo: '. $_POST['nome']);
 print_r('<br>');
 print_r('Data de nascimento: '. $_POST['data_nasc']);
 print_r('<br>');
 print_r('Usuario: '. $_POST['usuario']);
 print_r('<br>');
  print_r('Email: '. $_POST['email']);
  print_r('<br>');
  print_r('Senha: '. $_POST['senha']);
  print_r('<br>');
   print_r('Telefone: '. $_POST['telefone']);
   print_r('<br>');
   print_r('Celular: '. $_POST['celular']);
   print_r('<br>');
   print_r('Endereço: '. $_POST['endereco']);
   print_r('<br>');
   print_r('País: '. $_POST['pais']);
   print_r('<br>');
   print_r('Estado: '. $_POST['estado']);
   print_r('<br>');
  print_r('Cep: '. $_POST['cep']);
 print_r('<br>');
 print_r('Informações: '. $_POST['informacoes']);
 print_r('<br>');
  print_r('Pagamento: '. $_POST['pagamento']);
  print_r('<br>');
  print_r('no_cartao: '. $_POST['no_cartao']);
  print_r('<br>');
  print_r('nu_cartao: '. $_POST['nu_cartao']);
  print_r('<br>');
  print_r(' Data de Expiração: '. $_POST['d_expira']);
  print_r('<br>');
  print_r(' codigo: '. $_POST['codigo']);
  
 
 */
 
  include_once('config.php');
  $nome = $_POST ['nome'];
  $data_nasc = $_POST['data_nasc'];
  $usuario = $_POST ['usuario'];
  $email = $_POST['email'];
  $senha = $_POST['senha'];
  $telefone = $_POST['telefone'];
  $celular = $_POST['celular'];
  $endereco = $_POST['endereco'];
  $pais = $_POST['pais'];
  $estado = $_POST['estado'];
  $cep = $_POST['cep'];
  $informacoes = $_POST['informacoes'];
  $pagamento = $_POST['pagamento'];
  $no_cartao = $_POST['no_cartao'];
  $nu_cartao = $_POST['nu_cartao'];
  $d_expira = $_POST['d_expira'];
  $codigo = $_POST['codigo'];


  
    $reset = mysqli_query($conexao, "INSERT INTO cadastro
    (nome,data_nasc,usuario,email,senha,telefone,celular,endereco,pais,estado,cep,informacoes,pagamento,no_cartao,nu_cartao,d_expira,codigo)
     VALUES ('$nome','$data_nasc','$usuario','$email','$senha','$telefone','$celular','$endereco','$pais','$estado','$cep','$informacoes','$pagamento','$no_cartao','$nu_cartao','$d_expira','$codigo')");

header('Location:logins.php');
}


?>

<!doctype html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/jquery-ui.css"  >
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"  >
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/jquery-ui.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script> 
   
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Wesley-Desenvolvedor-Web</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/checkout/">

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      #data_nascimento{
             border: none;
             padding: 8px;
             border-radius: 10px;
             outline: none;
             font-size: 15px;

         }

    </style>
    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
    <link href="estilo.css" rel="stylesheet">



<!-- Injecting site-wide to the head -->
<!-- GetButton.io widget -->
<script type="text/javascript">
  (function () {
      var options = {
          facebook: "100036754243412", // Facebook page ID
          whatsapp: "+5511988574097", // WhatsApp number
          call_to_action: "Falar com Wesley", // Call to action
          button_color: "#129BF4", // Color of button
          position: "right", // Position may be 'right' or 'left'
          order: "whatsapp,facebook", // Order of buttons
      };
      var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
      var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
      s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
      var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
  })();
</script>

  </head>
  
  <body class="bg-light">
    <div class="bg"></div>
      <div class="bg"></div>
      <div class="bg"></div>
    <div class="container">
  <div class="py-5 text-center">
    <img src="logo.png"  alt="" width="170" height="170">
    <h2>Formulário de contato</h2>
  </div>
  <form action="formularios.php" method="POST">

  <div class="row">
    <div class="col-md-4 order-md-2 mb-4">
    <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted">Super dicas:
        </span>
        <span class="badge badge-secondary badge-pill">--</span>
      </h4>
      <ul class="list-group mb-3">
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Dicas do formulário</h6>
            <small class="text-muted">Breve descrição
            </small>
          </div>
          <span class="text-muted">--</span>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Primeiro passo:</h6>
            <small class="text-muted">Preecha com seus dados todos os campos obrigatórios.
            </small>
          </div>
          <span class="text-muted">--</span>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Segundo passo:
            </h6>
            <small class="text-muted">Revise todos as informações que foram digitadas para corrigir possíveis erros, antes de enviar. 
            </small>
          </div>
          <span class="text-muted">--</span>
        </li>
        <li class="list-group-item d-flex justify-content-between bg-light">
          <div class="text-success">
            <h6 class="my-0">Terceiro passo:
            </h6>
            <small>Após todos os dados inseridos corretamente.
            </small>
          </div>
          <span class="text-success">--</span>
        </li>
        <li class="list-group-item d-flex justify-content-between">
          <span>Clique no botão Enviar, que está no final deste formulário.
          </span>
          <strong></strong>
        </li>
    
      </ul>
    </div>
    <div class="col-md-8 order-md-1">
      <h4 class="mb-3">Preencha os campos abaixo</h4>
      <form class="needs-validation" novalidate>
        <div class="row">
          <div class="col-md-8 mb-3">
            <label for="nome">Nome Completo</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="" value="" autocomplete="off" value="" required="required" data-mask-reverse="true">
            <small class="text-muted"> Digite seu nome completo.</small>
            <div class="invalid-feedback">
              É necessário ter o nome válido.
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <label for="data_nasc">Data de Nacimento</label>
            <input type="date" class="form-control" id="data_nasc" name="data_nasc" placeholder="00/00/0000" value="" autocomplete="off" value="" required="required" data-mask-reverse="true">
            <div class="invalid-feedback">
              É necessário sobrenome válido.
            </div>
          </div>
        </div>
        <div class="mb-3">
          <label for="usuario">Nome do usuário</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">@</span>
            </div>
            <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Nome do usuário" autocomplete="off" value="" required="required" data-mask-reverse="true">
            <div class="invalid-feedback">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-8 mb-3">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" placeholder="Nome@exemplo.com" value="" autocomplete="off" value="" required="required" data-mask-reverse="true">
            <small class="text-muted"> Digite um email válido.</small>
            <div class="invalid-feedback">
         
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <label for="senha">Senha</label>
            <input type="password" class="form-control"  name="senha" placeholder="" value="" autocomplete="off" value="" required="required" data-mask-reverse="true">
            <small class="text-muted"> Digite uma senha.</small>
             
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="tel">Telefone <span class="text-muted"></span></label>
            <input id="tel" maxlength="9" class="form-control" type="tel" name="telefone" placeholder="00 0000 0000"data-mask="00 0000-0000" autocomplete="off" value="" data-mask-reverse="true" required>
            <small class="text-muted"> Por favor, digite o número do celular válido.</small>
            
          </div>
          <div class="col-md-6 mb-3">
            <label for="tel">Celular</span></label>
            <input id="tel" maxlength="12" class="form-control" type="tel" name="celular" placeholder="00 0 0000-0000" data-mask="00 0 0000-0000" autocomplete="off" value="" required="required" data-mask-reverse="true">
            <small class="text-muted"> Por favor, digite o número do celular válido.</small>
          </div>
        </div>
        <div class="mb-3">
          <label for="endereco">Endereço</label>
          <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Rua Principal, 1234" autocomplete="off" value="" required="required" data-mask-reverse="true">
          <small class="text-muted"> Por favor, digite seu endereço de envio.</small>
         
        </div>
        <div class="row">
          <div class="col-md-4 mb-3">
            <label for="pais">País</label>
            <select class="custom-select d-block w-100" id="pais" name="pais" autocomplete="off" value="" required="required" data-mask-reverse="true">
              <option value="">Escolher...</option>
              <option>Brasil</option>
            </select>
            <small class="text-muted">Por favor, selecione o país.</small>
            <div class="invalid-feedback">
              Por favor, selecione um país válido.
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <label for="estado">Estado</label>
            <select class="custom-select d-block w-100" id="estado" name="estado" autocomplete="off" value="" required="required" data-mask-reverse="true">
              <option value="">Escolher...</option>
              <option > ACRE</option>
							<option >ALAGOAS</option>
							<option >AMAZONAS</option>
							<option> AMAPÁ</option>
							<option> BAHIA</option>
              <option> CEARÁ</option>
							<option> DISTRITO FEDERAL</option>
							<option> ESPÍRITO SANTO</option>
              <option> GOIÁS</option>
              <option> MARANHÃO</option>
							<option> MINAS GERAIS</option>
							<option> MATO GROSSO DO SUL</option>
							<option> MATO GROSSO</option>
							<option> PARÁ</option>
							<option> PARAÍBA</option>
							<option> PERNAMBUCO</option>
							<option> PIAUÍ</option>
							<option> PARANÁ</option>
							<option> RIO DE JANEIRO</option>
							<option> RIO GRANDE DO NORTE</option>
							<option> RONDÔNIA</option>
							<option> RORAIMA</option>
							<option> RIO GRANDE DO SUL</option>
							<option> SANTA CATARINA</option>
							<option> SERGIPE</option>
							<option> SÃO PAULO</option>
							<option> TOCANTINS</option>
            </select>
            <small class="text-muted">Por favor, selecione um estado.</small>
          
          </div>
          <div class="col-md-4 mb-3">
            <label for="cep">Cep</label>
            <input id="cep" name="cep" maxlength="9" class="form-control" type="cep" placeholder="00000-000" data-mask="00000-000" autocomplete="off" value="" required="required" data-mask-reverse="true">
            <small class="text-muted">Por favor, forneça um cep válido.</small>
      
          </div>
        </div>
        <hr class="mb-1">
        <h4 class="mb-3">Informaçoes</h4>
        <div class="d-block my-4">
          <div class="custom-control custom-radio">

        <input type="radio" id="mesmo_endereco" name="informacoes" value="mesmo_endereco" required autocomplete="off">
                <label for="mesmo_endereco">Endereço de envio e cobrança.</label>
          </div>
          <div class="custom-control custom-radio">
                <input type="radio" id="salvar_informacoes" name="informacoes" value="salvar_informacoes" required autocomplete="off">
                <label for="salvar_informacoes">Guarde essas informações.</label>
        </div>
        <div class="custom-control custom-radio">
                <input type="radio" id="nenhuma" name="informacoes" value="nenhuma" required autocomplete="off">
                <label for="nenhuma"> Nenhuma das anteriores.</label>
              
          </div>
        </div>
        <hr class="mb-1">
        <h4 class="mb-3">Pagamento</h4>
        <div class="d-block my-4">
          <div class="custom-control custom-radio">
                <input type="radio" id="credito" name="pagamento" value="credito" required autocomplete="off">
                <label for="credito">Cartão de crédito.</label>
                <br>
                <input type="radio" id="debito" name="pagamento" value="debito" required autocomplete="off">
                <label for="debito">Cartão de débito.</label>
                <br><br>

        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="no_cartao">Nome no cartão</label>
            <input type="text" class="form-control" id="no_cartao" name="no_cartao" placeholder="" required>
            <small class="text-muted">Nome completo como exibido no cartão.</small>
            <div class="invalid-feedback">
            
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="nu_cartao">Número do cartão de crédito</label>
            <input id="nu_cartao" maxlength="19" class="form-control" type="nu_cartao" name="nu_cartao" placeholder="" data-mask="0000 0000 0000 0000" autocomplete="off" value="" required="required" data-mask-reverse="true">
            <small class="text-muted">Número completo como exibido no cartão.</small>
            <div class="invalid-feedback">
             
              </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 mb-3">
            <label for="d_expira">Expiração</label>
            <input id="d_expira" name="d_expira" maxlength="5" class="form-control" type="d_expira" placeholder="" data-mask="00/00" autocomplete="off" value="" required="required" data-mask-reverse="true">
            <small class="text-muted">Data de validade como exibido no cartão.</small>
            <div class="invalid-feedback">
              Data de validade necessária
              </div>
          </div>
          <div class="col-md-3 mb-3">
            <label for="codigo">CVV</label>
            <input id="codigo" name="codigo" maxlength="5" class="form-control" type="codigo" placeholder="" data-mask="0000"  autocomplete="off" value="" required="required" data-mask-reverse="true">
            <small class="text-muted">Codígo de segurança como exibido no cartão.</small>
            <div class="invalid-feedback">
              Código de segurança necessário
            </div>
          </div>
        </div>
       
        <hr class="mb-4">
      <button class="btn btn-primary btn-lg btn-block" name="submit" id="submit" onclick="Enviar()"style="margin-left:-10px">
        <span class="glyphicon glyphicon-user" aria-hidden="true"></span> Enviar
         </button>
        </form>
    </div>
  </div>
  <footer class="my-5 pt-5 text-muted text-center text-small">

<div class="card-body">
  <a href="index.html" class="btn btn-outline-danger  btn-lg fas fa-hand-pointer" aria-hidden="true"> Sair da página</a>
</button>

    <p class="mb-1">&copy; Copyright 2020 Wesley Desenvolvedor Web | Todos os direitos reservados.</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacidade</a></li>
      <li class="list-inline-item"><a href="#">Termos</a></li>
      <li class="list-inline-item"><a href="mailto: wesleydesenvolvedorweb@gmail.com">Apoio</a></li>
    </ul>
  </footer>
</div>
  </body>
  
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
	integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
	crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
	integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
	crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
	integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
	crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
 
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.js"></script>
   <script src="js/controller.js"></script>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
        <script src="form-validation.js"></script>
        <script type="text/javascript" src="js/jquery.mask.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="javascritp.js"></script>

</html>
