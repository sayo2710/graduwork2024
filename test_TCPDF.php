<?php
// ライブラリを読み込む
include('./tcpdf/tcpdf.php');

// PDF オブジェクトを作成
$tcpdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8');

// ヘッダーフッターの設定
// デフォルトでヘッダーに余計な線が出るので削除
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);

// 余白設定
$pdf->SetMargins(0, 0, 0);
// セルパディング設定
$pdf->SetCellPadding(0);
// 自動改ページ
$pdf->SetAutoPageBreak(false);

// 1ページ目を準備
$pdf->AddPage();

// フォント設定
$pdf->SetFont('kozgopromedium', '', 24);

//html
$html = <<< EOF

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>テスト</title>
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="icon" href="./img/heart.png">
    <!-- daisyUI -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.10/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

EOF;

// Text
//$pdf->Text(10, 10, 'こんにちは世界');

//HTML出力
$pdf->writeHTML($html);

// PDF出力
$pdf->Output('sample.pdf', 'I');