<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jquery Ajax 01 atashi make CDN</title>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
</head>
<body>

    <div class="nama"></div>
    
    <script>
        $(document).ready(function(){
            let urlapi = "https://webpro.ptov.my.id/api/curduser.php?aksi=get"
            $.get({
                url: urlapi,
                success: function(dta, status, xhr){
                    console.log(dta);
                    $(".nama").html(dta.isi[1][0]); 
                }, // function succes
                error: function(xhr, status, ert){

                } // function error
        });

        });
    </script>
        <!-- <script>
        // $.get(); boleh salah satunya, manggil data
        // $.post mengambil data
        // $.ajax itu bisa ke dua duanya
        // </script>-->
  
</body>
</html>