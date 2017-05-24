<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="css/style.css"></script>
  <script type="text/javascript">

    $(function(){
      var loading = $('#loadbar').hide();
      $(document)
      .ajaxStart(function () {
        loading.show();
      }).ajaxStop(function () {
        loading.hide();
      });

      $("label.btn").on('click',function () {
        var choice = $(this).find('input:radio').val();
        $('#loadbar').show();
        $('#quiz').fadeOut();
        setTimeout(function(){
         $( "#answer" ).html(  $(this).checking(choice) );      
         $('#quiz').show();
         $('#loadbar').fadeOut();
         /* something else */
       }, 1500);
      });

      $ans = 3;

      $.fn.checking = function(ck) {
        if (ck != $ans)
          return 'INCORRECT';
        else 
          return 'CORRECT';
      }; 
    }); 

  </script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
</head>
<body>

  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
        </button>
        <a class="navbar-brand" href="#">Logo</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="question.php">Questionaire</a></li>
          <li><a href="final.php">Verify</a></li>
          <li><a href="add.php">Add</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul>
      </div>
    </div>
  </nav>
  
  <div class="container-fluid text-center">    
    <div class="row content">
      <div class="col-sm-2 sidenav">
        <p><a href="#">Link</a></p>
        <p><a href="#">Link</a></p>
        <p><a href="#">Link</a></p>
      </div>
      <div class="col-sm-8 text-left"> 
        <h1>Quizzer App</h1>
        <h2>This is to test your knowledge</h2>
        <p>This is a multiple choice quiz</p>
        <hr>
        <div class="container-fluid bg-info">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h3><span class="label label-warning" id="qid"></span> Go ahead and give it a try</h3>
                <div>