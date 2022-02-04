import ViewMap from './views/ViewMap';

import MainMenu from './views/MainMenu';
import LazyImage from './views/LazyImage';

export default class Application {

    constructor() {
        this.views = new ViewMap(this);
        this.mainMenu = new MainMenu();

        this.views.map('img[loading="lazy"]', LazyImage);

        this.views.build();
    }
}