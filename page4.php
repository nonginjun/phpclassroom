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
        background-image: url("lu.jpg");
        background-size:100%;
      }

      #sidebar {
        background-color: #D9C999;
        padding: 0px;
      }

      #content {
        padding: 10px;
        background-color: #FEE5E0;
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
      color: white;
    }
   </style>
  </head>
        <div class="col-10" id="content">
          <!-- คอนเท้นต์ -->
          <center>
            <h3>ข้อมูลผู้จัดทำ</h3>
            <br>
          </center>
          <center><img width="200px" src="pm.jpg" class="img-fluid rounded"></center>
          <center>
          <p>
        นางสาวทิพย์วรา เกษามูล  ชื่อเล่น ปริม
เลขที่ 20 ชั้น ม.5/13
 </p>
             </center>
          <br/>
          <br>
          <center><img width="200px" src="bs.jpg" class="img-fluid rounded"></center>
          <center>
          <p>
        นางสาวปัณฑิตา จันทร์อนุรักษ์  ชื่อเล่น เบส
เลขที่ 22 ชั้น ม.5/13

 </p>
             </center>
          <br/>
           <br>
          <center><img width="200px" src="pw.jpg" class="img-fluid rounded"></center>
          <center>
          <p>
        นางสาวภัทรธิดา ศรีทับทิม  ชื่อเล่น เเพรวา
เลขที่ 23 ชั้น ม.5/13

 </p>
             </center>
          <br/>
          <br>
          <center><img width="200px" src="tk.jpg" class="img-fluid rounded"></center>
          <center>
          <p>
        นางสาวภัทรวดี ดาบัว  ชื่อเล่น ต้นข้าว
เลขที่ 24 ชั้น ม.5/13
            </p>
             </center>
          <br/>
          <br>
          <center><img width="200px" src="wn.jpg" class="img-fluid rounded"></center>
          <center>
          <p>
       นางสาวศิรดา พิลากุล  ชื่อเล่น ว่าน
เลขที่ 25 ชั้น ม.5/13

            </p>
             </center>
          <br/>
          <br>
          <center><img width="200px" src="em.jpg" class="img-fluid rounded"></center>
          <center>
          <p>
        นางสาวอารีรัตน์ คำโฉม  ชื่อเล่น อิ๋ม
เลขที่ 27 ชั้น ม.5/13

            </p>
             </center>
          <br/>
          
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
