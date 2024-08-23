<?php
function stt_scroll_to_top_layout(): string
{
    return'<a id="back2Top" class="top-scroll" title="Back to top" href="#""><span>&#8593</span></a>';
}
add_shortcode('scroll-to-top','stt_scroll_to_top_layout');