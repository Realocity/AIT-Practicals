<!-- Name : Shubham Sapkal Roll No. : 2012118 -->

<!-- Q9. Using Case study in Q7 , achieve below given additional features using PHP:
Store test result of 10 students using an array. 
For each student, check the score and determine his or her category. 
Keep a count of students in each score.   -->


<?php
  $student= array("Person 1"=>"5","Person 2"=>"13","Person 3"=>"24",
  "Person 4"=>"0","Person 5"=>"19" ,"Person 6"=>"0" ,"Person 7"=>"25",
  "Person 8"=>"14" ,"Person 9"=>"21" ,"Person 10"=>"18");
  
  foreach($student as $name => $marks)
  {
    $category=null;
    if($marks==0)
    {
      $category="Ab";
    }
    else if($marks>=1 and $marks<=10)
    {
      $category="Pp";
    }
    else if($marks>=11 and $marks<=15)
    {
      $category="Rt";
    }
    else if($marks>=16 and $marks<=20)
    {
      $category="Gp";
    }
    else if($marks>=20 and $marks<=25)
    {
      $category="O";
    }
    
    switch($category)
    {
      case ('Ab'):echo $name." : You were Absent. Meet class co-ordinator. \n";
                  break;
      case ('Pp'):echo $name." : Your performance is poor. Solve whole paper again and submit. \n";
                  break;
      case ('Rt'):echo $name." : You have scored less. Appear for a retest \n";
                  break;
      case ('Gp'):echo $name." :  You have done well. Can do better. \n";
                  break;
      case ('O'):echo  $name." : Outstanding performece. keep it up! \n";
                  break;            
    }
  }
?> 