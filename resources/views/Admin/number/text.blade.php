<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @php

        $k = count($number  );
        if(count($number) == 0){
            $k = 001;
        }
        else if(count($number ) > 0)
        {
            if($k < 10)
            {
                $k = 'k'. 101 + count($number );
            }
            else if($k < 100){
                
                $k = 'k'. 101 + count($number );
            }
         }
        echo $k;
    @endphp
</body>
</html>
