<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
    <!-- NAME: FOLLOW UP -->
    <!--[if gte mso 15]>
    <xml>
        <o:OfficeDocumentSettings>
            <o:AllowPNG/>
            <o:PixelsPerInch>96</o:PixelsPerInch>
        </o:OfficeDocumentSettings>
    </xml>
    <![endif]-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $mail->subject }}</title>
    @verbatim
    <style type="text/css">
        p{
            margin:10px 0;
            padding:0;
        }
        table{
            border-collapse:collapse;
        }
        h1,h2,h3,h4,h5,h6{
            display:block;
            margin:0;
            padding:0;
        }
        img,a img{
            border:0;
            height:auto;
            outline:none;
            text-decoration:none;
        }
        body,#bodyTable,#bodyCell{
            height:100%;
            margin:0;
            padding:0;
            width:100%;
        }
        .mcnPreviewText{
            display:none !important;
        }
        #outlook a{
            padding:0;
        }
        img{
            -ms-interpolation-mode:bicubic;
        }
        table{
            mso-table-lspace:0pt;
            mso-table-rspace:0pt;
        }
        .ReadMsgBody{
            width:100%;
        }
        .ExternalClass{
            width:100%;
        }
        p,a,li,td,blockquote{
            mso-line-height-rule:exactly;
        }
        a[href^=tel],a[href^=sms]{
            color:inherit;
            cursor:default;
            text-decoration:none;
        }
        p,a,li,td,body,table,blockquote{
            -ms-text-size-adjust:100%;
            -webkit-text-size-adjust:100%;
        }
        .ExternalClass,.ExternalClass p,.ExternalClass td,.ExternalClass div,.ExternalClass span,.ExternalClass font{
            line-height:100%;
        }
        a[x-apple-data-detectors]{
            color:inherit !important;
            text-decoration:none !important;
            font-size:inherit !important;
            font-family:inherit !important;
            font-weight:inherit !important;
            line-height:inherit !important;
        }
        .templateContainer{
            max-width:600px !important;
        }
        a.mcnButton{
            display:block;
        }
        .mcnImage{
            vertical-align:bottom;
        }
        .mcnTextContent{
            word-break:break-word;
        }
        .mcnTextContent img{
            height:auto !important;
        }
        .mcnDividerBlock{
            table-layout:fixed !important;
        }
        /*
@tab Page
	@section Heading 1
	@style heading 1
	*/
        h1{
            /*@editable*/color:#222222;
            /*@editable*/font-family:Helvetica;
            /*@editable*/font-size:40px;
            /*@editable*/font-style:normal;
            /*@editable*/font-weight:bold;
            /*@editable*/line-height:150%;
            /*@editable*/letter-spacing:normal;
            /*@editable*/text-align:center;
        }
        /*
@tab Page
	@section Heading 2
	@style heading 2
	*/
        h2{
            /*@editable*/color:#222222;
            /*@editable*/font-family:Helvetica;
            /*@editable*/font-size:34px;
            /*@editable*/font-style:normal;
            /*@editable*/font-weight:bold;
            /*@editable*/line-height:150%;
            /*@editable*/letter-spacing:normal;
            /*@editable*/text-align:left;
        }
        /*
@tab Page
	@section Heading 3
	@style heading 3
	*/
        h3{
            /*@editable*/color:#444444;
            /*@editable*/font-family:Helvetica;
            /*@editable*/font-size:22px;
            /*@editable*/font-style:normal;
            /*@editable*/font-weight:bold;
            /*@editable*/line-height:150%;
            /*@editable*/letter-spacing:normal;
            /*@editable*/text-align:center;
        }
        /*
@tab Page
	@section Heading 4
	@style heading 4
	*/
        h4{
            /*@editable*/color:#999999;
            /*@editable*/font-family:Georgia;
            /*@editable*/font-size:20px;
            /*@editable*/font-style:italic;
            /*@editable*/font-weight:normal;
            /*@editable*/line-height:125%;
            /*@editable*/letter-spacing:normal;
            /*@editable*/text-align:left;
        }
        /*
@tab Header
	@section Header Container Style
	*/
        #templateHeader{
            /*@editable*/background-color:#transparent;
            /*@editable*/background-image:none;
            /*@editable*/background-repeat:no-repeat;
            /*@editable*/background-position:50% 50%;
            /*@editable*/background-size:contain;
            /*@editable*/border-top:0;
            /*@editable*/border-bottom:0;
            /*@editable*/padding-top:0px;
            /*@editable*/padding-bottom:0px;
        }
        /*
@tab Header
	@section Header Interior Style
	*/
        .headerContainer{
            /*@editable*/background-color:#transparent;
            /*@editable*/background-image:none;
            /*@editable*/background-repeat:no-repeat;
            /*@editable*/background-position:center;
            /*@editable*/background-size:cover;
            /*@editable*/border-top:0;
            /*@editable*/border-bottom:0;
            /*@editable*/padding-top:0;
            /*@editable*/padding-bottom:0;
        }
        /*
@tab Header
	@section Header Text
	*/
        .headerContainer .mcnTextContent,.headerContainer .mcnTextContent p{
            /*@editable*/color:#808080;
            /*@editable*/font-family:Helvetica;
            /*@editable*/font-size:16px;
            /*@editable*/line-height:150%;
            /*@editable*/text-align:left;
        }
        /*
@tab Header
	@section Header Link
	*/
        .headerContainer .mcnTextContent a,.headerContainer .mcnTextContent p a{
            /*@editable*/color:#00ADD8;
            /*@editable*/font-weight:normal;
            /*@editable*/text-decoration:underline;
        }
        /*
@tab Body
	@section Body Container Style
	*/
        #templateBody{
            /*@editable*/background-color:#transparent;
            /*@editable*/background-image:none;
            /*@editable*/background-repeat:no-repeat;
            /*@editable*/background-position:50% 50%;
            /*@editable*/background-size:contain;
            /*@editable*/border-top:0;
            /*@editable*/border-bottom:0;
            /*@editable*/padding-top:0px;
            /*@editable*/padding-bottom:0px;
        }
        /*
@tab Body
	@section Body Interior Style
	*/
        .bodyContainer{
            /*@editable*/background-color:#f1e4dc;
            /*@editable*/background-image:none;
            /*@editable*/background-repeat:no-repeat;
            /*@editable*/background-position:center;
            /*@editable*/background-size:cover;
            /*@editable*/border-top:0;
            /*@editable*/border-bottom:0;
            /*@editable*/padding-top:0;
            /*@editable*/padding-bottom:0;
        }
        /*
@tab Body
	@section Body Text
	*/
        .bodyContainer .mcnTextContent,.bodyContainer .mcnTextContent p{
            /*@editable*/color:#808080;
            /*@editable*/font-family:Helvetica;
            /*@editable*/font-size:16px;
            /*@editable*/line-height:150%;
            /*@editable*/text-align:left;
        }
        /*
@tab Body
	@section Body Link
	*/
        .bodyContainer .mcnTextContent a,.bodyContainer .mcnTextContent p a{
            /*@editable*/color:#607d8b;
            /*@editable*/font-weight:normal;
            /*@editable*/text-decoration:underline;
        }
        /*
@tab Footer
	@section Footer Style
	*/
        #templateFooter{
            /*@editable*/background-color:#333333;
            /*@editable*/background-image:none;
            /*@editable*/background-repeat:no-repeat;
            /*@editable*/background-position:center;
            /*@editable*/background-size:cover;
            /*@editable*/border-top:0;
            /*@editable*/border-bottom:0;
            /*@editable*/padding-top:45px;
            /*@editable*/padding-bottom:63px;
        }
        /*
@tab Footer
	@section Footer Interior Style
	*/
        .footerContainer{
            /*@editable*/background-color:#transparent;
            /*@editable*/background-image:none;
            /*@editable*/background-repeat:no-repeat;
            /*@editable*/background-position:center;
            /*@editable*/background-size:cover;
            /*@editable*/border-top:0;
            /*@editable*/border-bottom:0;
            /*@editable*/padding-top:0;
            /*@editable*/padding-bottom:0;
        }
        /*
@tab Footer
	@section Footer Text
	*/
        .footerContainer .mcnTextContent,.footerContainer .mcnTextContent p{
            /*@editable*/color:#FFFFFF;
            /*@editable*/font-family:Helvetica;
            /*@editable*/font-size:12px;
            /*@editable*/line-height:150%;
            /*@editable*/text-align:center;
        }
        /*
@tab Footer
	@section Footer Link
	*/
        .footerContainer .mcnTextContent a,.footerContainer .mcnTextContent p a{
            /*@editable*/color:#FFFFFF;
            /*@editable*/font-weight:normal;
            /*@editable*/text-decoration:underline;
        }
        @media only screen and (min-width:768px){
            .templateContainer{
                width:600px !important;
            }

        }	@media only screen and (max-width: 480px){
            body,table,td,p,a,li,blockquote{
                -webkit-text-size-adjust:none !important;
            }

        }	@media only screen and (max-width: 480px){
            body{
                width:100% !important;
                min-width:100% !important;
            }

        }	@media only screen and (max-width: 480px){
            .mcnImage{
                width:100% !important;
            }

        }	@media only screen and (max-width: 480px){
            .mcnCartContainer,.mcnCaptionTopContent,.mcnRecContentContainer,.mcnCaptionBottomContent,.mcnTextContentContainer,.mcnBoxedTextContentContainer,.mcnImageGroupContentContainer,.mcnCaptionLeftTextContentContainer,.mcnCaptionRightTextContentContainer,.mcnCaptionLeftImageContentContainer,.mcnCaptionRightImageContentContainer,.mcnImageCardLeftTextContentContainer,.mcnImageCardRightTextContentContainer{
                max-width:100% !important;
                width:100% !important;
            }

        }	@media only screen and (max-width: 480px){
            .mcnBoxedTextContentContainer{
                min-width:100% !important;
            }

        }	@media only screen and (max-width: 480px){
            .mcnImageGroupContent{
                padding:9px !important;
            }

        }	@media only screen and (max-width: 480px){
            .mcnCaptionLeftContentOuter .mcnTextContent,.mcnCaptionRightContentOuter .mcnTextContent{
                padding-top:9px !important;
            }

        }	@media only screen and (max-width: 480px){
            .mcnImageCardTopImageContent,.mcnCaptionBlockInner .mcnCaptionTopContent:last-child .mcnTextContent{
                padding-top:18px !important;
            }

        }	@media only screen and (max-width: 480px){
            .mcnImageCardBottomImageContent{
                padding-bottom:9px !important;
            }

        }	@media only screen and (max-width: 480px){
            .mcnImageGroupBlockInner{
                padding-top:0 !important;
                padding-bottom:0 !important;
            }

        }	@media only screen and (max-width: 480px){
            .mcnImageGroupBlockOuter{
                padding-top:9px !important;
                padding-bottom:9px !important;
            }

        }	@media only screen and (max-width: 480px){
            .mcnTextContent,.mcnBoxedTextContentColumn{
                padding-right:18px !important;
                padding-left:18px !important;
            }

        }	@media only screen and (max-width: 480px){
            .mcnImageCardLeftImageContent,.mcnImageCardRightImageContent{
                padding-right:18px !important;
                padding-bottom:0 !important;
                padding-left:18px !important;
            }

        }	@media only screen and (max-width: 480px){
            .mcpreview-image-uploader{
                display:none !important;
                width:100% !important;
            }

        }	@media only screen and (max-width: 480px){
            /*
@tab Mobile Styles
	@section Heading 1
	@tip Make the first-level headings larger in size for better readability on small screens.
	*/
            h1{
                /*@editable*/font-size:30px !important;
                /*@editable*/line-height:125% !important;
            }

        }	@media only screen and (max-width: 480px){
            /*
@tab Mobile Styles
	@section Heading 2
	@tip Make the second-level headings larger in size for better readability on small screens.
	*/
            h2{
                /*@editable*/font-size:26px !important;
                /*@editable*/line-height:125% !important;
            }

        }	@media only screen and (max-width: 480px){
            /*
@tab Mobile Styles
	@section Heading 3
	@tip Make the third-level headings larger in size for better readability on small screens.
	*/
            h3{
                /*@editable*/font-size:20px !important;
                /*@editable*/line-height:150% !important;
            }

        }	@media only screen and (max-width: 480px){
            /*
@tab Mobile Styles
	@section Heading 4
	@tip Make the fourth-level headings larger in size for better readability on small screens.
	*/
            h4{
                /*@editable*/font-size:18px !important;
                /*@editable*/line-height:150% !important;
            }

        }	@media only screen and (max-width: 480px){
            /*
@tab Mobile Styles
	@section Boxed Text
	@tip Make the boxed text larger in size for better readability on small screens. We recommend a font size of at least 16px.
	*/
            .mcnBoxedTextContentContainer .mcnTextContent,.mcnBoxedTextContentContainer .mcnTextContent p{
                /*@editable*/font-size:14px !important;
                /*@editable*/line-height:150% !important;
            }

        }	@media only screen and (max-width: 480px){
            /*
@tab Mobile Styles
	@section Header Text
	@tip Make the header text larger in size for better readability on small screens.
	*/
            .headerContainer .mcnTextContent,.headerContainer .mcnTextContent p{
                /*@editable*/font-size:16px !important;
                /*@editable*/line-height:150% !important;
            }

        }	@media only screen and (max-width: 480px){
            /*
@tab Mobile Styles
	@section Body Text
	@tip Make the body text larger in size for better readability on small screens. We recommend a font size of at least 16px.
	*/
            .bodyContainer .mcnTextContent,.bodyContainer .mcnTextContent p{
                /*@editable*/font-size:16px !important;
                /*@editable*/line-height:150% !important;
            }

        }	@media only screen and (max-width: 480px){
            /*
@tab Mobile Styles
	@section Footer Text
	@tip Make the footer content text larger in size for better readability on small screens.
	*/
            .footerContainer .mcnTextContent,.footerContainer .mcnTextContent p{
                /*@editable*/font-size:14px !important;
                /*@editable*/line-height:150% !important;
            }

        }</style>
