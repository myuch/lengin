import './general';
import './header';

// TEMPLATE PARTS
import '../../gutenberg-blocks/block-why-choosing/src/why-choosing';
import '../../gutenberg-blocks/block-core-services/src/core-services';
import '../../gutenberg-blocks/block-js-choose/src/js-choose';
import '../../gutenberg-blocks/block-success-stories/src/success-stories';
import '../../gutenberg-blocks/block-testimonials-home/src/testimonials-home';
import '../../gutenberg-blocks/block-faq/src/faq';
import '../../gutenberg-blocks/block-contact/src/contact';
import '../../gutenberg-blocks/block-agile-development/src/agile-development';
import '../../gutenberg-blocks/block-partner/src/partner';
import '../../gutenberg-blocks/block-achieving-success/src/achieving-success';
import '../../gutenberg-blocks/block-specific-advantages/src/specific-advantages';
import '../../gutenberg-blocks/block-recent-projects/src/recent-projects';
import '../../gutenberg-blocks/block-team/src/team';
import '../../gutenberg-blocks/block-portfolio/src/portfolio';
import '../../gutenberg-blocks/block-last-projects/src/last-projects';
import '../../gutenberg-blocks/block-client-testimonial/src/block-client-testimonial';

let interactionOccurred = false;

function loadEnqueuedScript() {
    let script = document.createElement('script');
    script.src = '/wp-content/themes/lengin/src/js/tag-manager.js';
    document.body.appendChild(script);

}

// Detect mousemove event
document.addEventListener('mousemove', () => {
    if (!interactionOccurred) {
        interactionOccurred = true;
        loadEnqueuedScript();
    }
});

// Detect scroll event
document.addEventListener('scroll', () => {
    if (!interactionOccurred) {
        interactionOccurred = true;
        loadEnqueuedScript();
    }
});

