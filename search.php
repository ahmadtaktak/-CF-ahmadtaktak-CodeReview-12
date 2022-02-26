

<!DOCTYPE html>
<html>
<body >
<div id="content" >
<h1>The XMLHttpRequest Object</h1 >
<!-- <button type="button"  onclick="loadDoc()">Change Content</button > -->
</div>
<script>
function loadDoc() {
let xhttp = new XMLHttpRequest();
xhttp.onload = function() {
    if (this.status == 200 ) {
        document.getElementById("content").innerHTML =this.responseText;
       
    }
};
var name=document.getElementById("search").value;
xhttp.open("GET", 'a_search.php?search='+name" , true); //(method, URL, async)
xhttp.send();
}

document.getElementById("search").addEverntlistener("keyup",loadDoc);
</script>
</body>
</html> 