 function Tabla(){
 	var flujo = document.getElementById('nroflujo').value;
 	var divs="";
 	htm="<table border=0>";
         htm+='<tr>'+
                  '<td><b><u>Factores</u></b></td>'+
                  '<td><b><u>Mano de obra</u></b></td>'+
                  '<td><b><u>Materia Prima</u></b></td>'+
               '</tr>'
			for(var i=1; i<=flujo; i++)
			{
				htm+='<tr>'+
                     '<td><b>Producto '+i+'</b></td>'+
                     '<td><label>trabajadores<input type="number" id="trab'+i+'" name="trab" class="form-control is-valid" value=0"></label></td>'+
                     '<td><label>Libras<input type="number" id="libra'+i+'" name="libra" class="form-control is-valid" value=0"></label></td>'+
                  '</tr>';
			}
			htm+="</table>";
			htm+='<div class="container-fluid">';
			htm+='<div class="row">';
			for(var i=1; i<=flujo; i++){
			htm+='<div class="text-center col-sm h6 alert alert-info" id="mostr'+i+'">Producto '+i+'</div>';

			}
			htm+='</div>';

         htm+='<div class="row">';
         for(var i=1; i<=flujo; i++){
         htm+='<div class="text-center col-sm h6 alert alert-info" id="mostr'+i+'">Unidades<input type="number" id="ud'+i+'" name="ud" class="form-control " value=0">'+
         'C. venta<input type="number" id="costoV'+i+'" name="costoV" class="form-control " value=0"></div>';
         }
         htm+='</div>';
			htm+='<input type="button"  value="Calcular"  class="btn btn-primary col-11" onclick="Calcular_productividad()"><br>';
			htm+='<div class="row">';
         for(var i=1; i<=flujo; i++)
         {
            divs+='<div class="col-sm border" id="ManoO'+i+'"></div>';
         }
         // ------------------------------------------------------------------
			htm+='</div>';
			htm+='</div>';
			document.getElementById('flujo').innerHTML=htm;
         document.getElementById('resultado1').innerHTML=divs;
   }

   function Calcular_productividad(){
      var manoObra = document.getElementById('manoObra').value;
      var Mprima = document.getElementById('Mprima').value;
      var flujo = document.getElementById('nroflujo').value;
      var d=0;
      var cont=0;
      var respuesta=0;
      var v= [];
      var trab=0;
      var mprimaT=0;
      var costoT=0;
      var Mob=0;
      for (var i =1; i <= flujo; i++) 
      {
         cont++;
         if (i==cont) {
         var resultado=0;
            var trabajadores = parseInt(document.getElementById('trab'+i).value);
            var libras = parseFloat(document.getElementById('libra'+i).value);
            var ud = parseInt(document.getElementById('ud'+i).value);
            var costoV = parseInt(document.getElementById('costoV'+i).value);
            trab=trab+trabajadores;
            mprimaT=mprimaT+libras
            costoT=ud*costoV+costoT;
            Mob=ud/trabajadores;
            alert("La productividad de la mano de obra del producto "+i+" es: "+Mob.toFixed(1))
             document.getElementById('ManoO'+i).innerHTML="<b>La productividad de la mano de obra del producto "+i+" es: "+Mob.toFixed(1)+"unidad/trabajador<b>";
            v.push(Mob)
            }
      }
      resultado=(costoT)/((trab*manoObra)+(mprimaT*Mprima))
      document.getElementById('resultados').innerHTML="<h3 class='text-center col-sm h6 alert alert-primary'>La Productividad Global de la empresa es: "+resultado.toFixed(1)+"<h3>";
      alert("La Productividad Global de la empresa es: "+resultado.toFixed(1))
      var x=0;
      for(var u = 0; u<v.length; u++){
         if(Math.abs(v[u])>d){
            d=v[u];
            x=u+1;
            }
         }
         alert("La mejor produccion es El PRODUCTO "+x+": "+d);
      document.getElementById('Mejor').innerHTML="<h3 class='text-center col-sm h6 alert alert-info'>Me especializaria en el El PRODUCTO "+x+": "+d+"unidad/trabajador Porque con menor cantidad de trabajadores Se llego a producir mas<h3>";
   }
