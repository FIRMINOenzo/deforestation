import { Page } from "./page.js";

class CreatePost extends Page {
    constructor(page, { text, menus, inputs, buttons }) {
        super(page, text, menus, inputs, buttons);
    }

    async init() {
        this.useLastLanguage(this.page)
        this.changeLanguage(this.page)

    }
}

const createPostAttributes = {
    text: {
        title: document.querySelector("#title"),
        home: document.querySelector("#home-link"),
        authors: document.querySelector("#authors-link"),
        header: document.querySelector("#create-post-header"),
        image: document.querySelector('label[for="image"]'),
        title: document.querySelector('label[for="title"]'),
        content: document.querySelector('label[for="content"]')
    },
    menus: {
        dropDownMenu: document.querySelector("#dropDown"),
        dropDownTitle: document.querySelector("#dropdownMenuLink"),
        dropDownMenuItes: document.querySelectorAll(".dropdown-item"),
    },
    inputs: {
        searchInput: document.querySelector("#search"),
    },

    buttons: {},
};

const createPost = new CreatePost("create",createPostAttributes);

createPost.init();
