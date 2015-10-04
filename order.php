<?php include('header.php'); ?>

<div class = "content">
<?php
    $sum = 0;
	$_SESSION['order'] = "";
    $today = date("y/m/d");
    echo $today . '<br>';
    $_SESSION['order'] = '備註: ' . htmlspecialchars($_POST['note']) . "<br/>";
    echo '<h3>您訂了： </h3>';
    for ($each = 9801; $each <= 9832; $each++){
        if ($each <= 9832) {
            if ($_POST['spring' . $each] != 0) {
				$_SESSION['order'] .= '春天粉嫩' . $each . ": " . $_POST['spring' . $each] . "<br/>";
                $sum += $_POST['spring' . $each];
            }
        }
    }

    for ($each = 1301; $each <= 1399; $each++){
        if ($each <= 1399) {
            if ($each == 1369 || $each == 1370){
                for ($y = 1; $y <= 2; $y++){
                    $z = $each . '-' . $y;
                    if ($_POST['funny' . $z] != 0){
                        $_SESSION['order'] .= '方妮趣味' . $z . ": " . $_POST['funny' . $z] . "<br/>";
                        $sum += $_POST['funny' . $z];
                    }
                }
            }
            else if ($_POST['funny' . $each] != 0) {
				$_SESSION['order'] .= '方妮趣味' . $each . ": " . $_POST['funny' . $each] . "<br/>";
                $sum += $_POST['funny' . $each];
            }
        }
    }

    for ($each = 1101; $each <= 1199; $each++){
        if ($each <= 1199) {
            if ($_POST['kids' . $each] != 0) {
				$_SESSION['order'] .= '可愛兒童' . $each . ": " . $_POST['kids' . $each] . "<br/>";
                $sum += $_POST['kids' . $each];
            }
        }
    }

    for ($each = 9701; $each <= 9712; $each++){
        if ($each <= 9712) {
            if ($_POST['sky' . $each] != 0) {
				$_SESSION['order'] .= '璀璨星空' . $each . ": " . $_POST['sky' . $each] . "<br/>";
                $sum += $_POST['sky' . $each];
            }
        }
    }

    for ($each = 1601; $each <= 1699; $each++){
        if ($each <= 1699) {
            if ($_POST['cartoon' . $each] != 0) {
                $_SESSION['order'] .= '卡通' . $each . ": " . $_POST['cartoon' . $each] . "<br/>";
                $sum += $_POST['cartoon' . $each];
            }
        }
    }

    // for ($each = 300; $each <= 315; $each++){
    //     if ($each <= 315) {
    //         if ($_POST['hand' . $each] != 0) {
    //             $_SESSION['order'] .= '小手' . $each . ": " . $_POST['hand' . $each] . "<br/>";
    //             $sum += $_POST['hand' . $each];
    //         }
    //     }
    // }

    for ($each = 1701; $each <= 1799; $each++){
        if ($each <= 1799) {
            if ($_POST['light' . $each] != 0) {
                $_SESSION['order'] .= '漸層凝膠' . $each . ": " . $_POST['light' . $each] . "<br/>";
                $sum += $_POST['light' . $each];
            }
        }
    }

    for ($each = 1801; $each <= 1899; $each++){
        if ($each <= 1899) {
            if ($_POST['grace' . $each] != 0) {
                $_SESSION['order'] .= '經典優雅' . $each . ": " . $_POST['grace' . $each] . "<br/>";
                $sum += $_POST['grace' . $each];
            }
        }
    }

    for ($each = 1901; $each <= 1999; $each++){
        if ($each <= 1999) {
            if ($_POST['flower' . $each] != 0) {
                $_SESSION['order'] .= '花花兒' . $each . ": " . $_POST['flower' . $each] . "<br/>";
                $sum += $_POST['flower' . $each];
            }
        }
    }

    for ($each = 1201; $each <= 1230; $each++){
        if ($each <= 1230) {
            if ($_POST['laser' . $each] != 0) {
                $_SESSION['order'] .= '金屬雷射' . $each . ": " . $_POST['laser' . $each] . "<br/>";
                $sum += $_POST['laser' . $each];
            }
        }
    }

    for ($each = 1501; $each <= 1599; $each++){
        if ($each <= 1599) {
            if ($_POST['diamond' . $each] != 0) {
                $_SESSION['order'] .= '鑲鑽蕾絲' . $each . ": " . $_POST['diamond' . $each] . "<br/>";
                $sum += $_POST['diamond' . $each];
            }
        }
    }

    // for ($each = 1400; $each <= 1499; $each++){
    //     if ($each <= 1499) {
    //         if ($_POST['gold' . $each] != 0) {
    //             $_SESSION['order'] .= '燙金' . $each . ": " . $_POST['gold' . $each] . "<br/>";
    //             $sum += $_POST['gold' . $each];
    //         }
    //     }
    // }

    for ($each = 500; $each <= 599; $each++){
        if ($each <= 599) {
            if ($_POST['year2015' . $each] != 0) {
                $_SESSION['order'] .= '迎春好運' . $each . ": " . $_POST['year2015' . $each] . "<br/>";
                $sum += $_POST['year2015' . $each];
            }
        }
    }

    for ($each = 1000; $each <= 9999; $each++){
        if ($_POST['limited2015' . $each] != 0) {
            $_SESSION['order'] .= '周年慶限量' . $each . ": " . $_POST['limited2015' . $each] . "<br/>";
            $sum += $_POST['limited2015' . $each];
        }
    }

    for ($each = 1; $each <= 10; $each++){
        if ($each <= 10) {
            if ($_POST['bf' . $each] != 0) {
                $_SESSION['order'] .= '銼刀' . $each . ": " . $_POST['bf' . $each] . "<br/>";
                $sum += $_POST['bf' . $each];
            }
        }
    }

    // for ($each = 5221; $each <= 5255; $each++){
    //     if ($each <= 5255) {
    //         if($x == 5250 || $x == 5255){
    //             if ($_POST['marry' . $each] != 0) {
    //                 $_SESSION['order'] .= '甲片新娘款' . $each . ": " . $_POST['marry' . $each] . "<br/>";
    //                 $sum += $_POST['marry' . $each];
    //             }
    //         }
    //         else {
    //             if ($_POST['hard' . $each] != 0) {
    //                 $_SESSION['order'] .= '甲片基本款' . $each . ": " . $_POST['hard' . $each] . "<br/>";
    //                 $sum += $_POST['hard' . $each];
    //             }
    //         }
    //     }
	  // }

    // $oilItems = array(10001 =>  "桂花", "橘子", "檸檬", "櫻桃", "水蜜桃", "玫瑰", "百合", "茉莉", "草莓", "薰衣草", "藍莓", "青蘋果");
    // for ($each = 10001; $each <= 10012; $each++){
    //     $z = $oilItems[$each];
    //     if ($each <= 10012) {
    //         if ($_POST['oil' . $each] != 0) {
    //             $_SESSION['order'] .= '指緣油 ' . $z . ": " . $_POST['oil' . $each] . "<br/>";
    //             $sum += $_POST['oil' . $each];
    //         }
    //     }
    // }

    // $stuff = array(20001 => "Manual", "Menual and Bag");
    // for ($each = 20001; $each <= 20002; $each++){
    //     $z = $stuff[$each];
    //     if ($each <= 20002) {
    //         if ($_POST['essential' . $each] != 0) {
    //             $_SESSION['order'] .= $stuff[$each + 1] . $z . ": " . $_POST['essential' . $each] . "<br/>";
    //             $sum += $_POST['essential' . $each];
    //         }
    //     }
    // }

    $_SESSION['order'] .= "<br/>" . "Total: " . $sum;

	//print the total list of order if present
	printf($_SESSION['order']);

	//if user is logged in
	if(isset($_SESSION['member_id'])){
		include('mail.php');
	}else{
		printf("<p>您還未登入 請<a href='login.php'>登入</a> to continue</p>");
	}
?>
</div>
</body>
