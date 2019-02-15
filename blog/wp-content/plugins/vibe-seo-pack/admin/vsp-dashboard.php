<?php $opt = get_option('vsp_options'); global $msg;
$plugin_name = 'vibe_seo_pack'; $plugin_version = 1.2;
?>

<div class="wrap"><div id="icon-link-manager" class="icon32"><br /></div>
<h2><?php _e("Vibe SEO Pack Options"); ?> <a href="http://www.vibethemes.com/forum/" target="_blank" class="button add-new-h2"><?php _e("Get Satisfied"); ?></a></h2>
<?php echo $msg; ?>

<form method="post" action="options.php"><?php settings_fields( 'vsp_settings' ); ?>

<div class="form-table" style="float:left;width:440px;padding-right:10px;">

    <p><label><?php _e('Website main keyword'); ?>:</label>
    <input type="text" name="vsp_options[site_keyword]" value="<?php echo $opt['site_keyword'] ?>" size="25" />
    <input type="submit" class="button" value="<?php _e('Update') ?>" /><br />
    <span class="description"><?php _e('I will do a SEO audit for your FrontPage based on this keyword.'); ?></span>
    </p>

    <p><label><?php _e('Homepage description'); ?>: </label>
    <textarea name="vsp_options[hp_description]" rows="3" cols="55" maxlength="160" lengthcut="true"><?php echo $opt['hp_description'] ?></textarea>
    <br /><span class="description"><?php _e('This will generate the description Meta tag for the FrontPage.'); ?></span>
    </p>

    <p><label><?php _e('Homepage keywords'); ?>: </label>
    <textarea name="vsp_options[hp_keywords]" rows="2" cols="55" maxlength="200" lengthcut="true"><?php echo $opt['hp_keywords'] ?></textarea>
    <br /><span class="description"><?php _e('Comma separated. FrontPage keywords Meta tag.'); ?></span>
    <script type="text/javascript" src="<?php echo WP_CONTENT_URL; ?>/plugins/vibe-seo-pack/lib/js/charcount.js"></script>
    </p>

    <p><input type="submit" class="button" value="<?php _e('Save Settings') ?>" /></p>

    <p><label><?php _e('Help development'); ?>:</label>
    <select id="vspdonate" onchange="showDonate(this)" name="vsp_options[footer_link]">
        <option value="link" <?php selected('link', $opt['footer_link']); ?>><?php _e('OK, this will place a link to author in footer.'); ?></option>
        <option value="donate" <?php selected('donate', $opt['footer_link']); ?>><?php _e('OK, I would prefer to donate some money.'); ?></option>
        <option value="nohelp" <?php selected('nohelp', $opt['footer_link']); ?>><?php _e('I do not think it\'s worth supporting it.'); ?></option>
    </select>
    <div id="vspdonatebox"<?php if ($opt['footer_link']!='donate') {echo ' style="display:none;"';}?>>
        Donate:
        <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_xclick&business=iftimie.s%40gmail.com&item_name=Vibe SEO Pack Donation&no_note=1&tax=0&amount=50&currency_code=USD" target="_blank">$50 USD</a> |
        <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_xclick&business=iftimie.s%40gmail.com&item_name=Vibe SEO Pack Donation&no_note=1&tax=0&amount=25&currency_code=USD" target="_blank">$25 USD</a> |
        <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_xclick&business=iftimie.s%40gmail.com&item_name=Vibe SEO Pack Donation&no_note=1&tax=0&amount=10&currency_code=USD" target="_blank">$10 USD</a> |
        <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_xclick&business=iftimie.s%40gmail.com&item_name=Vibe SEO Pack Donation&no_note=1&tax=0&currency_code=USD" target="_blank">other value</a>
    </div>
    <div id="nohelpbox"<?php if ($opt['footer_link']!='nohelp') {echo ' style="display:none;"';}?>>
        Can you tell us what should be improved? <a href="http://www.vibethemes.com/contact/" target="_blank">Feedback here</a>.
    </div>
   </p>

    <p><label><?php _e('Add Header Scripts'); ?>:</label><br />
    <textarea name="vsp_options[header_script]" rows="3" cols="55"><?php echo $opt['header_script'] ?></textarea>
    <br /><span class="description"><?php _e('This will add scripts in your head section. Ex: <a href="http://www.google.com/webmasters/" target="_blank">Google Webmaster Tools</a>.'); ?></span>
    </p>

    <p><label><?php _e('Add Footer Scripts'); ?>:</label><br />
    <textarea name="vsp_options[footer_script]" rows="3" cols="55"><?php echo $opt['footer_script'] ?></textarea>
    <br /><span class="description"><?php _e('This will add scripts in your footer. Ex: <a href="http://www.google.com/analytics/" target="_blank">Google Analytics</a>.'); ?></span>
    </p>

    <p><input type="submit" class="button" value="<?php _e('Save Settings') ?>" /></p>
</div>

