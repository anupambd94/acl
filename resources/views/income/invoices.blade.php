@extends('layouts.app')

@section('content')
<div id="vbizz">

<script type="text/javascript">    

function sendEmail(incomeid)
   {
	jQuery.ajax(
	{
	url: "",
		type: "POST",
		dataType:"json",
		data: {"option":"com_vbizz", "view":"invoices", "task":"mailing", "tmpl":"component", "id":incomeid, "from":"invoicesection"},
		
		beforeSend: function() {
			jQuery('span.loadingbox'+incomeid).append('<span class="vbizz_mail_overlay" style="display:block;"><img alt="" src="http://vbizz.joomlawings.com/components/com_vbizz/assets/images/loading_second.gif" class="vbizz-loading"></span>'); 
		},
		
		complete: function()      {
			jQuery('span.vbizz_mail_overlay').remove();
		},
		
		success: function(data) 
		{
			if(data.result=="success"){
				jQuery('span.loadingbox'+incomeid).after('<div class="response_message ui-state-highlight">'+ data.msg +'</div>');
				setTimeout(function() {
				jQuery('div.response_message').remove( );
				}, 2000 );      
			
				
			}
		}
		
	});	
	
   }

</script> 
<header class="header">
	<div class="container-title">
		<h1 class="page-title">Invoices</h1>
	</div>
</header>
<div class="content_part">
<form action="/vbizz-dashboard/invoices" method="post" name="adminForm" id="adminForm">

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
									
										<div class="btn-wrapper" id="toolbar-delete">
					<span onclick="if (document.adminForm.boxchecked.value==0){alert('Please first make a selection from the list');}else{ Joomla.submitbutton('remove')}" class="btn btn-small">
					<span class="fa fa-remove"></span> Delete</span>
					</div>
										
										<div class="btn-wrapper span1" id="toolbar-setting" style="float: right;">
						<a class="modal btn faa-parent animated-hover faa-slow" id="modal1" title="Select" href="http://vbizz.joomlawings.com/index.php?option=com_vbizz&amp;view=config&amp;task=loadInvoice&amp;tmpl=component&amp;ot=1" rel="{handler: 'iframe', size: {x: 800, y: 500}}">
						<span class="fa fa-cog faa-spin faa-slow"></span>
						</a>
                    </div>
					                    <div class="span2">
					<strong class="hasTip" title=""><span style="color:#0404B4;">Total : NOK 20186347.2</span></strong>
					</div>
                </div>


				</div>
			
			
			
           
        </div>
    </div>
</div>

<div class="adminlist filter">
<div class="filet_left">
<input type="text" name="search" id="search" placeholder="Search" value="" class="text_area">
<button class="btn hasTooltip" title="" onclick="this.form.submit();" data-original-title="Search"><i class="fa fa-search"></i></button>
<button class="btn hasTooltip" title="" onclick="document.getElementById('search').value='';this.form.submit();
document.getElementById('filter_type').value='';document.getElementById('filter_begin').value='';document.getElementById('filter_end').value='';this.form.submit();" data-original-title="Clear"><i class="fa fa-remove"></i> <span class="clear_text">Clear</span></button>
</div>
<div class="filter_right">  
<select id="filter_type" name="filter_type" class="inputbox" size="1" onchange="submitform( );" style="">
	<option value="" selected="selected">Select Transaction</option>
	<option value="286">For Sale</option>
	<option value="347">Asset</option>
	<option value="346">Rent</option>
</select>
{{-- <div class="chzn-container chzn-container-single chzn-container-single-nosearch" style="width: 146px;" title="" id="filter_type_chzn"><a class="chzn-single"><span>Select Transaction</span><div><b></b></div></a><div class="chzn-drop"><div class="chzn-search"><input type="text" autocomplete="off" readonly=""></div><ul class="chzn-results"></ul></div></div> --}}
<div class="begin_date">
<div class="field-calendar">
		<div class="input-append">
				<input type="text" id="filter_begin" name="filter_begin" value="" data-alt-value="" autocomplete="off">
		<button type="button" class="btn btn-secondary" id="filter_begin_btn" data-inputfield="filter_begin" data-dayformat="%Y-%m-%d" data-button="filter_begin_btn" data-firstday="0" data-weekend="0,6" data-today-btn="1" data-week-numbers="1" data-show-time="0" data-show-others="1" data-time-24="24" data-only-months-nav="0" title="Open the calendar"><span class="icon-calendar" aria-hidden="true"></span></button>
			</div>
