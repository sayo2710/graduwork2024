<?php

require 'vendor/autoload.php';

use setasign\Fpdi\Tcpdf\Fpdi;

$pdf = new Fpdi();

$templateFile = __DIR__ . '/webservice.pdf';

if (!file_exists($templateFile)) {
    die('テンプレートファイルが見つかりません: ' . $templateFile);
}

$pageCount = $pdf->setSourceFile($templateFile);

//テンプレートを指定ページをインポート
$templateId = $pdf->importPage(5);
$size = $pdf->getTemplateSize($templateId);
$pdf->AddPage($size['orientation'], $size);
$pdf->useTemplate($templateId);

$pdf->SetFont('kozgopromedium', '', 12);
$pdf->SetXY(10, 10);
$pdf->Write(0, 'このテキストはテンプレートの上に追加されます。');

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

//$pdf->Output('output.pdf', 'I');

//PDF作成
//出力モード「S」：PDFを文字列として出力する。
$pdf = $pdf->Output('output.pdf', 'S');
session_start();
$_SESSION["pdf"] = $pdf; //セッションに退避
//header("output.pdf"); //ここでXXX.pdfみたいにファイル名を記述

//header('Location: https://olivehippo18.sakura.ne.jp/graduwork2024/test_FPDI_dis.php');
//exit;

//echo '<a href="https://olivehippo18.sakura.ne.jp/graduwork2024/test_FPDI_dis.php" target="_blank">Click Here</a>';

//echo '<script>
//setTimeout(function(){
//   window.open("https://olivehippo18.sakura.ne.jp/graduwork2024/test_FPDI_dis.php"", "_blank");
//}, 1000);
//</script>';

echo '<script>
window.open("https://olivehippo18.sakura.ne.jp/graduwork2024/test_FPDI_dis.php"", "_blank");
</script>';
