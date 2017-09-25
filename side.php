<script>
function showUser(str) {
  if (str=="") {
    document.getElementById("txtHint").innerHTML="";
    return;
  } 
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("txtHint").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","info.php?q="+str,true);
  xmlhttp.send();
}
</script>

<section id="new-products_block_right" class="block products_block">
	<h4 class="title_block">
    	<a href="novedades.php" title="Novedades">Novedades</a>
    </h4>
    <div class="block_content products-block">
                    <ul class="products">


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "viajeo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "SELECT * FROM productos ORDER BY fechae DESC LIMIT 8";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
$idproducto = $row["idproducto"];
$nombre = $row["nombre"];
$precio = $row["precio"];
$cantidad = $row["cantidad"];
$ubi = $row["ubi"];
$nacional = $row["nacional"];
$ciudad = $row["ciudad"];
?>
                                    <li class="clearfix">
                        <a class="products-block-image"  href="info.php?varname=<?php echo $idproducto ?>" title="<?php echo $nombre ?>"><img class="replace-2x img-responsive"  style="height: 98px" src=<?php echo $ubi ?> alt="<?php echo $nombre ?>"  /></a>
                        <div class="product-content">
                            <h5>
                                <a class="product-name" onclick="showUser(this.value)" value="<?php echo $idproducto ?>"  title="<?php echo $nombre ?>"><?php echo $nombre ?></a>
                            </h5>
                            <p class="product-description"> <?php echo "Desde: $". $precio." mxn" ?></p>
                                                                                                <div class="price-box">
                                        <span class="price">
                                            <?php echo "$ ". $precio ?>                                       </span>
                                    </div>
                                                                                    </div>
                    </li>

 <?php      
    }
} else {
    echo "0 results";
}
$conn->close();

?>


                                    
                            </ul>
            <div>
                <a href="index.php%3Fcontroller=new-products.html" title="Todas los nuevos productos" class="btn btn-default btn-sm icon-right">
                	<span>
                    	Todas los nuevos productos
                    </span>
                </a>
            </div>
            </div>
</section>