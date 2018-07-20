<form action="" method="post" id "validateformduspay" onsubmit="return validateFormDusPay(this)">

	<div style="display:none">
	<input type="hidden" name="step" value="1">
	
	
	<input type="hidden" name="bussiness_url" value="processall.htm">
		<input type="hidden" name="status" value="2">
	<input type="hidden" name="aurl" value="">
	<input type="hidden" name="midcard" value="">
	<input type="hidden" name="bill_name" value=" ">
	<input type="hidden" name="bill_country_name" id="bill_country_name" value="">
	
	<input type="hidden" name="member" value="1108">
	<input type="hidden" name="bid" value="vPngYASqfR">
	<input type="hidden" name="cc_payment_mode" value="CC Payment">
	<input type="hidden" name="payment" value="creditcard">
	 
	</div>
	
	<center><div id="card" class="showfp">
		<table class="frame" width="100%" border="0" cellspacing="1" cellpadding="4" style="text-align:center;">
	<tbody><center><tr><td class="capl" colspan="2"><h1>Order Information</h1> </td></tr>
	
		<tr class="err_tr"><td colspan="2" class="err_tr error"><div class="hide" id="dus-errors"> </div></td></tr>
	<tr>
	<center><td colspan="2">
	<hr>
			<div class="ecol2"><input type="hidden" name="price" placeholder="Price" value="<?php echo $_GET['price'];?>"></div>
		<div class="ecol2"><input type="hidden" name="product" placeholder="Product Name" value="<?php echo $_GET['product'];?>"></div>
		
	<div class="ecol2"><input placeholder="First Name" type="text" name="ccholder" size="30" maxlength="128" value="" required=""> </div>
	<div class="ecol2"><input placeholder="Last Name" type="text" name="ccholder_lname" size="30" maxlength="128" value="" required=""></div>
	
	<div class="separator"></div>
	<div class="ecol2"><input placeholder="Phone" type="text" name="bill_phone" size="30" maxlength="128" value="" required=""></div>
	<div class="ecol2"><input placeholder="Email ID" type="text" name="email" size="30" maxlength="128" value="" required=""> </div>
	
	<div class="separator"></div>
	<div class="ecol2"><input placeholder="Street 1" type="text" name="bill_street_1" size="30" maxlength="128" value=""> </div>
	<div class="ecol2"><input placeholder="Street 2" type="text" name="bill_street_2" size="30" maxlength="128" value=""> </div>
	
	
	<div class="separator"></div>
	<div class="ecol2 country_listdiv">
		<select name="bill_country" id="country_list" style="font-size:14px;width:30%;" autocomplete="false" required=""> 
		 <option value="" disabled="disabled" selected="selected">Select Country</option>
		 <option value="AND" data-val="AD_AND_020_Andorra">Andorra</option><option value="ARE" data-val="AE_ARE_008_United Arab Emirates">United Arab Emirates</option><option value="AFG" data-val="AF_AFG_010_Afghanistan">Afghanistan</option><option value="ATG" data-val="AG_ATG_012_Antigua and Barbuda">Antigua and Barbuda</option><option value="AIA" data-val="AI_AIA_016_Anguilla">Anguilla</option><option value="ALB" data-val="AL_ALB_024_Albania">Albania</option><option value="ARM" data-val="AM_ARM_031_Armenia">Armenia</option><option value="ANT" data-val="AN_ANT_032_Netherlands Antilles">Netherlands Antilles</option><option value="AGO" data-val="AO_AGO_036_Angola">Angola</option><option value="ATA" data-val="AQ_ATA_040_Antarctica">Antarctica</option><option value="ARG" data-val="AR_ARG_044_Argentina">Argentina</option><option value="ASM" data-val="AS_ASM_048_American Samoa">American Samoa</option><option value="AUT" data-val="AT_AUT_050_Austria">Austria</option><option value="AUS" data-val="AU_AUS_051_Australia">Australia</option><option value="ABW" data-val="AW_ABW_052_Aruba">Aruba</option><option value="ALA" data-val="AX_ALA_056_ALA Aland Islands">ALA Aland Islands</option><option value="AZE" data-val="AZ_AZE_060_Azerbaijan">Azerbaijan</option><option value="BIH" data-val="BA_BIH_064_Bosnia and Herzegovina">Bosnia and Herzegovina</option><option value="BRB" data-val="BB_BRB_068_Barbados">Barbados</option><option value="BGD" data-val="BD_BGD_070_Bangladesh">Bangladesh</option><option value="BEL" data-val="BE_BEL_072_Belgium">Belgium</option><option value="BFA" data-val="BF_BFA_074_Burkina Faso">Burkina Faso</option><option value="BGR" data-val="BG_BGR_076_Bulgaria">Bulgaria</option><option value="BHR" data-val="BH_BHR_084_Bahrain">Bahrain</option><option value="BDI" data-val="BI_BDI_086_Burundi">Burundi</option><option value="BEN" data-val="BJ_BEN_090_Benin">Benin</option><option value="BLM" data-val="BL_BLM_092_Saint-Barthélemy">Saint-Barthélemy</option><option value="BMU" data-val="BM_BMU_096_Bermuda">Bermuda</option><option value="BRN" data-val="BN_BRN_100_Brunei Darussalam">Brunei Darussalam</option><option value="BOL" data-val="BO_BOL_104_Bolivia">Bolivia</option><option value="BRA" data-val="BR_BRA_108_Brazil">Brazil</option><option value="BHS" data-val="BS_BHS_112_Bahamas">Bahamas</option><option value="BTN" data-val="BT_BTN_116_Bhutan">Bhutan</option><option value="BVT" data-val="BV_BVT_120_Bouvet Island">Bouvet Island</option><option value="BWA" data-val="BW_BWA_124_Botswana">Botswana</option><option value="BLR" data-val="BY_BLR_132_Belarus">Belarus</option><option value="BLZ" data-val="BZ_BLZ_136_Belize">Belize</option><option value="CAN" data-val="CA_CAN_140_Canada">Canada</option><option value="CCK" data-val="CC_CCK_144_Cocos (Keeling) Islands">Cocos (Keeling) Islands</option><option value="COD" data-val="CD_COD_148_Congo, (Kinshasa)">Congo, (Kinshasa)</option><option value="CAF" data-val="CF_CAF_152_Central African Republic">Central African Republic</option><option value="COG" data-val="CG_COG_156_Congo (Brazzaville)">Congo (Brazzaville)</option><option value="CHE" data-val="CH_CHE_158_Switzerland">Switzerland</option><option value="CIV" data-val="CI_CIV_162_Côte d'Ivoire">Côte d'Ivoire</option><option value="COK" data-val="CK_COK_166_Cook Islands">Cook Islands</option><option value="CHL" data-val="CL_CHL_170_Chile">Chile</option><option value="CMR" data-val="CM_CMR_174_Cameroon">Cameroon</option><option value="CHN" data-val="CN_CHN_175_China">China</option><option value="COL" data-val="CO_COL_178_Colombia">Colombia</option><option value="CRI" data-val="CR_CRI_180_Costa Rica">Costa Rica</option><option value="CUB" data-val="CU_CUB_184_Cuba">Cuba</option><option value="CPV" data-val="CV_CPV_188_Cape Verde">Cape Verde</option><option value="CXR" data-val="CX_CXR_191_Christmas Island">Christmas Island</option><option value="CYP" data-val="CY_CYP_192_Cyprus">Cyprus</option><option value="CZE" data-val="CZ_CZE_196_Czech Republic">Czech Republic</option><option value="DEU" data-val="DE_DEU_203_Germany">Germany</option><option value="DJI" data-val="DJ_DJI_204_Djibouti">Djibouti</option><option value="DNK" data-val="DK_DNK_208_Denmark">Denmark</option><option value="DMA" data-val="DM_DMA_212_Dominica">Dominica</option><option value="DOM" data-val="DO_DOM_214_Dominican Republic">Dominican Republic</option><option value="DZA" data-val="DZ_DZA_218_Algeria">Algeria</option><option value="ECU" data-val="EC_ECU_222_Ecuador">Ecuador</option><option value="EST" data-val="EE_EST_226_Estonia">Estonia</option><option value="EGY" data-val="EG_EGY_231_Egypt">Egypt</option><option value="ESH" data-val="EH_ESH_232_Western Sahara">Western Sahara</option><option value="ERI" data-val="ER_ERI_233_Eritrea">Eritrea</option><option value="ESP" data-val="ES_ESP_234_Spain">Spain</option><option value="ETH" data-val="ET_ETH_238_Ethiopia">Ethiopia</option><option value="FIN" data-val="FI_FIN_239_Finland">Finland</option><option value="FJI" data-val="FJ_FJI_242_Fiji">Fiji</option><option value="FLK" data-val="FK_FLK_246_Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option><option value="FSM" data-val="FM_FSM_248_Micronesia, Federated States of">Micronesia, Federated States of</option><option value="FRO" data-val="FO_FRO_250_Faroe Islands">Faroe Islands</option><option value="FRA" data-val="FR_FRA_254_France">France</option><option value="GAB" data-val="GA_GAB_258_Gabon">Gabon</option><option value="GBR" data-val="GB_GBR_260_United Kingdom">United Kingdom</option><option value="GRD" data-val="GD_GRD_262_Grenada">Grenada</option><option value="GEO" data-val="GE_GEO_266_Georgia">Georgia</option><option value="GUF" data-val="GF_GUF_268_French Guiana">French Guiana</option><option value="GGY" data-val="GG_GGY_270_Guernsey">Guernsey</option><option value="GHA" data-val="GH_GHA_275_Ghana">Ghana</option><option value="GIB" data-val="GI_GIB_276_Gibraltar">Gibraltar</option><option value="GRL" data-val="GL_GRL_288_Greenland">Greenland</option><option value="GMB" data-val="GM_GMB_292_Gambia">Gambia</option><option value="GIN" data-val="GN_GIN_296_Guinea">Guinea</option><option value="GLP" data-val="GP_GLP_300_Guadeloupe">Guadeloupe</option><option value="GNQ" data-val="GQ_GNQ_304_Equatorial Guinea">Equatorial Guinea</option><option value="GRC" data-val="GR_GRC_308_Greece">Greece</option><option value="SGS" data-val="GS_SGS_312_South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option><option value="GTM" data-val="GT_GTM_316_Guatemala">Guatemala</option><option value="GUM" data-val="GU_GUM_320_Guam">Guam</option><option value="GNB" data-val="GW_GNB_324_Guinea-Bissau">Guinea-Bissau</option><option value="GUY" data-val="GY_GUY_328_Guyana">Guyana</option><option value="HKG" data-val="HK_HKG_332_Hong Kong, SAR China">Hong Kong, SAR China</option><option value="HMD" data-val="HM_HMD_334_Heard and Mcdonald Islands">Heard and Mcdonald Islands</option><option value="HND" data-val="HN_HND_336_Honduras">Honduras</option><option value="HRV" data-val="HR_HRV_340_Croatia">Croatia</option><option value="HTI" data-val="HT_HTI_344_Haiti">Haiti</option><option value="HUN" data-val="HU_HUN_348_Hungary">Hungary</option><option value="IDN" data-val="ID_IDN_352_Indonesia">Indonesia</option><option value="IRL" data-val="IE_IRL_356_Ireland">Ireland</option><option value="ISR" data-val="IL_ISR_360_Israel">Israel</option><option value="IMN" data-val="IM_IMN_364_Isle of Man">Isle of Man</option><option value="IND" data-val="IN_IND_368_India">India</option><option value="IOT" data-val="IO_IOT_372_British Indian Ocean Territory">British Indian Ocean Territory</option><option value="IRQ" data-val="IQ_IRQ_376_Iraq">Iraq</option><option value="IRN" data-val="IR_IRN_380_Iran, Islamic Republic of">Iran, Islamic Republic of</option><option value="ISL" data-val="IS_ISL_384_Iceland">Iceland</option><option value="ITA" data-val="IT_ITA_388_Italy">Italy</option><option value="JEY" data-val="JE_JEY_392_Jersey">Jersey</option><option value="JAM" data-val="JM_JAM_398_Jamaica">Jamaica</option><option value="JOR" data-val="JO_JOR_400_Jordan">Jordan</option><option value="JPN" data-val="JP_JPN_404_Japan">Japan</option><option value="KEN" data-val="KE_KEN_408_Kenya">Kenya</option><option value="KGZ" data-val="KG_KGZ_410_Kyrgyzstan">Kyrgyzstan</option><option value="KHM" data-val="KH_KHM_414_Cambodia">Cambodia</option><option value="KIR" data-val="KI_KIR_417_Kiribati">Kiribati</option><option value="COM" data-val="KM_COM_418_Comoros">Comoros</option><option value="KNA" data-val="KN_KNA_422_Saint Kitts and Nevis">Saint Kitts and Nevis</option><option value="PRK" data-val="KP_PRK_426_Korea (North)">Korea (North)</option><option value="KOR" data-val="KR_KOR_428_Korea (South)">Korea (South)</option><option value="KWT" data-val="KW_KWT_430_Kuwait">Kuwait</option><option value="CYM" data-val="KY_CYM_434_Cayman Islands">Cayman Islands</option><option value="KAZ" data-val="KZ_KAZ_438_Kazakhstan">Kazakhstan</option><option value="LAO" data-val="LA_LAO_440_Lao PDR">Lao PDR</option><option value="LBN" data-val="LB_LBN_442_Lebanon">Lebanon</option><option value="LCA" data-val="LC_LCA_446_Saint Lucia">Saint Lucia</option><option value="LIE" data-val="LI_LIE_450_Liechtenstein">Liechtenstein</option><option value="LKA" data-val="LK_LKA_454_Sri Lanka">Sri Lanka</option><option value="LBR" data-val="LR_LBR_458_Liberia">Liberia</option><option value="LSO" data-val="LS_LSO_462_Lesotho">Lesotho</option><option value="LTU" data-val="LT_LTU_466_Lithuania">Lithuania</option><option value="LUX" data-val="LU_LUX_470_Luxembourg">Luxembourg</option><option value="LVA" data-val="LV_LVA_474_Latvia">Latvia</option><option value="LBY" data-val="LY_LBY_478_Libya">Libya</option><option value="MAR" data-val="MA_MAR_480_Morocco">Morocco</option><option value="MCO" data-val="MC_MCO_484_Monaco">Monaco</option><option value="MDA" data-val="MD_MDA_492_Moldova">Moldova</option><option value="MNE" data-val="ME_MNE_496_Montenegro">Montenegro</option><option value="MAF" data-val="MF_MAF_498_Saint-Martin (French part)">Saint-Martin (French part)</option><option value="MDG" data-val="MG_MDG_499_Madagascar">Madagascar</option><option value="MHL" data-val="MH_MHL_500_Marshall Islands">Marshall Islands</option><option value="MKD" data-val="MK_MKD_504_Macedonia, Republic of">Macedonia, Republic of</option><option value="MLI" data-val="ML_MLI_508_Mali">Mali</option><option value="MMR" data-val="MM_MMR_512_Myanmar">Myanmar</option><option value="MNG" data-val="MN_MNG_516_Mongolia">Mongolia</option><option value="MAC" data-val="MO_MAC_520_Macao, SAR China">Macao, SAR China</option><option value="MNP" data-val="MP_MNP_524_Northern Mariana Islands">Northern Mariana Islands</option><option value="MTQ" data-val="MQ_MTQ_528_Martinique">Martinique</option><option value="MRT" data-val="MR_MRT_530_Mauritania">Mauritania</option><option value="MSR" data-val="MS_MSR_533_Montserrat">Montserrat</option><option value="MLT" data-val="MT_MLT_540_Malta">Malta</option><option value="MUS" data-val="MU_MUS_548_Mauritius">Mauritius</option><option value="MDV" data-val="MV_MDV_554_Maldives">Maldives</option><option value="MWI" data-val="MW_MWI_558_Malawi">Malawi</option><option value="MEX" data-val="MX_MEX_562_Mexico">Mexico</option><option value="MYS" data-val="MY_MYS_566_Malaysia">Malaysia</option><option value="MOZ" data-val="MZ_MOZ_570_Mozambique">Mozambique</option><option value="NAM" data-val="NA_NAM_574_Namibia">Namibia</option><option value="NCL" data-val="NC_NCL_578_New Caledonia">New Caledonia</option><option value="NER" data-val="NE_NER_580_Niger">Niger</option><option value="NFK" data-val="NF_NFK_581_Norfolk Island">Norfolk Island</option><option value="NGA" data-val="NG_NGA_583_Nigeria">Nigeria</option><option value="NIC" data-val="NI_NIC_584_Nicaragua">Nicaragua</option><option value="NLD" data-val="NL_NLD_585_Netherlands">Netherlands</option><option value="NOR" data-val="NO_NOR_586_Norway">Norway</option><option value="NPL" data-val="NP_NPL_591_Nepal">Nepal</option><option value="NRU" data-val="NR_NRU_598_Nauru">Nauru</option><option value="NIU" data-val="NU_NIU_600_Niue">Niue</option><option value="NZL" data-val="NZ_NZL_604_New Zealand">New Zealand</option><option value="OMN" data-val="OM_OMN_608_Oman">Oman</option><option value="PAN" data-val="PA_PAN_612_Panama">Panama</option><option value="PER" data-val="PE_PER_616_Peru">Peru</option><option value="PYF" data-val="PF_PYF_620_French Polynesia">French Polynesia</option><option value="PNG" data-val="PG_PNG_624_Papua New Guinea">Papua New Guinea</option><option value="PHL" data-val="PH_PHL_626_Philippines">Philippines</option><option value="PAK" data-val="PK_PAK_630_Pakistan">Pakistan</option><option value="POL" data-val="PL_POL_634_Poland">Poland</option><option value="SPM" data-val="PM_SPM_638_Saint Pierre and Miquelon">Saint Pierre and Miquelon</option><option value="PCN" data-val="PN_PCN_642_Pitcairn">Pitcairn</option><option value="PRI" data-val="PR_PRI_643_Puerto Rico">Puerto Rico</option><option value="PSE" data-val="PS_PSE_646_Palestinian Territory">Palestinian Territory</option><option value="PRT" data-val="PT_PRT_652_Portugal">Portugal</option><option value="PLW" data-val="PW_PLW_654_Palau">Palau</option><option value="PRY" data-val="PY_PRY_659_Paraguay">Paraguay</option><option value="QAT" data-val="QA_QAT_660_Qatar">Qatar</option><option value="REU" data-val="RE_REU_662_Réunion">Réunion</option><option value="ROU" data-val="RO_ROU_663_Romania">Romania</option><option value="SRB" data-val="RS_SRB_666_Serbia">Serbia</option><option value="RUS" data-val="RU_RUS_670_Russian Federation">Russian Federation</option><option value="RWA" data-val="RW_RWA_674_Rwanda">Rwanda</option><option value="SAU" data-val="SA_SAU_678_Saudi Arabia">Saudi Arabia</option><option value="SLB" data-val="SB_SLB_682_Solomon Islands">Solomon Islands</option><option value="SYC" data-val="SC_SYC_686_Seychelles">Seychelles</option><option value="SDN" data-val="SD_SDN_688_Sudan">Sudan</option><option value="SWE" data-val="SE_SWE_690_Sweden">Sweden</option><option value="SGP" data-val="SG_SGP_694_Singapore">Singapore</option><option value="SHN" data-val="SH_SHN_702_Saint Helena">Saint Helena</option><option value="SVN" data-val="SI_SVN_703_Slovenia">Slovenia</option><option value="SJM" data-val="SJ_SJM_704_Svalbard and Jan Mayen Islands">Svalbard and Jan Mayen Islands</option><option value="SVK" data-val="SK_SVK_705_Slovakia">Slovakia</option><option value="SLE" data-val="SL_SLE_706_Sierra Leone">Sierra Leone</option><option value="SMR" data-val="SM_SMR_710_San Marino">San Marino</option><option value="SEN" data-val="SN_SEN_716_Senegal">Senegal</option><option value="SOM" data-val="SO_SOM_724_Somalia">Somalia</option><option value="SUR" data-val="SR_SUR_728_Suriname">Suriname</option><option value="SSD" data-val="SS_SSD_732_South Sudan">South Sudan</option><option value="STP" data-val="ST_STP_736_Sao Tome and Principe">Sao Tome and Principe</option><option value="SLV" data-val="SV_SLV_740_El Salvador">El Salvador</option><option value="SYR" data-val="SY_SYR_744_Syrian Arab Republic (Syria)">Syrian Arab Republic (Syria)</option><option value="SWZ" data-val="SZ_SWZ_748_Swaziland">Swaziland</option><option value="TCA" data-val="TC_TCA_752_Turks and Caicos Islands">Turks and Caicos Islands</option><option value="TCD" data-val="TD_TCD_756_Chad">Chad</option><option value="ATF" data-val="TF_ATF_760_French Southern Territories">French Southern Territories</option><option value="TGO" data-val="TG_TGO_762_Togo">Togo</option><option value="THA" data-val="TH_THA_764_Thailand">Thailand</option><option value="TJK" data-val="TJ_TJK_768_Tajikistan">Tajikistan</option><option value="TKL" data-val="TK_TKL_772_Tokelau">Tokelau</option><option value="TLS" data-val="TL_TLS_776_Timor-Leste">Timor-Leste</option><option value="TKM" data-val="TM_TKM_780_Turkmenistan">Turkmenistan</option><option value="TUN" data-val="TN_TUN_784_Tunisia">Tunisia</option><option value="TON" data-val="TO_TON_788_Tonga">Tonga</option><option value="TUR" data-val="TR_TUR_792_Turkey">Turkey</option><option value="TTO" data-val="TT_TTO_795_Trinidad and Tobago">Trinidad and Tobago</option><option value="TUV" data-val="TV_TUV_796_Tuvalu">Tuvalu</option><option value="TWN" data-val="TW_TWN_798_Taiwan, Republic of China">Taiwan, Republic of China</option><option value="TZA" data-val="TZ_TZA_800_Tanzania, United Republic of">Tanzania, United Republic of</option><option value="UKR" data-val="UA_UKR_804_Ukraine">Ukraine</option><option value="UGA" data-val="UG_UGA_807_Uganda">Uganda</option><option value="UMI" data-val="UM_UMI_818_US Minor Outlying Islands">US Minor Outlying Islands</option><option value="USA" data-val="US_USA_826_United States of America">United States of America</option><option value="URY" data-val="UY_URY_831_Uruguay">Uruguay</option><option value="UZB" data-val="UZ_UZB_832_Uzbekistan">Uzbekistan</option><option value="VAT" data-val="VA_VAT_833_Holy See (Vatican City State)">Holy See (Vatican City State)</option><option value="VCT" data-val="VC_VCT_834_Saint Vincent and Grenadines">Saint Vincent and Grenadines</option><option value="VEN" data-val="VE_VEN_840_Venezuela (Bolivarian Republic)">Venezuela (Bolivarian Republic)</option><option value="VGB" data-val="VG_VGB_850_British Virgin Islands">British Virgin Islands</option><option value="VIR" data-val="VI_VIR_854_Virgin Islands, US">Virgin Islands, US</option><option value="VNM" data-val="VN_VNM_858_Viet Nam">Viet Nam</option><option value="VUT" data-val="VU_VUT_860_Vanuatu">Vanuatu</option><option value="WLF" data-val="WF_WLF_862_Wallis and Futuna Islands">Wallis and Futuna Islands</option><option value="WSM" data-val="WS_WSM_876_Samoa">Samoa</option><option value="YEM" data-val="YE_YEM_882_Yemen">Yemen</option><option value="MYT" data-val="YT_MYT_887_Mayotte">Mayotte</option><option value="ZAF" data-val="ZA_ZAF_894_South Africa">South Africa</option><option value="ZMB" data-val="ZM_ZMB_004_Zambia">Zambia</option><option value="ZWE" data-val="ZW_ZWE_028_Zimbabwe">Zimbabwe</option>
		 		</select> </div>
	
	<div class="separator"></div>
	<div class="ecol2"><input placeholder="City" type="text" name="bill_city" size="30" maxlength="128" value=""> </div>
	
	<div class="separator"></div>	
	<div id="state_input_divid" class="ecol2">
	<select name="bill_state" id="state_list" style="font-size:14px;width:30%;" required=""> 
	 <option value="" disabled="disabled" selected="selected">Select State</option><option value="AF">Afghanistan</option><option value="AL">Albania</option><option value="DZ">Algeria</option><option value="AS">American Samoa</option><option value="AD">Andorra</option><option value="AO">Angola</option><option value="AI">Anguilla</option><option value="AQ">Antarctica</option><option value="AG">Antigua And Barbuda</option><option value="AR">Argentina</option><option value="AM">Armenia</option><option value="AW">Aruba</option><option value="AU">Australia</option><option value="AT">Austria</option><option value="AZ">Azerbaijan</option><option value="BS">Bahamas</option><option value="BH">Bahrain</option><option value="BD">Bangladesh</option><option value="BB">Barbados</option><option value="BY">Belarus</option><option value="BE">Belgium</option><option value="BZ">Belize</option><option value="BJ">Benin</option><option value="BM">Bermuda</option><option value="BT">Bhutan</option><option value="BO">Bolivia</option><option value="BA">Bosnia And Herzegowina</option><option value="BW">Botswana</option><option value="BV">Bouvet Island</option><option value="BR">Brazil</option><option value="IO">British Indian Ocean Territory</option><option value="BN">Brunei Darussalam</option><option value="BG">Bulgaria</option><option value="BF">Burkina Faso</option><option value="BI">Burundi</option><option value="KH">Cambodia</option><option value="CM">Cameroon</option><option value="CA">Canada</option><option value="CV">Cape Verde</option><option value="KY">Cayman Islands</option><option value="CF">Central African Republic</option><option value="TD">Chad</option><option value="CL">Chile</option><option value="CN">China</option><option value="CX">Christmas Island</option><option value="CC">Cocos (Keeling) Islands</option><option value="CO">Colombia</option><option value="KM">Comoros</option><option value="CG">Congo</option><option value="CK">Cook Islands</option><option value="CR">Costa Rica</option><option value="HR">Croatia</option><option value="CU">Cuba</option><option value="CY">Cyprus</option><option value="CZ">Czech Republic</option><option value="DK">Denmark</option><option value="DJ">Djibouti</option><option value="DM">Dominica</option><option value="DO">Dominican Republic</option><option value="TL">Timor-Leste</option><option value="EC">Ecuador</option><option value="EG">Egypt</option><option value="SV">El Salvador</option><option value="GQ">Equatorial Guinea</option><option value="ER">Eritrea</option><option value="EE">Estonia</option><option value="ET">Ethiopia</option><option value="FK">Falkland Islands (Malvinas)</option><option value="FO">Faroe Islands</option><option value="FJ">Fiji</option><option value="FI">Finland</option><option value="FR">France</option><option value="GF">French Guiana</option><option value="PF">French Polynesia</option><option value="TF">French Southern Territories</option><option value="GA">Gabon</option><option value="GM">Gambia</option><option value="GE">Georgia</option><option value="DE">Germany</option><option value="GH">Ghana</option><option value="GI">Gibraltar</option><option value="GR">Greece</option><option value="GL">Greenland</option><option value="GD">Grenada</option><option value="GP">Guadeloupe</option><option value="GU">Guam</option><option value="GT">Guatemala</option><option value="GN">Guinea</option><option value="GW">Guinea-bissau</option><option value="GY">Guyana</option><option value="HT">Haiti</option><option value="HM">Heard And Mc Donald Islands</option><option value="HN">Honduras</option><option value="HK">Hong Kong</option><option value="HU">Hungary</option><option value="IS">Iceland</option><option value="IN">India</option><option value="ID">Indonesia</option><option value="IR">Iran</option><option value="IQ">Iraq</option><option value="IE">Ireland</option><option value="IL">Israel</option><option value="IT">Italy</option><option value="JM">Jamaica</option><option value="JP">Japan</option><option value="JO">Jordan</option><option value="KZ">Kazakhstan</option><option value="KE">Kenya</option><option value="KI">Kiribati</option><option value="KP">Korea</option><option value="KR">Republic Of Korea</option><option value="KW">Kuwait</option><option value="KG">Kyrgyzstan</option><option value="LA">Lao</option><option value="LV">Latvia</option><option value="LB">Lebanon</option><option value="LS">Lesotho</option><option value="LR">Liberia</option><option value="LY">Libyan Arab Jamahiriya</option><option value="LI">Liechtenstein</option><option value="LT">Lithuania</option><option value="LU">Luxembourg</option><option value="MO">Macao</option><option value="MK">Macedonia</option><option value="MG">Madagascar</option><option value="MW">Malawi</option><option value="MY">Malaysia</option><option value="MV">Maldives</option><option value="ML">Mali</option><option value="MT">Malta</option><option value="MH">Marshall Islands</option><option value="MQ">Martinique</option><option value="MR">Mauritania</option><option value="MU">Mauritius</option><option value="YT">Mayotte</option><option value="MX">Mexico</option><option value="FM">Micronesia</option><option value="MD">Moldova</option><option value="MC">Monaco</option><option value="MN">Mongolia</option><option value="MS">Montserrat</option><option value="MA">Morocco</option><option value="MZ">Mozambique</option><option value="MM">Myanmar</option><option value="NA">Namibia</option><option value="NR">Nauru</option><option value="NP">Nepal</option><option value="NL">Netherlands</option><option value="AN">Netherlands Antilles</option><option value="NC">New Caledonia</option><option value="NZ">New Zealand</option><option value="NI">Nicaragua</option><option value="NE">Niger</option><option value="NG">Nigeria</option><option value="NU">Niue</option><option value="NF">Norfolk Island</option><option value="MP">Northern Mariana Islands</option><option value="NO">Norway</option><option value="OM">Oman</option><option value="PK">Pakistan</option><option value="PW">Palau</option><option value="PA">Panama</option><option value="PG">Papua New Guinea</option><option value="PY">Paraguay</option><option value="PE">Peru</option><option value="PH">Philippines</option><option value="PN">Pitcairn</option><option value="PL">Poland</option><option value="PT">Portugal</option><option value="PR">Puerto Rico</option><option value="QA">Qatar</option><option value="RE">Reunion</option><option value="RO">Romania</option><option value="RU">Russian Federation</option><option value="RW">Rwanda</option><option value="KN">Saint Kitts And Nevis</option><option value="LC">Saint Lucia</option><option value="VC">Saint Vincent And The Grenadines</option><option value="WS">Samoa</option><option value="SM">San Marino</option><option value="ST">Sao Tome And Principe</option><option value="SA">Saudi Arabia</option><option value="SN">Senegal</option><option value="SC">Seychelles</option><option value="SL">Sierra Leone</option><option value="SG">Singapore</option><option value="SK">Slovakia </option><option value="SI">Slovenia</option><option value="SB">Solomon Islands</option><option value="SO">Somalia</option><option value="ZA">South Africa</option><option value="GS">South Georgia And The South Sandwich Islands</option><option value="ES">Spain</option><option value="LK">Sri Lanka</option><option value="SH">St. Helena</option><option value="PM">St. Pierre And Miquelon</option><option value="SD">Sudan</option><option value="SR">Suriname</option><option value="SJ">Svalbard And Jan Mayen Islands</option><option value="SZ">Swaziland</option><option value="SE">Sweden</option><option value="CH">Switzerland</option><option value="SY">Syrian Arab Republic</option><option value="TW">Taiwan</option><option value="TJ">Tajikistan</option><option value="TZ">Tanzania</option><option value="TH">Thailand</option><option value="TG">Togo</option><option value="TK">Tokelau</option><option value="TO">Tonga</option><option value="TT">Trinidad And Tobago</option><option value="TN">Tunisia</option><option value="TR">Turkey</option><option value="TM">Turkmenistan</option><option value="TC">Turks And Caicos Islands</option><option value="TV">Tuvalu</option><option value="UG">Uganda</option><option value="UA">Ukraine</option><option value="AE">United Arab Emirates</option><option value="GB">United Kingdom</option><option value="US">United States</option><option value="UM">United States Minor Outlying Islands</option><option value="UY">Uruguay</option><option value="UZ">Uzbekistan</option><option value="VU">Vanuatu</option><option value="VA">Vatican City State </option><option value="VE">Venezuela</option><option value="VN">Viet Nam</option><option value="VG">Virgin Islands (British)</option><option value="VI">Virgin Islands (U.S.)</option><option value="WF">Wallis And Futuna Islands</option><option value="EH">Western Sahara</option><option value="YE">Yemen</option><option value="RS">Serbia</option><option value="ZM">Zambia</option><option value="ZW">Zimbabwe</option><option value="AX">Aaland Islands</option>
	</select> </div>
	
	<script>
	$("#country_list").change(function(e){
	
		/*var coun_opt_data = $('#country_list option[value="'+$(this).val()+'"]').attr('data-val');
		if(($(this).val().length===3) && (coun_opt_data!==undefined)){
			 //alert("\r\ndata1="+coun_opt_data);
			 $('#bill_country_name').val(coun_opt_data);
		}*/
	//alert($(this).val()+"\r\n"+$(this).find('option:selected').text()+"\r\n"+$(this).find('option:selected').attr('data-val'));
	 $('#bill_country_name').val($(this).find('option:selected').attr('data-val'));
	  
	 $('#state_input_divid').html('<input placeholder="State" type=text id="state_list" name=bill_state size=100 maxlength=128 value="" required>');
	 var state_selected='<select name="bill_state" id="state_list" style="font-size:14px" required><option value="" disabled="disabled" selected="selected">Select State</option>';
	 var state_selected2='</select>';
	  if($(this).val()==="USA"){
		$('#state_input_divid').html(state_selected+'<option value="AL">Alabama</option><option value="AK">Alaska</option><option value="AS">American Samoa</option><option value="AZ">Arizona</option><option value="AR">Arkansas</option><option value="AF">Armed Forces Africa</option><option value="AA">Armed Forces Americas</option><option value="AC">Armed Forces Canada</option><option value="AE">Armed Forces Europe</option><option value="AM">Armed Forces Middle East</option><option value="AP">Armed Forces Pacific</option><option value="CA">California</option><option value="CO">Colorado</option><option value="CT">Connecticut</option><option value="DE">Delaware</option><option value="DC">District Of Columbia</option><option value="FM">Federated States Of Micronesia</option><option value="FL">Florida</option><option value="GA">Georgia</option><option value="GU">Guam</option><option value="HI">Hawaii</option><option value="ID">Idaho</option><option value="IL">Illinois</option><option value="IN">Indiana</option><option value="IA">Iowa</option><option value="KS">Kansas</option><option value="KY">Kentucky</option><option value="LA">Louisiana</option><option value="ME">Maine</option><option value="MH">Marshall Islands</option><option value="MD">Maryland</option><option value="MA">Massachusetts</option><option value="MI">Michigan</option><option value="MN">Minnesota</option><option value="MS">Mississippi</option><option value="MO">Missouri</option><option value="MT">Montana</option><option value="NE">Nebraska</option><option value="NV">Nevada</option><option value="NH">New Hampshire</option><option value="NJ">New Jersey</option><option value="NM">New Mexico</option><option value="NY">New York</option><option value="NC">North Carolina</option><option value="ND">North Dakota</option><option value="MP">Northern Mariana Islands</option><option value="OH">Ohio</option><option value="OK">Oklahoma</option><option value="OR">Oregon</option><option value="PA">Pennsylvania</option><option value="PR">Puerto Rico</option><option value="RI">Rhode Island</option><option value="SC">South Carolina</option><option value="SD">South Dakota</option><option value="TN">Tennessee</option><option value="TX">Texas</option><option value="UT">Utah</option><option value="VT">Vermont</option><option value="VI">Virgin Islands</option><option value="VA">Virginia</option><option value="WA">Washington</option><option value="WV">West Virginia</option><option value="WI">Wisconsin</option><option value="WY">Wyoming</option>'+state_selected2);
	  }else if($(this).val()==="CAN"){
		$('#state_input_divid').html(state_selected+'<option value="AB">Alberta</option><option value="BC">British Columbia</option><option value="MB">Manitoba</option><option value="NL">Newfoundland</option><option value="NB">New Brunswick</option><option value="NS">Nova Scotia</option><option value="NT">Northwest Territories</option><option value="NU">Nunavut</option><option value="ON">Ontario</option><option value="PE">Prince Edward Island</option><option value="QC">Quebec</option><option value="SK">Saskatchewan</option><option value="YT">Yukon Territory</option>'+state_selected2);
	  }else if($(this).val()==="AUS"){
		$('#state_input_divid').html(state_selected+'<option value="ACT">Australian Capital Territory</option><option value="NSW">New South Wales</option><option value="NT">Northern Territory</option><option value="QLD">Queensland</option><option value="SA">South Australia</option><option value="TAS">Tasmania</option><option value="VIC">Victoria</option><option value="WA">Western Australia</option>'+state_selected2);
	  }else if($(this).val()==="JPN"){
		$('#state_input_divid').html(state_selected+'<option value="HK">Hokkaido</option><option value="AO">Aomori</option><option value="IW">Iwate</option><option value="MY">Miyagi</option><option value="AK">Akita</option><option value="YM">Yamagata</option><option value="FK">Fukushima</option><option value="IB">Ibaragi</option><option value="TC">Tochigi</option><option value="GU">Gunma</option><option value="SI">Saitama</option><option value="CB">Chiba</option><option value="TK">Tokyo</option><option value="KN">Kanagawa</option><option value="NI">Niigata</option><option value="TY">Toyama</option><option value="IS">Ishikawa</option><option value="FI">Fukui</option><option value="YN">Yamanashi</option><option value="NG">Nagano</option><option value="GF">Gifu</option><option value="SZ">Shizuoka</option><option value="AI">Aichi</option><option value="ME">Mie</option><option value="SG">Shiga</option><option value="KT">Kyoto</option><option value="OS">Osaka</option><option value="HG">Hyogo</option><option value="NR">Nara</option><option value="WK">Wakayama</option><option value="TT">Tottori</option><option value="SM">Shimane</option><option value="OK">Okayama</option><option value="HR">Hiroshima</option><option value="YG">Yamaguchi</option><option value="TS">Tokushima</option><option value="KG">Kagawa</option><option value="EH">Ehime</option><option value="KC">Kouchi</option><option value="FO">Fukuoka</option><option value="SA">Saga</option><option value="NS">Nagasaki</option><option value="KM">Kumamoto</option><option value="OI">Ooita</option><option value="MZ">Miyazaki</option><option value="KS">Kagoshima</option>'+state_selected2);
	  }
	});
	$('#state_list option[value=""]').prop('selected','selected');
	$('#country_list option[value=""]').prop('selected','selected');
	function validateFormDusPay(e){
		if(e.ccholder.value==""){
			 alert('Please Enter the Your First Name');
			 e.ccholder.focus();
			 return false;
		}else if(e.ccholder_lname.value==""){
			 alert('Please Enter the Your Last Name');
			 e.ccholder_lname.focus();
			 return false;
		}else if(e.bill_phone.value==""){
			 alert('Please Enter the Your Phone No.');
			 e.bill_phone.focus();
			 return false;
		}else if(e.email.value==""){
			 alert('Please Enter the Your Email ID');
			 e.email.focus();
			 return false;
		}else if(e.bill_country.value==""){
			 alert('Please Select the Country');
			  e.bill_country.focus();
			 return false;
		}else if(e.bill_state.value==""){
			 alert('Please Select/Enter the State Name');
			 e.bill_state.focus();
			 return false;
		}else if(e.bill_zip.value==""){
			 alert('Please Enter the Zipcode');
			 e.bill_zip.focus();
			 return false;
		}
		
		if (e.checkValidity() == false){
			return false;
		}else{
			$('#duspay_form_popup').slideDown(900);
			return true;
		}
		e.preventDefault();
	}
	
	
	</script>
	
	
	
	<div class="separator"></div>
	<div class="ecol2"><input placeholder="Zip" type="text" name="bill_zip" size="30" maxlength="128" value=""> </div>
	<div class="ecol2"> </div>
	
	</td></center>
	</tr>
	</br></br>
	
	<!--formnovalidate="formnovalidate"-->
