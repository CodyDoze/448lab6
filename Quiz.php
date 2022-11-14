<?php

#Question 1
$Q1=$_POST["Q1"];
$Q1Ans = "Danny Manning";
$correct = 0;
$total = 5;
echo '<h1 style="text-align: center;"> Quiz Results </h1> <br>';
echo "Question 1: Who is the KU basketball all time leading scorer? <br>";
echo "You Answered: $Q1 <br>";
echo "Correct Answer: $Q1Ans <br><br>";
if($Q1==$Q1Ans)
{
        ++$correct;
}
#Question2
$Q2=$_POST["Q2"];
$Q2Ans="8";
echo "Question 2: How many head coaches have there been in KU history? <br>";
echo "You Answered: $Q2 <br>";
echo "Correct Answer: $Q2Ans <br><br>";
if($Q2==$Q2Ans)
{
        ++$correct;
}

#Question3
$Q3=$_POST["Q3"];
$Q3Ans="1952";
echo "Question 3: What year did construction of Allen Fieldhouse begin? <br>";
echo "You Answered: $Q3 <br>";
echo "Correct Answer: $Q3Ans <br><br>";
if($Q3==$Q3Ans)
{
        ++$correct;
}

#Question4
$Q4=$_POST["Q4"];
$Q4Ans="Phog Allen";
echo "Question 4: Which KU coach has the most wins all time? <br>";
echo "You Answered: $Q4 <br>";
echo "Correct Answer: $Q4Ans <br><br>";
if($Q4==$Q4Ans)
{
        ++$correct;
}

#Question5
$Q5=$_POST["Q5"];
$Q5Ans="Andrew Wiggins";
echo "Question 5: Who was KU basketball's most recent #1 overall draft pick?<br>";
echo "You Answered: $Q5 <br>";
echo "Correct Answer: $Q5Ans <br><br>";
if($Q5==$Q5Ans)
{
        ++$correct;
}

$percent= ($correct/$total)*100;
echo "<h3> Results </h3>";
echo "You correctly answered $correct questions. <br>";
echo "You scored a $percent%";

?>