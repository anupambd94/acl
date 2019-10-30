@extends('layouts.app')

@section('title', '| Roles')

@section('content')

<div class="col-lg-10 col-lg-offset-1">
    <header class="header">
        <div class="container-title">
            <h1 class="page-title">Project (New)</h1>
        </div>
    </header>
    <div class="content_part">
        <form action="{{ route('projects.store') }}" method="post" name="adminForm" id="adminForm">
        {{ csrf_field() }}
            <div class="row-fluid">
                <div class="span12">
                    <div class="btn-toolbar" id="toolbar">
                                                <!-- <div class="btn-wrapper" id="toolbar-apply">
                                <span onclick="submitbutton('apply')" class="btn btn-small btn-success">
                                <span class="fa fa-check"></span> Save</span>
                                </div> -->
                                <div class="btn-wrapper" id="toolbar-apply">
                                    <button type="submit" class="btn btn-small btn-success">
                                        <span class="fa fa-check"></span> Save</span>
                                    </button>
                                </div>
                                <div class="btn-wrapper" id="toolbar-save">
                                <span onclick="submitbutton('save')" class="btn btn-small">
                                <span class="fa fa-check"></span> Save &amp; Close</span>
                                </div>
                                <div class="btn-wrapper" id="toolbar-save-new">
                                <span onclick="submitbutton('saveNew')" class="btn btn-small">
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
                    <li>ACL allows you to add projects with start and end date, with estimated cost and its status.</li><li>You can create and manage multiple project for your company here.</li>
                </ul>
            </fieldset>
            </div>


            <div class="col100">
            <fieldset class="adminform">
            <legend>Add New Record</legend>
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
            <table class="adminform table table-striped">
                <tbody>
                    
                            <tr>
                        <th><label class="hasTip" title="">
                            Client<span style="color:Red;">*  </span></label>
                        </th>
                        <td class="sel_customer">
                        @php
                        $id = "";
                        $name = "Select Customer";
                        @endphp
                        @if(isset($selectedCustomer))
                            $id = $selectedCustomer['id'];
                            $name = $selectedCustomer['name'];
                        @endif
                        <input id="cust" type="text" readonly="" value="{{$name}}">
                        <a class="btn btn-primary modal" id="modal" title="Select Customer" data-toggle="modal" data-target="#selectCustomer">
                        <i class="fa fa-user hasTip" title=""></i>
                        </a>
                        </td>
                        <input id="client" type="hidden" value="{{$id}}" name="client">
                    </tr>
                            
                    <tr class="admintable">
                        <th width="200"><label class="hasTip" title="">
                            Project Name<span style="color:Red;">*  </span></label>
                        </th>
                        <td><input class="text_area" type="text" name="project_name" id="project_name" value=""></td>
                    </tr>
                    
                    <tr class="admintable">
                        <th width="200"><label class="hasTip" title="">Start Date<span style="color:Red;">*  </span></label></th>
                        <td><div class="field-calendar">
                    <div class="input-append">
                            <input type="text" id="start_date" name="start_date" value="" data-alt-value="" autocomplete="off">
                    <button type="button" class="btn btn-secondary" id="start_date_btn" data-inputfield="start_date" data-dayformat="%Y-%m-%d" data-button="start_date_btn" data-firstday="0" data-weekend="0,6" data-today-btn="1" data-week-numbers="1" data-show-time="0" data-show-others="1" data-time-24="24" data-only-months-nav="0" title="Open the calendar"><span class="icon-calendar" aria-hidden="true"></span></button>
                        </div>
            <div class="js-calendar" style="direction: ltr; position: absolute; box-shadow: rgba(0, 0, 0, 0.67) 0px 0px 70px 0px; min-width: 0px; padding: 0px; display: none; left: auto; top: auto; z-index: 1060; border-radius: 20px;"><div class="calendar-container"><table class="table" cellspacing="0" cellpadding="0" style="margin-bottom: 0px; visibility: visible;"><thead class="calendar-header"><tr class="calendar-head-row"><td colspan="1" class=" nav" style="text-align: center; font-size: 18px; line-height: 18px;"><a class="js-btn btn-prev-year" style="display:inline;padding:2px 6px;cursor:pointer;text-decoration:none;" unselectable="on">‹</a></td><td colspan="6" class="title"><div unselectable="on"><div style="text-align:center;font-size:18px"><span>2019</span></div></div></td><td colspan="1" class=" nav" style="text-align: center; font-size: 18px; line-height: 18px;"><a class="js-btn btn-next-year" style="display:inline;padding:2px 6px;cursor:pointer;text-decoration:none;" unselectable="on"> ›</a></td></tr><tr class="calendar-head-row"><td colspan="1" class=" nav" style="text-align: center; font-size: 2em; line-height: 1em;"><a class="js-btn btn-prev-month" style="display:inline;padding:2px 6px;cursor:pointer;text-decoration:none;" unselectable="on">‹</a></td><td colspan="6" class="title" style="text-align: center;"><div unselectable="on"><div style="text-align:center;font-size:1.2em"><span>October</span></div></div></td><td colspan="1" class=" nav" style="text-align: center; font-size: 2em; line-height: 1em;"><a class="js-btn btn-next-month" style="display:inline;padding:2px 6px;cursor:pointer;text-decoration:none;" unselectable="on"> ›</a></td></tr><tr class="daynames wk"><td class="day-name wn">wk</td><td class="day-name day-name-week">Sun</td><td class="day-name day-name-week">Mon</td><td class="day-name day-name-week">Tue</td><td class="day-name day-name-week">Wed</td><td class="day-name day-name-week">Thu</td><td class="day-name day-name-week">Fri</td><td class="day-name day-name-week">Sat</td></tr></thead><tbody><tr class="daysrow wk"><td class="day wn">39</td><td class="day disabled othermonth  weekend" style="text-align: center;">29</td><td class="day disabled othermonth " style="text-align: center;">30</td><td class="day" style="text-align: center; cursor: pointer;">1</td><td class="day" style="text-align: center; cursor: pointer;">2</td><td class="day" style="text-align: center; cursor: pointer;">3</td><td class="day" style="text-align: center; cursor: pointer;">4</td><td class="day weekend" style="text-align: center; cursor: pointer;">5</td></tr><tr class="daysrow wk"><td class="day wn">40</td><td class="day weekend" style="text-align: center; cursor: pointer;">6</td><td class="day" style="text-align: center; cursor: pointer;">7</td><td class="day" style="text-align: center; cursor: pointer;">8</td><td class="day" style="text-align: center; cursor: pointer;">9</td><td class="day" style="text-align: center; cursor: pointer;">10</td><td class="day" style="text-align: center; cursor: pointer;">11</td><td class="day weekend" style="text-align: center; cursor: pointer;">12</td></tr><tr class="daysrow wk"><td class="day wn">41</td><td class="day weekend" style="text-align: center; cursor: pointer;">13</td><td class="day" style="text-align: center; cursor: pointer;">14</td><td class="day" style="text-align: center; cursor: pointer;">15</td><td class="day" style="text-align: center; cursor: pointer;">16</td><td class="day" style="text-align: center; cursor: pointer;">17</td><td class="day" style="text-align: center; cursor: pointer;">18</td><td class="day weekend" style="text-align: center; cursor: pointer;">19</td></tr><tr class="daysrow wk"><td class="day wn">42</td><td class="day weekend" style="text-align: center; cursor: pointer;">20</td><td class="day selected today" style="text-align: center; cursor: pointer;">21</td><td class="day" style="text-align: center; cursor: pointer;">22</td><td class="day" style="text-align: center; cursor: pointer;">23</td><td class="day" style="text-align: center; cursor: pointer;">24</td><td class="day" style="text-align: center; cursor: pointer;">25</td><td class="day weekend" style="text-align: center; cursor: pointer;">26</td></tr><tr class="daysrow wk"><td class="day wn">43</td><td class="day weekend" style="text-align: center; cursor: pointer;">27</td><td class="day" style="text-align: center; cursor: pointer;">28</td><td class="day" style="text-align: center; cursor: pointer;">29</td><td class="day" style="text-align: center; cursor: pointer;">30</td><td class="day" style="text-align: center; cursor: pointer;">31</td><td class="day disabled othermonth " style="text-align: center;">1</td><td class="day disabled othermonth  weekend" style="text-align: center;">2</td></tr><tr class="daysrow wk"><td class="day wn">44</td><td class="day disabled othermonth  weekend" style="text-align: center;">3</td><td class="day disabled othermonth " style="text-align: center;">4</td><td class="day disabled othermonth " style="text-align: center;">5</td><td class="day disabled othermonth " style="text-align: center;">6</td><td class="day disabled othermonth " style="text-align: center;">7</td><td class="day disabled othermonth " style="text-align: center;">8</td><td class="day disabled othermonth  weekend" style="text-align: center;">9</td></tr></tbody></table><div class="buttons-wrapper btn-group"><button type="button" data-action="clear" class="js-btn btn btn-clear">Clear</button><button type="button" data-action="today" class="js-btn btn btn-today">Today</button><button type="button" data-action="exit" class="js-btn btn btn-exit">Close</button></div></div></div></div>
            </td>
                    </tr>
                    
                    <tr class="admintable">
                        <th width="200"><label class="hasTip" title="">End Date</label></th>
                        <td><div class="field-calendar">
                    <div class="input-append">
                            <input type="text" id="end_date" name="end_date" value="" data-alt-value="" autocomplete="off">
                    <button type="button" class="btn btn-secondary" id="end_date_btn" data-inputfield="end_date" data-dayformat="%Y-%m-%d" data-button="end_date_btn" data-firstday="0" data-weekend="0,6" data-today-btn="1" data-week-numbers="1" data-show-time="0" data-show-others="1" data-time-24="24" data-only-months-nav="0" title="Open the calendar"><span class="icon-calendar" aria-hidden="true"></span></button>
                        </div>
            <div class="js-calendar" style="direction: ltr; position: absolute; box-shadow: rgba(0, 0, 0, 0.67) 0px 0px 70px 0px; min-width: 0px; padding: 0px; display: none; left: auto; top: auto; z-index: 1060; border-radius: 20px;"><div class="calendar-container"><table class="table" cellspacing="0" cellpadding="0" style="margin-bottom: 0px; visibility: visible;"><thead class="calendar-header"><tr class="calendar-head-row"><td colspan="1" class=" nav" style="text-align: center; font-size: 18px; line-height: 18px;"><a class="js-btn btn-prev-year" style="display:inline;padding:2px 6px;cursor:pointer;text-decoration:none;" unselectable="on">‹</a></td><td colspan="6" class="title"><div unselectable="on"><div style="text-align:center;font-size:18px"><span>2019</span></div></div></td><td colspan="1" class=" nav" style="text-align: center; font-size: 18px; line-height: 18px;"><a class="js-btn btn-next-year" style="display:inline;padding:2px 6px;cursor:pointer;text-decoration:none;" unselectable="on"> ›</a></td></tr><tr class="calendar-head-row"><td colspan="1" class=" nav" style="text-align: center; font-size: 2em; line-height: 1em;"><a class="js-btn btn-prev-month" style="display:inline;padding:2px 6px;cursor:pointer;text-decoration:none;" unselectable="on">‹</a></td><td colspan="6" class="title" style="text-align: center;"><div unselectable="on"><div style="text-align:center;font-size:1.2em"><span>October</span></div></div></td><td colspan="1" class=" nav" style="text-align: center; font-size: 2em; line-height: 1em;"><a class="js-btn btn-next-month" style="display:inline;padding:2px 6px;cursor:pointer;text-decoration:none;" unselectable="on"> ›</a></td></tr><tr class="daynames wk"><td class="day-name wn">wk</td><td class="day-name day-name-week">Sun</td><td class="day-name day-name-week">Mon</td><td class="day-name day-name-week">Tue</td><td class="day-name day-name-week">Wed</td><td class="day-name day-name-week">Thu</td><td class="day-name day-name-week">Fri</td><td class="day-name day-name-week">Sat</td></tr></thead><tbody><tr class="daysrow wk"><td class="day wn">39</td><td class="day disabled othermonth  weekend" style="text-align: center;">29</td><td class="day disabled othermonth " style="text-align: center;">30</td><td class="day" style="text-align: center; cursor: pointer;">1</td><td class="day" style="text-align: center; cursor: pointer;">2</td><td class="day" style="text-align: center; cursor: pointer;">3</td><td class="day" style="text-align: center; cursor: pointer;">4</td><td class="day weekend" style="text-align: center; cursor: pointer;">5</td></tr><tr class="daysrow wk"><td class="day wn">40</td><td class="day weekend" style="text-align: center; cursor: pointer;">6</td><td class="day" style="text-align: center; cursor: pointer;">7</td><td class="day" style="text-align: center; cursor: pointer;">8</td><td class="day" style="text-align: center; cursor: pointer;">9</td><td class="day" style="text-align: center; cursor: pointer;">10</td><td class="day" style="text-align: center; cursor: pointer;">11</td><td class="day weekend" style="text-align: center; cursor: pointer;">12</td></tr><tr class="daysrow wk"><td class="day wn">41</td><td class="day weekend" style="text-align: center; cursor: pointer;">13</td><td class="day" style="text-align: center; cursor: pointer;">14</td><td class="day" style="text-align: center; cursor: pointer;">15</td><td class="day" style="text-align: center; cursor: pointer;">16</td><td class="day" style="text-align: center; cursor: pointer;">17</td><td class="day" style="text-align: center; cursor: pointer;">18</td><td class="day weekend" style="text-align: center; cursor: pointer;">19</td></tr><tr class="daysrow wk"><td class="day wn">42</td><td class="day weekend" style="text-align: center; cursor: pointer;">20</td><td class="day selected today" style="text-align: center; cursor: pointer;">21</td><td class="day" style="text-align: center; cursor: pointer;">22</td><td class="day" style="text-align: center; cursor: pointer;">23</td><td class="day" style="text-align: center; cursor: pointer;">24</td><td class="day" style="text-align: center; cursor: pointer;">25</td><td class="day weekend" style="text-align: center; cursor: pointer;">26</td></tr><tr class="daysrow wk"><td class="day wn">43</td><td class="day weekend" style="text-align: center; cursor: pointer;">27</td><td class="day" style="text-align: center; cursor: pointer;">28</td><td class="day" style="text-align: center; cursor: pointer;">29</td><td class="day" style="text-align: center; cursor: pointer;">30</td><td class="day" style="text-align: center; cursor: pointer;">31</td><td class="day disabled othermonth " style="text-align: center;">1</td><td class="day disabled othermonth  weekend" style="text-align: center;">2</td></tr><tr class="daysrow wk"><td class="day wn">44</td><td class="day disabled othermonth  weekend" style="text-align: center;">3</td><td class="day disabled othermonth " style="text-align: center;">4</td><td class="day disabled othermonth " style="text-align: center;">5</td><td class="day disabled othermonth " style="text-align: center;">6</td><td class="day disabled othermonth " style="text-align: center;">7</td><td class="day disabled othermonth " style="text-align: center;">8</td><td class="day disabled othermonth  weekend" style="text-align: center;">9</td></tr></tbody></table><div class="buttons-wrapper btn-group"><button type="button" data-action="clear" class="js-btn btn btn-clear">Clear</button><button type="button" data-action="today" class="js-btn btn btn-today">Today</button><button type="button" data-action="exit" class="js-btn btn btn-exit">Close</button></div></div></div></div>
            </td>
                    </tr>
                    
                    <tr class="admintable">
                        <th width="200"><label class="hasTip" title="">Estimated Cost</label></th>
                        <td><input class="text_area" type="text" name="estimated_cost" id="estimated_cost" value=""> R</td>
                    </tr>
                    
                    <tr>
                        <th><label class="hasTip" title="">Status<span style="color:Red;">*  </span></label></th>
                        <td>
                            <select name="status">
                            <option value="ongoing">Ongoing</option>
                            <option value="completed">Completed</option>
                            </select>
                            <!-- <div class="chzn-container chzn-container-single chzn-container-single-nosearch" style="width: 101px;" title=""><a class="chzn-single"><span>Ongoing</span><div><b></b></div></a><div class="chzn-drop"><div class="chzn-search"><input type="text" autocomplete="off" readonly=""></div><ul class="chzn-results"></ul></div></div> -->
                        </td>
                    </tr>
                    
                    <tr>
                        <th><label class="hasTip" title="">Description</label></th>
                        <td><textarea class="text_area" name="descriptions" id="descriptions" rows="4" cols="50"></textarea></td>
                    </tr>
                    
                    <tr>
                        <th><label class="hasTip" title="">Employee<span style="color:Red;">*  </span></label></th>
                        <td>
                        <select multiple="multiple" id="my-select" name="employeeList[]">
                            @foreach ($employees as $employee)
                            <option value="{{$employee->employee_id}}">{{$employee->first_name}}&nbsp;{{$employee->last_name}}</option>

                            @endforeach
                            </select>
                        </td>
                    </tr>
                    
                </tbody>
            </table>
            </fieldset>
            </div>
            <div class="clr"></div>
            <input type="hidden" name="option" value="project_create">
            <input type="hidden" name="id" value="">
            <input type="hidden" name="task" value="">
            <input type="hidden" name="view" value="projects">
        </form>
    </div>



    

