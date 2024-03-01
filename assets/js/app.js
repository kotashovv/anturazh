document.addEventListener('DOMContentLoaded', ()=>{
    const heroSlider = new Swiper('.hero__slider', {
        spaceBetween: 15,
    })

    const catSlider = new Swiper('.slider-catalog__slider', {
        spaceBetween: 15,
        breakpoints: {
            1: {
                slidesPerView: 1.5,
            },
            440: {
                slidesPerView: 2.5,
            },
            740: {
                slidesPerView: 3.5,
            },
            1024: {
                slidesPerView: 5,
            },
            1200: {
                slidesPerView: 6,
            },
        }
    })

    const partsSlider = new Swiper('.partners__slider', {
        spaceBetween: 15,
        breakpoints: {
            1: {
                slidesPerView: 3,
            },
            740: {
                slidesPerView: 5,
            },
            1024: {
                slidesPerView: 6,
            },
            1200: {
                slidesPerView: 7,
            },
        }
    })

    const articles = new Swiper('.articles__slider', {
        slidesPerView: 3,
        spaceBetween: 15,
        breakpoints: {
            0: {
                slidesPerView: 1.5,
            },
            620: {
                slidesPerView: 2.5,
            },
            920: {
                slidesPerView: 3,
            }
        }
    })


    const factoryBtn = document.querySelectorAll('.factory__btn');

    if (factoryBtn.length != 0) {
        factoryBtn.forEach(item=>{
            item.addEventListener('click', ()=>{
                const currentText = item.nextElementSibling;
                if (item.classList.contains('active')) {
                    item.classList.remove('active')
                    CloseAccord(currentText);
                } else {
                    item.classList.add('active');
                    OpenAccord(currentText);
                }
            })
        })

        function CloseAccord(item) {
            item.classList.remove('active')
            item.style.maxHeight = 0;
        }

        function OpenAccord(item) {
            item.classList.add('active');
            item.style.maxHeight = item.scrollHeight + 'px';
        }
    }
})