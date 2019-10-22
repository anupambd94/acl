@extends('layouts.app')

@section('content')
<header class="header">
	<div class="container-title">
		<h1 class="page-title">Manage Task</h1>
	</div>
</header>
<div class="content_part">
<form action="/vbizz-dashboard/ptask" method="post" name="adminForm" id="adminForm">

<div class="subhead">
	<div class="container-fluid">
        <div id="container-collapse" class="container-collapse"></div>
        <div class="row-fluid">
            <div class="span12">
                <div id="toolbar" class="btn-toolbar">
					
					<div class="btn-wrapper" id="toolbar-arrow-left-4">
						<a href="/vbizz-dashboard/projects" class="btn btn-small">
						<span class="fa fa-arrow-left"></span> Back To Projects</a>
					</div>
			
						                        <div class="btn-wrapper" id="toolbar-new">
                            <span onclick="Joomla.submitbutton('add')" class="btn btn-small btn-success">
                            <span class="fa fa-plus"></span> New</span>
                        </div>
                                            
						                    
                </div>
            </div>
        </div>
    </div>
</div>

<div class="adminlist filter filter_in_ex">
<div class="filet_left">
<input type="text" name="search" id="search" placeholder="Search" value="" class="text_area" style="width:50%;">
<button class="btn hasTooltip" title="" onclick="this.form.submit();" data-original-title="Search"><i class="fa fa-search"></i></button>
<button class="btn hasTooltip" title="" onclick="document.getElementById('search').value='';this.form.submit();
document.getElementById('projectid').value='';this.form.submit();
document.getElementById('filter_begin').value='';this.form.fireEvent('submit');this.form.submit(); document.getElementById('filter_end').value='';this.form.fireEvent('submit');this.form.submit();
document.getElementById('priority').value='';this.form.submit(); " data-original-title="Clear"><i class="fa fa-remove"></i></button>
</div>
<div class="filter_right">
<select id="projectid" name="projectid" class="inputbox" size="1" onchange="submitform( );" style="display: none;">
	<option value="">Select Project</option>
	<option value="50" selected="selected">Logo in Lobby</option>
	<option value="49">Wizard</option>
	<option value="48">STORAGE</option>
	<option value="47">electric</option>
	<option value="46">ABCD</option>
	<option value="45">Delhi Transport</option>
	<option value="44">Easy ERP</option>
	<option value="43">Vantage Pointe 2153333</option>
	<option value="42">aaa</option>
	<option value="41">Ghee</option>
	<option value="40">Lead1</option>
	<option value="39">testtetst</option>
	<option value="38">Delhi Transport</option>
	<option value="37">prova</option>
	<option value="36">other</option>
</select><div class="chzn-container chzn-container-single" style="width: 182px;" title="" id="projectid_chzn"><a class="chzn-single"><span>Logo in Lobby</span><div><b></b></div></a><div class="chzn-drop"><div class="chzn-search"><input type="text" autocomplete="off"></div><ul class="chzn-results"></ul></div></div>
<div class="begin_date">
<div class="field-calendar">
		<div class="input-append">
				<input type="text" id=" placeholder='Begin Date '" name="filter_begin" value="" data-alt-value="" autocomplete="off">
		<button type="button" class="btn btn-secondary" id=" placeholder='Begin Date '_btn" data-inputfield=" placeholder='Begin Date '" data-dayformat="%Y-%m-%d" data-button=" placeholder='Begin Date '_btn" data-firstday="0" data-weekend="0,6" data-today-btn="1" data-week-numbers="1" data-show-time="0" data-show-others="1" data-time-24="24" data-only-months-nav="0" title="Open the calendar"><span class="icon-calendar" aria-hidden="true"></span></button>
			</div>
