@extends('layouts.app')

@section('content')
<div class="">
    <div class="loading animated bounceInDown delay-2s" id="loading">
        <center>
            <img class="loader_image" src="img/ajax-loader.gif">
        </center>
        <p style="margin-top:5px;" class="text-center loader_text">

        </p>
    </div>
</div>
<header class="header">
    <div class="container-title">
        <h1 class="page-title">Employee Department</h1>
    </div>
</header>
<div class="content_part">
    <form action="/vbizz-dashboard/edept" method="post" name="adminForm" id="adminForm">
        {{ csrf_field() }}

        <div class="subhead">
            <div class="container-fluid">
                <div id="container-collapse" class="container-collapse"></div>
                <div class="row-fluid">
                    <div class="span12">
                        <div id="toolbar" class="btn-toolbar">
                            <div class="btn-wrapper" id="toolbar-new">
                                <a href="{{route('department_create')}}">
                                    <span class="btn btn-small btn-success">
                                        <span class="fa fa-plus">
                                        </span> &nbsp; New
                                    </span>
                                </a>
                            </div>

                            <div class="btn-wrapper" id="toolbar-edit">
                                <span
                                    onclick="if (document.adminForm.boxchecked.value==0){alert('Please first make a selection from the list');}else{ submitbutton('edit')}"
                                    class="btn btn-small">
                                    <span class="fa fa-edit"></span> Edit</span>
                            </div>

                            <div id="toolbar-publish" class="btn-wrapper">
                                <span class="btn btn-small"
                                    onclick="if (document.adminForm.boxchecked.value==0){alert('Please first make a selection from the list');}else{ submitbutton('publish')}">
                                    <span class="fa fa-check"></span> Publish</span>
                            </div>
                            <div id="toolbar-unpublish" class="btn-wrapper">
                                <span class="btn btn-small"
                                    onclick="if (document.adminForm.boxchecked.value==0){alert('Please first make a selection from the list');}else{ submitbutton('unpublish')}">
                                    <span class="fa fa-close"></span> Unpublish</span>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="adminlist filter">
            <div class="filet_left">
                <input type="text" name="search" id="search" placeholder="Search" value="" class="text_area">
                <button class="btn hasTooltip" title="" onclick="this.form.submit();" data-original-title="Search"><i
                        class="fa fa-search"></i></button>
                <button class="btn hasTooltip" title="" onclick="document.getElementById('search').value='';this.form.submit();
    document.getElementById('filter_status').value='';this.form.submit();" data-original-title="Clear"><i
                        class="fa fa-remove"></i></button>
            </div>
            <div class="filter_right">
                <select id="filter_status" name="filter_status" class="inputbox" size="1" onchange="submitform( );"
                    style="display: none;">
                    <option value="">Status</option>
                    <option value="publish">Published</option>
                    <option value="unpublish">Unpublished</option>
                </select>
                <!-- <div class="chzn-container chzn-container-single chzn-container-single-nosearch" style="width: 111px;" title="" id="filter_status_chzn"><a class="chzn-single"><span>Status</span><div><b></b></div></a><div class="chzn-drop"><div class="chzn-search"><input type="text" autocomplete="off" readonly=""></div><ul class="chzn-results"></ul></div></div> -->
            </div>
        </div>

        <div id="editcell">
            <table class="adminlist table">
                <thead>
                    <tr>
                        <th width="10" class="hidden-phone">#</th>
                        <th width="10"><input type="checkbox" name="toggle" value="" id="master">
                        </th>
                        <th><a href="#" onclick="Joomla.tableOrdering('name','asc','');return false;" class="hasPopover"
                                title="" data-content="Select to sort by this column" data-placement="top"
                                data-original-title="Name">Name</a></th>
                        <th width="40" class="center"><a href="#"
                                onclick="Joomla.tableOrdering('published','asc','');return false;" class="hasPopover"
                                title="" data-content="Select to sort by this column" data-placement="top"
                                data-original-title="Status">Status</a></th>
                        <th width="10" class="hidden-phone center"><a href="#"
                                onclick="Joomla.tableOrdering('id','asc','');return false;" class="hasPopover" title=""
                                data-content="Select to sort by this column" data-placement="top"
                                data-original-title="Id">Id<span class="icon-arrow-down-3"></span></a></th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $count = 1;
                    @endphp

                    @foreach($departments as $department)
                    @php
                    if($department->IsActive == 1){
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

                        <td><input type="checkbox" id="cb0" name="department[]" value="{{$department->department_id}}"
                                class="sub_chk">
                        </td>


                        <td align="center">
                            <a href="{{ route('edit_department', $department->department_id) }}">{{$department->department_name}}</a>
                        </td>
                        <td class="publish_unpublish center"><a
                                class="btn btn-micro {{$active}} hasTooltip changeStatus" href="javascript:void(0);"
                                data-department_id="{{$department->department_id}}" title="{{$title}}"
                                data-original-title="{{$title}} Item"><span class="{{$icon_status}}"
                                    aria-hidden="true"></span></a></td>

                        <td class="center hidden-phone">{{$department->department_id}}</td>

                    </tr>

                    @php
                    $count++;
                    @endphp

                    @endforeach


                </tbody>
                <!-- <tfoot>
                <tr>
                  <td colspan="10">
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
        
        
                <input type="hidden" name="limitstart" value="0">
        
    </div>
    </td>
                </tr>
            </tfoot> -->

            </table>
            {!! $departments->render() !!}

        </div>

        <input type="hidden" name="option" value="com_vbizz">
        <input type="hidden" name="task" value="">
        <input type="hidden" name="boxchecked" id="boxChecked" value="0">
        <input type="hidden" name="view" value="edept">
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
        var department_id = $('#boxChecked').val();
        var url = '{{ route("edit_department", ":id") }}';
        url = url.replace(':id', department_id);
        // console.log(department_id);
    document.location.href=url;
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
        url: '/department_update',
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
$('input[name^="department"]').each(function () {
if ($(this).is(":checked")) {

selected_checkbox.push($(this).val());
// console.log($(this).val());
$('#boxChecked').val($(this).val());
// console.log($('#boxChecked').val());
}
});
});
</script>
@endsection