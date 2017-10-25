<?php

include 'index.php';


Class Send
{
    public function send_mail()
    {
            $mail = $_POST['mail'];
        if ($mail)
        {
            /* $link = ;*/

            $to = $mail;
            $subject = 'Welcome to Calprix Team!';
            $message = "     Thanks for suscribe,
                                        
                                Here you are going to find some short steps just to complete your profile with us:
                                                                                    
                                1-) Download the forms on the page bottom
                                                                                    
                                2-) Complete the forms
                                                                                    
                                3-) Reply to it email with the completed forms attached on it
                                                                                    
                                4-) Already, 
                                                    
                            You are welcome.
                            Calprix Team.
                                           ";
            $header = 'From: team@calprix.com' . "\r\n" .
                'X-Mailer: PHP/' . phpversion();
            echo '<script>console.log("Hay algo :D!")</script>';

            mail($to, $subject, $message, $header);

        } else if($mail == 0)
        {
            echo '<script>console.log("Esta vacio :(")</script>';
        }
    }
}

?>