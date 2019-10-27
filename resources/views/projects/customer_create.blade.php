<div class="content_part">
<form action="/component/vbizz/customer" method="post" name="adminForm" id="adminForm" enctype="multipart/form-data">

<div class="row-fluid">
    <div class="span12">
        <div class="btn-toolbar" id="toolbar">
                        <div class="btn-wrapper" id="toolbar-save">
            <span onclick="submitbutton('save')" class="btn btn-small">
            <span class="fa fa-check"></span> Save</span>
            </div>
                        <div class="btn-wrapper" id="toolbar-cancel">
                <span onclick="Joomla.submitbutton('cancel')" class="btn btn-small">
                <span class="fa fa-close"></span> Close</span>
            </div>
        </div>
    </div>
</div>

<div class="overview">
<fieldset class="adminform">
	<legend>Overview</legend>
	<ul>
		<li>A customer (also known as a client, buyer, or purchaser) is the recipient of a good, service, product, or idea, obtained from a seller, vendor, or supplier for a monetary or other valuable consideration.</li>
	</ul>
</fieldset>
</div>


<div class="col100 leftdiv">
<fieldset class="adminform">
<legend>Add New Record</legend>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<table class="adminform table table-striped">
    <tbody>
	
	<tr>
		<th><label class="hasTip" title="">Profile Pics</label></th>
		<td><input type="file" name="profile_pic" id="profile_pic" class="inputbox required" size="50" value="">
		<img src="http://vbizz.joomlawings.com/components/com_vbizz/uploads/profile_pics/noimage.png" style="height:60px;vertical-align:middle;margin-top:5px;" <="" td="">
	</td></tr>
	
    <tr>
        <th width="200"><label class="hasTip" title="">
        	Name<span style="color:Red;">*  </span></label>
        </th>
    	<td><input class="text_area" type="text" name="name" id="name" value=""></td>
    </tr>
	
	<tr>
		<th width="200">
			<label class="hasTip" title="">
			Username<span style="color:Red;">*  </span></label>
		</th>
		<td><input class="text_area" type="text" name="username" id="username" value=""></td>
	</tr>
	
	<tr>
        <th width="200"><label class="hasTip" title="">
			Email<span style="color:Red;">*  </span></label>
		</th>
        <td><input class="text_area" type="text" name="email" id="email" value=""></td>
    </tr>
	
	<tr>
		<th><label class="hasTip" title="">Password</label></th>
		<td><input type="password" class="text_area" name="password" autocomplete="false" value="" cols="39" rows="5"></td>
	</tr>
	
	<tr id="morebtn">
		<th colspan="0">
		<input id="more" class="btn" type="button" value="More Options">
		</th>
		<td></td>
	</tr>
    
    <tr class="tohide" style="display:none;">
        <th width="200"><label class="hasTip" title="">Company</label></th>
    	<td><input class="text_area" type="text" name="company" id="company" value=""></td>
    </tr>
    
    <tr class="tohide" style="display:none;">
        <th width="200"><label class="hasTip" title="">Contact No.</label></th>
    	<td><input class="text_area" type="text" name="phone" id="phone" value=""></td>
    </tr>
    
    <tr class="tohide" style="display:none;">
        <th width="200"><label class="hasTip" title="">Website</label></th>
        <td><input class="text_area" type="text" name="website" id="website" value=""></td>
    </tr>
    
    <tr class="tohide" style="display:none;">
        <th><label class="hasTip" title="">Instant Messenger</label></th>
        <td>
            <select name="instant_messenger" id="instant_messenger" style="display: none;">
            <option value="">Select Instant Manager</option>
            <option value="skype">Skype</option>
            <option value="gtalk">GTalk</option>
            <option value="yahoo">Yahoo</option>
            <option value="nimbuzz">Nimbuzz</option>
            <option value="ebuddy">eBuddy</option>
            <option value="aim">AIM</option>
            <option value="ichat">iChat</option>
            <option value="myspace">MySpace</option>
            <option value="meebo">Meebo</option>
            <option value="icq">ICQ</option>
            <option value="digsby">Digsby</option>
            <option value="msn">MSN</option>
            <option value="trillian">Trillian</option>
            <option value="pidgin">Pidgin</option>
            <option value="jitsi">Jitsi</option>
            <option value="miranda">Miranda</option>
            <option value="qnext">Qnext</option>
            <option value="adium">Adium</option>
            <option value="empathy">Empathy</option>
            </select><div class="chzn-container chzn-container-single" style="width: 220px;" title="" id="instant_messenger_chzn"><a class="chzn-single"><span>Select Instant Manager</span><div><b></b></div></a><div class="chzn-drop"><div class="chzn-search"><input type="text" autocomplete="off"></div><ul class="chzn-results"></ul></div></div>
        </td>
    </tr>
    
    <tr class="tohide" style="display:none;">
        <th width="200"><label class="hasTip" title="">Instant Messenger Id</label></th>
        <td><input class="text_area" type="text" name="im_id" id="im_id" value=""></td>
    </tr>
    
    <tr class="tohide" style="display:none;">
        <th><label class="hasTip" title="">Country</label>
        </th><td>
            <select name="country_id" id="country_id" style="display: none;">
            <option value="">Select Country</option>
                        <option value="1"> Afghanistan</option>
                        <option value="2"> Albania</option>
                        <option value="3"> Algeria</option>
                        <option value="4"> American Samoa</option>
                        <option value="5"> Andorra</option>
                        <option value="6"> Angola</option>
                        <option value="7"> Anguilla</option>
                        <option value="8"> Antarctica</option>
                        <option value="9"> Antigua and Barbuda</option>
                        <option value="10"> Argentina</option>
                        <option value="11"> Armenia</option>
                        <option value="12"> Aruba</option>
                        <option value="13"> Australia</option>
                        <option value="14"> Austria</option>
                        <option value="15"> Azerbaijan</option>
                        <option value="16"> Bahamas</option>
                        <option value="17"> Bahrain</option>
                        <option value="18"> Bangladesh</option>
                        <option value="19"> Barbados</option>
                        <option value="20"> Belarus</option>
                        <option value="21"> Belgium</option>
                        <option value="22"> Belize</option>
                        <option value="23"> Benin</option>
                        <option value="24"> Bermuda</option>
                        <option value="25"> Bhutan</option>
                        <option value="26"> Bolivia</option>
                        <option value="27"> Bosnia and Herzegowina</option>
                        <option value="28"> Botswana</option>
                        <option value="29"> Bouvet Island</option>
                        <option value="30"> Brazil</option>
                        <option value="31"> British Indian Ocean Territory</option>
                        <option value="32"> Brunei Darussalam</option>
                        <option value="33"> Bulgaria</option>
                        <option value="34"> Burkina Faso</option>
                        <option value="35"> Burundi</option>
                        <option value="36"> Cambodia</option>
                        <option value="37"> Cameroon</option>
                        <option value="38"> Canada</option>
                        <option value="39"> Cape Verde</option>
                        <option value="40"> Cayman Islands</option>
                        <option value="41"> Central African Republic</option>
                        <option value="42"> Chad</option>
                        <option value="43"> Chile</option>
                        <option value="44"> China</option>
                        <option value="45"> Christmas Island</option>
                        <option value="46"> Cocos (Keeling) Islands</option>
                        <option value="47"> Colombia</option>
                        <option value="48"> Comoros</option>
                        <option value="49"> Congo</option>
                        <option value="50"> Cook Islands</option>
                        <option value="51"> Costa Rica</option>
                        <option value="52"> Cote D'Ivoire</option>
                        <option value="53"> Croatia</option>
                        <option value="54"> Cuba</option>
                        <option value="55"> Cyprus</option>
                        <option value="56"> Czech Republic</option>
                        <option value="57"> Denmark</option>
                        <option value="58"> Djibouti</option>
                        <option value="59"> Dominica</option>
                        <option value="60"> Dominican Republic</option>
                        <option value="61"> East Timor</option>
                        <option value="62"> Ecuador</option>
                        <option value="63"> Egypt</option>
                        <option value="64"> El Salvador</option>
                        <option value="65"> Equatorial Guinea</option>
                        <option value="66"> Eritrea</option>
                        <option value="67"> Estonia</option>
                        <option value="68"> Ethiopia</option>
                        <option value="69"> Falkland Islands (Malvinas)</option>
                        <option value="70"> Faroe Islands</option>
                        <option value="71"> Fiji</option>
                        <option value="72"> Finland</option>
                        <option value="73"> France</option>
                        <option value="75"> French Guiana</option>
                        <option value="76"> French Polynesia</option>
                        <option value="77"> French Southern Territories</option>
                        <option value="78"> Gabon</option>
                        <option value="79"> Gambia</option>
                        <option value="80"> Georgia</option>
                        <option value="81"> Germany</option>
                        <option value="82"> Ghana</option>
                        <option value="83"> Gibraltar</option>
                        <option value="84"> Greece</option>
                        <option value="85"> Greenland</option>
                        <option value="86"> Grenada</option>
                        <option value="87"> Guadeloupe</option>
                        <option value="88"> Guam</option>
                        <option value="89"> Guatemala</option>
                        <option value="90"> Guinea</option>
                        <option value="91"> Guinea-bissau</option>
                        <option value="92"> Guyana</option>
                        <option value="93"> Haiti</option>
                        <option value="94"> Heard and Mc Donald Islands</option>
                        <option value="95"> Honduras</option>
                        <option value="96"> Hong Kong</option>
                        <option value="97"> Hungary</option>
                        <option value="98"> Iceland</option>
                        <option value="99"> India</option>
                        <option value="100"> Indonesia</option>
                        <option value="101"> Iran (Islamic Republic of)</option>
                        <option value="102"> Iraq</option>
                        <option value="103"> Ireland</option>
                        <option value="104"> Israel</option>
                        <option value="105"> Italy</option>
                        <option value="106"> Jamaica</option>
                        <option value="107"> Japan</option>
                        <option value="108"> Jordan</option>
                        <option value="109"> Kazakhstan</option>
                        <option value="110"> Kenya</option>
                        <option value="111"> Kiribati</option>
                        <option value="112"> Korea, Democratic People's Republic of</option>
                        <option value="113"> Korea, Republic of</option>
                        <option value="114"> Kuwait</option>
                        <option value="115"> Kyrgyzstan</option>
                        <option value="116"> Lao People's Democratic Republic</option>
                        <option value="117"> Latvia</option>
                        <option value="118"> Lebanon</option>
                        <option value="119"> Lesotho</option>
                        <option value="120"> Liberia</option>
                        <option value="121"> Libya</option>
                        <option value="122"> Liechtenstein</option>
                        <option value="123"> Lithuania</option>
                        <option value="124"> Luxembourg</option>
                        <option value="125"> Macau</option>
                        <option value="126"> Macedonia, The Former Yugoslav Republic of</option>
                        <option value="127"> Madagascar</option>
                        <option value="128"> Malawi</option>
                        <option value="129"> Malaysia</option>
                        <option value="130"> Maldives</option>
                        <option value="131"> Mali</option>
                        <option value="132"> Malta</option>
                        <option value="133"> Marshall Islands</option>
                        <option value="134"> Martinique</option>
                        <option value="135"> Mauritania</option>
                        <option value="136"> Mauritius</option>
                        <option value="137"> Mayotte</option>
                        <option value="138"> Mexico</option>
                        <option value="139"> Micronesia, Federated States of</option>
                        <option value="140"> Moldova, Republic of</option>
                        <option value="141"> Monaco</option>
                        <option value="142"> Mongolia</option>
                        <option value="143"> Montserrat</option>
                        <option value="144"> Morocco</option>
                        <option value="145"> Mozambique</option>
                        <option value="146"> Myanmar</option>
                        <option value="147"> Namibia</option>
                        <option value="148"> Nauru</option>
                        <option value="149"> Nepal</option>
                        <option value="150"> Netherlands</option>
                        <option value="151"> Netherlands Antilles</option>
                        <option value="152"> New Caledonia</option>
                        <option value="153"> New Zealand</option>
                        <option value="154"> Nicaragua</option>
                        <option value="155"> Niger</option>
                        <option value="156"> Nigeria</option>
                        <option value="157"> Niue</option>
                        <option value="158"> Norfolk Island</option>
                        <option value="159"> Northern Mariana Islands</option>
                        <option value="160"> Norway</option>
                        <option value="161"> Oman</option>
                        <option value="162"> Pakistan</option>
                        <option value="163"> Palau</option>
                        <option value="164"> Panama</option>
                        <option value="165"> Papua New Guinea</option>
                        <option value="166"> Paraguay</option>
                        <option value="167"> Peru</option>
                        <option value="168"> Philippines</option>
                        <option value="169"> Pitcairn</option>
                        <option value="170"> Poland</option>
                        <option value="171"> Portugal</option>
                        <option value="172"> Puerto Rico</option>
                        <option value="173"> Qatar</option>
                        <option value="174"> Reunion</option>
                        <option value="175"> Romania</option>
                        <option value="176"> Russian Federation</option>
                        <option value="177"> Rwanda</option>
                        <option value="178"> Saint Kitts and Nevis</option>
                        <option value="179"> Saint Lucia</option>
                        <option value="180"> Saint Vincent and the Grenadines</option>
                        <option value="181"> Samoa</option>
                        <option value="182"> San Marino</option>
                        <option value="183"> Sao Tome and Principe</option>
                        <option value="184"> Saudi Arabia</option>
                        <option value="185"> Senegal</option>
                        <option value="186"> Seychelles</option>
                        <option value="187"> Sierra Leone</option>
                        <option value="188"> Singapore</option>
                        <option value="189"> Slovakia</option>
                        <option value="190"> Slovenia</option>
                        <option value="191"> Solomon Islands</option>
                        <option value="192"> Somalia</option>
                        <option value="193"> South Africa</option>
                        <option value="194"> South Georgia and the South Sandwich Islands</option>
                        <option value="195"> Spain</option>
                        <option value="196"> Sri Lanka</option>
                        <option value="197"> St. Helena</option>
                        <option value="198"> St. Pierre and Miquelon</option>
                        <option value="199"> Sudan</option>
                        <option value="200"> Suriname</option>
                        <option value="201"> Svalbard and Jan Mayen Islands</option>
                        <option value="202"> Swaziland</option>
                        <option value="203"> Sweden</option>
                        <option value="204"> Switzerland</option>
                        <option value="205"> Syrian Arab Republic</option>
                        <option value="206"> Taiwan</option>
                        <option value="207"> Tajikistan</option>
                        <option value="208"> Tanzania, United Republic of</option>
                        <option value="209"> Thailand</option>
                        <option value="210"> Togo</option>
                        <option value="211"> Tokelau</option>
                        <option value="212"> Tonga</option>
                        <option value="213"> Trinidad and Tobago</option>
                        <option value="214"> Tunisia</option>
                        <option value="215"> Turkey</option>
                        <option value="216"> Turkmenistan</option>
                        <option value="217"> Turks and Caicos Islands</option>
                        <option value="218"> Tuvalu</option>
                        <option value="219"> Uganda</option>
                        <option value="220"> Ukraine</option>
                        <option value="221"> United Arab Emirates</option>
                        <option value="222"> United Kingdom</option>
                        <option value="223"> United States</option>
                        <option value="224"> United States Minor Outlying Islands</option>
                        <option value="225"> Uruguay</option>
                        <option value="226"> Uzbekistan</option>
                        <option value="227"> Vanuatu</option>
                        <option value="228"> Vatican City State (Holy See)</option>
                        <option value="229"> Venezuela</option>
                        <option value="230"> Viet Nam</option>
                        <option value="231"> Virgin Islands (British)</option>
                        <option value="232"> Virgin Islands (U.S.)</option>
                        <option value="233"> Wallis and Futuna Islands</option>
                        <option value="234"> Western Sahara</option>
                        <option value="235"> Yemen</option>
                        <option value="237"> The Democratic Republic of Congo</option>
                        <option value="238"> Zambia</option>
                        <option value="239"> Zimbabwe</option>
                        <option value="240"> East Timor</option>
                        <option value="241"> Jersey</option>
                        <option value="242"> St. Barthelemy</option>
                        <option value="243"> St. Eustatius</option>
                        <option value="244"> Canary Islands</option>
                        <option value="245"> Serbia</option>
                        <option value="246"> Sint Maarten (French Antilles)</option>
                        <option value="247"> Sint Maarten (Netherlands Antilles)</option>
                        <option value="248"> Palestinian Territory, occupied</option>
                        </select><div class="chzn-container chzn-container-single" style="width: 220px;" title="" id="country_id_chzn"><a class="chzn-single"><span>Select Country</span><div><b></b></div></a><div class="chzn-drop"><div class="chzn-search"><input type="text" autocomplete="off"></div><ul class="chzn-results"></ul></div></div>
        </td>
    </tr>
    
    <tr class="tohide" style="display:none;">
        <th><label class="hasTip" title="">State</label></th>
        <td id="states">
            <select name="state_id" id="state_id" style="display: none;">
            <option value="">Select State</option>
                        </select><div class="chzn-container chzn-container-single chzn-container-single-nosearch" style="width: 220px;" title="" id="state_id_chzn"><a class="chzn-single"><span>Select State</span><div><b></b></div></a><div class="chzn-drop"><div class="chzn-search"><input type="text" autocomplete="off" readonly=""></div><ul class="chzn-results"></ul></div></div>
        </td>
    </tr>
    
    <tr class="tohide" style="display:none;">
    	<th width="200"><label class="hasTip" title="">Address</label></th>
    	<td><input class="text_area" type="text" name="address" id="address" value=""></td>
    </tr>
    
    <tr class="tohide" style="display:none;">
    	<th width="200"><label class="hasTip" title="">City</label></th>
    	<td><input class="text_area" type="text" name="city" id="city" value=""></td>
    </tr>
    
    <tr class="tohide" style="display:none;">
        <th width="200"><label class="hasTip" title="">Zip Code</label></th>
        <td><input class="text_area" type="text" name="zip" id="zip" value=""></td>
    </tr>
    
    <tr class="tohide" style="display:none;">
    	<th width="200"><label class="hasTip" title="">Comments</label></th>
    	<td><textarea class="text_area" name="comments" id="comments" rows="4" cols="50"></textarea></td>
    </tr>
    
    </tbody>
</table>

</fieldset>
</div>





<div class="clr"></div>
<input type="hidden" name="option" value="com_vbizz">
<input type="hidden" name="id" value="">
<input type="hidden" name="userid" value="">
<input type="hidden" name="task" value="">
<input type="hidden" name="view" value="customer">
<input type="hidden" name="tmpl" value="component">
</form>
</div>