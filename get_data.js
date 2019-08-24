function httpGet(theUrl) {
    var xmlHttp = new XMLHttpRequest();
    xmlHttp.open("GET", theUrl, false); // false for synchronous request
    xmlHttp.send(null);
    return xmlHttp.responseText;
}

function getData(isp) {
    var result = httpGet("query_" + isp + "_data.php");
    var resultArr = JSON.parse(result);
    xvar = resultArr;
    for (var i = 0; i < xvar.length; i++) {
        kbit_in.push([
            xvar[i].date,
            parseFloat(xvar[i].kbit_in)
        ]);
        kbit_out.push([
            xvar[i].date,
            parseFloat(xvar[i].kbit_out)
        ]);
    }
    sendData(isp);
    kbit_in = [];
    kbit_out = [];
    
}

function sendData(isp){
  if (isp == 'pldt') {
    create_PLDT_Object();
  }
  if (isp == 'eastern') {
    create_EASTERN_Object();
  }
  if (isp == 'globe') {
    create_GLOBE_Object();
  }
}

function getTop() {
    var result = httpGet("query_top.php");
    var resultArr = JSON.parse(result);
    xvar = resultArr;
    for (var i = 0; i < xvar.length; i++) {
        top2.push([
            xvar[i].date,
            parseFloat(xvar[i].kbit_in)
        ]);
    }
}

var kbit_in = [];
var kbit_out = [];
var date = [];
var xvar = [];
var top2 = [];
var date2 = [];
var isp = ['pldt', 'eastern', 'globe'];


function main(){
  for(i = 0; i < isp.length; i++){
    getData(isp[i]);
  }
}

// console.log(top2);
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
 table = document.getElementById("table");
function createTable2(){
  for(var i = 1; i < table.rows.length; i++)
        {
          // cells
          for(var j = 0; j < table.rows[i].cells.length; j++)
          {
              table.rows[i].cells[j].innerHTML = array[i - 1][j];
          }
        }
}

main();
// getTop();

// createTable(top2);
// createTable(top2);
// createTable(top2);
