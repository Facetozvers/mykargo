<?php 
    include '../../../include/all_include.php';

    $old = md5(mysql_real_escape_string($_POST['old_pass']));
    $new = $_POST['new_pass'];
    $confirm = $_POST['confirm'];
    $id_driver = $_COOKIE['id'];
    $qcek = "select * from data_driver where id_driver='$id_driver' and password='$old'";
    if($new == $confirm){
        if(mysql_num_rows(mysql_query($qcek)) > 0 ){
            $new_pass = md5(mysql_real_escape_string($new));
        
            $qUpdate = 
            "update data_driver
            set password='$new_pass'
            where id_driver='$id_driver'";

            $result = mysql_query($qUpdate);
            if($result){ ?>
                <script>
                alert('Password berhasil diubah!');
                location.href = "../data_driver/index.php?input=change_password"</script>
                <?php
            }
            
            
        }
        else{ ?>
        <script>
        alert('Password anda tidak cocok!');
        location.href = "../data_driver/index.php?input=change_password"</script>
        <?php
        }
    }
    else{?>
        <script>
            alert('Konfirmasi password tidak cocok!');
        location.href = "../data_driver/index.php?input=change_password"</script>
        <?php
    }
?>