function showResult(value) {
  var product = document.getElementById("txtProduct").value;
  var params = "product="+product;
  if (product) {
      if (product.match(/^ *$/) == null) {
          ajax("txtHint","product/live_search.php",params,1);
      } else {
          document.getElementById("txtHint").innerHTML = ""
      }
  } else {
      document.getElementById("txtHint").innerHTML = ""
  }
  // console.log(var_ajax);
  // console.log(var_ajax.responseText);
  // if (var_ajax) {
  //   document.getElementById("txtHint").innerHTML = var_ajax.responseText;
  // }
}
