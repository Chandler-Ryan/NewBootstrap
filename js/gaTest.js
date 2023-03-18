var $ = jQuery.noConflict();
$('nav a').not('.dropdown-toggle').on('click',function(e){

    // e.preventDefault();

    var gtm = 
        {
            hitType : 'event',
            eventCategory : 'Main Nav Clicks',
            eventAction : $.trim($('title').html()),
            eventLabel : $.trim($(this).text())
        };
    
    ga( 'create', 'UA-158604545-1', 'auto', 'track');
    ga( 'track.send', gtm );
    console.log(gtm);
});