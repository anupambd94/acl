@extends('layouts.app')

@section('content')
<header class="header">
	<div class="container-title">
		<h1 class="page-title">Item List To Validate</h1>
	</div>
</header>
<div class="content_part">
    <form action="" method="post" name="adminForm" id="adminForm">
    
    
    <div class="subhead">
        <div class="container-fluid">
            <div id="container-collapse" class="container-collapse"></div>
            <div class="row-fluid">
                <div class="span12">
                    <div id="toolbar" class="btn-toolbar">
                   
                        
                                            <div class="btn-wrapper" id="toolbar-edit">
                            <span onclick="if (document.adminForm.boxchecked.value==0){alert('Please first make a selection from the list');}else{ submitbutton('validate')}" class="btn btn-small">
                            <span class="fa fa-edit"></span> Validate</span>
                        </div>
                                            
                                            <div class="btn-wrapper" id="toolbar-delete">
                        <span onclick="if (document.adminForm.boxchecked.value==0){alert('Please first make a selection from the list');}else{ submitbutton('remove')}" class="btn btn-small">
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
                <th width="10"><input type="checkbox" name="toggle" value="" id="master" ></th>
                <th><a href="#" onclick="Joomla.tableOrdering('i.title','asc','');return false;" class="hasPopover" title="" data-content="Select to sort by this column" data-placement="top" data-original-title="Title">Title</a></th>
                <th class="hidden-phone"><a href="#" onclick="Joomla.tableOrdering('t.title','asc','');return false;" class="hasPopover" title="" data-content="Select to sort by this column" data-placement="top" data-original-title="Transaction">Transaction</a></th>
                <th><a href="#" onclick="Joomla.tableOrdering('i.amount','asc','');return false;" class="hasPopover" title="" data-content="Select to sort by this column" data-placement="top" data-original-title="Amount">Amount</a></th>
                <th class="hidden-phone"><a href="#" onclick="Joomla.tableOrdering('i.quantity','asc','');return false;" class="hasPopover" title="" data-content="Select to sort by this column" data-placement="top" data-original-title="Quantity">Quantity</a></th>
                <th width="10" class="hidden-phone"><a href="#" onclick="Joomla.tableOrdering('i.id','asc','');return false;" class="hasPopover" title="" data-content="Select to sort by this column" data-placement="top" data-original-title="Id">Id</a></th>
            </tr>
        </thead>
        <tbody>
                @php
                    $count = 1;
                    @endphp

                    @foreach($items as $item)
                    @php
                    if($item->IsActive == 1){
                    $icon_status = "icon-publish";
                    $active = "active";
                    $title = "Unpublish";
                    }else{
                    $icon_status = "icon-unpublish";
                    $active = "";
                    $title = "Publish";
                    }
                    @endphp
                <tr class="row0">
                <td align="center" class="hidden-phone">{{$count}}</td>
                
                <td><input type="checkbox" id="cb0" name="items[]" class="sub_chk" value="{{$item->item_id}}"></td>
                
                <td>
                    <a href="/vbizz-dashboard/items?task=edit&amp;cid[{{$count}}]={{$item->item_id}}">{{$item->item_name}}</a>
                </td>
                
                <td class="hidden-phone">{{$item->transaction}}</td>
                
                <td>R$ {{$item->item_amount}} </td>
                
                <td class="hidden-phone">{{$item->item_quantity}}</td>
                
                <td class="hidden-phone">{{$item->item_id}}</td>
                
                </tr>
                @php
                $count++;
                @endphp

                @endforeach
                </tbody>
        </table>
        {!! $items->render() !!}

    </div>
    
    <input type="hidden" name="option" value="com_vbizz">
    <input type="hidden" name="task" value="">
    <input type="hidden" name="boxchecked" value="0" id="boxChecked">
    <input type="hidden" name="filter_order" value="id">
    <input type="hidden" name="filter_order_Dir" value="desc">
    </form>
    </div>
@endsection

@section('script')
<script type="text/javascript">
    jQuery(window).ready(function(e) {
    $('#loading').hide();
    var window_height = jQuery(window).height();
    var header = jQuery('.header').height();
    var copyright = jQuery('.copyright').height();
    var new_height = window_height -(copyright+header);
    jQuery('.shwocase').css('min-height',new_height);
    });
    
    jQuery('#master').on('click', function(e) {
    if($(this).is(':checked',true))
    {
    $(".sub_chk").prop('checked', true);
    }
    else
    {
    $(".sub_chk").prop('checked',false);
    }
    });
    
    jQuery('.changeStatus').on('click',function(){
    var departmentId = $(this).attr('data-department_id');
    var action = $(this).attr('title');
    
    });
    var selected_checkbox = [];
function submitbutton(option){
    if (option == 'edit') {
        // var department_id = $('#boxChecked').val();
        // var url = '{{ route("edit_department", ":id") }}';
        // url = url.replace(':id', department_id);
        // console.log(department_id);
    // document.location.href=url;s
    }else{
        $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        });
        $(window).scrollTop(1);
        $('#loading').show();
        $('.loader_text').html("Completing process ....");
        $('.container').css("opacity", 0.6);
        $(".container *").children().prop('disabled', true);
        if (selected_checkbox) {
        $.ajax({
        type: 'post',
        url: 'items.update',
        data: {
        'option': option,
        'idList': selected_checkbox
        },
        success: function (data) {
        console.log('success');
        console.log(data);
        
        },
        complete: function () {
        $('#loading').hide();
        $('.container').css("opacity", 1);
        $(".container *").children().prop('disabled', false);
        location.reload(true);
        },
        error: function () {
        console.log('error');
        }
        });
        
        } else {
        // location.reload(true);
        }
    }



}

$('body').on('change', '#cb0', function () {
selected_checkbox = [];
$('input[name^="items"]').each(function () {
if ($(this).is(":checked")) {

selected_checkbox.push($(this).val());
console.log(selected_checkbox);
$('#boxChecked').val($(this).val());
// console.log($('#boxChecked').val());
}
});
});
</script>
@endsection