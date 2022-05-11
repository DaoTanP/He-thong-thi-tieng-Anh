<?php
//trang tinh diem (copy file cu chua sua)
// ket noi du lieu
$conn = mysqli_connect("localhost", "root", "", "hethongthitienganh") or die("khong ket noi");
mysqli_query($conn, "set names 'utf8'");

// phan trang
$numberOfLine = 40;
if (!isset($_GET['per_page']))
    $_GET['per_page'] = 0;
$startline = $_GET['per_page'] * $numberOfLine;
$command1 = "SELECT * FROM `cauhoi` WHERE 1 LIMIT $numberOfLine OFFSET $startline";

$command2 = "SELECT * FROM `cauhoi`";
$numberOfLineDB = mysqli_query($conn, $command2)->num_rows;
$numberpage = ceil($numberOfLineDB / $numberOfLine);

//lay du lieu ngau nhien
$command3 = "SET @MaCauHoi = FLOOR(RAND( ) * ($numberOfLineDB - 40)) + 1;
         SELECT * FROM `cauhoi`  WHERE MaCauHoi >= @MaCauHoi LIMIT 40";
$result3 = mysqli_query($conn, $command3);

$result = mysqli_query($conn, $command1);

//xu ly dap an
$core = 0;
while ($row = mysqli_fetch_row($result3)) {
    if ($dapAnChon == $row['dap an dung'] && $cauHoi == $row['cau hoi']) {
        $core += 0.25;
    }
}

echo $core;

echo "<table border=1 cellspacing=0 cellpading=0>  
        <tr> <td> id </td> <td> username </td>
        <td> password </td><td> fullname </td>
        <td> mathi </td><td> made1 </td>
        <td> made2 </td><td> made3 </td>
        <td> tgbatdau </td><td> maxacnhan </td>
        <td> diem </td></tr>
		</table>";

echo "rand()";

while ($row = mysqli_fetch_row($result3)) {
    echo "
        <td> $row[0] </td> <td> $row[1] </td>
        <td>$row[2]  </td><td>$row[3]  </td>
        <td> $row[4] </td><td> $row[5] </td>
        <td>$row[6]  </td><td>$row[7]  </td>
        <td>  $row[8]</td><td> $row[9] </td>
        <td> $row[10] </td> <br>
		";
}
echo "<br>";
for ($i = 1; $i <= $numberpage; $i++) {
    echo '<a href="Interface.php?per_page=' . $i . '">' . $i . '</a> | ';
}
