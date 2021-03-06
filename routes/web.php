<?php

Route::get('/', 'PagesController@accueil')->name('accueil');
Route::get('/contact', 'PagesController@contact')->name('contact');
Route::get('/niveaux/{level}', 'PagesController@level')->name('niveaux');
Route::get('/jeux/{matieres}', 'PagesController@games')->name('jeux');
Route::get('/scores', 'PagesController@rank')->name('scores');
Route::get('/mentions', 'PagesController@mentions')->name('mentions');
Route::get('/options', 'PagesController@settings')->name('options');

Route::get('/niveaux/{level}/{matieres}/{id_game}-{game_name}', 'PagesController@jeu_level')->name('jeu_from_level');
Route::get('/jeux/{matieres}/{level}/{id_game}-{game_name}', 'PagesController@jeu_matieres')->name('jeu_from_matieres');

Route::post('/post_comments', 'RequestController@post_comments')->name('post_comments');
Route::post('/post_contact', 'RequestController@post_contact')->name('post_contact');

Route::put('/options', 'RequestController@put_settings')->name('options');

Route::get('/error', 'PagesController@error')->name('error');
Route::get('/connexion', 'PagesController@connexion')->name('connexion');
Route::get('/inscription', 'PagesController@inscription')->name('inscription');

Route::get('/logout', function () {
  Auth::logout();
  return Redirect::to('/');
})->name('logout');

Auth::routes();