<!--	<tr><td class="capc" colspan="2" style="text-align:center;">
//		<button id="cardsend_submit" type="submit" name="cardsend" value="CHECKOUT" class="submit btn btn-icon btn-primary glyphicons circle_ok " style="float: left;margin: 0 0 0 7px;"><i></i><b class="contitxt">CONTINUE</b></button>
		-->
	</td>
	</tr>
	</center></tbody></table>
	</div>
	</center>

	
	
	<tr>
	<center><td colspan="2" style="background:#dee0e2;">
	
			
	<div class="ecard_div evoilatecard_div pay_div" style="display: block;">

	
		<div class="ecol2">
			<div class="separator"></div>
			<div class="form-group" id="card-number-field"><input id="number" style="margin:7px;" type="text" name="ccno" maxlength="19" size="30" placeholder="Credit Card No." value="" required=""></div>
			
			<div class="separator"></div>
			<div class="form-group CVV"><input id="cvc" type="password" style="margin:7px;" name="ccvv" maxlength="4" size="30" placeholder="CVC" value="" required=""></div>
			
			<div class="separator"></div>
			
			<select id="expMonth" name="month" required="">
				<option value="" disabled="disabled" selected="selected">Exp. Month</option>
				<option value="01">January [1]</option>
				<option value="02">February [2]</option>
				<option value="03">March [3]</option>
				<option value="04">April [4]</option>
				<option value="05">May [5]</option>
				<option value="06">June [6]</option>
				<option value="07">July [7]</option>
				<option value="08">August [8]</option>
				<option value="09">September [9]</option>
				<option value="10">October [10]</option>
				<option value="11">November [11]</option>
				<option value="12">December [12]</option>
			</select>
	
			<select id="expYear" name="year" required="">
				<option value="" disabled="disabled" selected="selected">Exp. Year</option>
				<option value="17">17</option>
				<option value="18">18</option>
				<option value="19">19</option>
				<option value="20">20</option>
				<option value="21">21</option>
				<option value="22">22</option>
				<option value="23">23</option>
				<option value="24">24</option>
				<option value="25">25</option>
				
			</select>
	
		</div>
		
		
		<div class="ecol2">
		<textarea name="notes" cols="30" rows="5" placeholder="Note" style="height: 55px;margin: 6px 0 10px 0;"></textarea>
			<div class="form-group" id="credit_cards">
				<img src="https://portal.duspay.com/images/visa.jpg" id="visa">
				<img src="https://portal.duspay.com/images/mastercard.jpg" id="mastercard">
				<img src="https://portal.duspay.com/images/amex.jpg" id="amex">
				<img src="https://portal.duspay.com/images/jcbcard.png" id="jcb">
			</div>
		</div>
		
	<!--<div class="hide error" id="dus-errors" style="display:block;">Card number can not be empty.</div>-->
	
	<div class="separator"></div>
	<div class="submit_div">	
		<button id="cardsend_submit" type="submit" name="send123" value="CHANGE NOW!" class="submitbtn btn btn-icon btn-primary glyphicons circle_ok "><i></i><b class="contitxt">CONTINUE</b></button>
	</div>
	
			<button type="button" value="BACK" onclick="javascript:window.history.back();" class="submitbck back_button btn btn-icon btn-primary glyphicons left_arrow"><i></i><b class="contitxt">BACK</b></button>
	<style>
	.ecard_div .submit_div, .ecard_div .back_button {float:center;margin:10px 0 10px 10px;}
	.ecol2 { margin:7px;	}
	input[type=text],[type=password],textarea {
    width: 30%;
    padding: 6px 10px;
    margin: 1px 0;
    box-sizing: border-box;
	
}
select {
    width: 15%;
    padding: 6px 10px;
    margin: 1px 0;
    box-sizing: border-box;
}
	</style>
		</form>
	</div>
	
		
	<!--	<div class="api14_divXX pay_div" style="">
	<form action="" method="POST"> 
		<div class="ecol2">
		evoilate
		</div>
		<div class="ecol2">
		evoilate
		</div> -->
		
		
	</form>
	</div>
	
	</td></center></tr>
	
	
	
	
	