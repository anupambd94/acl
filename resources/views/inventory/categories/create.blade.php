@extends('layouts.app')

@section('content')
<header class="header">
	<div class="container-title">
		<h1 class="page-title">Category(New)</h1>
	</div>
</header>
<div class="content_part">
    <form action="{{ route('category_create') }}" method="post" name="adminForm" id="adminForm">
    {{ csrf_field() }}    
    <div class="row-fluid">
        <div class="span12">
            <div class="btn-toolbar" id="toolbar">
                <div class="btn-wrapper" id="toolbar-apply">
                    <button type="submit" class="btn btn-small btn-success">
                        <span class="fa fa-check"></span> Save</span>
                    </button>

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
        @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if(session('status'))
            <div class="row register_button animated bounceInUp heartBeat fadeOutDown">
            <div class="col-md-offset-4 col-md-3">

                <div class="form-group">
                    <div class="alert alert-success" style="text-align:center">{{session('status')}}</div>
                </div>

                </div>
            </div>
            @endif
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
                        Category Name<span style="color:Red;">*  </span>				</label>
                </th>
                <td><input class="text_area" type="text" name="category_name" id="category_name" value=""></td>
            </tr>
            
            <tr>
                <th><label class="hasTip" title="">Select Parent</label></th>
                <td id="parent">
                    <select name="parent" id="parent" style="">
                        <option value="" disabled selected>Select Parent</option>
                        @foreach ($categories as $category)
                        <option value={{$category->category_id}}>{{$category->category_name}}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            
            <tr>
                <th><label class="hasTip" title="">Active</label></th>
                <td>
                    <fieldset class="radio btn-group">
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