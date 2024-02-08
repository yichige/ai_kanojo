<?php
echo "RUN START\r\n";

// APIのエンドポイント(画像生成)
$apiUrl = 'http://127.0.0.1:7860/sdapi/v1/img2img';
// APIのエンドポイント(画像解析)
$apiUrlInterrogate = 'http://127.0.0.1:7860/sdapi/v1/interrogate';

//////// 優一PC環境 ////////
// 取り込む画像を保存しているフォルダ
// $folderPath1 = 'G:\Ai生成画像\取り込み画像\import_image_1';
// $folderPath2 = 'G:\Ai生成画像\取り込み画像\import_image_2';
// $folderPath3 = 'G:\Ai生成画像\取り込み画像\import_image_3';

$folderPath1 = 'G:\Ai生成画像\取り込み画像_test\import_image_1';
$folderPath2 = 'G:\Ai生成画像\取り込み画像_test\import_image_2';
$folderPath3 = 'G:\Ai生成画像\取り込み画像_test\import_image_3';

// $folderPath1 = 'G:\Ai生成画像\取り込み画像_追加\import_image_1';
// $folderPath2 = 'G:\Ai生成画像\取り込み画像_追加\import_image_2';
// $folderPath3 = 'G:\Ai生成画像\取り込み画像_追加\import_image_3';

// 出力した画像を保存するフォルダ
$outputFolderPath = 'G:\Ai生成画像\output_image';

//////// お父さんPC環境 ////////
// 取り込む画像を保存しているフォルダ
// $folderPath1 = 'C:\yuichiSD\AI画像\取り込み画像\import_image_1';
// $folderPath2 = 'C:\yuichiSD\AI画像\取り込み画像\import_image_2';
// $folderPath3 = 'C:\yuichiSD\AI画像\取り込み画像\import_image_3';
// 出力した画像を保存するフォルダ
// $outputFolderPath = 'C:\yuichiSD\AI画像\output_image';

// 入力項目
$denoising_strength = 0.8;
$image_cfg_scale = 7;
$resize_mode = 1;
$steps = 40;
$cfg_scale = 7;
// $width = 720;
// $height = 1024;
$width = 800;
$height = 1200;
// $width = 1000;
// $height = 1500;
$batch_size= 1;
$seed = -1;
$sampler_index= "DPM++ SDE Karras";
$api_count = 1;


////////////////////////
// 艦隊これくしょん
////////////////////////

    // グラーフ・ツェッペリン(艦これ)
    // $prompt = " <lora:graf_zeppelin_kantaicollection:0.5>, ((blonde_hair)), (twintails, long_hair, sidelocks, blue_eyes, capelet, large_breasts, hat, peaked_cap, necktie, military, cross, blush, 1girl, looking_at_viewer, military_uniform, uniform, iron_cross, black_gloves, gloves),";
