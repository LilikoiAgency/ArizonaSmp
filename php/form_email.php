<?php
$from = 'special_offer@sempersolaris.com'; 
$to = $_POST['email']; // this is the sender's Email address

$name = $_POST['last_name'];
// Subject
$subject = 'Your $500 Coupon is here! ';

// Message
$message = 
"
<!DOCTYPE html>
<html lang='en'>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<meta name='viewport' content='width=device-width, initial-scale=1.0'/>
<meta name='x-apple-disable-message-reformatting'>
  <title></title>
  <link rel='preconnect' href='https://fonts.googleapis.com'>
  <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
  <link href='https://fonts.googleapis.com/css2?family=Barlow:wght@300;500&display=swap' rel='stylesheet'>
  <!--[if mso]>
  <noscript>
    <xml>
      <o:OfficeDocumentSettings>
        <o:PixelsPerInch>96</o:PixelsPerInch>
      </o:OfficeDocumentSettings>
    </xml>
  </noscript>
  <![endif]-->
  <style>
   svg {width: 30px;} body{ font-family: 'Barlow', sans-serif; font-size: 18px;} 

    @media only screen and (max-width: 600px)  {
      table{ background-color: white !important; }
      h1{font-size: 32px;}
      ul li{
        font-size: 25px;
      }
      .top-p{
        font-size: 25px !important;
        line-height: 27px !important;
      }
      .coupon-message{
        font-size: 24px;
        font-weight: bold;
      }
      .coupon-message br{
        display: none;
      }
      .testimonial-text{
        font-size: 30px !important;
      }
      .see-why-text{
        font-size: 32px !important;
      }
      .footer-text{
        font-size: 17px;
      }
      .social-media a img{
        width: 60px;
        margin-right: 20px !important;
      }
      .footer-logo{
        width: 210px;
      }
      .ready-to-save{
        font-size: 25px !important;
      }
        .social-media > a:nth-child(4) > img{
        margin-right:0px !important
      }
      .testimonial-badge{
        width: 240px;
      }
      .watch-now{
        font-size: 26px !important;
      }
      .coupon-call-out{
        color: #CC0109;
      }
    }
 
  </style>
