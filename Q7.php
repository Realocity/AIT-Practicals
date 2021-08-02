 <!-- Name : Shubham Sapkal Roll No. : 2012118  -->

 <!--  Q7. Class Test 1 was recently held in your college. 
 After correction of answer sheets, 
 following cut-offs were fixed by the academic council. 
 Write a php program to implement the same using decision making and flow control mechanisms. 
 Assume necessary values of score for executing your program -->

<?php
$marks=0;

if ($marks <= 0) 
{
  echo "You were Absent. Meet class co-ordinator";
} 
elseif ($marks >= 1 && $marks <=10) 
{
  echo "Your performance is poor. Solve whole paper again and submit.";
}
elseif ($marks >= 11 && $marks <=15) 
{
echo " Your performance is poor. Appear for the retest.";
}
elseif ($marks >= 16 && $marks <=20) 
{
echo " Your performance is well. Can do better.";
}
elseif ($marks >= 20 && $marks <=25) 
{
echo "Your performance is well. Keep it up.";
}