</div>




<!-- Modal -->
<div class="modal fade" id="selectCustomer" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
          <iframe id="customer" src="{{route('projects.customer')}}" width="580" height="380" frameborder="0" allowtransparency="true">
          
          </iframe>  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

@endsection
@section('script')


<script type="text/javascript">

// <---------- Date Time Pickers Start----------> 
$(function(){
    $("#start_date").datepicker({
        dateFormat: 'dd/mm/yy'
    });
    $('#start_date_btn').click(function () {
    $('#start_date').datepicker("show");
    });
    $("#end_date").datepicker({
        dateFormat: 'dd/mm/yy'
    });
    $('#end_date_btn').click(function () {
    $('#end_date').datepicker("show");
    });
});
// <---------- Date Time Pickers Start----------> 

</script> 
<script src="{{ asset('plugins/datatables/media/js/jquery.dataTables.js') }}"></script>
        <script src="{{ asset('plugins/datatables/media/js/dataTables.bootstrap.js') }}"></script>
        <script src="{{ asset('plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('js/jquery.multi-select.js') }}" type="text/javascript"></script>

<script>
$('#my-select').multiSelect();
$('#my-select').on('change',function(){
    console.log($(this).val());
});


function submitbutton(option){
    
if(option == 'addCustomer'){
	console.log(option);
}else if (option == 'apply') {

}else if (option == 'cancel') {
// var department_id = $('#boxChecked').val();
var url = '{{ route("projects.index") }}';
// console.log(department_id);
document.location.href=url;
}else{
}


}

function getCustVal(id,name){
	// console.log(id+ " => " + name);
    $('#selectCustomer').modal('toggle');
    $('#cust').val(name);
    $('#client').val(id);

}
</script>

@endsection