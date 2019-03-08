</main>

<footer class="footer">
    <div class="container">
		<?= $site->footerLinks()->kirbytext(); ?>
        <hr>
		<?= $site->copyright()->kirbytext(); ?>
    </div>
</footer>

<? //= piwik(); ?>

<?= js('assets/js/bower.js', ['defer' => true]); ?>
<?= js('assets/js/main.min.js', ['defer' => true]); ?>

<? //= cookie(); ?>

</body>
</html>