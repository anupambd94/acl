@extends('layouts.app')

@section('content')
<div id="vbizz">

    <style>
        .shadow {
            left: 5% !important;
            top: 5% !important;
        }
    </style>
    <header class="header">
        <div class="container-title">
            <h1 class="page-title">Leads</h1>
        </div>
    </header>
    <div class="content_part">
        <form action="/vbizz-dashboard/leads" method="post" name="adminForm" id="adminForm">

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
                                    <span
                                        onclick="if (document.adminForm.boxchecked.value==0){alert('Please first make a selection from the list');}else{ Joomla.submitbutton('edit')}"
                                        class="btn btn-small">
                                        <span class="fa fa-edit"></span> Edit</span>
                                </div>
                                <div class="btn-wrapper" id="toolbar-delete">
                                    <span
                                        onclick="if (document.adminForm.boxchecked.value==0){alert('Please first make a selection from the list');}else{ Joomla.submitbutton('remove')}"
                                        class="btn btn-small">
                                        <span class="fa fa-remove"></span> Delete</span>
                                </div>


                                <div class="btn-wrapper" id="toolbar-setting" style="float: right;">
                                    <a class="modal btn faa-parent animated-hover faa-slow" id="modal1" title="Select"
                                        href="/vbizz-dashboard/leads/leadstatus?tmpl=component&amp;ot=1"
                                        rel="{handler: 'iframe', size: {x: '90%', y: '80%'}}">
                                        <span class="fa fa-cog faa-spin faa-slow"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="adminlist filter">
                <div class="filet_left filter_block-a">
                    <input type="text" name="search" id="search" placeholder="Search" value="" class="text_area">
                    <button class="btn hasTooltip" title="Search" onclick="this.form.submit();"><i
                            class="fa fa-search"></i></button>
                    <button class="btn hasTooltip" title="Clear" onclick="document.getElementById('search').value='';this.form.submit();
