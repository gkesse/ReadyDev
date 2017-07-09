<?php
    require_once $_SERVER["DOCUMENT_ROOT"]."/php/class/GAutoloadRegister.php";
    $m_data = GJson::Instance()->getData("data/json/email.json"); 
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html style="-webkit-text-size-adjust:100%" xmlns:v="urn:schemas-microsoft-com:vml">
    <head>
        <title>Email - Contacts</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0"/>
        <meta name = "format-detection" content = "telephone=no">
        <style>
            html {
            -webkit-text-size-adjust:100%
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
    <body style="margin:0;padding:0">
        <table style="font-family:arial;font-size:16px;color:white" bgcolor="#051039" border="0" cellspacing="0" cellpadding="0" width="100%">
            <tbody>
                <tr>
                    <td>
                        <table border="0" cellspacing="0" cellpadding="0" width="100%" align="center">
                            <tbody>
                                <tr>
                                    <td style="padding:10px" bgcolor="#373f60" align="center">
                                        <?php $m_ds = $m_data["site"]; ?>
                                        <a href="<?php echo $m_ds['link']; ?>">
                                            <img src="<?php echo $m_ds['img']; ?>" 
                                            alt="<?php echo $m_ds['name']; ?>"/>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td height="20px" style="font-size:20px;line-height:20px">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td  style="padding:10px">
                                        <table class="rwd600" border="0" cellspacing="0" cellpadding="0" align="center" width="600">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <table bgcolor="#373f60" border="0" cellspacing="0" cellpadding="0" align="center" width="100%">
                                                            <tbody>
                                                                <tr>
                                                                    <td style="font-size:40px;font-weight:bold;color:#89a830;padding:10px" bgcolor="#5f657f" align="center">Contact</td>
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
                                                                                                    <td style="padding:5px" class="label"><?php echo $data["nameValue"]; ?></td>
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
                                                                                                    <td style="padding:5px;text-decoration:none;color:cyan" class="label"><?php echo $data["emailValue"]; ?></td>
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
                                                                                                    <td style="padding:5px" class="label"><?php echo $data["subjectValue"]; ?></td>
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
                                                        <table bgcolor="#373f60" border="0" cellspacing="0" cellpadding="0" align="center" width="100%">
                                                            <tbody>
                                                                <tr>
                                                                    <td style="font-size:40px;font-weight:bold;color:#89a830;padding:10px" bgcolor="#5f657f" align="center">Message</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <table border="0" cellspacing="0" cellpadding="0" align="left">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td style="padding:10px"><?php echo nl2br($data["messageValue"]); ?></td>
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
                                                    <td background="https://i.imgur.com/YJOX1PC.png" bgcolor="#eb7b99" valign="top">
                                                        <!--[if gte mso 9]>
                                                            <v:rect xmlns:v="urn:schemas-microsoft-com:vml" fill="true" stroke="false" style="mso-width-percent:1000;">
                                                            <v:fill type="tile" src="https://i.imgur.com/YJOX1PC.png" color="#eb7b99" />
                                                            <v:textbox style="mso-fit-shape-to-text:true" inset="0,0,0,0">
                                                        <![endif]-->
                                                        <div>
                                                        </div>
                                                        <!--[if gte mso 9]>
                                                            </v:textbox>
                                                            </v:rect>
                                                        <![endif]-->
                                                    </td>
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
                                                    <td style="font-size:14px" align="center">Réseaux Sociaux - Réjoignez-nous</td>
                                                </tr>
                                                <tr>
                                                    <td height="10px" style="font-size:10px;line-height:10px">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <table border="0" cellspacing="0" cellpadding="0" align="center">
                                                            <tbody>
                                                                <tr>
                                                                    <td width="20">&nbsp;</td>
                                                                    <?php 
                                                                        $m_ds = $m_data["networks"];
                                                                        for($i = 0; $i < count($m_ds); $i++) { 
                                                                            $m_di = $m_ds[$i];
                                                                            $m_target = "target='_blank'";
                                                                        ?>
                                                                        <td align="center">
                                                                            <a <?php if($m_di["link"] != "#") {echo $m_target;} ?>
                                                                            style="text-decoration:none"
                                                                            href="<?php echo $m_di["link"]; ?>">
                                                                                <img src="<?php echo $m_di["img"]; ?>"
                                                                                alt="<?php echo $m_di["name"]; ?>"/>
                                                                            </a>
                                                                        </td>
                                                                        <td width="20">&nbsp;</td>
                                                                    <?php } ?>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                                
                                                <tr>
                                                    <td height="30px" style="font-size:30px;line-height:30px">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <?php $m_ds = $m_data["copyright"]; ?>
                                                    <td style="font-size:14px" align="center">&copy;
                                                        <?php echo $m_ds["date"]; ?> -
                                                        <?php echo $m_ds["site"]["name"]; ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="font-size:14px" align="center">
                                                        <?php echo $m_ds["description"][0]; ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="font-size:14px" align="center">
                                                        <?php echo $m_ds["description"][1]; ?>
                                                    </td>
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
