<!-- ============================================ -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns:v="urn:schemas-microsoft-com:vml">
    <head>
        <title>Email - Contacts</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0"/>
        <meta name = "format-detection" content = "telephone=no">
        <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Akronim"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            html {
            -webkit-text-size-adjust: 100%;
            }
            .bg {
            background: rgba(255,255,255,0.2);
            }
            .header {
            font-family: Akronim, arial;
            font-size: 40px;
            text-shadow: 5px 5px 5px rgba(1,1,1,0.5);
            color: cyan;
            
            }
            .title {
            font-size: 40px;
            font-weight: bold;
            color: #89a830;
            }
            .fa {
            background: rgba(255,255,255,0.2);
            width: 40px;
            line-height: 40px;
            font-size: 20px;
            border-radius: 20px;
            }
            @media (max-width:600px) {
            table.rwd600 {
            width: 100%!important;
            }
            }
            @media (max-width:320px) {
            table.rwd320 {
            width: 100%!important;
            }
            td.label {
            text-align: center;
            }
            }
        </style>
    </head>
    <body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
        <table style="font-family:arial;font-size:16px;color:white" bgcolor="#051039" border="0" cellspacing="0" cellpadding="0" width="100%">
            <tbody>
                <tr>
                    <td>
                        <table border="0" cellspacing="0" cellpadding="0" width="100%" align="center">
                            <tbody>
                                <tr>
                                    <td class="bg header" style="padding:5px" align="center">ReadyDev</td>
                                </tr>
                                <tr>
                                    <td height="30px" style="font-size:30px;line-height:30px">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td  style="padding:10px">
                                        <table class="rwd600" border="0" cellspacing="0" cellpadding="0" align="center" width="600">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <table class="bg" border="0" cellspacing="0" cellpadding="0" align="center" width="100%">
                                                            <tbody>
                                                                <tr>
                                                                    <td class="bg title" style="padding:10px" align="center">Contact</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="padding:5px">
                                                                        <table class="rwd320" border="0" cellspacing="0" cellpadding="0" align="center">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <table class="rwd320" border="0" cellspacing="0" cellpadding="0" align="left" width="70">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td style="padding:5px;color:#f67b20" class="label" align="right">Nom :</td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                        <table class="rwd320" border="0" cellspacing="0" cellpadding="0" align="left">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td style="padding:5px" class="label"><?php echo 'data["nameValue"]'; ?></td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>
                                                                                        <table class="rwd320" border="0" cellspacing="0" cellpadding="0" align="left" width="70">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td style="padding:5px;color:#f67b20" class="label" align="right">Email :</td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                        <table class="rwd320" border="0" cellspacing="0" cellpadding="0" align="left">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td style="padding:5px" class="label"><?php echo 'data["emailValue"]'; ?></td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>
                                                                                        <table class="rwd320" border="0" cellspacing="0" cellpadding="0" align="left" width="70">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td style="padding:5px;color:#f67b20" class="label" align="right">Objet :</td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                        <table class="rwd320" border="0" cellspacing="0" cellpadding="0" align="left">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td style="padding:5px" class="label"><?php echo 'data["subjectValue"]'; ?></td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>
                                                                                        <table class="rwd320" border="0" cellspacing="0" cellpadding="0" align="left" width="70">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td style="padding:5px;color:#f67b20" class="label" align="right">Date :</td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                        <table class="rwd320" border="0" cellspacing="0" cellpadding="0" align="left">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td style="padding:5px" class="label"><?php echo date("d/m/Y"); ?></td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>
                                                                                        <table class="rwd320" border="0" cellspacing="0" cellpadding="0" align="left" width="70">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td style="padding:5px;color:#f67b20" class="label" align="right">Heure :</td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                        <table class="rwd320" border="0" cellspacing="0" cellpadding="0" align="left">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <?php 
                                                                                                        date_default_timezone_set("Europe/Paris");
                                                                                                        $m_date = date("H:i");
                                                                                                    ?>
                                                                                                    <td style="padding:5px" class="label"><?php echo $m_date; ?></td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td height="30px" style="font-size:30px;line-height:30px">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <table class="bg" border="0" cellspacing="0" cellpadding="0" align="center" width="100%">
                                                            <tbody>
                                                                <tr>
                                                                    <td class="bg title" style="padding:10px" align="center">Message</td>
                                                                </tr> 
                                                                <tr>
                                                                    <td>
                                                                        <table border="0" cellspacing="0" cellpadding="0" align="left">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td style="padding:10px" align="left"><?php echo 'data["messageValue"]'; ?></td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td height="30px" style="font-size:30px;line-height:30px">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <table bgcolor="white" border="0" cellspacing="0" cellpadding="0" width="100%">
                                                            <tbody>
                                                                <tr>
                                                                    <td height="2" style="font-size:2px;line-height:2px">&nbsp;</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td height="30px" style="font-size:30px;line-height:30px">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td style="" align="center">Réseaux Sociaux - Réjoignez-nous</td>
                                                </tr>
                                                <tr>
                                                    <td height="10px" style="font-size:10px;line-height:10px">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <table border="0" cellspacing="0" cellpadding="0" align="center">
                                                            <tbody>
                                                                <tr>
                                                                    <td align="center"><i class="fa fa-facebook"></i></td>
                                                                    <td width="20">&nbsp;</td>
                                                                    <td align="center"><i class="fa fa-twitter"></i></td>
                                                                    <td width="20">&nbsp;</td>
                                                                    <td align="center"><i class="fa fa-skype"></i></td>
                                                                    <td width="20">&nbsp;</td>
                                                                    <td align="center"><i class="fa fa-linkedin"></i></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td height="30px" style="font-size:30px;line-height:30px">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td style="" align="center">&copy; 2017 - ReadyDev</td>
                                                </tr>
                                                <tr>
                                                    <td style="" align="center">Plateformae de Développement Continue</td>
                                                </tr>
                                                <tr>
                                                    <td style="" align="center">Produit par Gerard KESSE</td>
                                                </tr>
                                                <tr>
                                                    <td height="30px" style="font-size:30px;line-height:30px">&nbsp;</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
    </body>
</html>
<!-- ============================================ -->
