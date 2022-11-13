This is the right window
</section>
</div>
</div>

<footer id="site-footer">
    <span>wpcms.dev</span>
</footer>

<?php wp_footer(); ?>


<script>
    const navigation = document.getElementById('navigation');
    const editor = document.getElementById('editor');
    const handle = document.getElementById('handle');
    const lineNumbers = document.getElementById('line-numbers');

    document.addEventListener("DOMContentLoaded", function (event) {
        handle.addEventListener('mousedown', setup, false);

        // Setup the line numbers container height
        lineNumbers.style.height = editor.scrollHeight + 'px';

        // Calculate how many line numbers we want and append them to the DOM
        const totalNumbers = (editor.scrollHeight - 200) / 35;
        Array.from({length: totalNumbers}, () => {
            lineNumbers.appendChild(document.createElement("i"));
        });
    });

    let StartX, navigationStartWidth, contentStartWidth;

    function setup(event) {
        StartX = event.clientX;
        contentStartWidth = parseInt(window.getComputedStyle(navigation).width, 10);
        document.documentElement.addEventListener('mousemove', drag, false);
        document.documentElement.addEventListener('mouseup', destroy, false);
    }

    function drag(event) {
        // Don't allow going under 280px or over 45% viewport width
        if (event.clientX > 280 && event.clientX < window.innerWidth * 0.45) {
            navigation.style.flexBasis = event.clientX + 'px';
        }
    }

    function destroy(e) {
        document.documentElement.removeEventListener('mousemove', drag, false);
        document.documentElement.removeEventListener('mouseup', destroy, false);
    }
</script>

</body>
</html>