// プリンツ・オイゲン(艦これ)
// $prompt = " <lora:prinz_eugen_kantaicollection:0.5>, ((blonde_hair)), (long_hair, twintails, hair_ornament, anchor_hair_ornament, hat, peaked_cap, blush, low_twintails, military, smile, breasts, open_mouth, iron_cross, cross, aqua eyes, blue eyes, 1girl, black_skirt, black_thighhighs, gloves, long_sleeves, looking_at_viewer, military_hat, military_uniform, skirt, thighhighs, uniform, white_gloves, microskirt, pleated_skirt),";
// 村雨(艦これ)
// $prompt = " <lora:murasame_kantaicollection:0.5>, ((light_brown_hair)), (long_hair,  brown_eyes, red_eyes, ribbon, smile, serafuku, hair_ribbon, black_serafuku, breasts, twintails, two_side_up, hair_flaps, hair_ornament, 1girl, blush, collarbone, looking_at_viewer, alternate_costume, hair_between_eyes),";
// 金剛(艦これ)
// $prompt = " <lora:kongou_kantaicollection:0.5>, ((brown_hair)), (long_hair, ahoge, hair_ornament, hairband, hair_bun, hairclip, blush, double_bun, smile, nontraditional_miko, purple_eyes, open_mouth, black_skirt, skirt, red_ribbon-trimmed_sleeves, red_ribbon_trim, detached_sleeves, japanese_clothes, bare_shoulders, ribbon-trimmed_sleeves),";
// 榛名(艦これ)
// $prompt = "  <lora:haruna_kantaicollection:0.5>, ((black_hair)), (long_hair, hair_ornament, hairband, brown_eyes, hairclip, blush, smile, headgear, breasts, nontraditional_miko, hair_between_eyes, 1girl, detached_sleeves, japanese_clothes, looking_at_viewer, red_skirt, ribbon-trimmed_sleeves, ribbon_trim, skirt, bare_shoulders, open_mouth, sarashi, wide_sleeves),";
// 島風(艦これ)
// $prompt = " <lora:shimakaze_kantaicollection:0.5>, ((Blue mini skirt,blonde_hair)), (long_hair, hairband, blush, black_panties, blue_skirt, crop_top, elbow_gloves, gloves, highleg, highleg_panties, panties, sailor_collar, skirt, underwear, white_gloves, pleated_skirt, school_uniform, serafuku, miniskirt, microskirt, neckerchief, black_neckerchief, hair_ornament, looking_at_viewer, blue_sailor_collar, navel, smile, black_hairband, hair_between_eyes, brown_eyes, grey_eyes, thighhighs),";
// 島風(艦これ)バニーガール
// $prompt = " <lora:shimakaze_kantaicollection:0.5>, ((blonde_hair)), (long_hair, hairband, blush, animal_ears, breasts, detached_collar, fake_animal_ears, grey_eyes, playboy_bunny, rabbit_ears, black_leotard, leotard, small_breasts, alternate_costume, black_pantyhose, pantyhose, strapless, bowtie, strapless_leotard, black_bowtie, hair_between_eyes, wrist_cuffs),";
// ビスマルク(艦これ)
// $prompt = " <lora:bismarck_azurlane:0.5>, ((blonde_hair)), (long_hair, blue_eyes, breasts, large_breasts, hat, peaked_cap, hair_between_eyes, blush, military, bare_shoulders, detached_sleeves, gloves, looking_at_viewer, military_hat, military_uniform, uniform, brown_gloves, anchor),";
// 大和(艦これ)
$prompt = " <lora:yamato_kantaicollection:0.5>, ((brown_hair)), (long_hair,  ponytail, hair_ornament, flower, hair_flower, brown_eyes, smile, breasts, cherry_blossoms, large_breasts, very_long_hair, blush, hair_between_eyes, coat, hair_intakes, long_coat, long_sleeves, shoulder_cutout, sidelocks, white_coat, clothing_cutout, pleated_skirt, (red skirt), sleeveless_coat, collar, sakuramon, thighhighs),";
// 赤城(艦これ)
// $prompt = " <lora:akagi_kantaicollection:0.5>, ((brown_hair)), (long_hair, brown_eyes, muneate, tasuki, smile, hakama, hakama_short_skirt, hakama_skirt, japanese_clothes, looking_at_viewer, simple_background, skirt, straight_hair, red_hakama, blush, closed_mouth),";
// 加賀(艦これ)
// $prompt = " <lora:kaga_kantaicollection:0.5>, ((brown_hair)), (side_ponytail, brown_eyes, short_hair, breasts, long_hair, 1girl, chibi, japanese_clothes, tasuki, blue_hakama, hair_between_eyes, hakama, hakama_skirt, blue skirt, hakama_short_skirt, minigirl, japanese_clothes, large_breasts, gloves, partially_fingerless_gloves, yugake, single_glove, blush, white_shirt, black_choker, choker, jewelry, necklace, sweater),";
// 夕立(艦これ)
// $prompt = " <lora:yuudachi_kantaicollection:0.5>, ((blonde_hair)), (long_hair,  ribbon, hair_ribbon, hair_flaps, hair_ornament, red_eyes, hairclip, black_ribbon, smile, blush, serafuku, breasts, fingerless_gloves, gloves, scarf, school_uniform, open_mouth, looking_at_viewer, mini skirt),";
// 天津風(艦これ)
// $prompt = " <lora:amatsukaze_kantaicollection:0.5>, ((white_hair,grey_hair)),(long_hair, two_side_up, hair_tubes, brown_eyes, blush, 1girl, dress, looking_at_viewer, sailor_collar, sailor_dress, choker, brown_dress, open_mouth),";
// 山風(艦これ)
// $prompt = " <lora:yamakaze_kantaicollection:0.5>, ((green_hair)), (hair_between_eyes, long_hair, hair_ornament, hairclip, ribbon, hair_ribbon, ponytail, black_ribbon, blush, serafuku, green_eyes, blue_eyes, black_skirt, blue_neckerchief, detached_sleeves, looking_at_viewer, neckerchief, pleated_skirt, school_uniform, skirt, thighhighs, black_serafuku, black_thighhighs, zettai_ryouiki),";
// 江風(艦これ)
// $prompt = " <lora:kawakaze_kantaicollection:0.5>, ((red_hair)), (long_hair, ribbon, hairband, hair_ribbon, bangs, ahoge, twintails, sidelocks, low_twintails, asymmetrical_bangs, very_long_hair, smile, blue_eyes, serafuku, sleeveless, hair_flaps, bare_shoulders, belt, black_gloves, black_skirt, collared_shirt, elbow_gloves, fingerless_gloves, gloves, looking_at_viewer, neckerchief, pleated_skirt, school_uniform, shirt, skirt, sleeveless_shirt, navel, blush, blue_neckerchief),";
// 翔鶴(艦これ)
// $prompt = " <lora:shoukaku_kantaicollection:0.5>, ((white_hair)), (long_hair, hairband,  brown_eyes, smile, headband, blush, muneate, 1girl, japanese_clothes, looking_at_viewer, hakama, hakama_skirt, red_hakama, red_headband, skirt, hakama_short_skirt, tasuki),";
// 瑞鳳(艦これ)
// $prompt = " <lora:zuihou_kantaicollection:0.5>, ((brown_hair)), (long_hair, brown_eyes, ponytail, headband, hachimaki, high_ponytail, smile, blush, 1girl, bow_\(weapon\), gloves, hair_ribbon, japanese_clothes, looking_at_viewer, muneate, partially_fingerless_gloves, ribbon, yugake),";
// アトランタ(艦これ)
// $prompt = " <lora:atlanta_kantaicollection:0.5>, ((brown_hair)), (long_hair, two_side_up, grey_eyes, jewelry, breasts, earrings, star_earrings, large_breasts, hat, blush, black_headwear, garrison_cap, single_earring, suspenders, hair_ornament, anchor_hair_ornament, black_skirt, dress_shirt, gloves, high-waist_skirt, long_sleeves, looking_at_viewer, partially_fingerless_gloves, shirt, skirt, suspender_skirt, white_gloves, white_shirt, cowboy_shot, garter_straps, blue_eyes, thigh_strap),";
// 鈴谷(艦これ)
// $prompt = " <lora:suzuya_kantaicollection:0.5>, ((aqua_hair)), (long_hair, hair_ornament, hairclip, blush, breasts, smile, aqua_eyes, green_eyes, hair_between_eyes, large_breasts, green_hair, 1girl, blazer, bowtie, brown_jacket, cardigan, jacket, school_uniform, red_bowtie),";
// 高雄(艦これ)
// $prompt = " <lora:takao_kantaicollection:0.5>, ((black_hair)), (short_hair, red_eyes, breasts, blue_hat, large_breasts, blue_beret, military, blush, blue_headwear, military_uniform, skirt, uniform, black_gloves, garter_straps, gloves, ascot, black_thighhighs, thighhighs, blue_skirt, blue_jacket, jacket, miniskirt, long_sleeves),";
// 愛宕(艦これ)
// $prompt = " <lora:atago_kantaicollection:0.5>, ((blonde_hair)), (long_hair, hat, breasts, blush, large_breasts, smile, beret, open_mouth, military, green_eyes, blue_eyes, black_gloves, gloves, military_uniform, uniform, blue_headwear, pantyhose),";
// 天龍(艦これ)
// $prompt = " <lora:tenryuu_kantaicollection:0.5>, ((purple_hair)), (eyepatch, short_hair,  yellow_eyes, headgear, breasts, necktie, large_breasts, smile, blush, fingerless_gloves, gloves, looking_at_viewer, school_uniform, checkered_necktie, partially_fingerless_gloves, mini skirt),";
// 龍田(艦これ)
// $prompt = " <lora:tatsuta_kantaicollection:0.5>, ((purple_hair)), (purple_eyes, short_hair, mechanical_halo, halo, smile, breasts, large_breasts, black_gloves, gloves, long_sleeves, neck_ribbon, red_ribbon, ribbon, dress, parted_lips, polearm, hair_intakes),";
// 浜風(艦これ)
// $prompt = " <lora:hamakaze_kantaicollection:0.5>, ((grey_hair)), (blue_eyes, short_hair, hairclip, hair_ornament, hair_over_one_eye, breasts, large_breasts, blush, serafuku, gloves, looking_at_viewer, school_uniform, short_sleeves, mini skirt, white_gloves, pantyhose, pleated_skirt, smile),";
// 春風(艦これ)
// $prompt = " <lora:harukaze_kantaicollection:0.5>, ((brown_hair)), (drill_hair, twin_drills, red_eyes, smile, breasts, hakama, hakama_skirt, japanese_clothes, kimono, meiji_schoolgirl_uniform, pink_kimono, red_hakama, skirt),";
// 大鯨(艦これ)
// $prompt = " <lora:taigei_kantaicollection:0.5>, ((purple_hair)), (ahoge, long_hair, red_eyes, twintails, low_twintails, blush, hair_flaps, smile, breasts, serafuku, large_breasts, jewelry, magatama, necklace, school_uniform),";
// 羽黒(艦これ)
// $prompt = " <lora:haguro_kantaicollection:0.5>, ((black_hair)), (short_hair, hair_ornament, brown_eyes, blush, open_mouth, breasts, gloves, uniform, white_gloves, black_skirt, military, military_uniform, pantyhose, skirt, white_pantyhose, pencil_skirt, long_sleeves),";
// 涼月(艦これ)
// $prompt = " <lora:suzutsuki_kantaicollection:0.5>, ((white_hair)), (long_hair, one_side_up, grey_hair, headband, hachimaki, hair_between_eyes, breasts, grey_eyes, black_headband, blue_eyes, clothes_writing, corset, grey_jacket, jacket, pleated_skirt, sailor_collar, school_uniform, serafuku, skirt, white_bodysuit, white_gloves, white_skirt, black_sailor_collar, gloves, necktie, white_necktie, anchor_symbol, jacket_on_shoulders, miniskirt),";
// 秋月(艦これ)
// $prompt = " <lora:akizuki_kantaicollection:0.5>, ((black_hair)), (ponytail, headband, long_hair, hachimaki, blush, serafuku, blue_eyes, ahoge, breasts, black_headband, black_sailor_collar, clothes_writing, corset, neckerchief, sailor_collar, school_uniform, skirt, yellow_neckerchief, gloves, pleated_skirt, cowboy_shot, white_gloves),";
// 浦風(艦これ)
// $prompt = " <lora:urakaze_kantaicollection:0.5>, ((blue_hair)), (hair_bun, double_bun, blue_eyes, white_headwear, hat, smile, breasts, sailor_hat, serafuku, long_hair, blush, large_breasts, elbow_gloves, gloves, neckerchief, school_uniform, sleeves_rolled_up, white_gloves, yellow_neckerchief, pleated_skirt, sailor_collar, mini skirt),";
// 磯風(艦これ)
// $prompt = " <lora:isokaze_kantaicollection:0.5>, ((black_hair)), (long_hair, red_eyes, ribbon, hair_ribbon, serafuku, tress_ribbon, smile, blush, gloves, school_uniform, white_gloves, long_sleeves, looking_at_viewer, neckerchief, sailor_collar, yellow_neckerchief),";
// 阿武隈(艦これ)
// $prompt = " <lora:abukuma_kantaicollection:0.5>, ((blonde_hair)), (long_hair, blue_eyes, hair_bun, double_bun, hair_rings, twintails, serafuku, hair_between_eyes, black_gloves, black_jacket, gloves, grey_sailor_collar, grey_skirt, jacket, neck_ribbon, partially_fingerless_gloves, pleated_skirt, red_ribbon, ribbon, sailor_collar, school_uniform, short_sleeves, skirt),";
// 響(艦これ)
// $prompt = " <lora:hibiki_kantaicollection:0.5>, ((white_hair)), (long_hair, blue_eyes, blush, hair_between_eyes, serafuku, grey_hair, hat, anchor_symbol, black_headwear, black_sailor_collar, black_skirt, flat_cap, long_sleeves, neckerchief, pleated_skirt, red_neckerchief, sailor_collar, school_uniform, skirt, black_thighhighs),";
// 阿賀野(艦これ)
// $prompt = " {agano_kantaicollection:1.15}, black_hair, long_hair, breasts, green_eyes, large_breasts, blush, smile, sailor_collar, school_uniform, serafuku, sleeveless, black_sailor_collar, necktie, shirt, gloves, sleeveless_shirt, white_gloves, skirt, black_necktie, pleated_skirt, red_skirt, anchor_symbol, midriff, cleavage, navel,";
// 照月(艦これ)
// $prompt = " <lora:teruzuki_kantaicollection:0.5>, ((brown_hair)), (long_hair, braid, twin_braids, headband, light_brown_hair, hair_ornament, propeller_hair_ornament, blue_eyes, breasts, blush, open_mouth, hachimaki, serafuku, grey_eyes, smile, hairband, black_sailor_collar, black_skirt, gloves, neckerchief, sailor_collar, school_uniform, skirt, yellow_neckerchief, corset, multicolored_gloves, looking_at_viewer, pleated_skirt, white_gloves),";
// 熊野(艦これ)
// $prompt = " <lora:kumano_kantaicollection:0.5>, ((brown_hair)), (long_hair, ponytail, blue_eyes, smile, blush, open_mouth, hair_ornament, blazer, jacket, looking_at_viewer, school_uniform, skirt, ascot, brown_skirt, brown_thighhighs, long_sleeves, pleated_skirt, sitting, thighhighs, shirt),";
// アークロイヤル(艦これ)
// $prompt = " <lora:ark_royal_kantaicollection:0.5>, ((red_hair)), (short_hair, bob_cut, bangs, blue_eyes, hairband, tiara, blunt_bangs, breasts, ribbon, red_ribbon, belt, cleavage_cutout, clothing_cutout, corset, gloves, long_sleeves, looking_at_viewer, pantyhose, shorts, small_breasts, white_pantyhose, white_shorts, fingerless_gloves, brown_gloves),";
// あきつ丸(艦これ)
// $prompt = " <lora:akitsu_maru_kantaicollection:0.5>, ((black_hair)), (short_hair, hat, peaked_cap, black_eyes, breasts, military, large_breasts, blush, black_headwear, military_uniform, uniform, military_hat, smile, pleated_skirt, skirt, thighhighs, uniform, white_gloves, zettai_ryouiki, black_thighhighs),";
// 利根(艦これ)
// $prompt = " <lora:tone_kantaicollection:0.5>, ((brown_hair)), (long_hair, twintails, ribbon, hair_ribbon, white_ribbon, brown_eyes, hair_between_eyes, blush, smile, arm_rest, black_footwear, elbow_gloves, gloves, single_elbow_glove, single_thighhigh, thighhighs, bangs, meme, black_gloves, boots, panties, single_glove, underwear, white_panties, skirt, military),";
// 山城(艦これ)
// $prompt = " <lora:yamashiro_kantaicollection:0.5>, ((black_hair)), (red_eyes, short_hair, hair_ornament, nontraditional_miko, breasts, blush, large_breasts, 1girl, bare_shoulders, detached_sleeves, japanese_clothes, looking_at_viewer, skirt, japanese_clothes),";
// 初月(艦これ)
// $prompt = " <lora:hatsuzuki_kantaicollection:0.5>, ((brown_hair)), (short_hair, hair_flaps, headband, hairband, bodysuit, serafuku, hachimaki, blush, yellow_eyes, breasts, black_hair, brown_eyes, black_skirt, gloves, neckerchief, pleated_skirt, school_uniform, short_sleeves, skirt, black_gloves, corset, sailor_collar),";
// 摩耶(艦これ)
// $prompt = " <lora:maya_kantaicollection:0.5>, ((brown_hair)), (short_hair, hair_ornament, blue_eyes, breasts, hairclip, large_breasts, blush, hat, headgear, cleavage, beret, black_gloves, gloves, hat_ribbon, looking_at_viewer, midriff, pleated_skirt, school_uniform, serafuku, skirt, sleeveless, grin, navel, smile, mini_hat, white_skirt),";
// コロラド(艦これ)
// $prompt = " <lora:colorado_kantaicollection:0.5>, ((blonde_hair)), (short_hair, braid, blue_eyes, side_braids, breasts, large_breasts, hat, headgear, garrison_cap, grey_headwear, necktie, blue_necktie, sleeveless, open_mouth, blush, capelet, bamboo, dress, elbow_gloves, gloves, grey_dress, shirt, sideboob, tanabata, white_shirt, pleated_dress, black_gloves, pantyhose),";
// ウォースパイト(艦これ)
// $prompt = " <lora:warspite_kantaicollection:0.5>, ((blonde_hair)), (long_hair, blue_eyes, braid, french_braid, hairband, crown, mini_crown, breasts, hair_between_eyes, smile, large_breasts, 1girl, dress, jewelry, necklace, off-shoulder_dress, off_shoulder, red_ribbon, ribbon, upper_body, white_dress, cleavage, long_sleeves),";
// 鹿島(艦これ)
// $prompt = " <lora:kashima_kantaicollection:0.5>, ((grey_hair)), (twintails, wavy_hair, blue_eyes, breasts, blush, long_hair, smile, hat, large_breasts, beret, epaulettes, looking_at_viewer, military, military_uniform, skirt, uniform, gloves, pleated_skirt, miniskirt, white_gloves, grey_eyes),";
// 鹿島(艦これ) 猫ショーツ
// $prompt = " <lora:kashima_kantaicollection:0.5>, ((grey_hair)), (twintails, wavy_hair, blue_eyes, breasts, blush, long_hair, smile, hat, large_breasts, beret, cat_cutout, cat_lingerie, meme_attire, bra, underwear, bell, cleavage, clothing_cutout, jingle_bell, neck_bell, choker, cleavage_cutout, animal_ears, black_bra, cat_ears, panties, black_panties, side-tie_panties, underwear_only, cat_ear_panties, collarbone),";
// 鹿島(艦これ) バニーガール
// $prompt = " <lora:kashima_kantaicollection:0.5>, ((grey_hair)), (wavy_hair, twintails, blue_eyes, breasts, blush, long_hair, smile, hat, large_breasts, beret, animal_ears, detached_collar, playboy_bunny, rabbit_ears, fake_animal_ears, wrist_cuffs, black_pantyhose, bowtie, pantyhose, rabbit_tail, tail),";
// 鹿島(艦これ) サンタ服
// $prompt = " <lora:kashima_kantaicollection:0.5>, ((grey_hair, santa_costume)), (twintails, wavy_hair, blue_eyes, breasts, blush, long_hair, smile, hat, large_breasts, beret, bell, christmas, looking_at_viewer, hair_ornament, capelet, santa_hat, hair_bell, gloves),";
// サラトガ(艦これ)
// $prompt = " <lora:saratoga_kantaicollection:0.5>, ((red hair,brown_hair)), (long_hair, ponytail, side_ponytail, hair_between_eyes, blue_eyes, breasts, sidelocks, large_breasts, smile, pocket, breast_pocket, smokestack, anchor, dress, fingerless_gloves, gloves, smokestack_hair_ornament, white_dress, black_gloves, hair_ornament),";
// リベッチオ(艦これ)
// $prompt = " <lora:libeccio_kantaicollection:0.5>, ((brown_hair)), (long_hair, twintails, dark_skin, dark-skinned_female, brown_eyes, ribbon, hair_ribbon, smile, fang, blush, sleeveless, dress, hair_between_eyes, neckerchief, sailor_dress, sleeveless_dress, armpits, sailor_collar, striped, white_dress, white_sailor_collar, bangs, hat, mini_hat, bare_shoulders),";
// 神通(艦これ)
// $prompt = " <lora:jintsuu_kantaicollection:0.5>, ((brown_hair)), (long_hair, brown_eyes, hair_intakes, half_updo, headband, serafuku, detached_sleeves, elbow_gloves, forehead_protector, gloves, hachimaki, sailor_collar, school_uniform, neckerchief, double-breasted, sarashi, buttons, white_sailor_collar),";
// 睦月(艦これ)
// $prompt = " <lora:mutsuki_kantaicollection:0.5>, ((brown_hair, red_hair)), (short_hair, serafuku, gradient_hair, multicolored_hair, smile, brown_eyes, crescent, crescent_pin, red_eyes, black_pantyhose, blue_jacket, green_sailor_collar, green_skirt, jacket, neckerchief, pantyhose, pleated_skirt, red_neckerchief, sailor_collar, school_uniform, skirt),";
// 雷(艦これ)
// $prompt = " <lora:ikazuchi_kantaicollection:0.5>, ((brown_hair)), (short_hair, hairclip, hair_ornament, brown_eyes, serafuku, fang, smile, blush, neckerchief, red_neckerchief, sailor_collar, school_uniform, black_sailor_collar, anchor_symbol, long_sleeves, skirt),";
// 木曽(艦これ)
// $prompt = " <lora:kiso_kantaicollection:0.5>, ((green_hair)), (eyepatch, green_eyes, short_hair, serafuku, hat, cape, smile, heterochromia, no_eyepatch, school_uniform, sailor_collar, yellow_eyes, green_sailor_collar, neckerchief, red_neckerchief, dated),";
// 春雨(艦これ)
// $prompt = " <lora:harusame_kantaicollection:0.5>, ((pink_hair)), (side_ponytail, long_hair, pink_eyes, ribbon, hair_ornament, hat, beret, serafuku, red_eyes, flower, hair_flower, smile, hair_ribbon, gloves, school_uniform, skirt, black_gloves, black_serafuku, neckerchief),";
// 鳳翔(艦これ)
// $prompt = " <lora:houshou_kantaicollection:0.5>, ((black_hair)), (long_hair, ponytail, smile, tasuki, blush, blue_eyes, hakama, hakama_skirt, japanese_clothes, kimono, skirt, gloves, partially_fingerless_gloves, quiver, yugake, flight_deck, single_glove, pink_kimono),";
// ザラ(艦これ)
// $prompt = " <lora:zara_kantaicollection:0.5>, ((blonde_hair)), (long_hair, braid, wavy_hair, french_braid, breasts, hat, brown_eyes, mini_hat, large_breasts, blush, hair_between_eyes, bare_shoulders, purple_eyes, smile, ascot, shirt, miniskirt, skirt),";
// 足柄(艦これ)
// $prompt = " <lora:ashigara_kantaicollection:0.5>, ((brown_hair)), (long_hair, brown_eyes, hairband, breasts, smile, wavy_hair, blush, large_breasts, hair_between_eyes, gloves, military, pointing, skirt, uniform, white_gloves, fang, military_uniform, black_skirt, pantyhose),";
// 霧島(艦これ)
// $prompt = " <lora:kirishima_kantaicollection:0.5>, ((black_hair)), (short_hair, glasses, hairband, nontraditional_miko, green-framed_eyewear, headgear, smile, breasts, adjusting_eyewear, bare_shoulders, boots, detached_sleeves, japanese_clothes, pantyhose, ribbon_trim, skirt, thigh_boots, thighhighs, ribbon-trimmed_sleeves),";
// 葛城(艦これ)
// $prompt = " <lora:katsuragi_kantaicollection:0.5>, ((black_hair)), (long_hair, ribbon, hair_ribbon, blue_eyes, ponytail, white_ribbon, smile, elbow_gloves, fingerless_gloves, gloves, midriff, skirt, asymmetrical_gloves, black_thighhighs, japanese_clothes, navel, thighhighs, uneven_gloves, pleated_skirt, armor),";
// 由良(艦これ)
// $prompt = " <lora:yura_kantaicollection:0.5>, ((pink_hair)), (long_hair, ribbon, very_long_hair, ponytail, hair_ribbon, hair_flaps, smile, yellow_eyes, brown_eyes, black_jacket, grey_sailor_collar, grey_skirt, jacket, neck_ribbon, pleated_skirt, red_ribbon, sailor_collar, school_uniform, serafuku, short_sleeves, skirt, black_gloves, gloves, partially_fingerless_gloves),";
// 択捉(艦これ)
// $prompt = " <lora:etorofu_kantaicollection:0.5>, ((red_hair, multicolored_hair)), (braid, bob_cut, purple_eyes, short_hair, gradient_hair, white_headwear, sailor_hat, side_braid, serafuku, ribbon, crop_top, elbow_gloves, gloves, hairband, neckerchief, sailor_collar, white_gloves, black_hairband, blue_sailor_collar, black_panties, blue_skirt, highleg, highleg_panties, panties, pleated_skirt, school_uniform, skirt, sleeveless, microskirt, side_braids),";
// 香取(艦これ)
// $prompt = " <lora:katori_kantaicollection:0.5>, ((light_brown_hair, brown_hair)), (glasses, green_eyes, folded_ponytail, epaulettes,  military, blush, necktie, bangs, buttons, double-breasted, gloves, military_uniform, pantyhose, shirt, uniform, white_gloves, collared_shirt, jacket, parted_bangs, skirt, black_pantyhose, miniskirt, pointer,  pencil_skirt),";
// 間宮(艦これ)
// $prompt = " <lora:mamiya_kantaicollection:0.5>, ((brown_hair)), (long_hair, ribbon, hair_ornament, hairclip, hair_ribbon, ahoge, breasts, smile, blush, red_eyes, purple_eyes, apron, kappougi, shirt, pink_shirt, ponytail),";
// 初霜(艦これ)
// $prompt = " <lora:hatsushimo_kantaicollection:0.5>, ((black_hair)), (long_hair, headband, red_eyes, blush, blazer, blue_headband, hair_between_eyes, low-tied_long_hair, brown_eyes, black_jacket, black_skirt, jacket, pleated_skirt, school_uniform, skirt, collared_shirt, shirt, white_shirt, smile),";
// 水無月(艦これ)
// $prompt = " <lora:minazuki_kantaicollection:0.5>, ((blue_hair)), (blue_eyes, asymmetrical_hair, short_hair_with_long_locks, smile, serafuku, blush, crescent, fang, necktie, blue_necktie, crescent_pin, blouse, blue_shirt, school_uniform, frilled_shorts, shirt, shorts, long_sleeves, blue_shorts, frills),";
// 日進(艦これ)
// $prompt = " <lora:nisshin_kantaicollection:0.5>, ((black_hair)), (long_hair, brown_eyes, short_eyebrows, high_ponytail, thick_eyebrows, very_long_hair, multi-tied_hair, ribbon, red_ribbon, hair_tie, headgear, miko, smile, hair_ornament, alternate_costume, shirt, white_shirt, ascot, long_sleeves, collared_shirt, eating, skirt),";
// 初風(艦これ)
// $prompt = " <lora:hatsukaze_kantaicollection:0.5>, ((blue_hair)), (long_hair, blue_eyes, bangs, blunt_bangs, vest, blush, gloves, hime_cut, pleated_skirt, school_uniform, shirt, skirt, white_gloves, white_shirt, yellow_bowtie, black_skirt, black_vest, bowtie, dress_shirt, grey_skirt, grey_vest),";
// 祥鳳(艦これ)
// $prompt = " <lora:shouhou_kantaicollection:0.5>, ((black_hair)), (long_hair, brown_eyes, ahoge, smile, blush, bandeau, black_skirt, cleavage, hakama, hakama_short_skirt, hakama_skirt, japanese_clothes, kimono, pleated_skirt, skirt, black_hakama, collarbone, low-tied_long_hair, white_kimono),";
// 龍驤(艦これ)
// $prompt = " <lora:ryuujou_kantaicollection:0.5>, ((brown_hair)), (twintails, brown_eyes, magatama, visor_cap, kariginu, long_hair, smile, japanese_clothes, onmyouji, scroll, shikigami, skirt, grin, pleated_skirt),";
// 夕張(艦これ)
// $prompt = " <lora:yuubari_kantaicollection:0.5>, ((green_hair)), (ponytail, bangs, brown_eyes, hair_bow, serafuku, smile, black_shirt, hair_ribbon, midriff, navel, neckerchief, ribbon, sailor_collar, school_uniform, shirt, skirt, grey_sailor_collar, pleated_skirt, green_skirt, orange_neckerchief, belt, grey_skirt, long_hair, white_ribbon, crop_top, necktie, pantyhose, short_sleeves),";
// 曙(艦これ)
// $prompt = " <lora:akebono_kantaicollection:0.5>, ((purple_hair)), (long_hair, hair_ornament, side_ponytail, purple_eyes, hair_flower, hair_bell, bell, jingle_bell, serafuku, blush, very_long_hair, ahoge, animal_ears, cat_ears, collar, fang, heart-shaped_lock, kemonomimi_mode, school_uniform, pleated_skirt, skirt),";
// 大鳳(艦これ)
// $prompt = " <lora:taihou_kantaicollection:0.5>, ((brown_hair)), (brown_eyes, short_hair, headgear, headband, blush, hair_between_eyes, skirt, bike_shorts, pleated_skirt, crossbow, thighhighs, smile),";
// 五月雨(艦これ)
// $prompt = " <lora:samidare_kantaicollection:0.5>, ((blue_hair)), (long_hair, blue_eyes, very_long_hair, bangs, serafuku, swept_bangs, sleeveless, gradient_hair, blush, black_gloves, black_neckerchief, black_sailor_collar, cowboy_shot, elbow_gloves, gloves, neckerchief, sailor_collar, school_uniform, shirt, skirt, sleeveless_shirt, white_skirt, black_thighhighs, thighhighs, white_serafuku),";
// 神風(艦これ)
// $prompt = " <lora:kamikaze_kantaicollection:0.5>, ((purple_hair)), (long_hair, hair_bow, purple_eyes, yellow_bow, hakama, pink_hakama, smile, tasuki, apron, frills, hair_flower, hair_ornament, japanese_clothes, kimono, maid_headdress, meiji_schoolgirl_uniform, red_kimono, wa_maid, white_apron, frilled_apron, hakama_skirt, skirt, tube, gift, maid_apron), ";
// 如月(艦これ)
// $prompt = " <lora:kisaragi_kantaicollection:0.5>, ((brown_hair)), (long_hair, hair_ornament, purple_eyes, smile, serafuku, black_jacket, crescent_pin, green_sailor_collar, green_skirt, jacket, neckerchief, pleated_skirt, red_neckerchief, sailor_collar, school_uniform, skirt),";
// 矢矧(艦これ)
// $prompt = " <lora:yahagi_kantaicollection:0.5>, ((black_hair)), (long_hair, ponytail, red_eyes, sidelocks, hair_between_eyes, anchor_symbol, gloves, pleated_skirt, red_skirt, sailor_collar, school_uniform, serafuku, shirt, skirt, sleeveless, sleeveless_shirt, smile, white_gloves, black_sailor_collar, necktie),";
// 望月(艦これ)
// $prompt = " <lora:mochizuki_kantaicollection:0.5>, ((brown_hair)), (long_hair, glasses, brown_eyes, red-framed_eyewear, semi-rimless_eyewear, serafuku, crescent, black_serafuku, blush, under-rim_eyewear, black_shirt, school_uniform, white_necktie, black_sailor_collar, black_skirt, crescent_pin, long_sleeves, sailor_collar, shirt, skirt, hair_between_eyes, necktie, pleated_skirt, bangs, neckerchief, open_mouth, parted_lips, very_long_hair),";
// 那珂(艦これ)
// $prompt = " <lora:naka_kantaicollection:0.5>, ((brown_hair)), (double_bun, hair_bun, short_hair, antenna_hair, brown_eyes, smile, serafuku, open_mouth, one_eye_closed, gloves, school_uniform, white_gloves, microphone),";
// 時津風(艦これ)
// $prompt = " <lora:tokitsukaze_kantaicollection:0.5>, ((black_hair)), (short_hair_with_long_locks, hat, mini_hat, multicolored_hair, short_hair, gradient_hair, brown_eyes, smile, blush, sidelocks, hairband, anchor, crossover, grey_hair, tongue, bangs, bound, anchor_symbol, forked_tongue, blue_sailor_collar, hair_between_eyes, sailor_collar),";
// 弥生(艦これ)
// $prompt = " <lora:yayoi_kantaicollection:0.5>, ((purple_hair)), (short_hair_with_long_locks, crescent, crescent_hair_ornament, hair_ornament, blue_eyes, blush, serafuku, short_hair, long_hair, black_sailor_collar, sailor_collar, school_uniform, skirt, black_skirt, long_sleeves, pleated_skirt, black_serafuku, shirt, navel),";
// 扶桑(艦これ)
// $prompt = " <lora:fusou_kantaicollection:0.5>, ((black_hair)), (long_hair, hair_ornament, red_eyes, nontraditional_miko, breasts, large_breasts, smile, detached_sleeves, japanese_clothes, looking_at_viewer, red_skirt, skirt, headgear),";
// 比叡(艦これ)
// $prompt = " <lora:hiei_kantaicollection:0.5>, ((brown_hair)), (short_hair, hairband, nontraditional_miko, smile, blue_eyes, flipped_hair, detached_sleeves, japanese_clothes, ribbon-trimmed_sleeves, ribbon_trim, skirt, plaid, thighhighs, blush, closed_eyes, one_eye_closed, plaid_skirt),";
// 蒼龍(艦これ)
// $prompt = " <lora:souryuu_kantaicollection:0.5>, ((blue_hair)), (twintails, ribbon, blue_eyes, hair_ribbon, breasts, blush, large_breasts, smile, short_hair, japanese_clothes, kimono, skirt, hakama, hakama_skirt, wide_sleeves, hakama_short_skirt),";
// 大井(艦これ)
// $prompt = " <lora:ooi_kantaicollection:0.5>, ((brown_hair)), (long_hair, brown_eyes, blush, serafuku, breasts, large_breasts, school_uniform, smile),";
// 大淀(艦これ)
// $prompt = " <lora:ooyodo_kantaicollection:-.6>, ((black_hair)), (long_hair, glasses, hairband, semi-rimless_eyewear, under-rim_eyewear, blue_eyes, green_eyes, blush, long_sleeves, looking_at_viewer, necktie, pleated_skirt, sailor_collar, school_uniform, serafuku, skirt, blue_skirt, hip_vent, red_necktie, thighhighs, blue_sailor_collar, white_hairband),";
// 漣(艦これ)
// $prompt = " <lora:sazanami_kantaicollection:0.5>, ((pink_hair)), (hair_bobbles, hair_ornament, twintails, short_hair, pink_eyes, serafuku, smile, animal_on_head, badge, on_head, rabbit, rabbit_on_head, school_uniform, animal, blue_skirt, pleated_skirt, sailor_collar, skirt),";
// 海風(艦これ)
// $prompt = " <lora:umikaze_kantaicollection:0.5>, ((grey_hair)), (long_hair, blue_eyes, braid, single_braid, bangs, very_long_hair, parted_bangs, breasts, blush, serafuku, sleeveless, smile, white_hair, hair_tie, hair_flaps, black_gloves, blue_neckerchief, collared_shirt, elbow_gloves, gloves, neckerchief, school_uniform, shirt, sleeveless_shirt, black_skirt, skirt, pleated_skirt, bare_shoulders),";
// 海風(艦これ)セーター
// $prompt = " <lora:umikaze_kantaicollection:0.5>, ((white_hair, grey_hair)), (long_hair, blue_eyes, braid, single_braid, bangs, very_long_hair, parted_bangs, breasts, blush, serafuku, sleeveless, smile, hair_tie, hair_flaps, black_skirt, blue_sweater, skirt, suspenders, sweater, suspender_skirt, alternate_costume, long_sleeves, ribbed_sweater, official_alternate_costume),";
// 白露(艦これ)
// $prompt = " <lora:shiratsuyu_kantaicollection:0.5>, ((brown_hair)), (brown_eyes, hairband, red_hairband, smile, hair_flaps, long_hair, blush, serafuku, short_hair, hair_between_eyes, black_serafuku, black_skirt, neckerchief, pleated_skirt, red_neckerchief, sailor_collar, school_uniform, short_sleeves, skirt, black_thighhighs, collarbone, thighhighs),";
// 鳥海(艦これ)
// $prompt = " <lora:choukai_kantaicollection:0.5>, ((black_hair)), (glasses, long_hair, red_eyes, rimless_eyewear, blush, hat, smile, large_breasts, hair_ornament, gloves, looking_at_viewer, school_uniform, black_gloves, bare_shoulders),";
// 古鷹(艦これ)
// $prompt = " <lora:furutaka_kantaicollection:0.5>, ((brown_hair)), (short_hair, yellow_eyes, heterochromia, hair_ornament, hairclip, smile, breasts, bodysuit, school_uniform, serafuku, skirt, chain, neckerchief, pleated_skirt, sailor_collar),";
// 明石(艦これ)
// $prompt = " <lora:akashi_kantaicollection:0.5>, ((pink_hair)), (long_hair, hair_ribbon, ribbon, green_eyes, tress_ribbon, black_hairband, black_panties, blue_skirt, cosplay, crop_top, elbow_gloves, gloves, hairband, highleg, highleg_panties, microskirt, pleated_skirt, sailor_collar, school_uniform, serafuku, shimakaze_\(kancolle\)_\(cosplay\), skirt, underwear, white_gloves, blue_sailor_collar, miniskirt, black_neckerchief, hair_between_eyes, navel, neckerchief, striped_thighhighs, thighhighs),";
// ゴトランド(艦これ)
// $prompt = " <lora:gotland_kantaicollection:0.5>, ((blue_hair)), (long_hair, blue_eyes, hair_between_eyes, smile, hair_bun, blush, single_hair_bun, blue_skirt, collared_shirt, gloves, half_gloves, long_sleeves, military, military_uniform, shirt, skirt, thighhighs, uniform, white_gloves, black_necktie, blue_sailor_collar, necktie, sailor_collar, thigh_strap, blue_thighhighs, rudder_footwear),";
// ゴトランド(艦これ)レースクイーン
// $prompt = " <lora:gotland_kantaicollection:0.5>, ((blue_hair)), (long_hair, blue_eyes, hair_between_eyes, smile, hair_bun, blush, breasts, single_hair_bun, blue_skirt, cleavage, cropped_jacket, headphones, jacket, midriff, navel, race_queen, skirt, white_jacket, bandeau, headset, looking_at_viewer, black_gloves, gloves, official_alternate_costume, ponytail, open_mouth),";
// ジャーヴィス(艦これ)
// $prompt = " <lora:jervis_kantaicollection:0.5>, ((blonde_hair)), (long_hair, blue_eyes, hat, white_headwear, sailor_hat, smile, blue_sailor_collar, dress, gloves, sailor_collar, sailor_dress, short_sleeves, white_dress, white_gloves),";
// 秋津洲(艦これ)
// $prompt = " <lora:akitsushima_kantaicollection:0.5>, ((Gray with a little purple hair)), (long_hair, side_ponytail, purple_eyes, ahoge, sidelocks, jewelry, earrings, breasts, blush, smile, ribbon, hair_ribbon, hair_ornament, gloves, light_green_miniskirt, light_green_skirt, light_green_uniform, mini_hat, white_gloves, anchor, light_green_military_uniform, light_green_pleated_skirt, thighhighs, zettai_ryouiki),";
// 秋津洲(艦これ) グレーカラー
// $prompt = " <lora:akitsushima_kantaicollection:0.5>, ((Gray with a little purple hair)), (long_hair, side_ponytail, purple_eyes, ahoge, sidelocks, jewelry, earrings, breasts, blush, smile, ribbon, hair_ribbon, hair_ornament, gloves, miniskirt, skirt, uniform, mini_hat, white_gloves, anchor, military_uniform, pleated_skirt, thighhighs, zettai_ryouiki),";
// 飛龍(艦これ)
// $prompt = " <lora:hiryuu_kantaicollection:0.5>, ((brown_hair)), (short_hair, brown_eyes, one_side_up, smile, breasts, blush, large_breasts, green_hakama, hakama, hakama_short_skirt, hakama_skirt, japanese_clothes, kimono, skirt, orange_kimono, wide_sleeves, green_skirt, yellow_kimono),";
// 清霜(艦これ)
// $prompt = " <lora:kiyoshimo_kantaicollection:0.5>, ((grey_hair)), (long_hair, ahoge, twintails, hair_between_eyes, grey_eyes, low_twintails, smile, very_long_hair, bowtie, blush, open_mouth, dress, long_sleeves, school_uniform, shirt, sleeveless_dress, white_shirt, sleeveless),";
// 萩風(艦これ)
// $prompt = " <lora:hagikaze_kantaicollection:0.5>, ((purple_hair)), (long_hair, one_side_up, ahoge, brown_eyes, blush, ribbon, red_ribbon, vest, neck_ribbon, smile, black_vest, blouse, black_skirt, gloves, shirt, short_sleeves, skirt, white_gloves, white_shirt, pleated_skirt, school_uniform),";
// 五十鈴(艦これ)
// $prompt = " <lora:isuzu_kantaicollection:0.5>, ((black_hair, green_hair)), (long_hair, twintails, ribbon, breasts, hair_ribbon, large_breasts, blue_eyes, blush, green_eyes, detached_sleeves, neckerchief, pleated_skirt, red_skirt, sailor_collar, school_uniform, serafuku, skirt, sleeveless, white_sailor_collar, thighhighs, white_thighhighs, brown_neckerchief, red_neckerchief),";
// 五十鈴(艦これ) ビキニ
// $prompt = " <lora:isuzu_kantaicollection:0.5>, ((black_hair, blue_hair)), (long_hair, twintails, ribbon, breasts, hair_ribbon, large_breasts, blue_eyes, blush, green_eyes, bikini, smile, swimsuit, cleavage, navel, black_bikini, hairband),";
// 青葉(艦これ)
// $prompt = " <lora:aoba_kantaicollection:0.5>, ((purple_hair, pink_hair)), (ponytail, scrunchie, blue_eyes, blue_scrunchie, serafuku, messy_hair, breasts, short_hair, hair_ornament, hair_scrunchie, alternate_costume, large_breasts, shirt, smile, hair_between_eyes, short_sleeves, white_shirt),";
// 満潮(艦これ)
// $prompt = " <lora:michishio_kantaicollection:0.5>, ((light_brown_hair)), (twintails, double_bun, hair_bun, short_twintails, brown_eyes, blush, yellow_eyes, shirt, short_sleeves, suspenders, white_shirt, grey_skirt, pleated_skirt, skirt, suspender_skirt, ascot, bowtie, green_bowtie, smile),";
// 夕雲(艦これ)
// $prompt = " <lora:yuugumo_kantaicollection:0.5>, ((green_hair)), (long_hair, blue_eyes, ahoge, braid, single_braid, very_long_hair, blush, smile, bowtie, breasts, blazer, jacket, school_uniform, aqua_bowtie, dress, halterneck, long_sleeves, purple_dress),";
// 速吸(艦これ)
// $prompt = " <lora:hayasui_kantaicollection:0.5>, black_hair, short_hair, grey_eyes, blush, smile, breasts, blue_eyes, gym_shirt, hetero, solo_focus, track_jacket, jacket, shirt, large_breasts, open_jacket, shirt_lift, skirt,";
    // 早霜(艦これ)
    // $prompt = " <lora:hayashimo_kantaicollection:0.5>, ((black_hair)), (long_hair, hair_over_one_eye, ribbon, hair_ribbon, very_long_hair, bowtie, brown_eyes, long_sleeves, school_uniform, shirt, white_shirt, dress),";
