<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Hello, world!</title>
    
    <style>
      #header{
        height: 120px;
        background-color: pink;
      }
       #sidebar{
        height: 400px;
        background-color: #FCEEE2;
      }
      #content{
        height: 400px;
        background-color: #C0E4F6;
      }
      #footer{
        height: 170px;
        background-color: #E3EBFD;
    </style>
    
  </head>
  <body> 
    <div class="container"> <!-- คอนเทนเนอร์ -->
      <div class="row">
        <div class="col-12" id="header"><!-- เห็ดเดอร์ -->
          <h1>Header</h1>
        </div>
      </div>
     <div class="row">
        <div class="col-3" id="sidebar"><!-- ไส้บา -->
          <h1>sidebar</h1>
        </div>
       <div class="col-9" id="content"><!-- คอนเท้น -->
          <h1>content</h1>
      </div>
        </div>
       <div class="row">
       <div class="col-12" id="footer"><!-- ฟุตเต้อ -->
          <h1>footer</h1>
        </div>
          </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>
