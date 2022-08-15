<div class="sidebar sidebar-light sidebar-main sidebar-expand-lg">

    <!-- Sidebar content -->
    <div class="sidebar-content">

        <!-- User menu -->
        <div class="sidebar-section">
            <div class="sidebar-user-material">
                <div class="sidebar-section-body">
                    <div class="d-flex">
                        <div class="flex-1">
                            <button type="button"
                                class="btn btn-outline-light border-transparent btn-icon btn-sm rounded-pill">
                                <i class="icon-wrench"></i>
                            </button>
                        </div>
                        <a href="#" class="flex-1 text-center"><img
                                src="../../../../global_assets/images/placeholders/placeholder.jpg"
                                class="img-fluid rounded-circle shadow-sm" width="80" height="80" alt=""></a>
                        <div class="flex-1 text-right">
                            <button type="button"
                                class="btn btn-outline-light border-transparent btn-icon rounded-pill btn-sm sidebar-control sidebar-main-resize d-none d-lg-inline-flex">
                                <i class="icon-transmission"></i>
                            </button>

                            <button type="button"
                                class="btn btn-outline-light border-transparent btn-icon rounded-pill btn-sm sidebar-mobile-main-toggle d-lg-none">
                                <i class="icon-cross2"></i>
                            </button>
                        </div>
                    </div>

                    <div class="text-center">
                        <h6 class="mb-0 text-white text-shadow-dark mt-3">Dar es salaam Gymkhana Club</h6>
                        <span class="font-size-sm text-white text-shadow-dark"></span>
                    </div>
                </div>

              
            </div>

            
        </div>
        <!-- /user menu -->


        <!-- Main navigation -->
        <div class="sidebar-section">
            <ul class="nav nav-sidebar" data-nav-type="accordion">

                <!-- Main -->
             
                <li class="nav-item">
                    <a href="{{url('home')}}"
                        class="nav-link  {{ (request()->is('home')) ? 'active' : ''  }}">
                        <i class="icon-home"></i>
                        <span>
                            Customer Registration
                        </span>
                    </a>
                </li>


                
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link {{ (request()->is('apps/*')) ? 'active' : ''  }} "><i
                            class="icon-copy"></i> <span>{{__('Apps')}}</span></a>

                    <ul class="nav nav-group-sub" data-submenu-title="{{__('Apps')}}">


                        
                        <li class="nav-item"><a
                                class="nav-link {{ (request()->is('apps/calendar*')) ? 'active' : ''  }} "
                                href="{{url('apps/calendar/')}}">{{__('Calendar')}}</a></li>
                        
                        
                        <li class="nav-item"><a
                                class="nav-link {{ (request()->is('apps/chat*')) ? 'active' : ''  }}"
                                href="{{url('apps/chat')}}">{{__('Chat')}}</a></li>
                        
                       
                        <li class="nav-item"><a
                                class="nav-link {{ (request()->is('apps/contacts*')) ? 'active' : ''  }}"
                                href="{{url('apps/contacts')}}">{{__('Contacts')}}</a>
                        </li>

                       <li class="nav-item"> <a href="#" class="nav-link {{ (request()->is('apps/companies/*')) ? 'active' : ''  }} "><i
                            class="icon-copy"></i> <span>{{__('Companies')}}</span></a>

                                 <ul class="nav nav-group-sub" data-submenu-title="{{__('Companies')}}">

                                 <li class="nav-item"><a
                                class="nav-link {{ (request()->is('apps//companies/list*')) ? 'active' : ''  }}"
                                href="{{url('apps//companies/list')}}">{{__('List')}}</a>
                                
                                </li>

                                 <li class="nav-item"><a
                                class="nav-link {{ (request()->is('apps/companies/company-details*')) ? 'active' : ''  }}"
                                href="{{url('apps/companies/company-details')}}">{{__('Company Details')}}</a>
                                
                                </li>

                                 </ul>
                        </li>

                        <li class="nav-item nav-item-submenu">


                        <a href="#" class="nav-link {{ (request()->is('apps/ecommerce/*')) ? 'active' : ''  }} "><i
                            class="icon-copy"></i> <span>{{__('Ecommerce')}}</span></a>

                                 <ul class="nav nav-group-sub" data-submenu-title="{{__('Ecommerce')}}">

                                 <li class="nav-item"><a
                                class="nav-link {{ (request()->is('apps//ecommerce/dashboard*')) ? 'active' : ''  }}"
                                href="{{url('apps//companies/dashboard')}}">{{__('Dashboard')}}</a>
                                
                                </li>

                                 <li class="nav-item"><a
                                class="nav-link {{ (request()->is('apps/ecommerce/products*')) ? 'active' : ''  }}"
                                href="{{url('apps/companies/products')}}">{{__('Company Details')}}</a>
                                
                                </li>

                                <li class="nav-item"><a
                                class="nav-link {{ (request()->is('apps//ecommerce/product-details*')) ? 'active' : ''  }}"
                                href="{{url('apps//companies/product-details')}}">{{__('Product Details')}}</a>
                                
                                </li>

                                 <li class="nav-item"><a
                                class="nav-link {{ (request()->is('apps/ecommerce/add-product*')) ? 'active' : ''  }}"
                                href="{{url('apps/companies/add-product')}}">{{__('Add Product')}}</a>
                                
                                </li>

                                <li class="nav-item"><a
                                class="nav-link {{ (request()->is('apps//ecommerce/orders*')) ? 'active' : ''  }}"
                                href="{{url('apps//companies/orders')}}">{{__('Orders')}}</a>
                                
                                </li>

                                 <li class="nav-item"><a
                                class="nav-link {{ (request()->is('apps/ecommerce/order-details*')) ? 'active' : ''  }}"
                                href="{{url('apps/companies/order-details')}}">{{__('Order Details')}}</a>
                                
                                </li>

                                <li class="nav-item"><a
                                class="nav-link {{ (request()->is('apps//ecommerce/customers*')) ? 'active' : ''  }}"
                                href="{{url('apps//companies/customers')}}">{{__('Customers')}}</a>
                                
                                </li>

                                 <li class="nav-item"><a
                                class="nav-link {{ (request()->is('apps/ecommerce/cart*')) ? 'active' : ''  }}"
                                href="{{url('apps/companies/cart')}}">{{__('Cart')}}</a>
                                
                                </li>

                                <li class="nav-item"><a
                                class="nav-link {{ (request()->is('apps//ecommerce/sellers*')) ? 'active' : ''  }}"
                                href="{{url('apps//companies/sellers')}}">{{__('Sellers')}}</a>
                                
                                </li>

                                 <li class="nav-item"><a
                                class="nav-link {{ (request()->is('apps/ecommerce/checkout*')) ? 'active' : ''  }}"
                                href="{{url('apps/companies/checkout')}}">{{__('Checkout')}}</a>
                                
                                </li>

                                 </ul>
                        </li>
                        

                    </ul>
                </li>
                


                   

                <!-- /page kits -->


       @can('view-dashoard')
        <li class="nav-item nav-item-submenu">
            <a href="#app" class="nav-link {{ (request()->is('apps/*')) ? 'active' : ''  }} "><i
                            class="icon-copy"></i> <span>{{__('Apps')}}</span></a>

            <ul class="nav nav-group-sub" data-submenu-title="{{__('Apps')}}">

                <li class="nav-item">
                    <a class="nav-link {{ (request()->is('apps/calendar')) ? 'active' : ''  }}" href="{{ url('/apps/calendar') }}">
                        {{__('Calendar')}} </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ (request()->is('apps/chat')) ? 'active' : ''  }}" href="{{ url('/apps/chat') }}"> {{__('Chat')}}
                    </a>
                </li>
                <li class="nav-item nav-item-submenu">
                    <a href="#pages-companies" class="nav-link {{ (request()->is('apps/companies/*')) ? 'active' : ''  }}"
                        data-toggle="collapse" 
                        class="dropdown-toggle"> {{__('Companies')}} <i
                            class="las la-angle-right sidemenu-right-icon"></i> </a>
                    <ul class="nav nav-group-sub"
                        id="pages-companies" data-parent="#pages">
                        <li class="nav-item">  
                            <a class="nav-link {{ (request()->is('apps/companies/list')) ? 'active' : ''  }}"
                                href="{{ url('/apps/companies/lists') }}"> {{__('List')}} </a>
                        </li>
                        <li class="nav-item">  
                            <a class="nav-link {{ (request()->is('apps/companies/company-details')) ? 'active' : ''  }}"
                                href="{{ url('/apps/companies/company-details') }}"> {{__('Company Details')}} </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item ">
                    <a class="nav-link {{ (request()->is('apps/contacts')) ? 'active' : ''  }}" href="{{ url('/apps/contacts') }}">
                        {{__('Contacts')}} </a>
                </li>
                <li class="nav-item nav-item-submenu">
                    <a href="#pages-ecommerce" class="nav-link {{ (request()->is('apps/ecommerce/*')) ? 'active' : ''  }}"
                        data-toggle="collapse" 
                        class="dropdown-toggle"> {{__('Ecommerce')}} <i
                            class="las la-angle-right sidemenu-right-icon"></i> </a>
                    <ul class="nav nav-group-sub"
                        id="pages-ecommerce" data-parent="#pages">
                        <li class="nav-item">  
                            <a class="nav-link {{ (request()->is('apps/ecommerce/dashboard')) ? 'active' : ''  }}"
                                href="{{ url('/apps/ecommerce/dashboard') }}"> {{__('Dashboard')}} </a>
                        </li>
                        <li class="nav-item">  
                            <a class="nav-link {{ (request()->is('apps/ecommerce/products')) ? 'active' : ''  }}"
                                href="{{ url('/apps/ecommerce/products') }}"> {{__('Products')}} </a>
                        </li>
                        <li class="nav-item">  
                            <a class="nav-link {{ (request()->is('apps/ecommerce/product-details')) ? 'active' : ''  }}"
                                href="{{ url('/apps/ecommerce/product-details') }}"> {{__('Product Details')}} </a>
                        </li>
                        <li class="nav-item">  
                            <a class="nav-link {{ (request()->is('apps/ecommerce/add-product')) ? 'active' : ''  }}"
                                href="{{ url('/apps/ecommerce/add-product') }}"> {{__('Add Product')}}</a>
                        </li>
                        <li class="nav-item">  
                            <a class="nav-link {{ (request()->is('apps/ecommerce/orders')) ? 'active' : ''  }}"
                                href="{{ url('/apps/ecommerce/orders') }}"> {{__('Orders')}} </a>
                        </li>
                        <li class="nav-item">  
                            <a class="nav-link {{ (request()->is('apps/ecommerce/order-details')) ? 'active' : ''  }}"
                                href="{{ url('/apps/ecommerce/order-details') }}"> {{__('Order Details')}} </a>
                        </li>
                        <li class="nav-item">  
                            <a class="nav-link {{ (request()->is('apps/ecommerce/customers')) ? 'active' : ''  }}"
                                href="{{ url('/apps/ecommerce/customers') }}"> {{__('Customers')}} </a>
                        </li>
                        <li class="nav-item">  
                            <a class="nav-link {{ (request()->is('apps/ecommerce/sellers')) ? 'active' : ''  }}"
                                href="{{ url('/apps/ecommerce/sellers') }}"> {{__('Sellers')}} </a>
                        </li>
                        <li class="nav-item">  
                            <a class="nav-link {{ (request()->is('apps/ecommerce/cart')) ? 'active' : ''  }}"
                                href="{{ url('/apps/ecommerce/cart') }}"> {{__('Cart')}} </a>
                        </li>
                        <li class="nav-item">  
                            <a class="nav-link {{ (request()->is('apps/ecommerce/checkout')) ? 'active' : ''  }}"
                                href="{{ url('/apps/ecommerce/checkout') }}"> {{__('Checkout')}} </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item nav-item-submenu">
                    <a href="#pages-email" class="nav-link {{ (request()->is('apps/email/*')) ? 'active' : ''  }}" data-toggle="collapse"
                         class="dropdown-toggle"> {{__('Email')}}
                        <i class="las la-angle-right sidemenu-right-icon"></i> </a>
                    <ul class="nav nav-group-sub " id="pages-email"
                        data-parent="#pages">
                        <li class="nav-item">  
                            <a class="nav-link {{ (request()->is('apps/email/inbox')) ? 'active' : ''  }}"
                                href="{{ url('/apps/email/inbox') }}"> {{__('Inbox')}} </a>
                        </li>
                        <li class="nav-item">  
                            <a class="nav-link {{ (request()->is('apps/email/details')) ? 'active' : ''  }}"
                                href="{{ url('/apps/email/details') }}"> {{__('Email Details')}} </a>
                        </li>
                        <li class="nav-item">  
                            <a class="nav-link {{ (request()->is('apps/email/compose')) ? 'active' : ''  }}"
                                href="{{ url('/apps/email/compose') }}"> {{__('Compose Email')}} </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item ">
                    <a class="nav-link {{ (request()->is('apps/file-manager')) ? 'active' : ''  }}"
                        href="{{ url('/apps/file-manager') }}"> {{__('File Manager')}} </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ (request()->is('apps/invoice-list')) ? 'active' : ''  }}"
                        href="{{ url('/apps/invoice-list') }}"> {{__('Invoice List')}} </a>
                </li>
                <li class="nav-item nav-item-submenu ">
                    <a href="#pages-notes" class="nav-link {{ (request()->is('apps/notes/*')) ? 'active' : ''  }}" data-toggle="collapse"
                        class="dropdown-toggle">
                        {{ __('Notes')}} <i class="las la-angle-right sidemenu-right-icon"></i> </a>
                    <ul class="nav nav-group-sub " id="pages-notes"
                        data-parent="#pages">
                        <li class="nav-item">  
                            <a class="nav-link {{ (request()->is('apps/notes/list')) ? 'active' : ''  }}"
                                href="{{ url('/apps/notes/list') }}"> {{__('List')}} </a>
                        </li>
                        <li class="nav-item">  
                            <a class="nav-link {{ (request()->is('apps/notes/details')) ? 'active' : ''  }}"
                                href="{{ url('/apps/notes/details') }}"> {{__('Notes Details')}} </a>
                        </li>
                        <li class="nav-item">  
                            <a class="nav-link {{ (request()->is('apps/notes/create')) ? 'active' : ''  }}"
                                href="{{ url('/apps/notes/create') }}"> {{__('Create Note')}} </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item ">
                    <a class="nav-link {{ (request()->is('apps/social')) ? 'active' : ''  }}" href="{{ url('/apps/social') }}">
                        {{__('Social')}} </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ (request()->is('apps/task-list')) ? 'active' : ''  }}" href="{{ url('/apps/task-list') }}">
                        {{__('Task List')}} </a>
                </li>
                <li class="nav-item ">
                    <a href="#pages-tickets" class="nav-link {{ (request()->is('apps/tickets/*')) ? 'active' : ''  }}"
                        data-toggle="collapse" 
                        class="dropdown-toggle"> {{__('Tickets')}} <i
                            class="las la-angle-right sidemenu-right-icon"></i> </a>
                    <ul class="nav nav-group-sub "
                        id="pages-tickets" data-parent="#pages">
                        <li class="nav-item">  
                            <a class="nav-link {{ (request()->is('apps/tickets/list')) ? 'active' : ''  }}"
                                href="{{ url('/apps/tickets/list') }}"> {{__('Ticket List')}} </a>
                        </li>
                        <li class="nav-item">  
                            <a class="nav-link {{ (request()->is('apps/tickets/details')) ? 'active' : ''  }}"
                                href="{{ url('/apps/tickets/details') }}"> {{__('Ticket Details')}} </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li class="menu-title">{{__('Pages')}}</li>
        @endcan

 
        @can('view-visitor-menu')
        <li class="nav-item nav-item-submenu">
            <a href="#cards" class="nav-link {{ (request()->is('transaction/*')) ? 'active' : ''  }}" data-toggle="collapse"
                class="dropdown-toggle">
                <div class="">
                    <i class="lab la-wpforms"></i><span>manage</span>
                </div>

            </a>
            <ul class="nav nav-group-sub" id="cards"
                data-parent="#accordionExample">
           
                <li class="nav-item ">
                    <a class="nav-link {{ (request()->is('card_deposit')) ? 'active' : ''  }}" href="{{ url('card_deposit') }}"
                        aria-expanded="false" class="dropdown-toggle">

                        <span> {{__('Deposit')}}</span>

                    </a>
                </li>
            
            </ul>
        </li>
@endcan
@can('view-member-menu')
        <li class="nav-item nav-item-submenu">
            <a href="#cards" class="nav-link {{ (request()->is('transaction/*')) ? 'active' : ''  }}" data-toggle="collapse"
                 class="dropdown-toggle">
                <div class="">
                    <i class="lab la-wpforms"></i><span>manage</span>
                </div>
            </a>
            <ul class="nav nav-group-sub" id="cards"
                data-parent="#accordionExample">

                <li class="nav-item ">
                    <a class="nav-link {{ (request()->is('member_card_deposit')) ? 'active' : ''  }}" href="{{ url('member_card_deposit') }}"
                        aria-expanded ="false" class="dropdown-toggle">

                        <span> {{__('Deposit')}} </span>

                    </a>
                </li>
            
            </ul>
        </li>
@endcan
        
    
    </ul>

            </ul>
        </div>
        <!-- /main navigation -->

    </div>
    <!-- /sidebar content -->

</div>