<div class="js-calendar" style="direction: ltr; position: absolute; box-shadow: rgba(0, 0, 0, 0.67) 0px 0px 70px 0px; min-width: 0px; padding: 0px; display: none; left: auto; top: auto; z-index: 1060; border-radius: 20px;"><div class="calendar-container"><table class="table" cellspacing="0" cellpadding="0" style="margin-bottom: 0px; visibility: visible;"><thead class="calendar-header"><tr class="calendar-head-row"><td colspan="1" class=" nav" style="text-align: center; font-size: 18px; line-height: 18px;"><a class="js-btn btn-prev-year" style="display:inline;padding:2px 6px;cursor:pointer;text-decoration:none;" unselectable="on">‹</a></td><td colspan="6" class="title"><div unselectable="on"><div style="text-align:center;font-size:18px"><span>2019</span></div></div></td><td colspan="1" class=" nav" style="text-align: center; font-size: 18px; line-height: 18px;"><a class="js-btn btn-next-year" style="display:inline;padding:2px 6px;cursor:pointer;text-decoration:none;" unselectable="on"> ›</a></td></tr><tr class="calendar-head-row"><td colspan="1" class=" nav" style="text-align: center; font-size: 2em; line-height: 1em;"><a class="js-btn btn-prev-month" style="display:inline;padding:2px 6px;cursor:pointer;text-decoration:none;" unselectable="on">‹</a></td><td colspan="6" class="title" style="text-align: center;"><div unselectable="on"><div style="text-align:center;font-size:1.2em"><span>December</span></div></div></td><td colspan="1" class=" nav" style="text-align: center; font-size: 2em; line-height: 1em;"><a class="js-btn btn-next-month" style="display:inline;padding:2px 6px;cursor:pointer;text-decoration:none;" unselectable="on"> ›</a></td></tr><tr class="daynames wk"><td class="day-name wn">wk</td><td class="day-name day-name-week">Sun</td><td class="day-name day-name-week">Mon</td><td class="day-name day-name-week">Tue</td><td class="day-name day-name-week">Wed</td><td class="day-name day-name-week">Thu</td><td class="day-name day-name-week">Fri</td><td class="day-name day-name-week">Sat</td></tr></thead><tbody><tr class="daysrow wk"><td class="day wn">48</td><td class="day weekend" style="text-align: center; cursor: pointer;">1</td><td class="day" style="text-align: center; cursor: pointer;">2</td><td class="day" style="text-align: center; cursor: pointer;">3</td><td class="day" style="text-align: center; cursor: pointer;">4</td><td class="day" style="text-align: center; cursor: pointer;">5</td><td class="day" style="text-align: center; cursor: pointer;">6</td><td class="day weekend" style="text-align: center; cursor: pointer;">7</td></tr><tr class="daysrow wk"><td class="day wn">49</td><td class="day selected today weekend" style="text-align: center; cursor: pointer;">8</td><td class="day" style="text-align: center; cursor: pointer;">9</td><td class="day" style="text-align: center; cursor: pointer;">10</td><td class="day" style="text-align: center; cursor: pointer;">11</td><td class="day" style="text-align: center; cursor: pointer;">12</td><td class="day" style="text-align: center; cursor: pointer;">13</td><td class="day weekend" style="text-align: center; cursor: pointer;">14</td></tr><tr class="daysrow wk"><td class="day wn">50</td><td class="day weekend" style="text-align: center; cursor: pointer;">15</td><td class="day" style="text-align: center; cursor: pointer;">16</td><td class="day" style="text-align: center; cursor: pointer;">17</td><td class="day" style="text-align: center; cursor: pointer;">18</td><td class="day" style="text-align: center; cursor: pointer;">19</td><td class="day" style="text-align: center; cursor: pointer;">20</td><td class="day weekend" style="text-align: center; cursor: pointer;">21</td></tr><tr class="daysrow wk"><td class="day wn">51</td><td class="day weekend" style="text-align: center; cursor: pointer;">22</td><td class="day" style="text-align: center; cursor: pointer;">23</td><td class="day" style="text-align: center; cursor: pointer;">24</td><td class="day" style="text-align: center; cursor: pointer;">25</td><td class="day" style="text-align: center; cursor: pointer;">26</td><td class="day" style="text-align: center; cursor: pointer;">27</td><td class="day weekend" style="text-align: center; cursor: pointer;">28</td></tr><tr class="daysrow wk"><td class="day wn">52</td><td class="day weekend" style="text-align: center; cursor: pointer;">29</td><td class="day" style="text-align: center; cursor: pointer;">30</td><td class="day" style="text-align: center; cursor: pointer;">31</td><td class="day disabled othermonth " style="text-align: center;">1</td><td class="day disabled othermonth " style="text-align: center;">2</td><td class="day disabled othermonth " style="text-align: center;">3</td><td class="day disabled othermonth  weekend" style="text-align: center;">4</td></tr><tr class="daysrow wk"><td class="day wn">1</td><td class="day disabled othermonth  weekend" style="text-align: center;">5</td><td class="day disabled othermonth " style="text-align: center;">6</td><td class="day disabled othermonth " style="text-align: center;">7</td><td class="day disabled othermonth " style="text-align: center;">8</td><td class="day disabled othermonth " style="text-align: center;">9</td><td class="day disabled othermonth " style="text-align: center;">10</td><td class="day disabled othermonth  weekend" style="text-align: center;">11</td></tr></tbody></table><div class="buttons-wrapper btn-group"><button type="button" data-action="clear" class="js-btn btn btn-clear">Clear</button><button type="button" data-action="today" class="js-btn btn btn-today">Today</button><button type="button" data-action="exit" class="js-btn btn btn-exit">Close</button></div></div></div></div>
</div>
<div class="end_date">
<div class="field-calendar">
		<div class="input-append">
				<input type="text" id="filter_end" name="filter_end" value="" data-alt-value="" autocomplete="off">
		<button type="button" class="btn btn-secondary" id="filter_end_btn" data-inputfield="filter_end" data-dayformat="%Y-%m-%d" data-button="filter_end_btn" data-firstday="0" data-weekend="0,6" data-today-btn="1" data-week-numbers="1" data-show-time="0" data-show-others="1" data-time-24="24" data-only-months-nav="0" title="Open the calendar"><span class="icon-calendar" aria-hidden="true"></span></button>
			</div>