<div class="js-calendar" style="direction: ltr; position: absolute; box-shadow: rgba(0, 0, 0, 0.67) 0px 0px 70px 0px; min-width: 0px; padding: 0px; display: none; left: auto; top: auto; z-index: 1060; border-radius: 20px;"><div class="calendar-container"><table class="table" cellspacing="0" cellpadding="0" style="margin-bottom: 0px; visibility: visible;"><thead class="calendar-header"><tr class="calendar-head-row"><td colspan="1" class=" nav" style="text-align: center; font-size: 18px; line-height: 18px;"><a class="js-btn btn-prev-year" style="display:inline;padding:2px 6px;cursor:pointer;text-decoration:none;" unselectable="on">‹</a></td><td colspan="6" class="title"><div unselectable="on"><div style="text-align:center;font-size:18px"><span>2019</span></div></div></td><td colspan="1" class=" nav" style="text-align: center; font-size: 18px; line-height: 18px;"><a class="js-btn btn-next-year" style="display:inline;padding:2px 6px;cursor:pointer;text-decoration:none;" unselectable="on"> ›</a></td></tr><tr class="calendar-head-row"><td colspan="1" class=" nav" style="text-align: center; font-size: 2em; line-height: 1em;"><a class="js-btn btn-prev-month" style="display:inline;padding:2px 6px;cursor:pointer;text-decoration:none;" unselectable="on">‹</a></td><td colspan="6" class="title" style="text-align: center;"><div unselectable="on"><div style="text-align:center;font-size:1.2em"><span>October</span></div></div></td><td colspan="1" class=" nav" style="text-align: center; font-size: 2em; line-height: 1em;"><a class="js-btn btn-next-month" style="display:inline;padding:2px 6px;cursor:pointer;text-decoration:none;" unselectable="on"> ›</a></td></tr><tr class="daynames wk"><td class="day-name wn">wk</td><td class="day-name day-name-week">Sun</td><td class="day-name day-name-week">Mon</td><td class="day-name day-name-week">Tue</td><td class="day-name day-name-week">Wed</td><td class="day-name day-name-week">Thu</td><td class="day-name day-name-week">Fri</td><td class="day-name day-name-week">Sat</td></tr></thead><tbody><tr class="daysrow wk"><td class="day wn">39</td><td class="day disabled othermonth  weekend" style="text-align: center;">29</td><td class="day disabled othermonth " style="text-align: center;">30</td><td class="day" style="text-align: center; cursor: pointer;">1</td><td class="day" style="text-align: center; cursor: pointer;">2</td><td class="day" style="text-align: center; cursor: pointer;">3</td><td class="day" style="text-align: center; cursor: pointer;">4</td><td class="day weekend" style="text-align: center; cursor: pointer;">5</td></tr><tr class="daysrow wk"><td class="day wn">40</td><td class="day weekend" style="text-align: center; cursor: pointer;">6</td><td class="day" style="text-align: center; cursor: pointer;">7</td><td class="day" style="text-align: center; cursor: pointer;">8</td><td class="day" style="text-align: center; cursor: pointer;">9</td><td class="day" style="text-align: center; cursor: pointer;">10</td><td class="day" style="text-align: center; cursor: pointer;">11</td><td class="day weekend" style="text-align: center; cursor: pointer;">12</td></tr><tr class="daysrow wk"><td class="day wn">41</td><td class="day weekend" style="text-align: center; cursor: pointer;">13</td><td class="day" style="text-align: center; cursor: pointer;">14</td><td class="day" style="text-align: center; cursor: pointer;">15</td><td class="day" style="text-align: center; cursor: pointer;">16</td><td class="day" style="text-align: center; cursor: pointer;">17</td><td class="day" style="text-align: center; cursor: pointer;">18</td><td class="day weekend" style="text-align: center; cursor: pointer;">19</td></tr><tr class="daysrow wk"><td class="day wn">42</td><td class="day weekend" style="text-align: center; cursor: pointer;">20</td><td class="day" style="text-align: center; cursor: pointer;">21</td><td class="day selected today" style="text-align: center; cursor: pointer;">22</td><td class="day" style="text-align: center; cursor: pointer;">23</td><td class="day" style="text-align: center; cursor: pointer;">24</td><td class="day" style="text-align: center; cursor: pointer;">25</td><td class="day weekend" style="text-align: center; cursor: pointer;">26</td></tr><tr class="daysrow wk"><td class="day wn">43</td><td class="day weekend" style="text-align: center; cursor: pointer;">27</td><td class="day" style="text-align: center; cursor: pointer;">28</td><td class="day" style="text-align: center; cursor: pointer;">29</td><td class="day" style="text-align: center; cursor: pointer;">30</td><td class="day" style="text-align: center; cursor: pointer;">31</td><td class="day disabled othermonth " style="text-align: center;">1</td><td class="day disabled othermonth  weekend" style="text-align: center;">2</td></tr><tr class="daysrow wk"><td class="day wn">44</td><td class="day disabled othermonth  weekend" style="text-align: center;">3</td><td class="day disabled othermonth " style="text-align: center;">4</td><td class="day disabled othermonth " style="text-align: center;">5</td><td class="day disabled othermonth " style="text-align: center;">6</td><td class="day disabled othermonth " style="text-align: center;">7</td><td class="day disabled othermonth " style="text-align: center;">8</td><td class="day disabled othermonth  weekend" style="text-align: center;">9</td></tr></tbody></table><div class="buttons-wrapper btn-group"><button type="button" data-action="clear" class="js-btn btn btn-clear">Clear</button><button type="button" data-action="today" class="js-btn btn btn-today">Today</button><button type="button" data-action="exit" class="js-btn btn btn-exit">Close</button></div></div></div></div>
</div>
<div class="end_date">
<div class="field-calendar">
		<div class="input-append">
				<input type="text" id=" placeholder='End Date'" name="filter_end" value="" data-alt-value="" autocomplete="off">
		<button type="button" class="btn btn-secondary" id=" placeholder='End Date'_btn" data-inputfield=" placeholder='End Date'" data-dayformat="%Y-%m-%d" data-button=" placeholder='End Date'_btn" data-firstday="0" data-weekend="0,6" data-today-btn="1" data-week-numbers="1" data-show-time="0" data-show-others="1" data-time-24="24" data-only-months-nav="0" title="Open the calendar"><span class="icon-calendar" aria-hidden="true"></span></button>
			</div>
