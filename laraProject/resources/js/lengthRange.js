function lengthRange(inputtxt, minlength, maxlength)
{  	
   var userInput = inputtxt.value;  
   if(userInput.length >= minlength && userInput.length <= maxlength)
      {  	
        return true;  	
      }
   else
      {  	
	alert("Inserire tra " +minlength+ " e " +maxlength+ " caratteri (ne hai scritti " + userInput.length + ")");  		
        return false;  	
      }  
}