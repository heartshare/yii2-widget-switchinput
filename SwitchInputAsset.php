<?php

/**
 * @copyright Copyright &copy; Kartik Visweswaran, Krajee.com, 2014
 * @package yii2-widgets
 * @subpackage yii2-widget-timepicker
 * @version 1.0.0
 */

namespace kartik\switchinput;

/**
 * Asset bundle for Switch Widget
 *
 * @author Kartik Visweswaran <kartikv2@gmail.com>
 * @since 1.0
 */
class SwitchInputAsset extends \kartik\base\AssetBundle
{

    public function init()
    {
        $this->setSourcePath(__DIR__ . '/assets');
        $this->setupAssets('css', ['css/bootstrap-switchinput']);
        $this->setupAssets('js', ['js/bootstrap-switchinput']);
        parent::init();
    }
}
