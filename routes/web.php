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
Route::get('/', function () {
    return view('welcome');
});

Route::get('test', function() {

  // Creating the new document...
$phpWord = new \PhpOffice\PhpWord\PhpWord();

/* Note: any element you append to a document must reside inside of a Section. */

// Adding an empty Section to the document...
$section = $phpWord->addSection();
// Adding Text element to the Section having font styled by default...
$section->addText(
  '"Learn from yesterday, live for today, hope for tomorrow. '
      . 'The important thing is not to stop questioning." '
      . '(Albert Einstein)'
);

/*
* Note: it's possible to customize font style of the Text element you add in three ways:
* - inline;
* - using named font style (new font style object will be implicitly created);
* - using explicitly created font style object.
*/

// Adding Text element with font customized inline...
$section->addText(
  '"Great achievement is usually born of great sacrifice, '
      . 'and is never the result of selfishness." '
      . '(Napoleon Hill)',
  array('name' => 'Tahoma', 'size' => 10)
);

// Adding Text element with font customized using named font style...
$fontStyleName = 'oneUserDefinedStyle';
$phpWord->addFontStyle(
  $fontStyleName,
  array('name' => 'Tahoma', 'size' => 10, 'color' => '1B2232', 'bold' => true)
);
$section->addText(
  '"The greatest accomplishment is not in never falling, '
      . 'but in rising again after you fall." '
      . '(Vince Lombardi)',
  $fontStyleName
);

// Adding Text element with font customized using explicitly created font style object...
$fontStyle = new \PhpOffice\PhpWord\Style\Font();
$fontStyle->setBold(true);
$fontStyle->setName('Tahoma');
$fontStyle->setSize(13);
$myTextElement = $section->addText('"Believe you can and you\'re halfway there." (Theodor Roosevelt)');
$myTextElement->setFontStyle($fontStyle);

// Saving the document as OOXML file...
$objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
try {
  $objWriter->save('helloWorld.docx');
} catch (Exception $e) {

}

// Saving the document as ODF file...
$objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'ODText');
try {
  $objWriter->save('helloWorld.odt');
} catch (Exception $e) {

}


// Saving the document as HTML file...
$objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'HTML');
try {
  $objWriter->save('helloWorld.blade.php');
} catch (Exception $e) {

}


});

Route::post('/logout', 'LoginController@logout');

Route::group(['middleware' => 'visitors'], function ()
{
    Route::get('/login', 'LoginController@login');
    Route::post('/login', 'LoginController@postLogin');
    Route::get('/register', 'LoginController@register');
    Route::post('/register', 'LoginController@postRegister');
});

