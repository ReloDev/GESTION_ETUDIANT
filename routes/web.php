<?php

use App\Http\Controllers\DashController;
use App\Http\Controllers\DemandeController;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\FiliereController;
use App\Http\Controllers\MemoireController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StageRequestController;
use App\Http\Controllers\StructureController;
use App\Http\Controllers\StructureFiliereController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/ge/dashyout', function () {
    return view('dashyout');
});

require __DIR__.'/auth.php';

Route::get('/Demande/create',[DemandeController::class,'create'])->name('Demande.create');
Route::get('/Demande/redirect',[DemandeController::class,'redirect'])->name('Demande.redirect');
Route::get('Demande/index',[DemandeController::class,'index'])->name('Demande.index');
Route::post('Demande/store',[DemandeController::class,'store'])->name('Demande.store');
Route::get('Demande/show/{id}',[DemandeController::class,'show'])->name('Demande.show');
Route::get('Demande/edit/{id}',[DemandeController::class,'edit'])->name('Demande.edit');
Route::get('Demande/delete/{id}',[DemandeController::class,'destroy'])->name('Demande.destroy');
Route::post('Demande/update/{id}',[DemandeController::class,'update'])->name('Demande.update');

Route::get('/Structure/create',[StructureController::class,'create'])->name('Structure.create');
Route::get('Structure/index',[StructureController::class,'index'])->name('Structure.index');
Route::post('Structure/store',[StructureController::class,'store'])->name('Structure.store');
Route::get('Structure/show/{id}',[StructureController::class,'show'])->name('Structure.show');
Route::get('Structure/edit/{id}',[StructureController::class,'edit'])->name('Structure.edit');
Route::get('Structure/delete/{id}',[StructureController::class,'destroy'])->name('Structure.destroy');
Route::post('Structure/update/{id}',[StructureController::class,'update'])->name('Structure.update');

Route::get('/Filiere/create',[FiliereController::class,'create'])->name('Filiere.create');
Route::get('Filiere/index',[FiliereController::class,'index'])->name('Filiere.index');
Route::post('Filiere/store',[FiliereController::class,'store'])->name('Filiere.store');
Route::get('Filiere/show/{id}',[FiliereController::class,'show'])->name('Filiere.show');
Route::get('Filiere/edit/{id}',[FiliereController::class,'edit'])->name('Filiere.edit');
Route::get('Filiere/delete/{id}',[FiliereController::class,'destroy'])->name('Filiere.destroy');
Route::post('Filiere/update/{id}',[FiliereController::class,'update'])->name('Filiere.update');

Route::get('/StructureFiliere/create',[StructureFiliereController::class,'create'])->name('StructureFiliere.create');
Route::get('StructureFiliere/index',[StructureFiliereController::class,'index'])->name('StructureFiliere.index');
Route::post('StructureFiliere/store',[StructureFiliereController::class,'store'])->name('StructureFiliere.store');
Route::get('StructureFiliere/show/{id}',[StructureFiliereController::class,'show'])->name('StructureFiliere.show');
Route::get('StructureFiliere/edit/{id}',[StructureFiliereController::class,'edit'])->name('StructureFiliere.edit');
Route::get('StructureFiliere/delete/{id}',[StructureFiliereController::class,'destroy'])->name('StructureFiliere.destroy');
Route::post('StructureFiliere/update/{id}',[StructureFiliereController::class,'update'])->name('StructureFiliere.update');

Route::get('Etudiant/create',[EtudiantController::class,'create'])->name('Etudiant.create');
Route::get('Etudiant/index',[EtudiantController::class,'index'])->name('Etudiant.index');
Route::post('Etudiant/store',[EtudiantController::class,'store'])->name('Etudiant.store');
Route::get('Etudiant/show',[EtudiantController::class,'show'])->name('Etudiant.show');
Route::get('Etudiant/edit/{id}',[EtudiantController::class,'edit'])->name('Etudiant.edit');
Route::get('Etudiant/delete/{id}',[EtudiantController::class,'destroy'])->name('Etudiant.destroy');
Route::post('Etudiant/update/{id}',[EtudiantController::class,'update'])->name('Etudiant.update');
Route::get('Etudiant/ig',[EtudiantController::class,'ig'])->name('Etudiant.ig');
Route::post('Etudiant/gtl',[EtudiantController::class,'gtl'])->name('Etudiant.gtl');
Route::post('Etudiant/gfc',[EtudiantController::class,'gfc'])->name('Etudiant.gfc');
Route::post('Etudiant/gc',[EtudiantController::class,'gc'])->name('Etudiant.gc');
Route::post('Etudiant/stat',[EtudiantController::class,'stat'])->name('Etudiant.stat');
Route::post('Etudiant/plan',[EtudiantController::class,'plan'])->name('Etudiant.plan');
Route::post( '/Etudiant/filiere/{id}', [EtudiantController::class,'filiere'])->name('Etudiant.filiere');

Route::get('Dashboard/index',[DashController::class,'create'])->name('Dashboard.index');

Route::get('/Memoire/create',[MemoireController::class,'create'])->name('Memoire.create');
Route::get('Memoire/index',[MemoireController::class,'index'])->name('Memoire.index');
Route::post('Memoire/store',[MemoireController::class,'store'])->name('Memoire.store');
Route::get('Memoire/show/{id}',[MemoireController::class,'show'])->name('Memoire.show');
Route::get('Memoire/edit/{id}',[MemoireController::class,'edit'])->name('Memoire.edit');
Route::get('Memoire/delete/{id}',[MemoireController::class,'destroy'])->name('Memoire.destroy');
Route::post('Memoire/update/{id}',[MemoireController::class,'update'])->name('Memoire.update');

//___________________________________________________________
Route::view("/home1","index",["requestSend"=>0])->name("home1");
Route::get("/stage/request",function(){return view("request_form");})->name("stageRequest_form");
Route::post("stage/request/store",[StageRequestController::class,"store"])->name("stageRequestSore");


//RECOVER
Route::get("/stage/report/get",function(){return view("report_form");})->name("stageReport_form");
Route::post("stage/report/store",[RecoverReport::class,"store"])->name("Report_store");

Route::get('/', function () {
    return view('welcome',["requestSend"=>0]);
});