<div class="js-calendar" style="direction: ltr; position: absolute; box-shadow: rgba(0, 0, 0, 0.67) 0px 0px 70px 0px; min-width: 0px; padding: 0px; display: none; left: auto; top: auto; z-index: 1060; border-radius: 20px;"><div class="calendar-container"><table class="table" cellspacing="0" cellpadding="0" style="margin-bottom: 0px; visibility: visible;"><thead class="calendar-header"><tr class="calendar-head-row"><td colspan="1" class=" nav" style="text-align: center; font-size: 18px; line-height: 18px;"><a class="js-btn btn-prev-year" style="display:inline;padding:2px 6px;cursor:pointer;text-decoration:none;" unselectable="on">‹</a></td><td colspan="6" class="title"><div unselectable="on"><div style="text-align:center;font-size:18px"><span>2019</span></div></div></td><td colspan="1" class=" nav" style="text-align: center; font-size: 18px; line-height: 18px;"><a class="js-btn btn-next-year" style="display:inline;padding:2px 6px;cursor:pointer;text-decoration:none;" unselectable="on"> ›</a></td></tr><tr class="calendar-head-row"><td colspan="1" class=" nav" style="text-align: center; font-size: 2em; line-height: 1em;"><a class="js-btn btn-prev-month" style="display:inline;padding:2px 6px;cursor:pointer;text-decoration:none;" unselectable="on">‹</a></td><td colspan="6" class="title" style="text-align: center;"><div unselectable="on"><div style="text-align:center;font-size:1.2em"><span>October</span></div></div></td><td colspan="1" class=" nav" style="text-align: center; font-size: 2em; line-height: 1em;"><a class="js-btn btn-next-month" style="display:inline;padding:2px 6px;cursor:pointer;text-decoration:none;" unselectable="on"> ›</a></td></tr><tr class="daynames wk"><td class="day-name wn">wk</td><td class="day-name day-name-week">Sun</td><td class="day-name day-name-week">Mon</td><td class="day-name day-name-week">Tue</td><td class="day-name day-name-week">Wed</td><td class="day-name day-name-week">Thu</td><td class="day-name day-name-week">Fri</td><td class="day-name day-name-week">Sat</td></tr></thead><tbody><tr class="daysrow wk"><td class="day wn">39</td><td class="day disabled othermonth  weekend" style="text-align: center;">29</td><td class="day disabled othermonth " style="text-align: center;">30</td><td class="day" style="text-align: center; cursor: pointer;">1</td><td class="day" style="text-align: center; cursor: pointer;">2</td><td class="day" style="text-align: center; cursor: pointer;">3</td><td class="day" style="text-align: center; cursor: pointer;">4</td><td class="day weekend" style="text-align: center; cursor: pointer;">5</td></tr><tr class="daysrow wk"><td class="day wn">40</td><td class="day weekend" style="text-align: center; cursor: pointer;">6</td><td class="day" style="text-align: center; cursor: pointer;">7</td><td class="day" style="text-align: center; cursor: pointer;">8</td><td class="day" style="text-align: center; cursor: pointer;">9</td><td class="day" style="text-align: center; cursor: pointer;">10</td><td class="day" style="text-align: center; cursor: pointer;">11</td><td class="day weekend" style="text-align: center; cursor: pointer;">12</td></tr><tr class="daysrow wk"><td class="day wn">41</td><td class="day weekend" style="text-align: center; cursor: pointer;">13</td><td class="day" style="text-align: center; cursor: pointer;">14</td><td class="day" style="text-align: center; cursor: pointer;">15</td><td class="day" style="text-align: center; cursor: pointer;">16</td><td class="day" style="text-align: center; cursor: pointer;">17</td><td class="day" style="text-align: center; cursor: pointer;">18</td><td class="day weekend" style="text-align: center; cursor: pointer;">19</td></tr><tr class="daysrow wk"><td class="day wn">42</td><td class="day weekend" style="text-align: center; cursor: pointer;">20</td><td class="day" style="text-align: center; cursor: pointer;">21</td><td class="day selected today" style="text-align: center; cursor: pointer;">22</td><td class="day" style="text-align: center; cursor: pointer;">23</td><td class="day" style="text-align: center; cursor: pointer;">24</td><td class="day" style="text-align: center; cursor: pointer;">25</td><td class="day weekend" style="text-align: center; cursor: pointer;">26</td></tr><tr class="daysrow wk"><td class="day wn">43</td><td class="day weekend" style="text-align: center; cursor: pointer;">27</td><td class="day" style="text-align: center; cursor: pointer;">28</td><td class="day" style="text-align: center; cursor: pointer;">29</td><td class="day" style="text-align: center; cursor: pointer;">30</td><td class="day" style="text-align: center; cursor: pointer;">31</td><td class="day disabled othermonth " style="text-align: center;">1</td><td class="day disabled othermonth  weekend" style="text-align: center;">2</td></tr><tr class="daysrow wk"><td class="day wn">44</td><td class="day disabled othermonth  weekend" style="text-align: center;">3</td><td class="day disabled othermonth " style="text-align: center;">4</td><td class="day disabled othermonth " style="text-align: center;">5</td><td class="day disabled othermonth " style="text-align: center;">6</td><td class="day disabled othermonth " style="text-align: center;">7</td><td class="day disabled othermonth " style="text-align: center;">8</td><td class="day disabled othermonth  weekend" style="text-align: center;">9</td></tr></tbody></table><div class="buttons-wrapper btn-group"><button type="button" data-action="clear" class="js-btn btn btn-clear">Clear</button><button type="button" data-action="today" class="js-btn btn btn-today">Today</button><button type="button" data-action="exit" class="js-btn btn btn-exit">Close</button></div></div></div></div>
</div>
<div class="status">
<select id="priority" name="priority" class="inputbox" size="1" onchange="submitform( );" style="display: none;">
	<option value="">Select Priority</option>
	<option value="low">Low</option>
	<option value="normal">Normal</option>
	<option value="high">High</option>