// *************************************************************************************************************
function TablaPMS(){
   var flujo = document.getElementById('nroflujo').value;
   var divs="";
   htm="<table border=0>";
         htm+='<tr class="text-center col-sm h6 alert-danger">'+
                  '<th><u>PERIODO</u></th>'+
                  '<th><u>DEMANDA</u></th>'+
               '</tr>'
         for(var i=1; i<=flujo; i++)
         {
            htm+='<tr>'+
                     '<td><label><input type="text" id="per'+i+'" name="per"'+
                     ' class="form-control is-valid"></label></td>'+
                     '<td><label><input type="number" id="dem'+i+'" '+
                     'name="dem" class="form-control is-valid" value=0"></label></td>'+
                  '</tr>';
         }
         htm+="</table>";
         htm+='<div class="container-fluid">';
         htm+='<button type="button" class="btn btn-primary col-11" 
         data-toggle="modal" data-target="#exampleModalLong" 
         onclick="Calcular_PMS()">Calcular</button>'
         htm+='<div class="row">';
         
         // ------------------------------------------------------------------
         htm+='</div>';
         htm+='</div>';
         document.getElementById('flujo').innerHTML=htm;
}
function Calcular_PMS(){
   var flujo = parseInt(document.getElementById('nroflujo').value);
   var Nperiodos = parseInt(document.getElementById('Nperiodos').value);
   var cont = 0;
   var p = [];
   var d = [];
   for (var i =1; i <= flujo; i++) 
   {
      cont++;
      if (i==cont)
      {
         var periodo = document.getElementById('per'+i).value;
         var demanda = parseInt(document.getElementById('dem'+i).value);
         p.push(periodo);
         d.push(demanda);
      }
   }
   var x=0;
   var y=0;
   tab="<table border=1>";
   tab+='<tr class="text-center col-sm h6 alert-danger">'+
            '<th><u>PERIODO</u></th>'+
            '<th><u>DEMANDA</u></th>'+
         '</tr>'
   for(var i=0; i<flujo; i++)
   {
      tab+='<tr>'+
               '<td>'+p[i]+'</td>'+
               '<td>'+d[i]+'</td>'+
               '</tr>';;
   }
   x=flujo+1;
   y=x-Nperiodos;
   var s=0;
   var c=0;
   tab+='<tr class="h6 alert-danger">'+
            '<th><u>A. Periodo</u></th>'+
            '<th><u>PMS</u></th>'+
         '</tr>'
   for(var u=0;u<y;u++)
   {
      s=(d[u]+d[u+1]+d[u+2])/Nperiodos;
      tab+='<tr>'+
         '<td>'+(u+Nperiodos+1)+'</td>'+
         '<td>'+s+'</td>'+
      '</tr>';
   }
   tab+="</table>";

   document.getElementById('result').innerHTML=tab;
}
//******************************************************************************************
function TablaPMP(){
   var flujo = document.getElementById('nroflujo').value;
   var divs="";
   htm="<table border=0>";
         htm+='<tr class="text-center col-sm h6 alert-danger">'+
                  '<th><u>PERIODO</u></th>'+
                  '<th><u>DEMANDA</u></th>'+
               '</tr>'
         for(var i=1; i<=flujo; i++)
         {
            htm+='<tr>'+
                     '<td><label><input type="text" id="per'+i+'" name="per" 
                     class="form-control is-valid"></label></td>'+
                     '<td><label><input type="number" id="dem'+i+'" 
                     name="dem" class="form-control is-valid" value=0"></label></td>'+
                     '<td><label><input type="number" id=""'
                  '</tr>';
         }
         htm+="</table>";
         htm+='<div class="container-fluid">';
         htm+='<button type="button" class="btn btn-primary col-11" 
         data-toggle="modal" data-target="#exampleModalLong" 
         onclick="Calcular_PMP()">Calcular</button>'
         htm+='<div class="row">';
         
         // ------------------------------------------------------------------
         htm+='</div>';
         htm+='</div>';
         document.getElementById('flujo').innerHTML=htm;
}
function Calcular_PMP(){
   var flujo = parseInt(document.getElementById('nroflujo').value);
   var Pond1 = document.getElementById('Pond1').value;
   var Pond2 = document.getElementById('Pond3').value;
   var Pond3 = document.getElementById('Pond2').value;
   var Nperiodos = parseInt(document.getElementById('Nperiodos').value);
   var cont = 0;
   var p = [];
   var d = [];
   for (var i =1; i <= flujo; i++) 
   {
      cont++;
      if (i==cont)
      {
         var periodo = document.getElementById('per'+i).value;
         var demanda = parseInt(document.getElementById('dem'+i).value);
         p.push(periodo);
         d.push(demanda);
      }
   }
   var x=0;
   var y=0;
   tab="<table border=1>";
   tab+='<tr class="text-center col-sm h6 alert-danger">'+
            '<th><u>PERIODO</u></th>'+
            '<th><u>DEMANDA</u></th>'+
         '</tr>'
   for(var i=0; i<flujo; i++)
   {
      tab+='<tr>'+
               '<td>'+p[i]+'</td>'+
               '<td>'+d[i]+'</td>'+
               '</tr>';;
   }
   x=flujo+1;
   y=x-Nperiodos;
   var s=0;
   var c=0;
   tab+='<tr class="h6 alert-danger">'+
            '<th><u>A. Periodo</u></th>'+
            '<th><u>PMS</u></th>'+
         '</tr>'
   for(var u=3;u<y;u++)
   {
      s=((d[u] * Pond1)+(d[u-1] * Pond2)+(d[u-2] * Pond3));
      tab+='<tr>'+
         '<td>'+(u+Nperiodos+1)+'</td>'+
         '<td>'+s+'</td>'+
      '</tr>';
   }
   tab+="</table>";

   document.getElementById('result').innerHTML=tab;
}
//******************************************************************************************
function TablaSuabizadoExponencial(){
   var flujo = document.getElementById('nroflujo').value;
   var divs="";
   htm="<table border=0>";
         htm+='<tr class="text-center col-sm h6 alert-danger">'+
                  '<th><u>PERIODO</u></th>'+
                  '<th><u>DEMANDA</u></th>'+
               '</tr>'
         for(var i=1; i<=flujo; i++)
         {
            htm+='<tr>'+
                     '<td><label><input type="text" id="per'+i+'" name="per" 
                     class="form-control is-valid"></label></td>'+
                     '<td><label><input type="number" id="dem'+i+'" 
                     name="dem" class="form-control is-valid" value=0"></label></td>'+
                     '<td><label><input type="number" id=""'
                  '</tr>';
         }
         htm+="</table>";
         htm+='<div class="container-fluid">';
         htm+='<button type="button" class="btn btn-primary col-11" 
         data-toggle="modal" data-target="#exampleModalLong" 
         onclick="Calcular_PMP()">Calcular</button>'
         htm+='<div class="row">';
         
         // ------------------------------------------------------------------
         htm+='</div>';
         htm+='</div>';
         document.getElementById('flujo').innerHTML=htm;
}
function Calcular_Suavizado_Exponencial(){
   var flujo = parseInt(document.getElementById('nroflujo').value);
   var Landa = document.getElementById('Landa').value;var cont = 0;
   var p = [flujo-1];
   var d = [flujo-1];
   var suavizado = [flujo - 1];
   var Erro = [flujo-1];
   for (var i =1; i <= flujo; i++) 
   {
      cont++;
      if (i==cont)
      {
         var periodo = document.getElementById('per'+i).value;
         var demanda = parseInt(document.getElementById('dem'+i).value);
         p.push(periodo);
         d.push(demanda);
      }
   }
   var x=0;
   var y=0;
   tab="<table border=1>";
   tab+='<tr class="text-center col-sm h6 alert-danger">'+
            '<th><u>PERIODO</u></th>'+
            '<th><u>DEMANDA</u></th>'+
         '</tr>'
   for(var i=0; i<flujo; i++)
   {
      tab+='<tr>'+
               '<td>'+p[i]+'</td>'+
               '<td>'+d[i]+'</td>'+
               '</tr>';;
   }
   x=flujo+1;
   y=x-Nperiodos;
   var s=0;
   var c=0;
   tab+='<tr class="h6 alert-danger">'+
            '<th><u>A. Periodo</u></th>'+
            '<th><u>PMS</u></th>'+
         '</tr>'
   var inicio = d[0] + d[1] + d[2];
   for(var u=3;u<y;u++)
   {
      s=(inicio + Landa*(d[u] - inicio));
      suavizado[u] = s;
      tab+='<tr>'+
         '<td>'+(u+Nperiodos+1)+'</td>'+
         '<td>'+s+'</td>'+
      '</tr>';
   }
   for( var i = 3 ; i < y; i++){
      Erro[i] = d[u] - suavizado[u];
   }
   //COMO ACOMODARIA LA TABLA.
   tab+="</table>";

   document.getElementById('result').innerHTML=tab;
}
 function TablaP(){
   var flujo = document.getElementById('nroflujo').value;
   
   htm="<table>";
         for(var i=1; i<=flujo; i++)
         {
            htm+='<tr><td><label for="inversion">Invercion Incial<input type="number" id="inversion'+i+'" name="inversion" class="form-control" value=0></label> </td>  <td><label for="cam">Inv cada<input type="number" id="inv'+i+'" name="inv" class="form-control is-valid" value=0 onblur="nuevovalor()"></label> <div class="valid-feedback">siguiente</div>  <td> <label for="cao">C.A.O<input type="number" id="cao'+i+'" name="cao" class="form-control" value=0></label></td><td><label for="cam">C.A.M<input type="number" id="cam'+i+'" name="cam" class="form-control" value=0></label></td><td> <label for="ingresos">Ingresos<input type="number" id="ingresos'+i+'" name="ingresos" class="form-control" value=0></label></td><td><label for="salvamento">Valor Salvamento<input type="number" id="salvamento'+i+'" name="salvamento" class="form-control" value=0></label></td><td><label for="salvamento"><b>Vida Util<b><input type="number" id="util'+i+'" name="util" class="form-control" value=0></td><td></label></td></tr>';
         }
         htm+="</table>";
         htm+='<input type="button"  value="Calcular"  class="btn btn-primary" onclick="Calcular_VAN()"><br><br><br>';
         htm+='<div class="container-flui">';
         htm+='<div class="row">';
         for(var i=1; i<=flujo; i++){
         htm+='<div class="text-center col-sm h6 alert alert-info" id="mostr'+i+'">Flujo '+i+'</div>';
         }
         htm+='</div>';
         htm+='<div class="row">';
         for(var i=1; i<=flujo; i++)
         {
            htm+='<div class="col-sm border" id="respuesta'+i+'"></div>';
         }
         htm+='</div>';
         htm+='</div>';
         document.getElementById('flujo').innerHTML=htm;
   }











   function Calcular_VAN()
   {
   	var tmar = document.getElementById('tmar').value/100;
   	var cont=0;
       var v =[];
       var respuesta=0;
      var d=0;
   	var flujo =  document.getElementById('nroflujo').value;
   	var array = [];
   	for (var i =1; i <= flujo; i++) {
   		cont++;
   		if (i==cont) {
			var resultado=0;
   			var inversion = parseInt(document.getElementById('inversion'+i).value);
			var cao = parseInt(document.getElementById('cao'+i).value);
   			var cam = parseInt(document.getElementById('cam'+i).value);
   			var ingresos = parseInt(document.getElementById('ingresos'+i).value);
   			var valorsalvamento = parseInt(document.getElementById('salvamento'+i).value);
   			var valorutil = parseInt(document.getElementById('util'+i).value);
   			array[0]=-inversion;
			var lista_flujo=-cao-cam+ingresos;
   			for(var j = 1;j<=valorutil-1; j++){
   			array[j]=lista_flujo;
   			}
   			 array[valorutil]=lista_flujo+valorsalvamento;
   			 for(var k=1; k<=valorutil;k++){
   				 resultado+= array[k]*(1/Math.pow((1+tmar),k));
   			      
            }
            respuesta=(resultado+array[0]).toFixed(2);
   		 document.getElementById('respuesta'+i).innerHTML="VNA: "+respuesta;
            v.push(respuesta);
   		}
   		}
   for(var u = 0; u<v.length; v++){
         if(Math.abs(v[u])<=Math.abs(v[u+1])){
            d=v[u];
            }
         else{
            d=v[u+1];
         }
         }  
         alert("La Mejor Inversion es"+d);
   }