// 嵐(艦これ)
// $prompt = " <lora:arashi_kantaicollection:0.5>, ((red_hair)), (ahoge, messy_hair, blush, vest, breasts, black_skirt, black_vest, dress_shirt, gloves, neckerchief, pleated_skirt, school_uniform, shirt, short_sleeves, skirt, white_gloves, white_shirt, red_neckerchief, thighhighs, black_thighhighs, brown_eyes, blouse, smile),";
// 嵐 島風コス(艦これ)
// $prompt = " <lora:arashi_kantaicollection:0.5>, ((red_hair)), (ahoge, messy_hair, blush, vest, breasts, black_hairband, black_neckerchief, blue_sailor_collar, cosplay, hairband, medium_hair, neckerchief, sailor_collar, shimakaze_\(kancolle\)_\(cosplay\), white_gloves, black_panties, blue_skirt, crop_top, elbow_gloves, gloves, highleg, highleg_panties, panties, skirt, underwear, microskirt, pleated_skirt, red_eyes, striped),";
// 親潮(艦これ)
// $prompt = " <lora:oyashio_kantaicollection:0.5>, ((black_hair)), (long_hair, hair_ornament, hairclip, blush, vest, ribbon, black_vest, breasts, blue_ribbon, neck_ribbon, shirt, white_shirt, dress_shirt, green_eyes, collared_shirt),";
// 親潮(艦これ) セーター
// $prompt = " <lora:oyashio_kantaicollection:0.5>, ((black_hair)), (long_hair, hair_ornament, hairclip, blush, vest, ribbon, black_vest, breasts, blue_ribbon, neck_ribbon, dress, alternate_costume, black_dress, grey_eyes, sweater, white_sweater, bag, belt, smile),";
// 秋雲(艦これ)  島風コス
// $prompt = " <lora:akigumo_kantaicollection:0.5>, ((brown_hair)), (long_hair, ponytail, green_eyes, ribbon, hair_ribbon, breasts, black_neckerchief, black_panties, blue_skirt, cosplay, crop_top, elbow_gloves, gloves, highleg, highleg_panties, neckerchief, panties, pleated_skirt, sailor_collar, shimakaze_\(kancolle\)_\(cosplay\), skirt, underwear, white_gloves, blue_sailor_collar, navel, school_uniform, serafuku, microskirt, miniskirt, striped, striped_thighhighs, thighhighs),";
// 敷波(艦これ)
// $prompt = " <lora:shikinami_kantaicollection:0.5>, ((brown_hair)), (ponytail, brown_eyes, short_hair, hair_ribbon, ribbon, serafuku, blush, sailor_collar, school_uniform, skirt, short_sleeves, brown_skirt, pleated_skirt, socks, black_socks, brown_sailor_collar),";
// 衣笠(艦これ)
// $prompt = " <lora:kinugasa_kantaicollection:0.5>, ((grey_hair)), (green_eyes, antenna_hair, long_hair, breasts, smile, hair_tie, blush, necktie, one_side_up, school_uniform, serafuku, yellow_necktie, blue_skirt, short_sleeves, skirt, gloves, pleated_skirt),";
// 最上(艦これ)
// $prompt = " <lora:mogami_kantaicollection:0.5>, ((black_hair)), (short_hair, bangs, serafuku, green_eyes, smile, swept_bangs, brown_sailor_collar, neckerchief, sailor_collar, school_uniform, shirt, black_neckerchief, brown_shorts, long_sleeves, shorts, brown_shirt),";
// 能代(艦これ)
// $prompt = " <lora:noshiro_kantaicollection:0.5>, ((brown_hair)), (braid, long_hair, twin_braids, green_eyes, breasts, bangs, large_breasts, swept_bangs, blush, gloves, school_uniform, white_gloves, serafuku, cleavage, skirt),";
// 多摩(艦これ)
// $prompt = " <lora:tama_kantaicollection:0.5>, ((pink_hair)), (short_hair, red_eyes, serafuku, blush, purple_hair, hair_between_eyes, breasts, black_gloves, black_skirt, black_thighhighs, boots, gloves, hair_ornament, pleated_skirt, sailor_collar, school_uniform, short_sleeves, skirt, thigh_boots, thighhighs, shirt, animal_print, belt, black_sailor_collar, high_heels, medium_breasts),";
// 時雨(艦これ)
// $prompt = " <lora:shigure_kantaicollection:0.5>, ((brown_hair, black_hair)), (long_hair, blue_eyes, ahoge, hair_flaps, braid, single_braid, hair_ornament, blush, smile, hair_between_eyes, breasts, black_gloves, black_serafuku, fingerless_gloves, gloves, hair_over_shoulder, neckerchief, red_neckerchief, sailor_collar, school_uniform, serafuku, black_skirt, necktie, skirt, white_sailor_collar, pleated_skirt),";
// 峯雲(艦これ)
// $prompt = " <lora:minegumo_kantaicollection:0.5>, ((brown_hair, light_brown_hair)), (long_hair, twin_braids, braid, red_eyes, brown_eyes, blush, bowtie, red_bowtie, bangs, collared_shirt, plaid, shirt, short_sleeves, suspenders, white_shirt, arm_warmers, hair_between_eyes, plaid_bow, pleated_skirt, skirt, suspender_skirt, twintails, very_long_hair, green_skirt, grey_skirt, own_hands_together, palms_together, puffy_short_sleeves),";
// 峯雲(艦これ) 牛コス
// $prompt = " <lora:minegumo_kantaicollection:0.5>, ((light_brown_hair)), (long_hair, twin_braids, braid, red_eyes, breasts, brown_eyes, blush, bowtie, smile, red_bowtie, large_breasts, animal_print, bikini, cow_print, swimsuit, cleavage, animal_ears, cow_ears, cow_horns, horns, white_bikini, alternate_costume, bell, cowbell, navel, side-tie_bikini_bottom),";
// 川内(艦これ)
// $prompt = " <lora:sendai_kantaicollection:0.5>, ((black_hair, brown_hair)), (two_side_up, brown_eyes, short_hair, hair_ornament, bangs, smile, serafuku, blush, hair_between_eyes, elbow_gloves, gloves, pleated_skirt, scarf, school_uniform, single_thighhigh, skirt, thighhighs, white_scarf, buttons, double-breasted),";
// 叢雲(艦これ)
// $prompt = " <lora:murakumo_kantaicollection:0.5>, ((grey_hair)), (long_hair, hair_ribbon, ribbon, bangs, sidelocks, blunt_bangs, tress_ribbon, orange_eyes, necktie, blush, dress, gloves, sailor_dress, scarf, white_gloves, pink_scarf),";
// 武蔵(艦これ)
// $prompt = " <lora:musashi_kantaicollection:0.5>, ((white_hair, grey_hair)), (dark-skinned_female, dark_skin, glasses, long_hair, hair_between_eyes, breasts, large_breasts, twintails, brown_eyes, red_eyes, blush, semi-rimless_eyewear, black_nails, budget_sarashi, gloves, pointy_hair, sarashi, two_side_up, black_gloves, skirt, fingerless_gloves, miniskirt, navel, thighhighs, black_thighhighs, red_skirt, zettai_ryouiki),";
// 長門(艦これ)
// $prompt = " <lora:nagato_kantaicollection:0.5>, ((black_hair)), (long_hair, red_eyes, breasts, hair_between_eyes, large_breasts, smile, black_gloves, elbow_gloves, gloves, miniskirt, pleated_skirt, skirt, thighhighs, white_skirt, garter_straps, partially_fingerless_gloves, navel, red_thighhighs, fingerless_gloves, midriff, black_coat, coat, long_coat),";
// 長門(艦これ)　水着
// $prompt = " <lora:nagato_kantaicollection:0.5>, ((black_hair)), (long_hair, red_eyes, breasts, hair_between_eyes, large_breasts, smile, light smile, bikini, black_bikini),";
// 暁(艦これ)
// $prompt = " <lora:akatsuki_kantaicollection:0.5>, ((black_hair, purple_hair)), (long_hair, serafuku, hat, anchor_symbol, purple_eyes, flat_cap, blush, hair_between_eyes, alternate_costume, looking_at_viewer, black_headwear, shirt),";
// 朝潮(艦これ)
// $prompt = " <lora:asashio_kantaicollection:0.5>, ((black_hair)), (long_hair, blue_eyes, blush, smile, neck_ribbon, dress, long_sleeves, pinafore_dress, red_ribbon, ribbon, school_uniform, shirt, white_shirt, buttons, jacket, belt, black_pantyhose, pantyhose),";
// 球磨(艦これ)
// $prompt = " <lora:kuma_kantaicollection:0.5>, ((brown_hair)), (long_hair, ahoge, brown_eyes, huge_ahoge, blush, smile, open_mouth, serafuku, school_uniform),";
// 球磨(艦これ) メイド
// $prompt = " <lora:kuma_kantaicollection:0.5>, ((brown_hair)), (long_hair, ahoge, brown_eyes, huge_ahoge, blush, smile, open_mouth, serafuku, alternate_costume, apron, bangs, enmaided, frills, hair_ribbon, index_finger_raised, long_sleeves, maid, maid_headdress, ribbon, shirt, yellow_shirt, collared_shirt, very_long_hair, animal_ears, bear_ears, blurry, frilled_apron, maid_apron, pink_bow, pink_ribbon, white_apron),";
// 球磨(艦これ) サンタ
// $prompt = " <lora:kuma_kantaicollection:0.5>, ((brown_hair)), (long_hair, ahoge, brown_eyes, huge_ahoge, blush, smile, serafuku, christmas, fur_trim, hat, santa_costume, santa_hat, capelet, snowflakes, alternate_costume, gloves, red_capelet, red_gloves, merry_christmas, sparkle),";
// 卯月(艦これ)
// $prompt = " <lora:uzuki_kantaicollection:0.5>, ((pink_hair)), (hair_ornament, crescent, long_hair, crescent_hair_ornament, ahoge, red_eyes, ribbon, serafuku, hair_ribbon, blush, red_hair, rabbit_hair_ornament, very_long_hair, low-tied_long_hair, animal_ears, long_sleeves, pleated_skirt, school_uniform, skirt, pink_eyes),";
// 長波(艦これ)
// $prompt = " <lora:naganami_kantaicollection:0.5>, ((multicolored_hair, pink_hair, black_hair, two-tone_hair)), (long_hair, yellow_eyes, smile, fang, wavy_hair, ribbon, blush, breasts, hair_ribbon, alternate_costume, dress),";
// 長波(艦これ) 猫パーカー
// $prompt = " <lora:naganami_kantaicollection:0.5>, ((pink_hair, black_hair, multicolored_hair, two-tone_hair)), (long_hair, yellow_eyes, wavy_hair, ribbon, blush, breasts, hair_ribbon, animal_ears, animal_hood, black_hoodie, cat_hood, headphones, hood, hoodie, alternate_costume, cat_ears),";
// 長波(艦これ) 水着
// $prompt = " <lora:naganami_kantaicollection:0.5>, ((multicolored_hair, pink_hair, black_hair, two-tone_hair)), (long_hair, yellow_eyes, smile, fang, wavy_hair, ribbon, blush, breasts, hair_ribbon, bikini, cleavage, collarbone, large_breasts, swimsuit, alternate_costume, navel, string_bikini, side-tie_bikini_bottom, hat, jewelry, necklace, red_bikini),";
// 長波(艦これ) ハーフパンツ+半袖
// $prompt = " <lora:naganami_kantaicollection:0.5>, ((multicolored_hair, pink_hair, black_hair, two-tone_hair)), (long_hair, yellow_eyes, smile, fang, wavy_hair, ribbon, blush, breasts, hair_ribbon, hairband, jacket, shirt, white_hairband, white_shirt, alternate_costume, large_breasts, purple_eyes, shorts, yellow_jacket, open_clothes, collarbone, long_sleeves, see-through),";
// 北上(艦これ)
// $prompt = " <lora:kitakami_kantaicollection:0.5>, ((black_hair)), (long_hair, braid, bangs, single_braid, blunt_bangs, sidelocks, serafuku, purple_eyes, looking_at_viewer, school_uniform, blush, smile, hair_over_shoulder),";
// 皐月(艦これ)
// $prompt = " <lora:satsuki_kantaicollection:0.5>, ((blonde_hair)), (long_hair, twintails, yellow_eyes, low_twintails, serafuku, smile, crescent, crescent_pin, open_mouth, necktie),";
// 皐月(艦これ) 狐耳
// $prompt = " <lora:satsuki_kantaicollection:0.5>, ((blonde_hair)), (long_hair, twintails, yellow_eyes, low_twintails, serafuku, smile, crescent, crescent_pin, necktie, animal_ears, black_skirt, blue_jacket, fang, jacket, kemonomimi_mode, long_sleeves, neckerchief, sailor_collar, school_uniform, skirt, cat_ears, yellow_neckerchief, black_sailor_collar, black_thighhighs, paw_pose, pleated_skirt, thighhighs, fox_ears),";
// 皐月(艦これ) サンタ
// $prompt = " <lora:satsuki_kantaicollection:0.5>, ((blonde_hair)), (long_hair, twintails, yellow_eyes, low_twintails, serafuku, crescent, crescent_pin, necktie, alternate_costume, fur-trimmed_headwear, fur_trim, hat, santa_costume, santa_hat, capelet, christmas, dress, fur-trimmed_capelet, red_capelet, red_dress, red_headwear, fur-trimmed_dress, long_sleeves),";
// 不知火(艦これ)
// $prompt = " <lora:shiranui_kantaicollection:0.5>, ((pink_hair)), (short_hair, ponytail, blue_eyes, ribbon, vest, neck_ribbon, red_ribbon, hair_ornament, gloves, school_uniform, white_gloves, short_sleeves, skirt, pleated_skirt),";
// 陽炎(艦これ)
// $prompt = " <lora:kagerou_kantaicollection:0.5>, ((brown_hair)), (twintails, ribbon, long_hair, hair_ribbon, ahoge, purple_eyes, green_ribbon, vest, neck_ribbon, white_ribbon, yellow_ribbon, bike_shorts, black_gloves, black_vest, fingerless_gloves, gloves, pleated_skirt, school_uniform, shirt, short_sleeves, skirt, white_shirt, dress_shirt, grey_vest, shorts, shorts_under_skirt, grey_skirt, black_skirt),";
// 陽炎(艦これ)　バニースーツ
// $prompt = " <lora:kagerou_kantaicollection:0.5>, ((brown_hair)), (twintails, ribbon, long_hair, hair_ribbon, ahoge, purple_eyes, green_ribbon, vest, neck_ribbon, white_ribbon, yellow_ribbon, detached_collar, leotard, playboy_bunny, strapless_leotard, alternate_costume, strapless, animal_ears, black_leotard, bowtie, rabbit_ears, fake_animal_ears, breasts, pantyhose, wrist_cuffs),";
// 神威(艦これ)
// $prompt = " <lora:kamoi_kantaicollection:0.5>, ((white_hair)), (long_hair, headband, folded_ponytail, blue_eyes, sidelocks, breasts, thick_eyebrows, large_breasts, blush, hair_between_eyes, bandana, ainu_clothes, blue_headband),";
// 那智(艦これ)
// $prompt = " <lora:nachi_kantaicollection:0.5>, ((black_hair)), (long_hair, side_ponytail, brown_eyes, blush, hair_between_eyes, very_long_hair, breasts, gloves, uniform, white_gloves, pantyhose, pencil_skirt, skirt, white_pantyhose, black_skirt, military, military_uniform, long_sleeves, jacket),";
// ガンビア・ベイ(艦これ)
// $prompt = " <lora:gambier_bay_kantaicollection:0.5>, ((blonde_hair)), (long_hair, twintails, hairband, blue_eyes, breasts, large_breasts, hair_between_eyes, blush),";
// u_511(艦これ)
// $prompt = " <lora:u_511_kantaicollection:0.5>, ((blonde_hair)), (long_hair, blue_eyes, hat, garrison_cap, blush, military, cropped_jacket, military_uniform, puffy_sleeves, uniform, long_sleeves, puffy_long_sleeves),";
// マックスシュルツ
// $prompt = " <lora:z3_max_schultz_kantaicollection:0.5>, ((brown_hair)), (short_hair, brown_eyes, hat, sailor_hat, blush, clothes_writing, dress, sailor_dress, sailor_collar, turret),";

