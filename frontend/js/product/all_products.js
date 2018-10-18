
function allProducts() {
  var method = "GET"; //method
  var url = "../../controllers/ProductController_all.php"; //URL del servidor
  var params = ""; //"product="+product+"&status="+status; //PARAMETROS

  var products = ajax(url,params,method);
  products.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
          // console.log(this);
          // console.log(this.responseText);
          var myObj = JSON.parse(this.responseText);
          // var myObj = this.responseText;
          // alert(myObj);
          var obj = myObj['records'];
          // console.log(obj);
          var table = document.getElementById("tablajson");
            // deletes old body
            var tableBody = document.getElementById("tablajsonbody");
            // console.log(table.rows.length);
            if (table.rows.length>1) {
                clearTableBody(table);
            }
      			var tbody = document.createElement("tbody");
            createTableRows(obj,table,tbody);
      };
  };
}

function clearTableBody(table) {
    while(table.hasChildNodes())
    {
        table.removeChild(table.firstChild);
    }
}

function createTableRows(obj,table,tbody) {
    // console.log(obj);
    tbody.appendChild(createTableHeader());
    table.appendChild(tbody);
    ;
    for (var i = 0; i < obj.length; i++) {
        //rows
        var tr = document.createElement("tr");
        // rows cells
        var txt = document.createTextNode(obj[i]['name']);
        var td = document.createElement("td");
        td.appendChild(txt);
        tr.appendChild(td);
        var txt = document.createTextNode(obj[i]['code']);
        var td = document.createElement("td");
        td.appendChild(txt);
        tr.appendChild(td);
        var txt = document.createTextNode(obj[i]['category']);
        var td = document.createElement("td");
        td.appendChild(txt);
        tr.appendChild(td);
        var txt = document.createTextNode(obj[i]['quantity']);
        var td = document.createElement("td");
        td.appendChild(txt);
        tr.appendChild(td);
        var txt = document.createTextNode(obj[i]['price']);
        var td = document.createElement("td");
        td.appendChild(txt);
        tr.appendChild(td);
        // append row to table
        // IE7 requires append row to tbody, append tbody to table
        tbody.appendChild(tr);
        table.appendChild(tbody);
    }
}

function createTableHeader(){
  // creo la fila que va a contener el encabezado.
  var tr = document.createElement("tr");
  // celda de la fila
  var td = document.createElement("td");
  td.classList.add("table-header");
  var txt = document.createTextNode('Producto');
  td.appendChild(txt);
  tr.appendChild(td);
  // celda de la fila
  var td = document.createElement("td");
  td.classList.add("table-header");
  var txt = document.createTextNode('Codigo');
  td.appendChild(txt);
  tr.appendChild(td);
  // celda de la fila
  var td = document.createElement("td");
  td.classList.add("table-header");
  var txt = document.createTextNode('Categoria');
  td.appendChild(txt);
  tr.appendChild(td);
  // celda de la fila
  var td = document.createElement("td");
  td.classList.add("table-header");
  var txt = document.createTextNode('Cantidad');
  td.appendChild(txt);
  tr.appendChild(td);
  // celda de la fila
  var td = document.createElement("td");
  td.classList.add("table-header");
  var txt = document.createTextNode('Precio');
  td.appendChild(txt);
  tr.appendChild(td);
  // devuelvo la fila
  return tr;
}
