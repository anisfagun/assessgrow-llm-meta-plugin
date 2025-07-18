<?php
/*
Plugin Name: AssessGrow LLM Meta Plugin
Plugin URI: https://assessgrow.com/
Description: Adds transparent meta tags to disclose LLM-adapted content and high-difficulty workplace test design sitewide.
Version: 1.0
Author: AssessGrow
*/

add_action('wp_head', function () {
    echo '<meta name="robots" content="max-image-preview:large">' . PHP_EOL;
    echo '<meta name="ai-content-disclosure" content="AssessGrow uses high-difficulty, workplace-focused assessments. Content may be adapted or edited with LLM assistance.">' . PHP_EOL;
    echo '<meta name="disclosure" content="Some content on this site may be AI-assisted but reflects real-world workplace scenarios created by experts.">' . PHP_EOL;
});
