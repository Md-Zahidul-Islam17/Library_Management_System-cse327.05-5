<?php
	require('functions.php');
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>View Book Details Page</title>
  <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1"> 
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" href="../css/style.css">
  <style type="text/css">
    .Loginbox{
      width: 320px;
      height: 290px;
      background: #9999ff;
      color: black;
      top: 25%;
      left: 55%;
      position: absolute;
      transform: translate(-50%,-50%);
      box-sizing: border-box;
      padding: 5px 10px;
      border-radius: 10px;
      opacity: 0.9;
    }

  </style>
</head>
<body>
  <div ><h1 align="center" style="text-shadow: 1px 1px">Library Management System</h1></div>

  <h2><span style="color: white"><marquee behavior="scroll" direction="left"
           onmouseover="this.stop();"
           onmouseout="this.start();"><b>This is library Management System. Library opens at 8:00 AM and close at 8:00 PM</b></marquee></span></h2><br><br>

  <div class="Loginbox">

    <?php
       if(isset($_SESSION["name"]))
       {

           echo "<h1 align='center'>Welcome : ".$_SESSION["name"]."</h1>";
           echo "<p align='center'><a href='view_profile.php'>View Profile</a></p>";
           echo "<p align='center'><a href='change_password.php'>Change Password</a></p>";
           echo "<p align='center'><a href='logout.php'>Logout</a></p>";
           echo "<p align='center'><a href='admin_dashboard.php'>Go Back</a></p>";
       }
       else
       {
            header('location:login.php');
       }
       ?>

  </div><br><br><br><br><br><br><br><br>


  <table id="main" border="0" cellspacing="0">
      <tr>
        <td id="header">
          <h1>Admin Column</h1>
          <div id="search-bar">
            <label>Search :</label>
            <input type="text" id="search" autocomplete="off">
          </div>
        </td>
      </tr>
      <tr>
        <td id="table-form">
          <form id="addForm">
            Book Name : <input type="text" id="fname">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            Author Name : <input type="text" id="lname"><br><br>
            Category Name : <input type="text" id="fnames">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            Book Price : <input type="text" id="lnames"><br><br>
            <input type="submit" id="save-button" value="Save">
          </form>
        </td>
      </tr>
      <tr>
        <td id="table-data">
        </td>
      </tr>
    </table>
    <div id="error-message"></div>
    <div id="success-message"></div>
  <div id="modal">
    <div id="modal-form">
      <h2>Edit Form</h2>
      <table cellpadding="10px" width="100%">
      </table>
      <div id="close-btn">X</div>
    </div>
  </div>

<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    // Load/View Table Records
    function loadTable(){
      $.ajax({
        url : "view_book_load(function).php",
        type : "POST",
        success : function(data){
          $("#table-data").html(data);
        }
      });
    }
    loadTable(); // Load Table Records on Page Load

    // Insert New Records //add data
        $("#save-button").on("click",function(e){
          e.preventDefault();
          var fname = $("#fname").val();
          var lname = $("#lname").val();
          var fnames = $("#fnames").val();
          var lnames = $("#lnames").val();
          if(fname == "" || lname == ""|| fnames == "" || lnames == ""){
            $("#error-message").html("All fields are required.").slideDown();
            $("#success-message").slideUp();
          }else{
            $.ajax({
              url: "edit_book.php",
              type : "POST",
              data : {first_name:fname, last_name: lname, cat:fnames, price: lnames},
              success : function(data){
                if(data == 1){
                  loadTable();
                  $("#addForm").trigger("reset");
                  $("#success-message").html("Data Inserted Successfully.").slideDown();
                  $("#error-message").slideUp();
                }else{
                  $("#error-message").html("Can't Save Record.").slideDown();
                  $("#success-message").slideUp();
                }

              }
            });
          }

        });

    //Delete Records
    $(document).on("click",".delete-btn", function(){
      if(confirm("Do you really want to delete this record ?")){
        var studentId = $(this).data("id");
        var element = this;

        $.ajax({
          url: "delete_book.php",
          type : "POST",
          data : {id : studentId},
          success : function(data){
              if(data == 1){
                $(element).closest("tr").fadeOut();
              }else{
                $("#error-message").html("Can't Delete Record.").slideDown();
                $("#success-message").slideUp();
              }
          }
        });
      }
    });

    //Show Modal Box
    $(document).on("click",".edit-btn", function(){
      $("#modal").show();
      var studentId = $(this).data("eid");

      $.ajax({
        url: "update_book.php",
        type: "POST",
        data: {id: studentId },
        success: function(data) {
          $("#modal-form table").html(data);
        }
      })
    });

    //Hide Modal Box
    $("#close-btn").on("click",function(){
      $("#modal").hide();
    });

    //Save Update Form
      $(document).on("click","#edit-submit", function(){
        var stuId = $("#edit-id").val();
        var fname = $("#edit-fname").val();
        var lname = $("#edit-lname").val();
        var fnames = $("#edit-fnames").val();
        var lnames = $("#edit-lnames").val();

        $.ajax({
          url: "edit_book(function).php",
          type : "POST",
          data : {id: stuId, first_name: fname, last_name: lname, cat: fnames, price: lnames},
          success: function(data) {
            if(data == 1){
              $("#modal").hide();
              loadTable();
            }
          }
        })
      });

    // Live Search
     $("#search").on("keyup",function(){
       var search_term = $(this).val();

       $.ajax({
         url: "live_search.php",
         type: "POST",
         data : {search:search_term },
         success: function(data) {
           $("#table-data").html(data);
         }
       });
     });
  });
</script>
</body>
</html>
