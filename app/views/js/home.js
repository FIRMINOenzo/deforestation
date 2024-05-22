import { lang } from "../../constants/lang.js";
import { Page } from "./page.js";
import { Events } from "../../utils/Event.js";
import { Language } from "../../utils/Language.js";

class Home extends Page {
    constructor(text, menus, inputs) {
        super(text, menus, inputs);
    }

    async init() {
        Object.keys(lang).map((v) => {
            this.menus.dropDownMenu.innerHTML += `
            <a class="dropdown-item" href="#">${
                v[0].toUpperCase() + v.slice(1)
            }</a>`;
        });

        this.menus.dropDownMenuItes = [
            ...document.querySelectorAll(".dropdown-item"),
        ];

        for (const el of this.menus.dropDownMenuItes) {
            Events.setEvents("click", el, () => {
                Language.setLanguage(
                    this,
                    lang[el.innerHTML.toLowerCase()].home ?? lang.pt.home
                );
            });
        }
    }
}

const homeAttributes = {
    text: {
        title: document.querySelector("#title"),
        home: document.querySelector("#home-link"),
        about: document.querySelector("#about-link"),
        authors: document.querySelector("#authors-link"),
        footerCopy: document.querySelector("#footer-copy"),
    },
    menus: {
        dropDownMenu: document.querySelector("#dropDown"),
        dropDownTitle: document.querySelector("#dropdownMenuLink"),
        dropDownMenuItes: document.querySelectorAll(".dropdown-item"),
    },
    inputs: {
        searchInput: document.querySelector("#search"),
    },
};

const home = new Home(
    homeAttributes.text,
    homeAttributes.menus,
    homeAttributes.inputs
);

home.init();
