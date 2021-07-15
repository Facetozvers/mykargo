<?php 

if (isset($_GET['action']) && ($_GET['action'] == "daftar"))
{ 
daftar();

}
else if (isset($_GET['action']) && ($_GET['action'] == "simpan_daftar"))
{ 
    simpan_daftar();
}
else
{
login();
}
    ?>