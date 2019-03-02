<?php
namespace PbbHelpers;
use Pbb\CorePbb;
use PbbOther\Phpmail\PHPMailer;
class Mail{
    public static function sendMail($to,$title,$content,$attachpath="",$attachname=""){
        if(!defined("MAIL_HOST")) call_user_func_array('_include',[file_get_contents(PATH_CONFIG.'mailconfig.php')]);
        $mail = new PHPMailer();
        $mail->SMTPDebug = 0;
        $mail->isSMTP();
        $mail->SMTPAuth=true;
        $mail->Host = MAIL_HOST;
        $mail->SMTPSecure = MAIL_SMTP;
        $mail->Port = MAIL_PORT;
        $mail->CharSet=MAIL_CODE;
        $mail->Username =MAIL_ADDR;
        $mail->Password = MAIL_PSD;
        $mail->From = MAIL_ADDR;
        $mail->FromName =MAIL_NAME;
        $mail->isHTML(true);
        $mail->addAddress($to);
        $mail->Subject = $title;
        $mail->Body = $content;
        if($attachpath)
            $mail->addAttachment($attachpath,$attachname);
        $status = $mail->send();
        if($status) {
            return true;
        }else{
            return false;
        }
    }
}