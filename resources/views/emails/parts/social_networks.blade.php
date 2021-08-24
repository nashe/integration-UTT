<div style="background-color: #E74360; text-align: center; padding: 15px">
  <span style="font-family:merriweather sans,helvetica neue,helvetica,arial,sans-serif; font-size: 1.3em; color: #FFFFFF">
	<strong>Rejoins nous sur les réseaux !</strong>
  </span>
</div>

<div style="margin: 10px">
	<div style="text-align: center; margin-bottom: 10px;">
	  <span style="font-family:merriweather sans,helvetica neue,helvetica,arial,sans-serif;">
		On sera présent sur les réseaux tout l’été pour te tenir informé(e), te partager des astuces, te faire découvrir l’équipe qui est derrière toute l’intégration, et plein d’autres trucs trop cool !
        @if($user->isNewcomer())
		<br>&nbsp;<br>
		Ah et aussi, on t'invites à rejoindre le serveur discord de l'intégration, tu pourras y poser toutes les questions que tu veux.
	    @endif
	  </span>
	</div>

    @if($user && $user->isNewcomer())
    <div style="background-color: #E74360; margin: auto; padding: 10px 10px; text-align: center; width: max-content;">
      <a href="{{ Config::get('services.socialNetwork.facebook.groupeNouveaux') }}" target="_blank" style="color: #FFFFFF; text-decoration: none;font-size: 1em;line-height: 1.3333333;">Clique pour rejoindre le serveur discord <br><strong> Intégration UTT {{ date("Y") }}</strong></a>
	</div>
    @endif
</div>


<table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowBlock" style="min-width:100%;">
  <tbody class="mcnFollowBlockOuter">
     <tr>
        <td align="center" valign="top" style="margin:10px" class="mcnFollowBlockInner">
           <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowContentContainer" style="min-width:100%;">
              <tbody>
                 <tr>
                    <td align="center" style="padding-left:9px;padding-right:9px;">
                       <table border="0" cellpadding="0" cellspacing="0" width="100%" style="min-width:100%;" class="mcnFollowContent">
                          <tbody>
                             <tr>
                                <td align="center" valign="top" style="padding-top:9px; padding-right:9px; padding-left:9px;">
                                   <table align="center" border="0" cellpadding="0" cellspacing="0">
                                      <tbody>
                                         <tr>
                                            <td align="center" valign="top">
                                               <table align="left" border="0" cellpadding="0" cellspacing="0" style="display:inline;">
                                                  <tbody>
                                                     <tr>
                                                        <td valign="top" style="padding-right:10px; padding-bottom:9px;" class="mcnFollowContentItemContainer">
                                                           <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowContentItem">
                                                              <tbody>
                                                                 <tr>
                                                                    <td align="left" valign="middle" style="padding-top:5px; padding-right:10px; padding-bottom:5px; padding-left:9px;">
                                                                       <table align="left" border="0" cellpadding="0" cellspacing="0" width="">
                                                                          <tbody>
                                                                             <tr>
                                                                                <td align="center" valign="middle" width="24" class="mcnFollowIconContent">
                                                                                   <a href="https://www.facebook.com/bde.utt/" target="_blank"><img src="{{ URL::to('/img/mails/icons/facebook.png') }}" alt="Facebook" style="display:block;" height="24" width="24" class=""></a>
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
                                                  </tbody>
                                               </table>
                                               <table align="left" border="0" cellpadding="0" cellspacing="0" style="display:inline;">
                                                  <tbody>
                                                     <tr>
                                                        <td valign="top" style="padding-right:10px; padding-bottom:9px;" class="mcnFollowContentItemContainer">
                                                           <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowContentItem">
                                                              <tbody>
                                                                 <tr>
                                                                    <td align="left" valign="middle" style="padding-top:5px; padding-right:10px; padding-bottom:5px; padding-left:9px;">
                                                                       <table align="left" border="0" cellpadding="0" cellspacing="0" width="">
                                                                          <tbody>
                                                                             <tr>
                                                                                <td align="center" valign="middle" width="24" class="mcnFollowIconContent">
                                                                                   <a href="https://www.instagram.com/bdeutt/" target="_blank"><img src="{{ URL::to('/img/mails/icons/instagram.png') }}" alt="Instagram" style="display:block;" height="24" width="24" class=""></a>
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
                                                  </tbody>
                                               </table>
                                               <table align="left" border="0" cellpadding="0" cellspacing="0" style="display:inline;">
                                                  <tbody>
                                                     <tr>
                                                        <td valign="top" style="padding-right:0; padding-bottom:9px;" class="mcnFollowContentItemContainer">
                                                           <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowContentItem">
                                                              <tbody>
                                                                 <tr>
                                                                    <td align="left" valign="middle" style="padding-top:5px; padding-right:10px; padding-bottom:5px; padding-left:9px;">
                                                                       <table align="left" border="0" cellpadding="0" cellspacing="0" width="">
                                                                          <tbody>
                                                                             <tr>
                                                                                <td align="center" valign="middle" width="24" class="mcnFollowIconContent">
                                                                                   <a href="https://www.snapchat.com/add/integrationutt" target="_blank"><img src="{{ URL::to('/img/mails/icons/snapchat.png') }}" alt="Snapchat" style="display:block;" height="24" width="24" class=""></a>
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
              </tbody>
           </table>
        </td>
     </tr>
  </tbody>
</table>
