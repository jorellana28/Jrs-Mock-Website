$(document).ready(function() {
    $("#btn1").click(function(){
        alert("Text!");
    });
    $("#submit").click(function(){
    	alert("Name: " + $("#name").val() + "\n"
    		  "Phone: " + $("#phone").val() + "\n"
    		  "Email: " + $("#email").val())
    });
});