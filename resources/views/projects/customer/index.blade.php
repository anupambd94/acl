<html lang="en-gb" dir="ltr" slick-uniqueid="3"><head>
	<meta charset="utf-8">
	<title>vBizz - Business Management Tool</title>
	<link href="/components/com_vbizz/assets/css/jquery-ui.css" rel="stylesheet">
	<link href="/components/com_vbizz/assets/css/vbizz-new.css" rel="stylesheet">
	<link href="/components/com_vbizz/assets/css/font-awesome.css" rel="stylesheet">
	<link href="/components/com_vbizz/assets/css/font-awesome-animation.min.css" rel="stylesheet">
	<link href="/components/com_vbizz/assets/css/jquery-ui.css" rel="stylesheet">
	<link href="/media/jui/css/chosen.css?fff1c72eed1a3c56f80a13367de2f480" rel="stylesheet">
	<link href="http://vbizz.joomlawings.com/components/com_vbizz/assets/css/vbizz.css" rel="stylesheet">
	<link href="http://vbizz.joomlawings.com/templates/vacount/css/style.css" rel="stylesheet">
	<link href="http://vbizz.joomlawings.com/templates/vacount/css/font-awesome.css" rel="stylesheet">
	<script type="application/json" class="joomla-script-options new">{"csrf.token":"d19f46b06bad6f7017276c1df5d14fc4","system.paths":{"root":"","base":""}}</script>
	<script src="/media/jui/js/jquery.min.js?fff1c72eed1a3c56f80a13367de2f480"></script>
	<script src="/components/com_vbizz/assets/js/jquery-ui.js"></script>
	<script src="/components/com_vbizz/assets/js/jquery.1.10.js"></script>
	<script src="/components/com_vbizz/assets/js/jquery-ui.js"></script>
	<script src="/media/system/js/mootools-core.js?fff1c72eed1a3c56f80a13367de2f480"></script>
	<script src="/media/system/js/core.js?fff1c72eed1a3c56f80a13367de2f480"></script>
	<script src="/media/system/js/mootools-more.js?fff1c72eed1a3c56f80a13367de2f480"></script>
	<script src="/media/jui/js/jquery-noconflict.js?fff1c72eed1a3c56f80a13367de2f480"></script>
	<script src="/media/jui/js/jquery-migrate.min.js?fff1c72eed1a3c56f80a13367de2f480"></script>
	<script src="/media/jui/js/chosen.jquery.min.js?fff1c72eed1a3c56f80a13367de2f480"></script>
	<script src="/media/jui/js/bootstrap.min.js?fff1c72eed1a3c56f80a13367de2f480"></script>
	<!--[if lt IE 9]><script src="/media/jui/js/html5.js?fff1c72eed1a3c56f80a13367de2f480"></script><![endif]-->
	<script>
jQuery(function($) {
			 $('.hasTip').each(function() {
				var title = $(this).attr('title');
				if (title) {
					var parts = title.split('::', 2);
					var mtelement = document.id(this);
					mtelement.store('tip:title', parts[0]);
					mtelement.store('tip:text', parts[1]);
				}
			});
			var JTooltips = new Tips($('.hasTip').get(), {"maxTitleChars": 50,"fixed": false});
		});
	jQuery(function ($) {
		initChosen();
		$("body").on("subform-row-add", initChosen);

		function initChosen(event, container)
		{
			container = container || document;
			$(container).find("select").chosen({"disable_search_threshold":10,"search_contains":true,"allow_single_deselect":true,"placeholder_text_multiple":"Type or select some options","placeholder_text_single":"Select an option","no_results_text":"No results match"});
		}
	});
	
jQuery(function($){ initPopovers(); $("body").on("subform-row-add", initPopovers); function initPopovers (event, container) { $(container || document).find(".hasPopover").popover({"html": true,"trigger": "hover focus","container": "body"});} });
jQuery(document).ready(function(){jQuery("a.close").on("click", function(){jQuery("#system-message-container").remove();});});
	</script>

