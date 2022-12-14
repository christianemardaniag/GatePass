<div class="container d-flex justify-content-center align-items-center flex-column" style="height:100vh;padding-bottom:40px;">
    <div class="titlepg" style="width:100%; padding-top:100px;">
        <h1>My Dashboard</h1>
    </div>
    <div class="container d-flex justify-content-center align-items-center" style="width:100%;height: 100%;">
        <?php

        $accno = $_SESSION["accno"];
        $select = "SELECT * FROM user_account WHERE acc_no = $accno";
        $result = mysqli_query($connect, $select);

        if (mysqli_num_rows($result) > 0) {

            while ($row = mysqli_fetch_assoc($result)) {
                if ($row['type'] == "student") {
                    $qr = $row["qr"];
                    $img = $row["image"];
                    $type = $row["type"];
                    $studno = $row["stud_no"];
                    $first = $row["first"];
                    $mid = $row["middle"];
                    $last = $row["last"];
                    $col = "none";
                    $course = "none";
                    $year = "none";
                    $section = "none";

                    echo ('
                        <div class"d-flex justify-content-center" style="width:40%; height:100%; padding-top:50px;">
                            <div class="d-flex justify-content-left align-items-center" style="width:100%;">
                                <div style="width:60%">
                                    <img src="data:image;base64,' . $img . '"style="height:100%; width:100%; border-radius: 50%;">
                                </div>
                                <div class="d-flex justify-content-left align-items-left flex-column" style="padding-left:20px; width:100%">
                                    <div class="ctype">
                                    '.strtoupper($type).'
                                    </div>
                                    <div class="wc">
                                        Welcome! '.ucfirst($first).'
                                    </div>
                                </div>
                            </div>
                            <div style="width:100%;padding:40px 0;">
                    ');
                    if($row['verified']=="pending"){
                        echo '<div class="status2">For Verification</div>';
                    }
                    else if($row['verified']=="yes"){
                        echo '<div class="status3">Verified</div>';
                    }
                    else{
                        echo '<div class="status1">Unverified</div>';
                    }
                    echo "</div>";
                    echo('
                            <div class="d-flex justify-content-center align-items-center flex-column" style="width:100%;">
                                <div>
                                    QR Code
                                </div>
                                <div>
                                    <img src="Images/'.$qr.'" height="150" width="150">
                                </div>
                            </div>
                        </div>
                    ');
                    echo ('
                        <div class"d-flex justify-content-center flex-column" style="width:90%; height:100%; padding-top:50px; padding-left:40px;">
                            <div class="d-flex justify-content-left align-items-start flex-column" style="width:100%; height:100%; border:1px solid black; padding:40px">
                                <div class="titleinfo" style="padding-bottom:10px;">
                                    Profile Summary
                                </div>
                                <div class="d-flex" style="width:100%;">
                                    <div class="t-info" style="width:100%;">
                                        <div class="info-d" style="padding:10px">
                                            Student Number:
                                        </div>
                                        <div class="info-d" style="padding:10px">
                                            Name:
                                        </div>
                                        <div class="info-d" style="padding:10px">
                                            College:
                                        </div>
                                        <div class="info-d" style="padding:10px">
                                            Course:
                                        </div>
                                        <div class="info-d" style="padding:10px">
                                            Year and Section:
                                        </div>
                                    </div>
                                    <div class="t-info" style="width:100%;">
                                        <div class="info-v" style="padding:10px">
                                            '.$studno.'
                                        </div>
                                        <div class="info-v" style="padding:10px">
                                            '.$first.' '.$mid.'. '.$last.'
                                        </div>
                                        <div class="info-v" style="padding:10px">
                                            '.$col.'
                                        </div>
                                        <div class="info-v" style="padding:10px">
                                            '.$course.'
                                        </div>
                                        <div class="info-v" style="padding:10px">
                                            '.$year.$section.'
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end" style="width:100%;padding-top:10px;">
                                    <div class="infobtn">
                                        <button type="button" >Profile</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    ');
                }
                else if ($row['type'] == "employee") {
                    $qr = $row["qr"];
                    $img = $row["image"];
                    $type = $row["type"];
                    $empno = $row["emp_no"];
                    $first = $row["first"];
                    $mid = $row["middle"];
                    $last = $row["last"];
                    $col = "none";

                    echo ('
                        <div class"d-flex justify-content-center" style="width:40%; height:100%; padding-top:50px;">
                            <div class="d-flex justify-content-left align-items-center" style="width:100%;">
                                <div style="width:60%">
                                    <img src="data:image;base64,' . $img . '"style="height:100%; width:100%; border-radius: 50%;">
                                </div>
                                <div class="d-flex justify-content-left align-items-left flex-column" style="padding-left:20px; width:100%">
                                    <div class="ctype">
                                    '.strtoupper($type).'
                                    </div>
                                    <div class="wc">
                                        Welcome! '.ucfirst($first).'
                                    </div>
                                </div>
                            </div>
                            <div style="width:100%;padding:40px 0;">
                    ');
                    if($row['verified']=="pending"){
                        echo '<div class="status2">For Verification</div>';
                    }
                    else if($row['verified']=="yes"){
                        echo '<div class="status3">Verified</div>';
                    }
                    else{
                        echo '<div class="status1">Unverified</div>';
                    }
                    echo "</div>";
                    echo('
                            <div class="d-flex justify-content-center align-items-center flex-column" style="width:100%;">
                                <div>
                                    QR Code
                                </div>
                                <div>
                                    <img src="Images/'.$qr.'" height="150" width="150">
                                </div>
                            </div>
                        </div>
                    ');
                    echo ('
                        <div class"d-flex justify-content-center flex-column" style="width:90%; height:100%; padding-top:50px; padding-left:40px;">
                            <div class="d-flex justify-content-left align-items-start flex-column" style="width:100%; height:100%; border:1px solid black; padding:40px">
                                <div class="titleinfo" style="padding-bottom:10px;">
                                    Profile Summary
                                </div>
                                <div class="d-flex" style="width:100%;">
                                    <div class="t-info" style="width:100%;">
                                        <div class="info-d" style="padding:10px">
                                            Employee Number:
                                        </div>
                                        <div class="info-d" style="padding:10px">
                                            Name:
                                        </div>
                                        <div class="info-d" style="padding:10px">
                                            College:
                                        </div>
                                    </div>
                                    <div class="t-info" style="width:100%;">
                                        <div class="info-v" style="padding:10px">
                                            '.$empno.'
                                        </div>
                                        <div class="info-v" style="padding:10px">
                                            '.$first.' '.$mid.'. '.$last.'
                                        </div>
                                        <div class="info-v" style="padding:10px">
                                            '.$col.'
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end" style="width:100%;padding-top:10px;">
                                    <div class="infobtn">
                                        <button type="button" >Profile</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    ');
                } 
                else if ($row['type'] == "visitor") {
                    $qr = $row["qr"];
                    $img = $row["image"];
                    $type = $row["type"];
                    $studno = $row["stud_no"];
                    $first = $row["first"];
                    $mid = $row["middle"];
                    $last = $row["last"];
                    $col = "none";
                    $course = "none";
                    $year = "none";
                    $section = "none";

                    echo ('
                        <div class"d-flex justify-content-center" style="width:40%; height:100%; padding-top:50px;">
                            <div class="d-flex justify-content-left align-items-center" style="width:100%;">
                                <div style="width:60%">
                                    <img src="data:image;base64,' . $img . '"style="height:100%; width:100%; border-radius: 50%;">
                                </div>
                                <div class="d-flex justify-content-left align-items-left flex-column" style="padding-left:20px; width:100%">
                                    <div class="ctype">
                                    '.strtoupper($type).'
                                    </div>
                                    <div class="wc">
                                        Welcome! '.ucfirst($first).'
                                    </div>
                                </div>
                            </div>
                            <div style="width:100%;padding:40px 0;">
                    ');
                    if($row['verified']=="pending"){
                        echo '<div class="status2">For Verification</div>';
                    }
                    else if($row['verified']=="yes"){
                        echo '<div class="status3">Verified</div>';
                    }
                    else{
                        echo '<div class="status1">Unverified</div>';
                    }
                    echo "</div>";
                    echo('
                            <div class="d-flex justify-content-center align-items-center flex-column" style="width:100%;">
                                <div>
                                    QR Code
                                </div>
                                <div>
                                    <img src="Images/'.$qr.'" height="150" width="150">
                                </div>
                            </div>
                        </div>
                    ');
                    echo ('
                        <div class"d-flex justify-content-center flex-column" style="width:90%; height:100%; padding-top:50px; padding-left:40px;">
                            <div class="d-flex justify-content-left align-items-start flex-column" style="width:100%; height:100%; border:1px solid black;padding:40px">
                                <div class="titleinfo" style="padding-bottom:10px;">
                                    Profile Summary
                                </div>
                                <div class="d-flex" style="width:100%;height:100%;">
                                    <div class="t-info" style="width:100%;">
                                        <div class="info-d" style="padding:10px">
                                            Account Number:
                                        </div>
                                        <div class="info-d" style="padding:10px">
                                            Name:
                                        </div>
                                    </div>
                                    <div class="t-info" style="width:100%;">
                                        <div class="info-v" style="padding:10px">
                                            '.$accno.'
                                        </div>
                                        <div class="info-v" style="padding:10px">
                                            '.$first.' '.$mid.'. '.$last.'
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end" style="width:100%;padding-top:10px;">
                                    <div class="infobtn">
                                        <button type="button" >Profile</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    ');
                } 
                else {
                    echo "No results found.";
                }
            }
        } 
        else {
            echo "No results found.";
        }
        mysqli_close($connect);
        ?>
    </div>
</div>
