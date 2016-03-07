<?php

/**
 * @link https://github.com/braunmar/yii2-seznammap
 * @copyright Copyright (c) 2016 Marek Braun <marra.braun@gmail.com>
 * @license https://github.com/braunmar/yii2-seznammap/blob/master/LICENSE
 */

namespace common\components\braunma\seznammap;

use common\components\braunma\base\AssetBundle;

/**
 * Seznam map asset
 * 
 * @author Marek Braun <marra.braun@gmail.com>
 * @package braunmar/yii2-seznammap
 * @see https://github.com/braunmar/yii2-seznammap
 */
class SeznamMapCoverAsset extends AssetBundle
{

    public function init()
    {
        $this->sourcePath = __DIR__ . '/bootstrap';
        $this->addFile('css', ['seznammapc']);
        $this->addFile('js', ['seznammap']);
        parent::init();
    }

}