</select><div class="chzn-container chzn-container-single chzn-container-single-nosearch" style="width: 119px;" title="" id="priority_chzn"><a class="chzn-single"><span>Select Priority</span><div><b></b></div></a><div class="chzn-drop"><div class="chzn-search"><input type="text" autocomplete="off" readonly=""></div><ul class="chzn-results"></ul></div></div>
</div>
</div>
</div>

<div id="editcell">
    <table class="adminlist table">
        <thead>
            <tr>
                <th width="10" class="hidden-phone">#</th>
                <th width="10"><input type="checkbox" name="toggle" value="" onclick="Joomla.checkAll(this);"></th>
                <th><a href="#" onclick="Joomla.tableOrdering('task_desc','asc','');return false;" class="hasPopover" title="" data-content="Select to sort by this column" data-placement="top" data-original-title="Task Description">Task Description</a></th>
                <th class="hidden-phone"><a href="#" onclick="Joomla.tableOrdering('due_date','asc','');return false;" class="hasPopover" title="" data-content="Select to sort by this column" data-placement="top" data-original-title="Due Date">Due Date</a></th>
                <th class="hidden-phone"><a href="#" onclick="Joomla.tableOrdering('assigned_to','asc','');return false;" class="hasPopover" title="" data-content="Select to sort by this column" data-placement="top" data-original-title="Assigned To">Assigned To</a></th>
                <th><a href="#" onclick="Joomla.tableOrdering('created_by','asc','');return false;" class="hasPopover" title="" data-content="Select to sort by this column" data-placement="top" data-original-title="Created By">Created By</a></th>
                <th class="hidden-phone"><a href="#" onclick="Joomla.tableOrdering('priority','asc','');return false;" class="hasPopover" title="" data-content="Select to sort by this column" data-placement="top" data-original-title="Priority">Priority</a></th>
				<th class="hidden-phone"><a href="#" onclick="Joomla.tableOrdering('priority','asc','');return false;" class="hasPopover" title="" data-content="Select to sort by this column" data-placement="top" data-original-title="Status">Status</a></th>
				<th class="hidden-phone">Discussions</th>
            </tr>
        </thead>
            <tbody><tr class="row0">
            <td align="center" class="hidden-phone">1</td>
            
            <td><input type="checkbox" id="cb0" name="cid[]" value="49" onclick="Joomla.isChecked(this.checked);"></td>
            
            <td>
                        	<a href="/vbizz-dashboard/ptask?task=edit&amp;cid[0]=49&amp;projectid=50">dsfsefsef</a>
                        </td>
            
            <td class="hidden-phone">23-10-2019</td>
            
            <td>Test Employee</td>
            
            <td class="hidden-phone">Test Owner</td>
            
            <td class="hidden-phone">low</td>
			 <td class="hidden-phone">Ongoing</td>
            <td class="hidden-phone">			<a class="btn btn-small" href="/vbizz-dashboard/ptask?task=details&amp;cid[0]=49&amp;projectid=50">Discuss</a>
			</td> 
        
        </tr>
            <tr class="row1">
            <td align="center" class="hidden-phone">2</td>
            
            <td><input type="checkbox" id="cb1" name="cid[]" value="48" onclick="Joomla.isChecked(this.checked);"></td>
            
            <td>
                        	<a href="/vbizz-dashboard/ptask?task=edit&amp;cid[0]=48&amp;projectid=49">tytyt</a>
                        </td>
            
            <td class="hidden-phone">29-09-2019</td>
            
            <td>firmanpd</td>
            
            <td class="hidden-phone">Test Owner</td>
            
            <td class="hidden-phone">high</td>
			 <td class="hidden-phone"><span class="warning_task">Ongoing</span></td>
            <td class="hidden-phone">			<a class="btn btn-small" href="/vbizz-dashboard/ptask?task=details&amp;cid[0]=48&amp;projectid=49">Discuss</a>
			</td> 
        
        </tr>
            <tr class="row0">
            <td align="center" class="hidden-phone">3</td>
            
            <td><input type="checkbox" id="cb2" name="cid[]" value="47" onclick="Joomla.isChecked(this.checked);"></td>
            
            <td>
                        	<a href="/vbizz-dashboard/ptask?task=edit&amp;cid[0]=47&amp;projectid=44">database create</a>
                        </td>
            
            <td class="hidden-phone">30-08-2019</td>
            
            <td>Test Employee</td>
            
            <td class="hidden-phone">Test Owner</td>
            
            <td class="hidden-phone">low</td>
			 <td class="hidden-phone">Complete</td>
            <td class="hidden-phone">			<a class="btn btn-small" href="/vbizz-dashboard/ptask?task=details&amp;cid[0]=47&amp;projectid=44">Discuss</a>
			</td> 
        
        </tr>
            <tr class="row1">
            <td align="center" class="hidden-phone">4</td>
            
            <td><input type="checkbox" id="cb3" name="cid[]" value="46" onclick="Joomla.isChecked(this.checked);"></td>
            
            <td>
                        	<a href="/vbizz-dashboard/ptask?task=edit&amp;cid[0]=46&amp;projectid=37">sd sdf sefe</a>
                        </td>
            
            <td class="hidden-phone">19-08-2019</td>
            
            <td></td>
            
            <td class="hidden-phone">Test Owner</td>
            
            <td class="hidden-phone">high</td>
			 <td class="hidden-phone"><span class="warning_task">Ongoing</span></td>
            <td class="hidden-phone">			<a class="btn btn-small" href="/vbizz-dashboard/ptask?task=details&amp;cid[0]=46&amp;projectid=37">Discuss</a>
			</td> 
        
        </tr>
            <tr class="row0">
            <td align="center" class="hidden-phone">5</td>
            
            <td><input type="checkbox" id="cb4" name="cid[]" value="45" onclick="Joomla.isChecked(this.checked);"></td>
            
            <td>
                        	<a href="/vbizz-dashboard/ptask?task=edit&amp;cid[0]=45&amp;projectid=43">Charge credit card</a>
                        </td>
            
            <td class="hidden-phone">13-08-2019</td>
            
            <td>firmanpd</td>
            
            <td class="hidden-phone">Test Owner</td>
            
            <td class="hidden-phone">normal</td>
			 <td class="hidden-phone"><span class="warning_task">Ongoing</span></td>
            <td class="hidden-phone">			<a class="btn btn-small" href="/vbizz-dashboard/ptask?task=details&amp;cid[0]=45&amp;projectid=43">Discuss</a>
			</td> 
        
        </tr>
            <tr class="row1">
            <td align="center" class="hidden-phone">6</td>
            
            <td><input type="checkbox" id="cb5" name="cid[]" value="44" onclick="Joomla.isChecked(this.checked);"></td>
            
            <td>
                        	<a href="/vbizz-dashboard/ptask?task=edit&amp;cid[0]=44&amp;projectid=41">fsgsdfdsfsd</a>
                        </td>
            
            <td class="hidden-phone">28-08-2019</td>
            
            <td></td>
            
            <td class="hidden-phone">Test Owner</td>
            
            <td class="hidden-phone">normal</td>
			 <td class="hidden-phone"><span class="warning_task">Ongoing</span></td>
            <td class="hidden-phone">			<a class="btn btn-small" href="/vbizz-dashboard/ptask?task=details&amp;cid[0]=44&amp;projectid=41">Discuss</a>
			</td> 
        
        </tr>
            <tr class="row0">
            <td align="center" class="hidden-phone">7</td>
            
            <td><input type="checkbox" id="cb6" name="cid[]" value="43" onclick="Joomla.isChecked(this.checked);"></td>
            
            <td>
                        	<a href="/vbizz-dashboard/ptask?task=edit&amp;cid[0]=43&amp;projectid=36">finishing</a>
                        </td>
            
            <td class="hidden-phone">02-07-2019</td>
            
            <td>firmanpd</td>
            
            <td class="hidden-phone">Test Owner</td>
            
            <td class="hidden-phone">high</td>
			 <td class="hidden-phone"><span class="warning_task">Ongoing</span></td>
            <td class="hidden-phone">			<a class="btn btn-small" href="/vbizz-dashboard/ptask?task=details&amp;cid[0]=43&amp;projectid=36">Discuss</a>
			</td> 
        
        </tr>
            <tr class="row1">
            <td align="center" class="hidden-phone">8</td>
            
            <td><input type="checkbox" id="cb7" name="cid[]" value="42" onclick="Joomla.isChecked(this.checked);"></td>
            
            <td>
                        	<a href="/vbizz-dashboard/ptask?task=edit&amp;cid[0]=42&amp;projectid=35">Comprar Materiales</a>
                        </td>
            
            <td class="hidden-phone">17-07-2019</td>
            
            <td>Test Employee</td>
            
            <td class="hidden-phone">Test Owner</td>
            
            <td class="hidden-phone">normal</td>
			 <td class="hidden-phone"><span class="warning_task">Ongoing</span></td>
            <td class="hidden-phone">			<a class="btn btn-small" href="/vbizz-dashboard/ptask?task=details&amp;cid[0]=42&amp;projectid=35">Discuss</a>
			</td> 
        
        </tr>
            <tr class="row0">
            <td align="center" class="hidden-phone">9</td>
            
            <td><input type="checkbox" id="cb8" name="cid[]" value="41" onclick="Joomla.isChecked(this.checked);"></td>
            
            <td>
                        	<a href="/vbizz-dashboard/ptask?task=edit&amp;cid[0]=41&amp;projectid=34">Inicio</a>
                        </td>
            
            <td class="hidden-phone">17-07-2019</td>
            
            <td>test</td>
            
            <td class="hidden-phone">Test Owner</td>
            
            <td class="hidden-phone">normal</td>
			 <td class="hidden-phone"><span class="warning_task">Ongoing</span></td>
            <td class="hidden-phone">			<a class="btn btn-small" href="/vbizz-dashboard/ptask?task=details&amp;cid[0]=41&amp;projectid=34">Discuss</a>
			</td> 
        
        </tr>
            <tr class="row1">
            <td align="center" class="hidden-phone">10</td>
            
            <td><input type="checkbox" id="cb9" name="cid[]" value="40" onclick="Joomla.isChecked(this.checked);"></td>
            
            <td>
                        	<a href="/vbizz-dashboard/ptask?task=edit&amp;cid[0]=40&amp;projectid=32">WRTHSJDK</a>
                        </td>
            
            <td class="hidden-phone">02-07-2019</td>
            
            <td>test</td>
            
            <td class="hidden-phone">Test Owner</td>
            
            <td class="hidden-phone">high</td>
			 <td class="hidden-phone"><span class="warning_task">Ongoing</span></td>
            <td class="hidden-phone">			<a class="btn btn-small" href="/vbizz-dashboard/ptask?task=details&amp;cid[0]=40&amp;projectid=32">Discuss</a>
			</td> 
        
        </tr>
            <tr class="row0">
            <td align="center" class="hidden-phone">11</td>
            
            <td><input type="checkbox" id="cb10" name="cid[]" value="39" onclick="Joomla.isChecked(this.checked);"></td>
            
            <td>
                        	<a href="/vbizz-dashboard/ptask?task=edit&amp;cid[0]=39&amp;projectid=31">dfgshjgj,</a>
                        </td>
            
            <td class="hidden-phone">03-07-2019</td>
            
            <td>test</td>
            
            <td class="hidden-phone">Test Owner</td>
            
            <td class="hidden-phone">low</td>
			 <td class="hidden-phone"><span class="warning_task">Ongoing</span></td>
            <td class="hidden-phone">			<a class="btn btn-small" href="/vbizz-dashboard/ptask?task=details&amp;cid[0]=39&amp;projectid=31">Discuss</a>
			</td> 
        
        </tr>
            <tr class="row1">
            <td align="center" class="hidden-phone">12</td>
            
            <td><input type="checkbox" id="cb11" name="cid[]" value="38" onclick="Joomla.isChecked(this.checked);"></td>
            
            <td>
                        	<a href="/vbizz-dashboard/ptask?task=edit&amp;cid[0]=38&amp;projectid=17">where is attchemnets
