export class Page {
    #text;
    #menus;
    #inputs;

    constructor(text, menus, inputs) {
        this.#text = text;
        this.#menus = menus;
        this.#inputs = inputs;
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
}
