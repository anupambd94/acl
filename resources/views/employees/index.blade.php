@extends('layouts.app')
@section('content')

		<div class="shadow_box"></div>
		<div class="wrapper">
			<div class="top">
				<div class="container">
				</div>
			</div>
			<div class="main-body">
				<div class="container">
					<div class="content-section">
						<div class="content" style="width:100%;">
							<div id="system-message-container">
							</div>



							

							<div class="front-page">
								
								<div id="vbizz">
									
									

									<header class="header">
										<div class="container-title">
											<h1 class="page-title">Employee</h1>
										</div>
									</header>
									<div class="content_part">
										<form action="/vbizz-dashboard/employee" method="post" name="adminForm" id="adminForm">

											<div class="subhead">
												<div class="container-fluid">
													<div id="container-collapse" class="container-collapse"></div>
													<div class="row-fluid">
														<div class="span12">
															<div id="toolbar" class="btn-toolbar">
																<div class="btn-wrapper" id="toolbar-new">
																	<span onclick="Joomla.submitbutton('add')" class="btn btn-small btn-success">
								<span class="fa fa-plus"></span> New</span>
																</div>

																<div class="btn-wrapper" id="toolbar-edit">
																	<span onclick="if (document.adminForm.boxchecked.value==0){alert('Please first make a selection from the list');}else{ Joomla.submitbutton('edit')}" class="btn btn-small">
								<span class="fa fa-edit"></span> Edit</span>
																</div>


																<div class="btn-wrapper" id="toolbar-setting" style="float: right;">
																	<a class="modal btn" id="modal1" title="Select" href="http://vbizz.joomlawings.com/index.php?option=com_vbizz&amp;view=config&amp;task=loadEmployeeSetting&amp;tmpl=component&amp;ot=1" rel="{handler: 'iframe', size: {x: 550, y: 400}}">
																		<span class="fa fa-cog"></span>
																	</a>
																</div>

															</div>
														</div>
													</div>
												</div>
											</div>

											<div class="adminlist filter filter_emp">
												<div class="filet_left">
													<input type="text" name="search" id="search" placeholder="Search" value="" class="text_area">
													<button class="btn hasTooltip" title="Search" onclick="this.form.submit();"><i class="fa fa-search"></i></button>
													<button class="btn hasTooltip" title="Clear" ><i class="fa fa-remove"></i></button>
												</div>

												<div class="filter_right">
													<select  name="filter_dept" class="inputbox" size="1" onchange="" style="">
														<option value="">Select Department</option>
														<option value="5">Designing</option>
														<option value="6">Styrelse</option>
														<option value="7">Info</option>
														<option value="8">Reality</option>
														<option value="9">Pojištění</option>
														<option value="10">Менеджеры по продажам</option>
														<option value="11">Сборщики мебели</option>
														<option value="12">Диспетчер заказов</option>
														<option value="13">программисты</option>
													</select>
													{{-- <div class="chzn-container chzn-container-single chzn-container-single-nosearch" style="width: 195px;" title="" id="filter_dept_chzn"><a class="chzn-single"><span>Select Department</span><div><b></b></div></a>
														<div class="chzn-drop">
															<div class="chzn-search"><input type="text" autocomplete="off" readonly=""></div>
															<ul class="chzn-results"></ul>
														</div>
													</div> --}}
													<select  name="filter_desg" class="inputbox" size="1"  style="">
														<option value="">Select Designation</option>
														<option value="6">Sjednatel</option>
														<option value="7">Tipař</option>
														<option value="8">Старший продавец </option>
													</select>
													{{-- <div class="chzn-container chzn-container-single chzn-container-single-nosearch" style="width: 155px;" title="" id="filter_desg_chzn"><a class="chzn-single"><span>Select Designation</span><div><b></b></div></a>
														<div class="chzn-drop">
															<div class="chzn-search"><input type="text" autocomplete="off" readonly=""></div>
															<ul class="chzn-results"></ul>
														</div>
													</div> --}}
												</div>
											</div>

											<div id="editcell">
												<table class="adminlist table">
													<thead>
														<tr>
															<th width="10" class="hidden-phone">#</th>
															<th width="10"><input type="checkbox" name="toggle" value="" onclick="Joomla.checkAll(this);"></th>
															<th><a href="#" onclick="Joomla.tableOrdering('i.name','asc','');return false;" class="hasPopover" title="" data-content="Select to sort by this column" data-placement="top" data-original-title="Name">Name</a></th>
															<th class="hidden-phone"><a href="#" onclick="Joomla.tableOrdering('i.empid','asc','');return false;" class="hasPopover" title="" data-content="Select to sort by this column" data-placement="top" data-original-title="Employee Id">Employee Id</a></th>
															<th><a href="#" onclick="Joomla.tableOrdering('d.name','asc','');return false;" class="hasPopover" title="" data-content="Select to sort by this column" data-placement="top" data-original-title="Department">Department</a></th>
															<th class="hidden-phone"><a href="#" onclick="Joomla.tableOrdering('p.title','asc','');return false;" class="hasPopover" title="" data-content="Select to sort by this column" data-placement="top" data-original-title="Designation">Designation</a></th>
															<th class="hidden-phone"><a href="#" onclick="Joomla.tableOrdering('i.email','asc','');return false;" class="hasPopover" title="" data-content="Select to sort by this column" data-placement="top" data-original-title="Email">Email</a></th>
															<th class="hidden-phone"><a href="#" onclick="Joomla.tableOrdering('i.ctc','asc','');return false;" class="hasPopover" title="" data-content="Select to sort by this column" data-placement="top" data-original-title="CTC">CTC</a></th>
															<th class="hidden-phone"></th>
														</tr>
													</thead>
													<tbody>
														<tr class="row0">

															<td align="center" class="hidden-phone">1</td>

															<td><input type="checkbox" id="cb0" name="cid[]" value="75" onclick="Joomla.isChecked(this.checked);"></td>

															<td align="center">
																<a href="/vbizz-dashboard/employee?task=edit&amp;cid[0]=75">firmanpd</a>
															</td>

															<td align="center" class="hidden-phone">1</td>

															<td align="center">Info</td>

															<td align="center" class="hidden-phone">Sjednatel</td>


															<td align="center" class="hidden-phone">
																<a href="mailto:fir@gmail.com">
																	<div> fir@gmail.com</div>
																</a>
															</td>

															<td align="center" class="hidden-phone">$ 160,00</td>


															<td align="center" class="hidden-phone"><a href="javascript:void(0);" class="send_mail btn" empid="75">Send Email</a></td>


														</tr>


														<tr class="row1">

															<td align="center" class="hidden-phone">2</td>

															<td><input type="checkbox" id="cb1" name="cid[]" value="60" onclick="Joomla.isChecked(this.checked);"></td>

															<td align="center">
																<a href="/vbizz-dashboard/employee?task=edit&amp;cid[0]=60">test</a>
															</td>

															<td align="center" class="hidden-phone">435</td>

															<td align="center">Designing</td>

															<td align="center" class="hidden-phone">Tipař</td>


															<td align="center" class="hidden-phone">
																<a href="mailto:test@test.test">
																	<div> test@test.test</div>
																</a>
															</td>

															<td align="center" class="hidden-phone">$ 111,00</td>


															<td align="center" class="hidden-phone"><a href="javascript:void(0);" class="send_mail btn" empid="60">Send Email</a></td>


														</tr>


														<tr class="row0">

															<td align="center" class="hidden-phone">3</td>

															<td><input type="checkbox" id="cb2" name="cid[]" value="58" onclick="Joomla.isChecked(this.checked);"></td>

															<td align="center">
																<a href="/vbizz-dashboard/employee?task=edit&amp;cid[0]=58">Test Employee</a>
															</td>

															<td align="center" class="hidden-phone">58585</td>

															<td align="center">Pojištění</td>

															<td align="center" class="hidden-phone">Sjednatel</td>


															<td align="center" class="hidden-phone">
																<a href="mailto:testemployee@vbizz.com">
																	<div> testemployee@vbizz.com</div>
																</a>
															</td>

															<td align="center" class="hidden-phone">$ 2.500,00</td>


															<td align="center" class="hidden-phone"><a href="javascript:void(0);" class="send_mail btn" empid="58">Send Email</a></td>


														</tr>



													</tbody>
													<tfoot>
														<tr>
															<td colspan="10">
																<div class="pagination pagination-toolbar clearfix" style="text-align: center;">

																	<div class="limit pull-right">
																		Display #<select id="limit" name="limit" class="inputbox input-mini" size="1" onchange="this.form.submit()" style="">
																					<option value="5" selected="selected">5</option>
																					<option value="10">10</option>
																					<option value="15">15</option>
																					<option value="20">20</option>
																					<option value="25">25</option>
																					<option value="30">30</option>
																					<option value="50">50</option>
																					<option value="100">100</option>
																					<option value="0">All</option>
																				</select>
																		{{-- <div class="chzn-container chzn-container-single chzn-container-single-nosearch" style="width: 59px;" title="" id="limit_chzn"><a class="chzn-single"><span>5</span><div><b></b></div></a>
																			<div class="chzn-drop">
																				<div class="chzn-search"><input type="text" autocomplete="off" readonly=""></div>
																				<ul class="chzn-results"></ul>
																			</div>
																		</div> --}}
																	</div>


																	<input type="hidden" name="limitstart" value="0">

																</div>
															</td>
														</tr>
													</tfoot>

												</table>
											</div>



											<input type="hidden" name="option" value="com_vbizz">
											<input type="hidden" name="task" value="">
											<input type="hidden" name="boxchecked" value="0">
											<input type="hidden" name="view" value="employee">
											<input type="hidden" name="filter_order" value="i.userid">
											<input type="hidden" name="filter_order_Dir" value="desc">
										</form>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>


