<?php
/**
 * PHP `strftime()` format to `IntlDateFormatter()` pattern converter.
 * 
 * PHP `strftime()` is deprecated since v 8.1. They recommended to use `IntlDateFormatter()` instead.
 * However `IntlDateFormatter()` pattern does not fully supported all format that `strftime()` does.
 * 
 * Run this file to get the result of most close pattern to `strftime()` based on Thai locale.
 * 
 * @license MIT
 */


$locale = ($_POST['locale'] ?? 'en_US');
setlocale(LC_ALL, $locale);

// replace from `strftime` format to `IntlDateFormatter` pattern.
// based on Thai locale.
$replaces = [
    '%a' => 'E',
    '%A' => 'EEEE',
    '%d' => 'dd',
    '%e' => 'd',
    '%j' => 'D',
    '%u' => 'e',// not 100% correct
    '%w' => 'c',// not 100% correct
    '%U' => 'w',
    '%V' => 'ww',// not 100% correct
    '%W' => 'w',// not 100% correct
    '%b' => 'MMM',
    '%B' => 'MMMM',
    '%h' => 'MMM',// alias of %b
    '%m' => 'MM',
    '%C' => 'yy',// no replace for this
    '%g' => 'yy',// no replace for this
    '%G' => 'Y',// not 100% correct
    '%y' => 'yy',
    '%Y' => 'yyyy',
    '%H' => 'HH',
    '%k' => 'H',
    '%I' => 'hh',
    '%l' => 'h',
    '%M' => 'mm',
    '%p' => 'a',
    '%P' => 'a',// no replace for this
    '%r' => 'hh:mm:ss a',
    '%R' => 'HH:mm',
    '%S' => 'ss',
    '%T' => 'HH:mm:ss',
    '%X' => 'HH:mm:ss',// no replace for this
    '%z' => 'ZZ',
    '%Z' => 'v',// no replace for this
    '%c' => 'd/M/YYYY HH:mm:ss',// Buddhist era not converted.
    '%D' => 'MM/dd/yy',
    '%F' => 'yyyy-MM-dd',
    '%s' => '',// no replace for this
    '%x' => 'd/MM/yyyy',// Buddhist era not converted.
    '%n' => "\n",
    '%t' => "\t",
    '%%' => '%',
];
$format = ($_POST['format'] ?? '');
$calendar = null;

if (!empty($format)) {
    $pattern = $format;
    // replace 1 single quote that is not following visible character or single quote and not follow by single quote or word or number.
    // example: '
    // replace with 2 single quotes. example: ''
    $pattern = preg_replace('/(?<![\'\S])(\')(?![\'\w])/u', "'$1", $pattern);
    // replace 1 single quote that is not following visible character or single quote and follow by word.
    // example: 'xx
    // replace with 2 single quotes. example: ''xx
    $pattern = preg_replace('/(?<![\'\S])(\')(\w+)/u', "'$1$2", $pattern);
    // replace 1 single quote that is following word (a-z 0-9) and not follow by single quote.
    // example: xx'
    // replace with 2 single quotes. example: xx''
    $pattern = preg_replace('/([\w]+)(\')(?!\')/u', "$1'$2", $pattern);
    // replace a-z (include upper case) that is not following %. example xxx.
    // replace with wrap single quote. example: 'xxx'.
    $pattern = preg_replace('/(?<![%a-zA-Z])([a-zA-Z]+)/u', "'$1$2'", $pattern);

    // escape %%x with '%%x'.
    $pattern = preg_replace('/(%%[a-zA-Z]+)/u', "'$1'", $pattern);

    foreach ($replaces as $strftime => $intl) {
        $pattern = preg_replace('/(?<!%)(' . $strftime . ')/u', $intl, $pattern);
    }// endforeach;
    unset($intl, $strftime);
}

if (class_exists('IntlDateFormatter')) {
    $tz = null;
    $calendar = ($_POST['calendar'] ?? null);
    if ($calendar === 'default') {
        $calendar = null;
    } elseif ($calendar === 'traditional') {
        $calendar = \IntlDateFormatter::TRADITIONAL;
    }
    $IntlDateFormatter = new \IntlDateFormatter($locale, \IntlDateFormatter::FULL, \IntlDateFormatter::FULL, $tz, $calendar);
    $defaultPattern = $IntlDateFormatter->getPattern();
    unset($tz);
}

