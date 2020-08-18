@extends('emails.master_layout')
@section('title')
@endsection
@section('content')
<table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnTextBlock" style="min-width:100%;">
  <tbody class="mcnTextBlockOuter">
    <tr>
      <td valign="top" class="mcnTextBlockInner" style="padding-top:9px;">
        <table align="left" border="0" cellpadding="0" cellspacing="0" style="max-width:100%; min-width:100%;" width="100%" class="mcnTextContentContainer">
          <tbody>
            <tr>
              <td valign="top" class="mcnTextContent" style="padding: 0px 18px 9px;color: #222222;font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, Verdana, sans-serif;font-size: 14px;line-height: 150%;text-align: justify;">
                <h1 style="text-align: center;">
                  <span style="color:#E74360">
                    <span style="font-family:merriweather sans,helvetica neue,helvetica,arial,sans-serif">
                      <strong>
                        <span style="font-size:20px">Bonjour, nouveaux chevaliers de l’ellipse !</span>
                      </strong>
                    </span>
                  </span>
                </h1>
              </td>
            </tr>
          </tbody>
        </table>
      </td>
    </tr>
  </tbody>
</table>
<table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnTextBlock" style="min-width:100%;">
  <tbody class="mcnTextBlockOuter">
    <tr>
      <td valign="top" class="mcnTextBlockInner" style="padding-top:9px;">
        <table align="left" border="0" cellpadding="0" cellspacing="0" style="max-width:100%; min-width:100%;" width="100%" class="mcnTextContentContainer">
          <tbody>
            <tr>
              <td valign="top" class="mcnTextContent" style="padding: 0px 18px 9px;color: #222222;font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, Verdana, sans-serif;font-size: 14px;line-height: 150%;text-align: justify;">
                <div style="text-align: justify;">
                  <span style="font-family:helvetica neue,helvetica,arial,verdana,sans-serif">
                    <span style="color:#696969">
                      <span style="font-size:14px">Sachez, jeunes troublions, qu’il y a en ce monde deux&nbsp;types de chevaliers, ceux qui ont un flingue, et ceux qui creusent. Attendez. Non, ce n’est pas ça... Voilà, ce sont : les chevaliers errants qui tel le vaillant Lancelot défendent la veuve et l’orphelin sans refuge ni frontière, et ceux qui apprécient le confort relatif d’un toit quand vient l’hiver. Si vous appartenez à cette seconde catégorie et que vous n’avez pas encore trouvé de château pour entreposer votre armure et votre baldaquin, nous serions enchantés de vous présenter l’un de nos plus fervents mécènes&nbsp;:&nbsp;</br></span>
                    </span>
                  </span>
                </div>
		<div style="text-align: center;margin: 10px auto;">
			<strong>&nbsp;Yves Damonte, illustre agent immobilier troyen.&nbsp;</br>
			</strong>
			<a href="http://www.yves-damonte.fr/" target="" style="font-family: Arial;text-decoration: none;color: blue;font-weight: normal;">www.yves-damonte.fr</a>
		</div>
		<div style="text-align: center;margin: 10px auto;">
			<strong>Tu peux aussi le contacter :<br>03.25.82.83.84 </br><a href="mailto:damonte.immo@wanadoo.fr" target="" style="font-family: Arial;text-decoration: none;color: #202020;font-weight: normal;">damonte.immo@wanadoo.fr</a>
			</strong>
		</div>
		<table align="left" border="0" cellpadding="0" cellspacing="0" width="100%" style="min-width:100%;" class="mcnBoxedTextContentContainer">
                <tbody>
                    <tr>
                    <td style="padding-top:9px; padding-left:18px; padding-bottom:9px; padding-right:18px;">
                        <table border="0" cellpadding="18" cellspacing="0" class="mcnTextContentContainer" width="100%" style="min-width: 100% !important;background-color: #4CAF50;">
                            <tbody><tr>
                                <td valign="top" class="mcnTextContent" style="color: #F2F2F2;font-family: Helvetica;font-size: 14px;font-weight: normal;text-align: left;">
                                    <p style="color: #F2F2F2;font-family: Helvetica;font-size: 14px;font-weight: normal;text-align: left;"><strong>Citation :</strong></p>

                                    <p style="color: #F2F2F2;font-family: Helvetica;font-size: 14px;font-weight: normal;text-align: left;">Comme un sage l’a dit autrefois, mieux vaut avoir un logement que pas de parent. Personne n’a jamais compris ce qu’il voulait dire.</p>

                                    <div style="text-align: left;">&nbsp;</div>

                                </td>
                            </tr>
                            </tbody></table>
                    </td>
                </tr>
                </tbody></table>
              </td>
            </tr>
          </tbody>
        </table>
      </td>
    </tr>
  </tbody>
</table>

@include('emails.parts.publicity-explained')

@endsection
