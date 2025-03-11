    $(document).ready(function() {
        // Limit the text to 20 words by default
        $('.short-text').each(function() {
            var text = $(this).text();
            var words = text.split(' ');
            if (words.length > 20) {
                var shortText = words.slice(0, 20).join(' ') + '...';
                $(this).data('full-text', text); // Store the full text
                $(this).text(shortText); // Show only the short text
            }
        });
    });

    function toggleText(id) {
        var paragraph = $('#' + id);
        var fullText = paragraph.data('full-text');
        if (paragraph.text().endsWith('...')) {
            paragraph.text(fullText); // Show full text
            $(event.target).text('Read Less'); // Change button text
        } else {
            var shortText = fullText.split(' ').slice(0, 20).join(' ') + '...';
            paragraph.text(shortText); // Show short text
            $(event.target).text('Read More'); // Change button text
        }
    }
