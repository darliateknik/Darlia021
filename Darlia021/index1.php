<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>


        <?php
            $nama       = 'Darlia';
            $jurusan    = 'Teknik Informatika';
            $alamat     = 'Sukaria 13';

            $counter    = 1;

            while($counter <= 11){
                echo
                '<div>'.
                    '<table border =1>'.
                    '<tr>'.
                        '<td>'. $counter . '</td'.
                        '<td>'. $nama . '</td'.
                        '<td>'. $jurusan . '</td'.
                        '<td>'. $alamat . '</td'.
                    '</tr>' .
                    '</table>' .
                '</div>' .


            $counter++;
             
            }
        ?>


            <div>

        </div>

</body>
</html>