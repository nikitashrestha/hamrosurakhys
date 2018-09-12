<?php
   /**
    * step 1: Include the `fusioncharts.php` file that contains functions to embed the charts.
    */
        include("fusioncharts.php");
        //address of the server where db is installed
        $servername = "localhost";
        //username to connect to the db
        //the default value is root
        $username = "root";
        //password to connect to the db
        //this is the value you specified during installation of WAMP stack
        $password = "";
        //name of the db under which the table is created
        $dbName = "hamrosurakshya";
        //establishing the connection to the db.
        $conn = new mysqli($servername, $username, $password, $dbName);
        //checking if there were any error during the last connection attempt
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }


  $strQuery = "SELECT DISTINCT Year, Rape, Assault, Kidnapping,Burglary,Homicides,TheftandHousebreaking FROM annualcrimereport; ";
  $result = $conn->query($strQuery) or exit("Error code ({$conn->errno}): {$dconn->error}");
  if ($result) {

  $arrData = array(
        "chart" => array(
            "caption"=> "Hamro Surakshya",
            "subCaption"=> "Diffrent Crime Rates for past years",
            "xAxisname"=> "Year",
            "yAxisName"=> "Crime Reported",
            "legendItemFontColor"=> "#666666",
            "theme"=> "zune"
            )
          );
          // creating array for categories object

          $categoryArray=array();
          $dataseries1=array();
          $dataseries2=array();
          $dataseries3=array();
          $dataseries4=array();
          $dataseries5=array();
          $dataseries6=array();

          // pushing category array values
          while($row = mysqli_fetch_array($result)) {
            array_push($categoryArray, array(
            "label" => $row["Year"]
          )
        );
        array_push($dataseries1, array(
          "value" => $row["Rape"]
          )
        );

        array_push($dataseries2, array(
          "value" => $row["Assault"]
          )
        );
        array_push($dataseries3, array(
          "value" => $row["Kidnapping"]
          )
        );
        array_push($dataseries4, array(
          "value" => $row["Burglary"]
          )
        );
        array_push($dataseries5, array(
          "value" => $row["Homicides"]
          )
        );
        array_push($dataseries6, array(
          "value" => $row["TheftandHousebreaking"]
          )
        );

      }

      $arrData["categories"]=array(array("category"=>$categoryArray));
      // creating dataset object
      $arrData["dataset"] = array(array("seriesName"=> "Rape", "data"=>$dataseries1), array("seriesName"=> "Assault", "data"=>$dataseries2),array("seriesName"=> "Kidnapping", "data"=>$dataseries3),array("seriesName" =>"Burglary","data"=>$dataseries4),array("seriesName"=>"Homicides","data"=>$dataseries5),array("seriesName"=> "TheftandHousebreaking", "data"=>$dataseries6));


      /*JSON Encode the data to retrieve the string containing the JSON representation of the data in the array. */
      $jsonEncodedData = json_encode($arrData);

      // chart object
      $msChart = new FusionCharts("mscombi2d", "chart1" , "600", "350", "chart-container", "json", $jsonEncodedData);

      // Render the chart
      $msChart->render();
      
 }




