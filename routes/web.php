<?php

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


Route::get('/', 'LandingController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile', 'HomeController@profile')->name('profile');
Route::get('/profile/edit', 'HomeController@profileEdit')->name('profile.edit');
Route::put('/profile/update', 'HomeController@profileUpdate')->name('profile.update');
Route::get('/profile/changepassword', 'HomeController@changePasswordForm')->name('profile.change.password');
Route::post('/profile/changepassword', 'HomeController@changePassword')->name('profile.changepassword');

Route::group(['middleware' => ['auth','role:Admin']], function ()
{
    Route::get('/roles-permissions', 'RolePermissionController@roles')->name('roles-permissions');
    Route::get('/role-create', 'RolePermissionController@createRole')->name('role.create');
    Route::post('/role-store', 'RolePermissionController@storeRole')->name('role.store');
    Route::get('/role-edit/{id}', 'RolePermissionController@editRole')->name('role.edit');
    Route::put('/role-update/{id}', 'RolePermissionController@updateRole')->name('role.update');

    Route::get('/permission-create', 'RolePermissionController@createPermission')->name('permission.create');
    Route::post('/permission-store', 'RolePermissionController@storePermission')->name('permission.store');
    Route::get('/permission-edit/{id}', 'RolePermissionController@editPermission')->name('permission.edit');
    Route::put('/permission-update/{id}', 'RolePermissionController@updatePermission')->name('permission.update');

    Route::get('assign-subject-to-class/{id}', 'GradeController@assignSubject')->name('class.assign.subject');
    Route::post('assign-subject-to-class/{id}', 'GradeController@storeAssignedSubject')->name('store.class.assign.subject');

    Route::resource('assignrole', 'RoleAssign');
    Route::resource('classes', 'GradeController');
    Route::resource('subject', 'SubjectController');
    Route::resource('teacher', 'TeacherController');
    Route::resource('parents', 'ParentsController');
    Route::resource('student', 'StudentController');
    Route::resource('programs', 'ProgramsController');
    Route::resource('admissions', 'OpenAdmissionController');

    Route::get('attendance', 'AttendanceController@index')->name('attendance.index');

    Route::get('meritlist', 'MeritListController@index')->name('merit.list.index');
    Route::get('generate/merit/list', 'MeritListController@generateMeritList')->name('merit.list.generate');

    Route::get('view/challanforms', 'ChallanFormController@viewChallanForms')->name('view.challan.forms');
    Route::get('view/challanforms/generator', 'ChallanFormController@viewChallanFormGenerator')->name('view.challan.forms.generator');
    Route::post('store/challan/form', 'ChallanFormController@storeChallanForm')->name('store.challan.form');
    Route::get('edit/challanforms/generator/{id}', 'ChallanFormController@edit')->name('edit.challan.forms.generator');
    Route::delete('delete/challanforms/generator/{id}', 'ChallanFormController@delete')->name('delete.challan.forms.generator');

});

Route::group(['middleware' => ['auth','role:Teacher']], function ()
{
    Route::post('attendance', 'AttendanceController@store')->name('teacher.attendance.store');
    Route::get('attendance-create/{classid}', 'AttendanceController@createByTeacher')->name('teacher.attendance.create');
});

Route::group(['middleware' => ['auth','role:Parent']], function ()
{
    Route::get('attendance/{attendance}', 'AttendanceController@show')->name('attendance.show');
});

Route::group(['middleware' => ['auth','role:Student']], function () {
    Route::get('qualifications', 'QualificationController@create')->name('qualification.create');
    Route::delete('qualifications/delete/{id}', 'QualificationController@destroy')->name('qualification.delete');
    Route::post('qualifications', 'QualificationController@store')->name('qualification.store');

    Route::get('application/status', 'ApplicationController@applicationStatus')->name('application.status');
    Route::get('application/apply', 'ApplicationController@applyForCourse')->name('application.apply');
    Route::get('application/detail/{id}', 'ApplicationController@viewCourseDetail')->name('view.application.detail');
    Route::get('application/form/{id}', 'ApplicationController@apply')->name('view.application.form');
    Route::get('view/merit/list', 'ApplicationController@viewMeritList')->name('view.merit.list');

    Route::get('view/student/challan', 'StudentChallanController@studentChallan')->name('view.student.challan');
});
