// set the dimensions of the graphics area 

var margin = {top: 50, right: 50, bottom: 100, left: 50},
    width = 800 - margin.left - margin.right,
    height = 600 - margin.top - margin.bottom;


// set the ranges

var x = d3.scale.ordinal().rangeRoundBands([0, width], .1, .3);

var y = d3.scale.linear().range([height, 0]);

// define the x and y axis

var xAxis = d3.svg.axis()
    .scale(x)
    .orient("bottom");

var yAxis = d3.svg.axis()
    .scale(y)
    .orient("left")
    .ticks(10);


// add the SVG element to the HTML page body

var svg = d3.select("body").append("svg")
    .attr("width", width + margin.left + margin.right)
    .attr("height", height + margin.top + margin.bottom)
    .append("g")
    .attr("transform", "translate(" + margin.left + "," + margin.top + ")");


//--------------------------------------------------------------------------------------------------------------------------------------------------------------
// load the json data by invoking the php script which reads the MySQL db table and echos it back in json format
// by the following d3.js code
//--------------------------------------------------------------------------------------------------------------------------------------------------------------
d3.json("readTableEchoJsonSimpleOOP.php", function(error, data) {

    data.forEach(function(d) {
	d.busid = d.busid;
        d.busstop = d.busstop;                               // Each object iteral in the JSON file has a busstop element
        d.passengersin = d.passengersin;          // Each object iteral in the JSON file has a passengersin element
        d.passengersout = d.passengersout;
    });
//--------------------------------------------------------------------------------------------------------------------------------------------------------------   
// scale the range of the data

function graph(){
    
  x.domain(data.map(function(d) { return d.busstop; }));                  
  y.domain([0, d3.max(data, function(d) { return d.passengersin; })]);
    
    svg.append("text")
      .attr("class", "title")
      .attr("x", x(data[0].name))
      .attr("y", -26)
      .text("Number of passengers On and Off");

  // add x axis
  svg.append("g")
      .attr("class", "x axis")
      .attr("transform", "translate(0," + height + ")")
      .call(xAxis)
    .selectAll("text")
      .style("text-anchor", "end")
      .attr("dx", "2em")
      .attr("dy", ".55em")
      .attr("transform", "rotate(0)" );

  // add y axis
  svg.append("g")
      .attr("class", "y axis")
      .call(yAxis)
    .append("text")
      .attr("transform", "rotate(-90)")
      .attr("y", 5)
      .attr("dy", ".71em")
      .style("text-anchor", "end")
      .text("Number Of Passengers");
    
    svg.selectAll("barout")
      .data(data)
    .enter().append("rect")
      .attr("class", "barout")
      .attr("x", function(d) { return x(d.busstop); })
      .attr("width", x.rangeBand())
      .attr("y", function(d) { return y(d.passengersout); })
      .attr("height", function(d) { return height - y(d.passengersout); })
      .text(function(d) {return (d.passengersout); });
    
    

  // Add bar chart
  svg.selectAll("bar")
      .data(data)
    .enter().append("rect")
      .attr("class", "bar")
      .attr("x", function(d) { return x(d.busstop); })
      .attr("width", x.rangeBand())
      .attr("y", function(d) { return y(d.passengersin); })
      .attr("height", function(d) { return height - y(d.passengersin); });

});
}