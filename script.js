setLoadOverlayAnimation();
window.addEventListener('load', main);

function main() {
    hideLoadOverLay();
    bindSectionSelectors();
}

function setLoadOverlayAnimation() {
    const element = document.getElementById('load-overlay-text');
    const text = 'Loading...';
    let i = 0;
    const loadOverlayInterval = setInterval(function () {
        element.textContent = text.substr(0, i + 1);
        i = (i + 1) % text.length;
    }, 2000 / text.length);
    setTimeout(function () {
        clearInterval(loadOverlayInterval);
    }, 1000);
}

function hideLoadOverLay() {
    const loadOverlay = document.getElementById('load-overlay');
    loadOverlay.classList.add('hide');
}

function openStartOverlay() {
    document.getElementById('start-overlay').classList.add('open');
}

function bindSectionSelectors() {
    document.querySelectorAll('.section-selector span').forEach(span => {
        span.addEventListener('click', () => {
            document.querySelector('.sections #' + span.dataset.open).classList.remove('hide'); 
        });
    });
}