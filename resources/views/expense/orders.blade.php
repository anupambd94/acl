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
		data: {"option":"com_vbizz", "view":"expense", "task":"mailings", "tmpl":"component", "id":incomeid, "from":"expensesection"},
		
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
            <h1 class="page-title">Expense</h1>
        </div>
    </header>
    <div class="content_part">
        <form action="/vbizz-dashboard/purchase" method="post" name="adminForm" id="adminForm">

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

                                <div id="toolbar-publish" class="btn-wrapper">
                                    <span class="btn btn-small"
                                        onclick="if (document.adminForm.boxchecked.value==0){alert('Please first make a selection from the list');}else{ Joomla.submitbutton('paid')}">
                                        <span class="fa fa-check"></span>Paid</span>
                                </div>
                                <div id="toolbar-unpublish" class="btn-wrapper">
                                    <span class="btn btn-small"
                                        onclick="if (document.adminForm.boxchecked.value==0){alert('Please first make a selection from the list');}else{ Joomla.submitbutton('unpaid')}">
                                        <span class="fa fa-close"></span> Unpaid</span>
                                </div>

                                <div class="btn-wrapper" id="toolbar-delete">
                                    <span
                                        onclick="if (document.adminForm.boxchecked.value==0){alert('Please first make a selection from the list');}else{ Joomla.submitbutton('remove')}"
                                        class="btn btn-small">
                                        <span class="fa fa-remove"></span> Delete</span>
                                </div>
                                <div class="btn-wrapper" id="toolbar-export">
                                    <a href="/vbizz-dashboard/purchase/export?tmpl=component" class="btn btn-small">
                                        <span class="fa fa-plus"></span> CSV Export</a>
                                </div>

                                <div class="btn-wrapper" id="toolbar-export">
                                    <a href="/vbizz-dashboard/purchase/jsonExport?tmpl=component" class="btn btn-small">
                                        <span class="fa fa-upload"></span> JSON Export</a>
                                </div>

                                <div class="btn-wrapper" id="toolbar-export">
                                    <a href="/vbizz-dashboard/purchase/xmlExport?tmpl=component" class="btn btn-small">
                                        <span class="fa fa-upload"></span> XML Export</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="adminlist filter filter_in_ex">
                <div class="filet_left">
                    <input type="text" name="search" id="search" placeholder="Search" value="" class="text_area"
                        style="width:50%;">
                    <button class="btn hasTooltip" title="" onclick="this.form.submit();"
                        data-original-title="Search"><i class="fa fa-search"></i></button>
                    <button class="btn hasTooltip" title="" onclick="document.getElementById('search').value='';this.form.submit(); document.getElementById('filter_type').value='';this.form.submit(); document.getElementById('filter_begin').value='';this.form.fireEvent('submit');this.form.submit(); document.getElementById('filter_end').value='';this.form.fireEvent('submit');this.form.submit();  document.getElementById('filter_mode').value='';this.form.submit();