</head>
<body style='margin:0;padding:0; max-width: 100%;'>
  <table role='presentation' style='width:100%;border-collapse:collapse;border:0;border-spacing:0;'>
    <tr>
      <td align='center' style='padding:0;'>
        <table role='presentation' style=' background-color: white;width:602px;border-collapse:collapse;border:1px solid #cccccc;border-spacing:0;text-align:left;'>
          <tr>
            <td style='padding:15px 0 10px 0; margin: auto; text-align: center;'>
              <img style='margin:auto;' src='https://www.sempersolaris.com/wp-content/uploads/2022/12/12-22-SMP-Semper-Logo-Dec2022-1.png' alt='' width='225' style='height:auto;display:block;' />
            </td>
          </tr>
          <tr>
            <td style='padding:10px; margin: auto; text-align: center; background-color: #004C97; color: white;'>
              <p style='margin:auto; font-size: 28px;' > <b> GO SOLAR </b> AMERICAN STYLE!  </p>
            </td>
          </tr> 
          <tr>
            <td style='margin: auto; padding: 0px;'>
              <img src='https://www.sempersolaris.com/wp-content/uploads/2022/12/12-22-SMP-Email-Hero-Image-Dec2022.jpg' alt='' width='600' style='height:auto;display:block;' />
            </td>
          </tr>
          <tr>
            <td style='padding:36px 30px 0px 30px;'>
              <table role='presentation' style='width:100%;border-collapse:collapse;border:0;border-spacing:0;'>
                <tr>
                    <h1 style='font-size:2em;margin:0 0 15px 0;color: #004C97;'> Congratulations ". $name ." </h1>
                    <p class='top-p' style='margin:0 0 12px 0;font-size:20px;line-height:24px;font-family:Arial,sans-serif;'> <b> We are excited to help you experience the benefits of going solar! At Semper Solaris we know going solar:</b></p>
                </tr>

                <tr>
                    <td style='vertical-align: top; font-size: 18px;'>
                        <ul style=''>
                            <li>Lowers Energy Costs</li>
                            <li>Brings Energy Independence</li>
                            <li>Provides Tax Breaks And Cash Incentives</li>
                            <li>Enviromentally Friendly</li>
                        </ul>
                        <p class='coupon-message'>We look forward to speaking with you soon. <br> Your <b class='coupon-call-out'>$500 Coupon</b> is at the bottom of this email. </p>
                    </td>

                    <td>
                        <img width='120px' src='https://www.sempersolaris.com/wp-content/uploads/2022/12/12-22-SMP-Solar-Panel-Dec2022.png' alt=''>
                    </td>
                </tr>
              </table>
                <h3 class='see-why-text' style='font-size: 20px; color: #004C97;'> <b>See why so many trust us for their solar installation!</b></h3>
                <table>
                    <tr>
                        <td>
                           <img  class='testimonial-badge' style='vertical-align: sub;' width='200'  src='https://www.sempersolaris.com/wp-content/uploads/2022/12/12-22-SMP-Google-Review-Stars-3-Dec2022.jpg' alt=''> 

                            <p class='testimonial-text' style='margin-top: 5px; '>We picked Semper Solaris from a friend's recommendation. Every aspect of the process was very professional. I thought for sure we would get a hard sell, but we didn't and we appreciate that. Everything was done pretty straight forward and installed correctly. I would recommend Semper Solaris for solar panels. My roof has several more years of life before replacing; so I will look to Semper Solaris for that too.</p>
                        </td>
                    </tr>
                
                </table>
                <hr>
                <table>
                    <tr>
                        <td>
                            <img class='testimonial-badge' style=' margin-top: 15px;' width='200' src='https://floridastge.wpengine.com/wp-content/uploads/2023/07/unnamed.png' alt=''> 
                            
                            <p class='testimonial-text' style='margin-top: 5px; margin-bottom: 0px;'> Semper Solaris helped me lower my electricity bill from $350 down to $47. I appreciate the fact that Semper Solaris employs veterans. The workers were very easy to communicate with and did a great job. I would definitely recommend Semper Solaris.</p>
                            <p class='watch-now' style='color:#004C97;font-weight: 600; margin-top: 15px; margin-bottom: 5px; font-size: 20px;' > <img src='https://www.sempersolaris.com/wp-content/uploads/2022/12/12-22-SMP-Blue-Down-Arrow-Dec2022.png' alt=''> Watch Video </p>
                            <a href='https://www.youtube.com/watch?v=_Wg3rN9NBRg?autoplay=1'>
                                <img style='width: 100%; margin-bottom: 20px;' src='https://floridastge.wpengine.com/wp-content/uploads/2023/07/07-20-23-SMP-Email-Assets_Video-Thumbnail.png' alt='' width='400' style='height:auto;display:block; margin:auto' /></a>
                        </td>
                    </tr>
                </table>
                <hr>
                <table style='width: 100%;'>
                    <td style='text-align: center;'>
                        <h3 class='ready-to-save' style='font-size: 20px; color: #004C97; margin-top: 20px; margin-bottom: 20px; text-align: start;'> <b>Ready To Start Saving? Get Your Coupon Now!</b></h3>
            
                        <img style='width: 100%;' src='https://www.sempersolaris.com/wp-content/uploads/2022/12/12-22-SMP-Presented-500-Coupon-3-Dec2022.jpg' alt=''>

                        <p style=' text-align: start; margin-bottom: 0px;'>Best regards,</p>
                        <p style=' text-align: start; margin-top: 5px;'><b>Semper Solaris Team</b></p>
                        
                        <img class='footer-logo' style='margin: auto;' src='https://www.sempersolaris.com/wp-content/uploads/2022/12/12-22-SMP-Semper-Logo-Dec2022.png' alt=''>
                        <p style='margin-top: 0px; font-size: 14px;letter-spacing: 1px;'>SOLAR | BATTERY STORAGE | ROOFING</p>
                        <p class='social-media'> 
                            <a style='text-decoration: none;' href='https://www.instagram.com/sempersolaris/'>
                            <img style='margin-right: 10px;' src='https://www.sempersolaris.com/wp-content/uploads/2022/12/12-22-SMP-Pinterest-Icon-Dec2022.png' alt=''> </a>
                            <a style='text-decoration: none;' href='https://www.youtube.com/channel/UCXkXgYE1h5mw3DCs6Dnr5kg/'>
                            <img style='margin-right: 10px;' src='https://www.sempersolaris.com/wp-content/uploads/2022/12/12-22-SMP-YouTube-Icon-Dec2022.png' alt=''> </a>   
                            <a style='text-decoration: none;' href='https://www.facebook.com/SemperSolaris/'>
                            <img style='margin-right: 10px;' src='https://www.sempersolaris.com/wp-content/uploads/2022/12/12-22-SMP-FaceBook-Icon-Dec2022.png' alt=''> </a>  
                            <a style='text-decoration: none;' href='https://twitter.com/sempersolarisco/'>
                            <img class='tweety-social' src='https://www.sempersolaris.com/wp-content/uploads/2022/12/12-22-SMP-Twitter-Icon-Dec2022.png' alt=''>    </a> 
                        </p>
                      </td>
                </table>
            </td>
          </tr>
        <table style='width:100%;'>
            <p class='footer-text' style='font-size: 14px;background-color:#3C3C3C; text-align:center; margin: 0px; color: white; padding: 20px;     max-width: 600px;'>© 2023 Semper Solaris. All Rights Reserved. <br> | ROC# 336163 | ROC# 336306 | ROC# 336305</p>
        </table>
        </table>
      </td>
    </tr>
  </table>
</body>
</html>
";

$headers = "From: Semper Solaris <special_offer@sempersolaris.com>\n";
$headers .= "X-Sender: Semper Solaris <special_offer@sempersolaris.com>\n";
$headers .= 'X-Mailer: PHP/' . phpversion();
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\n";

// Mail it
mail($to, $subject, $message, $headers);

?>

