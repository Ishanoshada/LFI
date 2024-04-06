<?php include("headstyle.php"); ?>
<?php include("header.php"); ?>
<div class="row">
<div class="col-md-8 col-md-push-2">
<div class="panel panel-body">
<div class="col-md-12 col-lg-12">

						<?php
                        if(isset($_GET['err']))
                        {
                        $err=$_GET['err'];
                        if($err=='1') echo "<div class='panel panel-primary'> <h1>Invalid Resume File Type (Allowed Ext : .doc, .docx, .pdf, .jpg, .png) Click on back button</br> Or send Resume to editor@ijcrt.org </h1></a></div>"; 
                        if($err=='3') echo "<div class='panel panel-primary'> <h1>Invalid Resume File Type (Allowed Ext : .doc, .docx, .pdf, .jpg, .png)Click on back button </br> Or send Resume to editor@ijcrt.org</h1></a></div>"; 
						if($err=='2') echo "<div class='panel panel-primary'> <h1>Invalid Degree Certificate File Type (Allowed Ext : .doc, .docx, .pdf, .jpg, .png) Click on back button </br> Or send Resume to editor@ijcrt.org </h1></div>"; 
                        if($err=='0')  echo "<div class='panel panel-primary'> <h1>Your Request Submitted Sucessfully.</br>Kindly Check Your Email</h1>.</div>";
						if($err=='4') echo "<div class='panel panel-primary'>  <h1>Provided EMail id is already registered as a RMS member.</h1> </div>"; 
                        
						} 
						echo $message;
                        //      
                        ?>
 <form name="form1" action='../inserteditor.php' method='POST' enctype="multipart/form-data" accept-charset="utf-8">
		   <div class="col-lg-12">                        <ol class="breadcrumb">                            <li><a href="http://www.ijcrt.org"> <i class="fa fa-home" aria-hidden="true"></i>Home</a>                            </li>                            <li class="active">Join IJCRT RMS (Reviewer/Referral Management System)</li>                        </ol>                    </div>						<div class="panel panel-default">
        	<div class="panel-heading">
    			<h4><i class="fa fa-cogs fa-1x"> </i> Join IJCRT RMS (Reviewer/Referral Management System) | Impact Factor : 7.97 </br>  Refer Paper and Earn 300 INR per paper.</h4>
				<p><strong> Required fields</strong>: All fields marked with an asterisk (<span class="red_text">*</span>) are mandatory fields, and must be completed.</p>
				<p><strong>E-mail and Mobile No</strong>: It is important that you provide a functioning e-mail address and Mobile No.</p>
				<p><strong>Note:</strong> Kindly fill all details properly as Certificate will be generated using details provided as under.</p>
				<p><b>Please read <a href="#revcontent">below</a> mentioned instruction, rules & regulations before filling the form.</b></p>
     		</div>
			<div class="panel-body">
    			<div class="panel panel-primary">
					<div class="panel-heading">
					<h4 class="panel-title">
						<a data-toggle="collapse"  href="#collapse1"> <i class="fa fa-user" aria-hidden="true"></i> Personal Details</a>
					</h4>
					</div>

					<div id="collapse1" class="panel-collapse collapse in">
					<div class="panel-body">

						<div class="row">
							<div class="form-group">
								<label for="p_addline1" class="col-lg-2">Prefix</label>
								<div class="col-lg-4">
									<select class="form-control" data-rel="chosen" name="r_prefix">
									<option value="Dr.">Dr.</option> 
									<option value="Prof.">Prof..</option>
									<option value="Mr.">Mr.</option>
									<option value="Miss.">Miss.</option>
									<option value="Mrs.">Mrs.</option>
									<option value="Ms.">Ms.</option>
									</select>
								</div></br>
								<label for="p_addline2" class="col-lg-2">Full Name</label>
								<div class="col-lg-4">
									<input class="form-control" type="text" name="r_name" id="r_name" value=""  required="required"  placeholder="As you want to display on website"  >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<label for="p_addline1" class="col-lg-2">Qualification</label>
								<div class="col-lg-4">
									<input class="form-control" type="text" name="r_qual" id="r_qual" value=""   required="required"  placeholder="Qualification" />
								</div></br>
								<label for="p_addline2" class="col-lg-2">Designation</label>
								<div class="col-lg-4">
									<input class="form-control" type="text" name="r_desg" id="r_desg" value=""   required="required"  placeholder="Designation" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<label for="p_addline1" class="col-lg-2">Instutute Name</label>
								<div class="col-lg-4">
									<input class="form-control" type="text" name="r_inst" id="r_inst" value=""  required="required"  placeholder="Institute" />
								</div></br>
								<label for="p_addline2" class="col-lg-2">Field</label>
								<div class="col-lg-4">
									<select name="r_field" data-rel="chosen"  class="form-control" style="width:70%;"  >
									<option value="Engineering">Engineering</option>
									<option value="Prof.">Science & Technology</option><option value="Prof.">Commerce</option><option value="Prof.">Arts</option><option value="Prof.">Medical Science</option><option value="Prof."> Languages</option><option value="Prof.">Social Science and Humanities</option>
									<option value="Pharmacy">Pharmacy</option>
									<option value="Management">Management</option>
									<option value="Biological Science">Biological Science</option>
									<option value="Other">Other's Subject</option>
									</select>									
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<label for="p_addline1" class="col-lg-2">Email ID</label>
								<div class="col-lg-4">
									<input class="form-control" type="email" name="r_email"  id="r_email" value=""   required="required"  placeholder="Email" >
								</div></br>
								<label for="p_addline2" class="col-lg-2">Mobile Number</label>
								<div class="col-lg-4">
									<input class="form-control" type="text" name="r_mobile" id="r_mobile" value=""  required="required"  placeholder="Mobile" />
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<label for="p_addline1" class="col-lg-2">Research Area</label>
								<div class="col-lg-4">
									<input class="form-control" id="r_branch" name="r_branch"  type="text" required="required"  />
								</div>
							</div>
						</div>

						
					</div>
					</div>
				</div>
				<div class="panel panel-primary">
                        <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse"  href="#collapse2"> Address Details</a>
                        </h4>
                        </div>

                        <div id="collapse2" class="panel-collapse collapse in">
                        <div class="panel-body">

                            <div class="row">
                                <div class="form-group">
                                    <label for="p_addline1" class="col-lg-2">Address Line 1</label>
                                    <div class="col-lg-4">
                                        <input type="text" class="form-control" id="r_adline1" name="r_adline1" type="text"  required="required">
                                    </div></br>
                                    <label for="p_addline2" class="col-lg-2">Address Line 2</label>
                                    <div class="col-lg-4">
                                        <input type="text" class="form-control" id="r_adline2" name="r_adline2"   required="required">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group">
                                    <label for="p_city" class="col-lg-2">City</label>
                                    <div class="col-lg-4">
                                        <input type="text" class="form-control" id="r_city" name="r_city"  required="required">
                                    </div></br>
                                    <label for="p_state" class="col-lg-2">State</label>
                                    <div class="col-lg-4">
                                        <input type="text" class="form-control" id="r_state" name="r_state"    required="required">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group">
                                    <label for="p_country" class="col-lg-2">Country</label>
                                    <div class="col-lg-4">
                                        <input type="text" class="form-control" id="r_country" name="r_country" required="required" list="country" />  
																<datalist id="country">
						<option value="Afghanistan">Afghanistan</option> 
						<option value="Albania">Albania</option> 
						<option value="Algeria">Algeria</option> 
						<option value="American Samoa">American Samoa</option> 
						<option value="Andorra">Andorra</option> 
						<option value="Angola">Angola</option> 
						<option value="Anguilla">Anguilla</option> 
						<option value="Antarctica">Antarctica</option> 
						<option value="Antigua and Barbuda">Antigua and Barbuda</option> 
						<option value="Argentina">Argentina</option> 
						<option value="Armenia">Armenia</option> 
						<option value="Aruba">Aruba</option> 
						<option value="Australia">Australia</option> 
						<option value="Austria">Austria</option> 
						<option value="Azerbaijan">Azerbaijan</option> 
						<option value="Bahamas">Bahamas</option> 
						<option value="Bahrain">Bahrain</option> 
						<option value="Bangladesh">Bangladesh</option> 
						<option value="Barbados">Barbados</option> 
						<option value="Belarus">Belarus</option> 
						<option value="Belgium">Belgium</option> 
						<option value="Belize">Belize</option> 
						<option value="Benin">Benin</option> 
						<option value="Bermuda">Bermuda</option> 
						<option value="Bhutan">Bhutan</option> 
						<option value="Bolivia">Bolivia</option> 
						<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option> 
						<option value="Botswana">Botswana</option> 
						<option value="Bouvet Island">Bouvet Island</option> 
						<option value="Brazil">Brazil</option> 
						<option value="Brunei Darussalam">Brunei Darussalam</option> 
						<option value="Bulgaria">Bulgaria</option> 
						<option value="Burkina Faso">Burkina Faso</option> 
						<option value="Burundi">Burundi</option> 
						<option value="Cambodia">Cambodia</option> 
						<option value="Cameroon">Cameroon</option> 
						<option value="Canada">Canada</option> 
						<option value="Cape Verde">Cape Verde</option> 
						<option value="Cayman Islands">Cayman Islands</option> 
						<option value="Central African Republic">Central African Republic</option> 
						<option value="Chad">Chad</option> 
						<option value="Chile">Chile</option> 
						<option value="China">China</option> 
						<option value="Christmas Island">Christmas Island</option> 
						<option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option> 
						<option value="Colombia">Colombia</option> 
						<option value="Comoros">Comoros</option> 
						<option value="Congo">Congo</option> 
						<option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option> 
						<option value="Cook Islands">Cook Islands</option> 
						<option value="Costa Rica">Costa Rica</option> 
						<option value="Cote D'ivoire">Cote D'ivoire</option> 
						<option value="Croatia">Croatia</option> 
						<option value="Cuba">Cuba</option> 
						<option value="Cyprus">Cyprus</option> 
						<option value="Czech Republic">Czech Republic</option> 
						<option value="Denmark">Denmark</option> 
						<option value="Djibouti">Djibouti</option> 
						<option value="Dominica">Dominica</option> 
						<option value="Dominican Republic">Dominican Republic</option> 
						<option value="Ecuador">Ecuador</option> 
						<option value="Egypt">Egypt</option> 
						<option value="El Salvador">El Salvador</option> 
						<option value="Equatorial Guinea">Equatorial Guinea</option> 
						<option value="Eritrea">Eritrea</option> 
						<option value="Estonia">Estonia</option> 
						<option value="Ethiopia">Ethiopia</option> 
						<option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option> 
						<option value="Faroe Islands">Faroe Islands</option> 
						<option value="Fiji">Fiji</option> 
						<option value="Finland">Finland</option> 
						<option value="France">France</option> 
						<option value="French Guiana">French Guiana</option> 
						<option value="French Polynesia">French Polynesia</option> 
						<option value="French Southern Territories">French Southern Territories</option> 
						<option value="Gabon">Gabon</option> 
						<option value="Gambia">Gambia</option> 
						<option value="Georgia">Georgia</option> 
						<option value="Germany">Germany</option> 
						<option value="Ghana">Ghana</option> 
						<option value="Gibraltar">Gibraltar</option> 
						<option value="Greece">Greece</option> 
						<option value="Greenland">Greenland</option> 
						<option value="Grenada">Grenada</option> 
						<option value="Guadeloupe">Guadeloupe</option> 
						<option value="Guam">Guam</option> 
						<option value="Guatemala">Guatemala</option> 
						<option value="Guinea">Guinea</option> 
						<option value="Guinea-bissau">Guinea-bissau</option> 
						<option value="Guyana">Guyana</option> 
						<option value="Haiti">Haiti</option> 
						<option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option> 
						<option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option> 
						<option value="Honduras">Honduras</option> 
						<option value="Hong Kong">Hong Kong</option> 
						<option value="Hungary">Hungary</option> 
						<option value="Iceland">Iceland</option> 
						<option value="India">India</option> 
						<option value="Indonesia">Indonesia</option> 
						<option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option> 
						<option value="Iraq">Iraq</option> 
						<option value="Ireland">Ireland</option> 
						<option value="Israel">Israel</option> 
						<option value="Italy">Italy</option> 
						<option value="Jamaica">Jamaica</option> 
						<option value="Japan">Japan</option> 
						<option value="Jordan">Jordan</option> 
						<option value="Kazakhstan">Kazakhstan</option> 
						<option value="Kenya">Kenya</option> 
						<option value="Kiribati">Kiribati</option> 
						<option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option> 
						<option value="Korea, Republic of">Korea, Republic of</option> 
						<option value="Kuwait">Kuwait</option> 
						<option value="Kyrgyzstan">Kyrgyzstan</option> 
						<option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option> 
						<option value="Latvia">Latvia</option> 
						<option value="Lebanon">Lebanon</option> 
						<option value="Lesotho">Lesotho</option> 
						<option value="Liberia">Liberia</option> 
						<option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option> 
						<option value="Liechtenstein">Liechtenstein</option> 
						<option value="Lithuania">Lithuania</option> 
						<option value="Luxembourg">Luxembourg</option> 
						<option value="Macao">Macao</option> 
						<option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option> 
						<option value="Madagascar">Madagascar</option> 
						<option value="Malawi">Malawi</option> 
						<option value="Malaysia">Malaysia</option> 
						<option value="Maldives">Maldives</option> 
						<option value="Mali">Mali</option> 
						<option value="Malta">Malta</option> 
						<option value="Marshall Islands">Marshall Islands</option> 
						<option value="Martinique">Martinique</option> 
						<option value="Mauritania">Mauritania</option> 
						<option value="Mauritius">Mauritius</option> 
						<option value="Mayotte">Mayotte</option> 
						<option value="Mexico">Mexico</option> 
						<option value="Micronesia, Federated States of">Micronesia, Federated States of</option> 
						<option value="Moldova, Republic of">Moldova, Republic of</option> 
						<option value="Monaco">Monaco</option> 
						<option value="Mongolia">Mongolia</option> 
						<option value="Montserrat">Montserrat</option> 
						<option value="Morocco">Morocco</option> 
						<option value="Mozambique">Mozambique</option> 
						<option value="Myanmar">Myanmar</option> 
						<option value="Namibia">Namibia</option> 
						<option value="Nauru">Nauru</option> 
						<option value="Nepal">Nepal</option> 
						<option value="Netherlands">Netherlands</option> 
						<option value="Netherlands Antilles">Netherlands Antilles</option> 
						<option value="New Caledonia">New Caledonia</option> 
						<option value="New Zealand">New Zealand</option> 
						<option value="Nicaragua">Nicaragua</option> 
						<option value="Niger">Niger</option> 
						<option value="Nigeria">Nigeria</option> 
						<option value="Niue">Niue</option> 
						<option value="Norfolk Island">Norfolk Island</option> 
						<option value="Northern Mariana Islands">Northern Mariana Islands</option> 
						<option value="Norway">Norway</option> 
						<option value="Oman">Oman</option> 
						<option value="Pakistan">Pakistan</option> 
						<option value="Palau">Palau</option> 
						<option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option> 
						<option value="Panama">Panama</option> 
						<option value="Papua New Guinea">Papua New Guinea</option> 
						<option value="Paraguay">Paraguay</option> 
						<option value="Peru">Peru</option> 
						<option value="Philippines">Philippines</option> 
						<option value="Pitcairn">Pitcairn</option> 
						<option value="Poland">Poland</option> 
						<option value="Portugal">Portugal</option> 
						<option value="Puerto Rico">Puerto Rico</option> 
						<option value="Qatar">Qatar</option> 
						<option value="Reunion">Reunion</option> 
						<option value="Romania">Romania</option> 
						<option value="Russian Federation">Russian Federation</option> 
						<option value="Rwanda">Rwanda</option> 
						<option value="Saint Helena">Saint Helena</option> 
						<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option> 
						<option value="Saint Lucia">Saint Lucia</option> 
						<option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option> 
						<option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option> 
						<option value="Samoa">Samoa</option> 
						<option value="San Marino">San Marino</option> 
						<option value="Sao Tome and Principe">Sao Tome and Principe</option> 
						<option value="Saudi Arabia">Saudi Arabia</option> 
						<option value="Senegal">Senegal</option> 
						<option value="Serbia and Montenegro">Serbia and Montenegro</option> 
						<option value="Seychelles">Seychelles</option> 
						<option value="Sierra Leone">Sierra Leone</option> 
						<option value="Singapore">Singapore</option> 
						<option value="Slovakia">Slovakia</option> 
						<option value="Slovenia">Slovenia</option> 
						<option value="Solomon Islands">Solomon Islands</option> 
						<option value="Somalia">Somalia</option> 
						<option value="South Africa">South Africa</option> 
						<option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option> 
						<option value="Spain">Spain</option> 
						<option value="Sri Lanka">Sri Lanka</option> 
						<option value="Sudan">Sudan</option> 
						<option value="Suriname">Suriname</option> 
						<option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option> 
						<option value="Swaziland">Swaziland</option> 
						<option value="Sweden">Sweden</option> 
						<option value="Switzerland">Switzerland</option> 
						<option value="Syrian Arab Republic">Syrian Arab Republic</option> 
						<option value="Taiwan, Province of China">Taiwan, Province of China</option> 
						<option value="Tajikistan">Tajikistan</option> 
						<option value="Tanzania, United Republic of">Tanzania, United Republic of</option> 
						<option value="Thailand">Thailand</option> 
						<option value="Timor-leste">Timor-leste</option> 
						<option value="Togo">Togo</option> 
						<option value="Tokelau">Tokelau</option> 
						<option value="Tonga">Tonga</option> 
						<option value="Trinidad and Tobago">Trinidad and Tobago</option> 
						<option value="Tunisia">Tunisia</option> 
						<option value="Turkey">Turkey</option> 
						<option value="Turkmenistan">Turkmenistan</option> 
						<option value="Turks and Caicos Islands">Turks and Caicos Islands</option> 
						<option value="Tuvalu">Tuvalu</option> 
						<option value="Uganda">Uganda</option> 
						<option value="Ukraine">Ukraine</option> 
						<option value="United Arab Emirates">United Arab Emirates</option> 
						<option value="United Kingdom">United Kingdom</option> 
						<option value="United States">United States</option> 
						<option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option> 
						<option value="Uruguay">Uruguay</option> 
						<option value="Uzbekistan">Uzbekistan</option> 
						<option value="Vanuatu">Vanuatu</option> 
						<option value="Venezuela">Venezuela</option> 
						<option value="Viet Nam">Viet Nam</option> 
						<option value="Virgin Islands, British">Virgin Islands, British</option> 
						<option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option> 
						<option value="Wallis and Futuna">Wallis and Futuna</option> 
						<option value="Western Sahara">Western Sahara</option> 
						<option value="Yemen">Yemen</option> 
						<option value="Zambia">Zambia</option> 
						<option value="Zimbabwe">Zimbabwe</option>
						<option value="British Indian Ocean Territory">British Indian Ocean Territory</option> 
						</datalist> 	  
		
                                    </div>
