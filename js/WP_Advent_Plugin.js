(function () {
    var lightboxDescription = [];

    // Um zu verhindern, dass die Lightbox eine Slideshow hat, initialisieren wir sie einfach 24 Mal einzeln :(
    // Nächstes Jahr brauchen wir dann eine Neue. Was für ein Mist.
    for (var i = 0; i <= 23; i++) {
        lightboxDescription[i] = GLightbox({
            selector: 'js-calendar-sheet-' + i
        });
    }
})();
