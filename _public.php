<?php
# -- BEGIN LICENSE BLOCK ---------------------------------------
# Copyright (c) DaScritch
# Licensed under the GPL version 2.0 license.
# See LICENSE file or
# http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
# -- END LICENSE BLOCK -----------------------------------------


$core->tpl->addValue('TEMPEntryURL',			['DSN_tpl','TEMPEntryURL']);
$core->tpl->addValue('TEMPEntryTitle',          ['DSN_tpl','TEMPEntryTitle']);


class DSN_social_tpl
{

	public static function TEMPEntryURL($attr) {
		return '<?php echo urlencode($_ctx->posts->getURL()); ?>';
	}

	public static function TEMPEntryTitle($attr) {
		if (isset($attr['spaces'])) {
			return '<?php echo strtr( urlencode($_ctx->posts->post_title), ["+" => "'.$attr['spaces'].'"] ); ?>';
		} else {
			return '<?php echo urlencode($_ctx->posts->post_title); ?>';
		}
	}

}