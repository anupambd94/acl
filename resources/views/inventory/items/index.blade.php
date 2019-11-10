@extends('layouts.app')

@section('content')
<header class="header">
	<div class="container-title">
		<h1 class="page-title">Items</h1>
	</div>
</header>
<div class="content_part">
    <form action="/vbizz-dashboard/items" method="post" name="adminForm" id="adminForm">
    
    
    <div class="subhead">
        <div class="container-fluid">
            <div id="container-collapse" class="container-collapse"></div>
            <div class="row-fluid">
                <div class="span12">
                    <div id="toolbar" class="btn-toolbar">
                        <div class="btn-wrapper" id="toolbar-new">
                            <span  class="btn btn-small btn-success">
                            <span class="fa fa-plus"></span> <a style="color:white;" href="{{route('items.create')}}">New</a></span>
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
    
    <select name="category" class="inputbox" size="1" onchange="submitform( );" id="category" style="">
        <option value="">Select Category</option>
    </select>
    {{-- <div class="chzn-container chzn-container-single chzn-container-single-nosearch" style="width: 220px;" title="" id="category_chzn"><a class="chzn-single"><span>Select Category</span><div><b></b></div></a><div class="chzn-drop"><div class="chzn-search"><input type="text" autocomplete="off" readonly=""></div><ul class="chzn-results"></ul></div></div></div> --}}
    
</div>
    
    
    <div id="editcell">
        <table class="adminlist table">
        <thead>
            <tr>
                <th width="10" class="hidden-phone">#</th>
                <th width="10"><input type="checkbox" name="toggle" value="" onclick="Joomla.checkAll(this);"></th>
                <th><a href="#" onclick="Joomla.tableOrdering('i.title','asc','');return false;" class="hasPopover" title="" data-content="Select to sort by this column" data-placement="top" data-original-title="Title">Title</a></th>
                <th class="hidden-phone"><a href="#" onclick="Joomla.tableOrdering('t.title','asc','');return false;" class="hasPopover" title="" data-content="Select to sort by this column" data-placement="top" data-original-title="Transaction">Transaction</a></th>
                <th><a href="#" onclick="Joomla.tableOrdering('i.amount','asc','');return false;" class="hasPopover" title="" data-content="Select to sort by this column" data-placement="top" data-original-title="Amount">Amount</a></th>
                <th class="hidden-phone"><a href="#" onclick="Joomla.tableOrdering('i.quantity','asc','');return false;" class="hasPopover" title="" data-content="Select to sort by this column" data-placement="top" data-original-title="Quantity">Quantity</a></th>
                <th width="10" class="hidden-phone"><a href="#" onclick="Joomla.tableOrdering('i.id','asc','');return false;" class="hasPopover" title="" data-content="Select to sort by this column" data-placement="top" data-original-title="Id">Id</a></th>
            </tr>
        </thead>
                <tbody><tr class="row0">
                <td align="center" class="hidden-phone">1</td>
                
                <td><input type="checkbox" id="cb0" name="cid[]" value="38" onclick="Joomla.isChecked(this.checked);"></td>
                
                <td>
                                        <a href="/vbizz-dashboard/items?task=edit&amp;cid[0]=38">Facebook</a>
                                </td>
                
                <td class="hidden-phone">Asset</td>
                
                <td>R$ 150000.00</td>
                
                <td class="hidden-phone">34</td>
                
                <td class="hidden-phone">38</td>
                
            </tr>
                    <tr class="row1">
                <td align="center" class="hidden-phone">2</td>
                
                <td><input type="checkbox" id="cb1" name="cid[]" value="37" onclick="Joomla.isChecked(this.checked);"></td>
                
                <td>
                                        <a href="/vbizz-dashboard/items?task=edit&amp;cid[0]=37">Camera Hire</a>
                                </td>
                
                <td class="hidden-phone">Rent</td>
                
                <td>R$ 100.00</td>
                
                <td class="hidden-phone">1</td>
                
                <td class="hidden-phone">37</td>
                
            </tr>
                    <tr class="row0">
                <td align="center" class="hidden-phone">3</td>
                
                <td><input type="checkbox" id="cb2" name="cid[]" value="36" onclick="Joomla.isChecked(this.checked);"></td>
                
                <td>
                                        <a href="/vbizz-dashboard/items?task=edit&amp;cid[0]=36">agv</a>
                                </td>
                
                <td class="hidden-phone">Asset</td>
                
                <td>R$ 100000.00</td>
                
                <td class="hidden-phone">2</td>
                
                <td class="hidden-phone">36</td>
                
            </tr>
                    <tr class="row1">
                <td align="center" class="hidden-phone">4</td>
                
                <td><input type="checkbox" id="cb3" name="cid[]" value="35" onclick="Joomla.isChecked(this.checked);"></td>
                
                <td>
                                        <a href="/vbizz-dashboard/items?task=edit&amp;cid[0]=35">SPRAYERS</a>
                                </td>
                
                <td class="hidden-phone">For Sale</td>
                
                <td>R$ 2000.00</td>
                
                <td class="hidden-phone">500</td>
                
                <td class="hidden-phone">35</td>
                
            </tr>
                    <tr class="row0">
                <td align="center" class="hidden-phone">5</td>
                
                <td><input type="checkbox" id="cb4" name="cid[]" value="31" onclick="Joomla.isChecked(this.checked);"></td>
                
                <td>
                                        <a href="/vbizz-dashboard/items?task=edit&amp;cid[0]=31">water can</a>
                                </td>
                
                <td class="hidden-phone">For Sale</td>
                
                <td>R$ 2000.00</td>
                
                <td class="hidden-phone">20</td>
                
                <td class="hidden-phone">31</td>
                
            </tr>
                    <tr class="row1">
                <td align="center" class="hidden-phone">6</td>
                
                <td><input type="checkbox" id="cb5" name="cid[]" value="30" onclick="Joomla.isChecked(this.checked);"></td>
                
                <td>
                                        <a href="/vbizz-dashboard/items?task=edit&amp;cid[0]=30">sukuma wiki seedlings</a>
                                </td>
                
                <td class="hidden-phone">For Sale</td>
                
                <td>R$ 30000.00</td>
                
                <td class="hidden-phone">300</td>
                
                <td class="hidden-phone">30</td>
                
            </tr>
                    <tr class="row0">
                <td align="center" class="hidden-phone">7</td>
                
                <td><input type="checkbox" id="cb6" name="cid[]" value="29" onclick="Joomla.isChecked(this.checked);"></td>
                
                <td>
                                        <a href="/vbizz-dashboard/items?task=edit&amp;cid[0]=29">malaria kits</a>
                                </td>
                
                <td class="hidden-phone">For Sale</td>
                
                <td>R$ 20000.00</td>
                
                <td class="hidden-phone">3000</td>
                
                <td class="hidden-phone">29</td>
                
            </tr>
                    <tr class="row1">
                <td align="center" class="hidden-phone">8</td>
                
                <td><input type="checkbox" id="cb7" name="cid[]" value="28" onclick="Joomla.isChecked(this.checked);"></td>
                
                <td>
                                        <a href="/vbizz-dashboard/items?task=edit&amp;cid[0]=28">vbizz</a>
                                </td>
                
                <td class="hidden-phone">For Sale</td>
                
                <td>R$ 200.00</td>
                
                <td class="hidden-phone">0</td>
                
                <td class="hidden-phone">28</td>
                
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