@extends('layouts.app')

@section('content')
<div id="vbizz">

    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script type="text/javascript">
        jQuery(function() {
	
	 jQuery( "#dialog" ).dialog({
		autoOpen: false,
		width: 700,
		height: 400,
		show: {
			effect: "blind",
			//duration: 1000
		},
		hide: {
			effect: "explode",
			//duration: 1000
		},
		open: function(event, ui) {
			var custid = jQuery('#dialog').data('custid');
			var htm = '<input type="hidden" name="custid" value="'+custid+'" />';
			jQuery('#mail-sent').append(htm);
		},
		close: function(event, ui) {
			jQuery('#mail-sent').find('input[name="custid"]').remove();
		}
	});
	
	
	jQuery(document).on('click','.send',function() {
		
		var custid = jQuery(this).parents('#dialog').find('input[name="custid"]').val();
		var subject = jQuery(this).parents('#dialog').find('input[name="subject"]').val();
		var email = jQuery(this).parents('#dialog').find('textarea[name="email_content"]').val();
		
		var that=this;


		jQuery.ajax({
			type: "POST",
			dataType:"JSON",
			data: {'option':'com_vbizz', 'view':'customer', 'task':'sendCustomEmail', 'tmpl':'component','custid':custid, 'subject':subject, 'email':email},
			
			beforeSend: function() {
				jQuery(that).parent().find("span.loadingbox").show();
			},
			
			complete: function()      {
				jQuery(that).parent().find("span.loadingbox").hide();
			},

			success: function(data){
				if(data.result=="success"){
					jQuery(that).parents('#dialog').find('input[name="subject"]').val('');
					jQuery(that).parents('#dialog').find('textarea[name="email_content"]').val('');
					var htm = '<tr class="removemail"><td></td><td><span>Email Sent Successfully</span></td></tr>';
					jQuery(that).parents('#dialog').append(htm);
					
					setTimeout(function() { 
					jQuery('tr.removemail').remove();
					jQuery( "#dialog" ).dialog( "close" );},3000);
				}
			}
		});
	});
	
});


