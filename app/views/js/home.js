import { lang } from "../../constants/lang.js";
import { Events } from "../../utils/Event.js";
import { LocalStorage } from "../../utils/LocalStorage.js";

class Home {
    #text = {
        title: document.querySelector("#title"),
        home: document.querySelector("#home-link"),
        about: document.querySelector("#about-link"),
        authors: document.querySelector("#authors-link"),
        footerCopy: document.querySelector("#footer-copy"),
    };
    #menus = {
        dropDownMenu: document.querySelector("#dropDown"),
        dropDownTitle: document.querySelector("#dropdownMenuLink"),
        dropDownMenuItes: document.querySelectorAll(".dropdown-item"),
    };
    #inputs = {
        searchInput: document.querySelector("#search"),
    };

    async init() {
        Object.keys(lang).map((v) => {
            this.#menus.dropDownMenu.innerHTML += `<a class="dropdown-item" href="#">${
                v[0].toUpperCase() + v.slice(1)
            }</a>`;
        });

        this.#menus.dropDownMenuItes = [
            ...document.querySelectorAll(".dropdown-item"),
        ];

        for (const el of this.#menus.dropDownMenuItes) {
            Events.setEvents("click", el, () => {
                this.#setLanguage(
                    lang[el.innerHTML.toLocaleLowerCase()] ?? lang.pt
                );
            });
        }

        this.#setLanguage();
    }

    #getLanguage() {
        const langToUse = lang[navigator.language.slice(0, 2)];

        return langToUse;
    }

    #setLanguage(language) {
        const lang = language ?? this.#getLanguage();

        for (const key in lang.text) {
            if (key in lang.text) {
                this.text[key].innerHTML = lang.text[key];
            }
        }

        for (const key in lang.inputs) {
            if (key in lang.inputs) {
                this.inputs[key].placeholder = lang.inputs[key];
            }
        }

        for (const key in lang.menus) {
            if (key in this.#menus) {
                this.#menus[key].innerHTML = lang.menus[key];
            }
        }
    }

    get text() {
        return this.#text;
    }

    get inputs() {
        return this.#inputs;
    }
}

const home = new Home();

home.init();
