<body>
    <br>
<center>
    <h2>
        UBAH PASSWORD
    </h2>
</center>

<form method="POST" action="proses_change_password.php">
    <table style="margin-left:50px">
        <tr>
            <td>
                <label for="" style="margin-right:20px">Password Lama</label>
            </td>
            <td>
                <label for="" style="margin-right:20px">:</label>
            </td>
            <td>
                <input style="width:250px" type="password" name="old_pass" placeholder="Masukkan password lama anda">
        
            </td>
        </tr>
        <tr >
            <td >
                <label for="" style="padding-top:10px">Password Baru</label>
            </td>
            <td>
                <label for="" style="padding-top:10px">:</label>
            </td>
            <td style="padding-top:10px">
                <input style="width:250px" type="password" name="new_pass" placeholder="Masukkan password baru anda">
        
            </td>
        </tr>
        <tr >
            <td >
                <label for="" style="padding-top:10px">Confirm Password</label>
            </td>
            <td>
                <label for="" style="padding-top:10px">:</label>
            </td>
            <td style="padding-top:10px">
                <input style="width:250px" type="password" name="confirm" placeholder="Konfirmasi password">
        
            </td>
        </tr>
        <tr>
            <td>
                
            </td>
            <td></td>
            <td style="padding-top:10px"><button type="submit">Submit</button></td>
        </tr>
        
    </table>
</form>
</body>