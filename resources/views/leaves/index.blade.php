@extends('layouts.app')

@section('content')
<header class="header">
	<div class="container-title">
		<h1 class="page-title">Leave Type</h1>
	</div>
</header>
<div class="content_part">
    <form action="/vbizz-dashboard/leaves" method="post" name="adminForm" id="adminForm">
    
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
    <div class="filet_left filter_block-a">
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
                    <th><a href="#" onclick="Joomla.tableOrdering('leave_type','asc','');return false;" class="hasPopover" title="" data-content="Select to sort by this column" data-placement="top" data-original-title="Leave Type">Leave Type</a></th>
                    <th><a href="#" onclick="Joomla.tableOrdering('leave_number','asc','');return false;" class="hasPopover" title="" data-content="Select to sort by this column" data-placement="top" data-original-title="Number Of Leaves">Number Of Leaves</a></th>
                    <th width="10" class="hidden-phone"><a href="#" onclick="Joomla.tableOrdering('id','asc','');return false;" class="hasPopover" title="" data-content="Select to sort by this column" data-placement="top" data-original-title="Id">Id<span class="icon-arrow-down-3"></span></a></th>
                </tr>
            </thead>
                        <tbody><tr class="row0">
                
                    <td align="center" class="hidden-phone">1</td>
                    
                    <td><input type="checkbox" id="cb0" name="cid[]" value="7" onclick="Joomla.isChecked(this.checked);"></td>
                    
                    
                    <td align="center">
                                                <a href="/vbizz-dashboard/leaves?task=edit&amp;cid[0]=7">Положенный отпуск</a>
                                        </td>
                    
                    <td class="lev_nmbr">24</td>
                                    
                    <td align="center" class="hidden-phone">7</td>
                   
                </tr>
               
                    
                            <tr class="row1">
                
                    <td align="center" class="hidden-phone">2</td>
                    
                    <td><input type="checkbox" id="cb1" name="cid[]" value="6" onclick="Joomla.isChecked(this.checked);"></td>
                    
                    
                    <td align="center">
                                                <a href="/vbizz-dashboard/leaves?task=edit&amp;cid[0]=6">Holiday</a>
                                        </td>
                    
                    <td class="lev_nmbr">2</td>
                                    
                    <td align="center" class="hidden-phone">6</td>
                   
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
    <input type="hidden" name="view" value="leaves">
    <input type="hidden" name="filter_order" value="id">
    <input type="hidden" name="filter_order_Dir" value="desc">
    </form>
    </div>
@endsection

@section('script')

@endsection