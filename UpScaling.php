<?php
echo "RUN START\r\n";

// APIのエンドポイント
$apiUrl = 'http://127.0.0.1:7860/sdapi/v1/extra-single-image';
// 取り込む画像を保存しているフォルダ
$folderPath = 'G:\Ai生成画像\upscale_import_image';
// 出力した画像を保存するフォルダ
$outputFolderPath = 'G:\Ai生成画像\upscale_output_image';

// 入力項目
$resize_mode = 1;
$show_extras_results = true;
$gfpgan_visibility = 0;
$codeformer_visibility = 0;
$codeformer_weight = 0;
$upscaling_resize = 2;
// $upscaling_resize_w = 1440;
// $upscaling_resize_h = 2048;
$upscaling_resize_w = 1296;
$upscaling_resize_h = 1842;
$upscaling_crop = true;
$upscaler_1 = 'ESRGAN_4x';
$upscaler_2 = 'ESRGAN_4x';
$extras_upscaler_2_visibility = 0;
$upscale_first = false;


// ************************************************************************
// Main
// ************************************************************************

// 処理の開始時刻を取得
$startTime = microtime(true);

// 画像のパスを取得する処理
$images = getImagesFromFolder($folderPath);

// 取り込み画像が存在するか確認する。
isImages($images);

// 生成済み画像を削除
deleteImagesFromFolder($outputFolderPath);

// 取り込み画像の枚数分APIを実行する
echo "api request start\r\n";
foreach ($images as $index => $imagePath) {
    echo "processing_image :".$imagePath . "\n";
    $base64Data = base64_encode(file_get_contents($imagePath));    
    $response = sendHttpRequest($base64Data,$index);
}

// 画像のパスを取得する処理
$images = getImagesFromFolder($outputFolderPath);

// メタデータを削除する処理
echo "delete metadeta\r\n";
foreach (getImagesFromFolder($outputFolderPath) as $index => $imagePath) {
    removeImageMetadata($imagePath);
}

// 処理時間を確認
isTime($startTime);

// 処理終了
echo "RUN END\r\n";
exit;

// ************************************************************************
// Function
// ************************************************************************
// APIにリクエストする処理
function sendHttpRequest($imageData,$index) {
    global $apiUrl;
    global $outputFolderPath;

    global $resize_mode;
    global $show_extras_results;
    global $gfpgan_visibility;
    global $codeformer_visibility;
    global $codeformer_weight;
    global $upscaling_resize;
    global $upscaling_resize_w;
    global $upscaling_resize_h;
    global $upscaling_crop;
    global $upscaler_1;
    global $upscaler_2;
    global $extras_upscaler_2_visibility;
    global $upscale_first;

    $ch = curl_init();
    $headers = array(
        'accept: application/json',
        'Content-Type: application/json',
    );

    $data = array(
        'resize_mode' => $resize_mode,
        'show_extras_results' => $show_extras_results,
        'gfpgan_visibility' => $gfpgan_visibility,
        'codeformer_visibility' => $codeformer_visibility,
        'codeformer_weight' => $codeformer_weight,
        'upscaling_resize' => $upscaling_resize,
        'upscaling_resize_w' => $upscaling_resize_w,
        'upscaling_resize_h' => $upscaling_resize_h,
        'upscaling_crop' => $upscaling_crop,
        'upscaler_1' => $upscaler_1,
        'upscaler_2' => $upscaler_2,
        'extras_upscaler_2_visibility' => $extras_upscaler_2_visibility,
        'upscale_first' => $upscale_first,
        'image' => $imageData,
    );

    curl_setopt($ch, CURLOPT_URL, $apiUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

    // リクエストの実行処理＆jsonデコードをする
    $response = json_decode(curl_exec($ch));
    $statusCode = curl_getinfo($ch, CURLINFO_RESPONSE_CODE);

    // ファイルを保存する処理
    if($statusCode == '200'){
        // レスポンスから画像データを取り出して保存する
        $outputFileName = $outputFolderPath . "/" . $index.".png";
        file_put_contents($outputFileName, base64_decode($response->image));
    }else{
        // 生成失敗
        echo "Generate Failure.\r\n";
    }

    // httpレスポンスの応答結果をログに出力
    file_put_contents('./response.log',print_r($response, true));
    // チャンネルを閉じる
    curl_close($ch);

    return $response;
}

// 画像を取得する処理
function getImagesFromFolder($folderPath) {
    $images = array();
    if (is_dir($folderPath)) {
        $files = scandir($folderPath);
        foreach ($files as $file) {
            $filePath = $folderPath . '/' . $file;
            if (is_file($filePath) && getimagesize($filePath)) {
                $images[] = $filePath;
            }
        }
    }
    return $images;
}

// 画像が存在するかcheckする
function isImages($images) {
    echo "input image check\r\n";
    if(empty($images)){
        echo "フォルダに画像が存在しません。\r\n";
        exit;
    }
}

// 画像を削除する処理
function deleteImagesFromFolder($folderPath) {
    echo "output image delete\r\n";
    $outputFiles = glob($folderPath . '/*');
    foreach ($outputFiles as $file) {
        if (is_file($file)) {
            unlink($file);
        }
    }
}

// 処理の時刻を計算
function isTime($startTime) {
    // 処理終了時刻を取得
    $endTime = microtime(true);
    // 処理時間を計算
    $executionTime = intval($endTime - $startTime);
    // 処理時間を時分秒形式に変換
    $hours = floor($executionTime / 3600);
    $minutes = floor(($executionTime % 3600) / 60);
    $seconds = $executionTime % 60;

    // 処理時間を表示
    echo "処理時間：".$hours."時間 ".$minutes."分 ".$seconds."秒\r\n";
}


// メタデータを削除する関数
function removeImageMetadata($imagePath) {
    // 画像の拡張子に応じて適切なGD関数を使用して画像を読み込みます
    $extension = pathinfo($imagePath, PATHINFO_EXTENSION);
    switch (strtolower($extension)) {
        case 'jpg':
        case 'jpeg':
            $image = imagecreatefromjpeg($imagePath);
            break;
        case 'png':
            $image = imagecreatefrompng($imagePath);
            break;
        case 'gif':
            $image = imagecreatefromgif($imagePath);
            break;
        default:
            return false; // サポートされていない画像形式の場合は処理を中止します
    }
    
    // 画像のメタデータを削除します
    if ($image !== false) {
        // 新しい画像ファイルを作成し、既存の画像をコピーします（メタデータは削除されます）
        $tempImage = imagecreatetruecolor(imagesx($image), imagesy($image));
        imagecopy($tempImage, $image, 0, 0, 0, 0, imagesx($image), imagesy($image));
        
        // 元の画像を削除して、新しい画像ファイルにリネームします
        unlink($imagePath);
        $newImagePath = $imagePath;
        
        // 画像を保存します
        switch (strtolower($extension)) {
            case 'jpg':
            case 'jpeg':
                imagejpeg($tempImage, $newImagePath);
                break;
            case 'png':
                imagepng($tempImage, $newImagePath);
                break;
            case 'gif':
                imagegif($tempImage, $newImagePath);
                break;
        }
        
        // 一時的な画像リソースを破棄します
        imagedestroy($tempImage);
        
        return true; // メタデータの削除が成功したことを返します
    }
    
    return false; // 画像の読み込みに失敗した場合は処理を中止します
}