@extends('layouts.app')

@section('content')
<header class="header">
	<div class="container-title">
		<h1 class="page-title">Stock (New)</h1>
	</div>
</header>
<div class="content_part">
    <form action="/vbizz-dashboard/stock" method="post" name="adminForm" id="adminForm">
    
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
                <th><label class="hasTip" title="">
                    Issue<span style="color:Red;">*  </span></label></th>
                <td>
                    <select name="issue" id="issue" style="">
                        <option value="">Select Issue</option>
                        <option value="1">Issue for Production</option>
                        <option value="2">Recieve for Sales</option>
                        <option value="3">Record Transfer</option>
                        <option value="4">Record Wastage</option>
                    </select>
                    {{-- <div class="chzn-container chzn-container-single chzn-container-single-nosearch" style="width: 155px;" title="" id="issue_chzn"><a class="chzn-single"><span>Select Issue</span><div><b></b></div></a><div class="chzn-drop"><div class="chzn-search"><input type="text" autocomplete="off" readonly=""></div><ul class="chzn-results"></ul></div></div> --}}
            </td></tr>
            
            <tr>
                <th><label class="hasTip" title="">Product</label></th>
                <td>
                    <select name="item" id="item" style="">
                    <option value="">Select Product</option>
                                    <option value="28"> vbizz </option>
                                    <option value="29"> malaria kits </option>
                                    <option value="30"> sukuma wiki seedlings </option>
                                    <option value="31"> water can </option>
                                    <option value="35"> SPRAYERS </option>
                                    <option value="36"> agv </option>
                                    <option value="37"> Camera Hire </option>
                                    <option value="38"> Facebook </option>
                                    </select>
                                    {{-- <div class="chzn-container chzn-container-single chzn-container-single-nosearch" style="width: 169px;" title="" id="item_chzn"><a class="chzn-single"><span>Select Product</span><div><b></b></div></a><div class="chzn-drop"><div class="chzn-search"><input type="text" autocomplete="off" readonly=""></div><ul class="chzn-results"></ul></div></div> --}}
                </td>
            </tr>
            
            <tr>
                <th><label class="hasTip" title="">Quantity<span style="color:Red;">*  </span></label></th>
                <td id="qty">
                    <input class="text_area" type="text" name="quantity" id="quantity" value="">
                                </td>
            </tr>
            
            <tr>
                <th><label class="hasTip" title="">Description</label></th>
                <td><textarea class="text_area" name="description" id="description" rows="4" cols="50"></textarea></td>
            </tr>
            
            
            
        </tbody>
    </table>
    </fieldset>
    </div>
    <div class="clr"></div>
    <input type="hidden" name="option" value="com_vbizz">
    <input type="hidden" name="id" value="">
    <input type="hidden" name="task" value="">
    <input type="hidden" name="view" value="stock">
    </form>
    </div>
@endsection

@section('script')
@section('script')
<script>
    function submitbutton(option){
if (option == 'cancel') {
var department_id = $('#boxChecked').val();
var url = '{{ route("items.stock") }}';
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