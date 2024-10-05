<?php
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

//*------------------------------------TCPDF設定------------------------------------*//
// ライブラリを読み込む
require 'vendor/autoload.php';

use setasign\Fpdi\Tcpdf\Fpdi;

$pdf = new Fpdi();

$templateFile = __DIR__ . '/webservice.pdf';

if (!file_exists($templateFile)) {
    die('テンプレートファイルが見つかりません: ' . $templateFile);
}

$pageCount = $pdf->setSourceFile($templateFile);

//テンプレートを指定ページをインポート
////1ページ目
$templateId = $pdf->importPage(1);
$size = $pdf->getTemplateSize($templateId);
$pdf->AddPage($size['orientation'], $size);
$pdf->useTemplate($templateId);
$pdf->SetFont('kozgopromedium', '', 12);

//////基本情報
$pdf->SetXY(20, 30);
$pdf->Write(0, $item_a_court);

$pdf->SetXY(20, 35);
$pdf->Write(0, $item_a_incident);

$pdf->SetXY(80, 47);
$pdf->Write(0, $item_a_doc);

$pdf->SetXY(155, 57);
$pdf->Write(0, $item_a_date);

$pdf->SetXY(160, 64);
$pdf->Write(0, $item_a_name);

////あなたについて
$pdf->SetXY(20, 97);
$pdf->Write(0, $item_b_life);

$pdf->SetXY(20, 150);
$pdf->Write(0, $item_b_job);

$pdf->SetXY(20, 205);
$pdf->Write(0, $item_b_income);

////2ページ目 
$templateId = $pdf->importPage(2);
$size = $pdf->getTemplateSize($templateId);
$pdf->AddPage($size['orientation'], $size);
$pdf->useTemplate($templateId);
$pdf->SetFont('kozgopromedium', '', 12);

////あなたについて
$pdf->SetXY(20, 43);
$pdf->Write(0, $item_b_expense);

$pdf->SetXY(20, 93);
$pdf->Write(0, $item_b_health);

$pdf->SetXY(20, 143);
$pdf->Write(0, $item_b_cohabitant);

$pdf->SetXY(20, 193);
$pdf->Write(0, $item_b_house);


////3ページ目 
$templateId = $pdf->importPage(3);
$size = $pdf->getTemplateSize($templateId);
$pdf->AddPage($size['orientation'], $size);
$pdf->useTemplate($templateId);
$pdf->SetFont('kozgopromedium', '', 12);

////お子様について
$pdf->SetXY(20, 47);
$pdf->Write(0, $item_c_life);

$pdf->SetXY(20, 102);
$pdf->Write(0, $item_c_custody_A);

$pdf->SetXY(20, 155);
$pdf->Write(0, $item_c_custody_B);

////4ページ目 
$templateId = $pdf->importPage(4);
$size = $pdf->getTemplateSize($templateId);
$pdf->AddPage($size['orientation'], $size);
$pdf->useTemplate($templateId);
$pdf->SetFont('kozgopromedium', '', 12);

////お子様について
$pdf->SetXY(20, 45);
$pdf->Write(0, $item_c_schedule_A);

$pdf->SetXY(20, 98);
$pdf->Write(0, $item_c_schedule_B);

$pdf->SetXY(30, 152);
$pdf->Write(0, $item_c_disease);

$pdf->SetXY(30, 204);
$pdf->Write(0, $item_c_development);

////5ページ目 
$templateId = $pdf->importPage(5);
$size = $pdf->getTemplateSize($templateId);
$pdf->AddPage($size['orientation'], $size);
$pdf->useTemplate($templateId);
$pdf->SetFont('kozgopromedium', '', 12);

////お子様について
$pdf->SetXY(30,45);
$pdf->Write(0, $item_c_school);

$pdf->SetXY(30, 93);
$pdf->Write(0, $item_c_conflict);

$pdf->SetXY(30, 145);
$pdf->Write(0, $item_c_visitation);

////6ページ目 
$templateId = $pdf->importPage(6);
$size = $pdf->getTemplateSize($templateId);
$pdf->AddPage($size['orientation'], $size);
$pdf->useTemplate($templateId);
$pdf->SetFont('kozgopromedium', '', 12);

////お手伝いしてくれる方について
$pdf->SetXY(30, 50);
$pdf->Write(0, $item_d_assistant);

$pdf->SetXY(30, 98);
$pdf->Write(0, $item_d_auxiliary);

////親権者になった後の計画について
$pdf->SetXY(30, 154);
$pdf->Write(0, $item_e_plan);

$pdf->SetXY(30, 204);
$pdf->Write(0, $item_e_visitation);



// for ($pageNo = 1; $pageNo <= $pageCount; $pageNo++) {
//     // テンプレートの各ページをインポート
//     $templateId = $pdf->importPage($pageNo);
//     $size = $pdf->getTemplateSize($templateId);
//     $pdf->AddPage($size['orientation'], $size);
//     $pdf->useTemplate($templateId);

//     // 日本語フォントの設定
//     $pdf->SetFont('kozgopromedium', '', 12);

//     // 必要に応じて、追加のコンテンツを挿入
//     $pdf->SetXY(10, 10);
//     $pdf->Write(0, 'このテキストはテンプレートの上に追加されます。');
// }

$pdf->Output('output.pdf', 'I');