////////////////////////
// アズールレーン
////////////////////////

// 赤城(アズレン)
// $prompt = " <lora:akagi_azurlane:0.5>, ((brown_hair)), (animal_ears, long_hair, fox_ears, red_eyes, breasts, bangs, large_breasts, tail, fox_tail, multiple_tails, smile, cleavage, fox_girl, japanese_clothes, kimono, looking_at_viewer, black_gloves, gloves, makeup, wide_sleeves, kitsune, eyeshadow, open_mouth, black_kimono, red_skirt, mini skirt),";
// 加賀(アズレン)
// $prompt = " <lora:kaga_azurlane:0.5>, ((white_hair)), (animal_ears, fox_ears, short_hair, blue_eyes, tail, bangs, fox_tail, multiple_tails, breasts, fox_girl, large_breasts, makeup, animal_ear_fluff, 1girl, fox_mask, kimono, looking_at_viewer, mask, mask_on_head, gloves, white_kimono, smile, fur_trim, black_gloves, fingerless_gloves, kitsune, wide_sleeves, eyeshadow, blush, sash, obi),";
// 愛宕(アズレン)
// $prompt = " <lora:atago_azurlane:0.5>, ((black_hair)), (animal_ears, long_hair, bangs, extra_ears, breasts, large_breasts, ribbon, smile, brown_eyes, white_ribbon, hair_ribbon, blush, swept_bangs, closed_mouth, yellow_eyes, gloves, looking_at_viewer, military, military_uniform, uniform, white_gloves, buttons, long_sleeves, double-breasted),";
// 高雄(アズレン)
// $prompt = " <lora:takao_azurlane:0.5>, ((black_hair)), (long_hair, ponytail, hair_bow, white_bow, breasts, bangs, large_breasts, brown_eyes, hair_flaps, blush, very_long_hair, yellow_eyes, military, gloves, military_uniform, pleated_skirt, sheath, skirt, uniform, white_gloves, closed_mouth, miniskirt, white_skirt, buttons, pantyhose),";
// シリアス(アズレン)
// $prompt = " <lora:sirius_azurlane:0.5>, ((white_hair)), (short_hair, red_eyes, breasts, hair_between_eyes, large_breasts, bangs, blush, cleavage, 1girl, flower, hair_flower, hair_ornament, looking_at_viewer, ribbon, dress, white_dress, closed_mouth, smile, bare_shoulders, blue_flower, gem, rose, sleeveless, white_flower, choker, hair_ribbon, blue_gemstone, collarbone, purple_flower, sleeveless_dress, blue_ribbon, white_rose),";
// イラストリアス(アズレン)
// $prompt = " <lora:illustrious_azurlane:0.5>, ((white_hair)), (long_hair, blue_eyes, breasts, large_breasts, bangs, hair_ornament, cleavage, smile, blush, ribbon, hair_ribbon, 1girl, bare_shoulders, dress, hat, looking_at_viewer, sun_hat, white_dress, white_headwear, elbow_gloves, gloves, strapless, white_gloves, strapless_dress, closed_mouth, detached_collar, gem, tri_tails, tress_ribbon, ahoge, blue_gemstone, collarbone),";
// ヴィクトリアス(アズレン)
// $prompt = " <lora:victorious_azurlane:0.5>, ((blonde_hair)), (long_hair, blue_eyes, laurel_crown, breasts, hair_ornament, large_breasts, bangs, ribbon, smile, blush, sleeveless, flower, cleavage, hair_ribbon, open_mouth, very_long_hair, blue_flower, rose, bare_shoulders, head_out_of_frame, huge_breasts, collarbone, covered_navel, dress, white_dress),";
// エンタープライズ(アズレン)
// $prompt = " <lora:enterprise_azurlane:0.5>, ((white_hair)), (long_hair, purple_eyes,  breasts, hat, bangs, large_breasts, sleeveless, necktie, smile, peaked_cap, white_headwear, black_necktie, blush, very_long_hair, hair_between_eyes),";
// 天城(アズレン)
// $prompt = " <lora:amagi_azurlane:0.5>, ((brown_hair)), (animal_ears, fox_ears,long_hair, purple_eyes, bangs, thick_eyebrows, breasts, large_breasts, animal_ear_fluff, hair_ornament, blunt_bangs, tail, fox_girl, fox_tail, hair_ribbon, japanese_clothes, kimono, kyuubi, looking_at_viewer, multiple_tails, ribbon, rope, shimenawa, sidelocks, twintails, detached_sleeves, off_shoulder, wide_sleeves, long_sleeves),";
// ウォースパイト(アズレン)
// $prompt = " <lora:warspite_azurlane:0.5>, ((blonde_hair)), (long_hair, purple_eyes, bangs, hair_between_eyes, blush, headgear, sidelocks, epaulettes, 1girl, gloves, holding, looking_at_viewer, scarf, white_gloves, long_sleeves, hair_ears, jacket, open_mouth, white_scarf),";
// 武蔵(アズレン)
// $prompt = " <lora:musashi_azurlane:0.5>, ((black_hair)), (animal_ears, long_hair, fox_ears, animal_ear_fluff,  facial_mark, breasts, bangs, hair_ornament, yellow_eyes, large_breasts, fox_girl, cleavage, jewelry, necklace, very_long_hair, magatama, magatama_necklace, smile, blush, ahoge, bare_shoulders, black_kimono, fur-trimmed_kimono, fur_trim, japanese_clothes, kimono, looking_at_viewer, parted_lips, collarbone, off_shoulder, purple_hair),";
// ヘレナ(アズレン)
// $prompt = " <lora:helena_azurlane:0.5>, ((blue_hair)), (long_hair, ahoge, purple_eyes, breasts, blush, bangs, hair_ornament, smile, medium_breasts, hair_between_eyes, 1girl, bare_shoulders, closed_mouth, looking_at_viewer, gloves, dress, elbow_gloves, black_gloves),";
// 瑞鶴(アズレン)
// $prompt = " <lora:zuikaku_azurlane:0.5>, ((brown_hair)), (long_hair, breasts, large_breasts, bangs, yellow_eyes, blush, cleavage, very_long_hair, hair_ornament, smile, collarbone, brown_eyes, ponytail, blue_sky, cloud, day, dress, japanese_clothes, makeup, red_dress, sweat, armpits, looking_at_viewer, eyeshadow, kimono, white_kimono),";
// 大鳳(アズレン)
// $prompt = " <lora:taiho_azurlane:0.5>, ((black_hair)), (long_hair, red_eyes, bangs, breasts, hair_between_eyes, large_breasts, ahoge, cleavage, very_long_hair, blush, hair_ornament, smile, collarbone, bare_shoulders, china_dress, dress, red_dress, cleavage_cutout, clothing_cutout, low_neckline, crossed_bangs, huge_breasts, pelvic_curtain, thighhighs, black_thighhighs, bridal_gauntlets, feather_boa, gloves, parted_lips, sleeveless, garter_straps),";
// ホノルル(アズレン)
// $prompt = " <lora:honolulu_azurlane:0.5>, ((red_hair)), (long_hair, twintails, bangs, ribbon, blush, hair_ribbon, red_eyes, breasts, black_ribbon, large_breasts, hat, cleavage, very_long_hair, looking_at_viewer, peaked_cap, chain, gloves, elbow_gloves, white_gloves, jacket, jacket_on_shoulders, closed_mouth, dress),";
// フォーミーダブル(アズレン)
// $prompt = " <lora:formidable_azurlane:0.5>, ((grey_hair)),(long_hair, red_eyes, bangs, twintails, breasts, large_breasts, ribbon,  very_long_hair, hair_ribbon, blush, cleavage, two-tone_ribbon, between_breasts, bare_shoulders, black_dress, bow, dress, earrings, frilled_dress, frills, hair_bow, jewelry, looking_at_viewer, black_bow, long_sleeves, collarbone, detached_collar, skirt_hold),";
// 山城(アズレン)
// $prompt = " <lora:yamashiro_azurlane:0.5>, ((black_hair)), (animal_ears, cat_ears,  short_hair, red_eyes, animal_ear_fluff, breasts, bangs, open_mouth, blush, smile, large_breasts, japanese_clothes, kimono, looking_at_viewer, tail, bell, jingle_bell, tail_bell, tail_ornament, cat_tail, sideboob, wataboushi),";
// プリンツ・オイゲン(アズレン)
// $prompt = " <lora:prinz_eugen_azurlane:0.5>, ((multicolored_hair, streaked_hair, red_hair)), (long_hair, breasts, bangs, two_side_up, large_breasts, white_hair, blush, antenna_hair, hair_between_eyes, very_long_hair, smile, brown_eyes, cross, gloves, iron_cross, long_sleeves, looking_at_viewer, black_gloves, sideboob, grey_hair, orange_eyes),";
// セントルイス(アズレン)
// $prompt = " <lora:st_louis_azurlane:0.5>, ((blue_hair)), (bangs, sidelocks, breasts, large_breasts, side_ponytail, blush, long_hair, cleavage, purple_eyes, hair_ornament, smile, hair_between_eyes, jewelry, pink_eyes, backless_dress, backless_outfit, bare_shoulders, dress, evening_gown, halter_dress, halterneck, plunging_neckline, revealing_clothes, silver_dress, earrings, grey_dress, hairclip, looking_at_viewer, sitting, thighs, parted_lips, nail_polish),";
// 樫野(アズレン)
// $prompt = " <lora:kashino_azurlane:0.5>, ((brown_hair)), (animal_ears, cow_ears, long_hair, cow_horns, horns, cow_girl, purple_eyes, breasts, blush, bangs, huge_breasts, hair_ornament, flower, hair_flower, white_flower, bikini, swimsuit, white_bikini, large_breasts, bare_shoulders, bell, looking_at_viewer, maid_headdress, official_alternate_costume, underboob),";
// 江風(アズレン)
// $prompt = " <lora:kawakaze_azurlane:0.5>, ((grey_hair)), (animal_ears, fox_ears, long_hair, bangs, blue_eyes, hair_between_eyes, white_hair, fox_girl, breasts, japanese_clothes, kimono, white_kimono, looking_at_viewer, detached_sleeves, sidelocks, wide_sleeves, smile, blush, closed_mouth, hair_ornament, obi, sash, long_sleeves),";
// 夕立(アズレン)
// $prompt = " <lora:yudachi_azurlane:0.5>, ((grey_hair)), (long_hair, animal_ears, red_eyes, breasts, thick_eyebrows, blush, bangs, open_mouth, braid, wolf_ears, smile, medium_breasts, navel, fang, underboob, large_breasts, fingerless_gloves, gloves, looking_at_viewer, school_uniform, serafuku, mini skirt, tail, wolf_tail, crop_top, side_braid, belt, tattoo, midriff, pleated_skirt),";
// Z46(アズレン)
// $prompt = " <lora:z46_azurlane:0.5>, ((grey_hair)), (long_hair, bangs, yellow_eyes, blush, hat, blunt_bangs, very_long_hair, cross, iron_cross, breasts, small_breasts, brown_eyes, bare_shoulders, long_sleeves, looking_at_viewer, maid_headdress, closed_mouth, jacket, off_shoulder, dress, black_jacket, detached_collar, frills, black_dress),";
// Z23(アズレン)
// $prompt = " <lora:z23_azurlane:0.5>, ((blonde_hair)), (short_hair, blush, bangs, breasts, bow, blue_eyes, hair_bow, cross, purple_eyes, iron_cross, open_mouth, hair_between_eyes, badge, bare_shoulders, beret, hat, looking_at_viewer, ribbon, arm_up, armpits, black_apron, dress, sleeveless, wrist_cuffs, apron, black_headwear, sleeveless_dress, button_badge, detached_sleeves, official_alternate_costume),";
// 綾波(アズレン)
// $prompt = " <lora:ayanami_azurlane:0.5>, ((blonde_hair)), (long_hair, ponytail, bangs, headgear, hair_between_eyes, sidelocks, hair_ornament, blush, orange_eyes, breasts, red_eyes, detached_sleeves, hair_bow, idol, looking_at_viewer, midriff, navel, plaid, plaid_skirt, mini skirt, wide_sleeves, pleated_skirt, armpits, belt, hairclip),";
// ジャベリン(アズレン)
// $prompt = " <lora:javelin_azurlane:0.5>, ((purple_hair)), (hair_ornament, ribbon, ponytail, bangs, smile, hair_ribbon, blush, crown, hair_between_eyes, green_eyes, mini_crown, breasts, open_mouth, blue_eyes, looking_at_viewer, sleeveless, bracelet, sailor_collar, jewelry, cross_hair_ornament, dress, retrofit_\(azur_lane\), bridal_gauntlets, gloves),";
// リノ(アズレン)
// $prompt = " <lora:reno_azurlane:0.5>, ((grey_hair)), (purple_eyes, breasts, large_breasts, bangs, blush, short_hair, hairband, smile, hair_between_eyes, black_hairband, sleeveless, see-through, parted_hair, animal_ears, fake_animal_ears, rabbit_ears, bare_shoulders, bowtie, closed_mouth, looking_at_viewer, official_alternate_costume, shirt, sleeveless_shirt, white_bowtie, playboy_bunny, portrait, white_bow, collarbone, white_shirt, black_necktie, elbow_gloves, gloves, necktie, single_elbow_glove),";
// ユニコーン(アズレン)
// $prompt = " <lora:unicorn_azurlane:0.5>, ((purple_hair)), (long_hair, purple_eyes, bangs, blush, ahoge, ribbon, hair_bun, hair_ribbon, single_hair_bun, single_side_bun, one_side_up, very_long_hair, black_ribbon, hair_ornament, breasts, bare_arms, bare_shoulders, collarbone, dress, looking_at_viewer, sleeveless, sleeveless_dress, white_dress, black_hairband, cleavage, hairband, small_breasts, smile, thighhighs, white_thighhighs),";
// 吾妻(アズレン)
// $prompt = " <lora:azuma_azurlane:0.5>, ((black_hair)), (long_hair, breasts, hair_ornament, large_breasts, hair_between_eyes, blush, yellow_eyes, bangs, flower, hair_flower, smile, very_long_hair, black_gloves, gloves, jacket_on_shoulders, skirt, hairclip, jacket, looking_at_viewer, pantyhose, black_pantyhose, half_gloves, pleated_skirt), ";
// ダイドー(アズレン)
// $prompt = " <lora:dido_azurlane:0.5>, ((white_hair, grey_hair)), (long_hair, hairband, breasts, large_breasts, bangs, blush, purple_eyes, black_hairband, sleeveless, underboob, maid, jewelry, earrings, pink_eyes, apron, bare_shoulders, black_skirt, center_frills, clothing_cutout, frills, maid_apron, shirt, skirt, underboob_cutout, waist_apron, white_apron, white_shirt, sleeveless_shirt, looking_at_viewer, thighhighs, white_thighhighs, anchor_choker),";
// チェシャー(アズレン)
// $prompt = " <lora:cheshire_azurlane:0.5>, ((multicolored_hair, streaked_hair)), (breasts, large_breasts, animal_ears, cleavage, maid_headdress, black_hair, aqua_eyes, smile, ribbon, wrist_cuffs, bangs, blush, maid, hairband, two-tone_hair, blue_eyes, aqua_hair, fake_animal_ears, short_hair),";
// フッド(アズレン)
// $prompt = " <lora:hood_azurlane:0.5>, ((blonde_hair)), (long_hair, blue_eyes, breasts, smile, jewelry, earrings, large_breasts, blush, bangs, black_bow, blue_capelet, capelet, gloves, hair_bow, hat, long_sleeves, looking_at_viewer, white_gloves, white_headwear, blue_dress, dress, union_jack, ascot, braid, hair_over_shoulder),";
// 能代(アズレン)
// $prompt = " <lora:noshiro_azurlane:0.5>, ((black_hair)), (long_hair, horns, oni_horns, purple_eyes, bangs, hair_ornament, hairclip, breasts, x_hair_ornament, serafuku, very_long_hair, black_cardigan, black_pantyhose, black_serafuku, black_shirt, black_skirt, cardigan, long_sleeves, looking_at_viewer, neckerchief, pantyhose, pleated_skirt, sailor_collar, school_uniform, shirt, skirt, white_sailor_collar, midriff_peek, open_cardigan, sheath, midriff, navel, open_clothes),";
// パーシュース(アズレン)
// $prompt = " <lora:perseus_azurlane:0.5>, ((pink_hair)), (long_hair, pink_eyes, breasts, twintails, bangs, large_breasts, very_long_hair, blush, cleavage, hair_ornament, hat, nurse_cap, white_headwear, nurse, center_opening, bare_shoulders, detached_collar, detached_sleeves, dress, frilled_dress, frilled_hairband, frills, hairband, looking_at_viewer, white_dress, wide_sleeves, wings, strapless_dress),";
// インプラカブル(アズレン)
// $prompt = " <lora:implacable_azurlane:0.5>, ((blonde_hair)), (long_hair, bangs, breasts, hair_between_eyes, large_breasts, red_eyes, blush, nun, horns, cleavage, bare_shoulders, black_gloves, detached_sleeves, gloves, looking_at_viewer, smile, thighhighs, between_breasts, parted_lips, white_thighhighs, dress, pelvic_curtain, thighs, wide_sleeves),";
// インドミタブル(アズレン)
// $prompt = " <lora:indomitable_azurlane:0.5>, ((black_hair)), (long_hair, breasts, green_eyes, hair_between_eyes, bangs, large_breasts, blush, very_long_hair, maid_headdress, hair_ornament, hair_flower, huge_breasts, frilled_choker, frills, maid, official_alternate_costume, choker, looking_at_viewer, mini skirt),";
// レパルス(アズレン)
// $prompt = " <lora:repulse_azurlane:0.5>, ((brown_hair)), (blue_eyes, blush, breasts, smile, hair_between_eyes, bangs, short_hair, braid, collarbone, halterneck, medium_breasts, bare_shoulders, capelet, gloves, short_ponytail, white_gloves, anchor, blue_skirt, choker, crop_top, detached_sleeves, midriff, miniskirt, navel, pleated_skirt, shirt, sidelocks, skirt, white_shirt, black_choker, french_braid, mini_hat, cowboy_shot, criss-cross_halter, long_sleeves, ponytail, stomach),";
// ラフィー(アズレン)
// $prompt = " <lora:laffey_azurlane:0.5>, ((white_hair)), (animal_ears, rabbit_ears, red_eyes, twintails, bangs, long_hair, hair_between_eyes, blush, hairband, fake_animal_ears, hair_ornament, collarbone, very_long_hair, red_hairband, camisole, jacket, open_clothes, open_jacket, pink_jacket, white_camisole, long_sleeves, off_shoulder, pleated_skirt, red_skirt, mini skirt, bare_shoulders),";
// 長門(アズレン)
// $prompt = " <lora:nagato_azurlane:0.5>, ((black_hair)), (animal_ears, fox_ears, long_hair, bangs, animal_ear_fluff, yellow_eyes, blush, blunt_bangs, hair_ornament, brown_eyes, bare_shoulders, dress, red_dress, strapless, strapless_dress, detached_sleeves, collarbone, long_sleeves, very_long_hair, white_sleeves, wide_sleeves),";
// 信濃(アズレン)
// $prompt = " <lora:shinano_azurlane:0.5>, ((white_hair)), (long_hair, animal_ears, fox_ears, animal_ear_fluff, breasts, large_breasts, blue_eyes, fox_girl, bangs, cleavage, tail, hair_ornament, multiple_tails, blush, fox_tail, very_long_hair, bare_shoulders, blue_collar, blue_kimono, japanese_clothes, kimono, off_shoulder, thighhighs, wide_sleeves, skirt, white_skirt, white_tail, white_thighhighs, collar, kyuubi, pleated_skirt, purple_eyes, long_sleeves),";
// クリーブランド(アズレン)
// $prompt = " <lora:cleveland_azurlane:0.5>, ((blonde_hair)), (long_hair, one_side_up, red_eyes, bangs, smile, blush, black_gloves, blue_sky, capelet, cloud, fingerless_gloves, gloves, white_capelet, hair_between_eyes, black_skirt, hair_ornament, looking_at_viewer, pleated_skirt, mini skirt),";
// 雪風(アズレン)
// $prompt = " <lora:yukikaze_azurlane:0.5>, ((white_hair)), (animal_ears, cat_ears, long_hair, bow, hair_bow, bangs, blush, black_bow, breasts, ribbon, fang, smile, twintails, animal_ear_fluff, sleeveless, red_eyes, medium_breasts),";
// ヴァンパイア(アズレン)
// $prompt = " <lora:vampire_azurlane:0.5>, ((white_hair)), (long_hair, red_eyes, twintails, hair_between_eyes, ribbon,  bangs, hair_ribbon, blush, smile, red_ribbon, breasts, small_breasts, fang, hair_ornament, black_bikini, bare_shoulders, belt, bikini_top_only, black_dress, collar, detached_collar, detached_sleeves, dress, front-tie_top, white_collar, belt_buckle, buckle, front-tie_bikini_top, white_belt, sidelocks, long_sleeves),";
// ハムマン(アズレン)
// $prompt = " <lora:vampire_azurlane:0.5>, ((white_hair)), (long_hair, animal_ears, cat_ears, blue_eyes, blush, bangs,  hair_bow, ribbon, very_long_hair, black_bow, breasts, hair_ribbon, hair_ornament, hair_between_eyes, animal_ear_fluff, small_breasts, black_dress, puffy_short_sleeves, puffy_sleeves, red_bow, short_sleeves, dress, necktie, print_necktie, red_choker, wrist_cuffs),";
// ブレマートン(アズレン)
// $prompt = " <lora:bremerton_azurlane:0.5>, ((pink_hair)), (pink_eyes, long_hair, bangs, multicolored_hair, streaked_hair, breasts, large_breasts, hair_between_eyes, blush, twintails, grey_hair, cleavage, two-tone_hair, hair_ornament, sidelocks, smile, sleeveless, x_hair_ornament, hair_intakes),";
// ベルファスト(アズレン)
// $prompt = " <lora:belfast_azurlane:0.5>, ((white_hair)), (long_hair, bangs, breasts, large_breasts, braid, smile, cleavage, blush, french_braid, blue_eyes, purple_eyes, collarbone, chain, blue_sky, closed_mouth, collar, corset, dress, frilled_gloves, frills, gloves, maid, maid_headdress, white_gloves, apron, skirt_hold),";
// プリンツ・ハインリヒ(アズレン)
// $prompt = " <lora:prinz_heinrich_azurlane:0.5>, ((white_hair)), (long_hair, red_eyes, bangs, smile, blush, very_long_hair, ribbon, necktie, hairband, hair_ribbon, hair_between_eyes, black_necktie, black_skirt, black_sleeves, crop_top, detached_sleeves, gloves, high-waist_skirt, pleated_skirt, ribbed_shirt, shirt, skirt, sleeveless, sleeveless_shirt, underboob, black_gloves, parted_bangs, sidelocks, white_shirt, braid, collared_shirt, long_sleeves, thigh_strap),";
// ダンケルク(アズレン)
// $prompt = " <lora:dunkerque_azurlane:0.5>, ((grey_hair)), (long_hair,  hair_ornament, breasts, large_breasts, butterfly_hair_ornament, bangs, red_eyes, cleavage, blush, swimsuit, bikini, ponytail, sidelocks, looking_at_viewer, gloves, dress, red_gloves),";
// チャパエフ(アズレン)
// $prompt = " <lora:chapayev_azurlane:0.5>, ((blue_hair)), (short_hair, blue_eyes, blush, bangs, smile, cleavage, hair_ornament, black_gloves, facial, gloves, hat, heart-shaped_pupils, jacket, military_hat, symbol-shaped_pupils, white_headwear, white_jacket, uniform, gag, hair_over_one_eye, hairclip, long_sleeves, military, military_uniform),";
// マサチューセッツ(アズレン)
// $prompt = " <lora:massachusetts_azurlane:0.5>, ((white_hair)), (dark_skin, dark-skinned_female, long_hair, facial_mark, breasts, bangs, large_breasts, forehead_mark, blush, cleavage, red_eyes, bare_shoulders, choker, collarbone, feather_hair_ornament, feathers, hair_ornament, native_american),";
// ザラ(アズレン)　水着
// $prompt = " <lora:zara_azurlane:0.5>, ((red_hair)), (long_hair, bangs, blush, side_ponytail, large_breasts, swimsuit, bikini, cleavage, black_bikini, collarbone, smile, goggles, yellow_eyes, goggles_on_head, hair_ornament, ahoge, bare_shoulders, official_alternate_costume, sidelocks, whistle, whistle_around_neck, navel, orange_eyes),";
// 島風(アズレン)
// $prompt = " <lora:shimakaze_azurlane:0.5>, ((white_hair)), (animal_ears, long_hair, rabbit_ears, hairband, yellow_eyes, small_breasts, bangs, blush, smile, very_long_hair, brown_eyes, detached_collar, playboy_bunny, bowtie, covered_navel, twintails, wrist_cuffs, bare_shoulders, official_alternate_costume),";
// サラトガ(アズレン)
// $prompt = " <lora:saratoga_azurlane:0.5>, ((pink_hair)), (purple_eyes, ahoge, blush, smile, twintails, ribbon, bangs, long_hair, hairband, hair_ribbon, breasts, hair_between_eyes, hair_bow, dress, elbow_gloves, gloves, jacket, staff, white_gloves, jacket_on_shoulders, pantyhose),";
// エセックス(アズレン)
// $prompt = " <lora:essex_azurlane:0.5>, ((blue_hair)), (long_hair, breasts, bangs, twintails, ribbon, hair_ribbon, blush, yellow_eyes, large_breasts, black_ribbon, cleavage, necktie, braid, red_necktie, black_gloves, black_pantyhose, blue_cloak, blue_dress, brown_eyes, cloak, clothes_writing, collared_dress, dress, french_braid, gloves, pantyhose, sidelocks, smile, hair_between_eyes, very_long_hair),";
// ティルピッツ
// $prompt = " <lora:tirpitz_azurlane:0.5>, ((white_hair)), (blue_eyes, hair_between_eyes, short_hair, earrings, jewelry, cross, cross_earrings, bangs, cape, gloves, hat, military, military_uniform, peaked_cap, uniform, white_gloves, white_headwear, fur_trim, long_sleeves, skirt),";
// リシュリュー
// $prompt = " <lora:richelieu_azurlane:0.5>, ((blonde_hair)), (long_hair, breasts, large_breasts, swimsuit, hat, red_eyes, white_headwear, cleavage, orange_hair, one-piece_swimsuit, pink_one-piece_swimsuit, sun_hat, pink_eyes, frills, bare_shoulders, frilled_swimsuit, see-through),";
// 三笠
// $prompt = " <lora:mikasa_azurlane:0.5>, ((brown_hair, black_hair)), (horns, hair_between_eyes, long_hair, bangs, yellow_eyes, military, smile, blush, epaulettes, large_breasts, brown_eyes, gloves, long_sleeves, military_uniform, uniform, white_gloves, belt, buttons),";
// シグニット
// $prompt = " <lora:cygnet_azurlane:0.5>, ((white_hair)), (long_hair, blush, hair_bun, large_breasts, braid, ribbon, double_bun, red_eyes, bangs, ahoge, hair_ribbon, purple_eyes, hair_ornament, hat, necktie, skirt, choker, plaid, school_uniform, purple_necktie, purple_skirt, short_sleeves),";
// 吹雪
// $prompt = " <lora:fubuki_azurlane:0.5>, ((blue_hair)), (yellow_eyes, short_hair, animal_ears, hair_ornament, bell, open_mouth, hair_bell, smile, fox_ears, jingle_bell, blush, fang, breasts),";
// ローン
// $prompt = " <lora:roon_azurlane:0.5>, ((multicolored_hair, blonde_hair, streaked_hair, red_hair)), (short_hair, smile, hair_between_eyes, brown_eyes, bangs, cross, iron_cross, black_gloves, black_jacket, blush, gloves, grey_shirt, heart-shaped_pupils, jacket, long_sleeves, nose_blush, open_clothes, open_jacket, outstretched_arms, shirt, symbol-shaped_pupils, black_footwear, black_skirt, collared_shirt, pleated_skirt, skirt, solo_focus, boots),";
// ドイッチュラント
// $prompt = " <lora:deutschland_azurlane:0.5>, ((black_hair, red_hair, multicolored_hair, streaked_hair)), (blue_eyes, long_hair, breasts, bangs, smile, blush, very_long_hair, fingerless_gloves, gloves, jewelry, necklace, sunglasses, bare_shoulders, cleavage, cross, red_gloves, large_breasts, black_headwear, hat),";
// 時雨
// $prompt = " <lora:shigure_azurlane:0.5>, ((black_hair)), (animal_ears, long_hair, red_eyes, breasts, wolf_ears, blush, ponytail, smile, medium_breasts, bangs, tail, animal_ear_fluff, wolf_tail, nail_polish, collarbone, ribbon, black_gloves, fingerless_gloves, gloves, detached_sleeves, red_nails, midriff, navel, bare_shoulders, claw_pose, crop_top, pleated_skirt, sailor_collar, skirt, white_skirt, sidelocks),";
// エーギル
// $prompt = " <lora:agir_azurlane:0.5>, ((white_hair, red_hair, multicolored_hair, streaked_hair)), (horns, long_hair, yellow_eyes, breasts, large_breasts, demon_horns, hair_between_eyes, two-tone_hair, very_long_hair, cleavage, jewelry, hair_on_horn, bangs, bare_shoulders, black_gloves, black_thighhighs, gloves, thighhighs, earrings, smile, dress, blush),";
// ノースカロライナ
// $prompt = " <lora:north_carolina_azurlane:0.5>, ((blonde_hair)), (long_hair, blue_eyes, breasts, large_breasts, rabbit_ears, animal_ears, fake_animal_ears, blush, cleavage, smile, hairband, bangs, bowtie, detached_collar, leotard, official_alternate_costume, playboy_bunny, black_bowtie, black_leotard, strapless, strapless_leotard, wrist_cuffs, pantyhose, bare_shoulders),";
// エルベ
// $prompt = " <lora:elbe_azurlane:0.5>, {maid:1.40}, {long maid dress:1.15}, ((black_hair, multicolored_hair, two-tone_hair)), (long_hair, purple_eyes, breasts, streaked_hair, large_breasts, white_hair, open_mouth, fang, skin_fang, cross, blush, iron_cross, hat, black_headwear, peaked_cap),";
// ル・マラン
// $prompt = " <lora:le_malin_azurlane:0.5>, ((white_hair)), (long_hair, bangs, blue_eyes, very_long_hair, blush, breasts, animal_ears, small_breasts, rabbit_ears, fake_animal_ears, braid, twin_braids, hair_bun, double_bun, animal_ear_fluff, hair_between_eyes, leotard, official_alternate_costume, playboy_bunny, white_leotard, wrist_cuffs, choker, looking_at_viewer, pantyhose, white_pantyhose, covered_navel, highleg, highleg_leotard, twintails),";
// ロング・アイランド
// $prompt = " <lora:long_island_azurlane:0.5>, ((brown_hair)), (long_hair, blue_eyes, blush, bangs, headphones, breasts, smile, very_long_hair, black_hair, collared_shirt, jacket, shirt, white_shirt, long_sleeves, necktie, red_necktie, blue_jacket, sleeves_past_wrists, off_shoulder),";
// ソビエツカヤ・ロシア
// $prompt = " <lora:sovetskaya_rossiya_azurlane:0.5>, ((white_hair)), (long_hair, hair_between_eyes, red_eyes, breasts, large_breasts, bangs, blush, grey_hair, very_long_hair, belt, black_gloves, buttons, coat, double-breasted, fur-trimmed_coat, fur_trim, gloves, hat, high_collar, military_hat, smile, white_coat, white_headwear, elbow_gloves),";
// グラーフ・ツェッペリン
// $prompt = " <lora:graf_zeppelin_azurlane:0.5>, ((white_hair)), (long_hair, hair_between_eyes, breasts, bangs, red_eyes, large_breasts, cleavage, blush, hat, grey_hair, very_long_hair, cross, fur_trim, gloves, iron_cross, military, military_uniform, peaked_cap, uniform, jacket, long_sleeves, skirt, cape, pantyhose),";
// ニュージャージー
// $prompt = " <lora:new_jersey_azurlane:0.5>, ((blue_hair)), (long_hair, blue_eyes, animal_ears, rabbit_ears, smile, fake_animal_ears, very_long_hair, blush, bangs, bare_shoulders, bodystocking, gloves, hair_between_eyes, headgear, white_gloves, elbow_gloves, covered_collarbone, arm_behind_head, arm_up, covered_navel),";
// クイーン・エリザベス
// $prompt = " <lora:queen_elizabeth_azurlane:0.5>, ((blonde_hair)), (long_hair, blue_eyes, crown, hairband, mini_crown, hair_bow, blush, bangs, black_hairband, white_bow, smile, small_breasts, armpits, bare_shoulders, detached_sleeves, dress, gloves, long_sleeves, one_eye_closed, ribbon, strapless, white_gloves, cleavage, covered_navel, gradient, strapless_dress, very_long_hair, blue_ribbon),";
// パーミャチ・メルクーリヤ
// $prompt = " <lora:pamiat_merkuria_azurlane:0.5>, ((black_hair)), (long_hair, breasts, blush, purple_eyes, large_breasts,  smile, bangs, hat, one_side_up, white_headwear, coat, fur_trim, white_coat, fang, hand_up, jewelry, long_sleeves, ring, wedding_ring, fur-trimmed_coat, buttons, cleavagem),";
// パーミャチ・メルクーリヤ　バニー
// $prompt = " <lora:pamiat_merkuria_azurlane:0.5>, ((black_hair, leotard, playboy_bunny)), (long_hair, breasts, blush, purple_eyes, large_breasts, smile, bangs, open_mouth, hat, one_side_up, white_headwear, animal_ears, fake_animal_ears, looking_at_viewer, rabbit_ears, underboob, bare_shoulders, fang, purple_jacket, jacket, off_shoulder, hair_ornament, skin_fang, hairclip, long_sleeves),";
// ジャン・バール
// $prompt = " <lora:jean_bart_azurlane:0.5>, ((brown_hair)), (long_hair, hair_between_eyes, breasts, red_eyes, jewelry, earrings, ponytail, bangs, collarbone, sidelocks, cleavage, belt, black_choker, black_shorts, choker, corset, cross-laced_clothes, hair_bow, jacket, long_sleeves, midriff, short_shorts, shorts, single_thighhigh, sleeve_cuffs, striped_thighhighs, thighhighs, thighs, vertical-striped_thighhighs, black_belt, gloves, half_gloves, red_gloves, boots),";
// アーク・ロイヤル
// $prompt = " <lora:ark_royal_azurlane:0.5>, ((black_hair)), (blue_eyes, short_hair, breasts, large_breasts, cleavage, hair_over_one_eye, smile, bangs, cleavage_cutout, clothing_cutout, gloves, white_gloves, eyes_visible_through_hair, long_sleeves),";
// アドミラル・ヒッパー
// $prompt = " <lora:admiral_hipper_azurlane:0.5>, ((blonde_hair)), (long_hair, green_eyes, two_side_up, bangs, hair_between_eyes, ahoge, blush, cross, mole, iron_cross, breasts, collarbone, hat),";
// アドミラル・グラーフ・シュペー
// $prompt = " <lora:admiral_graf_spee_azurlane:0.5>, ((streaked_hair, red_hair, grey_hair, white_hair, multicolored_hair)), (short_hair, blue_eyes, bangs, blush, breasts, black_dress, dress, red_scarf, scarf, sidelocks, small_breasts, underboob, claws, cross, looking_at_viewer, rigging, belt, black_socks, socks, tail),";
// フリードリヒ・デア・グローセ
// $prompt = " <lora:friedrich_der_grosse_azurlane:0.5>, ((black_hair)), (long_hair, horns, yellow_eyes, red_horns, hair_over_one_eye, breasts, mechanical_horns, large_breasts, very_long_hair, smile, blush, bare_shoulders, black_dress, dress, gloves, red_gloves, thighhighs, black_thighhighs, cleavage, double-breasted, buttons),";
// ウルリッヒ・フォン・フッテン
// $prompt = "  <lora:ulrich_von_hutten_azurlane:0.5>, ((black_hair, multicolored_hair)), (horns, yellow_eyes, short_hair, red_horns, breasts, piercing, bangs, hair_between_eyes, medium_breasts, mechanical_horns, white_hair, hair_over_one_eye, hair_ornament, alternate_costume, animal_ears, black_leotard, fake_animal_ears, leotard, playboy_bunny, rabbit_ears, strapless, strapless_leotard, bare_shoulders, cleavage, rabbit_tail, red_nails, tail, bowtie, detached_collar, eyes_visible_through_hair, nail_polish, wrist_cuffs),";
// プリンス・オブ・ウェールズ
// $prompt = " <lora:prince_of_wales_azurlane:0.5>, ((blonde_hair)), (red_eyes, braid, breasts, short_hair, bangs, crown_braid, jewelry, earrings, large_breasts, blush, hair_ornament, bare_shoulders, gloves, halterneck, race_queen, black_gloves, cleavage, criss-cross_halter, smile, elbow_gloves, flag, choker, checkered_flag, dress, holding, official_alternate_costume),";
// アウグスト・フォン・パーセヴァル
// $prompt = " <lora:august_von_parseval_azurlane:0.5>, ((purple_hair)), (long_hair, hair_over_one_eye, horns, mechanical_horns, purple_eyes, breasts, large_breasts, curled_horns, very_long_hair, one_eye_covered, bare_shoulders, black_dress, cleavage, clothing_cutout, dress, gloves, thighhighs, white_gloves, black_thighhighs, cross, sitting, blue_eyes, detached_sleeves, iron_cross),";
// アンカレッジ
// $prompt = " <lora:anchorage_azurlane:0.5>, ((brown_hair)), (long_hair, breasts, twintails, large_breasts, purple_eyes, bangs, blush, hair_between_eyes, cleavage, light_brown_hair, very_long_hair, smile, bare_shoulders, headgear),";


