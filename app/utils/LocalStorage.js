/**
 * @name LocalStorage represents the localstorage
 */
export class LocalStorage {
    static save(key, payload) {
        localStorage.setItem(key, JSON.stringify(payload));
    }

    static get(key) {
        const data = localStorage.getItem(key);

        return JSON.parse(data);
    }
}
