<?php

//use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\MailerController;

Route::get('/', function () {
    //return view('dashboard.dashboard1');
    return view('auth.login');
});



Route::group(['prefix' => 'visitors'], function(){
    Route::resource('dashboard','Visitors\HomeController');
   
    
    });

    Route::group(['prefix' => 'members'], function(){
        Route::resource('dashboard','Members\HomeController');
        Route::resource('register', 'Members\MembersController');
	Route::post('register2', 'Members\CompanyController@store')->name('register2.store');
        Route::any('member_type', 'Members\MembersController@reg_type')->name('member_type');
        Route::any('member_class', 'Members\MembersController@member_class')->name('member_class');
	Route::any('member_cooperate', 'Members\CompanyController@member_cooperate')->name('member_cooperate');
        Route::any('non_cooperate', 'Members\MembersController@non_cooperate')->name('non_cooperate');
        Route::get('findEmail', 'Members\MembersController@findEmail'); 
        Route::resource('manage_charge', 'Members\ChargesController');
        
        });

        Route::group(['prefix' => 'staffs'], function(){
            Route::resource('dashboard','DashboardController');
            
            
            });

Route::group(['prefix' => 'dashboard'], function(){
    Route::get('dashboard1', function () { return view('dashboard.dashboard1'); });
    Route::get('dashboard2', function () { return view('dashboard.dashboard2'); });
    Route::get('dashboard3', function () { return view('dashboard.dashboard3'); });
    Route::get('dashboard4', function () { return view('dashboard.dashboard4'); });
    Route::get('dashboard5', function () { return view('dashboard.dashboard5'); });
    Route::get('dashboard-social', function () { return view('dashboard.dashboard-social'); });
});

Route::group(['prefix' => 'apps'], function(){
    Route::get('calendar', function () { return view('apps.calendar'); });
    Route::get('chat', function () { return view('apps.chat'); });
    Route::group(['prefix' => 'companies'], function (){
        Route::get('lists', function () { return view('apps.companies.lists'); });
        Route::get('company-details', function () { return view('apps.companies.company-details'); });
    });
    Route::get('contacts', function () { return view('apps.contacts'); });
    Route::group(['prefix' => 'ecommerce'], function (){
        Route::get('dashboard', function () { return view('apps.ecommerce.dashboard'); });
        Route::get('products', function () { return view('apps.ecommerce.products'); });
        Route::get('product-details', function () { return view('apps.ecommerce.product-details'); });
        Route::get('add-product', function () { return view('apps.ecommerce.add-product'); });
        Route::get('orders', function () { return view('apps.ecommerce.orders'); });
        Route::get('order-details', function () { return view('apps.ecommerce.order-details'); });
        Route::get('customers', function () { return view('apps.ecommerce.customers'); });
        Route::get('sellers', function () { return view('apps.ecommerce.sellers'); });
        Route::get('cart', function () { return view('apps.ecommerce.cart'); });
        Route::get('checkout', function () { return view('apps.ecommerce.checkout'); });
    });
    Route::group(['prefix' => 'email'], function (){
        Route::get('inbox', function () { return view('apps.email.inbox'); });
        Route::get('details', function () { return view('apps.email.details'); });
        Route::get('compose', function () { return view('apps.email.compose'); });
    });
    Route::get('file-manager', function () { return view('apps.file-manager'); });
    Route::get('invoice-list', function () { return view('apps.invoice-list'); });
    Route::group(['prefix' => 'notes'], function (){
        Route::get('list', function () { return view('apps.notes.list'); });
        Route::get('details', function () { return view('apps.notes.details'); });
        Route::get('create', function () { return view('apps.notes.create'); });
    });
    Route::get('social', function () { return view('apps.social'); });
    Route::get('task-list', function () { return view('apps.task-list'); });
    Route::group(['prefix' => 'tickets'], function (){
        Route::get('list', function () { return view('apps.tickets.list'); });
        Route::get('details', function () { return view('apps.tickets.details'); });
    });
});

