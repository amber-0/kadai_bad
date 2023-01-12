<?php

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Http\Request;

// オートロードファイルの読み込み
define('LARAVEL_START', microtime(true));

if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

require __DIR__.'/../vendor/autoload.php';


// フレームワークの起動
$app = require_once __DIR__.'/../bootstrap/app.php';


// アプリケーション実行
$kernel = $app->make(Kernel::class);


// HTTPレスポンスの送信
$response = $kernel->handle(
    $request = Request::capture()
)->send();


// 終了処理
$kernel->terminate($request, $response);

