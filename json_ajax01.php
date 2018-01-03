<!doctype html>
<html>
    <head>        
        <meta charset="UTF-8">
        <title>Php com ajax</title>
    </head>
    
    <body>
        <div id="nome"></div>
        
        <script src="jquery.min.js"></script>
        
        <script>
            $.ajax({
                url:'nome.php'
            }).done(function(valor){
                $('div#nome').html(valor);
            }).fail(function(){
                $('div#nome').html("falha");
                
            })
        </script>

    </body>
</html>
