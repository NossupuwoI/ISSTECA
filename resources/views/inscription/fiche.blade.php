<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fiche de pré-inscription</title>
    <style>
        table
        {
           
            text-align: center;
        }
    </style>
</head>
<body>
    <div style="display:flex ;">
        <div class=" col-md-6" style="float:left">
            <p style="padding:20px; text-align:center; font-size: 10px;" > République du Cameroun <br>
                Paix – Travail – Patrie <br>
                *********<br>
                Ministère de l’Enseignement Supérieur<br>
                ******************<br>
                Centre de formation professionnelle la canadienne<br>
                ******************<br>
                B.P.: 75 Bafoussam-Cameroun Tél. (+237) 695 82 92 30<br>
                695 82 92 30/671 33 78 29 <br>
                Email: cfpcanadienne@gmail.com<br>
                ******************<br>
                Site Web: www.cfpcanadienne.com
            </p>



        </div>
<div><img src="{{ asset('ass/assets/img/logo.png') }}" width="120px;" height="70px" alt="" style="margin-top: 60px; margin-left: 50px;"></div>
        <div class="col-md-6" style="float:right">
            <p style="padding:30px 0px 0px 60px; text-align:center; font-size: 10px"> Republic of Cameroon<br>
                Peace – Work – Fatherland<br>
                *********<br>
                Ministry of higher education<br>
                ******************<br>
                La canadienne vocational training center <br>
                ******************<br>
                PO BOX: 75 Bafoussam-Cameroon Tel. (+237) 695 82 92 30<br>
                695 82 92 30/671 33 78 29 <br>
                Email: cfpcanadienne@gmail.com<br>
                ******************<br>
                Website: www.cfpcanadienne.com </p>

        </div>
</div>

<div class="container">
<table id="example1" class="table">
    <tr>
        <td>Nom:
        {{ $inscriptions->nom }}</td>
        <td>Prenom:
        {{ $inscriptions->prenom }}</td>
    </tr>
</table>
</div>
<script>
   window.addEventListener("load",window.print());  
  </script>
</body>
</html>