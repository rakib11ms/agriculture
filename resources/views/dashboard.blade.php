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
         ['Element', '', { role: 'style' }],
         ['ধান', 10.94, '#054D24'],            // RGB value
         ['গম', 13.49, '#054D24'],            // English color name
         ['ভুট্টা', 7.30, '#F2994A'],
         ['সরিষা', 8.30, '#F2994A'],
         ['তিল', 15.30, '#054D24'],
         ['তিসি', 3.30, '#FF4444'],
         ['মসুর', 3.30, '#FF4444'],
         ['আঁখ', 9.30, '#F2994A'],
         ['পাট', 9.30, '#F2994A'],
         ['আলু', 11.30, '#054D24'],
         ['পেঁয়াজ', 12.30, '#054D24'],
         ['মরিচ', 3.30, '#EB5757'],
         ['টমেটো', 3.30, '#EB5757'], // CSS-style declaration
      ]);

        var options = {
          vAxis: {title: 'উৎপাদন vs লক্ষমাত্রা  '},
          
          seriesType: 'bars',
        };

        var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>

    <script>
      const calendarBody = document.getElementById("calendar-body");
const currentMonth = document.getElementById("current-month");
const prevMonthButton = document.getElementById("prev-month");
const nextMonthButton = document.getElementById("next-month");

let today = new Date();
let currentMonthIndex = today.getMonth();
let currentYear = today.getFullYear();

