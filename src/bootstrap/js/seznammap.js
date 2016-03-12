/**
 * @author Marek Braun <marra.braun@gmail.com>
 * @package braunmar/yii2-seznammap
 * @see https://github.com/braunmar/yii2-seznammap
 */
(function () {
    $.fn.seznamMap = function () {
        
        return this.each(function () {
            var $this = $(this);
            var $iconClose = $this.find('[data-id="smap-i-close"]');
            var $iconOpen = $this.find('[data-id="smap-i-open"]');
            
            $this.on('click', function() {
                if (!$this.hasClass('active')) {
                    $this.addClass('active');
                    $iconClose.addClass('active');
                    $iconOpen.removeClass('active');
                } else {
                    $this.removeClass('active');
                    $iconClose.removeClass('active');
                    $iconOpen.addClass('active');
                }
            });
        });
    };
})(jQuery);