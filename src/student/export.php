<?php

// send raw data
header("Content-type: application/vnd-ms-excel");

// export file
header("Content-Disposition: attachment; filename=table-export.xls");

// table data
$server="localhost";
$user="rka";
$pass="rinokapi";
$db="dts_db";

$conn=mysqli_connect($server, $user, $pass, $db);

$sql="select * from dts_siswa";

$result=mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0) {
    echo '
    <table class="table table-borderless">
        <tr>
            <th>Nama Lengkap</th>
            <th>Alias</th>
            <th>Jenis Kelamin</th>
            <th>Hobi</th>
            <th>Asal</th>
        </tr>
    <tbody>';

    while($row=mysqli_fetch_assoc($result)){

    echo "
    <tr>
        <td>".$row["nama"]."</td>
        <td>".$row["alias"]."</td>
        <td>".$row["jk"]."</td>
        <td>".$row["hobi"]."</td>
        <td>".$row["asal"]."</td>
    </tr>";

}
    echo "</tbody>";
    echo "</table>";
} else {
    echo "No Data";
}

mysqli_close($conn);

?>