@endverbatim
</head>
<body>
<!--*|IF:MC_PREVIEW_TEXT|*-->
<!--[if !gte mso 9]><!----><span class="mcnPreviewText" style="display:none; font-size:0px; line-height:0px; max-height:0px; max-width:0px; opacity:0; overflow:hidden; visibility:hidden; mso-hide:all;">*|MC_PREVIEW_TEXT|*</span><!--<![endif]-->
<!--*|END:IF|*-->
<center>
    <table align="center" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" id="bodyTable">
        <tr>
            <td align="center" valign="top" id="bodyCell">
                <!-- BEGIN TEMPLATE // -->
                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                    <tr>
                        <td align="center" valign="top" id="templateHeader" data-template-container>
                            <!--[if gte mso 9]>
                            <table align="center" border="0" cellspacing="0" cellpadding="0" width="600" style="width:600px;">
                                <tr>
                                    <td align="center" valign="top" width="600" style="width:600px;">
                            <![endif]-->
                            <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" class="templateContainer">
                                <tr>
                                    <td valign="top" class="headerContainer"><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnImageCardBlock">
                                            <tbody class="mcnImageCardBlockOuter">
                                            <tr>
                                                <td class="mcnImageCardBlockInner" valign="top" style="padding-top:9px; padding-right:18px; padding-bottom:9px; padding-left:18px;">



                                                    <table border="0" cellpadding="0" cellspacing="0" class="mcnImageCardRightContentOuter" width="100%">
                                                        <tbody><tr>
                                                            <td align="center" valign="top" class="mcnImageCardRightContentInner" style="padding: 0px;border: 1px none #4CAAD8;">
                                                                <table align="left" border="0" cellpadding="0" cellspacing="0" class="mcnImageCardRightImageContentContainer">
                                                                    <tbody><tr>
                                                                        <td class="mcnImageCardRightImageContentE2E " align="center" valign="top" style="padding-top:0px; padding-right:0; padding-bottom:0px; padding-left:0px;">



                                                                            <img alt="" src="https://gallery.mailchimp.com/1c1375bfdec91be7e90724ea4/images/3f2450c1-565b-4d06-913b-a4df250430d2.png" width="192" style="max-width:238px;" class="mcnImage">



                                                                        </td>
                                                                    </tr>
                                                                    </tbody></table>
                                                                <table class="mcnImageCardRightTextContentContainer" align="right" border="0" cellpadding="0" cellspacing="0" width="352">
                                                                    <tbody><tr>
                                                                        <td valign="top" class="mcnTextContent" style="padding-right: 18px;padding-top: 18px;padding-bottom: 18px;color: #F2F2F2;font-family: Helvetica;font-size: 14px;font-weight: normal;line-height: 100%;text-align: center;">
                                                                            <h2 class="null" style="text-align: center;"><span style="color:#FFB300">Intégration de l'UTT Édition 2021<br>
