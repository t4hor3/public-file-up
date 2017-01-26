//Seccion de variables
var cajaBoxes = $(".text");
var cajaBox1 = $("#dato1");
var cajaBox2 = $("#dato2");
var cajaBox3 = $("#dato3");
var cajaBox4 = $("#dato4");
var defaultText1 = "Escribe tu nombre ...";
var defaultText2 = "Escribe tu domicilio...";
var defaultText3 = "Escribe tu correo electronico...";
var defaultText4 = "Escribe la url de tu web si tienes...";

//Seccion del evento de focus y blur
cajaBoxes.focus(function(){
	$(this).addClass("active");
});
cajaBoxes.blur(function(){
	$(this).removeClass("active");  
});

//Seccion donde mostramos y ocultamos el texto correspondiente
//de cada input
//cajabox2
cajaBox1.focus(function(){
	if($(this).attr("value") == defaultText1) $(this).attr("value", "");
});
cajaBox1.blur(function(){
	if($(this).attr("value") == "") $(this).attr("value", defaultText1);
});

//cajabox2
cajaBox2.focus(function(){
	if($(this).attr("value") == defaultText2) $(this).attr("value", "");
});
cajaBox2.blur(function(){
	if($(this).attr("value") == "") $(this).attr("value", defaultText2);
});

//cajabox3
cajaBox3.focus(function(){
	if($(this).attr("value") == defaultText3) $(this).attr("value", "");
});
cajaBox3.blur(function(){
	if($(this).attr("value") == "") $(this).attr("value", defaultText3);
});

//cajabox4
cajaBox4.focus(function(){
	if($(this).attr("value") == defaultText4) $(this).attr("value", "");
});
cajaBox4.blur(function(){
	if($(this).attr("value") == "") $(this).attr("value", defaultText4);
});