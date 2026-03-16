<?php 

    /* switch = replacement to using many elseif statements
                more efficient, less code to write 
    */

    $grade = 'A';
    
    switch ($grade) {
        case 'A':
            echo "You did great";
            break;
        case 'B':
            echo "You did good";
            break;
        case 'C':
            echo "You did okay";
            break;
        case 'D':
            echo "You did poorly";
            break;
        case 'E':
            echo "You failed";
            break;
        default:
            echo "{$grade} is not a valid grade";
    }

    $date = date('l');

    $date = "Wednesday";

    switch($date) {
        case "Monday":
            echo "I hate Mondays";
            break;
        case "Tuesday":
            echo "It is Taco Tuesday!";
            break;
        case "Wednesday":
            echo "The work week is half over!";
            break;
        case "Thursday":
            echo "It's almost the weekend!";
            break;
        case "Friday":
            echo "The weekend is here!";
            break;
        case "Saturday":
            echo "Time to party!";
            break;
        case "Sunday":
            echo "Time to relax";
            break;
        default:
        echo "{$date} is not a valid date";
    }
?>