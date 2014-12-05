<?php 
/* Template Name: AFFILIATE SIGNUP */
get_header(); ?>

		<main role="main">
		<!-- section -->
		<section>
		
		
		<div class="container-fluid">
		
			<div class="container content">
			<div class="row">
			<?php if (have_posts()): while (have_posts()) : the_post(); ?>				  
			<h2><?php wp_title( ); ?></h2>
 				<?php the_content(); ?>
				<?php endwhile; ?>
			<?php endif; ?>	
			</div><!--/row-->
			</div><!--/container-->
		 </div><!--/container-fluid-->
		
		
		  <div class="container-fluid contact-form-wrap">
		
        
        <div class="container">
		
                       
                        
                        
                   <div class="col-md-12">


<form action=
  "http://weddinginstitute.postaffiliatepro.com/affiliates/signup.php" method=
  "post">
    <!-- signup_fields -->

    <div class="SignupForm gform_wrapper">
     

        <h4>Personal Information</h4> 
       
        <li>
        <label><strong>Username
        (Email)</strong> 
        <input name="username" type="text" class="form-control required"></label>
 		</li>


        <li>
        <label><strong>First Name</strong>
        <input name="firstname" type="text" class="form-control"></label> 
        </li>


        <li>
        	<label><strong>Last Name</strong>
        <input name="lastname" type="text" class="form-control"></label> 
        </li>


        <li>
        	<label><strong>Referral ID</strong>
        <input name="refid" type="text" class="form-control"></label> 
        <input id="parentuserid" name= "parentuserid" type="hidden" class="form-control" value="">
        </li>




	
      <fieldset>
        <h4>Additional Information</h4> 

         <li><label><strong>Web
        Url</strong><input name="data1" type="text"></label> 
    </li>

         <li><label><strong>Company name</strong><input name="data2" type=
        "text"></label>
    </li>

         <li><label><strong>Street</strong><input name="data3" type=
        "text"></label> 
    </li> 

         <li><label><strong>City</strong><input name="data4" type=
        "text"></label>  
    </li>

         <li><label><strong>State</strong><input name="data5" type=
        "text"></label>  
    </li>



        <li>
        	<label><strong>Country</strong><select name="data6">
          <option value="AF">
            Afghanistan
          </option>

          <option value="AX">
            Aland Islands
          </option>

          <option value="AL">
            Albania
          </option>

          <option value="DZ">
            Algeria
          </option>

          <option value="AS">
            American Samoa
          </option>

          <option value="AD">
            Andorra
          </option>

          <option value="AO">
            Angola
          </option>

          <option value="AI">
            Anguilla
          </option>

          <option value="A1">
            Anonymous Proxy
          </option>

          <option value="AQ">
            Antarctica
          </option>

          <option value="AG">
            Antigua and Barbuda
          </option>

          <option value="AR">
            Argentina
          </option>

          <option value="AM">
            Armenia
          </option>

          <option value="AW">
            Aruba
          </option>

          <option value="AP">
            Asia/PacificRegion
          </option>

          <option value="AU">
            Australia
          </option>

          <option value="AT">
            Austria
          </option>

          <option value="AZ">
            Azerbaijan
          </option>

          <option value="BS">
            Bahamas
          </option>

          <option value="BH">
            Bahrain
          </option>

          <option value="BD">
            Bangladesh
          </option>

          <option value="BB">
            Barbados
          </option>

          <option value="BY">
            Belarus
          </option>

          <option value="BE">
            Belgium
          </option>

          <option value="BZ">
            Belize
          </option>

          <option value="BJ">
            Benin
          </option>

          <option value="BM">
            Bermuda
          </option>

          <option value="BT">
            Bhutan
          </option>

          <option value="BO">
            Bolivia
          </option>

          <option value="BA">
            Bosnia and Herzegovina
          </option>

          <option value="BW">
            Botswana
          </option>

          <option value="BV">
            Bouvet Island
          </option>

          <option value="BR">
            Brazil
          </option>

          <option value="IO">
            British Indian Ocean Territory
          </option>

          <option value="BN">
            Brunei Darussalam
          </option>

          <option value="BG">
            Bulgaria
          </option>

          <option value="BF">
            Burkina Faso
          </option>

          <option value="BI">
            Burundi
          </option>

          <option value="KH">
            Cambodia
          </option>

          <option value="CM">
            Cameroon
          </option>

          <option value="CA">
            Canada
          </option>

          <option value="CV">
            Cape Verde
          </option>

          <option value="KY">
            Cayman Islands
          </option>

          <option value="CF">
            Central African Republic
          </option>

          <option value="TD">
            Chad
          </option>

          <option value="CL">
            Chile
          </option>

          <option value="CN">
            China
          </option>

          <option value="CX">
            Christmas Island
          </option>

          <option value="CC">
            Cocos (Keeling) Islands
          </option>

          <option value="CO">
            Colombia
          </option>

          <option value="KM">
            Comoros
          </option>

          <option value="CG">
            Congo
          </option>

          <option value="CD">
            Congo, The Democratic Republic of the
          </option>

          <option value="CK">
            Cook Islands
          </option>

          <option value="CR">
            Costa Rica
          </option>

          <option value="CI">
            Cote D'Ivoire
          </option>

          <option value="HR">
            Croatia
          </option>

          <option value="CU">
            Cuba
          </option>

          <option value="CY">
            Cyprus
          </option>

          <option value="CZ">
            Czech Republic
          </option>

          <option value="DK">
            Denmark
          </option>

          <option value="DJ">
            Djibouti
          </option>

          <option value="DM">
            Dominica
          </option>

          <option value="DO">
            Dominican Republic
          </option>

          <option value="EC">
            Ecuador
          </option>

          <option value="EG">
            Egypt
          </option>

          <option value="SV">
            El Salvador
          </option>

          <option value="GQ">
            Equatorial Guinea
          </option>

          <option value="ER">
            Eritrea
          </option>

          <option value="EE">
            Estonia
          </option>

          <option value="ET">
            Ethiopia
          </option>

          <option value="EU">
            Europe
          </option>

          <option value="FK">
            Falkland Islands (Malvinas)
          </option>

          <option value="FO">
            Faroe Islands
          </option>

          <option value="FJ">
            Fiji
          </option>

          <option value="FI">
            Finland
          </option>

          <option value="FR">
            France
          </option>

          <option value="FX">
            France, Metropolitan
          </option>

          <option value="GF">
            French Guiana
          </option>

          <option value="PF">
            French Polynesia
          </option>

          <option value="TF">
            French Southern Territories
          </option>

          <option value="GA">
            Gabon
          </option>

          <option value="GM">
            Gambia
          </option>

          <option value="GE">
            Georgia
          </option>

          <option value="DE">
            Germany
          </option>

          <option value="GH">
            Ghana
          </option>

          <option value="GI">
            Gibraltar
          </option>

          <option value="GR">
            Greece
          </option>

          <option value="GL">
            Greenland
          </option>

          <option value="GD">
            Grenada
          </option>

          <option value="GP">
            Guadeloupe
          </option>

          <option value="GU">
            Guam
          </option>

          <option value="GT">
            Guatemala
          </option>

          <option value="GG">
            Guernsey
          </option>

          <option value="GN">
            Guinea
          </option>

          <option value="GW">
            Guinea-Bissau
          </option>

          <option value="GY">
            Guyana
          </option>

          <option value="HT">
            Haiti
          </option>

          <option value="HM">
            Heard Island and McDonald Islands
          </option>

          <option value="VA">
            Holy See (Vatican City State)
          </option>

          <option value="HN">
            Honduras
          </option>

          <option value="HK">
            Hong Kong
          </option>

          <option value="HU">
            Hungary
          </option>

          <option value="IS">
            Iceland
          </option>

          <option value="IN">
            India
          </option>

          <option value="ID">
            Indonesia
          </option>

          <option value="IR">
            Iran, Islamic Republic of
          </option>

          <option value="IQ">
            Iraq
          </option>

          <option value="IE">
            Ireland
          </option>

          <option value="IM">
            Isle of Man
          </option>

          <option value="IL">
            Israel
          </option>

          <option value="IT">
            Italy
          </option>

          <option value="JM">
            Jamaica
          </option>

          <option value="JP">
            Japan
          </option>

          <option value="JE">
            Jersey
          </option>

          <option value="JO">
            Jordan
          </option>

          <option value="KZ">
            Kazakstan
          </option>

          <option value="KE">
            Kenya
          </option>

          <option value="KI">
            Kiribati
          </option>

          <option value="KP">
            Korea, Democratic People's Republic of
          </option>

          <option value="KR">
            Korea, Republic of
          </option>

          <option value="KW">
            Kuwait
          </option>

          <option value="KG">
            Kyrgyzstan
          </option>

          <option value="LA">
            Lao People's Democratic Republic
          </option>

          <option value="LV">
            Latvia
          </option>

          <option value="LB">
            Lebanon
          </option>

          <option value="LS">
            Lesotho
          </option>

          <option value="LR">
            Liberia
          </option>

          <option value="LY">
            Libyan Arab Jamahiriya
          </option>

          <option value="LI">
            Liechtenstein
          </option>

          <option value="LT">
            Lithuania
          </option>

          <option value="LU">
            Luxembourg
          </option>

          <option value="MO">
            Macau
          </option>

          <option value="MK">
            Macedonia
          </option>

          <option value="MG">
            Madagascar
          </option>

          <option value="MW">
            Malawi
          </option>

          <option value="MY">
            Malaysia
          </option>

          <option value="MV">
            Maldives
          </option>

          <option value="ML">
            Mali
          </option>

          <option value="MT">
            Malta
          </option>

          <option value="MH">
            Marshall Islands
          </option>

          <option value="MQ">
            Martinique
          </option>

          <option value="MR">
            Mauritania
          </option>

          <option value="MU">
            Mauritius
          </option>

          <option value="YT">
            Mayotte
          </option>

          <option value="MX">
            Mexico
          </option>

          <option value="FM">
            Micronesia, Federated States of
          </option>

          <option value="MD">
            Moldova, Republic of
          </option>

          <option value="MC">
            Monaco
          </option>

          <option value="MN">
            Mongolia
          </option>

          <option value="ME">
            Montenegro
          </option>

          <option value="MS">
            Montserrat
          </option>

          <option value="MA">
            Morocco
          </option>

          <option value="MZ">
            Mozambique
          </option>

          <option value="MM">
            Myanmar
          </option>

          <option value="NA">
            Namibia
          </option>

          <option value="NR">
            Nauru
          </option>

          <option value="NP">
            Nepal
          </option>

          <option value="AN">
            Netherlands Antilles
          </option>

          <option value="NL">
            Netherlands
          </option>

          <option value="NC">
            New Caledonia
          </option>

          <option value="NZ">
            New Zealand
          </option>

          <option value="NI">
            Nicaragua
          </option>

          <option value="NE">
            Niger
          </option>

          <option value="NG">
            Nigeria
          </option>

          <option value="NU">
            Niue
          </option>

          <option value="NF">
            Norfolk Island
          </option>

          <option value="MP">
            Northern Mariana Islands
          </option>

          <option value="NO">
            Norway
          </option>

          <option value="OM">
            Oman
          </option>

          <option value="O1">
            Other
          </option>

          <option value="PK">
            Pakistan
          </option>

          <option value="PW">
            Palau
          </option>

          <option value="PS">
            Palestinian Territory
          </option>

          <option value="PA">
            Panama
          </option>

          <option value="PG">
            Papua New Guinea
          </option>

          <option value="PY">
            Paraguay
          </option>

          <option value="PE">
            Peru
          </option>

          <option value="PH">
            Philippines
          </option>

          <option value="PN">
            Pitcairn Islands
          </option>

          <option value="PL">
            Poland
          </option>

          <option value="PT">
            Portugal
          </option>

          <option value="PR">
            Puerto Rico
          </option>

          <option value="QA">
            Qatar
          </option>

          <option value="RE">
            Reunion
          </option>

          <option value="RO">
            Romania
          </option>

          <option value="RU">
            Russian Federation
          </option>

          <option value="RW">
            Rwanda
          </option>

          <option value="SH">
            Saint Helena
          </option>

          <option value="KN">
            Saint Kitts and Nevis
          </option>

          <option value="LC">
            Saint Lucia
          </option>

          <option value="PM">
            Saint Pierre and Miquelon
          </option>

          <option value="VC">
            Saint Vincent and the Grenadines
          </option>

          <option value="WS">
            Samoa
          </option>

          <option value="SM">
            San Marino
          </option>

          <option value="ST">
            Sao Tome and Principe
          </option>

          <option value="A2">
            Satellite Provider
          </option>

          <option value="SA">
            Saudi Arabia
          </option>

          <option value="SN">
            Senegal
          </option>

          <option value="RS">
            Serbia
          </option>

          <option value="SC">
            Seychelles
          </option>

          <option value="SL">
            Sierra Leone
          </option>

          <option value="SG">
            Singapore
          </option>

          <option value="SK">
            Slovakia
          </option>

          <option value="SI">
            Slovenia
          </option>

          <option value="SB">
            Solomon Islands
          </option>

          <option value="SO">
            Somalia
          </option>

          <option value="ZA">
            South Africa
          </option>

          <option value="GS">
            South Georgia and the South Sandwich Islands
          </option>

          <option value="ES">
            Spain
          </option>

          <option value="LK">
            SriLanka
          </option>

          <option value="SD">
            Sudan
          </option>

          <option value="SR">
            Suriname
          </option>

          <option value="SJ">
            Svalbardand Jan Mayen
          </option>

          <option value="SZ">
            Swaziland
          </option>

          <option value="SE">
            Sweden
          </option>

          <option value="CH">
            Switzerland
          </option>

          <option value="SY">
            Syrian Arab Republic
          </option>

          <option value="TW">
            Taiwan
          </option>

          <option value="TJ">
            Tajikistan
          </option>

          <option value="TZ">
            Tanzania, United Republic of
          </option>

          <option value="TH">
            Thailand
          </option>

          <option value="TL">
            Timor-Leste
          </option>

          <option value="TG">
            Togo
          </option>

          <option value="TK">
            Tokelau
          </option>

          <option value="TO">
            Tonga
          </option>

          <option value="TT">
            Trinidad and Tobago
          </option>

          <option value="TN">
            Tunisia
          </option>

          <option value="TR">
            Turkey
          </option>

          <option value="TM">
            Turkmenistan
          </option>

          <option value="TC">
            Turks and Caicos Islands
          </option>

          <option value="TV">
            Tuvalu
          </option>

          <option value="UG">
            Uganda
          </option>

          <option value="UA">
            Ukraine
          </option>

          <option value="AE">
            United Arab Emirates
          </option>

          <option value="GB">
            United Kingdom
          </option>

          <option value="UM">
            United States Minor Outlying Islands
          </option>

          <option selected="selected" value="US">
            United States
          </option>

          <option value="UY">
            Uruguay
          </option>

          <option value="UZ">
            Uzbekistan
          </option>

          <option value="VU">
            Vanuatu
          </option>

          <option value="VE">
            Venezuela
          </option>

          <option value="VN">
            Vietnam
          </option>

          <option value="VG">
            Virgin Islands, British
          </option>

          <option value="VI">
            Virgin Islands, U.S.
          </option>

          <option value="WF">
            Wallis and Futuna
          </option>

          <option value="EH">
            Western Sahara
          </option>

          <option value="YE">
            Yemen
          </option>

          <option value="ZM">
            Zambia
          </option>

          <option value="ZW">
            Zimbabwe
          </option>
        </select>
    </label> 

    </li>

    <li>
      <label>Zipcode<input name="data7" type=
        "text"></label> 
        </li>

          <li><label>Phone<input name="data8" type="text"></label></li>


         <li> <label>Fax<input name="data9" type="text"></label></li>

        <div id="data10"></div>

        <div id="data11"></div>

        <div id="data12"></div>

        <div id="data13"></div>

        <div id="data14"></div>

        <div id="data15"></div>

        <div id="data16"></div>

        <div id="data17"></div>

        <div id="data18"></div>

        <div id="data19"></div>

        <div id="data20"></div>

        <div id="data21"></div>

        <div id="data22"></div>

        <div id="data23"></div>

        <div id="data24"></div>

        <div id="data25"></div>

        <div id="notificationemail"></div>

        <div id="recaptcha"></div>
      </fieldset>

      <div id="payoutMethods"></div>
      <label>Terms & conditions</label> 
      <textarea>
</textarea> 

<li class="gchoice_7_1">

<label><input name=
"agreeWithTerms" type="checkbox" value="Y">I agree to the terms & conditions</label>

</li>


      <div class="ExpandTermsAndConditions" id="expandTermsAndConditions">
      </div>

      <div class="clear"></div>

      <div id="FormMessage"></div><input type="submit" value="Signup">
    </div>
  </form><script id="pap_x2s6df8d" src=
  "http://weddinginstitute.postaffiliatepro.com/scripts/salejs.php" type=
  "text/javascript"></script> <script type="text/javascript">
                      PostAffTracker.writeAffiliateToCustomField('parentuserid');
  </script>



					

					</div>
                         
                     
                        </div>
                        
                        </div>
                        
                        <!-- col-md-12 -->
                        
			
		</div>
			<!-- container -->
		
		
		
		
		</div><!-- container-fluid-->
        
        
        
        

</div><!-- container-fluid-->
</div>
</div><!--/.container-->
	
	
	
	
	
		
	


<?php get_footer(); ?>
