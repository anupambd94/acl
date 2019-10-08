@extends('layouts.app')

@section('content')
<header class="header">
	<div class="container-title">
		<h1 class="page-title"></h1><h1 class="page-title">Employee Department (New)</h1>
	</div>
</header>
<div class="content_part">
    <form action="/vbizz-dashboard/edept" method="post" name="adminForm" id="adminForm">
    
    
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
                    <span onclick="Joomla.submitbutton('cancel')" class="btn btn-small">
                    <span class="fa fa-close"></span> Close</span>
                </div>
            </div>
        </div>
    </div>
    
    <div class="overview">
    <fieldset class="adminform">
        <legend>Overview</legend>
        <ul>
        <li>vBizz lets you add n numbers of departments for your company.</li>
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
                Department Name<span style="color:Red;">*  </span></label>
            </th>
            <td><input class="text_area" type="text" name="name" id="name" value=""></td>
        </tr>
        
        <tr>
            <th><label class="hasTip" title="">Published</label></th>
            <td>
                <fieldset class="radio btn-group">
                <label for="published1" id="published-lbl" class="radio btn active btn-success">Yes</label>
                <input type="radio" name="published" id="published1" value="1" checked="checked">
                <label for="published0" id="published-lbl" class="radio btn">No</label>
                <input type="radio" name="published" id="published0" value="0">
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
    <input type="hidden" name="option" value="com_vbizz">
    <input type="hidden" name="id" value="">
    <input type="hidden" name="task" value="">
    <input type="hidden" name="view" value="edept">
    </form>
    </div>
@endsection

@section('script')

@endsection