<!doctype html>
<html>
<head>
    <title>M's site</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link href="css/all.css" rel="stylesheet">
    <script src="js/all.js"></script>
</head>
<body>
<div class="container">
    @yield('content')
</div>
<!-- ==== Modal ==== -->
<div id="modal" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">วิธีสั่งซื้อ</h4>
            </div>
            <div class="modal-body">

                <div class="col-md-6">
                    <img class="img-responsive" src="images/Line.png"
                            style="align-items: center;">
                    <h4>ธนาคาร</h4>
                    <p>ชื่อบัญชี <strong>ชุติพงศ์ รูปกลม</strong>
                        กสิกรไทย สาขาพระจอมเกล้าฯลาดกระบัง
                        <strong>เลขบัญชี 631-210-6998</strong></p>
                </div>

                <div class="col-md-6">
                    <h4>ขั้นตอนสั่งซื้อมีดังนี้</h4>
                    <ol>
                        <li>Line : khunemz</li>
                        <li>Mobile : 097-340-9095 คุณเอ็ม</li>
                        <li>Facebook : <a href="https://www.facebook.com/chutipong.roobklom">คุณเอ็ม</a></li>
                    </ol>
                    <ol>
                        <li>ติดต่อผู้ขายผ่านทางช่องด้านบน</li>
                        <li>รหัสสินค้าและจำนวนที่ต้องการ</li>
                        <li>ผู้ขายยืนยันคำสั่งซื้อและยอดชำระเงินแก่ลูกค้า</li>
                        <li>เมื่อลูกค้าชำระเงินแล้วให้ส่ง Slip การโอนเงินพร้อม
                        รหัสสินค้า และที่อยู่จัดส่งให้กับผู้ขาย</li>
                        <li>ผู้ขายดำเนินการส่งพัสดุและจะแจ้งหมายเลข Tracking number แก่ลูกค้า</li>
                        <li>นอนตีพุงรับสินค้าอยู่ที่บ้าน</li>
                    </ol>
                </div>


            </div>
            <div class="modal-footer">
                <p><strong>*** สินค้าของเราได้มาตรฐานทุกชิ้น ขอบคุณที่ไว้วางใจพวกเรา ****</strong></p>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- ==== Footer ==== -->
<footer id="footer" class="footer">
    <div class="container">
        <p>This is footer</p>
    </div>
</footer>

</body>
</html>