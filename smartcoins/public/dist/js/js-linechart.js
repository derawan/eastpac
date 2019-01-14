/**
 * Generate random chart data
 */
var chartData1 = [];

function generateChartData() {
  var firstDate = new Date();
  firstDate.setDate( firstDate.getDate() - 500);
  firstDate.setHours( 0, 0, 0, 0 );

  for ( var i = 0; i < 500; i++ ) {
    var newDate = new Date( firstDate );
    newDate.setDate( newDate.getDate() + i );

    var a1 = Math.round( Math.random() * ( 40 + i ) ) + 100 + i;

    chartData1.push( {
      "date": newDate,
      "value": a1
    } );
  }
}

generateChartData();

/**
 * Create the chart
 */
var chart = AmCharts.makeChart( "chartdiv2", {
  "type": "stock",
  "theme": "light",

  // This will keep the selection at the end across data updates
  "glueToTheEnd": true,

  // Defining data sets
  "dataSets": [ {
    "title": "Line",
    "fieldMappings": [ {
      "fromField": "value",
      "toField": "value"
    }],
    "dataProvider": chartData1,
    "categoryField": "date"
  } ],

  // Panels
  "panels": [ {
    "showCategoryAxis": false,
    "title": "Value",
    "percentHeight": 60,
    "stockGraphs": [ {
      "id": "g1",
      "valueField": "value",
      "comparable": true,
      "compareField": "value"
    } ],
    "stockLegend": {}
  }],






  // Event listeners
  "listeners": [ {
    "event": "rendered",
    "method": function( event ) {
      chart.mouseDown = false;
      chart.containerDiv.onmousedown = function() {
        chart.mouseDown = true;
      }
      chart.containerDiv.onmouseup = function() {
        chart.mouseDown = false;
      }
    }
  } ]
} );

/**
 * Set up interval to update the data periodically
 */

 
/*setInterval( function() {

  // if mouse is down, stop all updates
  if ( chart.mouseDown )
    return;

  // add new datapoint at the end
  var newDate = new Date( chartData1[ chartData1.length - 1 ].date );
  newDate.setDate( newDate.getDate() + 1 );

  var i = chartData1.length;

  var a1 = Math.round( Math.random() * ( 40 + i ) ) + 100 + i;

  chart.dataSets[ 0 ].dataProvider.push( {
    date: newDate,
    value: a1
  } );

  
  console.log(newDate);

  chart.validateData();
}, 1000 );*/