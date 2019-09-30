@extends('admin.layout')

@section('styles')

    <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

@endsection

@section('content')


    <div class="card card-transparent">
      <div class="card-header ">
        <div class="card-title">Reports
        </div>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-lg-6">
            <div class="card card-default">
              <div class="card-header  separator">
                <div class="card-title">Products in high demand
                </div>
              </div>
              <div class="card-body">
                    <div id="chart_products_in_demand"></div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="card card-default">
              <div class="card-header  separator">
                <div class="card-title">Income By Day - For Last 5 Days
                </div>
              </div>
              <div class="card-body">
                <div id="chart_inomce_by_day"></div>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-6">
            <div class="card card-default">
              <div class="card-header  separator">
                <div class="card-title">Commission By Order - For Last 100 Orders
                </div>
              </div>
              <div class="card-body">
                    <div id="chart_commission_by_order"></div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="card card-default">
              <div class="card-header  separator">
                <div class="card-title">Reorder Products

                </div>
              </div>
              <div class="card-body">
                <div id=""></div>
                  @foreach($reorder as $reorder)
                      <tr class="re">
                          <td class="product-name">
                              {{ $reorder->name }}
                          </td>

                      </tr>
                  @endforeach
              </div>
            </div>
          </div> -->
        </div>


      </div>

    </div>
      
    <script type="text/javascript">


        //chart 1

          // Load the Visualization API and the corechart package.
          google.charts.load('current', {'packages':['corechart']});

          // Set a callback to run when the Google Visualization API is loaded.
          google.charts.setOnLoadCallback(drawChart_1);

          // Callback that creates and populates a data table,
          // instantiates the pie chart, passes in the data and
          // draws it.
          function drawChart_1() {

            // Create the data table.
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Topping');
            data.addColumn('number', 'Slices');
            data.addRows([
              @foreach ($salesByProducts_res as $res)
                ['{{ $res->name }}', {{ $res->tot_qty? $res->tot_qty: 0  }}],
              @endforeach
            ]);

            // Set chart options
            var options = {'title':'Sales By Products',
                           'width':'auto',
                           'height':300};

            // Instantiate and draw our chart, passing in some options.
            var chart = new google.visualization.PieChart(document.getElementById('chart_products_in_demand'));
            chart.draw(data, options);
          }



          //chart 2

          // Load the Visualization API and the corechart package.
          google.charts.load('current', {'packages':['corechart']});

          // Set a callback to run when the Google Visualization API is loaded.
          google.charts.setOnLoadCallback(drawChart_2);

          // Callback that creates and populates a data table,
          // instantiates the pie chart, passes in the data and
          // draws it.
          function drawChart_2() {

            // Create the data table.
           var data = google.visualization.arrayToDataTable([
                ['Element', 'Total Income ($)'],
                @foreach ($salesByDate_res as $res)
                    ['{{ $res->sales_date }}', {{ $res->tot? $res->tot: 0  }}],
                @endforeach
          ]);

            var view = new google.visualization.DataView(data);
                  view.setColumns([0, 1,
                                   { calc: "stringify",
                                     sourceColumn: 1,
                                     type: "string",
                                     role: "annotation" },
                                   ]);

            // Set chart options
            var options = {
                        title: "Income By Day",
                        width: 'auto',
                        height: 400,
                        bar: {groupWidth: "95%"},
                        legend: { position: "none" },
                      };

            // Instantiate and draw our chart, passing in some options.
            var chart = new google.visualization.ColumnChart(document.getElementById('chart_inomce_by_day'));
            chart.draw(view, options);
          }

          //chart 3

          google.charts.load('current', {'packages':['corechart']});
          google.charts.setOnLoadCallback(drawChart_3);

          function drawChart_3() {
            var data = google.visualization.arrayToDataTable([
              ['Order(ID)', 'Commission Earned($)'],
               @foreach ($commissionByOrder as $res)
                ['{{ $res->order_id }}', {{ $res->commission? $res->commission: 0  }}],
              @endforeach
            ]);

            var options = {
              title: 'Commission Earned per Order Basis',
              curveType: 'function',
              legend: { position: 'bottom' },
              width: 'auto',
                height: 400,
                vAxis:{viewWindow: {min: 0}}
            };

            var chart = new google.visualization.LineChart(document.getElementById('chart_commission_by_order'));

            chart.draw(data, options);
          }


    </script>

<!--Div that will hold the pie chart-->
    
@endsection