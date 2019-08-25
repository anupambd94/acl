@extends('layouts.app')
@section('content')
    <!-- <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3>Posts</h3></div>
                    <div class="panel-heading">Page {{ $posts->currentPage() }} of {{ $posts->lastPage() }}</div>
                    {{-- Loop thru posts --}}
                    @foreach ($posts as $post) 
                        <div class="panel-body">
                            <li style="list-style-type:disc">
                                <a href="{{ route('posts.show', $post->id ) }}"><b>{{ $post->title }}</b><br>
                                    <p class="teaser">
                                       {{  str_limit($post->body, 100) }} {{-- Limit teaser to 100 characters --}}
                                    </p>
                                </a>
                            </li>
                        </div>
                    @endforeach
                    </div>
                    <div class="text-center">
                        {!! $posts->links() !!}
                    </div>
                </div>
            </div>
        </div> -->
        <div class="container">
		<!-- Header Start -->
		<header class="header">
			<div class="container-title">
				<h1 class="page-title">Dashboard</h1>
				<div class="hx_dash_button">
		
			
				<a href="javascript:void(0);" class="btn btn-small btn-success" onclick="insert();">
				<span class="fa fa-plus"></span> Add Widget		</a>		 
					<a href="javascript:void(0);" class="btn btn-small" onclick="Joomla.submitbutton('checkin');">
					<span class="fa fa-check"></span> Check-in			</a>		
				
		</div>

			</div>
		</header>
		<!-- header end -->

		<div class="content_part dashboard_page">  
<div id="vbizzpanel">
<div class="vbizz_overlay" style="display:none;"> 
<img class="vbizz-loading" src="http://vbizz.joomlawings.com//media/com_vbizz/images/loading_second.gif" alt="">
</div>
<form action="/vbizz-dashboard/vbizz" method="post" name="adminForm" id="adminForm" enctype="multipart/form-data">

<div class="clr">
</div>
<div class="clr" style="clear:both;">
</div>

<div class="profile-section">
<ul id="sortable1" class="connectedsortable ui-sortable">
	  <li class="common_profile_main single_formate num1 ui-sortable-handle" data-ordering-profile="101:1" style="width:23%;height:130px;">
		
		<div class="panel_header">
			    				</div>
		
		<div class="profile_mid_data">
	  <div class="vbizz_box m_income">
<div class="vbizz_value"><i class="fa fa-calendar-plus-o"><strong>icon</strong></i> <span class="vac_value"><span class="innser_single_trigger" data-profile-ids="profile_101" id="inner_single_Amount">0</span></span> <span class="currency">$<br></span></div>
<h3>Monthly Income</h3>
</div>		 </div>
		  </li>
		  	  <li class="common_profile_main single_formate num2 ui-sortable-handle" data-ordering-profile="102:2" style="width:23%;height:130px;">
		
		<div class="panel_header">
			    				</div>
		
		<div class="profile_mid_data">
	  <div class="vbizz_box m_expense">
<div class="vbizz_value"><i class="fa fa-calendar-minus-o"><strong>icon</strong></i> <span class="vac_value"><span class="innser_single_trigger" data-profile-ids="profile_102" id="inner_single_Amount">0</span></span> <span class="currency">$<br></span></div>
<h3>Monthly Expense</h3>
</div>		 </div>
		  </li>
		  	  <li class="common_profile_main single_formate num3 ui-sortable-handle" data-ordering-profile="100:3" style="width:23%;height:130px;">
		
		<div class="panel_header">
			    				</div>
		
		<div class="profile_mid_data">
	  <div class="vbizz_box t_expense">
<div class="vbizz_value"><i class="fa fa-minus-square"><strong>icon</strong></i> <span class="vac_value"><span class="innser_single_trigger" data-profile-ids="profile_100" id="inner_single_Amount">0</span></span> <span class="currency">$<br></span></div>
<h3>Today Expense</h3>
</div>		 </div>
		  </li>
		  	  <li class="common_profile_main single_formate num4 ui-sortable-handle" data-ordering-profile="99:4" style="width:23%;height:130px;">
		
		<div class="panel_header">
			    				</div>
		
		<div class="profile_mid_data">
	  <div class="vbizz_box t_income">
