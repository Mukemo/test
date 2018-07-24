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

Route::get('/', 'UserController@logIn')->name('admin.login');

Route::post('/login/custom',[
    'uses' => 'UserController@connexion',
    'as' => 'login.custom'
]);


/* admin routes*/
Route::get('/admin','UserController@index')->name('admin.dashboard');
Route::get('/admin/list','UserController@adminList')->name('admin.list');
Route::get('/admin/ajouter','UserController@create')->name('admin.create');
Route::get('/admin/{id}/details','UserController@show')->name('admin.voir');
Route::get('/admin/{id}/effacer','UserController@destroy')->name('admin.delete');
Route::get('/admin/{id}/profile','UserController@edit')->name('admin.edit');
Route::post('/admin/creer','UserController@store')->name('admin.store');
Route::get('/admin/logout','UserController@logout')->name('admin.logout');
Route::post('/admin/profile/update','UserController@updateProfile')->name('admin.update');

/*hotesse controllers and routers*/
Route::get('/admin/hotesse','HotesseController@index')->name('hotesse.index');
Route::get('/admin/hotesse/creer','HotesseController@create')->name('hotesse.create');
Route::post('/admin/hotesse/store','HotesseController@store')->name('hotesse.store');
Route::get('/admin/{id_hotesse}/effacer','HotesseController@destroy')->name('hotesse.effacer');
// Route::get('/admin/{id_hotesse}/show','HotesseController@show')->name('hotesse.show');

/*chauffeur controller*/
Route::get('/admin/chauffeur','ChauffeurController@index')->name('chauffeur.index');
Route::get('/admin/chauffeur/creer','ChauffeurController@create')->name('chauffeur.create');
Route::get('/admin/{id_chauffeur}/details','ChauffeurController@show')->name('chauffeur.voir');
Route::get('/admin/{id_chauffeur}/delete','ChauffeurController@destroy')->name('chauffeur.effacer');
Route::post('/admin/chauffeur/store','ChauffeurController@store')->name('chauffeur.store');


/*intervenant controller*/
Route::get('/admin/intervenant','IntervenantController@index')->name('intervenant.index');
Route::get('/admin/intervenant/creer','IntervenantController@create')->name('intervenant.create');
Route::post('/admin/intervenant/store','IntervenantController@store')->name('intervenant.store');
Route::get('/admin/{id_intervenant}/store','IntervenantController@destroy')->name('intervenant.delete');
Route::get('/admin/{id_intervenant}/show','IntervenantController@show')->name('intervenant.show');
Route::post('/admin/{id_intervenant}/update','IntervenantController@update')->name('intervenant.update');
Route::get('/admin/{id_intervenant}/voir','IntervenantController@voir')->name('intervenant.voir');

/*personnes controller*/
Route::get('/admin/personne','PersonneController@index')->name('personne.index');
Route::get('/admin/personne/creer','PersonneController@create')->name('personne.create');
Route::post('/admin/personne/store','PersonneController@store')->name('personne.store');
Route::get('/admin/{id_personne}/destroy','PersonneController@delete')->name('personne.destroy');
Route::get('/admin/{id_personne}/show','PersonneController@show')->name('personne.show');
Route::post('/admin/{id_personne}/personne/update','PersonneController@update')->name('personne.update');
Route::get('/admin/{id_personne}/personne/voir','PersonneController@voir')->name('personne.voir');
/* affectations routes*/

Route::get('/admin/affectation','AffectationController@index')->name('affectation.index');
Route::post('/admin/affectattion/show','AffectationController@show')->name('affectation.store');
Route::get('/admin/affectation/creer','AffectationController@create')->name('affectation.create');
Route::get('/admin/{id}/affectation/modifier','AffectationController@update')->name('affectation.modifier');
Route::get('/admin/{id}/affecter/delete','AffectationController@destroy')->name('affectation.effacer');

/* lieux controller */
Route::get('/admin/lieu','LieuxController@index')->name('lieu.index');
Route::get('/admin/lieu/creer','LieuxController@create')->name('lieu.create');
Route::post('/admin/lieu/store','LieuxController@store')->name('lieu.store');
Route::get('/admin/{id_lieu}/lieu','LieuxController@destroy')->name('lieu.delete');
/* Recherche controllers*/
Route::get('/admin/recherche','UserController@recherche')->name('search.index');
Route::post('/admin/recherche','UserController@recherche_action')->name('search.method');
/* categories controllers*/
Route::get('/admin/categorie','CategoriesController@index')->name('categorie.index');
Route::post('/admin/categorie/creer','CategoriesController@create')->name('categorie.create');
Route::get('/admin/{id_cat}/effacer','CategoriesController@delete')->name('categorie.delete');

/*sous categories controllers*/
Route::get('/admin/sous_categorie','SousCategoriesController@index')->name('sous_categorie.index');
Route::post('/admin/sous_categorie/creer','SousCategoriesController@create')->name('sous_categorie.create');
Route::get('/admin/{id_scat}/sous_categorie','SousCategoriesController@delete')->name('sous_categorie.delete');

/*programmes routes*/
Route::get('/admin/programme','ProgrammeController@index')->name('programme.index');
Route::get('/admin/programme/creer','ProgrammeController@create')->name('programme.create');
Route::post('/admin/program/create','ProgrammeController@store')->name('programme.store');
Route::get('/admin/{id_programme}/program/create','ProgrammeController@destroy')->name('programme.effacer');

/*participations route*/
Route::get('/admin/participation','ParticipationController@index')->name('participation.index');
Route::get('/admin/{id_personne}/participation/show','ParticipationController@show')->name('participation.show');
Route::post('/admin/participation/store','ParticipationController@store')->name('participation.store');
/*Activites routes*/
Route::get('/admin/activite','ActiviteController@index')->name('activite.index');
Route::get('/admin/activite/creer','ActiviteController@create')->name('activite.create');
Route::post('/admin/activite/store','ActiviteController@store')->name('activite.store');
Route::get('/admin/{id_activite}/{id_personne}/activite/delete','ActiviteController@destroy')->name('activite.effacer');
Route::get('/admin/{id_activite}/activite/effacer','ActiviteController@delete')->name('activite.delete');
/*Route::get('/home', 'HomeController@index')->name('home');*/