document.getElementById('filter_status').value='';this.form.submit();"><i class="fa fa-remove"></i></button>
                </div>


                <div class="filter_right filter_block-b">
                    <div class="vbz_lead lead_so"><label>Lead Source</label>
                        <select id="lead_source" name="lead_source" class="inputbox" size="1" onchange="submitform();"
                            style="width: 150px; ">
                            <option value="" selected="selected">ALL</option>
                            <option value="Advertisement">Advertisement</option>
                            <option value="Cold Call">Cold Call</option>
                            <option value="Employee Referral">Employee Referral</option>
                            <option value="External Referral">External Referral</option>
                            <option value="Partner">Partner</option>
                            <option value="Public Relations">Public Relations</option>
                            <option value="Sales Mail Alias">Sales Mail Alias</option>
                            <option value="Seminar Partner">Seminar Partner</option>
                            <option value="Seminar-Internal">Seminar-Internal</option>
                            <option value="Trade Show">Trade Show</option>
                            <option value="Web Download">Web Download</option>
                            <option value="Chat">Chat</option>
                        </select>
                        {{-- <div class="chzn-container chzn-container-single" style="width: 150px;" title=""
                            id="lead_source_chzn"><a class="chzn-single"><span>ALL</span>
                                <div><b></b></div>
                            </a>
                            <div class="chzn-drop">
                                <div class="chzn-search"><input type="text" autocomplete="off"></div>
                                <ul class="chzn-results"></ul>
                            </div>
                        </div> --}}
                    </div>
                    <div class="vbz_lead lead_in"><label>Lead Industry</label>
                        <select id="lead_industry" name="lead_industry" class="inputbox" size="1"
                            onchange="submitform();" style="width: 150px;">
                            <option value="" selected="selected">ALL</option>
                            <option value="ManagementISV">ManagementISV</option>
                            <option value="MSP (Management Service Provider)">MSP (Management Service Provider)</option>
                            <option value="Network Equipment (Enterprise)">Network Equipment (Enterprise)</option>
                            <option value="Non-management ISV">Non-management ISV</option>
                            <option value="Optical Networking">Optical Networking</option>
                            <option value="mall/Medium Enterprise">mall/Medium Enterprise</option>
                            <option value="Storage Equipment">Storage Equipment</option>
                            <option value="Storage Service Provider">Storage Service Provider</option>
                            <option value="Wireless Industry">Wireless Industry</option>
                            <option value="ASP">ASP</option>
                            <option value="ERP">ERP</option>
                            <option value="Government/Military">Government/Military</option>
                            <option value="Large Enterprise">Large Enterprise</option>
                            <option value="Data/Telecom OEM">Data/Telecom OEM</option>
                        </select>
                        {{-- <div class="chzn-container chzn-container-single" style="width: 150px;" title=""
                            id="lead_industry_chzn"><a class="chzn-single"><span>ALL</span>
                                <div><b></b></div>
                            </a>
                            <div class="chzn-drop">
                                <div class="chzn-search"><input type="text" autocomplete="off"></div>
                                <ul class="chzn-results"></ul>
                            </div>
                        </div> --}}
                    </div>
                    <div class="vbz_lead lead_st"><label>Lead Status</label>
                        <select id="lead_status" name="lead_status" class="inputbox" size="1" onchange="submitform();"
                            style="width: 150px;">
                            <option value="" selected="selected">ALL</option>
                            <option value="dsdsa">Hot</option>
                            <option value="Cold">Cold</option>
                            <option value="Cold">Cold</option>
                        </select>
                        {{-- <div class="chzn-container chzn-container-single chzn-container-single-nosearch"
                            style="width: 150px;" title="" id="lead_status_chzn"><a class="chzn-single"><span>ALL</span>
                                <div><b></b></div>
                            </a>
                            <div class="chzn-drop">
                                <div class="chzn-search"><input type="text" autocomplete="off" readonly=""></div>
                                <ul class="chzn-results"></ul>
                            </div>
                        </div> --}}
                    </div>
                </div>


            </div>


            <div id="editcell">
                <table class="adminlist table">
                    <thead>
                        <tr>
                            <th width="10" class="hidden-phone">#</th>
                            <th width="10"><input type="checkbox" name="toggle" value=""
                                    onclick="Joomla.checkAll(this);"></th>
                            <th><a href="#" onclick="Joomla.tableOrdering('title','asc','');return false;"
                                    class="hasPopover" title="" data-content="Select to sort by this column"
                                    data-placement="top" data-original-title="Lead Name">Lead Name</a></th>
                            <th class="hidden-phone"><a href="#"
                                    onclick="Joomla.tableOrdering('userid','asc','');return false;" class="hasPopover"
                                    title="" data-content="Select to sort by this column" data-placement="top"
                                    data-original-title="Assign To">Assign To</a></th>
                            <th class="hidden-phone"><a href="#"
                                    onclick="Joomla.tableOrdering('lead_source','asc','');return false;"
                                    class="hasPopover" title="" data-content="Select to sort by this column"
                                    data-placement="top" data-original-title="Lead Source">Lead Source</a></th>
                            <th class="hidden-phone"><a href="#"
                                    onclick="Joomla.tableOrdering('lead_industry','asc','');return false;"
                                    class="hasPopover" title="" data-content="Select to sort by this column"
                                    data-placement="top" data-original-title="Industry">Industry</a></th>
                            <th class="hidden-phone"><a href="#"
                                    onclick="Joomla.tableOrdering('lead_status','asc','');return false;"
                                    class="hasPopover" title="" data-content="Select to sort by this column"
                                    data-placement="top" data-original-title="Lead Status">Lead Status</a></th>
                            <th><a href="#" onclick="Joomla.tableOrdering('lead_date','asc','');return false;"
                                    class="hasPopover" title="" data-content="Select to sort by this column"
                                    data-placement="top" data-original-title="Lead Date">Lead Date</a></th>
                            <th><a href="#" onclick="Joomla.tableOrdering('move_to','asc','');return false;"
                                    class="hasPopover" title="" data-content="Select to sort by this column"
                                    data-placement="top" data-original-title="Action On Lead">Action On Lead</a></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="row0">
                            <td align="center" class="hidden-phone">1</td>

                            <td><input type="checkbox" id="cb0" name="cid[]" value="5"
                                    onclick="Joomla.isChecked(this.checked);"></td>

                            <td>
                                <a href="/vbizz-dashboard/leads/edit/5">prova</a>
                            </td>
                            <td class="hidden-phone"><a href="/vbizz-dashboard/customer/edit/57">Test Client</a></td>
                            <td class="hidden-phone">Cold Call</td>
                            <td class="hidden-phone">Optical Networking</td>
                            <td class="hidden-phone"></td>

                            <td class="hidden-phone">28.07.2019</td>

                            <td class="hidden-phone">Income Created</td>

                        </tr>
                        <tr class="row1">
                            <td align="center" class="hidden-phone">2</td>

                            <td><input type="checkbox" id="cb1" name="cid[]" value="6"
                                    onclick="Joomla.isChecked(this.checked);"></td>

                            <td>
                                <a href="/vbizz-dashboard/leads/edit/6">Alex</a>
                            </td>
                            <td class="hidden-phone"><a href="/vbizz-dashboard/customer/edit/62">Joe</a></td>
                            <td class="hidden-phone">External Referral</td>
                            <td class="hidden-phone">mall/Medium Enterprise</td>
                            <td class="hidden-phone">Contact in Future</td>

                            <td class="hidden-phone">08.02.2019</td>

                            <td class="hidden-phone">Invoice Created</td>

                        </tr>
                        <tr class="row0">
                            <td align="center" class="hidden-phone">3</td>

                            <td><input type="checkbox" id="cb2" name="cid[]" value="7"
                                    onclick="Joomla.isChecked(this.checked);"></td>

                            <td>
                                <a href="/vbizz-dashboard/leads/edit/7">skoda Octavia</a>
                            </td>
                            <td class="hidden-phone"><a href="/vbizz-dashboard/customer/edit/57">Test Client</a></td>
                            <td class="hidden-phone">Partner</td>
                            <td class="hidden-phone">Data/Telecom OEM</td>
                            <td class="hidden-phone">Contacted</td>

                            <td class="hidden-phone">22.02.2019</td>

                            <td class="hidden-phone">Income Created</td>

                        </tr>
                        <tr class="row1">
                            <td align="center" class="hidden-phone">4</td>

                            <td><input type="checkbox" id="cb3" name="cid[]" value="8"
                                    onclick="Joomla.isChecked(this.checked);"></td>

                            <td>
                                <a href="/vbizz-dashboard/leads/edit/8">ref not working</a>
                            </td>
                            <td class="hidden-phone"><a href="/vbizz-dashboard/customer/edit/67">Kamil Longo</a></td>
                            <td class="hidden-phone">Cold Call</td>
                            <td class="hidden-phone">Storage Equipment</td>
                            <td class="hidden-phone">Contacted</td>

                            <td class="hidden-phone">25.07.2019</td>

                            <td class="hidden-phone">Income Created</td>

                        </tr>
                        <tr class="row0">
                            <td align="center" class="hidden-phone">5</td>

                            <td><input type="checkbox" id="cb4" name="cid[]" value="9"
                                    onclick="Joomla.isChecked(this.checked);"></td>

                            <td>
                                <a href="/vbizz-dashboard/leads/edit/9">Delhi Transport</a>
                            </td>
                            <td class="hidden-phone"><a href="/vbizz-dashboard/customer/edit/77">Maharaj</a></td>
                            <td class="hidden-phone">Chat</td>
                            <td class="hidden-phone">Government/Military</td>
                            <td class="hidden-phone"></td>

                            <td class="hidden-phone">28.07.2019</td>

                            <td class="hidden-phone">Project Created</td>

                        </tr>
                        <tr class="row1">
                            <td align="center" class="hidden-phone">6</td>

                            <td><input type="checkbox" id="cb5" name="cid[]" value="10"
                                    onclick="Joomla.isChecked(this.checked);"></td>

                            <td>
                                <a href="/vbizz-dashboard/leads/edit/10">Lead1</a>
                            </td>
                            <td class="hidden-phone"><a href="/vbizz-dashboard/customer/edit/77">Maharaj</a></td>
                            <td class="hidden-phone">Advertisement</td>
                            <td class="hidden-phone">ManagementISV</td>
                            <td class="hidden-phone"></td>

                            <td class="hidden-phone">04.08.2019</td>

                            <td class="hidden-phone">Project Created</td>

                        </tr>
                        <tr class="row0">
                            <td align="center" class="hidden-phone">7</td>

                            <td><input type="checkbox" id="cb6" name="cid[]" value="11"
                                    onclick="Joomla.isChecked(this.checked);"></td>

                            <td>
                                <a href="/vbizz-dashboard/leads/edit/11">Ghee</a>
                            </td>
                            <td class="hidden-phone"><a href="/vbizz-dashboard/customer/edit/78">Company One</a></td>
                            <td class="hidden-phone">Employee Referral</td>
                            <td class="hidden-phone">ManagementISV</td>
                            <td class="hidden-phone">dsdsa</td>

                            <td class="hidden-phone">26.08.2019</td>

                            <td class="hidden-phone">Income Created</td>

                        </tr>
                        <tr class="row1">
                            <td align="center" class="hidden-phone">8</td>

                            <td><input type="checkbox" id="cb7" name="cid[]" value="12"
                                    onclick="Joomla.isChecked(this.checked);"></td>

                            <td>
                                <a href="/vbizz-dashboard/leads/edit/12">Кухня на заказ улица бетакская 17б</a>
                            </td>
                            <td class="hidden-phone"><a href="/vbizz-dashboard/customer/edit/79">Марлен</a></td>
                            <td class="hidden-phone">Advertisement</td>
                            <td class="hidden-phone">mall/Medium Enterprise</td>
                            <td class="hidden-phone">Cold</td>

                            <td class="hidden-phone">18.08.2019</td>

                            <td class="hidden-phone">Income Created</td>

                        </tr>
                        <tr class="row0">
                            <td align="center" class="hidden-phone">9</td>

                            <td><input type="checkbox" id="cb8" name="cid[]" value="13"
                                    onclick="Joomla.isChecked(this.checked);"></td>

                            <td>
                                <a href="/vbizz-dashboard/leads/edit/13">said</a>
                            </td>
                            <td class="hidden-phone"><a href="/vbizz-dashboard/customer/edit/77">Maharaj</a></td>
                            <td class="hidden-phone">Sales Mail Alias</td>
                            <td class="hidden-phone">ManagementISV</td>
                            <td class="hidden-phone"></td>

                            <td class="hidden-phone">22.10.2019</td>

                            <td class="hidden-phone">Income Created</td>

                        </tr>
                        <tr class="row1">
                            <td align="center" class="hidden-phone">10</td>

                            <td><input type="checkbox" id="cb9" name="cid[]" value="14"
                                    onclick="Joomla.isChecked(this.checked);"></td>

                            <td>
                                <a href="/vbizz-dashboard/leads/edit/14">sadc</a>
                            </td>
                            <td class="hidden-phone"><a href="/vbizz-dashboard/customer/edit/64">Mr.Ahmed</a></td>
                            <td class="hidden-phone">Cold Call</td>
                            <td class="hidden-phone">Wireless Industry</td>
                            <td class="hidden-phone">dsdsa</td>

                            <td class="hidden-phone">04.11.2019</td>

                            <td class="hidden-phone">No Action</td>

                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="9">
                                <div class="pagination pagination-toolbar clearfix" style="text-align: center;">

                                    <div class="limit pull-right">
                                        Display #<select id="limit" name="limit" class="inputbox input-mini" size="1"
                                            onchange="this.form.submit()" style="">
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
                                        {{-- <div class="chzn-container chzn-container-single chzn-container-single-nosearch"
                                            style="width: 59px;" title="" id="limit_chzn"><a
                                                class="chzn-single"><span>20</span>
                                                <div><b></b></div>
                                            </a>
                                            <div class="chzn-drop">
                                                <div class="chzn-search"><input type="text" autocomplete="off"
                                                        readonly=""></div>
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
            <input type="hidden" name="view" value="leads">
            <input type="hidden" name="filter_order" value="id">
            <input type="hidden" name="filter_order_Dir" value="desc">
        </form>
    </div>

</div>
@endsection

@section('script')

@endsection