Route::group(['prefix' => 'authentications'], function(){
    Route::group(['prefix' => 'style1'], function (){
        Route::get('login', function () { return view('authentications.style1.login'); });
        Route::get('signup', function () { return view('authentications.style1.signup'); });
        Route::get('locked', function () { return view('authentications.style1.locked'); });
        Route::get('forgot-password', function () { return view('authentications.style1.forgot-password'); });
        Route::get('confirm-email', function () { return view('authentications.style1.confirm-email'); });
    });
    Route::group(['prefix' => 'style2'], function (){
        Route::get('login', function () { return view('authentications.style2.login'); });
        Route::get('signup', function () { return view('authentications.style2.signup'); });
        Route::get('locked', function () { return view('authentications.style2.locked'); });
        Route::get('forgot-password', function () { return view('authentications.style2.forgot-password'); });
        Route::get('confirm-email', function () { return view('authentications.style2.confirm-email'); });
    });
    Route::group(['prefix' => 'style3'], function (){
        Route::get('login', function () { return view('authentications.style3.login'); });
        Route::get('signup', function () { return view('authentications.style3.signup'); });
        Route::get('locked', function () { return view('authentications.style3.locked'); });
        Route::get('forgot-password', function () { return view('authentications.style3.forgot-password'); });
        Route::get('confirm-email', function () { return view('authentications.style3.confirm-email'); });
    });
});

Route::group(['prefix' => 'pages'], function(){
    Route::get('coming-soon', function () { return view('pages.coming-soon'); });
    Route::get('coming-soon2', function () { return view('pages.coming-soon2'); });
    Route::get('contact-us', function () { return view('pages.contact-us'); });
    Route::get('contact-us2', function () { return view('pages.contact-us2'); });
    Route::group(['prefix' => 'error'], function (){
        Route::get('error404', function () { return view('pages.error.error404'); });
        Route::get('error500', function () { return view('pages.error.error500'); });
        Route::get('error503', function () { return view('pages.error.error503'); });
        Route::get('maintenance', function () { return view('pages.error.maintenance'); });
        Route::get('error404-two', function () { return view('pages.error.error404-two'); });
        Route::get('error500-two', function () { return view('pages.error.error500-two'); });
        Route::get('error503-two', function () { return view('pages.error.error503-two'); });
        Route::get('maintenance-two', function () { return view('pages.error.maintenance-two'); });
    });
    Route::get('faq', function () { return view('pages.faq'); });
    Route::get('faq2', function () { return view('pages.faq2'); });
    Route::get('faq3', function () { return view('pages.faq3'); });
    Route::get('helpdesk', function () { return view('pages.helpdesk'); });
    Route::get('notifications', function () { return view('pages.notifications'); });
    Route::get('pricing', function () { return view('pages.pricing'); });
    Route::get('pricing2', function () { return view('pages.pricing2'); });
    Route::get('privacy-policy', function () { return view('pages.privacy-policy'); });
    Route::get('profile', function () { return view('pages.profile'); });
    Route::get('profile-edit', function () { return view('pages.profile-edit'); });
    Route::get('search-result', function () { return view('pages.search-result'); });
    Route::get('search-result2', function () { return view('pages.search-result2'); });
    Route::get('sitemap', function () { return view('pages.sitemap'); });
    Route::get('timeline', function () { return view('pages.timeline'); });
});

Route::group(['prefix' => 'basic-ui'], function(){
    Route::get('accordions', function () { return view('basic-ui.accordions'); });
    Route::get('animation', function () { return view('basic-ui.animation'); });
    Route::get('cards', function () { return view('basic-ui.cards'); });
    Route::get('carousel', function () { return view('basic-ui.carousel'); });
    Route::get('countdown', function () { return view('basic-ui.countdown'); });
    Route::get('counter', function () { return view('basic-ui.counter'); });
    Route::get('dragitems', function () { return view('basic-ui.dragitems'); });
    Route::get('lightbox', function () { return view('basic-ui.lightbox'); });
    Route::get('lightbox-sideopen', function () { return view('basic-ui.lightbox-sideopen'); });
    Route::get('list-groups', function () { return view('basic-ui.list-groups'); });
    Route::get('media-object', function () { return view('basic-ui.media-object'); });
    Route::get('modals', function () { return view('basic-ui.modals'); });
    Route::get('notifications', function () { return view('basic-ui.notifications'); });
    Route::get('scrollspy', function () { return view('basic-ui.scrollspy'); });
    Route::get('session-timeout', function () { return view('basic-ui.session-timeout'); });
    Route::get('sweet-alerts', function () { return view('basic-ui.sweet-alerts'); });
    Route::get('tabs', function () { return view('basic-ui.tabs'); });
    Route::get('tour-tutorial', function () { return view('basic-ui.tour-tutorial'); });
});

