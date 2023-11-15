<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAB-2</title>
</head>

<body>
    <?php
    $name = "Christopher Rönnberg";
    $logo = "PHP";
    $hem = "hem";
    $sida1 = "dagar";
    $sida2 = "siffror";
    $timeOfTheDay;
    $greetings = array("God morgon", "God dag", "Hej", "God eftermiddag", "God kväll", "Godnatt");
    $date = date("Y-m-d");
    $time = date("H:i:s");
    $hour = date('H') + 1;

    if ($hour >= 22 || $hour < 6) {
        $timeOfTheDay = 5;
    } elseif ($hour >= 19 && $hour < 22) {
        $timeOfTheDay = 4;
    } elseif ($hour >= 16 && $hour < 19) {
        $timeOfTheDay = 3;
    } elseif ($hour >= 12 && $hour < 16) {
        $timeOfTheDay = 2;
    } elseif ($hour >= 10 && $hour < 12) {
        $timeOfTheDay = 1;
    } elseif ($hour >= 6 && $hour < 10) {
        $timeOfTheDay = 0;
    }


    $numberOfTheDay;
    $numberOfTheMonth;
    $evenSteven;
    $dayOfTheWeek;
    $month;
    $year = date('Y');
    $day = date('m');
    $whatWeekDay = date("l");
    $whatMonth = date("M");

    switch ($whatMonth) {
        case "Jan";
            $month = "januari";
            $numberOfTheMonth = 1;
            break;
        case "Feb";
            $month = "ferbruari";
            $numberOfTheMonth = 2;
            break;
        case "Mar";
            $month = "mars";
            $numberOfTheMonth = 3;
            break;
        case "Apr";
            $month = "april";
            $numberOfTheMonth = 4;
            break;
        case "May";
            $month = "maj";
            $numberOfTheMonth = 5;
            break;
        case "Jun";
            $month = "juni";
            $numberOfTheMonth = 6;
            break;
        case "Jul";
            $month = "juli";
            $numberOfTheMonth = 7;
            break;
        case "Aug";
            $month = "augusti";
            $numberOfTheMonth = 8;
            break;
        case "Sep";
            $month = "september";
            $numberOfTheMonth = 9;
            break;
        case "Oct";
            $month = "oktober";
            $numberOfTheMonth = 10;
            break;
        case "Nov";
            $month = "november";
            $numberOfTheMonth = 11;
            break;
        case "Dec";
            $month = "december";
            $numberOfTheMonth = 12;
            break;
    }

    switch ($whatWeekDay) {
        case "Monday";
            $dayOfTheWeek = "måndag";
            $numberOfTheDay = 1;
            break;
        case "Tuesday";
            $dayOfTheWeek = "tisdag";
            $numberOfTheDay = 2;
            break;
        case "Wednesday";
            $dayOfTheWeek = "onsdag";
            $numberOfTheDay = 3;
            break;
        case "Thursday";
            $dayOfTheWeek = "torsdag";
            $numberOfTheDay = 4;
            break;
        case "Friday";
            $dayOfTheWeek = "fredag";
            $numberOfTheDay = 5;
            break;
        case "Saturday";
            $dayOfTheWeek = "lördag";
            $numberOfTheDay = 6;
            break;
        case "Sunday";
            $dayOfTheWeek = "sönday";
            $numberOfTheDay = 7;
            break;
    }

    if($day === 0 % 2){
        $evenSteven = "jämn";
    } else {
        $evenSteven = "ojämn";
    }

    $indexMessage = $greetings[$timeOfTheDay];

    $sida1Message = "Det är dag nummer ".$day .' på månaden, och det är en '. $evenSteven .' dag i ' . $month . ', en typisk ' . $dayOfTheWeek ;

    $footerInfo = $name . ' '. $year;
    ?>
</body>

</html>
