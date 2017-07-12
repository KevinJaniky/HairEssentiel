<?php

class Email {

    private $_nom;
    private $_mail;
    private $_obj;
    private $_msg;
    private $_error = "";
    private $_to = 'hair.essentiel.71@gmail.com';



    public function __construct()
    {

    }

    public function setNom($nom) {
        if(strlen($nom) < 2) {
           return $this->_error .= "<li>Nom trop court</li>";
        }
        return $this->_nom = htmlentities($nom);
    }
    public function setMail($mail) {
        if(!filter_var($mail,FILTER_VALIDATE_EMAIL)) {
            return $this->_error .= "<li>Mail invalide</li>";
        }
        return $this->_mail = htmlentities($mail);
    }

    public function setObj($obj) {
        if(strlen($obj) < 2) {
            return $this->_error .= "<li>Objet trop court</li>";
        }
        return $this->_obj = htmlentities($obj);
    }
    public function setMessage($msg) {
        if(strlen($msg) < 5) {
            return $this->_error .= "<li>Message trop court</li>";
        }
        return $this->_msg = htmlentities($msg);
    }

    public function sendMail() {
        if(empty($this->_error)) {
            $_SESSION['flash_email_success'] = 'Votre mail a bien été envoyé';
            $message = '
            <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

    <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>[SUBJECT]</title>
        <style type="text/css">

            @media screen and (max-width: 600px) {
                table[class="container"] {
                    width: 95% !important;
                }
            }

            #outlook a {
                padding: 0;
            }

            body {
                width: 100% !important;
                -webkit-text-size-adjust: 100%;
                -ms-text-size-adjust: 100%;
                margin: 0;
                padding: 0;
            }

            .ExternalClass {
                width: 100%;
            }

            .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {
                line-height: 100%;
            }

            #backgroundTable {
                margin: 0;
                padding: 0;
                width: 100% !important;
                line-height: 100% !important;
            }

            img {
                outline: none;
                text-decoration: none;
                -ms-interpolation-mode: bicubic;
            }

            a img {
                border: none;
            }

            .image_fix {
                display: block;
            }

            p {
                margin: 1em 0;
            }

            h1, h2, h3, h4, h5, h6 {
                color: black !important;
            }

            h1 a, h2 a, h3 a, h4 a, h5 a, h6 a {
                color: blue !important;
            }

            h1 a:active, h2 a:active, h3 a:active, h4 a:active, h5 a:active, h6 a:active {
                color: red !important;
            }

            h1 a:visited, h2 a:visited, h3 a:visited, h4 a:visited, h5 a:visited, h6 a:visited {
                color: purple !important;
            }

            table td {
                border-collapse: collapse;
            }

            table {
                border-collapse: collapse;
                mso-table-lspace: 0pt;
                mso-table-rspace: 0pt;
            }

            a {
                color: #000;
            }

            @media only screen and (max-device-width: 480px) {

                a[href^="tel"], a[href^="sms"] {
                    text-decoration: none;
                    color: black; /* or whatever your want */
                    pointer-events: none;
                    cursor: default;
                }

                .mobile_link a[href^="tel"], .mobile_link a[href^="sms"] {
                    text-decoration: default;
                    color: orange !important; /* or whatever your want */
                    pointer-events: auto;
                    cursor: default;
                }
            }

            @media only screen and (min-device-width: 768px) and (max-device-width: 1024px) {
                a[href^="tel"], a[href^="sms"] {
                    text-decoration: none;
                    color: blue; /* or whatever your want */
                    pointer-events: none;
                    cursor: default;
                }

                .mobile_link a[href^="tel"], .mobile_link a[href^="sms"] {
                    text-decoration: default;
                    color: orange !important;
                    pointer-events: auto;
                    cursor: default;
                }
            }

            @media only screen and (-webkit-min-device-pixel-ratio: 2) {
                /* Put your iPhone 4g styles in here */
            }

            @media only screen and (-webkit-device-pixel-ratio: .75) {
                /* Put CSS for low density (ldpi) Android layouts in here */
            }

