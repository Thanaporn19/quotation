<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <title>ใบแจ้งหนี้</title>
  <style>
    body{font-family:sans-serif}
    .box{width:700px;margin:auto;border:1px solid #ccc;padding:20px}
  </style>
</head>
<body>

<div class="box">
  <h3 align="center">ใบแจ้งหนี้ (Invoice)</h3>
  <hr>

  <p><strong>บริษัท:</strong> <?= esc($invoice['company_name']) ?></p>
  <p><strong>เลขผู้เสียภาษี:</strong> <?= esc($invoice['tax_id']) ?></p>
  <p><strong>โทร:</strong> <?= esc($invoice['phone']) ?></p>
  <p><strong>ที่อยู่:</strong> <?= esc($invoice['address']) ?></p>
  <p><strong>วันที่:</strong> <?= esc($invoice['created_at']) ?></p>

</div>

</body>
</html>