<div class="js-calendar" style="direction: ltr; position: absolute; box-shadow: rgba(0, 0, 0, 0.67) 0px 0px 70px 0px; min-width: 0px; padding: 0px; display: none; left: auto; top: auto; z-index: 1060; border-radius: 20px;"><div class="calendar-container"><table class="table" cellspacing="0" cellpadding="0" style="margin-bottom: 0px; visibility: visible;"><thead class="calendar-header"><tr class="calendar-head-row"><td colspan="1" class=" nav" style="text-align: center; font-size: 18px; line-height: 18px;"><a class="js-btn btn-prev-year" style="display:inline;padding:2px 6px;cursor:pointer;text-decoration:none;" unselectable="on">‹</a></td><td colspan="6" class="title"><div unselectable="on"><div style="text-align:center;font-size:18px"><span>2019</span></div></div></td><td colspan="1" class=" nav" style="text-align: center; font-size: 18px; line-height: 18px;"><a class="js-btn btn-next-year" style="display:inline;padding:2px 6px;cursor:pointer;text-decoration:none;" unselectable="on"> ›</a></td></tr><tr class="calendar-head-row"><td colspan="1" class=" nav" style="text-align: center; font-size: 2em; line-height: 1em;"><a class="js-btn btn-prev-month" style="display:inline;padding:2px 6px;cursor:pointer;text-decoration:none;" unselectable="on">‹</a></td><td colspan="6" class="title" style="text-align: center;"><div unselectable="on"><div style="text-align:center;font-size:1.2em"><span>December</span></div></div></td><td colspan="1" class=" nav" style="text-align: center; font-size: 2em; line-height: 1em;"><a class="js-btn btn-next-month" style="display:inline;padding:2px 6px;cursor:pointer;text-decoration:none;" unselectable="on"> ›</a></td></tr><tr class="daynames wk"><td class="day-name wn">wk</td><td class="day-name day-name-week">Sun</td><td class="day-name day-name-week">Mon</td><td class="day-name day-name-week">Tue</td><td class="day-name day-name-week">Wed</td><td class="day-name day-name-week">Thu</td><td class="day-name day-name-week">Fri</td><td class="day-name day-name-week">Sat</td></tr></thead><tbody><tr class="daysrow wk"><td class="day wn">48</td><td class="day weekend" style="text-align: center; cursor: pointer;">1</td><td class="day" style="text-align: center; cursor: pointer;">2</td><td class="day" style="text-align: center; cursor: pointer;">3</td><td class="day" style="text-align: center; cursor: pointer;">4</td><td class="day" style="text-align: center; cursor: pointer;">5</td><td class="day" style="text-align: center; cursor: pointer;">6</td><td class="day weekend" style="text-align: center; cursor: pointer;">7</td></tr><tr class="daysrow wk"><td class="day wn">49</td><td class="day selected today weekend" style="text-align: center; cursor: pointer;">8</td><td class="day" style="text-align: center; cursor: pointer;">9</td><td class="day" style="text-align: center; cursor: pointer;">10</td><td class="day" style="text-align: center; cursor: pointer;">11</td><td class="day" style="text-align: center; cursor: pointer;">12</td><td class="day" style="text-align: center; cursor: pointer;">13</td><td class="day weekend" style="text-align: center; cursor: pointer;">14</td></tr><tr class="daysrow wk"><td class="day wn">50</td><td class="day weekend" style="text-align: center; cursor: pointer;">15</td><td class="day" style="text-align: center; cursor: pointer;">16</td><td class="day" style="text-align: center; cursor: pointer;">17</td><td class="day" style="text-align: center; cursor: pointer;">18</td><td class="day" style="text-align: center; cursor: pointer;">19</td><td class="day" style="text-align: center; cursor: pointer;">20</td><td class="day weekend" style="text-align: center; cursor: pointer;">21</td></tr><tr class="daysrow wk"><td class="day wn">51</td><td class="day weekend" style="text-align: center; cursor: pointer;">22</td><td class="day" style="text-align: center; cursor: pointer;">23</td><td class="day" style="text-align: center; cursor: pointer;">24</td><td class="day" style="text-align: center; cursor: pointer;">25</td><td class="day" style="text-align: center; cursor: pointer;">26</td><td class="day" style="text-align: center; cursor: pointer;">27</td><td class="day weekend" style="text-align: center; cursor: pointer;">28</td></tr><tr class="daysrow wk"><td class="day wn">52</td><td class="day weekend" style="text-align: center; cursor: pointer;">29</td><td class="day" style="text-align: center; cursor: pointer;">30</td><td class="day" style="text-align: center; cursor: pointer;">31</td><td class="day disabled othermonth " style="text-align: center;">1</td><td class="day disabled othermonth " style="text-align: center;">2</td><td class="day disabled othermonth " style="text-align: center;">3</td><td class="day disabled othermonth  weekend" style="text-align: center;">4</td></tr><tr class="daysrow wk"><td class="day wn">1</td><td class="day disabled othermonth  weekend" style="text-align: center;">5</td><td class="day disabled othermonth " style="text-align: center;">6</td><td class="day disabled othermonth " style="text-align: center;">7</td><td class="day disabled othermonth " style="text-align: center;">8</td><td class="day disabled othermonth " style="text-align: center;">9</td><td class="day disabled othermonth " style="text-align: center;">10</td><td class="day disabled othermonth  weekend" style="text-align: center;">11</td></tr></tbody></table><div class="buttons-wrapper btn-group"><button type="button" data-action="clear" class="js-btn btn btn-clear">Clear</button><button type="button" data-action="today" class="js-btn btn btn-today">Today</button><button type="button" data-action="exit" class="js-btn btn btn-exit">Close</button></div></div></div></div>
</div>
<div class="status">
<select id="actual_amount_status" name="actual_amount_status" class="inputbox" size="1" onchange="submitform( );" style="">
	<option value="" selected="selected">Amount Status</option>
	<option value="Paid">Paid</option>
	<option value="Unpaid">Unpaid</option>
</select>
{{-- <div class="chzn-container chzn-container-single chzn-container-single-nosearch" style="width: 124px;" title="" id="actual_amount_status_chzn"><a class="chzn-single"><span>Amount Status</span><div><b></b></div></a><div class="chzn-drop"><div class="chzn-search"><input type="text" autocomplete="off" readonly=""></div><ul class="chzn-results"></ul></div></div> --}}
</div>
</div>
</div>