Route::group(['prefix' => 'ui-elements'], function(){
    Route::get('alerts', function () { return view('ui-elements.alerts'); });
    Route::get('avatar', function () { return view('ui-elements.avatar'); });
    Route::get('badges', function () { return view('ui-elements.badges'); });
    Route::get('breadcrumbs', function () { return view('ui-elements.breadcrumbs'); });
    Route::get('buttons', function () { return view('ui-elements.buttons'); });
    Route::get('colors', function () { return view('ui-elements.colors'); });
    Route::get('dropdown', function () { return view('ui-elements.dropdown'); });
    Route::get('grid', function () { return view('ui-elements.grid'); });
    Route::get('jumbotron', function () { return view('ui-elements.jumbotron'); });
    Route::get('list-group', function () { return view('ui-elements.list-group'); });
    Route::get('loading-spinners', function () { return view('ui-elements.loading-spinners'); });
    Route::get('paging', function () { return view('ui-elements.paging'); });
    Route::get('popovers', function () { return view('ui-elements.popovers'); });
    Route::get('progress-bar', function () { return view('ui-elements.progress-bar'); });
    Route::get('ribbons', function () { return view('ui-elements.ribbons'); });
    Route::get('tooltips', function () { return view('ui-elements.tooltips'); });
    Route::get('typography', function () { return view('ui-elements.typography'); });
    Route::get('video', function () { return view('ui-elements.video'); });
});

Route::get('widgets', function () {
    return view('widgets');
});

Route::get('tables', function () {
    return view('tables');
});

Route::get('data-tables', function () {
    return view('data-tables');
});

Route::group(['prefix' => 'forms'], function(){
    Route::group(['prefix' => 'controls'], function (){
        Route::get('base-inputs', function () { return view('forms.controls.base-inputs'); });
        Route::get('input-groups', function () { return view('forms.controls.input-groups'); });
        Route::get('checkbox', function () { return view('forms.controls.checkbox'); });
        Route::get('radio', function () { return view('forms.controls.radio'); });
        Route::get('switch', function () { return view('forms.controls.switch'); });
    });
    Route::group(['prefix' => 'widgets'], function (){
        Route::get('picker', function () { return view('forms.widgets.picker'); });
        Route::get('tagify', function () { return view('forms.widgets.tagify'); });
        Route::get('touch-spin', function () { return view('forms.widgets.touch-spin'); });
        Route::get('maxlength', function () { return view('forms.widgets.maxlength'); });
        Route::get('switch', function () { return view('forms.widgets.switch'); });
        Route::get('select-splitter', function () { return view('forms.widgets.select-splitter'); });
        Route::get('bootstrap-select', function () { return view('forms.widgets.bootstrap-select'); });
        Route::get('select2', function () { return view('forms.widgets.select2'); });
        Route::get('input-masks', function () { return view('forms.widgets.input-masks'); });
        Route::get('autogrow', function () { return view('forms.widgets.autogrow'); });
        Route::get('range-slider', function () { return view('forms.widgets.range-slider'); });
        Route::get('clipboard', function () { return view('forms.widgets.clipboard'); });
        Route::get('typeahead', function () { return view('forms.widgets.typeahead'); });
        Route::get('captcha', function () { return view('forms.widgets.captcha'); });
    });
    Route::get('validation', function () { return view('forms.validation'); });
    Route::get('layouts', function () { return view('forms.layouts'); });
    Route::get('text-editor', function () { return view('forms.text-editor'); });
    Route::get('file-upload', function () { return view('forms.file-upload'); });
    Route::get('multiple-step', function () { return view('forms.multiple-step'); });
});

Route::group(['prefix' => 'maps'], function(){
    Route::get('leaflet-map', function () { return view('maps.leaflet-map'); });
    Route::get('vector-map', function () { return view('maps.vector-map'); });
});

Route::group(['prefix' => 'charts'], function(){
    Route::get('apex-chart', function () { return view('charts.apex-chart'); });
    Route::get('chartlist-chart', function () { return view('charts.chartlist-chart'); });
    Route::get('chartjs', function () { return view('charts.chartjs'); });
    Route::get('morris-chart', function () { return view('charts.morris-chart'); });
});

Route::group(['prefix' => 'starter'], function(){
    Route::get('blank-page', function () { return view('starter.blank-page'); });
    Route::get('breadcrumbs', function () { return view('starter.breadcrumbs'); });
});

// For Clear cache
Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['prefix' => 'authorization'], function(){
    Route::resource('permissions', 'authorization\PermissionController');
    Route::resource('roles', 'authorization\RoleController');
    Route::resource('users', 'authorization\UsersController');
    Route::resource('departments', 'DepartmentController');
Route::resource('designations', 'DesignationController');
Route::get('findDepartment', 'authorization\UsersController@findDepartment');  
});

