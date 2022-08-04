<script>
    
var source ="https://bokonzi.com/genes/src_1.php/index.php/C" ; 
var includes_= false; 

var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
    var myObj = JSON.parse(this.responseText);
  

    includes_ =  myObj.includes("world") ;
       
 
 console.log(includes_); 
     
  }
};
xmlhttp.open("GET", source, true);
xmlhttp.send();




</script>