<div id="editcell">
    <table class="adminlist table">
        <thead>
            <tr>
                <th width="10" class="hidden-phone">#</th>
				                <th width="10"><input type="checkbox" name="toggle" value="" onclick="Joomla.checkAll(this);"></th>
				                <th><a href="#" onclick="Joomla.tableOrdering('invoice_number','asc','');return false;" class="hasPopover" title="" data-content="Select to sort by this column" data-placement="top" data-original-title="Invoice Number">Invoice Number</a></th>
				                <th class="hidden-phone"><a href="#" onclick="Joomla.tableOrdering('customer','asc','');return false;" class="hasPopover" title="" data-content="Select to sort by this column" data-placement="top" data-original-title="Customer">Customer</a></th>
								<th class="hidden-phone"><a href="#" onclick="Joomla.tableOrdering('invoice_date','asc','');return false;" class="hasPopover" title="" data-content="Select to sort by this column" data-placement="top" data-original-title="Invoice Date">Invoice Date</a></th>
                <th class="hidden-phone"><a href="#" onclick="Joomla.tableOrdering('due_date','asc','');return false;" class="hasPopover" title="" data-content="Select to sort by this column" data-placement="top" data-original-title="Due Date">Due Date</a></th>
                <th><a href="#" onclick="Joomla.tableOrdering('amount','asc','');return false;" class="hasPopover" title="" data-content="Select to sort by this column" data-placement="top" data-original-title="Amount">Amount</a></th>
				<th class="hidden-phone"><a href="#" onclick="Joomla.tableOrdering('status','asc','');return false;" class="hasPopover" title="" data-content="Select to sort by this column" data-placement="top" data-original-title="Status">Status</a></th>
								<th class="hidden-phone"><a href="#" onclick="Joomla.tableOrdering('project','asc','');return false;" class="hasPopover" title="" data-content="Select to sort by this column" data-placement="top" data-original-title="Project">Project</a></th>
								<th class="p_status hidden-phone">Receipt</th>
            </tr>
        </thead>
            <tbody><tr class="row0">
            <td align="center" class="hidden-phone">1</td>
            
            <td><input type="checkbox" id="cb0" name="cid[]" value="92" onclick="Joomla.isChecked(this.checked);"></td>             
            <td>
							
									<a href="/vbizz-dashboard/invoices/edit/92">BILL-/2019/</a>
				 
				
						
            </td>
            
            <td class="hidden-phone">Jana Zrána</td>             <td class="hidden-phone">06.12.2019</td>
             <td class="hidden-phone">19.08.2019</td>
            
            <td>NOK 100</td>
			
			<td class="hidden-phone"><div class="in_status"><span class="btn btn-success"><i class="fa fa-check"></i> Paid</span></div></td>
						<td class="hidden-phone">Кухня на заказ улица бетакская 17б</td>
			            <td class="p_status hidden-phone">			<div class="v-pdf">
			<span class="download_receipt"><a href="http://vbizz.joomlawings.com/components/com_vbizz/pdf/invoice/Кухняназаказулицабетакская17б92invoice.pdf" class="pdf btn" target="_blank"><label class="hasTip" title=""><i class="fa fa-download"></i>
			</label></a>
			</span>
			<span class="print_receipt">
			 <a href="http://vbizz.joomlawings.com/index.php?option=com_vbizz&amp;view=invoices&amp;task=print_bill&amp;tmpl=component&amp;cid[]=92" class="pdf modal btn"><i class="fa fa-print"></i></a>
			 </span>
			   
			 <span class="envelop_receipt loadingbox92" style="position: relative;">
			  <a href="javascript:void(0);" onclick="sendEmail(92);" class="pdf btn"><i class="fa fa-envelope"></i></a></span></div></td>
        </tr>  
            <tr class="row1">
            <td align="center" class="hidden-phone">2</td>
            
            <td><input type="checkbox" id="cb1" name="cid[]" value="91" onclick="Joomla.isChecked(this.checked);"></td>             
            <td>
							
									<a href="/vbizz-dashboard/invoices/edit/91">BILL-/2019/</a>
				 
				
						
            </td>
            
            <td class="hidden-phone">Yusuf Akinci</td>             <td class="hidden-phone">28.11.2019</td>
             <td class="hidden-phone">20.11.2019</td>
            
            <td>NOK 150000</td>
			
			<td class="hidden-phone"><div class="in_status"><span class="btn btn-danger"><i class="fa fa-remove"></i> Unpaid</span></div></td>
						<td class="hidden-phone">Website Project</td>
			            <td class="p_status hidden-phone">			<div class="v-pdf">
			<span class="download_receipt"><a href="http://vbizz.joomlawings.com/components/com_vbizz/pdf/invoice/websiteproject91invoice.pdf" class="pdf btn" target="_blank"><label class="hasTip" title=""><i class="fa fa-download"></i>
			</label></a>
			</span>
			<span class="print_receipt">
			 <a href="http://vbizz.joomlawings.com/index.php?option=com_vbizz&amp;view=invoices&amp;task=print_bill&amp;tmpl=component&amp;cid[]=91" class="pdf modal btn"><i class="fa fa-print"></i></a>
			 </span>
			   
			 <span class="envelop_receipt loadingbox91" style="position: relative;">
			  <a href="javascript:void(0);" onclick="sendEmail(91);" class="pdf btn"><i class="fa fa-envelope"></i></a></span></div></td>
        </tr>  
            <tr class="row0">
            <td align="center" class="hidden-phone">3</td>
            
            <td><input type="checkbox" id="cb2" name="cid[]" value="90" onclick="Joomla.isChecked(this.checked);"></td>             
            <td>
							
									<a href="/vbizz-dashboard/invoices/edit/90">BILL-/2019/</a>
				 
				
						
            </td>
            
            <td class="hidden-phone">Md Anupam Hayat Shawon</td>             <td class="hidden-phone">08.11.2019</td>
             <td class="hidden-phone">08.11.2019</td>
            
            <td>NOK 100</td>
			
			<td class="hidden-phone"><div class="in_status"><span class="btn btn-success"><i class="fa fa-check"></i> Paid</span></div></td>
						<td class="hidden-phone">said</td>
			            <td class="p_status hidden-phone">			<div class="v-pdf">
			<span class="download_receipt"><a href="http://vbizz.joomlawings.com/components/com_vbizz/pdf/invoice/said90invoice.pdf" class="pdf btn" target="_blank"><label class="hasTip" title=""><i class="fa fa-download"></i>
			</label></a>
			</span>
			<span class="print_receipt">
			 <a href="http://vbizz.joomlawings.com/index.php?option=com_vbizz&amp;view=invoices&amp;task=print_bill&amp;tmpl=component&amp;cid[]=90" class="pdf modal btn"><i class="fa fa-print"></i></a>
			 </span>
			   
			 <span class="envelop_receipt loadingbox90" style="position: relative;">
			  <a href="javascript:void(0);" onclick="sendEmail(90);" class="pdf btn"><i class="fa fa-envelope"></i></a></span></div></td>
        </tr>  
            <tr class="row1">
            <td align="center" class="hidden-phone">4</td>
            
            <td><input type="checkbox" id="cb3" name="cid[]" value="89" onclick="Joomla.isChecked(this.checked);"></td>             
            <td>
							
									<a href="/vbizz-dashboard/invoices/edit/89">BILL-/2019/</a>
				 
				
						
            </td>
            
            <td class="hidden-phone">Cosmin Buzaianu</td>             <td class="hidden-phone">10.10.2019</td>
             <td class="hidden-phone">18.10.2019</td>
            
            <td>NOK 450</td>
			
			<td class="hidden-phone"><div class="in_status"><span class="btn btn-danger"><i class="fa fa-remove"></i> Unpaid</span></div></td>
						<td class="hidden-phone">cam</td>
			            <td class="p_status hidden-phone">			<div class="v-pdf">
			<span class="download_receipt"><a href="http://vbizz.joomlawings.com/components/com_vbizz/pdf/invoice/cam89invoice.pdf" class="pdf btn" target="_blank"><label class="hasTip" title=""><i class="fa fa-download"></i>
			</label></a>
			</span>
			<span class="print_receipt">
			 <a href="http://vbizz.joomlawings.com/index.php?option=com_vbizz&amp;view=invoices&amp;task=print_bill&amp;tmpl=component&amp;cid[]=89" class="pdf modal btn"><i class="fa fa-print"></i></a>
			 </span>
			   
			 <span class="envelop_receipt loadingbox89" style="position: relative;">
			  <a href="javascript:void(0);" onclick="sendEmail(89);" class="pdf btn"><i class="fa fa-envelope"></i></a></span></div></td>
        </tr>  
            <tr class="row0">
            <td align="center" class="hidden-phone">5</td>
            
            <td><input type="checkbox" id="cb4" name="cid[]" value="88" onclick="Joomla.isChecked(this.checked);"></td>             
            <td>
							
									<a href="/vbizz-dashboard/invoices/edit/88">BILL-/2019/</a>
				 
				
						
            </td>
            
            <td class="hidden-phone">Kamil Longo</td>             <td class="hidden-phone">29.09.2019</td>
             <td class="hidden-phone">15.09.2019</td>
            
            <td>NOK 59</td>
			
			<td class="hidden-phone"><div class="in_status"><span class="btn btn-success"><i class="fa fa-check"></i> Paid</span></div></td>
						<td class="hidden-phone">ref not working</td>
			            <td class="p_status hidden-phone">			<div class="v-pdf">
			<span class="download_receipt"><a href="http://vbizz.joomlawings.com/components/com_vbizz/pdf/invoice/refnotworking88invoice.pdf" class="pdf btn" target="_blank"><label class="hasTip" title=""><i class="fa fa-download"></i>
			</label></a>
			</span>
			<span class="print_receipt">
			 <a href="http://vbizz.joomlawings.com/index.php?option=com_vbizz&amp;view=invoices&amp;task=print_bill&amp;tmpl=component&amp;cid[]=88" class="pdf modal btn"><i class="fa fa-print"></i></a>
			 </span>
			   
			 <span class="envelop_receipt loadingbox88" style="position: relative;">
			  <a href="javascript:void(0);" onclick="sendEmail(88);" class="pdf btn"><i class="fa fa-envelope"></i></a></span></div></td>
        </tr>  
            <tr class="row1">
            <td align="center" class="hidden-phone">6</td>
            
            <td><input type="checkbox" id="cb5" name="cid[]" value="87" onclick="Joomla.isChecked(this.checked);"></td>             
            <td>
							
									<a href="/vbizz-dashboard/invoices/edit/87">BILL-/2019/</a>
				 
				
						
            </td>
            
            <td class="hidden-phone">Mr.Ahmed</td>             <td class="hidden-phone">26.09.2019</td>
             <td class="hidden-phone">26.09.2019</td>
            
            <td>NOK 2000</td>
			
			<td class="hidden-phone"><div class="in_status"><span class="btn btn-danger"><i class="fa fa-remove"></i> Unpaid</span></div></td>
						<td class="hidden-phone">Inv</td>
			            <td class="p_status hidden-phone">			<div class="v-pdf">
			<span class="download_receipt"><a href="http://vbizz.joomlawings.com/components/com_vbizz/pdf/invoice/inv87invoice.pdf" class="pdf btn" target="_blank"><label class="hasTip" title=""><i class="fa fa-download"></i>
			</label></a>
			</span>
			<span class="print_receipt">
			 <a href="http://vbizz.joomlawings.com/index.php?option=com_vbizz&amp;view=invoices&amp;task=print_bill&amp;tmpl=component&amp;cid[]=87" class="pdf modal btn"><i class="fa fa-print"></i></a>
			 </span>
			   
			 <span class="envelop_receipt loadingbox87" style="position: relative;">
			  <a href="javascript:void(0);" onclick="sendEmail(87);" class="pdf btn"><i class="fa fa-envelope"></i></a></span></div></td>
        </tr>  
            <tr class="row0">
            <td align="center" class="hidden-phone">7</td>
            
            <td><input type="checkbox" id="cb6" name="cid[]" value="86" onclick="Joomla.isChecked(this.checked);"></td>             
            <td>
							
									<a href="/vbizz-dashboard/invoices/edit/86">BILL-/2019/</a>
				 
				
						
            </td>
            
            <td class="hidden-phone">Cosmin Buzaianu</td>             <td class="hidden-phone">25.09.2019</td>
             <td class="hidden-phone">25.09.2019</td>
            
            <td>NOK 13332</td>
			
			<td class="hidden-phone"><div class="in_status"><span class="btn btn-danger"><i class="fa fa-remove"></i> Unpaid</span></div></td>
						<td class="hidden-phone">electric</td>
			            <td class="p_status hidden-phone">			<div class="v-pdf">
			<span class="download_receipt"><a href="http://vbizz.joomlawings.com/components/com_vbizz/pdf/invoice/electric86invoice.pdf" class="pdf btn" target="_blank"><label class="hasTip" title=""><i class="fa fa-download"></i>
			</label></a>
			</span>
			<span class="print_receipt">
			 <a href="http://vbizz.joomlawings.com/index.php?option=com_vbizz&amp;view=invoices&amp;task=print_bill&amp;tmpl=component&amp;cid[]=86" class="pdf modal btn"><i class="fa fa-print"></i></a>
			 </span>
			   
			 <span class="envelop_receipt loadingbox86" style="position: relative;">
			  <a href="javascript:void(0);" onclick="sendEmail(86);" class="pdf btn"><i class="fa fa-envelope"></i></a></span></div></td>
        </tr>  
            <tr class="row1">
            <td align="center" class="hidden-phone">8</td>
            
            <td><input type="checkbox" id="cb7" name="cid[]" value="85" onclick="Joomla.isChecked(this.checked);"></td>             
            <td>
							
									<a href="/vbizz-dashboard/invoices/edit/85">BILL-/2019/</a>
				 
				
						
            </td>
            
            <td class="hidden-phone">aref ansari</td>             <td class="hidden-phone">25.09.2019</td>
             <td class="hidden-phone">25.09.2019</td>
            
            <td>NOK 814.2</td>
			
			<td class="hidden-phone"><div class="in_status"><span class="btn btn-success"><i class="fa fa-check"></i> Paid</span></div></td>
						<td class="hidden-phone">fdsf</td>
			            <td class="p_status hidden-phone">			<div class="v-pdf">
			<span class="download_receipt"><a href="http://vbizz.joomlawings.com/components/com_vbizz/pdf/invoice/fdsf85invoice.pdf" class="pdf btn" target="_blank"><label class="hasTip" title=""><i class="fa fa-download"></i>
			</label></a>
			</span>
			<span class="print_receipt">
			 <a href="http://vbizz.joomlawings.com/index.php?option=com_vbizz&amp;view=invoices&amp;task=print_bill&amp;tmpl=component&amp;cid[]=85" class="pdf modal btn"><i class="fa fa-print"></i></a>
			 </span>
			   
			 <span class="envelop_receipt loadingbox85" style="position: relative;">
			  <a href="javascript:void(0);" onclick="sendEmail(85);" class="pdf btn"><i class="fa fa-envelope"></i></a></span></div></td>
        </tr>  
            <tr class="row0">
            <td align="center" class="hidden-phone">9</td>
            
            <td><input type="checkbox" id="cb8" name="cid[]" value="83" onclick="Joomla.isChecked(this.checked);"></td>             
            <td>
							
									<a href="/vbizz-dashboard/invoices/edit/83?projectid=47">BILL-/2019/</a>
				 
				
						
            </td>
            
            <td class="hidden-phone">aref ansari</td>             <td class="hidden-phone">25.09.2019</td>
             <td class="hidden-phone">26.09.2019</td>
            
            <td>NOK 13080</td>
			
			<td class="hidden-phone"><div class="in_status"><span class="btn btn-danger"><i class="fa fa-remove"></i> Unpaid</span></div></td>
						<td class="hidden-phone">electric</td>
			            <td class="p_status hidden-phone">			<div class="v-pdf">
			<span class="download_receipt"><a href="http://vbizz.joomlawings.com/components/com_vbizz/pdf/invoice/electric83invoice.pdf" class="pdf btn" target="_blank"><label class="hasTip" title=""><i class="fa fa-download"></i>
			</label></a>
			</span>
			<span class="print_receipt">
			 <a href="http://vbizz.joomlawings.com/index.php?option=com_vbizz&amp;view=invoices&amp;task=print_bill&amp;tmpl=component&amp;cid[]=83" class="pdf modal btn"><i class="fa fa-print"></i></a>
			 </span>
			   
			 <span class="envelop_receipt loadingbox83" style="position: relative;">
			  <a href="javascript:void(0);" onclick="sendEmail(83);" class="pdf btn"><i class="fa fa-envelope"></i></a></span></div></td>
        </tr>  
            <tr class="row1">
            <td align="center" class="hidden-phone">10</td>
            
            <td><input type="checkbox" id="cb9" name="cid[]" value="82" onclick="Joomla.isChecked(this.checked);"></td>             
            <td>
							
									<a href="/vbizz-dashboard/invoices/edit/82">INV2032</a>
				 
				
						
            </td>
            
            <td class="hidden-phone">aref ansari</td>             <td class="hidden-phone">29.08.2019</td>
             <td class="hidden-phone">16.08.2019</td>
            
            <td>NOK 4000</td>
			
			<td class="hidden-phone"><div class="in_status"><span class="btn btn-success"><i class="fa fa-check"></i> Paid</span></div></td>
						<td class="hidden-phone">err</td>
			            <td class="p_status hidden-phone">			<div class="v-pdf">
			<span class="download_receipt"><a href="http://vbizz.joomlawings.com/components/com_vbizz/pdf/invoice/err82invoice.pdf" class="pdf btn" target="_blank"><label class="hasTip" title=""><i class="fa fa-download"></i>
			</label></a>
			</span>
			<span class="print_receipt">
			 <a href="http://vbizz.joomlawings.com/index.php?option=com_vbizz&amp;view=invoices&amp;task=print_bill&amp;tmpl=component&amp;cid[]=82" class="pdf modal btn"><i class="fa fa-print"></i></a>
			 </span>
			   
			 <span class="envelop_receipt loadingbox82" style="position: relative;">
			  <a href="javascript:void(0);" onclick="sendEmail(82);" class="pdf btn"><i class="fa fa-envelope"></i></a></span></div></td>
        </tr>  
            <tr class="row0">
            <td align="center" class="hidden-phone">11</td>
            
            <td><input type="checkbox" id="cb10" name="cid[]" value="81" onclick="Joomla.isChecked(this.checked);"></td>             
            <td>
							
									<a href="/vbizz-dashboard/invoices/edit/81">INV2031</a>
				 
				
						
            </td>
            
            <td class="hidden-phone">Company One</td>             <td class="hidden-phone">26.08.2019</td>
             <td class="hidden-phone">16.08.2019</td>
            
            <td>NOK 150</td>
			
			<td class="hidden-phone"><div class="in_status"><span class="btn btn-danger"><i class="fa fa-remove"></i> Unpaid</span></div></td>
						<td class="hidden-phone">Ghee</td>
			            <td class="p_status hidden-phone">			<div class="v-pdf">
			<span class="download_receipt"><a href="http://vbizz.joomlawings.com/components/com_vbizz/pdf/invoice/ghee81invoice.pdf" class="pdf btn" target="_blank"><label class="hasTip" title=""><i class="fa fa-download"></i>
			</label></a>
			</span>
			<span class="print_receipt">
			 <a href="http://vbizz.joomlawings.com/index.php?option=com_vbizz&amp;view=invoices&amp;task=print_bill&amp;tmpl=component&amp;cid[]=81" class="pdf modal btn"><i class="fa fa-print"></i></a>
			 </span>
			   
			 <span class="envelop_receipt loadingbox81" style="position: relative;">
			  <a href="javascript:void(0);" onclick="sendEmail(81);" class="pdf btn"><i class="fa fa-envelope"></i></a></span></div></td>
        </tr>  
            <tr class="row1">
            <td align="center" class="hidden-phone">12</td>
            
            <td><input type="checkbox" id="cb11" name="cid[]" value="80" onclick="Joomla.isChecked(this.checked);"></td>             
            <td>
							
									<a href="/vbizz-dashboard/invoices/edit/80">INV2030</a>
				 
				
						
            </td>
            
            <td class="hidden-phone">Марлен</td>             <td class="hidden-phone">18.08.2019</td>
             <td class="hidden-phone">18.08.2019</td>
            
            <td>NOK 700</td>
			
			<td class="hidden-phone"><div class="in_status"><span class="btn btn-danger"><i class="fa fa-remove"></i> Unpaid</span></div></td>
						<td class="hidden-phone">Кухня на заказ улица бетакская 17б</td>
			            <td class="p_status hidden-phone">			<div class="v-pdf">
			<span class="download_receipt"><a href="http://vbizz.joomlawings.com/components/com_vbizz/pdf/invoice/Кухняназаказулицабетакская17б80invoice.pdf" class="pdf btn" target="_blank"><label class="hasTip" title=""><i class="fa fa-download"></i>
			</label></a>
			</span>
			<span class="print_receipt">
			 <a href="http://vbizz.joomlawings.com/index.php?option=com_vbizz&amp;view=invoices&amp;task=print_bill&amp;tmpl=component&amp;cid[]=80" class="pdf modal btn"><i class="fa fa-print"></i></a>
			 </span>
			   
			 <span class="envelop_receipt loadingbox80" style="position: relative;">
			  <a href="javascript:void(0);" onclick="sendEmail(80);" class="pdf btn"><i class="fa fa-envelope"></i></a></span></div></td>
        </tr>  
            <tr class="row0">
            <td align="center" class="hidden-phone">13</td>
            
            <td><input type="checkbox" id="cb12" name="cid[]" value="79" onclick="Joomla.isChecked(this.checked);"></td>             
            <td>
							
									<a href="/vbizz-dashboard/invoices/edit/79">INV2029</a>
				 
				
						
            </td>
            
            <td class="hidden-phone">Test Client</td>             <td class="hidden-phone">28.07.2019</td>
             <td class="hidden-phone"></td>
            
            <td>NOK 120</td>
			
			<td class="hidden-phone"><div class="in_status"><span class="btn btn-danger"><i class="fa fa-remove"></i> Unpaid</span></div></td>
						<td class="hidden-phone">prova</td>
			            <td class="p_status hidden-phone">			<div class="v-pdf">
			<span class="download_receipt"><a href="http://vbizz.joomlawings.com/components/com_vbizz/pdf/invoice/prova79invoice.pdf" class="pdf btn" target="_blank"><label class="hasTip" title=""><i class="fa fa-download"></i>
			</label></a>
			</span>
			<span class="print_receipt">
			 <a href="http://vbizz.joomlawings.com/index.php?option=com_vbizz&amp;view=invoices&amp;task=print_bill&amp;tmpl=component&amp;cid[]=79" class="pdf modal btn"><i class="fa fa-print"></i></a>
			 </span>
			   
			 <span class="envelop_receipt loadingbox79" style="position: relative;">
			  <a href="javascript:void(0);" onclick="sendEmail(79);" class="pdf btn"><i class="fa fa-envelope"></i></a></span></div></td>
        </tr>  
            <tr class="row1">
            <td align="center" class="hidden-phone">14</td>
            
            <td><input type="checkbox" id="cb13" name="cid[]" value="78" onclick="Joomla.isChecked(this.checked);"></td>             
            <td>
							
									<a href="/vbizz-dashboard/invoices/edit/78">INV2028</a>
				 
				
						
            </td>
            
            <td class="hidden-phone">Mytest</td>             <td class="hidden-phone">28.07.2019</td>
             <td class="hidden-phone">01.04.2019</td>
            
            <td>NOK 50</td>
			
			<td class="hidden-phone"><div class="in_status"><span class="btn btn-success"><i class="fa fa-check"></i> Paid</span></div></td>
						<td class="hidden-phone">gggggg</td>
			            <td class="p_status hidden-phone">			<div class="v-pdf">
			<span class="download_receipt"><a href="http://vbizz.joomlawings.com/components/com_vbizz/pdf/invoice/gggggg78invoice.pdf" class="pdf btn" target="_blank"><label class="hasTip" title=""><i class="fa fa-download"></i>
			</label></a>
			</span>
			<span class="print_receipt">
			 <a href="http://vbizz.joomlawings.com/index.php?option=com_vbizz&amp;view=invoices&amp;task=print_bill&amp;tmpl=component&amp;cid[]=78" class="pdf modal btn"><i class="fa fa-print"></i></a>
			 </span>
			   
			 <span class="envelop_receipt loadingbox78" style="position: relative;">
			  <a href="javascript:void(0);" onclick="sendEmail(78);" class="pdf btn"><i class="fa fa-envelope"></i></a></span></div></td>
        </tr>  
            <tr class="row0">
            <td align="center" class="hidden-phone">15</td>
            
            <td><input type="checkbox" id="cb14" name="cid[]" value="77" onclick="Joomla.isChecked(this.checked);"></td>             
            <td>
							
									<a href="/vbizz-dashboard/invoices/edit/77">INV2027</a>
				 
				
						
            </td>
            
            <td class="hidden-phone">Joe</td>             <td class="hidden-phone">25.07.2019</td>
             <td class="hidden-phone"></td>
            
            <td>NOK 20000000</td>
			
			<td class="hidden-phone"><div class="in_status"><span class="btn btn-danger"><i class="fa fa-remove"></i> Unpaid</span></div></td>
						<td class="hidden-phone">Alex</td>
			            <td class="p_status hidden-phone">			<div class="v-pdf">
			<span class="download_receipt"><a href="http://vbizz.joomlawings.com/components/com_vbizz/pdf/invoice/alex77invoice.pdf" class="pdf btn" target="_blank"><label class="hasTip" title=""><i class="fa fa-download"></i>
			</label></a>
			</span>
			<span class="print_receipt">
			 <a href="http://vbizz.joomlawings.com/index.php?option=com_vbizz&amp;view=invoices&amp;task=print_bill&amp;tmpl=component&amp;cid[]=77" class="pdf modal btn"><i class="fa fa-print"></i></a>
			 </span>
			   
			 <span class="envelop_receipt loadingbox77" style="position: relative;">
			  <a href="javascript:void(0);" onclick="sendEmail(77);" class="pdf btn"><i class="fa fa-envelope"></i></a></span></div></td>
        </tr>  
            <tr class="row1">
            <td align="center" class="hidden-phone">16</td>
            
            <td><input type="checkbox" id="cb15" name="cid[]" value="76" onclick="Joomla.isChecked(this.checked);"></td>             
            <td>
							
									<a href="/vbizz-dashboard/invoices/edit/76">INV2026</a>
				 
				
						
            </td>
            
            <td class="hidden-phone">Kamil Longo</td>             <td class="hidden-phone">25.07.2019</td>
             <td class="hidden-phone"></td>
            
            <td>NOK 59</td>
			
			<td class="hidden-phone"><div class="in_status"><span class="btn btn-danger"><i class="fa fa-remove"></i> Unpaid</span></div></td>
						<td class="hidden-phone">ref not working</td>
			            <td class="p_status hidden-phone">			<div class="v-pdf">
			<span class="download_receipt"><a href="http://vbizz.joomlawings.com/components/com_vbizz/pdf/invoice/refnotworking76invoice.pdf" class="pdf btn" target="_blank"><label class="hasTip" title=""><i class="fa fa-download"></i>
			</label></a>
			</span>
			<span class="print_receipt">
			 <a href="http://vbizz.joomlawings.com/index.php?option=com_vbizz&amp;view=invoices&amp;task=print_bill&amp;tmpl=component&amp;cid[]=76" class="pdf modal btn"><i class="fa fa-print"></i></a>
			 </span>
			   
			 <span class="envelop_receipt loadingbox76" style="position: relative;">
			  <a href="javascript:void(0);" onclick="sendEmail(76);" class="pdf btn"><i class="fa fa-envelope"></i></a></span></div></td>
        </tr>  
            <tr class="row0">
            <td align="center" class="hidden-phone">17</td>
            
            <td><input type="checkbox" id="cb16" name="cid[]" value="75" onclick="Joomla.isChecked(this.checked);"></td>             
            <td>
							
									<a href="/vbizz-dashboard/invoices/edit/75?projectid=16">INV2025</a>
				 
				
						
            </td>
            
            <td class="hidden-phone">Tahir Irshad</td>             <td class="hidden-phone">20.07.2019</td>
             <td class="hidden-phone">31.07.2019</td>
            
            <td>NOK 0</td>
			
			<td class="hidden-phone"><div class="in_status"><span class="btn btn-danger"><i class="fa fa-remove"></i> Unpaid</span></div></td>
						<td class="hidden-phone">test 2 projekt</td>
			            <td class="p_status hidden-phone">			<div class="v-pdf">
			<span class="download_receipt"><a href="http://vbizz.joomlawings.com/components/com_vbizz/pdf/invoice/test2projekt75invoice.pdf" class="pdf btn" target="_blank"><label class="hasTip" title=""><i class="fa fa-download"></i>
			</label></a>
			</span>
			<span class="print_receipt">
			 <a href="http://vbizz.joomlawings.com/index.php?option=com_vbizz&amp;view=invoices&amp;task=print_bill&amp;tmpl=component&amp;cid[]=75" class="pdf modal btn"><i class="fa fa-print"></i></a>
			 </span>
			   
			 <span class="envelop_receipt loadingbox75" style="position: relative;">
			  <a href="javascript:void(0);" onclick="sendEmail(75);" class="pdf btn"><i class="fa fa-envelope"></i></a></span></div></td>
        </tr>  
            <tr class="row1">
            <td align="center" class="hidden-phone">18</td>
            
            <td><input type="checkbox" id="cb17" name="cid[]" value="74" onclick="Joomla.isChecked(this.checked);"></td>             
            <td>
							
									<a href="/vbizz-dashboard/invoices/edit/74">INV2024</a>
				 
				
						
            </td>
            
            <td class="hidden-phone">Tahir Irshad</td>             <td class="hidden-phone">18.07.2019</td>
             <td class="hidden-phone">26.07.2019</td>
            
            <td>NOK 110</td>
			
			<td class="hidden-phone"><div class="in_status"><span class="btn btn-danger"><i class="fa fa-remove"></i> Unpaid</span></div></td>
						<td class="hidden-phone">qwwew</td>
			            <td class="p_status hidden-phone">			<div class="v-pdf">
			<span class="download_receipt"><a href="http://vbizz.joomlawings.com/components/com_vbizz/pdf/invoice/qwwew74invoice.pdf" class="pdf btn" target="_blank"><label class="hasTip" title=""><i class="fa fa-download"></i>
			</label></a>
			</span>
			<span class="print_receipt">
			 <a href="http://vbizz.joomlawings.com/index.php?option=com_vbizz&amp;view=invoices&amp;task=print_bill&amp;tmpl=component&amp;cid[]=74" class="pdf modal btn"><i class="fa fa-print"></i></a>
			 </span>
			   
			 <span class="envelop_receipt loadingbox74" style="position: relative;">
			  <a href="javascript:void(0);" onclick="sendEmail(74);" class="pdf btn"><i class="fa fa-envelope"></i></a></span></div></td>
        </tr>  
            <tr class="row0">
            <td align="center" class="hidden-phone">19</td>
            
            <td><input type="checkbox" id="cb18" name="cid[]" value="72" onclick="Joomla.isChecked(this.checked);"></td>             
            <td>
							
									<a href="/vbizz-dashboard/invoices/edit/72">INV2023</a>
				 
				
						
            </td>
            
            <td class="hidden-phone">milad</td>             <td class="hidden-phone">17.07.2019</td>
             <td class="hidden-phone">17.07.2019</td>
            
            <td>NOK 981</td>
			
			<td class="hidden-phone"><div class="in_status"><span class="btn btn-success"><i class="fa fa-check"></i> Paid</span></div></td>
						<td class="hidden-phone">invlabel</td>
			            <td class="p_status hidden-phone">			<div class="v-pdf">
			<span class="download_receipt"><a href="http://vbizz.joomlawings.com/components/com_vbizz/pdf/invoice/invlabel72invoice.pdf" class="pdf btn" target="_blank"><label class="hasTip" title=""><i class="fa fa-download"></i>
			</label></a>
			</span>
			<span class="print_receipt">
			 <a href="http://vbizz.joomlawings.com/index.php?option=com_vbizz&amp;view=invoices&amp;task=print_bill&amp;tmpl=component&amp;cid[]=72" class="pdf modal btn"><i class="fa fa-print"></i></a>
			 </span>
			   
			 <span class="envelop_receipt loadingbox72" style="position: relative;">
			  <a href="javascript:void(0);" onclick="sendEmail(72);" class="pdf btn"><i class="fa fa-envelope"></i></a></span></div></td>
        </tr>  
            <tr class="row1">
            <td align="center" class="hidden-phone">20</td>
            
            <td><input type="checkbox" id="cb19" name="cid[]" value="71" onclick="Joomla.isChecked(this.checked);"></td>             
            <td>
							
									<a href="/vbizz-dashboard/invoices/edit/71">INV2022</a>
				 
				
						
            </td>
            
            <td class="hidden-phone">milad</td>             <td class="hidden-phone">17.07.2019</td>
             <td class="hidden-phone">07.05.2019</td>
            
            <td>NOK 20</td>
			
			<td class="hidden-phone"><div class="in_status"><span class="btn btn-success"><i class="fa fa-check"></i> Paid</span></div></td>
						<td class="hidden-phone">cocacola drink</td>
			            <td class="p_status hidden-phone">			<div class="v-pdf">
			<span class="download_receipt"><a href="http://vbizz.joomlawings.com/components/com_vbizz/pdf/invoice/cocacoladrink71invoice.pdf" class="pdf btn" target="_blank"><label class="hasTip" title=""><i class="fa fa-download"></i>
			</label></a>
			</span>
			<span class="print_receipt">
			 <a href="http://vbizz.joomlawings.com/index.php?option=com_vbizz&amp;view=invoices&amp;task=print_bill&amp;tmpl=component&amp;cid[]=71" class="pdf modal btn"><i class="fa fa-print"></i></a>
			 </span>
			   
			 <span class="envelop_receipt loadingbox71" style="position: relative;">
			  <a href="javascript:void(0);" onclick="sendEmail(71);" class="pdf btn"><i class="fa fa-envelope"></i></a></span></div></td>
        </tr>  
    	<tr>
  		<td class="hidden-phone">&nbsp;</td><td class="hidden-phone">&nbsp;</td><td>&nbsp;</td><td class="hidden-phone">&nbsp;</td><td class="hidden-phone">&nbsp;</td><td class="hidden-phone">&nbsp;</td>
        
        <td>
			        	<strong class="hasTip" title=""><span style="color:#0404B4;">Total : NOK 20186347.2</span></strong>
			   		</td>
		<td class="hidden-phone">&nbsp;</td>
        <td colspan="0">&nbsp;</td>
		<!--<td colspan="0">&nbsp;</td>-->
		
	</tr>
	
        </tbody><tfoot>
            <tr>
                <td colspan="10">
