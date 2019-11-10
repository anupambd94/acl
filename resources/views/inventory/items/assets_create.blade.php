@extends('layouts.app')

@section('content')
<header class="header">
	<div class="container-title">
		<h1 class="page-title">Asset (New)</h1>
	</div>
</header>
<div class="content_part">
    <form action="/vbizz-dashboard/assets" method="post" name="adminForm" id="adminForm">
    
    <div class="row-fluid">
        <div class="span12">
            <div class="btn-toolbar" id="toolbar">
                        <div class="btn-wrapper" id="toolbar-apply">
                    <span onclick="Joomla.submitbutton('apply')" class="btn btn-small btn-success">
                    <span class="fa fa-check"></span> Save</span>
                </div>
                <div class="btn-wrapper" id="toolbar-save">
                    <span onclick="Joomla.submitbutton('save')" class="btn btn-small">
                    <span class="fa fa-check"></span> Save &amp; Close</span>
                </div>
                <div class="btn-wrapper" id="toolbar-save-new">
                    <span onclick="Joomla.submitbutton('saveNew')" class="btn btn-small">
                    <span class="fa fa-plus"></span> Save &amp; New</span>
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
            <li>An Asset is anything of economic value owned by an individual or corporation, especially which could be converted to cash.</li>
        </ul>
    </fieldset>
    </div>
    
    
    <div class="col100">
    <fieldset class="adminform">
    <legend>Add New Record</legend>
    <table class="adminform table table-striped">
        <tbody>
            <tr>
                <th width="200"><label class="hasTip" title="">
                    Title<span style="color:Red;">*  </span></label></th>
                <td><input class="text_area" type="text" name="title" id="title" value=""></td>
            </tr>
            
            <tr>
                <th><label class="hasTip" title="">
                Transaction Date<span style="color:Red;">*  </span></label></th>
                <td><div class="field-calendar">
            <div class="input-append">
                    <input type="text" id="tdate" name="tdate" value="" data-alt-value="" autocomplete="off">
            <button type="button" class="btn btn-secondary" id="tdate_btn" data-inputfield="tdate" data-dayformat="%Y-%m-%d" data-button="tdate_btn" data-firstday="0" data-weekend="0,6" data-today-btn="1" data-week-numbers="1" data-show-time="0" data-show-others="1" data-time-24="24" data-only-months-nav="0" title="Open the calendar"><span class="icon-calendar" aria-hidden="true"></span></button>
                </div>
    <div class="js-calendar" style="direction: ltr; position: absolute; box-shadow: rgba(0, 0, 0, 0.67) 0px 0px 70px 0px; min-width: 0px; padding: 0px; display: none; left: auto; top: auto; z-index: 1060; border-radius: 20px;"><div class="calendar-container"><table class="table" cellspacing="0" cellpadding="0" style="margin-bottom: 0px; visibility: visible;"><thead class="calendar-header"><tr class="calendar-head-row"><td colspan="1" class=" nav" style="text-align: center; font-size: 18px; line-height: 18px;"><a class="js-btn btn-prev-year" style="display:inline;padding:2px 6px;cursor:pointer;text-decoration:none;" unselectable="on">‹</a></td><td colspan="6" class="title"><div unselectable="on"><div style="text-align:center;font-size:18px"><span>2019</span></div></div></td><td colspan="1" class=" nav" style="text-align: center; font-size: 18px; line-height: 18px;"><a class="js-btn btn-next-year" style="display:inline;padding:2px 6px;cursor:pointer;text-decoration:none;" unselectable="on"> ›</a></td></tr><tr class="calendar-head-row"><td colspan="1" class=" nav" style="text-align: center; font-size: 2em; line-height: 1em;"><a class="js-btn btn-prev-month" style="display:inline;padding:2px 6px;cursor:pointer;text-decoration:none;" unselectable="on">‹</a></td><td colspan="6" class="title" style="text-align: center;"><div unselectable="on"><div style="text-align:center;font-size:1.2em"><span>November</span></div></div></td><td colspan="1" class=" nav" style="text-align: center; font-size: 2em; line-height: 1em;"><a class="js-btn btn-next-month" style="display:inline;padding:2px 6px;cursor:pointer;text-decoration:none;" unselectable="on"> ›</a></td></tr><tr class="daynames wk"><td class="day-name wn">wk</td><td class="day-name day-name-week">Sun</td><td class="day-name day-name-week">Mon</td><td class="day-name day-name-week">Tue</td><td class="day-name day-name-week">Wed</td><td class="day-name day-name-week">Thu</td><td class="day-name day-name-week">Fri</td><td class="day-name day-name-week">Sat</td></tr></thead><tbody><tr class="daysrow wk"><td class="day wn">43</td><td class="day disabled othermonth  weekend" style="text-align: center;">27</td><td class="day disabled othermonth " style="text-align: center;">28</td><td class="day disabled othermonth " style="text-align: center;">29</td><td class="day disabled othermonth " style="text-align: center;">30</td><td class="day disabled othermonth " style="text-align: center;">31</td><td class="day" style="text-align: center; cursor: pointer;">1</td><td class="day weekend" style="text-align: center; cursor: pointer;">2</td></tr><tr class="daysrow wk"><td class="day wn">44</td><td class="day weekend" style="text-align: center; cursor: pointer;">3</td><td class="day" style="text-align: center; cursor: pointer;">4</td><td class="day" style="text-align: center; cursor: pointer;">5</td><td class="day" style="text-align: center; cursor: pointer;">6</td><td class="day" style="text-align: center; cursor: pointer;">7</td><td class="day" style="text-align: center; cursor: pointer;">8</td><td class="day weekend" style="text-align: center; cursor: pointer;">9</td></tr><tr class="daysrow wk"><td class="day wn">45</td><td class="day selected today weekend" style="text-align: center; cursor: pointer;">10</td><td class="day" style="text-align: center; cursor: pointer;">11</td><td class="day" style="text-align: center; cursor: pointer;">12</td><td class="day" style="text-align: center; cursor: pointer;">13</td><td class="day" style="text-align: center; cursor: pointer;">14</td><td class="day" style="text-align: center; cursor: pointer;">15</td><td class="day weekend" style="text-align: center; cursor: pointer;">16</td></tr><tr class="daysrow wk"><td class="day wn">46</td><td class="day weekend" style="text-align: center; cursor: pointer;">17</td><td class="day" style="text-align: center; cursor: pointer;">18</td><td class="day" style="text-align: center; cursor: pointer;">19</td><td class="day" style="text-align: center; cursor: pointer;">20</td><td class="day" style="text-align: center; cursor: pointer;">21</td><td class="day" style="text-align: center; cursor: pointer;">22</td><td class="day weekend" style="text-align: center; cursor: pointer;">23</td></tr><tr class="daysrow wk"><td class="day wn">47</td><td class="day weekend" style="text-align: center; cursor: pointer;">24</td><td class="day" style="text-align: center; cursor: pointer;">25</td><td class="day" style="text-align: center; cursor: pointer;">26</td><td class="day" style="text-align: center; cursor: pointer;">27</td><td class="day" style="text-align: center; cursor: pointer;">28</td><td class="day" style="text-align: center; cursor: pointer;">29</td><td class="day weekend" style="text-align: center; cursor: pointer;">30</td></tr><tr class="daysrow wk"><td class="day wn">48</td><td class="day disabled othermonth  weekend" style="text-align: center;">1</td><td class="day disabled othermonth " style="text-align: center;">2</td><td class="day disabled othermonth " style="text-align: center;">3</td><td class="day disabled othermonth " style="text-align: center;">4</td><td class="day disabled othermonth " style="text-align: center;">5</td><td class="day disabled othermonth " style="text-align: center;">6</td><td class="day disabled othermonth  weekend" style="text-align: center;">7</td></tr></tbody></table><div class="buttons-wrapper btn-group"><button type="button" data-action="clear" class="js-btn btn btn-clear">Clear</button><button type="button" data-action="today" class="js-btn btn btn-today">Today</button><button type="button" data-action="exit" class="js-btn btn btn-exit">Close</button></div></div></div></div>
    </td>
            </tr>
            
            <tr>
                <th><label class="hasTip" title="">
                Quantity<span style="color:Red;">*  </span></label></th>
                <td><input class="text_area" type="text" name="quantity" id="quantity" value=""></td>
            </tr>
            
            <tr>
                <th><label class="hasTip" title="">
                    Actual Amount<span style="color:Red;">*  </span>			</label></th>
                <td><input class="text_area" type="text" name="actual_amount" id="actual_amount" value=""> R$</td>
            </tr>
            
                
            
            <tr>
                <th><label class="hasTip" title="">Amount Status</label></th>
                <td>
                    <select name="status" style="">
                    <option value="">Select Amount Status</option>
                    <option value="1">Paid</option>
                    <option value="0" selected="selected">Unpaid</option>
                    </select>
                    {{-- <div class="chzn-container chzn-container-single chzn-container-single-nosearch" style="width: 165px;" title=""><a class="chzn-single"><span>Unpaid</span><div><b></b></div></a><div class="chzn-drop"><div class="chzn-search"><input type="text" autocomplete="off" readonly=""></div><ul class="chzn-results"></ul></div></div> --}}
                </td>
            </tr>
            
            <tr>
            <th><label class="hasTip" title="">
            Transaction<span style="color:Red;">*  </span></label></th>
            <td>
            <select name="tid" id="tid" style="">
            <option value="">Select Transaction</option>
                    <option value="286"> For Sale </option>
                    <option value="347"> Asset </option>
                    <option value="346"> Rent </option>
                    </select>
                    {{-- <div class="chzn-container chzn-container-single chzn-container-single-nosearch" style="width: 146px;" title="" id="tid_chzn"><a class="chzn-single"><span>Select Transaction</span><div><b></b></div></a><div class="chzn-drop"><div class="chzn-search"><input type="text" autocomplete="off" readonly=""></div><ul class="chzn-results"></ul></div></div></td>   --}}
            </tr>
            
            <tr>
                <th><label class="hasTip" title="">
                Transaction Mode<span style="color:Red;">*  </span></label></th>
                <td>
                    <select name="mid" id="mid" style="">
                    <option value="">Select Transaction Mode</option>
                                    <option value="11"> Bank Transfer </option>
                                    <option value="21"> Cash </option>
                                    <option value="20"> CHEQUE </option>
                                    <option value="19"> Invoice Template </option>
                                    <option value="18"> Online </option>
                                    </select>
                                    {{-- <div class="chzn-container chzn-container-single chzn-container-single-nosearch" style="width: 183px;" title="" id="mid_chzn"><a class="chzn-single"><span>Select Transaction Mode</span><div><b></b></div></a><div class="chzn-drop"><div class="chzn-search"><input type="text" autocomplete="off" readonly=""></div><ul class="chzn-results"></ul></div></div> --}}
                </td>
            </tr>
            
                    <tr>
                <th><label class="hasTip" title="">Select Account</label></th>
                <td>
                    <select name="account_id" id="account_id" style="">
                    <option value="">Select Account</option>
                                    <option value="4"> ICICI </option>
                                    <option value="5"> SBI </option>
                                    <option value="6"> Cash </option>
                                    <option value="7"> sdfghj </option>
                                    <option value="8"> BP </option>
                                    </select>
                                    {{-- <div class="chzn-container chzn-container-single chzn-container-single-nosearch" style="width: 125px;" title="" id="account_id_chzn"><a class="chzn-single"><span>Select Account</span><div><b></b></div></a><div class="chzn-drop"><div class="chzn-search"><input type="text" autocomplete="off" readonly=""></div><ul class="chzn-results"></ul></div></div> --}}
                </td>
            </tr>
                    
            <tr>
                <th> <label class="hasTip" title="">Transaction Id</label></th>
                <td><input class="text_area" type="text" name="tranid" id="tranid" value=""></td>
            </tr>
            
                    <tr>
                <th><label class="hasTip" title="">Vendor</label></th>
                <td class="sel_customer"><input id="vend" type="text" readonly="" value="Select Vendor">
                <a class="btn btn-primary modal" id="modal" rel="{handler: 'iframe', size: {x: 800, y: 500}}" href="http://vbizz.joomlawings.com/index.php?option=com_vbizz&amp;view=vendor&amp;layout=modal&amp;tmpl=component" title="Select Vendor">
                <i class="fa fa-user hasTip" title=""></i>
                </a>
                </td>
                <input id="vid" type="hidden" value="" name="vid">
            </tr>
                    
            <tr>
                <th><label class="hasTip" title="">Comments</label></th>
                <td><textarea class="text_area" name="comments" id="comment" rows="4" cols="50"></textarea></td>
            </tr>
                    
            <tr>
                <th><label class="hasTip" title="">Reciept Upload</label></th>
                <td><input type="file" name="reciept" id="reciept" class="inputbox required" size="50" value="">
                    <a target="_blank" href="/components/com_vbizz/uploads/reciept/"></a>
                </td> 
            </tr>
            
        </tbody>
    </table>
    </fieldset>
    </div>
    <div class="clr"></div>
    <input type="hidden" name="option" value="com_vbizz">
    <input type="hidden" name="id" value="">
    <input type="hidden" name="expenseid" value="">
    <input type="hidden" name="task" value="">
    <input type="hidden" name="view" value="assets">
    </form>
    </div>
@endsection

@section('script')

@endsection