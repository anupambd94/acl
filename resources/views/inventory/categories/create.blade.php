@extends('layouts.app')

@section('content')
<header class="header">
	<div class="container-title">
		<h1 class="page-title">Category(New)</h1>
	</div>
</header>
<div class="content_part">
    <form action="/vbizz-dashboard/category" method="post" name="adminForm" id="adminForm">
    
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
                    <span onclick="submitbutton('cancel')" class="btn btn-small">
                    <span class="fa fa-close"></span> Close</span>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="overview">
    <fieldset class="adminform">
        <legend>Overview</legend>
        <ul>
            <li>Manage your Inventory Stock by adding/removing products or items to/from the warehouse.</li>
        </ul>
    </fieldset>
    </div>
    
    
    <div class="col100">
    <fieldset class="adminform">
    <legend>Add New Record</legend>
    <table class="adminform table table-striped">
        <tbody>
        
            <tr>
                <th width="200">
                    <label class="hasTip" title="">
                        Title<span style="color:Red;">*  </span>				</label>
                </th>
                <td><input class="text_area" type="text" name="title" id="title" value=""></td>
            </tr>
            
            <tr>
                <th><label class="hasTip" title="">Select Parent</label></th>
                <td id="parent">
                    <select name="parent" id="parent" style="">
                        <option value="">Select Parent</option>
                    </select>
                    {{-- <div class="chzn-container chzn-container-single chzn-container-single-nosearch" style="width: 220px;" title="" id="parent_chzn"><a class="chzn-single"><span>Select Parent</span><div><b></b></div></a><div class="chzn-drop"><div class="chzn-search"><input type="text" autocomplete="off" readonly=""></div><ul class="chzn-results"></ul></div></div> --}}
                </td>
            </tr>
            
            {{-- <tr>
                <th><label class="hasTip" title="">Set the publish status</label></th>
                <td><fieldset class="radio btn-group" style="margin-bottom:9px;">
                    <label for="status1" id="status-lbl" class="radio btn">Yes</label>
                    <input type="radio" name="status" id="status1" value="1">
                    <label for="status0" id="status-lbl" class="radio btn active btn-danger">No</label>
                    <input type="radio" name="status" id="status0" value="0" checked="checked">
                    </fieldset></td>
            </tr> --}}
            <tr>
                <th><label class="hasTip" title="">Active</label></th>
                <td>
                    <fieldset class="radio btn-group">
                        {{-- <label for="published1" id="published-lbl" class="radio btn active btn-success">Yes</label>
    <input type="radio" name="published" id="published1" value="1" checked="checked">
    <label for="published0" id="published-lbl" class="radio btn">No</label>
    <input type="radio" name="published" id="published0" value="0">
     --}}
                        <input type="checkbox" name="isActive" id="isActive" checked data-toggle="toggle">
                    </fieldset>
                </td>
            </tr>
            
            
        </tbody>
    </table>
    </fieldset>
    </div>
    <div class="clr"></div>
    <input type="hidden" name="option" value="com_vbizz">
    <input type="hidden" name="id" value="">
    <input type="hidden" name="task" value="">
    <input type="hidden" name="view" value="category">
    </form>
    </div>
@endsection

@section('script')
<script>
    function submitbutton(option){
if (option == 'cancel') {
var department_id = $('#boxChecked').val();
var url = '{{ route("categories.index") }}';
// console.log(department_id);
document.location.href=url;
}else{
}

}
$(function() {
            $(document).on("change","#isActive", function()
            {
                var value =   $(this).val();
                if(value == "on"){
                    $(this).val("off");
                }else{
                    $(this).val("on");
                } 
                value =   $(this).val();

                // console.log(value);
            
            });
        });
</script>
@endsection