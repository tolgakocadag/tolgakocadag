/**
 * Created by Dell on 31/10/2017.
 */
//=================grid 2 columns 2==============
$(document).ready(function () {
    "use strict";
    $('.grid').masonry({
        itemSelector: '.grid-item',
        columnWidth: 200
    });
    "use strict";
    var grid = document.querySelector('.grid');
    var msnry = new Masonry( grid, {
        itemSelector: '.grid-item',
        columnWidth: 200
    });
    var msnry = new Masonry( '.grid', {
    });
});