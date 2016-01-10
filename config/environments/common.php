<?php

putenv("WP_HOME=" . 'http://' . $_SERVER['HTTP_HOST']);
putenv("WP_SITEURL=" . getenv('WP_HOME') . '/wp');