////////////////////////
// 原神
////////////////////////
// バーバラ(原神)
// $prompt = " <lora:barbara_genshin:0.5>, ((blonde_hair)), (blue_eyes, twintails, bangs, long_hair, drill_hair, twin_drills, hat, blush, smile, open_mouth, breasts, white_headwear, hair_ornament, bare_shoulders, detached_collar, detached_sleeves, dress, long_sleeves, looking_at_viewer, white_dress),";
// モナ
// $prompt = " <lora:mona_genshin:0.5>, ((black_hair)), (long_hair, twintails, bangs, breasts, blush, green_eyes, hat, jewelry, witch_hat, earrings, black_gloves, blue_leotard, bodystocking, cape, choker, covered_navel, detached_sleeves, fur_collar, gloves, gold_trim, hat_ornament, highleg, highleg_leotard, leotard, pantyhose, blue_headwear, thighs, thighlet, brown_pantyhose, fur_trim, hand_on_headwear, star_earrings, black_pantyhose, elbow_gloves),";
// リサ
// $prompt = " <lora:lisa_genshin:0.5>, ((brown_hair)), (long_hair, green_eyes, bangs, breasts, smile, hat, cleavage, large_breasts, purple_flower, witch_hat, hair_between_eyes, purple_headwear, hair_ornament, jewelry, hair_flower, hat_flower, blush, witch, dress, book, gloves, black_gloves),";
// アンバー
// $prompt = " <lora:amber_genshin:0.5>, ((brown_hair)), (long_hair, bangs, ribbon, hair_ribbon, hair_between_eyes, red_ribbon, breasts, smile, brown_eyes, blush, cleavage, goggles, open_mouth, brown_shorts, crossed_bangs, gloves, goggles_around_neck, long_sleeves, looking_at_viewer, shorts, short_shorts, pouch, red_thighhighs, thighs, belt),";
// フォカロルス
// $prompt = " <lora:focalors_genshin:0.5>, ((blue_hair, streaked_hair, white_hair)), (blue_eyes, hat, hair_between_eyes, bangs, smile, bow, ahoge, multicolored_hair, long_hair, gloves, long_sleeves, looking_at_viewer, open_mouth, top_hat, black_gloves, white_gloves, jacket, jacket, short_hair),";
// 煙緋
// $prompt = " <lora:yanfei_genshin:0.5>, ((pink_hair)), (long_hair, green_eyes, hair_between_eyes, bangs, hat, red_headwear, antlers, smile, breasts, cleavage, midriff, horns, bare_shoulders, dress, hair_ornament, parted_lips, sleeveless, alternate_costume, hair_flower, hand_up, sleeveless_dress, white_dress, collarbone, gloves, veil, wedding_dress, white_gloves),";
// 夜蘭
// $prompt = " <lora:yelan_genshin:0.5>, ((blue_hair, black_hair, two-tone_hair)), (bangs, short_hair, green_eyes, diagonal_bangs, bob_cut, earrings, cleavage, multicolored_hair, dice, bare_shoulders, blue_dress, cleavage_cutout, clothing_cutout, dress, elbow_gloves, fur-trimmed_jacket, fur_trim, gloves, jacket, mismatched_gloves, pelvic_curtain, white_jacket, black_gloves, blush, neck_tassel, single_elbow_glove, sleeveless, arms_up, neck_ring, tight_pants),";
// エウルア
// $prompt = " <lora:eula_genshin:0.5>, ((blue_hair, medium_hair)), (bangs, hairband, black_hairband, hair_ornament, blush, yellow_eyes, large_breasts, purple_eyes, blue_necktie, cape, gloves, leotard, long_sleeves, necktie, black_gloves, thighhighs, black_thighhighs, thighs, black_leotard),";
// 甘雨
// $prompt = " <lora:ganyu_genshin:0.5>, ((blue_hair)), (long_hair, bangs, horns, purple_eyes, ahoge, breasts, blush, goat_horns, sidelocks, bell, medium_breasts, large_breasts, neck_bell, bare_shoulders, black_bodysuit, cowbell, detached_sleeves, hair_between_eyes, black_gloves, bodysuit, gloves, chinese_knot, flower_knot, bodystocking),";
// 刻晴
// $prompt = " <lora:keqing_genshin:0.5>, ((purple_hair)), (long_hair, purple_eyes, hair_bun, cone_hair_bun, twintails, bangs, double_bun, breasts, hair_ornament, blush, braid, black_gloves, detached_sleeves, dress, gloves, bare_shoulders, frills, purple_dress, black_pantyhose, choker, hair_between_eyes, pantyhose),";
// 申鶴
// $prompt = " <lora:shenhe_genshin:0.5>, ((grey_hair, white_hair)), (long_hair, blue_eyes, bangs, hair_over_one_eye, breasts, hair_ornament, jewelry, tassel, earrings, very_long_hair, braid, breast_curtain, black_bodysuit, bodysuit, clothing_cutout, hip_vent, covered_navel, gloves, partially_fingerless_gloves, braided_ponytail, shoulder_cutout, black_gloves),";
// ニィロウ
// $prompt = " <lora:nilou_genshin:0.5>, ((red_hair)), (long_hair, bangs, horns, veil, jewelry, fake_horns, breasts, twintails, smile, blush, parted_bangs, brooch, aqua_eyes, circlet, harem_outfit, bracer, neck_ring, low_twintails, crop_top, gold_trim, long_sleeves, navel, puffy_long_sleeves, puffy_sleeves, skirt, stomach, detached_sleeves, blue_skirt, nail_polish, blurry, blue_nails, sidelocks),";
// ジン
// $prompt = " <lora:jean_genshin:0.5>, ((blonde_hair)), (blue_eyes, bangs, ponytail, long_hair, sidelocks, breasts, hair_between_eyes, hair_bow, blush, large_breasts, capelet, gloves, looking_at_viewer, pants, gauntlets, white_pants, cross, cross_earrings, detached_sleeves, earrings, jewelry),";
// ジン 水着
// $prompt = " <lora:jean_genshin:0.5>, ((blonde_hair)), (blue_eyes, bangs, ponytail, long_hair, sidelocks, breasts, hair_between_eyes, hair_bow, blush, large_breasts, bare_shoulders, detached_sleeves, smile, official_alternate_costume, shirt, black_bow),";
// 凝光
// $prompt = " <lora:ningguang_genshin:0.5>, ((white_hair)), (hair_ornament, long_hair, bangs, red_eyes, parted_bangs, tassel, breasts, smile, hairpin, sidelocks, hair_stick, very_long_hair, large_breasts, bare_shoulders, blue_dress, blush, detached_sleeves, dress, official_alternate_costume, cleavage, parted_lips, tassel_hair_ornament),";
// 早柚
// $prompt = " <lora:sayu_genshin:0.5>, ((grey_hair)), (bangs, short_hair, leaf, animal_ears, blunt_bangs, leaf_on_head, raccoon_ears, fake_animal_ears, purple_eyes, raccoon_tail, tail, fake_tail, animal_hood, fingerless_gloves, hood, japanese_clothes, looking_at_viewer, scarf, short_sleeves, sidelocks, black_gloves, black_scarf, gloves, ninja, blush, parted_lips),";
// ディシア
// $prompt = " <lora:dehya_genshin:0.5>, ((black_hair, blonde_hair, streaked_hair)), (multicolored_hair, long_hair, bangs, blue_eyes, hair_between_eyes, jewelry, crossed_bangs, halterneck, earrings, animal_ears, criss-cross_halter, smile, brown_hair, navel, stomach, asymmetrical_clothes, black_pants, gloves, pants, single_pantsleg, black_gloves, fingerless_gloves, medium_breasts, torn_pants, armlet, bare_shoulders, midriff, torn_clothes, belt, grin, hand_on_hip, thighs), ";
// ロサリア
// $prompt = " <lora:rosaria_genshin:0.5>, ((purple_hair, red_hair, streaked_hair)), (nun, breasts, bangs, veil, purple_eyes, habit, multicolored_hair, hair_between_eyes, fishnets, hair_over_one_eye, bare_shoulders, elbow_gloves, gloves, white_gloves, polearm, fishnet_pantyhose, pantyhose, arm_up, armpits, dress, spear),";
// 北斗
// $prompt = " <lora:beidou_genshin:0.5>, ((brown_hair)), (long_hair, eyepatch, red_eyes, hair_ornament, hair_over_one_eye, breasts, one_eye_covered, hairpin, smile, hair_stick, jewelry, bangs, earrings, cleavage, black_gloves, capelet, dress, gloves, chinese_clothes, fingerless_gloves, fur_trim, red_capelet, clothing_cutout),";
// ナヒーダ
// $prompt = " <lora:nahida_genshin:0.5>, ((white_hair, green_hair, multicolored_hair)), (long_hair, green_eyes, bangs, pointy_ears, hair_ornament, symbol-shaped_pupils, side_ponytail, gradient_hair, hair_between_eyes, cross-shaped_pupils, smile, jewelry, leaf_hair_ornament, bracelet, bare_shoulders, dress, green_cape, sleeveless, sleeveless_dress, white_dress, cape, detached_sleeves),";
// スクロース
// $prompt = " <lora:sucrose_genshin:0.5>, ((green_hair, multicolored_hair)), (animal_ears, glasses, semi-rimless_eyewear, hat, bangs, blush, long_hair, hair_between_eyes, cat_ears, orange_eyes, breasts, yellow_eyes, looking_at_viewer, gloves, white_gloves, open_mouth),";
// クレー
// $prompt = " <lora:klee_genshin:0.5>, ((light_brown_hair, blonde_hair)), (bangs, pointy_ears, twintails, ahoge, hair_between_eyes, long_hair, low_twintails, hat, sidelocks, red_headwear, smile, hat_feather, cabbie_hat, red_eyes, clover_print, hat_ornament, orange_eyes, long_sleeves, blush, brown_gloves, gloves, red_dress, dress),";
// ファルザン
// $prompt = " <lora:faruzan_genshin:0.5>, ((aqua_hair)), (twintails, bangs, long_hair, hair_ornament, x_hair_ornament, green_eyes, jewelry, breasts, bracelet, small_breasts, symbol-shaped_pupils, bare_shoulders, dress, looking_at_viewer, white_dress, short_sleeves),";
// コレイ
// $prompt = " <lora:collei_genshin:0.5>, ((green_hair)), (bangs, purple_eyes, hair_ornament, hair_between_eyes, jewelry, capelet, earrings, ahoge, green_capelet, blush, crossed_bangs, medium_hair, single_earring, dress, long_sleeves, smile),";
// 綺良々
// $prompt = " <lora:kirara_genshin:0.5>, ((blonde_hair)), (long_hair, hair_ornament, green_eyes, bangs, smile, animal_ears, hairclip, ahoge, tail, blush, cat_tail, bow, cat_ears, hair_bow, detached_sleeves, heart, looking_at_viewer, lying, cat_girl, collarbone, fangs, heart_tail, on_stomach),";
// レイラ
// $prompt = " <lora:layla_genshin:0.5>, ((blue_hair)), (long_hair, bangs, hair_between_eyes, drill_hair, pointy_ears, drill_locks, yellow_eyes, jewelry, very_long_hair, bright_pupils, claw_ring, white_pupils, parted_lips, breasts, neck_ring, bare_shoulders, black_gloves, detached_sleeves, gloves, hood, long_sleeves, puffy_sleeves, hood_up, juliet_sleeves, sidelocks),";
// 雲菫
// $prompt = " <lora:yun_jin_genshin:0.5>, ((purple_hair, black_hair)), (bangs, blunt_bangs, long_hair, red_eyes, bonnet, smile, capelet, tassel, pink_capelet, makeup, closed_mouth, hat, headphones, jacket, ribbon, shirt, white_shirt, long_sleeves, neck_ribbon, black_jacket, collared_shirt, hair_ornament, hairclip, multicolored_headwear, pink_jacket, pink_ribbon),";
// 雷電将軍
// $prompt = " <lora:raiden_shogun_genshin:0.5>, ((purple_hair)), (long_hair, bangs, purple_eyes, mole_under_eye, hair_ornament, large_breasts, braid, cleavage, blush, very_long_hair, bridal_gauntlets, electricity, japanese_clothes, kimono, long_sleeves, wide_sleeves, human_scabbard, obiage, obijime, ribbon, tassel, braided_ponytail, drawing_sword, purple_nails, purple_kimono),";
// 九条裟羅
// $prompt = " <lora:kujou_sara_genshin:0.5>, ((black_hair)), (short_hair, yellow_eyes, bangs, bodysuit, bird_mask, black_gloves, black_socks, detached_sleeves, gloves, japanese_clothes, mask, mask_on_head, socks, tassel, tengu-geta, black_bodysuit, kneehighs, sash, wide_sleeves),";
// 久岐忍
// $prompt = " <lora:kuki_shinobu_genshin:0.5>, ((green_hair)), (purple_eyes, bangs, ponytail, hair_between_eyes, hair_ornament, breasts, black_shorts, crop_top, gloves, holding, jacket, mask, midriff, mouth_mask, navel, purple_jacket, short_shorts, shorts, ninja, ninja_mask, thighhighs, black_mask, electricity, partially_fingerless_gloves, rope, black_gloves, cropped_jacket, shimenawa),";
// 神里綾華
// $prompt = " <lora:kamisato_ayaka_genshin:0.5>, ((blue_hair)), (bangs, blue_eyes, long_hair, blunt_bangs, ribbon, hair_ribbon, ponytail, sidelocks, blush, hair_ornament, breasts, smile, white_hair, japanese_clothes, kimono, wide_sleeves, floral_print, obi, sash, arms_up),";
// 神里綾華　花嫁
// $prompt = " <lora:kamisato_ayaka_genshin:0.5>, ((white_hair)), (bangs, blue_eyes, long_hair, blunt_bangs, ribbon, hair_ribbon, ponytail, sidelocks, blue_hair, blush, hair_ornament, breasts, smile, closed_mouth, flower, holding, tress_ribbon, bouquet, bare_shoulders, holding_bouquet, wedding),";
// 八重神子
// $prompt = " <lora:yae_miko_genshin:0.5>, ((pink_hair)), (long_hair, bangs, purple_eyes, animal_ears, hair_between_eyes, fox_ears, jewelry, hair_ornament, earrings, smile, large_breasts, blush, bare_shoulders, detached_sleeves, japanese_clothes, long_sleeves, wide_sleeves, parted_lips, petals, shirt, sideboob, sleeveless, sleeveless_shirt),";
// 胡桃
// $prompt = " <lora:hu_tao_genshin:0.5>, ((brown_hair)), (long_hair, red_eyes, symbol-shaped_pupils, twintails, bangs, flower-shaped_pupils, smile, blush, hair_between_eyes, breasts, very_long_hair, black_nails, hair_ornament, plum_blossoms, hair_flower, black_headwear, hat, hat_flower, long_sleeves, nail_polish, chinese_clothes, jewelry, bracelet, ring, bug, butterfly, porkpie_hat),";
// 珊瑚宮心海
// $prompt = " <lora:sangonomiya_kokomi_genshin:0.5>, ((pink_hair, blue_hair)), (bangs, long_hair, multicolored_hair, bow-shaped_hair, purple_eyes, blunt_bangs, hair_ornament, blush, smile, breasts, gradient_hair, blue_eyes, bare_shoulders, frilled_sleeves, frills, navel, short_shorts, shorts, thighhighs, white_gloves, white_shorts, wide_sleeves, gloves, parted_lips, white_thighhighs, cleavage, detached_collar, long_sleeves, very_long_hair),";





