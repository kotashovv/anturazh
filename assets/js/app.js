document.addEventListener('DOMContentLoaded', () => {

    const heroSlider = new Swiper('.hero__slider', {
        // modules: [SwiperGL],
        effect: 'fade',
        // gl: {
        //     shader: 'wind',
        //   },
        autoplay: {
            delay: 3000,
        },
        // shuttersEffect: {
        //     split: 4,
        // },
        speed: 900,
        parallax: true,
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
        },

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
        factoryBtn.forEach(item => {
            item.addEventListener('click', () => {
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

    const mobileMenubtn = document.querySelector('.burger-btn');
    const closeMenu = document.querySelector('.close-menu');
    let mobileMenu;

    if (closeMenu) {
        closeMenu.addEventListener('click', CloseMobileMenu);
    }

    if (mobileMenubtn) {
        mobileMenubtn.addEventListener('click', toggleMobileMenu);
    }

    function toggleMobileMenu() {
        mobileMenu = document.querySelector('.mobile__menu');
        if (mobileMenu.classList.contains('active')) {
            CloseMobileMenu();
            
        } else {
            OpenMobileMenu(mobileMenu);
            document.addEventListener('click', clickOutsideHandler);
            document.addEventListener('keydown', function(event) {
                if (event.key === "Escape") {
                    CloseMobileMenu();
                }
            });
        }
    }

    function clickOutsideHandler(event) {
        if (!mobileMenu.contains(event.target) && event.target !== mobileMenubtn) {
            CloseMobileMenu();
            document.removeEventListener('click', clickOutsideHandler);
        }
    }

    function CloseMobileMenu() {
        mobileMenu.classList.remove('active');
        BlackModal('off');
        document.body.style.overflow = 'auto';
    }

    function OpenMobileMenu(menu) {
        menu.classList.add('active');
        BlackModal('on');
        document.body.style.overflow = 'hidden';
    }

    function BlackModal(target) {
        const blackModal = document.querySelector('.black_modal');
        if (target == 'on') {
            blackModal.classList.add('active');
        } else {
            blackModal.classList.remove('active');
        }
        
    }


    const categoryBtn = document.querySelector('.btn-category-show');

    if (categoryBtn) {
        const categoryListWrap = document.querySelector('.catalog__category-lists');
        categoryBtn.addEventListener('click', (e)=>{
            const target = e.target;
            if (target.classList.contains('active')) {
                target.classList.remove('active');
                target.innerHTML = 'Показать категории';
                CloseCategoryList();
            } else {
                target.classList.add('active');
                OpenCategoryList();
                target.innerHTML = 'Скрыть категории';
            }
        })
        
        function OpenCategoryList() {
            categoryListWrap.classList.add('active');
        }
        function CloseCategoryList() {
            categoryListWrap.classList.remove('active');
        }
    }

    const productSliderPreview = new Swiper('.product-page__slider-preview', {
        slidesPerView: 3,
        spaceBetween: 15,
        navigation: {
            prevEl: '.slider-preview-up',
            nextEl: '.slider-preview-down',
        },
        breakpoints: {
            1: {
                direction: 'horizontal',

            }, 
            560: {
                direction: 'vertical',
            }
        }

    })
    const productSlider = new Swiper('.product-page__slider-product', {
        slidesPerView: 1,
        spaceBetween: 15,
        thumbs: {
            swiper: productSliderPreview
          }
    })


    // логика раскрытия текст в продукте

    const showMoreTextProduct = document.querySelector('.product-page__btn-show-more');

    if (showMoreTextProduct) {
        const hiddenText = document.querySelector('.product-page__desc');

        showMoreTextProduct.addEventListener('click', (e)=>{
            let target = e.target;
            if (target.classList.contains('active')) {
                CloseText();
                target.classList.remove('active');
                e.target.innerHTML = 'Показать больше';

            } else {
                OpenText();
                target.classList.add('active');
                e.target.innerHTML = 'Скрыть';
            }
        })

        function CloseText() {
            hiddenText.classList.remove('active');
        } 

        function OpenText() {
            hiddenText.classList.add('active');

        }
    }
    
})