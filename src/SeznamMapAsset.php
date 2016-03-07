<?php

/**
 * @link https://github.com/braunmar/yii2-seznammap
 * @copyright Copyright (c) 2016 Marek Braun <marra.braun@gmail.com>
 * @license https://github.com/braunmar/yii2-seznammap/blob/master/LICENSE
 */

namespace common\components\braunma\seznammap;

use braunmar\yii\base\AssetBundle;

/**
 * Seznam map asset
 * 
 * @author Marek Braun <marra.braun@gmail.com>
 * @package braunmar/yii2-seznammap
 * @see https://github.com/braunmar/yii2-seznammap
 */
class SeznamMapAsset extends AssetBundle
{

    public function init()
    {
        $this->sourcePath = __DIR__ . '/bootstrap';
        $this->addFile('css', 'css/seznammap');
        parent::init();
    }

}
