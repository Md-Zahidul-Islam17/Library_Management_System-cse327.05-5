<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Search</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <style type="text/css">
  *{ 
  margin: 0;
  padding: 0;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
    }
  body{
    margin: 0;
    padding: 0;
    background: url(6.jpg);
    background-size: 100%;
    background-position: center;
    font-family: sans-serif;
  }
    table {
        width:30%;
      }
      table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
        background-color: #e6ffff;
      }
      th, td {
        padding: 15px;
        text-align: left;
      }
  </style>
 </head>
 <body>
  <div class="container">
   <br />
   <h2 align="center">Search Book/Author by Name</h2><br />
   <div align="center" class="form-group">
    <div class="input-group">
     <span class="input-group-addon">Search</span>
     <input type="text" name="search_text" id="search_text" placeholder="Search by ..." class="form-control" />
    </div>
   </div>
   <br />
   <div align="center" id="result"></div>
  </div><br>
  <div class="back" align="center">
    <button type="button" name="back" style="background-color: orange;">
      <a href="user_dashboard.php">Back</a>
    </button>
  </div>
 </body>
</html>

<script>
$(document).ready(function(){

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"user_search.php",
   method:"POST",
   data:{query:query},
   success:function(data)
   {
    $('#result').html(data);
   }
  });
 }
 $('#search_text').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
 });
});
</script>
