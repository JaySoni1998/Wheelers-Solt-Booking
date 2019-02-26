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

//Login
Route::post('Login',"LoginController@Login")->name('Login_SaveData');

Route::get('/home',function(){
	return view('home');
});

//Package
Route::get('/Add_Package', function () {
    return view('Add_Package');
});
Route::post('Add_Package',"PackageController@Add_Package")->name('Package_SaveData'); //Add
Route::get('/View_Package', 'PackageController@View_Package')->name('Package_ViewData'); //View
Route::get('/Delete_Package/{P_No}','PackageController@Delete_Package')->name('Package_DeleteData'); //Delete
Route::get('/Update_Package/{P_No}','PackageController@Update_Package')->name('Package_UpdateData'); //Update
Route::post('/SaveUpdate_Package','PackageController@SaveUpdate_Package')->name('Package_SaveUpdate'); //Update Save

//Feedback
Route::get('/View_Feedback', 'FeedbackController@View_Feedback')->name('Feedback_ViewData'); //View
Route::get('/Delete_Feedback/{F_ID}','FeedbackController@Delete_Feedback')->name('Feedback_DeleteData'); //Delete

//Staff
Route::get('/Add_Staff_Details', function () {
    return view('Add_Staff_Details');
});
Route::post('Add_Staff_Details',"StaffController@Add_Staff_Details")->name('Staff_SaveData'); //Add
Route::get('/View_Staff', 'StaffController@View_Staff')->name('Staff_ViewData'); //View
Route::get('/Delete_Staff/{Emd_ID}','StaffController@Delete_Staff')->name('Staff_DeleteData'); //Delete
Route::get('/Update_Staff/{Emd_ID}','StaffController@Update_Staff')->name('Staff_UpdateData'); //Update
Route::post('/SaveUpdate_Staff','StaffController@SaveUpdate_Staff')->name('Staff_SaveUpdate'); //Update Save

//Location
Route::get('/Add_Location', function () {
    return view('Add_Location');
});
Route::post('Add_Location',"LocationController@Add_Location")->name('Location_SaveData'); //Add
Route::get('/View_Location', 'LocationController@ViewLocation')->name('Locationpostdata'); //View
Route::get('/Delete_Location/{Place_No}','LocationController@Delete_Location')->name('Location_DeleteData'); //Delete
Route::get('/Update_Location/{Place_No}','LocationController@Update_Location')->name('Location_UpdateData'); //Update
Route::post('/SaveUpdate_Location','LocationController@SaveUpdate_Location')->name('Location_SaveUpdate'); //Update Save

//Plots and Slots
Route::get('/Add_Plots_&_Slots','PlotsSlotsController@showAddForm');
Route::get('/getLocation','PlotsSlotsController@getLocation');

Route::post('Add_Plots_&_Slots',"PlotsSlotsController@Add_Plots_&_Slots")->name('P_S_SaveData'); //Add
Route::get('/View_P_S','PlotsSlotsController@View_P_S')->name('P_S_ViewData'); //View
Route::get('/Delete_P_S/{Place_No}','PlotsSlotsController@Delete_P_S')->name('P_S_DeleteData'); //Delete
Route::get('/Update_P_S/{Place_No}','PlotsSlotsController@Update_P_S')->name('P_S_UpdateData'); //Update
Route::post('/SaveUpdate_P_S','PlotsSlotsController@SaveUpdate_P_S')->name('P_S_SaveUpdate'); //Update Save


//Profile
Route::post('Admin_View_Profile',"ProfileController@Admin_View_Profile")->name('Profile_SaveData'); //Add
Route::get('/Admin_View_Profile', 'ProfileController@Admin_View_Profile')->name('Profile_ViewData'); //View

Route::get('/Update_Admin_Profile/{A_ID}','ProfileController@Update_Admin_Profile')->name('Profile_UpdateData'); //Update
Route::post('/SaveUpdate_Profile','ProfileController@SaveUpdate_Profile')->name('Profile_SaveUpdate'); //Update Save

//report
Route::get('/Report_Location', 'LocationController@Report_Location')->name('Locationpostdata'); //View
Route::get('/Report_Feedback', 'FeedbackController@Report_Feedback')->name('Feedbackpostdata'); //View
Route::get('/Report_Package', 'PackageController@Report_Package')->name('Packagepostdata'); //View
Route::get('/Report_Staff', 'StaffController@Report_Staff')->name('Staffpostdata'); //View
