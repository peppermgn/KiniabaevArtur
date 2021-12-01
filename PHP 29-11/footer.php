<footer class="footer <?php echo $time; ?>">
    <div class="grid-footer">
        <div class="vk">
            <a href="https://vk.com/id12536654" target="_blank">Вконтакте</a>
        </div>
        <div class="fb">
            <a href="https://www.facebook.com/arturkinyabaev" target="_blank">Facebook</a>
        </div>
        <div class="insta">
            <a href="https://www.instagram.com/peppermgn/" target="_blank">Instagram</a>
        </div>
    </div>

</footer>
<?php
$text = '<p>Нравится, что наконец то начался хардкор, меньше болтаем и больше делаем) </p>';

$wordCount = explode(" ", strip_tags($text));

foreach ($wordCount as $key => $value) {
    if ($key / 2 === 0) {
        $value
    }
}

var_dump($wordCount);

?>