///////////////////////
// スターレイル
////////////////////////
// 銀狼(スターレイル)
// $prompt = " <lora:silver_wolf_starrail:0.5>, grey_hair, long_hair, eyewear_on_head, grey_eyes, ponytail, bangs, sunglasses, hair_between_eyes, drill_hair, breasts, hair_ornament, 1girl, jacket, looking_at_viewer, fur_trim, gloves, choker, fingerless_gloves, black_gloves, shirt, white_shirt,";
// 三月なのか(スターレイル)
// $prompt = " {march_7th_starrail:1.15}, ((pink_hair)), (bangs, smile, blue_eyes, hair_between_eyes, breasts, long_hair, pink_eyes, medium_hair, choker, jacket, long_sleeves, shirt, white_shirt, blue_jacket, black_choker, skirt, black_gloves, blue_skirt, gloves),";

////////////////////////
// Fate/Grand Order
////////////////////////

////////////////////////
// Arknights
////////////////////////

////////////////////////
// Blue Archive
////////////////////////

////////////////////////
// THE iDOLM@STER
////////////////////////

////////////////////////
// Touhou
////////////////////////

////////////////////////
// Love Live
////////////////////////

/////////////////////////////////////////////////////////////////////////////////////////////////////////// 
// エロ関連のプロンプト
// <lora:funtoys_v1:0.1>,
// <lora:dildoRiding2:0.1>,
// <lora:noaftersex:0.2>, 
// <lora:GodPussy1 v4:1>
//  vaginal object insertion,　 膣内挿入
//  female masturbation,　女性のオナニー
// pussy juice,   マンコジュース、