Route::group(['prefix' => 'setting', 'as' => 'setting.'], function () {

    Route::get('/', 'Setting\SettingController@index')->name('index');
    Route::post('/', 'Setting\SettingController@siteSettingUpdate')->name('site-update');
    Route::get('sms', 'Setting\SettingController@smsSetting')->name('sms');
    Route::post('sms', 'Setting\SettingController@smsSettingUpdate')->name('sms-update');
    Route::get('email', 'Setting\SettingController@emailSetting')->name('email');
    Route::post('email', 'Setting\SettingController@emailSettingUpdate')->name('email-update');
    Route::get('notification', 'Setting\SettingController@notificationSetting')->name('notification');
    Route::post('notification', 'Setting\SettingController@notificationSettingUpdate')->name('notification-update');
    Route::get('emailtemplate', 'Setting\SettingController@emailTemplateSetting')->name('email-template');
    Route::post('emailtemplate', 'Setting\SettingController@mailTemplateSettingUpdate')->name('email-template-update');
    Route::get('homepage', 'Setting\SettingController@homepageSetting')->name('homepage');
    Route::post('homepage', 'Setting\SettingController@homepageSettingUpdate')->name('homepage-update');
});

Route::group(['prefix' => 'pesapal', 'as' => 'pesapal.'], function () {

    Route::any('makepayment', 'PesapalController@store')->name('makepayment');
    Route::any('customer_makepayment', 'PesapalController@customer_makepayment')->name('customer_makepayment');
    
});



Route::get('visitor/assignCard/{id}', 'Visitors\VisitorController@assignCard')->name('visitors.assignCard');
Route::get('visitor/check-out/{visitingDetail}', 'Visitors\VisitorController@checkout')->name('visitors.checkout');
Route::get('visitor/change-status/{id}/{status}',  'Visitors\VisitorController@changeStatus')->name('visitor.change-status');
Route::group(['prefix' => 'visitors', 'as' => 'visitors.'], function () {

        //visitors
        Route::resource('/', 'Visitors\VisitorController');
       
        Route::post('visitor/search', 'Visitors\VisitorController@search')->name('visitor.search');
        Route::get('visitor/check-out/{visitingDetail}', 'Visitors\VisitorController@checkout')->name('visitors.checkout');
        Route::get('visitor/change-status/{id}/{status}',  'Visitors\VisitorController@changeStatus')->name('visitor.change-status');
        Route::get('get-visitors', 'Visitors\VisitorController@getVisitor')->name('get-visitors');
    
        //report
        Route::get('admin-visitor-report', 'VisitorReportController@index')->name('admin-visitor-report.index');
        Route::post('admin-visitor-report', 'VisitorReportController@index')->name('admin-visitor-report.post');
    
});

