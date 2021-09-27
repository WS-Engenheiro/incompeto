$(document).ready(function(){
    $(window).scroll(function(){
        // sticky navbar on scroll script
        if(this.scrollY > 20){
            $('.navbar').addClass("sticky");
        }else{
            $('.navbar').removeClass("sticky");
        }
        
        // scroll-up button show/hide script
        if(this.scrollY > 500){
            $('.scroll-up-btn').addClass("show");
        }else{
            $('.scroll-up-btn').removeClass("show");
        }
    });

    // slide-up script
    $('.scroll-up-btn').click(function(){
        $('html').animate({scrollTop: 0});
        // removing smooth scroll on slide-up button click
        $('html').css("scrollBehavior", "auto");
    });

    $('.navbar .menu li a').click(function(){
        // applying again smooth scroll on menu items click
        $('html').css("scrollBehavior", "smooth");
    });

    // toggle menu/navbar script
    $('.menu-btn').click(function(){
        $('.navbar .menu').toggleClass("active");
        $('.menu-btn i').toggleClass("active");
    });

    var typed = new Typed(".typing", {
        strings: ["Desenvolvedor", "Analista de Sistemas ", "Engenheiro da Computação", ],
        typeSpeed: 100,
        backSpeed: 60,
        loop: true
    });

    // owl carousel script
    $('.carousel').owlCarousel({
        margin: 20,
        loop: true,
        autoplayTimeOut: 2000,
        autoplayHoverPause: true,
        responsive: {
            0:{
                items: 1,
                nav: false
            },
            600:{
                items: 2,
                nav: false
            },
            1000:{
                items: 3,
                nav: false
            }
        }
    });
});


// Exemplo de partida JavaScript para desativar envios de formulários se houver campos inválidos
(function () {
    'use strict'
  
    window.addEventListener('load', function () {
      // Buscar todos os formulários que queremos aplicar estilos de validação bootstrap personalizados para
      var forms = document.getElementsByClassName('needs-validation')
  
      // Loop sobre eles e impedir a submissão
      Array.prototype.filter.call(forms, function (form) {
        form.addEventListener('submit', function (event) {
          if (form.checkValidity() === false) {
            event.preventDefault()
            event.stopPropagation()
          }
          form.classList.add('was-validated')
        }, false)
      })
    }, false)
  }())


$(function () {
    'use strict'
  
    $('[data-toggle="offcanvas"]').on('click', function () {
      $('.offcanvas-collapse').toggleClass('open')
    })
  })
  
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


  function Enviar(){
    valida =Enviar();
    if(valida != ""){
      alert(valida);
      return;
    }
    
    data = {  nome: $("#Nome").val(),
              sobrenome: $("#Sobrenome").val(),
              destino: $("#Destino").val(),
              ordem: $("#Ordem").val(),
            };
     $.post("formularios.php?acao=Enviar", data, function (retorno) {
        if (retorno == "ok"){
          MontaListaDestinatario();
          alert("usuário inserido com sucesso.");
           alert("Pressione em MostrarTodos.");
           data = {  tipo: $("#tipo").val(''),
              email: $("#Email").val(''),
              destino: $("#Destino").val(''),
              ordem: $("#Ordem").val(''),
    
    
            };
        }else{
          alert("Falha na inclusão do usuário!");
        }
     }); 
    data = {  tipo: $("#tipo").val(''),
              banco_dados: $("#BancoDeDados").val(''),
              frequencia: $("#FrequenciaDeEnvio").val(''),
              titulo: $("#Nome").val(""),
              procedure_boletim: $("#ProcedureDeEnvio").val(''),
              servidor: $("#ServidorDeEnvio").val(''),
            };
    
        }
    function Validarformulario(){
    var msg = "";
    
    if($("#Nome").val() == ""){
      msg += "Digite um nome válido.\n";
    }
    if($("#Email").val() == ""){
      msg += "Digite um e-mail válido.\n";
    }
    if($("#Destino").val() == ""){
      msg += "Selecione o destino.\n";
    }
    if($("#Ordem").val() == ""){
      msg += "Digite a ordem.\n";
    
    }
    
    return msg;
    }

  
    $(document).ready(function(){

      $('.date_time').mask('00/00/0000 00:00:00');
      $('.cep').mask('00000-000',{reverse: true});
      $('.tel').mask('00 000-0000',{reverse: true});
      $('.cel').mask('00 0 0000-0000',{reverse: true});
      $('.cpf').mask('000.000.000-00', {reverse: true});
      $('.money').mask('000.000.000.000.000,00', {reverse: true});
      $('.cc-numero').mask('0000 0000 0000 0000', {reverse: true});
      $('.cc-expiração').mask('00/00', {reverse: true});
      $('.cc-ccv').mask('0000', {reverse: true});
    });
  