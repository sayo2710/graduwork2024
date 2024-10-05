<!-- 作成中のドキュメントを表示します -->
<?php
session_start();

//１．関数群の読み込み
require_once('funcs.php');
loginCheck();

//3. POSTデータ取得
////基本情報
$item_a_court = $_POST['item_a_court'];
$item_a_incident = $_POST['item_a_incident'];
$item_a_doc = $_POST['item_a_doc'];
$item_a_date = $_POST['item_a_date'];
$item_a_name = $_POST['item_a_name'];

////あなたについて
$item_b_life = $_POST['item_b_life'];
$item_b_job = $_POST['item_b_job'];
$item_b_income = $_POST['item_b_income'];
$item_b_expense = $_POST['item_b_expense'];
$item_b_health = $_POST['item_b_health'];
$item_b_cohabitant = $_POST['item_b_cohabitant'];
$item_b_house = $_POST['item_b_house'];

////お子様について
$item_c_life = $_POST['item_c_life'];
$item_c_custody_A = $_POST['item_c_custody_A'];
$item_c_custody_B = $_POST['item_c_custody_B'];
$item_c_schedule_A = $_POST['item_c_schedule_A'];
$item_c_schedule_B = $_POST['item_c_schedule_B'];
$item_c_disease = $_POST['item_c_disease'];
$item_c_development = $_POST['item_c_development'];
$item_c_school = $_POST['item_c_school'];
$item_c_conflict = $_POST['item_c_conflict'];
$item_c_visitation = $_POST['item_c_visitation'];

////お手伝いしてくれる方について
$item_d_assistant = $_POST['item_d_assistant'];
$item_d_auxiliary = $_POST['item_d_auxiliary'];