</br>
                                    <label for="p_pincode" class="col-lg-2">Pincode</label>
                                    <div class="col-lg-4">
                                        <input class="form-control" id="r_pin" name="r_pin" type="text"  required="required">
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
					<div class="panel panel-primary">
                        <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse"  href="#collapse3">Upload Documents: (Allowed Ext : .doc, .docx, .pdf, .jpg, .png)</a>
                        </h4>
                        </div>

                        <div id="collapse3" class="panel-collapse collapse in">
                        <div class="panel-body">

                            <div class="row">
                                <div class="form-group"></br>
                                    <label for="p_addline1" class="col-lg-2">Upload Resume</label>
                                    <div class="col-lg-4">
                                        <input type='file' name='resume' required  accept=".doc,.docx,.pdf,.jpg,.png,.DOC,.DOCX,.PNG,.JPG,.PDF">
                                    </div></br>
                                    <label for="p_addline2" class="col-lg-2">Latest Qualification</label>
                                    <div class="col-lg-4">
                                        <input  type='file' name='degree' required="required" accept=".doc,.docx,.pdf,.jpg,.png,.DOC,.DOCX,.PNG,.JPG,.PDF" >
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group">
                                    <label for="p_city" class="col-lg-8">
									Identity Proof: (scanned copy of any from Election Card, College ID, PAN Card, Driving Lic.)
									</label>
                                    <div class="col-lg-4">
                                        <input type='file' name='identity' required="required" accept=".doc,.docx,.pdf,.jpg,.png,.DOC,.DOCX,.PNG,.JPG,.PDF">
                                    </div>
                                    
                                </div>
                            </div>
							<div class="row">
                                <div class="form-group">
                                    <label for="p_addline1" class="col-lg-2">Captcha 									</label>
                                    <div class="col-lg-4">
                                        <?php 
									   $num1 = "&#" . rand(49,57) . ";";
									   $num2 = "&#" . rand(49,57) . ";"; echo "<label for='captcha1'><span id='captchaval11'>$num1</span> + <span id='captchaval21'>$num2</span> = ";
									   									   echo "<input type='text' name='captcha' id='captcha' maxlength='2' class='form-control' required placeholder='$num1 + $num2 ='/>
									   <span id='captchaval1' style='display:none'>$num1</span><span id='captchaval2'  style='display:none'>$num2</span>
									   ";
										?>
										<p class="help-block">Please write the answer of the above expression in box.</p>
                                    </div>
									<script type='text/javascript'>
									function validate() {
									   var passed;
									   var val1 = document.getElementById('captchaval1').innerHTML;
									   var val2 = document.getElementById('captchaval2').innerHTML;
									   var captchaval = document.getElementById('captcha').value;
									   var result = parseInt(val1) + parseInt(val2);
									   if (result != captchaval) {
										  passed = false;
										 alert("Invalid Math Captcha Answer.");
									   } else {
										  passed = true;
									   }
									   return passed;
									}
									</script>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
					<div class="panel panel-primary">
                        <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse"  href="#collapse4">Verifiation  and Confirmation</a>
                        </h4>
                        </div>

                        <div id="collapse4" class="panel-collapse collapse in">
                        <div class="panel-body">

                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-6 col-xs-6 col-md-offset-4 col-xs-offset-4">
										 <input type="checkbox"  name="agreeflag" id="agreeflag" value="1" required="required"/>
										<label for="agreeflag">Agree with <a href="newcss/Terms & condition.pdf" target="_new" style="text-decoration:underline" >Terms and Conditions *</a></label>
                                    </div>
                                </div>
                            </div>
							<div class="row">
                                <div class="form-group">
                                    <div class="col-md-6 col-xs-6 col-md-offset-3 col-xs-offset-3">
										 <div class="row" align="center">
											<!--<button type="submit" name="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
											-->
											<input class="btn btn-info" type="submit" name="submit-reviewer" value="Submit Request" onclick="return validate()">
										</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
					</form>
					<div class="panel panel-primary">
                        <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse"  href="#collapse5"> <i class="fa fa-cogs fa-1x"> </i> &nbsp; Rules and Regulation</a>
                        </h4>
                        </div>

                        <div id="collapse5" class="panel-collapse collapse in">
                        <div class="panel-body">
							 <div class="row">
							 <div class="col-md-12 text-justify">
							 <ul>
								<li> <i class="fa fa-bullhorn"></i> If reviewer recognize his/her colleague/student for publish the paper in IJCRT then, recognized colleague/student have to complete the entire publication process till the paper publish.</li>
								<li> <i class="fa fa-bullhorn"></i> After the successfully paper published in IJCRT, reviewer got the rewards point in account. Reviewer also check the rewards point in RMS account.</li>
								<li> <i class="fa fa-bullhorn"></i> 1 rewards point= 1 rupees</li>
								<li> <i class="fa fa-bullhorn"></i> You will be get 300 reward point per paper after the successfully published your recognized colleague/student 's Research Paper.</li>
								<li> <i class="fa fa-bullhorn"></i> If a reviewer has earned enough points to use them, the rewards points will appear as account credit on their account.</li>
								<li><i class="fa fa-bullhorn"></i> Reviewer can redeem the rewards point after the he/she will got more than  300 Rewards points in account.</li>
							 </ul>
							 </div>
							 </div>
							 <div class="row">
						
							
							 </div>
                        </div>
						
						<div class="panel panel-default" style="border-bottom:1px solid rgba(212,213,220,1.00)">
	<center>
    	 <a href="JoinAsReviewer.php">  
		<img class="img-responsive" src="Content/Images/new_ijcrt/111wresol.png" > </a>
    </center>
</div>
                        </div>
                    </div>
			</div>
</div>

<!----Main ENDS  V--->
</div>
</div>
</div>
<div class="col-md-2 col-xs-12 col-md-pull-8">
<?php include("left.php"); ?>
</div>
<div class="col-xs-12 col-md-2">
<?php include("right.php"); ?>
</div>
</div>
<div class="row">
<div class="col-md-12 col-lg-12">
<?php include("footer.php"); ?>
</div>
</div>