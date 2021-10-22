<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/* $router->group(['prefix' => '/qr'], function() use ($router){
    //PRUEBA QR 
    $router->get('/generated-qr', 'v1\pay\QrGenerateController@generateQrPrueba');
    //GENERAR QR 
    $router->post('/generated', 'v1\pay\QrGenerateController@generateQr');
    //CONSULTA ESTADO DEL QR
    $router->get('/consult/{id_qr}', 'v1\pay\QrGenerateController@consultaQrStatus');
    //UPDATE ANULAR O PROCESAR QR
    $router->put('/update/status', 'v1\pay\QrGenerateController@anularProcesarQr');
     //REPORTE DETALLE DE QR 
    $router->post('/reporte-detalle', 'v1\pay\QrGenerateController@reporteDetalle');
    //REPORTE GENERAL DE QR 
    $router->post('/reporte-general', 'v1\pay\QrGenerateController@reportGeneralQr');
    //PAGO DERECHO DE ADMISION
    $router->post('/pay-admission', 'v1\pay\QrGenerateController@payAdmissionQr');
    //PAGO QR ALQUILER ESTACIONAMIENTO SEM
    $router->post('/pay-sem', 'v1\pay\QrGenerateController@paySemQr');
    
    

    //NOTIFICACION QUE ENVIA EL BANCO CUANDO SE REALIZA UN PAGO
    $router->group(['middleware' => 'BcpAuth'], function($router) {

        $router->post('/webhook-gamc', 'v1\pay\QrGenerateController@callBackWebhook');

    }); */
