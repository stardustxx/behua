{"changed":true,"filter":false,"title":"order.php","tooltip":"/order.php","value":"<!doctype html>\n<html>\n\n<?php include('header.php'); ?>\n\n<?php\n    $today = date(\"y/m/d\");\n    echo $today . '<br>';\n    echo '<h3>You have ordered: </h3>';\n    for ($each = 9801; $each <= 9812; $each++){\n        if ($each <= 9812) {\n            if ($_POST['spring' . $each] != 0) {\n                echo '<p>春天粉嫩' . $each . \": \" . $_POST['spring' . $each] . \"<br>\";\n            }\n        }\n    }\n    \n    for ($each = 1301; $each <= 1370; $each++){\n        if ($each <= 1370) {\n            if ($_POST['funny' . $each] != 0) {\n                echo '<p>方妮趣味' . $each . \": \" . $_POST['funny' . $each] . \"<br>\";\n            }\n        }\n    }\n    \n    for ($each = 1101; $each <= 1115; $each++){\n        if ($each <= 1115) {\n            if ($_POST['kids' . $each] != 0) {\n                echo '<p>可愛兒童' . $each . \": \" . $_POST['kids' . $each] . \"<br>\";\n            }\n        }\n    }\n    \n    for ($each = 9701; $each <= 9712; $each++){\n        if ($each <= 9712) {\n            if ($_POST['kids' . $each] != 0) {\n                echo '<p>催燦星空' . $each . \": \" . $_POST['kids' . $each] . \"<br>\";\n            }\n        }\n    }\n    \n    for ($each = 1601; $each <= 1620; $each++){\n        if ($each <= 1620) {\n            if ($_POST['cartoon' . $each] != 0) {\n                echo '<p>卡通' . $each . \": \" . $_POST['cartoon' . $each] . \"<br>\";\n            }\n        }\n    }\n    \n    for ($each = 300; $each <= 315; $each++){\n        if ($each <= 315) {\n            if ($_POST['hand' . $each] != 0) {\n                echo '<p>小手' . $each . \": \" . $_POST['hand' . $each] . \"<br>\";\n            }\n        }\n    }\n    \n    for ($each = 1701; $each <= 1720; $each++){\n        if ($each <= 1720) {\n            if ($_POST['light' . $each] != 0) {\n                echo '<p>漸層光療' . $each . \": \" . $_POST['light' . $each] . \"<br>\";\n            }\n        }\n    }\n    \n    for ($each = 1801; $each <= 1850; $each++){\n        if ($each <= 1850) {\n            if ($_POST['grace' . $each] != 0) {\n                echo '<p>經典優雅' . $each . \": \" . $_POST['grace' . $each] . \"<br>\";\n            }\n        }\n    }\n    \n    for ($each = 1901; $each <= 1915; $each++){\n        if ($each <= 1915) {\n            if ($_POST['flower' . $each] != 0) {\n                echo '<p>花花兒' . $each . \": \" . $_POST['flower' . $each] . \"<br>\";\n            }\n        }\n    }\n    \n    for ($each = 1201; $each <= 1205; $each++){\n        if ($each <= 1205) {\n            if ($_POST['laser' . $each] != 0) {\n                echo '<p>金屬雷射' . $each . \": \" . $_POST['laser' . $each] . \"<br>\";\n            }\n        }\n    }\n    \n    for ($each = 1501; $each <= 1525; $each++){\n        if ($each <= 1525) {\n            if ($_POST['diamond' . $each] != 0) {\n                echo '<p>鑲鑽蕾絲' . $each . \": \" . $_POST['diamond' . $each] . \"<br>\";\n            }\n        }\n    }\n    \n    for ($each = 5221; $each <= 5255; $each++){\n        if ($each <= 5255) {\n            if ($_POST['hard' . $each] != 0) {\n                echo '<p>甲片' . $each . \": \" . $_POST['hard' . $each] . \"<br>\";\n            }\n        }\n    }\n?>\n\n</body>\n</html>","undoManager":{"mark":0,"position":-1,"stack":[]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":92,"column":58},"end":{"row":92,"column":58},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":16,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1404999488000}