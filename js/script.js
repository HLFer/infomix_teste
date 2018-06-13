$.ajax({
          url : "http://35.231.244.104/json/index.php",
          type : 'post',
          dataType: 'jsonp',
          data : {
            "nome" : "Infomix",
            "sobre_nome" :"Ltda",
            "email" :"email@provedor.com",
            "telefone" :"(xx) x xxxx-xxxx",
            "nascimento" :"DD/MM/AAAA"
          },
          headers : {
               "Content-Type" : "application/json",
               "Accept" : "application/json",
               "Credencial" : "URokYjdzCdLJ",
               "Credencial_pass" : "LFypMTkuljmJ"
           },
          beforeSend : function(){
               $("#resposta").html("ENVIANDO...");
         }

});