//route for payroll
Route::group(['prefix' => 'payroll'], function () {

    Route::resource('salary_template', 'Payroll\SalaryTemplateController');
    Route::any('manage_salary','Payroll\ManageSalaryController@getDetails');
Route::get('addTemplate', 'Payroll\ManageSalaryController@addTemplate');
  Route::get('manage_salary_edit/{id}','Payroll\ManageSalaryController@edit')->name('employee.edit');;;;
  Route::delete('manage_salary_delete/{id}','Payroll\ManageSalaryController@destroy')->name('employee.destroy');;;;
    Route::get('employee_salary_list','Payroll\ManageSalaryController@salary_list')->name('employee.salary');;;
    Route::resource('make_payment', 'Payroll\MakePaymentsController');   
  Route::get('make_payment/{user_id}/{departments_id}/{payment_month}', 'Payroll\MakePaymentsController@getPayment')->name('payment'); 
  Route::post('save_payment','Payroll\MakePaymentsController@save_payment')->name('save_payment');;;;
  Route::get('make_payment/{departments_id}/{payment_month}', 'Payroll\MakePaymentsController@viewPayment')->name('view.payment'); 
    Route::resource('advance_salary', 'Payroll\AdvanceController'); 
   Route::get('findAmount', 'Payroll\AdvanceController@findAmount'); 
      Route::get('findMonth', 'Payroll\AdvanceController@findMonth');   
  Route::get('advance_approve/{id}', 'Payroll\AdvanceController@approve')->name('advance.approve'); 
Route::get('advance_reject/{id}', 'Payroll\AdvanceController@reject')->name('advance.reject'); 
Route::resource('employee_loan', 'Payroll\EmployeeLoanController'); 
 Route::get('findLoan', 'Payroll\EmployeeLoanController@findLoan');  
  Route::get('employee_loan_approve/{id}', 'Payroll\EmployeeLoanController@approve')->name('employee_loan.approve'); 
Route::get('employee_loan_reject/{id}', 'Payroll\EmployeeLoanController@reject')->name('employee_loan.reject'); 
   Route::resource('overtime', 'Payroll\OvertimeController'); 
  Route::get('overtime_approve/{id}', 'Payroll\OvertimeController@approve')->name('overtime.approve'); 
Route::get('overtime_reject/{id}', 'Payroll\OvertimeController@reject')->name('overtime.reject'); 
   Route::get('findOvertime', 'Payroll\OvertimeController@findAmount'); 
 Route::any('nssf', 'Payroll\GetPaymentController@nssf'); 
 Route::any('tax', 'Payroll\GetPaymentController@tax'); 
 Route::any('nhif', 'Payroll\GetPaymentController@nhif'); 
 Route::any('wcf', 'Payroll\GetPaymentController@wcf'); 
Route::any('payroll_summary', 'Payroll\GetPaymentController@payroll_summary'); 
 Route::any('generate_payslip', 'Payroll\GetPaymentController@generate_payslip'); 
 Route::any('received_payslip/{id}', 'Payroll\GetPaymentController@received_payslip')->name('payslip.generate'); 
Route::get('payslip_pdfview',array('as'=>'payslip_pdfview','uses'=>'Payroll\GetPaymentController@payslip_pdfview'));

Route::post('save_salary_details',array('as'=>'save_salary_details','uses'=>'Payroll\ManageSalaryController@save_salary_details'));
    Route::get('employee_salary_list',array('as'=>'employee_salary_list','uses'=>'Payroll\ManageSalaryController@employee_salary_list'));

   //Route::post('make_payment/store{user_id}{departments_id}{payment_month}', 'Payroll\MakePaymentsController@store')->name('make_payment.store'); 
    
});

//leave
Route::resource('leave', 'Leave\LeaveController');
Route::post('addCategory', 'Leave\LeaveController@category');
Route::get('leave_approve/{id}', 'Leave\LeaveController@approve')->name('leave.approve');
Route::get('leave_reject/{id}', 'Leave\LeaveController@reject')->name('leave.reject');

//training
Route::resource('training', 'Training\TrainingController');
Route::get('training_start/{id}', 'Training\TrainingController@start')->name('training.start');
Route::get('training_approve/{id}', 'Training\TrainingController@approve')->name('training.approve');
Route::get('training_reject/{id}', 'Training\TrainingController@reject')->name('training.reject');

//route for reports
Route::group(['prefix' => 'accounting'], function () {

//GL SETUP
    Route::resource('class_account', 'accounting\ClassAccountController');
    Route::resource('group_account', 'accounting\GroupAccountController');
    Route::resource('account_codes', 'accounting\AccountCodesController');
    Route::resource('system', 'accounting\SystemController');
    Route::resource('chart_of_account', 'accounting\ChartOfAccountController');
    Route::resource('expenses', 'accounting\ExpensesController');
    Route::get('expenses_approve/{id}', 'accounting\ExpensesController@approve')->name('expenses.approve');
    //Route::resource('deposit', 'accounting\DepositController');
    Route::get('deposit_approve/{id}', 'accounting\DepositController@approve')->name('deposit.approve');

    //route for reports
    //Route::any('trial_balance', 'accounting\AccountingController@trial_balance');
    
    Route::any('ledger', 'accounting\AccountingController@ledger');
    Route::any('journal', 'accounting\AccountingController@journal');
    Route::get('manual_entry', 'accounting\AccountingController@create_manual_entry');
    Route::post('manual_entry/store', 'accounting\AccountingController@store_manual_entry');
    Route::any('bank_statement', 'accounting\AccountingController@bank_statement');
    Route::any('bank_reconciliation', 'accounting\AccountingController@bank_reconciliation');
    Route::any('reconciliation_report', 'accounting\AccountingController@reconciliation_report')->name('reconciliation.report');
    Route::post('save_reconcile', 'accounting\AccountingController@save_reconcile')->name('reconcile.save');
});