            @media only screen and (-webkit-device-pixel-ratio: 1) {
                /* Put CSS for medium density (mdpi) Android layouts in here */
            }

            @media only screen and (-webkit-device-pixel-ratio: 1.5) {
                /* Put CSS for high density (hdpi) Android layouts in here */
            }

            /* end Android targeting */
            h2 {
                color: #181818;
                font-family: Helvetica, Arial, sans-serif;
                font-size: 22px;
                line-height: 22px;
                font-weight: normal;
            }

            a.link1 {

            }

            a.link2 {
                color: #fff;
                text-decoration: none;
                font-family: Helvetica, Arial, sans-serif;
                font-size: 16px;
                color: #fff;
                border-radius: 4px;
            }

            p {
                color: #555;
                font-family: Helvetica, Arial, sans-serif;
                font-size: 16px;
                line-height: 160%;
            }
        </style>

        <script type="colorScheme" class="swatch active">
  {
    "name":"Default",
    "bgBody":"ffffff",
    "link":"fff",
    "color":"555555",
    "bgItem":"ffffff",
    "title":"181818"
  }

    </script>

    </head>
    <body>
    <!-- Wrapper/Container Table: Use a wrapper table to control the width and the background color consistently of your email. Use this approach instead of setting attributes on the body tag. -->
    <table cellpadding="0" width="100%" cellspacing="0" border="0" id="backgroundTable" class=\'bgBody\'>
        <tr>
            <td>
                <table cellpadding="0" width="620" class="container" align="center" cellspacing="0" border="0">
                    <tr>
                        <td>
                            <!-- Tables are the most common way to format your email consistently. Set your table widths inside cells and in most cases reset cellpadding, cellspacing, and border to zero. Use nested tables as a way to space effectively in your message. -->


                            <table cellpadding="0" cellspacing="0" border="0" align="center" width="600" class="container">
                                <tr>
                                    <td class=\'movableContentContainer bgItem\'>

                                        <div class=\'movableContent\'>
                                            <table cellpadding="0" cellspacing="0" border="0" align="center" width="600"
                                                   class="container">
                                                <tr height="40">
                                                    <td width="200">&nbsp;</td>
                                                    <td width="200">&nbsp;</td>
                                                    <td width="200">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td width="200" valign="top">&nbsp;</td>
                                                    <td width="200" valign="top" align="center">
                                                        <div class="contentEditableContainer contentImageEditable">
                                                            <div class="contentEditable" align=\'center\'>
                                                                <img src="/media/favicon.png" width="155" alt=\'Logo\'
                                                                     data-default="placeholder"/>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td width="200" valign="top">&nbsp;</td>
                                                </tr>
                                                <tr height="25">
                                                    <td width="200">&nbsp;</td>
                                                    <td width="200">&nbsp;</td>
                                                    <td width="200">&nbsp;</td>
                                                </tr>
                                            </table>
                                        </div>

                                        <div class=\'movableContent\'>
                                            <table cellpadding="0" cellspacing="0" border="0" align="center" width="600"
                                                   class="container">
                                                <tr>
                                                    <td width="100%" colspan="3" align="center"
                                                        style="padding-bottom:10px;padding-top:25px;">
                                                        <div class="contentEditableContainer contentTextEditable">
                                                            <div class="contentEditable" align=\'center\'>
                                                                <h2>'.$this->_obj.'</h2>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="100">&nbsp;</td>
                                                    <td width="400" align="center">
                                                        <div class="contentEditableContainer contentTextEditable">
                                                            <div class="contentEditable" align=\'left\'>
                                                            '.$this->_mail.'
                                                            <br>
                                                            <br>
                                                            <br>
                                                                '.$this->_msg.'
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td width="100">&nbsp;</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
            
            ';

            $headers = "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

            mail($this->_to,$this->_obj,$message,$headers);
        } else {
            $_SESSION['flash_email_error'] = $this->_error;
        }
    }


}