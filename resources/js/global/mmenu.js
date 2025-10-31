import 'mmenu-js/dist/mmenu.css';
import Mmenu from 'mmenu-js';

export const initMmenu = () => {

        const menu = new Mmenu("#menu", {
            navbar: {
                add: true,
                title: "title",
            },
            slidingSubmenus: false,
            offCanvas: {
                position: "left"
            },
            theme: "light",
            extensions: ["position-left", "position-front", "pagedim-black"],
            sidebar: {
                collapsed: {
                    use: false
                },
                expanded: {
                    use: "(min-width: 992px)"
                }
            }
        });

        // Get the API
        const api = menu.API;

        // Log when menu opens/closes for debugging
        api.bind("open:start", () => console.log("Menu opening"));
        api.bind("close:start", () => console.log("Menu closing"));
}
