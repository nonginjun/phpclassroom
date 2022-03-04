<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <title>จังหวัดน่าน</title>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Sarabun"
    />
    <style>
      body {
        font-family: "Sarabun";
        background-color: #fdf2e7;
      }

      #container {
        box-shadow: 6px 4px 8px 6px rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      }

      #header {
        height: 160px;
        background-image: url("kuy.png");
        background-size:100%;
      }

      #sidebar {
        background-color: #D9C999;
        padding: 0px;
      }

      #content {
        padding: 10px;
        background-color: white;
      }

      #footer {
        padding: 50px;
        background-color: #99AE83;
        border-radius: 0 0 15px 15px;
      }

      ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        width: 100%;
        background-color: #f1f1f1;
      }

      li a {
        display: block;
        color: #000;
        padding: 8px 16px;
        text-decoration: none;
      }

      /* Change the link color on hover */
      li a:hover {
        background-color: #555;
        color: white;
      }
      p{
        margin-top: 10px;
      }
    </style>
  </head>

  <body>
    <!-- คอนเทนเนอร์ -->
    <div class="container">
      <div id="container">
      <div class="row">
        <div class="col-12" id="header">
          <!-- เฮดเดอร์ -->
          
        </div>
      </div>
      <div class="row">
        <div class="col-2" id="sidebar">
          <!-- ไซด์บาร์ -->
          <ul>
            <li><a href="index.php">หน้าแรก</a></li>
            <li><a href="page11.php">แหล่งท่องเที่ยว</a></li>
            <li><a href="page2.php">ประเพณีและวัฒนธรรม</a></li>
            <li><a href="page3.php">อาหารประจำท้องถิ่น</a></li>
            <li><a href="page4.php">ข้อมูลผู้จัดทำ</a></li>
          </ul>
        </div>
         <head>
    <title>Navigation Bar</title>
    <style>
    ul {
      list-style-type: none;
    }
    li a {
      display: block;
      padding: 8px 16px;
      text-decoration: none;
      background-color: #F2F2CE;
    }
    li a:hover {
      background-color: #EB8C55;
      color: pink;
    }
   </style>
  </head>
        <div class="col-10" id="content">
          <!-- คอนเท้นต์ -->
          <center>
            <h1>ข้อมูลผู้จัดทำ</h1>
          </center>
          <center><img width="300px" src=pm.png class="img-fluid rounded"></center>
          <center>
          <p>
         <h1>  1.นางสาวทิพย์วรา เกษามูล  ชื่อเล่น ปริม
เลขที่ 20 ชั้น ม.5/13</h1>
 </p>
             </center>
        </div>
      </div>
      <div class="row">
        <div class="col-12" id="footer">
          <!-- ฟุตเตอร์ -->
          <center>
            <h3>ผลงานนักเรียน</h3>
            <hr />
            <p>รายวิชา WebApplication</p>
            <p>โรงเรียนหล่มสักวิทยาคม</p>
          </center>
        </div>
      </div>
      </div>  
    </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
