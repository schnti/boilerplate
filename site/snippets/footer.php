</main>

<footer class="footer">
    <div class="container">
		<?= $site->footerLinks()->kirbytext(); ?>
		<?= $site->copyright()->kirbytext(); ?>
    </div>
</footer>

<?= js('assets/main.js', ['defer' => true]); ?>

</body>
</html>