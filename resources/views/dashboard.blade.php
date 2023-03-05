<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
<!-- Pie-Charts  -->

<!-- দৈনিক তথ্য প্রদানের হার -->
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['কিশোরগঞ্জ', 'Speakers (in millions)'],
          ['চাঁপাইনবাবগঞ্জ',  5.85],
          ['রাজশাহী',  1.66],
          ['পাবনা', 0.316],
          ['নোয়াখালী', 0.0791]
        ]);

      var options = {
        legend: 'none',
        pieSliceText: 'label',
        
        pieStartAngle: 100,
      };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options);
      }
    </script>

<!-- হাওড় এলকার প্রতিবেদন -->
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart1);
      function drawChart1() {
        var data1 = google.visualization.arrayToDataTable([
          ['কিশোরগঞ্জ', 'Speakers (in millions)'],
          ['নিকলী হাওর',  5.85],
          ['তল্লার হাওর',  1.66],
          ['মইয়ার হাওর', 0.316],
          ['শনির হাওর', 0.0791]
        ]);

      var options1 = {
        legend: 'none',
        pieSliceText: 'label',
        pieStartAngle: 100,
      };

        var chart1 = new google.visualization.PieChart(document.getElementById('piechart1'));
        chart1.draw(data1, options1);
      }
    </script>

<!-- প্রকৃতিক দুর্যোগের ক্ষয়ক্ষতির প্রতিবেদন  -->
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart2);
      function drawChart2() {
        var data2 = google.visualization.arrayToDataTable([
          ['কক্সবাজার পাহাড় ধ্বস ঘটনার প্রতিবেদন', 'Speakers (in millions)'],
          ['অতিবৃষ্টির কারনে পাহাড়ধ্বসে সৃষ্ট ক্ষয়ক্ষতির  হালনাগাদ তথ্য',  5.85],
          ['দুর্যোগ পরিস্থিতি প্রতিবেদন',  2.66],
          ['ভূমিকম্পে ক্ষয়ক্ষতির প্রতিবেদন', 3.316],
          ['নদী ভাংগন ও বন্যা সম্পর্কিত প্রতিবেদন', 0.0791]
        ]);

      var options2 = {
        legend: 'none',
        pieSliceText: 'label',
        pieStartAngle: 100,
      };

        var chart2 = new google.visualization.PieChart(document.getElementById('piechart2'));
        chart2.draw(data2, options2);
      }
    </script>