</head>
<body class="contentpane" style="">
	<div id="system-message-container">
	</div>

	
<form action="index.php?option=com_vbizz&amp;view=customer&amp;layout=modal&amp;tmpl=component" method="post" name="adminForm" id="adminForm">

<header class="header">
		<div class="container-title">
				<h1 class="page-title">Customers</h1>
		</div>
</header>
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
                                       
                </div>
            </div>
        </div>
    </div>
</div>

<div class="filter">
<div class="filter_left_modal">
<input type="text" name="search" id="search" placeholder="Search" value="" class="text_area">
<button class="btn hasTooltip" title="Search" onclick="this.form.submit();"><i class="fa fa-search"></i></button>
<button class="btn hasTooltip" title="Clear" onclick="document.getElementById('search').value='';this.form.submit();
document.getElementById('filter_status').value='';this.form.submit();"><i class="fa fa-remove"></i> 
<span class="clear_text">Clear</span></button>
</div>

</div>

<div id="editcell">
<table class="adminlist table" width="100%">
    <thead>
        <tr>
            <th width="30">#</th>
            <th><a href="#" onclick="Joomla.tableOrdering('i.name','asc','');return false;" class="hasPopover" title="" data-content="Select to sort by this column" data-placement="top" data-original-title="Name">Name</a></th>
        </tr>
    </thead>
	    	<tbody><tr class="row0">
    
            <td align="center">1</td>
        
            <td align="center">
            	<a href="javascript:void(0)" onclick="if (window.parent) window.parent.getCustVal('85',  'abc ');" id="85">abc </a>
            </td>
    	</tr>
        	<tr class="row1">
    
            <td align="center">2</td>
        
            <td align="center">
            	<a href="javascript:void(0)" onclick="if (window.parent) window.parent.getCustVal('81',  'aref ansari');" id="81">aref ansari</a>
            </td>
    	</tr>
        	<tr class="row0">
    
            <td align="center">3</td>
        
            <td align="center">
            	<a href="javascript:void(0)" onclick="if (window.parent) window.parent.getCustVal('79',  'Марлен');" id="79">Марлен</a>
            </td>
    	</tr>
        	<tr class="row1">
    
            <td align="center">4</td>
        
            <td align="center">
            	<a href="javascript:void(0)" onclick="if (window.parent) window.parent.getCustVal('78',  'Company One');" id="78">Company One</a>
            </td>
    	</tr>
        	<tr class="row0">
    
            <td align="center">5</td>
        
            <td align="center">
            	<a href="javascript:void(0)" onclick="if (window.parent) window.parent.getCustVal('77',  'Maharaj');" id="77">Maharaj</a>
            </td>
    	</tr>
        	<tr class="row1">
    
            <td align="center">6</td>
        
            <td align="center">
            	<a href="javascript:void(0)" onclick="if (window.parent) window.parent.getCustVal('74',  'lorel');" id="74">lorel</a>
            </td>
    	</tr>
        	<tr class="row0">
    
            <td align="center">7</td>
        
            <td align="center">
            	<a href="javascript:void(0)" onclick="if (window.parent) window.parent.getCustVal('73',  'milad');" id="73">milad</a>
            </td>
    	</tr>
        	<tr class="row1">
    
            <td align="center">8</td>
        
            <td align="center">
            	<a href="javascript:void(0)" onclick="if (window.parent) window.parent.getCustVal('72',  'Tahir Irshad');" id="72">Tahir Irshad</a>
            </td>
    	</tr>
        	<tr class="row0">
    
            <td align="center">9</td>
        
            <td align="center">
            	<a href="javascript:void(0)" onclick="if (window.parent) window.parent.getCustVal('71',  'Mytest');" id="71">Mytest</a>
            </td>
    	</tr>
        	<tr class="row1">
    
            <td align="center">10</td>
        
            <td align="center">
            	<a href="javascript:void(0)" onclick="if (window.parent) window.parent.getCustVal('70',  'lemale');" id="70">lemale</a>
            </td>
    	</tr>
        	<tr class="row0">
    
            <td align="center">11</td>
        
            <td align="center">
            	<a href="javascript:void(0)" onclick="if (window.parent) window.parent.getCustVal('67',  'Kamil Longo');" id="67">Kamil Longo</a>
            </td>
    	</tr>
        	<tr class="row1">
    
            <td align="center">12</td>
        
            <td align="center">
            	<a href="javascript:void(0)" onclick="if (window.parent) window.parent.getCustVal('66',  'Jana Zrána');" id="66">Jana Zrána</a>
            </td>
    	</tr>
        	<tr class="row0">
    
            <td align="center">13</td>
        
            <td align="center">
            	<a href="javascript:void(0)" onclick="if (window.parent) window.parent.getCustVal('65',  'H008-WEB');" id="65">H008-WEB</a>
            </td>
    	</tr>
        	<tr class="row1">
    
            <td align="center">14</td>
        
            <td align="center">
            	<a href="javascript:void(0)" onclick="if (window.parent) window.parent.getCustVal('64',  'Mr.Ahmed');" id="64">Mr.Ahmed</a>
            </td>
    	</tr>
        	<tr class="row0">
    
            <td align="center">15</td>
        
            <td align="center">
            	<a href="javascript:void(0)" onclick="if (window.parent) window.parent.getCustVal('63',  'BAITH AL SHAY');" id="63">BAITH AL SHAY</a>
            </td>
    	</tr>
        	<tr class="row1">
    
            <td align="center">16</td>
        
            <td align="center">
            	<a href="javascript:void(0)" onclick="if (window.parent) window.parent.getCustVal('62',  'Joe');" id="62">Joe</a>
            </td>
    	</tr>
        	<tr class="row0">
    
            <td align="center">17</td>
        
            <td align="center">
            	<a href="javascript:void(0)" onclick="if (window.parent) window.parent.getCustVal('61',  'yass');" id="61">yass</a>
            </td>
    	</tr>
        	<tr class="row1">
    
            <td align="center">18</td>
        
            <td align="center">
            	<a href="javascript:void(0)" onclick="if (window.parent) window.parent.getCustVal('59',  'Helen Kalu');" id="59">Helen Kalu</a>
            </td>
    	</tr>
        	<tr class="row0">
    
            <td align="center">19</td>
        
            <td align="center">
            	<a href="javascript:void(0)" onclick="if (window.parent) window.parent.getCustVal('57',  'Test Client');" id="57">Test Client</a>
            </td>
    	</tr>
        </tbody><tfoot>
        <tr>
        	<td colspan="9">
<div class="pagination pagination-toolbar clearfix" style="text-align: center;">

			<div class="limit pull-right">
			Display #<select id="limit" name="limit" class="inputbox input-mini" size="1" onchange="this.form.submit()" style="display: none;">
	<option value="5">5</option>
	<option value="10">10</option>
	<option value="15">15</option>
	<option value="20" selected="selected">20</option>
	<option value="25">25</option>
	<option value="30">30</option>
	<option value="50">50</option>
	<option value="100">100</option>
	<option value="0">All</option>
</select><div class="chzn-container chzn-container-single chzn-container-single-nosearch" style="width: 59px;" title="" id="limit_chzn"><a class="chzn-single"><span>20</span><div><b></b></div></a><div class="chzn-drop"><div class="chzn-search"><input type="text" autocomplete="off" readonly=""></div><ul class="chzn-results"></ul></div></div>
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
<input type="hidden" name="view" value="customer">
<input type="hidden" name="tmpl" value="component">
<input type="hidden" name="filter_order" value="userid">
<input type="hidden" name="filter_order_Dir" value="desc">
</form>


</body></html>