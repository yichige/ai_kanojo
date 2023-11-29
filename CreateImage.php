<?php
echo "RUN START\r\n";

// 画像生成APIのエンドポイント
$apiUrl = 'http://127.0.0.1:7860/sdapi/v1/img2img';
// 画像解析APIのエンドポイント
$apiUrlInterrogate = 'http://127.0.0.1:7860/sdapi/v1/interrogate';

// 取り込む画像を保存しているフォルダ
$folderPath = 'G:\Ai生成画像\import_image';
// 出力した画像を保存するフォルダ
$outputFolderPath = 'G:\Ai生成画像\output_image';

// 入力項目
$denoising_strength = 0.8;
$image_cfg_scale = 7;
$resize_mode = 1;
$steps = 40;
$cfg_scale = 7;
// $width = 720;
// $height = 1024;
// $width = 800;
// $height = 1136;
// $width = 864;
// $height = 1228;
$width = 800;
$height = 1200;
$batch_size= 1;
$seed = -1;
$sampler_index= "DPM++ SDE Karras";
$api_count = 1;




// 健屋花那
// $prompt = " <lora:sukoya_kana_v10:0.6>, white gloves, bandages, white apron, short sleeves, nurse, bandaged arm, wrist cuffs, white dress, fangs, full body, stationary restraints, ";
// 【猫耳】フェリシア 
// $prompt = " <lora:FeliciaCosplayV2:0.75>, al ears, long hair, blue eyes, cat ears, animal hands, navel, open mouth, big hair, breasts, fang, smile, paw print, paw pose, large breasts, claws, :d, simple background, cat girl, very long hair, slit pupils, cat paws, ";
// スリングショット水着
// $prompt = " <lora:RegensburgSlingshotSwimsuitV1:0.75> slingshot swimsuit criss-cross halter solo huge breasts looking at viewer ass visible through thighs embarrassed blush hand on hip spiked choker bangs black choker thighs digust hairclip, ";
// 猫耳イリヤ
// $prompt = " <lora:IllyaBeastCosplay:0.75>,solo,large breasts,illyabeast cosplay,animal hands,paw gloves,cat ears,black thighhighs,ribbon,";
// 白い腹だし制服
// $prompt = "  <lora:CostumeJanusSchoolUniformV1:0.75>, white serafuku, long sleeves, white skirt, white pantyhose, crop top, double-breasted, groin,";
// 巫女
// $prompt = "1girl, solo,<lora:CostumeMikoJapaneseClothesShrineMaiden:0.75>, shrine maiden, cleavage, detached sleeves, white thighhighs, digust, blush, japanese clothes, huge breasts, choker, hakama short skirt,";
// 島風 (艦これ)
$prompt = "<lora:shimakaze_kantaicollection:0.75>, shimakaze,solo,long_hair,blonde_hair,hairband,blush,elbow gloves,microskirt,striped thighhighs,crop top,looking at viewer, ";
// 鹿島（艦これ）
// $prompt = "<lora:kashima_kantaicollection:0.75>, twintails, grey_hair, wavy_hair, blue_eyes, blush, long_hair, smile, hat, large_breasts, beret, epaulettes, military, military_uniform, skirt, uniform, gloves, pleated_skirt, miniskirt, white_gloves, grey_eyes, ";
// 時雨（艦これ）
// $prompt = "<lyco:shigure-lyco-nochekaiser:0.75>, shigure, shigure, ahoge, brown hair, blue eyes, braid, hair ornament, hair over shoulder, long hair, single braid, hair flaps, BREAK black gloves, black serafuku, black shirt, black skirt, fingerless gloves, gloves, neckerchief, pleated skirt, red neckerchief, sailor collar, school uniform, serafuku, shirt, skirt, white sailor collar,";
// 村雨（艦これ）
    // $prompt = " <lora:murasame_kantaicollection:0.75>, long_hair, light_brown_hair, brown_eyes, red_eyes, ribbon, smile, serafuku, hair_ribbon, black_serafuku, twintails, two_side_up, hair_flaps, hair_ornament, 1girl, school_uniform, neckerchief, red_neckerchief,";