function customeremail(custid){
	
	jQuery( "#dialog" ).data('custid',custid).dialog( "open" );
}
    </script>

    <header class="header">
        <div class="container-title">
            <h1 class="page-title">Customers</h1>
        </div>
    </header>
    <div class="content_part">
        <form action="/vbizz-dashboard/customer" method="post" name="adminForm" id="adminForm">

            <div class="subhead">
                <div class="container-fluid">
                    <div id="container-collapse" class="container-collapse"></div>
                    <div class="row-fluid">
                        <div class="span12">
                            <div id="toolbar" class="btn-toolbar">
                                <div class="btn-wrapper" id="toolbar-new">
                                    <span onclick="Joomla.submitbutton('add')" class="btn btn-small btn-success">
                                        <span class="fa fa-plus"></span> New</span>
                                </div>

                                <div class="btn-wrapper" id="toolbar-edit">
                                    <span
                                        onclick="if (document.adminForm.boxchecked.value==0){alert('Please first make a selection from the list');}else{ Joomla.submitbutton('edit')}"
                                        class="btn btn-small">
                                        <span class="fa fa-edit"></span> Edit</span>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="adminlist filter">
                <div class="filet_left">
                    <input type="text" name="search" id="search" placeholder="Search" value="" class="text_area">
                    <button class="btn hasTooltip" title="Search" onclick="this.form.submit();"><i
                            class="fa fa-search"></i></button>
                    <button class="btn hasTooltip" title="Clear"
                        onclick="document.getElementById('search').value='';this.form.submit();"><i
                            class="fa fa-remove"></i></button>
                </div>
            </div>

            <div id="editcell">
                <table class="adminlist table">
                    <thead>
                        <tr>
                            <th width="10" class="hidden-phone">#</th>
                            <th width="10"><input type="checkbox" name="toggle" value=""
                                    onclick="Joomla.checkAll(this);"></th>
                            <th><a href="#" onclick="Joomla.tableOrdering('i.name','asc','');return false;"
                                    class="hasPopover" title="" data-content="Select to sort by this column"
                                    data-placement="top" data-original-title="Name">Name</a></th>
                            <th class="hidden-phone"><a href="#"
                                    onclick="Joomla.tableOrdering('i.company','asc','');return false;"
                                    class="hasPopover" title="" data-content="Select to sort by this column"
                                    data-placement="top" data-original-title="Company">Company</a></th>
                            <th class="hidden-phone"><a href="#"
                                    onclick="Joomla.tableOrdering('i.phone','asc','');return false;" class="hasPopover"
                                    title="" data-content="Select to sort by this column" data-placement="top"
                                    data-original-title="Contact No.">Contact No.</a></th>
                            <th class="hidden-phone"><a href="#"
                                    onclick="Joomla.tableOrdering('i.email','asc','');return false;" class="hasPopover"
                                    title="" data-content="Select to sort by this column" data-placement="top"
                                    data-original-title="Email">Email</a></th>
                            <th class="hidden-phone">Address</th>
                            <th><a href="#" onclick="Joomla.tableOrdering('total_amount','asc','');return false;"
                                    class="hasPopover" title="" data-content="Select to sort by this column"
                                    data-placement="top" data-original-title="Total Amount">Total Amount</a></th>
                            <th class="hidden-phone"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="row0">

                            <td align="center" class="hidden-phone">1</td>

                            <td><input type="checkbox" id="cb0" name="cid[]" value="88"
                                    onclick="Joomla.isChecked(this.checked);"></td>


                            <td align="center">
                                <a href="/vbizz-dashboard/customer/edit/88">Yusuf Akinci</a>
                            </td>
                            <td align="center" class="hidden-phone"></td>

                            <td align="center" class="hidden-phone"></td>

                            <td align="center" class="hidden-phone"><a href="mailto:y.akinci@imajmatbaacilik.com">
                                    <div> y.akinci@imajmatbaacilik.com</div>
                                </a></td>

                            <td align="center" class="hidden-phone"> Turkey</td>

                            <td align="center"><a href="/vbizz-dashboard/order?eid=88">NOK 150000.00</a></td>

                            <td align="center" class="send_email hidden-phone"><a class="btn" href="javascript:void(0);"
                                    onclick="customeremail(88);" custid="88">Send Email</a></td>

                        </tr>
                        <tr class="row1">

                            <td align="center" class="hidden-phone">2</td>

                            <td><input type="checkbox" id="cb1" name="cid[]" value="87"
                                    onclick="Joomla.isChecked(this.checked);"></td>


                            <td align="center">
                                <a href="/vbizz-dashboard/customer/edit/87">Cida Carvalho</a>
                            </td>
                            <td align="center" class="hidden-phone"></td>

                            <td align="center" class="hidden-phone"></td>

                            <td align="center" class="hidden-phone"><a href="mailto:cida@test.com">
                                    <div> cida@test.com</div>
                                </a></td>

                            <td align="center" class="hidden-phone"> </td>

                            <td align="center"><a href="/vbizz-dashboard/order?eid=87"></a></td>

                            <td align="center" class="send_email hidden-phone"><a class="btn" href="javascript:void(0);"
                                    onclick="customeremail(87);" custid="87">Send Email</a></td>

                        </tr>
                        <tr class="row0">

                            <td align="center" class="hidden-phone">3</td>

                            <td><input type="checkbox" id="cb2" name="cid[]" value="86"
                                    onclick="Joomla.isChecked(this.checked);"></td>


                            <td align="center">
                                <a href="/vbizz-dashboard/customer/edit/86">Md Anupam Hayat Shawon</a>
                            </td>
                            <td align="center" class="hidden-phone"></td>

                            <td align="center" class="hidden-phone"></td>

                            <td align="center" class="hidden-phone"><a href="mailto:anupam.bd94@gmail.com">
                                    <div> anupam.bd94@gmail.com</div>
                                </a></td>

                            <td align="center" class="hidden-phone"> Bangladesh</td>

                            <td align="center"><a href="/vbizz-dashboard/order?eid=86"></a></td>

                            <td align="center" class="send_email hidden-phone"><a class="btn" href="javascript:void(0);"
                                    onclick="customeremail(86);" custid="86">Send Email</a></td>

                        </tr>
                        <tr class="row1">

                            <td align="center" class="hidden-phone">4</td>

                            <td><input type="checkbox" id="cb3" name="cid[]" value="85"
                                    onclick="Joomla.isChecked(this.checked);"></td>


                            <td align="center">
                                <a href="/vbizz-dashboard/customer/edit/85">abc </a>
                            </td>
                            <td align="center" class="hidden-phone"></td>

                            <td align="center" class="hidden-phone"></td>

                            <td align="center" class="hidden-phone"><a href="mailto:mynul_a@infobizsoft.com">
                                    <div> mynul_a@infobizsoft.com</div>
                                </a></td>

                            <td align="center" class="hidden-phone"> </td>

                            <td align="center"><a href="/vbizz-dashboard/order?eid=85"></a></td>

                            <td align="center" class="send_email hidden-phone"><a class="btn" href="javascript:void(0);"
                                    onclick="customeremail(85);" custid="85">Send Email</a></td>

                        </tr>
                        <tr class="row0">

                            <td align="center" class="hidden-phone">5</td>

                            <td><input type="checkbox" id="cb4" name="cid[]" value="81"
                                    onclick="Joomla.isChecked(this.checked);"></td>


                            <td align="center">
                                <a href="/vbizz-dashboard/customer/edit/81">aref ansari</a>
                            </td>
                            <td align="center" class="hidden-phone"></td>

                            <td align="center" class="hidden-phone"></td>

                            <td align="center" class="hidden-phone"><a href="mailto:zahoorshaikh@gmail.com">
                                    <div> zahoorshaikh@gmail.com</div>
                                </a></td>

                            <td align="center" class="hidden-phone"> India</td>

                            <td align="center"><a href="/vbizz-dashboard/order?eid=81"></a></td>

                            <td align="center" class="send_email hidden-phone"><a class="btn" href="javascript:void(0);"
                                    onclick="customeremail(81);" custid="81">Send Email</a></td>

                        </tr>
                        <tr class="row1">

                            <td align="center" class="hidden-phone">6</td>

                            <td><input type="checkbox" id="cb5" name="cid[]" value="79"
                                    onclick="Joomla.isChecked(this.checked);"></td>


                            <td align="center">
                                <a href="/vbizz-dashboard/customer/edit/79">Марлен</a>
                            </td>
                            <td align="center" class="hidden-phone">Изготовление мебели на заказ</td>

                            <td align="center" class="hidden-phone">89781163552</td>

                            <td align="center" class="hidden-phone"><a href="mailto:genalit70@gmail.com">
                                    <div> genalit70@gmail.com</div>
                                </a></td>

                            <td align="center" class="hidden-phone">Долгоруковская 20 Симфе Кировская область Russian
                                Federation</td>

                            <td align="center"><a href="/vbizz-dashboard/order?eid=79"></a></td>

                            <td align="center" class="send_email hidden-phone"><a class="btn" href="javascript:void(0);"
                                    onclick="customeremail(79);" custid="79">Send Email</a></td>

                        </tr>
                        <tr class="row0">

                            <td align="center" class="hidden-phone">7</td>

                            <td><input type="checkbox" id="cb6" name="cid[]" value="78"
                                    onclick="Joomla.isChecked(this.checked);"></td>


                            <td align="center">
                                <a href="/vbizz-dashboard/customer/edit/78">Company One</a>
                            </td>
                            <td align="center" class="hidden-phone"></td>

                            <td align="center" class="hidden-phone"></td>

                            <td align="center" class="hidden-phone"><a href="mailto:companyone@demo.com">
                                    <div> companyone@demo.com</div>
                                </a></td>

                            <td align="center" class="hidden-phone"> </td>

                            <td align="center"><a href="/vbizz-dashboard/order?eid=78">NOK 150.00</a></td>

                            <td align="center" class="send_email hidden-phone"><a class="btn" href="javascript:void(0);"
                                    onclick="customeremail(78);" custid="78">Send Email</a></td>

                        </tr>
                        <tr class="row1">

                            <td align="center" class="hidden-phone">8</td>

                            <td><input type="checkbox" id="cb7" name="cid[]" value="77"
                                    onclick="Joomla.isChecked(this.checked);"></td>


                            <td align="center">
                                <a href="/vbizz-dashboard/customer/edit/77">Maharaj</a>
                            </td>
                            <td align="center" class="hidden-phone"></td>

                            <td align="center" class="hidden-phone"></td>

                            <td align="center" class="hidden-phone"><a href="mailto:titfortat@git.com">
                                    <div> titfortat@git.com</div>
                                </a></td>

                            <td align="center" class="hidden-phone"> </td>

                            <td align="center"><a href="/vbizz-dashboard/order?eid=77">NOK 300.00</a></td>

                            <td align="center" class="send_email hidden-phone"><a class="btn" href="javascript:void(0);"
                                    onclick="customeremail(77);" custid="77">Send Email</a></td>

                        </tr>
                        <tr class="row0">

                            <td align="center" class="hidden-phone">9</td>

                            <td><input type="checkbox" id="cb8" name="cid[]" value="74"
                                    onclick="Joomla.isChecked(this.checked);"></td>


                            <td align="center">
                                <a href="/vbizz-dashboard/customer/edit/74">Cosmin Buzaianu</a>
                            </td>
                            <td align="center" class="hidden-phone">Electric SRL</td>

                            <td align="center" class="hidden-phone">0760244500</td>

                            <td align="center" class="hidden-phone"><a href="mailto:cosmin@electricsrl.ro">
                                    <div> cosmin@electricsrl.ro</div>
                                </a></td>

                            <td align="center" class="hidden-phone">Bd. Bucuresti, nr. 16A Focsani Vaslui Romania</td>

                            <td align="center"><a href="/vbizz-dashboard/order?eid=74"></a></td>

                            <td align="center" class="send_email hidden-phone"><a class="btn" href="javascript:void(0);"
                                    onclick="customeremail(74);" custid="74">Send Email</a></td>

                        </tr>
                        <tr class="row1">

                            <td align="center" class="hidden-phone">10</td>

                            <td><input type="checkbox" id="cb9" name="cid[]" value="73"
                                    onclick="Joomla.isChecked(this.checked);"></td>


                            <td align="center">
                                <a href="/vbizz-dashboard/customer/edit/73">milad</a>
                            </td>
                            <td align="center" class="hidden-phone"></td>

                            <td align="center" class="hidden-phone"></td>

                            <td align="center" class="hidden-phone"><a href="mailto:miladox@gmail.com">
                                    <div> miladox@gmail.com</div>
                                </a></td>

                            <td align="center" class="hidden-phone"> </td>

                            <td align="center"><a href="/vbizz-dashboard/order?eid=73"></a></td>

                            <td align="center" class="send_email hidden-phone"><a class="btn" href="javascript:void(0);"
                                    onclick="customeremail(73);" custid="73">Send Email</a></td>

                        </tr>
                        <tr class="row0">

                            <td align="center" class="hidden-phone">11</td>

                            <td><input type="checkbox" id="cb10" name="cid[]" value="72"
                                    onclick="Joomla.isChecked(this.checked);"></td>


                            <td align="center">
                                <a href="/vbizz-dashboard/customer/edit/72">Tahir Irshad</a>
                            </td>
                            <td align="center" class="hidden-phone">Hyderabad</td>

                            <td align="center" class="hidden-phone">03233892456</td>

                            <td align="center" class="hidden-phone"><a href="mailto:abctheone@mailinator.com">
                                    <div> abctheone@mailinator.com</div>
                                </a></td>

                            <td align="center" class="hidden-phone"> Pakistan</td>

                            <td align="center"><a href="/vbizz-dashboard/order?eid=72">NOK 110.00</a></td>

                            <td align="center" class="send_email hidden-phone"><a class="btn" href="javascript:void(0);"
                                    onclick="customeremail(72);" custid="72">Send Email</a></td>

                        </tr>
                        <tr class="row1">

                            <td align="center" class="hidden-phone">12</td>

                            <td><input type="checkbox" id="cb11" name="cid[]" value="71"
                                    onclick="Joomla.isChecked(this.checked);"></td>


                            <td align="center">
                                <a href="/vbizz-dashboard/customer/edit/71">Mytest</a>
                            </td>
                            <td align="center" class="hidden-phone"></td>

                            <td align="center" class="hidden-phone"></td>

                            <td align="center" class="hidden-phone"><a href="mailto:test21@test21.com">
                                    <div> test21@test21.com</div>
                                </a></td>

                            <td align="center" class="hidden-phone"> </td>

                            <td align="center"><a href="/vbizz-dashboard/order?eid=71">NOK 13.00</a></td>

                            <td align="center" class="send_email hidden-phone"><a class="btn" href="javascript:void(0);"
                                    onclick="customeremail(71);" custid="71">Send Email</a></td>

                        </tr>
                        <tr class="row0">

                            <td align="center" class="hidden-phone">13</td>

                            <td><input type="checkbox" id="cb12" name="cid[]" value="70"
                                    onclick="Joomla.isChecked(this.checked);"></td>


                            <td align="center">
                                <a href="/vbizz-dashboard/customer/edit/70">lemale</a>
                            </td>
                            <td align="center" class="hidden-phone"></td>

                            <td align="center" class="hidden-phone"></td>

                            <td align="center" class="hidden-phone"><a href="mailto:jameslowell16@gmail.com">
                                    <div> jameslowell16@gmail.com</div>
                                </a></td>

                            <td align="center" class="hidden-phone"> </td>

                            <td align="center"><a href="/vbizz-dashboard/order?eid=70"></a></td>

                            <td align="center" class="send_email hidden-phone"><a class="btn" href="javascript:void(0);"
                                    onclick="customeremail(70);" custid="70">Send Email</a></td>

                        </tr>
                        <tr class="row1">

                            <td align="center" class="hidden-phone">14</td>

                            <td><input type="checkbox" id="cb13" name="cid[]" value="67"
                                    onclick="Joomla.isChecked(this.checked);"></td>


                            <td align="center">
                                <a href="/vbizz-dashboard/customer/edit/67">Kamil Longo</a>
                            </td>
                            <td align="center" class="hidden-phone"></td>

                            <td align="center" class="hidden-phone"></td>

                            <td align="center" class="hidden-phone"><a href="mailto:longo@longo.cz">
                                    <div> longo@longo.cz</div>
                                </a></td>

                            <td align="center" class="hidden-phone"> </td>

                            <td align="center"><a href="/vbizz-dashboard/order?eid=67"></a></td>

                            <td align="center" class="send_email hidden-phone"><a class="btn" href="javascript:void(0);"
                                    onclick="customeremail(67);" custid="67">Send Email</a></td>

                        </tr>
                        <tr class="row0">

                            <td align="center" class="hidden-phone">15</td>

                            <td><input type="checkbox" id="cb14" name="cid[]" value="66"
                                    onclick="Joomla.isChecked(this.checked);"></td>


                            <td align="center">
                                <a href="/vbizz-dashboard/customer/edit/66">Jana Zrána</a>
                            </td>
                            <td align="center" class="hidden-phone"></td>

                            <td align="center" class="hidden-phone"></td>

                            <td align="center" class="hidden-phone"><a href="mailto:jana@jana.cz">
                                    <div> jana@jana.cz</div>
                                </a></td>

                            <td align="center" class="hidden-phone"> </td>

                            <td align="center"><a href="/vbizz-dashboard/order?eid=66"></a></td>

                            <td align="center" class="send_email hidden-phone"><a class="btn" href="javascript:void(0);"
                                    onclick="customeremail(66);" custid="66">Send Email</a></td>

                        </tr>
                        <tr class="row1">

                            <td align="center" class="hidden-phone">16</td>

                            <td><input type="checkbox" id="cb15" name="cid[]" value="65"
                                    onclick="Joomla.isChecked(this.checked);"></td>


                            <td align="center">
                                <a href="/vbizz-dashboard/customer/edit/65">H008-WEB</a>
                            </td>
                            <td align="center" class="hidden-phone"></td>

                            <td align="center" class="hidden-phone"></td>

                            <td align="center" class="hidden-phone"><a href="mailto:ovidiu.fraga@infotehnic.com">
                                    <div> ovidiu.fraga@infotehnic.com</div>
                                </a></td>

                            <td align="center" class="hidden-phone"> Arad Romania</td>

                            <td align="center"><a href="/vbizz-dashboard/order?eid=65"></a></td>

                            <td align="center" class="send_email hidden-phone"><a class="btn" href="javascript:void(0);"
                                    onclick="customeremail(65);" custid="65">Send Email</a></td>

                        </tr>
                        <tr class="row0">

                            <td align="center" class="hidden-phone">17</td>

                            <td><input type="checkbox" id="cb16" name="cid[]" value="64"
                                    onclick="Joomla.isChecked(this.checked);"></td>


                            <td align="center">
                                <a href="/vbizz-dashboard/customer/edit/64">Mr.Ahmed</a>
                            </td>
                            <td align="center" class="hidden-phone">Ahmedi Industries-PEPSI CO</td>

                            <td align="center" class="hidden-phone">35231548</td>

                            <td align="center" class="hidden-phone"><a href="mailto:test@test.com">
                                    <div> test@test.com</div>
                                </a></td>

                            <td align="center" class="hidden-phone"> Bahrain</td>

                            <td align="center"><a href="/vbizz-dashboard/order?eid=64">NOK 20.00</a></td>

                            <td align="center" class="send_email hidden-phone"><a class="btn" href="javascript:void(0);"
                                    onclick="customeremail(64);" custid="64">Send Email</a></td>

                        </tr>
                        <tr class="row1">

                            <td align="center" class="hidden-phone">18</td>

                            <td><input type="checkbox" id="cb17" name="cid[]" value="63"
                                    onclick="Joomla.isChecked(this.checked);"></td>


                            <td align="center">
                                <a href="/vbizz-dashboard/customer/edit/63">BAITH AL SHAY</a>
                            </td>
                            <td align="center" class="hidden-phone"></td>

                            <td align="center" class="hidden-phone"></td>

                            <td align="center" class="hidden-phone"><a href="mailto:admin@admin.com">
                                    <div> admin@admin.com</div>
                                </a></td>

                            <td align="center" class="hidden-phone"> </td>

                            <td align="center"><a href="/vbizz-dashboard/order?eid=63">NOK 112.00</a></td>

                            <td align="center" class="send_email hidden-phone"><a class="btn" href="javascript:void(0);"
                                    onclick="customeremail(63);" custid="63">Send Email</a></td>

                        </tr>
                        <tr class="row0">

                            <td align="center" class="hidden-phone">19</td>

                            <td><input type="checkbox" id="cb18" name="cid[]" value="62"
                                    onclick="Joomla.isChecked(this.checked);"></td>


                            <td align="center">
                                <a href="/vbizz-dashboard/customer/edit/62">Joe</a>
                            </td>
                            <td align="center" class="hidden-phone"></td>

                            <td align="center" class="hidden-phone"></td>

                            <td align="center" class="hidden-phone"><a href="mailto:joe@gmail.com">
                                    <div> joe@gmail.com</div>
                                </a></td>

                            <td align="center" class="hidden-phone"> </td>

                            <td align="center"><a href="/vbizz-dashboard/order?eid=62"></a></td>

                            <td align="center" class="send_email hidden-phone"><a class="btn" href="javascript:void(0);"
                                    onclick="customeremail(62);" custid="62">Send Email</a></td>

                        </tr>
                        <tr class="row1">

                            <td align="center" class="hidden-phone">20</td>

                            <td><input type="checkbox" id="cb19" name="cid[]" value="61"
                                    onclick="Joomla.isChecked(this.checked);"></td>


                            <td align="center">
                                <a href="/vbizz-dashboard/customer/edit/61">yass</a>
                            </td>
                            <td align="center" class="hidden-phone"></td>

                            <td align="center" class="hidden-phone"></td>

                            <td align="center" class="hidden-phone"><a href="mailto:yass@gmail.com">
                                    <div> yass@gmail.com</div>
                                </a></td>

                            <td align="center" class="hidden-phone"> </td>

                            <td align="center"><a href="/vbizz-dashboard/order?eid=61"></a></td>

                            <td align="center" class="send_email hidden-phone"><a class="btn" href="javascript:void(0);"
                                    onclick="customeremail(61);" custid="61">Send Email</a></td>

                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="9">
                                <div class="pagination pagination-toolbar clearfix" style="text-align: center;">

                                    <div class="limit pull-right">
                                        Display #<select id="limit" name="limit" class="inputbox input-mini" size="1"
                                            onchange="this.form.submit()" style="display: none;">
                                            <option value="5">5</option>
                                            <option value="10">10</option>
                                            <option value="15">15</option>
                                            <option value="20" selected="selected">20</option>
                                            <option value="25">25</option>
                                            <option value="30">30</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                            <option value="0">All</option>
                                        </select>
                                        <div class="chzn-container chzn-container-single chzn-container-single-nosearch"
                                            style="width: 59px;" title="" id="limit_chzn"><a
                                                class="chzn-single"><span>20</span>
                                                <div><b></b></div>
                                            </a>
                                            <div class="chzn-drop">
                                                <div class="chzn-search"><input type="text" autocomplete="off"
                                                        readonly=""></div>
                                                <ul class="chzn-results"></ul>
                                            </div>
                                        </div>
                                    </div>

                                    <ul class="pagination-list">
                                        <li class="disabled">
                                            <span><span class="fa fa-backward icon-first"></span></span>
                                        </li>
                                        <li class="disabled">
                                            <span><span class="fa fa-step-backward icon-previous"></span></span>
                                        </li>


                                        <li class="active">
                                            <span>1</span>
                                        </li>


                                        <li>
                                            <a class="" href="#"
                                                onclick="document.adminForm.limitstart.value=20; Joomla.submitform();return false;">
                                                2 </a>
                                        </li>
                                        <li>
                                            <a class="hasTooltip" title="Next" href="#"
                                                onclick="document.adminForm.limitstart.value=20; Joomla.submitform();return false;">
                                                <span class="fa fa-step-forward icon-next"></span> </a>
                                        </li>
                                        <li>
                                            <a class="hasTooltip" title="End" href="#"
                                                onclick="document.adminForm.limitstart.value=20; Joomla.submitform();return false;">
                                                <span class="fa fa-forward icon-last"></span> </a>
                                        </li>
                                    </ul>

                                    <input type="hidden" name="limitstart" value="0">

                                </div>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>



            <input type="hidden" name="option" value="com_vbizz">
            <input type="hidden" name="task" value="">
            <input type="hidden" name="boxchecked" value="0">
            <input type="hidden" name="view" value="customer">
            <input type="hidden" name="filter_order" value="userid">
            <input type="hidden" name="filter_order_Dir" value="desc">
        </form>
    </div>
</div>
@endsection

@section('script')

@endsection