<div class="metabox-holder" style="float:left;width:330px;">

    <div class="postbox">
	<h3><?php _e("Link Management/SEO Audit"); ?></h3>
	<div class="inside" style="padding:0 10px 10px 10px;">

    <?php include_once('hp-audit.php'); // Include homepage audit?>

    <p><strong><?php _e('NO Index Meta Tag'); ?></strong><br />
    <label><?php _e('Static pages'); ?>:</label>
    <input type="text" name="vsp_options[page_index]" value="<?php echo $opt['page_index'] ?>" size="25" /><br />
    <span class="description"><?php _e('To add noindex tag to your static pages, insert the page ID-s separated by comma.'); ?></span>
    </p>
    <p>
    <select name="vsp_options[category_index]">
        <option value="index" <?php selected('index', $opt['category_index']); ?>><?php _e('index'); ?></option>
        <option value="noindex" <?php selected('noindex', $opt['category_index']); ?>><?php _e('noindex'); ?></option>
    </select>
    <label><?php _e('Gategory Page'); ?></label><br />

    <select name="vsp_options[archive_index]">
        <option value="index" <?php selected('index', $opt['archive_index']); ?>><?php _e('index'); ?></option>
        <option value="noindex" <?php selected('noindex', $opt['archive_index']); ?>><?php _e('noindex'); ?></option>
    </select>
    <label><?php _e('Archive by Date Page'); ?></label><br />

    <select name="vsp_options[search_index]">
        <option value="index" <?php selected('index', $opt['search_index']); ?>><?php _e('index'); ?></option>
        <option value="noindex" <?php selected('noindex', $opt['search_index']); ?>><?php _e('noindex'); ?></option>
    </select>
    <label><?php _e('Search Results Page'); ?></label><br />

    <select name="vsp_options[tag_index]">
        <option value="index" <?php selected('index', $opt['tag_index']); ?>><?php _e('index'); ?></option>
        <option value="noindex" <?php selected('noindex', $opt['tag_index']); ?>><?php _e('noindex'); ?></option>
    </select>
    <label><?php _e('Tag Page'); ?></label><br />

    <select name="vsp_options[author_index]">
        <option value="index" <?php selected('index', $opt['author_index']); ?>><?php _e('index'); ?></option>
        <option value="noindex" <?php selected('noindex', $opt['author_index']); ?>><?php _e('noindex'); ?></option>
    </select>
    <label><?php _e('Author Page'); ?></label><br />
    </p>

    <p><strong><?php _e('NO Follow Attribute'); ?></strong><br />
    <span class="description"><?php _e('Append nofollow attribute to selected links.'); ?></span>
    </p>
    <p>
    <select name="vsp_options[category_nofollow]">
        <option value="follow" <?php selected('follow', $opt['category_nofollow']); ?>><?php _e('follow'); ?></option>
        <option value="nofollow" <?php selected('nofollow', $opt['category_nofollow']); ?>><?php _e('nofollow'); ?></option>
    </select>
    <label><?php _e('Category Links'); ?></label><br />

    <select name="vsp_options[page_nofollow]">
        <option value="follow" <?php selected('follow', $opt['page_nofollow']); ?>><?php _e('follow'); ?></option>
        <option value="nofollow" <?php selected('nofollow', $opt['page_nofollow']); ?>><?php _e('nofollow'); ?></option>
    </select>
    <label><?php _e('Page Links'); ?></label><br />

    <select name="vsp_options[archive_nofollow]">
        <option value="follow" <?php selected('follow', $opt['archive_nofollow']); ?>><?php _e('follow'); ?></option>
        <option value="nofollow" <?php selected('nofollow', $opt['archive_nofollow']); ?>><?php _e('nofollow'); ?></option>
    </select>
    <label><?php _e('Archive Links'); ?></label><br />

    <select name="vsp_options[register_nofollow]">
        <option value="follow" <?php selected('follow', $opt['register_nofollow']); ?>><?php _e('follow'); ?></option>
        <option value="nofollow" <?php selected('nofollow', $opt['register_nofollow']); ?>><?php _e('nofollow'); ?></option>
    </select>
    <label><?php _e('Register Link'); ?></label><br />

    <select name="vsp_options[login_nofollow]">
        <option value="follow" <?php selected('follow', $opt['login_nofollow']); ?>><?php _e('follow'); ?></option>
        <option value="nofollow" <?php selected('nofollow', $opt['login_nofollow']); ?>><?php _e('nofollow'); ?></option>
    </select>
    <label><?php _e('Login Link'); ?></label><br />

    </p>

	<p><input type="submit" class="button" value="<?php _e('Save Settings') ?>" /></p>
    </div>
	</div>

</div>

<div class="metabox-holder" style="float:right;width:272px;">
    <iframe width=272 height=650 frameborder="0" src="http://www.vibethemes.com/xyz/plugins.php?name=<?php echo $plugin_name; ?>&version=<?php echo $plugin_version; ?>"></iframe>
</div>

<input type="hidden" name="action" value="update" />
<input type="hidden" name="page_options" value="vsp_options" />
</form>

<form method="post"><br / style="clear:both;">
<input type="hidden" name="reset-vsp" value="1">
<p><input type="submit" class="button-active" onclick="return confirm('Are you sure you want to reset to default settings?')" value="<?php _e('Reset') ?>" /></p>
</form>

</div>