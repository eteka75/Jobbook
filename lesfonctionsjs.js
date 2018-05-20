view plainprint?
$j(document).ready(listFunctions);  
  
function listFunctions(){  
  jQuery.fn.each(  
     function(i){  
        console.log(i);  
     }  
  );  
}  
Ou pour faciliter la consultation, en créant une liste triée par ordre alphabétique :
view plainprint?
var aList = Array();  
  
$j(document).ready(listFunctions);  
  
function listFunctions(){  
  jQuery.fn.each(  
     function(i){  
        aList.push(i);  
     }  
 );  
  
 console.log(aList.sort());  
}  