// 大和（艦これ）
    // $prompt = " <lora:yamato_kantaicollection:0.75>, long_hair, brown_hair, ponytail, hair_ornament, flower, hair_flower, brown_eyes, smile, breasts, cherry_blossoms, large_breasts, very_long_hair, blush, hair_between_eyes, 1girl, coat, hair_intakes, headgear, long_coat, long_sleeves, shoulder_cutout, sidelocks, white_coat, clothing_cutout, pleated_skirt, skirt, sleeveless_coat, white_skirt, collar, sakuramon, thighhighs, ";
// ヨル・フォージャー
// $prompt = " <lora:YorBlackDress:0.75>,black dress, solo, red eyes, black hair, gold hairband, gloves, large breasts, black thighhighs, boots, fingerless gloves, hairband, cleavage, hair ornament, black gloves, flower, hair flower, thigh boots, rose, earrings, long hair, black footwear, bangs, blush, gold earrings, high heel boots, ";
// 天音かなた
// $prompt = "  <lora:Beretkanata-V7:0.75>, beretkanatan, multicolored hair, partially fingerless black gloves, grey hair, full body, blue hair, white jacket, white beret, single hair intake, hair ornament, colored inner hair, single blue thighhigh, white sneakers, purple eyes, hairclip, single sock, thigh strap, long hair, hair rings, asymmetrical legwear, single black kneehigh, streaked hair, long sleeves, twintails, open jacket, star necklace, necklace, pleated skirt, asymmetrical bangs, uneven legwear, puffy long sleeves, smile, black dress, blue skirt, hooded jacket, blue belt, frills, thigh pouch,";
// ヒンデンブルク(アズレン)
// $prompt = " <lora:HindenCL:0.75>, hindencl, black leotard, underboob cutout, frills, black elbow gloves, covered navel, black skirt, black pantyhose, boots, demon horn, demon wings, demon tail, orange eyes, blonde hair, fox ears, cat eyes, ahoge, ornaments,";
// 〇ネコエプロン
// $prompt = "<lora:MerkuriaCatV1:0.75>,large breasts,merkuriacat,naked apron,animal hands,cat paws,black legwear,no shoes, :d,on_back,cat tail,anal tail,spread legs,";
// 〇甘雨(原神)
// $prompt = "  <lora:ganyu2:0.1>, solo, long hair, breasts, smile, bangs, gloves, bare shoulders, blue hair, purple eyes, ahoge, pantyhose, sidelocks, detached sleeves, horns, black gloves, black pantyhose, bell, neck bell, white sleeves, gold trim, vision (genshin impact), thighlet, orb, ganyu (genshin impact), Ganyu, ";
// 〇バーバラ(原神)
// $prompt = " <lora:barbara:0.6>,smile, hat,latin cross,blonde hair, long hair,twintails,twin drills, blue eyes,bow,white dress,frilled skirt,detached sleeves, dress cross,white pantyhose,book,belt, ";
// 〇アンバー(原神)
// $prompt = " <lora:amber1:0.75>, smile, goggles on head, amber \(genshin impact\), brown eyes, brown hair, long hair, red hair ribbon, brown short shorts, leather gloves, pouch, thighhighs, white boots, medium breasts, cleavage cutout, ";
// 〇刻晴(原神)
// $prompt = " <lora:keqing1:0.75>, long hair, purple hair, purple eyes, hair bun, cone hair bun, twintails, bangs, double bun, breasts, hair_ornament, blush, braid, closed_mouth, bare_shoulders, cleavage, hair_between_eyes, large_breasts, collarbone,";
// 〇雷伝将軍(原神)
// $prompt = " <lora:raidenshogun1:0.7>, raiden shogun, purple hair, long hair,braid,hair ornament,purple eyes, cleavage,shoulder armor, kimono,long sleeves,wide sleeves,sash,obi,tassel,tomoe \(symbol\),vision \(genshin impact\),purple thighhighs,obijime, obiage, thighs,";
// 〇ラテックススーツ
// $prompt = " latex costume, latex dress, corset, bra, bondage outfit, latex gloves, thighhighs, short sleeves, see-through skirt, navel, high heels, rabbit ears, cross-laced clothes, cleavage, fishnets,skin tight, shiny, short dress, arm guards, sleeveless, ";
// 〇ボンデージ(あみあみ)
// $prompt = " <lora:bondage:0.4>, large breasts, very long hair, bondage outfit, harness, o-ring, cross pasties, no panties, crotch strap, groin, large breasts, collarbone, bare arms, metal collar, light smile, dappled sunlight, metal_collar, chain, jewelry, ";
// 〇サンタ衣装
// $prompt = " <lora:santa_outfit:0.25>, off-shoulder, wearing sntdrs, red santa dress, short dress, fur, belt, cameltoe, black thighhighs, garter straps, long hair, ";
// 〇初音ミク
// $prompt = " <lora:hatsunemiku1:0.35>, miku hatsune, ahoge, aqua eyes, aqua hair, crossed bangs, hair between eyes, hair ornament, headphones, long hair, twintails, BREAK aqua necktie, black footwear, black skirt, black sleeves, boots, collared shirt, detached sleeves, grey shirt, necktie, pleated skirt, shirt, skirt, sleeveless, sleeveless shirt, thigh boots, ";
// 〇クラウンクッパ
// $prompt = " <lora:bows1:0.75>,  blonde hair, highres, jewelry, long hair, wedding dress, stocking,crown, horns, spike necklace, spike turtle shell, high heels, ";
// 〇珊瑚宮心海(原神)
// $prompt = " <lora:sangonomiyakokomi1:0.75> , sangonomiya kokomi, thighhighs, navel, long hair, gloves, pink hair, white gloves, bow-shaped hair, wide sleeves, bangs, purple eyes, shorts, white thighhighs, frilled sleeves, bare shoulders, white shorts, bow, long sleeves, very long hair, multicolored hair, vision (genshin impact), frills, hair ornament, thighs, twintails, sandals, half gloves, bowtie, ";
// 〇宵宮(原神)
// $prompt = " <lora:yoimiya2:0.7>, yoimiya, (blond hair), ponytail, hair ornament, choker, tattoo, bandages, japanese clothes, sarashi, kimono, arm tattoo, red choker, orange kimono, chest tattoo, rope, shimenawa, sash, obi, hadanugi dousa, ";
// 〇胡桃(原神)
// $prompt = "  <lora:hutao1:0.75>, thick thighs, hu_tao, long hair, twintails, flower, hair between eyes, long sleeves, hat, flower-shaped pupils, black headwear, hat flower, very long hair, chinese clothes, black nails, nail polish, ghost, shorts, thighs, smile, ";