function generateCalendar() {
  // Clear the current calendar
  calendarBody.innerHTML = "";

  // Set the current month and year in the header
  currentMonth.innerHTML = `${new Date(currentYear, currentMonthIndex).toLocaleDateString("en-US", { month: "long", year: "numeric" })}`;

  // Get the number of days in the current month
  let daysInMonth = new Date(currentYear, currentMonthIndex + 1, 0).getDate();

  // Get the index of the first day of the month (0 = Sunday, 1 = Monday, etc.)
  let firstDayIndex = new Date(currentYear, currentMonthIndex, 1).getDay();

  // Create the rows for the calendar
  let row = document.createElement("tr");

  // Add blank cells for the days before the first day of the month
  for (let i = 0; i < firstDayIndex; i++) {
    let cell = document.createElement("td");
    row.appendChild(cell);
  }

  // Add cells for each day of the month
  for (let i = 1; i <= daysInMonth; i++) {
    let cell = document.createElement("td");
    cell.innerHTML = i;

    // Highlight today's date
    if (i === today.getDate() && currentMonthIndex === today.getMonth() && currentYear === today.getFullYear()) {
      cell.classList.add("today");
    }

    row.appendChild(cell);

    // Start a new row at the beginning of each week
    if (row.children.length === 7) {
      calendarBody.appendChild(row);
      row = document.createElement
    </script>


       <link  rel="stylesheet" href="{{ asset('css/dashboard.css') }}">

    <title>agriculture</title>
  </head>



  <body>


  <div >

  <section class="container-fluid mobile-view">
    <div class="row ">
    <div class="col-lg-9 col-md-9 col-sm-10 col-10 ps-3 mt-4 dash-tag">
    <i class="fa fa-bars dash-icon"></i>    
    <h6 class="tag-1"><strong>ড্যাশবোর্ড : কৃষি সম্প্রাসারণ অধিদপ্তর,  সারেজমিন উইং</strong></h6>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-2 col-2 right-side-nav">
    <img  style="width: 25px; height: 25px; margin-right:18px" src="/Images/noti-icon.png" alt="notification">
    <i class="fa fa-user "></i>
        <div class="ms-3 mt-3 otirikto">
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

          <p style="color: red;font-weight: 600;"><span style="font-weight: 600; color: black; padding-bottom:10px;">৩২২৪ টি <br/>
          প্রতিবেদন প্রদান করেছে</span>
          <br/>
           ৯৯৮৩৭ টি <br/>
          প্রতিবেদন প্রদান করে নাই</p>
          <img  style="width: 50px; height: 60px; margin-right:18px" src="/Images/right-arrow.png" alt="right-arrow">
        </div>
      </div>
      <div class="col-lg-2 col-md-2 col-sm-12 col-12">
      <div id="piechart" style="width: 200px; height: 200px;"></div>
      <!-- <img  style="width: 100%" src="/Images/pie-chart.png" alt="pie-chart"><br/>-->
      <p class="chart-texts">দৈনিক তথ্য প্রদানের হার</p> 
      </div>
      <div class="col-lg-2 col-md-2 col-sm-12 col-12">
  <!-- <img  style="width: 100%" src="/Images/pie-chart.png" alt="pie-chart"><br/> -->
  <div id="piechart1" style="width: 200px; height: 200px;"></div>
      <p class="chart-texts">হাওড় এলকার প্রতিবেদন</p>
      </div>
      <div class="col-lg-2 col-md-2 col-sm-12 col-12">
  <!-- <img  style="width: 100%" src="/Images/pie-chart.png" alt="pie-chart"><br/> -->
  <div id="piechart2" style="width: 200px; height: 200px;"></div>
      <p class="chart-texts">প্রকৃতিক দুর্যোগের ক্ষয়ক্ষতির প্রতিবেদন</p>
      </div>
    </div>
  </section>


  <section class="container mt-5">
    <div class="">
      <h6><strong><span><</span>২০২২-২৩ অর্থবছর</strong></h6>
    <div id="chart_div" ></div>
    </div>
  </section>


  <section class="container mt-5">

      <div class="row">
          <div class="col-lg-7 col-md-7 col-sm-12 col-12 protibedon-div">
            <div class="d-flex justify-content-between mb-3 ">
              <h4><strong>প্রতিবেদন</strong></h4>
              <h4><strong>< ২০২৩ ></strong></h4>
            </div>
            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-3 col-4 " style="background-color:#6FCF97; display:grid; place-items:center;">
                <img  style="width: 50%" src="/Images/calender.png" alt="pie-chart">
                <p>জানুয়ারী</p>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-3 col-4 bg-light" style="display:grid; place-items:center">
                <img  style="width: 50%; " src="/Images/calender.png" alt="pie-chart">
                <p>ফেব্রুয়ারী</p>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-3 col-4" style="background-color:#6FCF97; display:grid; place-items:center">
                <img  style="width: 50%" src="/Images/calender.png" alt="pie-chart">
                <p>মার্চ</p>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-3 col-4 bg-light" style=" display:grid; place-items:center">
                <img  style="width: 50%" src="/Images/calender.png" alt="pie-chart">
                <p>এপ্রিল</p>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-3 col-4 bg-light" style=" display:grid; place-items:center">
                <img  style="width: 50%" src="/Images/calender.png" alt="pie-chart"> 
                <p>মে</p>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-3 col-4 bg-light" style=" display:grid; place-items:center">
                <img  style="width: 50%" src="/Images/calender.png" alt="pie-chart">
                <p>জুন</p>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-3 col-4 bg-light" style=" display:grid; place-items:center">
                <img  style="width: 50%" src="/Images/calender.png" alt="pie-chart">
                <p>জুলাই</p>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-3 col-4 bg-light" style=" display:grid; place-items:center">
                <img  style="width: 50%" src="/Images/calender.png" alt="pie-chart">
                <p>আগস্ট</p>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-3 col-4 bg-light" style=" display:grid; place-items:center">
                <img  style="width: 50%" src="/Images/calender.png" alt="pie-chart">
                <p>সেপ্টেম্বর</p>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-3 col-4 bg-light" style=" display:grid; place-items:center">
                <img  style="width: 50%" src="/Images/calender.png" alt="pie-chart">
                <p>অক্টোবর</p>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-3 col-4 bg-light" style=" display:grid; place-items:center">
                <img  style="width: 50%" src="/Images/calender.png" alt="pie-chart">
                <p>নভেম্বর</p>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-3 col-4 bg-light" style=" display:grid; place-items:center">
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
                <p class="bg-light p-4"><strong>নতুন ফসল/জাত যোগ করণ ও সম্পাদন</strong></p>
              </div>
              <div>
                <p class="bg-light p-4"><strong>নতুন ফসল/জাত যোগ করণ ও সম্পাদন</strong></p>
              </div>
            </div>
          </div>
          <div class="col-lg-5 col-md-5 col-sm-12 col-12 mb-5">
            <div class="">
              <div class="d-flex justify-content-between">
                 <h5><strong>সাম্প্রতিক</strong></h5>
                 <p><strong>সব দেখুন</strong></p>
              </div>
              <div>
                <p class=" p-3" style="background-color:#FFF1C7; font-size:.9rem"><strong>রংপুর জেলা থেকে তথ্য প্রেরণ করা হয়েছে</strong></p>
              </div>
              <div>
                <p class=" p-3" style="background-color:#FFCCCC; font-size:.9rem"><strong>নোটিশ: ত্রৈমাসিক সভা ২৩ এপ্রিল, ২০২৩</strong></p>
              </div>
            </div>
            <div class="mt-2">
              <div class="d-flex justify-content-between">
                 <h5><strong>আবেদন সমূহ</strong></h5>
                 <p><strong>সব দেখুন</strong></p>
              </div>
              <div class="d-flex justify-content-between align-items-center p-2 mb-3" style="background-color:#FFF1C7; ">
                <p class="mt-2" style="font-size:.9rem"><strong>দূর্গপুর ইউনিয়ন (উলিপুর, কুড়িগ্রাম) হতে ড্রোন চালানো অনুম...</strong> </p>
                <img  style="width: 4%; height:4%" src="/Images/exclamation-mark.png" alt="exlamation-mark">
              </div>
             <div class="d-flex justify-content-between align-items-center p-2" style="background-color:#FFF1C7; ">
                <p class="mt-2" style="font-size:.9rem"><strong>নোটিশ: ত্রৈমাসিক সভা ২৩ এপ্রিল, ২০২৩</strong> </p>
                <img  style="width: 4%; height:4%" src="/Images/exclamation-mark.png" alt="exlamation-mark">
              </div>
            </div>
            <div class="mt-4">
              <div class="d-flex justify-content-between">
                 <h5><strong>ড্রোন লগ</strong></h5>
                 <p><strong>সব দেখুন</strong></p>
              </div>
              <div class="d-flex justify-content-between align-items-center p-2 mb-3" style="background-color:#FFF1C7; ">
                <p class="mt-2" style="font-size:.9rem"><strong>রংপুর জেলা থেকে ড্রোন ব্যাবহার করা হয়েছে</strong> </p>
                <img  style="width: 4%; height:4%" src="/Images/exclamation-mark.png" alt="exlamation-mark">
              </div>
             <div class="d-flex justify-content-between align-items-center p-2" style="background-color:#FFF1C7; ">
                <p class="mt-2" style="font-size:.9rem"><strong>নারায়নগঞ্জ জেলা থেকে ড্রোন ব্যবহার করা হয়েছে</strong></p>
                <img  style="width: 4%; height:4%" src="/Images/exclamation-mark.png" alt="exlamation-mark">
              </div>
            </div>
          </div>
      </div>
  </section>
<div>
<div class="calendar">
  <div class="calendar-header">
    <button id="prev-month">&lt;</button>
    <h2 id="current-month">2020-2023</h2>
    <button id="next-month">&gt;</button>
  </div>
  <table>
    <thead>
      <tr>
        <th>Sun</th>
        <th>Mon</th>
        <th>Tue</th>
        <th>Wed</th>
        <th>Thu</th>
        <th>Fri</th>
        <th>Sat</th>
      </tr>
    </thead>
    <tbody id="calendar-body">
    </tbody>
  </table>
</div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- Font Awesome  -->
<script src="https://kit.fontawesome.com/bd007fe07b.js" crossorigin="anonymous"></script>
    
  </body>
</html>