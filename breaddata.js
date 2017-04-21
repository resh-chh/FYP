var inputtype=document.getElementById("type");
var bread=document.getElementById("inputbread");
this.addEventListener("click", function(){
    if(inputtype.length > 0){
    	document.getElementById("inputbread").disabled=false;
    }
});