@extends('layouts.app')
@section('content')
<header class="header">
	<div class="container-title">
		<h1 class="page-title">Employee</h1>
	</div>
</header>

<div class="content_part">
<form action="/vbizz-dashboard/employee" method="post" name="adminForm" id="adminForm">

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
                        <span onclick="if (document.adminForm.boxchecked.value==0){alert('Please first make a selection from the list');}else{ Joomla.submitbutton('edit')}" class="btn btn-small">
                        <span class="fa fa-edit"></span> Edit</span>
                    </div>
                                        
                    					
										<div class="btn-wrapper" id="toolbar-setting" style="float: right;">
						<a class="modal btn" id="modal1" title="Select" href="http://vbizz.joomlawings.com/index.php?option=com_vbizz&amp;view=config&amp;task=loadEmployeeSetting&amp;tmpl=component&amp;ot=1" rel="{handler: 'iframe', size: {x: 550, y: 400}}">
						<span class="fa fa-cog"></span>
						</a>
                    </div>
										
                </div>
            </div>
        </div>
    </div>
</div>

<div class="adminlist filter filter_emp">
<div class="filet_left">
<input type="text" name="search" id="search" placeholder="Search" value="" class="text_area">
<button class="btn hasTooltip" title="Search" onclick="this.form.submit();"><i class="fa fa-search"></i></button>
<button class="btn hasTooltip" title="Clear" onclick="document.getElementById('search').value='';this.form.submit();
document.getElementById('filter_dept').value='';this.form.submit();
document.getElementById('filter_desg').value='';this.form.submit();"><i class="fa fa-remove"></i></button>
</div>

<div class="filter_right">
<select id="filter_dept" name="filter_dept" class="inputbox" size="1" onchange="submitform( );" style="display: none;">
	<option value="" selected="selected">Select Department</option>
	<option value="5">Designing</option>
	<option value="6">Styrelse</option>
	<option value="7">Info</option>
	<option value="8">Reality</option>
	<option value="9">Pojištění</option>
	<option value="10">Менеджеры по продажам</option>
	<option value="11">Сборщики мебели</option>
	<option value="12">Диспетчер заказов</option>
	<option value="13">программисты</option>
</select><div class="chzn-container chzn-container-single chzn-container-single-nosearch" style="width: 195px;" title="" id="filter_dept_chzn"><a class="chzn-single"><span>Select Department</span><div><b></b></div></a><div class="chzn-drop"><div class="chzn-search"><input type="text" autocomplete="off" readonly=""></div><ul class="chzn-results"></ul></div></div>
<select id="filter_desg" name="filter_desg" class="inputbox" size="1" onchange="submitform( );" style="display: none;">
	<option value="" selected="selected">Select Designation</option>
	<option value="6">Sjednatel</option>
	<option value="7">Tipař</option>
	<option value="8">Старший продавец </option>
</select><div class="chzn-container chzn-container-single chzn-container-single-nosearch" style="width: 155px;" title="" id="filter_desg_chzn"><a class="chzn-single"><span>Select Designation</span><div><b></b></div></a><div class="chzn-drop"><div class="chzn-search"><input type="text" autocomplete="off" readonly=""></div><ul class="chzn-results"></ul></div></div>
</div>
</div>