//route for Card Management
//Route::group(['prefix' => 'cards.'], function () {
       //GL SETUP
        Route::resource('manage_cards', 'Cards\ManageCardsController');
        Route::resource('card_deposit', 'Cards\DepositController');
        Route::any('mandatory_preview', 'Members\CooperateMemberController@mandatory_preview')->name('mandatory.preview');
        Route::any('file_preview', 'Members\MemberPaymentsController@file_preview')->name('file.preview');
        Route::any('image_update', 'Members\MembersController@image_update_model')->name('image.update');
        Route::any('image_save/{id}', 'Members\MembersController@image_update')->name('image.save');
        Route::resource('member_card_deposit', 'Cards\MemberDepositController'); 
        Route::resource('member_card_deposit', 'Cards\MemberDepositController');
        Route::resource('manage_member', 'Members\ManageMemberController');
        Route::any('member_list', 'Members\ManageMemberController@member_list')->name('member_list');
    	Route::resource('manage_cooperate', 'Members\CooperateMemberController');
        Route::resource('member_payments', 'Members\MemberPaymentsController');
        Route::get('cooperate_payments','Members\MemberPaymentsController@index1')->name('member_payments.index1');
        Route::get('cooperate_payments/{id}/edit1','Members\MemberPaymentsController@edit1')->name('member_payments.edit1');
        Route::resource('card_printing', 'Members\CardPrintingController');
        Route::any('print_front/{id}', 'Members\CardPrintingController@print_front')->name('print.front');
        Route::any('print_back/{id}', 'Members\CardPrintingController@print_back')->name('print.back');
        Route::any('print', 'Members\CardPrintingController@print');

        Route::post('import','Members\ImportMemberController@import')->name('import');
        Route::post('sample','Members\ImportMemberController@sample')->name('sample');
       //   });
       



 //route for membership
Route::resource('manage_bar', 'Bar\ManageBarController');

//route for restaurant
Route::group(['prefix' => 'restaurant'], function () {
    //GL SETUP
    Route::get('dashboard', 'restaurant\DashboardController@index')->name('dashboard.index');
    Route::post('day-wise-income-order', 'restaurant\DashboardController@dayWiseIncomeOrder')->name('dashboard.day-wise-income-order');
    Route::resource('restaurants', 'restaurant\RestaurantBackendController');
    Route::get('file-import-export', 'restaurant\RestaurantBackendController@fileImportExport')->name('import-restaurant');
    Route::post('file-import', 'restaurant\RestaurantBackendController@fileImport')->name('file-import');
    Route::get('restaurant-sample', 'restaurant\RestaurantBackendController@fileExport')->name('restaurant-sample');
    Route::get('get-restaurant', 'restaurant\RestaurantBackendController@getRestaurant')->name('restaurant.get-restaurant');
    Route::get('get-menu-item', 'restaurant\RestaurantBackendController@getMenuItem')->name('restaurant.get-menu-items');

    Route::resource('menu-items', 'restaurant\MenuItemController');
    Route::get('menu-items/change/{id}', 'restaurant\MenuItemController@change_status')->name('menu-items.change')->middleware('auth');
    Route::resource('food-menu', 'restaurant\OrdersMenuItemController');
    // Route::get('restauranthome', 'restaurant\WebController@index')->name('restauranthome');
    Route::get('restauranthome', 'restaurant\RestaurantController@show')->name('restauranthome');
    Route::get('restaurant/{restaurant}', 'restaurant\RestaurantController@show')->name('restaurant.show');
    Route::get('reservation/booking', 'restaurant\ReservationController@booking')->name('restaurant.reservation')->middleware('auth');
    Route::post('reservation/check', 'restaurant\ReservationController@check')->name('reservation.check');
    Route::get('checkout', 'restaurant\CheckoutController@index')->name('checkout.index')->middleware('auth');
    Route::post('checkout', 'restaurant\CheckoutController@store')->name('checkout.store')->middleware('auth');
    Route::get('account/order/{id}', 'restaurant\AccountController@orderShow')->name('account.order.show')->middleware('auth');
    Route::get('account/order-cancel/{id}', 'restaurant\AccountController@orderCancel')->name('account.order.cancel')->middleware('auth');
    //orders
    Route::resource('orders', 'restaurant\OrderController');
    Route::get('findPrice', 'restaurant\OrderController@findPrice'); 
    Route::get('findUser', 'restaurant\OrderController@findUser');
    Route::get('orders/{order}/delivery', 'restaurant\OrderController@delivery')->name('orders.delivery');
    Route::get('orders/order-file/{id}', 'restaurant\OrderController@getDownloadFile')->name('orders.order-file');
    Route::get('get-orders', 'restaurant\OrderController@getOrder')->name('orders.get-orders');
    Route::post('orders/{order}/product-receive', 'restaurant\OrderController@productReceive')->name('orders.product-receive');
    Route::get('orders/product-receive/{id}/{status}', 'restaurant\OrderController@productReceiveIndex')->name('orders.product-receive-index');
    Route::get('order/change-status/{id}/{status}', 'restaurant\OrderController@changeStatus')->name('order.change-status');

    Route::get('profile', 'ProfileController@index')->name('profile');
    Route::resource('category', 'restaurant\CategoryController');
    Route::resource('cuisine', 'restaurant\CuisineController');
    //tables
    Route::resource('tables', 'restaurant\TableController');
    Route::get('get-tables', 'TableController@getTable')->name('tables.get-tables');
    //frontend
    Route::get('restaurantfrontendhome', 'restaurant\Frontend\WebController@index')->name('restaurantfrontendhome');
    Route::get('/search', 'restaurant\Frontend\SearchController@filter')->name('search');
    // Route::get('restaurant/{restaurant}', 'restaurant\Frontend\RestaurantController@show')->name('restaurant.show');
    Route::get('account/profile', 'restaurant\Frontend\AccountController@index')->name('account.profile')->middleware('auth');
    Route::get('account/order', 'restaurant\Frontend\AccountController@getOrder')->name('account.order')->middleware('auth');
    Route::get('account/reservations', 'restaurant\Frontend\AccountController@getReservation')->name('account.reservations')->middleware('auth');
    Route::get('account/password', 'restaurant\Frontend\AccountController@getPassword')->name('account.password')->middleware('auth');
    Route::put('account/password', 'restaurant\Frontend\AccountController@password_update')->name('account.password.update')->middleware('auth');
    Route::get('account/transaction', 'restaurant\Frontend\AccountController@getTransactions')->name('account.transaction')->middleware('auth');
    Route::get('account/update', 'restaurant\Frontend\AccountController@profileUpdate')->name('account.profile.index')->middleware('auth');
    Route::put('account/update/{profile}', 'restaurant\Frontend\AccountController@update')->name('account.profile.update')->middleware('auth');
    //restaurant reports
    Route::get('customer-report', 'restaurant\CustomerReportController@index')->name('customer-report.index');
    Route::post('customer-report', 'restaurant\CustomerReportController@index')->name('customer-report.index');
    Route::get('restaurant-owner-sales-report', 'restaurant\RestaurantOwnerSalesReportController@index')->name('restaurant-owner-sales-report.index');
    Route::post('restaurant-owner-sales-report', 'restaurant\RestaurantOwnerSalesReportController@index')->name('restaurant-owner-sales-report.index');
    Route::get('reservation-report', 'restaurant\ReservationReportController@index')->name('reservation-report.index');
    Route::post('reservation-report', 'restaurant\ReservationReportController@index')->name('reservation-report.index');
    });

    //route for bar
    Route::group(['prefix' => 'bar'], function () {
    //GL SETUP
        Route::resource('bar_home', 'Bar\ManageBarController');
    });

    
    
