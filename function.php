<?php 
    // Sends email about new chapter.
    function newChapterJNK ($mangaNameText, $latestChapter, $latestChapterNumber) {
        $to      = 'Ruben.Rosalia2002@gmail.com';
        $subject = "$mangaNameText New: ". $latestChapter;
        $message = '<!DOCTYPE html>
       <html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
         <head>
           <title></title>
           <!--[if !mso]><!-->
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <!--<![endif]-->
             <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
             <meta name="viewport" content="width=device-width, initial-scale=1">
             <!--[if mso]>
               <noscript>
                 <xml>
                   <o:OfficeDocumentSettings>
                     <o:AllowPNG/>
                       <o:PixelsPerInch>96</o:PixelsPerInch>
                     </o:OfficeDocumentSettings>
                   </xml>
                 </noscript>
             <![endif]-->
             <!--[if lte mso 11]>
               <style type="text/css">
                 .mj-outlook-group-fix { width:100% !important; }
               </style>
             <![endif]-->
             <!--[if !mso]><!-->
         <!--<![endif]-->
               <style media="screen and (min-width:480px)">
                 .moz-text-html .mj-column-per-100 {
                   width: 100% !important;
                   max-width: 100%;
                 }
               </style>
               <style type="text/css">
                 @import url(https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700);
                 @media only screen and (min-width:480px) {
                   .mj-column-per-100 {
                     width: 100% !important;
                     max-width: 100%;
                   }
                 }
               </style>
             </head>
             <body style="margin:0;padding:0;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;word-spacing:normal;background-color:#E1E8ED;">
               <div style="background-color:#E1E8ED;">
                 <!-- Header -->
                 <!--[if mso | IE]>
                   <table align="center" border="0" cellpadding="0" cellspacing="0" class="" role="presentation" style="width:600px;" width="600" bgcolor="white" >
                     <tr>
                       <td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;"><![endif]-->
                 <div style="background:white;background-color:white;margin:0px auto;max-width:600px;">
                   <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt;background:white;background-color:white;width:100%;">
                     <tbody>
                       <tr>
                         <td style="border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt;direction:ltr;font-size:0px;padding:20px 0;padding-bottom:0px;text-align:center;">
                           <!--[if mso | IE]>
                             <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                               <tr></tr>
                             </table>
                           <![endif]-->
                         </td>
                       </tr>
                     </tbody>
                   </table>
                 </div>
                 <!--[if mso | IE]></td>
               </tr>
             </table>
             <table align="center" border="0" cellpadding="0" cellspacing="0" class="" role="presentation" style="width:600px;" width="600" bgcolor="#fcfcfc" >
               <tr>
                 <td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;"><![endif]-->
                 <div style="background:#fcfcfc;background-color:#fcfcfc;margin:0px auto;max-width:600px;">
                   <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt;background:#fcfcfc;background-color:#fcfcfc;width:100%;">
                     <tbody>
                       <tr>
                         <td style="border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt;direction:ltr;font-size:0px;padding:20px 0;padding-bottom:0px;text-align:center;">
                           <!--[if mso | IE]>
                             <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                               <tr>
                                 <td class="" style="vertical-align:top;width:600px;" ><![endif]-->
                           <div class="mj-column-per-100 mj-outlook-group-fix" style="font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">
                             <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt;vertical-align:top;" width="100%">
                               <tbody>
                                 <tr>
                                   <td align="center" style="border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt;font-size:0px;padding:10px 25px;word-break:break-word;">
                                     <div style="font-family:Helvetica Neue;font-size:20px;font-weight:200;line-height:1;text-align:center;color:grey;">' . $latestChapter . '<br> is available now!</div>
                                   </td>
                                 </tr>
                                 <tr>
                                   <td align="center" vertical-align="middle" style="border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt;font-size:0px;padding:10px 25px;word-break:break-word;">
                                     <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:separate;line-height:100%;">
                                       <tbody>
                                         <tr>
                                           <td align="center" bgcolor="#414141" role="presentation" style="border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt;border:none;border-radius:3px;cursor:auto;mso-padding-alt:10px 25px;background:#414141;" valign="middle">
                                             <a href="https://mangareader.to/read/juujika-no-rokunin-4340/en/chapter-' . $latestChapterNumber . '" style="display:inline-block;background:#414141;color:#ffffff;font-family:Ubuntu, Helvetica, Arial, sans-serif;font-size:13px;font-weight:normal;line-height:120%;margin:0;text-decoration:none;text-transform:none;padding:10px 25px;mso-padding-alt:0px;border-radius:3px;" target="_blank"> Read Now </a>
                                           </td>
                                         </tr>
                                       </tbody>
                                     </table>
                                   </td>
                                 </tr>
                               </tbody>
                             </table>
                           </div>
                           <!--[if mso | IE]></td>
                         </tr>
                       </table>
                           <![endif]-->
                         </td>
                       </tr>
                     </tbody>
                   </table>
                 </div>
                 <!--[if mso | IE]></td>
               </tr>
             </table>
                 <![endif]-->
               </div>
             </body>
           </html>';
     
         // Additional headers for HTML email
        $headers = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
        $headers .= 'From: mangareadernotifier@rubenrosalia.com' . "\r\n";


        //  Send mail.
         mail($to, $subject, $message, $headers);
    }

    // Sends email about missed chapter.
    function missedChapterJNK ($mangaNameText, $missedChapter, $missedChapterNumber) {
      $to      = 'Ruben.Rosalia2002@gmail.com';
      $subject = "$mangaNameText New:  ". $missedChapter;
      $message = '<!DOCTYPE html>
     <html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
       <head>
         <title></title>
         <!--[if !mso]><!-->
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <!--<![endif]-->
           <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
           <meta name="viewport" content="width=device-width, initial-scale=1">
           <!--[if mso]>
             <noscript>
               <xml>
                 <o:OfficeDocumentSettings>
                   <o:AllowPNG/>
                     <o:PixelsPerInch>96</o:PixelsPerInch>
                   </o:OfficeDocumentSettings>
                 </xml>
               </noscript>
           <![endif]-->
           <!--[if lte mso 11]>
             <style type="text/css">
               .mj-outlook-group-fix { width:100% !important; }
             </style>
           <![endif]-->
           <!--[if !mso]><!-->
       <!--<![endif]-->
             <style media="screen and (min-width:480px)">
               .moz-text-html .mj-column-per-100 {
                 width: 100% !important;
                 max-width: 100%;
               }
             </style>
             <style type="text/css">
               @import url(https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700);
               @media only screen and (min-width:480px) {
                 .mj-column-per-100 {
                   width: 100% !important;
                   max-width: 100%;
                 }
               }
             </style>
           </head>
           <body style="margin:0;padding:0;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;word-spacing:normal;background-color:#E1E8ED;">
             <div style="background-color:#E1E8ED;">
               <!-- Header -->
               <!--[if mso | IE]>
                 <table align="center" border="0" cellpadding="0" cellspacing="0" class="" role="presentation" style="width:600px;" width="600" bgcolor="white" >
                   <tr>
                     <td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;"><![endif]-->
               <div style="background:white;background-color:white;margin:0px auto;max-width:600px;">
                 <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt;background:white;background-color:white;width:100%;">
                   <tbody>
                     <tr>
                       <td style="border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt;direction:ltr;font-size:0px;padding:20px 0;padding-bottom:0px;text-align:center;">
                         <!--[if mso | IE]>
                           <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                             <tr></tr>
                           </table>
                         <![endif]-->
                       </td>
                     </tr>
                   </tbody>
                 </table>
               </div>
               <!--[if mso | IE]></td>
             </tr>
           </table>
           <table align="center" border="0" cellpadding="0" cellspacing="0" class="" role="presentation" style="width:600px;" width="600" bgcolor="#fcfcfc" >
             <tr>
               <td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;"><![endif]-->
               <div style="background:#fcfcfc;background-color:#fcfcfc;margin:0px auto;max-width:600px;">
                 <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt;background:#fcfcfc;background-color:#fcfcfc;width:100%;">
                   <tbody>
                     <tr>
                       <td style="border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt;direction:ltr;font-size:0px;padding:20px 0;padding-bottom:0px;text-align:center;">
                         <!--[if mso | IE]>
                           <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                             <tr>
                               <td class="" style="vertical-align:top;width:600px;" ><![endif]-->
                         <div class="mj-column-per-100 mj-outlook-group-fix" style="font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">
                           <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt;vertical-align:top;" width="100%">
                             <tbody>
                               <tr>
                                 <td align="center" style="border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt;font-size:0px;padding:10px 25px;word-break:break-word;">
                                   <div style="font-family:Helvetica Neue;font-size:20px;font-weight:200;line-height:1;text-align:center;color:grey;">' . $missedChapter . ' is available now!</div>
                                 </td>
                               </tr>
                               <tr>
                                 <td align="center" vertical-align="middle" style="border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt;font-size:0px;padding:10px 25px;word-break:break-word;">
                                   <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:separate;line-height:100%;">
                                     <tbody>
                                       <tr>
                                         <td align="center" bgcolor="#414141" role="presentation" style="border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt;border:none;border-radius:3px;cursor:auto;mso-padding-alt:10px 25px;background:#414141;" valign="middle">
                                           <a href="https://mangareader.to/read/juujika-no-rokunin-4340/en/chapter-' . $missedChapterNumber . '" style="display:inline-block;background:#414141;color:#ffffff;font-family:Ubuntu, Helvetica, Arial, sans-serif;font-size:13px;font-weight:normal;line-height:120%;margin:0;text-decoration:none;text-transform:none;padding:10px 25px;mso-padding-alt:0px;border-radius:3px;" target="_blank"> Read Now </a>
                                         </td>
                                       </tr>
                                     </tbody>
                                   </table>
                                 </td>
                               </tr>
                             </tbody>
                           </table>
                         </div>
                         <!--[if mso | IE]></td>
                       </tr>
                     </table>
                         <![endif]-->
                       </td>
                     </tr>
                   </tbody>
                 </table>
               </div>
               <!--[if mso | IE]></td>
             </tr>
           </table>
               <![endif]-->
             </div>
           </body>
         </html>';
   
       // Additional headers for HTML email
      $headers = 'MIME-Version: 1.0' . "\r\n";
      $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
      $headers .= 'From: mangareadernotifier@rubenrosalia.com' . "\r\n";

      //  Send mail.
       mail($to, $subject, $message, $headers);
  }

    // Sends email about new chapter.
    function newChapterKB ($mangaNameText, $latestChapter, $latestChapterNumber) {
        $to      = 'Ruben.Rosalia2002@gmail.com';
        $subject = "$mangaNameText New: " . $latestChapter;
        $message = '<!DOCTYPE html>
       <html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
         <head>
           <title></title>
           <!--[if !mso]><!-->
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <!--<![endif]-->
             <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
             <meta name="viewport" content="width=device-width, initial-scale=1">
             <!--[if mso]>
               <noscript>
                 <xml>
                   <o:OfficeDocumentSettings>
                     <o:AllowPNG/>
                       <o:PixelsPerInch>96</o:PixelsPerInch>
                     </o:OfficeDocumentSettings>
                   </xml>
                 </noscript>
             <![endif]-->
             <!--[if lte mso 11]>
               <style type="text/css">
                 .mj-outlook-group-fix { width:100% !important; }
               </style>
             <![endif]-->
             <!--[if !mso]><!-->
         <!--<![endif]-->
               <style media="screen and (min-width:480px)">
                 .moz-text-html .mj-column-per-100 {
                   width: 100% !important;
                   max-width: 100%;
                 }
               </style>
               <style type="text/css">
                 @import url(https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700);
                 @media only screen and (min-width:480px) {
                   .mj-column-per-100 {
                     width: 100% !important;
                     max-width: 100%;
                   }
                 }
               </style>
             </head>
             <body style="margin:0;padding:0;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;word-spacing:normal;background-color:#E1E8ED;">
               <div style="background-color:#E1E8ED;">
                 <!-- Header -->
                 <!--[if mso | IE]>
                   <table align="center" border="0" cellpadding="0" cellspacing="0" class="" role="presentation" style="width:600px;" width="600" bgcolor="white" >
                     <tr>
                       <td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;"><![endif]-->
                 <div style="background:white;background-color:white;margin:0px auto;max-width:600px;">
                   <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt;background:white;background-color:white;width:100%;">
                     <tbody>
                       <tr>
                         <td style="border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt;direction:ltr;font-size:0px;padding:20px 0;padding-bottom:0px;text-align:center;">
                           <!--[if mso | IE]>
                             <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                               <tr></tr>
                             </table>
                           <![endif]-->
                         </td>
                       </tr>
                     </tbody>
                   </table>
                 </div>
                 <!--[if mso | IE]></td>
               </tr>
             </table>
             <table align="center" border="0" cellpadding="0" cellspacing="0" class="" role="presentation" style="width:600px;" width="600" bgcolor="#fcfcfc" >
               <tr>
                 <td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;"><![endif]-->
                 <div style="background:#fcfcfc;background-color:#fcfcfc;margin:0px auto;max-width:600px;">
                   <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt;background:#fcfcfc;background-color:#fcfcfc;width:100%;">
                     <tbody>
                       <tr>
                         <td style="border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt;direction:ltr;font-size:0px;padding:20px 0;padding-bottom:0px;text-align:center;">
                           <!--[if mso | IE]>
                             <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                               <tr>
                                 <td class="" style="vertical-align:top;width:600px;" ><![endif]-->
                           <div class="mj-column-per-100 mj-outlook-group-fix" style="font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">
                             <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt;vertical-align:top;" width="100%">
                               <tbody>
                                 <tr>
                                   <td align="center" style="border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt;font-size:0px;padding:10px 25px;word-break:break-word;">
                                     <div style="font-family:Helvetica Neue;font-size:20px;font-weight:200;line-height:1;text-align:center;color:grey;">' . $latestChapter . ' <br> is available now!</div>
                                   </td>
                                 </tr>
                                 <tr>
                                   <td align="center" vertical-align="middle" style="border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt;font-size:0px;padding:10px 25px;word-break:break-word;">
                                     <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:separate;line-height:100%;">
                                       <tbody>
                                         <tr>
                                           <td align="center" bgcolor="#414141" role="presentation" style="border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt;border:none;border-radius:3px;cursor:auto;mso-padding-alt:10px 25px;background:#414141;" valign="middle">
                                             <a href="https://mangareader.to/read/kagurabachi-67139/en/chapter-' . $latestChapterNumber . '" style="display:inline-block;background:#414141;color:#ffffff;font-family:Ubuntu, Helvetica, Arial, sans-serif;font-size:13px;font-weight:normal;line-height:120%;margin:0;text-decoration:none;text-transform:none;padding:10px 25px;mso-padding-alt:0px;border-radius:3px;" target="_blank"> Read Now </a>
                                           </td>
                                         </tr>
                                       </tbody>
                                     </table>
                                   </td>
                                 </tr>
                               </tbody>
                             </table>
                           </div>
                           <!--[if mso | IE]></td>
                         </tr>
                       </table>
                           <![endif]-->
                         </td>
                       </tr>
                     </tbody>
                   </table>
                 </div>
                 <!--[if mso | IE]></td>
               </tr>
             </table>
                 <![endif]-->
               </div>
             </body>
           </html>';
     
         // Additional headers for HTML email
        $headers = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
        $headers .= 'From: mangareadernotifier@rubenrosalia.com' . "\r\n";


        //  Send mail.
         mail($to, $subject, $message, $headers);
    }

    // Sends email about new chapter.
    function missedChapterKB ($mangaNameText, $missedChapter, $missedChapterNumber) {
      $to      = 'Ruben.Rosalia2002@gmail.com';
      $subject = "$mangaNameText New:  ". $missedChapter;
      $message = '<!DOCTYPE html>
     <html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
       <head>
         <title></title>
         <!--[if !mso]><!-->
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <!--<![endif]-->
           <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
           <meta name="viewport" content="width=device-width, initial-scale=1">
           <!--[if mso]>
             <noscript>
               <xml>
                 <o:OfficeDocumentSettings>
                   <o:AllowPNG/>
                     <o:PixelsPerInch>96</o:PixelsPerInch>
                   </o:OfficeDocumentSettings>
                 </xml>
               </noscript>
           <![endif]-->
           <!--[if lte mso 11]>
             <style type="text/css">
               .mj-outlook-group-fix { width:100% !important; }
             </style>
           <![endif]-->
           <!--[if !mso]><!-->
       <!--<![endif]-->
             <style media="screen and (min-width:480px)">
               .moz-text-html .mj-column-per-100 {
                 width: 100% !important;
                 max-width: 100%;
               }
             </style>
             <style type="text/css">
               @import url(https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700);
               @media only screen and (min-width:480px) {
                 .mj-column-per-100 {
                   width: 100% !important;
                   max-width: 100%;
                 }
               }
             </style>
           </head>
           <body style="margin:0;padding:0;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;word-spacing:normal;background-color:#E1E8ED;">
             <div style="background-color:#E1E8ED;">
               <!-- Header -->
               <!--[if mso | IE]>
                 <table align="center" border="0" cellpadding="0" cellspacing="0" class="" role="presentation" style="width:600px;" width="600" bgcolor="white" >
                   <tr>
                     <td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;"><![endif]-->
               <div style="background:white;background-color:white;margin:0px auto;max-width:600px;">
                 <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt;background:white;background-color:white;width:100%;">
                   <tbody>
                     <tr>
                       <td style="border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt;direction:ltr;font-size:0px;padding:20px 0;padding-bottom:0px;text-align:center;">
                         <!--[if mso | IE]>
                           <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                             <tr></tr>
                           </table>
                         <![endif]-->
                       </td>
                     </tr>
                   </tbody>
                 </table>
               </div>
               <!--[if mso | IE]></td>
             </tr>
           </table>
           <table align="center" border="0" cellpadding="0" cellspacing="0" class="" role="presentation" style="width:600px;" width="600" bgcolor="#fcfcfc" >
             <tr>
               <td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;"><![endif]-->
               <div style="background:#fcfcfc;background-color:#fcfcfc;margin:0px auto;max-width:600px;">
                 <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt;background:#fcfcfc;background-color:#fcfcfc;width:100%;">
                   <tbody>
                     <tr>
                       <td style="border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt;direction:ltr;font-size:0px;padding:20px 0;padding-bottom:0px;text-align:center;">
                         <!--[if mso | IE]>
                           <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                             <tr>
                               <td class="" style="vertical-align:top;width:600px;" ><![endif]-->
                         <div class="mj-column-per-100 mj-outlook-group-fix" style="font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">
                           <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt;vertical-align:top;" width="100%">
                             <tbody>
                               <tr>
                                 <td align="center" style="border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt;font-size:0px;padding:10px 25px;word-break:break-word;">
                                   <div style="font-family:Helvetica Neue;font-size:20px;font-weight:200;line-height:1;text-align:center;color:grey;">' . $missedChapter . '<br> is available now!</div>
                                 </td>
                               </tr>
                               <tr>
                                 <td align="center" vertical-align="middle" style="border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt;font-size:0px;padding:10px 25px;word-break:break-word;">
                                   <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:separate;line-height:100%;">
                                     <tbody>
                                       <tr>
                                         <td align="center" bgcolor="#414141" role="presentation" style="border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt;border:none;border-radius:3px;cursor:auto;mso-padding-alt:10px 25px;background:#414141;" valign="middle">
                                           <a href="https://mangareader.to/read/kagurabachi-67139/en/chapter-' . $missedChapterNumber . '" style="display:inline-block;background:#414141;color:#ffffff;font-family:Ubuntu, Helvetica, Arial, sans-serif;font-size:13px;font-weight:normal;line-height:120%;margin:0;text-decoration:none;text-transform:none;padding:10px 25px;mso-padding-alt:0px;border-radius:3px;" target="_blank"> Read Now </a>
                                         </td>
                                       </tr>
                                     </tbody>
                                   </table>
                                 </td>
                               </tr>
                             </tbody>
                           </table>
                         </div>
                         <!--[if mso | IE]></td>
                       </tr>
                     </table>
                         <![endif]-->
                       </td>
                     </tr>
                   </tbody>
                 </table>
               </div>
               <!--[if mso | IE]></td>
             </tr>
           </table>
               <![endif]-->
             </div>
           </body>
         </html>';
   
       // Additional headers for HTML email
      $headers = 'MIME-Version: 1.0' . "\r\n";
      $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
      $headers .= 'From: mangareadernotifier@rubenrosalia.com' . "\r\n";

      //  Send mail.
       mail($to, $subject, $message, $headers);
  }