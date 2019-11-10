@extends('layouts.app')

@section('content')
<header class="header">
	<div class="container-title">
		<h1 class="page-title">Item (New)</h1>
	</div>
</header>
<div class="content_part">
    <form action="/vbizz-dashboard/items" method="post" name="adminForm" id="adminForm">
    
    <div class="row-fluid">
        <div class="span12">
            <div class="btn-toolbar" id="toolbar">
                        <div class="btn-wrapper" id="toolbar-apply">
                    <span onclick="submitbutton('apply')" class="btn btn-small btn-success">
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
                    <span class="fa fa-remove"></span> Close</span>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="overview">
    <fieldset class="adminform">
        <legend>Overview</legend>
        <ul>
            <li>An Item is anything that your company buys, sells, or resells in the course of business, such as products in your inventory, a service you provide (such as a consultation fee) shipping and handling charges, a miscellaneous fee (such as a delivery fee).</li><li>vBizz allows you to Add multiple Items to Income/Expense and Invoice. You can setup unlimited number of Items.</li>
        </ul>
    </fieldset>
    </div>
    
    
    <div class="col100">
    <fieldset class="adminform">
    <legend>Add New Record</legend>
    <table class="adminform table table-striped">
        <tbody>
               <tr>
                <th width="200"><label class="hasTip" title="">
                    Title<span style="color:Red;">*  </span></label></th>
                <td><input class="text_area" type="text" name="title" id="title" value=""></td>
            </tr>
            
            <tr>
                <th><label class="hasTip" title="">
                Actual Amount<span style="color:Red;">*  </span></label></th>
                <td><input class="text_area" type="text" name="amount" id="amount" value=""> R$</td>
            </tr>
            
            <tr>
                <th><label class="hasTip" title="">Quantity</label></th>
                <td><input class="text_area" type="text" name="quantity" id="quantity" value=""></td>
            </tr>
            <tr>
                <th><label class="hasTip" title="">Barcode</label></th>
                <td><input class="text_area" type="text" name="barcode" id="barcode" value=""></td>
            </tr>
            <tr>
                <th><label class="hasTip" title="">
                    Transaction<span style="color:Red;">*  </span></label></th>
                <td>
                    <select name="tran_type_id" id="tran_type_id" style="">
                    <option value="">Select Transaction</option>
                                    <option value="286"> For Sale </option>
                                    <option value="347"> Asset </option>
                                    <option value="346"> Rent </option>
                                    </select>
                                    {{-- <div class="chzn-container chzn-container-single chzn-container-single-nosearch" style="width: 146px;" title="" id="tran_type_id_chzn"><a class="chzn-single"><span>Select Transaction</span><div><b></b></div></a><div class="chzn-drop"><div class="chzn-search"><input type="text" autocomplete="off" readonly=""></div><ul class="chzn-results"></ul></div></div> --}}
                </td>
            </tr> 
            <tr>
                <th><label class="hasTip" title="">Allow Commission</label></th>
                <td><fieldset class="radio btn-group" style="margin-bottom:9px;">
                    <label for="allowcommission1" id="allowcommission1-lbl" class="radio allowcommission btn">Yes</label>
                    <input type="radio" name="allowcommission" id="allowcommission1" value="1">
                    <label for="allowcommission0" id="allowcommission0-lbl" class="radio allowcommission btn active btn-danger">No</label>
                    <input type="radio" name="allowcommission" id="allowcommission0" value="0" checked="checked">
                    </fieldset></td>
            </tr>
            <tr class="commission_amount" style="display:none;">
                <th width="200">
                    <label class="hasTip" title="">
                        Commission Amount<span style="color:Red;">*  </span>				</label>
                </th>
                <td><input class="text_area" type="text" name="allowcommissionamount" id="allowcommissionamount" value=""></td>
                 <td><select name="allowcommissionamountin" id="allowcommissionamountin" style="display: none;"><option value="1">R$</option><option value="2">%</option></select><div class="chzn-container chzn-container-single chzn-container-single-nosearch" style="width: 0px;" title="" id="allowcommissionamountin_chzn"><a class="chzn-single"><span>R$</span><div><b></b></div></a><div class="chzn-drop"><div class="chzn-search"><input type="text" autocomplete="off" readonly=""></div><ul class="chzn-results"></ul></div></div></td>
            </tr>
        </tbody>
    </table>
    </fieldset>
    </div>
    <div class="clr"></div>
    <input type="hidden" name="option" value="com_vbizz">
    <input type="hidden" name="id" value="">
    <input type="hidden" name="task" value="">
    <input type="hidden" name="view" value="items">
    </form>
    </div>
@endsection

@section('script')
<script>
    function submitbutton(option){
if (option == 'cancel') {
var department_id = $('#boxChecked').val();
var url = '{{ route("items.index") }}';
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