</a>
                        </td>
            
            <td class="hidden-phone">25-06-2019</td>
            
            <td>Test Employee</td>
            
            <td class="hidden-phone">Test Owner</td>
            
            <td class="hidden-phone">low</td>
			 <td class="hidden-phone"><span class="warning_task">Ongoing</span></td>
            <td class="hidden-phone">			<a class="btn btn-small" href="/vbizz-dashboard/ptask?task=details&amp;cid[0]=38&amp;projectid=17">Discuss</a>
			</td> 
        
        </tr>
            <tr class="row0">
            <td align="center" class="hidden-phone">13</td>
            
            <td><input type="checkbox" id="cb12" name="cid[]" value="37" onclick="Joomla.isChecked(this.checked);"></td>
            
            <td>
                        	<a href="/vbizz-dashboard/ptask?task=edit&amp;cid[0]=37&amp;projectid=29">haha</a>
                        </td>
            
            <td class="hidden-phone">25-06-2019</td>
            
            <td>firmanpd</td>
            
            <td class="hidden-phone">Test Owner</td>
            
            <td class="hidden-phone">high</td>
			 <td class="hidden-phone">Complete</td>
            <td class="hidden-phone">			<a class="btn btn-small" href="/vbizz-dashboard/ptask?task=details&amp;cid[0]=37&amp;projectid=29">Discuss</a>
			</td> 
        
        </tr>
            <tr class="row1">
            <td align="center" class="hidden-phone">14</td>
            
            <td><input type="checkbox" id="cb13" name="cid[]" value="36" onclick="Joomla.isChecked(this.checked);"></td>
            
            <td>
                        	<a href="/vbizz-dashboard/ptask?task=edit&amp;cid[0]=36&amp;projectid=16">hjgcvjkvkj</a>
                        </td>
            
            <td class="hidden-phone">02-07-2019</td>
            
            <td>Test Employee</td>
            
            <td class="hidden-phone">Test Owner</td>
            
            <td class="hidden-phone">high</td>
			 <td class="hidden-phone"><span class="warning_task">Ongoing</span></td>
            <td class="hidden-phone">			<a class="btn btn-small" href="/vbizz-dashboard/ptask?task=details&amp;cid[0]=36&amp;projectid=16">Discuss</a>
			</td> 
        
        </tr>
            <tr class="row0">
            <td align="center" class="hidden-phone">15</td>
            
            <td><input type="checkbox" id="cb14" name="cid[]" value="35" onclick="Joomla.isChecked(this.checked);"></td>
            
            <td>
                        	<a href="/vbizz-dashboard/ptask?task=edit&amp;cid[0]=35&amp;projectid=23">testowner</a>
                        </td>
            
            <td class="hidden-phone">20-06-2019</td>
            
            <td>Test Employee</td>
            
            <td class="hidden-phone">Test Owner</td>
            
            <td class="hidden-phone">high</td>
			 <td class="hidden-phone"><span class="warning_task">Ongoing</span></td>
            <td class="hidden-phone">			<a class="btn btn-small" href="/vbizz-dashboard/ptask?task=details&amp;cid[0]=35&amp;projectid=23">Discuss</a>
			</td> 
        
        </tr>
            <tr class="row1">
            <td align="center" class="hidden-phone">16</td>
            
            <td><input type="checkbox" id="cb15" name="cid[]" value="34" onclick="Joomla.isChecked(this.checked);"></td>
            
            <td>
                        	<a href="/vbizz-dashboard/ptask?task=edit&amp;cid[0]=34&amp;projectid=27">REFERES</a>
                        </td>
            
            <td class="hidden-phone">14-11-2019</td>
            
            <td>Test Employee</td>
            
            <td class="hidden-phone">Test Owner</td>
            
            <td class="hidden-phone">high</td>
			 <td class="hidden-phone">Complete</td>
            <td class="hidden-phone">			<a class="btn btn-small" href="/vbizz-dashboard/ptask?task=details&amp;cid[0]=34&amp;projectid=27">Discuss</a>
			</td> 
        
        </tr>
            <tr class="row0">
            <td align="center" class="hidden-phone">17</td>
            
            <td><input type="checkbox" id="cb16" name="cid[]" value="33" onclick="Joomla.isChecked(this.checked);"></td>
            
            <td>
                        	<a href="/vbizz-dashboard/ptask?task=edit&amp;cid[0]=33&amp;projectid=26">fasdf sdf sd dsfg </a>
                        </td>
            
            <td class="hidden-phone">01-05-2020</td>
            
            <td>Test Employee</td>
            
            <td class="hidden-phone">Test Owner</td>
            
            <td class="hidden-phone">high</td>
			 <td class="hidden-phone">Ongoing</td>
            <td class="hidden-phone">			<a class="btn btn-small" href="/vbizz-dashboard/ptask?task=details&amp;cid[0]=33&amp;projectid=26">Discuss</a>
			</td> 
        
        </tr>
            <tr class="row1">
            <td align="center" class="hidden-phone">18</td>
            
            <td><input type="checkbox" id="cb17" name="cid[]" value="32" onclick="Joomla.isChecked(this.checked);"></td>
            
            <td>
                        	<a href="/vbizz-dashboard/ptask?task=edit&amp;cid[0]=32&amp;projectid=16">xvbxczvxcz</a>
                        </td>
            
            <td class="hidden-phone">10-04-2019</td>
            
            <td>Test Employee</td>
            
            <td class="hidden-phone">Test Owner</td>
            
            <td class="hidden-phone">low</td>
			 <td class="hidden-phone"><span class="warning_task">Ongoing</span></td>
            <td class="hidden-phone">			<a class="btn btn-small" href="/vbizz-dashboard/ptask?task=details&amp;cid[0]=32&amp;projectid=16">Discuss</a>
			</td> 
        
        </tr>
            <tr class="row0">
            <td align="center" class="hidden-phone">19</td>
            
            <td><input type="checkbox" id="cb18" name="cid[]" value="31" onclick="Joomla.isChecked(this.checked);"></td>
            
            <td>
                        	<a href="/vbizz-dashboard/ptask?task=edit&amp;cid[0]=31&amp;projectid=24">ewewew</a>
                        </td>
            
            <td class="hidden-phone">25-04-2019</td>
            
            <td>Test Employee</td>
            
            <td class="hidden-phone">Test Owner</td>
            
            <td class="hidden-phone">low</td>
			 <td class="hidden-phone"><span class="warning_task">Ongoing</span></td>
            <td class="hidden-phone">			<a class="btn btn-small" href="/vbizz-dashboard/ptask?task=details&amp;cid[0]=31&amp;projectid=24">Discuss</a>
			</td> 
        
        </tr>
            <tr class="row1">
            <td align="center" class="hidden-phone">20</td>
            
            <td><input type="checkbox" id="cb19" name="cid[]" value="30" onclick="Joomla.isChecked(this.checked);"></td>
            
            <td>
                        	<a href="/vbizz-dashboard/ptask?task=edit&amp;cid[0]=30&amp;projectid=19">ewew</a>
                        </td>
            
            <td class="hidden-phone">30-04-2019</td>
            
            <td>test</td>
            
            <td class="hidden-phone">Test Owner</td>
            
            <td class="hidden-phone">low</td>
			 <td class="hidden-phone"><span class="warning_task">Ongoing</span></td>
            <td class="hidden-phone">			<a class="btn btn-small" href="/vbizz-dashboard/ptask?task=details&amp;cid[0]=30&amp;projectid=19">Discuss</a>
			</td> 
        
        </tr>
            </tbody><tfoot>
            <tr>
                <td colspan="9">
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
		<a class="" href="#" onclick="document.adminForm.limitstart.value=40; Joomla.submitform();return false;">
			3		</a>
	</li>
							<li>
		<a class="hasTooltip" title="" href="#" onclick="document.adminForm.limitstart.value=20; Joomla.submitform();return false;" data-original-title="Next">
			<span class="fa fa-step-forward icon-next"></span>		</a>
	</li>
	<li>
		<a class="hasTooltip" title="" href="#" onclick="document.adminForm.limitstart.value=40; Joomla.submitform();return false;" data-original-title="End">
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
<input type="hidden" name="view" value="ptask">
<input type="hidden" name="filter_order" value="id">
<input type="hidden" name="filter_order_Dir" value="desc">
</form>
</div>
@endsection

@section('script')

@endsection