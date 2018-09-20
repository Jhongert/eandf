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

Route::view('/', 'home', ['title' => '']);
Route::view('alan-elkins', 'alan-elkins', ['title' => 'Freedman - Alan J. Elkins']);
Route::view('alimony-amounts', 'alimony-amounts', ['title' => 'Alimony Amounts']);
Route::view('alimony-modifications', 'alimony-modifications', ['title' => 'Alimony Modifications']);
Route::view('alimony-spousal-support', 'alimony-spousal-support', ['title' => 'Alimony/Spousal Support']);
Route::view('attorneys', 'attorneys', ['title' => 'Attorneys']);
Route::view('bankruptcy-means-test', 'bankruptcy-means-test', ['title' => 'Bankruptcy Means Test']);
Route::view('bankruptcy', 'bankruptcy', ['title' => 'Bankruptcy']);
Route::view('chapter-13-process', 'chapter-13-process', ['title' => 'Chapter 13 Process']);
Route::view('chapter-13', 'chapter-13', ['title' => 'Chapter 13']);
Route::view('chapter-7', 'chapter-7', ['title' => 'Chapter 7']);
Route::view('child-custody-support', 'child-custody-support', ['title' => 'Child Custody &amp; Support Modifications']);
Route::view('child-custody-time', 'child-custody-time', ['title' => 'Child Custody Time Sharing']);
Route::view('child-custody-unmarried', 'child-custody-unmarried', ['title' => 'Child Custody For Unmarried Parents']);
Route::view('child-support', 'child-support', ['title' => 'Child Support']);
Route::view('contact', 'contact', ['title' => 'Contact Us']);
Route::view('contested-divorce', 'contested-divorce', ['title' => 'Contested Divorce']);
Route::view('credit-card-debt', 'credit-card-debt', ['title' => 'Credit Card Debt']);
Route::view('creditor-harassment', 'creditor-harassment', ['title' => 'Creditor Harassment']);
Route::view('daniel-elkins', 'daniel-elkins', ['title' => 'Daniel C. Elkins']);
Route::view('disclaimer', 'disclaimer', ['title' => 'Disclaimer']);
Route::view('divorce-family-law', 'divorce-family-law', ['title' => 'Divorce &amp; Family Law']);
Route::view('fall-accidents', 'fall-accidents', ['title' => 'Slip &amp; Fall/Trip &amp; Fall Accidents']);
Route::view('lien-stripping', 'lien-stripping', ['title' => 'Lien Stripping']);
Route::view('news-detail', 'news-detail', ['title' => 'News']);
Route::view('our-firm', 'our-firm', ['title' => 'Our Firm']);
Route::view('parental-rights', 'parental-rights', ['title' => 'Parental Rights']);
Route::view('parenting-plan', 'parenting-plan', ['title' => 'Parenting Plan']);
Route::view('personal-injury', 'personal-injury', ['title' => 'Personal Injury']);
Route::view('premises-liability', 'premises-liability', ['title' => 'Premises Liability: Who Is At Fault']);
Route::view('privacy-policy', 'privacy-policy', ['title' => 'Privacy Policy']);
Route::view('property-division', 'property-division', ['title' => 'Property Division']);
Route::view('property-division', 'property-division', ['title' => 'Property Division']);







Route::group(['prefix' => 'admin'], function () {
    Auth::routes();
});

Route::get('/admin', 'AdminController@index')->name('admin');

//News routes
Route::resource('/admin/news', 'NewsController');

//Testimonials routs
Route::resource('/admin/testimonials', 'TestimonialController');

