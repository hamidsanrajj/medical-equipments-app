<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('index');
// });

Route::view('/','index')->name('home'); //medical machines
Route::view('/home-appliances','include/views/pages/home_appliances')->name('homeAppliances'); //home machines
Route::view('/smart-devices','include/views/pages/smart_devices')->name('smartDevices'); //smart-devices 
Route::view('/security-equipments','include/views/pages/security_equipments')->name('securityEquipments'); //security machines
Route::view('/computer-devices','include/views/pages/computer_devices')->name('computerDevices'); //computer-devices

Route::view('/agfa-35x','include/views/pages/detail/agfa-35x')->name('agfa-35x'); //medical-devices
Route::view('/agfa-DX-G-CR-Digitizer','include/views/pages/detail/agfaCRDigitizer')->name('agfaCRDigitizer'); 
Route::view('/agfa-Drystar-5503','include/views/pages/detail/agfaDryStar')->name('agfaDryStar'); 
Route::view('/blood-testing-machine','include/views/pages/detail/blood-testing')->name('bloodTesting');
Route::view('/colposcopy','include/views/pages/detail/colposcopy')->name('colposcopy'); 
Route::view('/OEC-Elite-GE-HealthCare-','include/views/pages/detail/oec')->name('oec'); 
Route::view('/laserscope','include/views/pages/detail/laserscope')->name('laserscope'); 
Route::view('/Ot-table','include/views/pages/detail/OtTable')->name('OtTable'); 
Route::view('/surgical-cautery','include/views/pages/detail/surgicalCautery')->name('surgicalCautery'); 
Route::view('/ultrasonic-therapy-apparatus','include/views/pages/detail/ultrasonicTherapyApp')->name('ultrasonicTherapy');
Route::view('/ultrasound-machine','include/views/pages/detail/ultrasound')->name('ultrasound');
Route::view('/ventilator-machine','include/views/pages/detail/ventilator')->name('ventilator'); 
Route::view('/x-ray-machine','include/views/pages/detail/x-ray')->name('x-ray'); 
Route::view('/ct-scan-machine','include/views/pages/detail/ct-scan')->name('ct-scan'); 

Route::view('/contact','include/views/pages/contact')->name('contact'); 

Route::get('/contact-query', [ContactController::class, 'index']);
Route::post('/contact-query', [ContactController::class, 'query']);