<!-- Combo Chart  -->
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawVisualization);

      function drawVisualization() {
        // Some raw data (not necessarily accurate)
        var data = google.visualization.arrayToDataTable([
          ['Product', 'ধান', 'গম', 'ভুট্টা', 'সরিষা', 'তিল', 'তিষি'],
          ['ধান',  165,      938,         522,             998,           450,      614.6],
          ['গম',  135,      1120,        599,             1268,          288,      682],
          ['ভুট্টা',  157,      1167,        587,             807,           397,      623],
          ['সরিষা',  139,      1110,        615,             968,           215,      609.4],
          ['তিল',  136,      691,         629,             1026,          366,      569.6]
        ]);

        var options = {
          vAxis: {title: 'উৎপাদন vs লক্ষমাত্রা  '},
          
          seriesType: 'bars',
        };

        var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>


       <link  rel="stylesheet" href="{{ asset('css/dashboard.css') }}">

    <title>agriculture</title>
  </head>



  <body>


  <div >

  <section class="container-fluid ">
    <div class="row ">
    <div class="col-lg-9 col-md-9 col-sm-12 col-12 ps-3 mt-4">
        <h6><span class="me-3 ms-3"><i class="fa fa-bars"></i></span><strong>ড্যাশবোর্ড : কৃষি সম্প্রাসারণ অধিদপ্তর,  সারেজমিন উইং</strong></h6>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-12 col-12 right-side-nav">
    <img  style="width: 25px; height: 25px; margin-right:18px" src="/Images/noti-icon.png" alt="notification">
    <i class="fa fa-user "></i>
        <div class="ms-3 mt-3">
        <h6><strong>হুমায়ূন কবির</strong></h6>
        <p class="nav-designation">অতিরিক্ত উপপরিচালক (কন্ট্রোল রুম),<br/>
কৃষি সম্প্রসারণ অধিদপ্তর</p>
        </div>
    </div>
    </div>
   
  </section>

  <section class="container">
    <h6><strong>একনজরে</strong></h6>
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-6 col-6">
         <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
            <option selected>জেলা</option>
            <option value="1">ঢাকা</option>
            <option value="2">চাঁপাই-নবাবগঞ্জ</option>
            <option value="3">নাটর</option>
          </select>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6 col-6">
         <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
            <option selected>উপজেলা</option>
            <option value="1">শান্তিগঞ্জ-উপজেলা</option>
            <option value="2">দাসার-উপজেলা</option>
            <option value="3">শিবপগঞ্জ-উপজেলা</option>
          </select>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6 col-6">
         <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
            <option selected>ইউনিয়ন</option>
            <option value="1">কুশুমহাটি</option>
            <option value="2">মোহাম্মাদপুর</option>
            <option value="3">নারিসা</option>
            <option value="3">রাজপাড়া</option>
            <option value="3">বিলাষপুর</option>
          </select>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6 col-6">
         <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
            <option selected>ব্লক</option>
            <option value="1">এ-ব্লক</option>
            <option value="2">বি-ব্লক</option>
            <option value="3">সি-ব্লক</option>
          </select>
      </div>
    </div>
  </section>

  <section class="container mt-5">
    <h6><strong>আপনি সমগ্র বাংলাদেশের প্রতিবেন দেখছেন</strong></h6>
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12 col-12 bg-light">
        <div class="ogrim-protibedon-dekhchen">
        <p style="font-weight: 700">৩২২৪২১ টি <br/>
              ব্লক</p>

          <p style="color: red;font-weight: 600;"><span style="font-weight: 600; color: black">৩২২৪ টি <br/>
          প্রতিবেদন প্রদান করেছে</span>
          <br/>
           ৯৯৮৩৭ টি <br/>
          প্রতিবেদন প্রদান করে নাই</p>
          <img  style="width: 50px; height: 60px; margin-right:18px" src="/Images/right-arrow.png" alt="right-arrow">
        </div>
      </div>
      <div class="col-lg-2 col-md-2 col-sm-4 col-4">
      <div id="piechart" style="width: 200px; height: 200px;"></div>
      <!-- <img  style="width: 100%" src="/Images/pie-chart.png" alt="pie-chart"><br/>-->
      <p>দৈনিক তথ্য প্রদানের হার</p> 
      </div>
      <div class="col-lg-2 col-md-2 col-sm-4 col-4">
  <!-- <img  style="width: 100%" src="/Images/pie-chart.png" alt="pie-chart"><br/> -->
  <div id="piechart1" style="width: 200px; height: 200px;"></div>
      <p>হাওড় এলকার প্রতিবেদন</p>
      </div>
      <div class="col-lg-2 col-md-2 col-sm-4 col-4">
  <!-- <img  style="width: 100%" src="/Images/pie-chart.png" alt="pie-chart"><br/> -->
  <div id="piechart2" style="width: 200px; height: 200px;"></div>
      <p>প্রকৃতিক দুর্যোগের ক্ষয়ক্ষতির প্রতিবেদন</p>
      </div>
    </div>
  </section>


  <section class="container mt-5">
    <div class="">
      <h6><strong><span><</span>২০২২-২৩ অর্থবছর</strong></h6>
    <div id="chart_div" style="width: 110%; height: 400px;"></div>
    </div>
  </section>


  <section class="container">

      <div class="row">
          <div class="col-lg-7 col-md-7 col-sm-12 col-12 protibedon-div">
            <div class="d-flex justify-content-between mb-3 mt-5">
              <h6><strong>প্রতিবেদন</strong></h6>
              <h6><strong>< ২০২৩ ></strong></h6>
            </div>
            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-3 col-4 " style="background-color:#6FCF97">
                <img  style="width: 50%" src="/Images/calender.png" alt="pie-chart">
                <p>জানুয়ারী</p>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-3 col-4 ">
                <img  style="width: 50%" src="/Images/calender.png" alt="pie-chart">
                <p>ফেব্রুয়ারী</p>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-3 col-4"style="background-color:#6FCF97">
                <img  style="width: 50%" src="/Images/calender.png" alt="pie-chart">
                <p>মার্চ</p>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-3 col-4">
                <img  style="width: 50%" src="/Images/calender.png" alt="pie-chart">
                <p>এপ্রিল</p>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-3 col-4">
                <img  style="width: 50%" src="/Images/calender.png" alt="pie-chart"> 
                <p>মে</p>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-3 col-4">
                <img  style="width: 50%" src="/Images/calender.png" alt="pie-chart">
                <p>জুন</p>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-3 col-4">
                <img  style="width: 50%" src="/Images/calender.png" alt="pie-chart">
                <p>জুলাই</p>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-3 col-4">
                <img  style="width: 50%" src="/Images/calender.png" alt="pie-chart">
                <p>আগস্ট</p>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-3 col-4">
                <img  style="width: 50%" src="/Images/calender.png" alt="pie-chart">
                <p>সেপ্টেম্বর</p>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-3 col-4">
                <img  style="width: 50%" src="/Images/calender.png" alt="pie-chart">
                <p>অক্টোবর</p>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-3 col-4">
                <img  style="width: 50%" src="/Images/calender.png" alt="pie-chart">
                <p>নভেম্বর</p>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-3 col-4">
                <img  style="width: 50%" src="/Images/calender.png" alt="pie-chart">
                <p>ডিসেম্বর</p>
                </div>
            </div>
            <div>
              <div class="d-flex justify-content-between pb-4 mt-5">
              <h6><strong>কুইক মেন্যু</strong></h6>
              <i class="fa fa-plus"></i>
              </div>
              <div>
                <p class="bg-light p-4">নতুন ফসল/জাত যোগ করণ ও সম্পাদন</p>
              </div>
              <div>
                <p class="bg-light p-4">নতুন ফসল/জাত যোগ করণ ও সম্পাদন</p>
              </div>
            </div>
          </div>
          <div class="col-lg-5 col-md-5 col-sm-12 col-12">

          </div>
      </div>
  </section>
<div>

</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- Font Awesome  -->
<script src="https://kit.fontawesome.com/bd007fe07b.js" crossorigin="anonymous"></script>
    
  </body>
</html>