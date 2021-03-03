<?php 
    echo '<h2>Task 1:</h2>';
    $personalArr = array(
        0 => 'Kagan, Milana',
        1 => '322114323',
        2 => "1989-10-02"
    );
    for ($i = 0; $i < count($personalArr); $i++){

        echo $personalArr[$i];
        echo '<br>';
    }
    echo '<h2>Task 2:</h2>';

    echo '<h1>'.$personalArr[0].'</h1>';
    echo '<p style="color: #00FF00; text-decoration-line: underline;">'.$personalArr[1].'</p>'.'<br>';
    echo '<input type="date" value="'.$personalArr[2].'">';

    echo '<h2>Task 3:</h2>';

    $open = '';
    $close = '';
    $txt = '';
    $int = 1;

    switch ($int) {
        case 0:
            $open = '<span>';
            $close = '</span>';
            $txt = 'This is a span tag';
            break;
        case 1:
            $open = '<button>';
            $close = '</button>';
            $txt = 'This is a button tag';
            break;
        case 2:
            $open = '<div>';
            $close = '</div>';
            $txt = 'This is a div tag';
            break;
    }

        echo  $open.$txt.$close;
      
        echo '<h2>Task 4:</h2>';
        
        function MyShuffle($arr){
            return array(
                0 => $arr[1],
                1 => $arr[0]
            );

        }

        $arr = array(
            0 => 1,
            1 => 2
        );

        echo ' original array '.var_dump($arr).'<br>';
        echo ' shuffled array'.var_dump(MyShuffle($arr)).'<br>';
        echo ' original array after shuffle'.var_dump($arr);

        echo '<h2>Task 5:</h2>';

        $mystrings = array(
            0 => 'bcd',
            1 => 'abc',
            2 => 'AAaA'
        );
        $findme   = 'a';

        for ($i = 0; $i < count($mystrings); $i++){
            $pos = strpos($mystrings[$i], $findme);
            if ($pos === false)
            {
                echo $findme.' not found in '.$mystrings[$i].'<br>';
            }
            else{
                
                echo $findme.' was found in '.$mystrings[$i].' position => '.$pos.'<br>';
            }

        }

?>