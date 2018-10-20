
function newProduct() {
  var method = "POST"; //method
  var url = "../../routes/product/new.php"; //URL del servidor
  var code = document.getElementById("code_field").value;
  var category = document.getElementById("category_field").value;
  var name = document.getElementById("name_field").value;
  var quantity = document.getElementById("quantity_field").value;
  var price = document.getElementById("price_field").value;
  var params = "code="+code+"&category="+category+"&name="+name+"&quantity="+quantity+"&price="+price; //PARAMETROS
console.log(params);
  var products = ajax(url,params,method);
  products.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
          // console.log(this);
          // console.log(this.responseText);
          console.log(this);
      };
  };
  // muestro todos los productos luego de hacer la edicion.
  allProducts();
}
