@extends('layouts.app')

@section('content')
<header class="header">
	<div class="container-title">
		<h1 class="page-title">Payheads</h1>
	</div>
</header>
<div class="content_part">
    <form action="/vbizz-dashboard/payheads" method="post" name="adminForm" id="adminForm">
    
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
                                                
                                                
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="adminlist filter">
    <div class="filet_left">
    <input type="text" name="search" id="search" placeholder="Search" value="" class="text_area">
    <button class="btn hasTooltip" title="Search" onclick="this.form.submit();"><i class="fa fa-search"></i></button>
    <button class="btn hasTooltip" title="Clear" onclick="document.getElementById('search').value='';this.form.submit();"><i class="fa fa-remove"></i></button>
    </div>
    </div>
    
    <div id="editcell">
        <table class="adminlist table">
            <thead>
                <tr>
                    <th width="10" class="hidden-phone">#</th>
                    <th width="10"><input type="checkbox" name="toggle" value="" onclick="Joomla.checkAll(this);"></th>
                    <th><a href="#" onclick="Joomla.tableOrdering('name','asc','');return false;" class="hasPopover" title="" data-content="Select to sort by this column" data-placement="top" data-original-title="Payhead Name">Payhead Name</a></th>
                    <!--<th><a href="#" onclick="Joomla.tableOrdering('name_in_slip','asc','');return false;" class="hasPopover" title="Name Appear In Pay Slip" data-content="Select to sort by this column" data-placement="top">Name Appear In Pay Slip</a></th>-->
                    <th><a href="#" onclick="Joomla.tableOrdering('payhead_type','asc','');return false;" class="hasPopover" title="" data-content="Select to sort by this column" data-placement="top" data-original-title="Payhead Type">Payhead Type</a></th>
                    <!--<th><a href="#" onclick="Joomla.tableOrdering('use_gratuity','asc','');return false;" class="hasPopover" title="Use Of Gratuity" data-content="Select to sort by this column" data-placement="top">Use Of Gratuity</a></th>
                    <th><a href="#" onclick="Joomla.tableOrdering('mandatory','asc','');return false;" class="hasPopover" title="Applicable" data-content="Select to sort by this column" data-placement="top">Applicable</a></th>-->
                </tr>
            </thead>
                        <tbody><tr class="row0">
                
                    <td align="center" class="hidden-phone">1</td>
                    
                    <td><input type="checkbox" id="cb0" name="cid[]" value="15" onclick="Joomla.isChecked(this.checked);"></td>
                    
                    
                    <td align="center">
                                                <a href="/vbizz-dashboard/payheads?task=edit&amp;cid[0]=15">Зарплата</a>
                                        </td>
                    
                    <!--<td align="center"></td>-->
                                    
                    <td align="center">Earnings</td>
                    
                    <!--<td align="center">No</td>
                    
                    <td align="center">Optional</td>-->
                   
                </tr>
               
                    
                            <tr class="row1">
                
                    <td align="center" class="hidden-phone">2</td>
                    
                    <td><input type="checkbox" id="cb1" name="cid[]" value="14" onclick="Joomla.isChecked(this.checked);"></td>
                    
                    
                    <td align="center">
                                                <a href="/vbizz-dashboard/payheads?task=edit&amp;cid[0]=14">CPF</a>
                                        </td>
                    
                    <!--<td align="center"></td>-->
                                    
                    <td align="center">Standard Deduction</td>
                    
                    <!--<td align="center">No</td>
                    
                    <td align="center">Optional</td>-->
                   
                </tr>
               
                    
                            <tr class="row0">
                
                    <td align="center" class="hidden-phone">3</td>
                    
                    <td><input type="checkbox" id="cb2" name="cid[]" value="13" onclick="Joomla.isChecked(this.checked);"></td>
                    
                    
                    <td align="center">
                                                <a href="/vbizz-dashboard/payheads?task=edit&amp;cid[0]=13">10</a>
                                        </td>
                    
                    <!--<td align="center"></td>-->
                                    
                    <td align="center">Standard Deduction</td>
                    
                    <!--<td align="center">No</td>
                    
                    <td align="center">Optional</td>-->
                   
                </tr>
               
                    
                            <tr class="row1">
                
                    <td align="center" class="hidden-phone">4</td>
                    
                    <td><input type="checkbox" id="cb3" name="cid[]" value="12" onclick="Joomla.isChecked(this.checked);"></td>
                    
                    
                    <td align="center">
                                                <a href="/vbizz-dashboard/payheads?task=edit&amp;cid[0]=12">Stejskal</a>
                                        </td>
                    
                    <!--<td align="center"></td>-->
                                    
                    <td align="center">Standard Deduction</td>
                    
                    <!--<td align="center">No</td>
                    
                    <td align="center">Optional</td>-->
                   
                </tr>
               
                    
                            <tr class="row0">
                
                    <td align="center" class="hidden-phone">5</td>
                    
                    <td><input type="checkbox" id="cb4" name="cid[]" value="11" onclick="Joomla.isChecked(this.checked);"></td>
                    
                    
                    <td align="center">
                                                <a href="/vbizz-dashboard/payheads?task=edit&amp;cid[0]=11">Provize</a>
                                        </td>
                    
                    <!--<td align="center"></td>-->
                                    
                    <td align="center">Earnings</td>
                    
                    <!--<td align="center">No</td>
                    
                    <td align="center">Optional</td>-->
                   
                </tr>
               
                    
                            <tr class="row1">
                
                    <td align="center" class="hidden-phone">6</td>
                    
                    <td><input type="checkbox" id="cb5" name="cid[]" value="10" onclick="Joomla.isChecked(this.checked);"></td>
                    
                    
                    <td align="center">
                                                <a href="/vbizz-dashboard/payheads?task=edit&amp;cid[0]=10">provize</a>
                                        </td>
                    
                    <!--<td align="center"></td>-->
                                    
                    <td align="center">Earnings</td>
                    
                    <!--<td align="center">No</td>
                    
                    <td align="center">Optional</td>-->
                   
                </tr>
               
                    
                            <tr class="row0">
                
                    <td align="center" class="hidden-phone">7</td>
                    
                    <td><input type="checkbox" id="cb6" name="cid[]" value="9" onclick="Joomla.isChecked(this.checked);"></td>
                    
                    
                    <td align="center">
                                                <a href="/vbizz-dashboard/payheads?task=edit&amp;cid[0]=9">Pagamento teste</a>
                                        </td>
                    
                    <!--<td align="center"></td>-->
                                    
                    <td align="center">Earnings</td>
                    
                    <!--<td align="center">No</td>
                    
                    <td align="center">Optional</td>-->
                   
                </tr>
               
                    
                            <tr class="row1">
                
                    <td align="center" class="hidden-phone">8</td>
                    
                    <td><input type="checkbox" id="cb7" name="cid[]" value="8" onclick="Joomla.isChecked(this.checked);"></td>
                    
                    
                    <td align="center">
                                                <a href="/vbizz-dashboard/payheads?task=edit&amp;cid[0]=8">Medical</a>
                                        </td>
                    
                    <!--<td align="center"></td>-->
                                    
                    <td align="center">Standard Deduction</td>
                    
                    <!--<td align="center">No</td>
                    
                    <td align="center">Optional</td>-->
                   
                </tr>
               
                    
                            <tr class="row0">
                
                    <td align="center" class="hidden-phone">9</td>
                    
                    <td><input type="checkbox" id="cb8" name="cid[]" value="7" onclick="Joomla.isChecked(this.checked);"></td>
                    
                    
                    <td align="center">
                                                <a href="/vbizz-dashboard/payheads?task=edit&amp;cid[0]=7">Test Payhead</a>
                                        </td>
                    
                    <!--<td align="center"></td>-->
                                    
                    <td align="center">Earnings</td>
                    
                    <!--<td align="center">No</td>
                    
                    <td align="center">Optional</td>-->
                   
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
    <input type="hidden" name="view" value="payheads">
    <input type="hidden" name="filter_order" value="id">
    <input type="hidden" name="filter_order_Dir" value="desc">
    </form>
    </div>
@endsection

@section('script')

@endsection