document.getElementById('actual_amount_status').value='';this.form.submit();" data-original-title="Clear"><i
                            class="fa fa-remove"></i></button>
                </div>
                <div class="filter_right">

                    <div class="begin_date">
                        <div class="field-calendar">
                            <div class="input-append">
                                <input type="text" id="filter_begin" name="filter_begin" value="" data-alt-value=""
                                    autocomplete="off">
                                <button type="button" class="btn btn-secondary" id="filter_begin_btn"
                                    data-inputfield="filter_begin" data-dayformat="%Y-%m-%d"
                                    data-button="filter_begin_btn" data-firstday="0" data-weekend="0,6"
                                    data-today-btn="1" data-week-numbers="1" data-show-time="0" data-show-others="1"
                                    data-time-24="24" data-only-months-nav="0" title="Open the calendar"><span
                                        class="icon-calendar" aria-hidden="true"></span></button>
                            </div>
                            <div class="js-calendar"
                                style="direction: ltr; position: absolute; box-shadow: rgba(0, 0, 0, 0.67) 0px 0px 70px 0px; min-width: 0px; padding: 0px; display: none; left: auto; top: auto; z-index: 1060; border-radius: 20px;">
                                <div class="calendar-container">
                                    <table class="table" cellspacing="0" cellpadding="0"
                                        style="margin-bottom: 0px; visibility: visible;">
                                        <thead class="calendar-header">
                                            <tr class="calendar-head-row">
                                                <td colspan="1" class=" nav"
                                                    style="text-align: center; font-size: 18px; line-height: 18px;"><a
                                                        class="js-btn btn-prev-year"
                                                        style="display:inline;padding:2px 6px;cursor:pointer;text-decoration:none;"
                                                        unselectable="on">‹</a></td>
                                                <td colspan="6" class="title">
                                                    <div unselectable="on">
                                                        <div style="text-align:center;font-size:18px"><span>2019</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td colspan="1" class=" nav"
                                                    style="text-align: center; font-size: 18px; line-height: 18px;"><a
                                                        class="js-btn btn-next-year"
                                                        style="display:inline;padding:2px 6px;cursor:pointer;text-decoration:none;"
                                                        unselectable="on"> ›</a></td>
                                            </tr>
                                            <tr class="calendar-head-row">
                                                <td colspan="1" class=" nav"
                                                    style="text-align: center; font-size: 2em; line-height: 1em;"><a
                                                        class="js-btn btn-prev-month"
                                                        style="display:inline;padding:2px 6px;cursor:pointer;text-decoration:none;"
                                                        unselectable="on">‹</a></td>
                                                <td colspan="6" class="title" style="text-align: center;">
                                                    <div unselectable="on">
                                                        <div style="text-align:center;font-size:1.2em">
                                                            <span>December</span></div>
                                                    </div>
                                                </td>
                                                <td colspan="1" class=" nav"
                                                    style="text-align: center; font-size: 2em; line-height: 1em;"><a
                                                        class="js-btn btn-next-month"
                                                        style="display:inline;padding:2px 6px;cursor:pointer;text-decoration:none;"
                                                        unselectable="on"> ›</a></td>
                                            </tr>
                                            <tr class="daynames wk">
                                                <td class="day-name wn">wk</td>
                                                <td class="day-name day-name-week">Sun</td>
                                                <td class="day-name day-name-week">Mon</td>
                                                <td class="day-name day-name-week">Tue</td>
                                                <td class="day-name day-name-week">Wed</td>
                                                <td class="day-name day-name-week">Thu</td>
                                                <td class="day-name day-name-week">Fri</td>
                                                <td class="day-name day-name-week">Sat</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="daysrow wk">
                                                <td class="day wn">48</td>
                                                <td class="day weekend" style="text-align: center; cursor: pointer;">1
                                                </td>
                                                <td class="day" style="text-align: center; cursor: pointer;">2</td>
                                                <td class="day" style="text-align: center; cursor: pointer;">3</td>
                                                <td class="day" style="text-align: center; cursor: pointer;">4</td>
                                                <td class="day" style="text-align: center; cursor: pointer;">5</td>
                                                <td class="day" style="text-align: center; cursor: pointer;">6</td>
                                                <td class="day weekend" style="text-align: center; cursor: pointer;">7
                                                </td>
                                            </tr>
                                            <tr class="daysrow wk">
                                                <td class="day wn">49</td>
                                                <td class="day weekend" style="text-align: center; cursor: pointer;">8
                                                </td>
                                                <td class="day selected today"
                                                    style="text-align: center; cursor: pointer;">9</td>
                                                <td class="day" style="text-align: center; cursor: pointer;">10</td>
                                                <td class="day" style="text-align: center; cursor: pointer;">11</td>
                                                <td class="day" style="text-align: center; cursor: pointer;">12</td>
                                                <td class="day" style="text-align: center; cursor: pointer;">13</td>
                                                <td class="day weekend" style="text-align: center; cursor: pointer;">14
                                                </td>
                                            </tr>
                                            <tr class="daysrow wk">
                                                <td class="day wn">50</td>
                                                <td class="day weekend" style="text-align: center; cursor: pointer;">15
                                                </td>
                                                <td class="day" style="text-align: center; cursor: pointer;">16</td>
                                                <td class="day" style="text-align: center; cursor: pointer;">17</td>
                                                <td class="day" style="text-align: center; cursor: pointer;">18</td>
                                                <td class="day" style="text-align: center; cursor: pointer;">19</td>
                                                <td class="day" style="text-align: center; cursor: pointer;">20</td>
                                                <td class="day weekend" style="text-align: center; cursor: pointer;">21
                                                </td>
                                            </tr>
                                            <tr class="daysrow wk">
                                                <td class="day wn">51</td>
                                                <td class="day weekend" style="text-align: center; cursor: pointer;">22
                                                </td>
                                                <td class="day" style="text-align: center; cursor: pointer;">23</td>
                                                <td class="day" style="text-align: center; cursor: pointer;">24</td>
                                                <td class="day" style="text-align: center; cursor: pointer;">25</td>
                                                <td class="day" style="text-align: center; cursor: pointer;">26</td>
                                                <td class="day" style="text-align: center; cursor: pointer;">27</td>
                                                <td class="day weekend" style="text-align: center; cursor: pointer;">28
                                                </td>
                                            </tr>
                                            <tr class="daysrow wk">
                                                <td class="day wn">52</td>
                                                <td class="day weekend" style="text-align: center; cursor: pointer;">29
                                                </td>
                                                <td class="day" style="text-align: center; cursor: pointer;">30</td>
                                                <td class="day" style="text-align: center; cursor: pointer;">31</td>
                                                <td class="day disabled othermonth " style="text-align: center;">1</td>
                                                <td class="day disabled othermonth " style="text-align: center;">2</td>
                                                <td class="day disabled othermonth " style="text-align: center;">3</td>
                                                <td class="day disabled othermonth  weekend"
                                                    style="text-align: center;">4</td>
                                            </tr>
                                            <tr class="daysrow wk">
                                                <td class="day wn">1</td>
                                                <td class="day disabled othermonth  weekend"
                                                    style="text-align: center;">5</td>
                                                <td class="day disabled othermonth " style="text-align: center;">6</td>
                                                <td class="day disabled othermonth " style="text-align: center;">7</td>
                                                <td class="day disabled othermonth " style="text-align: center;">8</td>
                                                <td class="day disabled othermonth " style="text-align: center;">9</td>
                                                <td class="day disabled othermonth " style="text-align: center;">10</td>
                                                <td class="day disabled othermonth  weekend"
                                                    style="text-align: center;">11</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="buttons-wrapper btn-group"><button type="button" data-action="clear"
                                            class="js-btn btn btn-clear">Clear</button><button type="button"
                                            data-action="today" class="js-btn btn btn-today">Today</button><button
                                            type="button" data-action="exit" class="js-btn btn btn-exit">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="end_date">
                        <div class="field-calendar">
                            <div class="input-append">
                                <input type="text" id="filter_end" name="filter_end" value="" data-alt-value=""
                                    autocomplete="off">
                                <button type="button" class="btn btn-secondary" id="filter_end_btn"
                                    data-inputfield="filter_end" data-dayformat="%Y-%m-%d" data-button="filter_end_btn"
                                    data-firstday="0" data-weekend="0,6" data-today-btn="1" data-week-numbers="1"
                                    data-show-time="0" data-show-others="1" data-time-24="24" data-only-months-nav="0"
                                    title="Open the calendar"><span class="icon-calendar"
                                        aria-hidden="true"></span></button>
                            </div>
                            <div class="js-calendar"
                                style="direction: ltr; position: absolute; box-shadow: rgba(0, 0, 0, 0.67) 0px 0px 70px 0px; min-width: 0px; padding: 0px; display: none; left: auto; top: auto; z-index: 1060; border-radius: 20px;">
                                <div class="calendar-container">
                                    <table class="table" cellspacing="0" cellpadding="0"
                                        style="margin-bottom: 0px; visibility: visible;">
                                        <thead class="calendar-header">
                                            <tr class="calendar-head-row">
                                                <td colspan="1" class=" nav"
                                                    style="text-align: center; font-size: 18px; line-height: 18px;"><a
                                                        class="js-btn btn-prev-year"
                                                        style="display:inline;padding:2px 6px;cursor:pointer;text-decoration:none;"
                                                        unselectable="on">‹</a></td>
                                                <td colspan="6" class="title">
                                                    <div unselectable="on">
                                                        <div style="text-align:center;font-size:18px"><span>2019</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td colspan="1" class=" nav"
                                                    style="text-align: center; font-size: 18px; line-height: 18px;"><a
                                                        class="js-btn btn-next-year"
                                                        style="display:inline;padding:2px 6px;cursor:pointer;text-decoration:none;"
                                                        unselectable="on"> ›</a></td>
                                            </tr>
                                            <tr class="calendar-head-row">
                                                <td colspan="1" class=" nav"
                                                    style="text-align: center; font-size: 2em; line-height: 1em;"><a
                                                        class="js-btn btn-prev-month"
                                                        style="display:inline;padding:2px 6px;cursor:pointer;text-decoration:none;"
                                                        unselectable="on">‹</a></td>
                                                <td colspan="6" class="title" style="text-align: center;">
                                                    <div unselectable="on">
                                                        <div style="text-align:center;font-size:1.2em">
                                                            <span>December</span></div>
                                                    </div>
                                                </td>
                                                <td colspan="1" class=" nav"
                                                    style="text-align: center; font-size: 2em; line-height: 1em;"><a
                                                        class="js-btn btn-next-month"
                                                        style="display:inline;padding:2px 6px;cursor:pointer;text-decoration:none;"
                                                        unselectable="on"> ›</a></td>
                                            </tr>
                                            <tr class="daynames wk">
                                                <td class="day-name wn">wk</td>
                                                <td class="day-name day-name-week">Sun</td>
                                                <td class="day-name day-name-week">Mon</td>
                                                <td class="day-name day-name-week">Tue</td>
                                                <td class="day-name day-name-week">Wed</td>
                                                <td class="day-name day-name-week">Thu</td>
                                                <td class="day-name day-name-week">Fri</td>
                                                <td class="day-name day-name-week">Sat</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="daysrow wk">
                                                <td class="day wn">48</td>
                                                <td class="day weekend" style="text-align: center; cursor: pointer;">1
                                                </td>
                                                <td class="day" style="text-align: center; cursor: pointer;">2</td>
                                                <td class="day" style="text-align: center; cursor: pointer;">3</td>
                                                <td class="day" style="text-align: center; cursor: pointer;">4</td>
                                                <td class="day" style="text-align: center; cursor: pointer;">5</td>
                                                <td class="day" style="text-align: center; cursor: pointer;">6</td>
                                                <td class="day weekend" style="text-align: center; cursor: pointer;">7
                                                </td>
                                            </tr>
                                            <tr class="daysrow wk">
                                                <td class="day wn">49</td>
                                                <td class="day weekend" style="text-align: center; cursor: pointer;">8
                                                </td>
                                                <td class="day selected today"
                                                    style="text-align: center; cursor: pointer;">9</td>
                                                <td class="day" style="text-align: center; cursor: pointer;">10</td>
                                                <td class="day" style="text-align: center; cursor: pointer;">11</td>
                                                <td class="day" style="text-align: center; cursor: pointer;">12</td>
                                                <td class="day" style="text-align: center; cursor: pointer;">13</td>
                                                <td class="day weekend" style="text-align: center; cursor: pointer;">14
                                                </td>
                                            </tr>
                                            <tr class="daysrow wk">
                                                <td class="day wn">50</td>
                                                <td class="day weekend" style="text-align: center; cursor: pointer;">15
                                                </td>
                                                <td class="day" style="text-align: center; cursor: pointer;">16</td>
                                                <td class="day" style="text-align: center; cursor: pointer;">17</td>
                                                <td class="day" style="text-align: center; cursor: pointer;">18</td>
                                                <td class="day" style="text-align: center; cursor: pointer;">19</td>
                                                <td class="day" style="text-align: center; cursor: pointer;">20</td>
                                                <td class="day weekend" style="text-align: center; cursor: pointer;">21
                                                </td>
                                            </tr>
                                            <tr class="daysrow wk">
                                                <td class="day wn">51</td>
                                                <td class="day weekend" style="text-align: center; cursor: pointer;">22
                                                </td>
                                                <td class="day" style="text-align: center; cursor: pointer;">23</td>
                                                <td class="day" style="text-align: center; cursor: pointer;">24</td>
                                                <td class="day" style="text-align: center; cursor: pointer;">25</td>
                                                <td class="day" style="text-align: center; cursor: pointer;">26</td>
                                                <td class="day" style="text-align: center; cursor: pointer;">27</td>
                                                <td class="day weekend" style="text-align: center; cursor: pointer;">28
                                                </td>
                                            </tr>
                                            <tr class="daysrow wk">
                                                <td class="day wn">52</td>
                                                <td class="day weekend" style="text-align: center; cursor: pointer;">29
                                                </td>
                                                <td class="day" style="text-align: center; cursor: pointer;">30</td>
                                                <td class="day" style="text-align: center; cursor: pointer;">31</td>
                                                <td class="day disabled othermonth " style="text-align: center;">1</td>
                                                <td class="day disabled othermonth " style="text-align: center;">2</td>
                                                <td class="day disabled othermonth " style="text-align: center;">3</td>
                                                <td class="day disabled othermonth  weekend"
                                                    style="text-align: center;">4</td>
                                            </tr>
                                            <tr class="daysrow wk">
                                                <td class="day wn">1</td>
                                                <td class="day disabled othermonth  weekend"
                                                    style="text-align: center;">5</td>
                                                <td class="day disabled othermonth " style="text-align: center;">6</td>
                                                <td class="day disabled othermonth " style="text-align: center;">7</td>
                                                <td class="day disabled othermonth " style="text-align: center;">8</td>
                                                <td class="day disabled othermonth " style="text-align: center;">9</td>
                                                <td class="day disabled othermonth " style="text-align: center;">10</td>
                                                <td class="day disabled othermonth  weekend"
                                                    style="text-align: center;">11</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="buttons-wrapper btn-group"><button type="button" data-action="clear"
                                            class="js-btn btn btn-clear">Clear</button><button type="button"
                                            data-action="today" class="js-btn btn btn-today">Today</button><button
                                            type="button" data-action="exit" class="js-btn btn btn-exit">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="status">
                        <select id="actual_amount_status" name="actual_amount_status" class="inputbox"
                            style="width: 150px; " size="1" onchange="submitform( );">
                            <option value="">Amount Status</option>
                            <option value="Paid">Paid</option>
                            <option value="Unpaid">Unpaid</option>
                        </select>
                        {{-- <div class="chzn-container chzn-container-single chzn-container-single-nosearch"
                            style="width: 150px;" title="" id="actual_amount_status_chzn"><a
                                class="chzn-single"><span>Amount Status</span>
                                <div><b></b></div>
                            </a>
                            <div class="chzn-drop">
                                <div class="chzn-search"><input type="text" autocomplete="off" readonly=""></div>
                                <ul class="chzn-results"></ul>
                            </div>
                        </div> --}}
                    </div>
                    <div class="status">
                        <select id="filter_mode" name="filter_mode" class="inputbox" size="1" style="width: 150px; "
                            onchange="submitform( );">
                            <option value="" selected="selected">Select Mode</option>
                            <option value="11">Bank Transfer</option>
                            <option value="21">CASH</option>
                            <option value="20">CHEQUE</option>
                            <option value="19">INVOICE</option>
                            <option value="18">Online</option>
                        </select>
                        {{-- <div class="chzn-container chzn-container-single chzn-container-single-nosearch"
                            style="width: 150px;" title="" id="filter_mode_chzn"><a class="chzn-single"><span>Select
                                    Mode</span>
                                <div><b></b></div>
                            </a>
                            <div class="chzn-drop">
                                <div class="chzn-search"><input type="text" autocomplete="off" readonly=""></div>
                                <ul class="chzn-results"></ul>
                            </div>
                        </div> --}}
                    </div>
                    <div class="status">
                        <select id="filter_type" name="filter_type" class="inputbox" size="1" onchange="submitform( );"
                            style="width: 150px; ">
                            <option value="" selected="selected">Select Transaction</option>
                            <option value="286">For Sale</option>
                            <option value="347">Asset</option>
                            <option value="346">Rent</option>
                        </select>
                        {{-- <div class="chzn-container chzn-container-single chzn-container-single-nosearch"
                            style="width: 150px;" title="" id="filter_type_chzn"><a class="chzn-single"><span>Select
                                    Transaction</span>
                                <div><b></b></div>
                            </a>
                            <div class="chzn-drop">
                                <div class="chzn-search"><input type="text" autocomplete="off" readonly=""></div>
                                <ul class="chzn-results"></ul>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>

            <div id="editcell">
                <table class="adminlist table">
                    <thead>
                        <tr>

                            <th width="10" class="hidden-phone">#</th>

                            <th width="10"><input type="checkbox" name="toggle" value=""
                                    onclick="Joomla.checkAll(this);"></th>

                            <th><a href="#" onclick="Joomla.tableOrdering('i.title','asc','');return false;"
                                    class="hasPopover" title="" data-content="Select to sort by this column"
                                    data-placement="top" data-original-title="Title">Title</a></th>

                            <th class="hidden-phone"><a href="#"
                                    onclick="Joomla.tableOrdering('t.title','asc','');return false;" class="hasPopover"
                                    title="" data-content="Select to sort by this column" data-placement="top"
                                    data-original-title="Transaction">Transaction</a></th>


                            <th class="hidden-phone"><a href="#"
                                    onclick="Joomla.tableOrdering('m.title','asc','');return false;" class="hasPopover"
                                    title="" data-content="Select to sort by this column" data-placement="top"
                                    data-original-title="Mode">Mode</a></th>

                            <th class="hidden-phone">Transaction Id</th>

                            <th class="hidden-phone"><a href="#"
                                    onclick="Joomla.tableOrdering('i.tdate','asc','');return false;" class="hasPopover"
                                    title="" data-content="Select to sort by this column" data-placement="top"
                                    data-original-title="Date">Date</a></th>


                            <th><a href="#" onclick="Joomla.tableOrdering('final_amount','asc','');return false;"
                                    class="hasPopover" title="" data-content="Select to sort by this column"
                                    data-placement="top" data-original-title="Amount">Amount</a></th>

                            <th width="25" class="p_status hidden-phone"><a href="#"
                                    onclick="Joomla.tableOrdering('i.status','asc','');return false;" class="hasPopover"
                                    title="" data-content="Select to sort by this column" data-placement="top"
                                    data-original-title="Paid">Paid</a></th>
                            <th class="p_status hidden-phone" width="92">Receipt</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="row0">

                            <td align="center" class="hidden-phone">1</td>

                            <td><input type="checkbox" id="cb0" name="cid[]" value="83"
                                    onclick="Joomla.isChecked(this.checked);"></td>

                            <td align="center">
                                <a href="/vbizz-dashboard/purchase/edit/83">fdsf</a>
                            </td>

                            <td align="center" class="hidden-phone"><span style="color:#210af7;">For Sale</span></td>


                            <td align="center" class="hidden-phone">CASH</td>

                            <td align="center" class="hidden-phone"></td>

                            <td align="center" class="hidden-phone">25.09.2019</td>


                            <td align="center"><span style="color:#FF0000;">NOK 133332.00</span></td>

                            <td class="p_status hidden-phone">
                                <span class="btn btn-danger"><i class="fa fa-close"></i></span>
                            </td>
                            <td class="p_status hidden-phone" width="92">
                                <div class="v-pdf">
                                    <span class="download_receipt"><a
                                            href="http://vbizz.joomlawings.com/components/com_vbizz/pdf/invoice/fdsf83invoice.pdf"
                                            class="pdf btn" target="_blank"><label class="hasTip" title=""><i
                                                    class="fa fa-download"></i>
                                            </label></a>
                                    </span>
                                    <span class="print_receipt">
                                        <a href="http://vbizz.joomlawings.com/index.php?option=com_vbizz&amp;view=expense&amp;task=print_bill&amp;tmpl=component&amp;cid[]=83"
                                            class="pdf modal btn"><i class="fa fa-print"></i></a>
                                    </span>

                                    <span class="envelop_receipt loadingbox83" style="position: relative;">
                                        <a href="javascript:void(0);" onclick="sendEmail(83);" class="pdf btn"><i
                                                class="fa fa-envelope"></i></a></span>
                                </div>
                            </td>
                        </tr>


                        <tr class="row1">

                            <td align="center" class="hidden-phone">2</td>

                            <td><input type="checkbox" id="cb1" name="cid[]" value="77"
                                    onclick="Joomla.isChecked(this.checked);"></td>

                            <td align="center">
                                <a class="btn btn-micro hasTooltip" href="javascript:void(0);"
                                    onclick="return listItemTask('cb1','checkin')" title=""
                                    data-original-title="<strong>Check-in</strong><br />LAPTOP COMPUTER<br />Friday, 06 December 2019<br />13:52"><span
                                        class="icon-checkedout" aria-hidden="true"></span></a> <a
                                    href="/vbizz-dashboard/purchase/edit/77">LAPTOP COMPUTER</a>
                            </td>

                            <td align="center" class="hidden-phone"><span style="color:#e32222;">Asset</span></td>


                            <td align="center" class="hidden-phone">Online</td>

                            <td align="center" class="hidden-phone"></td>

                            <td align="center" class="hidden-phone">04.09.2019</td>


                            <td align="center"><span style="color:#FF0000;">NOK 800.00</span></td>

                            <td class="p_status hidden-phone">
                                <span class="btn btn-danger"><i class="fa fa-close"></i></span>
                            </td>
                            <td class="p_status hidden-phone" width="92">
                                <div class="v-pdf">
                                    <span class="download_receipt"><a
                                            href="http://vbizz.joomlawings.com/components/com_vbizz/pdf/invoice/laptopcomputer77invoice.pdf"
                                            class="pdf btn" target="_blank"><label class="hasTip" title=""><i
                                                    class="fa fa-download"></i>
                                            </label></a>
                                    </span>
                                    <span class="print_receipt">
                                        <a href="http://vbizz.joomlawings.com/index.php?option=com_vbizz&amp;view=expense&amp;task=print_bill&amp;tmpl=component&amp;cid[]=77"
                                            class="pdf modal btn"><i class="fa fa-print"></i></a>
                                    </span>

                                    <span class="envelop_receipt loadingbox77" style="position: relative;">
                                        <a href="javascript:void(0);" onclick="sendEmail(77);" class="pdf btn"><i
                                                class="fa fa-envelope"></i></a></span>
                                </div>
                            </td>
                        </tr>


                        <tr class="row0">

                            <td align="center" class="hidden-phone">3</td>

                            <td><input type="checkbox" id="cb2" name="cid[]" value="75"
                                    onclick="Joomla.isChecked(this.checked);"></td>

                            <td align="center">
                                <a class="btn btn-micro hasTooltip" href="javascript:void(0);"
                                    onclick="return listItemTask('cb2','checkin')" title=""
                                    data-original-title="<strong>Check-in</strong><br />ДСП<br />Friday, 06 December 2019<br />13:53"><span
                                        class="icon-checkedout" aria-hidden="true"></span></a> <a
                                    href="/vbizz-dashboard/purchase/edit/75">ДСП</a>
                            </td>

                            <td align="center" class="hidden-phone"><span style="color:#210af7;">For Sale</span></td>


                            <td align="center" class="hidden-phone">Bank Transfer</td>

                            <td align="center" class="hidden-phone">21</td>

                            <td align="center" class="hidden-phone">19.08.2019</td>


                            <td align="center"><span style="color:#FF0000;">NOK 314.90</span></td>

                            <td class="p_status hidden-phone">
                                <span class="btn btn-danger"><i class="fa fa-close"></i></span>
                            </td>
                            <td class="p_status hidden-phone" width="92">
                                <div class="v-pdf">
                                    <span class="download_receipt"><a
                                            href="http://vbizz.joomlawings.com/components/com_vbizz/pdf/invoice/ДСП75invoice.pdf"
                                            class="pdf btn" target="_blank"><label class="hasTip" title=""><i
                                                    class="fa fa-download"></i>
                                            </label></a>
                                    </span>
                                    <span class="print_receipt">
                                        <a href="http://vbizz.joomlawings.com/index.php?option=com_vbizz&amp;view=expense&amp;task=print_bill&amp;tmpl=component&amp;cid[]=75"
                                            class="pdf modal btn"><i class="fa fa-print"></i></a>
                                    </span>

                                    <span class="envelop_receipt loadingbox75" style="position: relative;">
                                        <a href="javascript:void(0);" onclick="sendEmail(75);" class="pdf btn"><i
                                                class="fa fa-envelope"></i></a></span>
                                </div>
                            </td>
                        </tr>


                        <tr class="row1">

                            <td align="center" class="hidden-phone">4</td>

                            <td><input type="checkbox" id="cb3" name="cid[]" value="65"
                                    onclick="Joomla.isChecked(this.checked);"></td>

                            <td align="center">
                                <a class="btn btn-micro hasTooltip" href="javascript:void(0);"
                                    onclick="return listItemTask('cb3','checkin')" title=""
                                    data-original-title="<strong>Check-in</strong><br />test PO<br />Friday, 06 December 2019<br />13:52"><span
                                        class="icon-checkedout" aria-hidden="true"></span></a> <a
                                    href="/vbizz-dashboard/purchase/edit/65">test PO</a>
                            </td>

                            <td align="center" class="hidden-phone"><span style="color:#210af7;">For Sale</span></td>


                            <td align="center" class="hidden-phone">Online</td>

                            <td align="center" class="hidden-phone"></td>

                            <td align="center" class="hidden-phone">05.04.2019</td>


                            <td align="center"><span style="color:#FF0000;">NOK 20.00</span></td>

                            <td class="p_status hidden-phone">
                                <span class="btn btn-success"><i class="fa fa-check"></i></span>
                            </td>
                            <td class="p_status hidden-phone" width="92">
                                <div class="v-pdf">
                                    <span class="download_receipt"><a
                                            href="http://vbizz.joomlawings.com/components/com_vbizz/pdf/invoice/testpo65invoice.pdf"
                                            class="pdf btn" target="_blank"><label class="hasTip" title=""><i
                                                    class="fa fa-download"></i>
                                            </label></a>
                                    </span>
                                    <span class="print_receipt">
                                        <a href="http://vbizz.joomlawings.com/index.php?option=com_vbizz&amp;view=expense&amp;task=print_bill&amp;tmpl=component&amp;cid[]=65"
                                            class="pdf modal btn"><i class="fa fa-print"></i></a>
                                    </span>

                                    <span class="envelop_receipt loadingbox65" style="position: relative;">
                                        <a href="javascript:void(0);" onclick="sendEmail(65);" class="pdf btn"><i
                                                class="fa fa-envelope"></i></a></span>
                                </div>
                            </td>
                        </tr>


                        <tr class="row0">

                            <td align="center" class="hidden-phone">5</td>

                            <td><input type="checkbox" id="cb4" name="cid[]" value="64"
                                    onclick="Joomla.isChecked(this.checked);"></td>

                            <td align="center">
                                <a href="/vbizz-dashboard/purchase/edit/64">Addendum</a>
                            </td>

                            <td align="center" class="hidden-phone"><span style="color:#210af7;">For Sale</span></td>


                            <td align="center" class="hidden-phone">Online</td>

                            <td align="center" class="hidden-phone"></td>

                            <td align="center" class="hidden-phone">24.04.2019</td>


                            <td align="center"><span style="color:#FF0000;">NOK 60.00</span></td>

                            <td class="p_status hidden-phone">
                                <span class="btn btn-success"><i class="fa fa-check"></i></span>
                            </td>
                            <td class="p_status hidden-phone" width="92">
                                <div class="v-pdf">
                                    <span class="download_receipt"><a
                                            href="http://vbizz.joomlawings.com/components/com_vbizz/pdf/invoice/addendum64invoice.pdf"
                                            class="pdf btn" target="_blank"><label class="hasTip" title=""><i
                                                    class="fa fa-download"></i>
                                            </label></a>
                                    </span>
                                    <span class="print_receipt">
                                        <a href="http://vbizz.joomlawings.com/index.php?option=com_vbizz&amp;view=expense&amp;task=print_bill&amp;tmpl=component&amp;cid[]=64"
                                            class="pdf modal btn"><i class="fa fa-print"></i></a>
                                    </span>

                                    <span class="envelop_receipt loadingbox64" style="position: relative;">
                                        <a href="javascript:void(0);" onclick="sendEmail(64);" class="pdf btn"><i
                                                class="fa fa-envelope"></i></a></span>
                                </div>
                            </td>
                        </tr>



                        <tr>
                            <td class="hidden-phone">&nbsp;</td>
                            <td class="hidden-phone">&nbsp;</td>
                            <td>&nbsp;</td>
                            <td class="hidden-phone">&nbsp;</td>
                            <td class="hidden-phone">&nbsp;</td>
                            <td class="hidden-phone">&nbsp;</td>
                            <td class="hidden-phone">&nbsp;</td>


                            <td>
                                <strong class="hasTip" title=""><span style="color:#0404B4;">Total : NOK
                                        134526.90</span></strong>
                            </td>
                            <td colspan="0"></td>
                            <td colspan="0"></td>

                        </tr>

                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="10">
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
            <input type="hidden" name="view" value="expense">
            <input type="hidden" name="filter_order" value="id">
            <input type="hidden" name="filter_order_Dir" value="desc">
        </form>
    </div>
</div>
@endsection

@section('script')

@endsection