Route::group(['middleware' => ['superadmin']], function ()
{
    Route::get('/dashboard/statistik', 'DashboardController@statistik');
    Route::get('/dashboard/laporan', 'DashboardController@laporan');

    //crud wilayah dusun
    Route::get('/penduduk/wilayah/dusun', 'DusunController@index');
    Route::get('/penduduk/wilayah/dusun/create', 'DusunController@create');
    Route::post('/penduduk/wilayah/dusun/create', 'DusunController@store');
    Route::get('/penduduk/wilayah/dusun/edit/{id}', 'DusunController@edit');
    Route::put('/penduduk/wilayah/dusun/edit/{id}', 'DusunController@update');
    Route::get('searchdusun',array('as'=>'searchdusun','uses'=>'DusunController@autoComplete'));

    //crud RW
    Route::get('/penduduk/wilayah/rw', 'RWController@index');
    Route::get('/penduduk/wilayah/rw/create', 'RWController@create');
    Route::post('/penduduk/wilayah/rw/create', 'RWController@store');
    Route::get('/penduduk/wilayah/rw/edit/{id}', 'RWController@edit');
    Route::put('/penduduk/wilayah/rw/edit/{id}', 'RWController@update');

    //crud rt
    Route::get('/penduduk/wilayah/rt', 'RTController@index');
    Route::get('/penduduk/wilayah/rt/create', 'RTController@create');
    Route::post('/penduduk/wilayah/rt/create', 'RTController@store');
    Route::get('/penduduk/wilayah/rt/edit/{id}', 'RTController@edit');
    Route::put('/penduduk/wilayah/rt/edit/{id}', 'RTController@update');

    //crud keluraga
    Route::get('/penduduk/keluarga', 'KeluargaController@index');
    Route::get('/penduduk/keluarga/create', 'KeluargaController@create');
    Route::post('/penduduk/keluarga/create', 'KeluargaController@store');
    Route::get('/penduduk/keluarga/edit/{id}', 'KeluargaController@edit');
    Route::put('/penduduk/keluarga/edit/{id}', 'KeluargaController@update');

    //crud penduduk
    Route::get('/penduduk/list', 'PendudukController@index');
    Route::get('/penduduk/list/create', 'PendudukController@create');
    Route::post('/penduduk/list/create', 'PendudukController@store');
    Route::get('/penduduk/list/edit/{id}', 'PendudukController@edit');
    Route::put('/penduduk/list/edit/{id}', 'PendudukController@update');
    Route::get('searchpenduduk', array('as'=>'searchpenduduk','uses'=>'PendudukController@nikAutoComplete'));
    Route::get('searchnama', array('as'=>'searchnama','uses'=>'PendudukController@namaAutoComplete'));

    //crud pemerintah
    Route::get('/desa/pemerintah', 'PemerintahController@index');
    Route::get('/desa/pemerintah/create', 'PemerintahController@create');
    Route::post('/desa/pemerintah/create', 'PemerintahController@store');
    Route::get('/desa/pemerintah/edit/{id}', 'PemerintahController@edit');
    Route::put('/desa/pemerintah/edit/{id}', 'PemerintahController@update');

    Route::get('/desa/identitas', 'DesaController@index');
    Route::post('/desa/identitas', 'DesaController@storeorupdate');

    Route::get('/tentang', function () {
        return view('tentang');
    });

    //crud agama
    Route::get('/master/agama', 'AgamaController@index');
    Route::get('/master/agama/delete/{id}', 'AgamaController@destroy');
    Route::post('/master/agama/update', 'AgamaController@update');
    Route::post('/master/agama/create', 'AgamaController@store');

    Route::get('/master/disabilitas', 'DisabilitasController@index');
    Route::get('/master/disabilitas/delete/{id}', 'DisabilitasController@destroy');
    Route::post('/master/disabilitas/update', 'DisabilitasController@update');
    Route::post('/master/disabilitas/create', 'DisabilitasController@store');

    Route::get('/master/carakb', 'CaraKbController@index');
    Route::get('/master/carakb/delete/{id}', 'CaraKbController@destroy');
    Route::post('/master/carakb/update', 'CaraKbController@update');
    Route::post('/master/carakb/create', 'CaraKbController@store');

    Route::get('/master/hubungan', 'HubunganController@index');
    Route::get('/master/hubungan/delete/{id}', 'HubunganController@destroy');
    Route::post('/master/hubungan/update', 'HubunganController@update');
    Route::post('/master/hubungan/create', 'HubunganController@store');

    Route::get('/master/jabatan', 'JabatanController@index');
    Route::get('/master/jabatan/delete/{id}', 'JabatanController@destroy');
    Route::post('/master/jabatan/update', 'JabatanController@update');
    Route::post('/master/jabatan/create', 'JabatanController@store');

    Route::get('/master/kawin', 'KawinController@index');
    Route::get('/master/kawin/delete/{id}', 'KawinController@destroy');
    Route::post('/master/kawin/update', 'KawinController@update');
    Route::post('/master/kawin/create', 'KawinController@store');

    Route::get('/master/pekerjaan', 'PekerjaanController@index');
    Route::get('/master/pekerjaan/delete/{id}', 'PekerjaanController@destroy');
    Route::post('/master/pekerjaan/update', 'PekerjaanController@update');
    Route::post('/master/pekerjaan/create', 'PekerjaanController@store');

    Route::get('/master/pendidikan', 'PendidikanController@index');
    Route::get('/master/pendidikan/delete/{id}', 'PendidikanController@destroy');
    Route::post('/master/pendidikan/update', 'PendidikanController@update');
    Route::post('/master/pendidikan/create', 'PendidikanController@store');

    Route::get('/master/status', 'StatusController@index');
    Route::get('/master/status/delete/{id}', 'StatusController@destroy');
    Route::post('/master/status/update', 'StatusController@update');
    Route::post('/master/status/create', 'StatusController@store');

    Route::get('/surat/daftar_template', 'SuratTemplateController@index');
    Route::get('/surat/create_template', 'SuratTemplateController@create');
    Route::post('/surat/create_template', 'SuratTemplateController@store');
    Route::get('/surat/edit_template/{id}', 'SuratTemplateController@edit');
    Route::put('/surat/edit_template/{id}', 'SuratTemplateController@update');
    Route::get('/surat/deactivate_template/{id}', 'SuratTemplateController@delete');

    Route::get('/surat/daftar_surat', 'SuratController@index');
    Route::get('/surat/cetak_surat/{id}', 'SuratController@edit_details');

});