////////// 生成済み //////////
// メイド服
// $prompt = "<lora:IndomitableMaidCosplayV1:0.6>, (maid uniform:1.3), ";
// ナース服
// $prompt = " <lora:upskirt_nurse.v10.1:0.6>, (nurse uniform:1.3), ";
// 巫女
// $prompt = " <lora:MikoV4:0.6>, (shrine maiden's ceremonial dress:1.3), ";
// 制服
// $prompt = "  <lora:JanusSchoolUniformV1:0.4>, <lora:school_hallway_v0.1:0.3>, <lora:wsal:0.3>, (school uniform:1.3), ";
// ウェディング
// $prompt = "  <lora:红莲婚纱dress:0.4>, <lora:bremerton_oath:0.4>, <lora:wedding:0.1>, (wedding dress:1.3), ";


/////////////////////////////////////////////////////////////////////////////////////////////////////////// 

// シスター服　難しい
// $prompt = " (Nun costume:1.3), <lora:funtoys_v1:0.25>,  <lora:noaftersex:0.15>, SIGMA 24 mm F/1.4, (big breasts:1.1, sex toys:1.2,hole panties ,panties pulled aside fuck), (nsfw,after sex:1.2, cum), 20 years old ,";
// 猫ランジェリー
// $prompt = "  <lora:cat_lingerie:0.4>, <lora:catLingerieClothes:0.4>, (cat lingerie:1.3), <lora:funtoys_v1:0.25>, <lora:noaftersex:0.15>, SIGMA 24 mm F/1.4, (big breasts:1.1, sex toys:1.2), (nsfw,after sex:1.2, cum), 20 years old ,";
// 半透明バニースーツ エロが出て来ない・・・
// $prompt = "  <lora:translucent_bunnysuit_v0.2:0.6>, <lora:transpbunny:0.4>, (translucent bunnysuit:1.3), ";
// 逆バニー
// $prompt = " <lora:FishnetBunnyV1:0.75>,fishnet bodysuit,reverse bunnysuit,heart pasties,large breasts,heart pasties,light smile,bowtie,black pantyhose,covered nipples,very long hair,hanging breasts,";
// 童貞を殺すセーター
// $prompt = " <lora:CenterOpenningVirginKillerSweater:0.75>, virgin killer sweater, 1girl, solo, breasts, underwear, meme attire, horns, panties, halo, saliva, blush, long hair, pink panties, red hair, bangs, saliva trail, looking at viewer, ribbed sweater, sweat, blunt bangs,sweater,";
    // 刻晴(原神)ドレス
    // $prompt = " <lora:keqing_genshin:0.3>,  long hair, purple hair, purple eyes, hair bun, cone hair bun, twintails, bangs, double bun, breasts, hair ornament, blush, braid, medium breasts, closed mouth, bare shoulders, dress, official alternate costume, strapless, black dress, bow, ribbon, strapless dress, cleavage, hair ribbon, ";
    // 神里綾華(原神)
    // $prompt = " <lora:kamisatoayaka1:0.5>, kamisato ayaka,long hair,blue hair,ponytail,hair ribbon, hair ornament,mole under eye, blue eyes,breastplate,armor, short sleeves,japanese clothes,blue skirt, tassel,gloves, arm guards, smile, ";


