<?php
$choice1 = $_POST["choice1"];
$choice2 = $_POST["choice2"];
$choice3 = $_POST["choice3"];
$choice4 = $_POST["choice4"];
$choice5 = $_POST["choice5"];

$correct = 0;

$percent = 0;
echo"<head><title>Classical Music Quiz Result</title></head>";

echo 'Question 1: Which of the following stringed instruments has a C string?<br>';
echo 'You answered: ' .$choice1. '<br>';
echo 'Correct answer: Viola<br><br>';
if($choice1 == "Viola")
{
        $correct++;
}

echo 'Question 2: Which composer is famous for their Symphony No. 9 "New World"?<br>';
echo 'You answered: ' .$choice2. '<br>';
echo 'Correct answer: Dvorak<br><br>';
if($choice2 == "Dvorak")
{
        $correct++;
}

echo 'Question 3: Which Tchaikovsky symphony is titled "Pathetique"?<br>';
echo 'You answered: ' .$choice3. '<br>';
echo 'Correct answer: 6<br><br>';
if($choice3 == "6")
{
        $correct++;
}

echo 'Question 4: This woodwind instrument is said to be the most similar to the human voice.<br>';
echo 'You answered: ' .$choice4. '<br>';
echo 'Correct answer: English Horn<br><br>';
if($choice4 == "English Horn")
{
        $correct++;
}

echo 'Question 5: Which symphony is Nicks favorite of all time?<br>';
echo 'You answered: ' .$choice5. '<br>';
echo 'Correct answer: All of the above<br><br>';
if($choice5 == "All of the above")
{
        $correct++;
}

echo 'You answered '.$correct.' questions correct out of 5.<br><br>';


$percent = ($correct / 5)* 100;
echo 'Your score is '.$percent.'%<br>';

?>
