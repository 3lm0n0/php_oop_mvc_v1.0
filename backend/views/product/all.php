<!DOCTYPE HTML>
<html>
 <head>
   <link href="../../../frontend/css/product/product.css" rel="stylesheet" type="text/css">
 </head>
 <body>
   <section>
     <a href="../../../index.php"> Home </a>
   </section>
   <section>
     <div class="container container-title">
       <h2>Productos</h2>
     </div>
     <div class="container container-form">
       <form method="post" action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> id="myForm"
 name="myForm">
         <div class="field">
           <div class="label"> Codigo del producto </div>
           <input id="code_field" name="code" onChange="validate('code_errors', this.value)" type="text" onkeyup="liveSearch(this.value)">
           <div id="code_errors" class="errors"></div>
         </div>
         <div class="field">
           <div class="label"> Categoria del producto </div>
           <input id="category_field" name="category" onChange="validate('category_errors', this.value)" type="text" onkeyup="liveSearch(this.value)">
           <div id="category_errors" class="errors"></div>
         </div>
         <div class="field">
           <div class="label"> Nombre del producto </div>
           <input id="name_field" name="name" onChange="validate('name_errors', this.value)" type="text" onkeyup="liveSearch(this.value)">
           <div id="name_errors" class="errors"></div>
         </div>
         <div class="field">
           <div class="label"> Cantidad del producto </div>
           <input id="quantity_field" name="quantity" onChange="validate('quantity_errors', this.value)" type="text" onkeyup="liveSearch(this.value)">
           <div id="quantity_errors" class="errors"></div>
         </div>
         <div class="field">
           <div class="label"> Precio del producto </div>
           <input id="price_field" name="price" onChange="validate('price_errors', this.value)" type="text" onkeyup="liveSearch(this.value)">
           <div id="price_errors" class="errors"></div>
         </div>
         <div class="container center">
           <!-- <input type="button" id="insert" value="Insertar" onclick="newProduct();"/> -->
           <button type="button" name="button" id="insert" value="Insertar" onclick="newProduct();">Insertar</button>
           <button type="button" name="button" id="delete" value="Eliminar" onclick="deleteProduct();">Eliminar</button>
           <button type="button" name="button" id="modify" value="Editar" onclick="editProduct();">Editar</button>
         </div>
       </form>
     </div>
     </section>
     <section>
       <div class="container center">
         <div class="title toleft">
             <h1>Stock</h1>
             <!-- <input type="button" id="all" value="Ver Stock" onclick="allProducts();"/> -->
             <button type="button" name="button" id="all" value="Ver Stock" onclick="allProducts();">Ver Stock</button>
         </div>
         <div class="container">
             <table class="table" id="tablajson">
               <tbody id="tablajsonbody" class="container"></tbody>
             </table>
         </div>
       </div>
   </section>
 </body>
 <script src="../../../frontend/js/ajax.js"></script>
 <script src="../../../frontend/js/product/validate.js"></script>
 <script src="../../../frontend/js/product/new_product.js"></script>
 <script src="../../../frontend/js/product/all_products.js"></script>
 <script src="../../../frontend/js/product/delete_product.js"></script>
 <script src="../../../frontend/js/product/edit_product.js"></script>
</html>
