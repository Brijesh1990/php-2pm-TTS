  <div class="col-md-9 p-5">
          <h1 class="fs-4">
            Logged In On :<span class="text-success">10/07/2025 01:09 pm</span>
          </h1>
          <div class="row">
            <div class="col-md-3 bg-info m-4 ms-4">
              <span class="bi bi-people-fill fs-1 text-primary"></span>
              <span class="fs-5">Totals Task</span> <br />
              <p class="fs-5 text-center">46</p>
            </div>

            <div class="col-md-3 bg-danger m-4 ms-4">
              <span class="bi bi-people-fill fs-1 text-white"></span>
              <span class="fs-5 text-white">Total Employee</span> <br />
              <p class="fs-5 text-center text-white">46</p>
            </div>

            <div class="col-md-3 bg-primary m-4 ms-4 text-white">
              <span class="bi bi-people-fill fs-1 text-white"></span>
              <span class="fs-5">Total Contacts</span> <br />
              <p class="fs-5 text-center">46</p>
            </div>
            <div class="mt-2 col-md-6">
              <div id="chart_div"></div>
            </div>
            <div class="col-md-4 ms-5">
                <table class="table table-responsive table-bordered mt-3">
                  <tr class="bg-white">
                    <td><span class="bi bi-check-circle-fill text-success"></span>&nbsp;Present</td>
                    <td align="right"><span class="bi bi-file-earmark text-success"></span>Export</td>
                   
                  </tr>

                  <tr class="bg-white">
                    <td><span class="bi bi-check-circle-fill text-success"></span>&nbsp;Present</td>
                    <td align="right"><span class="bi bi-file-earmark text-success"></span>Export</td>
                   
                  </tr>

                  <tr class="bg-white">
                    <td><span class="bi bi-check-circle-fill text-success"></span>&nbsp;Present</td>
                    <td align="right"><span class="bi bi-file-earmark text-success"></span>Export</td>
                   
                  </tr>

                  <tr class="bg-white">
                    <td><span class="bi bi-check-circle-fill text-success"></span>&nbsp;Present</td>
                    <td align="right"><span class="bi bi-file-earmark text-success"></span>Export</td>
                   
                  </tr>

                  <tr class="bg-white">
                    <td><span class="bi bi-check-circle-fill text-success"></span>&nbsp;Present</td>
                    <td align="right"><span class="bi bi-file-earmark text-success"></span>Export</td>
                   
                  </tr>
            </div>
          </div>
        </div>
      </div>
   
    <script
      type="text/javascript"
      src="https://www.gstatic.com/charts/loader.js"
    ></script>
    <script type="text/javascript">
      // Load the Visualization API and the corechart package.
      google.charts.load('current', { packages: ['corechart'] });

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {
        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['Mushrooms', 3],
          ['Onions', 1],
          ['Olives', 1],
          ['Zucchini', 1],
          ['Pepperoni', 2],
        ]);

        // Set chart options
        var options = {
          title: 'How Much Pizza I Ate Last Night',
          width: 500,
          height: 300,
        };

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(
          document.getElementById('chart_div')
        );
        chart.draw(data, options);
      }
    </script>
  </body>
</html>
