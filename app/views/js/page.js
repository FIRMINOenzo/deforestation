export class Page {
    #text;
    #menus;
    #inputs;
    #buttons;

    constructor(text, menus, inputs, buttons) {
        this.#text = text;
        this.#menus = menus;
        this.#inputs = inputs;
        this.#buttons = buttons;
    }

    init() {}

    get text() {
        return this.#text;
    }

    get inputs() {
        return this.#inputs;
    }

    get menus() {
        return this.#menus;
    }

    get buttons() {
        return this.#buttons;
    }
}
