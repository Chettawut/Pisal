<?php
	header('Content-Type: application/json');
    include('../../../conn.php');
    date_default_timezone_set("Asia/Bangkok");

    $price = explode(',', $_POST['price']);
    $amount = explode(',', $_POST['amount']);
    $stcode = explode(',', $_POST['stcode']);
    $unit = explode(',', $_POST['unit']);
    $discount = explode(',', $_POST['discount']);
    
    if($_POST["vat"]=='Y')
    $places = 1;
    else
    $places = 2;

    $amount2 = explode(',', $_POST['amount2']);
    $stcode2 = explode(',', $_POST['stcode2']);
    $unit2 = explode(',', $_POST['unit2']);
    $places2 = 3;

    $code='';
    $warehouse=array("","A","B","C");
    $socode;
    $yearsocode;
    $check = 1;
    $current_amount=0;
    $current_price=0;
    $current_amtprice=0;

    foreach ($stcode as $key=> $value) {
        $sql = "SELECT amount FROM stock_level ";
        $sql .= " WHERE stcode = '". $stcode[$key] ."' and places = '". $places ."' ";
        $query = mysqli_query($conn,$sql);
        while($row = $query->fetch_assoc()) {

            $radio=1;

            if($unit[$key]=='ลัง')
            {
                $sql = "SELECT ratio FROM `stock` as a INNER join storage_unit as b on (a.storage_id=b.storage_id) ";
                $sql .= " WHERE a.stcode = '". $stcode[$key] ."' ";
                $query = mysqli_query($conn,$sql);
                $row2 = $query->fetch_assoc();
                $radio=$row2["ratio"];
            }
        
            if($row["amount"]<($amount[$key]*$radio))
            {
                $code .= 'ยอดสต๊อกรหัส '.$stcode[$key].' สต๊อก '.$warehouse[$places].' ไม่เพียงพอ                                                    ';
                $check = 0;
            }
        }

        // $code++;
        
    }        

    foreach ($stcode2 as $key2=> $value2) {
        $sql = "SELECT amount FROM stock_level ";
        $sql .= " WHERE stcode = '". $stcode2[$key2] ."' and places = '". $places2 ."' ";
        $query = mysqli_query($conn,$sql);
        while($row = $query->fetch_assoc())
        {

            $radio=1;

            if($unit2[$key2]=='ลัง')
            {
                $sql = "SELECT ratio FROM `stock` as a INNER join storage_unit as b on (a.storage_id=b.storage_id) ";
                $sql .= " WHERE a.stcode = '". $stcode2[$key2] ."' ";
                $query = mysqli_query($conn,$sql);
                $row2 = $query->fetch_assoc();
                $radio=$row2["ratio"];
            }

            if($row["amount"]<($amount2[$key2]*$radio))
            {
                $code .= 'ยอดสต๊อกรหัส '.$stcode2[$key2].' สต๊อก '.$warehouse[$places2].' ไม่เพียงพอ                                                    ';
                // $code = $row["amount"].' '.$amount[$key].' '.$socode;
                $check = 0;
            }
        }
    }

    if($check==1)
    {

        //ตัดสต๊อกสินค้า 
        foreach ($stcode as $key=> $value) {

            $radio=1;

            
                $sql = "SELECT b.ratio,c.amount,c.price,c.amtprice FROM `stock` as a INNER join storage_unit as b on (a.storage_id=b.storage_id) INNER join stock_level as c on (a.stcode=c.stcode)";
                $sql .= " WHERE a.stcode = '". $stcode[$key] ."' and c.places = '". $places ."'";
                $query = mysqli_query($conn,$sql);
                $row2 = $query->fetch_assoc();
                if($unit[$key]=='ลัง')
                $radio=$row2["ratio"];
                $current_amount=$row2["amount"]- ($amount[$key]*$radio) ;
                
                if($current_amount!=0)
                {
                    $current_price=$row2["price"]-($row2["amtprice"]*($amount[$key]*$radio));                
                    $current_amtprice=$current_price/$current_amount;
                }
                else
                {
                    $current_price=0;
                    $current_amtprice=0;
                }
                
                
            

            $sql = "UPDATE stock_level SET amount = ".$current_amount." ,price = ".$current_price.",amtprice= ".$current_amtprice." ";
            $sql .= " WHERE stcode = '". $stcode[$key] ."' and places = '". $places ."' ";
            $query = mysqli_query($conn,$sql);

            if(!$query) 
            {
                $code .= $stcode[$key].' ';
                $check = 0;
            }
        }

        //ตัดสต๊อกของแถม
        if($check==1)   
        {
            
            foreach ($stcode2 as $key2=> $value2) {
                if($stcode2[$key2]!='')
                {
                    $radio=1;

                    
                        $sql = "SELECT ratio,amount,price,amtprice FROM `stock` as a INNER join storage_unit as b on (a.storage_id=b.storage_id) INNER join stock_level as c on (a.stcode=c.stcode)";
                        $sql .= " WHERE a.stcode = '". $stcode2[$key2] ."' and c.places = '". $places2 ."'";
                        $query = mysqli_query($conn,$sql);
                        $row2 = $query->fetch_assoc();
                        if($unit2[$key2]=='ลัง')
                        $radio=$row2["ratio"];
                        $current_amount=$row2["amount"] - ($amount2[$key2]*$radio) ;

                        if($current_amount!=0)
                            {              
                                $current_price=$row2["price"]-($row2["amtprice"]*($amount2[$key2]*$radio));
                                $current_amtprice=$current_price/$current_amount;
                            }
                        else
                            {
                                $current_price=0;
                                $current_amtprice=0;
                            }      


                    $sql = "UPDATE stock_level SET amount = ".$current_amount." ,price = ".$current_price.",amtprice= ".$current_amtprice." ";
                    $sql .= " WHERE stcode = '". $stcode2[$key2] ."' and places = '". $places2 ."' ";
                    $query = mysqli_query($conn,$sql);

                    if(!$query) 
                    {
                        $code .= $stcode2[$key2].' ';
                        $check = 0;
                    }
                }
            }
        }
        
        $sql = "SELECT * FROM options order by year desc LIMIT 1";
        $query = mysqli_query($conn,$sql);

            while($row = $query->fetch_assoc()) {
                $code=sprintf("%03s", $row["maxsocode"]);
                $yearsocode=$row["year"];            
                $socode= $yearsocode.'KM'.$code;
            }

        $StrSQL = "INSERT INTO somaster (socode,cuscode,sodate,deldate,paydate,paydate2,payment,paystatus,currency,vat,remark,salecode,date,time";
        $StrSQL .= ")";
        $StrSQL .= "VALUES (";
        $StrSQL .= "'".$socode."','".$_POST["cuscode"]."','".$_POST["sodate"]."','".$_POST["deldate"]."','".$_POST["paydate"]."','".$_POST["paydate2"]."','".$_POST["payment"]."','".$_POST["ยังไม่ปิดจ่าย"]."' ";
        $StrSQL .= ", '".$_POST["currency"]."' , '".$_POST["vat"]."', '".$_POST["remark"]."', '".$_POST["salecode"]."' , '".date("Y-m-d")."','".date("H:i:s")."' ";
        $StrSQL .= ") ";
        $query = mysqli_query($conn,$StrSQL);

        if($query) {
            $strSQL = "UPDATE options SET ";
            $strSQL .= "maxsocode='".($code+1)."' ";
            $strSQL .= "WHERE year= ".$yearsocode." ";
            $query = mysqli_query($conn,$strSQL);
            foreach ($stcode as $key=> $value) {
                $StrSQL = "INSERT INTO sodetail (socode , stcode , price , unit , amount , supstatus , discount, giveaway, places ";

                //pono ต้องอยู่ท้ายตลอด
                $StrSQL .= ", sono)";
                $StrSQL .= "VALUES (";
                $StrSQL .= "'".$socode."', '". $stcode[$key] ."', '". $price[$key] ."', '". $unit[$key] ."' , '". $amount[$key] ."' , '01', '". $discount[$key] ."', '0', '". $places ."' ";            
                $StrSQL .= ", '". ++$key ."' ) ";
                $query = mysqli_query($conn,$StrSQL);
                }

                foreach ($stcode2 as $key2=> $value2) {
                    if($stcode2[$key2]!='')
                    {

                    $StrSQL = "INSERT INTO sodetail (socode , stcode , price , unit , amount , supstatus, giveaway, places  ";
                
                    //rrno ต้องอยู่ท้ายตลอด
                    $StrSQL .= ", sono)";
                    $StrSQL .= "VALUES (";
                    $StrSQL .= "'".$socode."', '". $stcode2[$key2] ."', '0', '". $unit2[$key2] ."' , '". $amount2[$key2] ."', '01', '1', '". $places2 ."' ";            
                    $StrSQL .= ", '". ++$key2 ."' ) ";
                    $query2 = mysqli_query($conn,$StrSQL);
                    }
                }
        }

        if($query) {
            echo json_encode(array('status' => '1','message'=> 'เพิ่มใบสั่งขาย '. $socode.' สำเร็จ'));
        }
        else
        {
            echo json_encode(array('status' => '0','message'=> $StrSQL));
        }
        
    }
    else
    echo json_encode(array('status' => '0','message'=> $code));
    
    // echo $StrSQL;

    
        
?>