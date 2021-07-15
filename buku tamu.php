<?php if (empty($p)) {
    header("Location: index.php?p=home");
    die();
} ?>
<?php

//KODE OTOMATIS	 	
function autonumber($id_terakhir, $panjang_kode, $panjang_angka)
{
    $kode = substr($id_terakhir, 0, $panjang_kode);
    $angka = substr($id_terakhir, $panjang_kode, $panjang_angka);
    $angka_baru = str_repeat("0", $panjang_angka - strlen($angka + 1)) . ($angka + 1);
    $id_baru = $kode . $angka_baru;
    return $id_baru;
}

$cek = mysqli_query($con_mysqli, "SELECT * FROM data_buku_tamu");
$rowcek = mysqli_num_rows($cek);
if ($rowcek > 0) {
    $id_buku_tamu = mysqli_query($con_mysqli, "SELECT max(id_buku_tamu) as id_buku_tamu FROM data_buku_tamu");
    $data_buku_tamu = mysqli_fetch_array($id_buku_tamu);
    $id_buku_tamu_akhir = $data_buku_tamu['id_buku_tamu'];
    $id_buku_tamu_otomatis = autonumber($id_buku_tamu_akhir, 3, 3);
} else {
    $kodedepan = strtoupper('data_buku_tamu');
    $kodedepan = str_replace("DATA_", "", $kodedepan);
    $kodedepan = str_replace("DATA", "", $kodedepan);
    $kodedepan = str_replace("TABEL_", "", $kodedepan);
    $kodedepan = str_replace("TABEL", "", $kodedepan);
    $kodedepan = str_replace("TABLE_", "", $kodedepan);
    $kodedepan = strtoupper(substr($kodedepan, 0, 3));
    $id_buku_tamu_otomatis = $kodedepan . "001";
}

?>

<br>
<center><h2> BUKU TAMU </h2></center>
<br>

<div class="container">
    <div class="col-md-12">

        <div class="content-box">
            <form action="proses_simpan_Buku Tamu.php" enctype="multipart/form-data" method="post">
                <div class="content-box-content">
                    <div id="postcustom">
                        <table <?php tabel_in(100, '%', 0, 'center'); ?>>
                            <tbody>

                            <input type="hidden" readonly value="<?php echo $id_buku_tamu_otomatis; ?>"
                                   name="id_buku_tamu" placeholder="id_buku_tamu" id="id_buku_tamu" required="required">


                            <tr>
                                <td width="25%" class="leftrowcms">
                                    <label>Tanggal <span class="highlight"></span></label>
                                </td>
                                <td width="2%">:</td>
                                <td>
                                    <input value=
                                           <?php echo tanggal_otomatis(); ?>
                                           type="date" name="tanggal" readonly id="tanggal" placeholder="Tanggal"
                                           required="required">


                                </td>
                            </tr>
                            <tr>
                                <td width="25%" class="leftrowcms">
                                    <label>Nama <span class="highlight"></span></label>
                                </td>
                                <td width="2%">:</td>
                                <td>
                                    <input type="text" name="nama" id="nama" placeholder="Nama" required="required">


                                </td>
                            </tr>
                            <tr>
                                <td width="25%" class="leftrowcms">
                                    <label>Email <span class="highlight"></span></label>
                                </td>
                                <td width="2%">:</td>
                                <td>
                                    <input type="text" name="email" id="email" placeholder="Email" required="required">


                                </td>
                            </tr>
                            <tr>
                                <td width="25%" class="leftrowcms">
                                    <label>No&nbsp;Telepon <span class="highlight"></span></label>
                                </td>
                                <td width="2%">:</td>
                                <td>
                                    <input type="text" name="no_telepon" id="no_telepon" placeholder="No&nbsp;Telepon"
                                           required="required">


                                </td>
                            </tr>
                            <tr>
                                <td width="25%" class="leftrowcms">
                                    <label>Komentar&nbsp;Dan&nbsp;Saran <span class="highlight"></span></label>
                                </td>
                                <td width="2%">:</td>
                                <td>
				<textarea class='ckeditor' type="textarea" name="komentar_dan_saran" id="komentar_dan_saran"
                          placeholder="Komentar&nbsp;Dan&nbsp;Saran" required="required">

</textarea>
                                </td>
                            </tr>

                            </tbody>
                        </table>
                        <div class="content-box-content">
                            <center>
                                <?php btn_simpan(' PROSES'); ?>
                            </center>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>