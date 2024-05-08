import { lang } from "../../constants/lang.js";
import { LocalStorage } from "../utils/models/LocalStorage.js";

class Home {
    #text = {
        title: document.querySelector("#title"),
        home: document.querySelector("#home-link"),
        about: document.querySelector("#about-link"),
        authors: document.querySelector("#authors-link"),
        footerCopy: document.querySelector("#footer-copy"),
    };

    #inputs = {
        searchInput: document.querySelector("#search"),
    };

    init() {
        this.#setLanguage();
    }

    #getLanguage() {
        const langToUse = lang[navigator.language.slice(0, 2)];

        return langToUse;
    }

    #setLanguage() {
        const lang = this.#getLanguage();

        for (const key in lang.text) {
            this.text[key].innerHTML = lang.text[key];
        }

        for (const key in lang.inputs) {
            this.inputs[key].placeholder = lang.inputs[key];
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
