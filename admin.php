<!DOCTYPE html>
<html lang="en">
<?php 
    session_start();
    if($_SESSION['email']=='')
    {
        echo '<script>window.location="index.php"</script>';
    }
?>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- 
    - primary meta tags
  -->
  <title>Kathi Nation</title>
  <!-- <meta name="title" content="Grilli - Amazing & Delicious Food">
  <meta name="description" content="This is a Restaurant html template made by codewithsadee"> -->

  <!-- 
    - favicon
  -->
  <!-- <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml"> -->

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&family=Forum&display=swap" rel="stylesheet">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!-- 
    - preload images
  -->
  <link rel="preload" as="image" href="./assets/images/hero-slider-1.jpg">
  <link rel="preload" as="image" href="./assets/images/hero-slider-2.jpg">
  <link rel="preload" as="image" href="./assets/images/hero-slider-3.jpg">

  <link href="//cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" rel="stylesheet">

  <style type="text/css">
    div.dataTables_wrapper {
        width: 100%;
        margin: 0 auto;
        height: 100%;
    }

    table {
        height: auto;
        width: auto;
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
    }

    table td, table th {
        border: 1px solid #ddd;
        padding: 8px;
    }
    table td{
        color:black;
    }
    table tr:nth-child(even){background-color: #f2f2f2;}

    table tr{background-color: #ddd;}

    table th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color:#001f3f;
        color: white;
    }

    .main-table {
        background: white;
        /*        margin: 10px;*/
        padding: 15px 30px;
    }
</style>

</head>
<body id="top">

 <!-- 
    - #TOP BAR
  -->

  <div class="topbar">
    <div class="container">

      <a href="logout.php" class="topbar-item link form-btn">
        <div class="icon">
          <ion-icon name="log-out-outline" aria-hidden="true"></ion-icon>
        </div>

        <span class="span">Logout</span>
      </a>

    </div>
  </div>



<?php 
    session_start();
    if($_SESSION['email']=='')
    {
        echo '<script>window.location="index.php"</script>';
    }
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Vanita</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <!-- Place favicon.ico in the root directory -->

    <link href="//cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" rel="stylesheet">


    <style type="text/css">
    div.dataTables_wrapper {
        width: 100%;
        margin: 0 auto;
        height: 100%;
    }

    table {
        height: auto;
        width: auto;
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
    }

    table td,
    table th {
        border: 1px solid #ddd;
        padding: 8px;
    }

    table td {
        color: black;
    }

    table tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    table tr {
        background-color: #ddd;
    }

    table th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #001f3f;
        color: white;
    }

    .main-table {
        background: white;
        /*        margin: 10px;*/
        padding: 15px 30px;
    }
    </style>
</head>

<body>

<?php
require_once('conn.php');

$query = "SELECT * FROM contact ";
$result = mysqli_query($conn, $query);
?>

<div class="main-table" style="overflow-x:auto;width:100%">
<h1 style="color:black";>Contact Requests</h1>
    <hr>
    <table id="example" class="table display nowrap" style="width:100%">
        <thead>
            <tr class="tr">
                <th>Name</th>
                <th>Email</th>
                <th>Message</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($result as $row) {
                ?>
                <tr>
                    <td>
                        <?php echo $row['name']; ?>
                    </td>
                    <td>
                        <?php echo $row['email']; ?>
                    </td>
                    <td>
                        <?php echo $row['message']; ?>
                    </td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
</div>
         
        </div>
      </section>



  <!-- 
    - #BACK TO TOP
  -->

  <a href="#top" class="back-top-btn active" aria-label="back to top" data-back-top-btn>
    <ion-icon name="chevron-up" aria-hidden="true"></ion-icon>
  </a>





  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" ></script>
<script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function(){  
      $('#example').DataTable({
          scrollX:true
      });  
 });
</script>

</body>

</html>

 