// starting inventory routes
    Route::resource('location', 'Inventory\LocationController');

    Route::resource('inventory', 'Inventory\InventoryController');
    
    Route::resource('fieldstaff', 'Inventory\FieldStaffController');
    
    Route::resource('purchase_inventory', 'Inventory\PurchaseInventoryController');
    Route::get('findInvPrice', 'Inventory\PurchaseInventoryController@findPrice'); 
    Route::get('approve/{id}', 'Inventory\PurchaseInventoryController@approve')->name('inventory.approve'); 
    Route::get('cancel/{id}', 'Inventory\PurchaseInventoryController@cancel')->name('inventory.cancel'); 
    Route::get('receive/{id}', 'Inventory\PurchaseInventoryController@receive')->name('inventory.receive'); 
    Route::get('make_payment/{id}', 'Inventory\PurchaseInventoryController@make_payment')->name('inventory.pay'); 
    Route::get('inv_pdfview',array('as'=>'inv_pdfview','uses'=>'Inventory\PurchaseInventoryController@inv_pdfview'));
    Route::get('order_payment/{id}', 'orders\OrdersController@order_payment')->name('order.pay');
    Route::get('inventory_list', 'Inventory\PurchaseInventoryController@inventory_list');
    Route::resource('inventory_payment', 'Inventory\InventoryPaymentController');
    Route::resource('order_payment', 'orders\OrderPaymentController');
    
    Route::resource('maintainance', 'Inventory\MaintainanceController');
    Route::get('change_m_status/{id}', 'Inventory\MaintainanceController@approve')->name('maintainance.approve'); 
    Route::get('maintainModal', 'Inventory\MaintainanceController@discountModal');
    Route::post('save_report', 'Inventory\MaintainanceController@save_report')->name('maintainance.report'); 
    Route::resource('service', 'Inventory\ServiceController');
    Route::get('change_s_status/{id}', 'Inventory\ServiceController@approve')->name('service.approve');
    
    Route::resource('good_issue', 'Inventory\GoodIssueController');
    Route::get('findIssueService', 'Inventory\GoodIssueController@findService');
    
    Route::resource('good_movement', 'Inventory\GoodMovementController');
    Route::resource('good_reallocation', 'Inventory\GoodReallocationController');
    Route::resource('good_disposal','Inventory\GoodDisposalController');
    
    Route::resource('good_return','Inventory\GoodReturnController');
    Route::get('findReturnService','Inventory\GoodReturnController@findService');
    
    Route::get('addSupp', 'Inventory\PurchaseInventoryController@addSupp');
