<script>
var source ="src.json" ; 

var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
    var myObj = JSON.parse(this.responseText);
   //  console.log(myObj) ; 

   
     console.log(  myObj.includes("worold"));
  }
};
xmlhttp.open("GET", source, true);
xmlhttp.send();
</script>