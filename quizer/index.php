<?php include 'database.php';?>
<?php include 'header.php';?>
        <?php    
            $query = "select * from questions";

            $result = $mysqli->query($query) or die($mysqli->error.__LINE__);

            $total = $result->num_rows;

            session_start();

            $_SESSION['total'] = $total; 

            ?>
 
              <div class="quiz-body">
                <ul class="list-group">
                  <li class="list-group-item"><strong>Number of Questions : <?php echo $_SESSION['total'] ;?></strong></li>
                  <li class="list-group-item"><strong>Type : PHP</strong></li>
                  <li class="list-group-item"><strong>Estimated Time : 2mins</strong></li>
                </ul> 
                <a href="question.php?n=1" class="start">Start Quiz</a> 
              </div>
           
       

<?php include 'footer.php'; ?>


