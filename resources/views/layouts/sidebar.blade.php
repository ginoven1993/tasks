<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">

            <ul>
                    <li class="active">
                        <a href="/dashboard"><img src="{{asset('assets2/img/icons/dashboard.svg')}}" alt="img"><span> Dashboard</span> </a>
                    </li>
                    <li class="submenu">
                            <a href="javascript:void(0);"><img src="{{asset('assets2/img/icons/product.svg')}}" alt="img"><span> Espace de Travails</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="">Projets</a></li>
                                <li><a href="">Taches</a></li>
                                <li><a href="">Tickets</a></li>
                                <li><a href="">Espace Document</a></li>
                            </ul>
                    </li>

                    <li>
                        <a href="#"><i data-feather="layers"></i><span> Collaborateurs </span> </a>
                    </li>

                    <li class="submenu">
                        <a href="javascript:void(0);"><img src="{{asset('assets2/img/icons/users1.svg')}}" alt="img"><span> Agenda et Planification </span> <span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="#">Nouvelle Agenda </a></li>
                            <li><a href="#"> Liste</a></li>
                        </ul>
                    </li> 
                    <li class="submenu">
                            <a href="javascript:void(0);"><img src="{{asset('assets2/img/icons/purchase1.svg')}}" alt="img"><span> Gestion d'Accès </span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="#"></a> Collaborateurs </li>
                                <li><a href="#"></a> Projets </li>
                                <li><a href="#"></a> Utilisateurs </li>
                            </ul>
                    </li>

                 {{--   <li class="submenu">
                            <a href="javascript:void(0);"><img src="{{asset('assets/img/icons/sales1.svg')}}" alt="img"><span> Ventes</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="saleslist.html">Sales List</a></li>
                                <li><a href="pos.html">POS</a></li>
                                <li><a href="pos.html">New Sales</a></li>
                                <li><a href="salesreturnlists.html">Sales Return List</a></li>
                                <li><a href="createsalesreturns.html">New Sales Return</a></li>
                            </ul>
                    </li>

                    

                    <li class="submenu">
                        <a href="javascript:void(0);"><img src="{{asset('assets/img/icons/expense1.svg')}}" alt="img"><span> Dépenses</span> <span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="expenselist.html">Expense List</a></li>
                            <li><a href="createexpense.html">Add Expense</a></li>
                            <li><a href="expensecategory.html">Expense Category</a></li>
                        </ul>
                    </li>

                    <li class="submenu">
                        <a href="javascript:void(0);"><img src="{{asset('assets/img/icons/quotation1.svg')}}" alt="img"><span> Quotation</span> <span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="quotationList.html">Quotation List</a></li>
                            <li><a href="addquotation.html">Add Quotation</a></li>
                        </ul>
                    </li>

                    <li class="submenu">
                        <a href="javascript:void(0);"><img src="{{asset('assets/img/icons/transfer1.svg')}}" alt="img"><span> Transactions</span> <span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="transferlist.html">Transfer List</a></li>
                            <li><a href="addtransfer.html">Add Transfer </a></li>
                            <li><a href="importtransfer.html">Import Transfer </a></li>
                        </ul>
                    </li>

                    <li class="submenu">
                        <a href="javascript:void(0);"><img src="{{asset('assets/img/icons/return1.svg')}}" alt="img"><span> Retours</span> <span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="salesreturnlist.html">Sales Return List</a></li>
                            <li><a href="createsalesreturn.html">Add Sales Return </a></li>
                            <li><a href="purchasereturnlist.html">Purchase Return List</a></li>
                            <li><a href="createpurchasereturn.html">Add Purchase Return </a></li>
                        </ul>
                    </li>

                    <li class="submenu">
                        <a href="javascript:void(0);"><img src="{{asset('assets/img/icons/users1.svg')}}" alt="img"><span> Clients</span> <span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="customerlist.html">Customer List</a></li>
                            <li><a href="addcustomer.html">Add Customer </a></li>
                            <li><a href="supplierlist.html">Supplier List</a></li>
                            <li><a href="addsupplier.html">Add Supplier </a></li>
                            <li><a href="userlist.html">User List</a></li>
                            <li><a href="adduser.html">Add User</a></li>
                            <li><a href="storelist.html">Store List</a></li>
                            <li><a href="addstore.html">Add Store</a></li>
                        </ul>
                    </li>

                    <li class="submenu">
                        <a href="javascript:void(0);"><img src="{{asset('assets/img/icons/places.svg')}}" alt="img"><span> Places</span> <span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="newcountry.html">New Country</a></li>
                            <li><a href="countrieslist.html">Countries list</a></li>
                            <li><a href="newstate.html">New State </a></li>
                            <li><a href="statelist.html">State list</a></li>
                        </ul>
                    </li>

                   

                    <li>
                        <a href="blankpage.html"><i data-feather="file"></i><span> Blank Page</span> </a>
                    </li>

                    <li class="submenu">
                        <a href="javascript:void(0);"><i data-feather="alert-octagon"></i> <span> Error Pages </span> <span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="error-404.html">404 Error </a></li>
                            <li><a href="error-500.html">500 Error </a></li>
                        </ul>
                    </li>

                    <li class="submenu">
                        <a href="javascript:void(0);"><i data-feather="box"></i> <span>Elements </span> <span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="sweetalerts.html">Sweet Alerts</a></li>
                            <li><a href="tooltip.html">Tooltip</a></li>
                            <li><a href="popover.html">Popover</a></li>
                            <li><a href="ribbon.html">Ribbon</a></li>
                            <li><a href="clipboard.html">Clipboard</a></li>
                            <li><a href="drag-drop.html">Drag & Drop</a></li>
                            <li><a href="rangeslider.html">Range Slider</a></li>
                            <li><a href="rating.html">Rating</a></li>
                            <li><a href="toastr.html">Toastr</a></li>
                            <li><a href="text-editor.html">Text Editor</a></li>
                            <li><a href="counter.html">Counter</a></li>
                            <li><a href="scrollbar.html">Scrollbar</a></li>
                            <li><a href="spinner.html">Spinner</a></li>
                            <li><a href="notification.html">Notification</a></li>
                            <li><a href="lightbox.html">Lightbox</a></li>
                            <li><a href="stickynote.html">Sticky Note</a></li>
                            <li><a href="timeline.html">Timeline</a></li>
                            <li><a href="form-wizard.html">Form Wizard</a></li>
                        </ul>
                    </li>

                    <li class="submenu">
                        <a href="javascript:void(0);"><i data-feather="bar-chart-2"></i> <span> Charts </span> <span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="chart-apex.html">Apex Charts</a></li>
                            <li><a href="chart-js.html">Chart Js</a></li>
                            <li><a href="chart-morris.html">Morris Charts</a></li>
                            <li><a href="chart-flot.html">Flot Charts</a></li>
                            <li><a href="chart-peity.html">Peity Charts</a></li>
                        </ul>
                    </li>

                    <li class="submenu">
                        <a href="javascript:void(0);"><i data-feather="award"></i><span> Icons </span> <span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="icon-fontawesome.html">Fontawesome Icons</a></li>
                            <li><a href="icon-feather.html">Feather Icons</a></li>
                            <li><a href="icon-ionic.html">Ionic Icons</a></li>
                            <li><a href="icon-material.html">Material Icons</a></li>
                            <li><a href="icon-pe7.html">Pe7 Icons</a></li>
                            <li><a href="icon-simpleline.html">Simpleline Icons</a></li>
                            <li><a href="icon-themify.html">Themify Icons</a></li>
                            <li><a href="icon-weather.html">Weather Icons</a></li>
                            <li><a href="icon-typicon.html">Typicon Icons</a></li>
                            <li><a href="icon-flag.html">Flag Icons</a></li>
                        </ul>
                    </li>

                    <li class="submenu">
                        <a href="javascript:void(0);"><i data-feather="columns"></i> <span> Forms </span> <span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="form-basic-inputs.html">Basic Inputs </a></li>
                            <li><a href="form-input-groups.html">Input Groups </a></li>
                            <li><a href="form-horizontal.html">Horizontal Form </a></li>
                            <li><a href="form-vertical.html"> Vertical Form </a></li>
                            <li><a href="form-mask.html">Form Mask </a></li>
                            <li><a href="form-validation.html">Form Validation </a></li>
                            <li><a href="form-select2.html">Form Select2 </a></li>
                            <li><a href="form-fileupload.html">File Upload </a></li>
                        </ul>
                    </li>

                    <li class="submenu">
                        <a href="javascript:void(0);"><i data-feather="layout"></i> <span> Table </span> <span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="tables-basic.html">Basic Tables </a></li>
                            <li><a href="data-tables.html">Data Table </a></li>
                        </ul>
                    </li>

                    <li class="submenu">
                        <a href="javascript:void(0);"><img src="{{asset('assets/img/icons/product.svg')}}" alt="img"><span> Application</span> <span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="chat.html">Chat</a></li>
                            <li><a href="calendar.html">Calendar</a></li>
                            <li><a href="email.html">Email</a></li>
                        </ul>
                    </li>

                    <li class="submenu">
                        <a href="javascript:void(0);"><img src="{{asset('assets/img/icons/time.svg')}}" alt="img"><span> Report</span> <span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="purchaseorderreport.html">Purchase order report</a></li>
                            <li><a href="inventoryreport.html">Inventory Report</a></li>
                            <li><a href="salesreport.html">Sales Report</a></li>
                            <li><a href="invoicereport.html">Invoice Report</a></li>
                            <li><a href="purchasereport.html">Purchase Report</a></li>
                            <li><a href="supplierreport.html">Supplier Report</a></li>
                            <li><a href="customerreport.html">Customer Report</a></li>
                        </ul>
                    </li>

                    <li class="submenu">
                        <a href="javascript:void(0);"><img src="{{asset('assets/img/icons/users1.svg')}}" alt="img"><span> Users</span> <span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="newuser.html">New User </a></li>
                            <li><a href="userlists.html">Users List</a></li>
                        </ul>
                    </li> --}}

                    <li class="submenu">
                        <a href="javascript:void(0);"><img src="{{asset('assets2/img/icons/settings.svg')}}" alt="img"><span> Réglages</span> <span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="generalsettings.html">Generales</a></li>
                            <li><a href="/roles">Roles</a></li>
                            <li><a href="/permissions">Permissions</a></li>
                        </ul>
                    </li>
            </ul>
            
        </div>
    </div>
</div>