<!DOCTYPE html>
<html>
    
    
<head>
    
<style type="text/css">
    

#pizzashop {
        	width: 600px;
}
</style>    
    
</head>    
    
<body>
    
 <form methode="post" action="server.php">
 	<table border="6px">
     	<tr>
         	<td id="pizzashop">Pizza shop 2.0</td>
     	</tr>
     	<tr>
    	<td>Name</td>
    	<td><input type="text" name="naam"/></td>
     	</tr>
     	<tr>
         	<td>Pizza topping</td>
         	<td>
             	<input type="radio" name="turksepizza" value="Surpreme"/>Surpreme<br>
             	<input type="radio" name="vergtarian" value="Vegetarian"/>Vegetarian<br>
             	<input type="radio" name="hawai" value="Hawaiian"/>Hawaiian
         	</td>
     	</tr>
     	<tr>
        	<td>Pizza sauce</td>
         	<td>
             	<select>
                 	<option>Tomato</option>
                 	<option>Mayo</option>
                 	<option>Sate</option>
             	</select>
            	 
         	</td>
     	</tr>
     	<tr>
         	<td>Optinal Extras</td>
        	 
         	<td>
             	<input type="checkbox" name="gluten vrij"/>Extra Cheese<br>
              	<input type="checkbox" name="extra mayo"/>Gluten Free Base
         	</td>
     	</tr>
     	<tr>
         	<td>Delivery Instructions</td>
         	<td>
             	<textarea rows="8" cols="20" name="nogiets"></textarea>
         	</td>
     	</tr>
     	<tr>
     	 <td><button>Send my order</button></td>
     	
     	</tr>
 	</table>
 </form>    
      

</body>    
    
    
    
</html>





