<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Form 1</title>
</head>
<body>
    <form name="Latihan1" method="POST" onsubmit="return checkform(this)">
       <div>
            NIM 
            <input type="text" name="txNIM"><br>
       </div><br>
       <div>
            Jenis Kelamin <br>
            <input type="radio" name="txJK" value="L">Laki - Laki
            <input type="radio" name="txJK" value="P">Perempuan<br>
       </div><br>
       <div>
            Jurusan 
            <select name="txJURUSAN">
                <option value="MTI">MTI</option>
                <option value="KAB">KAB</option>
                <option value="DSN">DSN</option>
            </select>
       </div><br>
       <div>
            Hobi <br>
            <input type="checkbox" name="txhobirugby" value="1">Rugby
            <input type="checkbox" name="txhobimartialarts" value="2">martialarts
            <input type="checkbox" name="txhobivoly" value="3">Bola voly
            <input type="checkbox" name="txhobirenang" value="4">Renang
        </div>
            <br><br>
        <div>
            <button type="submit" name="kirim">Kirim Data</button>
        </div>    
    </form>

    <script type="text/javascript">
        function checkform(frm){
            let form = frm.elements;
            let NIM = form.namedItem("txNIM").value;
            let jnskel = form.namedItem("txJK").value;
            let jur = form.namedItem("txJURUSAN").value;
            let hob = [
                form.namedItem("txhobirugby").checked,
                form.namedItem("txhobimartialarts").checked,
                form.namedItem("txhobivoly").checked,
                form.namedItem("txhobirenang").checked
            ];

            console.log("NIM: "+NIM);
            console.log("JenisKelamin: "+jnskel);
            console.log("jenisKelamin: "+jur);
            console.log("Hobi: "+hob);
            return false;
        }
    </script>


</body>
</html>