////親権者になった後の計画について
$item_e_plan = $_POST['item_e_plan'];
$item_e_visitation = $_POST['item_e_visitation'];
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>内容確認</title>
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="icon" href="./img/heart.png">
    <!-- daisyUI -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.10/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="flex justify-center">
        <div class="artboard phone-5 base-200"> <!-- 全体レイアウト -->

            <header class="header">
                <h1 class="font-bold text-center">内容確認</h1>
            </header>

            <main class="main">
                <!-- 基本情報 -->
                <legend>
                    <h1>基本情報</h1>
                </legend>
                <label>裁判所：<input maxlength="20" type="text" readonly name="item_a_court" class="input input-bordered w-full max-w-xs flex items-center gap-2" value="<? echo $item_a_court; ?>"></label><br>
                <label>事件名：<input maxlength="20" type="text" name="item_a_incident" class="input input-bordered w-full max-w-xs flex items-center gap-2" value="<? echo $item_a_incident; ?>"></label><br>
                <label>ドキュメント名：<input maxlength="20" type="text" name="item_a_doc" class="input input-bordered w-full max-w-xs flex items-center gap-2" value="<? echo $item_a_doc; ?>"></label><br>
                <label>作成日：<input maxlength="15" type="text" name="item_a_date" class="input input-bordered w-full max-w-xs flex items-center gap-2" value="<? echo $item_a_date; ?>"></label><br>
                <label>作成者：<input maxlength="20" type="text" name="item_a_name" class="input input-bordered w-full max-w-xs flex items-center gap-2" value="<? echo $item_a_name; ?>"></label><br>

                <legend>
                    <h1>あなたについて</h1>
                </legend>
                <label>生活歴：<textarea maxlength="300" class="textarea textarea-bordered textarea-xs w-full max-w-xs flex items-center gap-2" name="item_b_life" value="<? echo $item_b_life;; ?>"></textarea></label><br>
                <label>現在の職業：<textarea maxlength="300" class="textarea textarea-bordered textarea-xs w-full max-w-xs flex items-center gap-2" name="item_b_job" value="<? echo $item_b_job; ?>"></textarea></label><br>
                <label>収入：<textarea maxlength="300" class="textarea textarea-bordered textarea-xs w-full max-w-xs flex items-center gap-2" name="item_b_income" value="<? echo $item_b_income; ?>"></textarea></label><br>
                <label>支出：<textarea maxlength="300" class="textarea textarea-bordered textarea-xs w-full max-w-xs flex items-center gap-2" name="item_b_expense" value="<? echo $item_b_expense; ?>"></textarea></label><br>
                <label>健康状態：<textarea maxlength="300" class="textarea textarea-bordered textarea-xs w-full max-w-xs flex items-center gap-2" name="item_b_health" value="<? echo $item_b_health; ?>"></textarea></label><br>
                <label>同居者：<textarea maxlength="300" class="textarea textarea-bordered textarea-xs w-full max-w-xs flex items-center gap-2" name="item_b_cohabitant" value="<? echo $$item_b_cohabitant; ?>"></textarea></label><br>
                <label>住居：<textarea maxlength="300" class="textarea textarea-bordered textarea-xs w-full max-w-xs flex items-center gap-2" name="item_b_house" value="<? echo $$item_b_house; ?>"></textarea></label><br>

                <legend>
                    <h1>お子様について</h1>
                </legend>
                <label>生活歴：<textarea maxlength="300" class="textarea textarea-bordered textarea-xs w-full max-w-xs flex items-center gap-2" name="item_c_life" value="<? echo $item_c_life; ?>"></textarea></label><br>
                <label>同居中の監護について：<textarea maxlength="300" class="textarea textarea-bordered textarea-xs w-full max-w-xs flex items-center gap-2" name="item_c_custody_A" value="<? echo $item_c_custody_A; ?>"></textarea></label><br>
                <label>別居後の監護について：<textarea maxlength="300" class="textarea textarea-bordered textarea-xs w-full max-w-xs flex items-center gap-2" name="item_c_custody_B" value="<? echo $item_c_custody_B; ?>"></textarea></label><br>
                <label>平日のスケジュール：<textarea maxlength="300" class="textarea textarea-bordered textarea-xs w-full max-w-xs flex items-center gap-2" name="item_c_schedule_A" value="<? echo $item_c_schedule_A; ?>"></textarea></label><br>
                <label>休日のスケジュール：<textarea maxlength="300" class="textarea textarea-bordered textarea-xs w-full max-w-xs flex items-center gap-2" name="item_c_schedule_B" value="<? echo $item_c_schedule_B; ?>"></textarea></label><br>
                <label>病歴：<textarea maxlength="300" class="textarea textarea-bordered textarea-xs w-full max-w-xs flex items-center gap-2" name="item_c_disease" value="<? echo $item_c_disease; ?>"></textarea></label><br>
                <label>発達：<textarea maxlength="300" class="textarea textarea-bordered textarea-xs w-full max-w-xs flex items-center gap-2" name="item_c_development" value="<? echo $item_c_development; ?>"></textarea></label><br>
                <label>通園・通学：<textarea maxlength="300" class="textarea textarea-bordered textarea-xs w-full max-w-xs flex items-center gap-2" name="item_c_school" value="<? echo $item_c_school; ?>"></textarea></label><br>
                <label>両親の紛争について：<textarea maxlength="300" class="textarea textarea-bordered textarea-xs w-full max-w-xs flex items-center gap-2" name="item_c_conflict" value="<? echo $item_c_conflict; ?>"></textarea></label><br>
                <label>別居している親との交流状況：<textarea maxlength="300" class="textarea textarea-bordered textarea-xs w-full max-w-xs flex items-center gap-2" name="item_c_visitation" value="<? echo $item_c_visitation; ?>"></textarea></label><br>

                <legend>
                    <h1>お手伝いしてくれる方について</h1>
                </legend>
                <label>監護補助者：<textarea maxlength="300" class="textarea textarea-bordered textarea-xs w-full max-w-xs flex items-center gap-2" name="item_d_assistant" value="<? echo $item_d_assistant; ?>"></textarea></label><br>
                <label>監護補助の状況：<textarea maxlength="300" class="textarea textarea-bordered textarea-xs w-full max-w-xs flex items-center gap-2" name="item_d_auxiliary" value="<? echo $item_d_auxiliary; ?>"></textarea></label><br>

                <legend>
                    <h1>親権者になった後の計画について</h1>
                </legend>
                <label>監護計画：<textarea maxlength="300" class="textarea textarea-bordered textarea-xs w-full max-w-xs flex items-center gap-2" name="item_e_plan" value="<? echo $item_e_plan; ?>"></textarea></label><br>
                <label>今後の面会交流：<textarea maxlength="300" class="textarea textarea-bordered textarea-xs w-full max-w-xs flex items-center gap-2" name="item_e_visitation" value="<? echo $item_e_visitation; ?>"></textarea></label><br>
                </fieldset>

                <!------- PDFへ内容を送信 ------->
                <form id="pdf_form" method="post" action="document_C_pdf.php" target="_blank">
                    <!-- 基本情報 -->
                    <input type="hidden" name="item_a_court" value="<?php echo $item_a_court; ?>">
                    <input type="hidden" name="item_a_incident" value="<?php echo $item_a_incident; ?>">
                    <input type="hidden" name="item_a_doc" value="<?php echo $item_a_doc; ?>">
                    <input type="hidden" name="item_a_date" value="<?php echo $item_a_date; ?>">
                    <input type="hidden" name="item_a_name" value="<?php echo $item_a_name; ?>">

                    <!-- あなたについて -->
                    <input type="hidden" name="item_b_life" value="<?php echo $item_b_life; ?>">
                    <input type="hidden" name="item_b_job" value="<?php echo $item_b_job; ?>">
                    <input type="hidden" name="item_b_income" value="<?php echo $item_b_income; ?>">
                    <input type="hidden" name="item_b_expense" value="<?php echo $item_b_expense; ?>">
                    <input type="hidden" name="item_b_health" value="<?php echo $item_b_health; ?>">
                    <input type="hidden" name="item_b_cohabitant" value="<?php echo $item_b_cohabitant; ?>">
                    <input type="hidden" name="item_b_house" value="<?php echo $item_b_house; ?>">

                    <!-- お子様について -->
                    <input type="hidden" name="item_c_life" value="<?php echo $item_c_life; ?>">
                    <input type="hidden" name="item_c_custody_A" value="<?php echo $item_c_custody_A; ?>">
                    <input type="hidden" name="item_c_custody_B" value="<?php echo $item_c_custody_B; ?>">
                    <input type="hidden" name="item_c_schedule_A" value="<?php echo $item_c_schedule_A; ?>">
                    <input type="hidden" name="item_c_schedule_B" value="<?php echo $item_c_schedule_B; ?>">
                    <input type="hidden" name="item_c_disease" value="<?php echo $item_c_disease; ?>">
                    <input type="hidden" name="item_c_development" value="<?php echo $item_c_development; ?>">
                    <input type="hidden" name="item_c_school" value="<?php echo $item_c_school; ?>">
                    <input type="hidden" name="item_c_conflict" value="<?php echo $item_c_conflict; ?>">
                    <input type="hidden" name="item_c_visitation" value="<?php echo $item_c_visitation; ?>">

                    <!-- お手伝いしてくれる方について -->
                    <input type="hidden" name="item_d_assistant" value="<?php echo $item_d_assistant; ?>">
                    <input type="hidden" name="item_d_auxiliary" value="<?php echo $item_d_auxiliary; ?>">

                    <!-- 親権者になった後の計画について -->
                    <input type="hidden" name="item_e_plan" value="<?php echo $item_e_plan; ?>">
                    <input type="hidden" name="item_e_visitation" value="<?php echo $item_e_visitation; ?>">
                </form>

                <!-- button -->
                <div class="flex justify-center">
                    <div class="mx-px"><input type="submit" value="作成" form="pdf_form" class="btn"></div>
                    <!-- select.phpへのハイパーリンクを追加 -->
                    <div class="mx-px"><button onclick="location.href='document_A.php'" class="btn">戻る</button></div>
                </div>
            </main>

            <footer>
                <div class="text-center"> G's graduation work 2024</div>
            </footer>
        </div>
    </div>

    <!-- script -->
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
</body>

</html>