@endsection

@section('script')
<script type="text/javascript">
	jQuery(document).ready(function(e) {

		var window_height = jQuery(document).height();
		var header = jQuery('.header').height();
		var copyright = jQuery('.copyright').height();
		var new_height = window_height - (copyright + header);
		jQuery('.cpanel').css('min-height', new_height);
		//jQuery("a.menu-heading:first").addClass('active');
		jQuery('.desktop_menu li.has-sub>a').on('click', function() {
			jQuery(this).removeAttr('href');
			var element = jQuery(this).parent('li');
			if (element.hasClass('open')) {
				element.removeClass('open');
				element.find('li').removeClass('open');
				element.find('li').removeClass('opendiv');
				element.find('ul').slideUp();
			} else {
				element.addClass('open');
				element.children('ul').slideDown();
				element.siblings('li').children('ul').slideUp();
				element.siblings('li').removeClass('open');
				element.siblings('li').find('li').removeClass('open');
				element.find('li').removeClass('opendiv');
				element.siblings('li').find('ul').slideUp();
			}
		});
	});
</script>

<script>
	jQuery(function() {
		jQuery(document).on('click', '.toggle', function() {
			jQuery(".responsive_lisy").slideToggle("slow");
		});
	});
</script>
<script type="text/javascript">
	jQuery(function() {

		jQuery("#dialog").dialog({
			autoOpen: false,
			width: 700,
			height: 400,
			show: {
				effect: "blind",
				//duration: 1000
			},
			hide: {
				effect: "explode",
				//duration: 1000
			},
			open: function(event, ui) {
				var empid = jQuery('#dialog').data('empid');
				var htm = '<input type="hidden" name="empid" value="' + empid + '" />';
				jQuery('#mail-sent').append(htm);
			},
			close: function(event, ui) {
				jQuery('#mail-sent').find('input[name="empid"]').remove();
			}
		});


		jQuery(document).on('click', '.send', function() {

			var empid = jQuery(this).parent().parent().parent().find('input[name="empid"]').val();
			var subject = jQuery(this).parent().parent().parent().find('input[name="subject"]').val();
			var email = jQuery(this).parent().parent().parent().find('textarea[name="email_content"]').val();

			var that = this;


			jQuery.ajax({
				type: "POST",
				dataType: "JSON",
				data: {
					'option': 'com_vbizz',
					'view': 'employee',
					'task': 'sendCustomEmail',
					'tmpl': 'component',
					'empid': empid,
					'subject': subject,
					'email': email
				},

				beforeSend: function() {
					jQuery(that).parent().find("span.loadingbox").show();
				},

				complete: function() {
					jQuery(that).parent().find("span.loadingbox").hide();
				},

				success: function(data) {
					if (data.result == "success") {
						jQuery(that).parent().parent().parent().find('input[name="subject"]').val('');
						jQuery(that).parent().parent().parent().find('textarea[name="email_content"]').val('');
						var htm = '<tr><td></td><td><span>Email Sent Successfully</span></td></tr>';
						jQuery(that).parent().parent().parent().append(htm);

						setTimeout(function() {
							jQuery("#dialog").dialog("close");
						}, 3000);
					}
				}
			});
		});

	});

	jQuery(document).on('click', '.send_mail', function() {
		var empid = jQuery(this).attr('empid');
		jQuery("#dialog").data('empid', empid).dialog("open");
	});