<div id="editcell">
	<table class="adminlist table">
        <thead>
            <tr>
                <th width="10" class="hidden-phone">#</th>
                <th width="10"><input type="checkbox" name="toggle" value="" onclick="Joomla.checkAll(this);"></th>
                <th><a href="#" onclick="Joomla.tableOrdering('i.name','asc','');return false;" class="hasPopover" title="" data-content="Select to sort by this column" data-placement="top" data-original-title="Name">Name</a></th>
				<th class="hidden-phone"><a href="#" onclick="Joomla.tableOrdering('i.empid','asc','');return false;" class="hasPopover" title="" data-content="Select to sort by this column" data-placement="top" data-original-title="Employee Id">Employee Id</a></th>
				<th><a href="#" onclick="Joomla.tableOrdering('d.name','asc','');return false;" class="hasPopover" title="" data-content="Select to sort by this column" data-placement="top" data-original-title="Department">Department</a></th>
                <th class="hidden-phone"><a href="#" onclick="Joomla.tableOrdering('p.title','asc','');return false;" class="hasPopover" title="" data-content="Select to sort by this column" data-placement="top" data-original-title="Designation">Designation</a></th>
				<th class="hidden-phone"><a href="#" onclick="Joomla.tableOrdering('i.email','asc','');return false;" class="hasPopover" title="" data-content="Select to sort by this column" data-placement="top" data-original-title="Email">Email</a></th>
				<th class="hidden-phone"><a href="#" onclick="Joomla.tableOrdering('i.ctc','asc','');return false;" class="hasPopover" title="" data-content="Select to sort by this column" data-placement="top" data-original-title="CTC">CTC</a></th>
				<th class="hidden-phone"></th>
            </tr>
        </thead>
                    <tbody><tr class="row0">
            
                <td align="center" class="hidden-phone">1</td>
                
                <td><input type="checkbox" id="cb0" name="cid[]" value="75" onclick="Joomla.isChecked(this.checked);"></td>
                                
                <td align="center">
                                            <a href="/vbizz-dashboard/employee?task=edit&amp;cid[0]=75">firmanpd</a>
                                    </td>
				
				<td align="center" class="hidden-phone">1</td>
				
				<td align="center">Info</td>
                
                <td align="center" class="hidden-phone">Sjednatel</td>
                
                
                <td align="center" class="hidden-phone"><a href="mailto:fir@gmail.com"><div> fir@gmail.com</div></a></td>
                
                <td align="center" class="hidden-phone">$ 160,00</td>
				
				
                <td align="center" class="hidden-phone"><a href="javascript:void(0);" class="send_mail btn" empid="75">Send Email</a></td>

				
            </tr>
           
                
                        <tr class="row1">
            
                <td align="center" class="hidden-phone">2</td>
                
                <td><input type="checkbox" id="cb1" name="cid[]" value="60" onclick="Joomla.isChecked(this.checked);"></td>
                                
                <td align="center">
                                            <a href="/vbizz-dashboard/employee?task=edit&amp;cid[0]=60">test</a>
                                    </td>
				
				<td align="center" class="hidden-phone">435</td>
				
				<td align="center">Designing</td>
                
                <td align="center" class="hidden-phone">Tipař</td>
                
                
                <td align="center" class="hidden-phone"><a href="mailto:test@test.test"><div> test@test.test</div></a></td>
                
                <td align="center" class="hidden-phone">$ 111,00</td>
				
				
                <td align="center" class="hidden-phone"><a href="javascript:void(0);" class="send_mail btn" empid="60">Send Email</a></td>

				
            </tr>
           
                
                        <tr class="row0">
            
                <td align="center" class="hidden-phone">3</td>
                
                <td><input type="checkbox" id="cb2" name="cid[]" value="58" onclick="Joomla.isChecked(this.checked);"></td>
                                
                <td align="center">
                                            <a href="/vbizz-dashboard/employee?task=edit&amp;cid[0]=58">Test Employee</a>
                                    </td>
				
				<td align="center" class="hidden-phone">58585</td>
				
				<td align="center">Pojištění</td>
                
                <td align="center" class="hidden-phone">Sjednatel</td>
                
                
                <td align="center" class="hidden-phone"><a href="mailto:testemployee@vbizz.com"><div> testemployee@vbizz.com</div></a></td>
                
                <td align="center" class="hidden-phone">$ 2.500,00</td>
				
				
                <td align="center" class="hidden-phone"><a href="javascript:void(0);" class="send_mail btn" empid="58">Send Email</a></td>

				
            </tr>
           
                
                
        </tbody><tfoot>
            <tr>
              <td colspan="10">
<div class="pagination pagination-toolbar clearfix" style="text-align: center;">

			<div class="limit pull-right">
			Display #<select id="limit" name="limit" class="inputbox input-mini" size="1" onchange="this.form.submit()" style="display: none;">
	<option value="5">5</option>
	<option value="10">10</option>
	<option value="15">15</option>
	<option value="20" selected="selected">20</option>
	<option value="25">25</option>
	<option value="30">30</option>
	<option value="50">50</option>
	<option value="100">100</option>
	<option value="0">All</option>
</select><div class="chzn-container chzn-container-single chzn-container-single-nosearch" style="width: 59px;" title="" id="limit_chzn"><a class="chzn-single"><span>20</span><div><b></b></div></a><div class="chzn-drop"><div class="chzn-search"><input type="text" autocomplete="off" readonly=""></div><ul class="chzn-results"></ul></div></div>
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
<input type="hidden" name="view" value="employee">
<input type="hidden" name="filter_order" value="i.userid">
<input type="hidden" name="filter_order_Dir" value="desc">
</form>
</div>
@endsection

@section('script')

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
			var empid = jQuery('#dialog').data('empid');
			var htm = '<input type="hidden" name="empid" value="'+empid+'" />';
			jQuery('#mail-sent').append(htm);
		},
		close: function(event, ui) {
			jQuery('#mail-sent').find('input[name="empid"]').remove();
		}
	});
	
	
	jQuery(document).on('click','.send',function() {
		
		var empid = jQuery(this).parent().parent().parent().find('input[name="empid"]').val();
		var subject = jQuery(this).parent().parent().parent().find('input[name="subject"]').val();
		var email = jQuery(this).parent().parent().parent().find('textarea[name="email_content"]').val();
		
		var that=this;


		jQuery.ajax({
			type: "POST",
			dataType:"JSON",
			data: {'option':'com_vbizz', 'view':'employee', 'task':'sendCustomEmail', 'tmpl':'component','empid':empid, 'subject':subject, 'email':email},
			
			beforeSend: function() {
				jQuery(that).parent().find("span.loadingbox").show();
			},
			
			complete: function()      {
				jQuery(that).parent().find("span.loadingbox").hide();
			},

			success: function(data){
				if(data.result=="success"){
					jQuery(that).parent().parent().parent().find('input[name="subject"]').val('');
					jQuery(that).parent().parent().parent().find('textarea[name="email_content"]').val('');
					var htm = '<tr><td></td><td><span>Email Sent Successfully</span></td></tr>';
					jQuery(that).parent().parent().parent().append(htm);
					
					setTimeout(function() { jQuery( "#dialog" ).dialog( "close" );},3000);
				}
			}
		});
	});
	
});

jQuery(document).on('click','.send_mail',function() {
	var empid = jQuery(this).attr('empid');
	jQuery( "#dialog" ).data('empid',empid).dialog( "open" );
});
</script>

@endscript