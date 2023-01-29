<div class="modal fade bd-example-modal-xl" tabindex="-1" id="modal_edit" role="dialog"
    aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content w3-flat-turquoise">
            <div class="modal-header bg-gradient-secondary">
                <h5 class="modal-title">แก้ไขข้อมูลคนไข้</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form name="frmEditSupplier" id="frmEditSupplier" method="POST" style="padding:10px;"
                action="javascript:void(0);">
                <div class="modal-body">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                aria-controls="profile" aria-selected="true">ข้อมูลทั่วไป</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="health-tab" data-toggle="tab" href="#health" role="tab"
                                aria-controls="health" aria-selected="false">ข้อมูลสุขภาพ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="history-tab" data-toggle="tab" href="#history" role="tab"
                                aria-controls="history" aria-selected="false">ประวัติการสั่งซื้อ</a>
                        </li>
                    </ul>
                    <br>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="profile" role="tabpanel"
                            aria-labelledby="profile-tab">
                            <div class="form-row">
                                <div class="col-md-3">
                                    <label for="txtCode">รหัสคนไข้ :</label>
                                    <input type="text" class="form-control" name="txtCode" id="txtCode" required>

                                </div>
                                <div class="form-group col-md-4">
                                    <label for="EmpName">เลขที่บัตรประชาชน :</label>
                                    <input type="text" class="form-control" name="EmpName" id="EmpName" value=""
                                        required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-2">
                                    <label for="ETitleName">คำนำหน้า :</label>
                                    <select class="custom-select" name="ETitleName" id="ETitleName" required>
                                        <option value=""></option>
                                        <option value="นาย">นาย</option>
                                        <option value="น.ส.">น.ส.</option>
                                        <option value="นาง">นาง</option>
                                        <option value="ว่าที่ร้อยตรี">ว่าที่ร้อยตรี</option>
                                        <option value="ดร.">ดร.</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="EmpName">ชื่อ :</label>
                                    <input type="text" class="form-control" name="EmpName" id="EmpName" value=""
                                        required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="LastName">นามสกุล :</label>
                                    <input type="text" class="form-control" name="LastName" id="LastName" value=""
                                        required>
                                </div>
                            </div>

                            <hr>
                            <div class="form-row">
                                <div class="col-md-4">
                                    <label for="EmpBirth">วันเกิด :</label>
                                    <input type="date" class="form-control" name="EmpBirth" id="EmpBirth" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="Age">อายุ :</label>
                                    <input type="text" class="form-control" name="Age" id="Age" value="">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-4">
                                    <label for="recipient-name" class="col-form-label">เลขที่</label>
                                    <input type="text" class="form-control" name="idno" id="idno">
                                </div>
                                <div class="col-md-4">
                                    <label for="recipient-name" class="col-form-label">ถนน</label>
                                    <input type="text" class="form-control" name="road" id="road">
                                </div>
                                <div class="col-md-4">
                                    <label for="recipient-name" class="col-form-label">ตำบล</label>
                                    <input type="text" class="form-control" name="subdistrict" id="subdistrict">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-4">
                                    <label for="recipient-name" class="col-form-label">อำเภอ</label>
                                    <input type="text" class="form-control" name="district" id="district">
                                </div>
                                <div class="col-md-4">
                                    <label for="recipient-name" class="col-form-label">จังหวัด</label>
                                    <select class="form-control" name="province" id="province">
                                        <?php getProvince();?>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="recipient-name" class="col-form-label">รหัสไปรษณีย์</label>
                                    <input type="text" class="form-control" name="zipcode" id="zipcode">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-4">
                                    <label for="recipient-name" class="col-form-label">เบอร์โทรศัพท์</label>
                                    <input type="text" class="form-control" name="tel" id="tel">
                                </div>
                                <div class="col-md-4">
                                    <label for="recipient-name" class="col-form-label">เบอร์แฟ็ค</label>
                                    <input type="text" class="form-control" name="fax" id="fax">
                                </div>
                                <div class="col-md-4">
                                    <label for="recipient-name" class="col-form-label">Email</label>
                                    <input type="text" class="form-control" name="email" id="email">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="health" role="tabpanel" aria-labelledby="health-tab">
                            <button type="button" class="btn btn-success" data-toggle="modal"
                                data-target="#modal_add"><i class="fa fa fa-tags" aria-hidden="true"></i>
                                เพิ่มผลตรวจ</button>
                            <br>
                            <br>
                            <table name="tableWD" id="tableWD" class="table table-bordered table-striped">
                                <thead>
                                    <tr style=" background-color:#D6EAF8;">
                                        <th width="15%">วันที่ตรวจ</th>
                                        <th width="15%">ข้างที่ตรวจ</th>
                                        <th width="15%">สถานะตา</th>
                                        <th width="15%">ค่าสายตา</th>                                        
                                        <th width="15%">ค่าความเอียง</th>
                                        <th width="15%">ผู้ตรวจ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>03/01/2566</td>
                                        <td>ซ้าย</td>
                                        <td>สั้น</td>
                                        <td>200</td>
                                        <td>100</td>
                                        <td>พนักงานขายคนที่ 1</td>
                                    </tr>
                                    <tr>
                                        <td>03/01/2566</td>
                                        <td>ขวา</td>
                                        <td>สั้น</td>
                                        <td>150</td>
                                        <td>0</td>
                                        <td>พนักงานขายคนที่ 1</td>
                                    </tr>
                                    <tr>
                                        <td>16/08/2565</td>
                                        <td>ซ้าย</td>
                                        <td>สั้น</td>
                                        <td>150</td>
                                        <td>50</td>
                                        <td>พนักงานขายคนที่ 2</td>
                                    </tr>
                                    <tr>
                                        <td>16/08/2565</td>
                                        <td>ขวา</td>
                                        <td>สั้น</td>
                                        <td>150</td>
                                        <td>0</td>
                                        <td>พนักงานขายคนที่ 2</td>
                                    </tr>
                                    <tr>
                                        <td>10/12/2564</td>
                                        <td>ซ้าย</td>
                                        <td>สั้น</td>
                                        <td>100</td>
                                        <td>50</td>
                                        <td>พนักงานขายคนที่ 2</td>
                                    </tr>
                                    <tr>
                                        <td>10/12/2564</td>
                                        <td>ขวา</td>
                                        <td>สั้น</td>
                                        <td>100</td>
                                        <td>0</td>
                                        <td>พนักงานขายคนที่ 2</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="history" role="tabpanel" aria-labelledby="history-tab">
                            <table name="tableSO" id="tableSO" class="table table-bordered table-striped">
                                <thead>
                                    <tr style=" background-color:#D6EAF8;">
                                        <th width="10%">เลขที่บิลขาย</th>
                                        <th width="12%">วันที่ออกเอกสาร</th>
                                        <th width="20%">ชื่อลูกค้า</th>
                                        <th width="20%">รายการสินค้า</th>
                                        <th width="13%">จำนวนเงินทั้งสิ้น</th>
                                        <th width="15%">เจ้าหน้าที่ขาย</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>2023KM001</td>
                                        <td>03/01/2566</td>
                                        <td>003NMA021 นาย ฮามา ชาเล่ต์</td>
                                        <td>109958 เลนส์ป้องกันแสงสะท้อน</td>
                                        <td>3,400.00</td>
                                        <td>พนักงานขายคนที่ 1</td>
                                    </tr>
                                    <tr>
                                        <td>2022KM102</td>
                                        <td>16/08/2565</td>
                                        <td>003NMA021 นาย ฮามา ชาเล่ต์</td>
                                        <td>109035 Ophtus PHANTOM</td>
                                        <td>5,400.00</td>
                                        <td>พนักงานขายคนที่ 2</td>
                                    </tr>
                                    <tr>
                                        <td>2021KM220</td>
                                        <td>10/12/2564</td>
                                        <td>003NMA021 นาย ฮามา ชาเล่ต์</td>
                                        <td>107081 เลนส์กระจก DUNA</td>
                                        <td>670.00</td>
                                        <td>พนักงานขายคนที่ 3</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>


                    <input type="hidden" id="code" name="code">
                </div>
                <div class="modal-footer">
                    <div class="col text-center">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
                        <button type="submit" id="frmEditSupplier" form="frmEditSupplier"
                            class="btn btn-primary">แก้ไข</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>