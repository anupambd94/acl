@extends('layouts.app')

@section('content')
<header class="header">
	<div class="container-title">
		<h1 class="page-title">Attendance</h1>
	</div>
</header>
<div class="content_part">
    <form action="/vbizz-dashboard/attendance" method="post" name="adminForm" id="adminForm">
    
    
    <div class="adminlist filter">
        <div class="filet_left">
            <input type="text" name="search" id="search" placeholder="Search" value="" class="text_area">
            <button class="btn hasTooltip" title="Search" onclick="this.form.submit();"><i class="fa fa-search"></i></button>
            <button class="btn hasTooltip" title="Clear" onclick="document.getElementById('search').value='';this.form.submit();"><i class="fa fa-remove"></i></button>
        </div>
    </div>
    
    
    <div id="editcell">
    <div class="at_toolbar">
    <div class="at_toolbar_left">
        <div class="prev-btn-wrapper">
            <span class="btn btn-small" id="my-prev-button"><span class="fa fa-backward"></span></span>
        </div>
        
        <div class="next-btn-wrapper">
            <span class="btn btn-small" id="my-next-button"><span class="fa fa-forward"></span></span>
        </div>
        
        <div class="today-btn-wrapper">
            <span class="btn btn-small" id="my-today-button">Today</span>
        </div>
        </div>
        <div class="at_toolbar_right">
        <div class="btn-wrapper">
                <span onclick="Joomla.submitbutton('todayAttendance')" class="btn btn-small">
                <span class="fa fa-pencil"></span> Mark Attendance</span>
            </div>
            </div>
            </div>
        
        <table class="adminlist table">
            <thead>
                <tr>
                    <th width="10">#</th>
                    <th>Name</th>
                    <th></th>
                </tr>
            </thead>
                        
                <script type="text/javascript">
    
                    jQuery(document).ready(function() {
                        initializeCalendar0();
                    });
                    
                    
                        
                        function initializeCalendar0() {
                            jQuery('#attendance_0').fullCalendar({
                                header: {
                                    left: '',
                                    center: 'title',
                                    right: ''
                                },
                                
                                defaultView: 'basicWeek',
                                firstDay: 0,
                                contentHeight: 'auto',
                                selectable: true,
                                selectHelper: true,
                                editable: false,
                                eventLimit: false, 
                                
                                events: function(start, end, timezone, callback) {
                                    jQuery.ajax({
                                        url: 'index.php',
                                        type: "POST",
                                        dataType:"json",
                                        data: { 'option':'com_vbizz', 'view':'attendance', 'task':'attendance', 'tmpl':'component', 'start':start.unix(), 'end':end.unix(), 'employee':75 },
                                        
                                        success: function(data) {
                                            var events = data.attendance;
                                            callback(events);
                                        }
                                    });
                                },
                                
                                eventRender: function(event, element) { 
                                    element.find('.fc-title').append("<br/>" + event.htitle); 
                                    element.find('.fc-title').append("<br/>" + event.ltitle); 
                                },
                                
                                dayRender: function (date, cell) {
                                    var weekoff = 'fc-tue,fc-wed,fc-thu,fc-fri';
                                    if(weekoff != "") {
                                        var weekoffday = weekoff.split(',');
                                        
                                        for(var i=0; i<weekoffday.length; i++) {
                                            var cl = weekoffday[i];
                                            jQuery('.'+cl).css('color','red');
                                        }
                                    }
                                },
                                
                                dayClick: function(date, jsEvent, view) { 
                                     
                                    var that = this;
                                    jQuery.ajax({
                                        url: 'index.php',
                                        type: "POST",
                                        dataType:"JSON",
                                        data: {'option':'com_vbizz', 'view':'attendance', 'task':'attendValue', 'tmpl':'component', 'date':date.format(), 'employee':75, 'divNO':0 },
                                        
                                        success: function(data){
                                            if(data.result=="success"){
                                                jQuery(that).parent().append(data.htm);
                                                jQuery( "#dialog" ).dialog();
                                            } else {
                                                alert(data.msg);
                                            }
                                        }
                                    });
                                }
                                
                            });
                        }
                    
    
                </script>
                <tbody><tr class="row0">
                
                    <td align="center">1</td>
                                    
                    <td align="center">firmanpd</td>
                    
                    <td><div id="attendance_0" class="fc fc-ltr fc-unthemed"><div class="fc-toolbar"><div class="fc-left"></div><div class="fc-right"></div><div class="fc-center"><h2>Aug 25 — 31, 2019</h2></div><div class="fc-clear"></div></div><div class="fc-view-container" style=""><div class="fc-view fc-basicWeek-view fc-basic-view" style=""><table><thead><tr><td class="fc-widget-header"><div class="fc-row fc-widget-header"><table><thead><tr><th class="fc-day-header fc-widget-header fc-sun">Sun 8/25</th><th class="fc-day-header fc-widget-header fc-mon">Mon 8/26</th><th class="fc-day-header fc-widget-header fc-tue" style="color: rgb(255, 0, 0);">Tue 8/27</th><th class="fc-day-header fc-widget-header fc-wed" style="color: rgb(255, 0, 0);">Wed 8/28</th><th class="fc-day-header fc-widget-header fc-thu" style="color: rgb(255, 0, 0);">Thu 8/29</th><th class="fc-day-header fc-widget-header fc-fri" style="color: rgb(255, 0, 0);">Fri 8/30</th><th class="fc-day-header fc-widget-header fc-sat">Sat 8/31</th></tr></thead></table></div></td></tr></thead><tbody><tr><td class="fc-widget-content"><div class="fc-day-grid-container" style=""><div class="fc-day-grid"><div class="fc-row fc-week fc-widget-content"><div class="fc-bg"><table><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-today fc-state-highlight" data-date="2019-08-25"></td><td class="fc-day fc-widget-content fc-mon fc-future" data-date="2019-08-26"></td><td class="fc-day fc-widget-content fc-tue fc-future" data-date="2019-08-27" style="color: rgb(255, 0, 0);"></td><td class="fc-day fc-widget-content fc-wed fc-future" data-date="2019-08-28" style="color: rgb(255, 0, 0);"></td><td class="fc-day fc-widget-content fc-thu fc-future" data-date="2019-08-29" style="color: rgb(255, 0, 0);"></td><td class="fc-day fc-widget-content fc-fri fc-future" data-date="2019-08-30" style="color: rgb(255, 0, 0);"></td><td class="fc-day fc-widget-content fc-sat fc-future" data-date="2019-08-31"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div></div></div></td></tr></tbody></table></div></div></div></td>
                    
                    <input type="hidden" name="employee" value="75">
                    
                </tr>
               
                    
                            
                <script type="text/javascript">
    
                    jQuery(document).ready(function() {
                        initializeCalendar1();
                    });
                    
                    
                        
                        function initializeCalendar1() {
                            jQuery('#attendance_1').fullCalendar({
                                header: {
                                    left: '',
                                    center: 'title',
                                    right: ''
                                },
                                
                                defaultView: 'basicWeek',
                                firstDay: 0,
                                contentHeight: 'auto',
                                selectable: true,
                                selectHelper: true,
                                editable: false,
                                eventLimit: false, 
                                
                                events: function(start, end, timezone, callback) {
                                    jQuery.ajax({
                                        url: 'index.php',
                                        type: "POST",
                                        dataType:"json",
                                        data: { 'option':'com_vbizz', 'view':'attendance', 'task':'attendance', 'tmpl':'component', 'start':start.unix(), 'end':end.unix(), 'employee':60 },
                                        
                                        success: function(data) {
                                            var events = data.attendance;
                                            callback(events);
                                        }
                                    });
                                },
                                
                                eventRender: function(event, element) { 
                                    element.find('.fc-title').append("<br/>" + event.htitle); 
                                    element.find('.fc-title').append("<br/>" + event.ltitle); 
                                },
                                
                                dayRender: function (date, cell) {
                                    var weekoff = 'fc-tue,fc-wed,fc-thu,fc-fri';
                                    if(weekoff != "") {
                                        var weekoffday = weekoff.split(',');
                                        
                                        for(var i=0; i<weekoffday.length; i++) {
                                            var cl = weekoffday[i];
                                            jQuery('.'+cl).css('color','red');
                                        }
                                    }
                                },
                                
                                dayClick: function(date, jsEvent, view) { 
                                     
                                    var that = this;
                                    jQuery.ajax({
                                        url: 'index.php',
                                        type: "POST",
                                        dataType:"JSON",
                                        data: {'option':'com_vbizz', 'view':'attendance', 'task':'attendValue', 'tmpl':'component', 'date':date.format(), 'employee':60, 'divNO':1 },
                                        
                                        success: function(data){
                                            if(data.result=="success"){
                                                jQuery(that).parent().append(data.htm);
                                                jQuery( "#dialog" ).dialog();
                                            } else {
                                                alert(data.msg);
                                            }
                                        }
                                    });
                                }
                                
                            });
                        }
                    
    
                </script>
                <tr class="row1">
                
                    <td align="center">2</td>
                                    
                    <td align="center">test</td>
                    
                    <td><div id="attendance_1" class="fc fc-ltr fc-unthemed"><div class="fc-toolbar"><div class="fc-left"></div><div class="fc-right"></div><div class="fc-center"><h2>Aug 25 — 31, 2019</h2></div><div class="fc-clear"></div></div><div class="fc-view-container" style=""><div class="fc-view fc-basicWeek-view fc-basic-view" style=""><table><thead><tr><td class="fc-widget-header"><div class="fc-row fc-widget-header"><table><thead><tr><th class="fc-day-header fc-widget-header fc-sun">Sun 8/25</th><th class="fc-day-header fc-widget-header fc-mon">Mon 8/26</th><th class="fc-day-header fc-widget-header fc-tue" style="color: rgb(255, 0, 0);">Tue 8/27</th><th class="fc-day-header fc-widget-header fc-wed" style="color: rgb(255, 0, 0);">Wed 8/28</th><th class="fc-day-header fc-widget-header fc-thu" style="color: rgb(255, 0, 0);">Thu 8/29</th><th class="fc-day-header fc-widget-header fc-fri" style="color: rgb(255, 0, 0);">Fri 8/30</th><th class="fc-day-header fc-widget-header fc-sat">Sat 8/31</th></tr></thead></table></div></td></tr></thead><tbody><tr><td class="fc-widget-content"><div class="fc-day-grid-container" style=""><div class="fc-day-grid"><div class="fc-row fc-week fc-widget-content"><div class="fc-bg"><table><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-today fc-state-highlight" data-date="2019-08-25"></td><td class="fc-day fc-widget-content fc-mon fc-future" data-date="2019-08-26"></td><td class="fc-day fc-widget-content fc-tue fc-future" data-date="2019-08-27" style="color: rgb(255, 0, 0);"></td><td class="fc-day fc-widget-content fc-wed fc-future" data-date="2019-08-28" style="color: rgb(255, 0, 0);"></td><td class="fc-day fc-widget-content fc-thu fc-future" data-date="2019-08-29" style="color: rgb(255, 0, 0);"></td><td class="fc-day fc-widget-content fc-fri fc-future" data-date="2019-08-30" style="color: rgb(255, 0, 0);"></td><td class="fc-day fc-widget-content fc-sat fc-future" data-date="2019-08-31"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div></div></div></td></tr></tbody></table></div></div></div></td>
                    
                    <input type="hidden" name="employee" value="60">
                    
                </tr>
               
                    
                            
                <script type="text/javascript">
    
                    jQuery(document).ready(function() {
                        initializeCalendar2();
                    });
                    
                    
                        
                        function initializeCalendar2() {
                            jQuery('#attendance_2').fullCalendar({
                                header: {
                                    left: '',
                                    center: 'title',
                                    right: ''
                                },
                                
                                defaultView: 'basicWeek',
                                firstDay: 0,
                                contentHeight: 'auto',
                                selectable: true,
                                selectHelper: true,
                                editable: false,
                                eventLimit: false, 
                                
                                events: function(start, end, timezone, callback) {
                                    jQuery.ajax({
                                        url: 'index.php',
                                        type: "POST",
                                        dataType:"json",
                                        data: { 'option':'com_vbizz', 'view':'attendance', 'task':'attendance', 'tmpl':'component', 'start':start.unix(), 'end':end.unix(), 'employee':58 },
                                        
                                        success: function(data) {
                                            var events = data.attendance;
                                            callback(events);
                                        }
                                    });
                                },
                                
                                eventRender: function(event, element) { 
                                    element.find('.fc-title').append("<br/>" + event.htitle); 
                                    element.find('.fc-title').append("<br/>" + event.ltitle); 
                                },
                                
                                dayRender: function (date, cell) {
                                    var weekoff = 'fc-tue,fc-wed,fc-thu,fc-fri';
                                    if(weekoff != "") {
                                        var weekoffday = weekoff.split(',');
                                        
                                        for(var i=0; i<weekoffday.length; i++) {
                                            var cl = weekoffday[i];
                                            jQuery('.'+cl).css('color','red');
                                        }
                                    }
                                },
                                
                                dayClick: function(date, jsEvent, view) { 
                                     
                                    var that = this;
                                    jQuery.ajax({
                                        url: 'index.php',
                                        type: "POST",
                                        dataType:"JSON",
                                        data: {'option':'com_vbizz', 'view':'attendance', 'task':'attendValue', 'tmpl':'component', 'date':date.format(), 'employee':58, 'divNO':2 },
                                        
                                        success: function(data){
                                            if(data.result=="success"){
                                                jQuery(that).parent().append(data.htm);
                                                jQuery( "#dialog" ).dialog();
                                            } else {
                                                alert(data.msg);
                                            }
                                        }
                                    });
                                }
                                
                            });
                        }
                    
    
                </script>
                <tr class="row0">
                
                    <td align="center">3</td>
                                    
                    <td align="center">Test Employee</td>
                    
                    <td><div id="attendance_2" class="fc fc-ltr fc-unthemed"><div class="fc-toolbar"><div class="fc-left"></div><div class="fc-right"></div><div class="fc-center"><h2>Aug 25 — 31, 2019</h2></div><div class="fc-clear"></div></div><div class="fc-view-container" style=""><div class="fc-view fc-basicWeek-view fc-basic-view" style=""><table><thead><tr><td class="fc-widget-header"><div class="fc-row fc-widget-header"><table><thead><tr><th class="fc-day-header fc-widget-header fc-sun">Sun 8/25</th><th class="fc-day-header fc-widget-header fc-mon">Mon 8/26</th><th class="fc-day-header fc-widget-header fc-tue" style="color: rgb(255, 0, 0);">Tue 8/27</th><th class="fc-day-header fc-widget-header fc-wed" style="color: rgb(255, 0, 0);">Wed 8/28</th><th class="fc-day-header fc-widget-header fc-thu" style="color: rgb(255, 0, 0);">Thu 8/29</th><th class="fc-day-header fc-widget-header fc-fri" style="color: rgb(255, 0, 0);">Fri 8/30</th><th class="fc-day-header fc-widget-header fc-sat">Sat 8/31</th></tr></thead></table></div></td></tr></thead><tbody><tr><td class="fc-widget-content"><div class="fc-day-grid-container" style=""><div class="fc-day-grid"><div class="fc-row fc-week fc-widget-content"><div class="fc-bg"><table><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-today fc-state-highlight" data-date="2019-08-25"></td><td class="fc-day fc-widget-content fc-mon fc-future" data-date="2019-08-26"></td><td class="fc-day fc-widget-content fc-tue fc-future" data-date="2019-08-27" style="color: rgb(255, 0, 0);"></td><td class="fc-day fc-widget-content fc-wed fc-future" data-date="2019-08-28" style="color: rgb(255, 0, 0);"></td><td class="fc-day fc-widget-content fc-thu fc-future" data-date="2019-08-29" style="color: rgb(255, 0, 0);"></td><td class="fc-day fc-widget-content fc-fri fc-future" data-date="2019-08-30" style="color: rgb(255, 0, 0);"></td><td class="fc-day fc-widget-content fc-sat fc-future" data-date="2019-08-31"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div></div></div></td></tr></tbody></table></div></div></div></td>
                    
                    <input type="hidden" name="employee" value="58">
                    
                </tr>
               
                    
                    
            </tbody><tfoot>
                <tr>
                  <td colspan="10">
    <div class="pagination pagination-toolbar clearfix" style="text-align: center;">
    
                <div class="limit pull-right">
                Display #<select id="limit" name="limit" class="inputbox input-mini" size="1" onchange="this.form.submit()" style="">
                            <option value="5">5</option>
                            <option value="10">10</option>
                            <option value="15">15</option>
                            <option value="20" selected="selected">20</option>
                            <option value="25">25</option>
                            <option value="30">30</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                            <option value="0">All</option>
                        </select>
    {{-- <div class="chzn-container chzn-container-single chzn-container-single-nosearch" style="width: 59px;" title="" id="limit_chzn"><a class="chzn-single"><span>20</span><div><b></b></div></a><div class="chzn-drop"><div class="chzn-search"><input type="text" autocomplete="off" readonly=""></div><ul class="chzn-results"></ul></div></div> --}}
            </div>
        
        
                <input type="hidden" name="limitstart" value="0">
        
    </div>
    </td>
                </tr>
            </tfoot>
      
        </table>
    </div>
    
    <script>
    jQuery(document).ready(function() {
        jQuery('#my-next-button').click(function() {
            jQuery("#attendance_0").fullCalendar("next");jQuery("#attendance_1").fullCalendar("next");jQuery("#attendance_2").fullCalendar("next");	});
        jQuery('#my-prev-button').click(function() {
            jQuery("#attendance_0").fullCalendar("prev");jQuery("#attendance_1").fullCalendar("prev");jQuery("#attendance_2").fullCalendar("prev");	});
        jQuery('#my-today-button').click(function() {
            jQuery("#attendance_0").fullCalendar("today");jQuery("#attendance_1").fullCalendar("today");jQuery("#attendance_2").fullCalendar("today");	});
    });
    </script>
    
    <input type="hidden" name="option" value="com_vbizz">
    <input type="hidden" name="task" value="">
    <input type="hidden" name="boxchecked" value="0">
    <input type="hidden" name="view" value="attendance">
    <input type="hidden" name="filter_order" value="userid">
    <input type="hidden" name="filter_order_Dir" value="desc">
    </form>
    </div>
@endsection

@section('script')

@endsection