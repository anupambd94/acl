@extends('layouts.app')

@section('content')
<div id="vbizz">

    <script type="text/javascript">
    Joomla.submitbutton = function(task) {
        if (task == 'cancel') {
            Joomla.submitform(task, document.getElementById('adminForm'));
        } else {
            var form = document.adminForm;
        
            if(form.title.value == "")	{
                alert("Enter Title");
                return false;
            }
            
            if(typeof(validateit) == 'function')	{
                if(!validateit())
                    return false;
            }
            Joomla.submitform(task, document.getElementById('adminForm'));
        }
    }
    </script>
    
    <header class="header">
        <div class="container-title">
            <h1 class="page-title">Transaction Type (Edit)</h1>
        </div>
    </header>
    
    <div class="content_part">
    <form action="/vbizz-dashboard/tran" method="post" name="adminForm" id="adminForm">
    
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
                    <span class="fa fa-remove"></span> Close</span>
                </div>
            </div>
        </div>
    </div>
    
    <div class="overview">
    <fieldset class="adminform">
        <legend>Overview</legend>
        <ul>
            <li>vBizz allows you to categorize your transactions into infinite categories and subcategories(nested categories) to give you a clear picture of your Income/Expense.</li><li>You can set specific color and budget for your category.</li>
        </ul>
    </fieldset>
    </div>
    
    
    <div class="col100">
    <fieldset class="adminform">
    <legend>Details</legend>
          <table class="adminform table table-striped">
            <tbody>
              <tr>
                <th width="200"> <label class="hasTip" title="">Title<span style="color:Red;">*  </span></label></th>
                <td><input class="text_area" type="text" name="title" id="title" size="32" maxlength="50" value="For Sale"></td>
              </tr>
              <tr>
                <th> <label class="hasTip" title="">Select Parent</label></th>
                <td><select name="parent_id" id="parent_id" style="display: none;">
                    <option value="">No Parent</option>
                                    <option value="347"> Asset </option>
                                    <option value="346"> Rent </option>
                                  </select><div class="chzn-container chzn-container-single chzn-container-single-nosearch" style="width: 97px;" title="" id="parent_id_chzn"><a class="chzn-single"><span>No Parent</span><div><b></b></div></a><div class="chzn-drop"><div class="chzn-search"><input type="text" autocomplete="off" readonly=""></div><ul class="chzn-results"></ul></div></div></td>
              </tr>
              
              <tr>
                <th> <label class="hasTip" title="">Pick Color</label></th>
                <td><div class="minicolors minicolors-theme-bootstrap minicolors-position-default"><input type="text" name="color" id="id" class="input-colorpicker minicolors minicolors-input" value="#210af7" size="7"><span class="minicolors-swatch minicolors-sprite minicolors-input-swatch"><span class="minicolors-swatch-color" style="background-color: rgb(33, 10, 247);"></span></span><div class="minicolors-panel minicolors-slider-hue"><div class="minicolors-slider minicolors-sprite"><div class="minicolors-picker" style="top: 47.5738px;"></div></div><div class="minicolors-opacity-slider minicolors-sprite"><div class="minicolors-picker"></div></div><div class="minicolors-grid minicolors-sprite" style="background-color: rgb(26, 0, 255);"><div class="minicolors-grid-inner"></div><div class="minicolors-picker" style="top: 4px; left: 144px;"><div></div></div></div></div></div></td>
              </tr>
              <tr>
                <th width="200"><label class="hasTip" title="">Budget</label></th>
                <td><input class="text_area" type="text" name="budget" id="budget" size="32" maxlength="50" value="0.00"></td>
              </tr>
              
            </tbody>
          </table>
        </fieldset>
      </div>
      <div class="clr"></div>
      <input type="hidden" name="option" value="com_vbizz">
      <input type="hidden" name="id" value="286">
      <input type="hidden" name="task" value="">
      <input type="hidden" name="view" value="tran">
    </form>
    </div>
    </div>
@endsection

@section('script')

@endsection