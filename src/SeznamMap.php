<?php

/**
 * @link https://github.com/braunmar/yii2-seznammap
 * @copyright Copyright (c) 2016 Marek Braun <marra.braun@gmail.com>
 * @license https://github.com/braunmar/yii2-seznammap/blob/master/LICENSE
 */

namespace common\components\braunma\seznammap;

use yii\base\Widget;
use yii\web\View;
use yii\helpers\Html;

/**
 * Seznam map widget
 * 
 * @author Marek Braun <marra.braun@gmail.com>
 * @package braunmar/yii2-seznammap
 * @see https://github.com/braunmar/yii2-seznammap
 */
class SeznamMap extends Widget
{       
    /**
     * Loader script
     * @var string
     */
    public $scriptApi = '//api.mapy.cz/loader.js';
    
    /**
     * Script which run on document ready
     * @var string
     */
    public $scriptLoad = 'Loader.load();';
    
    /**
     * HTML tag options
     * @var array
     */
    public $options = [];
    
    /**
     * Use cover (overlay with arrow) which react on click and slide down
     * @var boolean 
     */
    public $cover = true;
    
    /**
     * Icon class on open (slide down) cover. It used only if cover set to true
     * @var string
     */
    public $iconOpen = 'fa fa-angle-down';
    
    /**
     * Icon class on close (slide up) cover. It used only if cover set to true
     * @var string 
     */
    public $iconClose = 'fa fa-angle-up';
    
    /**
     * Run widget
     * @return mixed
     */
    public function run()
    {
        $this->registerJs();
        
        $map = Html::tag('div', '', array_replace(['id' => 'map'], $this->options));
        
        $icons = [Html::tag('i', '', ['class' => 'active ' . $this->iconOpen, 'data-id' => 'smap-i-open']), Html::tag('i', '', ['class' => $this->iconClose, 'data-id' => 'smap-i-close'])];
        
        $cover = Html::tag('div', Html::tag('div', implode("\n", $icons), ['class' => 'smap-cover-icon']), ['class' => 'smap-cover']);
     
        $content = $this->cover ? implode("\n", [$map, $cover]) : $map;
        
        $outer = Html::tag('div', $content, ['id' => $this->id, 'class' => 'map-container']);
        
        return $outer; 
    }
    
    /**
     * Register JavaScript files
     */
    private function registerJs()
    {
        $this->view->registerJsFile($this->scriptApi,  ['position' => View::POS_HEAD]);
        $this->view->registerJs($this->scriptLoad, View::POS_HEAD);
        
        if ($this->cover) {
            SeznamMapCoverAsset::register($this->view);
            $this->view->registerJs("$('#{$this->id} .smap-cover').seznamMap();");
        } else {
            SeznamMapAsset::register($this->view);
        }
    }
}