/////////////////////////////////////////////////////////////////////////////////////////////////////////// 
// エロ関連のプロンプト
$prompt_nsfw = " <lora:funtoys_v1:0.25>, <lora:noaftersex:0.15>, SIGMA 24 mm F/1.4, (big breasts:1.2, sex toys:1.2, hole panties, panties pulled aside fuck ), (nsfw:1.2, after sex:1.2, rotor insertion:1.2, Dildos insertion:1.2 ), 20 years old ,";
/////////////////////////////////////////////////////////////////////////////////////////////////////////// 
// テンプレート
$prompt_temple = "((best quality)),(8k, RAW photo, best quality, masterpiece:1.2), High detail RAW color photo, professional photograph, (realistic, photo realistic:1.37), cinematic light, (finerly detailed face:1.2), (masterpiece:1.5), (best quality:1.2),being seen looking at a camera with one's whole body in front of the camera, ultra high res, highly detail face, ";
$negative_prompt = " (logo, bad anatomy, bad hands, text, mole ), missing limb, bad hands, drink, glass, food, ";
$negative_prompt_temple = "paintings, sketches, (worst quality:2), (low quality:2), (normal quality:2), lowres, normal quality, ((monochrome)), ((grayscale)), skin spots, acnes, skin blemishes, age spot, manboobs, (backlight:1.2), double navel, mutad arms, hused arms, neck lace, analog, analog effects, (sunglass:1.4), bad architecture, EasyNegative, ";


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

