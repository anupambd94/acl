@extends('layouts.app')

@section('content')
<div id="vbizz">


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
			var vendid = jQuery('#dialog').data('vendid');
			var htm = '<input type="hidden" name="vendid" value="'+vendid+'" />';
			jQuery('#mail-sent').append(htm);
		},
		close: function(event, ui) {
			jQuery('#mail-sent').find('input[name="vendid"]').remove();
		}
	});
	
	
	jQuery(document).on('click','.send',function() {
		
		var vendid = jQuery(this).parents('#dialog').find('input[name="vendid"]').val();
		var subject = jQuery(this).parents('#dialog').find('input[name="subject"]').val();
		var email = jQuery(this).parents('#dialog').find('textarea[name="email_content"]').val();
		
		var that=this;


		jQuery.ajax({
			type: "POST",
			dataType:"JSON",
			data: {'option':'com_vbizz', 'view':'vendor', 'task':'sendCustomEmail', 'tmpl':'component','vendid':vendid, 'subject':subject, 'email':email},
			
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
function vendormail(vid)
{
	jQuery( "#dialog" ).data('vendid',vid).dialog( "open" );
}

    </script>

    <header class="header">
        <div class="container-title">
            <h1 class="page-title">Vendors</h1>
        </div>
    </header>

    <div class="content_part">
        <form action="/vbizz-dashboard/vendor" method="post" name="adminForm" id="adminForm">

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

                                <div class="btn-wrapper" id="toolbar-delete">
                                    <span
                                        onclick="if (document.adminForm.boxchecked.value==0){alert('Please first make a selection from the list');}else{ Joomla.submitbutton('remove')}"
                                        class="btn btn-small">
                                        <span class="fa fa-remove"></span> Delete</span>
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

                            <td><input type="checkbox" id="cb0" name="cid[]" value="80"
                                    onclick="Joomla.isChecked(this.checked);"></td>

                            <td align="center">
                                <a href="/vbizz-dashboard/vendor/edit/80">Анатольевич</a>
                            </td>

                            <td align="center" class="hidden-phone"></td>

                            <td align="center" class="hidden-phone"></td>

                            <td align="center" class="hidden-phone"><a href="mailto:genalit7@gmail.com">
                                    <div> genalit7@gmail.com</div>
                                </a></td>

                            <td align="center" class="hidden-phone"> </td>

                            <td align="center"><a href="/vbizz-dashboard/purchase?vid=80">314.90</a></td>

                            <td align="center" class="send_email hidden-phone"><a class="btn" href="javascript:void(0);"
                                    onclick="vendormail(80);" vendid="80">Send Email</a></td>

                        </tr>


                        <tr class="row1">
                            <td align="center" class="hidden-phone">2</td>

                            <td><input type="checkbox" id="cb1" name="cid[]" value="76"
                                    onclick="Joomla.isChecked(this.checked);"></td>

                            <td align="center">
                                <a href="/vbizz-dashboard/vendor/edit/76">Test LandLord</a>
                            </td>

                            <td align="center" class="hidden-phone"></td>

                            <td align="center" class="hidden-phone"></td>

                            <td align="center" class="hidden-phone"><a href="mailto:userLL@yahoo.com">
                                    <div> userLL@yahoo.com</div>
                                </a></td>

                            <td align="center" class="hidden-phone"> </td>

                            <td align="center"><a href="/vbizz-dashboard/purchase?vid=76"></a></td>

                            <td align="center" class="send_email hidden-phone"><a class="btn" href="javascript:void(0);"
                                    onclick="vendormail(76);" vendid="76">Send Email</a></td>

                        </tr>


                        <tr class="row0">
                            <td align="center" class="hidden-phone">3</td>

                            <td><input type="checkbox" id="cb2" name="cid[]" value="69"
                                    onclick="Joomla.isChecked(this.checked);"></td>

                            <td align="center">
                                <a href="/vbizz-dashboard/vendor/edit/69">dfdf</a>
                            </td>

                            <td align="center" class="hidden-phone"></td>

                            <td align="center" class="hidden-phone"></td>

                            <td align="center" class="hidden-phone"><a href="mailto:test2@yahoo.fr">
                                    <div> test2@yahoo.fr</div>
                                </a></td>

                            <td align="center" class="hidden-phone"> Tunisia</td>

                            <td align="center"><a href="/vbizz-dashboard/purchase?vid=69">133352.00</a></td>

                            <td align="center" class="send_email hidden-phone"><a class="btn" href="javascript:void(0);"
                                    onclick="vendormail(69);" vendid="69">Send Email</a></td>

                        </tr>


                        <tr class="row1">
                            <td align="center" class="hidden-phone">4</td>

                            <td><input type="checkbox" id="cb3" name="cid[]" value="68"
                                    onclick="Joomla.isChecked(this.checked);"></td>

                            <td align="center">
                                <a href="/vbizz-dashboard/vendor/edit/68">Libor Stejskal</a>
                            </td>

                            <td align="center" class="hidden-phone"></td>

                            <td align="center" class="hidden-phone"></td>

                            <td align="center" class="hidden-phone"><a href="mailto:lib@ct.cz">
                                    <div> lib@ct.cz</div>
                                </a></td>

                            <td align="center" class="hidden-phone"> Czech Republic</td>

                            <td align="center"><a href="/vbizz-dashboard/purchase?vid=68">60.00</a></td>

                            <td align="center" class="send_email hidden-phone"><a class="btn" href="javascript:void(0);"
                                    onclick="vendormail(68);" vendid="68">Send Email</a></td>

                        </tr>


                        <tr class="row0">
                            <td align="center" class="hidden-phone">5</td>

                            <td><input type="checkbox" id="cb4" name="cid[]" value="56"
                                    onclick="Joomla.isChecked(this.checked);"></td>

                            <td align="center">
                                <a href="/vbizz-dashboard/vendor/edit/56">Test Vendor</a>
                            </td>

                            <td align="center" class="hidden-phone"></td>

                            <td align="center" class="hidden-phone"></td>

                            <td align="center" class="hidden-phone"><a href="mailto:notworking@yahoo.com">
                                    <div> notworking@yahoo.com</div>
                                </a></td>

                            <td align="center" class="hidden-phone"> </td>

                            <td align="center"><a href="/vbizz-dashboard/purchase?vid=56">800.00</a></td>

                            <td align="center" class="send_email hidden-phone"><a class="btn" href="javascript:void(0);"
                                    onclick="vendormail(56);" vendid="56">Send Email</a></td>

                        </tr>



                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="9">
                                <div class="pagination pagination-toolbar clearfix" style="text-align: center;">

                                    <div class="limit pull-right">
                                        Display #<select id="limit" name="limit" class="inputbox input-mini" size="1"
                                            onchange="this.form.submit()" style="">
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
                                        {{-- <div class="chzn-container chzn-container-single chzn-container-single-nosearch"
                                            style="width: 59px;" title="" id="limit_chzn"><a
                                                class="chzn-single"><span>20</span>
                                                <div><b></b></div>
                                            </a>
                                            <div class="chzn-drop">
                                                <div class="chzn-search"><input type="text" autocomplete="off"
                                                        readonly=""></div>
                                                <ul class="chzn-results"></ul>
                                            </div>
                                        </div> --}}
                                    </div>


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
            <input type="hidden" name="view" value="vendor">
            <input type="hidden" name="filter_order" value="i.userid">
            <input type="hidden" name="filter_order_Dir" value="desc">
        </form>
    </div>
</div>
@endsection

@section('script')

@endsection