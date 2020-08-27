

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Plannun</title>

    <meta name="theme-color" content="#bf0e17">
    <meta name="apple-mobile-web-app-status-bar-style" content="#bf0e17">
    <meta name="msapplication-navbutton-color" content="#bf0e17">
    <link rel="shortcut icon" href="favicon.png" />

    <meta property="og:url" content="http://6tres.tech/dev/plannun/" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="Plannun">
    <meta property="og:title" content="Plannun" />
    <meta property="og:description" content="Estamos focados em traçar o melhor plano para seu segmento de negócio!" />
    <meta property="og:image" content="http://6tres.tech/dev/plannun/og-img.jpg" />
    <meta property="og:image:width" content="800" />
    <meta property="og:image:height" content="400" />
    <meta property="og:image" content="http://6tres.tech/dev/plannun/og-img-2.jpg" />
    <meta name="twitter:title" content="Plannun">
    <meta name="twitter:description" content="Estamos focados em traçar o melhor plano para seu segmento de negócio!">
    <meta name="twitter:url" content="http://6tres.tech/dev/plannun">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:image" content="http://6tres.tech/dev/plannun/og-img.jpg">

    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,700italic,400,300,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,700">
    <link rel="stylesheet" href="assets/fonts/line-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/coliff/bootstrap-rfs/bootstrap-rfs.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<body>
    <?php include 'header.php'?>
    <main>
        <section id="mapa">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d238732.16821172505!2d-49.49951829195345!3d-20.783594688082008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94bc52ce6910005f%3A0xb39d5c0e3b8c5675!2sS%C3%A3o%20Jos%C3%A9%20do%20Rio%20Preto%20-%20SP!5e0!3m2!1spt-BR!2sbr!4v1594043411091!5m2!1spt-BR!2sbr" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </section>
        <section id="contato">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <h2 class="titulo-section-2">Contato<strong>.</strong></h2>
                        <div>
                            <p class="sub-titulo">+55 11 9909-9089</p>
                            <p class="sub-titulo">+55 11 3587-6985</p>
                            <p class="text-white">contato@plannun.com</p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div id="form-principal">
                            <div class="form-group"><label>Nome <span>Preencha este campo corretamente</span></label><input id="nome" type="text" class="form-control"></div>
                            <div class="form-group"><label>Email <span>Preencha este campo corretamente</span></label><input id="email" type="text" class="form-control"></div>
                            <div class="form-group"><label>Telefone <span>Preencha este campo corretamente</span></label><input id="telefone" type="text" class="form-control"></div>
                            <div class="form-group"><label>Mensagem <span>Preencha este campo corretamente</span></label><textarea id="mensagem" class="form-control"></textarea></div>
                            <div><a class="btn btn-primary text-white" id="enviar">Enviar<i class="la la-long-arrow-right"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    
<?php include 'footer.php'?>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/409445/animateAnything.js"></script>
    <script src="assets/js/script.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="assets/js/mascara.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.3.4/gsap.min.js"></script>
    <script>
        gsap.from("main", {
            duration: 1,
            y: '20px',
            delay: 1,
            opacity: '0',
        });

        gsap.to(".transicao", {
            duration: 1,
            y: '100vh',
            stagger: 0.25
        });
        $("a").click(function(link) {
            event.preventDefault()
            var link = $(this).attr("href")

            if ($(this).attr("data-target")) {
                location.href = link
            } else if ($(this).attr("id", "enviar")) {                
            event.preventDefault()
            }  else {

                gsap.to(".transicao", {
                    duration: 1,
                    y: '-100vh',
                    stagger: 0.25
                });
                gsap.to("main", {
                    duration: 1,
                    y: '-20px',
                    opacity: '0',
                });
                setTimeout(function() {
                    location.href = link
                }, 1000);
            }

        })
    </script>
    <script>
        var SPMaskBehavior = function(val) {
                return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
            },
            spOptions = {
                onKeyPress: function(val, e, field, options) {
                    field.mask(SPMaskBehavior.apply({}, arguments), options);
                }
            };
        $('#telefone').mask(SPMaskBehavior, spOptions);

        $("input").on("click", function() {
            if ($(this).val() == "") {
                $(this).parent(".form-group").addClass("error");

                $("input").on("change", function() {
                    if ($(this).val == "") {
                        $(this).parent(".form-group").addClass("error");
                    } else {

                        $(this).parent(".form-group").removeClass("error");
                    }

                })
            } else {

                $(this).parent(".form-group").removeClass("error");

            }
        });
        $("textarea").on("click", function() {
            if ($(this).val() == "") {
                $(this).parent(".form-group").addClass("error");

                $("textarea").on("change", function() {
                    if ($(this).val == "") {
                        $(this).parent(".form-group").addClass("error");
                    } else {

                        $(this).parent(".form-group").removeClass("error");
                    }

                })
            } else {

                $(this).parent(".form-group").removeClass("error");

            }
        });


        $("#enviar").on("click", function() {
            var sEmail = $("#email").val();
            // filtros
            var emailFilter = /^.+@.+\..{2,}$/;
            var illegalChars = /[\(\)\<\>\,\;\:\\\/\"\[\]]/
            //faz validação do formulário
            if ($("#nome").val() == "") {
                $("#nome").parent(".form-group").addClass("error");
                $("#nome").focus();
            } else if ($("#email").val() == "") {
                $("#email").parent(".form-group").addClass("error");
                $("#email").focus();
            } else if (!(emailFilter.test(sEmail)) || sEmail.match(illegalChars)) {

                $("#email").parent(".form-group").addClass("error");
                $("#email").focus();
            } else if ($("#telefone").val() == "") {
                $("#telefone").parent(".form-group").addClass("error");
                $("#telefone").focus();
            } else if ($("#mensagem").val() == "") {
                $("#mensagem").parent(".form-group").addClass("error");
                $("#mensagem").focus();
            } else {
                enviar();
            }
        });


        /*Envia dados*/
        function enviar() {

            $.ajax({
                type: 'post',
                url: 'enviar.php',
                dataType: 'html',
                data: {
                    'post': '1',
                    'nome': $("#nome").val(),
                    'email': $("#email").val(),
                    'telefone': $("#telefone").val(),
                    'mensagem': $("#mensagem").val()
                },
                success: function(retorno) {
                    if (1 == retorno) {
                        swal.fire({
                            title: "Contato enviado com sucesso!",
                            text: "Em breve entraremos em contato",
                            type: "success",
                            showCancelButton: false,
                            confirmButtonColor: "#343794",
                            confirmButtonText: "ok",
                        });
                        $("#nome").val("");
                        $("#email").val("");
                        $("#telefone").val("");
                        $("#mensagem").val("");
                    } else {
                        swal.fire("", "Erro, tente de novo", "error");
                    }
                }
            });
        }
    </script>
</body>

</html>