// end inventory routes

Route::resource('service', 'Inventory\ServiceController');

//end inventory routes
Route::resource('facility', 'Facility\FacilityController');
Route::get('getMaintenance/{id}', 'Facility\FacilityController@getMaintainance')->name('facility.getMaintenance');
Route::get('getService/{id}', 'Facility\FacilityController@getService')->name('facility.getService');


Route::group(['prefix' => 'financial_report'], function () {
    Route::any('trial_balance', 'accounting\ReportController@trial_balance');
    Route::any('trial_balance_summary', 'accounting\ReportController@trial_balance_summary');
    Route::any('trial_balance/pdf', 'accounting\ReportController@trial_balance_pdf');
    Route::any('trial_balance/excel', 'accounting\ReportController@trial_balance_excel');
    Route::any('trial_balance/csv', 'accounting\ReportController@trial_balance_csv');
    Route::any('ledger', 'accounting\ReportController@ledger');
    Route::any('journal', 'accounting\ReportController@journal');
    Route::any('income_statement', 'accounting\ReportController@income_statement');
    Route::any('income_statement_summary', 'accounting\ReportController@income_statement_summary');
    Route::any('income_statement/pdf', 'accounting\ReportController@income_statement_pdf');
    Route::any('income_statement/excel', 'accounting\ReportController@income_statement_excel');
    Route::any('income_statement/csv', 'accounting\ReportController@income_statement_csv');
    Route::any('balance_sheet', 'accounting\ReportController@balance_sheet');
    Route::any('balance_sheet_summary', 'accounting\ReportController@balance_sheet_summary');
    Route::any('balance_sheet/pdf', 'accounting\ReportController@balance_sheet_pdf');
    Route::any('balance_sheet/excel', 'accounting\ReportController@balance_sheet_excel');
    Route::any('balance_sheet/csv', 'accounting\ReportController@balance_sheet_csv');
     Route::any('summary', 'accounting\ReportController@summary');
    Route::any('summary/pdf', 'accounting\ReportController@summary_pdf');
    Route::any('summary/excel', 'accounting\ReportController@summary');
    Route::any('summary/csv', 'accounting\ReportController@summary');
    Route::any('cash_flow', 'accounting\ReportController@cash_flow');
    Route::any('provisioning', 'accounting\ReportController@provisioning');
    Route::any('provisioning/pdf', 'accounting\ReportController@provisioning_pdf');
    Route::any('provisioning/excel', 'accounting\ReportController@provisioning_excel');
    Route::any('provisioning/csv', 'accounting\ReportController@provisioning_csv');
});

//START GL SETUP
Route::resource('class_account', 'accounting\ClassAccountController');
Route::resource('group_account', 'accounting\GroupAccountController');
Route::resource('account_codes', 'accounting\AccountCodesController');
Route::resource('system', 'SystemController');
Route::resource('chart_of_account', 'accounting\ChartOfAccountController');
Route::resource('expenses', 'accounting\ExpensesController');
Route::get('expenses_approve/{id}', 'accounting\ExpensesController@approve')->name('expenses.approve');
Route::resource('deposit', 'accounting\DepositController');
Route::get('deposit_approve/{id}', 'accounting\DepositController@approve')->name('deposit.approve');

//END GL SETUP

//Route for Mailing
Route::get('/email',function(){
    Mail::to('cielonovatus95@gmail.com')->send(new WelcomeMail());
    return new WelcomeMail();
    });

    Route::get("test-email", [MailerController::class, "email"])->name("email");

    Route::post("send-email", [MailerController::class, "composeEmail"])->name("send-email");


// 404 for undefined routes
Route::any('/{page?}',function(){
    return View::make('error-404');
})->where('page','.*');






