/**
 * menu.js
 *
 * Handles mobile clicks on menu
 */
( function() {
  'use strict';

  var fixedBackground = function () {
    $( 'body' ).css( {
      'max-height' : '100%',
      'overflow' : 'hidden'
    } );
  };

  var scrollBackground = function () {
    $( 'body' ).css( {
      'max-height' : 'auto',
      'overflow' : 'auto'
    } );
  }

  var navSelector = 'nav#site-navigation';

  $( navSelector ).click( function () {
    // Open up the navigation
    $( this ).addClass( 'hover' );

    $( this ).find( '.content' ).css( {
      display: 'block'
    } );

    fixedBackground();
  } ).hover( function () {
    // ========
    // Hover In
    // ========
    fixedBackground();
  }, function () {
    // =========
    // Hover Out
    // =========
    scrollBackground();
  } )
  $( document ).on( {
    'touchend, mouseup' : function ( e ) {
      var container = $( navSelector );

      if ( ! container.is( e.target )
          && container.has( e.target ).length === 0) {
        scrollBackground();

        // Close the navigation
        container.removeClass( 'hover' );

        container.find( '.content' ).css( {
          display: 'none'
        } );
      }
    }
  } );
} )();