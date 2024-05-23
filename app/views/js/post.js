import { Events } from "../../utils/Event.js";
import { LocalStorage } from "../../utils/LocalStorage.js";
import { Page } from "./page.js";
import { Language } from "../../utils/Language.js";
import { lang } from "../../constants/lang.js";

class Post extends Page {
    constructor({ text, menus, inputs, buttons }) {
        super(text, menus, inputs, buttons);
    }

    init() {
        const submitButton = document.querySelector("#submitComment");

        console.log(this.menus);

        Events.setEvents("click", submitButton, this.writeComment);

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
                    lang[el.innerHTML.toLowerCase()].post ?? lang.pt.post
                );
            });
        }
    }

    writeComment() {
        const token = LocalStorage.get("auth");

        if (!token) {
            const myModal = new bootstrap.Modal(
                document.getElementById("contactModal")
            );

            myModal.show();
        }
    }
}

const postAttributes = {
    text: {
        title: document.querySelector("#title"),
        home: document.querySelector("#home-link"),
        authors: document.querySelector("#authors-link"),
        footerCopy: document.querySelector("#footer-copy"),
        commentSection: document.querySelector(".card-body > h5"),
        commentHeader: document.querySelector("#commentForm > h5"),
        comentNameField: document.querySelector('label[for="commentName"]'),
        comentCommentField: document.querySelector('label[for="commentText"]'),
    },
    menus: {
        dropDownMenu: document.querySelector("#dropDown"),
        dropDownTitle: document.querySelector("#dropdownMenuLink"),
        dropDownMenuItes: document.querySelectorAll(".dropdown-item"),
    },
    inputs: {
        searchInput: document.querySelector("#search"),
    },

    buttons: {
        comment: document.querySelector("#submitComment"),
    },
};

const post = new Post(postAttributes);

post.init();
