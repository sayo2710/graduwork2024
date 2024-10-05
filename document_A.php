<!-- ドキュメントを作成します -->
<!DOCTYPE html>
<html lang="ja" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ドキュメント作成</title>
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
                <h1 class="font-bold text-center">ドキュメント作成</h1>
            </header>

            <main class="main">
                <form id="doc_form" method="post" action="document_B_display.php">
                    <div class="jumbotron">
                        <fieldset>
                            <legend>
                                <h1>基本情報</h1>
                            </legend>
                            <label>裁判所：<input maxlength="20" type="text" name="item_a_court" class="input input-bordered w-full max-w-xs flex items-center gap-2 "></label><br>
                            <label>事件名：<input maxlength="20" type="text" name="item_a_incident" class="input input-bordered w-full max-w-xs flex items-center gap-2 "></label><br>
                            <label>ドキュメント名：<input maxlength="20" type="text" name="item_a_doc" class="input input-bordered w-full max-w-xs flex items-center gap-2"></label><br>
                            <label>作成日：<input maxlength="15" type="text" name="item_a_date" class="input input-bordered w-full max-w-xs flex items-center gap-2"></label><br>
                            <label>作成者：<input maxlength="20" type="text" name="item_a_name" class="input input-bordered w-full max-w-xs flex items-center gap-2"></label><br>

                            <legend>
                                <h1>あなたについて</h1>
                            </legend>
                            <label>生活歴：<textarea maxlength="300" class="textarea textarea-bordered textarea-xs w-full max-w-xs flex items-center gap-2" name="item_b_life"></textarea></label><br>
                            <label>現在の職業：<textarea maxlength="300" class="textarea textarea-bordered textarea-xs w-full max-w-xs flex items-center gap-2" name="item_b_job"></textarea></label><br>
                            <label>収入：<textarea maxlength="300" class="textarea textarea-bordered textarea-xs w-full max-w-xs flex items-center gap-2" name="item_b_income"></textarea></label><br>
                            <label>支出：<textarea maxlength="300" class="textarea textarea-bordered textarea-xs w-full max-w-xs flex items-center gap-2" name="item_b_expense"></textarea></label><br>
                            <label>健康状態：<textarea maxlength="300" class="textarea textarea-bordered textarea-xs w-full max-w-xs flex items-center gap-2" name="item_b_health"></textarea></label><br>
                            <label>同居者：<textarea maxlength="300" class="textarea textarea-bordered textarea-xs w-full max-w-xs flex items-center gap-2" name="item_b_cohabitant"></textarea></label><br>
                            <label>住居：<textarea maxlength="300" class="textarea textarea-bordered textarea-xs w-full max-w-xs flex items-center gap-2" name="item_b_house"></textarea></label><br>

                            <legend>
                                <h1>お子様について</h1>
                            </legend>
                            <label>生活歴：<textarea maxlength="300" class="textarea textarea-bordered textarea-xs w-full max-w-xs flex items-center gap-2" name="item_c_life"></textarea></label><br>
                            <label>同居中の監護について：<textarea maxlength="300" class="textarea textarea-bordered textarea-xs w-full max-w-xs flex items-center gap-2" name="item_c_custody_A"></textarea></label><br>
                            <label>別居後の監護について：<textarea maxlength="300" class="textarea textarea-bordered textarea-xs w-full max-w-xs flex items-center gap-2" name="item_c_custody_B"></textarea></label><br>
                            <label>平日のスケジュール：<textarea maxlength="300" class="textarea textarea-bordered textarea-xs w-full max-w-xs flex items-center gap-2" name="item_c_schedule_A"></textarea></label><br>
                            <label>休日のスケジュール：<textarea maxlength="300" class="textarea textarea-bordered textarea-xs w-full max-w-xs flex items-center gap-2" name="item_c_schedule_B"></textarea></label><br>
                            <label>病歴：<textarea maxlength="300" class="textarea textarea-bordered textarea-xs w-full max-w-xs flex items-center gap-2" name="item_c_disease"></textarea></label><br>
                            <label>発達：<textarea maxlength="300" class="textarea textarea-bordered textarea-xs w-full max-w-xs flex items-center gap-2" name="item_c_development"></textarea></label><br>
                            <label>通園・通学：<textarea maxlength="300" class="textarea textarea-bordered textarea-xs w-full max-w-xs flex items-center gap-2" name="item_c_school"></textarea></label><br>
                            <label>両親の紛争について：<textarea maxlength="300" class="textarea textarea-bordered textarea-xs w-full max-w-xs flex items-center gap-2" name="item_c_conflict"></textarea></label><br>
                            <label>別居している親との交流状況：<textarea maxlength="300" class="textarea textarea-bordered textarea-xs w-full max-w-xs flex items-center gap-2" name="item_c_visitation"></textarea></label><br>

                            <legend>
                                <h1>お手伝いしてくれる方について</h1>
                            </legend>
                            <label>監護補助者：<textarea maxlength="300" class="textarea textarea-bordered textarea-xs w-full max-w-xs flex items-center gap-2" name="item_d_assistant"></textarea></label><br>
                            <label>監護補助の状況：<textarea maxlength="300" class="textarea textarea-bordered textarea-xs w-full max-w-xs flex items-center gap-2" name="item_d_auxiliary"></textarea></label><br>

                            <legend>
                                <h1>親権者になった後の計画について</h1>
                            </legend>
                            <label>監護計画：<textarea maxlength="300" class="textarea textarea-bordered textarea-xs w-full max-w-xs flex items-center gap-2" name="item_e_plan"></textarea></label><br>
                            <label>今後の面会交流：<textarea maxlength="300" class="textarea textarea-bordered textarea-xs w-full max-w-xs flex items-center gap-2" name="item_e_visitation"></textarea></label><br>
                        </fieldset>
                    </div>
                </form>

                <!-- button -->
                <div class="flex justify-center">
                    <div class="mx-px"><input type="submit" value="送信" form="doc_form" class="btn"></div>
                    <!-- select.phpへのハイパーリンクを追加 -->
                    <div class="mx-px"><button onclick="location.href='main.php'" class="btn">戻る</button></div>
                </div>
            </main>

            <footer>
                <div class="text-center"> G's graduation work 2024</div>
            </footer>
        </div>
    </div>

    </div>
    <!-- script -->
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
</body>

</html>