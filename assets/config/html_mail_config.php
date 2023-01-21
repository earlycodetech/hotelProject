<?php
require '../includes/sessions.php';

if (!isset($_POST['sendemail'])) {
    header('Location: logout');
} else {
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $to = $email;

    $html  = "
        <!DOCTYPE HTML PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional //EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
        <html xmlns=\"http://www.w3.org/1999/xhtml\" xmlns:v=\"urn:schemas-microsoft-com:vml\" xmlns:o=\"urn:schemas-microsoft-com:office:office\">
        <head>
        <!--[if gte mso 9]>
        <xml>
          <o:OfficeDocumentSettings>
            <o:AllowPNG/>
            <o:PixelsPerInch>96</o:PixelsPerInch>
          </o:OfficeDocumentSettings>
        </xml>
        <![endif]-->
          <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
          <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
          <meta name=\"x-apple-disable-message-reformatting\">
          <!--[if !mso]><!--><meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"><!--<![endif]-->
          <title></title>
          
            <style type=\"text/css\">
              @media only screen and (min-width: 620px) {
          .u-row {
            width: 600px !important;
          }
          .u-row .u-col {
            vertical-align: top;
          }
        
          .u-row .u-col-23p84 {
            width: 143.04px !important;
          }
        
          .u-row .u-col-34p33 {
            width: 205.98px !important;
          }
        
          .u-row .u-col-41p83 {
            width: 250.98px !important;
          }
        
          .u-row .u-col-50 {
            width: 300px !important;
          }
        
          .u-row .u-col-100 {
            width: 600px !important;
          }
        
        }
        
        @media (max-width: 620px) {
          .u-row-container {
            max-width: 100% !important;
            padding-left: 0px !important;
            padding-right: 0px !important;
          }
          .u-row .u-col {
            min-width: 320px !important;
            max-width: 100% !important;
            display: block !important;
          }
          .u-row {
            width: 100% !important;
          }
          .u-col {
            width: 100% !important;
          }
          .u-col > div {
            margin: 0 auto;
          }
          .no-stack .u-col {
            min-width: 0 !important;
            display: table-cell !important;
          }
        
        .no-stack .u-col-50 {
            width: 50% !important;
          }
        
        }
        body {
          margin: 0;
          padding: 0;
        }
        
        table,
        tr,
        td {
          vertical-align: top;
          border-collapse: collapse;
        }
        
        p {
          margin: 0;
        }
        
        .ie-container table,
        .mso-container table {
          table-layout: fixed;
        }
        
        * {
          line-height: inherit;
        }
        
        a[x-apple-data-detectors='true'] {
          color: inherit !important;
          text-decoration: none !important;
        }
        
        @media (max-width: 480px) {
          .hide-mobile {
            max-height: 0px;
            overflow: hidden;
            display: none !important;
          }
        }
        
        table, td { color: #000000; } #u_body a { color: #0000ee; text-decoration: underline; } @media (max-width: 480px) { #u_content_image_1 .v-src-width { width: auto !important; } #u_content_image_1 .v-src-max-width { max-width: 50% !important; } #u_content_image_2 .v-container-padding-padding { padding: 30px 10px !important; } #u_content_image_2 .v-src-width { width: auto !important; } #u_content_image_2 .v-src-max-width { max-width: 95% !important; } #u_content_heading_1 .v-container-padding-padding { padding: 40px 10px 0px !important; } #u_content_heading_1 .v-font-size { font-size: 22px !important; } #u_content_heading_2 .v-font-size { font-size: 35px !important; } #u_content_text_2 .v-container-padding-padding { padding: 10px !important; } #u_content_button_1 .v-size-width { width: 100% !important; } #u_content_button_3 .v-container-padding-padding { padding: 10px 10px 40px !important; } #u_content_button_3 .v-size-width { width: 100% !important; } #u_content_image_3 .v-container-padding-padding { padding: 40px 10px 10px !important; } #u_content_heading_3 .v-container-padding-padding { padding: 10px 10px 0px !important; } #u_content_heading_3 .v-text-align { text-align: center !important; } #u_content_heading_3 .v-line-height { line-height: 100% !important; } #u_content_heading_5 .v-text-align { text-align: center !important; } #u_content_heading_4 .v-container-padding-padding { padding: 0px 10px 10px !important; } #u_content_heading_4 .v-text-align { text-align: center !important; } #u_content_heading_4 .v-line-height { line-height: 100% !important; } #u_content_text_1 .v-text-align { text-align: center !important; } #u_content_button_4 .v-container-padding-padding { padding: 10px 10px 40px !important; } #u_content_button_4 .v-size-width { width: 65% !important; } #u_content_button_4 .v-text-align { text-align: center !important; } #u_content_menu_1 .v-container-padding-padding { padding: 10px 5px 11px !important; } #u_content_menu_1 .v-padding { padding: 5px 12px !important; } #u_content_image_4 .v-container-padding-padding { padding: 40px 5px 5px !important; } #u_content_image_5 .v-container-padding-padding { padding: 5px !important; } #u_content_text_3 .v-container-padding-padding { padding: 30px 10px 10px !important; } #u_content_button_2 .v-size-width { width: 65% !important; } #u_content_image_8 .v-container-padding-padding { padding: 40px 10px 10px !important; } #u_content_image_8 .v-src-width { width: auto !important; } #u_content_image_8 .v-src-max-width { max-width: 35% !important; } #u_content_image_8 .v-text-align { text-align: center !important; } #u_content_text_4 .v-container-padding-padding { padding: 0px 10px 30px !important; } #u_content_text_4 .v-text-align { text-align: center !important; } #u_content_text_5 .v-container-padding-padding { padding: 0px 10px 30px !important; } #u_content_text_5 .v-text-align { text-align: center !important; } #u_content_text_6 .v-container-padding-padding { padding: 10px 10px 5px !important; } #u_content_text_6 .v-text-align { text-align: center !important; } #u_content_social_1 .v-container-padding-padding { padding: 10px 10px 40px 95px !important; } }
            </style>
          
          
        
        <!--[if !mso]><!--><link href=\"https://fonts.googleapis.com/css?family=Open+Sans:400,700&display=swap\" rel=\"stylesheet\" type=\"text/css\"><!--<![endif]-->
        
        </head>
        
        <body class=\"clean-body u_body\" style=\"margin: 0;padding: 0;-webkit-text-size-adjust: 100%;background-color: #ffffff;color: #000000\">
          <!--[if IE]><div class=\"ie-container\"><![endif]-->
          <!--[if mso]><div class=\"mso-container\"><![endif]-->
          <table id=\"u_body\" style=\"border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;min-width: 320px;Margin: 0 auto;background-color: #ffffff;width:100%\" cellpadding=\"0\" cellspacing=\"0\">
          <tbody>
          <tr style=\"vertical-align: top\">
            <td style=\"word-break: break-word;border-collapse: collapse !important;vertical-align: top\">
            <!--[if (mso)|(IE)]><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\"><tr><td align=\"center\" style=\"background-color: #ffffff;\"><![endif]-->
            
        
        <div class=\"u-row-container\" style=\"padding: 0px;background-color: transparent\">
          <div class=\"u-row\" style=\"Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;\">
            <div style=\"border-collapse: collapse;display: table;width: 100%;height: 100%;background-color: transparent;\">
              <!--[if (mso)|(IE)]><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\"><tr><td style=\"padding: 0px;background-color: transparent;\" align=\"center\"><table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" style=\"width:600px;\"><tr style=\"background-color: transparent;\"><![endif]-->
              
        <!--[if (mso)|(IE)]><td align=\"center\" width=\"600\" style=\"width: 600px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;\" valign=\"top\"><![endif]-->
        <div class=\"u-col u-col-100\" style=\"max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;\">
          <div style=\"height: 100%;width: 100% !important;\">
          <!--[if (!mso)&(!IE)]><!--><div style=\"box-sizing: border-box; height: 100%; padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;\"><!--<![endif]-->
          
        <table id=\"u_content_image_1\" style=\"font-family:'Open Sans',sans-serif;\" role=\"presentation\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" border=\"0\">
          <tbody>
            <tr>
              <td class=\"v-container-padding-padding\" style=\"overflow-wrap:break-word;word-break:break-word;padding:30px 10px 10px;font-family:'Open Sans',sans-serif;\" align=\"left\">
                
        <table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\">
          <tr>
            <td class=\"v-text-align\" style=\"padding-right: 0px;padding-left: 0px;\" align=\"center\">
              
              <img align=\"center\" border=\"0\" src=\"\" alt=\"image\" title=\"image\" style=\"outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: inline-block !important;border: none;height: auto;float: none;width: 17%;max-width: 98.6px;\" width=\"98.6\" class=\"v-src-width v-src-max-width\"/>
              
              <b style=\"text-align: center;\">$message</b>
            </td>
          </tr>
        </table>
        
              </td>
            </tr>
          </tbody>
        </table>
        
        <table id=\"u_content_image_2\" style=\"font-family:'Open Sans',sans-serif;\" role=\"presentation\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" border=\"0\">
          <tbody>
            <tr>
              <td class=\"v-container-padding-padding\" style=\"overflow-wrap:break-word;word-break:break-word;padding:60px 10px;font-family:'Open Sans',sans-serif;\" align=\"left\">
                
        <table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\">
          <tr>
            <td class=\"v-text-align\" style=\"padding-right: 0px;padding-left: 0px;\" align=\"center\">
              
              <img align=\"center\" border=\"0\" src=\"https://hotel.frontfinancecapital.com/assets/images/logo.png\" alt=\"image\" title=\"image\" style=\"outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: inline-block !important;border: none;height: auto;float: none;width: 80%;max-width: 464px;\" width=\"464\" class=\"v-src-width v-src-max-width\"/>
              
            </td>
          </tr>
        </table>
        
              </td>
            </tr>
          </tbody>
        </table>
        
          <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
          </div>
        </div>
        <!--[if (mso)|(IE)]></td><![endif]-->
              <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
            </div>
          </div>
        </div>
        
        
        
        <div class=\"u-row-container\" style=\"padding: 0px;background-color: #ecf0f1\">
          <div class=\"u-row\" style=\"Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;\">
            <div style=\"border-collapse: collapse;display: table;width: 100%;height: 100%;background-color: transparent;\">
              <!--[if (mso)|(IE)]><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\"><tr><td style=\"padding: 0px;background-color: #ecf0f1;\" align=\"center\"><table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" style=\"width:600px;\"><tr style=\"background-color: transparent;\"><![endif]-->
              
        <!--[if (mso)|(IE)]><td align=\"center\" width=\"600\" style=\"width: 600px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;\" valign=\"top\"><![endif]-->
        <div class=\"u-col u-col-100\" style=\"max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;\">
          <div style=\"height: 100%;width: 100% !important;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;\">
          <!--[if (!mso)&(!IE)]><!--><div style=\"box-sizing: border-box; height: 100%; padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;\"><!--<![endif]-->
          
        <table id=\"u_content_heading_1\" style=\"font-family:'Open Sans',sans-serif;\" role=\"presentation\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" border=\"0\">
          <tbody>
            <tr>
              <td class=\"v-container-padding-padding\" style=\"overflow-wrap:break-word;word-break:break-word;padding:60px 10px 0px;font-family:'Open Sans',sans-serif;\" align=\"left\">
                
          <h1 class=\"v-text-align v-line-height v-font-size\" style=\"margin: 0px; line-height: 140%; text-align: center; word-wrap: break-word; font-weight: normal; font-family: 'Open Sans',sans-serif; font-size: 25px;\">We Care About</h1>
        
              </td>
            </tr>
          </tbody>
        </table>
        
        <table id=\"u_content_heading_2\" style=\"font-family:'Open Sans',sans-serif;\" role=\"presentation\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" border=\"0\">
          <tbody>
            <tr>
              <td class=\"v-container-padding-padding\" style=\"overflow-wrap:break-word;word-break:break-word;padding:0px 10px 10px;font-family:'Open Sans',sans-serif;\" align=\"left\">
                
          <h1 class=\"v-text-align v-line-height v-font-size\" style=\"margin: 0px; line-height: 100%; text-align: center; word-wrap: break-word; font-weight: normal; font-family: 'Open Sans',sans-serif; font-size: 40px;\"><strong>Your Dreams</strong></h1>
        
              </td>
            </tr>
          </tbody>
        </table>
        
        <table id=\"u_content_text_2\" style=\"font-family:'Open Sans',sans-serif;\" role=\"presentation\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" border=\"0\">
          <tbody>
            <tr>
              <td class=\"v-container-padding-padding\" style=\"overflow-wrap:break-word;word-break:break-word;padding:10px 60px;font-family:'Open Sans',sans-serif;\" align=\"left\">
                
          <div class=\"v-text-align v-line-height\" style=\"line-height: 140%; text-align: center; word-wrap: break-word;\">
            <p style=\"font-size: 14px; line-height: 140%;\">Get The best room of your life here...😍</p>
          </div>
        
              </td>
            </tr>
          </tbody>
        </table>
        
          <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
          </div>
        </div>
        <!--[if (mso)|(IE)]></td><![endif]-->
              <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
            </div>
          </div>
        </div>
        
        
        
        <div class=\"u-row-container\" style=\"padding: 0px;background-color: #ecf0f1\">
          <div class=\"u-row no-stack\" style=\"Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;\">
            <div style=\"border-collapse: collapse;display: table;width: 100%;height: 100%;background-color: transparent;\">
              <!--[if (mso)|(IE)]><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\"><tr><td style=\"padding: 0px;background-color: #ecf0f1;\" align=\"center\"><table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" style=\"width:600px;\"><tr style=\"background-color: transparent;\"><![endif]-->
              
        <!--[if (mso)|(IE)]><td align=\"center\" width=\"300\" style=\"width: 300px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;\" valign=\"top\"><![endif]-->
        <div class=\"u-col u-col-50\" style=\"max-width: 320px;min-width: 300px;display: table-cell;vertical-align: top;\">
          <div style=\"height: 100%;width: 100% !important;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;\">
          <!--[if (!mso)&(!IE)]><!--><div style=\"box-sizing: border-box; height: 100%; padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;\"><!--<![endif]-->
          
        <table id=\"u_content_button_1\" style=\"font-family:'Open Sans',sans-serif;\" role=\"presentation\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" border=\"0\">
          <tbody>
            <tr>
              <td class=\"v-container-padding-padding\" style=\"overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:'Open Sans',sans-serif;\" align=\"left\">
                
          <!--[if mso]><style>.v-button {background: transparent !important;}</style><![endif]-->
        <div class=\"v-text-align\" align=\"right\">
          <!--[if mso]><v:roundrect xmlns:v=\"urn:schemas-microsoft-com:vml\" xmlns:w=\"urn:schemas-microsoft-com:office:word\" href=\"https://hotel.frontfinancecapital.com/login\" style=\"height:37px; v-text-anchor:middle; width:151px;\" arcsize=\"11%\"  stroke=\"f\" fillcolor=\"#f8c406\"><w:anchorlock/><center style=\"color:#000000;font-family:'Open Sans',sans-serif;\"><![endif]-->  
            <a href=\"https://hotel.frontfinancecapital.com/login\" target=\"_blank\" class=\"v-button v-size-width\" style=\"box-sizing: border-box;display: inline-block;font-family:'Open Sans',sans-serif;text-decoration: none;-webkit-text-size-adjust: none;text-align: center;color: #000000; background-color: #f8c406; border-radius: 4px;-webkit-border-radius: 4px; -moz-border-radius: 4px; width:54%; max-width:100%; overflow-wrap: break-word; word-break: break-word; word-wrap:break-word; mso-border-alt: none;\">
              <span class=\"v-line-height v-padding\" style=\"display:block;padding:10px 20px;line-height:120%;\"><strong><span style=\"font-size: 14px; line-height: 16.8px;\">Our Services</span></strong></span>
            </a>
          <!--[if mso]></center></v:roundrect><![endif]-->
        </div>
        
              </td>
            </tr>
          </tbody>
        </table>
        
          <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
          </div>
        </div>
        <!--[if (mso)|(IE)]></td><![endif]-->
        <!--[if (mso)|(IE)]><td align=\"center\" width=\"300\" style=\"width: 300px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;\" valign=\"top\"><![endif]-->
        <div class=\"u-col u-col-50\" style=\"max-width: 320px;min-width: 300px;display: table-cell;vertical-align: top;\">
          <div style=\"height: 100%;width: 100% !important;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;\">
          <!--[if (!mso)&(!IE)]><!--><div style=\"box-sizing: border-box; height: 100%; padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;\"><!--<![endif]-->
          
        <table id=\"u_content_button_3\" style=\"font-family:'Open Sans',sans-serif;\" role=\"presentation\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" border=\"0\">
          <tbody>
            <tr>
              <td class=\"v-container-padding-padding\" style=\"overflow-wrap:break-word;word-break:break-word;padding:10px 10px 60px;font-family:'Open Sans',sans-serif;\" align=\"left\">
                
          <!--[if mso]><style>.v-button {background: transparent !important;}</style><![endif]-->
        <div class=\"v-text-align\" align=\"left\">
          <!--[if mso]><v:roundrect xmlns:v=\"urn:schemas-microsoft-com:vml\" xmlns:w=\"urn:schemas-microsoft-com:office:word\" href=\"https://hotel.frontfinancecapital.com/contact\" style=\"height:37px; v-text-anchor:middle; width:151px;\" arcsize=\"11%\"  stroke=\"f\" fillcolor=\"#1f1f1f\"><w:anchorlock/><center style=\"color:#FFFFFF;font-family:'Open Sans',sans-serif;\"><![endif]-->  
            <a href=\"https://hotel.frontfinancecapital.com/contact\" target=\"_blank\" class=\"v-button v-size-width\" style=\"box-sizing: border-box;display: inline-block;font-family:'Open Sans',sans-serif;text-decoration: none;-webkit-text-size-adjust: none;text-align: center;color: #FFFFFF; background-color: #1f1f1f; border-radius: 4px;-webkit-border-radius: 4px; -moz-border-radius: 4px; width:54%; max-width:100%; overflow-wrap: break-word; word-break: break-word; word-wrap:break-word; mso-border-alt: none;\">
              <span class=\"v-line-height v-padding\" style=\"display:block;padding:10px 20px;line-height:120%;\"><strong><span style=\"font-size: 14px; line-height: 16.8px;\">Contact Us</span></strong></span>
            </a>
          <!--[if mso]></center></v:roundrect><![endif]-->
        </div>
        
              </td>
            </tr>
          </tbody>
        </table>
        
          <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
          </div>
        </div>
        <!--[if (mso)|(IE)]></td><![endif]-->
              <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
            </div>
          </div>
        </div>
        
        
        
        <div class=\"u-row-container\" style=\"padding: 0px;background-color: transparent\">
          <div class=\"u-row\" style=\"Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;\">
            <div style=\"border-collapse: collapse;display: table;width: 100%;height: 100%;background-color: transparent;\">
              <!--[if (mso)|(IE)]><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\"><tr><td style=\"padding: 0px;background-color: transparent;\" align=\"center\"><table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" style=\"width:600px;\"><tr style=\"background-color: transparent;\"><![endif]-->
              
        <!--[if (mso)|(IE)]><td align=\"center\" width=\"300\" style=\"width: 300px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;\" valign=\"top\"><![endif]-->
        <div class=\"u-col u-col-50\" style=\"max-width: 320px;min-width: 300px;display: table-cell;vertical-align: top;\">
          <div style=\"height: 100%;width: 100% !important;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;\">
          <!--[if (!mso)&(!IE)]><!--><div style=\"box-sizing: border-box; height: 100%; padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;\"><!--<![endif]-->
          
        <table id=\"u_content_image_3\" style=\"font-family:'Open Sans',sans-serif;\" role=\"presentation\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" border=\"0\">
          <tbody>
            <tr>
              <td class=\"v-container-padding-padding\" style=\"overflow-wrap:break-word;word-break:break-word;padding:60px 10px;font-family:'Open Sans',sans-serif;\" align=\"left\">
                
        <table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\">
          <tr>
            <td class=\"v-text-align\" style=\"padding-right: 0px;padding-left: 0px;\" align=\"center\">
              
              <img align=\"center\" border=\"0\" src=\"https://cdn.templates.unlayer.com/assets/1673821688609-img.png\" alt=\"image\" title=\"image\" style=\"outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: inline-block !important;border: none;height: auto;float: none;width: 100%;max-width: 280px;\" width=\"280\" class=\"v-src-width v-src-max-width\"/>
              
            </td>
          </tr>
        </table>
        
              </td>
            </tr>
          </tbody>
        </table>
        
          <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
          </div>
        </div>
        <!--[if (mso)|(IE)]></td><![endif]-->
        <!--[if (mso)|(IE)]><td align=\"center\" width=\"300\" style=\"width: 300px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;\" valign=\"top\"><![endif]-->
        <div class=\"u-col u-col-50\" style=\"max-width: 320px;min-width: 300px;display: table-cell;vertical-align: top;\">
          <div style=\"height: 100%;width: 100% !important;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;\">
          <!--[if (!mso)&(!IE)]><!--><div style=\"box-sizing: border-box; height: 100%; padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;\"><!--<![endif]-->
          
        <table id=\"u_content_heading_3\" style=\"font-family:'Open Sans',sans-serif;\" role=\"presentation\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" border=\"0\">
          <tbody>
            <tr>
              <td class=\"v-container-padding-padding\" style=\"overflow-wrap:break-word;word-break:break-word;padding:65px 10px 0px;font-family:'Open Sans',sans-serif;\" align=\"left\">
                
          <h1 class=\"v-text-align v-line-height v-font-size\" style=\"margin: 0px; color: #1f1f1f; line-height: 100%; text-align: left; word-wrap: break-word; font-weight: normal; font-family: 'Open Sans',sans-serif; font-size: 71px;\"><strong>30+</strong></h1>
        
              </td>
            </tr>
          </tbody>
        </table>
        
        <table id=\"u_content_heading_5\" style=\"font-family:'Open Sans',sans-serif;\" role=\"presentation\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" border=\"0\">
          <tbody>
            <tr>
              <td class=\"v-container-padding-padding\" style=\"overflow-wrap:break-word;word-break:break-word;padding:0px 10px 5px;font-family:'Open Sans',sans-serif;\" align=\"left\">
                
          <h1 class=\"v-text-align v-line-height v-font-size\" style=\"margin: 0px; color: #1f1f1f; line-height: 100%; text-align: left; word-wrap: break-word; font-weight: normal; font-size: 30px;\"><strong>Years Of</strong></h1>
        
              </td>
            </tr>
          </tbody>
        </table>
        
        <table id=\"u_content_heading_4\" style=\"font-family:'Open Sans',sans-serif;\" role=\"presentation\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" border=\"0\">
          <tbody>
            <tr>
              <td class=\"v-container-padding-padding\" style=\"overflow-wrap:break-word;word-break:break-word;padding:0px 10px;font-family:'Open Sans',sans-serif;\" align=\"left\">
                
          <h1 class=\"v-text-align v-line-height v-font-size\" style=\"margin: 0px; color: #e67e23; line-height: 120%; text-align: left; word-wrap: break-word; font-weight: normal; font-size: 30px;\"><strong>Experience</strong></h1>
        
              </td>
            </tr>
          </tbody>
        </table>
        
        <table id=\"u_content_text_1\" style=\"font-family:'Open Sans',sans-serif;\" role=\"presentation\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" border=\"0\">
          <tbody>
            <tr>
              <td class=\"v-container-padding-padding\" style=\"overflow-wrap:break-word;word-break:break-word;padding:5px 10px 10px;font-family:'Open Sans',sans-serif;\" align=\"left\">
                
          <div class=\"v-text-align v-line-height\" style=\"line-height: 140%; text-align: left; word-wrap: break-word;\">
            <p style=\"font-size: 14px; line-height: 140%;\">Changing Lives with room hospitality</p>
          </div>
        
              </td>
            </tr>
          </tbody>
        </table>
        
        <table id=\"u_content_button_4\" style=\"font-family:'Open Sans',sans-serif;\" role=\"presentation\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" border=\"0\">
          <tbody>
            <tr>
              <td class=\"v-container-padding-padding\" style=\"overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:'Open Sans',sans-serif;\" align=\"left\">
                
          <!--[if mso]><style>.v-button {background: transparent !important;}</style><![endif]-->
        <div class=\"v-text-align\" align=\"left\">
          <!--[if mso]><v:roundrect xmlns:v=\"urn:schemas-microsoft-com:vml\" xmlns:w=\"urn:schemas-microsoft-com:office:word\" href=\"https://hotel.frontfinancecapital.com/login\" style=\"height:37px; v-text-anchor:middle; width:151px;\" arcsize=\"11%\"  stroke=\"f\" fillcolor=\"#1f1f1f\"><w:anchorlock/><center style=\"color:#FFFFFF;font-family:'Open Sans',sans-serif;\"><![endif]-->  
            <a href=\"https://hotel.frontfinancecapital.com/login\" target=\"_blank\" class=\"v-button v-size-width\" style=\"box-sizing: border-box;display: inline-block;font-family:'Open Sans',sans-serif;text-decoration: none;-webkit-text-size-adjust: none;text-align: center;color: #FFFFFF; background-color: #1f1f1f; border-radius: 4px;-webkit-border-radius: 4px; -moz-border-radius: 4px; width:54%; max-width:100%; overflow-wrap: break-word; word-break: break-word; word-wrap:break-word; mso-border-alt: none;\">
              <span class=\"v-line-height v-padding\" style=\"display:block;padding:10px 20px;line-height:120%;\"><strong><span style=\"font-size: 14px; line-height: 16.8px;\">Learn More</span></strong></span>
            </a>
          <!--[if mso]></center></v:roundrect><![endif]-->
        </div>
        
              </td>
            </tr>
          </tbody>
        </table>
        
          <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
          </div>
        </div>
        <!--[if (mso)|(IE)]></td><![endif]-->
              <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
            </div>
          </div>
        </div>
        
        
        
        <div class=\"u-row-container\" style=\"padding: 0px;background-color: transparent\">
          <div class=\"u-row\" style=\"Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;\">
            <div style=\"border-collapse: collapse;display: table;width: 100%;height: 100%;background-image: url('images/image-11.png');background-repeat: no-repeat;background-position: center top;background-color: transparent;\">
              <!--[if (mso)|(IE)]><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\"><tr><td style=\"padding: 0px;background-color: transparent;\" align=\"center\"><table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" style=\"width:600px;\"><tr style=\"background-image: url('images/image-11.png');background-repeat: no-repeat;background-position: center top;background-color: transparent;\"><![endif]-->
              
        <!--[if (mso)|(IE)]><td align=\"center\" width=\"600\" style=\"width: 600px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;\" valign=\"top\"><![endif]-->
        <div class=\"u-col u-col-100\" style=\"max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;\">
          <div style=\"height: 100%;width: 100% !important;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;\">
          <!--[if (!mso)&(!IE)]><!--><div style=\"box-sizing: border-box; height: 100%; padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;\"><!--<![endif]-->
          
        <table id=\"u_content_menu_1\" style=\"font-family:'Open Sans',sans-serif;\" role=\"presentation\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" border=\"0\">
          <tbody>
            <tr>
              <td class=\"v-container-padding-padding\" style=\"overflow-wrap:break-word;word-break:break-word;padding:10px 10px 12px;font-family:'Open Sans',sans-serif;\" align=\"left\">
                
        <div class=\"menu\" style=\"text-align:center\">
        <!--[if (mso)|(IE)]><table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" align=\"center\"><tr><![endif]-->
        
          <!--[if (mso)|(IE)]><td style=\"padding:5px 20px\"><![endif]-->
          
            <a href=\"https://www.unlayer.com\" target=\"_self\" style=\"padding:5px 20px;display:inline-block;color:#1f1f1f;font-family:'Open Sans',sans-serif;font-size:14px;text-decoration:none\"  class=\"v-padding v-font-size\">
              Renovation
            </a>
          
          <!--[if (mso)|(IE)]></td><![endif]-->
          
            <!--[if (mso)|(IE)]><td style=\"padding:5px 20px\"><![endif]-->
            <span style=\"padding:5px 20px;display:inline-block;color:#1f1f1f;font-family:'Open Sans',sans-serif;font-size:14px\" class=\"v-padding v-font-size hide-mobile\">
              |
            </span>
            <!--[if (mso)|(IE)]></td><![endif]-->
          
        
          <!--[if (mso)|(IE)]><td style=\"padding:5px 20px\"><![endif]-->
          
            <a href=\"https://www.unlayer.com\" target=\"_self\" style=\"padding:5px 20px;display:inline-block;color:#1f1f1f;font-family:'Open Sans',sans-serif;font-size:14px;text-decoration:none\"  class=\"v-padding v-font-size\">
              Architecture
            </a>
          
          <!--[if (mso)|(IE)]></td><![endif]-->
          
            <!--[if (mso)|(IE)]><td style=\"padding:5px 20px\"><![endif]-->
            <span style=\"padding:5px 20px;display:inline-block;color:#1f1f1f;font-family:'Open Sans',sans-serif;font-size:14px\" class=\"v-padding v-font-size hide-mobile\">
              |
            </span>
            <!--[if (mso)|(IE)]></td><![endif]-->
          
        
          <!--[if (mso)|(IE)]><td style=\"padding:5px 20px\"><![endif]-->
          
            <a href=\"https://www.unlayer.com\" target=\"_self\" style=\"padding:5px 20px;display:inline-block;color:#1f1f1f;font-family:'Open Sans',sans-serif;font-size:14px;text-decoration:none\"  class=\"v-padding v-font-size\">
              Rebuilding
            </a>
          
          <!--[if (mso)|(IE)]></td><![endif]-->
          
        
        <!--[if (mso)|(IE)]></tr></table><![endif]-->
        </div>
        
              </td>
            </tr>
          </tbody>
        </table>
        
          <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
          </div>
        </div>
        <!--[if (mso)|(IE)]></td><![endif]-->
              <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
            </div>
          </div>
        </div>
        
        
        
        <div class=\"u-row-container\" style=\"padding: 0px;background-color: transparent\">
          <div class=\"u-row\" style=\"Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;\">
            <div style=\"border-collapse: collapse;display: table;width: 100%;height: 100%;background-color: transparent;\">
              <!--[if (mso)|(IE)]><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\"><tr><td style=\"padding: 0px;background-color: transparent;\" align=\"center\"><table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" style=\"width:600px;\"><tr style=\"background-color: transparent;\"><![endif]-->
              
        <!--[if (mso)|(IE)]><td align=\"center\" width=\"300\" style=\"width: 300px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;\" valign=\"top\"><![endif]-->
        <div class=\"u-col u-col-50\" style=\"max-width: 320px;min-width: 300px;display: table-cell;vertical-align: top;\">
          <div style=\"height: 100%;width: 100% !important;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;\">
          <!--[if (!mso)&(!IE)]><!--><div style=\"box-sizing: border-box; height: 100%; padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;\"><!--<![endif]-->
          
        <table id=\"u_content_image_4\" style=\"font-family:'Open Sans',sans-serif;\" role=\"presentation\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" border=\"0\">
          <tbody>
            <tr>
              <td class=\"v-container-padding-padding\" style=\"overflow-wrap:break-word;word-break:break-word;padding:60px 5px 5px;font-family:'Open Sans',sans-serif;\" align=\"left\">
                
        <table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\">
          <tr>
            <td class=\"v-text-align\" style=\"padding-right: 0px;padding-left: 0px;\" align=\"center\">
              
              <img align=\"center\" border=\"0\" src=\"https://cdn.templates.unlayer.com/assets/1673821688609-img.png\" alt=\"image\" title=\"image\" style=\"outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: inline-block !important;border: none;height: auto;float: none;width: 100%;max-width: 290px;\" width=\"290\" class=\"v-src-width v-src-max-width\"/>
              
            </td>
          </tr>
        </table>
        
              </td>
            </tr>
          </tbody>
        </table>
        
        <table style=\"font-family:'Open Sans',sans-serif;\" role=\"presentation\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" border=\"0\">
          <tbody>
            <tr>
              <td class=\"v-container-padding-padding\" style=\"overflow-wrap:break-word;word-break:break-word;padding:5px;font-family:'Open Sans',sans-serif;\" align=\"left\">
                
        <table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\">
          <tr>
            <td class=\"v-text-align\" style=\"padding-right: 0px;padding-left: 0px;\" align=\"center\">
              
              <img align=\"center\" border=\"0\" src=\"https://cdn.templates.unlayer.com/assets/1673821688609-img.png\" alt=\"image\" title=\"image\" style=\"outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: inline-block !important;border: none;height: auto;float: none;width: 100%;max-width: 290px;\" width=\"290\" class=\"v-src-width v-src-max-width\"/>
              
            </td>
          </tr>
        </table>
        
              </td>
            </tr>
          </tbody>
        </table>
        
          <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
          </div>
        </div>
        <!--[if (mso)|(IE)]></td><![endif]-->
        <!--[if (mso)|(IE)]><td align=\"center\" width=\"300\" style=\"width: 300px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;\" valign=\"top\"><![endif]-->
        <div class=\"u-col u-col-50\" style=\"max-width: 320px;min-width: 300px;display: table-cell;vertical-align: top;\">
          <div style=\"height: 100%;width: 100% !important;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;\">
          <!--[if (!mso)&(!IE)]><!--><div style=\"box-sizing: border-box; height: 100%; padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;\"><!--<![endif]-->
          
        <table id=\"u_content_image_5\" style=\"font-family:'Open Sans',sans-serif;\" role=\"presentation\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" border=\"0\">
          <tbody>
            <tr>
              <td class=\"v-container-padding-padding\" style=\"overflow-wrap:break-word;word-break:break-word;padding:60px 5px 5px;font-family:'Open Sans',sans-serif;\" align=\"left\">
                
        <table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\">
          <tr>
            <td class=\"v-text-align\" style=\"padding-right: 0px;padding-left: 0px;\" align=\"center\">
              
              <img align=\"center\" border=\"0\" src=\"https://cdn.templates.unlayer.com/assets/1673821688609-img.png\" alt=\"image\" title=\"image\" style=\"outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: inline-block !important;border: none;height: auto;float: none;width: 100%;max-width: 290px;\" width=\"290\" class=\"v-src-width v-src-max-width\"/>
              
            </td>
          </tr>
        </table>
        
              </td>
            </tr>
          </tbody>
        </table>
        
        <table style=\"font-family:'Open Sans',sans-serif;\" role=\"presentation\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" border=\"0\">
          <tbody>
            <tr>
              <td class=\"v-container-padding-padding\" style=\"overflow-wrap:break-word;word-break:break-word;padding:5px;font-family:'Open Sans',sans-serif;\" align=\"left\">
                
        <table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\">
          <tr>
            <td class=\"v-text-align\" style=\"padding-right: 0px;padding-left: 0px;\" align=\"center\">
              
              <img align=\"center\" border=\"0\" src=\"https://cdn.templates.unlayer.com/assets/1673821688609-img.png\" alt=\"image\" title=\"image\" style=\"outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: inline-block !important;border: none;height: auto;float: none;width: 100%;max-width: 290px;\" width=\"290\" class=\"v-src-width v-src-max-width\"/>
              
            </td>
          </tr>
        </table>
        
              </td>
            </tr>
          </tbody>
        </table>
        
          <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
          </div>
        </div>
        <!--[if (mso)|(IE)]></td><![endif]-->
              <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
            </div>
          </div>
        </div>
        
        
        
        <div class=\"u-row-container\" style=\"padding: 0px;background-color: transparent\">
          <div class=\"u-row\" style=\"Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;\">
            <div style=\"border-collapse: collapse;display: table;width: 100%;height: 100%;background-color: transparent;\">
              <!--[if (mso)|(IE)]><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\"><tr><td style=\"padding: 0px;background-color: transparent;\" align=\"center\"><table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" style=\"width:600px;\"><tr style=\"background-color: transparent;\"><![endif]-->
              
        <!--[if (mso)|(IE)]><td align=\"center\" width=\"600\" style=\"width: 600px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;\" valign=\"top\"><![endif]-->
        <div class=\"u-col u-col-100\" style=\"max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;\">
          <div style=\"height: 100%;width: 100% !important;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;\">
          <!--[if (!mso)&(!IE)]><!--><div style=\"box-sizing: border-box; height: 100%; padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;\"><!--<![endif]-->
          
        <table id=\"u_content_text_3\" style=\"font-family:'Open Sans',sans-serif;\" role=\"presentation\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" border=\"0\">
          <tbody>
            <tr>
              <td class=\"v-container-padding-padding\" style=\"overflow-wrap:break-word;word-break:break-word;padding:30px 60px 10px;font-family:'Open Sans',sans-serif;\" align=\"left\">
                
          <div class=\"v-text-align v-line-height\" style=\"line-height: 140%; text-align: center; word-wrap: break-word;\">
            <p style=\"font-size: 14px; line-height: 140%;\">Fall in love as you build your own room.</p>
          </div>
        
              </td>
            </tr>
          </tbody>
        </table>
        
        <table id=\"u_content_button_2\" style=\"font-family:'Open Sans',sans-serif;\" role=\"presentation\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" border=\"0\">
          <tbody>
            <tr>
              <td class=\"v-container-padding-padding\" style=\"overflow-wrap:break-word;word-break:break-word;padding:10px 10px 60px;font-family:'Open Sans',sans-serif;\" align=\"left\">
                
          <!--[if mso]><style>.v-button {background: transparent !important;}</style><![endif]-->
        <div class=\"v-text-align\" align=\"center\">
          <!--[if mso]><v:roundrect xmlns:v=\"urn:schemas-microsoft-com:vml\" xmlns:w=\"urn:schemas-microsoft-com:office:word\" href=\"https://hotel.frontfinancecapital.com/login\" style=\"height:37px; v-text-anchor:middle; width:174px;\" arcsize=\"11%\"  stroke=\"f\" fillcolor=\"#1f1f1f\"><w:anchorlock/><center style=\"color:#FFFFFF;font-family:'Open Sans',sans-serif;\"><![endif]-->  
            <a href=\"https://hotel.frontfinancecapital.com/login\" target=\"_blank\" class=\"v-button v-size-width\" style=\"box-sizing: border-box;display: inline-block;font-family:'Open Sans',sans-serif;text-decoration: none;-webkit-text-size-adjust: none;text-align: center;color: #FFFFFF; background-color: #1f1f1f; border-radius: 4px;-webkit-border-radius: 4px; -moz-border-radius: 4px; width:30%; max-width:100%; overflow-wrap: break-word; word-break: break-word; word-wrap:break-word; mso-border-alt: none;\">
              <span class=\"v-line-height v-padding\" style=\"display:block;padding:10px 20px;line-height:120%;\"><strong><span style=\"font-size: 14px; line-height: 16.8px;\">Learn More</span></strong></span>
            </a>
          <!--[if mso]></center></v:roundrect><![endif]-->
        </div>
        
              </td>
            </tr>
          </tbody>
        </table>
        
          <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
          </div>
        </div>
        <!--[if (mso)|(IE)]></td><![endif]-->
              <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
            </div>
          </div>
        </div>
        
        
        
        <div class=\"u-row-container\" style=\"padding: 0px;background-color: #ecf0f1\">
          <div class=\"u-row\" style=\"Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;\">
            <div style=\"border-collapse: collapse;display: table;width: 100%;height: 100%;background-color: transparent;\">
              <!--[if (mso)|(IE)]><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\"><tr><td style=\"padding: 0px;background-color: #ecf0f1;\" align=\"center\"><table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" style=\"width:600px;\"><tr style=\"background-color: transparent;\"><![endif]-->
              
        <!--[if (mso)|(IE)]><td align=\"center\" width=\"205\" style=\"width: 205px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;\" valign=\"top\"><![endif]-->
        <div class=\"u-col u-col-34p33\" style=\"max-width: 320px;min-width: 205.98px;display: table-cell;vertical-align: top;\">
          <div style=\"height: 100%;width: 100% !important;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;\">
          <!--[if (!mso)&(!IE)]><!--><div style=\"box-sizing: border-box; height: 100%; padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;\"><!--<![endif]-->
          
        <table id=\"u_content_image_8\" style=\"font-family:'Open Sans',sans-serif;\" role=\"presentation\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" border=\"0\">
          <tbody>
            <tr>
              <td class=\"v-container-padding-padding\" style=\"overflow-wrap:break-word;word-break:break-word;padding:60px 10px 10px;font-family:'Open Sans',sans-serif;\" align=\"left\">
                
        <table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\">
          <tr>
            <td class=\"v-text-align\" style=\"padding-right: 0px;padding-left: 0px;\" align=\"left\">
              
              <img align=\"left\" border=\"0\" src=\"https://cdn.templates.unlayer.com/assets/1673821688609-img.png\" alt=\"image\" title=\"image\" style=\"outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: inline-block !important;border: none;height: auto;float: none;width: 34%;max-width: 63.23px;\" width=\"63.23\" class=\"v-src-width v-src-max-width\"/>
              
            </td>
          </tr>
        </table>
        
              </td>
            </tr>
          </tbody>
        </table>
        
        <table id=\"u_content_text_4\" style=\"font-family:'Open Sans',sans-serif;\" role=\"presentation\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" border=\"0\">
          <tbody>
            <tr>
              <td class=\"v-container-padding-padding\" style=\"overflow-wrap:break-word;word-break:break-word;padding:0px 10px 60px;font-family:'Open Sans',sans-serif;\" align=\"left\">
                
          <div class=\"v-text-align v-line-height\" style=\"line-height: 140%; text-align: left; word-wrap: break-word;\">
            <p style=\"font-size: 14px; line-height: 140%;\">Lorem ipsum dolor sit amet, consec tetur adip iscing elit sed do.</p>
          </div>
        
              </td>
            </tr>
          </tbody>
        </table>
        
          <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
          </div>
        </div>
        <!--[if (mso)|(IE)]></td><![endif]-->
        <!--[if (mso)|(IE)]><td align=\"center\" width=\"143\" style=\"width: 143px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;\" valign=\"top\"><![endif]-->
        <div class=\"u-col u-col-23p84\" style=\"max-width: 320px;min-width: 143.04px;display: table-cell;vertical-align: top;\">
          <div style=\"height: 100%;width: 100% !important;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;\">
          <!--[if (!mso)&(!IE)]><!--><div style=\"box-sizing: border-box; height: 100%; padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;\"><!--<![endif]-->
          
        <table id=\"u_content_text_5\" style=\"font-family:'Open Sans',sans-serif;\" role=\"presentation\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" border=\"0\">
          <tbody>
            <tr>
              <td class=\"v-container-padding-padding\" style=\"overflow-wrap:break-word;word-break:break-word;padding:60px 10px 10px;font-family:'Open Sans',sans-serif;\" align=\"left\">
                
          <div class=\"v-text-align v-line-height\" style=\"line-height: 180%; text-align: left; word-wrap: break-word;\">
            <p style=\"font-size: 14px; line-height: 180%;\"><strong>Links</strong></p>
        <p style=\"font-size: 14px; line-height: 180%; text-align: center;\"><a rel=\"noopener\" href=\"https://hotel.frontfinancecapital.com\" target=\"_blank\">Home</a></p>
        <p style=\"font-size: 14px; line-height: 180%; text-align: center;\">About</p>
        <p style=\"font-size: 14px; line-height: 180%; text-align: center;\">Services</p>
          </div>
        
              </td>
            </tr>
          </tbody>
        </table>
        
          <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
          </div>
        </div>
        <!--[if (mso)|(IE)]></td><![endif]-->
        <!--[if (mso)|(IE)]><td align=\"center\" width=\"250\" style=\"width: 250px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;\" valign=\"top\"><![endif]-->
        <div class=\"u-col u-col-41p83\" style=\"max-width: 320px;min-width: 250.98px;display: table-cell;vertical-align: top;\">
          <div style=\"height: 100%;width: 100% !important;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;\">
          <!--[if (!mso)&(!IE)]><!--><div style=\"box-sizing: border-box; height: 100%; padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;\"><!--<![endif]-->
          
        <table id=\"u_content_text_6\" style=\"font-family:'Open Sans',sans-serif;\" role=\"presentation\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" border=\"0\">
          <tbody>
            <tr>
              <td class=\"v-container-padding-padding\" style=\"overflow-wrap:break-word;word-break:break-word;padding:60px 10px 10px;font-family:'Open Sans',sans-serif;\" align=\"left\">
                
          <div class=\"v-text-align v-line-height\" style=\"line-height: 140%; text-align: left; word-wrap: break-word;\">
            <p style=\"font-size: 14px; line-height: 140%;\"><strong>customer.success@unlayer.com</strong></p>
        <p style=\"font-size: 14px; line-height: 140%;\"><strong>+12 458 46558</strong></p>
          </div>
        
              </td>
            </tr>
          </tbody>
        </table>
        
        <table id=\"u_content_social_1\" style=\"font-family:'Open Sans',sans-serif;\" role=\"presentation\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" border=\"0\">
          <tbody>
            <tr>
              <td class=\"v-container-padding-padding\" style=\"overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:'Open Sans',sans-serif;\" align=\"left\">
                
        <div align=\"left\">
          <div style=\"display: table; max-width:147px;\">
          <!--[if (mso)|(IE)]><table width=\"147\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\"><tr><td style=\"border-collapse:collapse;\" align=\"left\"><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" style=\"border-collapse:collapse; mso-table-lspace: 0pt;mso-table-rspace: 0pt; width:147px;\"><tr><![endif]-->
          
            
            <!--[if (mso)|(IE)]><td width=\"32\" style=\"width:32px; padding-right: 5px;\" valign=\"top\"><![endif]-->
            <table align=\"left\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"32\" height=\"32\" style=\"width: 32px !important;height: 32px !important;display: inline-block;border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;margin-right: 5px\">
              <tbody><tr style=\"vertical-align: top\"><td align=\"left\" valign=\"middle\" style=\"word-break: break-word;border-collapse: collapse !important;vertical-align: top\">
                <a href=\"https://facebook.com/\" title=\"Facebook\" target=\"_blank\">
                  <img src=\"https://cdn.templates.unlayer.com/assets/1673821688609-img.png\" alt=\"Facebook\" title=\"Facebook\" width=\"32\" style=\"outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;max-width: 32px !important\">
                </a>
              </td></tr>
            </tbody></table>
            <!--[if (mso)|(IE)]></td><![endif]-->
            
            <!--[if (mso)|(IE)]><td width=\"32\" style=\"width:32px; padding-right: 5px;\" valign=\"top\"><![endif]-->
            <table align=\"left\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"32\" height=\"32\" style=\"width: 32px !important;height: 32px !important;display: inline-block;border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;margin-right: 5px\">
              <tbody><tr style=\"vertical-align: top\"><td align=\"left\" valign=\"middle\" style=\"word-break: break-word;border-collapse: collapse !important;vertical-align: top\">
                <a href=\"https://twitter.com/\" title=\"Twitter\" target=\"_blank\">
                  <img src=\"https://cdn.templates.unlayer.com/assets/1673821688609-img.png\" alt=\"Twitter\" title=\"Twitter\" width=\"32\" style=\"outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;max-width: 32px !important\">
                </a>
              </td></tr>
            </tbody></table>
            <!--[if (mso)|(IE)]></td><![endif]-->
            
            <!--[if (mso)|(IE)]><td width=\"32\" style=\"width:32px; padding-right: 5px;\" valign=\"top\"><![endif]-->
            <table align=\"left\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"32\" height=\"32\" style=\"width: 32px !important;height: 32px !important;display: inline-block;border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;margin-right: 5px\">
              <tbody><tr style=\"vertical-align: top\"><td align=\"left\" valign=\"middle\" style=\"word-break: break-word;border-collapse: collapse !important;vertical-align: top\">
                <a href=\"https://linkedin.com/\" title=\"LinkedIn\" target=\"_blank\">
                  <img src=\"https://cdn.templates.unlayer.com/assets/1673821688609-img.png\" alt=\"LinkedIn\" title=\"LinkedIn\" width=\"32\" style=\"outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;max-width: 32px !important\">
                </a>
              </td></tr>
            </tbody></table>
            <!--[if (mso)|(IE)]></td><![endif]-->
            
            <!--[if (mso)|(IE)]><td width=\"32\" style=\"width:32px; padding-right: 0px;\" valign=\"top\"><![endif]-->
            <table align=\"left\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"32\" height=\"32\" style=\"width: 32px !important;height: 32px !important;display: inline-block;border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;margin-right: 0px\">
              <tbody><tr style=\"vertical-align: top\"><td align=\"left\" valign=\"middle\" style=\"word-break: break-word;border-collapse: collapse !important;vertical-align: top\">
                <a href=\"https://instagram.com/\" title=\"Instagram\" target=\"_blank\">
                  <img src=\"https://cdn.templates.unlayer.com/assets/1673821688609-img.png\" alt=\"Instagram\" title=\"Instagram\" width=\"32\" style=\"outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;max-width: 32px !important\">
                </a>
              </td></tr>
            </tbody></table>
            <!--[if (mso)|(IE)]></td><![endif]-->
            
            
            <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
          </div>
        </div>
        
              </td>
            </tr>
          </tbody>
        </table>
        
          <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
          </div>
        </div>
        <!--[if (mso)|(IE)]></td><![endif]-->
              <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
            </div>
          </div>
        </div>
        
        
            <!--[if (mso)|(IE)]></td></tr></table><![endif]-->
            </td>
          </tr>
          </tbody>
          </table>
          <!--[if mso]></div><![endif]-->
          <!--[if IE]></div><![endif]-->
        </body>
        
        </html>
        
        ";

        
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= "From: Hotel <hotel@hotel-project.com>";

    $mail = mail($to, $subject, $html, $headers);

    if ($mail) {
        $_SESSION['success_msg'] = "Mail has been sent";
        header('Location: ../../contact');
    } else {
        $_SESSION['error_msg'] = "Mail has not been sent";
        header('Location: ../../contact');
    }
}
