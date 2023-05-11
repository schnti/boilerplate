</main>

<footer class="footer">
  <div class="container">
    <div class="row justify-content-md-center align-items-center">
      <div class="col-12 col-md-6 text-center text-md-start">
        <?= $site->copyright()->kirbytext(); ?>
      </div>
      <div class="col-12 col-md-6 text-center text-md-end">
        <?= $site->footerLinks()->kirbytext(); ?>
      </div>
    </div>
  </div>
</footer>

<?= js('assets/main.js', ['defer' => true]); ?>

</body>
</html>