const fullscreenContainer = document.getElementById('fullscreen-container');
        const fullscreenImage = document.getElementById('fullscreen-image');
        const fullscreenTriggers = document.querySelectorAll('.fullscreen-trigger');

        fullscreenTriggers.forEach(trigger => {
            trigger.addEventListener('click', function () {
                openFullscreen(this.getAttribute('data-src'));
            });
        });

        function openFullscreen(imageSrc) {
            fullscreenContainer.style.display = 'flex';
            fullscreenImage.src = imageSrc;
            document.documentElement.style.overflow = 'hidden';  // Disable scrolling when in fullscreen
        }

        function closeFullscreen() {
            fullscreenContainer.style.display = 'none';
            document.documentElement.style.overflow = 'auto';  // Enable scrolling when exiting fullscreen
        }