Mail 2/3</span></h2>

                                                                        </td>
                                                                    </tr>
                                                                    </tbody></table>
                                                            </td>
                                                        </tr>
                                                        </tbody></table>


                                                </td>
                                            </tr>
                                            </tbody>
                                        </table></td>
                                </tr>
                            </table>
                            <!--[if gte mso 9]>
                            </td>
                            </tr>
                            </table>
                            <![endif]-->
                        </td>
                    </tr>
                    <tr>
                        <td align="center" valign="top" id="templateBody" data-template-container>
                            <!--[if gte mso 9]>
                            <table align="center" border="0" cellspacing="0" cellpadding="0" width="600" style="width:600px;">
                                <tr>
                                    <td align="center" valign="top" width="600" style="width:600px;">
                            <![endif]-->
                            <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" class="templateContainer">
                                <tr>
                                    <td valign="top" class="bodyContainer"><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnDividerBlock" style="min-width:100%;">
                                            <tbody class="mcnDividerBlockOuter">
                                            <tr>
                                                <td class="mcnDividerBlockInner" style="min-width: 100%; padding: 9px 18px 0px;">
                                                    <table class="mcnDividerContent" border="0" cellpadding="0" cellspacing="0" width="100%" style="min-width:100%;">
                                                        <tbody><tr>
                                                            <td>
                                                                <span></span>
                                                            </td>
                                                        </tr>
                                                        </tbody></table>
                                                    <!--
                                                                    <td class="mcnDividerBlockInner" style="padding: 18px;">
                                                                    <hr class="mcnDividerContent" style="border-bottom-color:none; border-left-color:none; border-right-color:none; border-bottom-width:0; border-left-width:0; border-right-width:0; margin-top:0; margin-right:0; margin-bottom:0; margin-left:0;" />
                                                    -->
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnBoxedTextBlock" style="min-width:100%;">
                                            <!--[if gte mso 9]>
                                            <table align="center" border="0" cellspacing="0" cellpadding="0" width="100%">
                                            <![endif]-->
                                            <tbody class="mcnBoxedTextBlockOuter">
                                            <tr>
                                                <td valign="top" class="mcnBoxedTextBlockInner">

                                                    <!--[if gte mso 9]>
                                                    <td align="center" valign="top" ">
                                                    <![endif]-->
                                                    <table align="left" border="0" cellpadding="0" cellspacing="0" width="100%" style="min-width:100%;" class="mcnBoxedTextContentContainer">
                                                        <tbody><tr>

                                                            <td style="padding-top:9px; padding-left:18px; padding-bottom:9px; padding-right:18px;">

                                                                <table border="0" cellpadding="18" cellspacing="0" class="mcnTextContentContainer" width="100%" style="min-width: 100% !important;background-color: #FFB300;">
                                                                    <tbody><tr>
                                                                        <td valign="top" class="mcnTextContent" style="color: #F2F2F2;font-family: Helvetica;font-size: 14px;font-weight: normal;text-align: center;">
                                                                            <span style="font-size:16px">Il était une fois, dans un royaume perdu entre les vignes et les mares aux canards un fort dressé en l’honneur du savoir et des banquets.</span>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody></table>
                                                            </td>
                                                        </tr>
                                                        </tbody></table>
                                                    <!--[if gte mso 9]>
                                                    </td>
                                                    <![endif]-->

                                                    <!--[if gte mso 9]>
                                                    </tr>
                                                    </table>
                                                    <![endif]-->
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnTextBlock" style="min-width:100%;">
                                            <tbody class="mcnTextBlockOuter">
                                            <tr>
                                                <td valign="top" class="mcnTextBlockInner" style="padding-top:9px;">
                                                    <!--[if mso]>
                                                    <table align="left" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;">
                                                        <tr>
                                                    <![endif]-->

                                                    <!--[if mso]>
                                                    <td valign="top" width="600" style="width:600px;">
                                                    <![endif]-->
                                                    <table align="left" border="0" cellpadding="0" cellspacing="0" style="max-width:100%; min-width:100%;" width="100%" class="mcnTextContentContainer">
                                                        <tbody><tr>

                                                            <td valign="top" class="mcnTextContent" style="padding-top:0; padding-right:18px; padding-bottom:9px; padding-left:18px;">

                                                                <div style="text-align: justify;">
                                                                    <p>Rien ne semblait freiner l’essor de cette terre de jeunesse et d’innovation, jusqu’au jour où la femme d’Épiméthée, la belle Pandore, relâcha sur le monde la maladie et la vieillesse. Nos pauvres étudiants hédonistes firent face aux conséquences nouvelles d’une vie trop depuis longtemps hiératique. Ils découvrirent ainsi le rhume, la grippe, le scorbut, la peste, et pire que tout, la gueule de bois. Les Dieux regrettèrent d’avoir relâché pareil fléau sur un peuple si beau et intelligent, aussi fort et désirable. Ils inventèrent alors la sécurité sociale étudiante et la possibilité de faire ostentatoirement de la publicité pour un quelconque partenaire financier.<br>
                                                                        <br>
                                                                        Ils&nbsp;offrirent à ces jeunes amoureux de la vie la</p>
                                                                </div>

                                                            </td>
                                                        </tr>
                                                        </tbody></table>
                                                    <!--[if mso]>
                                                    </td>
                                                    <![endif]-->

                                                    <!--[if mso]>
                                                    </tr>
                                                    </table>
                                                    <![endif]-->
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnImageBlock" style="min-width:100%;">
                                            <tbody class="mcnImageBlockOuter">
                                            <tr>
                                                <td valign="top" style="padding:9px" class="mcnImageBlockInner">
                                                    <table align="left" width="100%" border="0" cellpadding="0" cellspacing="0" class="mcnImageContentContainer" style="min-width:100%;">
                                                        <tbody><tr>
                                                            <td class="mcnImageContent" valign="top" style="padding-right: 9px; padding-left: 9px; padding-top: 0; padding-bottom: 0; text-align:center;">


                                                                <img align="center" alt="" src="https://gallery.mailchimp.com/1c1375bfdec91be7e90724ea4/images/ab2e16ea-105c-468b-aba1-2dc02ef79c8b.png" width="400" style="max-width:800px; padding-bottom: 0; display: inline !important; vertical-align: bottom;" class="mcnImage">


                                                            </td>
                                                        </tr>
                                                        </tbody></table>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnTextBlock" style="min-width:100%;">
                                            <tbody class="mcnTextBlockOuter">
                                            <tr>
                                                <td valign="top" class="mcnTextBlockInner" style="padding-top:9px;">
                                                    <!--[if mso]>
                                                    <table align="left" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;">
                                                        <tr>
                                                    <![endif]-->

                                                    <!--[if mso]>
                                                    <td valign="top" width="600" style="width:600px;">
                                                    <![endif]-->
                                                    <table align="left" border="0" cellpadding="0" cellspacing="0" style="max-width:100%; min-width:100%;" width="100%" class="mcnTextContentContainer">
                                                        <tbody><tr>

                                                            <td valign="top" class="mcnTextContent" style="padding-top:0; padding-right:18px; padding-bottom:9px; padding-left:18px;">

                                                                <div style="text-align: justify;">
                                                                    <p>La sécurité sociale étudiante choisie par 80&nbsp;% des étudiants de l’Est de la France et par ton Bureau Des Étudiants.&nbsp;Toutes les informations sont disponibles sur leur site web :</p>
                                                                </div>

                                                            </td>
                                                        </tr>
                                                        </tbody></table>
                                                    <!--[if mso]>
                                                    </td>
                                                    <![endif]-->

                                                    <!--[if mso]>
                                                    </tr>
                                                    </table>
                                                    <![endif]-->
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowBlock" style="min-width:100%;">
                                            <tbody class="mcnFollowBlockOuter">
                                            <tr>
                                                <td align="center" valign="top" style="padding:9px" class="mcnFollowBlockInner">
                                                    <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowContentContainer" style="min-width:100%;">
                                                        <tbody><tr>
                                                            <td align="center" style="padding-left:9px;padding-right:9px;">
                                                                <table border="0" cellpadding="0" cellspacing="0" width="100%" style="min-width:100%;" class="mcnFollowContent">
                                                                    <tbody><tr>
                                                                        <td align="center" valign="top" style="padding-top:9px; padding-right:9px; padding-left:9px;">
                                                                            <table align="center" border="0" cellpadding="0" cellspacing="0">
                                                                                <tbody><tr>
                                                                                    <td align="center" valign="top">
                                                                                        <!--[if mso]>
                                                                                        <table align="center" border="0" cellspacing="0" cellpadding="0">
                                                                                            <tr>
                                                                                        <![endif]-->

                                                                                        <!--[if mso]>
                                                                                        <td align="center" valign="top">
                                                                                        <![endif]-->


                                                                                        <table align="left" border="0" cellpadding="0" cellspacing="0" style="display:inline;">
                                                                                            <tbody><tr>
                                                                                                <td valign="top" style="padding-right:10px; padding-bottom:9px;" class="mcnFollowContentItemContainer">
                                                                                                    <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowContentItem">
                                                                                                        <tbody><tr>
                                                                                                            <td align="left" valign="middle" style="padding-top:5px; padding-right:10px; padding-bottom:5px; padding-left:9px;">
                                                                                                                <table align="left" border="0" cellpadding="0" cellspacing="0" width="">
                                                                                                                    <tbody><tr>

                                                                                                                        <td align="center" valign="middle" width="24" class="mcnFollowIconContent">
                                                                                                                            <a href="http://www.mgel.fr/" target="_blank"><img src="https://cdn-images.mailchimp.com/icons/social-block-v2/color-link-48.png" style="display:block;" height="24" width="24" class=""></a>
                                                                                                                        </td>


                                                                                                                        <td align="left" valign="middle" class="mcnFollowTextContent" style="padding-left:5px;">
                                                                                                                            <a href="http://www.mgel.fr/" target="" style="font-family: Arial;font-size: 11px;text-decoration: none;color: #202020;font-weight: normal;">Site web</a>
                                                                                                                        </td>

                                                                                                                    </tr>
                                                                                                                    </tbody></table>
                                                                                                            </td>
                                                                                                        </tr>
                                                                                                        </tbody></table>
                                                                                                </td>
                                                                                            </tr>
                                                                                            </tbody></table>

                                                                                        <!--[if mso]>
                                                                                        </td>
                                                                                        <![endif]-->

                                                                                        <!--[if mso]>
                                                                                        <td align="center" valign="top">
                                                                                        <![endif]-->


                                                                                        <table align="left" border="0" cellpadding="0" cellspacing="0" style="display:inline;">
                                                                                            <tbody><tr>
                                                                                                <td valign="top" style="padding-right:0; padding-bottom:9px;" class="mcnFollowContentItemContainer">
                                                                                                    <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowContentItem">
                                                                                                        <tbody><tr>
                                                                                                            <td align="left" valign="middle" style="padding-top:5px; padding-right:10px; padding-bottom:5px; padding-left:9px;">
                                                                                                                <table align="left" border="0" cellpadding="0" cellspacing="0" width="">
                                                                                                                    <tbody><tr>

                                                                                                                        <td align="center" valign="middle" width="24" class="mcnFollowIconContent">
                                                                                                                            <a href="https://www.facebook.com/MGEL.fan" target="_blank"><img src="https://cdn-images.mailchimp.com/icons/social-block-v2/color-facebook-48.png" style="display:block;" height="24" width="24" class=""></a>
                                                                                                                        </td>


                                                                                                                        <td align="left" valign="middle" class="mcnFollowTextContent" style="padding-left:5px;">
                                                                                                                            <a href="https://www.facebook.com/MGEL.fan" target="" style="font-family: Arial;font-size: 11px;text-decoration: none;color: #202020;font-weight: normal;">Facebook</a>
                                                                                                                        </td>

                                                                                                                    </tr>
                                                                                                                    </tbody></table>
                                                                                                            </td>
                                                                                                        </tr>
                                                                                                        </tbody></table>
                                                                                                </td>
                                                                                            </tr>
                                                                                            </tbody></table>

                                                                                        <!--[if mso]>
                                                                                        </td>
                                                                                        <![endif]-->

                                                                                        <!--[if mso]>
                                                                                        </tr>
                                                                                        </table>
                                                                                        <![endif]-->
                                                                                    </td>
                                                                                </tr>
                                                                                </tbody></table>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody></table>
                                                            </td>
                                                        </tr>
                                                        </tbody></table>

                                                </td>
                                            </tr>
                                            </tbody>
                                        </table><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnBoxedTextBlock" style="min-width:100%;">
                                            <!--[if gte mso 9]>
                                            <table align="center" border="0" cellspacing="0" cellpadding="0" width="100%">
                                            <![endif]-->
                                            <tbody class="mcnBoxedTextBlockOuter">
                                            <tr>
                                                <td valign="top" class="mcnBoxedTextBlockInner">

                                                    <!--[if gte mso 9]>
                                                    <td align="center" valign="top" ">
                                                    <![endif]-->
                                                    <table align="left" border="0" cellpadding="0" cellspacing="0" width="100%" style="min-width:100%;" class="mcnBoxedTextContentContainer">
                                                        <tbody><tr>

                                                            <td style="padding-top:9px; padding-left:18px; padding-bottom:9px; padding-right:18px;">

                                                                <table border="0" cellpadding="18" cellspacing="0" class="mcnTextContentContainer" width="100%" style="min-width: 100% !important;background-color: #4CAF50;">
                                                                    <tbody><tr>
                                                                        <td valign="top" class="mcnTextContent" style="color: #F2F2F2;font-family: Helvetica;font-size: 14px;font-weight: normal;text-align: center;">
                                                                            <p style="color: #F2F2F2;font-family: Helvetica;font-size: 14px;font-weight: normal;text-align: center;"><strong>Fin.</strong></p>

                                                                        </td>
                                                                    </tr>
                                                                    </tbody></table>
                                                            </td>
                                                        </tr>
                                                        </tbody></table>
                                                    <!--[if gte mso 9]>
                                                    </td>
                                                    <![endif]-->

                                                    <!--[if gte mso 9]>
                                                    </tr>
                                                    </table>
                                                    <![endif]-->
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table></td>
                                </tr>
                            </table>
                            <!--[if gte mso 9]>
                            </td>
                            </tr>
                            </table>
                            <![endif]-->
                        </td>
                    </tr>
                    <tr>
                        <td align="center" valign="top" id="templateFooter" data-template-container>
                            <!--[if gte mso 9]>
                            <table align="center" border="0" cellspacing="0" cellpadding="0" width="600" style="width:600px;">
                                <tr>
                                    <td align="center" valign="top" width="600" style="width:600px;">
                            <![endif]-->
                            <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" class="templateContainer">
                                <tr>
                                    <td valign="top" class="footerContainer"><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnTextBlock" style="min-width:100%;">
                                            <tbody class="mcnTextBlockOuter">
                                            <tr>
                                                <td valign="top" class="mcnTextBlockInner" style="padding-top:9px;">
                                                    <!--[if mso]>
                                                    <table align="left" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;">
                                                        <tr>
                                                    <![endif]-->

                                                    <!--[if mso]>
                                                    <td valign="top" width="600" style="width:600px;">
                                                    <![endif]-->
                                                    <table align="left" border="0" cellpadding="0" cellspacing="0" style="max-width:100%; min-width:100%;" width="100%" class="mcnTextContentContainer">
                                                        <tbody><tr>

                                                            <td valign="top" class="mcnTextContent" style="padding: 0px 18px 9px; text-align: center;">

                                                                <p dir="ltr" style="text-align: center;"><span style="font-size:14px">Pour toute question n'hésite pas à nous contacter ou venir nous voir !</span></p>

                                                            </td>
                                                        </tr>
                                                        </tbody></table>
                                                    <!--[if mso]>
                                                    </td>
                                                    <![endif]-->

                                                    <!--[if mso]>
                                                    </tr>
                                                    </table>
                                                    <![endif]-->
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowBlock" style="min-width:100%;">
                                            <tbody class="mcnFollowBlockOuter">
                                            <tr>
                                                <td align="center" valign="top" style="padding:9px" class="mcnFollowBlockInner">
                                                    <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowContentContainer" style="min-width:100%;">
                                                        <tbody><tr>
                                                            <td align="center" style="padding-left:9px;padding-right:9px;">
                                                                <table border="0" cellpadding="0" cellspacing="0" width="100%" style="min-width: 100%;background-color: #FFB300;" class="mcnFollowContent">
                                                                    <tbody><tr>
                                                                        <td align="center" valign="top" style="padding-top:9px; padding-right:9px; padding-left:9px;">
                                                                            <table align="center" border="0" cellpadding="0" cellspacing="0">
                                                                                <tbody><tr>
                                                                                    <td align="center" valign="top">
                                                                                        <!--[if mso]>
                                                                                        <table align="center" border="0" cellspacing="0" cellpadding="0">
                                                                                            <tr>
                                                                                        <![endif]-->

                                                                                        <!--[if mso]>
                                                                                        <td align="center" valign="top">
                                                                                        <![endif]-->


                                                                                        <table align="left" border="0" cellpadding="0" cellspacing="0" style="display:inline;">
                                                                                            <tbody><tr>
                                                                                                <td valign="top" style="padding-right:10px; padding-bottom:9px;" class="mcnFollowContentItemContainer">
                                                                                                    <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowContentItem">
                                                                                                        <tbody><tr>
                                                                                                            <td align="left" valign="middle" style="padding-top:5px; padding-right:10px; padding-bottom:5px; padding-left:9px;">
                                                                                                                <table align="left" border="0" cellpadding="0" cellspacing="0" width="">
                                                                                                                    <tbody><tr>

                                                                                                                        <td align="center" valign="middle" width="24" class="mcnFollowIconContent">
                                                                                                                            <a href="https://www.facebook.com/integration.utt" target="_blank"><img src="https://cdn-images.mailchimp.com/icons/social-block-v2/outline-light-facebook-48.png" style="display:block;" height="24" width="24" class=""></a>
                                                                                                                        </td>


                                                                                                                    </tr>
                                                                                                                    </tbody></table>
                                                                                                            </td>
                                                                                                        </tr>
                                                                                                        </tbody></table>
                                                                                                </td>
                                                                                            </tr>
                                                                                            </tbody></table>

                                                                                        <!--[if mso]>
                                                                                        </td>
                                                                                        <![endif]-->

                                                                                        <!--[if mso]>
                                                                                        <td align="center" valign="top">
                                                                                        <![endif]-->


                                                                                        <table align="left" border="0" cellpadding="0" cellspacing="0" style="display:inline;">
                                                                                            <tbody><tr>
                                                                                                <td valign="top" style="padding-right:10px; padding-bottom:9px;" class="mcnFollowContentItemContainer">
                                                                                                    <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowContentItem">
                                                                                                        <tbody><tr>
                                                                                                            <td align="left" valign="middle" style="padding-top:5px; padding-right:10px; padding-bottom:5px; padding-left:9px;">
                                                                                                                <table align="left" border="0" cellpadding="0" cellspacing="0" width="">
                                                                                                                    <tbody><tr>

                                                                                                                        <td align="center" valign="middle" width="24" class="mcnFollowIconContent">
                                                                                                                            <a href="http://integration.utt.fr" target="_blank"><img src="https://cdn-images.mailchimp.com/icons/social-block-v2/outline-light-link-48.png" style="display:block;" height="24" width="24" class=""></a>
                                                                                                                        </td>


                                                                                                                    </tr>
                                                                                                                    </tbody></table>
                                                                                                            </td>
                                                                                                        </tr>
                                                                                                        </tbody></table>
                                                                                                </td>
                                                                                            </tr>
                                                                                            </tbody></table>

                                                                                        <!--[if mso]>
                                                                                        </td>
                                                                                        <![endif]-->

                                                                                        <!--[if mso]>
                                                                                        <td align="center" valign="top">
                                                                                        <![endif]-->


                                                                                        <table align="left" border="0" cellpadding="0" cellspacing="0" style="display:inline;">
                                                                                            <tbody><tr>
                                                                                                <td valign="top" style="padding-right:0; padding-bottom:9px;" class="mcnFollowContentItemContainer">
                                                                                                    <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowContentItem">
                                                                                                        <tbody><tr>
                                                                                                            <td align="left" valign="middle" style="padding-top:5px; padding-right:10px; padding-bottom:5px; padding-left:9px;">
                                                                                                                <table align="left" border="0" cellpadding="0" cellspacing="0" width="">
                                                                                                                    <tbody><tr>

                                                                                                                        <td align="center" valign="middle" width="24" class="mcnFollowIconContent">
                                                                                                                            <a href="mailto:integration@utt.fr" target="_blank"><img src="https://cdn-images.mailchimp.com/icons/social-block-v2/outline-light-forwardtofriend-48.png" style="display:block;" height="24" width="24" class=""></a>
                                                                                                                        </td>


                                                                                                                    </tr>
                                                                                                                    </tbody></table>
                                                                                                            </td>
                                                                                                        </tr>
                                                                                                        </tbody></table>
                                                                                                </td>
                                                                                            </tr>
                                                                                            </tbody></table>

                                                                                        <!--[if mso]>
                                                                                        </td>
                                                                                        <![endif]-->

                                                                                        <!--[if mso]>
                                                                                        </tr>
                                                                                        </table>
                                                                                        <![endif]-->
                                                                                    </td>
                                                                                </tr>
                                                                                </tbody></table>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody></table>
                                                            </td>
                                                        </tr>
                                                        </tbody></table>

                                                </td>
                                            </tr>
                                            </tbody>
                                        </table><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnTextBlock" style="min-width:100%;">
                                            <tbody class="mcnTextBlockOuter">
                                            <tr>
                                                <td valign="top" class="mcnTextBlockInner" style="padding-top:9px;">
                                                    <!--[if mso]>
                                                    <table align="left" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;">
                                                        <tr>
                                                    <![endif]-->

                                                    <!--[if mso]>
                                                    <td valign="top" width="600" style="width:600px;">
                                                    <![endif]-->
                                                    <table align="left" border="0" cellpadding="0" cellspacing="0" style="max-width:100%; min-width:100%;" width="100%" class="mcnTextContentContainer">
                                                        <tbody><tr>

                                                            <td valign="top" class="mcnTextContent" style="padding-top:0; padding-right:18px; padding-bottom:9px; padding-left:18px;">

                                                                <p dir="ltr" style="text-align: center;">Vous ne voulez plus recevoir ces mails ?<br>
                                                                    <a href="{{ $unsuscribe_link }}" target="_blank">Vous pouvez&nbsp;</a><a href="{{ $unsuscribe_link }}">vous désinscrire de la liste</a>.</p>

                                                            </td>
                                                        </tr>
                                                        </tbody></table>
                                                    <!--[if mso]>
                                                    </td>
                                                    <![endif]-->

                                                    <!--[if mso]>
                                                    </tr>
                                                    </table>
                                                    <![endif]-->
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table></td>
                                </tr>
                            </table>
                            <!--[if gte mso 9]>
                            </td>
                            </tr>
                            </table>
                            <![endif]-->
                        </td>
                    </tr>
                </table>
                <!-- // END TEMPLATE -->
                @if($mail_id)
                    <img src="{{ url()->route('emails.opening', ['mail_id' => $mail_id]) }}" height="1" width="1" class="">
                @endif
            </td>
        </tr>
    </table>
</center>
</body>
</html>
