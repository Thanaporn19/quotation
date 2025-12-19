<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <title>แบบฟอร์มขอใบเสนอราคา</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="icon" type="image/png" href="<?= base_url('assets/img/logo_lifelong11.png') ?>">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body{ background:#f0f2f5; }
    .form-box{
      background:#f8f9fb;
      border-radius:12px;
      padding:30px;
      max-width:900px;
      margin:auto;
    }
    .section-title{
      color:#0d6efd;
      font-weight:600;
      margin-top:30px;
    }
    .btn-submit{
      background:linear-gradient(90deg,#ff7a18,#ff9f1c);
      border:none;
      color:#fff;
      font-weight:600;
      border-radius:25px;
    }
    label span{ color:red; }
  </style>
</head>

<body>

<div class="container my-5">
  <div class="form-box shadow">

    <h5 class="text-center text-primary fw-bold mb-4">
      ขอใบเสนอราคาสำหรับองค์กร
    </h5>

    <!-- ✅ FORM START -->
    <form method="post" action="<?= site_url('quotation/save') ?>">

    <!-- ข้อมูลองค์กร -->
    <div class="row g-3">

      <div class="col-md-6">
        <label class="form-label">ชื่อ <span>*</span></label>
        <input type="text" name="firstname" class="form-control" required>
      </div>

      <div class="col-md-6">
        <label class="form-label">นามสกุล <span>*</span></label>
        <input type="text" name="lastname" class="form-control" required>
      </div>

      <div class="col-md-6">
        <label class="form-label">หมายเลขโทรศัพท์ <span>*</span></label>
        <input type="text" name="phone" class="form-control" required>
      </div>

      <div class="col-md-6">
        <label class="form-label">อีเมล <span>*</span></label>
        <input type="email" name="email" class="form-control" required>
      </div>

      <div class="col-md-6">
        <label class="form-label">ตำแหน่ง <span>*</span></label>
        <input type="text" name="position" class="form-control" required>
      </div>

      <div class="col-md-6">
        <label class="form-label">ชื่อบริษัท / องค์กร <span>*</span></label>
        <input type="text" name="company_name" class="form-control" required>
      </div>

      <div class="col-md-6">
        <label class="form-label">เลขประจำตัวผู้เสียภาษี (Tax ID)</label>
        <input type="text" name="tax_id" class="form-control">
      </div>

      <div class="col-md-6">
        <label class="form-label">ภาษี ณ ที่จ่าย</label>
        <select name="withholding_tax" class="form-select">
          <option value="0">ไม่หัก ณ ที่จ่าย</option>
          <option value="1">1%</option>
          <option value="3">3%</option>
        </select>
      </div>

      <div class="col-12">
        <label class="form-label">ที่อยู่บริษัท <span>*</span></label>
        <textarea name="address" class="form-control" rows="3" required></textarea>
      </div>

      <div class="col-md-6">
        <label class="form-label">วันที่ต้องการบริการ <span>*</span></label>
        <input type="date" name="service_date" class="form-control" required>
      </div>

    </div>

    <!-- ผู้ประสานงาน -->
    <h6 class="section-title">ผู้ประสานงาน (หากมี)</h6>

    <div class="row g-3">
      <div class="col-md-6">
        <label class="form-label">ชื่อ</label>
        <input type="text" name="contact_firstname" class="form-control">
      </div>

      <div class="col-md-6">
        <label class="form-label">นามสกุล</label>
        <input type="text" name="contact_lastname" class="form-control">
      </div>

      <div class="col-md-6">
        <label class="form-label">เบอร์โทรศัพท์</label>
        <input type="text" name="contact_phone" class="form-control">
      </div>

      <div class="col-md-6">
        <label class="form-label">อีเมล</label>
        <input type="email" name="contact_email" class="form-control">
      </div>
    </div>

    <!-- ปุ่ม -->
    <div class="text-center mt-4">
      <button type="submit" class="btn btn-submit px-5 py-2">
        ส่งข้อมูลคำขอ
      </button>
    </div>

    </form>
    <!-- ✅ FORM END -->

  </div>
</div>

</body>
</html>
