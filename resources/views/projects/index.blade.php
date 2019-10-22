@extends('layouts.app')

@section('title', '| Roles')

@section('content')
<header class="header">
	<div class="container-title">
		<h1 class="page-title">Projects</h1>
	</div>
</header>
<div class="content_part">
<form action="/vbizz-dashboard/projects" method="post" name="adminForm" id="adminForm">

<div class="subhead">
	<div class="container-fluid">
        <div id="container-collapse" class="container-collapse"></div>
        <div class="row-fluid">
            <div class="span12">
                <div id="toolbar" class="btn-toolbar">
						                        <div class="btn-wrapper" id="toolbar-new">
                            <span onclick="submitbutton('add')" class="btn btn-small btn-success">
                            <span class="fa fa-plus"></span> New</span>
                        </div>
                                            
						                        <div class="btn-wrapper" id="toolbar-edit">
                            <span onclick="if (document.adminForm.boxchecked.value==0){alert('Please first make a selection from the list');}else{submitbutton('edit')}" class="btn btn-small">
                            <span class="fa fa-edit"></span> Edit</span>
                        </div>
                                            
						                        <div class="btn-wrapper" id="toolbar-delete">
                        <span onclick="if (document.adminForm.boxchecked.value==0){alert('Please first make a selection from the list');}else{submitbutton('remove')}" class="btn btn-small">
                        <span class="fa fa-remove"></span> Delete</span>
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
<button class="btn hasTooltip" title="Clear" onclick="document.getElementById('search').value='';this.form.submit();
document.getElementById('filter_status').value='';this.form.submit();"><i class="fa fa-remove"></i> <span class="clear_text">Clear</span></button>
</div>
<div class="filter_right">
<select id="filter_status" name="filter_status" class="inputbox" size="1" onchange="submitform( );" style="">
	<option value="">Status</option>
	<option value="ongoing">ongoing</option>
	<option value="completed">completed</option>
</select>
<!-- <div class="chzn-container chzn-container-single chzn-container-single-nosearch" style="width: 98px;" title="" id="filter_status_chzn"><a class="chzn-single"><span>Status</span><div><b></b></div></a><div class="chzn-drop"><div class="chzn-search"><input type="text" autocomplete="off" readonly=""></div><ul class="chzn-results"></ul></div></div> -->
</div>
</div>


<div id="editcell">
    <table class="adminlist table">
        <thead>
            <tr>
                <th width="10" class="hidden-phone">#</th>
                <th width="10"><input type="checkbox" name="toggle" value="" onclick="Joomla.checkAll(this);"></th>
                <th><a href="#" onclick="Joomla.tableOrdering('project_name','asc','');return false;" class="hasPopover" title="" data-content="Select to sort by this column" data-placement="top" data-original-title="Project Name">Project Name</a></th>
				                <th class="hidden-phone"><a href="#" onclick="Joomla.tableOrdering('client','asc','');return false;" class="hasPopover" title="" data-content="Select to sort by this column" data-placement="top" data-original-title="Customer">Customer</a></th>
				                <th class="hidden-phone"><a href="#" onclick="Joomla.tableOrdering('start_date','asc','');return false;" class="hasPopover" title="" data-content="Select to sort by this column" data-placement="top" data-original-title="Start Date">Start Date</a></th>
                <th class="hidden-phone"><a href="#" onclick="Joomla.tableOrdering('end_date','asc','');return false;" class="hasPopover" title="" data-content="Select to sort by this column" data-placement="top" data-original-title="End Date">End Date</a></th>
                <th class="hidden-phone"><a href="#" onclick="Joomla.tableOrdering('status','asc','');return false;" class="hasPopover" title="" data-content="Select to sort by this column" data-placement="top" data-original-title="Status">Status</a></th>
				                <th><a href="#" onclick="Joomla.tableOrdering('estimated_cost','asc','');return false;" class="hasPopover" title="" data-content="Select to sort by this column" data-placement="top" data-original-title="Estimated Cost">Estimated Cost</a></th>
								<th class="hidden-phone"></th>				<th class="hidden-phone"></th>            </tr>
        </thead>
            <tbody><tr class="row0">
            <td align="center" class="hidden-phone">1</td>
            
            <td><input type="checkbox" id="cb0" name="cid[]" value="50" onclick="Joomla.isChecked(this.checked);"></td>
            
            <td>
                        	<a href="/vbizz-dashboard/projects?task=edit&amp;cid[0]=50">Logo in Lobby</a>
                        </td>
            
            <td class="hidden-phone">abc </td>			
            <td class="hidden-phone">04-11-2019</td>
            
            <td class="hidden-phone">06-12-2019</td>
            
            <td class="hidden-phone">Ongoing</td>
            
			            <td>R 1000.00</td>
			            
            <td class="hidden-phone"><a href="/vbizz-dashboard/ptask?projectid=50&amp;fp=1">Manage Task</a></td>			
            				<td class="hidden-phone"><a href="/vbizz-dashboard/milestone?projectid=50">Manage Milestone</a></td>
			            
        
        </tr>
            </tbody><tfoot>
            <tr>
                <td colspan="10">
<div class="pagination pagination-toolbar clearfix" style="">

			<div class="limit pull-right">
			Display #<select id="limit" name="limit" class="inputbox input-mini" size="1" onchange="this.form.submit()" style="width:100px;">
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
<!-- <div class="chzn-container chzn-container-single chzn-container-single-nosearch" style="width: 59px;" title="" id="limit_chzn"><a class="chzn-single"><span>20</span><div><b></b></div></a><div class="chzn-drop"><div class="chzn-search"><input type="text" autocomplete="off" readonly=""></div><ul class="chzn-results"></ul></div></div> -->
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
<input type="hidden" name="view" value="projects">
<input type="hidden" name="filter_order" value="id">
<input type="hidden" name="filter_order_Dir" value="desc">
</form>
</div>

@endsection
@section('script')
<script src="{{ asset('plugins/datatables/media/js/jquery.dataTables.js') }}"></script>
        <script src="{{ asset('plugins/datatables/media/js/dataTables.bootstrap.js') }}"></script>
        <script src="{{ asset('plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('js/jquery.multi-select.js') }}" type="text/javascript"></script>
<script>
$('#my-select').multiSelect();
$('#my-select').on('change',function(){
    console.log($(this).val());
});
</script>

@endsection