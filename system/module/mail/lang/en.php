<?php
$lang->mail->common = 'Email setting';
$lang->mail->index  = 'Index';
$lang->mail->detect = 'Detect';
$lang->mail->edit   = 'Configure';
$lang->mail->save   = 'Successfully saved';
$lang->mail->test   = 'Testing';
$lang->mail->reset  = 'Reset';

$lang->mail->turnon       = 'Turnon';
$lang->mail->fromAddress  = 'From email';
$lang->mail->fromName     = 'From title';
$lang->mail->mta          = 'MTA';
$lang->mail->host         = 'SMTP host';
$lang->mail->port         = 'SMTP port';
$lang->mail->auth         = 'Authentication';
$lang->mail->username     = 'SMTP account';
$lang->mail->password     = 'SMTP password';
$lang->mail->secure       = 'Secure';
$lang->mail->debug        = 'Debug';
$lang->mail->getEmailCode = 'Get email code';

$lang->mail->turnonList[1] = 'on';
$lang->mail->turnonList[0] = 'off';

$lang->mail->debugList[0] = 'off';
$lang->mail->debugList[1] = 'normal';
$lang->mail->debugList[2] = 'high';

$lang->mail->authList[1]  = 'necessary';
$lang->mail->authList[0]  = 'unnecessary';

$lang->mail->secureList['']    = 'plain';
$lang->mail->secureList['ssl'] = 'ssl';
$lang->mail->secureList['tls'] = 'tls';

$lang->mail->inputFromEmail = 'Please input the from email:';
$lang->mail->nextStep       = 'Next';
$lang->mail->successSaved   = 'The configuration has been successfully saved.';
$lang->mail->subject        = "It's a testing email from zentao.";
$lang->mail->content        = 'Well done, the email notification feature works now!';
$lang->mail->successSended  = 'Successfully sended!';
$lang->mail->needConfigure  = "I can not find the configuration, please configure it first.";
$lang->mail->error          = 'Please input correct email.'; 
$lang->mail->trySendlater   = 'Can not send email in three minutes.'; 

$lang->mail->verify        = 'Verify identify of admin';
$lang->mail->okFile        = 'File';
$lang->mail->email         = 'Email';
$lang->mail->captcha       = 'Email captcha';
$lang->mail->needVerify    = 'Need to verify the identity of Administrator';
$lang->mail->verifyFail    = 'Wrong captcha';
$lang->mail->verifySuccess = 'Right captcha';
$lang->mail->noConfigure   = "I can not find the configuration, can't use email captcha.";
$lang->mail->noEmail       = "I can not find your email address, can't use email captcha.";
$lang->mail->okFileVerfy   = "Create %s file. If this file exists already, reopen it and save again.%s<br />";
$lang->mail->emailVerfy    = "The email captcha will send to %s. %s<br />";
$lang->mail->sendSuccess   = 'Captcha has been sent to your mailbox.';

$lang->mail->sendContent   = <<<EOT
Hello %s：
<br />&nbsp;&nbsp;&nbsp;&nbsp;You are changing some infomation at <strong>%s</strong>(%s), The code you need is:%s
<br />
<br /><strong>%s</strong> build by <a href='http://www.chanzhi.org' target='_blank'>ChanZhiEPS</a>.
<br /><a href='http://www.cnezsoft.com' target='_blank'>Nature Easy Soft</a>
EOT;
