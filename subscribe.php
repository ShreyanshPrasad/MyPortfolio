<?php

if(isset($_POST['FrmSubmit']) && !empty($_POST['emailId'])){
    
    $emailId   = $_POST['emailId'];

    include 'includes/connection.php';

    $query = "INSERT INTO `t_newsletter_subscription`(`sub_email`, `sub_act_status`, `sub_deleted_flag`) VALUES ('$emailId', 'Y', 'N')";
    $result = $conn->query($query);
    
    /*
     * Send email
    */
    $to = $emailId;
    $fromEmail = 'support@shreyansh.com';
    
    /*$headers = "From: " . strip_tags($fromEmail) . "\r\n";
    $headers .= "Reply-To: ". strip_tags($fromEmail) . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";*/
    
    
    $subject = "Subscription successful";
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= 'From: '.$fromEmail.'<'.$fromEmail.'>' . "\r\n".'Reply-To: '.'sshreyansh199@gmail.com'."\r\n" . 'X-Mailer: PHP/' . phpversion();
    $message = '<html><body>
    <center class="wrapper" style="display: table;table-layout: fixed;width: 100%;min-width: 620px;-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;background-color: #ffffff;">
    <table class="top-panel center" width="602" border="0" cellspacing="0" cellpadding="0" style="border-collapse: collapse;border-spacing: 0;margin: 0 auto;width: 602px;">
        <tbody>
        <tr>
            <td class="title" width="300" style="padding: 8px 0;vertical-align: top;text-align: left;width: 300px;color: #616161;font-family: Roboto, Helvetica, sans-serif;font-weight: 400;font-size: 12px;line-height: 14px;">ՏhɾҽվɑղՏh</td>
            <td class="subject" width="300" style="padding: 8px 0;vertical-align: top;text-align: right;width: 300px;color: #616161;font-family: Roboto, Helvetica, sans-serif;font-weight: 400;font-size: 12px;line-height: 14px;"><a class="strong" href="https://sshreyansh199.000webhostapp.com/" target="_blank" style="text-decoration: none;color: #616161;font-weight: 700;">https://sshreyansh199.000webhostapp.com/</a></td>
        </tr>
        <tr>
            <td class="border" colspan="2" style="padding: 0;vertical-align: top;font-size: 1px;line-height: 1px;background-color: #e0e0e0;width: 1px;">&nbsp;</td>
        </tr>
        </tbody>
    </table>

    <div class="spacer" style="font-size: 1px;line-height: 16px;width: 100%;">&nbsp;</div>

    <table class="main center" width="602" border="0" cellspacing="0" cellpadding="0" style="border-collapse: collapse;border-spacing: 0;-webkit-box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.12), 0 1px 2px 0 rgba(0, 0, 0, 0.24);-moz-box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.12), 0 1px 2px 0 rgba(0, 0, 0, 0.24);box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.12), 0 1px 2px 0 rgba(0, 0, 0, 0.24);margin: 0 auto;width: 602px;">
        <tbody>
        <tr>
            <td class="column" style="padding: 0;vertical-align: top;text-align: left;background-color: #ffffff;font-size: 14px;">
                <div class="column-top" style="font-size: 24px;line-height: 24px;">&nbsp;</div>
                <table class="content" border="0" cellspacing="0" cellpadding="0" style="border-collapse: collapse;border-spacing: 0;width: 100%;">
                    <tbody>
                    <tr>
                        <td class="padded" style="padding: 0 24px;vertical-align: top;">
                          <h1 style="margin-top: 0;margin-bottom: 16px;color: #212121;font-family: Roboto, Helvetica, sans-serif;font-weight: 400;font-size: 20px;line-height: 28px;">Congratulations</h1>
                          <p style="margin-top: 0;margin-bottom: 16px;color: #212121;font-family: Roboto, Helvetica, sans-serif;font-weight: 400;font-size: 16px;line-height: 24px;">You have successfully subscribed to our newsletter. <br>
                          From now you will never miss any offer from us</p>
                          <h1 style="margin-top: 0;margin-bottom: 16px;color: #212121;font-family: Roboto, Helvetica, sans-serif;font-weight: 400;font-size: 20px;line-height: 28px;">Help us grow.</h1>
                          <p style="margin-top: 0;margin-bottom: 16px;color: #212121;font-family: Roboto, Helvetica, sans-serif;font-weight: 400;font-size: 16px;line-height: 24px;"><a href="#" class="btn" style="text-decoration: none;color: #ffffff;background-color: #2196F3;border: 1px solid #2196F3;border-radius: 2px;display: inline-block;font-family: Roboto, Helvetica, sans-serif;font-size: 14px;font-weight: 400;line-height: 36px;text-align: center;text-transform: uppercase;width: 200px;height: 36px;padding: 0 8px;margin: 0;outline: 0;outline-offset: 0;-webkit-text-size-adjust: none;mso-hide: all;">Support this site</a></p>
                          <br><br>
                          <h1 style="margin-top: 0;margin-bottom: 16px;color: #212121;font-family: Roboto, Helvetica, sans-serif;font-weight: 400;font-size: 20px;line-height: 28px;">Find me on social media</h1>
                          <p style="margin-top: 0;margin-bottom: 16px;color: #212121;font-family: Roboto, Helvetica, sans-serif;font-weight: 400;font-size: 16px;line-height: 24px;">
                              <a href="https://m.facebook.com/shreyansh.prasadsinha" style="text-decoration: none;color: #616161;"><img src="https://f.hubspotusercontent30.net/hubfs/2235233/blog-import/2020/20-08-Aug/sm-icons-facebook-logo.png" alt="facebook" width="36px" height="36px" style="border: 0;-ms-interpolation-mode: bicubic;"></a>

                              <a href="https://api.whatsapp.com/send?phone=919504789166&text=Message!" style="text-decoration: none;color: #616161;"><img src="https://sshreyansh199.000webhostapp.com/asset/icon/whatsapp.png" alt="WhatsApp" width="36px" height="36px" style="border: 0;-ms-interpolation-mode: bicubic;"></a>

                              <a href="https://twitter.com/___Shreyansh" style="text-decoration: none;color: #616161;"><img src="https://sshreyansh199.000webhostapp.com/asset/icon/twitter.png" alt="Twitter" width="36px" height="36px" style="border: 0;-ms-interpolation-mode: bicubic;"></a>

                              <a href="https://github.com/ShreyanshPrasad" style="text-decoration: none;color: #616161;"><img src="https://github.githubassets.com/images/modules/logos_page/GitHub-Mark.png" alt="GitHub" width="36px" height="36px" style="border: 0;-ms-interpolation-mode: bicubic;"></a>
                          </p>
                          <p class="caption" style="margin-top: 0;margin-bottom: 16px;color: #616161;font-family: Roboto, Helvetica, sans-serif;font-weight: 400;font-size: 12px;line-height: 20px;">This is system generated mail, please do no reply</p>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <div class="column-bottom" style="font-size: 8px;line-height: 8px;">&nbsp;</div>
            </td>
        </tr>
        </tbody>
    </table>

    <div class="spacer" style="font-size: 1px;line-height: 16px;width: 100%;">&nbsp;</div>

    <table class="footer center" width="602" border="0" cellspacing="0" cellpadding="0" style="border-collapse: collapse;border-spacing: 0;margin: 0 auto;width: 602px;">
        <tbody>
        <tr>
            <td class="border" colspan="2" style="padding: 0;vertical-align: top;font-size: 1px;line-height: 1px;background-color: #e0e0e0;width: 1px;">&nbsp;</td>
        </tr>
        <tr>
            <td class="signature" width="300" style="padding: 0;vertical-align: bottom;width: 300px;padding-top: 8px;margin-bottom: 16px;text-align: left;">
                <p style="margin-top: 0;margin-bottom: 8px;color: #616161;font-family: Roboto, Helvetica, sans-serif;font-weight: 400;font-size: 12px;line-height: 18px;">
                    With best regards,<br>
                    ՏhɾҽվɑղՏh<br>
                    Shreyansh Prasad <br>
                    <a href="tel:+919504789166" style="text-decoration: none;color: #616161;">+919504789166</a><br>
                    </p>
                <p style="margin-top: 0;margin-bottom: 8px;color: #616161;font-family: Roboto, Helvetica, sans-serif;font-weight: 400;font-size: 12px;line-height: 18px;">
                    Support: <a class="strong" href="mailto:sshreyansh199@gmail.com" target="_blank" style="text-decoration: none;color: #616161;font-weight: 700;">sshreyansh199@gmail.com</a>
                </p>
            </td>
            <td class="subscription" width="300" style="padding: 0;vertical-align: bottom;width: 300px;padding-top: 8px;margin-bottom: 16px;text-align: right;">
                <div class="logo-image">
                    <a href="https://sshreyansh199.000webhostapp.com/" target="_blank" style="text-decoration: none;color: #616161;"><img src="https://sshreyansh199.000webhostapp.com/asset/icon.png" alt="logo-alt" width="70" height="70" style="border: 0;-ms-interpolation-mode: bicubic;"></a>
                </div>
                <p style="margin-top: 0;margin-bottom: 8px;color: #616161;font-family: Roboto, Helvetica, sans-serif;font-weight: 400;font-size: 12px;line-height: 18px;">
                    <a class="strong block" href="#" target="_blank" style="text-decoration: none;color: #616161;font-weight: 700;">
                        Unsubscribe
                    </a>
                    <span class="hide">&nbsp;&nbsp;|&nbsp;&nbsp;</span>
                    <a class="strong block" href="https://sshreyansh199.000webhostapp.com/" target="_blank" style="text-decoration: none;color: #616161;font-weight: 700;">
                        ՏhɾҽվɑղՏh
                    </a>
                </p>
            </td>
        </tr>
        </tbody>
    </table>
</center>

<!--mail temlt. https://codepen.io/zavoloklom/pen/qEVqzx-->
</body></html>';
    
    if(!($_SERVER['SERVER_ADDR'] == '127.0.0.1' || $_SERVER['SERVER_ADDR'] == 'http://localhost/')){
        $mailResult = mail($to, $subject, $message, $headers);

        if($result && $mailResult){
            $status = 'ok';
        }elseif($result){
            $status = 'UBMNS'; //Updated but mail not sent
        }else{
            $status = 'fail';
        }

    }else{
        if($result){
            $status = 'okL'; //Updated but mail not sent for local
        }else{
            $status = 'failL';
        }
    }

    
    // Output status
    echo $status;die;
}