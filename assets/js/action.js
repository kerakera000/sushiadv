document.addEventListener('DOMContentLoaded', function () {
    // nav-buttonクリック時にheaderにopenクラスを追加/削除
    const navButton = document.querySelector('.nav-button');
    const header = document.querySelector('.header');
    
    if (navButton && header) {
        navButton.addEventListener('click', function() {
            header.classList.toggle('active');
            navButton.classList.toggle('active');
        });
    }
});

document.addEventListener('DOMContentLoaded', () => {
    console.log('test')
    const swiper = new Swiper('#new-swiper', {
        slidesPerView: 1,
        spaceBetween: 30,
        //loop: true,
        effect: "fade",
        // autoplay: {
        //     delay: 4000,
        //     disableOnInteraction: false,
        // },
        pagination: {
        el: '.swiper-pagination',
        clickable: true,
        },
        navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
        },
  });
});

document.addEventListener('DOMContentLoaded', () => {
    console.log('test')
    const swiper = new Swiper('#new-swiper', {
        slidesPerView: 1,
        spaceBetween: 30,
        //loop: true,
        effect: "fade",
        // autoplay: {
        //     delay: 4000,
        //     disableOnInteraction: false,
        // },
        pagination: {
        el: '.swiper-pagination',
        clickable: true,
        },
        navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
        },
  });
});

document.addEventListener('DOMContentLoaded', () => {
    const modal = document.getElementById('customModal');
    const modalImg = document.getElementById('modalImage');
    const modalCaption = document.getElementById('modalCaption');
    const modalClose = document.getElementById('modalClose');

    document.querySelectorAll('.mdal-imgbox').forEach((imgbox) => {
        imgbox.addEventListener('click', () => {
            const img = imgbox.querySelector('img');
            modalImg.src = img.src;
            modalCaption.innerHTML = img.dataset.caption || "画像の詳細がありません";
            modal.style.display = 'flex';
        });
    });

    modalClose.addEventListener('click', () => {
        modal.style.display = 'none';
    });

    modal.querySelector('.img-modal__overlay').addEventListener('click', () => {
        modal.style.display = 'none';
    });
});