// set locales for select box.
$locales = [
    'en_US.utf-8',
    'en_US.utf8',
    'en_us.utf-8',
    'en_us.utf8',
    'en-US.utf-8',
    'en-US.utf8',
    'en-us.utf-8',
    'en-us.utf8',
    'en.utf-8',
    'en.utf8',
    'en_US',
    'en_us',
    'en-US',
    'en-us',
    'en',

    'th_TH.utf-8',
    'th_TH.utf8',
    'th_th.utf-8',
    'th_th.utf8',
    'th-TH.utf-8',
    'th-TH.utf8',
    'th-th.utf-8',
    'th-th.utf8',
    'th.utf-8',
    'th.utf8',
    'th_TH',
    'th_th',
    'th-TH',
    'th-th',
    'th',
];
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>strftime to IntlDateFormatter format converter</title>
        <style type="text/css">
            code {
                background-color: #eee;
                padding: 2px 5px;
            }
            form {
                margin: 0 0 20px;
            }
            form > div {
                margin: 0 0 10px;
            }
            pre {
                background-color: #eee;
                padding: 10px;
            }
            table {
                border: 1px solid #ccc;
                border-collapse: collapse;
                width: 100%;
            }
            table th,
            table td {
                border: 1px solid #ccc;
                text-align: left;
                padding: 5px;
            }
            table tr.different-result {
                background-color: rgba(255, 218, 148, 0.4);
            }
        </style>
    </head>
    <bodY>
        <form method="post">
            <div>
                Locale:
                <select name="locale">
                    <?php
                    if (isset($locales) && is_array($locales)) {
                        foreach ($locales as $eachLocale) {
                            echo '<option value="' . $eachLocale . '"';
                            if ($locale === $eachLocale) {
                                echo ' selected';
                            }
                            echo '>' . $eachLocale . '</option>' . PHP_EOL;
                        }// endforeach;
                        unset($eachLocale);
                    }
                    ?>
                </select>
            </div>
            <div>
                Calendar:
                <select name="calendar">
                    <option value="default"<?php if ($calendar === 'default') {echo ' selected';} ?>>Default</option>
                    <option value="traditional"<?php if ($calendar === 'traditional') {echo ' selected';} ?>>Traditional</option>
                </select>
            </div>
            <div>
                <code>strftime()</code> format: 
                <input type="text" name="format" value="<?php echo htmlspecialchars($format, ENT_QUOTES); ?>" style="width: 300px;">
            </div>
            <button type="submit">Submit</button>
        </form>

        <?php 
        if (isset($pattern)) {
        ?>
        <h3>Converted result</h3>
        <pre><?php 
        echo htmlspecialchars($pattern, ENT_QUOTES); 
        ?></pre>
        <h3>Execute</h3>
        <?php if (function_exists('strftime')) { ?>
        <p><code>strftime('<?php echo $format; ?>')</code>: <strong><?php echo htmlspecialchars(@strftime($format), ENT_QUOTES); ?></strong></p>
        <?php } ?>
        <?php 
        if (isset($IntlDateFormatter)) { 
            $IntlDateFormatter->setPattern($pattern);
        ?>
        <p><code>IntlDateFormatter::setPattern('<?php echo $pattern; ?>')</code>: <strong><?php echo htmlspecialchars($IntlDateFormatter->format(time()), ENT_QUOTES); ?></strong></p>
        <?php 
        } 
        ?>
        <?php
        }// endif;
        ?>

        <p>Current locale: <code><?php echo $locale; ?></code></p>
        <?php 
        if (isset($IntlDateFormatter)) {
            $IntlDateFormatter->setPattern($defaultPattern);
        ?>
        <p>
            Default <code>IntlDateFormatter()</code> pattern (<code><?php echo $defaultPattern; ?></code>): <strong><?php echo $IntlDateFormatter->format(time()); ?></strong>
        </p>
        <?php
        }
        ?>
        <table>
            <thead>
                <tr>
                    <th><code>strftime()</code> format</th>
                    <th><code>strftime()</code> result</th>
                    <th><code>IntlDateFormatter()</code> pattern</th>
                    <th><code>IntlDateFormatter()</code> result</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($replaces as $strftime => $intl) {
                    if (function_exists('strftime')) {
                        $strftimeResult = @strftime($strftime);
                    }
                    if (isset($IntlDateFormatter)) {
                        $IntlDateFormatter->setPattern($intl);
                        $intlDResult = $IntlDateFormatter->format(time());
                    }
                    if (isset($strftimeResult) && isset($intlDResult)) {
                        if ($strftimeResult != $intlDResult) {
                            $rowDif = true;
                        }
                    }
                ?>
                <tr<?php if (isset($rowDif)) { echo ' class="different-result"'; } ?>>
                    <td><code><?php echo htmlspecialchars($strftime, ENT_QUOTES); ?></code></td>
                    <td><?php
                    if (isset($strftimeResult)) {
                        echo htmlspecialchars($strftimeResult, ENT_QUOTES);
                    }
                    ?></td>
                    <td><code><?php echo htmlspecialchars($intl, ENT_QUOTES); ?></code></td>
                    <td><?php 
                    if (isset($intlDResult)) {
                        echo htmlspecialchars($intlDResult, ENT_QUOTES);
                    }
                    ?></td>
                </tr>
                <?php
                    unset($intlDResult, $rowDif, $strftimeResult);
                }// endforeach;
                unset($intl, $strftime);
                ?>
            </tbody>
        </table>

        <p>Reference:
            <a href="https://www.php.net/manual/en/function.strftime.php" target="strftome">strftime format.</a>
            <a href="https://unicode-org.github.io/icu/userguide/format_parse/datetime/" target="ICU">ICU format</a>
        </p>
    </bodY>
</html>
<?php

unset($IntlDateFormatter, $replaces);