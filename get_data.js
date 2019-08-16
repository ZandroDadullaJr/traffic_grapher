function httpGet(theUrl) {
    var xmlHttp = new XMLHttpRequest();
    xmlHttp.open("GET", theUrl, false); // false for synchronous request
    xmlHttp.send(null);
    return xmlHttp.responseText;
}

function getData() {
    var result = httpGet("query_data.php");
    var resultArr = JSON.parse(result);
    xvar = resultArr;

    for (var i = 0; i < xvar.length; i++) {
        kbit.push([
            xvar[i].date,
            parseFloat(xvar[i].kbit)
        ]);
        kbit2.push(parseFloat(xvar[i]));
    }
    createObject(kbit);
}


function getTop() {
    var result = httpGet("query_top.php");
    var resultArr = JSON.parse(result);
    xvar = resultArr;
    for (var i = 0; i < xvar.length; i++) {
        top2.push([
            xvar[i].date,
            parseFloat(xvar[i].kbit)
        ]);
    }
}

var kbit = [];
var kbit2 = [];

var date = [];
var xvar = [];
var top2 = [];
var date2 = [];

getData();
getTop();

console.log(top2);
// console.log(date);

function createTable(tableData) {
  var table = document.createElement('table');
  var tableBody = document.createElement('tbody');

  tableData.forEach(function(rowData) {
    var row = document.createElement('tr');

    rowData.forEach(function(cellData) {
      var cell = document.createElement('td');
      cell.appendChild(document.createTextNode(cellData));
      row.appendChild(cell);
    });

    tableBody.appendChild(row);
  });

  table.appendChild(tableBody);
  document.body.appendChild(table);
}

createTable(top2)