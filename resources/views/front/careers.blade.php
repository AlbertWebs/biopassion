@extends('front.master-careers')
@section('content')
<form method="post" accept-charset="utf-8" enctype="multipart/form-data" id="profileForm" name="profileForm" action="" onsubmit="icimsDisableSaveAndSubmitButtons('cp_form_submit_i', 'cp_form_save_i', 'profileForm');">
   <input type="hidden" name="icimsCookiesEnabledCheck" value="false">
   <input type="hidden" name="ps" value="1">
   <input type="hidden" id="unlinkAccount" name="unlinkAccount" value="0">
   <input type="hidden" id="unlinkExternalId" name="unlinkExternalId" value="">
   <div class="iCIMS_MainWrapper iCIMS_CandidatePage">



      <div id="portalAriaLiveStatusDiv" role="status" aria-live="polite" class="iCIMS_508_Label"></div>
      <!--[if lt IE 9]>
      <style type="text/css">.iCIMS_checkmark{display:none;} .iCIMS_checkmarkIE{display:inline;}</style>
      <![endif]-->
      <!--[if lte IE 7]>
      <style type="text/css">
         #iCIMS_tabnav{margin-top:20px;}
         .iCIMS_Steps_Content{padding: 14px 25px 14px 32px;}
      </style>
      <![endif]-->
      <hr>
      <div class="iCIMS_Steps">
         <ul>
            <li class="iCIMS_Steps_First iCIMS_Steps_Current" id="Step_profileStep" title="Candidate Profile&nbsp;(Current Step)" style="width: 50.0%">
               <span class="iCIMS_Steps_Content sr-only" title="Candidate Profile&nbsp;(Current Step)">
               Step &nbsp; 1 &nbsp; of &nbsp; 2. &nbsp; Candidate Profile(Current Step)</span>
            </li>
            <li class=" iCIMS_Steps_NotCurrent" id="Step_personQuestionsStep" title="Candidate Questions" style="width: 50.0%">
               <span class="iCIMS_Steps_Content sr-only" title="Candidate Questions">
               Step &nbsp; 2 &nbsp; of &nbsp; 2. &nbsp; Candidate Questions(Incomplete Step)</span>
            </li>
         </ul>
      </div>
      <div class="iCIMS_PageStepText">Candidate Profile</div>
      <hr>
      <div class="iCIMS_CenteredPageContent">
         <h2>Candidate Profile</h2>
         <div class="iCIMS_InfoMsg iCIMS_InfoMsg_Candidate">
            <span class="iCIMS_InfoInstruction">Please be sure to fill out all required fields </span>
            <span class="Field_RequiredStar">*</span> indicates a required field.
         </div>

         <input type="hidden" name="accountId" value="-1">
         <div role="group">
            <h2 class="iCIMS_SubHeader iCIMS_SubHeader_Candidate">CV/Resume</h2>
            <div class="iCIMS_InfoMsg iCIMS_InfoMsg_Candidate">
               <ul>
                  <li>Provide your CV/resume below to pre-fill your profile. Existing data in the form will be replaced:</li>
               </ul>
            </div>
            <div class="iCIMS_ProfileFormTable iCIMS_Table">
               <div class="iCIMS_TableRow iCIMS_ErrorRow sr-only">
                  <div class="iCIMS_TableCell"></div>
                  <div class="iCIMS_TableCell">
                     <div tabindex="-1" id="PortalProfileFields.Resume_error" class="iCIMS_Message iCIMS_ErrorMessage iCIMS_FieldError iCIMS_GenericMessage">
                        Please upload your CV/Resume (max size: 5 MB): required.
                     </div>
                  </div>
               </div>
               <div class="iCIMS_EvenRow iCIMS_TableRow iCIMS_FieldRow_PortalProfileFields.Resume iCIMS_HasError">
                  <div class="iCIMS_InfoField iCIMS_InfoField_Candidate iCIMS_Resume iCIMS_TableCell"><span class="glyphicons glyphicons-exclamation-sign" aria-hidden="true"></span><label tabindex="-1" id="label_PortalProfileFields.Resume_File" for="PortalProfileFields.Resume_File"><span class="sr-only">Error:</span>Please upload your CV/Resume (max size: 5 MB)</label><span class="Field_Required"><span class="Field_RequiredStar">* </span></span></div>
                  <div class="iCIMS_InfoData iCIMS_InfoData_Candidate iCIMS_Resume iCIMS_TableCell">
                     <div id="PortalProfileFields.Resume_Loading" class="iCIMS_NoDisplay iCIMS_loadingImageResume">
                        <div class="iCIMS_loadingImageResumeText">Parsing CV/resume, please wait...</div>
                     </div>
                     <div class="iCIMS_ResumeContentDiv" id="PortalProfileFields.Resume_Content">
                        <input id="PortalProfileFields.Resume" name="PortalProfileFields.Resume" type="hidden" value="false" isimage="false"><input id="PortalProfileFields.Resume_FileName" name="PortalProfileFields.Resume_FileName" type="hidden" value="">
                        <div id="PortalProfileFields.Resume_CurrentFile">
                           <div id="PortalProfileFields.Resume_FileNameLabel" class="iCIMS_CurrentFile iCIMS_NoDisplay"><span></span><span class="iCIMS_NoDisplay iCIMS_CurrentFileIcon" id="PortalProfileFields.Resume_CurrentFileIcon"></span></div>
                           <div id="PortalProfileFields.Resume_DeleteButtonSpan" class="iCIMS_FileUploadDeleteButtonContainer iCIMS_NoDisplay"><button id="PortalProfileFields.Resume_Button" type="button" class="small iCIMS_Button iCIMS_DeleteButton iCIMS_SecondaryButton" onclick="pageDirtyFlag=true; toggleDeleteImageCF('PortalProfileFields.Resume', true)">Replace Resume</button></div>
                           <div class="iCIMS_CurrentFileIcon"><span class="iCIMS_NoDisplay" id="PortalProfileFields.Resume_NoDisplay_CurrentFileIcon"></span></div>
                        </div>
                        <div id="PortalProfileFields.Resume_UploadButtons" class="upload-buttons">
                           <div class="iCIMS_FileUploadButtonBlock PortalProfileFields.Resume_local_ButtonContainer localButton ">
                              <div tabindex="0" class="iCIMS_FileFieldButton iCIMS_SecondaryButton iCIMS_resumeUpload" onkeydown="if (event.code === 13 || event.keyCode === 13 || event.code === 32 || event.keyCode === 32) { this.onclick(); event.stopPropagation(); event.preventDefault(); }" onclick="var input = document.getElementById('PortalProfileFields.Resume_File'); if (input) {input.click();}" onfocus="this.setAttribute('role','button');" onblur="this.removeAttribute('role')"><label for="PortalProfileFields.Resume_File" id="label_for_PortalProfileFields.Resume_File" aria-hidden="true" class="iCIMS_508_Label">My Computer (Opens new window)</label><input type="file" id="PortalProfileFields.Resume_File" name="PortalProfileFields.Resume_File" tabindex="-1" aria-labelledby="label_for_PortalProfileFields.Resume_File label_PortalProfileFields.Resume_File" onclick="event.stopPropagation();" onchange="pageDirtyFlag=true;icims_setFileFieldValue('PortalProfileFields.Resume', document.getElementById('PortalProfileFields.Resume_File').value, '', '', false, 'local');window.document.body.onbeforeunload = null;this.form.action=this.form.action+'&amp;uploadResume=1';this.form.submit();" aria-required="true" i_required="true" aria-describedby="PortalProfileFields.Resume_error" onfocus="$(this).parent().addClass('focused');" onblur="$(this).parent().removeClass('focused');" validtypes="text/html,image/jpeg,image/tiff,image/bmp,image/gif,application/rtf,image/png,application/vnd.openxmlformats-officedocument.wordprocessingml.document,image/tiff,text/plain,application/gzip,application/pdf,application/msword,image/jpeg,text/html,application/vnd.oasis.opendocument.text"><span class="iCIMS_FileFieldIcon"><span class="icims-file-upload glyphicons glyphicons-folder-open"></span><span class="iCIMS_NoDisplay glyphicons glyphicons-folder-open" id="PortalProfileFields.Resume_local_icon"></span></span><span aria-hidden="true" class="iCIMS_FileFieldText">My Computer</span></div>
                           </div>

                        </div>
                        <input type="hidden" id="PortalProfileFields.Resume_URL" name="PortalProfileFields.Resume_URL">
                     </div>
                     <noscript><input type="submit" class="iCIMS_SecondaryButton" name="uploadResume" onclick="window.onbeforeunload = null; icims_showResumeLoading()" value="Submit Resume" /></noscript>
                  </div>
               </div>
               <div role="group" aria-labelledby="label_rcf2106_File" class="iCIMS_OddRow iCIMS_TableRow iCIMS_FieldRow iCIMS_FieldRow_rcf2106 ">
                  <div class="iCIMS_InfoField iCIMS_InfoField_Candidate iCIMS_TableCell"><label tabindex="-1" id="label_rcf2106_File" for="rcf2106_File">Cover Letter</label></div>
                  <div class="iCIMS_InfoData iCIMS_InfoData_Candidate iCIMS_TableCell">
                     <input id="rcf2106" name="rcf2106" type="hidden" value="false" isimage="false"><input id="rcf2106_FileName" name="rcf2106_FileName" type="hidden" value="">
                     <div id="rcf2106_CurrentFile">
                        <div id="rcf2106_FileNameLabel" class="iCIMS_CurrentFile iCIMS_NoDisplay"><span></span><span class="iCIMS_NoDisplay iCIMS_CurrentFileIcon" id="rcf2106_CurrentFileIcon"></span></div>
                        <div id="rcf2106_DeleteButtonSpan" class="iCIMS_FileUploadDeleteButtonContainer iCIMS_NoDisplay"><button id="rcf2106_Button" type="button" class="small iCIMS_Button iCIMS_DeleteButton iCIMS_SecondaryButton" onclick="pageDirtyFlag=true; toggleDeleteImageCF('rcf2106', true)">Delete File</button></div>
                        <div class="iCIMS_CurrentFileIcon"><span class="iCIMS_NoDisplay" id="rcf2106_NoDisplay_CurrentFileIcon"></span></div>
                     </div>
                     <div id="rcf2106_UploadButtons" class="upload-buttons">
                        <div class="iCIMS_FileUploadButtonBlock rcf2106_local_ButtonContainer localButton ">
                           <div tabindex="0" class="iCIMS_FileFieldButton iCIMS_SecondaryButton iCIMS_resumeUpload" onkeydown="if (event.code === 13 || event.keyCode === 13 || event.code === 32 || event.keyCode === 32) { this.onclick(); event.stopPropagation(); event.preventDefault(); }" onclick="var input = document.getElementById('rcf2106_File'); if (input) {input.click();}" onfocus="this.setAttribute('role','button');" onblur="this.removeAttribute('role')"><label for="rcf2106_File" id="label_for_rcf2106_File" aria-hidden="true" class="iCIMS_508_Label">My Computer (Opens new window)</label><input type="file" id="rcf2106_File" name="rcf2106_File" tabindex="-1" aria-labelledby="label_for_rcf2106_File label_rcf2106_File" onclick="event.stopPropagation();" onchange="pageDirtyFlag=true;icims_setFileFieldValue('rcf2106', document.getElementById('rcf2106_File').value, '', '', false, 'local');" onfocus="$(this).parent().addClass('focused');" onblur="$(this).parent().removeClass('focused');" validtypes="image/jpeg,text/plain,application/pdf,application/rtf,image/png,application/msword,image/jpeg,application/vnd.oasis.opendocument.text,application/vnd.openxmlformats-officedocument.wordprocessingml.document"><span class="iCIMS_FileFieldIcon"><span class="icims-file-upload glyphicons glyphicons-folder-open"></span><span class="iCIMS_NoDisplay glyphicons glyphicons-folder-open" id="rcf2106_local_icon"></span></span><span aria-hidden="true" class="iCIMS_FileFieldText">My Computer</span></div>
                        </div>
                     </div>
                     <input type="hidden" id="rcf2106_URL" name="rcf2106_URL">
                  </div>
               </div>
            </div>
         </div>

         <div role="group">
            <h2 class="iCIMS_SubHeader iCIMS_SubHeader_Candidate">Self Attestation is required.</h2>
            <div class="iCIMS_ProfileFormTable iCIMS_Table">
               <div class="iCIMS_EvenRow iCIMS_TableRow iCIMS_FieldRow iCIMS_FieldRow_rcf2026 ">
                  <div class="iCIMS_InfoField iCIMS_InfoField_Candidate iCIMS_TableCell"><label tabindex="-1" id="label_rcf2026" for="rcf2026">I certify that I have read and understand the applicant instructions included with this application and that the answers given by me to the foregoing questions and statements made by me are complete and true to the best of my knowledge and belief.  I understand that any false information, omissions or misrepresentations of facts called for in this application, whether on this document or not, may result in rejection of my application or discharge at any time during my employment.  I understand that this application form is intended for use in evaluating my qualifications for employment and that this application is not an offer of employment.</label><span class="Field_Required"><span class="Field_RequiredStar">* </span></span></div>
                  <div class="iCIMS_InfoData iCIMS_InfoData_Candidate iCIMS_TableCell">
                     <select id="rcf2026" name="rcf2026" data-label="I certify that I have read and understand the applicant instructions included with this application and that the answers given by me to the foregoing questions and statements made by me are complete and true to the best of my knowledge and belief.  I understand that any false information, omissions or misrepresentations of facts called for in this application, whether on this document or not, may result in rejection of my application or discharge at any time during my employment.  I understand that this application form is intended for use in evaluating my qualifications for employment and that this application is not an offer of employment." class=" iCIMS_Forms_Global customFieldContainer iCIMS_Forms_DropDown iCIMS_Forms_Qnull iCIMS_Forms_RequiredField form-control dropdown-hide" onchange="pageDirtyFlag=true;" icimsdropdown-enabled="1" icimsdropdown-ajax="1" icimsdropdown-search="0" icimsdropdown-selected="" i_required="true" aria-describedby="rcf2026_error" role="listbox" hash="59ca51f70bb95cc040ddcc8e74b5915e65ddaae2a118c7e40cf14a26243047ad">
                        <option value="" legacy="true"></option>
                     </select>

                     <input type="checkbox" name="consent"> Yes, I agree
                     <hr>

                  </div>
               </div>
            </div>
         </div>
         <div role="group">
            <h2 class="iCIMS_SubHeader iCIMS_SubHeader_Candidate">Enter your information</h2>
            <div class="iCIMS_ProfileFormTable iCIMS_Table">
               <div class="iCIMS_EvenRow iCIMS_TableRow iCIMS_FieldRow_Inline iCIMS_FieldRow_Inline_LinedUpStdFields iCIMS_FieldRow_PersonProfileFields.FirstName ">
                  <div class="iCIMS_InfoField iCIMS_InfoField_Candidate iCIMS_TableCell"><label tabindex="-1" id="label_PersonProfileFields.FirstName" for="PersonProfileFields.FirstName">First Name</label><span class="Field_Required"><span class="Field_RequiredStar">* </span></span></div>
                  <div class="iCIMS_InfoData iCIMS_InfoData_Candidate iCIMS_TableCell"><input type="text" id="PersonProfileFields.FirstName" name="PersonProfileFields.FirstName" class="iCIMS_Forms_Global customFieldContainer iCIMS_Forms_TextField iCIMS_Forms_Qnull iCIMS_Forms_RequiredField form-control" onchange="pageDirtyFlag=true;" aria-required="true" i_required="true" bgtparse="true" maxlength="192" autocomplete="given-name"></div>
               </div>
               <div class="iCIMS_OddRow iCIMS_TableRow iCIMS_FieldRow_Inline iCIMS_FieldRow_Inline_LinedUpStdFields iCIMS_FieldRow_PersonProfileFields.LastName ">
                  <div class="iCIMS_InfoField iCIMS_InfoField_Candidate iCIMS_TableCell"><label tabindex="-1" id="label_PersonProfileFields.LastName" for="PersonProfileFields.LastName">Last Name</label><span class="Field_Required"><span class="Field_RequiredStar">* </span></span></div>
                  <div class="iCIMS_InfoData iCIMS_InfoData_Candidate iCIMS_TableCell"><input type="text" id="PersonProfileFields.LastName" name="PersonProfileFields.LastName" class="iCIMS_Forms_Global customFieldContainer iCIMS_Forms_TextField iCIMS_Forms_Qnull iCIMS_Forms_RequiredField form-control" onchange="pageDirtyFlag=true;" aria-required="true" i_required="true" bgtparse="true" maxlength="64" autocomplete="family-name"></div>
               </div>
               <div class="iCIMS_EvenRow iCIMS_TableRow iCIMS_FieldRow iCIMS_FieldRow_PersonProfileFields.Email ">
                  <div class="iCIMS_InfoField iCIMS_InfoField_Candidate iCIMS_TableCell"><label tabindex="-1" id="label_PersonProfileFields.Email" for="PersonProfileFields.Email">Email</label><span class="Field_Required"><span class="Field_RequiredStar">* </span></span></div>
                  <div class="iCIMS_InfoData iCIMS_InfoData_Candidate iCIMS_TableCell"><input type="email" id="PersonProfileFields.Email" name="PersonProfileFields.Email" class="iCIMS_Forms_Global customFieldContainer iCIMS_Forms_EmailField iCIMS_Forms_Qnull iCIMS_Forms_RequiredField form-control" onchange="pageDirtyFlag=true;" aria-required="true" i_required="true" maxlength="128" autocomplete="email"></div>
               </div>
               <div tabindex="-1" class="iCIMS_CollectionContainer PersonProfileFields.Phones-1-Container">
                  <fieldset class="iCIMS_CollectionGroup iCIMS_OddRow">
                     <legend><span tabindex="-1" class="iCIMS_LabelText" name="labelText" id="PersonProfileFields.Phones_-1_label">Phones (1)<span class="Field_Required"><span class="Field_RequiredStar">* </span><span class="sr-only">required.</span></span></span></legend>
                     <div class="PersonProfileFields.Phones-1 iCIMS_TableRow">
                        <div class="iCIMS_InfoField iCIMS_InfoField_Candidate iCIMS_CollectionLegend iCIMS_TableCell"></div>
                        <div class="iCIMS_InfoData iCIMS_TableCell"></div>
                     </div>
                     <input tabindex="-1" type="hidden" name="portalLabelPersonProfileFields.Phones-1" id="portalLabelPersonProfileFields.Phones-1" value="Phones (1)">
                     <div data-collection="PersonProfileFields.Phones" data-index="1" class="PersonProfileFields.Phones-1 iCIMS_TableRow iCIMS_FieldRow_Inline">
                        <div class=" iCIMS_InfoField iCIMS_InfoField_Candidate iCIMS_CollectionField iCIMS_TableCell"><label id="label_-1_PersonProfileFields.PhoneType" for="-1_PersonProfileFields.PhoneType"><span class="iCIMS_LabelText" name="labelText">Type</span></label><span class="Field_Required"><span class="Field_RequiredStar">* </span><span class="sr-only">required.</span></span></div>
                        <div class="iCIMS_InfoData iCIMS_InfoData_Candidate iCIMS_CollectionField iCIMS_TableCell">
                           <select id="-1_PersonProfileFields.PhoneType" name="-1_PersonProfileFields.PhoneType" data-label="Type" class=" iCIMS_Forms_Global customFieldContainer iCIMS_Forms_ListEditorField iCIMS_Forms_Qnull iCIMS_Forms_RequiredField form-control" bgtparse="true" list="lists.phone_type" type="3025" onchange="pageDirtyFlag=true;if (this.options[this.selectedIndex].value == -1) { return addItemToSelectFieldNLevelList(this); }else{ this.prevIndex = this.selectedIndex; } " aria-required="true" i_required="true" icimsdropdown-enabled="0" icimsdropdown-ajax="1" icimsdropdown-search="0" icimsdropdown-selected="" hash="80257b054d1c4ec469dd2893927f8cfa572aab346d99e94cf4bcad7f9715e724">
                              <option value="" legacy="true"></option>
                              <option title="Mobile" value="15145">Mobile</option>
                              <option title="Home" value="15143">Home</option>
                              <option title="Office" value="30865">Office</option>
                           </select>
                        </div>
                     </div>
                     <div data-collection="PersonProfileFields.Phones" data-index="1" class="PersonProfileFields.Phones-1 iCIMS_TableRow iCIMS_FieldRow_Inline">
                        <div class=" iCIMS_InfoField iCIMS_InfoField_Candidate iCIMS_CollectionField iCIMS_TableCell"><label id="label_-1_PersonProfileFields.PhoneNumber" for="-1_PersonProfileFields.PhoneNumber"><span class="iCIMS_LabelText" name="labelText">Number</span></label><span class="Field_Required"><span class="Field_RequiredStar">* </span><span class="sr-only">required.</span></span></div>
                        <div class="iCIMS_InfoData iCIMS_InfoData_Candidate iCIMS_CollectionField iCIMS_TableCell"><input type="text" id="-1_PersonProfileFields.PhoneNumber" name="-1_PersonProfileFields.PhoneNumber" class="iCIMS_Forms_Global customFieldContainer iCIMS_Forms_TextField iCIMS_Forms_Qnull iCIMS_Forms_RequiredField form-control" onchange="pageDirtyFlag=true;" aria-required="true" i_required="true" bgtparse="true" maxlength="128" autocomplete="tel-national"></div>
                     </div>
                  </fieldset>

               </div>
               <div tabindex="-1" class="iCIMS_CollectionContainer PersonProfileFields.Addresses-1-Container">
                  <fieldset class="iCIMS_CollectionGroup iCIMS_OddRow">
                     <legend><span tabindex="-1" class="iCIMS_LabelText" name="labelText" id="PersonProfileFields.Addresses_-1_label">Addresses (1)<span class="Field_Required"><span class="Field_RequiredStar">* </span><span class="sr-only">required.</span></span></span></legend>
                     <div class="PersonProfileFields.Addresses-1 iCIMS_TableRow">
                        <div class="iCIMS_InfoField iCIMS_InfoField_Candidate iCIMS_CollectionLegend iCIMS_TableCell"></div>
                        <div class="iCIMS_InfoData iCIMS_TableCell"></div>
                     </div>
                     <input tabindex="-1" type="hidden" name="portalLabelPersonProfileFields.Addresses-1" id="portalLabelPersonProfileFields.Addresses-1" value="Addresses (1)">
                     <div data-collection="PersonProfileFields.Addresses" data-index="1" class="PersonProfileFields.Addresses-1 iCIMS_TableRow iCIMS_FieldRow_Inline">
                        <div class=" iCIMS_InfoField iCIMS_InfoField_Candidate iCIMS_CollectionField iCIMS_TableCell"><label id="label_-1_PersonProfileFields.AddressType" for="-1_PersonProfileFields.AddressType"><span class="iCIMS_LabelText" name="labelText">Type (Provide both Physical and Postal Addresses)</span></label><span class="Field_Required"><span class="Field_RequiredStar">* </span><span class="sr-only">required.</span></span></div>
                        <div class="iCIMS_InfoData iCIMS_InfoData_Candidate iCIMS_CollectionField iCIMS_TableCell">
                           <select id="-1_PersonProfileFields.AddressType" name="-1_PersonProfileFields.AddressType" data-label="Type (Provide both Physical and Postal Addresses)" class=" iCIMS_Forms_Global customFieldContainer iCIMS_Forms_ListEditorField iCIMS_Forms_Qnull iCIMS_Forms_RequiredField form-control" bgtparse="true" list="lists.address_type" type="3029" onchange="pageDirtyFlag=true;if (this.options[this.selectedIndex].value == -1) { return addItemToSelectFieldNLevelList(this); }else{ this.prevIndex = this.selectedIndex; } " aria-required="true" i_required="true" icimsdropdown-enabled="0" icimsdropdown-ajax="1" icimsdropdown-search="0" icimsdropdown-selected="" hash="de1b4e9d1958e347b2f58fb3c10663382c59a8ede6dfa94b83fde794fd8d54bc">
                              <option value="" legacy="true"></option>
                              <option title="Physical" value="15149">Physical</option>
                              <option title="Postal" value="15151">Postal</option>
                           </select>
                        </div>
                     </div>
                     <div data-collection="PersonProfileFields.Addresses" data-index="1" class="PersonProfileFields.Addresses-1 iCIMS_TableRow iCIMS_FieldRow_Inline">
                        <div class=" iCIMS_InfoField iCIMS_InfoField_Candidate iCIMS_CollectionField iCIMS_TableCell"><label id="label_-1_PersonProfileFields.AddressStreet1" for="-1_PersonProfileFields.AddressStreet1"><span class="iCIMS_LabelText" name="labelText">Residence/Address</span></label><span class="Field_Required"><span class="Field_RequiredStar">* </span><span class="sr-only">required.</span></span></div>
                        <div class="iCIMS_InfoData iCIMS_InfoData_Candidate iCIMS_CollectionField iCIMS_TableCell"><input type="text" id="-1_PersonProfileFields.AddressStreet1" name="-1_PersonProfileFields.AddressStreet1" class="iCIMS_Forms_Global customFieldContainer iCIMS_Forms_TextField iCIMS_Forms_Qnull iCIMS_Forms_RequiredField form-control" onchange="pageDirtyFlag=true;" aria-required="true" i_required="true" bgtparse="true" maxlength="128" autocomplete="street-address"></div>
                     </div>
                     <div data-collection="PersonProfileFields.Addresses" data-index="1" class="PersonProfileFields.Addresses-1 iCIMS_TableRow iCIMS_FieldRow_Inline">
                        <div class=" iCIMS_InfoField iCIMS_InfoField_Candidate iCIMS_CollectionField iCIMS_TableCell"><label id="label_-1_PersonProfileFields.AddressCity" for="-1_PersonProfileFields.AddressCity"><span class="iCIMS_LabelText" name="labelText">City</span></label><span class="Field_Required"><span class="Field_RequiredStar">* </span><span class="sr-only">required.</span></span></div>
                        <div class="iCIMS_InfoData iCIMS_InfoData_Candidate iCIMS_CollectionField iCIMS_TableCell"><input type="text" id="-1_PersonProfileFields.AddressCity" name="-1_PersonProfileFields.AddressCity" class="iCIMS_Forms_Global customFieldContainer iCIMS_Forms_TextField iCIMS_Forms_Qnull iCIMS_Forms_RequiredField form-control" onchange="pageDirtyFlag=true;" aria-required="true" i_required="true" bgtparse="true" maxlength="64" autocomplete="address-level2"></div>
                     </div>
                     <div data-collection="PersonProfileFields.Addresses" data-index="1" class="PersonProfileFields.Addresses-1 iCIMS_TableRow iCIMS_FieldRow_Inline">
                        <div class=" iCIMS_InfoField iCIMS_InfoField_Candidate iCIMS_CollectionField iCIMS_TableCell"><label id="label_-1_PersonProfileFields.AddressZip" for="-1_PersonProfileFields.AddressZip"><span class="iCIMS_LabelText" name="labelText">Zip/Postal Code</span></label><span class="Field_Required"><span class="Field_RequiredStar">* </span><span class="sr-only">required.</span></span></div>
                        <div class="iCIMS_InfoData iCIMS_InfoData_Candidate iCIMS_CollectionField iCIMS_TableCell"><input type="text" id="-1_PersonProfileFields.AddressZip" name="-1_PersonProfileFields.AddressZip" class="iCIMS_Forms_Global customFieldContainer iCIMS_Forms_TextField iCIMS_Forms_Qnull iCIMS_Forms_RequiredField form-control" onchange="pageDirtyFlag=true;" aria-required="true" i_required="true" bgtparse="true" maxlength="16" autocomplete="postal-code"></div>
                     </div>
                     <div data-collection="PersonProfileFields.Addresses" data-index="1" class="PersonProfileFields.Addresses-1 iCIMS_TableRow iCIMS_FieldRow_Inline">
                        <div class=" iCIMS_InfoField iCIMS_InfoField_Candidate iCIMS_CollectionField iCIMS_TableCell"><label id="label_-1_PersonProfileFields.AddressCountry" for="-1_PersonProfileFields.AddressCountry"><span class="iCIMS_LabelText" name="labelText">Country</span></label><span class="Field_Required"><span class="Field_RequiredStar">* </span><span class="sr-only">required.</span></span></div>
                        <div class="iCIMS_InfoData iCIMS_InfoData_Candidate iCIMS_CollectionField iCIMS_TableCell">
                           <select id="-1_PersonProfileFields.AddressCountry" name="-1_PersonProfileFields.AddressCountry" data-label="Country" class=" iCIMS_Forms_Global customFieldContainer iCIMS_Forms_IdDropDown iCIMS_Forms_Qnull iCIMS_Forms_RequiredField form-control dropdown-hide" onchange="pageDirtyFlag=true;icimsChangeParent('-1_PersonProfileFields.AddressCountry', '-1_PersonProfileFields.AddressState')" icimsdropdown-enabled="1" icimsdropdown-ajax="1" icimsdropdown-search="1" icimsdropdown-selected="" data-ddd-child-link="PersonProfileFields.AddressState" data-ddd-message="Please select a country" data-ddd-no-children="No states available" bgtparse="true" i_required="true" aria-describedby="-1_PersonProfileFields.AddressCountry_error" role="listbox" hash="957aa01204c5fe893b55dde2d218736301d75ca3b6b198361050334e74f0e9d2">
                              <option value="" legacy="true"></option>
                           </select>
                           <a id="-1_PersonProfileFields.AddressCountry_icimsDropdown" class="dropdown-select" aria-expanded="false" tabindex="0" aria-label="Country — Make a Selection —" aria-required="true" role="combobox" autocomplete="country-name">
                              <span id="-1_PersonProfileFields.AddressCountry_fakeSelected_icimsDropdown" class="dropdown-text"><span class="dropdown-placeholder">— Make a Selection —</span></span>
                              <div class="dropdown-arrow-container"><i class="dropdown-arrow"></i></div>
                           </a>
                           <div id="-1_PersonProfileFields.AddressCountry_icimsDropdown_ctnr" class="dropdown-container dropdown-invisible" aria-owns="-1_PersonProfileFields.AddressCountry_dropdown-results" aria-expanded="false" style="width: 255px;">
                              <input type="text" class="dropdown-search" autocomplete="off" placeholder="— Type to Search —" title="— Type to Search —" aria-label="— Type to Search —" aria-autocomplete="list" aria-controls="-1_PersonProfileFields.AddressCountry_dropdown-results" style="width: 213px;">
                              <div aria-live="polite">
                                 <ul id="-1_PersonProfileFields.AddressCountry_dropdown-results" class="dropdown-results" role="listbox" style="max-height: 24em;">
                                    <li id="result-selectable_-1_PersonProfileFields.AddressCountry_-1" class="dropdown-result result-selectable" role="option" dropdown-index="-1" title="— Make a Selection —" aria-label="— Make a Selection —"><span class="dropdown-placeholder">— Make a Selection —</span></li>
                                    <li id="result-selectable_-1_PersonProfileFields.AddressCountry_0" class="dropdown-result result-selectable" role="option" dropdown-index="0" title="United States" aria-label="United States">United States</li>
                                    <li id="result-selectable_-1_PersonProfileFields.AddressCountry_1" class="dropdown-result result-selectable" role="option" dropdown-index="1" title="Afghanistan" aria-label="Afghanistan">Afghanistan</li>
                                    <li id="result-selectable_-1_PersonProfileFields.AddressCountry_2" class="dropdown-result result-selectable" role="option" dropdown-index="2" title="Åland Islands" aria-label="Åland Islands">Åland Islands</li>
                                    <li id="result-selectable_-1_PersonProfileFields.AddressCountry_3" class="dropdown-result result-selectable" role="option" dropdown-index="3" title="Albania" aria-label="Albania">Albania</li>
                                    <li id="result-selectable_-1_PersonProfileFields.AddressCountry_4" class="dropdown-result result-selectable" role="option" dropdown-index="4" title="Algeria" aria-label="Algeria">Algeria</li>
                                    <li id="result-selectable_-1_PersonProfileFields.AddressCountry_5" class="dropdown-result result-selectable" role="option" dropdown-index="5" title="American Samoa" aria-label="American Samoa">American Samoa</li>
                                    <li id="result-selectable_-1_PersonProfileFields.AddressCountry_6" class="dropdown-result result-selectable" role="option" dropdown-index="6" title="Andorra" aria-label="Andorra">Andorra</li>
                                    <li id="result-selectable_-1_PersonProfileFields.AddressCountry_7" class="dropdown-result result-selectable" role="option" dropdown-index="7" title="Angola" aria-label="Angola">Angola</li>
                                    <li id="result-selectable_-1_PersonProfileFields.AddressCountry_8" class="dropdown-result result-selectable" role="option" dropdown-index="8" title="Anguilla" aria-label="Anguilla">Anguilla</li>
                                    <li id="result-selectable_-1_PersonProfileFields.AddressCountry_9" class="dropdown-result result-selectable" role="option" dropdown-index="9" title="Antarctica" aria-label="Antarctica">Antarctica</li>
                                    <li id="result-selectable_-1_PersonProfileFields.AddressCountry_10" class="dropdown-result result-selectable" role="option" dropdown-index="10" title="Antigua And Barbuda" aria-label="Antigua And Barbuda">Antigua And Barbuda</li>
                                    <li id="result-selectable_-1_PersonProfileFields.AddressCountry_11" class="dropdown-result result-selectable" role="option" dropdown-index="11" title="Argentina" aria-label="Argentina">Argentina</li>
                                    <li id="result-selectable_-1_PersonProfileFields.AddressCountry_12" class="dropdown-result result-selectable" role="option" dropdown-index="12" title="Armenia" aria-label="Armenia">Armenia</li>
                                    <li id="result-selectable_-1_PersonProfileFields.AddressCountry_13" class="dropdown-result result-selectable" role="option" dropdown-index="13" title="Aruba" aria-label="Aruba">Aruba</li>
                                    <li id="result-selectable_-1_PersonProfileFields.AddressCountry_14" class="dropdown-result result-selectable" role="option" dropdown-index="14" title="Australia" aria-label="Australia">Australia</li>
                                    <li id="result-selectable_-1_PersonProfileFields.AddressCountry_15" class="dropdown-result result-selectable" role="option" dropdown-index="15" title="Austria" aria-label="Austria">Austria</li>
                                    <li id="result-selectable_-1_PersonProfileFields.AddressCountry_16" class="dropdown-result result-selectable" role="option" dropdown-index="16" title="Azerbaijan" aria-label="Azerbaijan">Azerbaijan</li>
                                    <li id="result-selectable_-1_PersonProfileFields.AddressCountry_17" class="dropdown-result result-selectable" role="option" dropdown-index="17" title="Bahamas" aria-label="Bahamas">Bahamas</li>
                                    <li id="result-selectable_-1_PersonProfileFields.AddressCountry_18" class="dropdown-result result-selectable" role="option" dropdown-index="18" title="Bahrain" aria-label="Bahrain">Bahrain</li>
                                    <li id="result-selectable_-1_PersonProfileFields.AddressCountry_19" class="dropdown-result result-selectable" role="option" dropdown-index="19" title="Bangladesh" aria-label="Bangladesh">Bangladesh</li>
                                    <li id="result-selectable_-1_PersonProfileFields.AddressCountry_20" class="dropdown-result result-selectable" role="option" dropdown-index="20" title="Barbados" aria-label="Barbados">Barbados</li>
                                    <li id="result-selectable_-1_PersonProfileFields.AddressCountry_21" class="dropdown-result result-selectable" role="option" dropdown-index="21" title="Belarus" aria-label="Belarus">Belarus</li>
                                    <li id="result-selectable_-1_PersonProfileFields.AddressCountry_22" class="dropdown-result result-selectable" role="option" dropdown-index="22" title="Belgium" aria-label="Belgium">Belgium</li>
                                    <li id="result-selectable_-1_PersonProfileFields.AddressCountry_23" class="dropdown-result result-selectable" role="option" dropdown-index="23" title="Belize" aria-label="Belize">Belize</li>
                                    <li id="result-selectable_-1_PersonProfileFields.AddressCountry_24" class="dropdown-result result-selectable" role="option" dropdown-index="24" title="Benin" aria-label="Benin">Benin</li>
                                 </ul>
                                 <div class="dropdown-loading hide" style="width: 0%;"></div>
                                 <div style="overflow: hidden; display: block; width:0;height:0;" role="status" id="result-summary_-1_PersonProfileFields.AddressCountry">26 results available. Use down and up arrow keys to navigate. </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div data-collection="PersonProfileFields.Addresses" data-index="1" class="PersonProfileFields.Addresses-1 iCIMS_TableRow iCIMS_FieldRow_Inline">
                        <div class=" iCIMS_InfoField iCIMS_InfoField_Candidate iCIMS_CollectionField iCIMS_TableCell"><label id="label_-1_PersonProfileFields.AddressState" for="-1_PersonProfileFields.AddressState"><span class="iCIMS_LabelText" name="labelText">Province/State/Region</span></label></div>
                        <div class="iCIMS_InfoData iCIMS_InfoData_Candidate iCIMS_CollectionField iCIMS_TableCell">
                           <select id="-1_PersonProfileFields.AddressState" name="-1_PersonProfileFields.AddressState" data-label="Province/State/Region" class=" iCIMS_Forms_Global customFieldContainer iCIMS_Forms_IdDropDown iCIMS_Forms_Qnull form-control dropdown-hide" onchange="pageDirtyFlag=true;" icimsdropdown-enabled="1" icimsdropdown-ajax="1" icimsdropdown-search="1" icimsdropdown-selected="" data-ddd-parent-link="PersonProfileFields.AddressCountry" bgtparse="true" hash="45a72a4331e77364089132084b4206d1f1b3b2c4a3ad9ca593872c118aa9c0ed">
                              <option value="-999" selected="selected">Please select a country</option>
                           </select>
                           <a id="-1_PersonProfileFields.AddressState_icimsDropdown" class="dropdown-select" aria-expanded="false" tabindex="0" aria-label="Province/State/Region Please select a country" role="combobox" autocomplete="address-level1">
                              <span id="-1_PersonProfileFields.AddressState_fakeSelected_icimsDropdown" class="dropdown-text"><span class="dropdown-placeholder">Please select a country</span></span>
                              <div class="dropdown-arrow-container"><i class="dropdown-arrow"></i></div>
                           </a>
                           <div id="-1_PersonProfileFields.AddressState_icimsDropdown_ctnr" class="dropdown-container dropdown-invisible" aria-owns="-1_PersonProfileFields.AddressState_dropdown-results" aria-expanded="false" style="width: 255px;">
                              <input type="text" class="dropdown-search" autocomplete="off" placeholder="— Type to Search —" title="— Type to Search —" aria-label="— Type to Search —" aria-autocomplete="list" aria-controls="-1_PersonProfileFields.AddressState_dropdown-results" style="width: 213px;">
                              <div aria-live="polite">
                                 <ul id="-1_PersonProfileFields.AddressState_dropdown-results" class="dropdown-results" role="listbox" style="max-height: 24em;">
                                    <li id="result-selectable_-1_PersonProfileFields.AddressState_-1" class="dropdown-result result-selectable" role="option" dropdown-index="-1" title="— Make a Selection —" aria-label="— Make a Selection —"><span class="dropdown-placeholder">— Make a Selection —</span></li>
                                    <li id="result-selectable_-1_PersonProfileFields.AddressState_-1" class="dropdown-result result-unselectable" role="presentation" dropdown-index="-1" title="No Results" aria-label="No Results">No Results</li>
                                 </ul>
                                 <div class="dropdown-loading hide" style="width: 0%;"></div>
                                 <div style="overflow: hidden; display: block; width:0;height:0;" role="status" id="result-summary_-1_PersonProfileFields.AddressState">1 result available. Use down and up arrow keys to navigate.</div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div data-collection="PersonProfileFields.Addresses" data-index="1" class="PersonProfileFields.Addresses-1 iCIMS_TableRow iCIMS_FieldRow_Inline">
                        <div class=" iCIMS_InfoField iCIMS_InfoField_Candidate iCIMS_CollectionField iCIMS_TableCell"><label id="label_-1_PersonProfileFields.AddressCounty" for="-1_PersonProfileFields.AddressCounty"><span class="iCIMS_LabelText" name="labelText">County</span></label></div>
                        <div class="iCIMS_InfoData iCIMS_InfoData_Candidate iCIMS_CollectionField iCIMS_TableCell"><input type="text" id="-1_PersonProfileFields.AddressCounty" name="-1_PersonProfileFields.AddressCounty" class="iCIMS_Forms_Global customFieldContainer iCIMS_Forms_TextField iCIMS_Forms_Qnull form-control" onchange="pageDirtyFlag=true;" bgtparse="true" maxlength="64"></div>
                     </div>
                  </fieldset>

               </div>
               <div class="iCIMS_OddRow iCIMS_TableRow iCIMS_FieldRow_Inline iCIMS_FieldRow_Inline_LinedUpStdFields iCIMS_FieldRow_rcf3048 ">
                  <div class="iCIMS_InfoField iCIMS_InfoField_Candidate iCIMS_TableCell"><label tabindex="-1" id="label_rcf3048" for="rcf3048">How did you hear about us?</label><span class="Field_Required"><span class="Field_RequiredStar">* </span></span></div>
                  <div class="iCIMS_InfoData iCIMS_InfoData_Candidate iCIMS_TableCell">
                     <select id="rcf3048" name="rcf3048" data-label="How did you hear about us?" class=" iCIMS_Forms_Global customFieldContainer iCIMS_Forms_DropDown iCIMS_Forms_Qnull iCIMS_Forms_RequiredField form-control" onchange="pageDirtyFlag=true;SourceChange(); " icimsdropdown-enabled="0" icimsdropdown-ajax="1" icimsdropdown-search="0" icimsdropdown-selected="" aria-required="true" i_required="true" aria-describedby="rcf3048_error" role="listbox" hash="195d7a7007b70ca230114d13143ce4493ae229fbd3d1f9589a38f0540fe616c0">
                        <option legacy="true" value="">— Make a Selection —</option>
                        <option title="Company Website" value="Company Website" dataid="Company Website" sourceid="12283" textsourcename="">Company Website</option>
                        <option title="DevEx" value="DevEx" dataid="DevEx" sourceid="33572" textsourcename="">DevEx</option>
                        <option title="Google Search" value="Google Search" dataid="Google Search" sourceid="29827" textsourcename="">Google Search</option>
                        <option title="Handshake" value="Handshake" dataid="Handshake" sourceid="33574" textsourcename="">Handshake</option>
                        <option title="Idealist" value="Idealist" dataid="Idealist" sourceid="33573" textsourcename="">Idealist</option>
                        <option title="Indeed" value="Indeed" dataid="Indeed" sourceid="31879" textsourcename="">Indeed</option>
                        <option title="LinkedIn" value="LinkedIn" dataid="LinkedIn" sourceid="33568" textsourcename="">LinkedIn</option>
                        <option title="Other" value="Other" dataid="Other" sourceid="8784" textsourcename="1">Other</option>
                        <option title="Other Job Board" value="Other Job Board" dataid="Other Job Board" sourceid="33569" textsourcename="1">Other Job Board</option>
                        <option title="Referred by a current employee" value="Referred by a current employee" dataid="Referred by a current employee" sourceid="8780" textsourcename="1">Referred by a current employee</option>
                        <option title="Social Media" value="Social Media" dataid="Social Media" sourceid="12241" textsourcename="">Social Media</option>
                     </select>
                  </div>
               </div>

            </div>
         </div>
         <div role="group">
            <h2 class="iCIMS_SubHeader iCIMS_SubHeader_Candidate">Education</h2>
            <div class="iCIMS_ProfileFormTable iCIMS_Table">
               <div tabindex="-1" class="iCIMS_CollectionContainer CandProfileFields.Education-1-Container">
                  <fieldset class="iCIMS_CollectionGroup iCIMS_OddRow">
                     <legend><span tabindex="-1" class="iCIMS_LabelText" name="labelText" id="CandProfileFields.Education_-1_label">Education (1)</span></legend>
                     <div class="CandProfileFields.Education-1 iCIMS_TableRow">
                        <div class="iCIMS_InfoField iCIMS_InfoField_Candidate iCIMS_CollectionLegend iCIMS_TableCell"></div>
                        <div class="iCIMS_InfoData iCIMS_TableCell"></div>
                     </div>
                     <input tabindex="-1" type="hidden" name="portalLabelCandProfileFields.Education-1" id="portalLabelCandProfileFields.Education-1" value="Education (1)">
                     <div data-collection="CandProfileFields.Education" data-index="1" class="CandProfileFields.Education-1 iCIMS_TableRow iCIMS_FieldRow_Inline">
                        <div class=" iCIMS_InfoField iCIMS_InfoField_Candidate iCIMS_CollectionField iCIMS_TableCell"><label id="label_-1_CandProfileFields.School" for="-1_CandProfileFields.School"><span class="iCIMS_LabelText" name="labelText">School</span></label></div>
                        <div class="iCIMS_InfoData iCIMS_InfoData_Candidate iCIMS_CollectionField iCIMS_TableCell">
                           <label class="iCIMS_508_Label" for="-1_CandProfileFields.School">School</label>
                           <select id="-1_CandProfileFields.School" name="-1_CandProfileFields.School" data-label="School" class=" iCIMS_Forms_Global customFieldContainer iCIMS_Forms_ListEditorField iCIMS_Forms_Qnull form-control dropdown-hide" bgtparse="true" list="lists.school" type="3081" onchange="pageDirtyFlag=true;if (this.options[this.selectedIndex].value == -1) { return addItemToSelectFieldNLevelList(this); }else{ this.prevIndex = this.selectedIndex; } " icimsdropdown-enabled="1" icimsdropdown-ajax="1" icimsdropdown-search="0" icimsdropdown-selected="" hash="4c1c6b74cc47c21d50a99a1577e7d975bd5b8101ab92b404b961d7e987de6c8d">
                              <option value="" legacy="true"></option>
                           </select>
                           <a id="-1_CandProfileFields.School_icimsDropdown" class="dropdown-select" aria-expanded="false" tabindex="0" aria-label="School — Make a Selection —" role="combobox">
                              <span id="-1_CandProfileFields.School_fakeSelected_icimsDropdown" class="dropdown-text"><span class="dropdown-placeholder">— Make a Selection —</span></span>
                              <div class="dropdown-arrow-container"><i class="dropdown-arrow"></i></div>
                           </a>
                           <div id="-1_CandProfileFields.School_icimsDropdown_ctnr" class="dropdown-container dropdown-invisible" aria-owns="-1_CandProfileFields.School_dropdown-results" aria-expanded="false" style="width: 255px;">
                              <input type="text" class="dropdown-search dropdown-invisible" autocomplete="off" placeholder="— Type to Search —" title="— Type to Search —" aria-label="— Type to Search —" aria-hidden="true" style="width: 213px;">
                              <div aria-live="polite">
                                 <ul id="-1_CandProfileFields.School_dropdown-results" class="dropdown-results" role="listbox" style="max-height: 24em;">
                                    <li id="result-selectable_-1_CandProfileFields.School_-1" class="dropdown-result result-selectable" role="option" dropdown-index="-1" title="— Make a Selection —" aria-label="— Make a Selection —"><span class="dropdown-placeholder">— Make a Selection —</span></li>
                                    <li id="result-selectable_-1_CandProfileFields.School_-1" class="dropdown-result result-unselectable" role="presentation" dropdown-index="-1" title="No Results" aria-label="No Results">No Results</li>
                                 </ul>
                                 <div class="dropdown-loading hide" style="width: 0%;"></div>
                                 <div style="overflow: hidden; display: block; width:0;height:0;" role="status" id="result-summary_-1_CandProfileFields.School">1 result available. Use down and up arrow keys to navigate.</div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div data-collection="CandProfileFields.Education" data-index="1" class="CandProfileFields.Education-1 iCIMS_TableRow iCIMS_FieldRow_Inline">
                        <div class=" iCIMS_InfoField iCIMS_InfoField_Candidate iCIMS_CollectionField iCIMS_TableCell"><label id="label_-1_CandProfileFields.OtherSchool" for="-1_CandProfileFields.OtherSchool"><span class="iCIMS_LabelText" name="labelText">Other School</span></label></div>
                        <div class="iCIMS_InfoData iCIMS_InfoData_Candidate iCIMS_CollectionField iCIMS_TableCell"><input type="text" id="-1_CandProfileFields.OtherSchool" name="-1_CandProfileFields.OtherSchool" class="iCIMS_Forms_Global customFieldContainer iCIMS_Forms_TextField iCIMS_Forms_Qnull form-control" onchange="pageDirtyFlag=true;" bgtparse="true" maxlength="256"></div>
                     </div>
                     <div data-collection="CandProfileFields.Education" data-index="1" class="CandProfileFields.Education-1 iCIMS_TableRow iCIMS_FieldRow_Inline">
                        <div class=" iCIMS_InfoField iCIMS_InfoField_Candidate iCIMS_CollectionField iCIMS_TableCell"><label id="label_-1_CandProfileFields.Degree" for="-1_CandProfileFields.Degree"><span class="iCIMS_LabelText" name="labelText">Degree</span></label></div>
                        <div class="iCIMS_InfoData iCIMS_InfoData_Candidate iCIMS_CollectionField iCIMS_TableCell">
                           <label class="iCIMS_508_Label" for="-1_CandProfileFields.Degree">Degree</label>
                           <select id="-1_CandProfileFields.Degree" name="-1_CandProfileFields.Degree" data-label="Degree" class=" iCIMS_Forms_Global customFieldContainer iCIMS_Forms_ListEditorField iCIMS_Forms_Qnull form-control dropdown-hide" bgtparse="true" list="lists.school.degree" type="3081" onchange="pageDirtyFlag=true;if (this.options[this.selectedIndex].value == -1) { return addItemToSelectFieldNLevelList(this); }else{ this.prevIndex = this.selectedIndex; } " icimsdropdown-enabled="1" icimsdropdown-ajax="1" icimsdropdown-search="0" icimsdropdown-selected="" hash="3aa7069629056c6697630bb8d456f6697ad31b9aa4268f10f9a15ff48c63f2fe">
                              <option value="" legacy="true"></option>
                           </select>
                           <a id="-1_CandProfileFields.Degree_icimsDropdown" class="dropdown-select" aria-expanded="false" tabindex="0" aria-label="Degree — Make a Selection —" role="combobox">
                              <span id="-1_CandProfileFields.Degree_fakeSelected_icimsDropdown" class="dropdown-text"><span class="dropdown-placeholder">— Make a Selection —</span></span>
                              <div class="dropdown-arrow-container"><i class="dropdown-arrow"></i></div>
                           </a>
                           <div id="-1_CandProfileFields.Degree_icimsDropdown_ctnr" class="dropdown-container dropdown-invisible" aria-owns="-1_CandProfileFields.Degree_dropdown-results" aria-expanded="false" style="width: 255px;">
                              <input type="text" class="dropdown-search dropdown-invisible" autocomplete="off" placeholder="— Type to Search —" title="— Type to Search —" aria-label="— Type to Search —" aria-hidden="true" style="width: 213px;">
                              <div aria-live="polite">
                                 <ul id="-1_CandProfileFields.Degree_dropdown-results" class="dropdown-results" role="listbox" style="max-height: 24em;">
                                    <li id="result-selectable_-1_CandProfileFields.Degree_-1" class="dropdown-result result-selectable" role="option" dropdown-index="-1" title="— Make a Selection —" aria-label="— Make a Selection —"><span class="dropdown-placeholder">— Make a Selection —</span></li>
                                    <li id="result-selectable_-1_CandProfileFields.Degree_0" class="dropdown-result result-selectable" role="option" dropdown-index="0" title="AS" aria-label="AS">AS</li>
                                    <li id="result-selectable_-1_CandProfileFields.Degree_1" class="dropdown-result result-selectable" role="option" dropdown-index="1" title="BS" aria-label="BS">BS</li>
                                    <li id="result-selectable_-1_CandProfileFields.Degree_2" class="dropdown-result result-selectable" role="option" dropdown-index="2" title="MS" aria-label="MS">MS</li>
                                    <li id="result-selectable_-1_CandProfileFields.Degree_3" class="dropdown-result result-selectable" role="option" dropdown-index="3" title="PhD" aria-label="PhD">PhD</li>
                                    <li id="result-selectable_-1_CandProfileFields.Degree_4" class="dropdown-result result-selectable" role="option" dropdown-index="4" title="MBA" aria-label="MBA">MBA</li>
                                    <li id="result-selectable_-1_CandProfileFields.Degree_5" class="dropdown-result result-selectable" role="option" dropdown-index="5" title="MCS" aria-label="MCS">MCS</li>
                                    <li id="result-selectable_-1_CandProfileFields.Degree_6" class="dropdown-result result-selectable" role="option" dropdown-index="6" title="BCS" aria-label="BCS">BCS</li>
                                    <li id="result-selectable_-1_CandProfileFields.Degree_7" class="dropdown-result result-selectable" role="option" dropdown-index="7" title="BA" aria-label="BA">BA</li>
                                 </ul>
                                 <div class="dropdown-loading hide" style="width: 0%;"></div>
                                 <div style="overflow: hidden; display: block; width:0;height:0;" role="status" id="result-summary_-1_CandProfileFields.Degree">9 results available. Use down and up arrow keys to navigate. </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div data-collection="CandProfileFields.Education" data-index="1" class="CandProfileFields.Education-1 iCIMS_TableRow iCIMS_FieldRow_Inline">
                        <div class=" iCIMS_InfoField iCIMS_InfoField_Candidate iCIMS_CollectionField iCIMS_TableCell"><label id="label_-1_CandProfileFields.Major" for="-1_CandProfileFields.Major"><span class="iCIMS_LabelText" name="labelText">Major</span></label></div>
                        <div class="iCIMS_InfoData iCIMS_InfoData_Candidate iCIMS_CollectionField iCIMS_TableCell">
                           <label class="iCIMS_508_Label" for="-1_CandProfileFields.Major">Major</label>
                           <select id="-1_CandProfileFields.Major" name="-1_CandProfileFields.Major" data-label="Major" class=" iCIMS_Forms_Global customFieldContainer iCIMS_Forms_ListEditorField iCIMS_Forms_Qnull form-control dropdown-hide" bgtparse="true" list="lists.school.major" type="3081" onchange="pageDirtyFlag=true;if (this.options[this.selectedIndex].value == -1) { return addItemToSelectFieldNLevelList(this); }else{ this.prevIndex = this.selectedIndex; } " icimsdropdown-enabled="1" icimsdropdown-ajax="1" icimsdropdown-search="1" icimsdropdown-selected="" hash="a9379ae730a0f1f6ca97e9e907c80b75ca84ab660508ef23306cb15cd0020077">
                              <option value="" legacy="true"></option>
                           </select>
                           <a id="-1_CandProfileFields.Major_icimsDropdown" class="dropdown-select" aria-expanded="false" tabindex="0" aria-label="Major — Make a Selection —" role="combobox">
                              <span id="-1_CandProfileFields.Major_fakeSelected_icimsDropdown" class="dropdown-text"><span class="dropdown-placeholder">— Make a Selection —</span></span>
                              <div class="dropdown-arrow-container"><i class="dropdown-arrow"></i></div>
                           </a>
                           <div id="-1_CandProfileFields.Major_icimsDropdown_ctnr" class="dropdown-container dropdown-invisible" aria-owns="-1_CandProfileFields.Major_dropdown-results" aria-expanded="false" style="width: 255px;">
                              <input type="text" class="dropdown-search" autocomplete="off" placeholder="— Type to Search —" title="— Type to Search —" aria-label="— Type to Search —" aria-autocomplete="list" aria-controls="-1_CandProfileFields.Major_dropdown-results" style="width: 213px;">
                              <div aria-live="polite">
                                 <ul id="-1_CandProfileFields.Major_dropdown-results" class="dropdown-results" role="listbox" style="max-height: 24em;">
                                    <li id="result-selectable_-1_CandProfileFields.Major_-1" class="dropdown-result result-selectable" role="option" dropdown-index="-1" title="— Make a Selection —" aria-label="— Make a Selection —"><span class="dropdown-placeholder">— Make a Selection —</span></li>
                                    <li id="result-selectable_-1_CandProfileFields.Major_0" class="dropdown-result result-selectable" role="option" dropdown-index="0" title="Aerospace Eng." aria-label="Aerospace Eng.">Aerospace Eng.</li>
                                    <li id="result-selectable_-1_CandProfileFields.Major_1" class="dropdown-result result-selectable" role="option" dropdown-index="1" title="Applied Mathematics" aria-label="Applied Mathematics">Applied Mathematics</li>
                                    <li id="result-selectable_-1_CandProfileFields.Major_2" class="dropdown-result result-selectable" role="option" dropdown-index="2" title="Applied Physics" aria-label="Applied Physics">Applied Physics</li>
                                    <li id="result-selectable_-1_CandProfileFields.Major_3" class="dropdown-result result-selectable" role="option" dropdown-index="3" title="Biochemistry" aria-label="Biochemistry">Biochemistry</li>
                                    <li id="result-selectable_-1_CandProfileFields.Major_4" class="dropdown-result result-selectable" role="option" dropdown-index="4" title="Biomedical Eng." aria-label="Biomedical Eng.">Biomedical Eng.</li>
                                    <li id="result-selectable_-1_CandProfileFields.Major_5" class="dropdown-result result-selectable" role="option" dropdown-index="5" title="Business Admin." aria-label="Business Admin.">Business Admin.</li>
                                    <li id="result-selectable_-1_CandProfileFields.Major_6" class="dropdown-result result-selectable" role="option" dropdown-index="6" title="Chemical Eng." aria-label="Chemical Eng.">Chemical Eng.</li>
                                    <li id="result-selectable_-1_CandProfileFields.Major_7" class="dropdown-result result-selectable" role="option" dropdown-index="7" title="Chemistry" aria-label="Chemistry">Chemistry</li>
                                    <li id="result-selectable_-1_CandProfileFields.Major_8" class="dropdown-result result-selectable" role="option" dropdown-index="8" title="Civil Eng." aria-label="Civil Eng.">Civil Eng.</li>
                                    <li id="result-selectable_-1_CandProfileFields.Major_9" class="dropdown-result result-selectable" role="option" dropdown-index="9" title="Communication Eng." aria-label="Communication Eng.">Communication Eng.</li>
                                    <li id="result-selectable_-1_CandProfileFields.Major_10" class="dropdown-result result-selectable" role="option" dropdown-index="10" title="Computer Eng." aria-label="Computer Eng.">Computer Eng.</li>
                                    <li id="result-selectable_-1_CandProfileFields.Major_11" class="dropdown-result result-selectable" role="option" dropdown-index="11" title="Computer Info. Sys." aria-label="Computer Info. Sys.">Computer Info. Sys.</li>
                                    <li id="result-selectable_-1_CandProfileFields.Major_12" class="dropdown-result result-selectable" role="option" dropdown-index="12" title="Computer Science" aria-label="Computer Science">Computer Science</li>
                                    <li id="result-selectable_-1_CandProfileFields.Major_13" class="dropdown-result result-selectable" role="option" dropdown-index="13" title="Electrical Eng." aria-label="Electrical Eng.">Electrical Eng.</li>
                                    <li id="result-selectable_-1_CandProfileFields.Major_14" class="dropdown-result result-selectable" role="option" dropdown-index="14" title="Electronic Eng." aria-label="Electronic Eng.">Electronic Eng.</li>
                                    <li id="result-selectable_-1_CandProfileFields.Major_15" class="dropdown-result result-selectable" role="option" dropdown-index="15" title="English" aria-label="English">English</li>
                                    <li id="result-selectable_-1_CandProfileFields.Major_16" class="dropdown-result result-selectable" role="option" dropdown-index="16" title="Finance/Accounting" aria-label="Finance/Accounting">Finance/Accounting</li>
                                    <li id="result-selectable_-1_CandProfileFields.Major_17" class="dropdown-result result-selectable" role="option" dropdown-index="17" title="Industrial Eng." aria-label="Industrial Eng.">Industrial Eng.</li>
                                    <li id="result-selectable_-1_CandProfileFields.Major_18" class="dropdown-result result-selectable" role="option" dropdown-index="18" title="Information Sys." aria-label="Information Sys.">Information Sys.</li>
                                    <li id="result-selectable_-1_CandProfileFields.Major_19" class="dropdown-result result-selectable" role="option" dropdown-index="19" title="Management" aria-label="Management">Management</li>
                                    <li id="result-selectable_-1_CandProfileFields.Major_20" class="dropdown-result result-selectable" role="option" dropdown-index="20" title="Management Info.Sys." aria-label="Management Info.Sys.">Management Info.Sys.</li>
                                    <li id="result-selectable_-1_CandProfileFields.Major_21" class="dropdown-result result-selectable" role="option" dropdown-index="21" title="Manufacturing Eng." aria-label="Manufacturing Eng.">Manufacturing Eng.</li>
                                    <li id="result-selectable_-1_CandProfileFields.Major_22" class="dropdown-result result-selectable" role="option" dropdown-index="22" title="Mathematics" aria-label="Mathematics">Mathematics</li>
                                    <li id="result-selectable_-1_CandProfileFields.Major_23" class="dropdown-result result-selectable" role="option" dropdown-index="23" title="Mechanical Eng." aria-label="Mechanical Eng.">Mechanical Eng.</li>
                                    <li id="result-selectable_-1_CandProfileFields.Major_24" class="dropdown-result result-selectable" role="option" dropdown-index="24" title="Others" aria-label="Others">Others</li>
                                 </ul>
                                 <div class="dropdown-loading hide" style="width: 0%;"></div>
                                 <div style="overflow: hidden; display: block; width:0;height:0;" role="status" id="result-summary_-1_CandProfileFields.Major">26 results available. Use down and up arrow keys to navigate. </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div data-collection="CandProfileFields.Education" data-index="1" class="CandProfileFields.Education-1 iCIMS_TableRow iCIMS_FieldRow_Inline">
                        <div class=" iCIMS_InfoField iCIMS_InfoField_Candidate iCIMS_CollectionField iCIMS_TableCell"><label id="label_-1_CandProfileFields.IsGraduated" for="-1_CandProfileFields.IsGraduated"><span class="iCIMS_LabelText" name="labelText">Did You Graduate?</span></label></div>
                        <div class="iCIMS_InfoData iCIMS_InfoData_Candidate iCIMS_CollectionField iCIMS_TableCell">
                           <select id="-1_CandProfileFields.IsGraduated" name="-1_CandProfileFields.IsGraduated" data-label="Did You Graduate?" class=" iCIMS_Forms_Global customFieldContainer iCIMS_Forms_ListEditorField iCIMS_Forms_Qnull form-control" bgtparse="true" list="lists.customfields_lists" type="3081" onchange="pageDirtyFlag=true;if (this.options[this.selectedIndex].value == -1) { return addItemToSelectFieldNLevelList(this); }else{ this.prevIndex = this.selectedIndex; } " icimsdropdown-enabled="0" icimsdropdown-ajax="1" icimsdropdown-search="0" icimsdropdown-selected="" hash="14f5927292e9d2d5ad233a59a0803a06176355a7d0f411bce446e931cc131b12">
                              <option value="" legacy="true"></option>
                              <option title="Yes" value="20466">Yes</option>
                              <option title="No" value="20467">No</option>
                           </select>
                        </div>
                     </div>
                     <div role="group" aria-labelledby="label_-1_CandProfileFields.EducationStartDate" data-collection="CandProfileFields.Education" data-index="1" class="CandProfileFields.Education-1 iCIMS_TableRow iCIMS_FieldRow_Inline">
                        <div class=" iCIMS_InfoField iCIMS_InfoField_Candidate iCIMS_CollectionField iCIMS_TableCell"><label id="label_-1_CandProfileFields.EducationStartDate"><span class="iCIMS_LabelText" name="labelText">Start Date</span></label>&nbsp;<label id="label_-1_CandProfileFields.EducationStartDate_desc"><span class="iCIMS_LabelText" name="labelText">(Month / Day / Year)</span></label></div>
                        <div class="iCIMS_InfoData iCIMS_InfoData_Candidate iCIMS_CollectionField iCIMS_TableCell">
                           <div class="iCIMS_Forms_Global  iCIMS_Forms_DateOnlyField iCIMS_Forms_Qnull  iCIMS_Table">
                              <div class="iCIMS_TableRow">
                                 <div class="iCIMS_DateField-Month iCIMS_TableCell">
                                    <label id="label_-1_CandProfileFields.EducationStartDate_Month" class="iCIMS_508_Label" for="-1_CandProfileFields.EducationStartDate_Month">Month</label>
                                    <select id="-1_CandProfileFields.EducationStartDate_Month" name="-1_CandProfileFields.EducationStartDate_Month" onchange="pageDirtyFlag=true;" aria-labelledby="label_-1_CandProfileFields.EducationStartDate label_-1_CandProfileFields.EducationStartDate_Month" class="iCIMS_Forms_Global iCIMS_Forms_MonthInput iCIMS_Forms_DropDown form-control">
                                       <option value="0"></option>
                                       <option value="01">Jan</option>
                                       <option value="02">Feb</option>
                                       <option value="03">Mar</option>
                                       <option value="04">Apr</option>
                                       <option value="05">May</option>
                                       <option value="06">Jun</option>
                                       <option value="07">Jul</option>
                                       <option value="08">Aug</option>
                                       <option value="09">Sep</option>
                                       <option value="10">Oct</option>
                                       <option value="11">Nov</option>
                                       <option value="12">Dec</option>
                                    </select>
                                 </div>
                                 <div class="iCIMS_DateField-Day iCIMS_TableCell">
                                    <label id="label_-1_CandProfileFields.EducationStartDate_Date" class="iCIMS_508_Label" for="-1_CandProfileFields.EducationStartDate_Date">Day</label>
                                    <select id="-1_CandProfileFields.EducationStartDate_Date" name="-1_CandProfileFields.EducationStartDate_Date" onchange="pageDirtyFlag=true;" aria-labelledby="label_-1_CandProfileFields.EducationStartDate label_-1_CandProfileFields.EducationStartDate_Date" class="iCIMS_Forms_Global iCIMS_Forms_DayInput iCIMS_Forms_DropDown form-control">
                                       <option value="0"></option>
                                       <option value="1">1</option>
                                       <option value="2">2</option>
                                       <option value="3">3</option>
                                       <option value="4">4</option>
                                       <option value="5">5</option>
                                       <option value="6">6</option>
                                       <option value="7">7</option>
                                       <option value="8">8</option>
                                       <option value="9">9</option>
                                       <option value="10">10</option>
                                       <option value="11">11</option>
                                       <option value="12">12</option>
                                       <option value="13">13</option>
                                       <option value="14">14</option>
                                       <option value="15">15</option>
                                       <option value="16">16</option>
                                       <option value="17">17</option>
                                       <option value="18">18</option>
                                       <option value="19">19</option>
                                       <option value="20">20</option>
                                       <option value="21">21</option>
                                       <option value="22">22</option>
                                       <option value="23">23</option>
                                       <option value="24">24</option>
                                       <option value="25">25</option>
                                       <option value="26">26</option>
                                       <option value="27">27</option>
                                       <option value="28">28</option>
                                       <option value="29">29</option>
                                       <option value="30">30</option>
                                       <option value="31">31</option>
                                    </select>
                                 </div>
                                 <div class="iCIMS_DateField-Year iCIMS_TableCell"><label id="label_-1_CandProfileFields.EducationStartDate_Year" class="iCIMS_508_Label" for="-1_CandProfileFields.EducationStartDate_Year">Year</label><input type="text" size="6" maxlength="4" id="-1_CandProfileFields.EducationStartDate_Year" name="-1_CandProfileFields.EducationStartDate_Year" onchange="pageDirtyFlag=true;" aria-labelledby="label_-1_CandProfileFields.EducationStartDate label_-1_CandProfileFields.EducationStartDate_Year" class="iCIMS_Forms_Global iCIMS_Forms_YearInput form-control"></div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div data-collection="CandProfileFields.Education" data-index="1" class="CandProfileFields.Education-1 iCIMS_TableRow iCIMS_FieldRow_Inline">
                        <div class=" iCIMS_InfoField iCIMS_InfoField_Candidate iCIMS_CollectionField iCIMS_TableCell"><label id="label_-1_CandProfileFields.EducationCity" for="-1_CandProfileFields.EducationCity"><span class="iCIMS_LabelText" name="labelText">City</span></label></div>
                        <div class="iCIMS_InfoData iCIMS_InfoData_Candidate iCIMS_CollectionField iCIMS_TableCell"><input type="text" id="-1_CandProfileFields.EducationCity" name="-1_CandProfileFields.EducationCity" class="iCIMS_Forms_Global customFieldContainer iCIMS_Forms_TextField iCIMS_Forms_Qnull form-control" onchange="pageDirtyFlag=true;" bgtparse="true" maxlength="64"></div>
                     </div>
                     <div data-collection="CandProfileFields.Education" data-index="1" class="CandProfileFields.Education-1 iCIMS_TableRow iCIMS_FieldRow_Inline">
                        <div class=" iCIMS_InfoField iCIMS_InfoField_Candidate iCIMS_CollectionField iCIMS_TableCell"><label id="label_-1_CandProfileFields.EducationCountry" for="-1_CandProfileFields.EducationCountry"><span class="iCIMS_LabelText" name="labelText">Country</span></label></div>
                        <div class="iCIMS_InfoData iCIMS_InfoData_Candidate iCIMS_CollectionField iCIMS_TableCell">
                           <select id="-1_CandProfileFields.EducationCountry" name="-1_CandProfileFields.EducationCountry" data-label="Country" class=" iCIMS_Forms_Global customFieldContainer iCIMS_Forms_IdDropDown iCIMS_Forms_Qnull form-control dropdown-hide" onchange="pageDirtyFlag=true;icimsChangeParent('-1_CandProfileFields.EducationCountry', '-1_CandProfileFields.EducationState')" icimsdropdown-enabled="1" icimsdropdown-ajax="1" icimsdropdown-search="1" icimsdropdown-selected="" data-ddd-child-link="CandProfileFields.EducationState" data-ddd-message="Please select a country" data-ddd-no-children="No states available" bgtparse="true" hash="c3f82f3a1e12003e7cc9081054c9dcb54d3a89c29d9757a1878f15756a5e1992">
                              <option value="" legacy="true"></option>
                           </select>
                           <a id="-1_CandProfileFields.EducationCountry_icimsDropdown" class="dropdown-select" aria-expanded="false" tabindex="0" aria-label="Country — Make a Selection —" role="combobox">
                              <span id="-1_CandProfileFields.EducationCountry_fakeSelected_icimsDropdown" class="dropdown-text"><span class="dropdown-placeholder">— Make a Selection —</span></span>
                              <div class="dropdown-arrow-container"><i class="dropdown-arrow"></i></div>
                           </a>
                           <div id="-1_CandProfileFields.EducationCountry_icimsDropdown_ctnr" class="dropdown-container dropdown-invisible" aria-owns="-1_CandProfileFields.EducationCountry_dropdown-results" aria-expanded="false" style="width: 255px;">
                              <input type="text" class="dropdown-search" autocomplete="off" placeholder="— Type to Search —" title="— Type to Search —" aria-label="— Type to Search —" aria-autocomplete="list" aria-controls="-1_CandProfileFields.EducationCountry_dropdown-results" style="width: 213px;">
                              <div aria-live="polite">
                                 <ul id="-1_CandProfileFields.EducationCountry_dropdown-results" class="dropdown-results" role="listbox" style="max-height: 24em;">
                                    <li id="result-selectable_-1_CandProfileFields.EducationCountry_-1" class="dropdown-result result-selectable" role="option" dropdown-index="-1" title="— Make a Selection —" aria-label="— Make a Selection —"><span class="dropdown-placeholder">— Make a Selection —</span></li>
                                    <li id="result-selectable_-1_CandProfileFields.EducationCountry_0" class="dropdown-result result-selectable" role="option" dropdown-index="0" title="United States" aria-label="United States">United States</li>
                                    <li id="result-selectable_-1_CandProfileFields.EducationCountry_1" class="dropdown-result result-selectable" role="option" dropdown-index="1" title="Afghanistan" aria-label="Afghanistan">Afghanistan</li>
                                    <li id="result-selectable_-1_CandProfileFields.EducationCountry_2" class="dropdown-result result-selectable" role="option" dropdown-index="2" title="Åland Islands" aria-label="Åland Islands">Åland Islands</li>
                                    <li id="result-selectable_-1_CandProfileFields.EducationCountry_3" class="dropdown-result result-selectable" role="option" dropdown-index="3" title="Albania" aria-label="Albania">Albania</li>
                                    <li id="result-selectable_-1_CandProfileFields.EducationCountry_4" class="dropdown-result result-selectable" role="option" dropdown-index="4" title="Algeria" aria-label="Algeria">Algeria</li>
                                    <li id="result-selectable_-1_CandProfileFields.EducationCountry_5" class="dropdown-result result-selectable" role="option" dropdown-index="5" title="American Samoa" aria-label="American Samoa">American Samoa</li>
                                    <li id="result-selectable_-1_CandProfileFields.EducationCountry_6" class="dropdown-result result-selectable" role="option" dropdown-index="6" title="Andorra" aria-label="Andorra">Andorra</li>
                                    <li id="result-selectable_-1_CandProfileFields.EducationCountry_7" class="dropdown-result result-selectable" role="option" dropdown-index="7" title="Angola" aria-label="Angola">Angola</li>
                                    <li id="result-selectable_-1_CandProfileFields.EducationCountry_8" class="dropdown-result result-selectable" role="option" dropdown-index="8" title="Anguilla" aria-label="Anguilla">Anguilla</li>
                                    <li id="result-selectable_-1_CandProfileFields.EducationCountry_9" class="dropdown-result result-selectable" role="option" dropdown-index="9" title="Antarctica" aria-label="Antarctica">Antarctica</li>
                                    <li id="result-selectable_-1_CandProfileFields.EducationCountry_10" class="dropdown-result result-selectable" role="option" dropdown-index="10" title="Antigua And Barbuda" aria-label="Antigua And Barbuda">Antigua And Barbuda</li>
                                    <li id="result-selectable_-1_CandProfileFields.EducationCountry_11" class="dropdown-result result-selectable" role="option" dropdown-index="11" title="Argentina" aria-label="Argentina">Argentina</li>
                                    <li id="result-selectable_-1_CandProfileFields.EducationCountry_12" class="dropdown-result result-selectable" role="option" dropdown-index="12" title="Armenia" aria-label="Armenia">Armenia</li>
                                    <li id="result-selectable_-1_CandProfileFields.EducationCountry_13" class="dropdown-result result-selectable" role="option" dropdown-index="13" title="Aruba" aria-label="Aruba">Aruba</li>
                                    <li id="result-selectable_-1_CandProfileFields.EducationCountry_14" class="dropdown-result result-selectable" role="option" dropdown-index="14" title="Australia" aria-label="Australia">Australia</li>
                                    <li id="result-selectable_-1_CandProfileFields.EducationCountry_15" class="dropdown-result result-selectable" role="option" dropdown-index="15" title="Austria" aria-label="Austria">Austria</li>
                                    <li id="result-selectable_-1_CandProfileFields.EducationCountry_16" class="dropdown-result result-selectable" role="option" dropdown-index="16" title="Azerbaijan" aria-label="Azerbaijan">Azerbaijan</li>
                                    <li id="result-selectable_-1_CandProfileFields.EducationCountry_17" class="dropdown-result result-selectable" role="option" dropdown-index="17" title="Bahamas" aria-label="Bahamas">Bahamas</li>
                                    <li id="result-selectable_-1_CandProfileFields.EducationCountry_18" class="dropdown-result result-selectable" role="option" dropdown-index="18" title="Bahrain" aria-label="Bahrain">Bahrain</li>
                                    <li id="result-selectable_-1_CandProfileFields.EducationCountry_19" class="dropdown-result result-selectable" role="option" dropdown-index="19" title="Bangladesh" aria-label="Bangladesh">Bangladesh</li>
                                    <li id="result-selectable_-1_CandProfileFields.EducationCountry_20" class="dropdown-result result-selectable" role="option" dropdown-index="20" title="Barbados" aria-label="Barbados">Barbados</li>
                                    <li id="result-selectable_-1_CandProfileFields.EducationCountry_21" class="dropdown-result result-selectable" role="option" dropdown-index="21" title="Belarus" aria-label="Belarus">Belarus</li>
                                    <li id="result-selectable_-1_CandProfileFields.EducationCountry_22" class="dropdown-result result-selectable" role="option" dropdown-index="22" title="Belgium" aria-label="Belgium">Belgium</li>
                                    <li id="result-selectable_-1_CandProfileFields.EducationCountry_23" class="dropdown-result result-selectable" role="option" dropdown-index="23" title="Belize" aria-label="Belize">Belize</li>
                                    <li id="result-selectable_-1_CandProfileFields.EducationCountry_24" class="dropdown-result result-selectable" role="option" dropdown-index="24" title="Benin" aria-label="Benin">Benin</li>
                                 </ul>
                                 <div class="dropdown-loading hide" style="width: 0%;"></div>
                                 <div style="overflow: hidden; display: block; width:0;height:0;" role="status" id="result-summary_-1_CandProfileFields.EducationCountry">26 results available. Use down and up arrow keys to navigate. </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div data-collection="CandProfileFields.Education" data-index="1" class="CandProfileFields.Education-1 iCIMS_TableRow iCIMS_FieldRow_Inline">
                        <div class=" iCIMS_InfoField iCIMS_InfoField_Candidate iCIMS_CollectionField iCIMS_TableCell"><label id="label_-1_CandProfileFields.EducationState" for="-1_CandProfileFields.EducationState"><span class="iCIMS_LabelText" name="labelText">State</span></label></div>
                        <div class="iCIMS_InfoData iCIMS_InfoData_Candidate iCIMS_CollectionField iCIMS_TableCell">
                           <select id="-1_CandProfileFields.EducationState" name="-1_CandProfileFields.EducationState" data-label="State" class=" iCIMS_Forms_Global customFieldContainer iCIMS_Forms_IdDropDown iCIMS_Forms_Qnull form-control dropdown-hide" onchange="pageDirtyFlag=true;" icimsdropdown-enabled="1" icimsdropdown-ajax="1" icimsdropdown-search="1" icimsdropdown-selected="" data-ddd-parent-link="CandProfileFields.EducationCountry" bgtparse="true" hash="75574333950e676ab38e0e1a2535e7224fb48bf46609a6a54d95a7ea325e4d50">
                              <option value="-999" selected="selected">Please select a country</option>
                           </select>
                           <a id="-1_CandProfileFields.EducationState_icimsDropdown" class="dropdown-select" aria-expanded="false" tabindex="0" aria-label="State Please select a country" role="combobox">
                              <span id="-1_CandProfileFields.EducationState_fakeSelected_icimsDropdown" class="dropdown-text"><span class="dropdown-placeholder">Please select a country</span></span>
                              <div class="dropdown-arrow-container"><i class="dropdown-arrow"></i></div>
                           </a>
                           <div id="-1_CandProfileFields.EducationState_icimsDropdown_ctnr" class="dropdown-container dropdown-invisible" aria-owns="-1_CandProfileFields.EducationState_dropdown-results" aria-expanded="false" style="width: 255px;">
                              <input type="text" class="dropdown-search" autocomplete="off" placeholder="— Type to Search —" title="— Type to Search —" aria-label="— Type to Search —" aria-autocomplete="list" aria-controls="-1_CandProfileFields.EducationState_dropdown-results" style="width: 213px;">
                              <div aria-live="polite">
                                 <ul id="-1_CandProfileFields.EducationState_dropdown-results" class="dropdown-results" role="listbox" style="max-height: 24em;">
                                    <li id="result-selectable_-1_CandProfileFields.EducationState_-1" class="dropdown-result result-selectable" role="option" dropdown-index="-1" title="— Make a Selection —" aria-label="— Make a Selection —"><span class="dropdown-placeholder">— Make a Selection —</span></li>
                                    <li id="result-selectable_-1_CandProfileFields.EducationState_-1" class="dropdown-result result-unselectable" role="presentation" dropdown-index="-1" title="No Results" aria-label="No Results">No Results</li>
                                 </ul>
                                 <div class="dropdown-loading hide" style="width: 0%;"></div>
                                 <div style="overflow: hidden; display: block; width:0;height:0;" role="status" id="result-summary_-1_CandProfileFields.EducationState">1 result available. Use down and up arrow keys to navigate.</div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </fieldset>

               </div>
            </div>
         </div>
         <div role="group">
            <h2 class="iCIMS_SubHeader iCIMS_SubHeader_Candidate">Work Experience</h2>
            <div class="iCIMS_ProfileFormTable iCIMS_Table">
               <div tabindex="-1" class="iCIMS_CollectionContainer rcf3211-1-Container">
                  <fieldset class="iCIMS_CollectionGroup iCIMS_OddRow">
                     <legend><span tabindex="-1" class="iCIMS_LabelText" name="labelText" id="rcf3211_-1_label">Professional Experience (1)</span></legend>
                     <div class="rcf3211-1 iCIMS_TableRow">
                        <div class="iCIMS_InfoField iCIMS_InfoField_Candidate iCIMS_CollectionLegend iCIMS_TableCell"></div>
                        <div class="iCIMS_InfoData iCIMS_TableCell"></div>
                     </div>
                     <input tabindex="-1" type="hidden" name="portalLabelrcf3211-1" id="portalLabelrcf3211-1" value="Professional Experience (1)">
                     <div data-collection="rcf3211" data-index="1" class="rcf3211-1 iCIMS_TableRow iCIMS_FieldRow_Inline">
                        <div class=" iCIMS_InfoField iCIMS_InfoField_Candidate iCIMS_CollectionField iCIMS_TableCell"><label id="label_-1_PersonProfileFields.rcf3212" for="-1_PersonProfileFields.rcf3212"><span class="iCIMS_LabelText" name="labelText">Employer</span></label></div>
                        <div class="iCIMS_InfoData iCIMS_InfoData_Candidate iCIMS_CollectionField iCIMS_TableCell"><input type="text" id="-1_PersonProfileFields.rcf3212" name="-1_PersonProfileFields.rcf3212" class="iCIMS_Forms_Global customFieldContainer iCIMS_Forms_TextField iCIMS_Forms_Qnull form-control" onchange="pageDirtyFlag=true;" bgtparse="true" maxlength="128"></div>
                     </div>
                     <div data-collection="rcf3211" data-index="1" class="rcf3211-1 iCIMS_TableRow iCIMS_FieldRow_Inline">
                        <div class=" iCIMS_InfoField iCIMS_InfoField_Candidate iCIMS_CollectionField iCIMS_TableCell"><label id="label_-1_PersonProfileFields.rcf3216" for="-1_PersonProfileFields.rcf3216"><span class="iCIMS_LabelText" name="labelText">City</span></label></div>
                        <div class="iCIMS_InfoData iCIMS_InfoData_Candidate iCIMS_CollectionField iCIMS_TableCell"><input type="text" id="-1_PersonProfileFields.rcf3216" name="-1_PersonProfileFields.rcf3216" class="iCIMS_Forms_Global customFieldContainer iCIMS_Forms_TextField iCIMS_Forms_Qnull form-control" onchange="pageDirtyFlag=true;" bgtparse="true" maxlength="128"></div>
                     </div>
                     <div data-collection="rcf3211" data-index="1" class="rcf3211-1 iCIMS_TableRow iCIMS_FieldRow_Inline">
                        <div class=" iCIMS_InfoField iCIMS_InfoField_Candidate iCIMS_CollectionField iCIMS_TableCell"><label id="label_-1_PersonProfileFields.rcf3218" for="-1_PersonProfileFields.rcf3218"><span class="iCIMS_LabelText" name="labelText">Country</span></label></div>
                        <div class="iCIMS_InfoData iCIMS_InfoData_Candidate iCIMS_CollectionField iCIMS_TableCell">
                           <select id="-1_PersonProfileFields.rcf3218" name="-1_PersonProfileFields.rcf3218" data-label="Country" class=" iCIMS_Forms_Global customFieldContainer iCIMS_Forms_IdDropDown iCIMS_Forms_Qnull form-control dropdown-hide" onchange="pageDirtyFlag=true;icimsChangeParent('-1_PersonProfileFields.rcf3218', '-1_PersonProfileFields.rcf3217')" icimsdropdown-enabled="1" icimsdropdown-ajax="1" icimsdropdown-search="1" icimsdropdown-selected="" data-ddd-child-link="rcf3217" data-ddd-message="Please select a country" data-ddd-no-children="No states available" bgtparse="true" hash="a776b395c15f077361ccbd1752602dcd6d338b2357df1abdada5c97308bef8ff">
                              <option value="" legacy="true"></option>
                           </select>
                           <a id="-1_PersonProfileFields.rcf3218_icimsDropdown" class="dropdown-select" aria-expanded="false" tabindex="0" aria-label="Country — Make a Selection —" role="combobox">
                              <span id="-1_PersonProfileFields.rcf3218_fakeSelected_icimsDropdown" class="dropdown-text"><span class="dropdown-placeholder">— Make a Selection —</span></span>
                              <div class="dropdown-arrow-container"><i class="dropdown-arrow"></i></div>
                           </a>
                           <div id="-1_PersonProfileFields.rcf3218_icimsDropdown_ctnr" class="dropdown-container dropdown-invisible" aria-owns="-1_PersonProfileFields.rcf3218_dropdown-results" aria-expanded="false" style="width: 255px;">
                              <input type="text" class="dropdown-search" autocomplete="off" placeholder="— Type to Search —" title="— Type to Search —" aria-label="— Type to Search —" aria-autocomplete="list" aria-controls="-1_PersonProfileFields.rcf3218_dropdown-results" style="width: 213px;">
                              <div aria-live="polite">
                                 <ul id="-1_PersonProfileFields.rcf3218_dropdown-results" class="dropdown-results" role="listbox" style="max-height: 24em;">
                                    <li id="result-selectable_-1_PersonProfileFields.rcf3218_-1" class="dropdown-result result-selectable" role="option" dropdown-index="-1" title="— Make a Selection —" aria-label="— Make a Selection —"><span class="dropdown-placeholder">— Make a Selection —</span></li>
                                    <li id="result-selectable_-1_PersonProfileFields.rcf3218_0" class="dropdown-result result-selectable" role="option" dropdown-index="0" title="United States" aria-label="United States">United States</li>
                                    <li id="result-selectable_-1_PersonProfileFields.rcf3218_1" class="dropdown-result result-selectable" role="option" dropdown-index="1" title="Afghanistan" aria-label="Afghanistan">Afghanistan</li>
                                    <li id="result-selectable_-1_PersonProfileFields.rcf3218_2" class="dropdown-result result-selectable" role="option" dropdown-index="2" title="Åland Islands" aria-label="Åland Islands">Åland Islands</li>
                                    <li id="result-selectable_-1_PersonProfileFields.rcf3218_3" class="dropdown-result result-selectable" role="option" dropdown-index="3" title="Albania" aria-label="Albania">Albania</li>
                                    <li id="result-selectable_-1_PersonProfileFields.rcf3218_4" class="dropdown-result result-selectable" role="option" dropdown-index="4" title="Algeria" aria-label="Algeria">Algeria</li>
                                    <li id="result-selectable_-1_PersonProfileFields.rcf3218_5" class="dropdown-result result-selectable" role="option" dropdown-index="5" title="American Samoa" aria-label="American Samoa">American Samoa</li>
                                    <li id="result-selectable_-1_PersonProfileFields.rcf3218_6" class="dropdown-result result-selectable" role="option" dropdown-index="6" title="Andorra" aria-label="Andorra">Andorra</li>
                                    <li id="result-selectable_-1_PersonProfileFields.rcf3218_7" class="dropdown-result result-selectable" role="option" dropdown-index="7" title="Angola" aria-label="Angola">Angola</li>
                                    <li id="result-selectable_-1_PersonProfileFields.rcf3218_8" class="dropdown-result result-selectable" role="option" dropdown-index="8" title="Anguilla" aria-label="Anguilla">Anguilla</li>
                                    <li id="result-selectable_-1_PersonProfileFields.rcf3218_9" class="dropdown-result result-selectable" role="option" dropdown-index="9" title="Antarctica" aria-label="Antarctica">Antarctica</li>
                                    <li id="result-selectable_-1_PersonProfileFields.rcf3218_10" class="dropdown-result result-selectable" role="option" dropdown-index="10" title="Antigua And Barbuda" aria-label="Antigua And Barbuda">Antigua And Barbuda</li>
                                    <li id="result-selectable_-1_PersonProfileFields.rcf3218_11" class="dropdown-result result-selectable" role="option" dropdown-index="11" title="Argentina" aria-label="Argentina">Argentina</li>
                                    <li id="result-selectable_-1_PersonProfileFields.rcf3218_12" class="dropdown-result result-selectable" role="option" dropdown-index="12" title="Armenia" aria-label="Armenia">Armenia</li>
                                    <li id="result-selectable_-1_PersonProfileFields.rcf3218_13" class="dropdown-result result-selectable" role="option" dropdown-index="13" title="Aruba" aria-label="Aruba">Aruba</li>
                                    <li id="result-selectable_-1_PersonProfileFields.rcf3218_14" class="dropdown-result result-selectable" role="option" dropdown-index="14" title="Australia" aria-label="Australia">Australia</li>
                                    <li id="result-selectable_-1_PersonProfileFields.rcf3218_15" class="dropdown-result result-selectable" role="option" dropdown-index="15" title="Austria" aria-label="Austria">Austria</li>
                                    <li id="result-selectable_-1_PersonProfileFields.rcf3218_16" class="dropdown-result result-selectable" role="option" dropdown-index="16" title="Azerbaijan" aria-label="Azerbaijan">Azerbaijan</li>
                                    <li id="result-selectable_-1_PersonProfileFields.rcf3218_17" class="dropdown-result result-selectable" role="option" dropdown-index="17" title="Bahamas" aria-label="Bahamas">Bahamas</li>
                                    <li id="result-selectable_-1_PersonProfileFields.rcf3218_18" class="dropdown-result result-selectable" role="option" dropdown-index="18" title="Bahrain" aria-label="Bahrain">Bahrain</li>
                                    <li id="result-selectable_-1_PersonProfileFields.rcf3218_19" class="dropdown-result result-selectable" role="option" dropdown-index="19" title="Bangladesh" aria-label="Bangladesh">Bangladesh</li>
                                    <li id="result-selectable_-1_PersonProfileFields.rcf3218_20" class="dropdown-result result-selectable" role="option" dropdown-index="20" title="Barbados" aria-label="Barbados">Barbados</li>
                                    <li id="result-selectable_-1_PersonProfileFields.rcf3218_21" class="dropdown-result result-selectable" role="option" dropdown-index="21" title="Belarus" aria-label="Belarus">Belarus</li>
                                    <li id="result-selectable_-1_PersonProfileFields.rcf3218_22" class="dropdown-result result-selectable" role="option" dropdown-index="22" title="Belgium" aria-label="Belgium">Belgium</li>
                                    <li id="result-selectable_-1_PersonProfileFields.rcf3218_23" class="dropdown-result result-selectable" role="option" dropdown-index="23" title="Belize" aria-label="Belize">Belize</li>
                                    <li id="result-selectable_-1_PersonProfileFields.rcf3218_24" class="dropdown-result result-selectable" role="option" dropdown-index="24" title="Benin" aria-label="Benin">Benin</li>
                                 </ul>
                                 <div class="dropdown-loading hide" style="width: 0%;"></div>
                                 <div style="overflow: hidden; display: block; width:0;height:0;" role="status" id="result-summary_-1_PersonProfileFields.rcf3218">26 results available. Use down and up arrow keys to navigate. </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div data-collection="rcf3211" data-index="1" class="rcf3211-1 iCIMS_TableRow iCIMS_FieldRow_Inline">
                        <div class=" iCIMS_InfoField iCIMS_InfoField_Candidate iCIMS_CollectionField iCIMS_TableCell"><label id="label_-1_PersonProfileFields.rcf3217" for="-1_PersonProfileFields.rcf3217"><span class="iCIMS_LabelText" name="labelText">State</span></label></div>
                        <div class="iCIMS_InfoData iCIMS_InfoData_Candidate iCIMS_CollectionField iCIMS_TableCell">
                           <select id="-1_PersonProfileFields.rcf3217" name="-1_PersonProfileFields.rcf3217" data-label="State" class=" iCIMS_Forms_Global customFieldContainer iCIMS_Forms_IdDropDown iCIMS_Forms_Qnull form-control dropdown-hide" onchange="pageDirtyFlag=true;" icimsdropdown-enabled="1" icimsdropdown-ajax="1" icimsdropdown-search="1" icimsdropdown-selected="" data-ddd-parent-link="PersonProfileFields.rcf3218" bgtparse="true" hash="841d8ecdc801e3d89a53b81350d988f29243dff37fdba7de393a2aad7688889e">
                              <option value="-999" selected="selected">Please select a country</option>
                           </select>
                           <a id="-1_PersonProfileFields.rcf3217_icimsDropdown" class="dropdown-select" aria-expanded="false" tabindex="0" aria-label="State Please select a country" role="combobox">
                              <span id="-1_PersonProfileFields.rcf3217_fakeSelected_icimsDropdown" class="dropdown-text"><span class="dropdown-placeholder">Please select a country</span></span>
                              <div class="dropdown-arrow-container"><i class="dropdown-arrow"></i></div>
                           </a>
                           <div id="-1_PersonProfileFields.rcf3217_icimsDropdown_ctnr" class="dropdown-container dropdown-invisible" aria-owns="-1_PersonProfileFields.rcf3217_dropdown-results" aria-expanded="false" style="width: 255px;">
                              <input type="text" class="dropdown-search" autocomplete="off" placeholder="— Type to Search —" title="— Type to Search —" aria-label="— Type to Search —" aria-autocomplete="list" aria-controls="-1_PersonProfileFields.rcf3217_dropdown-results" style="width: 213px;">
                              <div aria-live="polite">
                                 <ul id="-1_PersonProfileFields.rcf3217_dropdown-results" class="dropdown-results" role="listbox" style="max-height: 24em;">
                                    <li id="result-selectable_-1_PersonProfileFields.rcf3217_-1" class="dropdown-result result-selectable" role="option" dropdown-index="-1" title="— Make a Selection —" aria-label="— Make a Selection —"><span class="dropdown-placeholder">— Make a Selection —</span></li>
                                    <li id="result-selectable_-1_PersonProfileFields.rcf3217_-1" class="dropdown-result result-unselectable" role="presentation" dropdown-index="-1" title="No Results" aria-label="No Results">No Results</li>
                                 </ul>
                                 <div class="dropdown-loading hide" style="width: 0%;"></div>
                                 <div style="overflow: hidden; display: block; width:0;height:0;" role="status" id="result-summary_-1_PersonProfileFields.rcf3217">1 result available. Use down and up arrow keys to navigate.</div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div data-collection="rcf3211" data-index="1" class="rcf3211-1 iCIMS_TableRow iCIMS_FieldRow_Inline">
                        <div class=" iCIMS_InfoField iCIMS_InfoField_Candidate iCIMS_CollectionField iCIMS_TableCell"><label id="label_-1_PersonProfileFields.rcf3213" for="-1_PersonProfileFields.rcf3213"><span class="iCIMS_LabelText" name="labelText">Title</span></label></div>
                        <div class="iCIMS_InfoData iCIMS_InfoData_Candidate iCIMS_CollectionField iCIMS_TableCell"><input type="text" id="-1_PersonProfileFields.rcf3213" name="-1_PersonProfileFields.rcf3213" class="iCIMS_Forms_Global customFieldContainer iCIMS_Forms_TextField iCIMS_Forms_Qnull form-control" onchange="pageDirtyFlag=true;" bgtparse="true" maxlength="64"></div>
                     </div>
                     <div role="group" aria-labelledby="label_-1_PersonProfileFields.rcf3214" data-collection="rcf3211" data-index="1" class="rcf3211-1 iCIMS_TableRow iCIMS_FieldRow_Inline">
                        <div class=" iCIMS_InfoField iCIMS_InfoField_Candidate iCIMS_CollectionField iCIMS_TableCell"><label id="label_-1_PersonProfileFields.rcf3214"><span class="iCIMS_LabelText" name="labelText">Start Date</span></label>&nbsp;<label id="label_-1_PersonProfileFields.rcf3214_desc"><span class="iCIMS_LabelText" name="labelText">(Month / Day / Year)</span></label></div>
                        <div class="iCIMS_InfoData iCIMS_InfoData_Candidate iCIMS_CollectionField iCIMS_TableCell">
                           <div class="iCIMS_Forms_Global  iCIMS_Forms_DateOnlyField iCIMS_Forms_Qnull  iCIMS_Table">
                              <div class="iCIMS_TableRow">
                                 <div class="iCIMS_DateField-Month iCIMS_TableCell">
                                    <label id="label_-1_PersonProfileFields.rcf3214_Month" class="iCIMS_508_Label" for="-1_PersonProfileFields.rcf3214_Month">Month</label>
                                    <select id="-1_PersonProfileFields.rcf3214_Month" name="-1_PersonProfileFields.rcf3214_Month" onchange="pageDirtyFlag=true;" aria-labelledby="label_-1_PersonProfileFields.rcf3214 label_-1_PersonProfileFields.rcf3214_Month" class="iCIMS_Forms_Global iCIMS_Forms_MonthInput iCIMS_Forms_DropDown form-control">
                                       <option value="0"></option>
                                       <option value="01">Jan</option>
                                       <option value="02">Feb</option>
                                       <option value="03">Mar</option>
                                       <option value="04">Apr</option>
                                       <option value="05">May</option>
                                       <option value="06">Jun</option>
                                       <option value="07">Jul</option>
                                       <option value="08">Aug</option>
                                       <option value="09">Sep</option>
                                       <option value="10">Oct</option>
                                       <option value="11">Nov</option>
                                       <option value="12">Dec</option>
                                    </select>
                                 </div>
                                 <div class="iCIMS_DateField-Day iCIMS_TableCell">
                                    <label id="label_-1_PersonProfileFields.rcf3214_Date" class="iCIMS_508_Label" for="-1_PersonProfileFields.rcf3214_Date">Day</label>
                                    <select id="-1_PersonProfileFields.rcf3214_Date" name="-1_PersonProfileFields.rcf3214_Date" onchange="pageDirtyFlag=true;" aria-labelledby="label_-1_PersonProfileFields.rcf3214 label_-1_PersonProfileFields.rcf3214_Date" class="iCIMS_Forms_Global iCIMS_Forms_DayInput iCIMS_Forms_DropDown form-control">
                                       <option value="0"></option>
                                       <option value="1">1</option>
                                       <option value="2">2</option>
                                       <option value="3">3</option>
                                       <option value="4">4</option>
                                       <option value="5">5</option>
                                       <option value="6">6</option>
                                       <option value="7">7</option>
                                       <option value="8">8</option>
                                       <option value="9">9</option>
                                       <option value="10">10</option>
                                       <option value="11">11</option>
                                       <option value="12">12</option>
                                       <option value="13">13</option>
                                       <option value="14">14</option>
                                       <option value="15">15</option>
                                       <option value="16">16</option>
                                       <option value="17">17</option>
                                       <option value="18">18</option>
                                       <option value="19">19</option>
                                       <option value="20">20</option>
                                       <option value="21">21</option>
                                       <option value="22">22</option>
                                       <option value="23">23</option>
                                       <option value="24">24</option>
                                       <option value="25">25</option>
                                       <option value="26">26</option>
                                       <option value="27">27</option>
                                       <option value="28">28</option>
                                       <option value="29">29</option>
                                       <option value="30">30</option>
                                       <option value="31">31</option>
                                    </select>
                                 </div>
                                 <div class="iCIMS_DateField-Year iCIMS_TableCell"><label id="label_-1_PersonProfileFields.rcf3214_Year" class="iCIMS_508_Label" for="-1_PersonProfileFields.rcf3214_Year">Year</label><input type="text" size="6" maxlength="4" id="-1_PersonProfileFields.rcf3214_Year" name="-1_PersonProfileFields.rcf3214_Year" onchange="pageDirtyFlag=true;" aria-labelledby="label_-1_PersonProfileFields.rcf3214 label_-1_PersonProfileFields.rcf3214_Year" class="iCIMS_Forms_Global iCIMS_Forms_YearInput form-control"></div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div role="group" aria-labelledby="label_-1_PersonProfileFields.rcf3215" data-collection="rcf3211" data-index="1" class="rcf3211-1 iCIMS_TableRow iCIMS_FieldRow_Inline">
                        <div class=" iCIMS_InfoField iCIMS_InfoField_Candidate iCIMS_CollectionField iCIMS_TableCell"><label id="label_-1_PersonProfileFields.rcf3215"><span class="iCIMS_LabelText" name="labelText">End Date</span></label>&nbsp;<label id="label_-1_PersonProfileFields.rcf3215_desc"><span class="iCIMS_LabelText" name="labelText">(Month / Day / Year)</span></label></div>
                        <div class="iCIMS_InfoData iCIMS_InfoData_Candidate iCIMS_CollectionField iCIMS_TableCell">
                           <div class="iCIMS_Forms_Global  iCIMS_Forms_DateOnlyField iCIMS_Forms_Qnull  iCIMS_Table">
                              <div class="iCIMS_TableRow">
                                 <div class="iCIMS_DateField-Month iCIMS_TableCell">
                                    <label id="label_-1_PersonProfileFields.rcf3215_Month" class="iCIMS_508_Label" for="-1_PersonProfileFields.rcf3215_Month">Month</label>
                                    <select id="-1_PersonProfileFields.rcf3215_Month" name="-1_PersonProfileFields.rcf3215_Month" onchange="pageDirtyFlag=true;" aria-labelledby="label_-1_PersonProfileFields.rcf3215 label_-1_PersonProfileFields.rcf3215_Month" class="iCIMS_Forms_Global iCIMS_Forms_MonthInput iCIMS_Forms_DropDown form-control">
                                       <option value="0"></option>
                                       <option value="01">Jan</option>
                                       <option value="02">Feb</option>
                                       <option value="03">Mar</option>
                                       <option value="04">Apr</option>
                                       <option value="05">May</option>
                                       <option value="06">Jun</option>
                                       <option value="07">Jul</option>
                                       <option value="08">Aug</option>
                                       <option value="09">Sep</option>
                                       <option value="10">Oct</option>
                                       <option value="11">Nov</option>
                                       <option value="12">Dec</option>
                                    </select>
                                 </div>
                                 <div class="iCIMS_DateField-Day iCIMS_TableCell">
                                    <label id="label_-1_PersonProfileFields.rcf3215_Date" class="iCIMS_508_Label" for="-1_PersonProfileFields.rcf3215_Date">Day</label>
                                    <select id="-1_PersonProfileFields.rcf3215_Date" name="-1_PersonProfileFields.rcf3215_Date" onchange="pageDirtyFlag=true;" aria-labelledby="label_-1_PersonProfileFields.rcf3215 label_-1_PersonProfileFields.rcf3215_Date" class="iCIMS_Forms_Global iCIMS_Forms_DayInput iCIMS_Forms_DropDown form-control">
                                       <option value="0"></option>
                                       <option value="1">1</option>
                                       <option value="2">2</option>
                                       <option value="3">3</option>
                                       <option value="4">4</option>
                                       <option value="5">5</option>
                                       <option value="6">6</option>
                                       <option value="7">7</option>
                                       <option value="8">8</option>
                                       <option value="9">9</option>
                                       <option value="10">10</option>
                                       <option value="11">11</option>
                                       <option value="12">12</option>
                                       <option value="13">13</option>
                                       <option value="14">14</option>
                                       <option value="15">15</option>
                                       <option value="16">16</option>
                                       <option value="17">17</option>
                                       <option value="18">18</option>
                                       <option value="19">19</option>
                                       <option value="20">20</option>
                                       <option value="21">21</option>
                                       <option value="22">22</option>
                                       <option value="23">23</option>
                                       <option value="24">24</option>
                                       <option value="25">25</option>
                                       <option value="26">26</option>
                                       <option value="27">27</option>
                                       <option value="28">28</option>
                                       <option value="29">29</option>
                                       <option value="30">30</option>
                                       <option value="31">31</option>
                                    </select>
                                 </div>
                                 <div class="iCIMS_DateField-Year iCIMS_TableCell"><label id="label_-1_PersonProfileFields.rcf3215_Year" class="iCIMS_508_Label" for="-1_PersonProfileFields.rcf3215_Year">Year</label><input type="text" size="6" maxlength="4" id="-1_PersonProfileFields.rcf3215_Year" name="-1_PersonProfileFields.rcf3215_Year" onchange="pageDirtyFlag=true;" aria-labelledby="label_-1_PersonProfileFields.rcf3215 label_-1_PersonProfileFields.rcf3215_Year" class="iCIMS_Forms_Global iCIMS_Forms_YearInput form-control"></div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div data-collection="rcf3211" data-index="1" class="rcf3211-1 iCIMS_TableRow">
                        <div class=" iCIMS_InfoField iCIMS_InfoField_Candidate iCIMS_CollectionField iCIMS_TableCell"><label id="label_-1_PersonProfileFields.rcf3219" for="-1_PersonProfileFields.rcf3219"><span class="iCIMS_LabelText" name="labelText">Description</span></label></div>
                        <div class="iCIMS_InfoData iCIMS_InfoData_Candidate iCIMS_CollectionField iCIMS_TableCell"><textarea id="-1_PersonProfileFields.rcf3219" name="-1_PersonProfileFields.rcf3219" class="iCIMS_Forms_Global customFieldContainer iCIMS_Forms_TextBox iCIMS_Forms_Qnull form-control" onchange="pageDirtyFlag=true;" cols="40" rows="10"></textarea></div>
                     </div>
                     <div data-collection="rcf3211" data-index="1" class="rcf3211-1 iCIMS_TableRow iCIMS_FieldRow_Inline">
                        <div class=" iCIMS_InfoField iCIMS_InfoField_Candidate iCIMS_CollectionField iCIMS_TableCell"><label id="label_-1_PersonProfileFields.rcf3266" for="-1_PersonProfileFields.rcf3266"><span class="iCIMS_LabelText" name="labelText">Supervisor's Name</span></label></div>
                        <div class="iCIMS_InfoData iCIMS_InfoData_Candidate iCIMS_CollectionField iCIMS_TableCell"><input type="text" id="-1_PersonProfileFields.rcf3266" name="-1_PersonProfileFields.rcf3266" class="iCIMS_Forms_Global customFieldContainer iCIMS_Forms_TextField iCIMS_Forms_Qnull form-control" onchange="pageDirtyFlag=true;" bgtparse="true" maxlength="192"></div>
                     </div>
                     <div data-collection="rcf3211" data-index="1" class="rcf3211-1 iCIMS_TableRow iCIMS_FieldRow_Inline">
                        <div class=" iCIMS_InfoField iCIMS_InfoField_Candidate iCIMS_CollectionField iCIMS_TableCell"><label id="label_-1_PersonProfileFields.rcf3267" for="-1_PersonProfileFields.rcf3267"><span class="iCIMS_LabelText" name="labelText">Supervisor's Title</span></label></div>
                        <div class="iCIMS_InfoData iCIMS_InfoData_Candidate iCIMS_CollectionField iCIMS_TableCell"><input type="text" id="-1_PersonProfileFields.rcf3267" name="-1_PersonProfileFields.rcf3267" class="iCIMS_Forms_Global customFieldContainer iCIMS_Forms_TextField iCIMS_Forms_Qnull form-control" onchange="pageDirtyFlag=true;" bgtparse="true" maxlength="192"></div>
                     </div>
                     <div data-collection="rcf3211" data-index="1" class="rcf3211-1 iCIMS_TableRow">
                        <div class=" iCIMS_InfoField iCIMS_InfoField_Candidate iCIMS_CollectionField iCIMS_TableCell"><label id="label_-1_PersonProfileFields.rcf3268" for="-1_PersonProfileFields.rcf3268"><span class="iCIMS_LabelText" name="labelText">Reason for Leaving</span></label></div>
                        <div class="iCIMS_InfoData iCIMS_InfoData_Candidate iCIMS_CollectionField iCIMS_TableCell"><textarea id="-1_PersonProfileFields.rcf3268" name="-1_PersonProfileFields.rcf3268" class="iCIMS_Forms_Global customFieldContainer iCIMS_Forms_TextBox iCIMS_Forms_Qnull form-control" onchange="pageDirtyFlag=true;" cols="40" rows="10"></textarea></div>
                     </div>
                     <div data-collection="rcf3211" data-index="1" class="rcf3211-1 iCIMS_TableRow iCIMS_FieldRow_Inline">
                        <div class=" iCIMS_InfoField iCIMS_InfoField_Candidate iCIMS_CollectionField iCIMS_TableCell"><label id="label_-1_PersonProfileFields.rcf3271" for="-1_PersonProfileFields.rcf3271"><span class="iCIMS_LabelText" name="labelText">Employer Phone Number</span></label></div>
                        <div class="iCIMS_InfoData iCIMS_InfoData_Candidate iCIMS_CollectionField iCIMS_TableCell"><input type="text" id="-1_PersonProfileFields.rcf3271" name="-1_PersonProfileFields.rcf3271" class="iCIMS_Forms_Global customFieldContainer iCIMS_Forms_TextField iCIMS_Forms_Qnull form-control" onchange="pageDirtyFlag=true;" bgtparse="true" maxlength="128"></div>
                     </div>
                  </fieldset>

               </div>
            </div>
         </div>
         <div class="iCIMS_ProfileFormTable iCIMS_Table">
            <div class="iCIMS_TableRow">
               <div class="iCIMS_TableCell"></div>
               <div class="iCIMS_TableCell">
                  <div class="iCIMS_socialDisclaimer"></div>
               </div>
            </div>
            <div class="iCIMS_SubmitButtonRow iCIMS_TableRow iCIMS_MobileButton_1">
               <div class="iCIMS_TableCell"></div>
               <div class="iCIMS_SubmitButtonCell iCIMS_TableCell" id="cp_form_submit_label">
                  <input type="submit" id="cp_form_submit_i" class="iCIMS_PrimaryButton" name="profileButton" value="Submit Profile" onclick="pageDirtyFlag=false;">
               </div>
            </div>
         </div>
      </div>

   </div>
</form>
<br><br<br><br><br<br><br><br<br><br><br<br><br><br<br>
@endsection
