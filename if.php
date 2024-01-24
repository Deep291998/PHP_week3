<!doctype html>
<html>
    <head>
        <title>PHP If Statements</title> 
    </head>
    <body>

        <h1>PHP If Statements</h1> 

        <p>Use PHP echo and variables to output the following link information, use if statements to make sure everything outputs correctly:</p>

        <?php

        // **************************************************
        // Do not edit this code

        // Generate a random number (1, 2, or 3)
        $randomNumber = ceil(rand(1,3));

        // Display the random number
        echo '<p>The random number is '.$randomNumber.'.</p>';

        // Based on the random number PHP will define four variables and fill them with information about Codecademy, W3Schools, or MDN
        
        // The random number is 1, so use Codecademy
        if ($randomNumber == 1)
        {

            $linkName = 'Codecademy';
            $linkURL = 'https://www.codecademy.com/';
            $linkCTA ='codeacademy.png';
            $linkImage = '';
            $linkDescription = 'Learn to code interactively, for free.';

        }

        // The random number is 2, so use W3Schools
        elseif ($randomNumber == 2)
        {

            $linkName = '';
            $linkURL = 'https://www.w3schools.com/';
            $linkCTA='w3schools.com';
            $linkImage = 'w3schools.png';
            $linkDescription = 'W3Schools is optimized for learning, testing, and training.';

        }

        // The random number is 3, so use MDN
        else
        {

            $linkName = 'Mozilla Developer Network';
            $linkURL = 'https://www.codecademy.com/';
            $linkCTA='mdn.com';
            $linkImage = 'mozilla.png';
            $linkDescription = 'The Mozilla Developer Network (MDN) provides information about Open Web technologies.';

        }

        // **************************************************

        // Beginning of the exercise, place all of your PHP code here
        // Upload this page (or use your localhost) and refresh the page, the h2 below will change
        echo '<h2>'.$linkName.'</h2>';  
        echo'<h3>'.$linkURL.'<h3>';

        if($linkURL !== ''){
          
            echo '<a  href="' .$linkURL . '">' . $linkCTA . '</a>';
  
  
          }else{
            echo '<h6>' .$linkCTA . '</h6>';
          }
          
          $grade = ceil(rand(1,100));

          if ($grade  >= 91 && $grade  <= 100)
            {
             echo'<h1> Your grade is A+:'.$grade. '</h1>';
            } elseif ($grade  >= 86 && $grade  < 90) 
            {
                echo'<h1> Your grade is A:'.$grade. '</h1>';
            } elseif ($grade  >= 76 && $grade  < 80) 
            {
             
                echo'<h1> Your grade is B:'.$grade. '</h1>';
                        } elseif ($grade  >= 71 && $grade  < 75) 
            {
                echo'<h1> Your grade is C:'.$grade. '</h1>';
                          } elseif ($grade  >= 61 && $grade  < 70) 
            {
                echo'<h1> Your grade is F: '.$grade. '</h1>';
                        } else {
                            echo'<h1> you barely pass'.$grade. '</h1>';
                                    }
          
          
  switch ($day= ceil(rand(1,7))) {        
    case 1:
                    echo'<h1> Monday</h1>' ;
                        break;
                    case 2:
                        echo'<h1> Tuesday</h1>' ;
                                            break;
                    case 3:
                        echo'<h1> Wednesday</h1>' ;
                                     break;
            case 4:
                echo'<h1> Thrusday</h1>' ;
                             break;
             case 5:
                echo'<h1> Friday</h1>' ;
                             break;
           case 6:
            echo'<h1> Saturday</h1>' ;
                break;
                      case 7:
                        echo'<h1> Sunday Enjoy</h1>' ;
              break;
               default:
                echo'<h1>Invalid day of the week.</h1>' ;
                 break;
                                    
                      }                   
                               

        ?>
     
     <img src="<?php echo $linkImage ?>" width="200" alt="">
        
      <?php
     echo'<p>' .$linkDescription. '</p>';

?>
    </body>
</html>
