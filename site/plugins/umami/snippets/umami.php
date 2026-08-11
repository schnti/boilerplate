<?php
if (!option('debug') && !kirby()->user()) :

    $cfg = option('schnti.umami', []);
    $src = $cfg['script'] ?? null;
    $id  = $cfg['id'] ?? null;

    if (
        is_string($src) && str_starts_with($src, 'https://') &&
        is_string($id) && $id !== ''
    ): ?>
        <script defer src="<?= esc($src) ?>" data-website-id="<?= esc($id) ?>"></script>
<?php endif;

endif;
?>