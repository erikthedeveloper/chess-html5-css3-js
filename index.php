<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Chess'd - An Open Sourced HTML5, CSS3, & JavaScript Online Chess Game</title>

    <meta name="description" content="Open source online chess game built with HTML5, CSS3, and JavaScript. Drag & Drop with HTML5 elements, CSS3 transforms, and JavaScript. An Erik Aybar Creation" >
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


    <div class="chessboard-wrapper">
        <h1>Chess'd - HTML5, CSS3, and JavaScript Online Chessboard</h1>
	<p><a href="https://github.com/erikthedeveloper/chess-html5-css3-js" title="I'm open source" target="_blank">View me on Github</a></p>
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
    </div>

    <div class="disqus_wrapper">
        <h4>Enjoy Chess'd? Let me know below</h4>
        <div id="disqus_thread"></div>
        <script type="text/javascript">
            /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
            var disqus_shortname = 'erikaybar'; // required: replace example with your forum shortname

            /* * * DON'T EDIT BELOW THIS LINE * * */
            (function() {
                var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
                dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
                (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
            })();
        </script>
        <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
        <a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
    </div>

    <script src="main.js"> </script>
</body>
</html>
