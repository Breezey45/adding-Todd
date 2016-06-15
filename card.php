<?php
// echo '<pre>';
// print_r($_POST);
// echo '</pre>';

//initalise variables
$sMessage = '';
$sCardColour = '';
$iTreeHeight = 0;

//when form is submitted
if(isset($_POST['submit']) == true){

    //Get input from users
    $sMessage = $_POST['message'];
    $sCardColour = $_POST['cardColour'].'Background';
    $iTreeHeight =  $_POST['treeHeight'];
}

require_once('includes/functions.php');
require_once('includes/header.php');
?>
    
    <!-- making card based on user input -->
    <div class="card <?php echo $sCardColour;?>">
        <h1><?php echo $sMessage;?></h1>
        <div class="photo tomatoBackground">
      
            <?php echo makeTree($iTreeHeight);?>
         
        </div>
    </div>


<?php
require_once('includes/footer.php');
?>