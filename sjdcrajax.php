<ul class="product_list grid row">
<?php
$q = $_GET['q'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "viajeo";



	$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM productos WHERE ciudad = 'San Jose de Costa Rica'  ORDER BY $q LIMIT 9 ";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
$idproducto = $row["idproducto"];
$nombre = $row["nombre"];
$precio = $row["precio"];
$condicion = $row["condicion"];
$cantidad = $row["cantidad"];
$ubi = $row["ubi"];
$nacional = $row["nacional"];
$ciudad = $row["ciudad"];
$text = $row["text"];

?>

                                                <li class="ajax_block_product col-xs-12 col-sm-6 col-md-4">
                <div class="product-container" itemscope itemtype="http://schema.org/Product">
                    <div class="left-block">
                        <div class="product-image-container">
                            <a href="info.php?varname=<?php echo $idproducto ?>">
                                <img class="replace-2x img-responsive" src= <?php echo $ubi ?> alt="<?php echo $nombre ?>" title="<?php echo $nombre ?>" itemprop="image" />
                            </a>
                                                        <a >
                                <span></span>
                            </a>
                                                                                        <a class="new-box" >
                                    <span class="new-label">Nuevo</span>
                                </a>
                                                                                </div>
                        
						
                    </div>
                    <div class="right-block">
                        <div class="wrap-right-block">
                            <h5 itemprop="name">
                                                                <a class="product-name" href="index.php%3Fid_product=26&amp;controller=product.html" title="Andes Plaza Hotel" itemprop="url" >
                                    <span class="list-name"><?php echo $nombre ?></span>
                                    <span class="grid-name"><?php echo $nombre ?></span>
                                </a>
                            </h5>
                            
                            <p class="product-desc" itemprop="description">
                                <span class="list-desc"><?php echo $precio ?></span>
                                <span class="grid-desc"><?php echo $precio ?></span>
                            </p>
                                                        <div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="content_price">
                                                                    <span itemprop="price" class="price product-price">
                                        <?php echo $precio ?>                                    </span>
                                    <meta itemprop="priceCurrency" content="MXN" />
                                                                        
    								
                                                            </div>
                                                    </div>
                        <div class="button-container">
                                                                                                                                        <a class="ajax_add_to_cart_button btn btn-default" href="index.php%3Fcontroller=order&amp;ipa=26.html" rel="nofollow" title="A&ntilde;adir al carrito" data-id-product="26">
                                            <span>A&ntilde;adir al carrito</span>
                                        </a>
                                    						
                                                                                        <span class="wrap-btn">
                                <a >
                                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#<?php echo $idproducto ?>">Vista rápida</button>
                                </a>
                            </span>
                        </div>
                                                    <div class="color-list-container"></div>
                                                <div class="product-flags">
                                                                                                                                            </div>
                                                                                    <span itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="availability">
                                                                            <span class="available-now">
											<link itemprop="availability" href="http://schema.org/InStock" /><?php echo "Stock ".$cantidad ?>										</span>
                                                                    </span>
                                                                        </div>
                                            <div class="functional-buttons clearfix">
                            
                                                            <div class="compare">
                                    <a class="add_to_compare" href="index.php%3Fid_product=26&amp;controller=product.html" data-id-product="26" title="Agregar para comparar">Agregar para comparar</a>
                                </div>
                                                    </div>
                                    </div><!-- .product-container> -->
            </li>


             <!-- Modal -->
  <div   class="modal fade" id="<?php echo $idproducto ?>" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <br><br><br>
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><?php echo $nombre ?></h4>
        </div>
        <div >
        <div class="col-sm-6" >          <p ><a >
                                <img class="replace-2x img-responsive" src= <?php echo $ubi ?> alt="<?php echo $nombre ?>" title="<?php echo $nombre ?>" itemprop="image" />
                            </a></p>
<br>
<?php echo "Condición " .$condicion ?><br>
<?php echo "Desde: $ " .$precio." mxn" ?><br>
<?php echo $text ?><br>
<?php echo $cantidad." artículos" ?>



                            </div>
        <div class="col-sm-6" ><?php echo"$ ". $precio ?> <br> Cantidad <br> <input type='number' size='10' id='numberinput' name='mynumber' value='0' />   
<button type="button" class="btn btn-default" >AÑADIR AL CARRITOS</button>
 <p ><a >
                                <img class="replace-2x img-responsive" src= "pic/payment-logo.png" alt="<?php echo $nombre ?>" title="<?php echo $nombre ?>" itemprop="image" />
                            </a></p>



        </div>

        </div>
        <div class="modal-footer">
          
        </div>
      </div>
      
    </div>
  </div>
<?php
       
    }
} else {
    echo "0 results";
}
$conn->close();
?>
</ul>