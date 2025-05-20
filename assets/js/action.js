document.addEventListener('DOMContentLoaded', function () {
    // すべての言語ボタンセットを取得
    const langButtonSets = document.querySelectorAll('.LANG-BUTTON .buttons');

    // 言語ボタンセットごとに処理を行う
    langButtonSets.forEach(function(buttonSet) {
        const langButtons = buttonSet.querySelectorAll('.button');

        langButtons.forEach(function(button) {
            button.addEventListener('click', function () {
                const lang = button.getAttribute('data-lang');
                setLanguage(lang, langButtonSets);
            });
        });
    });

    function setLanguage(selectedLang, langButtonSets) {
        const langElements = {
            jp: document.querySelectorAll('.lang-ja'),
            en: document.querySelectorAll('.lang-en'),
            ch: document.querySelectorAll('.lang-cn')
        };

        const langElementsFlex = {
            jp: document.querySelectorAll('.flexlang-ja'),
            en: document.querySelectorAll('.flexlang-en'),
            ch: document.querySelectorAll('.flexlang-cn')
        };

        // 選択された言語のみを表示
        Object.keys(langElements).forEach(function(key) {
            langElements[key].forEach(function(element) {
                element.style.display = key === selectedLang ? 'block' : 'none';
            });
        });

        // 選択された言語のみを表示
        Object.keys(langElementsFlex).forEach(function(key) {
            langElementsFlex[key].forEach(function(element) {
                element.style.display = key === selectedLang ? 'flex' : 'none';
            });
        });

        // すべてのボタンセットでクラスを切り替え
        langButtonSets.forEach(function(buttonSet) {
            const langButtons = buttonSet.querySelectorAll('.button');
            langButtons.forEach(function(button) {
                if (button.getAttribute('data-lang') === selectedLang) {
                    button.classList.add('active');
                } else {
                    button.classList.remove('active');
                }
            });
        });

        // 現在の言語設定を取得
        const currentLanguage = localStorage.getItem('preferredLanguage');

        // 言語が変更された場合、リロードする
        if (currentLanguage !== selectedLang) {
            localStorage.setItem('preferredLanguage', selectedLang);
            location.reload(); // ページをリロード
        }
    }

    // 保存された言語を取得して設定
    const savedLanguage = localStorage.getItem('preferredLanguage') || 'jp';
    setLanguage(savedLanguage, langButtonSets);
});

document.addEventListener('DOMContentLoaded', function () {
    const navButton = document.querySelector('.nav-button');
    const navBox = document.querySelector('.header');

    navButton.addEventListener('click', function () {
        navButton.classList.toggle('active');
        navBox.classList.toggle('active');
    });
});

document.addEventListener('DOMContentLoaded', function() {
    // 全てのinqueryQ要素を取得
    var inqueryQs = document.querySelectorAll('.inqueryQ');

    inqueryQs.forEach(function(inqueryQ) {
        inqueryQ.addEventListener('click', function() {
            // 全てのinqueryQとinqueryAからopenクラスを削除
            inqueryQs.forEach(function(otherQ) {
                otherQ.classList.remove('open');
                var otherA = otherQ.nextElementSibling;
                if (otherA && otherA.classList.contains('inqueryA')) {
                    otherA.classList.remove('open');
                }
            });

            // クリックされたinqueryQにopenクラスを追加
            inqueryQ.classList.add('open');
            // 兄弟要素であるinqueryAにopenクラスを追加
            var inqueryA = this.nextElementSibling;
            if (inqueryA && inqueryA.classList.contains('inqueryA')) {
                inqueryA.classList.add('open');
            }
        });
    });
});
