<?php   include 'page-components/header.php';
        include 'page-components/session.php';
?>

<div class="page game-board">
    <div class="container">
        <div class="introduction">
            <h1>Hello, <?php echo $login_session; ?></h1>
            <h4>Brief Introduction</h4>
            <p>Welcome to The Game. Users will get one "play" per day. Each play will "roll" and generate a random number between 1 & 6 unless the user is less than 6 spaces away from the end. Then it will calculate a random number within the appropriate range. After a roll the user's game position value will update, adding the value of their roll to the current number, which will highlight a different game space below. Eventually we will add surprises to accompany the games spaces which may include additional changes to the user's game position both positively and negatively.</p>
        </div>
        <div class="play">
            <h4>Hello, <?php echo $user['firstname']; ?>. You have not played yet today. Please use your play below.</h4>
            <h6><?php echo $user['game_position']?></h6>
<?php       $int = rand(1,6);
            echo $int;
?>
            <button class="cta">Play</button>
        </div>
        <div class="spaces">
            <div class="space"></div>
            <div class="space"></div>
            <div class="space"></div>
            <div class="space"></div>
            <div class="space"></div>
            <div class="space"></div>
            <div class="space"></div>
            <div class="space"></div>
            <div class="space"></div>
            <div class="space"></div>
            <div class="space"></div>
            <div class="space"></div>
            <div class="space"></div>
            <div class="space"></div>
            <div class="space"></div>
            <div class="space"></div>
            <div class="space"></div>
            <div class="space"></div>
            <div class="space"></div>
            <div class="space"></div>
            <div class="space"></div>
        </div>
    </div>
</div>

<?php   include 'page-components/footer.php';
?>
