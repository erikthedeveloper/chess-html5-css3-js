<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Chess</title>
    <!-- Image Credit to miroha at alphacoders.com (http://wall.alphacoders.com/big.php?i=409614) -->
    <link href='http://fonts.googleapis.com/css?family=Josefin+Sans:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="main.css">

    <style>
    .over {
      opacity: 0.3;
      background-color: #bbb;
    }
    </style>
</head>
<body>
<?php
$pieces = array(
    'w-king'   => '&#9812;',
    'w-queen'  => '&#9813;',
    'w-rook'   => '&#9814;',
    'w-bishop' => '&#9815;',
    'w-knight' => '&#9816;',
    'w-pawn'   => '&#9817;',
    'b-king'   => '&#9818;',
    'b-queen'  => '&#9819;',
    'b-rook'   => '&#9820;',
    'b-bishop' => '&#9821;',
    'b-knight' => '&#9822;',
    'b-pawn'   => '&#9823;'
);
$rows = array(
    array('w-rook', 'w-knight', 'w-bishop', 'w-king', 'w-queen', 'w-bishop', 'w-knight', 'w-rook'),
    array('w-pawn', 'w-pawn', 'w-pawn', 'w-pawn', 'w-pawn', 'w-pawn', 'w-pawn', 'w-pawn'),
    array('', '', '', '', '', '', '', ''),
    array('', '', '', '', '', '', '', ''),
    array('', '', '', '', '', '', '', ''),
    array('', '', '', '', '', '', '', ''),
    array('b-pawn', 'b-pawn', 'b-pawn', 'b-pawn', 'b-pawn', 'b-pawn', 'b-pawn', 'b-pawn'),
    array('b-rook', 'b-knight', 'b-bishop', 'b-king', 'b-queen', 'b-bishop', 'b-knight', 'b-rook'),
    );
?>

<h1>HTML5 & CSS3 Chessboard</h1>

    <div class="chessboard" id="chessboard">

        <?php
        foreach ($rows as $row): ?>
            <div class="row">
            <?php foreach ($row as $col):
            $is_white = preg_match('/w-/', $col);
            $piece_class = "piece";
            $piece_class .= $is_white ? " white" : " black";
            ?>
                <div class="square draggable" draggable="true"><div class="<?php echo $piece_class; ?>"><?php echo $pieces[$col]; ?></div></div>
            <?php endforeach ?>
            </div>
        <?php endforeach ?>

    </div>

    <script src="main.js"> </script>
</body>
</html>