</script>
<script>
	jQuery.widget("custom.catcomplete", jQuery.ui.autocomplete, {
		_create: function() {
			this._super();
			this.widget().menu("option", "items", "> :not(.ui-autocomplete-category)");
		},
		_renderMenu: function(ul, items) {
			var that = this,
				currentCategory = "";
			jQuery.each(items, function(index, item) {
				var li;
				if (item.category != currentCategory) {
					ul.append("<li class='ui-autocomplete-category'>" + item.category + "</li>");
					currentCategory = item.category;
				}
				li = that._renderItemData(ul, item);
				if (item.category) {
					li.attr("aria-label", item.category + " : " + item.label);
				}
			});
		}
	});
</script>

<script>
	jQuery(function() {

		jQuery("#vc_search").catcomplete({

			source: function(request, response) {

				jQuery.ajax({
					url: "",
					type: "POST",
					dataType: "json",
					data: {
						"option": "com_vbizz",
						"task": "search",
						"tmpl": "component",
						"keyword": request.term
					},
					success: function(data) {
						response(jQuery.map(JSON.parse(data.search), function(item) {

							return {
								label: item.label,
								category: item.category,
								view: item.view,
								task: item.task
							};

						}));
					}
				});

			},

			select: function(event, ui) {
				var view = ui.item.view;
				var task = ui.item.task;

				jQuery('form[name="vcAdminForm"] #view').val(view);
				jQuery('form[name="vcAdminForm"] #task').val(task);
			},

			minlength: 0

		});

	});


	jQuery(document).on('click', '#sbmt', function() {

		var val = jQuery('form[name="vcAdminForm"] #vc_search').val();

		if (val == "") {
			alert('Please enter some keyword/text');
			return false;
		}

		var view = jQuery('form[name="vcAdminForm"] #view').val();
		var task = jQuery('form[name="vcAdminForm"] #task').val();

		if (task != "" && task != "none" && task != "viewonly") {
			window.location.href = "index.php?option=com_vbizz&view=" + view + "&task=" + task;
		} else if (task == "viewonly") {
			window.location.href = "index.php?option=com_vbizz&view=" + view;
		} else if (view == "") {
			window.location.href = "index.php?option=com_vbizz&view=search&search=" + val;
		} else {
			window.location.href = "index.php?option=com_vbizz&view=" + view + "&search=" + val;
		}

		return false;

	});


	jQuery(document).on('keyup', 'input#vc_search', function(e) {
		if (e.keyCode == 8 || e.keyCode == 46) {
			jQuery('form[name="vcAdminForm"] #view').val('');
			jQuery('form[name="vcAdminForm"] #task').val('');
		}
	});
</script>
@endsection