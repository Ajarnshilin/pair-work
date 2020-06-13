<?php

require_once ('config.php');

$Name = $_POST['Name'];
$Risk = 0;
$Alert =0;
$message = "You must answer all of the question";

//1
if(isset($_POST['question1'])){
    $question1 = $_POST['question1'];
  }
  else{
    $question1 = NULL;
  }

  if($question1 != NULL){
    if($question1 == "yes"){
      $Risk=$Risk+1;
    }
  } else {
      $Alert=$Alert+1;
  }

  
//2
if(isset($_POST['question2'])){
    $question2 = $_POST['question2'];
  }
  else{
    $question2 = NULL;
  }

if($question2 != NULL){
    if($question2 == "yes"){
        $Risk=$Risk+1;
    }
  } else {
    $Alert=$Alert+1;
  }

  //3
  if(isset($_POST['question3'])){
    $question3 = $_POST['question3'];
  }
  else{
    $question3 = NULL;
  }
  if($question3 != NULL){
    if($question3 == "yes"){
        $Risk=$Risk+1;
    }
  } else {
    $Alert=$Alert+1;
  }


  //4
    if(isset($_POST['question4'])){
    $question4 = $_POST['question4'];
  }
  else{
    $question4 = NULL;
  }
  if($question4 != NULL){
    if($question4 == "yes"){
        $Risk=$Risk+1;
    }
  } else {
    $Alert=$Alert+1;
  }


  //5
  if(isset($_POST['question5'])){
    $question5 = $_POST['question5'];
  }
  else{
    $question5 = NULL;
  }
  if($question5 != NULL){
    if($question5 == "yes"){
        $Risk=$Risk+1;
    }
  } else {
    $Alert=$Alert+1;
  }


  if ($Alert>0){
    echo "<script type='text/java script'>alert('$message');</script>";
    header ("refresh:1; url=home.php");

  }else {
    $userQuery = "INSERT INTO peopleinfo (Name, Risk) VALUES ('$Name', '$Risk')";
    $result = mysqli_query($connect, $userQuery);

    if (!$result) {
        die ("Could not successfully run the query $userQuery ".mysqli_error($connect));
    }
    else {
        echo "Submit successfully.<br><b>";
        echo "<a href='record_asc.php'>See your risk level</a><br><br>";
    }
}


    
//mysqli_close($connect);

//header("refresh:2; url=insert.html");

?>