// $prompt_nsfw1 = "  <lora:PSCowgirl:0.9>, <lora:PSCowgirl:0.9>, (squatting cowgirl position:1.2, squatting:1.2), 1girl, 1boy, penis, pov,  looking at viewer, SIGMA 24 mm F/1.4, big breasts:1.2, 20 years old, ";
// $prompt_nsfw1 = "  <lora:qqq-standing_doggystyle-v2:0.9>, 1girl, 1boy, penis, pov, standing sex, doggystyle, SIGMA 24 mm F/1.4, big breasts:1.2, 20 years old, ";
$prompt_nsfw1 = " SIGMA 24 mm F/1.4, big breasts:1.2, (Cute pose, photogravure pose, show panties), show panties, 20 years old, ";
// $prompt_nsfw2 = "  <lora:m99_labiaplasty_pussy_2:0.3>, SIGMA 24 mm F/1.4, (big breasts:1.2, hole panties ,beautiful pussy ), (nsfw:1.3, after sex:1.2, cum:1.3 ), 20 years old, ";
// $prompt_nsfw3 = "  <lora:m99_labiaplasty_pussy_2:0.3>, <lora:dildoRiding2:0.4>, (vaginal object insertion:1.15), SIGMA 24 mm F/1.4, (big breasts:1.2, hole panties ,beautiful pussy ), (nsfw:1.3, after sex:1.2, rotor insertion:1.2, Dildos insertion:1.2, cum:1.3 ), 20 years old, ";
$prompt_nsfw2 = "  <lora:Fucked Silly:0.2>,<lora:m99_labiaplasty_pussy_2:0.5>, SIGMA 24 mm F/1.4, (big breasts:1.2, hole panties ,beautiful pussy ), (nsfw:1.3, after sex:1.2, cum:1.3 ), 20 years old, ";
// $prompt_nsfw25 = "  <lora:Fucked Silly:0.2>,<lora:m99_labiaplasty_pussy_2:0.5>, SIGMA 24 mm F/1.4, (big breasts:1.2, hole panties ,beautiful pussy ), (nsfw:1.3, after sex:1.2, cum:1.3 ), 20 years old, ";
$prompt_nsfw3 = "  <lora:BetterPussyV0.1.0-LR00025-Locan:0.65>, <lora:dildoRiding2:0.35>, (vaginal object insertion:1.15), SIGMA 24 mm F/1.4, (big breasts:1.2, hole panties ,beautiful pussy ), (nsfw:1.3, after sex:1.2, rotor insertion:1.2, Dildos insertion:1.2, cum:1.3 ), 20 years old, ";

