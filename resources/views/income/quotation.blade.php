@extends('layouts.app')

@section('content')
<div id="vbizz">


    <header class="header">
        <div class="container-title">
            <h1 class="page-title">Quotation</h1>
        </div>
    </header>
    <div class="content_part">
        <form action="/vbizz-dashboard/quotes" method="post" name="adminForm" id="adminForm">

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
                    <strong>View As: </strong>
                    <select id="filter_status" name="filter_status" class="inputbox" size="1" onchange="submitform();"
                        style="display: none;">
                        <option value="owner">Owner</option>
                        <option value="client">Vendor</option>
                    </select>
                    <div class="chzn-container chzn-container-single chzn-container-single-nosearch"
                        style="width: 79px;" title="" id="filter_status_chzn"><a class="chzn-single"><span>Owner</span>
                            <div><b></b></div>
                        </a>
                        <div class="chzn-drop">
                            <div class="chzn-search"><input type="text" autocomplete="off" readonly=""></div>
                            <ul class="chzn-results"></ul>
                        </div>
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
                                    data-placement="top" data-original-title="Title">Title</a></th>
                            <th class="hidden-phone"><a href="#"
                                    onclick="Joomla.tableOrdering('customer','asc','');return false;" class="hasPopover"
                                    title="" data-content="Select to sort by this column" data-placement="top"
                                    data-original-title="Customer">Customer</a></th>
                            <th class="hidden-phone"><a href="#"
                                    onclick="Joomla.tableOrdering('quote_date','asc','');return false;"
                                    class="hasPopover" title="" data-content="Select to sort by this column"
                                    data-placement="top" data-original-title="Date">Date</a></th>
                            <th><a href="#" onclick="Joomla.tableOrdering('totalAmount','asc','');return false;"
                                    class="hasPopover" title="" data-content="Select to sort by this column"
                                    data-placement="top" data-original-title="Amount">Amount</a></th>
                            <th class="hidden-phone"><a href="#"
                                    onclick="Joomla.tableOrdering('approved','asc','');return false;" class="hasPopover"
                                    title="" data-content="Select to sort by this column" data-placement="top"
                                    data-original-title="Approved">Approved</a></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="row0">
                            <td align="center" class="hidden-phone">1</td>

                            <td><input type="checkbox" id="cb0" name="cid[]" value="13"
                                    onclick="Joomla.isChecked(this.checked);"></td>
                            <td>
                                <a href="/vbizz-dashboard/quotes?task=edit&amp;cid[0]=13">Shirt Design</a>


                            </td>


                            <td class="hidden-phone">Test Client</td>
                            <td class="hidden-phone">08.07.2019</td>

                            <td>NOK 3900.00</td>

                            <td class="hidden-phone">No</td>


                        </tr>
                        <tr class="row1">
                            <td align="center" class="hidden-phone">2</td>

                            <td><input type="checkbox" id="cb1" name="cid[]" value="14"
                                    onclick="Joomla.isChecked(this.checked);"></td>
                            <td>
                                <a href="/vbizz-dashboard/quotes?task=edit&amp;cid[0]=14">shirt Will</a>


                            </td>


                            <td class="hidden-phone">lemale</td>
                            <td class="hidden-phone">16.08.2019</td>

                            <td>NOK 130.00</td>

                            <td class="hidden-phone">No</td>


                        </tr>
                        <tr class="row0">
                            <td align="center" class="hidden-phone">3</td>

                            <td><input type="checkbox" id="cb2" name="cid[]" value="15"
                                    onclick="Joomla.isChecked(this.checked);"></td>
                            <td>
                                <a href="/vbizz-dashboard/quotes?task=edit&amp;cid[0]=15">Websters</a>


                            </td>


                            <td class="hidden-phone">abc </td>
                            <td class="hidden-phone">22.11.2019</td>

                            <td>NOK 3139.20</td>

                            <td class="hidden-phone">No</td>


                        </tr>
                        <tr class="row1">
                            <td align="center" class="hidden-phone">4</td>

                            <td><input type="checkbox" id="cb3" name="cid[]" value="16"
                                    onclick="Joomla.isChecked(this.checked);"></td>
                            <td>
                                <a href="/vbizz-dashboard/quotes?task=edit&amp;cid[0]=16">MYtest</a>


                            </td>


                            <td class="hidden-phone">Kamil Longo</td>
                            <td class="hidden-phone">08.04.2019</td>

                            <td>NOK 20.00</td>

                            <td class="hidden-phone">No</td>


                        </tr>
                        <tr class="row0">
                            <td align="center" class="hidden-phone">5</td>

                            <td><input type="checkbox" id="cb4" name="cid[]" value="17"
                                    onclick="Joomla.isChecked(this.checked);"></td>
                            <td>
                                <a href="/vbizz-dashboard/quotes?task=edit&amp;cid[0]=17">Test</a>


                            </td>


                            <td class="hidden-phone">Mytest</td>
                            <td class="hidden-phone">25.04.2019</td>

                            <td>NOK 65.00</td>

                            <td class="hidden-phone">No</td>


                        </tr>
                        <tr class="row1">
                            <td align="center" class="hidden-phone">6</td>

                            <td><input type="checkbox" id="cb5" name="cid[]" value="18"
                                    onclick="Joomla.isChecked(this.checked);"></td>
                            <td>
                                <a href="/vbizz-dashboard/quotes?task=edit&amp;cid[0]=18">test</a>


                            </td>


                            <td class="hidden-phone">milad</td>
                            <td class="hidden-phone">30.04.2019</td>

                            <td>NOK 2590.00</td>

                            <td class="hidden-phone">No</td>


                        </tr>
                        <tr class="row0">
                            <td align="center" class="hidden-phone">7</td>

                            <td><input type="checkbox" id="cb6" name="cid[]" value="19"
                                    onclick="Joomla.isChecked(this.checked);"></td>
                            <td>
                                <a href="/vbizz-dashboard/quotes?task=edit&amp;cid[0]=19">Logo</a>


                            </td>


                            <td class="hidden-phone">Yusuf Akinci</td>
                            <td class="hidden-phone">04.12.2019</td>

                            <td>NOK 28000.00</td>

                            <td class="hidden-phone">No</td>


                        </tr>
                        <tr class="row1">
                            <td align="center" class="hidden-phone">8</td>

                            <td><input type="checkbox" id="cb7" name="cid[]" value="20"
                                    onclick="Joomla.isChecked(this.checked);"></td>
                            <td>
                                <a href="/vbizz-dashboard/quotes?task=edit&amp;cid[0]=20">inst electrica</a>


                            </td>


                            <td class="hidden-phone">aref ansari</td>
                            <td class="hidden-phone">25.09.2019</td>

                            <td>NOK 20.72</td>

                            <td class="hidden-phone">No</td>


                        </tr>
                        <tr class="row0">
                            <td align="center" class="hidden-phone">9</td>

                            <td><input type="checkbox" id="cb8" name="cid[]" value="22"
                                    onclick="Joomla.isChecked(this.checked);"></td>
                            <td>
                                <a href="/vbizz-dashboard/quotes?task=edit&amp;cid[0]=22">USp</a>


                            </td>


                            <td class="hidden-phone">Cosmin Buzaianu</td>
                            <td class="hidden-phone">10.10.2019</td>

                            <td>NOK 250.00</td>

                            <td class="hidden-phone">No</td>


                        </tr>
                        <tr class="row1">
                            <td align="center" class="hidden-phone">10</td>

                            <td><input type="checkbox" id="cb9" name="cid[]" value="23"
                                    onclick="Joomla.isChecked(this.checked);"></td>
                            <td>
                                <a href="/vbizz-dashboard/quotes?task=edit&amp;cid[0]=23">asdASD</a>


                            </td>


                            <td class="hidden-phone">Md Anupam Hayat Shawon</td>
                            <td class="hidden-phone">04.12.2019</td>

                            <td>NOK -118.00</td>

                            <td class="hidden-phone">No</td>


                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="9">
                                <div class="pagination pagination-toolbar clearfix" style="text-align: center;">

                                    <div class="limit pull-right">
                                        Display #<select id="limit" name="limit" class="inputbox input-mini" size="1"
                                            onchange="this.form.submit()" style="display: none;">
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
                                        <div class="chzn-container chzn-container-single chzn-container-single-nosearch"
                                            style="width: 59px;" title="" id="limit_chzn"><a
                                                class="chzn-single"><span>20</span>
                                                <div><b></b></div>
                                            </a>
                                            <div class="chzn-drop">
                                                <div class="chzn-search"><input type="text" autocomplete="off"
                                                        readonly=""></div>
                                                <ul class="chzn-results"></ul>
                                            </div>
                                        </div>
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
            <input type="hidden" name="view" value="quotes">
            <input type="hidden" name="filter_order" value="id">
            <input type="hidden" name="filter_order_Dir" value="desc">
        </form>
    </div>
</div>
@endsection

@section('script')

@endsection