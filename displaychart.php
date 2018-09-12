 <html>

    <head>
        <title>Hamro Surakshya</title>
        <link rel="stylesheet" type="text/css" href="css/userreport.css">
        <link rel="stylesheet" type="text/css" href="css/list.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
        <script src="js/fusioncharts.js"></script>
        <script src="js/fusioncharts.charts.js"></script>
        <script src="js/fusioncharts.theme.zune.js"></script>
    </head>

    <body>

        <header style="width: 100%;height: 12%;padding: 0;">
        <div class="row" style="border-bottom: 1px solid #304440;">
            <h1 id="slide1" style="color: #f3f3f4;
                padding-top:10px;
                padding-left:30px;
                ">Hamro Surakshya,Crime Status
            </h1>
            
            <button type= "button link" class="btn btn-outline-dark" style="float: right;margin-left: 650px;height: 60%;margin-top: 10px;"><a href="map.php">Back</a></button>
        </div>
         </header>

            <center>
                <div id="chart-container" style="margin-top: 50px;">Chart will render here!</div>
            </center>
            <center>
                <div id="chart-container1" style="margin-top: 80px;">Chart will be renderd here</div>
            </center>

        <footer  style="border-top: 1px solid #304440; padding-top: 6px;"><ha>This is Police Department...</h1></footer>
    </body>

</html>     

<?php 
include('chart.php');
include('chart1.php');
 ?>
