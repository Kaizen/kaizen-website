export default class MainMenu {

    constructor(options) {
        this.el = document.querySelector('.main-menu');
        this.headerMenu = document.querySelector('.header-menu');
        this.menuToggle = document.querySelector('.menu-toggle');
        this.layoutWrapper = document.querySelector('.layout-wrapper');
        this.layoutContainer = document.querySelector('.layout-container');
        this.mainMenu = this.headerMenu.querySelector('ul.main-menu-list');
        this.menuToggle.addEventListener('click', this.onMenuToggle.bind(this));
        this.translateX = 0;

        this.closeMenu = this.closeMenu.bind(this);
        this.onScroll = this.onScroll.bind(this);
        this.addCount();

        document.addEventListener('scroll', this.onScroll);
    }

    addCount() {
        const items = this.mainMenu.querySelectorAll('[data-count]');
        items.forEach((item) => {
            item.innerHTML = item.innerHTML + '<span class="main-menu__count text--super">' + item.dataset['count'] +'</span>';
        })
    }

    onMenuToggle() {
        document.querySelector('html').classList.toggle('menu-expanded');

        var isExpanded = document.querySelector('html').classList.contains('menu-expanded');

        if(isExpanded) {
            document.querySelector('#page.main-content').addEventListener('click', this.closeMenu);
            this.translateX = -this.el.clientWidth;
            this.update();
        } else {
            this.closeMenu();
        }
    }

    onScroll(event) {
        this.update();
    }

    closeMenu(event) {

        if(event) {
            event.preventDefault();
        }

        document.querySelector('html').classList.remove('menu-expanded');
        this.translateX = 0;
        this.update();
        document.querySelector('#page.main-content').removeEventListener('click', this.closeMenu);
    }

    update() {
        this.layoutWrapper.style.transform = 'translateX(' + this.translateX + 'px)';
        this.el.style.transform = 'translate(100%, ' + window.scrollY + 'px)';
    }

}