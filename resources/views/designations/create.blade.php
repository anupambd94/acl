@extends('layouts.app')

@section('content')
<header class="header">
	<div class="container-title">
		<h1 class="page-title"></h1><h1 class="page-title">Employee Designation (New)</h1>
	</div>
</header>
<div class="content_part">
    <form  method="post" name="adminForm" id="adminForm" action="{{ route('designation_create') }}">
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
                    <span onclick="Joomla.submitbutton('cancel')" class="btn btn-small">
                    <span class="fa fa-close"></span> Close</span>
                </div>
            </div>
        </div>
    </div>
    @if(session('status'))
            <div class="row register_button animated bounceInUp heartBeat fadeOutDown">
            <div class="col-md-offset-4 col-md-3">

                <div class="form-group">
                <div class="alert alert-success" style="text-align:center">{{session('status')}}</div>
                </div>

                </div>
            </div>
            @endif
    <div class="overview">
    <fieldset class="adminform">
        <legend>Overview</legend>
        <ul>
        <li>ACL lets you add n numbers of designations of employee.</li>
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
                Designation Name<span style="color:Red;">*  </span></label>
            </th>
            <td><input class="text_area" type="text" name="name" id="name" value="" required></td>
        </tr>
        
        <tr>
            <th><label class="hasTip" title="">Published</label></th>
            <td>
                <fieldset class="radio btn-group">
                {{-- <label for="published1" id="published-lbl" class="radio btn active btn-success">Yes</label>
                <input type="radio" name="published" id="published1" value="1" checked="checked">
                <label for="published0" id="published-lbl" class="radio btn">No</label>
                <input type="radio" name="published" id="published0" value="0">
                 --}}
                 <input type="checkbox" name="isActive" id="isActive"checked data-toggle="toggle">
            </fieldset>
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
    {{-- <input type="hidden" name="option" value="com_vbizz">
    <input type="hidden" name="id" value="">
    <input type="hidden" name="task" value="">
    <input type="hidden" name="view" value="edept"> --}}
    </form>
    </div>
@endsection

@section('script')
<script>
// $(document).ready(function(){
//     $("#isActive").on('click',function(){
//         console.log($(this).val());
//     });
// });
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