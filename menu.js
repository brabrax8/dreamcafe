const galleryContainer = document.querySelector(".gallery");
const galleryControlsContainer = document.querySelector(".gallery-controls");
const galleryControls = ['previous', 'next'];
const galleryItem = document.querySelectorAll(".gallery-item");

class Carousel {
    constructor(container, items, controls) {
        this.carouselContainer = container;
        this.carouselControls = controls;
        this.carouselArray = [...items];
    }
    updateGallery() {
        this.carouselArray.forEach(el => {
            el.classList.remove('gallery-item-1');
            el.classList.remove('gallery-item-2');
            el.classList.remove('gallery-item-3');
            el.classList.remove('gallery-item-4');
            el.classList.remove('gallery-item-5');
        });
        this.carouselArray.slice(0, 5).forEach((el, i) => {
            el.classList.add(`gallery-item-${i + 1}`);
        });
    }
    setCurrentState(direction) {
        if (direction === 'previous') {
            this.carouselArray.unshift(this.carouselArray.pop());
        } else {
            this.carouselArray.push(this.carouselArray.shift());
        }
        this.updateGallery();
    }
    setControls() {
        this.carouselControls.forEach(control => {
            const button = document.createElement('button');
            button.className = `gallery-control-${control}`;
            button.innerText = control; 
            galleryControlsContainer.appendChild(button);
        });
    }
    useControls() {
        const triggers = document.querySelectorAll('.gallery-controls button');
        triggers.forEach(control => {
            triggers.forEach(() => {
                this.setCurrentState('next'); 
            });
            control.addEventListener('click', e => {
                e.preventDefault();
                this.setCurrentState(control.innerText.toLowerCase()); 
            });
        });
    }
}

const exampleCarousel = new Carousel(galleryContainer, galleryItem, galleryControls);

exampleCarousel.setControls(); 
exampleCarousel.useControls(); 
