@extends('layouts.app')

@section('content')
<div id="vbizz">

    <header class="header">
        <div class="container-title">
            <h1 class="page-title">Transactions</h1>
        </div>
    </header>
    <div class="content_part">
    <form action="/vbizz-dashboard/tran" method="post" name="adminForm" id="adminForm">
    
    
    <div class="subhead">
        <div class="container-fluid">
            <div id="container-collapse" class="container-collapse"></div>
            <div class="row-fluid">
                <div class="span12">
                    <div id="toolbar" class="btn-toolbar">
                        <div class="btn-wrapper" id="toolbar-new">
                            <span  class="btn btn-small btn-success">
                            <span class="fa fa-plus"></span> <a href="{{route('transactions.create')}}">New</a></span>
                        </div>
                                                 
                                                    <div class="btn-wrapper" id="toolbar-edit">
                                <span onclick="if (document.adminForm.boxchecked.value==0){alert('Please first make a selection from the list');}else{ Joomla.submitbutton('edit')}" class="btn btn-small">
                                <span class="fa fa-edit"></span> Edit</span>
                            </div>
                                                
                                                    <div class="btn-wrapper" id="toolbar-delete">
                            <span onclick="if (document.adminForm.boxchecked.value==0){alert('Please first make a selection from the list');}else{ Joomla.submitbutton('remove')}" class="btn btn-small">
                            <span class="fa fa-remove"></span> Delete</span>
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
                <th><a href="#" onclick="Joomla.tableOrdering('a.title','asc','');return false;" class="hasPopover" title="" data-content="Select to sort by this column" data-placement="top" data-original-title="Title">Title</a></th>
                <th class="hidden-phone"><a href="#" onclick="Joomla.tableOrdering('a.budget','asc','');return false;" class="hasPopover" title="" data-content="Select to sort by this column" data-placement="top" data-original-title="Budget">Budget</a></th>
                <th>Cost</th>
            </tr>
        </thead>
                <tbody><tr class="row0">
                <td align="center" class="hidden-phone">1</td>
                
                <td><input type="checkbox" id="cb0" name="cid[]" value="286" onclick="Joomla.isChecked(this.checked);"></td>
                
                <td>
                                        <a href="/vbizz-dashboard/tran?task=edit&amp;cid[0]=286">For Sale</a>
                                </td>
                
                <td class="hidden-phone">0.00</td>
                
                <td>1877038.1</td>
                
            </tr>
                    <tr class="row1">
                <td align="center" class="hidden-phone">2</td>
                
                <td><input type="checkbox" id="cb1" name="cid[]" value="346" onclick="Joomla.isChecked(this.checked);"></td>
                
                <td>
                                        <a href="/vbizz-dashboard/tran?task=edit&amp;cid[0]=346">Rent</a>
                                </td>
                
                <td class="hidden-phone">0.00</td>
                
                <td>330</td>
                
            </tr>
                    <tr class="row0">
                <td align="center" class="hidden-phone">3</td>
                
                <td><input type="checkbox" id="cb2" name="cid[]" value="347" onclick="Joomla.isChecked(this.checked);"></td>
                
                <td>
                                        <a href="/vbizz-dashboard/tran?task=edit&amp;cid[0]=347">Asset</a>
                                </td>
                
                <td class="hidden-phone">0.00</td>
                
                <td>9064</td>
                
            </tr>
                </tbody><tfoot>
        <tr>
          <td colspan="6">
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
    <input type="hidden" name="view" value="tran">
    <input type="hidden" name="boxchecked" value="0">
    <input type="hidden" name="filter_order" value="id">
    <input type="hidden" name="filter_order_Dir" value="desc">
    </form>
    </div>
    </div>
@endsection

@section('script')
<script type="text/javascript">

</script>
@endsection