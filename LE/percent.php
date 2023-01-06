<!DOCTYPE html>
<!-- Created By CodingNepal - www.codingnepalweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="shortcut icon" type="image/png" href="img/umbrella.png">
    <title>Blood Percentage</title>
    <link rel="stylesheet" href="styler.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-circle-progress/1.2.2/circle-progress.min.js"></script>
  </head>
  <body>
    <div class="links">
    <li><a href="main.php" style="text-decoration:none;">Return</a></li>
  </div>
      <div class ="shead">
          <h2>PERCENTAGE OF BLOOD AVAILABLE</h2>
      </div>
    <div class="wrapper">
      <div class="card">
        <div class="circle">
          <div class="bar"></div>
          <div class="box"><span></span></div>
        </div>
        <div class="text">A+, A-</div>
      </div>
      <div class="card js">
        <div class="circle">
          <div class="bar"></div>
          <div class="box"><span></span></div>
        </div>
        <div class="text">B+, B-</div>
      </div>
      <div class="card react">
        <div class="circle">
          <div class="bar"></div>
          <div class="box"><span></span></div>
        </div>
        <div class="text">AB+, AB-</div>
      </div>
      <div class="card ws">
        <div class="circle">
          <div class="bar"></div>
          <div class="box"><span></span></div>
        </div>
        <div class="text">O+, O-</div>
        </div>
    </div>

    <script>
      let options = {
        startAngle: -1.55,
        size: 150,
        value: 0.85,
        fill: {gradient: ['#a445b2', '#fa4299']}
      }
      $(".circle .bar").circleProgress(options).on('circle-animation-progress',
      function(event, progress, stepValue){
        $(this).parent().find("span").text(String(stepValue.toFixed(2).substr(2)) + "%");
      });
      $(".js .bar").circleProgress({
        value: 0.90
      });
      $(".react .bar").circleProgress({
        value: 0.60
      });
      $(".ws .bar").circleProgress({
        value: 0.57
      });
    </script>

  </body>
</html>