<?php
$company_name = 'Hasan Osman'; 
?>


<div id='footer' class='cf'>

                <div class='column three'>
                    <strong>Phone</strong> +44 737 6095 247
                </div><br>
                <div class='column three'>
                    <strong>Location</strong> Borough of Islington, London, United Kingdom
                </div><br>
                <div class='column three last'>
                    <strong>Hours</strong>
                    <em> Monday - Friday </em><br>
                    1000hrs - 1900hrs<br>
                    <em>Saturday - Sunday</em><br>1200hrs - 1700hrs<br><br>
                    
                    <?php

                    //REQUIRED
                    include('StoreHours.class.php');
                    //Set your default time zone (listed here http://php.net/manual/en/timezones.php)
                    date_default_timezone_set('Europe/London');
                    //include the store hours class
                    //require '_DIR_' .' /StoreHours.class.php';

                    //REQUIRED
                    //Define daily open hours
                    //Must be in 24-hour format, separated by dash 
                    //If closed for the day, leave blank
                    //If open multiple times in one day, enter time ranges separated by a comma
                    $hours = array(
                        'mon' => array('10:00-19:00'),
                        'tue' => array('10:00-19:00'),
                        'wed' => array('10:00-19:00'),
                        'thu' => array('10:00-19:00'),
                        'fri' => array('10:00-19:00'),
                        'sat' => array('12:00-1700'),
                        'sun' => array(' ')
                    );

                    //OPTIONAL
                    //Add exceptions (agreat for holidays)
                    //Must be ina format month/day[/year]  or [year-]month-day
                    //Do not include the year if the exception repeats annually
                    $exceptions = array(
                        '12/25' => array(' '),
                        '9/3' => array('10:00-14:00')
                    );

                    $config = array(
                        'separator' => ' - ',
                        'join' => ' and ' ,
                        'format' => 'g:ia',
                        'overview_weekdays' => array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday')                   
                         );

                         //Instantiate class
                         $store_hours = new StoreHours($hours, $exceptions, $config);

                         //Display open / closed message
                         if($store_hours->is_open()){
                             echo 'Yes, Hasan is open for business! Today\'s working hours are ' . $store_hours->hours_today() . '.';
                         } else {
                             echo 'Sorry, Hasan is closed for business. Today\'s hours are ' . $store_hours->hours_today() . '.';
                         }
                        

                         //BELOW ARE TWO ALTERNATIVE WAYS OF DISPLAYING OPENING AND CLOSING TIMES
                         //Display full list of open hours (for a week w)ihout exceptions)
                         /*
                         echo '<table>';
                         foreach  ($store_hours->hours_this_week() as $days => $hours) {
                             echo '<tr>'; 
                             echo '<td>' . $days . '</td>';
                             echo '<td>' . $hours . '</td>';
                             echo '</tr>';
                         }
                         echo '</table>';
*/

                         //Same lsit but group days with identical hours
                         /*
                         echo '<table>';
                         foreach($store_hours->hours_this_week(true) as $days => $hours){
                             echo '<tr>';
                             echo '<td>' . $days . '</td>';
                             echo '<td>' . $hours . '</td>';
                             echo '</tr>';
                         }
                         echo '</table>';
*/
                         ?>

            </div>
                </div>
                <small>&copy;<?php echo date('Y'); ?> <?php echo $company_name; ?></small>
                </div>
            </div>
            <div class='copyright-info'>
            
            </div>
        </div>

    </body>
</html>
