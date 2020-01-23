
jQuery(function($) {

    var switcherHtml = [];
    var colorName = [ 'default', 'yellow', 'red', 'orange', 'olive', 'violet', 'pink', 'navy' ];

    switcherHtml.push( '<div class="cbx-switcher-area">' );
    switcherHtml.push( '<div class="cbx-switcher-inner">' );
    switcherHtml.push( '<a id="cbx-switcher-btn" class="cbx-switcher-btn" href="#"><span class="fa fa-cog fa-spin" aria-hidden="true"></span></a>' );
    switcherHtml.push( '<div id="cbx-switcher-body" class="cbx-switcher-body cbx-hide">' );
    switcherHtml.push( '<p class="cbx-switcher-text" > Style Switcher</p>' );
    switcherHtml.push( '<ul class="list-unstyled clearfix cbx-switcher-list">' );

    $.each( colorName, function (index, value) {
        switcherHtml.push( '<li class="cbx-list-' + value + '"><a title="Color '+value+'" href="#"  class="cbx-switcher-clr-btn" data-color-name="-' + value + '"></a></li>' );
    });
    switcherHtml.push( '</ul>' );

    switcherHtml.push( '</div></div></div>' );




    $.fn.SwitcherLoader = function() {
        var $this = $( this );
        $this.html( switcherHtml.join( '' ) );

        /*LZ Switcher */

        var showSwitcher = true;
        $this.find("#cbx-switcher-btn").on('click', function(evt){
            evt.preventDefault();

            if ( showSwitcher ) {
                $("#cbx-switcher-body").animate({
                    right: 0
                }, 500);
                showSwitcher = !showSwitcher;
            } else {
                $("#cbx-switcher-body").animate({
                    right: -280
                }, 500);
                showSwitcher = !showSwitcher;
            }

        });

        //lz-theme-style
        $( 'a.cbx-switcher-clr-btn').on( 'click', function (e) {
            e.preventDefault();

            var $this = $( this );



            var styleLinker = $( '#cbx-style' );  // stylesheet id

            styleLinker.attr( 'href', 'assets/css/style' + $this.data( 'color-name' ) + '.min.css?v=2' );

        });

        /*LZ Switcher  */
    }


});


//initialize the switcher
jQuery(document).ready(function($){

    //add the switcher holder div
    $(document.body).append('<div class="switcher-loader"></div>');


    //Load Style Switcher
    if( $( '.switcher-loader').length ) {
        $( '.switcher-loader').SwitcherLoader();
    }
});