<div class="vbizz_value"><i class="fa fa-plus-square"><strong>icon</strong></i> <span class="vac_value"><span class="innser_single_trigger" data-profile-ids="profile_99" id="inner_single_Amount">0</span></span> <span class="currency">$<br></span></div>
<h3>Today Income</h3>
</div>		 </div>
		  </li>
		  	<li class="common_profile_main num5 ui-sortable-handle" data-ordering-profile="118:5" style="width:98%;height:430px;" data-options="widget_118:Column Chart:charting_formate">
	<div class="panel_header">
	
	<span class="profile_name">Income/Expense</span>			</div>
	<div class="profile_mid_data">
	
	<ul>
	
	 <li class="chart_profile num5" data-ordering-profile="118:5" style="height:357px"> <div id="widget_118" class="widget_chart" data-profile-id="drawchart118" style="height:357px"><div style="position: relative;"><div dir="ltr" style="position: relative; width: 951px; height: 357px;"><div aria-label="A chart." style="position: absolute; left: 0px; top: 0px; width: 100%; height: 100%;"><svg width="951" height="357" aria-label="A chart." style="overflow: hidden;"><defs id="defs"><clipPath id="_ABSTRACT_RENDERER_ID_0"><rect x="134" y="68" width="683" height="221"></rect></clipPath></defs><rect x="0" y="0" width="951" height="357" stroke="none" stroke-width="0" fill="#ffffff"></rect><g><rect x="831" y="68" width="106" height="37" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect><g><rect x="831" y="68" width="106" height="14" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect><g><text text-anchor="start" x="864" y="79.9" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#222222">Income</text></g><rect x="831" y="68" width="28" height="14" stroke="none" stroke-width="0" fill="#3366cc"></rect></g><g><rect x="831" y="91" width="106" height="14" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect><g><text text-anchor="start" x="864" y="102.9" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#222222">Expense</text></g><rect x="831" y="91" width="28" height="14" stroke="none" stroke-width="0" fill="#dc3912"></rect></g></g><g><rect x="134" y="68" width="683" height="221" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect><g clip-path="url(http://vbizz.joomlawings.com/vbizz-dashboard#_ABSTRACT_RENDERER_ID_0)"><g><rect x="134" y="288" width="683" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect><rect x="134" y="233" width="683" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect><rect x="134" y="178" width="683" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect><rect x="134" y="123" width="683" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect><rect x="134" y="68" width="683" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect></g><g><rect x="156" y="288" width="35" height="0.5" stroke="none" stroke-width="0" fill="#3366cc"></rect><rect x="270" y="288" width="35" height="0.5" stroke="none" stroke-width="0" fill="#3366cc"></rect><rect x="384" y="286" width="34" height="2" stroke="none" stroke-width="0" fill="#3366cc"></rect><rect x="497" y="287.774" width="35" height="0.7259999999999991" stroke="none" stroke-width="0" fill="#3366cc"></rect><rect x="611" y="286" width="35" height="2" stroke="none" stroke-width="0" fill="#3366cc"></rect><rect x="725" y="88" width="34" height="200" stroke="none" stroke-width="0" fill="#3366cc"></rect><rect x="192" y="274" width="34" height="14" stroke="none" stroke-width="0" fill="#dc3912"></rect><rect x="306" y="286" width="34" height="2" stroke="none" stroke-width="0" fill="#dc3912"></rect><rect x="419" y="288" width="35" height="0.5" stroke="none" stroke-width="0" fill="#dc3912"></rect><rect x="533" y="286.74" width="34" height="1.759999999999991" stroke="none" stroke-width="0" fill="#dc3912"></rect><rect x="647" y="288" width="34" height="0.5" stroke="none" stroke-width="0" fill="#dc3912"></rect><rect x="760" y="97" width="35" height="191" stroke="none" stroke-width="0" fill="#dc3912"></rect></g><g><rect x="134" y="288" width="683" height="1" stroke="none" stroke-width="0" fill="#333333"></rect></g></g><g></g><g><g><text text-anchor="middle" x="191.33333333333334" y="309.9" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#222222">Oct</text></g><g><text text-anchor="middle" x="305" y="309.9" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#222222">Nov</text></g><g><text text-anchor="middle" x="418.6666666666667" y="309.9" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#222222">Mar</text></g><g><text text-anchor="middle" x="532.3333333333334" y="309.9" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#222222">Apr</text></g><g><text text-anchor="middle" x="646" y="309.9" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#222222">Jun</text></g><g><text text-anchor="middle" x="759.6666666666667" y="309.9" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#222222">Jul</text></g><g><text text-anchor="end" x="120" y="293.4" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#444444">0</text></g><g><text text-anchor="end" x="120" y="238.4" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#444444">2,000</text></g><g><text text-anchor="end" x="120" y="183.4" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#444444">4,000</text></g><g><text text-anchor="end" x="120" y="128.4" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#444444">6,000</text></g><g><text text-anchor="end" x="120" y="73.4" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#444444">8,000</text></g></g></g><g></g></svg><div aria-label="A tabular representation of the data in the chart." style="position: absolute; left: -10000px; top: auto; width: 1px; height: 1px; overflow: hidden;"><table><thead><tr><th>Month</th><th>Income</th><th>Expense</th></tr></thead><tbody><tr><td>Oct</td><td>0,00</td><td>535,00</td></tr><tr><td>Nov</td><td>0,00</td><td>111,00</td></tr><tr><td>Mar</td><td>112,00</td><td>0,00</td></tr><tr><td>Apr</td><td>33,00</td><td>80,00</td></tr><tr><td>Jun</td><td>112,00</td><td>0,00</td></tr><tr><td>Jul</td><td>7.299,00</td><td>7.000,00</td></tr></tbody></table></div></div></div><div aria-hidden="true" style="display: none; position: absolute; top: 367px; left: 961px; white-space: nowrap; font-family: Arial; font-size: 14px;">Expense</div><div></div></div></div></li><script type="text/javascript">  if(typeof google !== "undefined") 
			google.load("visualization", "1.1", {"packages":["corechart", "controls"], callback: drawchart118});	

			function drawchart118(data) {
				
				if(data!=null){
					var data118 = data;
				}else{
					var data118 = google.visualization.arrayToDataTable([[{"type":"string", "label":"Month"}, "Income", "Expense"],["Oct", 0.00, 535.00],["Nov", 0.00, 111.00],["Mar", 112.00, 0.00],["Apr", 33.00, 80.00],["Jun", 112.00, 0.00],["Jul", 7299.00, 7000.00]]);
				}
               for(var c=1;c<parseInt(data118.getNumberOfColumns());c++)
			   {
				   var formatter = new google.visualization.NumberFormat(
				  {decimalSymbol: "," , groupingSymbol: "." });
				   formatter.format(data118, c);
			   }
				
				var chart118 = new google.visualization.ChartWrapper({
					chartType: "ColumnChart",
					containerId: "widget_118",
					dataTable: data118,
					options : [{hAxis: {title: "Month", textPosition: "out"},vAxis: {title: "Value", decimalSymbol: "," , groupingSymbol: "." },legend: {position:"right"},width:"100%",height:"100%",chartArea:{top:30,height:"75%",width:"75%"},colors: ["#67B7DC", "#FDD400", "#84B761", "#CC4748", "#cd82ad", "#2f4074", "#B5CBE9", "#FF9873", "#1D90FA", "#D77C7C"]}]
				})
				var columns118 = [0];

				var seriesMap118 = [{column: 1,display: true},{column: 2,display: true}];
				var columnsMap118 = {};
				var series118 = [];
				for (var i = 0; i < seriesMap118.length; i++) {
					var col118 = seriesMap118[i].column;
					columnsMap118[col118] = i;

					series118[i] = {};
					if (seriesMap118[i].display) {

						columns118.push(col118);
					}
					else {

						columns118.push({
							label: data118.getColumnLabel(col118),
							type: data118.getColumnType(col118),
							sourceColumn: col118,
							calc: function () {
								return null;
							}
						});

					if (typeof(series118[i].color) !== "undefined") {
						series118[i].backupColor = series118[i].color;
					}
					series118[i].color = "#CCCCCC";
					}

				}

				chart118.setOption("series", series118);



				google.visualization.events.addListener(chart118, "select", showHideSeries118);
				function showHideSeries118 () {
					var sel118 = chart118.getChart().getSelection();

					if (sel118.length > 0) {

						if (sel118[0].row == null) {
							var col118 = sel118[0].column;
							if (typeof(columns118[col118]) == "number") {
								var src118 = columns118[col118];


								columns118[col118] = {
									label: data118.getColumnLabel(src118),
									type: data118.getColumnType(src118),
									sourceColumn: src118,
									calc: function () {
										return null;
									}
								};
								series118[columnsMap118[src118]].color = "#CCCCCC";
							}
							else {
								var src118 = columns118[col118].sourceColumn;


								columns118[col118] = src118;
								series118[columnsMap118[src118]].color = null;
							}
							var view118 = chart118.getView() || {};
							view118.columns = columns118;
							chart118.setView(view118);
							chart118.draw();
						}
					}
				}

				var view118 = {
					columns: columns118
				};
				chart118.draw();}</script></ul></div></li>	   <li class="common_profile_main listing_formate num6 ui-sortable-handle" data-ordering-profile="106:6" style="width:48%;height:280px;" data-options="widget_106:Column Chart:listing_formate">
		<div class="panel_header">
		<span class="profile_name">Latest Income</span>						</div>
		<div class="profile_mid_data common_class_listing_format">
	  <div class="listing_layout_others" style="height:205px;"><table class="common_class_listing_format_new adminlist table table-hover listing_info listing_info_106" width="100%"><thead><tr><th>Date</th><th>Title</th><th>Amount</th></tr></thead><tbody><tr><td>21-06-2019</td><td>INV2019</td><td>1.273,00</td></tr><tr><td>30-03-2019</td><td>new</td><td>6.283,00</td></tr></tbody></table></div>		 </div>
		  </li>
			   <li class="common_profile_main listing_formate num7 ui-sortable-handle" data-ordering-profile="104:7" style="width:48%;height:280px;" data-options="widget_104::listing_formate">
		<div class="panel_header">
		<span class="profile_name">Whom We Owe</span>						</div>
		<div class="profile_mid_data common_class_listing_format">
	  <div class="listing_layout_others" style="height:205px;"><table class="common_class_listing_format_new adminlist table table-hover listing_info listing_info_104" width="100%"><thead><tr><th>Title</th><th>Amount</th><th>Vendor</th></tr></thead><tbody><tr><td>Addendum</td><td>60,00</td><td>Libor Stejskal</td></tr><tr><td>test PO</td><td>20,00</td><td>dfdf</td></tr><tr><td>test Salary</td><td>111,00</td><td></td></tr><tr><td>test545</td><td>7.000,00</td><td>Test LandLord</td></tr><tr><td>yeni</td><td>535,00</td><td></td></tr></tbody></table></div>		 </div>
		  </li>
			   <li class="common_profile_main listing_formate num8 ui-sortable-handle" data-ordering-profile="105:8" style="width:48%;height:280px;" data-options="widget_105::listing_formate">
		<div class="panel_header">
		<span class="profile_name">Who Owe U</span>						</div>
		<div class="profile_mid_data common_class_listing_format">
	  <div class="listing_layout_others" style="height:205px;"><table class="common_class_listing_format_new adminlist table table-hover listing_info listing_info_105" width="100%"><thead><tr><th>Title</th><th>Amount</th><th>Customer</th></tr></thead><tbody><tr><td>Waikiki sajt</td><td>330,00</td><td>Test Client</td></tr><tr><td>skoda Octavia</td><td>5.698,00</td><td>Test Client</td></tr><tr><td>qwwew</td><td>110,00</td><td>Tahir Irshad</td></tr><tr><td>new</td><td>224,00</td><td>BAITH AL SHAY</td></tr><tr><td>invlabel</td><td>981,00</td><td>milad</td></tr><tr><td>gggggg</td><td>83,00</td><td>Mr.Ahmed</td></tr><tr><td>FAF</td><td>110,00</td><td>lorel</td></tr><tr><td>cocacola drink</td><td>20,00</td><td>milad</td></tr></tbody></table></div>		 </div>
		  </li>
			   <li class="common_profile_main listing_formate num9 ui-sortable-handle" data-ordering-profile="107:9" style="width:48%;height:280px;" data-options="widget_107::listing_formate">
		<div class="panel_header">
		<span class="profile_name">Latest Expense</span>						</div>
		<div class="profile_mid_data common_class_listing_format">
	  <div class="listing_layout_others" style="height:205px;"><table class="common_class_listing_format_new adminlist table table-hover listing_info listing_info_107" width="100%"><thead><tr><th>Date</th><th>Title</th><th>Amount</th></tr></thead><tbody><tr><td>17-07-2019</td><td>INV2024</td><td>7.000,00</td></tr><tr><td>09-10-2018</td><td>yeni</td><td>726,00</td></tr></tbody></table></div>		 </div>
		  </li>
			   <li class="common_profile_main listing_formate num10 ui-sortable-handle" data-ordering-profile="116:10" style="width:48%;height:280px;" data-options="widget_116::listing_formate">
		<div class="panel_header">
		<span class="profile_name">curent month income</span>						</div>
		<div class="profile_mid_data common_class_listing_format">
	  <div class="listing_layout_others" style="height:205px;"><table class="common_class_listing_format_new adminlist table table-hover listing_info listing_info_116" width="100%"><thead><tr></tr></thead></table></div>		 </div>
		  </li>
			   <li class="common_profile_main listing_formate num13 ui-sortable-handle" data-ordering-profile="117:11" style="width:48%;height:280px;" data-options="widget_117:Pie Chart:listing_formate">
		<div class="panel_header">
		<span class="profile_name">Total Income By Categorywise</span>						</div>
		<div class="profile_mid_data common_class_listing_format">
	  <div class="listing_layout_others" style="height:205px;"><table class="common_class_listing_format_new adminlist table table-hover listing_info listing_info_117" width="100%"><thead><tr></tr></thead></table></div>		 </div>
		  </li>
			<li class="common_profile_main num14 ui-sortable-handle" data-ordering-profile="119:12" style="width:98%;height:430px;" data-options="widget_119:Line Chart:charting_formate">
	<div class="panel_header">
	
	<span class="profile_name">Income/Expense of Last 12 Months</span>			</div>
	<div class="profile_mid_data">
	
	<ul>
	
	 <li class="chart_profile num14" data-ordering-profile="119:12" style="height:357px"> <div id="widget_119" class="widget_chart" data-profile-id="drawchart119" style="height:357px"><div style="position: relative;"><div dir="ltr" style="position: relative; width: 951px; height: 357px;"><div aria-label="A chart." style="position: absolute; left: 0px; top: 0px; width: 100%; height: 100%;"><svg width="951" height="357" aria-label="A chart." style="overflow: hidden;"><defs id="defs"><clipPath id="_ABSTRACT_RENDERER_ID_1"><rect x="134" y="68" width="683" height="221"></rect></clipPath></defs><rect x="0" y="0" width="951" height="357" stroke="none" stroke-width="0" fill="#ffffff"></rect><g><rect x="831" y="68" width="106" height="37" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect><g><rect x="831" y="68" width="106" height="14" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect><g><text text-anchor="start" x="864" y="79.9" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#222222">Income</text></g><path d="M831,75L859,75" stroke="#3366cc" stroke-width="2" fill-opacity="1" fill="none"></path></g><g><rect x="831" y="91" width="106" height="14" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect><g><text text-anchor="start" x="864" y="102.9" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#222222">Expense</text></g><path d="M831,98L859,98" stroke="#dc3912" stroke-width="2" fill-opacity="1" fill="none"></path></g></g><g><rect x="134" y="68" width="683" height="221" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect><g clip-path="url(http://vbizz.joomlawings.com/vbizz-dashboard#_ABSTRACT_RENDERER_ID_1)"><g><rect x="134" y="288" width="683" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect><rect x="134" y="233" width="683" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect><rect x="134" y="178" width="683" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect><rect x="134" y="123" width="683" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect><rect x="134" y="68" width="683" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect></g><g><rect x="134" y="288" width="683" height="1" stroke="none" stroke-width="0" fill="#333333"></rect></g><g><path d="M191.33333333333334,288.5L305,288.5L418.6666666666667,285.42L532.3333333333334,287.5925L646,285.42L759.6666666666667,87.7775" stroke="#3366cc" stroke-width="2" fill-opacity="1" fill="none"></path><path d="M191.33333333333334,273.7875L305,285.4475L418.6666666666667,288.5L532.3333333333334,286.3L646,288.5L759.6666666666667,96" stroke="#dc3912" stroke-width="2" fill-opacity="1" fill="none"></path></g></g><g></g><g><g><text text-anchor="middle" x="191.33333333333334" y="309.9" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#222222">Oct</text></g><g><text text-anchor="middle" x="305" y="309.9" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#222222">Nov</text></g><g><text text-anchor="middle" x="418.6666666666667" y="309.9" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#222222">Mar</text></g><g><text text-anchor="middle" x="532.3333333333334" y="309.9" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#222222">Apr</text></g><g><text text-anchor="middle" x="646" y="309.9" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#222222">Jun</text></g><g><text text-anchor="middle" x="759.6666666666667" y="309.9" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#222222">Jul</text></g><g><text text-anchor="end" x="120" y="293.4" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#444444">0</text></g><g><text text-anchor="end" x="120" y="238.4" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#444444">2,000</text></g><g><text text-anchor="end" x="120" y="183.4" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#444444">4,000</text></g><g><text text-anchor="end" x="120" y="128.4" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#444444">6,000</text></g><g><text text-anchor="end" x="120" y="73.4" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#444444">8,000</text></g></g></g><g></g></svg><div aria-label="A tabular representation of the data in the chart." style="position: absolute; left: -10000px; top: auto; width: 1px; height: 1px; overflow: hidden;"><table><thead><tr><th>Month</th><th>Income</th><th>Expense</th></tr></thead><tbody><tr><td>Oct</td><td>0,00</td><td>535,00</td></tr><tr><td>Nov</td><td>0,00</td><td>111,00</td></tr><tr><td>Mar</td><td>112,00</td><td>0,00</td></tr><tr><td>Apr</td><td>33,00</td><td>80,00</td></tr><tr><td>Jun</td><td>112,00</td><td>0,00</td></tr><tr><td>Jul</td><td>7.299,00</td><td>7.000,00</td></tr></tbody></table></div></div></div><div aria-hidden="true" style="display: none; position: absolute; top: 367px; left: 961px; white-space: nowrap; font-family: Arial; font-size: 14px;">Expense</div><div></div></div></div></li><script type="text/javascript">  if(typeof google !== "undefined") 
			google.load("visualization", "1.1", {"packages":["corechart", "controls"], callback: drawchart119});	

			function drawchart119(data) {
				
				if(data!=null){
					var data119 = data;
				}else{
					var data119 = google.visualization.arrayToDataTable([[{"type":"string", "label":"Month"}, "Income", "Expense"],["Oct", 0.00, 535.00],["Nov", 0.00, 111.00],["Mar", 112.00, 0.00],["Apr", 33.00, 80.00],["Jun", 112.00, 0.00],["Jul", 7299.00, 7000.00]]);
				}
               for(var c=1;c<parseInt(data119.getNumberOfColumns());c++)
			   {
				   var formatter = new google.visualization.NumberFormat(
				  {decimalSymbol: "," , groupingSymbol: "." });
				   formatter.format(data119, c);
			   }
				
				var chart119 = new google.visualization.ChartWrapper({
					chartType: "LineChart",
					containerId: "widget_119",
					dataTable: data119,
					options : [{hAxis: {title: "Month", textPosition: "out"},vAxis: {title: "Value", decimalSymbol: "," , groupingSymbol: "." },legend: {position:"none"},width:"100%",height:"100%",chartArea:{top:30,height:"75%",width:"75%"},colors: ["#67B7DC", "#FDD400", "#84B761", "#CC4748", "#cd82ad", "#2f4074", "#B5CBE9", "#FF9873", "#1D90FA", "#D77C7C"], curveType: "function"}]
				})
				var columns119 = [0];

				var seriesMap119 = [{column: 1,display: true},{column: 2,display: true}];
				var columnsMap119 = {};
				var series119 = [];
				for (var i = 0; i < seriesMap119.length; i++) {
					var col119 = seriesMap119[i].column;
					columnsMap119[col119] = i;

					series119[i] = {};
					if (seriesMap119[i].display) {

						columns119.push(col119);
					}
					else {

						columns119.push({
							label: data119.getColumnLabel(col119),
							type: data119.getColumnType(col119),
							sourceColumn: col119,
							calc: function () {
								return null;
							}
						});

					if (typeof(series119[i].color) !== "undefined") {
						series119[i].backupColor = series119[i].color;
					}
					series119[i].color = "#CCCCCC";
					}

				}

				chart119.setOption("series", series119);



				google.visualization.events.addListener(chart119, "select", showHideSeries119);
				function showHideSeries119 () {
					var sel119 = chart119.getChart().getSelection();

					if (sel119.length > 0) {

						if (sel119[0].row == null) {
							var col119 = sel119[0].column;
							if (typeof(columns119[col119]) == "number") {
								var src119 = columns119[col119];


								columns119[col119] = {
									label: data119.getColumnLabel(src119),
									type: data119.getColumnType(src119),
									sourceColumn: src119,
									calc: function () {
										return null;
									}
								};
								series119[columnsMap119[src119]].color = "#CCCCCC";
							}
							else {
								var src119 = columns119[col119].sourceColumn;


								columns119[col119] = src119;
								series119[columnsMap119[src119]].color = null;
							}
							var view119 = chart119.getView() || {};
							view119.columns = columns119;
							chart119.setView(view119);
							chart119.draw();
						}
					}
				}

				var view119 = {
					columns: columns119
				};
				chart119.draw();}</script></ul></div></li>	<li class="common_profile_main num15 ui-sortable-handle" data-ordering-profile="126:13" style="width:48%;height:880px;" data-options="widget_126:Stepped AreaChart:charting_formate">
	<div class="panel_header">
	
	<span class="profile_name">prospectos</span>			</div>
	<div class="profile_mid_data">
	
	<ul>
	
	 <li class="chart_profile num15" data-ordering-profile="126:13" style="height:807px"> <div id="widget_126" class="widget_chart" data-profile-id="drawchart126" style="height:807px"><div style="position: relative;"><div dir="ltr" style="position: relative; width: 446px; height: 807px;"><div aria-label="A chart." style="position: absolute; left: 0px; top: 0px; width: 100%; height: 100%;"><svg width="446" height="807" aria-label="A chart." style="overflow: hidden;"><defs id="defs"><clipPath id="_ABSTRACT_RENDERER_ID_2"><rect x="85" y="143" width="276" height="521"></rect></clipPath></defs><rect x="0" y="0" width="446" height="807" stroke="none" stroke-width="0" fill="#ffffff"></rect><g><rect x="375" y="143" width="57" height="14" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect><g><rect x="375" y="143" width="57" height="14" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect><g><text text-anchor="start" x="408" y="154.9" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#222222">S…</text><rect x="408" y="143" width="24" height="14" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect></g><rect x="375" y="143" width="28" height="14" stroke="none" stroke-width="0" fill="#3366cc"></rect></g></g><g><rect x="85" y="143" width="276" height="521" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect><g clip-path="url(http://vbizz.joomlawings.com/vbizz-dashboard#_ABSTRACT_RENDERER_ID_2)"><g><rect x="85" y="663" width="276" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect><rect x="85" y="533" width="276" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect><rect x="85" y="403" width="276" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect><rect x="85" y="273" width="276" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect><rect x="85" y="143" width="276" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect></g><g><g><rect x="85" y="403.5" width="34" height="0" stroke="none" stroke-width="0" fill-opacity="0.3" fill="#3366cc"></rect><path d="M85,403.5L119,403.5" stroke="#3366cc" stroke-width="2" fill-opacity="1" fill="none"></path></g><g><rect x="119" y="403.5" width="35" height="0" stroke="none" stroke-width="0" fill-opacity="0.3" fill="#3366cc"></rect><path d="M119,403.5L119,403.5L154,403.5" stroke="#3366cc" stroke-width="2" fill-opacity="1" fill="none"></path></g><g><rect x="154" y="403.5" width="34" height="0" stroke="none" stroke-width="0" fill-opacity="0.3" fill="#3366cc"></rect><path d="M154,403.5L154,403.5L188,403.5" stroke="#3366cc" stroke-width="2" fill-opacity="1" fill="none"></path></g><g><rect x="188" y="403.5" width="35" height="0" stroke="none" stroke-width="0" fill-opacity="0.3" fill="#3366cc"></rect><path d="M188,403.5L188,403.5L223,403.5" stroke="#3366cc" stroke-width="2" fill-opacity="1" fill="none"></path></g><g><rect x="223" y="403.5" width="34" height="0" stroke="none" stroke-width="0" fill-opacity="0.3" fill="#3366cc"></rect><path d="M223,403.5L223,403.5L257,403.5" stroke="#3366cc" stroke-width="2" fill-opacity="1" fill="none"></path></g><g><rect x="257" y="403.5" width="34" height="0" stroke="none" stroke-width="0" fill-opacity="0.3" fill="#3366cc"></rect><path d="M257,403.5L257,403.5L291,403.5" stroke="#3366cc" stroke-width="2" fill-opacity="1" fill="none"></path></g><g><rect x="291" y="403.5" width="35" height="0" stroke="none" stroke-width="0" fill-opacity="0.3" fill="#3366cc"></rect><path d="M291,403.5L291,403.5L326,403.5" stroke="#3366cc" stroke-width="2" fill-opacity="1" fill="none"></path></g><g><rect x="326" y="403.5" width="34" height="0" stroke="none" stroke-width="0" fill-opacity="0.3" fill="#3366cc"></rect><path d="M326,403.5L326,403.5L360,403.5" stroke="#3366cc" stroke-width="2" fill-opacity="1" fill="none"></path></g></g><g><rect x="85" y="403" width="276" height="1" stroke="none" stroke-width="0" fill="#333333"></rect></g></g><g></g><g><g><text text-anchor="end" x="139.5125" y="684.2435244785438" font-family="Arial" font-size="14" transform="rotate(-30 139.5125 684.2435244785438)" stroke="none" stroke-width="0" fill="#222222">Contact in Future</text></g><g><text text-anchor="end" x="173.8875" y="684.2435244785438" font-family="Arial" font-size="14" transform="rotate(-30 173.8875 684.2435244785438)" stroke="none" stroke-width="0" fill="#222222">Contacted</text></g><g><text text-anchor="end" x="208.2625" y="684.2435244785438" font-family="Arial" font-size="14" transform="rotate(-30 208.2625 684.2435244785438)" stroke="none" stroke-width="0" fill="#222222">Contacted</text></g><g><text text-anchor="end" x="311.3875" y="684.2435244785438" font-family="Arial" font-size="14" transform="rotate(-30 311.3875 684.2435244785438)" stroke="none" stroke-width="0" fill="#222222">dsdsa</text></g><g><text text-anchor="end" x="345.7625" y="684.2435244785438" font-family="Arial" font-size="14" transform="rotate(-30 345.7625 684.2435244785438)" stroke="none" stroke-width="0" fill="#222222">Cold</text></g><g><text text-anchor="end" x="71" y="668.4" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#444444">-1.0</text></g><g><text text-anchor="end" x="71" y="538.4" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#444444">-0.5</text></g><g><text text-anchor="end" x="71" y="408.4" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#444444">0.0</text></g><g><text text-anchor="end" x="71" y="278.4" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#444444">0.5</text></g><g><text text-anchor="end" x="71" y="148.4" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#444444">1.0</text></g></g></g><g></g></svg><div aria-label="A tabular representation of the data in the chart." style="position: absolute; left: -10000px; top: auto; width: 1px; height: 1px; overflow: hidden;"><table><thead><tr><th>lead_status</th><th>Status</th></tr></thead><tbody><tr><td></td><td>0,00</td></tr><tr><td>Contact in Future</td><td>0,00</td></tr><tr><td>Contacted</td><td>0,00</td></tr><tr><td>Contacted</td><td>0,00</td></tr><tr><td></td><td>0,00</td></tr><tr><td></td><td>0,00</td></tr><tr><td>dsdsa</td><td>0,00</td></tr><tr><td>Cold</td><td>0,00</td></tr></tbody></table></div></div></div><div aria-hidden="true" style="display: none; position: absolute; top: 817px; left: 456px; white-space: nowrap; font-family: Arial; font-size: 14px;">St…</div><div></div></div></div></li><script type="text/javascript">  if(typeof google !== "undefined") 
			google.load("visualization", "1.1", {"packages":["corechart", "controls"], callback: drawchart126});	

			function drawchart126(data) {
				
				if(data!=null){
					var data126 = data;
				}else{
					var data126 = google.visualization.arrayToDataTable([[{"type":"string", "label":"lead_status"}, "Status"],["", 0],["Contact in Future", 0],["Contacted", 0],["Contacted", 0],["", 0],["", 0],["dsdsa", 0],["Cold", 0]]);
				}
               for(var c=1;c<parseInt(data126.getNumberOfColumns());c++)
			   {
				   var formatter = new google.visualization.NumberFormat(
				  {decimalSymbol: "," , groupingSymbol: "." });
				   formatter.format(data126, c);
			   }
				
				var chart126 = new google.visualization.ChartWrapper({
					chartType: "SteppedAreaChart",
					containerId: "widget_126",
					dataTable: data126,
					options : [{legend: {position:"bottom"},width:"100%",height:"100%",chartArea:{top:30,height:"75%",width:"75%"},colors: ["#67B7DC", "#FDD400", "#84B761", "#CC4748", "#cd82ad", "#2f4074", "#B5CBE9", "#FF9873", "#1D90FA", "#D77C7C"]}]
				})
				var columns126 = [0];

				var seriesMap126 = [{column: 1,display: true}];
				var columnsMap126 = {};
				var series126 = [];
				for (var i = 0; i < seriesMap126.length; i++) {
					var col126 = seriesMap126[i].column;
					columnsMap126[col126] = i;

					series126[i] = {};
					if (seriesMap126[i].display) {

						columns126.push(col126);
					}
					else {

						columns126.push({
							label: data126.getColumnLabel(col126),
							type: data126.getColumnType(col126),
							sourceColumn: col126,
							calc: function () {
								return null;
							}
						});

					if (typeof(series126[i].color) !== "undefined") {
						series126[i].backupColor = series126[i].color;
					}
					series126[i].color = "#CCCCCC";
					}

				}

				chart126.setOption("series", series126);



				google.visualization.events.addListener(chart126, "select", showHideSeries126);
				function showHideSeries126 () {
					var sel126 = chart126.getChart().getSelection();

					if (sel126.length > 0) {

						if (sel126[0].row == null) {
							var col126 = sel126[0].column;
							if (typeof(columns126[col126]) == "number") {
								var src126 = columns126[col126];


								columns126[col126] = {
									label: data126.getColumnLabel(src126),
									type: data126.getColumnType(src126),
									sourceColumn: src126,
									calc: function () {
										return null;
									}
								};
								series126[columnsMap126[src126]].color = "#CCCCCC";
							}
							else {
								var src126 = columns126[col126].sourceColumn;


								columns126[col126] = src126;
								series126[columnsMap126[src126]].color = null;
							}
							var view126 = chart126.getView() || {};
							view126.columns = columns126;
							chart126.setView(view126);
							chart126.draw();
						}
					}
				}

				var view126 = {
					columns: columns126
				};
				chart126.draw();}</script></ul></div></li>	<li class="common_profile_main num17 ui-sortable-handle" data-ordering-profile="123:14" style="width:31.333333333333%;height:430px;" data-options="widget_123:Line Chart:charting_formate">
	<div class="panel_header">
	
	<span class="profile_name">Project Management</span>			</div>
	<div class="profile_mid_data">
	
	<ul>
	
	 <li class="chart_profile num17" data-ordering-profile="123:14" style="height:357px"> <div id="widget_123" class="widget_chart" data-profile-id="drawchart123" style="height:357px"><div style="position: relative;"><div dir="ltr" style="position: relative; width: 278px; height: 357px;"><div aria-label="A chart." style="position: absolute; left: 0px; top: 0px; width: 100%; height: 100%;"><svg width="278" height="357" aria-label="A chart." style="overflow: hidden;"><defs id="defs"><clipPath id="_ABSTRACT_RENDERER_ID_3"><rect x="53" y="68" width="172" height="221"></rect></clipPath></defs><rect x="0" y="0" width="278" height="357" stroke="none" stroke-width="0" fill="#ffffff"></rect><g><rect x="236" y="68" width="31" height="11" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect><g><rect x="236" y="68" width="31" height="11" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect><g><text text-anchor="start" x="262" y="77.35" font-family="Arial" font-size="11" stroke="none" stroke-width="0" fill="#222222">.</text><rect x="262" y="68" width="5" height="11" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect></g><path d="M236,73.5L258,73.5" stroke="#3366cc" stroke-width="2" fill-opacity="1" fill="none"></path></g></g><g><rect x="53" y="68" width="172" height="221" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect><g clip-path="url(http://vbizz.joomlawings.com/vbizz-dashboard#_ABSTRACT_RENDERER_ID_3)"><g><rect x="53" y="288" width="172" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect><rect x="53" y="233" width="172" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect><rect x="53" y="178" width="172" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect><rect x="53" y="123" width="172" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect><rect x="53" y="68" width="172" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect></g><g><rect x="53" y="288" width="172" height="1" stroke="none" stroke-width="0" fill="#333333"></rect></g><g><path d="M74.875,285.42L117.625,287.5925L160.375,285.42L203.125,87.7775" stroke="#3366cc" stroke-width="2" fill-opacity="1" fill="none"></path></g></g><g></g><g><g><text text-anchor="middle" x="74.875" y="305.35" font-family="Arial" font-size="11" stroke="none" stroke-width="0" fill="#222222">Mar</text></g><g><text text-anchor="middle" x="117.625" y="305.35" font-family="Arial" font-size="11" stroke="none" stroke-width="0" fill="#222222">Apr</text></g><g><text text-anchor="middle" x="160.375" y="305.35" font-family="Arial" font-size="11" stroke="none" stroke-width="0" fill="#222222">Jun</text></g><g><text text-anchor="middle" x="203.125" y="305.35" font-family="Arial" font-size="11" stroke="none" stroke-width="0" fill="#222222">Jul</text></g><g><text text-anchor="end" x="42" y="292.35" font-family="Arial" font-size="11" stroke="none" stroke-width="0" fill="#444444">0</text></g><g><text text-anchor="end" x="42" y="237.35" font-family="Arial" font-size="11" stroke="none" stroke-width="0" fill="#444444">2,000</text></g><g><text text-anchor="end" x="42" y="182.35" font-family="Arial" font-size="11" stroke="none" stroke-width="0" fill="#444444">4,000</text></g><g><text text-anchor="end" x="42" y="127.35" font-family="Arial" font-size="11" stroke="none" stroke-width="0" fill="#444444">6,000</text></g><g><text text-anchor="end" x="42" y="72.35" font-family="Arial" font-size="11" stroke="none" stroke-width="0" fill="#444444">8,000</text></g></g></g><g></g></svg><div aria-label="A tabular representation of the data in the chart." style="position: absolute; left: -10000px; top: auto; width: 1px; height: 1px; overflow: hidden;"><table><thead><tr><th>Month</th><th>Amount</th></tr></thead><tbody><tr><td>Mar</td><td>112,00</td></tr><tr><td>Apr</td><td>33,00</td></tr><tr><td>Jun</td><td>112,00</td></tr><tr><td>Jul</td><td>7.299,00</td></tr></tbody></table></div></div></div><div aria-hidden="true" style="display: none; position: absolute; top: 367px; left: 288px; white-space: nowrap; font-family: Arial; font-size: 11px;">.</div><div></div></div></div></li><script type="text/javascript">  if(typeof google !== "undefined") 
			google.load("visualization", "1.1", {"packages":["corechart", "controls"], callback: drawchart123});	

			function drawchart123(data) {
				
				if(data!=null){
					var data123 = data;
				}else{
					var data123 = google.visualization.arrayToDataTable([[{"type":"string", "label":"Month"}, "Amount"],["Mar", 112.00],["Apr", 33.00],["Jun", 112.00],["Jul", 7299.00]]);
				}
               for(var c=1;c<parseInt(data123.getNumberOfColumns());c++)
			   {
				   var formatter = new google.visualization.NumberFormat(
				  {decimalSymbol: "," , groupingSymbol: "." });
				   formatter.format(data123, c);
			   }
				
				var chart123 = new google.visualization.ChartWrapper({
					chartType: "LineChart",
					containerId: "widget_123",
					dataTable: data123,
					options : [{legend: {position:"right"},width:"100%",height:"100%",chartArea:{top:30,height:"75%",width:"75%"},colors: ["#67B7DC", "#FDD400", "#84B761", "#CC4748", "#cd82ad", "#2f4074", "#B5CBE9", "#FF9873", "#1D90FA", "#D77C7C"], curveType: "function"}]
				})
				var columns123 = [0];

				var seriesMap123 = [{column: 1,display: true}];
				var columnsMap123 = {};
				var series123 = [];
				for (var i = 0; i < seriesMap123.length; i++) {
					var col123 = seriesMap123[i].column;
					columnsMap123[col123] = i;

					series123[i] = {};
					if (seriesMap123[i].display) {

						columns123.push(col123);
					}
					else {

						columns123.push({
							label: data123.getColumnLabel(col123),
							type: data123.getColumnType(col123),
							sourceColumn: col123,
							calc: function () {
								return null;
							}
						});

					if (typeof(series123[i].color) !== "undefined") {
						series123[i].backupColor = series123[i].color;
					}
					series123[i].color = "#CCCCCC";
					}

				}

				chart123.setOption("series", series123);



				google.visualization.events.addListener(chart123, "select", showHideSeries123);
				function showHideSeries123 () {
					var sel123 = chart123.getChart().getSelection();

					if (sel123.length > 0) {

						if (sel123[0].row == null) {
							var col123 = sel123[0].column;
							if (typeof(columns123[col123]) == "number") {
								var src123 = columns123[col123];


								columns123[col123] = {
									label: data123.getColumnLabel(src123),
									type: data123.getColumnType(src123),
									sourceColumn: src123,
									calc: function () {
										return null;
									}
								};
								series123[columnsMap123[src123]].color = "#CCCCCC";
							}
							else {
								var src123 = columns123[col123].sourceColumn;


								columns123[col123] = src123;
								series123[columnsMap123[src123]].color = null;
							}
							var view123 = chart123.getView() || {};
							view123.columns = columns123;
							chart123.setView(view123);
							chart123.draw();
						}
					}
				}

				var view123 = {
					columns: columns123
				};
				chart123.draw();}</script></ul></div></li>	<li class="common_profile_main num18 ui-sortable-handle" data-ordering-profile="120:15" style="width:98%;height:430px;" data-options="widget_120:Line Chart:charting_formate">
	<div class="panel_header">
	
	<span class="profile_name">Total Income</span>			</div>
	<div class="profile_mid_data">
	
	<ul>
	
	 <li class="chart_profile num18" data-ordering-profile="120:15" style="height:357px"> <div id="widget_120" class="widget_chart" data-profile-id="drawchart120" style="height:357px"><div style="position: relative;"><div dir="ltr" style="position: relative; width: 951px; height: 357px;"><div aria-label="A chart." style="position: absolute; left: 0px; top: 0px; width: 100%; height: 100%;"><svg width="951" height="357" aria-label="A chart." style="overflow: hidden;"><defs id="defs"><clipPath id="_ABSTRACT_RENDERER_ID_4"><rect x="134" y="68" width="683" height="221"></rect></clipPath></defs><rect x="0" y="0" width="951" height="357" stroke="none" stroke-width="0" fill="#ffffff"></rect><g><rect x="831" y="68" width="106" height="14" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect><g><rect x="831" y="68" width="106" height="14" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect><g><text text-anchor="start" x="864" y="79.9" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#222222">Amount</text></g><path d="M831,75L859,75" stroke="#3366cc" stroke-width="2" fill-opacity="1" fill="none"></path></g></g><g><rect x="134" y="68" width="683" height="221" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect><g clip-path="url(http://vbizz.joomlawings.com/vbizz-dashboard#_ABSTRACT_RENDERER_ID_4)"><g><rect x="134" y="288" width="683" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect><rect x="134" y="233" width="683" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect><rect x="134" y="178" width="683" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect><rect x="134" y="123" width="683" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect><rect x="134" y="68" width="683" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect></g><g><rect x="134" y="288" width="683" height="1" stroke="none" stroke-width="0" fill="#333333"></rect></g><g><path d="M219.75,285.42L390.25,287.5925L560.75,285.42L731.25,87.7775" stroke="#3366cc" stroke-width="2" fill-opacity="1" fill="none"></path></g></g><g></g><g><g><text text-anchor="middle" x="219.75" y="309.9" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#222222">Mar 2019</text></g><g><text text-anchor="middle" x="390.25" y="309.9" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#222222">Apr 2019</text></g><g><text text-anchor="middle" x="560.75" y="309.9" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#222222">Jun 2019</text></g><g><text text-anchor="middle" x="731.25" y="309.9" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#222222">Jul 2019</text></g><g><text text-anchor="end" x="120" y="293.4" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#444444">0</text></g><g><text text-anchor="end" x="120" y="238.4" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#444444">2,000</text></g><g><text text-anchor="end" x="120" y="183.4" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#444444">4,000</text></g><g><text text-anchor="end" x="120" y="128.4" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#444444">6,000</text></g><g><text text-anchor="end" x="120" y="73.4" font-family="Arial" font-size="14" stroke="none" stroke-width="0" fill="#444444">8,000</text></g></g></g><g></g></svg><div aria-label="A tabular representation of the data in the chart." style="position: absolute; left: -10000px; top: auto; width: 1px; height: 1px; overflow: hidden;"><table><thead><tr><th>Month</th><th>Amount</th></tr></thead><tbody><tr><td>Mar 2019</td><td>112,00</td></tr><tr><td>Apr 2019</td><td>33,00</td></tr><tr><td>Jun 2019</td><td>112,00</td></tr><tr><td>Jul 2019</td><td>7.299,00</td></tr></tbody></table></div></div></div><div aria-hidden="true" style="display: none; position: absolute; top: 367px; left: 961px; white-space: nowrap; font-family: Arial; font-size: 14px;">Amount</div><div></div></div></div></li><script type="text/javascript">  if(typeof google !== "undefined") 
			google.load("visualization", "1.1", {"packages":["corechart", "controls"], callback: drawchart120});	

			function drawchart120(data) {
				
				if(data!=null){
					var data120 = data;
				}else{
					var data120 = google.visualization.arrayToDataTable([[{"type":"string", "label":"Month"}, "Amount"],["Mar 2019", 112.00],["Apr 2019", 33.00],["Jun 2019", 112.00],["Jul 2019", 7299.00]]);
				}
               for(var c=1;c<parseInt(data120.getNumberOfColumns());c++)
			   {
				   var formatter = new google.visualization.NumberFormat(
				  {decimalSymbol: "," , groupingSymbol: "." });
				   formatter.format(data120, c);
			   }
				
				var chart120 = new google.visualization.ChartWrapper({
					chartType: "LineChart",
					containerId: "widget_120",
					dataTable: data120,
					options : [{hAxis: {title: "Month", textPosition: "out"},vAxis: {title: "Value", decimalSymbol: "," , groupingSymbol: "." },legend: {position:"none"},width:"100%",height:"100%",chartArea:{top:30,height:"75%",width:"75%"},colors: ["#67B7DC", "#FDD400", "#84B761", "#CC4748", "#cd82ad", "#2f4074", "#B5CBE9", "#FF9873", "#1D90FA", "#D77C7C"], curveType: "function"}]
				})
				var columns120 = [0];

				var seriesMap120 = [{column: 1,display: true}];
				var columnsMap120 = {};
				var series120 = [];
				for (var i = 0; i < seriesMap120.length; i++) {
					var col120 = seriesMap120[i].column;
					columnsMap120[col120] = i;

					series120[i] = {};
					if (seriesMap120[i].display) {

						columns120.push(col120);
					}
					else {

						columns120.push({
							label: data120.getColumnLabel(col120),
							type: data120.getColumnType(col120),
							sourceColumn: col120,
							calc: function () {
								return null;
							}
						});

					if (typeof(series120[i].color) !== "undefined") {
						series120[i].backupColor = series120[i].color;
					}
					series120[i].color = "#CCCCCC";
					}

				}

				chart120.setOption("series", series120);



				google.visualization.events.addListener(chart120, "select", showHideSeries120);
				function showHideSeries120 () {
					var sel120 = chart120.getChart().getSelection();

					if (sel120.length > 0) {

						if (sel120[0].row == null) {
							var col120 = sel120[0].column;
							if (typeof(columns120[col120]) == "number") {
								var src120 = columns120[col120];


								columns120[col120] = {
									label: data120.getColumnLabel(src120),
									type: data120.getColumnType(src120),
									sourceColumn: src120,
									calc: function () {
										return null;
									}
								};
								series120[columnsMap120[src120]].color = "#CCCCCC";
							}
							else {
								var src120 = columns120[col120].sourceColumn;


								columns120[col120] = src120;
								series120[columnsMap120[src120]].color = null;
							}
							var view120 = chart120.getView() || {};
							view120.columns = columns120;
							chart120.setView(view120);
							chart120.draw();
						}
					}
				}

				var view120 = {
					columns: columns120
				};
				chart120.draw();}</script></ul></div></li> 
 </ul>
</div>

<div class="clr" style="clear:both;"></div>
<input type="hidden" name="option" value="com_vbizz">
    <input type="hidden" name="task" value="">
    <input type="hidden" name="boxchecked" value="0">
    <input type="hidden" name="view" value="vbizz">
	</form>
</div>
</div>

        </div>
@endsection