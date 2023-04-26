$("#like").click(function(){
    //evento de click sobre a imagem
    
        var id = $(this).attr('id'); //aqui você pegao valor do atributo id
        $dados['id'] = id; //esse array será passado para o php só que por POST ao invés de GET
    
        $.ajax({
    
            url: "acoes.php", //Aqui vai o nome do seu arquivo PHP
            type: "post",
            async: true,
            data: $dados,
            cache: false
         })
         .done(function(data){
    
            //neste o ponto, o código php já foi executado e voltou para aqui se tudo ocorreu sem erro
            console.log(data);
         })
        .fail(function(){
    
            //vem para cá se algum erro ocorreu
            console.log("Deu alguma errada no php");
        });
    });

