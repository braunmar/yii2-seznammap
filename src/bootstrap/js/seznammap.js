/**
 * @author Marek Braun <marra.braun@gmail.com>
 * @package braunmar/yii2-seznammap
 * @see https://github.com/braunmar/yii2-seznammap
 */
(function () {
    $.fn.seznamMap = function (options) {
        
        return this.each(function () {
            var $this = $(this);
            var $iconClose = $this.find(options.iconClose);
            var $iconOpen = $this.find(options.iconOpen);
            
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