<div class="pagination pagination-toolbar clearfix" style="text-align: center;">

			<div class="limit pull-right">
			Display #<select id="limit" name="limit" class="inputbox input-mini" size="1" onchange="this.form.submit()" style="">
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
{{-- <div class="chzn-container chzn-container-single chzn-container-single-nosearch" style="width: 59px;" title="" id="limit_chzn"><a class="chzn-single"><span>20</span><div><b></b></div></a><div class="chzn-drop"><div class="chzn-search"><input type="text" autocomplete="off" readonly=""></div><ul class="chzn-results"></ul></div></div> --}}
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
		<a class="" href="#" onclick="document.adminForm.limitstart.value=20; Joomla.submitform();return false;">
			2		</a>
	</li>
							<li>
		<a class="hasTooltip" title="" href="#" onclick="document.adminForm.limitstart.value=20; Joomla.submitform();return false;" data-original-title="Next">
			<span class="fa fa-step-forward icon-next"></span>		</a>
	</li>
	<li>
		<a class="hasTooltip" title="" href="#" onclick="document.adminForm.limitstart.value=20; Joomla.submitform();return false;" data-original-title="End">
			<span class="fa fa-forward icon-last"></span>		</a>
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
<input type="hidden" name="view" value="invoices">
<input type="hidden" name="filter_order" value="id">
<input type="hidden" name="filter_order_Dir" value="desc">
</form>
</div>

              </div>
@endsection

@section('script')

@endsection