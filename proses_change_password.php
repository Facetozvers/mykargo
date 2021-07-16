<?php 
    include 'admin/include/koneksi/koneksi.php';

    $old = md5(mysql_real_escape_string($_POST['old_pass']));
    $new = $_POST['new_pass'];
    $confirm = $_POST['confirm'];

    $qcek = "select * from data_pelanggan where password='$old'";
    if($new == $confirm){
        if(mysql_num_rows(mysql_query($qcek)) > 0 ){
            $new_pass = md5(mysql_real_escape_string($new));
            $id_pel = $_COOKIE['kodene'];
            $qUpdate = 
            "update data_pelanggan
            set password='$new_pass'
            where id_pelanggan='$id_pel'";

            $result = mysql_query($qUpdate);
            if($result){ ?>
                <script>
                alert('Password berhasil diubah!');
                location.href = "index.php?p=change_password"</script>
                <?php
            }
            
            
        }
        else{ ?>
        <script>
        alert('Password anda tidak cocok!');
        location.href = "index.php?p=change_password"</script>
        <?php
        }
    }
    else{?>
        <script>
            alert('Konfirmasi password tidak cocok!');
        location.href = "index.php?p=change_password"</script>
        <?php
    }
?>