/////////////////////////////////////////////////////////////////////////////////////////////////////////// 
// テンプレート
$prompt_temple = "((best quality)), (8k, RAW photo, best quality, masterpiece:1.2), High detail RAW color photo, professional photograph, (realistic, photo realistic:1.37), cinematic light, (finerly detailed face:1.2), (masterpiece:1.5), (best quality:1.2),being seen looking at a camera with one's whole body in front of the camera, ultra high res, highly detail face, (20 years old) ";
$negative_prompt = " (logo, bad anatomy, bad hands, text, mole ), missing limb, bad hands, drink, glass, food, (have an object),(anal object insertion), (little girl),";
$negative_prompt_temple = "paintings, sketches, (worst quality:2), (low quality:2), (normal quality:2), lowres, normal quality, ((monochrome)), ((grayscale)), skin spots, acnes, skin blemishes, age spot, manboobs, (backlight:1.2), double navel, mutad arms, hused arms, neck lace, analog, analog effects, (sunglass:1.4), bad architecture, EasyNegative, ";


// ************************************************************************
// Main
// ************************************************************************

// 処理の開始時刻を取得
$startTime = microtime(true);

// 画像のパスを取得する処理
$images1 = getImagesFromFolder($folderPath1);
$images2 = getImagesFromFolder($folderPath2);
$images3 = getImagesFromFolder($folderPath3);

// 取り込み画像が存在するか確認する。
isImages($images1);
isImages($images2);
isImages($images3);

// 生成済み画像を削除
deleteImagesFromFolder($outputFolderPath);

// 出力先のフォルダがない場合はフォルダを生成する
if (!file_exists($outputFolderPath)) {
    // 第三引数でパーミッションを指定できます（例：0777）
    mkdir($outputFolderPath, 0777, true);
    echo "フォルダが作成されました: $outputFolderPath";
}

// 取り込み画像の枚数分APIを実行する
echo "api request start\r\n";
echo "folder1 \r\n";
// 非エロの生成処理
foreach ($images1 as $index => $imagePath) {
    echo "processing_image :".$imagePath . "\n";
    $base64Data = base64_encode(file_get_contents($imagePath));

    $checkPrompt = "";
    // 画像の情報解析
    // $checkPrompt = sendHttpRequestInterrogate($base64Data);

    // 画像生成処理
    $while_count = 0;
    while ($while_count < $api_count) {
        $response = sendHttpRequest($base64Data,$index,$while_count,$checkPrompt,'a', $prompt_nsfw1);
        $while_count++;
    }
}

echo "folder2 \r\n";
// そこそこのエロ画像生成
foreach ($images2 as $index => $imagePath) {
    echo "processing_image :".$imagePath . "\n";
    $base64Data = base64_encode(file_get_contents($imagePath));

    $checkPrompt = "";

    // 画像生成処理
    $while_count = 0;
    while ($while_count < $api_count) {
        $response = sendHttpRequest($base64Data,$index,$while_count,$checkPrompt,'b', $prompt_nsfw2);
        $while_count++;
    }
}

echo "folder3 \r\n";
// エロ画像生成処理
foreach ($images3 as $index => $imagePath) {
    echo "processing_image :".$imagePath . "\n";
    $base64Data = base64_encode(file_get_contents($imagePath));

    $checkPrompt = "";
    
    // 画像生成処理
    $while_count = 0;
    while ($while_count < $api_count) {
        $response = sendHttpRequest($base64Data,$index,$while_count,$checkPrompt,'c', $prompt_nsfw3);
        $while_count++;
    }
}



// 処理時間を確認
isTime($startTime);
// Discodeにpush通知を送信
discodePushMessage($startTime);

// 処理終了
echo "RUN END\r\n";
exit;


// ************************************************************************
// Function
// ************************************************************************

// APIにリクエストする処理
function sendHttpRequest($imageData,$index,$while_count,$checkPrompt,$folderMark,$p_nsfw) {
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
        "prompt"=> $prompt_temple.$prompt.$p_nsfw.$checkPrompt,
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
            $outputFileName = $outputFolderPath . "/" . ($index + 1) ."_". $while_count ."_". $index2  . ".png";
            $outputFileName = $outputFolderPath . "/" . $folderMark ."_". ($index + 1) ."_".$while_count."_". $index2  . ".png";
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

// 処理の時刻を計算
function discodePushMessage($startTime) {
    // Discord Webhook URL
    $webhookUrl = "https://discord.com/api/webhooks/1202769684861030452/gFqxFX5oez9jURaYagO6hC70lae3HWHwUmKjAx6gIZfkiiydnjFnErqdvW4hdED1pZ2Y";
    // 処理終了時刻を取得
    $endTime = microtime(true);
    // 処理時間を計算
    $executionTime = intval($endTime - $startTime);
    // 処理時間を時分秒形式に変換
    $hours = floor($executionTime / 3600);
    $minutes = floor(($executionTime % 3600) / 60);
    $seconds = $executionTime % 60;

    // メッセージデータ
    $messageData = [
        'content' => "AIの生成が完了しました。 処理時間：".$hours."時間 ".$minutes."分 ".$seconds."秒",
        'username' => 'SexyAI_PC1',
    ];

    // HTTPリクエストの設定
    $options = [
        CURLOPT_URL            => $webhookUrl,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HEADER         => false,
        CURLOPT_POST           => true,
        CURLOPT_POSTFIELDS     => json_encode($messageData),
        CURLOPT_HTTPHEADER     => [
            'Content-Type: application/json',
        ],
        CURLOPT_SSL_VERIFYHOST => 0,
        CURLOPT_SSL_VERIFYPEER => 0,
    ];

    // cURLを初期化して実行
    $ch = curl_init();
    curl_setopt_array($ch, $options);
    $response = curl_exec($ch);

    // エラーハンドリング
    if ($response === false) {
        echo 'cURLエラー: ' . curl_error($ch);
    } else {
        echo 'Discordにメッセージが送信されました。';
    }

    // cURLセッションを閉じる
    curl_close($ch);

}

