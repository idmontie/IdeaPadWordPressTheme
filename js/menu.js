/**
 * menu.js
 *
 * Handles mobile clicks on menu
 */
( function() {
  'use strict';

  function getScrollBarWidth () {
    var inner = document.createElement('p');
    inner.style.width = "100%";
    inner.style.height = "200px";

    var outer = document.createElement('div');
    outer.style.position = "absolute";
    outer.style.top = "0px";
    outer.style.left = "0px";
    outer.style.visibility = "hidden";
    outer.style.width = "200px";
    outer.style.height = "150px";
    outer.style.overflow = "hidden";
    outer.appendChild (inner);

    document.body.appendChild (outer);
    var w1 = inner.offsetWidth;
    outer.style.overflow = 'scroll';
    var w2 = inner.offsetWidth;
    if (w1 == w2) w2 = outer.clientWidth;

    document.body.removeChild (outer);

    return (w1 - w2);
  };

  jQuery( function ( $ ) {
    var originalMarginRight = $( 'body' ).css( 'margin-right' );

    var fixedBackground = function () {
      $( 'body' ).css( {
        'height': '100%',
        'margin-right' : getScrollBarWidth(),
        'overflow': 'hidden'
      } );
    };

    var scrollBackground = function () {
      $( 'body' ).css( {
        'height' : 'auto',
        'margin-right' : originalMarginRight,
        'overflow' : 'auto'
      } );
    }

    var navSelector = 'nav#site-navigation';

    var hoverIn = function () {
      // ========
      // Show Nav
      // ========
      $( navSelector ).addClass( 'hover' );
      $( navSelector ).find( '.content' ).show()
      fixedBackground();
    }

    var hoverOut = function ( container ) {
      // ========
      // Hide Nav
      // ========
      container.removeClass( 'hover' );
      container.find( '.content' ).hide();
      scrollBackground();
    }

    $( navSelector ).click( function () {
      hoverIn();
    } ).hover( function () {
      hoverIn();
    }, function () {
      hoverOut( $( this ) );
    } );

    $( document ).on( {
      'touchend mouseup' : function ( e ) {
        var container = $( navSelector );

        if ( ! container.is( e.target )
            && container.has( e.target ).length === 0) {
          hoverOut( container );
        }
      }
    } );
  } );
} )();