if (!file_exists($outputFolderPath)) {
    // 第三引数でパーミッションを指定できます（例：0777）
    mkdir($outputFolderPath, 0777, true);
    echo "フォルダが作成されました: $outputFolderPath";
}

// 取り込み画像の枚数分APIを実行する
echo "api request start\r\n";
foreach ($images as $index => $imagePath) {
    echo "processing_image :".$imagePath . "\n";
    $base64Data = base64_encode(file_get_contents($imagePath));

    $checkPrompt = "";
    // 画像の情報解析
    // $checkPrompt = sendHttpRequestInterrogate($base64Data);

    // 画像生成処理
    $while_count = 0;
    while ($while_count < $api_count) {
        $response = sendHttpRequest($base64Data,$index,$while_count,$checkPrompt);
        $while_count++;
    }
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
function sendHttpRequest($imageData,$index,$while_count,$checkPrompt) {
    global $apiUrl;
    global $outputFolderPath;
    global $denoising_strength;
    global $image_cfg_scale;
    global $resize_mode;
    global $steps;
    global $cfg_scale;
    global $width;
    global $height;
    // global $model_name;
    global $prompt;
    global $negative_prompt;
    global $prompt_temple;
    global $prompt_nsfw;
    global $negative_prompt_temple;
    global $seed;
    global $sampler_index;
    global $batch_size;

    $ch = curl_init();
    $headers = array(
        'accept: application/json',
        'Content-Type: application/json',
    );

    $data = array(
        "init_images" => array(
            $imageData
        ),
        "denoising_strength"=> $denoising_strength,
        "image_cfg_scale"=> $image_cfg_scale,
        "resize_mode"=> $resize_mode,
        "inpaint_full_res"=> true,
        "prompt"=> $prompt_temple.$prompt.$prompt_nsfw.$checkPrompt,
        "negative_prompt"=> $negative_prompt.$negative_prompt_temple,
        "seed"=> $seed,
        "sampler_index"=> $sampler_index,
        "batch_size"=> $batch_size,
        "steps"=> $steps,
        "cfg_scale"=> $cfg_scale,
        "width"=> $width,
        "height"=> $height
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
        foreach($response->images as $index2 => $image){
            $outputFileName = $outputFolderPath . "/" . ($index + 1) ."_".$while_count."_". $index2  . ".png";
            file_put_contents($outputFileName, base64_decode($image));
        }
    }else{
        // 生成失敗
        echo "Generate Failure.\r\n";
    }

    // httpレスポンスの応答結果をログに出力
    // file_put_contents('./response.log',print_r($response, true));
    // チャンネルを閉じる
    curl_close($ch);

    return $response;
}

// 画像のプロンプトを解析する処理
function sendHttpRequestInterrogate($imageData) {
    global $apiUrlInterrogate;
    $checkPrompt = "";

    $ch = curl_init();
    $headers = array(
        'accept: application/json',
        'Content-Type: application/json',
    );
    $data = array("image" => $imageData);

    curl_setopt($ch, CURLOPT_URL, $apiUrlInterrogate);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

    // リクエストの実行処理＆jsonデコードをする
    $response = json_decode(curl_exec($ch));
    $statusCode = curl_getinfo($ch, CURLINFO_RESPONSE_CODE);

    // ファイルを保存する処理
    if($statusCode == '200'){
        $checkPrompt = $response->caption;
    }else{
        echo "Image Prompt Check Failure.\r\n";
    }
    // チャンネルを閉じる
    curl_close($ch);
    echo "     Analysis Prompt: ".$checkPrompt."\n";
    return $checkPrompt;
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

// 画像が存在するかcheckする
function isImages($images) {
    echo "input image check\r\n";
    if(empty($images)){
        echo "フォルダに画像が存在しません。\r\n";
        exit;
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
