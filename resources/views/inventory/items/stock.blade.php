@extends('layouts.app')

@section('content')
<header class="header">
	<div class="container-title">
		<h1 class="page-title">Manage Stock</h1>
	</div>
</header>
<div class="content_part">
    <form action="/vbizz-dashboard/stock" method="post" name="adminForm" id="adminForm">
    
    
    <div class="subhead">
        <div class="container-fluid">
            <div id="container-collapse" class="container-collapse"></div>
            <div class="row-fluid">
                <div class="span12">
                    <div id="toolbar" class="btn-toolbar">
                        <div class="btn-wrapper" id="toolbar-new">
                            <span  class="btn btn-small btn-success">
                            <span class="fa fa-plus"></span> <a style="color:white;" href="{{route('items.stock.new')}}">New</a></span>
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
    <button class="btn hasTooltip" title="Clear" onclick="document.getElementById('search').value='';this.form.submit();
    document.getElementById('filter_type').value='';this.form.submit();"><i class="fa fa-remove"></i></button>
    </div>
    <div class="filter_right filter_block-b">
    
    <select id="filter_type" name="filter_type" class="inputbox" size="1" onchange="submitform( );" style="">
        <option value="" selected="selected">Select Product</option>
        <option value="28">vbizz</option>
        <option value="29">malaria kits</option>
        <option value="30">sukuma wiki seedlings</option>
        <option value="31">water can</option>
        <option value="35">SPRAYERS</option>
        <option value="36">agv</option>
        <option value="37">Camera Hire</option>
        <option value="38">Facebook</option>
    </select>
    {{-- <div class="chzn-container chzn-container-single chzn-container-single-nosearch" style="width: 169px;" title="" id="filter_type_chzn"><a class="chzn-single"><span>Select Product</span><div><b></b></div></a><div class="chzn-drop"><div class="chzn-search"><input type="text" autocomplete="off" readonly=""></div><ul class="chzn-results"></ul></div></div> --}}
    </div>
    </div>
    
    
    <div id="editcell">
        <table class="adminlist table">
        <thead>
            <tr>
                <th width="10" class="hidden-phone">#</th>
                <th width="10" class="hidden-phone"><input type="checkbox" name="toggle" value="" onclick="Joomla.checkAll(this);"></th>
                <th><a href="#" onclick="Joomla.tableOrdering('s.title','asc','');return false;" class="hasPopover" title="" data-content="Select to sort by this column" data-placement="top" data-original-title="Title">Title</a></th>
                <th class="hidden-phone"><a href="#" onclick="Joomla.tableOrdering('s.issue','asc','');return false;" class="hasPopover" title="" data-content="Select to sort by this column" data-placement="top" data-original-title="Issue">Issue</a></th>
                <th><a href="#" onclick="Joomla.tableOrdering('i.title','asc','');return false;" class="hasPopover" title="" data-content="Select to sort by this column" data-placement="top" data-original-title="Product">Product</a></th>
                <th class="hidden-phone"><a href="#" onclick="Joomla.tableOrdering('s.quantity','asc','');return false;" class="hasPopover" title="" data-content="Select to sort by this column" data-placement="top" data-original-title="Quantity">Quantity</a></th>
                <th width="10" class="hidden-phone"><a href="#" onclick="Joomla.tableOrdering('i.id','asc','');return false;" class="hasPopover" title="" data-content="Select to sort by this column" data-placement="top" data-original-title="Id">Id</a></th>
            </tr>
        </thead>
                <tbody><tr class="row0">
                <td align="center" class="hidden-phone">1</td>
                
                <td class="hidden-phone"><input type="checkbox" id="cb0" name="cid[]" value="21" onclick="Joomla.isChecked(this.checked);"></td>
                
                <td>
                                        <a href="/vbizz-dashboard/stock?task=edit&amp;cid[0]=21">Edy SPRAYERS</a>
                                </td>
                
                <td class="hidden-phone">Record Transfer</td>
                
                <td>SPRAYERS</td>
                
                <td class="hidden-phone">200</td>
                
                <td class="hidden-phone">21</td>
                
            </tr>
                    <tr class="row1">
                <td align="center" class="hidden-phone">2</td>
                
                <td class="hidden-phone"><input type="checkbox" id="cb1" name="cid[]" value="20" onclick="Joomla.isChecked(this.checked);"></td>
                
                <td>
                                        <a href="/vbizz-dashboard/stock?task=edit&amp;cid[0]=20">Ken SPRAYERS</a>
                                </td>
                
                <td class="hidden-phone">Record Transfer</td>
                
                <td>SPRAYERS</td>
                
                <td class="hidden-phone">100</td>
                
                <td class="hidden-phone">20</td>
                
            </tr>
                    <tr class="row0">
                <td align="center" class="hidden-phone">3</td>
                
                <td class="hidden-phone"><input type="checkbox" id="cb2" name="cid[]" value="19" onclick="Joomla.isChecked(this.checked);"></td>
                
                <td>
                                        <a href="/vbizz-dashboard/stock?task=edit&amp;cid[0]=19">Ben SPRAYERS</a>
                                </td>
                
                <td class="hidden-phone">Record Transfer</td>
                
                <td>SPRAYERS</td>
                
                <td class="hidden-phone">200</td>
                
                <td class="hidden-phone">19</td>
                
            </tr>
                    <tr class="row1">
                <td align="center" class="hidden-phone">4</td>
                
                <td class="hidden-phone"><input type="checkbox" id="cb3" name="cid[]" value="13" onclick="Joomla.isChecked(this.checked);"></td>
                
                <td>
                                        <a href="/vbizz-dashboard/stock?task=edit&amp;cid[0]=13">CARTERA</a>
                                </td>
                
                <td class="hidden-phone">Issue for Production</td>
                
                <td>malaria kits</td>
                
                <td class="hidden-phone">2</td>
                
                <td class="hidden-phone">13</td>
                
            </tr>
                </tbody><tfoot>
        <tr>
          <td colspan="9">
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
    <input type="hidden" name="filter_order" value="id">
    <input type="hidden" name="filter_order_Dir" value="desc">
    </form>
    </div>
@endsection

@section('script')

@endsection