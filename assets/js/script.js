
//Mobile - show navigation on burger click and slider
if (window.matchMedia("(max-width: 1024px)").matches) {
    let burger = document.querySelector(".burger")
    let navMobile = document.querySelector(".nav-mobile-modal")
    burger.onclick = function () {
        navMobile.classList.toggle("nav-mobile-active");
        burger.classList.toggle("open");
        document.querySelector('body').classList.toggle("overflow-hidden");
    }
}

const images = document.querySelectorAll('.slide');
const navigation = document.querySelector('.navigation');
images.forEach((_, index) => {
    if (index % 5 == 0) {
        const dot = document.createElement('div');
        dot.classList.add('dot');
        if(index == 0) {
            dot.classList.add('active')
        }
        dot.addEventListener('click', () => navigateSlider(index, 'dot'));
        navigation.appendChild(dot);
    }
    });

let currentIndex = 0;

updateNavigation(); // Set initial state

function navigateSlider(direction, clickType) {
    const slider = document.querySelector('.slider');
    if(clickType == 'dot') {
        currentIndex = 0;
    }
    console.log(clickType)

    currentIndex += direction;

    // Check boundaries
    if (currentIndex < 0) {
        currentIndex = 0;
    } else if (currentIndex >= images.length) {
        currentIndex = images.length - 5;
    }

    updateSliderTransform();
    updateNavigation();
    
    function updateSliderTransform() {
    const translateValue = -currentIndex * (100 / 5) + '%';
    slider.style.transform = `translateX(${translateValue})`;
}

function updateNavigation() {
    const dots = document.querySelectorAll('.dot');
    const activeDotIndex = Math.floor(currentIndex / 5);
    dots.forEach((dot, index) => {
        dot.classList.toggle('active', index === activeDotIndex);
    });
}
}

function navigateSliderMobile(direction, clickType) {
    const slider = document.querySelector('.slider');
    if(clickType == 'dot') {
        currentIndex = 0;
    }
    console.log(clickType)

    currentIndex += direction;

    // Check boundaries
    if (currentIndex < 0) {
        currentIndex = 0;
    } else if (currentIndex >= images.length) {
        currentIndex = images.length - 1;
    }

    const translateValue = -currentIndex * (100 / 1) + '%';
    slider.style.transform = `translateX(${translateValue})`;

    const dots = document.querySelectorAll('.dot');
    dots.forEach((dot, index) => {
        dot.classList.toggle('active', index === currentIndex);
    });
}
