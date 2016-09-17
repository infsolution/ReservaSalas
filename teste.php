<html>
    <head>
        <title>Teste de classes</title>
        <script type="text/javascript">
        function pegaValor(){
       var elemento = document.getElementsByName('nameval');
 
       for(i=0;i<elemento.length;i++){
          var e = elemento[i];
          alert(e.value);
       }
}
    </script>
    </head>
    <body>
      <ul>
 <li><input name="nameval" type="text" value="2"/></li>
 <li><input name="nameval" type="text" value="55"/></li>
 <li><input name="nameval" type="text" value="10"/></li>
 <li><input name="nameval" type="text" value="9"/></li>
 </ul>
 
<input onClick="pegaValor()" value="mostrar" type="button" name="cmdSalvar" id="cmdSalvar" />
  
    </body>
    
    
</html>

