$(document).ready(function() {
    $("#btn1").click(function(){
        alert("Text!");
    });
    $("#submit").click(function(){
    	var name = $("#name").val();
    	var phone = $("#phone").val();
    	var email = $("#email").val();
    	var comments = $("#comments").val();
    	alert("Name: " + name + "\n" +
    		  "Phone: " + phone + "\n" +
    		  "Email: " + email + "\n" +
    		  "Comments: " + comments);
    });
});