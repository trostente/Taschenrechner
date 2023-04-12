</html>
<body>
<!-- Erstes eingabefeld -->
<input name="num1" size="10" id="uno">

<!--Drop downmenu -->
<select id="Rechenoperator">  
<option value = "+"> plus  </option>  
<option value = "-"> minus </option>  
<option value = "*"> mal </option>  
<option value = "/"> geteilt </option>  
</select>  

<!--Zweites Eingabefeld + Submit button -->
<input name="num2" size="10" id="dos">
<button id="1"type="submit"  style="background-color:lightblue" onClick="calculateResult()">=</button>

<!--Text der zum Ergebniss führen soll -->
<p id="text">Das Ergebniss lautet:</p>

<!--Rechenschritt + Ergebniss ausgabe -->
<script>

function getSelectedValue(ID) {
IdImText = "#" + ID
selectElement = document.querySelector(IdImText);
output = selectElement.value;
return output
}


function setErgebniss(Ergebniss) {
var elem = document.querySelector("#text");

elem.innerHTML = "Das Ergebniss lautet: " + Ergebniss
}


function calculateResult()  {

Rechenoperator = getSelectedValue("Rechenoperator");
ErsterWert = getSelectedValue("uno");
ErsterWert = Number(ErsterWert);
ZweiterWert = getSelectedValue("dos");
ZweiterWert = Number(ZweiterWert);

if (Rechenoperator == "+" ) {
Ergebniss = (ErsterWert + ZweiterWert);
}

else if (Rechenoperator == "-" ) {
Ergebniss = (ErsterWert - ZweiterWert);
}
    
else if (Rechenoperator == "*") {
Ergebniss = (ErsterWert * ZweiterWert);
}

else if (Rechenoperator == "/") {
Ergebniss = (ErsterWert / ZweiterWert);
} 

setErgebniss(Ergebniss);
}


</script>


<!--ende -->

</body>
</html>